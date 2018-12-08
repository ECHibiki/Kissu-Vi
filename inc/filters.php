<?php

/*
 *  Copyright (c) 2010-2013 Tinyboard Development Group
 */

defined('TINYBOARD') or exit;

class Filter {
	public $flood_check;
	private $condition;
	private $post;
	
	public function __construct(array $arr) {
		foreach ($arr as $key => $value)
			$this->$key = $value;		
	}
	
	public function match($condition, $match) {
		$condition = strtolower($condition);

		$post = &$this->post;
		
		switch($condition) {
			case 'custom':
				if (!is_callable($match))
					error('Custom condition for filter is not callable!');
				return $match($post);
			case 'flood-match':
				if (!is_array($match))
					error('Filter condition "flood-match" must be an array.');
								
				// Filter out "flood" table entries which do not match this filter.
				
				$flood_check_matched = array();
				
				foreach ($this->flood_check as $flood_post) {
					foreach ($match as $flood_match_arg) {
						switch ($flood_match_arg) {
							case 'ip':
								if ($flood_post['ip'] != $_SERVER['REMOTE_ADDR'])
									continue 3;
								break;
							case 'body':
								if ($flood_post['posthash'] != make_comment_hex($post['body_nomarkup']))
									continue 3;
								break;
							case 'file':
								if (!isset($post['filehash']))
									return false;
								if ($flood_post['filehash'] != $post['filehash'])
									continue 3;
								break;
							case 'board':
								if ($flood_post['board'] != $post['board'])
									continue 3;
								break;
							case 'isreply':
								if ($flood_post['isreply'] == $post['op'])
									continue 3;
								break;
							default:
								error('Invalid filter flood condition: ' . $flood_match_arg);
						}
					}
					$flood_check_matched[] = $flood_post;
				}
				$this->flood_check = $flood_check_matched;
				
				return !empty($this->flood_check);
			case 'flood-time':
				foreach ($this->flood_check as $flood_post) {
					if (time() - $flood_post['time'] <= $match) {
						return true;
					}
				}
				return false;
			case 'flood-count':
				$count = 0;
				foreach ($this->flood_check as $flood_post) {
					if (time() - $flood_post['time'] <= $this->condition['flood-time']) {
						++$count;
					}
				}
				return $count >= $match;
			case 'name':
				return preg_match($match, $post['name']);
			case 'trip':
				return $match === $post['trip'];
			case 'email':
				return preg_match($match, $post['email']);
			case 'subject':
				return preg_match($match, $post['subject']);
			case 'body':
				return preg_match($match, $post['body_nomarkup']);
			case 'filehash':
				return $match === $post['filehash'];
			case 'filename':
				if (!$post['files'])
					return false;

				foreach ($post['files'] as $file) {
					if (preg_match($match, $file['filename'])) {
						return true;
					}
				}
				return false;
			case 'extension':
				if (!$post['files'])
					return false;

				foreach ($post['files'] as $file) {
					if (preg_match($match, $file['extension'])) {
						return true;
					}
				}
				return false;
			case 'ip':
				return preg_match($match, $_SERVER['REMOTE_ADDR']);
			case 'op':
				return $post['op'] == $match;
			case 'has_file':
				return $post['has_file'] == $match;
			case 'board':
				return $post['board'] == $match;
			case 'password':
				return $post['password'] == $match;
			default:
				error('Unknown filter condition: ' . $condition);
		}
	}
	
