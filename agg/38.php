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
<input style="display:none" type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_">
<input type="hidden" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2">
<input type="hidden" name="board" value="agg">
<input value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<span style="display:none"><input type="text" name="q" value=" f♻&#9965;&#9795;9/&#113;zwZk&#46;@h|;&#36;L&#70;⛡mdv,ER83W%1Y&#73;M&#94;&#105;U☌5☍+A&#103;☪T=`}⚑yc&#55;J⛮P&#35;b&#63;⚤6X&amp;&#123;Dx &#92;4NpKH&#110;:&#41;"></span>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" name="search" value="b☵#Y{7`9J⚴@V^6_-">
			
			
				
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
		<div class="thread" id="thread_1409" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566367672286.webm">1566367672286.webm</a> <span class="unimportant">(139.31 KB, 640x360, <span class="postfilename">tejina_seethe.webm</span>)</span></p><a href="/player.php?v=/agg/src/1566367672286.webm&amp;t=tejina_seethe.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566367672286.jpg" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1409" ><p class="intro"><input type="checkbox" class="delete" name="delete_1409" id="delete_1409" /><label for="delete_1409"><span class="name">Anonymous</span> <time datetime="2019-08-21T06:10:03Z">08/21/19 (Wed) 06:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1409" onclick="return highlightReply(1409, event)" href="/agg/res/1409#1409">No.</a><a class="post_no" onclick="return citeReply(1409)" href="/agg/res/1409#q1409">1409</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1409">[Reply]</a></p><div class="body">SEEEEEEEEEEEEEEEEEEEETTTTTTTTHHHHHHHHHHHEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE<br/>this is what i think when i watch this<br/><a href=https://kissu.moe/qa/res/5285.html>https://kissu.moe/qa/res/5285.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1408" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566366841575.png">1566366841575.png</a> <span class="unimportant">(141.45 KB, 192x452, <span class="postfilename">thinkin bout flippin.png</span>)</span></p><a href="/agg/src/1566366841575.png" target="_blank"><img class="post-image" src="/agg/thumb/1566366841575.png" style="width:108px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1408" ><p class="intro"><input type="checkbox" class="delete" name="delete_1408" id="delete_1408" /><label for="delete_1408"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-21T05:55:02Z">08/21/19 (Wed) 05:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1408" onclick="return highlightReply(1408, event)" href="/agg/res/1408#1408">No.</a><a class="post_no" onclick="return citeReply(1408)" href="/agg/res/1408#q1408">1408</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1408">[Reply]</a></p><div class="body">why does australian hikage have a shirt that says mom?<br/>is she a mother?<br/><a href=https://kissu.moe/qa/res/5283.html>https://kissu.moe/qa/res/5283.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1407" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566362125596.jpg">1566362125596.jpg</a> <span class="unimportant">(574.17 KB, 1500x1143, <span class="postfilename" title="groping mya-nee&amp;#39;s delicous and nutritious belly.jpg">groping mya-nee&amp;#39;s deli….jpg</span>)</span></p><a href="/agg/src/1566362125596.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566362125596.png" style="width:255px;height:194px" alt="" /></a></div>    </div>    <div class="post op" id="op_1407" ><p class="intro"><input type="checkbox" class="delete" name="delete_1407" id="delete_1407" /><label for="delete_1407"><span class="subject">chubby</span> <span class="name">Anonymous</span> <time datetime="2019-08-21T04:40:03Z">08/21/19 (Wed) 04:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1407" onclick="return highlightReply(1407, event)" href="/agg/res/1407#1407">No.</a><a class="post_no" onclick="return citeReply(1407)" href="/agg/res/1407#q1407">1407</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1407">[Reply]</a></p><div class="body">I like chubby! Chubby is cute and sexy! I want to grope and lick and shake and squeeze and bounce and blow raspberry on a cute chubby belly!!!<br/><a href=https://kissu.moe/qa/res/5277.html>https://kissu.moe/qa/res/5277.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1406" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566360930742.png">1566360930742.png</a> <span class="unimportant">(3.7 MB, 2893x2400, <span class="postfilename">1566344543234.png</span>)</span></p><a href="/agg/src/1566360930742.png" target="_blank"><img class="post-image" src="/agg/thumb/1566360930742.png" style="width:255px;height:212px" alt="" /></a></div>    </div>    <div class="post op" id="op_1406" ><p class="intro"><input type="checkbox" class="delete" name="delete_1406" id="delete_1406" /><label for="delete_1406"><span class="name">Anonymous</span> <time datetime="2019-08-21T04:20:06Z">08/21/19 (Wed) 04:20:06</time></label>&nbsp;<a class="post_no" id="post_no_1406" onclick="return highlightReply(1406, event)" href="/agg/res/1406#1406">No.</a><a class="post_no" onclick="return citeReply(1406)" href="/agg/res/1406#q1406">1406</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1406">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5274.html>https://kissu.moe/qa/res/5274.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1405" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/2NKfrRnu94E" allowfullscreen></iframe>    <div class="post op" id="op_1405" ><p class="intro"><input type="checkbox" class="delete" name="delete_1405" id="delete_1405" /><label for="delete_1405"><span class="name">Anonymous</span> <time datetime="2019-08-21T01:55:02Z">08/21/19 (Wed) 01:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1405" onclick="return highlightReply(1405, event)" href="/agg/res/1405#1405">No.</a><a class="post_no" onclick="return citeReply(1405)" href="/agg/res/1405#q1405">1405</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1405">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5257.html>https://kissu.moe/qa/res/5257.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1404" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566345306500.jpg">1566345306500.jpg</a> <span class="unimportant">(133.57 KB, 845x720, <span class="postfilename">1566172728081.jpg</span>)</span></p><a href="/agg/src/1566345306500.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566345306500.png" style="width:255px;height:217px" alt="" /></a></div>    </div>    <div class="post op" id="op_1404" ><p class="intro"><input type="checkbox" class="delete" name="delete_1404" id="delete_1404" /><label for="delete_1404"><span class="name">Anonymous</span> <time datetime="2019-08-21T00:00:03Z">08/21/19 (Wed) 00:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1404" onclick="return highlightReply(1404, event)" href="/agg/res/1404#1404">No.</a><a class="post_no" onclick="return citeReply(1404)" href="/agg/res/1404#q1404">1404</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1404">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5244.html>https://kissu.moe/qa/res/5244.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1403" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566327424808.gif">1566327424808.gif</a> <span class="unimportant">(45.93 KB, 150x160, <span class="postfilename">1560479617755.gif</span>)</span></p><a href="/agg/src/1566327424808.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566327424808.png" style="width:150px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1403" ><p class="intro"><input type="checkbox" class="delete" name="delete_1403" id="delete_1403" /><label for="delete_1403"><span class="name">Anonymous</span> <time datetime="2019-08-20T19:00:04Z">08/20/19 (Tue) 19:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1403" onclick="return highlightReply(1403, event)" href="/agg/res/1403#1403">No.</a><a class="post_no" onclick="return citeReply(1403)" href="/agg/res/1403#q1403">1403</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1403">[Reply]</a></p><div class="body">Make me janny<br/><a href=https://kissu.moe/qa/res/5222.html>https://kissu.moe/qa/res/5222.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1402" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566324079840.png">1566324079840.png</a> <span class="unimportant">(481.89 KB, 1000x1000, <span class="postfilename">69866723_p0.png</span>)</span></p><a href="/agg/src/1566324079840.png" target="_blank"><img class="post-image" src="/agg/thumb/1566324079840.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1402" ><p class="intro"><input type="checkbox" class="delete" name="delete_1402" id="delete_1402" /><label for="delete_1402"><span class="name">Anonymous</span> <time datetime="2019-08-20T18:05:03Z">08/20/19 (Tue) 18:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1402" onclick="return highlightReply(1402, event)" href="/agg/res/1402#1402">No.</a><a class="post_no" onclick="return citeReply(1402)" href="/agg/res/1402#q1402">1402</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1402">[Reply]</a></p><div class="body">You can&#39;t just neglect cleaning yourself because you never go outside /qa/!<br/><a href=https://kissu.moe/qa/res/5220.html>https://kissu.moe/qa/res/5220.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1401" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566322304839.jpg">1566322304839.jpg</a> <span class="unimportant">(793.2 KB, 1920x1080, <span class="postfilename" title="[Tsundere] Fate Kaleid Liner Prisma Illya - 07 [BDRip h264 1920x1080 FLAC][A8D41B02].mkv_snapshot_11.56_[2016.10.04_16.56.00].jpg">[Tsundere] Fate Kaleid Lin….jpg</span>)</span></p><a href="/agg/src/1566322304839.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566322304839.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1401" ><p class="intro"><input type="checkbox" class="delete" name="delete_1401" id="delete_1401" /><label for="delete_1401"><span class="name">Anonymous</span> <time datetime="2019-08-20T17:35:03Z">08/20/19 (Tue) 17:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1401" onclick="return highlightReply(1401, event)" href="/agg/res/1401#1401">No.</a><a class="post_no" onclick="return citeReply(1401)" href="/agg/res/1401#q1401">1401</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1401">[Reply]</a></p><div class="body">Illya would like for you to leave<br/><a href=https://kissu.moe/qa/res/5218.html>https://kissu.moe/qa/res/5218.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1400" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566318621523.png">1566318621523.png</a> <span class="unimportant">(156.78 KB, 600x848, <span class="postfilename">1498516790562.png</span>)</span></p><a href="/agg/src/1566318621523.png" target="_blank"><img class="post-image" src="/agg/thumb/1566318621523.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1400" ><p class="intro"><input type="checkbox" class="delete" name="delete_1400" id="delete_1400" /><label for="delete_1400"><span class="name">Anonymous</span> <time datetime="2019-08-20T16:35:04Z">08/20/19 (Tue) 16:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1400" onclick="return highlightReply(1400, event)" href="/agg/res/1400#1400">No.</a><a class="post_no" onclick="return citeReply(1400)" href="/agg/res/1400#q1400">1400</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1400">[Reply]</a></p><div class="body">Was the listing the worst thing to happen to /qa/? I don&#39;t think anything contributed more to the decline of the board than it becoming discoverable and advertised to all the rest of 4chan. Sure, the increased posting difficulty sucked, but I don&#39;t think the board would be in this state had it not slowly succumbed to the shit that infests most other boards.<br/><a href=https://kissu.moe/qa/res/5213.html>https://kissu.moe/qa/res/5213.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1399" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566308218926.jpg">1566308218926.jpg</a> <span class="unimportant">(125.3 KB, 1280x720, <span class="postfilename">1566276299707.jpg</span>)</span></p><a href="/agg/src/1566308218926.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566308218926.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1399" ><p class="intro"><input type="checkbox" class="delete" name="delete_1399" id="delete_1399" /><label for="delete_1399"><span class="name">Anonymous</span> <time datetime="2019-08-20T13:40:04Z">08/20/19 (Tue) 13:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1399" onclick="return highlightReply(1399, event)" href="/agg/res/1399#1399">No.</a><a class="post_no" onclick="return citeReply(1399)" href="/agg/res/1399#q1399">1399</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1399">[Reply]</a></p><div class="body">Is she becoming a janny next episode?<br/><a href=https://kissu.moe/qa/res/5207.html>https://kissu.moe/qa/res/5207.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1398" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566307289482.jpg">1566307289482.jpg</a> <span class="unimportant">(803.89 KB, 733x1025, <span class="postfilename">64320742_p0.jpg</span>)</span></p><a href="/agg/src/1566307289482.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566307289482.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1398" ><p class="intro"><input type="checkbox" class="delete" name="delete_1398" id="delete_1398" /><label for="delete_1398"><span class="name">Anonymous</span> <time datetime="2019-08-20T13:25:04Z">08/20/19 (Tue) 13:25:04</time></label>&nbsp;<a class="post_no" id="post_no_1398" onclick="return highlightReply(1398, event)" href="/agg/res/1398#1398">No.</a><a class="post_no" onclick="return citeReply(1398)" href="/agg/res/1398#q1398">1398</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1398">[Reply]</a></p><div class="body">this is going to be the best thread in the history of imageboards<br/>make a post that is worthy of it<br/><a href=https://kissu.moe/qa/res/5204.html>https://kissu.moe/qa/res/5204.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1397" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566298432899.gif">1566298432899.gif</a> <span class="unimportant">(847.42 KB, 500x281, <span class="postfilename">1566281079749.gif</span>)</span></p><a href="/agg/src/1566298432899.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566298432899.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1397" ><p class="intro"><input type="checkbox" class="delete" name="delete_1397" id="delete_1397" /><label for="delete_1397"><span class="name">Anonymous</span> <time datetime="2019-08-20T10:55:02Z">08/20/19 (Tue) 10:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1397" onclick="return highlightReply(1397, event)" href="/agg/res/1397#1397">No.</a><a class="post_no" onclick="return citeReply(1397)" href="/agg/res/1397#q1397">1397</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1397">[Reply]</a></p><div class="body">thinkin about whatmin<br/><a href=http://what-ch.mooo.com/what/res/2115.html>http://what-ch.mooo.com/what/res/2115.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1396" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/xpN7s65auUU" allowfullscreen></iframe>    <div class="post op" id="op_1396" ><p class="intro"><input type="checkbox" class="delete" name="delete_1396" id="delete_1396" /><label for="delete_1396"><span class="name">Anonymous</span> <time datetime="2019-08-20T09:10:08Z">08/20/19 (Tue) 09:10:08</time></label>&nbsp;<a class="post_no" id="post_no_1396" onclick="return highlightReply(1396, event)" href="/agg/res/1396#1396">No.</a><a class="post_no" onclick="return citeReply(1396)" href="/agg/res/1396#q1396">1396</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1396">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5200.html>https://kissu.moe/qa/res/5200.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1395" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566285113047.png">1566285113047.png</a> <span class="unimportant">(136.36 KB, 313x354, <span class="postfilename">thinkin bout stems.png</span>)</span></p><a href="/agg/src/1566285113047.png" target="_blank"><img class="post-image" src="/agg/thumb/1566285113047.png" style="width:225px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1395" ><p class="intro"><input type="checkbox" class="delete" name="delete_1395" id="delete_1395" /><label for="delete_1395"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-20T07:15:03Z">08/20/19 (Tue) 07:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1395" onclick="return highlightReply(1395, event)" href="/agg/res/1395#1395">No.</a><a class="post_no" onclick="return citeReply(1395)" href="/agg/res/1395#q1395">1395</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1395">[Reply]</a></p><div class="body">step 1: get a cup of liquid<br/>step 2: start peeing<br/>step 3: start drinking the liquid<br/>step 4: pee forever!!<br/>your welcome<br/><a href=https://kissu.moe/qa/res/5194.html>https://kissu.moe/qa/res/5194.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1394" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566265778517.png">1566265778517.png</a> <span class="unimportant">(136.78 KB, 540x389, <span class="postfilename">weensperm for sale.png</span>)</span></p><a href="/agg/src/1566265778517.png" target="_blank"><img class="post-image" src="/agg/thumb/1566265778517.png" style="width:255px;height:184px" alt="" /></a></div>    </div>    <div class="post op" id="op_1394" ><p class="intro"><input type="checkbox" class="delete" name="delete_1394" id="delete_1394" /><label for="delete_1394"><span class="name">Anonymous</span> <time datetime="2019-08-20T01:50:05Z">08/20/19 (Tue) 01:50:05</time></label>&nbsp;<a class="post_no" id="post_no_1394" onclick="return highlightReply(1394, event)" href="/agg/res/1394#1394">No.</a><a class="post_no" onclick="return citeReply(1394)" href="/agg/res/1394#q1394">1394</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1394">[Reply]</a></p><div class="body">Open for business in a new location!<br/>Would you like to <span class="glowpink">buy</span> or <span class="glowblue">sell</span>?<br/><a href=https://kissu.moe/qa/res/5171.html>https://kissu.moe/qa/res/5171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1393" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566260272431.jpg">1566260272431.jpg</a> <span class="unimportant">(299.83 KB, 629x1000, <span class="postfilename">1566006681315.jpg</span>)</span></p><a href="/agg/src/1566260272431.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566260272431.png" style="width:160px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1393" ><p class="intro"><input type="checkbox" class="delete" name="delete_1393" id="delete_1393" /><label for="delete_1393"><span class="name">Anonymous</span> <time datetime="2019-08-20T00:20:04Z">08/20/19 (Tue) 00:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1393" onclick="return highlightReply(1393, event)" href="/agg/res/1393#1393">No.</a><a class="post_no" onclick="return citeReply(1393)" href="/agg/res/1393#q1393">1393</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1393">[Reply]</a></p><div class="body">Tight hot slippery cunny<br/><a href=https://kissu.moe/qa/res/5162.html>https://kissu.moe/qa/res/5162.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1392" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566260110678.jpg">1566260110678.jpg</a> <span class="unimportant">(270.83 KB, 707x1000, <span class="postfilename">76319968_p0.jpg</span>)</span></p><a href="/agg/src/1566260110678.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566260110678.png" style="width:181px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1392" ><p class="intro"><input type="checkbox" class="delete" name="delete_1392" id="delete_1392" /><label for="delete_1392"><span class="name">Anonymous</span> <time datetime="2019-08-20T00:20:04Z">08/20/19 (Tue) 00:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1392" onclick="return highlightReply(1392, event)" href="/agg/res/1392#1392">No.</a><a class="post_no" onclick="return citeReply(1392)" href="/agg/res/1392#q1392">1392</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1392">[Reply]</a></p><div class="body">Yumekawa Yui<br/><a href=https://kissu.moe/qa/res/5161.html>https://kissu.moe/qa/res/5161.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1391" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566255245085.png">1566255245085.png</a> <span class="unimportant">(265 KB, 1280x720, <span class="postfilename">richardtwo.png</span>)</span></p><a href="/agg/src/1566255245085.png" target="_blank"><img class="post-image" src="/agg/thumb/1566255245085.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1391" ><p class="intro"><input type="checkbox" class="delete" name="delete_1391" id="delete_1391" /><label for="delete_1391"><span class="subject">I&amp;#39;d just like to interject for a moment.</span> <span class="name">Anonymous</span> <time datetime="2019-08-19T22:55:03Z">08/19/19 (Mon) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1391" onclick="return highlightReply(1391, event)" href="/agg/res/1391#1391">No.</a><a class="post_no" onclick="return citeReply(1391)" href="/agg/res/1391#q1391">1391</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1391">[Reply]</a></p><div class="body">What you&#39;re referring to as Zero Two, is in fact, GNU/Zero Two, or as I&#39;ve recently taken to calling it, GNU plus Zero Two. Zero Two is not an operating system unto itself, but rather another free component of a fully functioning GNU system made useful by the GNU corelibs, shell utilities and vital system components comprising a full OS as defined by POSIX.<br/><br/>Many computer users run a modified version of the GNU system every day, without realizing it. Through a peculiar turn of events, the version of GNU which is widely used today is often called "Zero Two", and many of its users are not aware that it is basically the GNU system, developed by the GNU Project.<br/><br/>There really is a Zero Two, and these people are using it, but it is just a part of the system they use. Zero Two is the kernel: the program in the system that allocates the machine&#39;s resources to the other programs that you run. The kernel is an essential part of an operating system, but useless by itself; it can only function in the context of a complete operating system. Zero Two is normally used in combination with the GNU operating system: the whole system is basically GNU with Zero Two added, or GNU/Zero Two. All the so-called "Zero Two" distributions are really distributions of GNU/Zero Two.<br/><a href=https://kissu.moe/qa/res/5145.html>https://kissu.moe/qa/res/5145.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1390" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566254717423.jpg">1566254717423.jpg</a> <span class="unimportant">(72.4 KB, 750x750, <span class="postfilename">CornFlakesRecipe11.jpg</span>)</span></p><a href="/agg/src/1566254717423.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566254717423.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1390" ><p class="intro"><input type="checkbox" class="delete" name="delete_1390" id="delete_1390" /><label for="delete_1390"><span class="name">Anonymous</span> <time datetime="2019-08-19T22:50:03Z">08/19/19 (Mon) 22:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1390" onclick="return highlightReply(1390, event)" href="/agg/res/1390#1390">No.</a><a class="post_no" onclick="return citeReply(1390)" href="/agg/res/1390#q1390">1390</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1390">[Reply]</a></p><div class="body">Have you ever tried making your own cereal?<br/><a href=https://kissu.moe/qa/res/5141.html>https://kissu.moe/qa/res/5141.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/37" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a class="selected">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/39" method="get"><input type="submit" value="Next" /></form>
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