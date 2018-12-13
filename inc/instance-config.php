<?php
/*
*  Instance Configuration
*  ----------------------
*  Edit this file and not config.php for imageboard configuration.
*
*  You can copy values from config.php (defaults) and paste them here.
*/
	$config['db']['server'] = '';
	$config['db']['database'] = '';
	$config['db']['prefix'] = '';
	$config['db']['user'] = '';
	$config['db']['password'] = '';
	
	
	
	
	
	// $config['thumb_method'] = 'gm+gifsicle';
	// $config['gnu_md5'] = '1';
	
	$config['thumb_method'] = 'gm+gifsicle';
	
	// Set this to true if you're using Linux and you can execute `md5sum` binary.
	$config['gnu_md5'] = false;
	
	
	
	
	
	$config['timezone'] = 'America/New_York';
	
	$config['allowed_ext_files'][] = 'webm';
	$config['allowed_ext_files'][] = 'mp4';
	$config['allowed_ext_files'][] = 'mp3';
	$config['allowed_ext_files'][] = 'flac';
	$config['allowed_ext_op'] = [true];
	
	// For resizing, maximum thumbnail dimensions.
	$config['thumb_width'] = 175;
	$config['thumb_height'] = 175;
	
	$config['minimum_copy_resize'] = true;

	// Require users to see the ban page at least once for a ban even if it has since expired.
	$config['require_ban_view'] = true;

	// Show the post the user was banned for on the "You are banned" page.
	$config['ban_show_post'] = true;

	// Optional HTML to append to "You are banned" pages. For example, you could include instructions and/or
	// a link to an email address or IRC chat room to appeal the ban.
	$config['ban_page_extra'] = '';

	// Allow users to appeal bans through Tinyboard.
	$config['ban_appeals'] = true;

	// Do not allow users to appeal bans that are shorter than this length (in seconds).
	$config['ban_appeals_min_length'] = 60 * 60 * 6; // 6 hours

	// How many ban appeals can be made for a single ban?
	$config['ban_appeals_max'] = 1;

	// Show moderator name on ban page.
	$config['show_modname'] = true;
	
	
	// Maximum amount of threads to display per page.
	$config['threads_per_page'] = 10;
	// Maximum number of pages. Content past the last page is automatically purged.
	$config['max_pages'] = 10;
	// Replies to show per thread on the board index page.
	$config['threads_preview'] = 5;
	// Same as above, but for stickied threads.
	$config['threads_preview_sticky'] = 3;
	
	// Additional lines added to the footer of all pages.
	$config['footer'][] = _('Concerns to the gmail of ECVerniy');

	
	// Thumbnail to use for the non-image file uploads.
	// $config['file_icons']['default'] = 'file.png';
	// $config['file_icons']['zip'] = 'zip.png';
	// $config['file_icons']['webm'] = 'video.png';
	// $config['file_icons']['mp4'] = 'video.png';
	// Example: Custom thumbnail for certain file extension.
	// $config['file_icons']['extension'] = 'some_file.png';

	// Location of thumbnail to use for spoiler images.
	$config['spoiler_image'] = 'static/spoiler-kissu.png';
	// Location of thumbnail to use for deleted images.
	$config['image_deleted'] = 'static/deleted.png';
	
	$config['spoiler_images'] = true;
	$config['enable_embedding'] =true;
	$config['allow_upload_by_url'] = true;
	
	$config['flood_board_active'] = true;
	$config['flood_recaptcha'] = true;
	$config['flood_captchouli'] = true;
	
	$config['markup'][] = array("/^[ |\t]*\[spoiler\](.+?)\[\/spoiler\][ |\t]*$/m", "<span class=\"spoiler\">\$1</span>");

	// $config['file_script'] = 'main.js';
	$config['additional_javascript'][] = 'js/jquery.min.js';
	$config['additional_javascript'][] = 'js/jquery.mixitup.min.js';
	$config['additional_javascript'][] = 'js/jquery-ui.custom.min.js';
	
	$config['additional_javascript'][] = 'js/strftime.min.js';	
	$config['additional_javascript'][] = 'js/ajax.js';
	$config['additional_javascript'][] = 'js/settings.js';
	$config['additional_javascript'][] = 'js/options.js';
	$config['additional_javascript'][] = 'js/style-select.js';
	$config['additional_javascript'][] = 'js/options/general.js';
	$config['additional_javascript'][] = 'js/options/user-css.js';
	// $config['additional_javascript'][] = 'js/options/user-js.js'; 	//contribute to the site instead...
	$config['additional_javascript'][] = 'js/webm-settings.js';
	
	$config['additional_javascript'][] = 'js/expand.js';
	$config['additional_javascript'][] = 'js/ajax-post-controls.js';
	$config['additional_javascript'][] = 'js/inline-expanding.js';
	$config['additional_javascript'][] = 'js/post-hover.js'; 
	$config['additional_javascript'][] = 'js/catalog-link-kissu.js'; 
	$config['additional_javascript'][] = 'js/catalog.js';  
	$config['additional_javascript'][] = 'js/comment-toolbar.js';
	$config['additional_javascript'][] = 'js/image-hover.js';
	$config['additional_javascript'][] = 'js/show-backlinks.js';
	$config['additional_javascript'][] = 'js/expand-audio.js';
	$config['additional_javascript'][] = 'js/expand-video.js';
	$config['additional_javascript'][] = 'js/quick-reply.js';
	$config['additional_javascript'][] = 'js/quick-post-controls.js';
	$config['additional_javascript'][] = 'js/treeview.js';
	$config['additional_javascript'][] = 'js/youtube.js';
		
		//hack
	$config['additional_javascript'][] = 'js/local-time.js';
	
	//what does this do?
	// $config['additional_javascript'][] = 'js/inline.js';
		//broken jquery
	// $config['additional_javascript'][] = 'js/options/general.js';
	
	$config['webm']['use_ffmpeg'] = true;
	$config['webm']['allow_audio'] = true;
	$config['webm']['max_length'] = 90000;
	$config['webm']['ffmpeg_path'] = 'ffmpeg';
	$config['webm']['ffprobe_path'] = 'ffprobe';
	
	$config['boards'] = array(
		array('home' => '/'),
		array('b','qa'),
		array('xmas'),
		array('f'=>'http://swfchan.org/', 'qa4' => 'https://boards.4channel.org/qa/', 'ViQa' => 'https://github.com/ECHibiki/ViQa-Kissu/')
	);
	
	$config['capcode'] = ' <span class="capcode">## %s</span>';
	$config['custom_capcode']['Custom'] ='<span class="capcode" style="color:lightgreen;font-style:italic;font-weight:bold"> ## %s</span>';
	$config['custom_capcode']['Mod'] = array(
		'<span class="capcode" style="color:purple"> ## %s</span>',
		'color:purple', // Change name style; optional
		'color:purple' // Change tripcode style; optional
	);
	$config['custom_capcode']['Admin'] = array(
		'<span class="capcode" style="color:red;font-weight:bold"> ## %s</span>',
		'color:red;font-weight:bold', // Change name style; optional
		'color:red;font-weight:bold' // Change tripcode style; optional
	);
	$config['stylesheets']['Yotsuba B'] = ''; // Default; there is no additional/custom stylesheet for this.
	$config['stylesheets']['Yotsuba'] = 'yotsuba.css';
	$config['stylesheets']['Burichan'] = 'burichan.css';
	$config['stylesheets']['caffe'] = 'caffe.css';
	$config['stylesheets']['confraria'] = 'confraria.css';
	$config['stylesheets']['dark'] = 'dark.css';
	$config['stylesheets']['dark_roach'] = 'dark_roach.css';
	$config['stylesheets']['favela'] = 'favela.css';
	$config['stylesheets']['Futaba'] = 'futaba.css';
	$config['stylesheets']['futaba+vichan'] = 'futaba+vichan.css';
	$config['stylesheets']['futaba-light'] = 'futaba-light.css';
	$config['stylesheets']['gentoochan'] = 'gentoochan.css';
	$config['stylesheets']['greendark'] = 'greendark.css';
	$config['stylesheets']['jungle'] = 'jungle.css';
	$config['stylesheets']['luna'] = 'luna.css';
	$config['stylesheets']['miku'] = 'miku.css';
	$config['stylesheets']['nigrachan'] = 'nigrachan.css';
	$config['stylesheets']['northboard_cb'] = 'northboard_cb.css';
	$config['stylesheets']['notsuba'] = 'notsuba.css';
	$config['stylesheets']['novo_jungle'] = 'novo_jungle.css';
	$config['stylesheets']['photon'] = 'photon.css';
	$config['stylesheets']['piwnichan'] = 'piwnichan.css';
	$config['stylesheets']['ricechan'] = 'ricechan.css';
	$config['stylesheets']['roach'] = 'roach.css';
	$config['stylesheets']['rugby'] = 'rugby.css';
	$config['stylesheets']['sharp'] = 'sharp.css';
	$config['stylesheets']['stripes'] = 'stripes.css';
	$config['stylesheets']['style'] = 'style.css';
	$config['stylesheets']['szalet'] = 'szalet.css';
	$config['stylesheets']['terminal2'] = 'terminal2.css';
	$config['stylesheets']['testorange'] = 'testorange.css';
	$config['stylesheets']['v8ch'] = 'v8ch.css';
	$config['stylesheets']['wasabi'] = 'wasabi.css';
	
	$config['default_stylesheet'] = array('dark', $config['stylesheets']['dark']);
	
	$config['flood_time'] = 10;
	$config['flood_time_ip'] = 120;
	$config['flood_time_same'] = 30;
	$config['max_body'] = 1800;
	$config['reply_limit'] = 250;
	$config['max_links'] = 20;
	$config['max_filesize'] = 20 * 1024 * 1024; // 20MB
	$config['thumb_width'] = 255;
	$config['thumb_height'] = 255;
	$config['max_width'] = 10000;
	$config['max_height'] = 10000;
	$config['threads_per_page'] = 10;
	$config['max_pages'] = 10;
	$config['threads_preview'] = 5;
	$config['root'] = '/';

