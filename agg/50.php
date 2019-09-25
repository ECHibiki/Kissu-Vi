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
			<img class="board_image" src="/static/banners/banner-kissu-25.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea style="display:none" name="text">qmsSY[vpLH2P\1y@b,k_</textarea>
<input name="firstname" value="f#⚈/ ♬3}{Q&#68;t7&#92;+d5&#58;Y@⚒BvV&#84;-s&#101;pZ$&#126;]IU&#59;S^nh&#88;!9K[)m&#117;&lt;N&#40;W8&#9819;&gt;xro2" type="hidden">
<input type="hidden" name="board" value="agg">
<div style="display:none"><input type="text" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj"></div>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="message" value="wd1☟7&#110;%/e:{I⚲^B6⚪rg_)$z&#86;h&#93;\f@&#90;5&#76;&#62;23&#116;;⛊M&#9731;YXH&#45;QFR'y☘&#78;K&#42;x9T[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value="&#32;&#102;&#9851;⛭♃9&#47;qzwZk.@h|&#59;$L&#70;⛡mdv,&#69;&#82;83W%1YIM^iU☌&#53;&#9741;&#43;&#65;g&#9770;T&#61;`}⚑&#121;&#99;7J&#9966;&#80;#&#98;?⚤&#54;X&amp;{Dx&#32;\4N&#112;KHn:&#41;"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea style="display:none" name="search"  >b☵#Y{7`9J⚴@V^6_-</textarea  >
			
			
				
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
		<div class="thread" id="thread_1158" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564125929744.jpg">1564125929744.jpg</a> <span class="unimportant">(30.09 KB, 480x360, <span class="postfilename" title="13659195_10157195390320271_6909452833482996807_n.jpg">13659195_10157195390320271….jpg</span>)</span></p><a href="/agg/src/1564125929744.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564125929744.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1158" ><p class="intro"><input type="checkbox" class="delete" name="delete_1158" id="delete_1158" /><label for="delete_1158"><span class="name">Anonymous</span> <time datetime="2019-07-26T07:30:02Z">07/26/19 (Fri) 07:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1158" onclick="return highlightReply(1158, event)" href="/agg/res/1158#1158">No.</a><a class="post_no" onclick="return citeReply(1158)" href="/agg/res/1158#q1158">1158</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1158">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1392.html>http://what-ch.mooo.com/what/res/1392.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1157" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564125710097.jpg">1564125710097.jpg</a> <span class="unimportant">(81.81 KB, 952x960, <span class="postfilename">boomerdream.jpg</span>)</span></p><a href="/agg/src/1564125710097.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564125710097.png" style="width:238px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1157" ><p class="intro"><input type="checkbox" class="delete" name="delete_1157" id="delete_1157" /><label for="delete_1157"><span class="name">Anonymous</span> <time datetime="2019-07-26T07:25:02Z">07/26/19 (Fri) 07:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1157" onclick="return highlightReply(1157, event)" href="/agg/res/1157#1157">No.</a><a class="post_no" onclick="return citeReply(1157)" href="/agg/res/1157#q1157">1157</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1157">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1390.html>http://what-ch.mooo.com/what/res/1390.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1156" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564124143273.gif">1564124143273.gif</a> <span class="unimportant">(3.34 MB, 800x450, <span class="postfilename">gif 0527.gif</span>)</span></p><a href="/agg/src/1564124143273.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564124143273.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1156" ><p class="intro"><input type="checkbox" class="delete" name="delete_1156" id="delete_1156" /><label for="delete_1156"><span class="name">Anonymous</span> <time datetime="2019-07-26T07:00:04Z">07/26/19 (Fri) 07:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1156" onclick="return highlightReply(1156, event)" href="/agg/res/1156#1156">No.</a><a class="post_no" onclick="return citeReply(1156)" href="/agg/res/1156#q1156">1156</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1156">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1388.html>http://what-ch.mooo.com/what/res/1388.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1155" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564120820665.jpg">1564120820665.jpg</a> <span class="unimportant">(525.64 KB, 1280x1782, <span class="postfilename">7.jpg</span>)</span></p><a href="/agg/src/1564120820665.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564120820665.png" style="width:173px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1155" ><p class="intro"><input type="checkbox" class="delete" name="delete_1155" id="delete_1155" /><label for="delete_1155"><span class="name">Anonymous</span> <time datetime="2019-07-26T06:05:02Z">07/26/19 (Fri) 06:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1155" onclick="return highlightReply(1155, event)" href="/agg/res/1155#1155">No.</a><a class="post_no" onclick="return citeReply(1155)" href="/agg/res/1155#q1155">1155</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1155">[Reply]</a></p><div class="body">You let me violate you<br/>You let me desecrate you<br/>You let me penetrate you<br/>You let me complicate you<br/>Help me<br/>I broke apart my insides<br/>Help me<br/>I&#39;ve got no soul to sell<br/>Help me<br/>The only thing that works for me<br/>Help me get away from myself<br/>I want to fuck you like an animal<br/>I want to feel you from the inside<br/>I want to fuck you like an animal<br/>My whole existence is flawed<br/><span class="toolong">Post too long. Click <a href="/agg/res/1155#1155">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1154" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564118710840.jpg">1564118710840.jpg</a> <span class="unimportant">(58.05 KB, 251x246, <span class="postfilename">1564076626922.jpg</span>)</span></p><a href="/agg/src/1564118710840.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564118710840.png" style="width:240px;height:236px" alt="" /></a></div>    </div>    <div class="post op" id="op_1154" ><p class="intro"><input type="checkbox" class="delete" name="delete_1154" id="delete_1154" /><label for="delete_1154"><span class="name">Anonymous</span> <time datetime="2019-07-26T05:30:03Z">07/26/19 (Fri) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1154" onclick="return highlightReply(1154, event)" href="/agg/res/1154#1154">No.</a><a class="post_no" onclick="return citeReply(1154)" href="/agg/res/1154#q1154">1154</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1154">[Reply]</a></p><div class="body"><a href="https://qa.booru.org/" rel="nofollow" target="_blank">https://qa.booru.org/</a><br/><a href=http://what-ch.mooo.com/what/res/1382.html>http://what-ch.mooo.com/what/res/1382.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1153" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564116269271.png">1564116269271.png</a> <span class="unimportant">(41.55 KB, 692x507, <span class="postfilename">1564115349343.png</span>)</span></p><a href="/agg/src/1564116269271.png" target="_blank"><img class="post-image" src="/agg/thumb/1564116269271.png" style="width:255px;height:187px" alt="" /></a></div>    </div>    <div class="post op" id="op_1153" ><p class="intro"><input type="checkbox" class="delete" name="delete_1153" id="delete_1153" /><label for="delete_1153"><span class="subject">https://qa.booru.org/</span> <span class="name">Anonymous</span> <time datetime="2019-07-26T04:45:03Z">07/26/19 (Fri) 04:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1153" onclick="return highlightReply(1153, event)" href="/agg/res/1153#1153">No.</a><a class="post_no" onclick="return citeReply(1153)" href="/agg/res/1153#q1153">1153</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1153">[Reply]</a></p><div class="body">lol<br/><a href=https://kissu.moe/qa/res/4499.html>https://kissu.moe/qa/res/4499.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1152" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564091869637.png">1564091869637.png</a> <span class="unimportant">(922.03 KB, 910x788, <span class="postfilename">touhou pony 1.png</span>)</span></p><a href="/agg/src/1564091869637.png" target="_blank"><img class="post-image" src="/agg/thumb/1564091869637.png" style="width:255px;height:221px" alt="" /></a></div>    </div>    <div class="post op" id="op_1152" ><p class="intro"><input type="checkbox" class="delete" name="delete_1152" id="delete_1152" /><label for="delete_1152"><span class="name">Anonymous</span> <time datetime="2019-07-25T22:00:03Z">07/25/19 (Thu) 22:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1152" onclick="return highlightReply(1152, event)" href="/agg/res/1152#1152">No.</a><a class="post_no" onclick="return citeReply(1152)" href="/agg/res/1152#q1152">1152</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1152">[Reply]</a></p><div class="body">does /qa/ like 2hu?<br/><a href=https://kissu.moe/qa/res/4494.html>https://kissu.moe/qa/res/4494.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1151" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564084266584.png">1564084266584.png</a> <span class="unimportant">(774.92 KB, 1044x831, <span class="postfilename">56.png</span>)</span></p><a href="/agg/src/1564084266584.png" target="_blank"><img class="post-image" src="/agg/thumb/1564084266584.png" style="width:240px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_1151" ><p class="intro"><input type="checkbox" class="delete" name="delete_1151" id="delete_1151" /><label for="delete_1151"><span class="name">Anonymous</span> <time datetime="2019-07-25T19:55:02Z">07/25/19 (Thu) 19:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1151" onclick="return highlightReply(1151, event)" href="/agg/res/1151#1151">No.</a><a class="post_no" onclick="return citeReply(1151)" href="/agg/res/1151#q1151">1151</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1151">[Reply]</a></p><div class="body">Can you pee on this site for me thx <br/><a href="http://wakabb.net/" rel="nofollow" target="_blank">http://wakabb.net/</a><br/><a href=http://what-ch.mooo.com/what/res/1375.html>http://what-ch.mooo.com/what/res/1375.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1150" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564083872567.png">1564083872567.png</a> <span class="unimportant">(774.92 KB, 1044x831, <span class="postfilename">56.png</span>)</span></p><a href="/agg/src/1564083872567.png" target="_blank"><img class="post-image" src="/agg/thumb/1564083872567.png" style="width:255px;height:203px" alt="" /></a></div>    </div>    <div class="post op" id="op_1150" ><p class="intro"><input type="checkbox" class="delete" name="delete_1150" id="delete_1150" /><label for="delete_1150"><span class="name">Anonymous</span> <time datetime="2019-07-25T19:45:04Z">07/25/19 (Thu) 19:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1150" onclick="return highlightReply(1150, event)" href="/agg/res/1150#1150">No.</a><a class="post_no" onclick="return citeReply(1150)" href="/agg/res/1150#q1150">1150</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1150">[Reply]</a></p><div class="body">who of you guys did this? <br/><a href="https://boards.4channel.org/qa/thread/2869932" rel="nofollow" target="_blank">https://boards.4channel.org/qa/thread/2869932</a><br/><a href=https://kissu.moe/qa/res/4490.html>https://kissu.moe/qa/res/4490.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1149" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564082342817.gif">1564082342817.gif</a> <span class="unimportant">(1.63 MB, 704x676, <span class="postfilename">gif 0360.gif</span>)</span></p><a href="/agg/src/1564082342817.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564082342817.png" style="width:240px;height:231px" alt="" /></a></div>    </div>    <div class="post op" id="op_1149" ><p class="intro"><input type="checkbox" class="delete" name="delete_1149" id="delete_1149" /><label for="delete_1149"><span class="name">Anonymous</span> <time datetime="2019-07-25T19:20:03Z">07/25/19 (Thu) 19:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1149" onclick="return highlightReply(1149, event)" href="/agg/res/1149#1149">No.</a><a class="post_no" onclick="return citeReply(1149)" href="/agg/res/1149#q1149">1149</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1149">[Reply]</a></p><div class="body"><span class="quote">&gt;/what/</span><br/><a href=http://what-ch.mooo.com/what/res/1373.html>http://what-ch.mooo.com/what/res/1373.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1148" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564080827995.png">1564080827995.png</a> <span class="unimportant">(995.18 KB, 1470x1890, <span class="postfilename" title="6e4f06fa84f88c4e3a71695a785a87c247e30cfd.png">6e4f06fa84f88c4e3a71695a78….png</span>)</span></p><a href="/agg/src/1564080827995.png" target="_blank"><img class="post-image" src="/agg/thumb/1564080827995.png" style="width:187px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1148" ><p class="intro"><input type="checkbox" class="delete" name="delete_1148" id="delete_1148" /><label for="delete_1148"><span class="name">Anonymous</span> <time datetime="2019-07-25T18:55:02Z">07/25/19 (Thu) 18:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1148" onclick="return highlightReply(1148, event)" href="/agg/res/1148#1148">No.</a><a class="post_no" onclick="return citeReply(1148)" href="/agg/res/1148#q1148">1148</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1148">[Reply]</a></p><div class="body">You&#39;ve got a cummed face? OwO! That&#39;s a cummed face. Now let me see your cummed face!<br/><a href=http://what-ch.mooo.com/what/res/1371.html>http://what-ch.mooo.com/what/res/1371.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1147" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564073752160.jpg">1564073752160.jpg</a> <span class="unimportant">(119.38 KB, 730x1095, <span class="postfilename" title="lili_rochefort_cosplay_by_demonic_archangel_d7ix9sl-pre.jpg">lili_rochefort_cosplay_by_….jpg</span>)</span></p><a href="/agg/src/1564073752160.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564073752160.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1147" ><p class="intro"><input type="checkbox" class="delete" name="delete_1147" id="delete_1147" /><label for="delete_1147"><span class="name">Anonymous</span> <time datetime="2019-07-25T17:00:04Z">07/25/19 (Thu) 17:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1147" onclick="return highlightReply(1147, event)" href="/agg/res/1147#1147">No.</a><a class="post_no" onclick="return citeReply(1147)" href="/agg/res/1147#q1147">1147</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1147">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1366.html>http://what-ch.mooo.com/what/res/1366.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1146" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564073079330.jpg">1564073079330.jpg</a> <span class="unimportant">(62.91 KB, 768x768, <span class="postfilename">misc 1004.jpg</span>)</span></p><a href="/agg/src/1564073079330.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564073079330.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1146" ><p class="intro"><input type="checkbox" class="delete" name="delete_1146" id="delete_1146" /><label for="delete_1146"><span class="name">Anonymous</span> <time datetime="2019-07-25T16:45:02Z">07/25/19 (Thu) 16:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1146" onclick="return highlightReply(1146, event)" href="/agg/res/1146#1146">No.</a><a class="post_no" onclick="return citeReply(1146)" href="/agg/res/1146#q1146">1146</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1146">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=u7M8xxXevLY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=u7M8xxXevLY</a><br/><br/><a href="https://www.youtube.com/watch?v=M5fgRgAk9uk" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=M5fgRgAk9uk</a><br/><a href=http://what-ch.mooo.com/what/res/1365.html>http://what-ch.mooo.com/what/res/1365.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1145" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564070464985.png">1564070464985.png</a> <span class="unimportant">(3.45 MB, 2000x2500, <span class="postfilename" title="1911999__safe_artist-colon-flysouldragon_twilight+sparkle_alicorn_bells_cute_holiday_holly_holly+mistaken+for+mistletoe_horn_new+year_pony_snow_solo_tw.png">1911999__safe_artist-colon….png</span>)</span></p><a href="/agg/src/1564070464985.png" target="_blank"><img class="post-image" src="/agg/thumb/1564070464985.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1145" ><p class="intro"><input type="checkbox" class="delete" name="delete_1145" id="delete_1145" /><label for="delete_1145"><span class="name">Anonymous</span> <time datetime="2019-07-25T16:05:02Z">07/25/19 (Thu) 16:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1145" onclick="return highlightReply(1145, event)" href="/agg/res/1145#1145">No.</a><a class="post_no" onclick="return citeReply(1145)" href="/agg/res/1145#q1145">1145</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1145">[Reply]</a></p><div class="body">When did you realize Twilight Sparkle is best pony?<br/><a href=https://kissu.moe/qa/res/4486.html>https://kissu.moe/qa/res/4486.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1144" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564056063457.jpg">1564056063457.jpg</a> <span class="unimportant">(405.47 KB, 1000x1000, <span class="postfilename">1563827787808.jpg</span>)</span></p><a href="/agg/src/1564056063457.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564056063457.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1144" ><p class="intro"><input type="checkbox" class="delete" name="delete_1144" id="delete_1144" /><label for="delete_1144"><span class="name">Anonymous</span> <time datetime="2019-07-25T12:05:02Z">07/25/19 (Thu) 12:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1144" onclick="return highlightReply(1144, event)" href="/agg/res/1144#1144">No.</a><a class="post_no" onclick="return citeReply(1144)" href="/agg/res/1144#q1144">1144</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1144">[Reply]</a></p><div class="body">homura<br/><a href=http://what-ch.mooo.com/what/res/1359.html>http://what-ch.mooo.com/what/res/1359.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1143" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564028157249.jpg">1564028157249.jpg</a> <span class="unimportant">(20.91 KB, 365x257, <span class="postfilename" title="43447134_10156017134453031_7184051612581625856_n.jpg">43447134_10156017134453031….jpg</span>)</span></p><a href="/agg/src/1564028157249.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564028157249.png" style="width:240px;height:169px" alt="" /></a></div>    </div>    <div class="post op" id="op_1143" ><p class="intro"><input type="checkbox" class="delete" name="delete_1143" id="delete_1143" /><label for="delete_1143"><span class="name">Anonymous</span> <time datetime="2019-07-25T04:20:02Z">07/25/19 (Thu) 04:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1143" onclick="return highlightReply(1143, event)" href="/agg/res/1143#1143">No.</a><a class="post_no" onclick="return citeReply(1143)" href="/agg/res/1143#q1143">1143</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1143">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1355.html>http://what-ch.mooo.com/what/res/1355.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1142" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564025874631.png">1564025874631.png</a> <span class="unimportant">(446.21 KB, 640x480, <span class="postfilename">Iizuka_SA1_Reveal.png</span>)</span></p><a href="/agg/src/1564025874631.png" target="_blank"><img class="post-image" src="/agg/thumb/1564025874631.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1142" ><p class="intro"><input type="checkbox" class="delete" name="delete_1142" id="delete_1142" /><label for="delete_1142"><span class="name">Anonymous</span> <time datetime="2019-07-25T03:40:02Z">07/25/19 (Thu) 03:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1142" onclick="return highlightReply(1142, event)" href="/agg/res/1142#1142">No.</a><a class="post_no" onclick="return citeReply(1142)" href="/agg/res/1142#q1142">1142</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1142">[Reply]</a></p><div class="body"><a href="http://info.sonicretro.org/Sonic_Adventure/Development#Sonic_Team.27s_Travels" rel="nofollow" target="_blank">http://info.sonicretro.org/Sonic_Adventure/Development#Sonic_Team.27s_Travels</a><br/><a href=http://what-ch.mooo.com/what/res/1353.html>http://what-ch.mooo.com/what/res/1353.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1141" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564025137149.png">1564025137149.png</a> <span class="unimportant">(87.74 KB, 528x312, <span class="postfilename" title="screenshot_2017-11-11_14-18-49.png">screenshot_2017-11-11_14-1….png</span>)</span></p><a href="/agg/src/1564025137149.png" target="_blank"><img class="post-image" src="/agg/thumb/1564025137149.png" style="width:240px;height:142px" alt="" /></a></div>    </div>    <div class="post op" id="op_1141" ><p class="intro"><input type="checkbox" class="delete" name="delete_1141" id="delete_1141" /><label for="delete_1141"><span class="name">Anonymous</span> <time datetime="2019-07-25T03:30:03Z">07/25/19 (Thu) 03:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1141" onclick="return highlightReply(1141, event)" href="/agg/res/1141#1141">No.</a><a class="post_no" onclick="return citeReply(1141)" href="/agg/res/1141#q1141">1141</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1141">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1349.html>http://what-ch.mooo.com/what/res/1349.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1140" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564025093278.png">1564025093278.png</a> <span class="unimportant">(628.73 KB, 1033x720, <span class="postfilename">1531166571811.png</span>)</span></p><a href="/agg/src/1564025093278.png" target="_blank"><img class="post-image" src="/agg/thumb/1564025093278.png" style="width:240px;height:168px" alt="" /></a></div>    </div>    <div class="post op" id="op_1140" ><p class="intro"><input type="checkbox" class="delete" name="delete_1140" id="delete_1140" /><label for="delete_1140"><span class="name">Anonymous</span> <time datetime="2019-07-25T03:25:02Z">07/25/19 (Thu) 03:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1140" onclick="return highlightReply(1140, event)" href="/agg/res/1140#1140">No.</a><a class="post_no" onclick="return citeReply(1140)" href="/agg/res/1140#q1140">1140</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1140">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=1leInEAlbjY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=1leInEAlbjY</a><br/><a href=http://what-ch.mooo.com/what/res/1348.html>http://what-ch.mooo.com/what/res/1348.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1139" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564018718410.jpg">1564018718410.jpg</a> <span class="unimportant">(90.39 KB, 720x960, <span class="postfilename">ned.jpg</span>)</span></p><a href="/agg/src/1564018718410.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564018718410.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1139" ><p class="intro"><input type="checkbox" class="delete" name="delete_1139" id="delete_1139" /><label for="delete_1139"><span class="name">Anonymous</span> <time datetime="2019-07-25T01:40:02Z">07/25/19 (Thu) 01:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1139" onclick="return highlightReply(1139, event)" href="/agg/res/1139#1139">No.</a><a class="post_no" onclick="return citeReply(1139)" href="/agg/res/1139#q1139">1139</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1139">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1345.html>http://what-ch.mooo.com/what/res/1345.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/49" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a class="selected">50</a>] 		 Next
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