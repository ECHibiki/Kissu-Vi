
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

<<<<<<< HEAD
?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
=======
?><div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
	<header>
	    <img class="icon" src="../static/kissu-card.png">
		<h1>Kissu.moe</h1>
		<div class="subtitle">100% Fun!</div>
	</header>
<<<<<<< HEAD
	<img class="board_image" src="/static/banners/banner-kissu-17.png" alt="" />	
=======
	<img class="board_image" src="/static/banners/banner-kissu-11.png" alt="" />	
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
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
						<a href="/qa/res/10627#11136">
							<img src="/qa/thumb/1569854931642.png" style="width:175px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11132#11132">
							<img src="/qa/thumb/1569849794827.png" style="width:255px;height:180px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11126#11130">
							<img src="/qa/thumb/1569837088317.png" style="width:122px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/b/res/1415#1856">
							<img src="/b/thumb/1569835615092.png" style="width:175px;height:121px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11126#11126">
							<img src="/qa/thumb/1569822298724.png" style="width:179px;height:255px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11105#11125">
							<img src="/qa/thumb/1569819370881.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10182#11124">
							<img src="/qa/thumb/1569819224277.png" style="width:144px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8837#11123">
							<img src="/qa/thumb/1569818490601.png" style="width:175px;height:124px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/10692#11121">
							<img src="/qa/thumb/1569817710618.png" style="width:175px;height:142px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11105#11117">
							<img src="/qa/thumb/1569808969432.png" style="width:175px;height:131px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11111#11116">
							<img src="/qa/thumb/1569807961872.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11111#11115">
							<img src="/qa/thumb/1569807797002.png" style="width:175px;height:98px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11111#11111">
							<img src="/qa/thumb/1569807172898.png" style="width:255px;height:143px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/8669#11110">
							<img src="/qa/thumb/1569807155994.png" style="width:163px;height:175px" alt="">
						</a>
					</li>
									<li>
						<a href="/qa/res/11109#11109">
							<img src="/qa/thumb/1569807126485.jpg" style="width:255px;height:143px" alt="">
=======
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
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
							</ul>
		</div>
		<div class="mainBox">
			<h2>Latest Posts</h2>
			<ul>
									<li>
<<<<<<< HEAD
						<strong>/qa/</strong>: 
						<a href="/qa/res/11017#11137">
							<em>&gt;&gt;11131  These long-running sh&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10627#11136">
							<em>Great news, Anonymous!</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11132#11135">
							<em>&gt;&gt;11134  some weird outlandish&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11132#11134">
							<em>wuts a celsius?</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11132#11133">
							<em>please send some of it this wa&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11132#11132">
							<em>8 degrees Celsius….  Feels lik&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11017#11131">
							<em>4 seasons of hero academia…   &hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11126#11130">
							<em>I'd really like to see an anim&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11111#11129">
							<em>that's one tenth if the way to&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11111#11128">
							<em>five repeating digets!</em>
						</a>
					</li>
									<li>
						<strong>/b/</strong>: 
						<a href="/b/res/1415#1856">
							<em>well, style can be worked on l&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11127#11127">
							<em>ohaiyo</em>
=======
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
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11126#11126">
							<em>ITT: Manga you want to see an &hellip;</em>
=======
						<a href="/qa/res/10630#10634">
							<em>te</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11105#11125">
							<em>&gt;&gt;11105  teh rei</em>
=======
						<a href="/qa/res/10630#10633">
							<em>te</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10182#11124">
							<em>I played through Shard of Drea&hellip;</em>
=======
						<a href="/qa/res/10630#10632">
							<em>test</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/8837#11123">
							<em>feeling especially bleh</em>
=======
						<a href="/qa/res/10630#10631">
							<em>te</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/8669#11122">
							<em>Woke up and there is a storm o&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/10692#11121">
							<em>I probably need to beat alcoho&hellip;</em>
=======
						<a href="/qa/res/10630#10630">
							<em>te</em>
						</a>
					</li>
									<li>
						<strong>/poll/</strong>: 
						<a href="/poll/res/14#14">
							<em>test</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10692#11120">
							<em>where was this thread 15 minut&hellip;</em>
=======
						<a href="/qa/res/10627#10627">
							<em>(no comment)</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/10692#11119">
							<em>This was my last ween. I’m don&hellip;</em>
=======
						<a href="/qa/res/10624#10625">
							<em>(no comment)</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11109#11118">
							<em>Go away spinsters! Idols belon&hellip;</em>
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
						<a href="/qa/res/11105#11117">
							<em>(no comment)</em>
=======
						<a href="/qa/res/10624#10624">
							<em>(no comment)</em>
						</a>
					</li>
									<li>
						<strong>/megu/</strong>: 
						<a href="/megu/res/944#944">
							<em>test</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11111#11116">
							<em>&gt;&gt;11115  impressive!</em>
=======
						<a href="/qa/res/10622#10623">
							<em>test</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11111#11115">
							<em>&gt;&gt;11112  Thanks, I sure worked&hellip;</em>
=======
						<a href="/qa/res/10622#10622">
							<em>sdf</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11102#11113">
							<em>Wanna get tied up by a cute gi&hellip;</em>
=======
						<a href="/qa/res/10621#10621">
							<em>asdasd</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11111#11112">
							<em>nice get tard</em>
=======
						<a href="/qa/res/10620#10620">
							<em>yrasdzzzzzzxc</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11111#11111">
							<em>Lala is ICHIBAN AIDORU</em>
=======
						<a href="/qa/res/10619#10619">
							<em>asdasd</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/8669#11110">
							<em>sleepy time</em>
=======
						<a href="/qa/res/10618#10618">
							<em>yrasdzzzzzzx</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11109#11109">
							<em>(no comment)</em>
=======
						<a href="/qa/res/10617#10617">
							<em>yrasdzzzzzz</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
						</a>
					</li>
									<li>
						<strong>/qa/</strong>: 
<<<<<<< HEAD
						<a href="/qa/res/11102#11108">
							<em>It's S&amp;M stuff for the beating&hellip;</em>
=======
						<a href="/qa/res/10616#10616">
							<em>yrasdzzzzz</em>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
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
<<<<<<< HEAD
				<li>Total posts: 14,094</li>
				<li>Unique posters: 390</li>
				<li>Active content: 6 GB</li>
=======
				<li>Total posts: 13,575</li>
				<li>Unique posters: 399</li>
				<li>Active content: 5.66 GB</li>
>>>>>>> 64515fafb2ddbb492b478d7256d28ac7ddac384f
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