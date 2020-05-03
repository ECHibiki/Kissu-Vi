<?php

/*

* Instance Configuration

* ----------------------

* Edit this file and not config.php for imageboard configuration.

*

* You can copy values from config.php (defaults) and paste them here.

*/

$config['db']['server'] = '';

$config['db']['database'] = '';

$config['db']['prefix'] = '';

$config['db']['user'] = '';

$config['db']['password'] = '';

// Use a persistent database connection when possible
$config['db']['persistent'] = false;

$config['wordfilters'][] = array('/\bcoo{1,2}m([^\W]*)\b/i', 'sperm$1', true); // 'true' means it's a regular expression
$config['wordfilters'][] = array('/\bco(o{3,})m([^\W]*)\b/i', 'speeeeeerm$2', true); // 'true' means it's a regular expression


// Set this to true if you're using Linux and you can execute `md5sum` binary.

$config['gnu_md5'] = false;

$config['url_favicon'] = '/static/favicon.png';
// $config['url_favicon'] = '/static/nen.ico';

$config['timezone'] = 'America/New_York';

$config['allowed_ext'][] = 'jpg';
$config['allowed_ext'][] = 'jpeg';
$config['allowed_ext'][] = 'bmp';
$config['allowed_ext'][] = 'gif';
$config['allowed_ext'][] = 'png';

$config['allowed_ext_files'][] = 'webm';
$config['allowed_ext_files'][] = 'ogv';
$config['allowed_ext_files'][] = 'mp4';
$config['allowed_ext_files'][] = 'mp3';
$config['allowed_ext_files'][] = 'ogg';
$config['allowed_ext_files'][] = 'opus';
$config['allowed_ext_files'][] = 'flac';
$config['allowed_ext_files'][] = 'zip';
$config['allowed_ext_files'][] = '7z';

$config['file_index'] = 'index.php';

$config['board_locked'] = false;

// For resizing, maximum thumbnail dimensions.

$config['thumb_width'] = 175;

$config['thumb_height'] = 175;

//where to request captcha
$config['captchouli_addr'] = 'https://4taba2.net:8512/';

$config['minimum_copy_resize'] = true;

$config['file_icons']['default'] = 'kissu-file-old.png';
$config['file_icons']['zip'] = 'zip.png';
$config['file_icons']['7z'] = 'zip.png';
$config['file_icons']['webm'] = 'kissu-video.png';
$config['file_icons']['mp4'] = 'kissu-video.png';
$config['spoiler_image'] = 'static/kissu-spoiler.png';
$config['image_deleted'] = 'static/deleted.png';

$config['always_noko'] = false;

$config['file_page'] = '%d.php';
$config['remove_ext'] = true;
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

$config['ban_appeals_max'] = 2;
// Show moderator name on ban page.

$config['show_modname'] = true;

// Maximum amount of threads to display per page.

$config['threads_per_page'] = 15;


// Same as above, but for stickied threads.

$config['threads_preview_sticky'] = 3;



// Additional lines added to the footer of all pages.

$config['footer'][] = _('Concerns to the gmail of ECVerniy');


// Location of thumbnail to use for deleted images.

$config['spoiler_images'] = true;
$config['enable_embedding'] =true;
$config['allow_upload_by_url'] = true;
$config['flood_board_active'] = true;
$config['flood_recaptcha'] = true;
$config['flood_captchouli'] = true;

// $config['file_script'] = 'main.js';

$config['additional_javascript'][] = 'js/jquery-3.4.1.min.js';
$config['additional_javascript'][] = 'js/jquery.mixitup.min.js';
$config['additional_javascript'][] = 'js/jquery-ui.custom.min.js';
$config['additional_javascript'][] = 'js/strftime.min.js';
$config['additional_javascript'][] = 'js/ajax.js';
$config['additional_javascript'][] = 'js/settings.js';

//$config['additional_javascript'][] = 'js/hide-threads.js';
$config['additional_javascript'][] = 'js/options.js';
$config['additional_javascript'][] = 'js/style-select.js';
$config['additional_javascript'][] = 'js/options/general.js';
$config['additional_javascript'][] = 'js/options/user-css.js';
$config['additional_javascript'][] = 'js/index-updater.js';
$config['additional_javascript'][] = 'js/catalog.js'; 
$config['additional_javascript'][] = 'js/formatting-faq-kissu.js';
$config['additional_javascript'][] = 'js/quick-reply.js';
$config['additional_javascript'][] = 'js/quick-post-controls.js';
$config['additional_javascript'][] = 'js/catalog-search.js';
$config['additional_javascript'][] = 'js/mascots+spread.js';
$config['additional_javascript'][] = 'js/welcome-message.js';

