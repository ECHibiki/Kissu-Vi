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
			<img class="board_image" src="/static/banners/banner-kissu-14.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea  name="text"  style="display:none" >qmsSY[vpLH2P\1y@b,k_</textarea >
<span   style="display:none"><input   type="text"   name="firstname"   value="&#102;#⚈/ ♬&#51;}{QD&#116;&#55;\+d5&#58;Y@⚒BvVT-&#115;epZ$~]&#73;U;&#83;^nhX!9K[)m&#117;&lt;&#78;(W8♛&gt;xro2"></span>
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/[&#76;H&#32;Ji:`!;C+6&#92;&#111;T&#60;8O&#98;I&#124;?X]d.&#50;☨{&#116;W5 c⚱1&#66;=k@9&#40;3&#78;g☮*&#125;4&#39;&#80;Q&#45;MV⚯&#48;KD&#55;us&#106;" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input   type="hidden"   name="message"   value="wd1&#9759;7n%/&#101;:{&#73;⚲^B&#54;&#9898;&#114;g_)$z&#86;h]\f@&#90;&#53;&#76;&gt;23t;⛊M☃YXH-QFR'y☘&#78;K*x9T[" >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input   type="hidden"   value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"   name="q">
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none" ><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-" ></span >
			
			
				
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
		<div class="thread" id="thread_1710" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567524664110.png">1567524664110.png</a> <span class="unimportant">(860.97 KB, 1681x945, <span class="postfilename">Screenshot at 11-30-01.png</span>)</span></p><a href="/agg/src/1567524664110.png" target="_blank"><img class="post-image" src="/agg/thumb/1567524664110.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1710" ><p class="intro"><input type="checkbox" class="delete" name="delete_1710" id="delete_1710" /><label for="delete_1710"><span class="name">Anonymous</span> <time datetime="2019-09-03T15:35:03Z">09/03/19 (Tue) 15:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1710" onclick="return highlightReply(1710, event)" href="/agg/res/1710#1710">No.</a><a class="post_no" onclick="return citeReply(1710)" href="/agg/res/1710#q1710">1710</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1710">[Reply]</a></p><div class="body">does anyone else get reinterested in currently airing during the Fall season?<br/><a href=https://kissu.moe/qa/res/7323.html>https://kissu.moe/qa/res/7323.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1709" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567509644625.jpg">1567509644625.jpg</a> <span class="unimportant">(36.81 KB, 685x385, <span class="postfilename">1563665909650.jpg</span>)</span></p><a href="/agg/src/1567509644625.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567509644625.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1709" ><p class="intro"><input type="checkbox" class="delete" name="delete_1709" id="delete_1709" /><label for="delete_1709"><span class="name">Anonymous</span> <time datetime="2019-09-03T11:25:03Z">09/03/19 (Tue) 11:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1709" onclick="return highlightReply(1709, event)" href="/agg/res/1709#1709">No.</a><a class="post_no" onclick="return citeReply(1709)" href="/agg/res/1709#q1709">1709</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1709">[Reply]</a></p><div class="body">The /qa/ Candidate<br/><a href=https://kissu.moe/qa/res/7315.html>https://kissu.moe/qa/res/7315.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1708" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567505627814.png">1567505627814.png</a> <span class="unimportant">(970.29 KB, 1024x1031, <span class="postfilename">frog.png</span>)</span></p><a href="/agg/src/1567505627814.png" target="_blank"><img class="post-image" src="/agg/thumb/1567505627814.png" style="width:253px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1708" ><p class="intro"><input type="checkbox" class="delete" name="delete_1708" id="delete_1708" /><label for="delete_1708"><span class="name">Anonymous</span> <time datetime="2019-09-03T10:15:03Z">09/03/19 (Tue) 10:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1708" onclick="return highlightReply(1708, event)" href="/agg/res/1708#1708">No.</a><a class="post_no" onclick="return citeReply(1708)" href="/agg/res/1708#q1708">1708</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1708">[Reply]</a></p><div class="body">is this place safe for frogs?<br/><a href=https://kissu.moe/qa/res/7313.html>https://kissu.moe/qa/res/7313.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1707" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567499790413.jpg">1567499790413.jpg</a> <span class="unimportant">(387.82 KB, 1035x740, <span class="postfilename" title="1eafed639b24bd879fab7d0bfa480b33.jpg">1eafed639b24bd879fab7d0bfa….jpg</span>)</span></p><a href="/agg/src/1567499790413.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567499790413.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1707" ><p class="intro"><input type="checkbox" class="delete" name="delete_1707" id="delete_1707" /><label for="delete_1707"><span class="name">Anonymous</span> <time datetime="2019-09-03T08:40:03Z">09/03/19 (Tue) 08:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1707" onclick="return highlightReply(1707, event)" href="/agg/res/1707#1707">No.</a><a class="post_no" onclick="return citeReply(1707)" href="/agg/res/1707#q1707">1707</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1707">[Reply]</a></p><div class="body">ねむい...<br/><a href=https://kissu.moe/qa/res/7306.html>https://kissu.moe/qa/res/7306.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1706" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567490086776.jpg">1567490086776.jpg</a> <span class="unimportant">(58.3 KB, 358x358, <span class="postfilename">1504237395668.jpg</span>)</span></p><a href="/agg/src/1567490086776.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567490086776.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1706" ><p class="intro"><input type="checkbox" class="delete" name="delete_1706" id="delete_1706" /><label for="delete_1706"><span class="subject">What is it with /a/ and generals?</span> <span class="name">Anonymous</span> <time datetime="2019-09-03T05:55:03Z">09/03/19 (Tue) 05:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1706" onclick="return highlightReply(1706, event)" href="/agg/res/1706#1706">No.</a><a class="post_no" onclick="return citeReply(1706)" href="/agg/res/1706#q1706">1706</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1706">[Reply]</a></p><div class="body">I always hear people I assume originate from /a/ or /a/ spinoffs talking about how they hate generals. Yet I always see the places filled with them. Am I missing something or does /a/ just pretend to hate generals<br/><a href=https://kissu.moe/qa/res/7287.html>https://kissu.moe/qa/res/7287.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1705" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567489508421.png">1567489508421.png</a> <span class="unimportant">(828.05 KB, 773x1000, <span class="postfilename" title="ff2fa0985b91bf5847e2cc829d81c675.png">ff2fa0985b91bf5847e2cc829d….png</span>)</span></p><a href="/agg/src/1567489508421.png" target="_blank"><img class="post-image" src="/agg/thumb/1567489508421.png" style="width:197px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1705" ><p class="intro"><input type="checkbox" class="delete" name="delete_1705" id="delete_1705" /><label for="delete_1705"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:50:03Z">09/03/19 (Tue) 05:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1705" onclick="return highlightReply(1705, event)" href="/agg/res/1705#1705">No.</a><a class="post_no" onclick="return citeReply(1705)" href="/agg/res/1705#q1705">1705</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1705">[Reply]</a></p><div class="body">Sir, the results of the diagnosis are in.<br/><br/>I&#39;m sorry to have to tell you this, but... you&#39;re a /qa/eer<br/><a href=https://kissu.moe/qa/res/7282.html>https://kissu.moe/qa/res/7282.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1704" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487892795.jpg">1567487892795.jpg</a> <span class="unimportant">(107.53 KB, 717x715, <span class="postfilename" title="Blank+_34ebafdaac64e1879c9ccddb1f4bc5e7.jpg">Blank+_34ebafdaac64e1879c9….jpg</span>)</span></p><a href="/agg/src/1567487892795.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567487892795.png" style="width:255px;height:254px" alt="" /></a></div>    </div>    <div class="post op" id="op_1704" ><p class="intro"><input type="checkbox" class="delete" name="delete_1704" id="delete_1704" /><label for="delete_1704"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:20:02Z">09/03/19 (Tue) 05:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1704" onclick="return highlightReply(1704, event)" href="/agg/res/1704#1704">No.</a><a class="post_no" onclick="return citeReply(1704)" href="/agg/res/1704#q1704">1704</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1704">[Reply]</a></p><div class="body">i love anime<br/><a href=https://kissu.moe/qa/res/7279.html>https://kissu.moe/qa/res/7279.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1703" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487689351.png">1567487689351.png</a> <span class="unimportant">(202.1 KB, 600x470, <span class="postfilename" title="sad-miku-users-coloring-pages-131907.jpg.png">sad-miku-users-coloring-pa….png</span>)</span></p><a href="/agg/src/1567487689351.png" target="_blank"><img class="post-image" src="/agg/thumb/1567487689351.png" style="width:255px;height:200px" alt="" /></a></div>    </div>    <div class="post op" id="op_1703" ><p class="intro"><input type="checkbox" class="delete" name="delete_1703" id="delete_1703" /><label for="delete_1703"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:15:03Z">09/03/19 (Tue) 05:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1703" onclick="return highlightReply(1703, event)" href="/agg/res/1703#1703">No.</a><a class="post_no" onclick="return citeReply(1703)" href="/agg/res/1703#q1703">1703</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1703">[Reply]</a></p><div class="body"><span class="quote">&gt;make epic threads</span><br/><span class="quote">&gt;gaylord mod deletes them because muh quality discussion :(</span><br/>cringe<br/><a href=https://kissu.moe/qa/res/7276.html>https://kissu.moe/qa/res/7276.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1702" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487388845.jpg">1567487388845.jpg</a> <span class="unimportant">(27 KB, 236x397, <span class="postfilename">dont-judge-me-otaku-meme.jpg</span>)</span></p><a href="/agg/src/1567487388845.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567487388845.png" style="width:152px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1702" ><p class="intro"><input type="checkbox" class="delete" name="delete_1702" id="delete_1702" /><label for="delete_1702"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:10:03Z">09/03/19 (Tue) 05:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1702" onclick="return highlightReply(1702, event)" href="/agg/res/1702#1702">No.</a><a class="post_no" onclick="return citeReply(1702)" href="/agg/res/1702#q1702">1702</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1702">[Reply]</a></p><div class="body">bro....<br/><a href=https://kissu.moe/qa/res/7272.html>https://kissu.moe/qa/res/7272.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1701" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487290406.jpg">1567487290406.jpg</a> <span class="unimportant">(96.5 KB, 640x920, <span class="postfilename" title="05196f6b911c5c289628868a63467e3792d49a-wm.jpg">05196f6b911c5c289628868a63….jpg</span>)</span></p><a href="/agg/src/1567487290406.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567487290406.png" style="width:177px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1701" ><p class="intro"><input type="checkbox" class="delete" name="delete_1701" id="delete_1701" /><label for="delete_1701"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:10:02Z">09/03/19 (Tue) 05:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1701" onclick="return highlightReply(1701, event)" href="/agg/res/1701#1701">No.</a><a class="post_no" onclick="return citeReply(1701)" href="/agg/res/1701#q1701">1701</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1701">[Reply]</a></p><div class="body">anyone else know this feel?<br/><a href=https://kissu.moe/qa/res/7271.html>https://kissu.moe/qa/res/7271.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1700" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487215383.jpg">1567487215383.jpg</a> <span class="unimportant">(115.8 KB, 540x960, <span class="postfilename">z9epdsKdW4o.jpg</span>)</span></p><a href="/agg/src/1567487215383.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567487215383.png" style="width:144px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1700" ><p class="intro"><input type="checkbox" class="delete" name="delete_1700" id="delete_1700" /><label for="delete_1700"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:10:02Z">09/03/19 (Tue) 05:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1700" onclick="return highlightReply(1700, event)" href="/agg/res/1700#1700">No.</a><a class="post_no" onclick="return citeReply(1700)" href="/agg/res/1700#q1700">1700</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1700">[Reply]</a></p><div class="body">rate my sister faggots<br/><a href=https://kissu.moe/qa/res/7269.html>https://kissu.moe/qa/res/7269.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1699" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487178967.jpg">1567487178967.jpg</a> <span class="unimportant">(164.65 KB, 1280x720, <span class="postfilename">16.jpg</span>)</span></p><a href="/agg/src/1567487178967.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567487178967.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1699" ><p class="intro"><input type="checkbox" class="delete" name="delete_1699" id="delete_1699" /><label for="delete_1699"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:10:02Z">09/03/19 (Tue) 05:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1699" onclick="return highlightReply(1699, event)" href="/agg/res/1699#1699">No.</a><a class="post_no" onclick="return citeReply(1699)" href="/agg/res/1699#q1699">1699</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1699">[Reply]</a></p><div class="body">literally cringing so hard reading this boared rn<br/><a href=https://kissu.moe/qa/res/7267.html>https://kissu.moe/qa/res/7267.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1698" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567487070894.jpg">1567487070894.jpg</a> <span class="unimportant">(85.29 KB, 1280x720, <span class="postfilename">maxresdefault.jpg</span>)</span></p><a href="/agg/src/1567487070894.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567487070894.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1698" ><p class="intro"><input type="checkbox" class="delete" name="delete_1698" id="delete_1698" /><label for="delete_1698"><span class="name">Anonymous</span> <time datetime="2019-09-03T05:05:03Z">09/03/19 (Tue) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1698" onclick="return highlightReply(1698, event)" href="/agg/res/1698#1698">No.</a><a class="post_no" onclick="return citeReply(1698)" href="/agg/res/1698#q1698">1698</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1698">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/7265.html>https://kissu.moe/qa/res/7265.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1697" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567483819529.jpg">1567483819529.jpg</a> <span class="unimportant">(137.61 KB, 1000x600, <span class="postfilename">Macikado Mazoku.jpg</span>)</span></p><a href="/agg/src/1567483819529.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567483819529.png" style="width:255px;height:153px" alt="" /></a></div>    </div>    <div class="post op" id="op_1697" ><p class="intro"><input type="checkbox" class="delete" name="delete_1697" id="delete_1697" /><label for="delete_1697"><span class="name">Anonymous</span> <time datetime="2019-09-03T04:15:03Z">09/03/19 (Tue) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1697" onclick="return highlightReply(1697, event)" href="/agg/res/1697#1697">No.</a><a class="post_no" onclick="return citeReply(1697)" href="/agg/res/1697#q1697">1697</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1697">[Reply]</a></p><div class="body">Thoughts on Machikado Mazoku? I thought it was a boring show with cute charas. Anyone else?<br/><a href=https://kissu.moe/qa/res/7249.html>https://kissu.moe/qa/res/7249.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1696" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567483474942.jpg">1567483474942.jpg</a> <span class="unimportant">(39.37 KB, 704x480, <span class="postfilename" title="[SNS]Aa!_Megami-sama!_01.v2[AB0C59DC].mkv_snapshot_00.05_[2019.09.02_23.03.49].jpg">[SNS]Aa!_Megami-sama!_01.v….jpg</span>)</span></p><a href="/agg/src/1567483474942.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567483474942.png" style="width:255px;height:174px" alt="" /></a></div>    </div>    <div class="post op" id="op_1696" ><p class="intro"><input type="checkbox" class="delete" name="delete_1696" id="delete_1696" /><label for="delete_1696"><span class="name">Anonymous</span> <time datetime="2019-09-03T04:05:02Z">09/03/19 (Tue) 04:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1696" onclick="return highlightReply(1696, event)" href="/agg/res/1696#1696">No.</a><a class="post_no" onclick="return citeReply(1696)" href="/agg/res/1696#q1696">1696</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1696">[Reply]</a></p><div class="body">Does anyone else have trouble starting new shows/games/etc? It&#39;s just hard for me to stay focused when presented with all-new characters in all-new situations that I&#39;m not already invested in<br/><a href=https://kissu.moe/qa/res/7245.html>https://kissu.moe/qa/res/7245.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1695" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567481591382.png">1567481591382.png</a> <span class="unimportant">(1010.54 KB, 2000x1194, <span class="postfilename" title="spacechan_astra01_rocket_ride01b.png">spacechan_astra01_rocket_r….png</span>)</span></p><a href="/agg/src/1567481591382.png" target="_blank"><img class="post-image" src="/agg/thumb/1567481591382.png" style="width:255px;height:152px" alt="" /></a></div>    </div>    <div class="post op" id="op_1695" ><p class="intro"><input type="checkbox" class="delete" name="delete_1695" id="delete_1695" /><label for="delete_1695"><span class="name">Anonymous</span> <time datetime="2019-09-03T03:35:04Z">09/03/19 (Tue) 03:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1695" onclick="return highlightReply(1695, event)" href="/agg/res/1695#1695">No.</a><a class="post_no" onclick="return citeReply(1695)" href="/agg/res/1695#q1695">1695</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1695">[Reply]</a></p><div class="body">Friendly greetings from <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a><br/><a href=https://kissu.moe/qa/res/7235.html>https://kissu.moe/qa/res/7235.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1694" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567480795861.jpg">1567480795861.jpg</a> <span class="unimportant">(114 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Re Stage! Dream Days - 09 [720p].mkv_snapshot_10.23_[2019.09.02_21.16.21].jpg">[HorribleSubs] Re Stage! D….jpg</span>)</span></p><a href="/agg/src/1567480795861.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567480795861.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1694" ><p class="intro"><input type="checkbox" class="delete" name="delete_1694" id="delete_1694" /><label for="delete_1694"><span class="name">Anonymous</span> <time datetime="2019-09-03T03:20:03Z">09/03/19 (Tue) 03:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1694" onclick="return highlightReply(1694, event)" href="/agg/res/1694#1694">No.</a><a class="post_no" onclick="return citeReply(1694)" href="/agg/res/1694#q1694">1694</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1694">[Reply]</a></p><div class="body">This episode just kept getting gayer and gayer<br/><a href=https://kissu.moe/qa/res/7227.html>https://kissu.moe/qa/res/7227.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1693" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567480610098.jpg">1567480610098.jpg</a> <span class="unimportant">(30.17 KB, 426x426, <span class="postfilename">1508434533258.jpg</span>)</span></p><a href="/agg/src/1567480610098.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567480610098.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1693" ><p class="intro"><input type="checkbox" class="delete" name="delete_1693" id="delete_1693" /><label for="delete_1693"><span class="name">Anonymous</span> <time datetime="2019-09-03T03:20:03Z">09/03/19 (Tue) 03:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1693" onclick="return highlightReply(1693, event)" href="/agg/res/1693#1693">No.</a><a class="post_no" onclick="return citeReply(1693)" href="/agg/res/1693#q1693">1693</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1693">[Reply]</a></p><div class="body">nigger<br/><a href=https://kissu.moe/qa/res/7225.html>https://kissu.moe/qa/res/7225.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1692" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567479551489.png">1567479551489.png</a> <span class="unimportant">(883.24 KB, 707x1000, <span class="postfilename">72410194_p0.png</span>)</span></p><a href="/agg/src/1567479551489.png" target="_blank"><img class="post-image" src="/agg/thumb/1567479551489.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1692" ><p class="intro"><input type="checkbox" class="delete" name="delete_1692" id="delete_1692" /><label for="delete_1692"><span class="name">Anonymous</span> <time datetime="2019-09-03T03:00:05Z">09/03/19 (Tue) 03:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1692" onclick="return highlightReply(1692, event)" href="/agg/res/1692#1692">No.</a><a class="post_no" onclick="return citeReply(1692)" href="/agg/res/1692#q1692">1692</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1692">[Reply]</a></p><div class="body">Does [qa/ like the Kyuuties?<br/><a href=https://kissu.moe/qa/res/7215.html>https://kissu.moe/qa/res/7215.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1691" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/rudziat8H_k" allowfullscreen></iframe>    <div class="post op" id="op_1691" ><p class="intro"><input type="checkbox" class="delete" name="delete_1691" id="delete_1691" /><label for="delete_1691"><span class="subject">音楽</span> <span class="name">Anonymous</span> <time datetime="2019-09-03T02:40:03Z">09/03/19 (Tue) 02:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1691" onclick="return highlightReply(1691, event)" href="/agg/res/1691#1691">No.</a><a class="post_no" onclick="return citeReply(1691)" href="/agg/res/1691#q1691">1691</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1691">[Reply]</a></p><div class="body">what&#39;s some music /qa/ likes<br/><a href=https://kissu.moe/qa/res/7211.html>https://kissu.moe/qa/res/7211.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/22" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a class="selected">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/24" method="get"><input type="submit" value="Next" /></form>
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