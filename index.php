<<<<<<< HEAD
<!doctype html><html><head>    <meta http-equiv="Content-type" content="text/html; charset=utf-8" /><title>Kissu.moe</title><link rel="stylesheet" media="screen" href="/stylesheets/style.css"/><link rel="stylesheet" media="screen" href="/index.css"/><link rel="shortcut icon" href="/static/favicon.png" /><link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css"><link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" media="screen" href="/stylesheets/style.css"><link rel="shortcut icon" href="/static/favicon.png"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"><link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css"><link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="/static/flags/flags.css"><script type="text/javascript">var configRoot="/";var inMod = false;var modRoot="/"+(inMod ? "mod.php?/" : "");</script><script type="text/javascript" src="/main.js"></script></head><body><?php$t = explode(" ", microtime())[0];$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';while(preg_match("$expresion", getcwd())){chdir ('../');}require_once ('inc/functions.php');require_once ('inc/bans.php');loadConfig();checkDNSBL();checkBan();echo explode(" ", microtime())[0] - $t;?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/index.php" title="Boson Tests">b</a> / <a href="/qa/index.php" title="/qa/">qa</a> ]</span>  <span class="sub" data-description="2">[ <a href="/xmas/index.php" title="Merri Christmasu!">xmas</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script><header>    <img class="icon" src="../templates/themes/index/hikichanIcon.png"><h1>Kissu.moe</h1><div class="subtitle">100% fun</div></header><img class="board_image" src="/static/banner-kissu.png" alt="" /><div class="box-wrap">    <fieldset><legend>Boards</legend><ul><li class="boardlinksurl"><a href="b/">Boson Tests</a></li><li class="boardlinksurl"><a href="qa/">/qa/</a></li><li class="boardlinksurl"><a href="xmas/">Merri Christmasu!</a></li></ul>    </fieldset>    <br>    <div class="mainBox">        <br>        <div class="description">Now serving You!</div>        <br>        <img class="imageofnow" src="../static/kissu-card.png">        <br>        <div class="quoteofnow"></div>        <br>        <iframe class ="videoofnow" width="560" height="315" src="https://www.youtube.com/embed/0uwrDqYhufM"></iframe>        <br>    </div>    <div class="ban"><h2 id="10">S2 Site Code done<span class="unimportant"> &mdash; by verniy at 12/19/18 (Wed) 09:45:41</span></h2><p>For all intents and purposes, the S2 objectives of adding new things to the site is done. I'm just fixing bugs and refactoring/organizing the code. Really all that needs to be done is more style and placement of certain elements.<br/>This videoplayer buisness is mostly a stand alone project that will run on the server, but it isn't actually part of the imageboard itself.</p><h2 id="9">Closing S1 <span class="unimportant"> &mdash; by verniy at 12/19/18 (Wed) 09:44:48</span></h2><p>We're entering closed beta soon.<br/>That means as soon as I've finished up the last part of S1(bump control) you're free to share on rizon, steam and other places with a low spammer count.<br/><br/>Season 2 updates:<br/><br/>More customization and optimization of layout, scripts and styles for unique board feel<br/><br/>Customizations<br/>&lt;li&gt;Reposition the catalog tags&lt;/li&gt;<br/>&lt;li&gt;Remove the ugly 8chan style for superior futaba inspired style&lt;/li&gt;<br/>&lt;li&gt;Yen text&lt;/li&gt;<br/><br/>Optimizations<br/>&lt;li&gt;URL uploading doesn't handle HTML redirects&lt;/li&gt;<br/>&lt;li&gt;URL uploading doesn't like strange extensions&lt;/li&gt;<br/>&lt;li&gt;Youtube Embed doesn't take some forms&lt;/li&gt;<br/>&lt;li&gt;Youtube Embed doesn't go fullscreen&lt;/li&gt;<br/>&lt;li&gt;Expanded markup help and tags&lt;/li&gt;<br/>&lt;li&gt;markup formatting bugs&lt;/li&gt;<br/>&lt;li&gt;code refactoring for anti-spam and anti-bump&lt;/li&gt;<br/><br/><br/>New<br/>&lt;li&gt;VPN, TOR, and proxy blocks&lt;/li&gt;<br/>&lt;li&gt;bans block from viewing site&lt;/li&gt;&lt;/ul&gt;<br/>&lt;li&gt;A friendly system to handle the mod tools&lt;/li&gt;</p><h2 id="4">Github Repo<span class="unimportant"> &mdash; by verniy at 12/03/18 (Mon) 00:37:20</span></h2><p><a href="https://github.com/ECHibiki/ViQa-Kissu" rel="nofollow" target="_blank">https://github.com/ECHibiki/ViQa-Kissu</a><br/><br/>This is the current site repo if you wish to add features to the site. Will be updated "soon"™</p><h2 id="3"> Overly Optimistic Site Planning <span class="unimportant"> &mdash; by verniy at 12/02/18 (Sun) 06:32:08</span></h2><p>Updates to be made before more official release(S1):<br/>* Vichan Setup and Configuration<br/>* CSS configuration<br/>* Antiflood block supplemented or replaced with encouraging captcha<br/>* User Requested UI Improvements<br/><br/>Future(S2):<br/>* Post to Rizon+Steam<br/>* More customization of layout, UI and CSS for unique board feel<br/>* Establish a democratic system of transparent, but powerful moderation<br/>* More mod tools to give better ability to handle problems in the future instead of as they arise<br/>* Small online games similar to what GNFOS did<br/><br/>Future(S3):<br/>* Post to /qa/<br/>* Evaluate effectiveness of mod tool, current moderation structure<br/><br/>Any opinions can be posted in the various ways possible to contact me.</p>    </div>    <h1>Recent Images</h1><div class="box image"><ul><li><a href="/qa/res/277.php#284"><img src="/qa/thumb/1545279507814.png" style="width:255px;height:155px" alt=""></a></li><li><a href="/b/res/4.php#626"><img src="/b/thumb/1545276593858.png" style="width:177px;height:255px" alt=""></a></li><li><a href="/qa/res/277.php#281"><img src="/qa/thumb/1545273524507.png" style="width:255px;height:150px" alt=""></a></li><li><a href="/qa/res/277.php#277"><img src="/qa/thumb/1545271540202.png" style="width:255px;height:191px" alt=""></a></li><li><a href="/qa/res/274.php#274"><img src="/qa/thumb/1545269919911.png" style="width:255px;height:255px" alt=""></a></li><li><a href="/qa/res/265.php#273"><img src="/qa/thumb/1545267947419.png" style="width:255px;height:255px" alt=""></a></li><li><a href="/b/res/4.php#623"><img src="/b/thumb/1545266341791.png" style="width:255px;height:191px" alt=""></a></li><li><a href="/qa/res/262.php#269"><img src="/qa/thumb/1545265893777.png" style="width:255px;height:255px" alt=""></a></li><li><a href="/qa/res/262.php#268"><img src="/qa/thumb/1545262739693.png" style="width:254px;height:255px" alt=""></a></li><li><a href="/qa/res/265.php#265"><img src="/qa/thumb/1545259765066.png" style="width:255px;height:245px" alt=""></a></li><li><a href="/qa/res/262.php#262"><img src="/qa/thumb/1545257330919.png" style="width:255px;height:255px" alt=""></a></li><li><a href="/b/res/618.php#619"><img src="/b/thumb/1545251327279.jpg" style="width:255px;height:143px" alt=""></a></li><li><a href="/b/res/618.php#618"><img src="/b/thumb/1545250940066.jpg" style="width:255px;height:143px" alt=""></a></li><li><a href="/qa/res/243.php#255"><img src="static/spoiler-kissu.png" style="width:275px;height:250px" alt=""></a></li></ul></div><div class="mainBox"><h2>Latest Posts</h2><ul><li><strong>/qa/</strong>: <a href="/qa/res/277.php#284"><em>It's just an one liner that ta&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/124.php#283"><em>nearly fell asleep joing</em></a></li><li><strong>Boson Tests</strong>: <a href="/b/res/4.php#626"><em>https://exhentai.org/g/1326952&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/277.php#282"><em>&gt;&gt;281  Oh nice, how does it wo&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/277.php#281"><em>I made one for my startpage</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/29.php#280"><em>(no comment)</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/124.php#279"><em>stfu teenmin is baste</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/124.php#278"><em>I'm glad we finally have a spi&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/277.php#277"><em>(no comment)</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/274.php#276"><em>how 2 maek post</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/274.php#275"><em>You did it!</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/274.php#274"><em>Wanted to post here but I didn&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/265.php#273"><em>I want to make a patchy css, b&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#272"><em>&gt;&gt;271  4koma adaptations seem &hellip;</em></a></li><li><strong>Boson Tests</strong>: <a href="/b/res/4.php#625"><em>&gt;&gt;623  wonder if there's any g&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#271"><em>&gt;&gt;269  I hope it sells well… i&hellip;</em></a></li><li><strong>Boson Tests</strong>: <a href="/b/res/482.php#624"><em>&gt;&gt;514  That was probably the b&hellip;</em></a></li><li><strong>Boson Tests</strong>: <a href="/b/res/4.php#623"><em>/jp/ on the back, kissu in the&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#270"><em>&gt;&gt;268  sluten</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#269"><em>The three new Witch series, th&hellip;</em></a></li><li><strong>Boson Tests</strong>: <a href="/b/res/1.php#622"><em>tests</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#268"><em>I'd say Code Geass, but that's&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/56.php#267"><em>&gt;&gt;264  And the 8pl spam… and t&hellip;</em></a></li><li><strong>Boson Tests</strong>: <a href="/b/res/515.php#621"><em>Something else to note is that&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#266"><em>The madoka mobage anime adapta&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/265.php#265"><em>patchy</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/56.php#264"><em>&gt;&gt;258  Not sure, but at that t&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#263"><em>I'm just now about to start S.&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/262.php#262"><em>What are some future shows you&hellip;</em></a></li><li><strong>/qa/</strong>: <a href="/qa/res/56.php#261"><em>The captcha is what killed it.&hellip;</em></a></li></ul></div><div class="mainBox"><h2>Stats</h2><ul><li>Total posts: 934</li><li>Unique posters: 65</li><li>Active content: 487.46 MB</li></ul></div></div><hr/><footer><p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + <a href="https://engine.vichan.net/">vichan</a> 5.1.4 -<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    <br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel</footer></body></html>
=======

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Kissu.moe</title>
	<link rel="stylesheet" media="screen" href="/stylesheets/style.css"/>
	<link rel="stylesheet" media="screen" href="/index.css"/>
	<link rel="shortcut icon" href="/static/favicon.png" />	<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">	<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js"></script>
							</head>
