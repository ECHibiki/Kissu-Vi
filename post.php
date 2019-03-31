<?php
/*
 *  Copyright (c) 2010-2014 Tinyboard Development Group
 */

require_once 'inc/functions.php';
require_once 'inc/anti-bot.php';
require_once 'inc/bans.php';
require_once 'inc/image.php';
openBoard($_POST['board']);
loadConfig();
if ((!isset($_POST['mod']) || !$_POST['mod']) && $config['board_locked']) {
    error("Board is locked");
}

$dropped_post = false;

// Is it a post coming from NNTP? Let's extract it and pretend it's a normal post.
if (isset($_GET['Newsgroups']) && $config['nntpchan']['enabled']) {
	
	if ($_SERVER['REMOTE_ADDR'] != $config['nntpchan']['trusted_peer']) {
		error("NNTPChan: Forbidden. $_SERVER[REMOTE_ADDR] is not a trusted peer");
	}

	$_POST = array();
	$_POST['json_response'] = true;

	$headers = json_encode($_GET);

	if (!isset ($_GET['Message-Id'])) {
		if (!isset ($_GET['Message-ID'])) {
			error("NNTPChan: No message ID");
		}
		else $msgid = $_GET['Message-ID'];
	}
	else $msgid = $_GET['Message-Id'];

	$groups = preg_split("/,\s*/", $_GET['Newsgroups']);
	if (count($groups) != 1) {
		error("NNTPChan: Messages can go to only one newsgroup");
	}
	$group = $groups[0];

	if (!isset($config['nntpchan']['dispatch'][$group])) {
		error("NNTPChan: We don't synchronize $group");
	}
	$xboard = $config['nntpchan']['dispatch'][$group];

	$ref = null;
	if (isset ($_GET['References'])) {
		$refs = preg_split("/,\s*/", $_GET['References']);

		if (count($refs) > 1) {
			error("NNTPChan: We don't support multiple references");
		}

		$ref = $refs[0];

		$query = prepare("SELECT `board`,`id` FROM ``nntp_references`` WHERE `message_id` = :ref");
                $query->bindValue(':ref', $ref);
                $query->execute() or error(db_error($query));

		$ary = $query->fetchAll(PDO::FETCH_ASSOC);

		if (count($ary) == 0) {
			error("NNTPChan: We don't have $ref that $msgid references");
		}

		$p_id = $ary[0]['id'];
		$p_board = $ary[0]['board'];

		if ($p_board != $xboard) {
			error("NNTPChan: Cross board references not allowed. Tried to reference $p_board on $xboard");
		}

		$_POST['thread'] = $p_id;
	}

	$date = isset($_GET['Date']) ? strtotime($_GET['Date']) : time();

	list($ct) = explode('; ', $_GET['Content-Type']);

	$query = prepare("SELECT COUNT(*) AS `c` FROM ``nntp_references`` WHERE `message_id` = :msgid");
	$query->bindValue(":msgid", $msgid);
	$query->execute() or error(db_error($query));

	$a = $query->fetch(PDO::FETCH_ASSOC);
	if ($a['c'] > 0) {
		error("NNTPChan: We already have this post. Post discarded.");
	}

	if ($ct == 'text/plain') {
		$content = file_get_contents("php://input");
	}
	elseif ($ct == 'multipart/mixed' || $ct == 'multipart/form-data') {
		_syslog(LOG_INFO, "MM: Files: ".print_r($GLOBALS, true)); // Debug

		$content = '';

		$newfiles = array();
		foreach ($_FILES['attachment']['error'] as $id => $error) {
			if ($_FILES['attachment']['type'][$id] == 'text/plain') {
				$content .= file_get_contents($_FILES['attachment']['tmp_name'][$id]);
			}
			elseif ($_FILES['attachment']['type'][$id] == 'message/rfc822') { // Signed message, ignore for now
			}
			else { // A real attachment :^)
				$file = array();
				$file['name']     = $_FILES['attachment']['name'][$id];
				$file['type']     = $_FILES['attachment']['type'][$id];
				$file['size']     = $_FILES['attachment']['size'][$id];
				$file['tmp_name'] = $_FILES['attachment']['tmp_name'][$id];
				$file['error']    = $_FILES['attachment']['error'][$id];

				$newfiles["file$id"] = $file;
			}
		}

		$_FILES = $newfiles;
	}
	else {
		error("NNTPChan: Wrong mime type: $ct");
	}

	$_POST['subject'] = isset($_GET['Subject']) ? ($_GET['Subject'] == 'None' ? '' : $_GET['Subject']) : '';
	$_POST['board'] = $xboard;

	if (isset ($_GET['From'])) {
		list($name, $mail) = explode(" <", $_GET['From'], 2);
		$mail = preg_replace('/>\s+$/', '', $mail);

		$_POST['name'] = $name;
		//$_POST['email'] = $mail;
		$_POST['email'] = '';
	}

	if (isset ($_GET['X_Sage'])) {
		$_POST['email'] = 'sage';
	}

	$content = preg_replace_callback('/>>([0-9a-fA-F]{6,})/', function($id) use ($xboard) {
		$id = $id[1];

		$query = prepare("SELECT `board`,`id` FROM ``nntp_references`` WHERE `message_id_digest` LIKE :rule");
		$idx = $id . "%";
                $query->bindValue(':rule', $idx);
                $query->execute() or error(db_error($query));
		
		$ary = $query->fetchAll(PDO::FETCH_ASSOC);
		if (count($ary) == 0) {
			return ">>>>$id";
		}
		else {
			$ret = array();
			foreach ($ary as $v) {
				if ($v['board'] != $xboard) {
					$ret[] = ">>>/".$v['board']."/".$v['id'];
				}
				else {
					$ret[] = ">>".$v['id'];
				}
			}
			return implode($ret, ", ");
		}
	}, $content);

	$_POST['body'] = $content;

	$dropped_post = array(
		'date' => $date,
		'board' => $xboard,
		'msgid' => $msgid,
		'headers' => $headers,
		'from_nntp' => true,
	);
}
elseif (isset($_GET['Newsgroups'])) {
	error("NNTPChan: NNTPChan support is disabled");
}

