
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

?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
	<img class="board_image" src="/static/banners/banner-kissu-25.jpg" alt="" />	
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
						<a href="/qa/res/11375#11375">
							<img src="/qa/thumb/1569974038396.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11017#11374">
							<img src="/qa/thumb/1569973696253.png" style="width:123px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11370#11372">
							<img src="/qa/thumb/1569970953774.png" style="width:129px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11370#11370">
							<img src="/qa/thumb/1569969185466.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11343#11365">
							<img src="/qa/thumb/1569967497162.png" style="width:175px;height:107px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11199#11363">
							<img src="/qa/thumb/1569963966204.png" style="width:134px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11291#11358">
							<img src="/qa/thumb/1569962483763.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11343#11357">
							<img src="/qa/thumb/1569960819016.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11343#11355">
							<img src="/qa/thumb/1569960209575.png" style="width:175px;height:120px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11343#11353">
							<img src="/qa/thumb/1569959959396.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11143#11352">
							<img src="/qa/thumb/1569959413276.png" style="width:175px;height:148px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11317#11351">
							<img src="/qa/thumb/1569959196222.png" style="width:175px;height:99px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11143#11349">
							<img src="/qa/thumb/1569958173701.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11343#11346">
							<img src="/qa/thumb/1569956690317.png" style="width:175px;height:148px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11343#11343">
							<img src="/qa/thumb/1569955975398.png" style="width:187px;height:255px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11375#11376">
							<em>I’m not sure how I feel about &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11375#11375">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11017#11374">
							<em>&gt;&gt;11019  not expecting a lot f&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11370#11373">
							<em>anima yell? more like underrat&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11370#11372">
							<em>I don't know the context of th&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11370#11371">
							<em>my chair is still lame…</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11370#11370">
							<em>/qa/ now has a boost in chair &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11159#11369">
							<em>&gt;&gt;11333  bunny tummy</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11368">
							<em>&gt;&gt;11367  how so?</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11367">
							<em>mahoromatic gave me fucking de&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11313#11366">
							<em>MangaUpdates.</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11365">
							<em>&gt;&gt;11357</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11306#11364">
							<em>&gt;&gt;11359  thank you!</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11199#11363">
							<em>thanks *sip* thread</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11291#11362">
							<em>&gt;&gt;11358  An indirect kissu?</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11324#11361">
							<em>&gt;&gt;11348  I'm not buying that k&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11291#11360">
							<em>want to sip some nice warm gir&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11306#11359">
							<em>Rune Factory 4  Etrian Odyssey&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11291#11358">
							<em>tastes like… kissu</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1827#1866">
							<em>use this with yotsubaB or dark&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11357">
							<em>&gt;&gt;11355  &gt;&gt;11356  Apologize to&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1827#1865">
							<em>wierd theme. only works on /qa&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11356">
							<em>&gt;&gt;11355  &gt;christmas decoration&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11355">
							<em>&gt;&gt;11353  WAIT YOUR FUCKING TUR&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11159#11354">
							<em>&gt;&gt;11331  Man, artists are real&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11343#11353">
							<em>&gt;&gt;11346  Not December?!</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11143#11352">
							<em>&gt;&gt;11349  most impressive!</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11317#11351">
							<em>&gt;&gt;11317</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11317#11350">
							<em>our daddy taught not to be ash&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11143#11349">
							<em>&gt;&gt;11312  All the years of hent&hellip;</em>
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
				<li>Total posts: 14,361</li>
				<li>Unique posters: 390</li>
				<li>Active content: 2.4 GB</li>
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