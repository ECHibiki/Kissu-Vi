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

?><!doctype html>
<html>
<head>
	<meta charset="utf-8">

        <script type="text/javascript">
	  var
                        active_page = "index"
            , board_name = "agg";
	          </script>

			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js?12"></script>
								<title>/agg/ - Spinoff Aggregate</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_" >
<div   style="display:none"><input   type="text"   name="firstname"   value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2"></div>
<input type="hidden" name="board" value="agg">
<input type="hidden" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)">
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></span>
			
			
				
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				
				
			</td>
		</tr>
										<tr id="upload">
			<th>
				File			</th>
			<td>
				<input type="file" name="file" id="upload_file" style="width: 190px;"> 
				<script type="text/javascript">if (typeof init_file_selector !== 'undefined') init_file_selector(1);</script>
<button onclick="
$('input[id=upload_file]').val('');
return false;
" id="remove_img">X</button>
									<div style="float:none;text-align:left" id="upload_url">
						<label for="file_url">Or URL: </label>
						<input style="display:inline" type="text" id="file_url" name="file_url" size="35">
					</div>
								
			</td>
		</tr>
		
		
		<tr id="additional_clicker"><td colspan="2"><button onclick="
visible = $('tr[id=namerow]').css('display') == 'table-row';
if(!visible){
	$('tr[id=namerow]').css('display', 'table-row');
	$('tr[id=subjectrow]').css('display', 'table-row');
	$('input[id=email_submit]').css('display', 'none');
	$('input[id=subject_submit]').css('display', 'table-row');
	$('tr[id=embedrow]').css('display','table-row');
	$('tr[id=advancedoptrow]').css('display', 'table-row');
	$('tr[id=captcharow]').css('display', 'table-row');
	$('tr[id=spoilerrow]').css('display', 'table-row');
        $('tr[id=pswrdrow]').css('display', 'table-row');
this.textContent = '[Remove Hidden Options]';
}
else{
	$('tr[id=namerow]').css('display', 'none');
	$('tr[id=subjectrow]').css('display', 'none');
	$('input[id=email_submit]').css('display', 'table-row');
	$('input[id=subject_submit]').css('display', 'none');
	$('tr[id=embedrow]').css('display','none');
	$('tr[id=advancedoptrow]').css('display', 'none');
	$('tr[id=captcharow]').css('display', 'none');
	$('tr[id=spoilerrow]').css('display', 'none');
	$('tr[id=pswrdrow]').css('display', 'none');
this.textContent = '[View Hidden Options]';
}
return false;
">[View Hidden Options]</a></td></tr>


		<tr  style="display:none" id="embedrow">
			<th>
				Video Stream Embedding				
			</th>
			<td>
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
<tr id="advancedoptrow" style="display:none"><th>Advanced Options</th><td>
<label><input type="checkbox" id="force_noko" onchange="
localStorage.AlwaysNoko = this.checked;
if(this.checked == true)
        $('input[id=option_input]').val($('input[id=option_input]').val() + ' noko');
">Always Noko</label>
<label><input type="checkbox" id="force_sage" onchange="
localStorage.AlwaysSage = this.checked;
if(this.checked == true)
	$('input[id=option_input]').val($('input[id=option_input]').val() + ' sage');
">Always Sage</label>

<script>
if(localStorage.AlwaysSage == "true")
        $('input[id=option_input]').val($('input[id=option_input]').val() + ' sage');
$('input[id=force_sage]').prop('checked', localStorage.AlwaysSage == "true");

if(localStorage.AlwaysNoko == "true")
        $('input[id=option_input]').val($('input[id=option_input]').val() + ' noko');
$('input[id=force_noko]').prop('checked', localStorage.AlwaysNoko == "true");

</script>

				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select> 
</td></tr>
<tr id="captcharow"  style="display:none"><th>Captcha Type</th><td>				<span name='captchasel'>
				<label><input type="radio" name="captype" class="rec" value="recaptcha"> Recaptcha </label>
				<label><input type="radio" name="captype" class="cap" value="captchouli"> Captchouli </label>
				</span>
