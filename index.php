
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
	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> ]</span>  <span class="sub" data-description="2">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
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
?>	<header>
	    <img class="icon" src="../templates/themes/index/hikichanIcon.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% fun</div>
	</header>
	<img class="board_image" src="/banner-art.php" alt="" />	
	<div class="box-wrap">
	    <!--<fieldset>
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
	    </fieldset>-->
	    <br>

	    <h1>Recent Images</h1>
		<div class="box image">
			<ul>
									<li>
						<a href="/b/res/1.php#704">
							<img src="/b/thumb/1546077216837.png" style="width:112px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1.php#703">
							<img src="/b/thumb/1546077173325.png" style="width:175px;height:122px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1.php#702">
							<img src="/b/thumb/1546077149836.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1.php#701">
							<img src="/b/thumb/1546077124498.png" style="width:131px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/671.php#695">
							<img src="/b/thumb/1546074614717.png" style="width:175px;height:91px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/693.php#693">
							<img src="/b/thumb/1546070847499.png" style="width:255px;height:142px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/555.php#584">
							<img src="/qa/thumb/1546066523924.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/578.php#583">
							<img src="/qa/thumb/1546066231053.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/571.php#582">
							<img src="/qa/thumb/1546065436295.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/578.php#578">
							<img src="/qa/thumb/1546064517089.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/671.php#692">
							<img src="/b/thumb/1546058329973.png" style="width:175px;height:105px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/573.php#573">
							<img src="/qa/thumb/1546051862548.png" style="width:255px;height:194px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/571.php#571">
							<img src="/qa/thumb/1546048905062.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/124.php#570">
							<img src="/qa/thumb/1546048470235.png" style="width:175px;height:117px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/671.php#672">
							<img src="/b/thumb/1546027365833.png" style="width:175px;height:82px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#704">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#703">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#702">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#701">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1.php#700">
							<em>&gt;&gt;667</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/655.php#699">
							<em>&gt;&gt;696  I moved it to later</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/671.php#698">
							<em>https://en.wikipedia.org/wiki/&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/671.php#697">
							<em>&gt;&gt;695  Grande has too much ser&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/655.php#696">
							<em>S2's done right?  ¥test  ¥test</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/671.php#695">
							<em>&gt;&gt;694  Odd, this is what Lucid&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/671.php#694">
							<em>&gt;&gt;687  Currently Lucida Sans U&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124.php#585">
							<em>downloading label packs on rut&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/693.php#693">
							<em>catapost test</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/555.php#584">
							<em>You can't really blame evoluti&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/578.php#583">
							<em>imouto's really cute as well</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/571.php#582">
							<em>&gt;&gt;576  We must</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124.php#581">
							<em>try to find ways to hit it big&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/262.php#580">
							<em>It's not slated for any time s&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/578.php#579">
							<em>  Aside from my main complaint&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/578.php#578">
							<em>I've decided that I want to ou&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124.php#577">
							<em>really wish i could be alone. &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/571.php#576">
							<em>NO! NEVER!</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/671.php#692">
							<em>&gt;&gt;686  &gt;&gt;687  We have to choos&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/573.php#575">
							<em>I have a nice heated mattress &hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/655.php#691">
							<em>[aa]  　　　　　                   &hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/655.php#690">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124.php#574">
							<em>&gt;&gt;570  maybe in the 80s</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/573.php#573">
							<em>Winter can be harsh and cold, &hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/655.php#689">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/655.php#688">
							<em>(no comment)</em>
						</a>
					</li>
							</ul>
		</div>
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
									<h2 id="11">
											S2 Finished. Fixing up the code for new stuff later
										<span class="unimportant"> &mdash; by verniy at 12/24/18 (Mon) 09:53:26</span>
				</h2>
				<p>S2 goals have been finished.<br/><br/>The site software now has some good tools against spammers and ban evaders that can be used to lock out people from the site if they use proxies, VPNs or Tor. A few other mod tools as well.<br/><br/>On the cosmetic side, the CSS(kissu.css) is being worked on and optimized to cause less of a slowdown on browsers.<br/>The site code needs to be refactored and the github cleaned up a little.<br/>User experience needslots of improving. Things like the catalog need to be fixed up and the main posting behavior needs additions(such as the update box like 4chan has).<br/><br/>Other than that, the site is looking great. No complaints and as far as I can tell current features seem to be appreciated by current members.</p>
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
				<p><a href="https://github.com/ECHibiki/ViQa-Kissu" rel="nofollow" target="_blank">https://github.com/ECHibiki/ViQa-Kissu</a><br/><br/>This is the current site repo if you wish to add features to the site. Will be updated "soon"™</p>
							<h2 id="3">
											 Overly Optimistic Site Planning 
										<span class="unimportant"> &mdash; by verniy at 12/02/18 (Sun) 06:32:08</span>
				</h2>
				<p>Updates to be made before more official release(S1):<br/>* Vichan Setup and Configuration<br/>* CSS configuration<br/>* Antiflood block supplemented or replaced with encouraging captcha<br/>* User Requested UI Improvements<br/><br/>Future(S2):<br/>* Post to Rizon+Steam<br/>* More customization of layout, UI and CSS for unique board feel<br/>* Establish a democratic system of transparent, but powerful moderation<br/>* More mod tools to give better ability to handle problems in the future instead of as they arise<br/>* Small online games similar to what GNFOS did<br/><br/>Future(S3):<br/>* Post to /qa/<br/>* Evaluate effectiveness of mod tool, current moderation structure<br/><br/>Any opinions can be posted in the various ways possible to contact me.</p>
						    </div>
		<div class="mainBox">
			<h2>Stats</h2>
			<ul>
				<li>Total posts: 1,341</li>
				<li>Unique posters: 108</li>
				<li>Active content: 569.66 MB</li>
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