//real values hidden in secrets.php
	$config['cookies']['mod'] = 'mod';
	$config['cookies']['salt'] = 'OSSL.4nVghVWXBA4pJq9EbC11kViYMrcZ0Zj4SNr4Dq6CjDXtw5d5q1k7q8EnwGWLJpHql8OKrjO2iPlTC2w4UazFJnZMeKg9gLpfndVWkwNPLROMnxwD/ZCmC7i3NnBDwH0R6P9/P43PJUP8RINiDlSa0bYtHNnbLYpwE6gvm0659So=';
	$config['secure_trip_salt'] = 'OSSL.xW22/q5Meo8MXBOlhBlvw+UlBpFt0sRuoBLynIw2MOsQ19zgb8adpAcRGBdz8vlVpOOq0s5AVe51rZ73mA1lIBcJAvKtjR3LlYrOkoEJIyruQA/AVen9tyIg4GREGyXKe9t1KqPSZQY1+UwFjAldvpQRwe/GbTCkEqB74KqofmU=';

// Changes made via web editor by "verniy" @ Sun, 02 Dec 2018 15:34:22 -0800:
$config['debug'] = true;
$config['debug_explain'] = true;
$config['syslog'] = true;
$config['dns_system'] = true;
$config['proxy_check'] = true;
$config['force_body_op'] = false;
// Changes made via web editor by "verniy" @ Sun, 02 Dec 2018 15:50:14 -0800:
$config['debug'] = false;
// Changes made via web editor by "verniy" @ Sun, 02 Dec 2018 15:50:58 -0800:
$config['debug_explain'] = false;
// Changes made via web editor by "verniy" @ Sun, 02 Dec 2018 15:51:24 -0800:
$config['syslog'] = false;
// Changes made via web editor by "verniy" @ Sun, 02 Dec 2018 15:51:53 -0800:
$config['dns_system'] = false;
$config['proxy_save'] = true;