</td>
<tr id="spoilerrow"  style="display:none"><th>Spoiler</th><td> <input id="spoiler" name="spoiler" type="checkbox"> <label for="spoiler">Spoiler Image</label></td></tr>
				<tr id="pswrdrow" style="display: none;" >
			<th>
				Password				
			</th>
			<td >
				<input type="text" name="pswrd" value="" size="12" maxlength="18"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="70d8f66fb8d17574c44a5a9958b0db21874a19a5">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><h2>Big merge in a few minutes, site won't be available for 10-30 minutes probably</h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/agg/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="agg" />
		<div class="thread" id="thread_2030" data-board="agg"><div class="video-container" data-video="8qLL2Gx3I_k"><a href="https://youtu.be/8qLL2Gx3I_k" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/8qLL2Gx3I_k/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2030" ><p class="intro"><input type="checkbox" class="delete" name="delete_2030" id="delete_2030" /><label for="delete_2030"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T17:25:03Z">09/22/19 (Sun) 17:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2030" onclick="return highlightReply(2030, event)" href="/agg/res/2030#2030">No.</a><a class="post_no" onclick="return citeReply(2030)" href="/agg/res/2030#q2030">2030</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2030">[Reply]</a></p><div class="body">Wow<br/><a href=https://gnfos.com/jp/res/369415.html>https://gnfos.com/jp/res/369415.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2029" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569172186159.jpg">1569172186159.jpg</a> <span class="unimportant">(213.87 KB, 659x499, <span class="postfilename">1569170192895.jpg</span>)</span></p><a href="/agg/src/1569172186159.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569172186159.jpg" style="width:317px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2029" ><p class="intro"><input type="checkbox" class="delete" name="delete_2029" id="delete_2029" /><label for="delete_2029"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T17:10:03Z">09/22/19 (Sun) 17:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2029" onclick="return highlightReply(2029, event)" href="/agg/res/2029#2029">No.</a><a class="post_no" onclick="return citeReply(2029)" href="/agg/res/2029#q2029">2029</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2029">[Reply]</a></p><div class="body">Get in here<br/><a href=https://gnfos.com/jp/res/369414.html>https://gnfos.com/jp/res/369414.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2028" data-board="agg"><div class="video-container" data-video="aJZny1N0yJM"><a href="https://youtu.be/aJZny1N0yJM" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/aJZny1N0yJM/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2028" ><p class="intro"><input type="checkbox" class="delete" name="delete_2028" id="delete_2028" /><label for="delete_2028"><span class="name">Tada Banri</span> <time datetime="2019-09-22T16:45:03Z">09/22/19 (Sun) 16:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2028" onclick="return highlightReply(2028, event)" href="/agg/res/2028#2028">No.</a><a class="post_no" onclick="return citeReply(2028)" href="/agg/res/2028#q2028">2028</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2028">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369413.html>https://gnfos.com/jp/res/369413.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2027" data-board="agg"><div class="video-container" data-video="AR74HitPvws"><a href="https://youtu.be/AR74HitPvws" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/AR74HitPvws/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2027" ><p class="intro"><input type="checkbox" class="delete" name="delete_2027" id="delete_2027" /><label for="delete_2027"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T16:10:03Z">09/22/19 (Sun) 16:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2027" onclick="return highlightReply(2027, event)" href="/agg/res/2027#2027">No.</a><a class="post_no" onclick="return citeReply(2027)" href="/agg/res/2027#q2027">2027</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2027">[Reply]</a></p><div class="body">I&#39;m finally range bang<br/><a href=https://gnfos.com/jp/res/369412.html>https://gnfos.com/jp/res/369412.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2026" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569164326403.jpeg">1569164326403.jpeg</a> <span class="unimportant">(91.15 KB, 767x1041, <span class="postfilename" title="76A5489B-2175-4EB9-A1E0-F37424BCDE7C.jpeg">76A5489B-2175-4EB9-A1E0-F….jpeg</span>)</span></p><a href="/agg/src/1569164326403.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569164326403.png" style="width:188px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2026" ><p class="intro"><input type="checkbox" class="delete" name="delete_2026" id="delete_2026" /><label for="delete_2026"><span class="name">Anonymous</span> <time datetime="2019-09-22T15:00:04Z">09/22/19 (Sun) 15:00:04</time></label>&nbsp;<a class="post_no" id="post_no_2026" onclick="return highlightReply(2026, event)" href="/agg/res/2026#2026">No.</a><a class="post_no" onclick="return citeReply(2026)" href="/agg/res/2026#q2026">2026</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2026">[Reply]</a></p><div class="body">Cool-guy your life is about to get very miserable<br/><a href=https://kissu.moe/qa/res/10070.html>https://kissu.moe/qa/res/10070.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2025" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569159099755.png">1569159099755.png</a> <span class="unimportant">(49.64 KB, 324x585, <span class="postfilename">Domestic_CatOriginal.jpg.png</span>)</span></p><a href="/agg/src/1569159099755.png" target="_blank"><img class="post-image" src="/agg/thumb/1569159099755.png" style="width:141px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2025" ><p class="intro"><input type="checkbox" class="delete" name="delete_2025" id="delete_2025" /><label for="delete_2025"><span class="name">Anonymous</span> <time datetime="2019-09-22T13:35:03Z">09/22/19 (Sun) 13:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2025" onclick="return highlightReply(2025, event)" href="/agg/res/2025#2025">No.</a><a class="post_no" onclick="return citeReply(2025)" href="/agg/res/2025#q2025">2025</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2025">[Reply]</a></p><div class="body">I like cats.<br/><a href=https://kissu.moe/qa/res/10067.html>https://kissu.moe/qa/res/10067.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2024" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569157568592.jpg">1569157568592.jpg</a> <span class="unimportant">(162.93 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Machikado Mazoku - 11 [1080p].mkv_snapshot_05.58_[2019.09.22_08.05.50].jpg">[HorribleSubs] Machikado M….jpg</span>)</span></p><a href="/agg/src/1569157568592.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569157568592.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2024" ><p class="intro"><input type="checkbox" class="delete" name="delete_2024" id="delete_2024" /><label for="delete_2024"><span class="name">Anonymous</span> <time datetime="2019-09-22T13:10:03Z">09/22/19 (Sun) 13:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2024" onclick="return highlightReply(2024, event)" href="/agg/res/2024#2024">No.</a><a class="post_no" onclick="return citeReply(2024)" href="/agg/res/2024#q2024">2024</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2024">[Reply]</a></p><div class="body">The summer season is drawing to a close. Which shows did you like? Which ones did you drop?<br/>How would you rate the season itself?<br/><a href=https://kissu.moe/qa/res/10064.html>https://kissu.moe/qa/res/10064.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2023" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569155656296.jpg">1569155656296.jpg</a> <span class="unimportant">(27.87 KB, 480x480, <span class="postfilename">1568122169634.jpg</span>)</span></p><a href="/agg/src/1569155656296.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569155656296.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2023" ><p class="intro"><input type="checkbox" class="delete" name="delete_2023" id="delete_2023" /><label for="delete_2023"><span class="name">Tada Banri</span> <time datetime="2019-09-22T12:35:04Z">09/22/19 (Sun) 12:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2023" onclick="return highlightReply(2023, event)" href="/agg/res/2023#2023">No.</a><a class="post_no" onclick="return citeReply(2023)" href="/agg/res/2023#q2023">2023</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2023">[Reply]</a></p><div class="body"><span class="quote">&gt;fucking around with some shitty game for what I thought was like an hour before going to bed</span><br/><span class="quote">&gt;it was actually 5 hours</span><br/><span class="quote">&gt;it&#39;s now 6:30am and the sun is up</span><br/><br/><span class="heading"><strong>FUCK</strong></span><br/><a href=https://gnfos.com/jp/res/369409.html>https://gnfos.com/jp/res/369409.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2022" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569139869115.jpg">1569139869115.jpg</a> <span class="unimportant">(75.98 KB, 472x472, <span class="postfilename">1569139374411.jpg</span>)</span></p><a href="/agg/src/1569139869115.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569139869115.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2022" ><p class="intro"><input type="checkbox" class="delete" name="delete_2022" id="delete_2022" /><label for="delete_2022"><span class="name">Anonymous</span> <time datetime="2019-09-22T08:15:04Z">09/22/19 (Sun) 08:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2022" onclick="return highlightReply(2022, event)" href="/agg/res/2022#2022">No.</a><a class="post_no" onclick="return citeReply(2022)" href="/agg/res/2022#q2022">2022</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2022">[Reply]</a></p><div class="body">Shut the FUCK up /qa/, you faggots. Fucking skinny, buttmunching faggots. I hate you, you know that? I really do. &#39;Cause all you do is fucking prance around 4chan talking about your faggoty fairy meetups. I&#39;LL TELL YOU WHAT, I don&#39;t wanna hear about your fucking meetups, and how your assholes work, alright? It makes me sick, and I, I fucking hope you all fucking die of fag disease<br/><a href=https://kissu.moe/qa/res/10050.html>https://kissu.moe/qa/res/10050.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2021" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569136609401.jpg">1569136609401.jpg</a> <span class="unimportant">(427.48 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] UchiMusume - 08 [720p].mkv_snapshot_11.21_[2019.08.23_13.21.17].jpg">[HorribleSubs] UchiMusume ….jpg</span>)</span></p><a href="/agg/src/1569136609401.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569136609401.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2021" ><p class="intro"><input type="checkbox" class="delete" name="delete_2021" id="delete_2021" /><label for="delete_2021"><span class="subject">Average show appreciation</span> <span class="name">Anonymous</span> <time datetime="2019-09-22T07:20:08Z">09/22/19 (Sun) 07:20:08</time></label>&nbsp;<a class="post_no" id="post_no_2021" onclick="return highlightReply(2021, event)" href="/agg/res/2021#2021">No.</a><a class="post_no" onclick="return citeReply(2021)" href="/agg/res/2021#q2021">2021</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2021">[Reply]</a></p><div class="body">A thread for the shows that weren&#39;t anything special, amazing, or awful, but were still nice and not a drag to sit through regardless. Because they need a bit of love after they finish airing too<br/><a href=https://kissu.moe/qa/res/10038.html>https://kissu.moe/qa/res/10038.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2020" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569135542907.jpg">1569135542907.jpg</a> <span class="unimportant">(117.16 KB, 876x719, <span class="postfilename">1444342842313.jpg</span>)</span></p><a href="/agg/src/1569135542907.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569135542907.png" style="width:255px;height:209px" alt="" /></a></div>    </div>    <div class="post op" id="op_2020" ><p class="intro"><input type="checkbox" class="delete" name="delete_2020" id="delete_2020" /><label for="delete_2020"><span class="name">Anonymous</span> <time datetime="2019-09-22T07:00:03Z">09/22/19 (Sun) 07:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2020" onclick="return highlightReply(2020, event)" href="/agg/res/2020#2020">No.</a><a class="post_no" onclick="return citeReply(2020)" href="/agg/res/2020#q2020">2020</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2020">[Reply]</a></p><div class="body">Really got to admire the skill of some of these speedrunners. Can&#39;t imagine myself pulling some of these off in a million years.<br/><br/><a href="https://www.youtube.com/watch?v=C511V8wj9-U" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=C511V8wj9-U</a><br/><a href=https://kissu.moe/qa/res/10028.html>https://kissu.moe/qa/res/10028.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2019" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569132275559.jpeg">1569132275559.jpeg</a> <span class="unimportant">(91.15 KB, 767x1041, <span class="postfilename" title="539B4C26-0130-47C6-9BC0-58310679A723.jpeg">539B4C26-0130-47C6-9BC0-5….jpeg</span>)</span></p><a href="/agg/src/1569132275559.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569132275559.png" style="width:188px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2019" ><p class="intro"><input type="checkbox" class="delete" name="delete_2019" id="delete_2019" /><label for="delete_2019"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T06:05:03Z">09/22/19 (Sun) 06:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2019" onclick="return highlightReply(2019, event)" href="/agg/res/2019#2019">No.</a><a class="post_no" onclick="return citeReply(2019)" href="/agg/res/2019#q2019">2019</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2019">[Reply]</a></p><div class="body"><a onclick="return highlightReply(&#39;10003&#39;, event);" href="/qa/res/9998#10003">&gt;&gt;10003</a><br/>I can’t I’m rage banned<br/><a href=https://kissu.moe/qa/res/10012.html>https://kissu.moe/qa/res/10012.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2018" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569132236912.png">1569132236912.png</a> <span class="unimportant">(1.84 MB, 1750x1950, <span class="postfilename" title="CC239A3B-F98A-4E08-BC51-540EC321616C.png">CC239A3B-F98A-4E08-BC51-54….png</span>)</span></p><a href="/agg/src/1569132236912.png" target="_blank"><img class="post-image" src="/agg/thumb/1569132236912.png" style="width:229px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2018" ><p class="intro"><input type="checkbox" class="delete" name="delete_2018" id="delete_2018" /><label for="delete_2018"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T06:05:03Z">09/22/19 (Sun) 06:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2018" onclick="return highlightReply(2018, event)" href="/agg/res/2018#2018">No.</a><a class="post_no" onclick="return citeReply(2018)" href="/agg/res/2018#q2018">2018</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2018">[Reply]</a></p><div class="body"><a onclick="return highlightReply(&#39;9999&#39;, event);" href="/qa/res/9998#9999">&gt;&gt;9999</a><br/>Yeah lol zoomer Bros represents<br/><a href=https://kissu.moe/qa/res/10011.html>https://kissu.moe/qa/res/10011.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2017" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569127163811.png">1569127163811.png</a> <span class="unimportant">(30.03 KB, 176x197, <span class="postfilename">1489656108597.png</span>)</span></p><a href="/agg/src/1569127163811.png" target="_blank"><img class="post-image" src="/agg/thumb/1569127163811.png" style="width:176px;height:197px" alt="" /></a></div>    </div>    <div class="post op" id="op_2017" ><p class="intro"><input type="checkbox" class="delete" name="delete_2017" id="delete_2017" /><label for="delete_2017"><span class="name">Anonymous</span> <time datetime="2019-09-22T04:40:06Z">09/22/19 (Sun) 04:40:06</time></label>&nbsp;<a class="post_no" id="post_no_2017" onclick="return highlightReply(2017, event)" href="/agg/res/2017#2017">No.</a><a class="post_no" onclick="return citeReply(2017)" href="/agg/res/2017#q2017">2017</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2017">[Reply]</a></p><div class="body">Hibiki get<br/><a href=https://kissu.moe/qa/res/10000.html>https://kissu.moe/qa/res/10000.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2016" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569126843553.jpeg">1569126843553.jpeg</a> <span class="unimportant">(466.42 KB, 750x712, <span class="postfilename" title="E53DA6D6-0B83-48E8-B219-D14DE85A6EF6.jpeg">E53DA6D6-0B83-48E8-B219-D….jpeg</span>)</span></p><a href="/agg/src/1569126843553.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569126843553.png" style="width:255px;height:242px" alt="" /></a></div>    </div>    <div class="post op" id="op_2016" ><p class="intro"><input type="checkbox" class="delete" name="delete_2016" id="delete_2016" /><label for="delete_2016"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T04:35:20Z">09/22/19 (Sun) 04:35:20</time></label>&nbsp;<a class="post_no" id="post_no_2016" onclick="return highlightReply(2016, event)" href="/agg/res/2016#2016">No.</a><a class="post_no" onclick="return citeReply(2016)" href="/agg/res/2016#q2016">2016</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2016">[Reply]</a></p><div class="body"><a href="https://m.youtube.com/watch?v=AR74HitPvws&amp;feature=youtu.be" rel="nofollow" target="_blank">https://m.youtube.com/watch?v=AR74HitPvws&amp;feature=youtu.be</a><br/><a href=https://kissu.moe/qa/res/9998.html>https://kissu.moe/qa/res/9998.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2015" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569125637291.jpg">1569125637291.jpg</a> <span class="unimportant">(618.45 KB, 650x658, <span class="postfilename" title="__alice_margatroid_touhou_drawn_by_sakuraba_yuuki__de37cc4451d6380d95b1a8d2da6cb49f.jpg">__alice_margatroid_touhou_….jpg</span>)</span></p><a href="/agg/src/1569125637291.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569125637291.jpg" style="width:237px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2015" ><p class="intro"><input type="checkbox" class="delete" name="delete_2015" id="delete_2015" /><label for="delete_2015"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T04:15:12Z">09/22/19 (Sun) 04:15:12</time></label>&nbsp;<a class="post_no" id="post_no_2015" onclick="return highlightReply(2015, event)" href="/agg/res/2015#2015">No.</a><a class="post_no" onclick="return citeReply(2015)" href="/agg/res/2015#q2015">2015</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2015">[Reply]</a></p><div class="body">Have you ever sighed so hard that you entered a transcendental state of existential dread.....<br/><a href=https://gnfos.com/jp/res/369401.html>https://gnfos.com/jp/res/369401.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2014" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569124748057.jpeg">1569124748057.jpeg</a> <span class="unimportant">(76.57 KB, 350x495, <span class="postfilename" title="9E54DE62-B082-4325-891B-E78A22FA6941.jpeg">9E54DE62-B082-4325-891B-E….jpeg</span>)</span></p><a href="/agg/src/1569124748057.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569124748057.jpeg" style="width:169px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2014" ><p class="intro"><input type="checkbox" class="delete" name="delete_2014" id="delete_2014" /><label for="delete_2014"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T04:00:03Z">09/22/19 (Sun) 04:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2014" onclick="return highlightReply(2014, event)" href="/agg/res/2014#2014">No.</a><a class="post_no" onclick="return citeReply(2014)" href="/agg/res/2014#q2014">2014</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2014">[Reply]</a></p><div class="body">Range ban me<br/><a href=https://gnfos.com/jp/res/369396.html>https://gnfos.com/jp/res/369396.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2013" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569123217062.jpeg">1569123217062.jpeg</a> <span class="unimportant">(199.6 KB, 750x506, <span class="postfilename" title="DF9E615A-06E3-402E-8487-CC53DA1CD262.jpeg">DF9E615A-06E3-402E-8487-C….jpeg</span>)</span></p><a href="/agg/src/1569123217062.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569123217062.png" style="width:255px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_2013" ><p class="intro"><input type="checkbox" class="delete" name="delete_2013" id="delete_2013" /><label for="delete_2013"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T03:35:03Z">09/22/19 (Sun) 03:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2013" onclick="return highlightReply(2013, event)" href="/agg/res/2013#2013">No.</a><a class="post_no" onclick="return citeReply(2013)" href="/agg/res/2013#q2013">2013</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2013">[Reply]</a></p><div class="body">Hey zoomers can i post here<br/><a href=https://kissu.moe/qa/res/9982.html>https://kissu.moe/qa/res/9982.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2012" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569119827570.png">1569119827570.png</a> <span class="unimportant">(5.92 MB, 1920x4883, <span class="postfilename">201m37g2v0m31.png</span>)</span></p><a href="/agg/src/1569119827570.png" target="_blank"><img class="post-image" src="/agg/thumb/1569119827570.png" style="width:94px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2012" ><p class="intro"><input type="checkbox" class="delete" name="delete_2012" id="delete_2012" /><label for="delete_2012"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:41:06Z">09/22/19 (Sun) 02:41:06</time></label>&nbsp;<a class="post_no" id="post_no_2012" onclick="return highlightReply(2012, event)" href="/agg/res/2012#2012">No.</a><a class="post_no" onclick="return citeReply(2012)" href="/agg/res/2012#q2012">2012</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2012">[Reply]</a></p><div class="body"><span class="quote">&gt;post black men owiing white boys</span><br/><span class="quote">&gt;Ron Paulshit bans you</span><br/>LMAOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO who would think white incels are so sensitive LOL<br/><a href=https://gnfos.com/jp/res/369381.html>https://gnfos.com/jp/res/369381.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2011" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569119653028.jpg">1569119653028.jpg</a> <span class="unimportant">(6.09 KB, 253x199, <span class="postfilename">1569113276915.jpg</span>)</span></p><a href="/agg/src/1569119653028.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569119653028.jpg" style="width:253px;height:199px" alt="" /></a></div>    </div>    <div class="post op" id="op_2011" ><p class="intro"><input type="checkbox" class="delete" name="delete_2011" id="delete_2011" /><label for="delete_2011"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:35:48Z">09/22/19 (Sun) 02:35:48</time></label>&nbsp;<a class="post_no" id="post_no_2011" onclick="return highlightReply(2011, event)" href="/agg/res/2011#2011">No.</a><a class="post_no" onclick="return citeReply(2011)" href="/agg/res/2011#q2011">2011</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2011">[Reply]</a></p><div class="body">MY POSTS<br/><a href=https://gnfos.com/jp/res/369379.html>https://gnfos.com/jp/res/369379.html</a></div></div><br class="clear"/><hr/></div>
	<div id="post-moderation-fields">
		<div id="delete-fields">
		Delete Post [<input title="Delete file only" type="checkbox" name="file" id="delete_file" />
				 <label for="delete_file">File</label>] <label for="password">Password</label> 
		<input id="pswrd" type="text" name="pswrd" size="12" maxlength="18" />
<script>document.getElementById("pswrd").value = localStorage.getItem("pswrd");</script>
		<input type="submit" name="delete" value="Delete" />
	</div>
		
	<div id="report-fields">
		<label for="reason">Reason</label> 
		<input id="reason" type="text" name="reason" size="20" maxlength="30" />
		<input type="submit" name="report" value="Report" />
	</div>
</div>
	
	
			<span id="thread-links">
				<a id="thread-return" href="">[Refresh]</a>
				<a id="thread-top" href="#top">[Top]</a>
                							<a id="thread-catalog" href="/agg/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/6" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a class="selected">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/8" method="get"><input type="submit" value="Next" /></form>
					 | <a href="/agg/catalog">Catalog</a>
			</div>
	

	

	<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
			<a href="https://engine.vichan.net/">vichan</a> 5.1.4 -
		<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
		<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>

		<p class="unimportant" style="text-align:center;">All trademarks, copyrights, comments, and images on this page are owned by and are the responsibility of their respective parties.</p><p class="unimportant" style="text-align:center;">Concerns to the gmail of ECVerniy</p>	</footer>
	<script type="text/javascript">
		ready();
	</script>
	</div>
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