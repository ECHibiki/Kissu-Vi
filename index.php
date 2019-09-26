
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
					<script type="text/javascript" src="/main.js?12"></script>
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

?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
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
						<a href="/qa/res/10621#10621">
							<img src="/qa/thumb/1569488171095.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10558#10619">
							<img src="/qa/thumb/1569484065502.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10612#10618">
							<img src="/qa/thumb/1569482872771.png" style="width:175px;height:117px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/9599#10617">
							<img src="/qa/thumb/1569482167217.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1827#1827">
							<img src="/b/thumb/1569481444254.png" style="width:255px;height:128px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10612#10616">
							<img src="/qa/thumb/1569480288122.png" style="width:175px;height:96px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10612#10615">
							<img src="/qa/thumb/1569479435115.png" style="width:175px;height:112px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10612#10614">
							<img src="/qa/thumb/1569478921326.png" style="width:175px;height:88px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10612#10613">
							<img src="/qa/thumb/1569478547121.png" style="width:175px;height:99px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10612#10612">
							<img src="/qa/thumb/1569477449798.png" style="width:255px;height:144px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10608#10609">
							<img src="/qa/thumb/1569472216950.jpg" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10608#10608">
							<img src="/qa/thumb/1569470972556.png" style="width:128px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10565#10605">
							<img src="/qa/thumb/1569465280595.png" style="width:163px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10533#10602">
							<img src="/qa/thumb/1569463819038.png" style="width:175px;height:154px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10598#10600">
							<img src="/qa/thumb/1569463211297.png" style="width:175px;height:95px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10621#10621">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/946#946">
							<em>test</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10221#10620">
							<em>&gt;&gt;10420  I want the Tewi in th&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10558#10619">
							<em>don't stop, ascend further to &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10612#10618">
							<em>I'd like to think a Porche bec&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/9599#10617">
							<em>&gt;&gt;9614  love this squid girl</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1827#1827">
							<em>Why isn't Hazuki in the backgr&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10612#10616">
							<em>A McLaren 720S, a beautiful ca&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10612#10615">
							<em>&gt;&gt;10614  You may think I your &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10612#10614">
							<em>Only the fastest.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10612#10613">
							<em>With my free spirit that yearn&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10612#10612">
							<em>Let's say you turned into a ca&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10608#10611">
							<em>have a sort of retard moe feel&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10533#10610">
							<em>Escaflowne and Trinity Seven. &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10608#10609">
							<em>Normally I don't notice them, &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10608#10608">
							<em>What are your feelings about t&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10533#10607">
							<em>The Noein OST is criminally un&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10533#10606">
							<em>&gt;&gt;10602  I wonder if it's just&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10565#10605">
							<em>&gt;&gt;10604  you're just not livin&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10565#10604">
							<em>&gt;&gt;10565  Sure. They're too big&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10598#10603">
							<em>brushie brushie brushie</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10533#10602">
							<em>The Rozen Maiden OST is amazin&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10533#10601">
							<em>For me, it's the Berserk OST.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10598#10600">
							<em>&gt;&gt;10598  Thanks for the remind&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10431#10599">
							<em>I would like to draw and anima&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10598#10598">
							<em>brush teeth</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10564#10597">
							<em>&gt;&gt;10595  just click the link a&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10431#10596">
							<em>&gt;&gt;10594  I'm not sure, I think&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10564#10595">
							<em>&gt;&gt;10572  i dont know how to ge&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10431#10594">
							<em>&gt;&gt;10579  Is this… CG?</em>
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
									<h2 id="13">
											S4
										<span class="unimportant"> &mdash; by verniy at 09/19/19 (Thu) 17:28:38</span>
				</h2>
				<p>Update session 4 coming to a close<br/><a href="https://web.archive.org/web/20190919172630/https://kissu.moe/b/res/1415" rel="nofollow" target="_blank">https://web.archive.org/web/20190919172630/https://kissu.moe/b/res/1415</a><br/><br/>Last things I'm going to add are mascots and updates to the post form,<br/>then a polling system and making the mod system more easy for fast boards.<br/><br/>At that point all the terrible vichan bugs have been fixed and the only thing left are issues with the user interface(which pales in comparison to 4chan's) so best to focus on improving the board speed, community and user experience than developing new improvements and features.</p>
							<h2 id="12">
											S3
										<span class="unimportant"> &mdash; by verniy at 09/19/19 (Thu) 17:25:34</span>
				</h2>
				<p>Just realized I had never closed S3 even though the items in it were done<br/><a href="https://kissu.moe/b/sitedev" rel="nofollow" target="_blank">https://kissu.moe/b/sitedev</a><br/><a href="https://web.archive.org/web/20190919172509/https://kissu.moe/b/sitedev" rel="nofollow" target="_blank">https://web.archive.org/web/20190919172509/https://kissu.moe/b/sitedev</a><br/><br/>There are still some new things people asked for from there and I guess for S4 I'll have to put everything people have asked into a giant poll and have voting be done on them.</p>
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
						    </div>
		<div class="mainBox">
			<h2>Stats</h2>
			<ul>
				<li>Total posts: 13,497</li>
				<li>Unique posters: 409</li>
				<li>Active content: 5.69 GB</li>
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