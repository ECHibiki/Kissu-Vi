
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
					<script type="text/javascript" src="/main.js?1"></script>
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
?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
=======
?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://what-ch.mooo.com/what/">what</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
>>>>>>> 88a3591b52dd2ab6011e90d3cda2540be91a5eb9
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
<<<<<<< HEAD
	<img class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />	
=======
	<img id='bannerimg' class="board_image" src="/static/banners/banner-kissu-14.gif" alt="" />
>>>>>>> 88a3591b52dd2ab6011e90d3cda2540be91a5eb9
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
						polling
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
						transparency
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
						<a href="/trans/res/106#106">
							<img src="/trans/thumb/m1569341401727.png" style="width:219px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/105#105">
							<img src="/trans/thumb/m1569460697974.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/103#103">
							<img src="/trans/thumb/m1569481173966.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/104#104">
							<img src="/trans/thumb/m1569480841993.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/102#102">
							<img src="/trans/thumb/m1569481458993.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/101#101">
							<img src="/trans/thumb/m1569481705424.png" style="width:204px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/97#97">
							<img src="/trans/thumb/m1567311390506.png" style="width:255px;height:170px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/99#99">
							<img src="/trans/thumb/m1567291883842.png" style="width:255px;height:191px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/100#100">
							<img src="/trans/thumb/m1567283078990.png" style="width:255px;height:96px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/94#94">
							<img src="/trans/thumb/m1567526944531.png" style="width:255px;height:148px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/89#89">
							<img src="/trans/thumb/m1566346107165.png" style="width:169px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/trans/res/80#80">
							<img src="/trans/thumb/m1568010901293.png" style="width:255px;height:218px" alt="">
=======
						<a href="/qa/res/11611#11709">
							<img src="/qa/thumb/1570134864992.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11566#11707">
							<img src="/qa/thumb/1570134365759.png" style="width:121px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11693#11706">
							<img src="/qa/thumb/1570134200882.png" style="width:150px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11693#11704">
							<img src="/qa/thumb/1570133906093.png" style="width:171px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11611#11702">
							<img src="/qa/thumb/1570132327988.png" style="width:123px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11692#11699">
							<img src="/qa/thumb/1570131771279.png" style="width:162px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11693#11693">
							<img src="/qa/thumb/1570130163825.png" style="width:255px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11692#11692">
							<img src="/qa/thumb/1570129716865.png" style="width:192px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11675#11679">
							<img src="/qa/thumb/1570125432876.png" style="width:175px;height:165px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11675#11675">
							<img src="/qa/thumb/1570123988157.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8837#11674">
							<img src="/qa/thumb/1570123919760.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10598#11673">
							<img src="/qa/thumb/1570123756087.png" style="width:175px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11611#11672">
							<img src="/qa/thumb/1570123649965.png" style="width:146px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11634#11670">
							<img src="/qa/thumb/1570123255169.png" style="width:175px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11634#11661">
							<img src="/qa/thumb/1570115682176.png" style="width:175px;height:111px" alt="">
