
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

<<<<<<< HEAD
?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://what-ch.mooo.com/what/">what</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
=======
?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
<<<<<<< HEAD
	<img class="board_image" src="/static/banners/banner-kissu-8.gif" alt="" />	
=======
	<img class="board_image" src="/static/banners/banner-kissu-25.jpg" alt="" />	
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
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
<<<<<<< HEAD
						<a href="/poll/res/69#69">
							<img src="/poll/thumb/1569833097858.png" style="width:185px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/poll/res/58#58">
							<img src="/poll/thumb/1569806128942.png" style="width:185px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/poll/res/57#57">
							<img src="/poll/thumb/1569806108276.png" style="width:185px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/poll/res/56#56">
							<img src="/poll/thumb/1569806082682.png" style="width:185px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10630#10630">
							<img src="/qa/thumb/1569777427567.png" style="width:185px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/poll/res/14#14">
							<img src="/poll/thumb/1569771621529.png" style="width:185px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10627#10627">
							<img src="/qa/thumb/1569770824068.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10624#10624">
							<img src="/qa/thumb/1569509741918.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10622#10622">
							<img src="/qa/thumb/1569485670573.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10621#10621">
							<img src="/qa/thumb/1569484098775.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10620#10620">
							<img src="/qa/thumb/1569482558718.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10619#10619">
							<img src="/qa/thumb/1569482444690.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10618#10618">
							<img src="/qa/thumb/1569482378047.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10617#10617">
							<img src="/qa/thumb/1569482234380.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10616#10616">
							<img src="/qa/thumb/1569482184890.png" style="width:204px;height:255px" alt="">
=======
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
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
<<<<<<< HEAD
						<strong>/poll/</strong>: 
						<a href="/poll/res/70#70">
							<em>asd  f  g  g  g  g  g  g    [V&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/69#69">
							<em>test 1  test 1  test 2    [Vie&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/68#68">
							<em>,  knmj    [View Responses]  </em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/67#67">
							<em>z  xc    [View Responses]  asd&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/66#66">
							<em>tew  tez    [View Responses]  &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/65#65">
							<em>sdfs  ggg    [View Responses] &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/64#64">
							<em>dfg  dd    [View Responses]  d&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/63#63">
							<em>asd2  123    [View Responses] &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/62#62">
							<em>t1  t2  t2    [View Responses]&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/58#58">
							<em>Asuka  Mashiro  Misaki    [Vie&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/57#57">
							<em>Asuka  Mashiro    [View Respon&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/56#56">
							<em>Asuka  Mashiro  Misaki    [Vie&hellip;</em>
=======
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
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10630#10634">
							<em>te</em>
=======
						<a href="/qa/res/11343#11365">
							<em>&gt;&gt;11357</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10630#10633">
							<em>te</em>
=======
						<a href="/qa/res/11306#11364">
							<em>&gt;&gt;11359  thank you!</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10630#10632">
							<em>test</em>
=======
						<a href="/qa/res/11199#11363">
							<em>thanks *sip* thread</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10630#10631">
							<em>te</em>
=======
						<a href="/qa/res/11291#11362">
							<em>&gt;&gt;11358  An indirect kissu?</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10630#10630">
							<em>te</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/14#14">
							<em>test</em>
=======
						<a href="/qa/res/11324#11361">
							<em>&gt;&gt;11348  I'm not buying that k&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11291#11360">
							<em>want to sip some nice warm gir&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10627#10627">
							<em>(no comment)</em>
=======
						<a href="/qa/res/11306#11359">
							<em>Rune Factory 4  Etrian Odyssey&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10624#10625">
							<em>(no comment)</em>
=======
						<a href="/qa/res/11291#11358">
							<em>tastes like… kissu</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1827#1866">
							<em>use this with yotsubaB or dark&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10624#10624">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/944#944">
							<em>test</em>
=======
						<a href="/qa/res/11343#11357">
							<em>&gt;&gt;11355  &gt;&gt;11356  Apologize to&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1827#1865">
							<em>wierd theme. only works on /qa&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10622#10623">
							<em>test</em>
=======
						<a href="/qa/res/11343#11356">
							<em>&gt;&gt;11355  &gt;christmas decoration&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10622#10622">
							<em>sdf</em>
=======
						<a href="/qa/res/11343#11355">
							<em>&gt;&gt;11353  WAIT YOUR FUCKING TUR&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10621#10621">
							<em>asdasd</em>
=======
						<a href="/qa/res/11159#11354">
							<em>&gt;&gt;11331  Man, artists are real&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10620#10620">
							<em>yrasdzzzzzzxc</em>
=======
						<a href="/qa/res/11343#11353">
							<em>&gt;&gt;11346  Not December?!</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10619#10619">
							<em>asdasd</em>
=======
						<a href="/qa/res/11143#11352">
							<em>&gt;&gt;11349  most impressive!</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10618#10618">
							<em>yrasdzzzzzzx</em>
=======
						<a href="/qa/res/11317#11351">
							<em>&gt;&gt;11317</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10617#10617">
							<em>yrasdzzzzzz</em>
=======
						<a href="/qa/res/11317#11350">
							<em>our daddy taught not to be ash&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10616#10616">
							<em>yrasdzzzzz</em>
=======
						<a href="/qa/res/11143#11349">
							<em>&gt;&gt;11312  All the years of hent&hellip;</em>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
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
<<<<<<< HEAD
				<li>Total posts: 13,575</li>
				<li>Unique posters: 399</li>
				<li>Active content: 5.66 GB</li>
=======
				<li>Total posts: 14,361</li>
				<li>Unique posters: 390</li>
				<li>Active content: 2.4 GB</li>
>>>>>>> 006199c1331681cd2ff2f875d12980eb89d1564b
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