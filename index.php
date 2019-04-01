
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Kakashi-Nenpo</title>
	<link rel="stylesheet" media="screen" href="/stylesheets/style.css"/>
	<link rel="stylesheet" media="screen" href="/index.css"/>
	<link rel="shortcut icon" href="/static/nen.ico" />	<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/hatate.css">	<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/nen.ico">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/hatate.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js"></script>
							</head>
<body>
	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">bans</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
<?php
	$t = explode(" ", microtime())[0];
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/functions.php');
	require_once ('inc/bans.php');

	loadConfig();
	if($config['ban_block']){
		checkDNSBL();
		checkBan();
		echo explode(" ", microtime())[0] - $t;
	}
?>	<header>
	    <img class="icon" src="../templates/themes/index/hikichanIcon.png">
		<h1>Kakashi-Nenpo</h1>
		<div class="subtitle">花果子念報</div>
	</header>
	<img class="board_image" src="/banner-art.php" alt="" />	
	<div class="box-wrap">
	    <!--<fieldset>
		<legend>Boards</legend>
		<ul>
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
						<a href="/GNFOS/res/2381#2381">
							<img src="/GNFOS/thumb/1554141328461.jpg" style="width:361px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2380#2380">
							<img src="/GNFOS/thumb/1554135725638.jpg" style="width:135px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2379#2379">
							<img src="/GNFOS/thumb/1554135385108.png" style="width:427px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2378#2378">
							<img src="/GNFOS/thumb/1554133798696.webm" style="width:427px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2376#2376">
							<img src="/GNFOS/thumb/1554133146669.jpg" style="width:168px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2377#2377">
							<img src="/GNFOS/thumb/1554129616993.png" style="width:182px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2373#2373">
							<img src="/GNFOS/thumb/1554114747280.jpg" style="width:170px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2374#2374">
							<img src="/GNFOS/thumb/1554114942063.jpg" style="width:160px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2375#2375">
							<img src="/GNFOS/thumb/1554130318425.jpg" style="width:173px;height:239px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2370#2370">
							<img src="/GNFOS/thumb/1554106074639.jpeg" style="width:320px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/GNFOS/res/2372#2372">
							<img src="/GNFOS/thumb/1554112977011.jpg" style="width:427px;height:240px" alt="">
						</a>
					</li>
									<li>
						<a href="/nen/res/34#34">
							<img src="/nen/thumb/1553054489166.png" style="width:175px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/nen/res/35#35">
							<img src="/nen/thumb/1552068463022.png" style="width:255px;height:150px" alt="">
						</a>
					</li>
									<li>
						<a href="/nen/res/33#33">
							<img src="/nen/thumb/1553065568784.png" style="width:255px;height:221px" alt="">
						</a>
					</li>
									<li>
						<a href="/nen/res/30#30">
							<img src="/nen/thumb/1549060899071.png" style="width:255px;height:144px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2381#2381">
							<em>merorin was here, you guys are&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2380#2380">
							<em>Spotlight uh moonlight uh  htt&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2379#2379">
							<em>Fixed your shitty site  https:&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2378#2378">
							<em>Are you willing to make the ul&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2376#2376">
							<em>cummed  https://GNFOS.com/jp/r&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2377#2377">
							<em>I don&amp;#39;t feel like this pla&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2373#2373">
							<em>falling asleep...  https://GNF&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2374#2374">
							<em>Why is Ron Pauler allowed to h&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2375#2375">
							<em>I don&amp;#39;t feel like this pla&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2370#2370">
							<em>Tap water is so gross  https:/&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2371#2371">
							<em>The Rose of Versailles  https:&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/GNFOS/</strong>: 
						<a href="/GNFOS/res/2372#2372">
							<em>So fucking tired of this faggo&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/35#36">
							<em>Good mornen, everynyan!</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/34#34">
							<em>Gurren Lagann.  https://kakash&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/35#35">
							<em>The princess of taking it easy&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/33#33">
							<em>https://kakashi-nenpo.com/jp/r&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/30#30">
							<em>How do I properly self insert &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/31#31">
							<em>try your best  https://kakashi&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/32#32">
							<em>So many nice old threads gone &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/28#28">
							<em>What are /nen/&amp;#39;s favorite &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/29#29">
							<em>Does /nen/ like horns?  https:&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/27#27">
							<em>get fizzy  https://kakashi-nen&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/26#26">
							<em>Why doesn&amp;#39;t nen have a coo&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/25#25">
							<em>rabbit rabbit rabbit!  I may h&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/24#24">
							<em>Letty is ready for winter!  ht&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/23#23">
							<em>Happy birthday, /nen/!  I can&amp;&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/22#22">
							<em>The art of taking it easy!  ht&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/21#21">
							<em>Any doujin goes as long as it&amp;&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/20#20">
							<em>Good morning ごきげんよう  Today is &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/nen/</strong>: 
						<a href="/nen/res/19#19">
							<em>What&amp;#39;s /nen/&amp;#39;s nen?  h&hellip;</em>
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
	        <div class="quoteofnow"> "Great minds discuss ideas; average minds discuss events; small minds discuss people; /qa/ sucks a whole lot of cock." - QUOTE</div>
	        <br>
	        <iframe class ="videoofnow" width="560" height="315" src="https://www.youtube.com/embed/LWVl_yw98og"></iframe>
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
				<li>Total posts: 2,520</li>
				<li>Unique posters: 37</li>
				<li>Active content: 446.11 MB</li>
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