>>>>>>> 88a3591b52dd2ab6011e90d3cda2540be91a5eb9
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
<<<<<<< HEAD
						<strong>/trans/</strong>: 
						<a href="/trans/res/106#106">
							<em>Why do you watch anime    Dele&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/105#105">
							<em>brush teeth    Deleted by vern&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/103#103">
							<em>yrasd    Deleted by verniy fro&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/104#104">
							<em>yr    Deleted by verniy from /&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/102#102">
							<em>yrasdz    Deleted by verniy fr&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/101#101">
							<em>yrasdzzz    Deleted by verniy &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/97#97">
							<em>make them  submit them  talk a&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/98#98">
							<em>heh    Deleted by verniy from &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/99#99">
							<em>test ignore this    Deleted by&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/100#100">
							<em>…    Deleted by verniy from /b&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/94#94">
							<em>    Deleted by verniy from /b/&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/95#95">
							<em>&gt;&gt;1471  I'm the best poster on&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/96#96">
							<em>I think this made my problem w&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/92#92">
							<em>Thinkin about admins using the&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/93#93">
							<em>&gt;&gt;1473  you are the worst    D&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/91#91">
							<em>You should make an /ad/ board &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/90#90">
							<em>test    Deleted by verniy from&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/89#89">
							<em>Are you not entertained by kis&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/88#88">
							<em>I need to do a test with the m&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/85#85">
							<em>test    Deleted by verniy from&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/86#86">
							<em>&gt;&gt;1528    Deleted by verniy fr&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/87#87">
							<em>troooled    Deleted by verniy &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/82#82">
							<em>&gt;&gt;&gt;/qa/1    Deleted by verniy &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/83#83">
							<em>&gt;&gt;&gt;/qa/4165    Deleted by vern&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/84#84">
							<em>&gt;&gt;&gt;/b/1596    Deleted by verni&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/79#79">
							<em>test    Deleted by verniy from&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/80#80">
							<em>test    Deleted by verniy from&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/81#81">
							<em>&gt;&gt;&gt;/qa/    Deleted by verniy f&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/76#76">
							<em>&gt;&gt;1560  you mean delete your o&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/trans/</strong>: 
						<a href="/trans/res/77#77">
							<em>&gt;&gt;1568  ah, there's a way to d&hellip;</em>
=======
						<strong>/b/</strong>: 
						<a href="/b/res/1871#1878">
							<em>good work!</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1872#1877">
							<em>lol</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11530#11713">
							<em>&gt;&gt;11691  lala wont have to inv&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11017#11712">
							<em>&gt;&gt;11710  Aikatsu has a similar&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11566#11711">
							<em>&gt;&gt;11626  Yep, it's a card. Koi&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11017#11710">
							<em>My nominations:    https://ani&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11611#11709">
							<em>&gt;&gt;11702  How could you say suc&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11566#11707">
							<em>&gt;&gt;11684  pm2 is a really fun g&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11693#11706">
							<em>youtube keeps recommending me &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11640#11705">
							<em>&gt;&gt;11703  yeah that's the one, &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11693#11704">
							<em>yeah, i love nature documentar&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11640#11703">
							<em>Is this the one?   https://ani&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11611#11702">
							<em>yes, but i avoid drinking it, &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11692#11701">
							<em>*dodges it*  *smirks* maybe wi&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11692#11699">
							<em>&gt;&gt;11692  the greatest honor</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11693#11698">
							<em>i used to think saying you wat&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11611#11697">
							<em>I can get drunk off of a light&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11640#11696">
							<em>This anime has a really strong&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11675#11695">
							<em>&gt;&gt;11690  It's an eyesore</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11692#11694">
							<em>Aww, thanks Remi. Here let me &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11693#11693">
							<em>Do you ever watch nature docum&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11692#11692">
							<em>Because you deserve a headpat &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11530#11691">
							<em>i think you guys are missing t&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11675#11690">
							<em>&gt;&gt;11679  Why is this silly lun&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11675#11689">
							<em>&gt;&gt;11678  Whoa whoa, who said a&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/8837#11688">
							<em>certainly would distract her f&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10627#11687">
							<em>why do nips try to keep all th&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11566#11686">
							<em>going to have to get this next&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/8837#11685">
							<em>let her watch you masturbate t&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11566#11684">
							<em>I want Princess Maker 2 with H&hellip;</em>
>>>>>>> 88a3591b52dd2ab6011e90d3cda2540be91a5eb9
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
				<li>Total posts: 13,669</li>
				<li>Unique posters: 372</li>
				<li>Active content: 5.64 GB</li>
=======
				<li>Total posts: 14,740</li>
				<li>Unique posters: 386</li>
				<li>Active content: 2.53 GB</li>
>>>>>>> 88a3591b52dd2ab6011e90d3cda2540be91a5eb9
			</ul>
		</div>
	</div>
	
	<hr/>
	<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
			<a href="https://engine.vichan.net/">vichan</a> 0.8.1 -
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