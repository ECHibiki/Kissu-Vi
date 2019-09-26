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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	
        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", 'https://kissu.moe/motd.txt');
                request.onreadystatechange = function() { 
                if (this.readyState === 4 && this.status === 200) {
                        motd = this.responseText;
                        var request = new XMLHttpRequest(); 
                        localStorage.firstLoad = 3;
                        alert(
                        "<h1>Welcome to kissu.moe!</h1><br/>\
                         <h2>Message Of the Day</h2>\
                        <p><strong>" + motd + "</strong></p>\
                        <h2>Boards</h2>\
                        <ul style='text-align: left;'><li>/qa/ - Random content(NSFW spoilered)</li><li>/b/ - Site Developement</li><li>/megu/ - NSFW content</li></ul>\
                        <h2>Select Default Theme</h2>\
                        Other options are selectable later in options<br/><br/>\
                        <label>Default Theme: <select onchange='$(\"#style-select-\" + $(this).val()).click();'><option value='1'>Light</option><option selected='selected' value='2'>Dark</option><option value='3'>Special</option></select></label><br/>\
                        <h2>Rules</h2>\
                        <p>Don't post obnoxious stuff. Bans are only reserved for the worst cases of people. A deletion does not mean it's personal</p><hr/>\
                        <br/>Contact Vermin for issues, site bugs and feedback</p>\
                        "
                        );

                };

        }
        request.send();
}
</script>


	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div  style="display:none"><input  type="text"  name="n2epfz9o8lygk6♒ub1ia3sjw7450vh"  value="&#59;&#69;w&#113;N*d&#57;⛳P&#76;☖])&#40;yul&#82;MJ_T D⛌?\=&#96;o⛗&#46;n}!gxc⚫&#106;XW&lt; &#65;^G&#98;'v2U5☶p+z☟rO#Z,$Q&#97;4☄@&#107;S7BYFKtV⚇msi1H"></div>
<div  style="display:none"><input  type="text"  name="username"  value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\"></div>
<input type="hidden" name="board" value="agg">
<input type="hidden" value="g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{" name="lastname">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div  style="display:none"><input  type="text"  name="search"  value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;" name="user">
			</td>
		</tr>		<tr>
			<th>
				Options				<input  type="hidden"  value=""  name="7ykdefr3jg0ioqn2491mbap">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="2x⛝tavigslre96d83o7b♉yn1" value=""></div>
			
			
				<input style="display:none" type="text" name="iaze6dys♅pc97xrj8" value="" >
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input type="hidden" value="24827" name="url">
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input  name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf"  value=""  type="hidden">
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<input name="text" value="WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?" type="hidden">
				
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
								<input   name="firstname"   value="H⛢\I&#60;&#48;auC`g⚲{y♄LUQ⚳.&#9732;fm1,XVo|:YvGjh7BA/&#41;TS&#37;&#99;*r#i&#94;z&#120;&#100;~&#57;&#79;&#108;&#101;8⛾t"   type="hidden">
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