	public function action() {
		global $board;
		global $config;

		$this->add_note = isset($this->add_note) ? $this->add_note : false;
		if ($this->add_note) {
			$query = prepare('INSERT INTO ``ip_notes`` VALUES (NULL, :ip, :mod, :time, :body)');
	                $query->bindValue(':ip', $_SERVER['REMOTE_ADDR']);
        	        $query->bindValue(':mod', -1);
	                $query->bindValue(':time', time());
	                $query->bindValue(':body', "Autoban message: ".$this->post['body']);
	                $query->execute() or error(db_error($query));
		}				
		if (isset ($this->action)){ 
			switch($this->action) {
				case 'reject':
					error(isset($this->message) ? $this->message : 'Posting throttled by filter.');
					break;
				case 'ban':
					if (!isset($this->reason))
						error('The ban action requires a reason.');
					
					$this->expires = isset($this->expires) ? $this->expires : false;
					$this->reject = isset($this->reject) ? $this->reject : true;
					$this->all_boards = isset($this->all_boards) ? $this->all_boards : false;
					
					Bans::new_ban($_SERVER['REMOTE_ADDR'], $this->reason, $this->expires, $this->all_boards ? false : $board['uri'], -1);

					if ($this->reject) {
						if (isset($this->message))
							error($message);
						
						checkBan($board['uri']);
						exit;
					}
					
					break;
				case 'captcha':
					if($config['flood_recaptcha']){
						$holding_id = hash('sha256', rand(0,1000) . time());
						buildHoldingTable($this->post, $holding_id );
						error(isset($this->message) ? $this->message .
							"<hr style='width:40%'/>
							<form action='/post.php' method='post'><iframe style='height:423px;width:302px' src='https://www.google.com/recaptcha/api/fallback?k=" . $config['recaptcha_public'] . "'></iframe>
							<textarea style='height:50px;width:302px' name='recaptcha'></textarea>
							<input name='reference' type='hidden' value='".  $holding_id . "'>
							<input name='release' type='hidden' value='submit'>
							<input name='board' type='hidden' value='".  $this->post['board'] . "'><br/>
							<input type='submit'>
							<br/><hr/>
							</form>" : 'Captcha Required.');
					}
					else{
						error(isset($this->message) ? $this->message : 'Captcha Required.');
					}
					//store post details in temp(on expiration timer) and await a captcha fill out to retrieve them
					break;
				default:
					error('Unknown filter action: ' . $this->action);
			}
		}
	}
	
	public function check(array $post) {
		$this->post = $post;
		foreach ($this->condition as $condition => $value) {
			if ($condition[0] == '!') {
				$NOT = true;
				$condition = substr($condition, 1);
			} else $NOT = false;
			
			if ($this->match($condition, $value) == $NOT)
				return false;
		}
		return true;
	}
}

function buildHoldingTable($post, $holding_id){
	global $config;
	
	$post['reference'] = $holding_id;
	$post['num_files'] = sizeof($post['files']);
	

	//consider alternate method that doesn't copy from post.php
	if ($post['has_file']) {
		foreach ($post['files'] as $key => &$file) {
		if ($file['is_an_image']) {
			if ($config['ie_mime_type_detection'] !== false) {
				// Check IE MIME type detection XSS exploit
				$buffer = file_get_contents($file['tmp_name'], null, null, null, 255);
				if (preg_match($config['ie_mime_type_detection'], $buffer)) {
					undoImage($post);
					error($config['error']['mime_exploit']);
				}
			}
			
			require_once 'inc/image.php';
			
			// find dimensions of an image using GD
			if (!$size = @getimagesize($file['tmp_name'])) {
				error($config['error']['invalidimg']);
			}
			if (!in_array($size[2], array(IMAGETYPE_PNG, IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_BMP))) {
				error($config['error']['invalidimg']);
			}
			if ($size[0] > $config['max_width'] || $size[1] > $config['max_height']) {
				error($config['error']['maxsize']);
			}
			
			
			if ($config['convert_auto_orient'] && ($file['extension'] == 'jpg' || $file['extension'] == 'jpeg')) {
				// The following code corrects the image orientation.
				// Currently only works with the 'convert' option selected but it could easily be expanded to work with the rest if you can be bothered.
				if (!($config['redraw_image'] || (($config['strip_exif'] && !$config['use_exiftool']) && ($file['extension'] == 'jpg' || $file['extension'] == 'jpeg')))) {
					if (in_array($config['thumb_method'], array('convert', 'convert+gifsicle', 'gm', 'gm+gifsicle'))) {
						$exif = @exif_read_data($file['tmp_name']);
						$gm = in_array($config['thumb_method'], array('gm', 'gm+gifsicle'));
						if (isset($exif['Orientation']) && $exif['Orientation'] != 1) {
							if ($config['convert_manual_orient']) {
								$error = shell_exec_error(($gm ? 'gm ' : '') . 'convert ' .
									escapeshellarg($file['tmp_name']) . ' ' .
									ImageConvert::jpeg_exif_orientation(false, $exif) . ' ' .
									($config['strip_exif'] ? '+profile "*"' :
										($config['use_exiftool'] ? '' : '+profile "*"')
									) . ' ' .
									escapeshellarg($file['tmp_name']));
								if ($config['use_exiftool'] && !$config['strip_exif']) {
									if ($exiftool_error = shell_exec_error(
										'exiftool -overwrite_original -q -q -orientation=1 -n ' .
											escapeshellarg($file['tmp_name'])))
										error(_('exiftool failed!'), null, $exiftool_error);
								} else {
									// TODO: Find another way to remove the Orientation tag from the EXIF profile
									// without needing `exiftool`.
								}
							} else {
								$error = shell_exec_error(($gm ? 'gm ' : '') . 'convert ' .
										escapeshellarg($file['tmp_name']) . ' -auto-orient ' . escapeshellarg($upload));
							}
							if ($error)
								error(_('Could not auto-orient image!'), null, $error);
							$size = @getimagesize($file['tmp_name']);
							if ($config['strip_exif'])
								$file['exif_stripped'] = true;
						}
					}
				}
			}
			
			// create image object
			$image = new Image($file['tmp_name'], $file['extension'], $size);
			if ($image->size->width > $config['max_width'] || $image->size->height > $config['max_height']) {
				$image->delete();
				error($config['error']['maxsize']);
			}
			
			$file['width'] = $image->size->width;
			$file['height'] = $image->size->height;
			
			if ($config['spoiler_images'] && isset($_POST['spoiler'])) {
				$file['thumb'] = 'spoiler';
				
				$size = @getimagesize($config['spoiler_image']);
				$file['thumbwidth'] = $size[0];
				$file['thumbheight'] = $size[1];
			} elseif ($config['minimum_copy_resize'] &&
				$image->size->width <= $config['thumb_width'] &&
				$image->size->height <= $config['thumb_height'] &&
				$file['extension'] == ($config['thumb_ext'] ? $config['thumb_ext'] : $file['extension'])) {
			
				// Copy, because there's nothing to resize
				copy($file['tmp_name'], $file['thumb']);
			
				$file['thumbwidth'] = $image->size->width;
				$file['thumbheight'] = $image->size->height;
			} else {
				$thumb = $image->resize(
					$config['thumb_ext'] ? $config['thumb_ext'] : $file['extension'],
					$post['op'] ? $config['thumb_op_width'] : $config['thumb_width'],
					$post['op'] ? $config['thumb_op_height'] : $config['thumb_height']
				);
				
				$thumb->to($file['thumb']);
			
				$file['thumbwidth'] = $thumb->width;
				$file['thumbheight'] = $thumb->height;
			
				$thumb->_destroy();
			}
			
			if ($config['redraw_image'] || (!@$file['exif_stripped'] && $config['strip_exif'] && ($file['extension'] == 'jpg' || $file['extension'] == 'jpeg'))) {
				if (!$config['redraw_image'] && $config['use_exiftool']) {
					if($error = shell_exec_error('exiftool -overwrite_original -ignoreMinorErrors -q -q -all= ' .
						escapeshellarg($file['tmp_name'])))
						error(_('Could not strip EXIF metadata!'), null, $error);
				} else {
					$image->to($file['file']);
					$dont_copy_file = true;
				}
			}
			$image->destroy();
		} else {
			// not an image
			//copy($config['file_thumb'], $post['thumb']);
			$file['thumb'] = 'file';

			$size = @getimagesize(sprintf($config['file_thumb'],
				isset($config['file_icons'][$file['extension']]) ?
					$config['file_icons'][$file['extension']] : $config['file_icons']['default']));
			$file['thumbwidth'] = $size[0];
			$file['thumbheight'] = $size[1];
		}

		if ($config['tesseract_ocr'] && $file['thumb'] != 'file') { // Let's OCR it!
			$fname = $file['tmp_name'];

			if ($file['height'] > 500 || $file['width'] > 500) {
				$fname = $file['thumb'];
			}

			if ($fname == 'spoiler') { // We don't have that much CPU time, do we?
			}
			else {
				$tmpname = "tmp/tesseract/".rand(0,10000000);

				// Preprocess command is an ImageMagick b/w quantization
				$error = shell_exec_error(sprintf($config['tesseract_preprocess_command'], escapeshellarg($fname)) . " | " .
                                                          'tesseract stdin '.escapeshellarg($tmpname).' '.$config['tesseract_params']);
				$tmpname .= ".txt";

				$value = @file_get_contents($tmpname);
				@unlink($tmpname);

				if ($value && trim($value)) {
					// This one has an effect, that the body is appended to a post body. So you can write a correct
					// spamfilter.
					$post['body_nomarkup'] .= "<tinyboard ocr image $key>".htmlspecialchars($value)."</tinyboard>";
				}
			}
		}
		
		if (!isset($dont_copy_file) || !$dont_copy_file) {
			if (isset($file['file_tmp'])) {
				if (!@rename($file['tmp_name'], $file['file']))
					error($config['error']['nomove']);
				chmod($file['file'], 0644);
			} elseif (!@move_uploaded_file($file['tmp_name'], $file['file']))
				error($config['error']['nomove']);
			}
		}

		if ($config['image_reject_repost']) {
			if ($p = getPostByHash($post['filehash'])) {
				undoImage($post);
				error(sprintf($config['error']['fileexists'], 
					($post['mod'] ? $config['root'] . $config['file_mod'] . '?/' : $config['root']) .
					($board['dir'] . $config['dir']['res'] .
						($p['thread'] ?
							$p['thread'] . '.html#' . $p['id']
						:
							$p['id'] . '.html'
						))
				));
			}
		} else if (!$post['op'] && $config['image_reject_repost_in_thread']) {
			if ($p = getPostByHashInThread($post['filehash'], $post['thread'])) {
				undoImage($post);
				error(sprintf($config['error']['fileexistsinthread'], 
					($post['mod'] ? $config['root'] . $config['file_mod'] . '?/' : $config['root']) .
					($board['dir'] . $config['dir']['res'] .
						($p['thread'] ?
							$p['thread'] . '.html#' . $p['id']
						:
							$p['id'] . '.html'
						))
				));
			}
		}
		}
	
	
	
	withhold($post);
		
	$time = time() - $config['captcha_flood_hold_time'];
	$query = prepare("SELECT files FROM ``withheld`` WHERE `time` < $time") or error(db_error());
	$query->execute();
	$to_delete = $query->fetchAll();
	foreach($to_delete as $details){
		$file = json_decode($details['files'], true)[0];
		if(isset($file['file'])) file_unlink($file['file']);
		if(isset($file['thumb'])) file_unlink($file['thumb']);
	}
	$query = prepare("DELETE FROM ``withheld`` WHERE `time` < $time") or error(db_error());
	$query->execute();
}

function purge_flood_table() {
	global $config;
	
	// Determine how long we need to keep a cache of posts for flood prevention. Unfortunately, it is not
	// aware of flood filters in other board configurations. You can solve this problem by settings the
	// config variable $config['flood_cache'] (seconds).
	
	if (isset($config['flood_cache'])) {
		$max_time = &$config['flood_cache'];
	} else {
		$max_time = 0;
		foreach ($config['filters'] as $filter) {
			if (isset($filter['condition']['flood-time']))
				$max_time = max($max_time, $filter['condition']['flood-time']);
		}
	}
	
	$time = time() - $max_time;
	
	query("DELETE FROM ``flood`` WHERE `time` < $time") or error(db_error());
}

function do_filters(array $post) {
	global $config;
	
	if (!isset($config['filters']) || empty($config['filters']))
		return;
	
	foreach ($config['filters'] as $filter) {
		if (isset($filter['condition']['flood-match'])) {
			$has_flood = true;
			break;
		}
	}
	if (isset($has_flood)) {
		if ($post['has_file']) {
			$query = prepare("SELECT * FROM ``flood`` WHERE `ip` = :ip OR `posthash` = :posthash OR `filehash` = :filehash");
			$query->bindValue(':ip', $_SERVER['REMOTE_ADDR']);
			$query->bindValue(':posthash', make_comment_hex($post['body_nomarkup']));
			$query->bindValue(':filehash', $post['filehash']);
		} else if(!$config['flood_board_active']){
			$query = prepare("SELECT * FROM ``flood`` WHERE `ip` = :ip OR `posthash` = :posthash");
			$query->bindValue(':ip', $_SERVER['REMOTE_ADDR']);
			$query->bindValue(':posthash', make_comment_hex($post['body_nomarkup']));
		}
		else if($config['flood_board_active']){
			$query = prepare("SELECT * FROM ``flood`` WHERE `board` = :board");
			$query->bindValue(':board', $post['board']);
		}
		$query->execute() or error(db_error($query));
		$flood_check = $query->fetchAll(PDO::FETCH_ASSOC);
	} else {
		$flood_check = false;
	}
	
	foreach ($config['filters'] as $filter_array) {
		$filter = new Filter($filter_array);
		$filter->flood_check = $flood_check;
		if ($filter->check($post)){
			$filter->action();
		}
	}
	
	purge_flood_table();
}

