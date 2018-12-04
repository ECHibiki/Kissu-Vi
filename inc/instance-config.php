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
	
	require("secrets.php"); // contains above config files
	
	$config['timezone'] = 'America/New_York';
	
	$config['allowed_ext_files'][] = 'webm';
	$config['allowed_ext_files'][] = 'mp4';
	$config['allowed_ext_files'][] = 'mp3';
	$config['allowed_ext_files'][] = 'flac';
	$config['allowed_ext_op'] = [true];
	
	$config['spoiler_images'] = true;
	
	// $config['file_script'] = 'main.js';
	$config['additional_javascript'][] = 'js/jquery.min.js';
	$config['additional_javascript'][] = 'js/jquery.mixitup.min.js';
	$config['additional_javascript'][] = 'js/strftime.min.js';	
	$config['additional_javascript'][] = 'js/ajax.js';
	$config['additional_javascript'][] = 'js/settings.js';
	$config['additional_javascript'][] = 'js/options.js';
	$config['additional_javascript'][] = 'js/style-select.js';
	$config['additional_javascript'][] = 'js/options/general.js';
	$config['additional_javascript'][] = 'js/options/user-css.js';
	$config['additional_javascript'][] = 'js/options/user-js.js';
	$config['additional_javascript'][] = 'js/webm-settings.js';
	
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
		array('b'),
		array('qa'),
		array('verniy' => 'https://github.com/ECHibiki/ViQa-Kissu/')
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
	
	$config['cookies']['mod'] = 'mod';
	$config['cookies']['salt'] = 'OSSL.4nVghVWXBA4pJq9EbC11kViYMrcZ0Zj4SNr4Dq6CjDXtw5d5q1k7q8EnwGWLJpHql8OKrjO2iPlTC2w4UazFJnZMeKg9gLpfndVWkwNPLROMnxwD/ZCmC7i3NnBDwH0R6P9/P43PJUP8RINiDlSa0bYtHNnbLYpwE6gvm0659So=';
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