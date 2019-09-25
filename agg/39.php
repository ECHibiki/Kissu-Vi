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
			<img class="board_image" src="/static/banners/banner-kissu-6.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none"><input type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_"></div>
<input value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname" type="hidden" >
<input type="hidden" name="board" value="agg">
<div style="display:none"><input type="text" name="login" value="&#47;[&#76;H &#74;i:&#96;!;C&#43;6\oT&lt;8O&#98;I|?&#88;]d&#46;&#50;☨{t&#87;5 c&#9905;&#49;B&#61;k@&#57;(&#51;&#78;g☮&#42;}&#52;&#39;PQ-MV⚯0&#75;D&#55;u&#115;&#106;"></div>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none" ><input type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" ></div >
			</td>
		</tr>		<tr>
			<th>
				Options				<span  style="display:none"><input  type="text"  name="y0kh38z9do♒sb"  value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"  ><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"  ></div  >
			
			
				
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
		<div class="thread" id="thread_1389" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566243672377.png">1566243672377.png</a> <span class="unimportant">(123.11 KB, 562x400, <span class="postfilename">1.png</span>)</span></p><a href="/agg/src/1566243672377.png" target="_blank"><img class="post-image" src="/agg/thumb/1566243672377.png" style="width:240px;height:171px" alt="" /></a></div>    </div>    <div class="post op" id="op_1389" ><p class="intro"><input type="checkbox" class="delete" name="delete_1389" id="delete_1389" /><label for="delete_1389"><span class="name">Anonymous</span> <time datetime="2019-08-19T19:45:03Z">08/19/19 (Mon) 19:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1389" onclick="return highlightReply(1389, event)" href="/agg/res/1389#1389">No.</a><a class="post_no" onclick="return citeReply(1389)" href="/agg/res/1389#q1389">1389</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1389">[Reply]</a></p><div class="body">i drew yukari on girls und panzer check it out<br/><a href=http://what-ch.mooo.com/what/res/2093.html>http://what-ch.mooo.com/what/res/2093.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1388" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566239191464.mp4">1566239191464.mp4</a> <span class="unimportant">(28.89 MB, 640x480, <span class="postfilename">car_chase.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1566239191464.mp4&amp;t=car_chase.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566239191464.jpg" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1388" ><p class="intro"><input type="checkbox" class="delete" name="delete_1388" id="delete_1388" /><label for="delete_1388"><span class="name">Anonymous</span> <time datetime="2019-08-19T18:30:03Z">08/19/19 (Mon) 18:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1388" onclick="return highlightReply(1388, event)" href="/agg/res/1388#1388">No.</a><a class="post_no" onclick="return citeReply(1388)" href="/agg/res/1388#q1388">1388</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1388">[Reply]</a></p><div class="body">When&#39;s the age of 3d cars going to end...<br/><a href=https://kissu.moe/qa/res/5126.html>https://kissu.moe/qa/res/5126.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1387" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566236217150.jpg">1566236217150.jpg</a> <span class="unimportant">(1.56 MB, 1536x2050, <span class="postfilename">74970176_p0.jpg</span>)</span></p><a href="/agg/src/1566236217150.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566236217150.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1387" ><p class="intro"><input type="checkbox" class="delete" name="delete_1387" id="delete_1387" /><label for="delete_1387"><span class="name">Anonymous</span> <time datetime="2019-08-19T17:40:04Z">08/19/19 (Mon) 17:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1387" onclick="return highlightReply(1387, event)" href="/agg/res/1387#1387">No.</a><a class="post_no" onclick="return citeReply(1387)" href="/agg/res/1387#q1387">1387</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1387">[Reply]</a></p><div class="body">Gao~<br/><a href=https://kissu.moe/qa/res/5123.html>https://kissu.moe/qa/res/5123.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1386" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566235094925.jpg">1566235094925.jpg</a> <span class="unimportant">(492.13 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 06 [720p].mkv_snapshot_00.10_[2019.08.19_13.17.47].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1566235094925.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566235094925.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1386" ><p class="intro"><input type="checkbox" class="delete" name="delete_1386" id="delete_1386" /><label for="delete_1386"><span class="name">Anonymous</span> <time datetime="2019-08-19T17:20:04Z">08/19/19 (Mon) 17:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1386" onclick="return highlightReply(1386, event)" href="/agg/res/1386#1386">No.</a><a class="post_no" onclick="return citeReply(1386)" href="/agg/res/1386#q1386">1386</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1386">[Reply]</a></p><div class="body">Wonder what&#39;s in here...<br/><a href=https://kissu.moe/qa/res/5118.html>https://kissu.moe/qa/res/5118.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1385" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566234950615.png">1566234950615.png</a> <span class="unimportant">(698.49 KB, 575x639, <span class="postfilename">shit slaps.png</span>)</span></p><a href="/agg/src/1566234950615.png" target="_blank"><img class="post-image" src="/agg/thumb/1566234950615.png" style="width:216px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1385" ><p class="intro"><input type="checkbox" class="delete" name="delete_1385" id="delete_1385" /><label for="delete_1385"><span class="name">Anonymous</span> <time datetime="2019-08-19T17:20:03Z">08/19/19 (Mon) 17:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1385" onclick="return highlightReply(1385, event)" href="/agg/res/1385#1385">No.</a><a class="post_no" onclick="return citeReply(1385)" href="/agg/res/1385#q1385">1385</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1385">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2089.html>http://what-ch.mooo.com/what/res/2089.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1384" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566223602896.jpg">1566223602896.jpg</a> <span class="unimportant">(1.1 MB, 1051x1577, <span class="postfilename">1566220514680.jpg</span>)</span></p><a href="/agg/src/1566223602896.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566223602896.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1384" ><p class="intro"><input type="checkbox" class="delete" name="delete_1384" id="delete_1384" /><label for="delete_1384"><span class="name">Anonymous</span> <time datetime="2019-08-19T14:10:02Z">08/19/19 (Mon) 14:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1384" onclick="return highlightReply(1384, event)" href="/agg/res/1384#1384">No.</a><a class="post_no" onclick="return citeReply(1384)" href="/agg/res/1384#q1384">1384</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1384">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2086.html>http://what-ch.mooo.com/what/res/2086.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1383" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566208199036.png">1566208199036.png</a> <span class="unimportant">(23.18 KB, 600x600, <span class="postfilename">33469132_p0.png</span>)</span></p><a href="/agg/src/1566208199036.png" target="_blank"><img class="post-image" src="/agg/thumb/1566208199036.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1383" ><p class="intro"><input type="checkbox" class="delete" name="delete_1383" id="delete_1383" /><label for="delete_1383"><span class="name">Anonymous</span> <time datetime="2019-08-19T09:50:03Z">08/19/19 (Mon) 09:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1383" onclick="return highlightReply(1383, event)" href="/agg/res/1383#1383">No.</a><a class="post_no" onclick="return citeReply(1383)" href="/agg/res/1383#q1383">1383</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1383">[Reply]</a></p><div class="body">goodnight /qa/, err kissu, err kissuqa<br/>...<br/>what do I call it<br/>we&#39;re the /qa/ community, but we...<br/>......<br/>huh<br/><a href=https://kissu.moe/qa/res/5101.html>https://kissu.moe/qa/res/5101.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1382" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566196134110.jpg">1566196134110.jpg</a> <span class="unimportant">(91.77 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Slow Start - 01 [720p].mkv_snapshot_01.21_[2018.01.07_15.08.02].jpg">[HorribleSubs] Slow Start ….jpg</span>)</span></p><a href="/agg/src/1566196134110.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566196134110.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1382" ><p class="intro"><input type="checkbox" class="delete" name="delete_1382" id="delete_1382" /><label for="delete_1382"><span class="name">Anonymous</span> <time datetime="2019-08-19T06:30:03Z">08/19/19 (Mon) 06:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1382" onclick="return highlightReply(1382, event)" href="/agg/res/1382#1382">No.</a><a class="post_no" onclick="return citeReply(1382)" href="/agg/res/1382#q1382">1382</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1382">[Reply]</a></p><div class="body">How do you get your brain to work fast enough to memorize and pull off all the crazy combos in fighters?<br/><a href=https://kissu.moe/qa/res/5089.html>https://kissu.moe/qa/res/5089.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1381" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566195151684.jpg">1566195151684.jpg</a> <span class="unimportant">(342.49 KB, 768x1024, <span class="postfilename">76242922_p0.jpg</span>)</span></p><a href="/agg/src/1566195151684.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566195151684.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1381" ><p class="intro"><input type="checkbox" class="delete" name="delete_1381" id="delete_1381" /><label for="delete_1381"><span class="name">Anonymous</span> <time datetime="2019-08-19T06:15:04Z">08/19/19 (Mon) 06:15:04</time></label>&nbsp;<a class="post_no" id="post_no_1381" onclick="return highlightReply(1381, event)" href="/agg/res/1381#1381">No.</a><a class="post_no" onclick="return citeReply(1381)" href="/agg/res/1381#q1381">1381</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1381">[Reply]</a></p><div class="body">lala riding a banana<br/><a href=https://kissu.moe/qa/res/5075.html>https://kissu.moe/qa/res/5075.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1380" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566195088045.png">1566195088045.png</a> <span class="unimportant">(345.17 KB, 738x738, <span class="postfilename" title="__kafuu_chino_gochuumon_wa_usagi_desu_ka_drawn_by_rin_fuwarin__6a2f2c52b8e2d974fafeadd0ac916000.png">__kafuu_chino_gochuumon_wa….png</span>)</span></p><a href="/agg/src/1566195088045.png" target="_blank"><img class="post-image" src="/agg/thumb/1566195088045.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1380" ><p class="intro"><input type="checkbox" class="delete" name="delete_1380" id="delete_1380" /><label for="delete_1380"><span class="name">Anonymous</span> <time datetime="2019-08-19T06:15:04Z">08/19/19 (Mon) 06:15:04</time></label>&nbsp;<a class="post_no" id="post_no_1380" onclick="return highlightReply(1380, event)" href="/agg/res/1380#1380">No.</a><a class="post_no" onclick="return citeReply(1380)" href="/agg/res/1380#q1380">1380</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1380">[Reply]</a></p><div class="body">i can&#39;t help it, she&#39;s irresistable<br/><a href=https://kissu.moe/qa/res/5074.html>https://kissu.moe/qa/res/5074.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1379" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566185359441.jpg">1566185359441.jpg</a> <span class="unimportant">(276.88 KB, 1080x1080, <span class="postfilename">squidmue.jpg</span>)</span></p><a href="/agg/src/1566185359441.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566185359441.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1379" ><p class="intro"><input type="checkbox" class="delete" name="delete_1379" id="delete_1379" /><label for="delete_1379"><span class="name">Anonymous</span> <time datetime="2019-08-19T03:30:07Z">08/19/19 (Mon) 03:30:07</time></label>&nbsp;<a class="post_no" id="post_no_1379" onclick="return highlightReply(1379, event)" href="/agg/res/1379#1379">No.</a><a class="post_no" onclick="return citeReply(1379)" href="/agg/res/1379#q1379">1379</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1379">[Reply]</a></p><div class="body">Get in<br/><a href=http://what-ch.mooo.com/what/res/2077.html>http://what-ch.mooo.com/what/res/2077.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1378" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566184153082.png">1566184153082.png</a> <span class="unimportant">(56.46 KB, 268x319, <span class="postfilename">thinkin bout frames.png</span>)</span></p><a href="/agg/src/1566184153082.png" target="_blank"><img class="post-image" src="/agg/thumb/1566184153082.png" style="width:214px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1378" ><p class="intro"><input type="checkbox" class="delete" name="delete_1378" id="delete_1378" /><label for="delete_1378"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-19T03:10:02Z">08/19/19 (Mon) 03:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1378" onclick="return highlightReply(1378, event)" href="/agg/res/1378#1378">No.</a><a class="post_no" onclick="return citeReply(1378)" href="/agg/res/1378#q1378">1378</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1378">[Reply]</a></p><div class="body">can hear a cricket outside<br/>i wonder if having a pet cricket could be cool<br/>probably would be, probably really<br/><a href=https://kissu.moe/qa/res/5052.html>https://kissu.moe/qa/res/5052.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1377" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566175495047.png">1566175495047.png</a> <span class="unimportant">(562.08 KB, 480x720, <span class="postfilename" title="[higurashi no naku koro ni][group][artist- kamaboko red] 0f1e52b3311e76dadaddf5ba3a961803.png">[higurashi no naku koro ni….png</span>)</span></p><a href="/agg/src/1566175495047.png" target="_blank"><img class="post-image" src="/agg/thumb/1566175495047.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1377" ><p class="intro"><input type="checkbox" class="delete" name="delete_1377" id="delete_1377" /><label for="delete_1377"><span class="name">Anonymous</span> <time datetime="2019-08-19T00:45:04Z">08/19/19 (Mon) 00:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1377" onclick="return highlightReply(1377, event)" href="/agg/res/1377#1377">No.</a><a class="post_no" onclick="return citeReply(1377)" href="/agg/res/1377#q1377">1377</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1377">[Reply]</a></p><div class="body">I want to take Rika home with me<br/><a href=https://kissu.moe/qa/res/5048.html>https://kissu.moe/qa/res/5048.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1376" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566169182685.jpg">1566169182685.jpg</a> <span class="unimportant">(293.69 KB, 1600x900, <span class="postfilename">1566163773941.jpg</span>)</span></p><a href="/agg/src/1566169182685.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566169182685.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1376" ><p class="intro"><input type="checkbox" class="delete" name="delete_1376" id="delete_1376" /><label for="delete_1376"><span class="name">Anonymous</span> <time datetime="2019-08-18T23:00:08Z">08/18/19 (Sun) 23:00:08</time></label>&nbsp;<a class="post_no" id="post_no_1376" onclick="return highlightReply(1376, event)" href="/agg/res/1376#1376">No.</a><a class="post_no" onclick="return citeReply(1376)" href="/agg/res/1376#q1376">1376</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1376">[Reply]</a></p><div class="body"><span class="quote">&gt;mom enters my room while I&#39;m playing as a female character</span><br/><span class="quote">&gt;"are you gay now, haha"</span><br/><span class="quote">&gt;mom enters my room while I&#39;m talking to a female character</span><br/><span class="quote">&gt;"Is that your new girlfriend, haha"</span><br/><a href=http://what-ch.mooo.com/what/res/2071.html>http://what-ch.mooo.com/what/res/2071.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1375" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566167936037.jpg">1566167936037.jpg</a> <span class="unimportant">(372.52 KB, 654x519, <span class="postfilename">2019-08-18_17-36-42.jpg</span>)</span></p><a href="/agg/src/1566167936037.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566167936037.png" style="width:255px;height:203px" alt="" /></a></div>    </div>    <div class="post op" id="op_1375" ><p class="intro"><input type="checkbox" class="delete" name="delete_1375" id="delete_1375" /><label for="delete_1375"><span class="name">Anonymous</span> <time datetime="2019-08-18T22:40:04Z">08/18/19 (Sun) 22:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1375" onclick="return highlightReply(1375, event)" href="/agg/res/1375#1375">No.</a><a class="post_no" onclick="return citeReply(1375)" href="/agg/res/1375#q1375">1375</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1375">[Reply]</a></p><div class="body"><a href="https://mega.nz/#!oxtDzAzQ!YIv1L8xhptpEwnewmjHf4RTGl9ueWhDzGFh3zMF-CsA" rel="nofollow" target="_blank">https://mega.nz/#!oxtDzAzQ!YIv1L8xhptpEwnewmjHf4RTGl9ueWhDzGFh3zMF-CsA</a><br/>This is an older doujin game named Line-Kill Spirits. <br/>It&#39;s a pretty simple and unremarkable fighting game, except you can only beat your opponent by taking pictures of their panties.<br/>Use the PTConfig.exe to set your controls, but the combat is very basic. It&#39;s not too hard to figure out the special moves because they&#39;re very similar to classic Street Fighter 2 stuff. Figure out how to launch or trip up the enemy and get good panty shots!<br/><a href=https://kissu.moe/qa/res/5036.html>https://kissu.moe/qa/res/5036.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1374" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566154301135.jpg">1566154301135.jpg</a> <span class="unimportant">(1.01 MB, 888x1243, <span class="postfilename" title="8e768a228e5c6cd2dfa7db34260f1e20.jpg">8e768a228e5c6cd2dfa7db3426….jpg</span>)</span></p><a href="/agg/src/1566154301135.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566154301135.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1374" ><p class="intro"><input type="checkbox" class="delete" name="delete_1374" id="delete_1374" /><label for="delete_1374"><span class="name">Anonymous</span> <time datetime="2019-08-18T18:55:03Z">08/18/19 (Sun) 18:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1374" onclick="return highlightReply(1374, event)" href="/agg/res/1374#1374">No.</a><a class="post_no" onclick="return citeReply(1374)" href="/agg/res/1374#q1374">1374</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1374">[Reply]</a></p><div class="body">Feelin devilish today<br/><a href=https://kissu.moe/qa/res/5010.html>https://kissu.moe/qa/res/5010.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1373" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566152792914.jpg">1566152792914.jpg</a> <span class="unimportant">(10.73 KB, 422x168, <span class="postfilename">1380071748143.jpg</span>)</span></p><a href="/agg/src/1566152792914.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566152792914.png" style="width:255px;height:102px" alt="" /></a></div>    </div>    <div class="post op" id="op_1373" ><p class="intro"><input type="checkbox" class="delete" name="delete_1373" id="delete_1373" /><label for="delete_1373"><span class="name">Anonymous</span> <time datetime="2019-08-18T18:30:03Z">08/18/19 (Sun) 18:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1373" onclick="return highlightReply(1373, event)" href="/agg/res/1373#1373">No.</a><a class="post_no" onclick="return citeReply(1373)" href="/agg/res/1373#q1373">1373</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1373">[Reply]</a></p><div class="body">one of these days...<br/><br/><a href="https://djtguide.neocities.org" rel="nofollow" target="_blank">https://djtguide.neocities.org</a><br/><a href="https://itazuraneko.neocities.org/" rel="nofollow" target="_blank">https://itazuraneko.neocities.org/</a><br/><a href=https://kissu.moe/qa/res/5007.html>https://kissu.moe/qa/res/5007.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1372" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566146814947.jpg">1566146814947.jpg</a> <span class="unimportant">(733.17 KB, 2560x1440, <span class="postfilename">20190818124242_1.jpg</span>)</span></p><a href="/agg/src/1566146814947.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566146814947.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1372" ><p class="intro"><input type="checkbox" class="delete" name="delete_1372" id="delete_1372" /><label for="delete_1372"><span class="name">Anonymous</span> <time datetime="2019-08-18T16:50:03Z">08/18/19 (Sun) 16:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1372" onclick="return highlightReply(1372, event)" href="/agg/res/1372#1372">No.</a><a class="post_no" onclick="return citeReply(1372)" href="/agg/res/1372#q1372">1372</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1372">[Reply]</a></p><div class="body">Feel like I&#39;ve been missing out having never played sorcerer before in a souls game. It&#39;s so much fun in SotFS<br/><a href=https://kissu.moe/qa/res/5003.html>https://kissu.moe/qa/res/5003.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1371" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566141731773.png">1566141731773.png</a> <span class="unimportant">(1 MB, 930x656, <span class="postfilename" title="eff6ed6fb0f81ecd7a6c3827698c3781.png">eff6ed6fb0f81ecd7a6c382769….png</span>)</span></p><a href="/agg/src/1566141731773.png" target="_blank"><img class="post-image" src="/agg/thumb/1566141731773.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1371" ><p class="intro"><input type="checkbox" class="delete" name="delete_1371" id="delete_1371" /><label for="delete_1371"><span class="name">Anonymous</span> <time datetime="2019-08-18T15:25:03Z">08/18/19 (Sun) 15:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1371" onclick="return highlightReply(1371, event)" href="/agg/res/1371#1371">No.</a><a class="post_no" onclick="return citeReply(1371)" href="/agg/res/1371#q1371">1371</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1371">[Reply]</a></p><div class="body">Early morning, the /qa/ dead hours<br/><a href=https://kissu.moe/qa/res/4997.html>https://kissu.moe/qa/res/4997.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1370" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566128764807.jpeg">1566128764807.jpeg</a> <span class="unimportant">(124.63 KB, 1080x1080, <span class="postfilename">vocaloid 0114.jpeg</span>)</span></p><a href="/agg/src/1566128764807.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1566128764807.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1370" ><p class="intro"><input type="checkbox" class="delete" name="delete_1370" id="delete_1370" /><label for="delete_1370"><span class="name">Anonymous</span> <time datetime="2019-08-18T11:50:02Z">08/18/19 (Sun) 11:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1370" onclick="return highlightReply(1370, event)" href="/agg/res/1370#1370">No.</a><a class="post_no" onclick="return citeReply(1370)" href="/agg/res/1370#q1370">1370</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1370">[Reply]</a></p><div class="body">Please post Miku and tell me to cum.<br/>Call me a good boy too, please... that helps a lot...<br/><a href=http://what-ch.mooo.com/what/res/2062.html>http://what-ch.mooo.com/what/res/2062.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/38" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a class="selected">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/40" method="get"><input type="submit" value="Next" /></form>
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