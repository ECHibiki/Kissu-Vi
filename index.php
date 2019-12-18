
<!doctype html>
<html>
<head>
<script type="text/javascript">
	  var
                        active_page = "home"
            , board_name = 'home';
</script>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Kissu.moe</title>
	<link rel="stylesheet" media="screen" href="/stylesheets/style.css"/>
	<link rel="stylesheet" media="screen" href="/index.css"/>
	<link rel="shortcut icon" href="/static/favicon.png" />	<!-- <link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css"> -->
	<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js?3"></script>
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

?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/bans">bans</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa</a> / <a href="/xmas/">xmas</a> ]</span>  <span class="sub" data-description="2">[ <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://theatre.kissu.moe">tv</a> / <a href="/agg/">agg</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="4">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="http://4taba.net/board/all">4tab</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
	<img id='bannerimg' class="board_image" src="/static/banners/banner-kissu-27.jpg" alt="" />
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
					<a href="poll/">
						Polling and Honesty
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
					<a href="trans/">
						Transparency and Moderation
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
						<a href="/qa/res/20890#20891">
							<img src="/qa/thumb/1576626557632.png" style="width:175px;height:120px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20890#20890">
							<img src="/qa/thumb/1576626538694.png" style="width:255px;height:184px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20889">
							<img src="/qa/thumb/1576626285806.png" style="width:175px;height:168px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20886">
							<img src="/qa/thumb/1576626121682.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20845#20884">
							<img src="/qa/thumb/1576625750613.png" style="width:175px;height:115px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20883">
							<img src="/qa/thumb/1576625545009.png" style="width:175px;height:99px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20880#20880">
							<img src="/qa/thumb/1576625020450.png" style="width:255px;height:232px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20811#20878">
							<img src="/qa/thumb/1576624603745.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/2094#2094">
							<img src="/b/thumb/1576623992502.png" style="width:255px;height:204px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20811#20877">
							<img src="/qa/thumb/1576623977801.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20845#20875">
							<img src="/qa/thumb/1576623419404.png" style="width:175px;height:115px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20845#20873">
							<img src="/qa/thumb/1576623033568.png" style="width:175px;height:115px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20871">
							<img src="/qa/thumb/1576622809302.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20789#20870">
							<img src="/qa/thumb/1576622560174.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20869">
							<img src="/qa/thumb/1576622503182.png" style="width:175px;height:151px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1884#2097">
							<em>yeah, ajax.js was written by H&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1884#2096">
							<em>having them both on probably c&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1884#2095">
							<em>&gt;&gt;2092  I may have fixed it. T&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20890#20895">
							<em>&gt;&gt;20890  That looks awful…</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20890#20894">
							<em>original is better</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20890#20893">
							<em>It's, different, but I don't d&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20890#20892">
							<em>i like the current one better</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20890#20891">
							<em>and this is the current</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20890#20890">
							<em>Would you prefer a kissu heade&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20889">
							<em>Nairaland!!! :P</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/19590#20888">
							<em>&gt;&gt;20813  very nice yuno</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20845#20887">
							<em>&gt;&gt;20884  lala is riding a bana&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20886">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20885">
							<em>&gt;&gt;20883  wanna torp those dest&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20845#20884">
							<em>it's kinda hard to edit in stu&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20883">
							<em>&gt;&gt;20863  Back now.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20880#20882">
							<em>&gt;&gt;20881  I can</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20880#20881">
							<em>cannot believe ota did this</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20880#20880">
							<em>&gt;ota</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20879">
							<em>&gt;&gt;20719  boson</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20811#20878">
							<em>They're alright, but I don't r&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/2094#2094">
							<em>steamginx</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20811#20877">
							<em>&gt;&gt;20874  I don't appreciate yo&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20789#20876">
							<em>Try applying for internships f&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20845#20875">
							<em>fixed</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20811#20874">
							<em>&gt;&gt;20817  Agreed. A harem serie&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20845#20873">
							<em>pppppssssssssssssssssshhhhhhhh&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20762#20872">
							<em>I had to look her up. Very cut&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20871">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20789#20870">
							<em>Well, I'm one of the last peop&hellip;</em>
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
	        <div class="quoteofnow">xopowo<br/> <a href="http://oyasumi-chyuu.fun/index.php">http://oyasumi-chyuu.fun/index.php</a></div>
	        <br>
				<video class ="videoofnow" width="560" height="315" controls autoplay>
			<source src="http://oyasumi-chyuu.fun/embed.php">
		</video>
				<br>
	    </div>
	    <div class="ban">
									<h2 id="16">
											Kissu pre-beta Announcement
										<span class="unimportant"> &mdash; by verniy at 09/29/19 (Sun) 20:27:47</span>
				</h2>
				<p>Kissu(at this point) won't be updating off of vichan anymore since the only updates are for paid things, these will be private updates most likely so there won't be any new content to get from them(We'll probably end up doing a bunch of clean up to post.php to make it easier to read anyways).<br/>Likewise, at this point kissu has copied everything it needs from NFPChan so there's not much to look at from them. They're likewise stalling and doing mostly small updates.<br/><br/>Kissu's plans is to be developed for probably the next two years I guess. hard to tell, but there are a lot of UI improvements that need to be done to make it a competitive software against proprietary futaba. Feature wise kissu is already competetive, but the UI is shite so that needs to be worked on.<br/><br/>I also might do some things like remove flags and other /pol/ tier garbage from the software. There are also some other features like compatibility with NNTP but I think that's all dead so if it's a performance impact that might get removed.<br/><br/>Kissu could probably be called in a beta state when I finish off the mod and polling features. This meaning that the priorities will no longer be for grand new features that will differentiate the board from others(we have to stop updating sometime) and will be optimizations on the ways things are already done.<br/><br/>For archive purposes the banner sticky is at:<br/><a href="https://web.archive.org/web/20190929202326/https://kissu.moe/b/res/1483" rel="nofollow" target="_blank">https://web.archive.org/web/20190929202326/https://kissu.moe/b/res/1483</a></p>
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
						    </div>
		<div class="mainBox">
			<h2>Stats</h2>
			<ul>
				<li>Total posts: 24,497</li>
				<li>Unique posters: 530</li>
				<li>Active content: 6.75 GB</li>
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
<script type="text/javascript">
		ready();
	</script>
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