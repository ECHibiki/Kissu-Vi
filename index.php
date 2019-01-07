
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
					<a href="megu/">
						Megumin
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
						<a href="/b/res/842#843">
							<img src="/b/thumb/1546639397688.png" style="width:131px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/778#804">
							<img src="/qa/thumb/1546639113867.png" style="width:170px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/800#800">
							<img src="/qa/thumb/1546637761728.png" style="width:182px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/842#842">
							<img src="/b/thumb/1546637320576.png" style="width:180px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/799#799">
							<img src="/qa/thumb/1546636608200.png" style="width:172px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/760#788">
							<img src="/qa/thumb/1546586758270.png" style="width:175px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/787#787">
							<img src="/qa/thumb/1546585806574.png" style="width:255px;height:150px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/778#782">
							<img src="/qa/thumb/1546578593686.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/778#779">
							<img src="/qa/thumb/1546576272730.png" style="width:151px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/778#778">
							<img src="/qa/thumb/1546575915592.png" style="width:255px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/170#771">
							<img src="/qa/thumb/1546563445347.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/760#761">
							<img src="/qa/thumb/1546554304093.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/760#760">
							<img src="/qa/thumb/1546553832455.png" style="width:255px;height:249px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/124#759">
							<img src="/qa/thumb/1546552210355.png" style="width:175px;height:86px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/760#835">
							<img src="/b/thumb/1546549376441.png" style="width:175px;height:133px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#811">
							<em>neural memeworks were a mistak&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#810">
							<em>&gt;&gt;808  Don't think, feel.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#809">
							<em>I think it started being reall&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#808">
							<em>&gt;&gt;803  im too dumb to think of&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#807">
							<em>&gt;&gt;804  mod is missing a brain &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#806">
							<em>&gt;&gt;805  nevermind, too many to &hellip;</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/842#843">
							<em>she is a GIRL</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#805">
							<em>&gt;&gt;804  someone got wiped, othe&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#804">
							<em>something is happening</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#803">
							<em>&gt;&gt;802  What problems do you ha&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#802">
							<em>I can make lots of threads, th&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/799#801">
							<em>wake up early in the morning, &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/800#800">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>Boson Tests</strong>: 
						<a href="/b/res/842#842">
							<em>I'm Falling in love with a boy</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/799#799">
							<em>Sitting at the computer while &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#798">
							<em>&gt;&gt;796  What even was their rea&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/760#797">
							<em>&gt;&gt;790  Well if someone's inter&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#796">
							<em>Yep it's absolute garbage sinc&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#795">
							<em>never mind i found it. google &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#794">
							<em>&gt;&gt;787  still cant find the sou&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#793">
							<em>&gt;&gt;781  i can only listen to al&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#792">
							<em>It is as written  https://boar&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/29#791">
							<em>Wish I had the same amount of &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/760#790">
							<em>actually the garbage can be fl&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/760#789">
							<em>&gt;&gt;786  at the very least proxi&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/760#788">
							<em>&gt;&gt;786  I've already composed a&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/787#787">
							<em>&gt;/qa/</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/760#786">
							<em>&gt;&gt;785  mostly staff limiting w&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/760#785">
							<em>what is wrong with /qa/</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/778#784">
							<em>yes it is very cold  what can &hellip;</em>
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
	        <div class="quoteofnow"> "Great minds discuss ideas; average minds discuss events; small minds discuss people." - QUOTE</div>
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
				<li>Total posts: 1,722</li>
				<li>Unique posters: 136</li>
				<li>Active content: 625.85 MB</li>
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
