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
			<img class="board_image" src="/static/banners/banner-kissu-7.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none" ><input type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_" ></div >
<div style="display:none"><input type="text" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2"></div>
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<span  style="display:none"><input  type="text"  name="message"  value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></span>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value=" f♻⛭&#9795;&#57;/qzwZk.@&#104;|&#59;$LF&#9953;mdv,&#69;R&#56;&#51;W%&#49;YIM^iU☌5&#9741;&#43;Ag☪T=`}⚑y&#99;7J⛮P#&#98;?&#9892;&#54;X&amp;&#123;D&#120; \4NpKH&#110;&#58;)" name="q" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea   style="display:none"   name="y0kh38z9do♒sb">pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=</textarea>
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
		<div class="thread" id="thread_2070" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569226577985.png">1569226577985.png</a> <span class="unimportant">(850.35 KB, 900x900, <span class="postfilename" title="hakurei_reimu_izayoi_sakuya_kirisame_marisa_and_kochiya_sanae_touhou_drawn_by_chikuwa_savi__e69ffb75.png">hakurei_reimu_izayoi_sakuy….png</span>)</span></p><a href="/agg/src/1569226577985.png" target="_blank"><img class="post-image" src="/agg/thumb/1569226577985.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2070" ><p class="intro"><input type="checkbox" class="delete" name="delete_2070" id="delete_2070" /><label for="delete_2070"><span class="name">Anonymous</span> <time datetime="2019-09-23T08:20:03Z">09/23/19 (Mon) 08:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2070" onclick="return highlightReply(2070, event)" href="/agg/res/2070#2070">No.</a><a class="post_no" onclick="return citeReply(2070)" href="/agg/res/2070#q2070">2070</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2070">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2667.html>http://what-ch.mooo.com/what/res/2667.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2069" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569225478763.jpg">1569225478763.jpg</a> <span class="unimportant">(60.88 KB, 843x1008, <span class="postfilename">1558976925173.jpg</span>)</span></p><a href="/agg/src/1569225478763.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569225478763.jpg" style="width:201px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2069" ><p class="intro"><input type="checkbox" class="delete" name="delete_2069" id="delete_2069" /><label for="delete_2069"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T08:00:05Z">09/23/19 (Mon) 08:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2069" onclick="return highlightReply(2069, event)" href="/agg/res/2069#2069">No.</a><a class="post_no" onclick="return citeReply(2069)" href="/agg/res/2069#q2069">2069</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2069">[Reply]</a></p><div class="body"><span class="quote">&gt;5 Now therefore thus saith the Lord of hosts; Consider your ways.</span><br/><span class="quote">&gt;6 Ye have sown much, and bring in little; ye eat, but ye have not enough; ye drink, but ye are not filled with drink; ye clothe you, but there is none warm; and he that earneth wages earneth wages to put it into a bag with holes.</span><br/><a href=https://gnfos.com/jp/res/369449.html>https://gnfos.com/jp/res/369449.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2068" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569224978578.jpg">1569224978578.jpg</a> <span class="unimportant">(533.34 KB, 1920x1080, <span class="postfilename">1563640323362.jpg</span>)</span></p><a href="/agg/src/1569224978578.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569224978578.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2068" ><p class="intro"><input type="checkbox" class="delete" name="delete_2068" id="delete_2068" /><label for="delete_2068"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-23T07:50:03Z">09/23/19 (Mon) 07:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2068" onclick="return highlightReply(2068, event)" href="/agg/res/2068#2068">No.</a><a class="post_no" onclick="return citeReply(2068)" href="/agg/res/2068#q2068">2068</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2068">[Reply]</a></p><div class="body">Bored.....<br/><br/>Maybe I should just go back to W*W.....<br/><a href=https://gnfos.com/jp/res/369447.html>https://gnfos.com/jp/res/369447.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2067" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569224196399.jpg">1569224196399.jpg</a> <span class="unimportant">(1.73 MB, 1334x1600, <span class="postfilename">76877466_p0.jpg</span>)</span></p><a href="/agg/src/1569224196399.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569224196399.png" style="width:213px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2067" ><p class="intro"><input type="checkbox" class="delete" name="delete_2067" id="delete_2067" /><label for="delete_2067"><span class="subject">Autumn</span> <span class="name">Anonymous</span> <time datetime="2019-09-23T07:40:03Z">09/23/19 (Mon) 07:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2067" onclick="return highlightReply(2067, event)" href="/agg/res/2067#2067">No.</a><a class="post_no" onclick="return citeReply(2067)" href="/agg/res/2067#q2067">2067</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2067">[Reply]</a></p><div class="body"><span class="quote">&gt;Association with the transition from warm to cold weather, and its related status as the season of the primary harvest, has dominated its themes and popular images. In Western cultures, personifications of autumn are usually pretty, well-fed females adorned with fruits, vegetables and grains that ripen at this time. </span><br/><br/>The Northern hemisphere is now the longest away it can be from summer!<br/><a href=https://kissu.moe/qa/res/10256.html>https://kissu.moe/qa/res/10256.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2066" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569223141783.jpg">1569223141783.jpg</a> <span class="unimportant">(62.78 KB, 1280x720, <span class="postfilename">1566832522984.jpg</span>)</span></p><a href="/agg/src/1569223141783.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569223141783.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2066" ><p class="intro"><input type="checkbox" class="delete" name="delete_2066" id="delete_2066" /><label for="delete_2066"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-23T07:20:03Z">09/23/19 (Mon) 07:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2066" onclick="return highlightReply(2066, event)" href="/agg/res/2066#2066">No.</a><a class="post_no" onclick="return citeReply(2066)" href="/agg/res/2066#q2066">2066</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2066">[Reply]</a></p><div class="body">What&#39;s the smelliest diarrhea dookie you&#39;ve ever spewed out of your butthole?<br/><a href=https://gnfos.com/jp/res/369445.html>https://gnfos.com/jp/res/369445.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2065" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569219479857.jpg">1569219479857.jpg</a> <span class="unimportant">(408.58 KB, 1280x1785, <span class="postfilename">036.jpg</span>)</span></p><a href="/agg/src/1569219479857.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569219479857.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2065" ><p class="intro"><input type="checkbox" class="delete" name="delete_2065" id="delete_2065" /><label for="delete_2065"><span class="name">Anonymous</span> <time datetime="2019-09-23T06:20:04Z">09/23/19 (Mon) 06:20:04</time></label>&nbsp;<a class="post_no" id="post_no_2065" onclick="return highlightReply(2065, event)" href="/agg/res/2065#2065">No.</a><a class="post_no" onclick="return citeReply(2065)" href="/agg/res/2065#q2065">2065</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2065">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/10245.html>https://kissu.moe/qa/res/10245.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2064" data-board="agg"><div class="video-container" data-video="jAsgMpwX5uk"><a href="https://youtu.be/jAsgMpwX5uk" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/jAsgMpwX5uk/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2064" ><p class="intro"><input type="checkbox" class="delete" name="delete_2064" id="delete_2064" /><label for="delete_2064"><span class="name">Tada Banri</span> <time datetime="2019-09-23T05:50:03Z">09/23/19 (Mon) 05:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2064" onclick="return highlightReply(2064, event)" href="/agg/res/2064#2064">No.</a><a class="post_no" onclick="return citeReply(2064)" href="/agg/res/2064#q2064">2064</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2064">[Reply]</a></p><div class="body">big yikes<br/><a href=https://gnfos.com/jp/res/369442.html>https://gnfos.com/jp/res/369442.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2063" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569215799908.webm">1569215799908.webm</a> <span class="unimportant">(2.93 MB, 406x720, <span class="postfilename">1569205058261.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569215799908.webm&amp;t=1569205058261.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569215799908.jpg" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2063" ><p class="intro"><input type="checkbox" class="delete" name="delete_2063" id="delete_2063" /><label for="delete_2063"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T05:20:06Z">09/23/19 (Mon) 05:20:06</time></label>&nbsp;<a class="post_no" id="post_no_2063" onclick="return highlightReply(2063, event)" href="/agg/res/2063#2063">No.</a><a class="post_no" onclick="return citeReply(2063)" href="/agg/res/2063#q2063">2063</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2063">[Reply]</a></p><div class="body">OPEN BORDERSS!<br/>:)<br/><a href=https://gnfos.com/jp/res/369440.html>https://gnfos.com/jp/res/369440.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2062" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569215572184.jpg">1569215572184.jpg</a> <span class="unimportant">(145.69 KB, 1920x1080, <span class="postfilename" title="[AnimeFreak] Miru Tights - 02_v2 [1080p].mkv_snapshot_01.55_[2019.06.02_19.09.56].jpg">[AnimeFreak] Miru Tights -….jpg</span>)</span></p><a href="/agg/src/1569215572184.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569215572184.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2062" ><p class="intro"><input type="checkbox" class="delete" name="delete_2062" id="delete_2062" /><label for="delete_2062"><span class="name">Anonymous</span> <time datetime="2019-09-23T05:15:03Z">09/23/19 (Mon) 05:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2062" onclick="return highlightReply(2062, event)" href="/agg/res/2062#2062">No.</a><a class="post_no" onclick="return citeReply(2062)" href="/agg/res/2062#q2062">2062</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2062">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/>BLEH<br/><a href=https://kissu.moe/qa/res/10227.html>https://kissu.moe/qa/res/10227.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2061" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/6EUYBWhVkKg" allowfullscreen></iframe>    <div class="post op" id="op_2061" ><p class="intro"><input type="checkbox" class="delete" name="delete_2061" id="delete_2061" /><label for="delete_2061"><span class="name">Anonymous</span> <time datetime="2019-09-23T05:05:03Z">09/23/19 (Mon) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2061" onclick="return highlightReply(2061, event)" href="/agg/res/2061#2061">No.</a><a class="post_no" onclick="return citeReply(2061)" href="/agg/res/2061#q2061">2061</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2061">[Reply]</a></p><div class="body">てててててててててててててててててててててててていい意味てててい～てててててていいいい～<br/><a href=https://kissu.moe/qa/res/10221.html>https://kissu.moe/qa/res/10221.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2060" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569214786257.png">1569214786257.png</a> <span class="unimportant">(516.06 KB, 445x1071, <span class="postfilename">you_wont_do_anything.png</span>)</span></p><a href="/agg/src/1569214786257.png" target="_blank"><img class="post-image" src="/agg/thumb/1569214786257.png" style="width:106px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2060" ><p class="intro"><input type="checkbox" class="delete" name="delete_2060" id="delete_2060" /><label for="delete_2060"><span class="name">Anonymous</span> <time datetime="2019-09-23T05:00:05Z">09/23/19 (Mon) 05:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2060" onclick="return highlightReply(2060, event)" href="/agg/res/2060#2060">No.</a><a class="post_no" onclick="return citeReply(2060)" href="/agg/res/2060#q2060">2060</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2060">[Reply]</a></p><div class="body">Brendon did nothing wrong.<br/><a href=https://kissu.moe/qa/res/10220.html>https://kissu.moe/qa/res/10220.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2059" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569214755263.png">1569214755263.png</a> <span class="unimportant">(1.08 MB, 1556x817, <span class="postfilename">smash_it.png</span>)</span></p><a href="/agg/src/1569214755263.png" target="_blank"><img class="post-image" src="/agg/thumb/1569214755263.png" style="width:255px;height:134px" alt="" /></a></div>    </div>    <div class="post op" id="op_2059" ><p class="intro"><input type="checkbox" class="delete" name="delete_2059" id="delete_2059" /><label for="delete_2059"><span class="name">Anonymous</span> <time datetime="2019-09-23T05:00:05Z">09/23/19 (Mon) 05:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2059" onclick="return highlightReply(2059, event)" href="/agg/res/2059#2059">No.</a><a class="post_no" onclick="return citeReply(2059)" href="/agg/res/2059#q2059">2059</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2059">[Reply]</a></p><div class="body">Sub to pewds<br/><a href=https://kissu.moe/qa/res/10219.html>https://kissu.moe/qa/res/10219.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2058" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569214502992.jpg">1569214502992.jpg</a> <span class="unimportant">(353.29 KB, 1600x1250, <span class="postfilename">jews-media.jpg</span>)</span></p><a href="/agg/src/1569214502992.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569214502992.png" style="width:255px;height:200px" alt="" /></a></div>    </div>    <div class="post op" id="op_2058" ><p class="intro"><input type="checkbox" class="delete" name="delete_2058" id="delete_2058" /><label for="delete_2058"><span class="name">Anonymous</span> <time datetime="2019-09-23T04:55:05Z">09/23/19 (Mon) 04:55:05</time></label>&nbsp;<a class="post_no" id="post_no_2058" onclick="return highlightReply(2058, event)" href="/agg/res/2058#2058">No.</a><a class="post_no" onclick="return citeReply(2058)" href="/agg/res/2058#q2058">2058</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2058">[Reply]</a></p><div class="body">Jews are disgusting.<br/>Hitler did nothing wrong.<br/><a href=https://kissu.moe/qa/res/10217.html>https://kissu.moe/qa/res/10217.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2057" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569213545685.jpg">1569213545685.jpg</a> <span class="unimportant">(24.66 KB, 333x499, <span class="postfilename">henry-ford-jews.jpg</span>)</span></p><a href="/agg/src/1569213545685.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569213545685.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2057" ><p class="intro"><input type="checkbox" class="delete" name="delete_2057" id="delete_2057" /><label for="delete_2057"><span class="name">Anonymous</span> <time datetime="2019-09-23T04:40:04Z">09/23/19 (Mon) 04:40:04</time></label>&nbsp;<a class="post_no" id="post_no_2057" onclick="return highlightReply(2057, event)" href="/agg/res/2057#2057">No.</a><a class="post_no" onclick="return citeReply(2057)" href="/agg/res/2057#q2057">2057</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2057">[Reply]</a></p><div class="body">i hate jews so god damn much<br/><a href=https://kissu.moe/qa/res/10212.html>https://kissu.moe/qa/res/10212.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2056" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569213294594.jpg">1569213294594.jpg</a> <span class="unimportant">(36.47 KB, 700x484, <span class="postfilename">weeb-worse-than-jew.jpg</span>)</span></p><a href="/agg/src/1569213294594.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569213294594.png" style="width:255px;height:176px" alt="" /></a></div>    </div>    <div class="post op" id="op_2056" ><p class="intro"><input type="checkbox" class="delete" name="delete_2056" id="delete_2056" /><label for="delete_2056"><span class="name">Anonymous</span> <time datetime="2019-09-23T04:35:03Z">09/23/19 (Mon) 04:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2056" onclick="return highlightReply(2056, event)" href="/agg/res/2056#2056">No.</a><a class="post_no" onclick="return citeReply(2056)" href="/agg/res/2056#q2056">2056</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2056">[Reply]</a></p><div class="body">Fuck Jews<br/><a href=https://kissu.moe/qa/res/10209.html>https://kissu.moe/qa/res/10209.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2055" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569211640428.jpeg">1569211640428.jpeg</a> <span class="unimportant">(224.13 KB, 659x499, <span class="postfilename" title="8A7DB1C1-4594-48EC-8608-904C8017F254.jpeg">8A7DB1C1-4594-48EC-8608-9….jpeg</span>)</span></p><a href="/agg/src/1569211640428.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569211640428.jpeg" style="width:317px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2055" ><p class="intro"><input type="checkbox" class="delete" name="delete_2055" id="delete_2055" /><label for="delete_2055"><span class="name">Idiot</span> <time datetime="2019-09-23T04:10:04Z">09/23/19 (Mon) 04:10:04</time></label>&nbsp;<a class="post_no" id="post_no_2055" onclick="return highlightReply(2055, event)" href="/agg/res/2055#2055">No.</a><a class="post_no" onclick="return citeReply(2055)" href="/agg/res/2055#q2055">2055</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2055">[Reply]</a></p><div class="body"><a href="https://instagram.com/stories/dababy/2138598940711282355" rel="nofollow" target="_blank">https://instagram.com/stories/dababy/2138598940711282355</a><br/><a href=https://gnfos.com/jp/res/369436.html>https://gnfos.com/jp/res/369436.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2054" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569208325127.png">1569208325127.png</a> <span class="unimportant">(364.24 KB, 720x481, <span class="postfilename" title="palemoon_2019-09-22_22-10-54.png">palemoon_2019-09-22_22-10-….png</span>)</span></p><a href="/agg/src/1569208325127.png" target="_blank"><img class="post-image" src="/agg/thumb/1569208325127.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_2054" ><p class="intro"><input type="checkbox" class="delete" name="delete_2054" id="delete_2054" /><label for="delete_2054"><span class="name">Anonymous</span> <time datetime="2019-09-23T03:15:08Z">09/23/19 (Mon) 03:15:08</time></label>&nbsp;<a class="post_no" id="post_no_2054" onclick="return highlightReply(2054, event)" href="/agg/res/2054#2054">No.</a><a class="post_no" onclick="return citeReply(2054)" href="/agg/res/2054#q2054">2054</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2054">[Reply]</a></p><div class="body">This thing classifies images like google or facebook:<br/><a href="https://imagenet-roulette.paglen.com/" rel="nofollow" target="_blank">https://imagenet-roulette.paglen.com/</a><br/>Obviously it&#39;s not meant to classify 2D images, but it&#39;s still kind of funny<br/>It&#39;s going down in 5 days, though, so let&#39;s enjoy it while we can<br/><a href=https://kissu.moe/qa/res/10198.html>https://kissu.moe/qa/res/10198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2053" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569207820590.jpg">1569207820590.jpg</a> <span class="unimportant">(26.09 KB, 348x373, <span class="postfilename">aidsupoiasuod.jpg</span>)</span></p><a href="/agg/src/1569207820590.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569207820590.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2053" ><p class="intro"><input type="checkbox" class="delete" name="delete_2053" id="delete_2053" /><label for="delete_2053"><span class="name">Anonymous</span> <time datetime="2019-09-23T03:05:04Z">09/23/19 (Mon) 03:05:04</time></label>&nbsp;<a class="post_no" id="post_no_2053" onclick="return highlightReply(2053, event)" href="/agg/res/2053#2053">No.</a><a class="post_no" onclick="return citeReply(2053)" href="/agg/res/2053#q2053">2053</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2053">[Reply]</a></p><div class="body">my first accounting exam is soon.<br/><br/>Oh my fuck, its coming.<br/>Fucking accounting. The course that ate me alive last time<br/>Theres not much time left to prepare<br/>Every night this week I will have to chug coffee and memorize all these accounting chapters.<br/><br/>If i dont get an A on this fucking exam, my future japanese hooker wife will marry another sugar daddy.<br/><br/>Holy Fuck dude.<br/><a href=https://kissu.moe/qa/res/10195.html>https://kissu.moe/qa/res/10195.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2052" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569206214267.jpg">1569206214267.jpg</a> <span class="unimportant">(399.08 KB, 1967x1744, <span class="postfilename">cover.jpg</span>)</span></p><a href="/agg/src/1569206214267.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569206214267.png" style="width:240px;height:213px" alt="" /></a></div>    </div>    <div class="post op" id="op_2052" ><p class="intro"><input type="checkbox" class="delete" name="delete_2052" id="delete_2052" /><label for="delete_2052"><span class="name">Anonymous</span> <time datetime="2019-09-23T02:40:05Z">09/23/19 (Mon) 02:40:05</time></label>&nbsp;<a class="post_no" id="post_no_2052" onclick="return highlightReply(2052, event)" href="/agg/res/2052#2052">No.</a><a class="post_no" onclick="return citeReply(2052)" href="/agg/res/2052#q2052">2052</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2052">[Reply]</a></p><div class="body"><a href="http://what-ch.mooo.com/up/05%20-%20Light%20Song.mp3" rel="nofollow" target="_blank">http://what-ch.mooo.com/up/05%20-%20Light%20Song.mp3</a><br/><span class="quote"><br/>&gt;fighto</span><br/><a href=http://what-ch.mooo.com/what/res/2659.html>http://what-ch.mooo.com/what/res/2659.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2051" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569205237586.png">1569205237586.png</a> <span class="unimportant">(2.64 MB, 750x1334, <span class="postfilename" title="849F93EF-CF04-4988-8517-E36CD86FB278.png">849F93EF-CF04-4988-8517-E3….png</span>)</span></p><a href="/agg/src/1569205237586.png" target="_blank"><img class="post-image" src="/agg/thumb/1569205237586.png" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2051" ><p class="intro"><input type="checkbox" class="delete" name="delete_2051" id="delete_2051" /><label for="delete_2051"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-23T02:25:04Z">09/23/19 (Mon) 02:25:04</time></label>&nbsp;<a class="post_no" id="post_no_2051" onclick="return highlightReply(2051, event)" href="/agg/res/2051#2051">No.</a><a class="post_no" onclick="return citeReply(2051)" href="/agg/res/2051#q2051">2051</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2051">[Reply]</a></p><div class="body">Wow you freaks idolize a gay man???? Wow what a bunch of homos<br/><a href=https://gnfos.com/jp/res/369432.html>https://gnfos.com/jp/res/369432.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/4" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a class="selected">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/6" method="get"><input type="submit" value="Next" /></form>
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