<input type="hidden" name="hash" value="ef840e337c13cfd762e22af7e17c48cf05182ee3">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter">We have an archive, because why not<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/agg/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/agg/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="agg" />
		<div class="thread" id="thread_2177" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569510660014.jpg">1569510660014.jpg</a> <span class="unimportant">(90.48 KB, 642x960, <span class="postfilename">1569506841729.jpg</span>)</span></p><a href="/agg/src/1569510660014.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569510660014.jpg" style="width:161px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2177" ><p class="intro"><input type="checkbox" class="delete" name="delete_2177" id="delete_2177" /><label for="delete_2177"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T15:15:03Z">09/26/19 (Thu) 15:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2177" onclick="return highlightReply(2177, event)" href="/agg/res/2177#2177">No.</a><a class="post_no" onclick="return citeReply(2177)" href="/agg/res/2177#q2177">2177</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2177">[Reply]</a></p><div class="body"><span class="quote">&gt;/gnfos/</span><br/><a href=https://gnfos.com/jp/res/369680.html>https://gnfos.com/jp/res/369680.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2176" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569510835009.png">1569510835009.png</a> <span class="unimportant">(4.18 MB, 2778x4226, <span class="postfilename" title="5c03fbca35b42028b5646f42fb2b4551.png">5c03fbca35b42028b5646f42fb….png</span>)</span></p><a href="/agg/src/1569510835009.png" target="_blank"><img class="post-image" src="/agg/thumb/1569510835009.png" style="width:168px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2176" ><p class="intro"><input type="checkbox" class="delete" name="delete_2176" id="delete_2176" /><label for="delete_2176"><span class="name">Anonymous</span> <time datetime="2019-09-26T15:15:03Z">09/26/19 (Thu) 15:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2176" onclick="return highlightReply(2176, event)" href="/agg/res/2176#2176">No.</a><a class="post_no" onclick="return citeReply(2176)" href="/agg/res/2176#q2176">2176</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2176">[Reply]</a></p><div class="body">is kitsunemimi a subset of nekomimi or does it stand on it&#39;s own as an entirely new idea?<br/><a href=https://kissu.moe/qa/res/10633.html>https://kissu.moe/qa/res/10633.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2175" data-board="agg"><div class="video-container" data-video="3gpagwpr_TA"><a href="https://youtu.be/3gpagwpr_TA" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/3gpagwpr_TA/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2175" ><p class="intro"><input type="checkbox" class="delete" name="delete_2175" id="delete_2175" /><label for="delete_2175"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T13:50:03Z">09/26/19 (Thu) 13:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2175" onclick="return highlightReply(2175, event)" href="/agg/res/2175#2175">No.</a><a class="post_no" onclick="return citeReply(2175)" href="/agg/res/2175#q2175">2175</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2175">[Reply]</a></p><div class="body"><span class="quote">&gt;gn</span><br/><a href=https://gnfos.com/jp/res/369677.html>https://gnfos.com/jp/res/369677.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2174" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569488877722.png">1569488877722.png</a> <span class="unimportant">(864.6 KB, 841x838, <span class="postfilename">1569484198833.png</span>)</span></p><a href="/agg/src/1569488877722.png" target="_blank"><img class="post-image" src="/agg/thumb/1569488877722.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2174" ><p class="intro"><input type="checkbox" class="delete" name="delete_2174" id="delete_2174" /><label for="delete_2174"><span class="name">Anonymous</span> <time datetime="2019-09-26T09:10:04Z">09/26/19 (Thu) 09:10:04</time></label>&nbsp;<a class="post_no" id="post_no_2174" onclick="return highlightReply(2174, event)" href="/agg/res/2174#2174">No.</a><a class="post_no" onclick="return citeReply(2174)" href="/agg/res/2174#q2174">2174</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2174">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2721.html>http://what-ch.mooo.com/what/res/2721.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2173" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569488171095.jpg">1569488171095.jpg</a> <span class="unimportant">(198.92 KB, 640x800, <span class="postfilename" title="cf26295a0f6e3604815c093ebe4570b4.jpg">cf26295a0f6e3604815c093ebe….jpg</span>)</span></p><a href="/agg/src/1569488171095.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569488171095.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2173" ><p class="intro"><input type="checkbox" class="delete" name="delete_2173" id="delete_2173" /><label for="delete_2173"><span class="name">Anonymous</span> <time datetime="2019-09-26T09:00:06Z">09/26/19 (Thu) 09:00:06</time></label>&nbsp;<a class="post_no" id="post_no_2173" onclick="return highlightReply(2173, event)" href="/agg/res/2173#2173">No.</a><a class="post_no" onclick="return citeReply(2173)" href="/agg/res/2173#q2173">2173</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2173">[Reply]</a></p><div class="body">test<br/><a href=https://kissu.moe/qa/res/10621.html>https://kissu.moe/qa/res/10621.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2172" data-board="agg"><div class="video-container" data-video="DtQviKvrR5c"><a href="https://youtu.be/DtQviKvrR5c" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/DtQviKvrR5c/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2172" ><p class="intro"><input type="checkbox" class="delete" name="delete_2172" id="delete_2172" /><label for="delete_2172"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-26T08:00:06Z">09/26/19 (Thu) 08:00:06</time></label>&nbsp;<a class="post_no" id="post_no_2172" onclick="return highlightReply(2172, event)" href="/agg/res/2172#2172">No.</a><a class="post_no" onclick="return citeReply(2172)" href="/agg/res/2172#q2172">2172</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2172">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369672.html>https://gnfos.com/jp/res/369672.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2171" data-board="agg"><div class="video-container" data-video="X6frLQWOSlQ"><a href="https://youtu.be/X6frLQWOSlQ" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/X6frLQWOSlQ/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2171" ><p class="intro"><input type="checkbox" class="delete" name="delete_2171" id="delete_2171" /><label for="delete_2171"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T08:00:06Z">09/26/19 (Thu) 08:00:06</time></label>&nbsp;<a class="post_no" id="post_no_2171" onclick="return highlightReply(2171, event)" href="/agg/res/2171#2171">No.</a><a class="post_no" onclick="return citeReply(2171)" href="/agg/res/2171#q2171">2171</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2171">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369671.html>https://gnfos.com/jp/res/369671.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2170" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569484654106.png">1569484654106.png</a> <span class="unimportant">(302.31 KB, 600x919, <span class="postfilename">1548220105366.png</span>)</span></p><a href="/agg/src/1569484654106.png" target="_blank"><img class="post-image" src="/agg/thumb/1569484654106.png" style="width:157px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2170" ><p class="intro"><input type="checkbox" class="delete" name="delete_2170" id="delete_2170" /><label for="delete_2170"><span class="name">Anonymous</span> <time datetime="2019-09-26T08:00:05Z">09/26/19 (Thu) 08:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2170" onclick="return highlightReply(2170, event)" href="/agg/res/2170#2170">No.</a><a class="post_no" onclick="return citeReply(2170)" href="/agg/res/2170#q2170">2170</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2170">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2717.html>http://what-ch.mooo.com/what/res/2717.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2169" data-board="agg"><div class="video-container" data-video="3CccfnRpPtM"><a href="https://youtu.be/3CccfnRpPtM" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/3CccfnRpPtM/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2169" ><p class="intro"><input type="checkbox" class="delete" name="delete_2169" id="delete_2169" /><label for="delete_2169"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T07:25:03Z">09/26/19 (Thu) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2169" onclick="return highlightReply(2169, event)" href="/agg/res/2169#2169">No.</a><a class="post_no" onclick="return citeReply(2169)" href="/agg/res/2169#q2169">2169</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2169">[Reply]</a></p><div class="body"><span class="quote">&gt;white women</span><br/><a href=https://gnfos.com/jp/res/369666.html>https://gnfos.com/jp/res/369666.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2168" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569482057338.jpeg">1569482057338.jpeg</a> <span class="unimportant">(451.92 KB, 750x734, <span class="postfilename" title="DF10AE1B-A157-44C6-A1EF-69E400489054.jpeg">DF10AE1B-A157-44C6-A1EF-6….jpeg</span>)</span></p><a href="/agg/src/1569482057338.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569482057338.jpeg" style="width:245px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2168" ><p class="intro"><input type="checkbox" class="delete" name="delete_2168" id="delete_2168" /><label for="delete_2168"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T07:15:04Z">09/26/19 (Thu) 07:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2168" onclick="return highlightReply(2168, event)" href="/agg/res/2168#2168">No.</a><a class="post_no" onclick="return citeReply(2168)" href="/agg/res/2168#q2168">2168</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2168">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369663.html>https://gnfos.com/jp/res/369663.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2167" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569481822620.jpg">1569481822620.jpg</a> <span class="unimportant">(451.18 KB, 1340x1554, <span class="postfilename">1569466159260.jpg</span>)</span></p><a href="/agg/src/1569481822620.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569481822620.jpg" style="width:207px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2167" ><p class="intro"><input type="checkbox" class="delete" name="delete_2167" id="delete_2167" /><label for="delete_2167"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T07:15:03Z">09/26/19 (Thu) 07:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2167" onclick="return highlightReply(2167, event)" href="/agg/res/2167#2167">No.</a><a class="post_no" onclick="return citeReply(2167)" href="/agg/res/2167#q2167">2167</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2167">[Reply]</a></p><div class="body">This is our black panther<br/><a href=https://gnfos.com/jp/res/369660.html>https://gnfos.com/jp/res/369660.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2166" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569478291506.gif">1569478291506.gif</a> <span class="unimportant">(4.05 MB, 540x304, <span class="postfilename" title="482CD82C-6CED-4161-AF0E-FD8DDB0BADDF.gif">482CD82C-6CED-4161-AF0E-FD….gif</span>)</span></p><a href="/agg/src/1569478291506.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569478291506.gif" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2166" ><p class="intro"><input type="checkbox" class="delete" name="delete_2166" id="delete_2166" /><label for="delete_2166"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T06:15:03Z">09/26/19 (Thu) 06:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2166" onclick="return highlightReply(2166, event)" href="/agg/res/2166#2166">No.</a><a class="post_no" onclick="return citeReply(2166)" href="/agg/res/2166#q2166">2166</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2166">[Reply]</a></p><div class="body">I’m hungry<br/><a href=https://gnfos.com/jp/res/369654.html>https://gnfos.com/jp/res/369654.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2165" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569477644299.jpg">1569477644299.jpg</a> <span class="unimportant">(76.74 KB, 920x717, <span class="postfilename" title="__komeiji_satori_and_rich_evans_redlettermedia_and_etc_drawn_by_mefomefo__ce716e4238e423b7236b5d06d60d8e85.jpg">__komeiji_satori_and_rich_….jpg</span>)</span></p><a href="/agg/src/1569477644299.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569477644299.jpg" style="width:308px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2165" ><p class="intro"><input type="checkbox" class="delete" name="delete_2165" id="delete_2165" /><label for="delete_2165"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-26T06:05:03Z">09/26/19 (Thu) 06:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2165" onclick="return highlightReply(2165, event)" href="/agg/res/2165#2165">No.</a><a class="post_no" onclick="return citeReply(2165)" href="/agg/res/2165#q2165">2165</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2165">[Reply]</a></p><div class="body">Bored but not gay.....<br/><a href=https://gnfos.com/jp/res/369652.html>https://gnfos.com/jp/res/369652.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2164" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569477368854.png">1569477368854.png</a> <span class="unimportant">(567.35 KB, 445x798, <span class="postfilename">1569476953131.png</span>)</span></p><a href="/agg/src/1569477368854.png" target="_blank"><img class="post-image" src="/agg/thumb/1569477368854.png" style="width:134px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2164" ><p class="intro"><input type="checkbox" class="delete" name="delete_2164" id="delete_2164" /><label for="delete_2164"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T06:00:04Z">09/26/19 (Thu) 06:00:04</time></label>&nbsp;<a class="post_no" id="post_no_2164" onclick="return highlightReply(2164, event)" href="/agg/res/2164#2164">No.</a><a class="post_no" onclick="return citeReply(2164)" href="/agg/res/2164#q2164">2164</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2164">[Reply]</a></p><div class="body">You. Yes, you. What are you going to accomplish today?<br/><a href=https://gnfos.com/jp/res/369648.html>https://gnfos.com/jp/res/369648.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2163" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569477449798.gif">1569477449798.gif</a> <span class="unimportant">(64.35 KB, 540x304, <span class="postfilename" title="tumblr_inline_nnsvxlt7Hn1r7hgfy_540.gif">tumblr_inline_nnsvxlt7Hn1r….gif</span>)</span></p><a href="/agg/src/1569477449798.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569477449798.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_2163" ><p class="intro"><input type="checkbox" class="delete" name="delete_2163" id="delete_2163" /><label for="delete_2163"><span class="name">Anonymous</span> <time datetime="2019-09-26T06:00:04Z">09/26/19 (Thu) 06:00:04</time></label>&nbsp;<a class="post_no" id="post_no_2163" onclick="return highlightReply(2163, event)" href="/agg/res/2163#2163">No.</a><a class="post_no" onclick="return citeReply(2163)" href="/agg/res/2163#q2163">2163</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2163">[Reply]</a></p><div class="body">Let&#39;s say you turned into a car, also known as a motor vehicle, for whatever reason. What kind of car would you become?<br/><a href=https://kissu.moe/qa/res/10612.html>https://kissu.moe/qa/res/10612.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2162" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569475587773.png">1569475587773.png</a> <span class="unimportant">(1.99 MB, 1280x720, <span class="postfilename" title="Its.Always.Sunny.in.Philadelphia.S11E05.720p.HDTV.x264-AVS.mkv_snapshot_16.22_[2016.02.07_08.17.54].png">Its.Always.Sunny.in.Philad….png</span>)</span></p><a href="/agg/src/1569475587773.png" target="_blank"><img class="post-image" src="/agg/thumb/1569475587773.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2162" ><p class="intro"><input type="checkbox" class="delete" name="delete_2162" id="delete_2162" /><label for="delete_2162"><span class="name">Idiot</span> <time datetime="2019-09-26T05:30:04Z">09/26/19 (Thu) 05:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2162" onclick="return highlightReply(2162, event)" href="/agg/res/2162#2162">No.</a><a class="post_no" onclick="return citeReply(2162)" href="/agg/res/2162#q2162">2162</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2162">[Reply]</a></p><div class="body"><span class="quote">&gt;It&#39;s Always Sunny in Philadelphia 14×01 </span><br/><a href=https://gnfos.com/jp/res/369642.html>https://gnfos.com/jp/res/369642.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2161" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569475521960.jpg">1569475521960.jpg</a> <span class="unimportant">(1.43 MB, 1280x2160, <span class="postfilename">1569454907602.jpg</span>)</span></p><a href="/agg/src/1569475521960.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569475521960.jpg" style="width:142px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2161" ><p class="intro"><input type="checkbox" class="delete" name="delete_2161" id="delete_2161" /><label for="delete_2161"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-26T05:30:04Z">09/26/19 (Thu) 05:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2161" onclick="return highlightReply(2161, event)" href="/agg/res/2161#2161">No.</a><a class="post_no" onclick="return citeReply(2161)" href="/agg/res/2161#q2161">2161</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2161">[Reply]</a></p><div class="body">the &#39;tism<br/><a href=https://gnfos.com/jp/res/369641.html>https://gnfos.com/jp/res/369641.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2160" data-board="agg"><div class="video-container" data-video="zNHMF-8DUJI"><a href="https://youtu.be/zNHMF-8DUJI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/zNHMF-8DUJI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2160" ><p class="intro"><input type="checkbox" class="delete" name="delete_2160" id="delete_2160" /><label for="delete_2160"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-26T05:30:04Z">09/26/19 (Thu) 05:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2160" onclick="return highlightReply(2160, event)" href="/agg/res/2160#2160">No.</a><a class="post_no" onclick="return citeReply(2160)" href="/agg/res/2160#q2160">2160</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2160">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369640.html>https://gnfos.com/jp/res/369640.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2159" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569475322000.png">1569475322000.png</a> <span class="unimportant">(1.16 MB, 750x1334, <span class="postfilename" title="1FF1AB96-857C-46BB-871A-61F6265A6FDC.png">1FF1AB96-857C-46BB-871A-61….png</span>)</span></p><a href="/agg/src/1569475322000.png" target="_blank"><img class="post-image" src="/agg/thumb/1569475322000.png" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2159" ><p class="intro"><input type="checkbox" class="delete" name="delete_2159" id="delete_2159" /><label for="delete_2159"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T05:25:03Z">09/26/19 (Thu) 05:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2159" onclick="return highlightReply(2159, event)" href="/agg/res/2159#2159">No.</a><a class="post_no" onclick="return citeReply(2159)" href="/agg/res/2159#q2159">2159</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2159">[Reply]</a></p><div class="body">Based<br/><a href=https://gnfos.com/jp/res/369638.html>https://gnfos.com/jp/res/369638.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2158" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569470972556.jpg">1569470972556.jpg</a> <span class="unimportant">(584.04 KB, 926x1852, <span class="postfilename" title="1848b68db5a0c28c1639609d0cbca03ac7f584a8.jpg">1848b68db5a0c28c1639609d0c….jpg</span>)</span></p><a href="/agg/src/1569470972556.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569470972556.png" style="width:128px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2158" ><p class="intro"><input type="checkbox" class="delete" name="delete_2158" id="delete_2158" /><label for="delete_2158"><span class="name">Anonymous</span> <time datetime="2019-09-26T04:10:03Z">09/26/19 (Thu) 04:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2158" onclick="return highlightReply(2158, event)" href="/agg/res/2158#2158">No.</a><a class="post_no" onclick="return citeReply(2158)" href="/agg/res/2158#q2158">2158</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2158">[Reply]</a></p><div class="body">What are your feelings about thick eyebrows? Do you like a certain kind of shape to them like the oval shaped ones or the sharper ones? Whose eyebrows are your favorite?<br/><a href=https://kissu.moe/qa/res/10608.html>https://kissu.moe/qa/res/10608.html</a></div></div><br class="clear"/><hr/></div>
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
		                <a id="archive-link-bottom" href="/agg/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/2" method="get"><input type="submit" value="Next" /></form>
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