// Changes made via web editor by "verniy" @ Tue, 04 Dec 2018 17:30:30 -0500:
$config['global_message'] = 'Site should be stable for the next week while anti-spam is developing';


// Changes made via web editor by "verniy" @ Tue, 04 Dec 2018 17:30:58 -0500:
$config['global_message'] = 'Site should be stable for the next week while anti-spam is in development';


// Changes made via web editor by "verniy" @ Wed, 05 Dec 2018 04:27:03 -0500:
$config['global_message'] = 'http://kissu.moe/b/res/198.html';


// Changes made via web editor by "verniy" @ Wed, 05 Dec 2018 04:27:39 -0500:
$config['global_message'] = '<a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Wed, 05 Dec 2018 04:28:48 -0500:
$config['global_message'] = 'http://kissu.moe/b/res/198.html';


// Changes made via web editor by "verniy" @ Wed, 05 Dec 2018 04:28:58 -0500:
$config['global_message'] = '<a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';



//real values hidden in secrets.php
$config['recaptcha_public'] = '6LcbFH8UAAAAAA_8qhW2AwsOebJl3oZEXKdZR290';
$config['recaptcha_private'] = '6LcbFH8UAAAAAKg0Z9OqZkxl-0lbVuugkJeGmGn7';


// Changes made via web editor by "verniy" @ Wed, 05 Dec 2018 21:00:38 -0500:
$config['new_thread_capt'] = false;


