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
			<img class="board_image" src="/static/banners/banner-kissu-22.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none"><input type="text" name="text" value="&#113;msSY&#91;vpL&#72;2P\&#49;y@b&#44;k&#95;"></div>
<input name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" type="hidden" >
<input type="hidden" name="board" value="agg">
<textarea style="display:none" name="login"   >&#47;[L&#72; Ji&#58;`!;C+6&#92;oT&lt;8ObI&#124;&#63;&#88;]&#100;&#46;2☨{tW5 c⚱1&#66;&#61;k@9&#40;3&#78;g☮*}4'P&#81;-M&#86;⚯&#48;KD&#55;usj</textarea   >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value=" f♻⛭♃9&#47;qzwZk.@h|&#59;&#36;LF⛡mdv,ER83W%1&#89;IM^iU&#9740;&#53;☍&#43;Ag☪T=&#96;}⚑y&#99;7&#74;⛮P#b&#63;&#9892;6X&amp;&#123;&#68;x &#92;4&#78;pK&#72;n:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<input name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none" ><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-" ></div >
			
			
				
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
		<div class="thread" id="thread_1549" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566948638495.jpg">1566948638495.jpg</a> <span class="unimportant">(223.56 KB, 646x646, <span class="postfilename">1565744580467.jpg</span>)</span></p><a href="/agg/src/1566948638495.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566948638495.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1549" ><p class="intro"><input type="checkbox" class="delete" name="delete_1549" id="delete_1549" /><label for="delete_1549"><span class="name">Anonymous</span> <time datetime="2019-08-27T23:35:03Z">08/27/19 (Tue) 23:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1549" onclick="return highlightReply(1549, event)" href="/agg/res/1549#1549">No.</a><a class="post_no" onclick="return citeReply(1549)" href="/agg/res/1549#q1549">1549</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1549">[Reply]</a></p><div class="body">Nice board<br/><a href=https://kissu.moe/qa/res/6208.html>https://kissu.moe/qa/res/6208.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1548" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566948291511.jpg">1566948291511.jpg</a> <span class="unimportant">(169.83 KB, 600x847, <span class="postfilename" title="205f1bc5384b6d3d6f65a2b38fbf6ed8.jpg">205f1bc5384b6d3d6f65a2b38f….jpg</span>)</span></p><a href="/agg/src/1566948291511.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566948291511.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1548" ><p class="intro"><input type="checkbox" class="delete" name="delete_1548" id="delete_1548" /><label for="delete_1548"><span class="name">Anonymous</span> <time datetime="2019-08-27T23:25:03Z">08/27/19 (Tue) 23:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1548" onclick="return highlightReply(1548, event)" href="/agg/res/1548#1548">No.</a><a class="post_no" onclick="return citeReply(1548)" href="/agg/res/1548#q1548">1548</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1548">[Reply]</a></p><div class="body">How much money do I need to live out 60 more years comfortably?<br/><a href=https://kissu.moe/qa/res/6207.html>https://kissu.moe/qa/res/6207.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1547" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566941782643.jpg">1566941782643.jpg</a> <span class="unimportant">(359.5 KB, 1500x1061, <span class="postfilename">crying okuu.jpg</span>)</span></p><a href="/agg/src/1566941782643.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566941782643.png" style="width:255px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_1547" ><p class="intro"><input type="checkbox" class="delete" name="delete_1547" id="delete_1547" /><label for="delete_1547"><span class="name">Anonymous</span> <time datetime="2019-08-27T21:40:04Z">08/27/19 (Tue) 21:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1547" onclick="return highlightReply(1547, event)" href="/agg/res/1547#1547">No.</a><a class="post_no" onclick="return citeReply(1547)" href="/agg/res/1547#q1547">1547</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1547">[Reply]</a></p><div class="body">God I miss talking about toehoe..<br/><a href=https://kissu.moe/qa/res/6188.html>https://kissu.moe/qa/res/6188.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1546" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566939905320.jpg">1566939905320.jpg</a> <span class="unimportant">(1.58 MB, 2634x4174, <span class="postfilename" title="__saika_miina_sharin_no_kuni_yuukyuu_no_shounenshoujo_drawn_by_alpha_yukai_na_nakamatachi__5a913816c8069e35f0d71f7458585ac1.jpg">__saika_miina_sharin_no_ku….jpg</span>)</span></p><a href="/agg/src/1566939905320.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566939905320.png" style="width:161px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1546" ><p class="intro"><input type="checkbox" class="delete" name="delete_1546" id="delete_1546" /><label for="delete_1546"><span class="name">Anonymous</span> <time datetime="2019-08-27T21:10:03Z">08/27/19 (Tue) 21:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1546" onclick="return highlightReply(1546, event)" href="/agg/res/1546#1546">No.</a><a class="post_no" onclick="return citeReply(1546)" href="/agg/res/1546#q1546">1546</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1546">[Reply]</a></p><div class="body">You guys were right, it&#39;s nice to have a bit of a slower /qa/ where I&#39;m not spending all my time worrying about cleaning or board quality. If I just post on 4chan /qa/ to post on it there&#39;s much less of a burden on my mind.<br/><a href=https://kissu.moe/qa/res/6178.html>https://kissu.moe/qa/res/6178.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1545" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566937489809.jpg">1566937489809.jpg</a> <span class="unimportant">(81.53 KB, 960x640, <span class="postfilename">1488128980110.jpg</span>)</span></p><a href="/agg/src/1566937489809.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566937489809.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1545" ><p class="intro"><input type="checkbox" class="delete" name="delete_1545" id="delete_1545" /><label for="delete_1545"><span class="name">Anonymous</span> <time datetime="2019-08-27T20:25:02Z">08/27/19 (Tue) 20:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1545" onclick="return highlightReply(1545, event)" href="/agg/res/1545#1545">No.</a><a class="post_no" onclick="return citeReply(1545)" href="/agg/res/1545#q1545">1545</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1545">[Reply]</a></p><div class="body">Did you ever play any of those touhoumon type games? I wonder how they are compared to the original<br/><a href=https://kissu.moe/qa/res/6174.html>https://kissu.moe/qa/res/6174.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1544" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566932875647.jpg">1566932875647.jpg</a> <span class="unimportant">(169.16 KB, 1436x736, <span class="postfilename">1566930481744.jpg</span>)</span></p><a href="/agg/src/1566932875647.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566932875647.png" style="width:240px;height:124px" alt="" /></a></div>    </div>    <div class="post op" id="op_1544" ><p class="intro"><input type="checkbox" class="delete" name="delete_1544" id="delete_1544" /><label for="delete_1544"><span class="name">Anonymous</span> <time datetime="2019-08-27T19:10:03Z">08/27/19 (Tue) 19:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1544" onclick="return highlightReply(1544, event)" href="/agg/res/1544#1544">No.</a><a class="post_no" onclick="return citeReply(1544)" href="/agg/res/1544#q1544">1544</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1544">[Reply]</a></p><div class="body">Damn<br/><a href=http://what-ch.mooo.com/what/res/2302.html>http://what-ch.mooo.com/what/res/2302.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1543" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566932267146.png">1566932267146.png</a> <span class="unimportant">(60.61 KB, 286x297, <span class="postfilename">trash.png</span>)</span></p><a href="/agg/src/1566932267146.png" target="_blank"><img class="post-image" src="/agg/thumb/1566932267146.png" style="width:246px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1543" ><p class="intro"><input type="checkbox" class="delete" name="delete_1543" id="delete_1543" /><label for="delete_1543"><span class="name">Anonymous</span> <time datetime="2019-08-27T19:00:03Z">08/27/19 (Tue) 19:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1543" onclick="return highlightReply(1543, event)" href="/agg/res/1543#1543">No.</a><a class="post_no" onclick="return citeReply(1543)" href="/agg/res/1543#q1543">1543</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1543">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6160.html>https://kissu.moe/qa/res/6160.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1542" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566931550222.jpg">1566931550222.jpg</a> <span class="unimportant">(74.05 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Sora yori mo Tooi Basho - 03 [720p].mkv_snapshot_19.24_[2018.01.16_23.43.19].jpg">[HorribleSubs] Sora yori m….jpg</span>)</span></p><a href="/agg/src/1566931550222.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566931550222.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1542" ><p class="intro"><input type="checkbox" class="delete" name="delete_1542" id="delete_1542" /><label for="delete_1542"><span class="name">Anonymous</span> <time datetime="2019-08-27T18:50:03Z">08/27/19 (Tue) 18:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1542" onclick="return highlightReply(1542, event)" href="/agg/res/1542#1542">No.</a><a class="post_no" onclick="return citeReply(1542)" href="/agg/res/1542#q1542">1542</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1542">[Reply]</a></p><div class="body">FUCK MURLOCS<br/><a href=https://kissu.moe/qa/res/6158.html>https://kissu.moe/qa/res/6158.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1541" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566930885256.png">1566930885256.png</a> <span class="unimportant">(884.16 KB, 828x1169, <span class="postfilename">1526642188543.png</span>)</span></p><a href="/agg/src/1566930885256.png" target="_blank"><img class="post-image" src="/agg/thumb/1566930885256.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1541" ><p class="intro"><input type="checkbox" class="delete" name="delete_1541" id="delete_1541" /><label for="delete_1541"><span class="name">Anonymous</span> <time datetime="2019-08-27T18:35:02Z">08/27/19 (Tue) 18:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1541" onclick="return highlightReply(1541, event)" href="/agg/res/1541#1541">No.</a><a class="post_no" onclick="return citeReply(1541)" href="/agg/res/1541#q1541">1541</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1541">[Reply]</a></p><div class="body">test<br/><a href=http://what-ch.mooo.com/what/res/2300.html>http://what-ch.mooo.com/what/res/2300.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1540" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566922166722.png">1566922166722.png</a> <span class="unimportant">(373.36 KB, 1152x648, <span class="postfilename">1523435656262.png</span>)</span></p><a href="/agg/src/1566922166722.png" target="_blank"><img class="post-image" src="/agg/thumb/1566922166722.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1540" ><p class="intro"><input type="checkbox" class="delete" name="delete_1540" id="delete_1540" /><label for="delete_1540"><span class="name">Anonymous</span> <time datetime="2019-08-27T16:10:02Z">08/27/19 (Tue) 16:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1540" onclick="return highlightReply(1540, event)" href="/agg/res/1540#1540">No.</a><a class="post_no" onclick="return citeReply(1540)" href="/agg/res/1540#q1540">1540</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1540">[Reply]</a></p><div class="body">How do rangebans work? I really want to funpost but I want to know how to dodge a rangeban. Do they rangeban you for a lot of bans in a short period of time or for a lot of bans overall?<br/><a href=https://kissu.moe/qa/res/6146.html>https://kissu.moe/qa/res/6146.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1539" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566916199456.jpg">1566916199456.jpg</a> <span class="unimportant">(283.95 KB, 1240x1754, <span class="postfilename">17.jpg</span>)</span></p><a href="/agg/src/1566916199456.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566916199456.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1539" ><p class="intro"><input type="checkbox" class="delete" name="delete_1539" id="delete_1539" /><label for="delete_1539"><span class="name">Anonymous</span> <time datetime="2019-08-27T14:30:04Z">08/27/19 (Tue) 14:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1539" onclick="return highlightReply(1539, event)" href="/agg/res/1539#1539">No.</a><a class="post_no" onclick="return citeReply(1539)" href="/agg/res/1539#q1539">1539</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1539">[Reply]</a></p><div class="body">This is an elementary schooler.<br/><a href=https://kissu.moe/qa/res/6141.html>https://kissu.moe/qa/res/6141.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1538" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566904757284.png">1566904757284.png</a> <span class="unimportant">(14.01 KB, 666x495, <span class="postfilename">1555613882903.png</span>)</span></p><a href="/agg/src/1566904757284.png" target="_blank"><img class="post-image" src="/agg/thumb/1566904757284.png" style="width:255px;height:190px" alt="" /></a></div>    </div>    <div class="post op" id="op_1538" ><p class="intro"><input type="checkbox" class="delete" name="delete_1538" id="delete_1538" /><label for="delete_1538"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-27T11:20:03Z">08/27/19 (Tue) 11:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1538" onclick="return highlightReply(1538, event)" href="/agg/res/1538#1538">No.</a><a class="post_no" onclick="return citeReply(1538)" href="/agg/res/1538#q1538">1538</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1538">[Reply]</a></p><div class="body">Awoo~<br/><a href=https://kissu.moe/qa/res/6128.html>https://kissu.moe/qa/res/6128.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1537" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566893489890.png">1566893489890.png</a> <span class="unimportant">(857.8 KB, 1280x905, <span class="postfilename">73803122_p0.png</span>)</span></p><a href="/agg/src/1566893489890.png" target="_blank"><img class="post-image" src="/agg/thumb/1566893489890.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1537" ><p class="intro"><input type="checkbox" class="delete" name="delete_1537" id="delete_1537" /><label for="delete_1537"><span class="name">Anonymous</span> <time datetime="2019-08-27T08:15:08Z">08/27/19 (Tue) 08:15:08</time></label>&nbsp;<a class="post_no" id="post_no_1537" onclick="return highlightReply(1537, event)" href="/agg/res/1537#1537">No.</a><a class="post_no" onclick="return citeReply(1537)" href="/agg/res/1537#q1537">1537</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1537">[Reply]</a></p><div class="body">/qa/ is really dead and there&#39;s no going back...<br/><a href=https://kissu.moe/qa/res/6121.html>https://kissu.moe/qa/res/6121.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1536" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566884703996.jpg">1566884703996.jpg</a> <span class="unimportant">(121.34 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 07 [720p] [00_05_49.725]-01.jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1566884703996.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566884703996.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1536" ><p class="intro"><input type="checkbox" class="delete" name="delete_1536" id="delete_1536" /><label for="delete_1536"><span class="name">Anonymous</span> <time datetime="2019-08-27T05:50:02Z">08/27/19 (Tue) 05:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1536" onclick="return highlightReply(1536, event)" href="/agg/res/1536#1536">No.</a><a class="post_no" onclick="return citeReply(1536)" href="/agg/res/1536#q1536">1536</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1536">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6114.html>https://kissu.moe/qa/res/6114.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1535" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566877698766.png">1566877698766.png</a> <span class="unimportant">(459.54 KB, 1280x720, <span class="postfilename" title="[Mad le Zisell] Joshikousei no Mudazukai - 03 [720p].mkv-2019-08-18-19h51m03s620.png">[Mad le Zisell] Joshikouse….png</span>)</span></p><a href="/agg/src/1566877698766.png" target="_blank"><img class="post-image" src="/agg/thumb/1566877698766.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1535" ><p class="intro"><input type="checkbox" class="delete" name="delete_1535" id="delete_1535" /><label for="delete_1535"><span class="subject">Anime Thread</span> <span class="name">Hanayo Koizumi</span> <time datetime="2019-08-27T03:50:03Z">08/27/19 (Tue) 03:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1535" onclick="return highlightReply(1535, event)" href="/agg/res/1535#1535">No.</a><a class="post_no" onclick="return citeReply(1535)" href="/agg/res/1535#q1535">1535</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1535">[Reply]</a></p><div class="body"><a onclick="highlightReply(&#39;24293&#39;, event);" href="/jp/res/24293.html#24293">&gt;&gt;24293</a><br/>Old thread isn&#39;t bumping anymore.  Gonna&#39; be proactive and link the future charts this time!<br/><a href="https://anichart.net/Summer-2019" rel="nofollow" target="_blank">https://anichart.net/Summer-2019</a><br/><a href="https://anichart.net/Fall-2019" rel="nofollow" target="_blank">https://anichart.net/Fall-2019</a><br/><a href="https://anichart.net/Winter-2020" rel="nofollow" target="_blank">https://anichart.net/Winter-2020</a><br/><a href="https://anichart.net/Spring-2020" rel="nofollow" target="_blank">https://anichart.net/Spring-2020</a><br/><a href="https://anichart.net/Summer-2020" rel="nofollow" target="_blank">https://anichart.net/Summer-2020</a><br/><a href=https://kakashi-nenpo.com/jp/res/32894.html>https://kakashi-nenpo.com/jp/res/32894.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1534" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566869313415.jpg">1566869313415.jpg</a> <span class="unimportant">(157.27 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] HenSuki - 08 [720p].mkv_snapshot_17.19_[2019.08.26_19.27.18].jpg">[HorribleSubs] HenSuki - 0….jpg</span>)</span></p><a href="/agg/src/1566869313415.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566869313415.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1534" ><p class="intro"><input type="checkbox" class="delete" name="delete_1534" id="delete_1534" /><label for="delete_1534"><span class="name">Anonymous</span> <time datetime="2019-08-27T01:30:03Z">08/27/19 (Tue) 01:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1534" onclick="return highlightReply(1534, event)" href="/agg/res/1534#1534">No.</a><a class="post_no" onclick="return citeReply(1534)" href="/agg/res/1534#q1534">1534</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1534">[Reply]</a></p><div class="body">Imoutos really are the best.<br/><a href=https://kissu.moe/qa/res/6091.html>https://kissu.moe/qa/res/6091.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1533" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566864081882.jpg">1566864081882.jpg</a> <span class="unimportant">(162.55 KB, 1024x1152, <span class="postfilename">the qa girl.jpg</span>)</span></p><a href="/agg/src/1566864081882.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566864081882.png" style="width:227px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1533" ><p class="intro"><input type="checkbox" class="delete" name="delete_1533" id="delete_1533" /><label for="delete_1533"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-08-27T00:05:03Z">08/27/19 (Tue) 00:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1533" onclick="return highlightReply(1533, event)" href="/agg/res/1533#1533">No.</a><a class="post_no" onclick="return citeReply(1533)" href="/agg/res/1533#q1533">1533</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1533">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/6083.html>https://kissu.moe/qa/res/6083.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1532" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566862266778.png">1566862266778.png</a> <span class="unimportant">(253.86 KB, 650x670, <span class="postfilename">die wow die.png</span>)</span></p><a href="/agg/src/1566862266778.png" target="_blank"><img class="post-image" src="/agg/thumb/1566862266778.png" style="width:247px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1532" ><p class="intro"><input type="checkbox" class="delete" name="delete_1532" id="delete_1532" /><label for="delete_1532"><span class="name">Anonymous</span> <time datetime="2019-08-26T23:35:02Z">08/26/19 (Mon) 23:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1532" onclick="return highlightReply(1532, event)" href="/agg/res/1532#1532">No.</a><a class="post_no" onclick="return citeReply(1532)" href="/agg/res/1532#q1532">1532</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1532">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6071.html>https://kissu.moe/qa/res/6071.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1531" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566861536412.jpg">1566861536412.jpg</a> <span class="unimportant">(392.19 KB, 700x1000, <span class="postfilename" title="__yumi_senran_kagura_shinovi_versus_and_etc_drawn_by_tapisuke__9b8f630e9e243861d58d6c543fac41b5.jpg">__yumi_senran_kagura_shino….jpg</span>)</span></p><a href="/agg/src/1566861536412.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566861536412.png" style="width:179px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1531" ><p class="intro"><input type="checkbox" class="delete" name="delete_1531" id="delete_1531" /><label for="delete_1531"><span class="name">Anonymous</span> <time datetime="2019-08-26T23:20:04Z">08/26/19 (Mon) 23:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1531" onclick="return highlightReply(1531, event)" href="/agg/res/1531#1531">No.</a><a class="post_no" onclick="return citeReply(1531)" href="/agg/res/1531#q1531">1531</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1531">[Reply]</a></p><div class="body">Why do so many girls lack nipples?<br/><a href=https://kissu.moe/qa/res/6067.html>https://kissu.moe/qa/res/6067.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1530" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566858214630.png">1566858214630.png</a> <span class="unimportant">(115.57 KB, 423x131, <span class="postfilename">Wow_nPRFSrxbTt.png</span>)</span></p><a href="/agg/src/1566858214630.png" target="_blank"><img class="post-image" src="/agg/thumb/1566858214630.png" style="width:255px;height:79px" alt="" /></a></div>    </div>    <div class="post op" id="op_1530" ><p class="intro"><input type="checkbox" class="delete" name="delete_1530" id="delete_1530" /><label for="delete_1530"><span class="name">Anonymous</span> <time datetime="2019-08-26T22:25:03Z">08/26/19 (Mon) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1530" onclick="return highlightReply(1530, event)" href="/agg/res/1530#1530">No.</a><a class="post_no" onclick="return citeReply(1530)" href="/agg/res/1530#q1530">1530</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1530">[Reply]</a></p><div class="body">heh<br/><a href=https://kissu.moe/qa/res/6058.html>https://kissu.moe/qa/res/6058.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/30" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a class="selected">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/32" method="get"><input type="submit" value="Next" /></form>
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