//festive
// $config['additional_javascript'][] = 'js/confetti.js';



//what does this do?
// $config['additional_javascript'][] = 'js/inline.js';
//broken jquery
// $config['additional_javascript'][] = 'js/options/general.js';


$site_tags = array('hima', 'nen', 'what', 'ota', 'bun');
$site_urls = array('https://himasugi.blog/jp/','https://kakashi-nenpo.com/', 'http://what-ch.mooo.com/what/', 'https://ota-ch.com/jp/index.html', 'http://bunbunmaru.com/wakaba/general/');
$rand = rand(0,count($site_urls) - 1);

$config['webm']['use_ffmpeg'] = true;
$config['webm']['allow_audio'] = true;
$config['webm']['max_length'] = 90000;
$config['webm']['ffmpeg_path'] = 'ffmpeg';
$config['webm']['ffprobe_path'] = 'ffprobe';
$config['boards'] = array(
	array('home' => '/', 'bans'=>'/bans', 'all'=>'/all/'),
	array('g'=>'/b/','qa'=>'/qa/', 'spg'=>'/spg/'),
	array('f'=>'/f/','megu'=>'/megu/'),
	array('tv'=>'https://theatre.kissu.moe', 'bann'=>'https://banners.kissu.moe', 'poll'=>'/poll/'),
	array('kissu' => 'https://github.com/ECHibiki/Kissu/', 'tab2' => 'http://4taba2.net/board/all', 'blog' => 'https://blog.verniy.ca')
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

$config['stylesheets']['Yotsu Kissu B'] = 'yotsuba-kissu-b.css';

//$config['stylesheets']['Yotsuba B'] = ''; //Default; there is no additional/custom stylesheet for this.

$config['stylesheets']['Dark-Kissu(Saturated)'] = 'Dark-kissu.css'; // Advanced;

$config['stylesheets']['Kissu(Experimental)'] = 'kissu.css'; // Experimental;

$config['stylesheets']['New-Years'] = 'new-years-theme.css'; // New Years;

$config['stylesheets']['Kissumas'] = 'kissumas.css'; // Christmas;

$config['stylesheets']['Nen'] = 'hatate.css'; 

$config['stylesheets']['Trevor'] = 'trevor.css'; 

$config['stylesheets']['Yotsuba B'] = 'style.css';

$config['stylesheets']['Yotsuba'] = 'yotsuba.css';

$config['stylesheets']['Dark'] = 'dark.css';

$config['stylesheets']['Futaba'] = 'futaba.css';

$config['stylesheets']['Burichan'] = 'burichan.css';

$config['stylesheets']['caffe'] = 'caffe.css';

$config['stylesheets']['confraria'] = 'confraria.css';

$config['stylesheets']['dark_roach'] = 'dark_roach.css';

$config['stylesheets']['favela'] = 'favela.css';

$config['stylesheets']['futaba+vichan'] = 'futaba+vichan.css';

$config['stylesheets']['futaba-light'] = 'futaba-light.css';

$config['stylesheets']['gentoochan'] = 'gentoochan.css';

$config['stylesheets']['greendark'] = 'greendark.css';

$config['stylesheets']['jungle'] = 'jungle.css';

// $config['stylesheets']['luna'] = 'luna.css';

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

$config['stylesheets']['szalet'] = 'szalet.css';

$config['stylesheets']['terminal2'] = 'terminal2.css';

$config['stylesheets']['testorange'] = 'testorange.css';

$config['stylesheets']['v8ch'] = 'v8ch.css';

$config['stylesheets']['wasabi'] = 'wasabi.css';

$config['default_stylesheet'] = array('yotsuba-kissu-b.css', $config['stylesheets']['Yotsu Kissu B'], null);

$config['flood_time'] = 10;

$config['flood_time_ip'] = 120;

$config['flood_time_same'] = 30;

$config['max_body'] = 4000;

$config['max_links'] = 20;

$config['max_filesize'] = 20 * 1024 * 1024; // 20MB

$config['max_width'] = 10000;

$config['max_height'] = 10000;

$config['threads_preview'] = 5;

$config['root'] = '/';

$config['cookies']['mod'] = 'mod';

$config['cookies']['salt'] = 'OSSL.4nVghVWXBA4pJq9EbC11kViYMrcZ0Zj4SNr4Dq6CjDXtw5d5q1k7q8EnwGWLJpHql8OKrjO2iPlTC2w4UazFJnZMeKg9gLpfndVWkwNPLROMnxwD/ZCmC7i3NnBDwH0R6P9/P43PJUP8RINiDlSa0bYtHNnbLYpwE6gvm0659So=';

$config['secure_trip_salt'] = 'OSSL.xW22/q5Meo8MXBOlhBlvw+UlBpFt0sRuoBLynIw2MOsQ19zgb8adpAcRGBdz8vlVpOOq0s5AVe51rZ73mA1lIBcJAvKtjR3LlYrOkoEJIyruQA/AVen9tyIg4GREGyXKe9t1KqPSZQY1+UwFjAldvpQRwe/GbTCkEqB74KqofmU=';

$config['proxy_check'] = true;

$config['force_body_op'] = false;

$config['debug'] = false;

$config['debug_explain'] = false;

$config['syslog'] = false;

$config['dns_system'] = false;

$config['proxy_save'] = true;
//real values hidden in secrets.php

$config['recaptcha_public'] = '6LcbFH8UAAAAAA_8qhW2AwsOebJl3oZEXKdZR290';

$config['recaptcha_private'] = '6LcbFH8UAAAAAKg0Z9OqZkxl-0lbVuugkJeGmGn7';// Changes made via web editor by "verniy" @ Wed, 05 Dec 2018 21:00:38 -0500:

$config['new_thread_capt'] = false;

require("secrets.php"); 

$config['youtube_js_html'] = '<div class="video-container" data-video="$2">\'. \'<a href="https://youtu.be/$2" target="_blank" class="file">\'. \'<img style="" src="//img.youtube.com/vi/$2/0.jpg" class="post-image"/>\'. \'</a></div>';

$config["ban_block"] = false;

$config["enable_proxy_scrape"] = true;

$config['image_hard_limit'] = 0;

$config['allow_roll'] = true;

$config['max_pages'] = 10;

$config['public_logs'] = 1;// Changes made via web editor by "verniy" @ Sat, 22 Dec 2018 23:48:58 -0500:

$config['global_message'] = 'Site changes mostly done(exceptions to bugs and simple requests).<br/>Add `repo` to the option field if you want threads to be reposted to qa4';

$config['reply_limit'] = 150;
$config['max_body'] = 6000;


// Changes made via web editor by "verniy" @ Sat, 02 Feb 2019 17:10:08 -0500:
$config['max_body'] = 6500;


// Changes made via web editor by "verniy" @ Sat, 02 Feb 2019 17:10:40 -0500:
$config['max_body'] = 6000;

// Changes made via web editor by "verniy" @ Tue, 19 Mar 2019 20:03:21 -0400:
$config['field_hide_password'] = true;

// Changes made via web editor by "verniy" @ Tue, 02 Apr 2019 12:31:43 -0400:
$config['ban_block'] = false;


// Changes made via web editor by "verniy" @ Wed, 03 Apr 2019 19:37:09 -0400:
$config['show_modname'] = false;


// Changes made via web editor by "verniy" @ Wed, 03 Apr 2019 23:53:37 -0400:
$config['show_modname'] = true;

// Changes made via web editor by "verniy" @ Fri, 12 Apr 2019 01:50:16 -0400:
$config['ban_block'] = false;


// Changes made via web editor by "verniy" @ Sun, 05 May 2019 18:09:47 -0400:
$config['max_filesize'] = 41943040;

$config['flood_time_same'] = 1200;
$config['flood_board_time'] = 300;


// Changes made via web editor by "cool-guy" @ Thu, 15 Aug 2019 19:46:14 -0400:
$config['flood_recaptcha'] = true;
$config['flood_captchouli'] = true;



// Changes made via web editor by "verniy" @ Thu, 15 Aug 2019 21:08:44 -0400:
$config['flood_board_time'] = 20;


// Changes made via web editor by "verniy" @ Fri, 16 Aug 2019 00:00:08 -0400:
$config['flood_board_time'] = 10;


// Changes made via web editor by "cool-guy" @ Fri, 16 Aug 2019 02:45:56 -0400:
$config['global_message'] = 'Proud part of the /qa/ webring with<a href="http://4taba.net/"> http://4taba.net/,</a> <a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';

	$config['custom_capcode']['Kissu Pro'] ='<span class="capcode" style="color:lightgreen;font-style:italic;font-weight:bold"> ## %s</span>';


// Changes made via web editor by "verniy" @ Mon, 19 Aug 2019 23:33:14 -0400:
$config['global_message'] = 'Proud part of the /qa/ webring with<a style="color:green" href="http://4taba.net/"> http://4taba.net/,</a> <a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Tue, 20 Aug 2019 13:39:44 -0400:
$config['global_message'] = 'Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a> <a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Tue, 20 Aug 2019 20:11:41 -0400:
$config['global_message'] = 'New sticky on /b/<br/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a> <a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Tue, 20 Aug 2019 21:41:30 -0400:
$config['image_reject_repost'] = false;


// Changes made via web editor by "verniy" @ Sat, 24 Aug 2019 10:24:17 -0400:
$config['threads_preview_sticky'] = 1;


// Changes made via web editor by "verniy" @ Sat, 24 Aug 2019 10:29:51 -0400:
$config['threads_preview_sticky'] = 3;


// Changes made via web editor by "verniy" @ Wed, 28 Aug 2019 17:37:33 -0400:
$config['ban_block'] = false;

// Changes made via web editor by "verniy" @ Sat, 31 Aug 2019 13:27:49 -0400:
$config['global_message'] = 'Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a> <a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';
$config['user_moderation'] = true;


// Changes made via web editor by "verniy" @ Sat, 31 Aug 2019 13:35:39 -0400:
$config['search']['enable'] = true;
$config['board_search'] = true;


// Changes made via web editor by "verniy" @ Sat, 31 Aug 2019 14:04:24 -0400:
$config['board_search'] = false;


// Changes made via web editor by "verniy" @ Sat, 31 Aug 2019 15:02:41 -0400:
$config['ban_block'] = true;


// Changes made via web editor by "verniy" @ Wed, 04 Sep 2019 11:00:23 -0400:
$config['check_updates'] = false;

// Changes made via web editor by "cool-guy" @ Tue, 10 Sep 2019 03:51:06 -0400:
$config['anonymous'] = 'Anonymous';
$config['button_newtopic'] = 'New Topic';
$config['button_reply'] = 'New Reply';

// Changes made via web editor by "verniy" @ Tue, 10 Sep 2019 17:22:29 -0400:
$config['remove_ext'] = true;

// Changes made via web editor by "verniy" @ Sat, 14 Sep 2019 16:01:47 -0400:
$config['url_banner_list'] = '/static/banners/banner-kissu-1.png,/static/banners/banner-kissu-2.png,/static/banners/banner-kissu-3.gif,/static/banners/banner-kissu-4.gif,/static/banners/banner-kissu-5.jpg,/static/banners/banner-kissu-6.png,/static/banners/banner-kissu-7.jpg,/static/banners/banner-kissu-8.gif,/static/banners/banner-kissu-9.gif,/static/banners/banner-kissu-10.jpg,/static/banners/banner-kissu-11.png,/static/banners/banner-kissu-12.gif,/static/banners/banner-kissu-13.png,/static/banners/banner-kissu-14.gif,/static/banners/banner-kissu-15.png,/static/banners/banner-kissu-16.gif,/static/banners/banner-kissu-16.png,/static/banners/banner-kissu-17.png,/static/banners/banner-kissu-18.png,/static/banners/banner-kissu-18.png,/static/banners/banner-kissu-19.jpg,/static/banners/banner-kissu-20.jpg,/static/banners/banner-kissu-21.jpg,/static/banners/banner-kissu-22.jpg,/static/banners/banner-kissu-23.png,/static/banners/banner-kissu-24.png,/static/banners/banner-kissu-25.jpg,/static/banners/banner-kissu-26.jpg,/static/banners/banner-kissu-27.jpg';

// Changes made via web editor by "verniy" @ Mon, 16 Sep 2019 13:05:47 -0400:
$config['max_pages'] = 10;

// Changes made via web editor by "verniy" @ Wed, 18 Sep 2019 21:31:17 -0400:
$config['always_noko'] = false;

// Changes made via web editor by "verniy" @ Thu, 19 Sep 2019 03:23:56 -0400:
$config['reply_limit'] = 151;

// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 14:36:15 -0400:
$config['global_message'] = '<h3>Mascots Done, check in the options and add a URL.</h3> Updating post form to have more options and be more compact. catalog post form might be buggy today <hr/> Polling and mod transparency updates<hr/>Last set of updates for this season<hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a><a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 14:39:06 -0400:
$config['advanced_post_form'] = true;


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 16:54:11 -0400:
$config['global_message'] = '';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 16:55:34 -0400:
$config['global_message'] = '<h3>Mascots Done, check in the options and add a URL.</h3> Updating post form to have more options and be more compact. catalog post form might be buggy today <hr/> Polling and mod transparency updates<hr/>Last set of updates for this season<hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a><a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 17:01:38 -0400:
$config['global_message'] = '';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 17:01:43 -0400:
$config['global_message'] = '<h3>Mascots Done, check in the options and add a URL.</h3> Updating post form to have more options and be more compact. catalog post form might be buggy today <hr/> Polling and mod transparency updates<hr/>Last set of updates for this season<hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a><a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 18:40:08 -0400:
$config['global_message'] = '<h3>Mascots Done, check in the options and add a URL.</h3> <hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a><a href="http://wakabb.net/">http://wakabb.net/,</a> and <a href="https://qa.booru.org/">https://qa.booru.org/</a>';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 19:08:00 -0400:
$config['global_message'] = '<h3>Mascots Done, check in the options and add a URL.</h3> <hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Sat, 21 Sep 2019 19:08:53 -0400:
$config['global_message'] = 'Mascots Done, check in the options and add a URL.<br/><a href="https://kissu.moe/b/res/1415#1752">Give feedback on the new reply form</a> <hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "cool-guy" @ Mon, 23 Sep 2019 01:11:50 -0400:
$config['new_thread_capt'] = true;


// Changes made via web editor by "cool-guy" @ Mon, 23 Sep 2019 01:18:55 -0400:
$config['new_thread_capt'] = false;


// Changes made via web editor by "verniy" @ Mon, 23 Sep 2019 16:33:10 -0400:
$config['global_message'] = 'Quick reply now available in the index <hr>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Mon, 23 Sep 2019 21:44:22 -0400:
$config['global_message'] = 'Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Wed, 25 Sep 2019 19:35:13 -0400:
$config['global_message'] = '<h2>Big merge in a few minutes, site won\'t be available for 10-30 minutes probably</h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Wed, 25 Sep 2019 20:25:40 -0400:
$config['debug'] = true;
$config['debug_explain'] = true;


// Changes made via web editor by "verniy" @ Wed, 25 Sep 2019 20:48:21 -0400:
$config['debug'] = false;
$config['debug_explain'] = false;


// Changes made via web editor by "verniy" @ Wed, 25 Sep 2019 20:55:58 -0400:
$config['global_message'] = '<h2></h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 04:18:58 -0400:
$config['global_message'] = '<h2>Merging</h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 04:36:40 -0400:
$config['debug'] = true;
$config['debug_explain'] = true;
$config['archive']['lifetime'] = 0;


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 04:54:24 -0400:
$config['debug'] = false;
$config['debug_explain'] = false;


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 05:03:38 -0400:
$config['archive']['lifetime'] = 1;


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 05:09:39 -0400:
$config['global_message'] = 'Really sketchy catalog added, might remove if it ends up crashing site again</h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,';


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 11:15:07 -0400:
$config['global_message'] = 'We have an archive, but I don\'t think I can unarchive as yet<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,';


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 11:21:11 -0400:
$config['global_message'] = 'We have an archive, because why not<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Thu, 26 Sep 2019 13:13:39 -0400:
$config['feature']['threads'] = false;

// Changes made via web editor by "cool-guy" @ Fri, 27 Sep 2019 16:38:53 -0400:

// Changes made via web editor by "verniy" @ Sat, 28 Sep 2019 17:30:03 -0400:
$config['user_moderation'] = false;


// Changes made via web editor by "verniy" @ Sun, 29 Sep 2019 13:47:51 -0400:
$config['archive']['lifetime'] = 365;


// Changes made via web editor by "verniy" @ Mon, 30 Sep 2019 04:42:47 -0400:
$config['global_message'] = 'We have an archive<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Mon, 30 Sep 2019 04:43:17 -0400:
$config['global_message'] = 'Merge for Poll board after backing up site<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Mon, 30 Sep 2019 12:00:18 -0400:
$config['display_flags'] = false;
$config['minify_js'] = true;


// Changes made via web editor by "verniy" @ Mon, 30 Sep 2019 12:09:43 -0400:
$config['gzip_static'] = true;


// Changes made via web editor by "verniy" @ Mon, 30 Sep 2019 12:21:03 -0400:
$config['cache_config'] = true;


// Changes made via web editor by "verniy" @ Mon, 30 Sep 2019 12:24:13 -0400:
$config['cache_config'] = false;

// Changes made via web editor by "verniy" @ Thu, 03 Oct 2019 17:18:24 -0400:
$config['nerf_mods'] = true;


// Changes made via web editor by "verniy" @ Thu, 03 Oct 2019 17:33:11 -0400:
$config['global_message'] = '<a href="https://kissu.moe/bans">https://kissu.moe/bans</a><hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms';


// Changes made via web editor by "verniy" @ Sun, 06 Oct 2019 15:09:29 -0400:
$config['archive']['lifetime'] = 31;


// Changes made via web editor by "cool-guy" @ Mon, 25 Nov 2019 18:23:52 -0500:
$config['global_message'] = '<a href="https://kissu.moe/bans">https://kissu.moe/bans</a><hr/>Tsukuyomi Moon Phase stream this Friday at 7PM EST to celebrate one year of kissu (kissu (kissu))!';


// Changes made via web editor by "verniy" @ Wed, 27 Nov 2019 13:40:47 -0500:
$config['archive']['lifetime'] = 24;


// Changes made via web editor by "verniy" @ Wed, 27 Nov 2019 13:59:23 -0500:
$config['archive']['lifetime'] = 14;


// Changes made via web editor by "verniy" @ Sat, 07 Dec 2019 22:55:47 -0500:
$config['ban_block'] = false;


// Changes made via web editor by "verniy" @ Sat, 07 Dec 2019 22:56:32 -0500:
$config['db']['persistent'] = true;
$config['ban_block'] = true;


// Changes made via web editor by "verniy" @ Sat, 07 Dec 2019 22:57:11 -0500:
$config['db']['persistent'] = false;
$config['ban_block'] = false;


// Changes made via web editor by "cool-guy" @ Sun, 08 Dec 2019 03:36:22 -0500:
$config['global_message'] = '<a href="https://kissu.moe/bans">https://kissu.moe/bans</a><hr/>Merry <a href="/xmas/">https://kissu.moe/xmas</a>!';


// Changes made via web editor by "cool-guy" @ Sun, 08 Dec 2019 03:58:51 -0500:
$config['global_message'] = '<a href="https://kissu.moe/bans">https://kissu.moe/bans</a><hr/>Merry <a href="https://kissu.moe/xmas">/xmas/</a>!';


// Changes made via web editor by "verniy" @ Sun, 08 Dec 2019 17:25:29 -0500:
$config['global_message'] = '<a href="https://kissu.moe/bans">/bans/</a><hr/>Merry <a href="https://kissu.moe/xmas">/xmas/</a>!';


// Changes made via web editor by "verniy" @ Mon, 09 Dec 2019 05:43:25 -0500:
$config['global_message'] = 'Merry <a href="https://kissu.moe/xmas">/xmas/</a>!';


// Changes made via web editor by "verniy" @ Tue, 17 Dec 2019 19:34:29 -0500:
$config['global_message'] = 'Things might be unstable<hr/>Merry <a href="https://kissu.moe/xmas">/xmas/</a>!';


// Changes made via web editor by "verniy" @ Tue, 17 Dec 2019 19:48:41 -0500:
$config['global_message'] = 'Merry <a href="https://kissu.moe/xmas">/xmas/</a>!<hr/>Now running PHP7.4+Nginx 16.1';


// Changes made via web editor by "verniy" @ Tue, 17 Dec 2019 19:51:51 -0500:
$config['file_index'] = 'index.html';
$config['file_page'] = '%d.html';


// Changes made via web editor by "verniy" @ Wed, 18 Dec 2019 06:33:02 -0500:
$config['global_message'] = 'Merry <a href="https://kissu.moe/xmas">/xmas/</a>!<hr/>Soon running PHP7.4+Nginx 16.1';


// Changes made via web editor by "verniy" @ Thu, 19 Dec 2019 00:06:44 -0500:
$config['global_message'] = 'Merry <a href="https://kissu.moe/xmas">/xmas/</a>!';


// Changes made via web editor by "verniy" @ Thu, 19 Dec 2019 23:02:40 -0500:
$config['global_message'] = 'Merry <a href="https://kissu.moe/xmas">/xmas/</a>!<hr/>Site will be unstable at 00:00EST for engine updates';


// Changes made via web editor by "verniy" @ Fri, 20 Dec 2019 00:52:44 -0500:
$config['global_message'] = 'Merry <a href="https://kissu.moe/xmas">/xmas/</a>!<hr/>And we\'re back. Watch out for bugs and formatting issues';


// Changes made via web editor by "verniy" @ Sun, 22 Dec 2019 04:46:20 -0500:
$config['stylesheets_board'] = false;

// Changes made via web editor by "verniy" @ Thu, 26 Dec 2019 00:28:54 -0500:
$config['captchouli_addr'] = 'https://4taba2.net:4087/';


// Changes made via web editor by "cool-guy" @ Tue, 07 Jan 2020 19:23:22 -0500:
$config['global_message'] = 'nipah~  //(⁀ᗢ⁀) \\\\';


// Changes made via web editor by "cool-guy" @ Wed, 29 Jan 2020 12:07:46 -0500:
$config['global_message'] = '';

// banners.
$config['banner_ads'] = false;

// Changes made via web editor by "verniy" @ Sat, 29 Feb 2020 21:59:56 -0500:
$config['banner_ads'] = true;


// Changes made via web editor by "verniy" @ Tue, 03 Mar 2020 23:37:29 -0500:
$config['preload_banner'] = true;


// Changes made via web editor by "verniy" @ Tue, 03 Mar 2020 23:49:09 -0500:
$config['preload_banner'] = false;
$config['iframe_banner'] = true;


// Changes made via web editor by "verniy" @ Tue, 03 Mar 2020 23:49:29 -0500:
$config['preload_banner'] = true;
$config['iframe_banner'] = false;


// Changes made via web editor by "verniy" @ Fri, 06 Mar 2020 07:29:40 -0500:
$config['preload_banner'] = false;
$config['iframe_banner'] = true;


// Changes made via web editor by "verniy" @ Fri, 06 Mar 2020 22:03:25 -0500:
$config['preload_banner'] = true;
$config['iframe_banner'] = false;


// Changes made via web editor by "verniy" @ Thu, 12 Mar 2020 15:35:54 -0400:
$config['debug'] = true;


// Changes made via web editor by "verniy" @ Thu, 12 Mar 2020 15:36:00 -0400:
$config['debug'] = false;

	$config['cookies']['mod'] = 'mod';
	$config['cookies']['salt'] = 'OSSL.OboONAHiF1MJF/geMvNzaby9gdJkkmsyrT1aMmrCtuW67Pb2WxPTzkVYyht4+pQGg8w0zVea8HB79PkJqIDcKZX8AhyQTTTJSa7o/o9FCv0UUMDXfcM629CqLSFmrppU6I0AHBn/PotwfcFJE6R8y7ZSd4X43m6ilig93lUave8=';
		$config['secure_trip_salt'] = 'OSSL.zWEUrfIKOkou8+N1qKkbtFrtKD3IfO+EtvPjN+IcUu69uiaRg3RO6lsMYWWeoEETOtqa0SNZ39Hf+7dFUPh5BZfpLfYKwsX9YiX6nKTyNX/OT1rQ3oZn6oa29hrYw+ZdTgN9kj5pm69kmeYbS969l9v7Mu04gUhfShp4UFM1eYQ=';

// Changes made via web editor by "verniy" @ Wed, 18 Mar 2020 16:23:03 -0400:
//$config['mod']['view_bumplock'] = Disabled;


// Changes made via web editor by "verniy" @ Wed, 18 Mar 2020 16:23:32 -0400:
$config['mod']['view_bumplock'] = -1;

// Changes made via web editor by "verniy" @ Tue, 31 Mar 2020 18:16:00 -0400:
$config['global_message'] = 'Site\'s going to break at 20:00EST - 02:00CET';


// Changes made via web editor by "verniy" @ Tue, 31 Mar 2020 19:27:45 -0400:
$config['minify_js'] = false;


// Changes made via web editor by "verniy" @ Tue, 31 Mar 2020 20:05:10 -0400:
$config['js_ui'] = false;

// Changes made via web editor by "verniy" @ Tue, 31 Mar 2020 20:05:25 -0400:
$config['global_message'] = 'Site\'s going to break at 20:00EST - 02:00CET - Please hold...';


