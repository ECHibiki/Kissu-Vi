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
<span  style="display:none"><input  type="text"  name="text"  value="qmsSY[vpLH2P\1y@b,k_"></span>
<input type="hidden" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<textarea style="display:none" name="login">&#47;[LH&#32;J&#105;:`&#33;;&#67;+&#54;\o&#84;&lt;8O&#98;I&#124;&#63;X&#93;d&#46;2&#9768;{tW5 &#99;&#9905;1B=&#107;@9(3Ng☮&#42;}4&#39;PQ-MV⚯0KD&#55;&#117;sj</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" name="message" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  type="hidden"  value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"  name="q">
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="y0kh38z9do♒sb" value="p&#78;+&gt;8&lt;qG/6&#100;&#9742;,'F&#37;;s⚨&#105;&#65;E!&#82;uoP&#75;&#9855;S}_☬&#86;(-&#99;^\{QCD&#126;⛼m⛰&#108;x&#96;[&#97;&#52;&#48;.&#85;kbZW&#9864;#*)L&#119;M&#58;|&#114;⛍&#93;2y@☪n&amp;&#53;Y9♪T &#106;1f7&#36;3&#61;">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" value="b☵#Y{7`9J⚴@V^6_-" name="search">
			
			
				
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
		<div class="thread" id="thread_1790" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568100943619.png">1568100943619.png</a> <span class="unimportant">(1.3 MB, 1414x1000, <span class="postfilename" title="__original_drawn_by_erica_naze1940__f3cb4a8f29fa56b09d5016c54e3ef165.png">__original_drawn_by_erica_….png</span>)</span></p><a href="/agg/src/1568100943619.png" target="_blank"><img class="post-image" src="/agg/thumb/1568100943619.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1790" ><p class="intro"><input type="checkbox" class="delete" name="delete_1790" id="delete_1790" /><label for="delete_1790"><span class="name">Cirno</span> <time datetime="2019-09-10T07:40:04Z">09/10/19 (Tue) 07:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1790" onclick="return highlightReply(1790, event)" href="/agg/res/1790#1790">No.</a><a class="post_no" onclick="return citeReply(1790)" href="/agg/res/1790#q1790">1790</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1790">[Reply]</a></p><div class="body">War, children<br/>It&#39;s just a shot away!<br/><a href=https://kissu.moe/qa/res/8116.html>https://kissu.moe/qa/res/8116.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1789" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568099381785.png">1568099381785.png</a> <span class="unimportant">(1.12 MB, 1440x1080, <span class="postfilename" title="[pseudo] Yu Yu Hakusho 058 [1080p] [h.265].mkv_snapshot_12.39_[2018.02.15_07.49.44].png">[pseudo] Yu Yu Hakusho 058….png</span>)</span></p><a href="/agg/src/1568099381785.png" target="_blank"><img class="post-image" src="/agg/thumb/1568099381785.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1789" ><p class="intro"><input type="checkbox" class="delete" name="delete_1789" id="delete_1789" /><label for="delete_1789"><span class="name">Cirno</span> <time datetime="2019-09-10T07:10:03Z">09/10/19 (Tue) 07:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1789" onclick="return highlightReply(1789, event)" href="/agg/res/1789#1789">No.</a><a class="post_no" onclick="return citeReply(1789)" href="/agg/res/1789#q1789">1789</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1789">[Reply]</a></p><div class="body">I&#39;m bored, /qa/<br/>it&#39;s hard to get used to a slower board, even if it&#39;s significantly better than what we had<br/><a href=https://kissu.moe/qa/res/8113.html>https://kissu.moe/qa/res/8113.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1788" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/tMFzejuUVK4" allowfullscreen></iframe>    <div class="post op" id="op_1788" ><p class="intro"><input type="checkbox" class="delete" name="delete_1788" id="delete_1788" /><label for="delete_1788"><span class="name">Cirno</span> <time datetime="2019-09-10T05:30:03Z">09/10/19 (Tue) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1788" onclick="return highlightReply(1788, event)" href="/agg/res/1788#1788">No.</a><a class="post_no" onclick="return citeReply(1788)" href="/agg/res/1788#q1788">1788</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1788">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/8104.html>https://kissu.moe/qa/res/8104.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1787" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568089950988.png">1568089950988.png</a> <span class="unimportant">(17.75 KB, 462x643, <span class="postfilename">suggest.png</span>)</span></p><a href="/agg/src/1568089950988.png" target="_blank"><img class="post-image" src="/agg/thumb/1568089950988.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1787" ><p class="intro"><input type="checkbox" class="delete" name="delete_1787" id="delete_1787" /><label for="delete_1787"><span class="name">Cirno</span> <time datetime="2019-09-10T04:35:06Z">09/10/19 (Tue) 04:35:06</time></label>&nbsp;<a class="post_no" id="post_no_1787" onclick="return highlightReply(1787, event)" href="/agg/res/1787#1787">No.</a><a class="post_no" onclick="return citeReply(1787)" href="/agg/res/1787#q1787">1787</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1787">[Reply]</a></p><div class="body">I have a lot of VN(most are eroge) and i think 2 JRPGs, any suggestions on what to play? I can&#39;t decide.<br/><a href=https://kissu.moe/qa/res/8074.html>https://kissu.moe/qa/res/8074.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1786" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568073436821.png">1568073436821.png</a> <span class="unimportant">(21.21 KB, 600x600, <span class="postfilename">40076585_p0.png</span>)</span></p><a href="/agg/src/1568073436821.png" target="_blank"><img class="post-image" src="/agg/thumb/1568073436821.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1786" ><p class="intro"><input type="checkbox" class="delete" name="delete_1786" id="delete_1786" /><label for="delete_1786"><span class="name">Cirno</span> <time datetime="2019-09-10T00:00:04Z">09/10/19 (Tue) 00:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1786" onclick="return highlightReply(1786, event)" href="/agg/res/1786#1786">No.</a><a class="post_no" onclick="return citeReply(1786)" href="/agg/res/1786#q1786">1786</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1786">[Reply]</a></p><div class="body">Cirno riding a banana again<br/><a href=https://kissu.moe/qa/res/8042.html>https://kissu.moe/qa/res/8042.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1785" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568070706119.jpg">1568070706119.jpg</a> <span class="unimportant">(781.58 KB, 1024x1125, <span class="postfilename">21135753_p0.jpg</span>)</span></p><a href="/agg/src/1568070706119.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568070706119.png" style="width:231px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1785" ><p class="intro"><input type="checkbox" class="delete" name="delete_1785" id="delete_1785" /><label for="delete_1785"><span class="name">Cirno</span> <time datetime="2019-09-09T23:15:03Z">09/09/19 (Mon) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1785" onclick="return highlightReply(1785, event)" href="/agg/res/1785#1785">No.</a><a class="post_no" onclick="return citeReply(1785)" href="/agg/res/1785#q1785">1785</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1785">[Reply]</a></p><div class="body">Cirno riding a banana.<br/><a href=https://kissu.moe/qa/res/8037.html>https://kissu.moe/qa/res/8037.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1784" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568052120983.png">1568052120983.png</a> <span class="unimportant">(533.74 KB, 650x720, <span class="postfilename">himawari.png</span>)</span></p><a href="/agg/src/1568052120983.png" target="_blank"><img class="post-image" src="/agg/thumb/1568052120983.png" style="width:230px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1784" ><p class="intro"><input type="checkbox" class="delete" name="delete_1784" id="delete_1784" /><label for="delete_1784"><span class="name">Cirno</span> <time datetime="2019-09-09T18:05:03Z">09/09/19 (Mon) 18:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1784" onclick="return highlightReply(1784, event)" href="/agg/res/1784#1784">No.</a><a class="post_no" onclick="return citeReply(1784)" href="/agg/res/1784#q1784">1784</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1784">[Reply]</a></p><div class="body">just spent three hours trying to fix my router because Opera&#39;s password manager slipped &#39;root&#39; into the &#39;Client ID to send when requesting DHCP&#39; field without my noticing....<br/><a href=https://kissu.moe/qa/res/8024.html>https://kissu.moe/qa/res/8024.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1783" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568041634135.jpg">1568041634135.jpg</a> <span class="unimportant">(753.75 KB, 1000x1500, <span class="postfilename">281_tamamo_summer110.jpg</span>)</span></p><a href="/agg/src/1568041634135.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568041634135.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1783" ><p class="intro"><input type="checkbox" class="delete" name="delete_1783" id="delete_1783" /><label for="delete_1783"><span class="name">Anonymous</span> <time datetime="2019-09-09T15:10:02Z">09/09/19 (Mon) 15:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1783" onclick="return highlightReply(1783, event)" href="/agg/res/1783#1783">No.</a><a class="post_no" onclick="return citeReply(1783)" href="/agg/res/1783#q1783">1783</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1783">[Reply]</a></p><div class="body">/what/ - ...<br/>The Society for the Study of Hairy pOOsy<br/><a href=http://what-ch.mooo.com/what/res/2476.html>http://what-ch.mooo.com/what/res/2476.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1782" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568030966737.jpg">1568030966737.jpg</a> <span class="unimportant">(97.76 KB, 572x800, <span class="postfilename" title="5f4278d035a936e136b7610a559ac120.jpg">5f4278d035a936e136b7610a55….jpg</span>)</span></p><a href="/agg/src/1568030966737.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568030966737.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1782" ><p class="intro"><input type="checkbox" class="delete" name="delete_1782" id="delete_1782" /><label for="delete_1782"><span class="name">Cirno</span> <time datetime="2019-09-09T12:10:04Z">09/09/19 (Mon) 12:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1782" onclick="return highlightReply(1782, event)" href="/agg/res/1782#1782">No.</a><a class="post_no" onclick="return citeReply(1782)" href="/agg/res/1782#q1782">1782</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1782">[Reply]</a></p><div class="body">Hello can I make a <span class="glowblue">question</span> about /qa/<br/>I never really browsed the board much but I heard a lot of people got banned<br/><br/>I read some people complain about the mods and some other people complain about the board getting raided by discord/IRC/other parallel communities<br/><br/>who is in the right here?<br/><a href=https://kissu.moe/qa/res/8011.html>https://kissu.moe/qa/res/8011.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1781" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568016286951.jpeg">1568016286951.jpeg</a> <span class="unimportant">(96.38 KB, 921x691, <span class="postfilename" title="D78A812B-E95A-4BD7-B8D8-BE6FCF6AF253.jpeg">D78A812B-E95A-4BD7-B8D8-B….jpeg</span>)</span></p><a href="/agg/src/1568016286951.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568016286951.png" style="width:255px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_1781" ><p class="intro"><input type="checkbox" class="delete" name="delete_1781" id="delete_1781" /><label for="delete_1781"><span class="name">jevin</span> <time datetime="2019-09-09T08:05:03Z">09/09/19 (Mon) 08:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1781" onclick="return highlightReply(1781, event)" href="/agg/res/1781#1781">No.</a><a class="post_no" onclick="return citeReply(1781)" href="/agg/res/1781#q1781">1781</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1781">[Reply]</a></p><div class="body">endless guilt-free promises<br/><a href=https://kissu.moe/qa/res/8002.html>https://kissu.moe/qa/res/8002.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1780" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568011547060.jpg">1568011547060.jpg</a> <span class="unimportant">(703.34 KB, 3541x3896, <span class="postfilename">miscellaneous 1837.jpg</span>)</span></p><a href="/agg/src/1568011547060.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568011547060.png" style="width:219px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1780" ><p class="intro"><input type="checkbox" class="delete" name="delete_1780" id="delete_1780" /><label for="delete_1780"><span class="name">Anonymous</span> <time datetime="2019-09-09T06:50:03Z">09/09/19 (Mon) 06:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1780" onclick="return highlightReply(1780, event)" href="/agg/res/1780#1780">No.</a><a class="post_no" onclick="return citeReply(1780)" href="/agg/res/1780#q1780">1780</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1780">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2467.html>http://what-ch.mooo.com/what/res/2467.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1779" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568010416708.png">1568010416708.png</a> <span class="unimportant">(943.63 KB, 1280x720, <span class="postfilename">maitetsu画像_20190909_022611.png</span>)</span></p><a href="/agg/src/1568010416708.png" target="_blank"><img class="post-image" src="/agg/thumb/1568010416708.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1779" ><p class="intro"><input type="checkbox" class="delete" name="delete_1779" id="delete_1779" /><label for="delete_1779"><span class="name">Cirno</span> <time datetime="2019-09-09T06:30:18Z">09/09/19 (Mon) 06:30:18</time></label>&nbsp;<a class="post_no" id="post_no_1779" onclick="return highlightReply(1779, event)" href="/agg/res/1779#1779">No.</a><a class="post_no" onclick="return citeReply(1779)" href="/agg/res/1779#q1779">1779</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1779">[Reply]</a></p><div class="body">Hello /qa/. This is my imouto and gf, Hibiki<br/><a href=https://kissu.moe/qa/res/7980.html>https://kissu.moe/qa/res/7980.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1778" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568007786951.jpg">1568007786951.jpg</a> <span class="unimportant">(477.27 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 08 [720p].mkv_snapshot_02.38_[2019.09.08_13.17.25].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1568007786951.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568007786951.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1778" ><p class="intro"><input type="checkbox" class="delete" name="delete_1778" id="delete_1778" /><label for="delete_1778"><span class="name">Cirno</span> <time datetime="2019-09-09T05:45:03Z">09/09/19 (Mon) 05:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1778" onclick="return highlightReply(1778, event)" href="/agg/res/1778#1778">No.</a><a class="post_no" onclick="return citeReply(1778)" href="/agg/res/1778#q1778">1778</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1778">[Reply]</a></p><div class="body">Pretty amazing how the lack of focus on a certain character made this episode so bearable...<br/><a href=https://kissu.moe/qa/res/7971.html>https://kissu.moe/qa/res/7971.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1777" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568005406895.png">1568005406895.png</a> <span class="unimportant">(1.15 MB, 1200x844, <span class="postfilename" title="__hibino_mina_karakai_jouzu_no_takagi_san_drawn_by_konnyaku_kk_monmon__1d09c3fa161b5d97740bbe85931ab963.png">__hibino_mina_karakai_jouz….png</span>)</span></p><a href="/agg/src/1568005406895.png" target="_blank"><img class="post-image" src="/agg/thumb/1568005406895.png" style="width:255px;height:179px" alt="" /></a></div>    </div>    <div class="post op" id="op_1777" ><p class="intro"><input type="checkbox" class="delete" name="delete_1777" id="delete_1777" /><label for="delete_1777"><span class="name">Cirno</span> <time datetime="2019-09-09T05:05:03Z">09/09/19 (Mon) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1777" onclick="return highlightReply(1777, event)" href="/agg/res/1777#1777">No.</a><a class="post_no" onclick="return citeReply(1777)" href="/agg/res/1777#q1777">1777</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1777">[Reply]</a></p><div class="body">When is Mina going to get her own show? She&#39;s easily the best character. She&#39;s funny, lazy, and her thick, womanly eyebrows mean she has a good heart and spirit.<br/><a href=https://kissu.moe/qa/res/7964.html>https://kissu.moe/qa/res/7964.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1776" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568004147716.png">1568004147716.png</a> <span class="unimportant">(902.6 KB, 714x1000, <span class="postfilename" title="__eternity_larva_star_sapphire_clownpiece_lily_white_luna_child_and_etc_touhou_drawn_by_pjrmhm_coa__4d477df8100e2e20bc98787398ede636.png">__eternity_larva_star_sapp….png</span>)</span></p><a href="/agg/src/1568004147716.png" target="_blank"><img class="post-image" src="/agg/thumb/1568004147716.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1776" ><p class="intro"><input type="checkbox" class="delete" name="delete_1776" id="delete_1776" /><label for="delete_1776"><span class="name">Cirno</span> <time datetime="2019-09-09T04:45:03Z">09/09/19 (Mon) 04:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1776" onclick="return highlightReply(1776, event)" href="/agg/res/1776#1776">No.</a><a class="post_no" onclick="return citeReply(1776)" href="/agg/res/1776#q1776">1776</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1776">[Reply]</a></p><div class="body">weensperm<br/><a href=https://kissu.moe/qa/res/7961.html>https://kissu.moe/qa/res/7961.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1775" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567983593343.mp4">1567983593343.mp4</a> <span class="unimportant">(5.17 MB, 1920x1080, <span class="postfilename">VJd-3M8ix44.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1567983593343.mp4&amp;t=VJd-3M8ix44.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1567983593343.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1775" ><p class="intro"><input type="checkbox" class="delete" name="delete_1775" id="delete_1775" /><label for="delete_1775"><span class="name">Anonymous</span> <time datetime="2019-09-08T23:00:03Z">09/08/19 (Sun) 23:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1775" onclick="return highlightReply(1775, event)" href="/agg/res/1775#1775">No.</a><a class="post_no" onclick="return citeReply(1775)" href="/agg/res/1775#q1775">1775</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1775">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2464.html>http://what-ch.mooo.com/what/res/2464.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1774" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567981896908.jpg">1567981896908.jpg</a> <span class="unimportant">(49.35 KB, 640x480, <span class="postfilename">DvJop-AV4AALJR1.jpg</span>)</span></p><a href="/agg/src/1567981896908.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567981896908.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1774" ><p class="intro"><input type="checkbox" class="delete" name="delete_1774" id="delete_1774" /><label for="delete_1774"><span class="name">Anonymous</span> <time datetime="2019-09-08T22:35:03Z">09/08/19 (Sun) 22:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1774" onclick="return highlightReply(1774, event)" href="/agg/res/1774#1774">No.</a><a class="post_no" onclick="return citeReply(1774)" href="/agg/res/1774#q1774">1774</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1774">[Reply]</a></p><div class="body">I wish Mori no <span class="glowgold">Youki na Kobito-tachi: Belfy to Lillibit</span>, localized as <span class="glowpink">The Littl&#39; Bits</span>, was available online.<br/>It seems the best way to get it is a guy selling bootleg DVDs of it here: <a href="https://www.freewebs.com/stuffilike/littlbits.htm" rel="nofollow" target="_blank">https://www.freewebs.com/stuffilike/littlbits.htm</a>  (I don&#39;t even know if the guy there still responds).<br/>There&#39;s some VHS tapes on sites like Amazon too, but a guy converting them to DVD seems much better. <a href="https://www.amazon.com/Littl-Bits-Friends/dp/B0009DWYU2" rel="nofollow" target="_blank">https://www.amazon.com/Littl-Bits-Friends/dp/B0009DWYU2</a><br/><br/>Why is life so difficult?<br/><a href=https://kissu.moe/qa/res/7934.html>https://kissu.moe/qa/res/7934.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1773" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567981373984.png">1567981373984.png</a> <span class="unimportant">(132.89 KB, 244x413, <span class="postfilename">1517025933575.png</span>)</span></p><a href="/agg/src/1567981373984.png" target="_blank"><img class="post-image" src="/agg/thumb/1567981373984.png" style="width:151px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1773" ><p class="intro"><input type="checkbox" class="delete" name="delete_1773" id="delete_1773" /><label for="delete_1773"><span class="name">Anonymous</span> <time datetime="2019-09-08T22:25:03Z">09/08/19 (Sun) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1773" onclick="return highlightReply(1773, event)" href="/agg/res/1773#1773">No.</a><a class="post_no" onclick="return citeReply(1773)" href="/agg/res/1773#q1773">1773</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1773">[Reply]</a></p><div class="body">There is a touhou party on /ota/ and everyone is invited!<br/><a href=https://kissu.moe/qa/res/7933.html>https://kissu.moe/qa/res/7933.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1772" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567973959899.jpg">1567973959899.jpg</a> <span class="unimportant">(301.37 KB, 1419x2108, <span class="postfilename" title="aacf97a656272ad1895066406e2fd40bb4d1b33ac9a7c16e35386622eb813e39.jpg">aacf97a656272ad1895066406e….jpg</span>)</span></p><a href="/agg/src/1567973959899.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567973959899.png" style="width:172px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1772" ><p class="intro"><input type="checkbox" class="delete" name="delete_1772" id="delete_1772" /><label for="delete_1772"><span class="name">Anonymous</span> <time datetime="2019-09-08T20:20:02Z">09/08/19 (Sun) 20:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1772" onclick="return highlightReply(1772, event)" href="/agg/res/1772#1772">No.</a><a class="post_no" onclick="return citeReply(1772)" href="/agg/res/1772#q1772">1772</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1772">[Reply]</a></p><div class="body">cute girls post cute girls<br/><a href=https://kissu.moe/qa/res/7924.html>https://kissu.moe/qa/res/7924.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1771" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567964322027.jpg">1567964322027.jpg</a> <span class="unimportant">(435.03 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 08 [720p].mkv_snapshot_21.49_[2019.09.08_13.37.57].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1567964322027.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567964322027.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1771" ><p class="intro"><input type="checkbox" class="delete" name="delete_1771" id="delete_1771" /><label for="delete_1771"><span class="name">Anonymous</span> <time datetime="2019-09-08T17:40:03Z">09/08/19 (Sun) 17:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1771" onclick="return highlightReply(1771, event)" href="/agg/res/1771#1771">No.</a><a class="post_no" onclick="return citeReply(1771)" href="/agg/res/1771#q1771">1771</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1771">[Reply]</a></p><div class="body">Get in<br/><a href=https://kissu.moe/qa/res/7917.html>https://kissu.moe/qa/res/7917.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/18" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a class="selected">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/20" method="get"><input type="submit" value="Next" /></form>
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