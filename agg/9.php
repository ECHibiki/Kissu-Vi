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
			<img class="board_image" src="/static/banners/banner-kissu-21.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span style="display:none" ><input type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_" ></span >
<input style="display:none" type="text" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" >
<input type="hidden" name="board" value="agg">
<input value="&#47;[L&#72; &#74;&#105;:&#96;&#33;;C&#43;6\&#111;&#84;&lt;8ObI|&#63;X]&#100;.&#50;☨{t&#87;&#53; c⚱&#49;&#66;&#61;k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></div>
			
			
				
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
		<div class="thread" id="thread_1990" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569104937585.jpg">1569104937585.jpg</a> <span class="unimportant">(319.14 KB, 1680x1050, <span class="postfilename" title="fda3154c864c59938a5e63a6407cd970.jpg">fda3154c864c59938a5e63a640….jpg</span>)</span></p><a href="/agg/src/1569104937585.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569104937585.png" style="width:255px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1990" ><p class="intro"><input type="checkbox" class="delete" name="delete_1990" id="delete_1990" /><label for="delete_1990"><span class="name">Anonymous</span> <time datetime="2019-09-21T22:30:05Z">09/21/19 (Sat) 22:30:05</time></label>&nbsp;<a class="post_no" id="post_no_1990" onclick="return highlightReply(1990, event)" href="/agg/res/1990#1990">No.</a><a class="post_no" onclick="return citeReply(1990)" href="/agg/res/1990#q1990">1990</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1990">[Reply]</a></p><div class="body">Whatever happened to having an actual badass as an anime&#39;s main character instead of some wimp just playing the role of one?<br/><a href=https://kissu.moe/qa/res/9947.html>https://kissu.moe/qa/res/9947.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1989" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569104061636.jpg">1569104061636.jpg</a> <span class="unimportant">(185.11 KB, 1080x1333, <span class="postfilename">1569097293112.jpg</span>)</span></p><a href="/agg/src/1569104061636.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569104061636.jpg" style="width:194px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1989" ><p class="intro"><input type="checkbox" class="delete" name="delete_1989" id="delete_1989" /><label for="delete_1989"><span class="name">/QA/ Poster</span> <time datetime="2019-09-21T22:15:03Z">09/21/19 (Sat) 22:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1989" onclick="return highlightReply(1989, event)" href="/agg/res/1989#1989">No.</a><a class="post_no" onclick="return citeReply(1989)" href="/agg/res/1989#q1989">1989</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1989">[Reply]</a></p><div class="body">He did it again<br/><a href=https://gnfos.com/jp/res/369255.html>https://gnfos.com/jp/res/369255.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1988" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569102901163.jpg">1569102901163.jpg</a> <span class="unimportant">(22.72 KB, 500x282, <span class="postfilename" title="cd2cc65ff07f62533821f952e3542bd8.jpg">cd2cc65ff07f62533821f952e3….jpg</span>)</span></p><a href="/agg/src/1569102901163.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569102901163.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1988" ><p class="intro"><input type="checkbox" class="delete" name="delete_1988" id="delete_1988" /><label for="delete_1988"><span class="subject">Do you like cute anime and videogame discord server?</span> <span class="name">Anonymous</span> <time datetime="2019-09-21T21:55:05Z">09/21/19 (Sat) 21:55:05</time></label>&nbsp;<a class="post_no" id="post_no_1988" onclick="return highlightReply(1988, event)" href="/agg/res/1988#1988">No.</a><a class="post_no" onclick="return citeReply(1988)" href="/agg/res/1988#q1988">1988</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1988">[Reply]</a></p><div class="body">Well? You can join this one if you are looking for a comfy anime and vidya community to interact with. We don&#39;t plan on getting big, just somewhat active with several active members. It&#39;s pretty comfy, honestly. <br/><br/><a href="https://discord.gg/qxKN2x" rel="nofollow" target="_blank">https://discord.gg/qxKN2x</a><br/><a href=https://kissu.moe/qa/res/9939.html>https://kissu.moe/qa/res/9939.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1987" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569100585381.png">1569100585381.png</a> <span class="unimportant">(1.84 MB, 1750x1950, <span class="postfilename" title="BB4AABCF-1645-4D94-AF85-E33974180D5D.png">BB4AABCF-1645-4D94-AF85-E3….png</span>)</span></p><a href="/agg/src/1569100585381.png" target="_blank"><img class="post-image" src="/agg/thumb/1569100585381.png" style="width:215px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1987" ><p class="intro"><input type="checkbox" class="delete" name="delete_1987" id="delete_1987" /><label for="delete_1987"><span class="name">Idiot</span> <time datetime="2019-09-21T21:20:03Z">09/21/19 (Sat) 21:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1987" onclick="return highlightReply(1987, event)" href="/agg/res/1987#1987">No.</a><a class="post_no" onclick="return citeReply(1987)" href="/agg/res/1987#q1987">1987</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1987">[Reply]</a></p><div class="body">Should I kill myself why or why not<br/><a href=https://gnfos.com/jp/res/369252.html>https://gnfos.com/jp/res/369252.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1986" data-board="agg"><div class="video-container" data-video="JaTYFs380rI"><a href="https://youtu.be/JaTYFs380rI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/JaTYFs380rI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1986" ><p class="intro"><input type="checkbox" class="delete" name="delete_1986" id="delete_1986" /><label for="delete_1986"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T21:05:03Z">09/21/19 (Sat) 21:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1986" onclick="return highlightReply(1986, event)" href="/agg/res/1986#1986">No.</a><a class="post_no" onclick="return citeReply(1986)" href="/agg/res/1986#q1986">1986</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1986">[Reply]</a></p><div class="body">gn server<br/><a href=https://gnfos.com/jp/res/369250.html>https://gnfos.com/jp/res/369250.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1985" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569099073764.jpeg">1569099073764.jpeg</a> <span class="unimportant">(359.49 KB, 1280x1807, <span class="postfilename" title="4F540121-173C-412D-8FBE-BE343CEFE0B0.jpeg">4F540121-173C-412D-8FBE-B….jpeg</span>)</span></p><a href="/agg/src/1569099073764.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569099073764.jpeg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1985" ><p class="intro"><input type="checkbox" class="delete" name="delete_1985" id="delete_1985" /><label for="delete_1985"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T20:55:03Z">09/21/19 (Sat) 20:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1985" onclick="return highlightReply(1985, event)" href="/agg/res/1985#1985">No.</a><a class="post_no" onclick="return citeReply(1985)" href="/agg/res/1985#q1985">1985</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1985">[Reply]</a></p><div class="body"><a href="https://www.foundmyfitness.com/episodes/exercise-depression" rel="nofollow" target="_blank">https://www.foundmyfitness.com/episodes/exercise-depression</a><br/><br/>Sigh with me Bros I&#39;m about to go to the gym<br/><a href=https://gnfos.com/jp/res/369248.html>https://gnfos.com/jp/res/369248.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1984" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569098230518.png">1569098230518.png</a> <span class="unimportant">(223.67 KB, 399x485, <span class="postfilename" title="D9D39D4A-CDA4-4ADB-B874-E9FC0B6802EC.png">D9D39D4A-CDA4-4ADB-B874-E9….png</span>)</span></p><a href="/agg/src/1569098230518.png" target="_blank"><img class="post-image" src="/agg/thumb/1569098230518.png" style="width:197px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1984" ><p class="intro"><input type="checkbox" class="delete" name="delete_1984" id="delete_1984" /><label for="delete_1984"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T20:40:03Z">09/21/19 (Sat) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1984" onclick="return highlightReply(1984, event)" href="/agg/res/1984#1984">No.</a><a class="post_no" onclick="return citeReply(1984)" href="/agg/res/1984#q1984">1984</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1984">[Reply]</a></p><div class="body">People that suffered just a single head injury were found to have tau tangles in their brain. Tau tangles are associated with Alzheimer&#39;s disease, dementia, and are also linked to progressive nerve damage<br/><br/><br/>Jesus Christ don&#39;t ever get in a fight<br/><a href=https://gnfos.com/jp/res/369247.html>https://gnfos.com/jp/res/369247.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1983" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569097916169.png">1569097916169.png</a> <span class="unimportant">(1.19 MB, 885x1559, <span class="postfilename">spacechan1.png</span>)</span></p><a href="/agg/src/1569097916169.png" target="_blank"><img class="post-image" src="/agg/thumb/1569097916169.png" style="width:136px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1983" ><p class="intro"><input type="checkbox" class="delete" name="delete_1983" id="delete_1983" /><label for="delete_1983"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-21T20:35:03Z">09/21/19 (Sat) 20:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1983" onclick="return highlightReply(1983, event)" href="/agg/res/1983#1983">No.</a><a class="post_no" onclick="return citeReply(1983)" href="/agg/res/1983#q1983">1983</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1983">[Reply]</a></p><div class="body"><span class="heading">Come funpost at <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://gnfos.com/jp/res/369245.html>https://gnfos.com/jp/res/369245.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1982" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569096390197.jpg">1569096390197.jpg</a> <span class="unimportant">(79.18 KB, 616x353, <span class="postfilename">aaa.jpg</span>)</span></p><a href="/agg/src/1569096390197.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569096390197.jpg" style="width:419px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1982" ><p class="intro"><input type="checkbox" class="delete" name="delete_1982" id="delete_1982" /><label for="delete_1982"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T20:10:03Z">09/21/19 (Sat) 20:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1982" onclick="return highlightReply(1982, event)" href="/agg/res/1982#1982">No.</a><a class="post_no" onclick="return citeReply(1982)" href="/agg/res/1982#q1982">1982</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1982">[Reply]</a></p><div class="body">Does anyone wants to play world at war zombies or multiplayer?<br/><a href=https://gnfos.com/jp/res/369240.html>https://gnfos.com/jp/res/369240.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1981" data-board="agg"><div class="video-container" data-video="UTpCBgrqmlg"><a href="https://youtu.be/UTpCBgrqmlg" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/UTpCBgrqmlg/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1981" ><p class="intro"><input type="checkbox" class="delete" name="delete_1981" id="delete_1981" /><label for="delete_1981"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T19:55:03Z">09/21/19 (Sat) 19:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1981" onclick="return highlightReply(1981, event)" href="/agg/res/1981#1981">No.</a><a class="post_no" onclick="return citeReply(1981)" href="/agg/res/1981#q1981">1981</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1981">[Reply]</a></p><div class="body">Feel with me celbros<br/><a href=https://gnfos.com/jp/res/369237.html>https://gnfos.com/jp/res/369237.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1980" data-board="agg"><div class="video-container" data-video="MV_3Dpw-BRY"><a href="https://youtu.be/MV_3Dpw-BRY" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/MV_3Dpw-BRY/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1980" ><p class="intro"><input type="checkbox" class="delete" name="delete_1980" id="delete_1980" /><label for="delete_1980"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T19:50:03Z">09/21/19 (Sat) 19:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1980" onclick="return highlightReply(1980, event)" href="/agg/res/1980#1980">No.</a><a class="post_no" onclick="return citeReply(1980)" href="/agg/res/1980#q1980">1980</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1980">[Reply]</a></p><div class="body">post GN themes<br/><a href=https://gnfos.com/jp/res/369232.html>https://gnfos.com/jp/res/369232.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1979" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569095166360.jpeg">1569095166360.jpeg</a> <span class="unimportant">(375.15 KB, 1120x924, <span class="postfilename" title="26B08708-E74C-4557-A90B-93A7D04292F9.jpeg">26B08708-E74C-4557-A90B-9….jpeg</span>)</span></p><a href="/agg/src/1569095166360.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569095166360.jpeg" style="width:290px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1979" ><p class="intro"><input type="checkbox" class="delete" name="delete_1979" id="delete_1979" /><label for="delete_1979"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T19:50:03Z">09/21/19 (Sat) 19:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1979" onclick="return highlightReply(1979, event)" href="/agg/res/1979#1979">No.</a><a class="post_no" onclick="return citeReply(1979)" href="/agg/res/1979#q1979">1979</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1979">[Reply]</a></p><div class="body">Why do zoomers believe we can stop climate change and the way to do so is through more power and money to our overlords<br/><a href=https://gnfos.com/jp/res/369229.html>https://gnfos.com/jp/res/369229.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1978" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569094169262.jpeg">1569094169262.jpeg</a> <span class="unimportant">(334.44 KB, 750x594, <span class="postfilename" title="915429B6-A5B3-4A04-9DA4-5C11EDE0AF13.jpeg">915429B6-A5B3-4A04-9DA4-5….jpeg</span>)</span></p><a href="/agg/src/1569094169262.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569094169262.jpeg" style="width:303px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1978" ><p class="intro"><input type="checkbox" class="delete" name="delete_1978" id="delete_1978" /><label for="delete_1978"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T19:30:03Z">09/21/19 (Sat) 19:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1978" onclick="return highlightReply(1978, event)" href="/agg/res/1978#1978">No.</a><a class="post_no" onclick="return citeReply(1978)" href="/agg/res/1978#q1978">1978</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1978">[Reply]</a></p><div class="body"><a href="https://www.instagram.com/p/B2qQuFRn-k6" rel="nofollow" target="_blank">https://www.instagram.com/p/B2qQuFRn-k6</a><br/><a href=https://gnfos.com/jp/res/369219.html>https://gnfos.com/jp/res/369219.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1977" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569092923296.jpeg">1569092923296.jpeg</a> <span class="unimportant">(324.91 KB, 750x595, <span class="postfilename" title="2C46C37A-AF3C-4D08-A285-ADA0209B3A88.jpeg">2C46C37A-AF3C-4D08-A285-A….jpeg</span>)</span></p><a href="/agg/src/1569092923296.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569092923296.jpeg" style="width:302px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1977" ><p class="intro"><input type="checkbox" class="delete" name="delete_1977" id="delete_1977" /><label for="delete_1977"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T19:10:03Z">09/21/19 (Sat) 19:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1977" onclick="return highlightReply(1977, event)" href="/agg/res/1977#1977">No.</a><a class="post_no" onclick="return citeReply(1977)" href="/agg/res/1977#q1977">1977</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1977">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369206.html>https://gnfos.com/jp/res/369206.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1976" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091950924.png">1569091950924.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="DD2E3B0C-8A45-4D71-BA73-923384AD1379.png">DD2E3B0C-8A45-4D71-BA73-92….png</span>)</span></p><a href="/agg/src/1569091950924.png" target="_blank"><img class="post-image" src="/agg/thumb/1569091950924.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1976" ><p class="intro"><input type="checkbox" class="delete" name="delete_1976" id="delete_1976" /><label for="delete_1976"><span class="name">Tada Banri</span> <time datetime="2019-09-21T18:55:03Z">09/21/19 (Sat) 18:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1976" onclick="return highlightReply(1976, event)" href="/agg/res/1976#1976">No.</a><a class="post_no" onclick="return citeReply(1976)" href="/agg/res/1976#q1976">1976</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1976">[Reply]</a></p><div class="body">HEY PANINI<br/><a href=https://gnfos.com/jp/res/369201.html>https://gnfos.com/jp/res/369201.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1975" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091668368.png">1569091668368.png</a> <span class="unimportant">(669.27 KB, 637x900, <span class="postfilename">1569090713246.png</span>)</span></p><a href="/agg/src/1569091668368.png" target="_blank"><img class="post-image" src="/agg/thumb/1569091668368.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1975" ><p class="intro"><input type="checkbox" class="delete" name="delete_1975" id="delete_1975" /><label for="delete_1975"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T18:50:04Z">09/21/19 (Sat) 18:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1975" onclick="return highlightReply(1975, event)" href="/agg/res/1975#1975">No.</a><a class="post_no" onclick="return citeReply(1975)" href="/agg/res/1975#q1975">1975</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1975">[Reply]</a></p><div class="body">Hey boys, want some tendies?<br/><a href=https://gnfos.com/jp/res/369199.html>https://gnfos.com/jp/res/369199.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1974" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091675287.jpg">1569091675287.jpg</a> <span class="unimportant">(24.83 KB, 591x336, <span class="postfilename">1echzp.jpg</span>)</span></p><a href="/agg/src/1569091675287.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569091675287.png" style="width:255px;height:145px" alt="" /></a></div>    </div>    <div class="post op" id="op_1974" ><p class="intro"><input type="checkbox" class="delete" name="delete_1974" id="delete_1974" /><label for="delete_1974"><span class="name">Anonymous</span> <time datetime="2019-09-21T18:50:04Z">09/21/19 (Sat) 18:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1974" onclick="return highlightReply(1974, event)" href="/agg/res/1974#1974">No.</a><a class="post_no" onclick="return citeReply(1974)" href="/agg/res/1974#q1974">1974</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1974">[Reply]</a></p><div class="body">What&#39;s the point of this website?<br/><a href=https://kissu.moe/qa/res/9926.html>https://kissu.moe/qa/res/9926.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1973" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091416076.webm">1569091416076.webm</a> <span class="unimportant">(2.03 MB, 640x480, <span class="postfilename">X1 Spark Mandrill.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569091416076.webm&amp;t=X1%20Spark%20Mandrill.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569091416076.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1973" ><p class="intro"><input type="checkbox" class="delete" name="delete_1973" id="delete_1973" /><label for="delete_1973"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T18:45:04Z">09/21/19 (Sat) 18:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1973" onclick="return highlightReply(1973, event)" href="/agg/res/1973#1973">No.</a><a class="post_no" onclick="return citeReply(1973)" href="/agg/res/1973#q1973">1973</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1973">[Reply]</a></p><div class="body">What anime should I watch right now<br/><a href=https://gnfos.com/jp/res/369198.html>https://gnfos.com/jp/res/369198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1972" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569090872335.jpg">1569090872335.jpg</a> <span class="unimportant">(488.25 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 10 [720p].mkv_snapshot_03.58_[2019.09.21_14.26.14].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1569090872335.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569090872335.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1972" ><p class="intro"><input type="checkbox" class="delete" name="delete_1972" id="delete_1972" /><label for="delete_1972"><span class="name">Anonymous</span> <time datetime="2019-09-21T18:35:03Z">09/21/19 (Sat) 18:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1972" onclick="return highlightReply(1972, event)" href="/agg/res/1972#1972">No.</a><a class="post_no" onclick="return citeReply(1972)" href="/agg/res/1972#q1972">1972</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1972">[Reply]</a></p><div class="body">I&#39;m confused as to how I was supposed to feel during this montage. A somewhat emotional song played over them helping villagers we only barely met last episode escape from a large demon threat, alongside other other comedic moments. It left me more thinking about the overall quality of the anime so far and how I really haven&#39;t felt anything aside from adoration of Yue. It even caused me to realize a question I hadn&#39;t thought of yet. Why, when Nagumo supposedly knows who it was that hit him, does he show disdain towards the rest of his classmates? They weren&#39;t ever rude to him and even showed they were happy to see him again, yet he acted like they somehow were involved in what happened to him and even still doesn&#39;t want to try and help bring them back with him? I&#39;m so confused and disappointed by this anime.<br/><a href=https://kissu.moe/qa/res/9924.html>https://kissu.moe/qa/res/9924.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1971" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569089391787.png">1569089391787.png</a> <span class="unimportant">(508.85 KB, 1078x657, <span class="postfilename" title="3689724f463e68773dd954f6b43da8f2.png">3689724f463e68773dd954f6b4….png</span>)</span></p><a href="/agg/src/1569089391787.png" target="_blank"><img class="post-image" src="/agg/thumb/1569089391787.png" style="width:240px;height:147px" alt="" /></a></div>    </div>    <div class="post op" id="op_1971" ><p class="intro"><input type="checkbox" class="delete" name="delete_1971" id="delete_1971" /><label for="delete_1971"><span class="name">Anonymous</span> <time datetime="2019-09-21T18:10:03Z">09/21/19 (Sat) 18:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1971" onclick="return highlightReply(1971, event)" href="/agg/res/1971#1971">No.</a><a class="post_no" onclick="return citeReply(1971)" href="/agg/res/1971#q1971">1971</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1971">[Reply]</a></p><div class="body"><span class="quote">&gt;/what/</span><br/><a href=http://what-ch.mooo.com/what/res/2653.html>http://what-ch.mooo.com/what/res/2653.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/8" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a class="selected">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/10" method="get"><input type="submit" value="Next" /></form>
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