// Changes made via web editor by "verniy" @ Thu, 06 Dec 2018 15:52:27 -0500:
$config['recaptcha'] = false;

require("secrets.php"); // contains confidential files


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 07:41:28 -0500:
$config['global_message'] = 'Try out the ne nightmare captcha: http://kissu.moe:8003<br/><a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 15:30:45 -0500:
$config['global_message'] = 'Try out the new nightmare captcha(now with less nightmares): http://kissu.moe/captcha<br/><a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 15:31:35 -0500:
$config['global_message'] = 'Try out the ne nightmare captcha(now with less nightmares!): <a href="http://kissu.moe/captcha">http://kissu.moe/captcha</a><br/><a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 15:31:39 -0500:
$config['global_message'] = 'Try out the new nightmare captcha(now with less nightmares): http://kissu.moe/captcha<br/><a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 15:32:57 -0500:
$config['global_message'] = 'Try out the ne nightmare captcha(now with less nightmares!): <a href="http://kissu.moe/captcha">http://kissu.moe/captcha</a><br/><a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 16:15:02 -0500:
$config['global_message'] = 'Try out the new nightmare captcha(now with less nightmares!): <a href="http://kissu.moe/captcha">http://kissu.moe/captcha</a><br/><a href="http://kissu.moe/b/res/198.html">http://kissu.moe/b/res/198.html</a>';


// Changes made via web editor by "verniy" @ Sun, 09 Dec 2018 19:56:39 -0500:
$config['global_message'] = 'New captcha is building';


// Changes made via web editor by "verniy" @ Mon, 10 Dec 2018 03:56:03 -0500:
$config['global_message'] = 'qr box moves and you can like set the captcha';


// Changes made via web editor by "verniy" @ Mon, 10 Dec 2018 03:56:07 -0500:
$config['global_message'] = 'New captcha is building';


// Changes made via web editor by "verniy" @ Mon, 10 Dec 2018 03:56:18 -0500:
$config['global_message'] = 'qr box moves and you can like set the captcha';

