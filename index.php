
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
					<script type="text/javascript" src="/main.js?2"></script>
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

?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/bans">bans</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa</a> / <a href="/xmas/">xmas</a> ]</span>  <span class="sub" data-description="2">[ <a href="/megu/">hen</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://theatre.kissu.moe">tv</a> / <a href="/agg/">agg</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="4">[ <a href="http://what-ch.mooo.com/what/">what</a> / <a href="http://4taba.net/board/all">4tab</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
	<img id='bannerimg' class="board_image" src="/static/banners/banner-kissu-3.gif" alt="" />
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
						<a href="/qa/res/20000#20166">
							<img src="/qa/thumb/1576437027859.png" style="width:175px;height:139px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20127#20165">
							<img src="/qa/thumb/1576436895208.png" style="width:132px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20164">
							<img src="/qa/thumb/1576436868414.png" style="width:124px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20127#20163">
							<img src="/qa/thumb/1576436093224.png" style="width:124px;height:174px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/4165#20160">
							<img src="/qa/thumb/1576433418352.png" style="width:175px;height:61px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20099#20158">
							<img src="/qa/thumb/1576431500857.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20157">
							<img src="/qa/thumb/1576431363043.png" style="width:101px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/4165#20156">
							<img src="/qa/thumb/1576430171055.png" style="width:175px;height:9px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/4165#20154">
							<img src="/qa/thumb/1576429869965.png" style="width:175px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/4165#20150">
							<img src="/qa/thumb/1576427539829.png" style="width:123px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/19590#20143">
							<img src="/qa/thumb/1576424871109.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20099#20139">
							<img src="/qa/thumb/1576423112851.png" style="width:117px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20000#20138">
							<img src="/qa/thumb/1576422199250.png" style="width:141px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/20130#20134">
							<img src="/qa/thumb/1576419942246.png" style="width:173px;height:175px" alt="">
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20167">
							<em>https://boards.4channel.org/qa&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20166">
							<em>&gt;&gt;20161  I'm sure that's the r&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20127#20165">
							<em>Orin needs to step over and se&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20164">
							<em>&gt;&gt;20161  Maybe if you kept you&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20127#20163">
							<em>I am explicitly playing centra&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20162">
							<em>&gt;&gt;20161  time for ban</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20161">
							<em>&gt;&gt;20098  maybe if nobody liter&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20160">
							<em>&gt;&gt;20159  Actually, this image &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20159">
							<em>/qa/ is going through its offi&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20099#20158">
							<em>air support, standing by</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20000#20157">
							<em>&gt;&gt;20098  the maybe-one-new-pos&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20156">
							<em>&gt;&gt;20155  residential proxies</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20155">
							<em>&gt;&gt;20154  I've tried buster cap&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20154">
							<em>&gt;&gt;20144  &gt;&gt;20146  &gt;&gt;20150  &gt;&gt;2&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20106#20153">
							<em>imagine getting zapped by that&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/19590#20152">
							<em>ate a banana</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20151">
							<em>&gt;&gt;20150  Never underestimate t&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20150">
							<em>&gt;&gt;20144  why do people still p&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/1248#1256">
							<em>modore!!!!</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/19593#20149">
							<em>&gt;&gt;19878  This is really nice. &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/517#1255">
							<em>&gt;&gt;1254  boober maiden</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/517#1254">
							<em>huge doll boobers</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20046#20148">
							<em>&gt;&gt;20122  Oh wow you're right.</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/1248#1253">
							<em>i dont like this change</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20106#20147">
							<em>&gt;&gt;20125  good job, anonymous</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20146">
							<em>&gt;&gt;20144  Well, one more reason&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20099#20145">
							<em>&gt;&gt;20139  i might have actually&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/4165#20144">
							<em>NoJS recaptcha seems to be bro&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/19590#20143">
							<em>was thinking of maid dragon s2&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/20099#20142">
							<em>&gt;&gt;20139  warming waiting with &hellip;</em>
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
				<li>Total posts: 23,716</li>
				<li>Unique posters: 546</li>
				<li>Active content: 6.47 GB</li>
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