if (isset($_POST['delete'])) {
	// Delete
	$mod = false;
	if(isset($_POST['mod']))	$mod = true;
	
	if (!isset($_POST['board'], $_POST['password']))
		error($config['error']['bot']);
	
	$password = &$_POST['password'];
	
	if ($password == '' && !$mod)
		error($config['error']['invalidpassword']);
	
	$delete = array();
	foreach ($_POST as $post => $value) {
		if (preg_match('/^delete_(\d+)$/', $post, $m)) {
			$delete[] = (int)$m[1];
		}
	}
	
	checkDNSBL();
		
	// Check if board exists
	if (!openBoard($_POST['board']))
		error($config['error']['noboard']);
	
	// Check if banned
	checkBan($board['uri']);

	// Check if deletion enabled
	if (!$config['allow_delete'])
		error(_('Post deletion is not allowed!'));
	
	if (empty($delete))
		error($config['error']['nodelete']);
		
	foreach ($delete as &$id) {
		$query = prepare(sprintf("SELECT `id`,`thread`,`time`,`password` FROM ``posts_%s`` WHERE `id` = :id", $board['uri']));
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->execute() or error(db_error($query));
		
		if ($post = $query->fetch(PDO::FETCH_ASSOC)) {
			$thread = false;
			if (!$mod && $config['user_moderation'] && $post['thread']) {
				$thread_query = prepare(sprintf("SELECT `time`,`password` FROM ``posts_%s`` WHERE `id` = :id", $board['uri']));
				$thread_query->bindValue(':id', $post['thread'], PDO::PARAM_INT);
				$thread_query->execute() or error(db_error($query));

				$thread = $thread_query->fetch(PDO::FETCH_ASSOC);	
			}

			if (!$mod && $password != '' && $post['password'] != $password && (!$thread || $thread['password'] != $password))
				error($config['error']['invalidpassword']);
			
			if (!$mod &&$post['time'] > time() - $config['delete_time'] && (!$thread || $thread['password'] != $password)) {
				error(sprintf($config['error']['delete_too_soon'], until($post['time'] + $config['delete_time'])));
			}
			
			if (isset($_POST['file'])) {
				// Delete just the file
				deleteFile($id);
				if(!$mod) modLog("User deleted file from his own post #$id");
				else modLog("Mod deleted file from post #$id");
			} else {
				// Delete entire post
				deletePostKeepOrder($id);
				if(!$mod) modLog("User deleted his own post #$id");
				else modLog("Mod deleted file from post #$id");
			}

			_syslog(LOG_INFO, 'Deleted post: ' .
				'/' . $board['dir'] . $config['dir']['res'] . link_for($post) . ($post['thread'] ? '#' . $id : '')
			);
		}
	}
	
	buildIndex();

	$is_mod = isset($_POST['mod']) && $_POST['mod'];
	$root = $is_mod ? $config['root'] . $config['file_mod'] . '?/' : $config['root'];

	if (!isset($_POST['json_response'])) {
		header('Location: ' . $root . $board['dir'] . $config['file_index'], true, $config['redirect_http']);
	} else {
		header('Content-Type: text/json');
		echo json_encode(array('success' => true));
	}

        // We are already done, let's continue our heavy-lifting work in the background (if we run off FastCGI)
        if (function_exists('fastcgi_finish_request'))
                @fastcgi_finish_request();

	rebuildThemes('post-delete', $board['uri']);

} 
elseif (isset($_POST['report'])) {
	if (!isset($_POST['board'], $_POST['reason']))
		error($config['error']['bot']);
	
	$report = array();
	foreach ($_POST as $post => $value) {
		if (preg_match('/^delete_(\d+)$/', $post, $m)) {
			$report[] = (int)$m[1];
		}
	}
	
	checkDNSBL();
		
	// Check if board exists
	if (!openBoard($_POST['board']))
		error($config['error']['noboard']);
	
	// Check if banned
	checkBan($board['uri']);
	
	if (empty($report))
		error($config['error']['noreport']);
	
	if (count($report) > $config['report_limit'])
		error($config['error']['toomanyreports']);

	if ($config['report_captcha'] && !isset($_POST['captcha_text'], $_POST['captcha_cookie'])) {
		error($config['error']['bot']);
	}

	if ($config['report_captcha']) {
		$resp = file_get_contents($config['captcha']['provider_check'] . "?" . http_build_query([
			'mode' => 'check',
			'text' => $_POST['captcha_text'],
			'extra' => $config['captcha']['extra'],
			'cookie' => $_POST['captcha_cookie']
		]));

		if ($resp !== '1') {
                        error($config['error']['captcha']);
		}
	}
	
	$reason = escape_markup_modifiers($_POST['reason']);
	markup($reason);

	foreach ($report as &$id) {
		$query = prepare(sprintf("SELECT `id`, `thread` FROM ``posts_%s`` WHERE `id` = :id", $board['uri']));
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->execute() or error(db_error($query));
		
		$post = $query->fetch(PDO::FETCH_ASSOC);
		
	        $error = event('report', array('ip' => $_SERVER['REMOTE_ADDR'], 'board' => $board['uri'], 'post' => $post, 'reason' => $reason, 'link' => link_for($post)));

	        if ($error) {
	                error($error);
	        }

		if ($config['syslog'])
			_syslog(LOG_INFO, 'Reported post: ' .
				'/' . $board['dir'] . $config['dir']['res'] . link_for($post) . ($post['thread'] ? '#' . $id : '') .
				' for "' . $reason . '"'
			);
		$query = prepare("INSERT INTO ``reports`` VALUES (NULL, :time, :ip, :board, :post, :reason)");
		$query->bindValue(':time', time(), PDO::PARAM_INT);
		$query->bindValue(':ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
		$query->bindValue(':board', $board['uri'], PDO::PARAM_STR);
		$query->bindValue(':post', $id, PDO::PARAM_INT);
		$query->bindValue(':reason', $reason, PDO::PARAM_STR);
		$query->execute() or error(db_error($query));
	}
	
	$is_mod = isset($_POST['mod']) && $_POST['mod'];
	$root = $is_mod ? $config['root'] . $config['file_mod'] . '?/' : $config['root'];
	
	if (!isset($_POST['json_response'])) {
		$index = $root . $board['dir'] . $config['file_index'];
		echo Element('page.html', array('config' => $config, 'body' => '<div style="text-align:center"><a href="javascript:window.close()">[ ' . _('Close window') ." ]</a> <a href='$index'>[ " . _('Return') . ' ]</a></div>', 'title' => _('Report submitted!')));
	} else {
		header('Content-Type: text/json');
		echo json_encode(array('success' => true));
	}
} 
elseif (isset($_POST['post']) || $dropped_post) {

	if (!isset($_POST['body'], $_POST['board']) && !$dropped_post)
		error($config['error']['bot']);

	$post = array('board' => $_POST['board'], 'files' => array());
	
	if(isset($_POST['captype'])){
		$post['captype'] = $_POST['captype'];
	}
	
	// Check if board exists
	if (!openBoard($post['board']))
		error($config['error']['noboard']);
	
	if (!isset($_POST['name']))
		$_POST['name'] = $config['anonymous'];
	
	if (!isset($_POST['email']))
		$_POST['email'] = '';
	
	if (!isset($_POST['subject']))
		$_POST['subject'] = '';
	
	if (!isset($_POST['password']))
		$_POST['password'] = '';	
	
	if (isset($_POST['thread'])) {
		$post['op'] = false;
		$post['thread'] = round($_POST['thread']);
	} else
		$post['op'] = true;


	if (!$dropped_post) {
		// Check if banned
		checkBan($board['uri']);

		// Check for CAPTCHA right after opening the board so the "return" link is in there
		if ($config['recaptcha']) {
			if (!isset($_POST['g-recaptcha-response']))
				error($config['error']['bot']);	

			// Check what reCAPTCHA has to say...
			$resp = json_decode(file_get_contents(sprintf('https://www.google.com/recaptcha/api/siteverify?secret=%s&response=%s&remoteip=%s',
				$config['recaptcha_private'],
				urlencode($_POST['g-recaptcha-response']),
				$_SERVER['REMOTE_ADDR'])), true);

			if (!$resp['success']) {
				error($config['error']['captcha']);
			}
		// Same, but now with our custom captcha provider
 		if (($config['captcha']['enabled']) || (($post['op']) && ($config['new_thread_capt'])) ) {
		$resp = file_get_contents($config['captcha']['provider_check'] . "?" . http_build_query([
			'mode' => 'check',
			'text' => $_POST['captcha_text'],
			'extra' => $config['captcha']['extra'],
			'cookie' => $_POST['captcha_cookie']
		]));
		if ($resp !== '1') {
                        error($config['error']['captcha'] .
			'<script>if (actually_load_captcha !== undefined) actually_load_captcha("'.$config['captcha']['provider_get'].'", "'.$config['captcha']['extra'].'");</script>');
		}
	}
}

		if (!(($post['op'] && $_POST['post'] == $config['button_newtopic']) ||
			(!$post['op'] && $_POST['post'] == $config['button_reply'])))
			error($config['error']['bot']);
	
		// Check the referrer
		if ($config['referer_match'] !== false &&
			(!isset($_SERVER['HTTP_REFERER']) || !preg_match($config['referer_match'], rawurldecode($_SERVER['HTTP_REFERER']))))
			error($config['error']['referer']);
	//DNS black list
		checkDNSBL();
		

		if ($post['mod'] = isset($_POST['mod']) && $_POST['mod']) {
			check_login(false);
			if (!$mod) {
				// Liar. You're not a mod.
				error($config['error']['notamod']);
			}
		
			$post['sticky'] = $post['op'] && isset($_POST['sticky']);
			$post['locked'] = $post['op'] && isset($_POST['lock']);
			$post['raw'] = isset($_POST['raw']);
		
			if ($post['sticky'] && !hasPermission($config['mod']['sticky'], $board['uri']))
				error($config['error']['noaccess']);
			if ($post['locked'] && !hasPermission($config['mod']['lock'], $board['uri']))
				error($config['error']['noaccess']);
			if ($post['raw'] && !hasPermission($config['mod']['rawhtml'], $board['uri']))
				error($config['error']['noaccess']);
		}
		
		if (!$post['mod']) {
			$post['antispam_hash'] = checkSpam(array($board['uri'], isset($post['thread']) ? $post['thread'] : ($config['try_smarter'] && isset($_POST['page']) ? 0 - (int)$_POST['page'] : null)));
			if ($post['antispam_hash'] === true)
				error($config['error']['spam']);
		}
	
		if ($config['robot_enable'] && $config['robot_mute']) {
			checkMute();
		}
	}
	else {
		$mod = $post['mod'] = false;
	}
	
	//Check if thread exists
	if (!$post['op']) {
		$query = prepare(sprintf("SELECT `sticky`,`locked`,`cycle`,`sage`,`slug` FROM ``posts_%s`` WHERE `id` = :id AND `thread` IS NULL LIMIT 1", $board['uri']));
		$query->bindValue(':id', $post['thread'], PDO::PARAM_INT);
		$query->execute() or error(db_error());
		
		if (!$thread = $query->fetch(PDO::FETCH_ASSOC)) {
			// Non-existant
			error($config['error']['nonexistant']);
		}
	}
	else {
		$thread = false;
	}
			
	// Check for an embed field
	if ($config['enable_embedding'] && isset($_POST['embed']) && !empty($_POST['embed'])) {
		// yep; validate it
		$value = $_POST['embed'];
		foreach ($config['embedding'] as &$embed) {
			if (preg_match($embed[0], $value)) {
				// Valid link
				$post['embed'] = $value;
				// This is bad, lol.
				$post['no_longer_require_an_image_for_op'] = true;
				break;
			}
		}
		if (!isset($post['embed'])) {
			error($config['error']['invalid_embed']);
		}
	}
	
	if (!hasPermission($config['mod']['bypass_field_disable'], $board['uri'])) {
		if ($config['field_disable_name'])
			$_POST['name'] = $config['anonymous']; // "forced anonymous"
	
		if ($config['field_disable_email'])
			$_POST['email'] = '';
	
		if ($config['field_disable_password'])
			$_POST['password'] = '';
	
		if ($config['field_disable_subject'] || (!$post['op'] && $config['field_disable_reply_subject']))
			$_POST['subject'] = '';
	}
	
	if ($config['allow_upload_by_url'] && isset($_POST['file_url']) && !empty($_POST['file_url'])) {
		$post['file_url'] = $_POST['file_url'];
		if (!preg_match('@^https?://@', $post['file_url']))
			error($config['error']['invalidimg']);
		
		if (mb_strpos($post['file_url'], '?') !== false)
			$url_without_params = mb_substr($post['file_url'], 0, mb_strpos($post['file_url'], '?'));
		else
			$url_without_params = $post['file_url'];

		$post['extension'] = strtolower(mb_substr($url_without_params, mb_strrpos($url_without_params, '.') + 1));

		if ($post['op'] && $config['allowed_ext_op']) {
			if (!in_array($post['extension'], $config['allowed_ext_op']))
				error($config['error']['unknownext']);
		}
		else if (!in_array($post['extension'], $config['allowed_ext']) && !in_array($post['extension'], $config['allowed_ext_files']))
			error($config['error']['unknownext']);

		$post['file_tmp'] = tempnam($config['tmp'], 'url');
		function unlink_tmp_file($file) {
			@unlink($file);
			fatal_error_handler();
		}
		register_shutdown_function('unlink_tmp_file', $post['file_tmp']);
		
		$fp = fopen($post['file_tmp'], 'w');
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $post['file_url']);
		curl_setopt($curl, CURLOPT_FAILONERROR, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($curl, CURLOPT_TIMEOUT, $config['upload_by_url_timeout']);
		curl_setopt($curl, CURLOPT_USERAGENT, 'Tinyboard');
		curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($curl, CURLOPT_FILE, $fp);
		curl_setopt($curl, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
		
		if (curl_exec($curl) === false)
			error($config['error']['nomove'] . '<br/>Curl says: ' . curl_error($curl));
		
		curl_close($curl);
		
		fclose($fp);

		$_FILES['file'] = array(
			'name' => basename($url_without_params),
			'tmp_name' => $post['file_tmp'],
			'file_tmp' => true,
			'error' => 0,
			'size' => filesize($post['file_tmp'])
		);
	}
	
	$post['name'] = $_POST['name'] != '' ? $_POST['name'] : $config['anonymous'];
	$post['subject'] = $_POST['subject'];
	$post['email'] = str_replace(' ', '%20', htmlspecialchars($_POST['email']));
	$post['body'] = $_POST['body'];
	$post['password'] = $_POST['password'];
	$post['has_file'] = (!isset($post['embed']) && (($post['op'] && !isset($post['no_longer_require_an_image_for_op']) && $config['force_image_op']) || count($_FILES) > 0));
	
	if (!$dropped_post) {

		if (!($post['has_file'] || isset($post['embed'])) || (($post['op'] && $config['force_body_op']) || (!$post['op'] && $config['force_body']))) {
			$stripped_whitespace = preg_replace('/[\s]/u', '', $post['body']);
			if ($stripped_whitespace == '') {
				error($config['error']['tooshort_body']);
			}
		}
	
		if (!$post['op']) {
			// Check if thread is locked
			// but allow mods to post
			if ($thread['locked'] && !hasPermission($config['mod']['postinlocked'], $board['uri']))
				error($config['error']['locked']);
		
			$numposts = numPosts($post['thread']);
		
			if ($config['reply_hard_limit'] != 0 && $config['reply_hard_limit'] <= $numposts['replies'])
				error($config['error']['reply_hard_limit']);
		
			if ($post['has_file'] && $config['image_hard_limit'] != 0 && $config['image_hard_limit'] <= $numposts['images'])
				error($config['error']['image_hard_limit']);
		}
	}
	else {
		if (!$post['op']) {
			$numposts = numPosts($post['thread']);
		}
	}
		
	if ($post['has_file']) {
		// Determine size sanity
		$size = 0;
		if ($config['multiimage_method'] == 'split') {
			foreach ($_FILES as $key => $file) {
				$size += $file['size'];
			}
		} elseif ($config['multiimage_method'] == 'each') {
			foreach ($_FILES as $key => $file) {
				if ($file['size'] > $size) {
					$size = $file['size'];
				}
			}
		} else {
			error(_('Unrecognized file size determination method.'));
		}

		if ($size > $config['max_filesize'])
			error(sprintf3($config['error']['filesize'], array(
				'sz' => number_format($size),
				'filesz' => number_format($size),
				'maxsz' => number_format($config['max_filesize'])
			)));
		$post['filesize'] = $size;
	}
	
	
	$post['capcode'] = false;
	
	if ($mod && preg_match('/^((.+) )?## (.+)$/', $post['name'], $matches)) {
		$name = $matches[2] != '' ? $matches[2] : $config['anonymous'];
		$cap = $matches[3];
		
		if (isset($config['mod']['capcode'][$mod['type']])) {
			if (	$config['mod']['capcode'][$mod['type']] === true ||
				(is_array($config['mod']['capcode'][$mod['type']]) &&
					in_array($cap, $config['mod']['capcode'][$mod['type']])
				)) {
				
				$post['capcode'] = utf8tohtml($cap);
				$post['name'] = $name;
			}
		}
	}
	
	$trip = generate_tripcode($post['name']);
	$post['name'] = $trip[0];
	$post['trip'] = isset($trip[1]) ? $trip[1] : ''; // XX: Dropped posts and tripcodes
	
	$noko = false;
	if (preg_match('/noko/', strtolower($post['email']))) {
		$noko = true;
	} elseif (preg_match('/nonoko/', strtolower($post['email']))){
		$noko = false;
	} else $noko = $config['always_noko'];
	
	if ($post['has_file']) {
		$i = 0;
		foreach ($_FILES as $key => $file) {
			if (!in_array($file['error'], array(UPLOAD_ERR_NO_FILE, UPLOAD_ERR_OK))) {
				error(sprintf3($config['error']['phpfileserror'], array(
					'index' => $i+1,
					'code' => $file['error']
				)));
			}

			if ($file['size'] && $file['tmp_name']) {
				$file['filename'] = urldecode($file['name']);
				$file['extension'] = strtolower(mb_substr($file['filename'], mb_strrpos($file['filename'], '.') + 1));
				if (isset($config['filename_func']))
					$file['file_id'] = $config['filename_func']($file);
				else
					$file['file_id'] = time() . substr(microtime(), 2, 3);

				if (sizeof($_FILES) > 1)
					$file['file_id'] .= "-$i";
				
				$file['file'] = $board['dir'] . $config['dir']['img'] . $file['file_id'] . '.' . $file['extension'];
				$file['thumb'] = $board['dir'] . $config['dir']['thumb'] . $file['file_id'] . '.' . ($config['thumb_ext'] ? $config['thumb_ext'] : $file['extension']);
				$post['files'][] = $file;
				$i++;
			}
		}
	}

	if (empty($post['files'])) $post['has_file'] = false;

	if (!$dropped_post) {
		// Check for a file
		if ($post['op'] && !isset($post['no_longer_require_an_image_for_op'])) {
			if (!$post['has_file'] && $config['force_image_op'])
				error($config['error']['noimage']);
		}

		// Check for too many files
		if (sizeof($post['files']) > $config['max_images'])
			error($config['error']['toomanyimages']);
	}

	if ($config['strip_combining_chars']) {
		$post['name'] = strip_combining_chars($post['name']);
		$post['email'] = strip_combining_chars($post['email']);
		$post['subject'] = strip_combining_chars($post['subject']);
		$post['body'] = strip_combining_chars($post['body']);
	}
	
	if (!$dropped_post) {
		// Check string lengths
		if (mb_strlen($post['name']) > 35)
			error(sprintf($config['error']['toolong'], 'name'));	
		if (mb_strlen($post['email']) > 40)
			error(sprintf($config['error']['toolong'], 'email'));
		if (mb_strlen($post['subject']) > 100)
			error(sprintf($config['error']['toolong'], 'subject'));
		if (!$mod && mb_strlen($post['body']) > $config['max_body'])
			error($config['error']['toolong_body']);
		if (mb_strlen($post['password']) > 20)
			error(sprintf($config['error']['toolong'], 'password'));
	}
	wordfilters($post['body']);
	
	$post['body'] = escape_markup_modifiers($post['body']);
	
	if ($mod && isset($post['raw']) && $post['raw']) {
		$post['body'] .= "\n<tinyboard raw html>1</tinyboard>";
	}
	
	if (!$dropped_post)
	if (($config['country_flags'] && !$config['allow_no_country']) || ($config['country_flags'] && $config['allow_no_country'] && !isset($_POST['no_country']))) {
		require 'inc/lib/geoip/geoip.inc';
		$gi=geoip\geoip_open('inc/lib/geoip/GeoIPv6.dat', GEOIP_STANDARD);
	
		function ipv4to6($ip) {
			if (strpos($ip, ':') !== false) {
				if (strpos($ip, '.') > 0)
					$ip = substr($ip, strrpos($ip, ':')+1);
				else return $ip;  //native ipv6
			}
			$iparr = array_pad(explode('.', $ip), 4, 0);
			$part7 = base_convert(($iparr[0] * 256) + $iparr[1], 10, 16);
			$part8 = base_convert(($iparr[2] * 256) + $iparr[3], 10, 16);
			return '::ffff:'.$part7.':'.$part8;
		}
	
		if ($country_code = geoip\geoip_country_code_by_addr_v6($gi, ipv4to6($_SERVER['REMOTE_ADDR']))) {
			if (!in_array(strtolower($country_code), array('eu', 'ap', 'o1', 'a1', 'a2')))
				$post['body'] .= "\n<tinyboard flag>".strtolower($country_code)."</tinyboard>".
				"\n<tinyboard flag alt>".geoip\geoip_country_name_by_addr_v6($gi, ipv4to6($_SERVER['REMOTE_ADDR']))."</tinyboard>";
		}
	}

	if ($config['user_flag'] && isset($_POST['user_flag']))
	if (!empty($_POST['user_flag']) ){
		
		$user_flag = $_POST['user_flag'];
		
		if (!isset($config['user_flags'][$user_flag]))
			error(_('Invalid flag selection!'));

		$flag_alt = isset($user_flag_alt) ? $user_flag_alt : $config['user_flags'][$user_flag];

		$post['body'] .= "\n<tinyboard flag>" . strtolower($user_flag) . "</tinyboard>" .
		"\n<tinyboard flag alt>" . $flag_alt . "</tinyboard>";
	}

	if ($config['allowed_tags'] && $post['op'] && isset($_POST['tag']) && isset($config['allowed_tags'][$_POST['tag']])) {
		$post['body'] .= "\n<tinyboard tag>" . $_POST['tag'] . "</tinyboard>";
	}

	if (!$dropped_post)
        if ($config['proxy_save'] && isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$proxy = preg_replace("/[^0-9a-fA-F.,: ]/", '', $_SERVER['HTTP_X_FORWARDED_FOR']);
		$post['body'] .= "\n<tinyboard proxy>".$proxy."</tinyboard>";
	}
	
	if (mysql_version() >= 50503) {
		$post['body_nomarkup'] = $post['body']; // Assume we're using the utf8mb4 charset
	} else {
		// MySQL's `utf8` charset only supports up to 3-byte symbols
		// Remove anything >= 0x010000
		
		$chars = preg_split('//u', $post['body'], -1, PREG_SPLIT_NO_EMPTY);
		$post['body_nomarkup'] = '';
		foreach ($chars as $char) {
			$o = 0;
			$ord = ordutf8($char, $o);
			if ($ord >= 0x010000)
				continue;
			$post['body_nomarkup'] .= $char;
		}
	}
	
	$post['tracked_cites'] = markup($post['body'], true);

	
	
	if ($post['has_file']) {
		$md5cmd = false;
		if ($config['bsd_md5'])  $md5cmd = '/sbin/md5 -r';
		if ($config['gnu_md5'])  $md5cmd = 'md5sum';

		$allhashes = '';

		foreach ($post['files'] as $key => &$file) {
			if ($post['op'] && $config['allowed_ext_op']) {
				if (!in_array($file['extension'], $config['allowed_ext_op']))
					error($config['error']['unknownext']);
			}
			elseif (!in_array($file['extension'], $config['allowed_ext']) && !in_array($file['extension'], $config['allowed_ext_files']))
				error($config['error']['unknownext']);
			
			$file['is_an_image'] = !in_array($file['extension'], $config['allowed_ext_files']);
			
			// Truncate filename if it is too long
			$file['filename'] = mb_substr($file['filename'], 0, $config['max_filename_len']);
			
			$upload = $file['tmp_name'];
			
			if (!is_readable($upload))
				error($config['error']['nomove']);

			if ($md5cmd) {
				$output = shell_exec_error($md5cmd . " " . escapeshellarg($upload));
				$output = explode(' ', $output);
				$hash = $output[0];
			}
			else {
				$hash = md5_file($upload);
			}

			$file['hash'] = $hash;
			$allhashes .= $hash;
		}

		if (count ($post['files']) == 1) {
			$post['filehash'] = $hash;
		}
		else {
			$post['filehash'] = md5($allhashes);
		}
	}
	//Check if passes filter 
	if (!hasPermission($config['mod']['bypass_filters'], $board['uri']) && !$dropped_post) {
		require_once 'inc/filters.php';
		// Captcha flood Bypass done in here
		do_filters($post);
	}
	Post_ImageProcessing::proccess($post);
	
	// Do filters again if OCRing
	if ($config['tesseract_ocr'] && !hasPermission($config['mod']['bypass_filters'], $board['uri']) && !$dropped_post) {
		do_filters($post);
	}

	if (!hasPermission($config['mod']['postunoriginal'], $board['uri']) && $config['robot_enable'] && checkRobot($post['body_nomarkup']) && !$dropped_post) {
		undoImage($post);
		if ($config['robot_mute']) {
			error(sprintf($config['error']['muted'], mute()));
		} else {
			error($config['error']['unoriginal']);
		}
	}
	
	// Remove board directories before inserting them into the database.
	if ($post['has_file']) {
		foreach ($post['files'] as $key => &$file) {
			$file['file_path'] = $file['file'];
			$file['thumb_path'] = $file['thumb'];
			$file['file'] = mb_substr($file['file'], mb_strlen($board['dir'] . $config['dir']['img']));
			if ($file['is_an_image'] && $file['thumb'] != 'spoiler')
				$file['thumb'] = mb_substr($file['thumb'], mb_strlen($board['dir'] . $config['dir']['thumb']));
		}
	}
	
	$post = (object)$post;
	$post->files = array_map(function($a) { return (object)$a; }, $post->files);

	$error = event('post', $post);
	$post->files = array_map(function($a) { return (array)$a; }, $post->files);

	if ($error) {
		undoImage((array)$post);
		error($error);
	}
	$post = (array)$post;

	if ($post['files'])
		$post['files'] = $post['files'];
	$post['num_files'] = sizeof($post['files']);
	
	$post['id'] = $id = post($post);
	$post['slug'] = slugify($post);
	if(isset($numposts)){
		post_laterPost($post, $thread, $numposts, $noko, $id, $dropped_post, $pdo);
	}
	else{
		post_laterPost($post, $thread, null, $noko, $id, $dropped_post, $pdo);
	}
}
elseif(isset($_POST['release'])){
	//reference
	//board
	//release
	
	//how's the captcha...
	if($config['flood_recaptcha'] && isset($_POST['recaptcha'])){
		//https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php
		$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $config['recaptcha_private'] . '&response=' . $_POST['recaptcha'] . '&remoteip=' . $_SERVER['HTTP_REFERER'];
		$data = array(
			'secret' => $config['recaptcha_private'],
			'response ' => $_POST['recaptcha'],
			'remoteip' => $_SERVER['HTTP_REFERER']	
		);
		$options = array('http'=>array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST'
		));
		$context = stream_context_create($options);
		$result= file_get_contents($url);
		if($result === false){
			error('Bad URL');
		}
		else{
			$result = json_decode($result, true);
			if(isset($result['success'])){
				if($result['success']){	}
				else if(isset($result['error-codes'])){
					error('Bad captcha: ' . implode(', ', $result['error-codes']));
				}
			}
			else{
				error('Captcha API error');
			}
		}
	}
	elseif ($config['flood_captchouli'] && isset($_POST['captchouli'])){
		
		$kissu = curl_init('http://kissu.moe/status?captchouli-id=' . $_POST['captchouli']);
		$result = curl_exec($kissu);
		if($result === false){
			error('Bad URL');
		}
		else{
			if ($result == "true"){	}
			else{
				error('Bad captcha: ' . $result);
			}
		}
	}

	
	global $board;
	$reference = $_POST['reference'];
	$query = prepare("SELECT * FROM `withheld` WHERE `reference`='$reference'") or error(db_error());
	$query->execute();	
	$post = $query->fetchAll()[0];
	$query = prepare("DELETE FROM `withheld` WHERE `reference`='$reference'") or error(db_error());
	$query->execute();
	
	if(sizeof($post) == 0){
		error("Captcha expired");
	}
	
	$post['files'] = json_decode($post['files'], true);
	
	openBoard($post['board']);
	
	if($post['num_files'] > 0) $post['has_file'] = true;
	else $post['has_file'] = false;
	
	$noko = false;
	if (preg_match('/noko/', strtolower($post['email']))) {
		$noko = true;
	} elseif (preg_match('/nonoko/', strtolower($post['email']))){
		$noko = false;
	} else $noko = $config['always_noko'];
	
	$post['op'] = true;
	if(isset($post['thread'])){
		$post['op'] = false;
	}
	$thread['sage'] = $post['sage'];
	$thread['cycle'] = $post['cycle'];
	if (!$post['op']) {
		$numposts = numPosts($post['thread']);
	}
    $post['mod'] = isset($_POST['mod']);
	if (!$post['mod']) {
		// $post['antispam_hash'] = checkSpam(array($board['uri'], isset($post['thread']) ? $post['thread'] : ($config['try_smarter'] && isset($_POST['page']) ? 0 - (int)$_POST['page'] : null)));
		// if ($post['antispam_hash'] === true)
			// error($config['error']['spam']);
	}
		
		// Remove board directories before inserting them into the database.
	if ($post['has_file']) {
		foreach ($post['files'] as $key => &$file) {
			$file['file_path'] = $file['file'];
			$file['thumb_path'] = $file['thumb'];
			$file['file'] = mb_substr($file['file'], mb_strlen($board['dir'] . $config['dir']['img']));
			if ($file['is_an_image'] && $file['thumb'] != 'spoiler')
				$file['thumb'] = mb_substr($file['thumb'], mb_strlen($board['dir'] . $config['dir']['thumb']));
		}
	}
		
	if (!hasPermission($config['mod']['postunoriginal'], $board['uri']) && $config['robot_enable'] && checkRobot($post['body_nomarkup']) && !$dropped_post) {
		undoImage($post);
		if ($config['robot_mute']) {
			error(sprintf($config['error']['muted'], mute()));
		} else {
			error($config['error']['unoriginal']);
		}
	}

	$post['id'] = $id = post($post);

	$post['slug'] = slugify($post);
	
	if(isset($numposts)){
		post_laterPost($post, $thread, $numposts, $noko, $id, $dropped_post, $pdo);
	}
	else{
		post_laterPost($post, $thread, null, $noko, $id, $dropped_post, $pdo);
	}
	
}
elseif (isset($_POST['appeal'])) {
	if (!isset($_POST['ban_id']))
		error($config['error']['bot']);
	
	$ban_id = (int)$_POST['ban_id'];
	
	$bans = Bans::find($_SERVER['REMOTE_ADDR']);
	foreach ($bans as $_ban) {
		if ($_ban['id'] == $ban_id) {
			$ban = $_ban;
			break;
		}
	}
	
	if (!isset($ban)) {
		error(_("That ban doesn't exist or is not for you."));
	}
	
	if ($ban['expires'] && $ban['expires'] - $ban['created'] <= $config['ban_appeals_min_length']) {
		error(_("You cannot appeal a ban of this length."));
	}
	
	$query = query("SELECT `denied` FROM ``ban_appeals`` WHERE `ban_id` = $ban_id") or error(db_error());
	$ban_appeals = $query->fetchAll(PDO::FETCH_COLUMN);
	
	if (count($ban_appeals) >= $config['ban_appeals_max']) {
		error(_("You cannot appeal this ban again."));
	}
	
	foreach ($ban_appeals as $is_denied) {
		if (!$is_denied)
			error(_("There is already a pending appeal for this ban."));
	}
	
	$query = prepare("INSERT INTO ``ban_appeals`` VALUES (NULL, :ban_id, :time, :message, 0)");
	$query->bindValue(':ban_id', $ban_id, PDO::PARAM_INT);
	$query->bindValue(':time', time(), PDO::PARAM_INT);
	$query->bindValue(':message', $_POST['appeal']);
	$query->execute() or error(db_error($query));
	
	displayBan($ban);
} else {
	if (!file_exists($config['has_installed'])) {
		header('Location: install.php', true, $config['redirect_http']);
	} else {
		// They opened post.php in their browser manually.
		error($config['error']['nopost']);
	}
}
