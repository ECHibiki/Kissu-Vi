
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
	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/lit/">lit</a> ]</span>  <span class="sub" data-description="2">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
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
					<a href="lit/">
						Literature
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
						<a href="/b/res/783#783">
							<img src="/b/thumb/1546471131225.jpg" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/29#718">
							<img src="/qa/thumb/1546467011829.jpg" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/713#713">
							<img src="/qa/thumb/1546455539642.png" style="width:255px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1#779">
							<img src="/b/thumb/1546417469805.png" style="width:175px;height:108px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1#778">
							<img src="/b/thumb/1546417413135.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/702#702">
							<img src="/qa/thumb/1546388282147.png" style="width:255px;height:144px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/678#697">
							<img src="/qa/thumb/1546355200574.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/lit/res/12#14">
							<img src="/lit/thumb/1546345136005.png" style="width:175px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/lit/res/12#13">
							<img src="/lit/thumb/1546342853997.png" style="width:175px;height:124px" alt="">
						</a>
					</li>
									<li>
						<a href="/lit/res/12#12">
							<img src="/lit/thumb/1546325635750.png" style="width:239px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/678#686">
							<img src="/qa/thumb/1546324544080.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/194#682">
							<img src="/qa/thumb/1546321852730.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/194#681">
							<img src="/qa/thumb/1546320826411.png" style="width:175px;height:49px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/678#679">
							<img src="/qa/thumb/1546319068615.png" style="width:131px;height:175px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/29#723">
							<em>There was a youtube channel fu&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/662#722">
							<em>Most posters are americans.</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/783#783">
							<em>for u</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/721#721">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/662#720">
							<em>&gt;&gt;666  well it's probably hard&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/713#719">
							<em>It's cute watching the all gro&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/671#782">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/29#718">
							<em>Keep posting, i'll actually li&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/29#717">
							<em>&gt;&gt;716  Sakurano sensei!</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/29#716">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/713#715">
							<em>/a/ has always been a board fo&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#714">
							<em>already have an account, was j&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/713#713">
							<em>Took a look at /a/ today. It's&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/194#712">
							<em>&gt;&gt;668  Now that I've been usin&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#711">
							<em>they did, i think they even hi&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#710">
							<em>thought i remembered reading s&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#709">
							<em>madokami isnt dead guys</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1#780">
							<em>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1#779">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1#778">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#708">
							<em>use batoto</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#707">
							<em>mangadex is broken and i wante&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/702#706">
							<em>4chan will definitely not last&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/667#705">
							<em>Wish we had miko here.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/702#704">
							<em>I've certainely been more bore&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/702#703">
							<em>&gt;in popularity or at least inf&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/702#702">
							<em>Anyone feel that 4chan's been &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/124#701">
							<em>what kind? I love spicy chips &hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1#772">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/1#771">
							<em>&gt;&gt;770  test</em>
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
				<li>Total posts: 1,572</li>
				<li>Unique posters: 126</li>
				<li>Active content: 633.13 MB</li>
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