<body>
<?php
	$t = explode(" ", microtime())[0];
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/functions.php');
	require_once ('inc/bans.php');

	loadConfig();
	checkDNSBL();
	checkBan();
	echo explode(" ", microtime())[0] - $t;
?>	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/index.php" title="Boson Tests">b</a> / <a href="/qa/index.php" title="/qa/">qa</a> ]</span>  <span class="sub" data-description="2">[ <a href="/xmas/index.php" title="Merri Christmasu!">xmas</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<header>
	    <img class="icon" src="../templates/themes/index/hikichanIcon.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% fun</div>
	</header>
	<img class="board_image" src="/static/banner-kissu.png" alt="" />	
	<div class="box-wrap">
	    <fieldset>
		<legend>Boards</legend>
		<ul>
							<li class="boardlinksurl">
					<a href="b/">
						Boson Tests
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="qa/">
						/qa/
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="xmas/">
						Merri Christmasu!
					</a>
				</li>
					</ul>
	    </fieldset>
	    <br>
	    <div class="mainBox">
	        <br>
	        <div class="description">Now serving You!</div>
	        <br>
	        <img class="imageofnow" src="../static/kissu-card.png">
	        <br>
	        <div class="quoteofnow"></div>
	        <br>
	        <iframe class ="videoofnow" width="560" height="315" src="https://www.youtube.com/embed/0uwrDqYhufM"></iframe>
	        <br>
	    </div>
	    <div class="ban">
									<h2 id="10">
											S2 Site Code done
										<span class="unimportant"> &mdash; by verniy at 12/19/18 (Wed) 09:45:41</span>
				</h2>
				<p>For all intents and purposes, the S2 objectives of adding new things to the site is done. I'm just fixing bugs and refactoring/organizing the code. Really all that needs to be done is more style and placement of certain elements.<br/>This videoplayer buisness is mostly a stand alone project that will run on the server, but it isn't actually part of the imageboard itself.</p>
							<h2 id="9">
											Closing S1 
										<span class="unimportant"> &mdash; by verniy at 12/19/18 (Wed) 09:44:48</span>
				</h2>
				<p>We're entering closed beta soon.<br/>That means as soon as I've finished up the last part of S1(bump control) you're free to share on rizon, steam and other places with a low spammer count.<br/><br/>Season 2 updates:<br/><br/>More customization and optimization of layout, scripts and styles for unique board feel<br/><br/>Customizations<br/>&lt;li&gt;Reposition the catalog tags&lt;/li&gt;<br/>&lt;li&gt;Remove the ugly 8chan style for superior futaba inspired style&lt;/li&gt;<br/>&lt;li&gt;Yen text&lt;/li&gt;<br/><br/>Optimizations<br/>&lt;li&gt;URL uploading doesn't handle HTML redirects&lt;/li&gt;<br/>&lt;li&gt;URL uploading doesn't like strange extensions&lt;/li&gt;<br/>&lt;li&gt;Youtube Embed doesn't take some forms&lt;/li&gt;<br/>&lt;li&gt;Youtube Embed doesn't go fullscreen&lt;/li&gt;<br/>&lt;li&gt;Expanded markup help and tags&lt;/li&gt;<br/>&lt;li&gt;markup formatting bugs&lt;/li&gt;<br/>&lt;li&gt;code refactoring for anti-spam and anti-bump&lt;/li&gt;<br/><br/><br/>New<br/>&lt;li&gt;VPN, TOR, and proxy blocks&lt;/li&gt;<br/>&lt;li&gt;bans block from viewing site&lt;/li&gt;&lt;/ul&gt;<br/>&lt;li&gt;A friendly system to handle the mod tools&lt;/li&gt;</p>
							<h2 id="4">
											Github Repo
										<span class="unimportant"> &mdash; by verniy at 12/03/18 (Mon) 00:37:20</span>
				</h2>
				<p><a href="https://github.com/ECHibiki/ViQa-Kissu" rel="nofollow" target="_blank">https://github.com/ECHibiki/ViQa-Kissu</a><br/><br/>This is the current site repo if you wish to add features to the site. Will be updated "soon"邃｢</p>
							<h2 id="3">
											 Overly Optimistic Site Planning 
										<span class="unimportant"> &mdash; by verniy at 12/02/18 (Sun) 06:32:08</span>
				</h2>
				<p>Updates to be made before more official release(S1):<br/>* Vichan Setup and Configuration<br/>* CSS configuration<br/>* Antiflood block supplemented or replaced with encouraging captcha<br/>* User Requested UI Improvements<br/><br/>Future(S2):<br/>* Post to Rizon+Steam<br/>* More customization of layout, UI and CSS for unique board feel<br/>* Establish a democratic system of transparent, but powerful moderation<br/>* More mod tools to give better ability to handle problems in the future instead of as they arise<br/>* Small online games similar to what GNFOS did<br/><br/>Future(S3):<br/>* Post to /qa/<br/>* Evaluate effectiveness of mod tool, current moderation structure<br/><br/>Any opinions can be posted in the various ways possible to contact me.</p>
						    </div>
	    <h1>Recent Images</h1>
		<div class="box image">
			<ul>
									<li>
						<a href="/b/res/629.php#629">
							<img src="/b/thumb/1545277090339.png" style="width:100px;height:125px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/618.php#619">
							<img src="/b/thumb/1545251327279.jpg" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/618.php#618">
							<img src="/b/thumb/1545250940066.jpg" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/4.php#613">
							<img src="/b/thumb/1545217840951.png" style="width:255px;height:198px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/4.php#568">
							<img src="/b/thumb/1545215071387.png" style="width:181px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/566.php#566">
							<img src="static/spoiler-kissu.png" style="width:275px;height:250px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/560.php#560">
							<img src="/b/thumb/1545213307055.png" style="width:255px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/551.php#551">
							<img src="/b/thumb/1545198174687.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/4.php#550">
							<img src="/b/thumb/1545197047658.png" style="width:221px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/xmas/res/14.php#23">
							<img src="/xmas/thumb/1545194828818.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/xmas/res/15.php#22">
							<img src="/xmas/thumb/1545182788131.png" style="width:255px;height:221px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/515.php#547">
							<img src="/b/thumb/1545175371457.png" style="width:255px;height:139px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/52.php#533">
							<img src="/b/thumb/1545122393564.png" style="width:255px;height:132px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/52.php#529">
							<img src="/b/thumb/1545104028688.png" style="width:255px;height:234px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/515.php#528">
							<img src="/b/thumb/1545099752699.png" style="width:255px;height:55px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/629.php#629">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#622">
							<em>tests</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/515.php#621">
							<em>Something else to note is that&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/618.php#620">
							<em>&gt;&gt;619  frame rate…</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/618.php#619">
							<em>the second one's really good t&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/618.php#618">
							<em>VN ops are nice</em>
						</a>
					</li>
									<li>
						<strong>Merri Christmasu!</strong>: 
						<a href="/xmas/res/15.php#24">
							<em>&gt;&gt;22  just imagine the booming&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#617">
							<em>&gt;&gt;616  Many flash boards alrea&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#616">
							<em>Can you add flash posting?</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/566.php#615">
							<em>oh dear… it messed up</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/4.php#614">
							<em>&gt;&gt;568  bunny ears are erokawai&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/4.php#613">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/566.php#612">
							<em>furu</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/566.php#611">
							<em>furu</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/566.php#610">
							<em>furu</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#603">
							<em>&gt;&gt;601  Good news, nokosage now&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#595">
							<em>damn</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#593">
							<em>seems fixed now</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#588">
							<em>asdf</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#587">
							<em>Threads only get bumped when u&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#583">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#582">
							<em>you wouldn't happened to have &hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#572">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/4.php#568">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/64.php#567">
							<em>&gt;&gt;66  discord too</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/566.php#566">
							<em>my spoiler is huge</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/560.php#562">
							<em>BIG</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/4.php#561">
							<em>&gt;&gt;550  On the left?</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/560.php#560">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/551.php#554">
							<em>Skyward Sword Zelda seems the &hellip;</em>
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Stats</h2>
			<ul>
				<li>Total posts: 653</li>
				<li>Unique posters: 38</li>
				<li>Active content: 236.29 MB</li>
			</ul>
		</div>
	</div>
	
	<hr/>
	<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
			<a href="https://engine.vichan.net/">vichan</a> 5.1.4 -
		<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
		<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel
	</footer>
</body>
</html>
>>>>>>> da9793049de71f03a1d68737fddca9b13aafd5f6
