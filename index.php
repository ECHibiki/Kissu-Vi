
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
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/bans.php');
	require_once ('inc/functions.php');
	loadConfig();
	
	if($config['ban_block']){
		if(!isset($t2)){
			$t1 = explode(" ", microtime())[0];
			checkDNSBL();
			checkBan();
			$t2 = explode(" ", microtime())[0];
		}
		else{
			echo ($t2 - $t1);
		}
	}

?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://what-ch.mooo.com/what/">what</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
	<img class="board_image" src="/static/banners/banner-kissu-17.png" alt="" />	
	<div class="box-wrap">
	    <!--<fieldset>
		<legend>Boards</legend>
		<ul>
							<li class="boardlinksurl">
					<a href="agg/">
						Spinoff Aggregate
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="b/">
						Boson Technology
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="feb/">
						We got here in February
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="GNFOS/">
						Gay NEETs From Outer Space
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="megu/">
						Megumin
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="nen/">
						Mysterious Thoughtography Collection
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="qa/">
						Questions and Answers
					</a>
				</li>
							<li class="boardlinksurl">
					<a href="test/">
						test
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
						<a href="/qa/res/9096#9096">
							<img src="/qa/thumb/1568661136094.png" style="width:210px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9085#9085">
							<img src="/qa/thumb/1568654083315.png" style="width:179px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9047#9072">
							<img src="/qa/thumb/1568648561383.png" style="width:117px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9047#9068">
							<img src="/qa/thumb/1568646315813.png" style="width:175px;height:135px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8653#9060">
							<img src="static/kissu-spoiler.png" style="width:275px;height:250px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9047#9054">
							<img src="/qa/thumb/1568626552517.png" style="width:146px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9047#9050">
							<img src="/qa/thumb/1568624299323.png" style="width:175px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9049#9049">
							<img src="/qa/thumb/1568624267475.png" style="width:255px;height:78px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9047#9047">
							<img src="/qa/thumb/1568622569104.png" style="width:184px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8653#9046">
							<img src="/qa/thumb/1568621955576.png" style="width:175px;height:104px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9032#9045">
							<img src="/qa/thumb/1568621639783.png" style="width:98px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8669#9044">
							<img src="/qa/thumb/1568620804680.png" style="width:114px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8920#9043">
							<img src="/qa/thumb/1568620741499.png" style="width:98px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9032#9035">
							<img src="/qa/thumb/1568607797439.png" style="width:175px;height:99px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9032#9032">
							<img src="/qa/thumb/1568606872834.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9096#9096">
							<em>don't know if i've become some&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9095">
							<em>&gt;&gt;9094  Duh.</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1415#1656">
							<em>seems to be that whenever a ne&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9094">
							<em>wait are they really making a &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9085#9093">
							<em>Im kind of sick of monstergirl&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9092">
							<em>&gt;&gt;9090  4/sp/ and the spinoff &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9085#9091">
							<em>shaking breasts</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9090">
							<em>&gt;&gt;9084  Reputation similar to &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9012#9089">
							<em>&gt;&gt;9088  Pretty sure you can ge&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9012#9088">
							<em>Are H-Games worth installing w&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/8860#9087">
							<em>she's just a huge clutz</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1415#1655">
							<em>Not sure what change caused it&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9085#9086">
							<em>demihumans</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9085#9085">
							<em>What do you call things like c&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9084">
							<em>&gt;&gt;9072  Endchan just has a bad&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9012#9082">
							<em>&gt;&gt;9034  Hope it’s old illusion&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9012#9081">
							<em>&gt;&gt;9034  imagining a collaborat&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9080">
							<em>&gt;&gt;9078  There's a 3rd season c&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9079">
							<em>&gt;&gt;9076  Being non-anonymous is&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9078">
							<em>Got excited for more Gochiusa &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9076">
							<em>&gt;&gt;9075  The IRCs need love too&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9075">
							<em>&gt;&gt;9074  drop wow, post on kiss&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9049#9074">
							<em>Wish I had motivation to watch&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/8920#9073">
							<em>Weened real hard today.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9072">
							<em>&gt;&gt;9069  I only browsed /AM/ an&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9012#9071">
							<em>&gt;&gt;9041  I've always thought of&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9070">
							<em>&gt;&gt;9047  Never understood why s&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9069">
							<em>&gt;&gt;9068  &gt;endchan  the people t&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9047#9068">
							<em>&gt;/a/  Tohno, endchan /AM/  &gt;/j&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1415#1651">
							<em>going to be cherry picking in &hellip;</em>
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
	        <br>
	        <div class="description">The cowards flee to the darkness, huddling like vermin.</div>
	        <br>
	        <img class="imageofnow" src="../static/horosho.png">
	        <br>
	        <div class="quoteofnow">xopowo</div>
	        <br>
	        <iframe class ="videoofnow" width="560" height="315" src="https://www.youtube.com/embed/uCVR0sLb8pw"></iframe>
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
				<li>Total posts: 11,703</li>
				<li>Unique posters: 426</li>
				<li>Active content: 3.49 GB</li>
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
<?php
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/bans.php');
	require_once ('inc/functions.php');
	loadConfig();
	
	if($config['ban_block']){
		if(!isset($t2)){
			$t1 = explode(" ", microtime())[0];
			checkDNSBL();
			checkBan();
			$t2 = explode(" ", microtime())[0];
		}
		else{
			echo ($t2 - $t1);
		}
	}

?>