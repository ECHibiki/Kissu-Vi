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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-26.jpg" alt="" />
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
<span  style="display:none"><input  type="text"  name="n2epfz9o8lygk6♒ub1ia3sjw7450vh"  value=";&#69;w&#113;N*d9⛳PL☖])(&#121;ulRMJ_T D&#9932;?\=&#96;o⛗.n}&#33;gxc⚫&#106;XW&lt; A^Gb'v2&#85;5&#9782;&#112;+z&#9759;&#114;O#&#90;,&#36;Qa&#52;☄@kS7BYF&#75;&#116;&#86;⚇&#109;&#115;i1&#72;"></span>
<div style="display:none"><input type="text" name="username" value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\"></div>
<input type="hidden" name="board" value="agg">
<textarea name="lastname" style="display:none">g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" name="search" value="">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea   style="display:none"   name="user">&#62;N⚤TI4`⚩~y♹*ZP%E8?&#117;&#83;&#43;1&#105;L&#65;,hj☭:R$&#40;0&#53;={V|}tf7q/HX@]K.&#9934;W⛏p2&#92;_&#103;&#115;&#98;r&amp;</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="7ykdefr3jg0ioqn2491mbap" value=""></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none" ><input type="text" name="2x⛝tavigslre96d83o7b♉yn1" value="" ></span >
			
			
				<input style="display:none" type="text" name="iaze6dys♅pc97xrj8" value="">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<div style="display:none"><input type="text" name="url" value="24827"></div>
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input type="hidden" value="" name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf">
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<span style="display:none"><input type="text" name="text" value="WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?"></span>
				
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
								<span style="display:none"><input type="text" name="firstname" value="H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t"></span>
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
		<div class="thread" id="thread_1797" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568264058597.jpg">1568264058597.jpg</a> <span class="unimportant">(42.74 KB, 768x900, <span class="postfilename">misc 2168.jpg</span>)</span></p><a href="/agg/src/1568264058597.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568264058597.png" style="width:205px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1797" ><p class="intro"><input type="checkbox" class="delete" name="delete_1797" id="delete_1797" /><label for="delete_1797"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:33Z">09/20/19 (Fri) 15:38:33</time></label>&nbsp;<a class="post_no" id="post_no_1797" onclick="return highlightReply(1797, event)" href="/agg/res/1797#1797">No.</a><a class="post_no" onclick="return citeReply(1797)" href="/agg/res/1797#q1797">1797</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1797">[Reply]</a></p><div class="body">what if real life was actually just a dream?<br/><a href=http://what-ch.mooo.com/what/res/2510.html>http://what-ch.mooo.com/what/res/2510.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1796" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568153161430.jpg">1568153161430.jpg</a> <span class="unimportant">(162.95 KB, 1280x680, <span class="postfilename" title="mpv-Kairo 2001 720p HDTV x264 AAC-DoA-00:13:55.001.jpg">mpv-Kairo 2001 720p HDTV x….jpg</span>)</span></p><a href="/agg/src/1568153161430.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568153161430.png" style="width:240px;height:128px" alt="" /></a></div>    </div>    <div class="post op" id="op_1796" ><p class="intro"><input type="checkbox" class="delete" name="delete_1796" id="delete_1796" /><label for="delete_1796"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:32Z">09/20/19 (Fri) 15:38:32</time></label>&nbsp;<a class="post_no" id="post_no_1796" onclick="return highlightReply(1796, event)" href="/agg/res/1796#1796">No.</a><a class="post_no" onclick="return citeReply(1796)" href="/agg/res/1796#q1796">1796</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1796">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2487.html>http://what-ch.mooo.com/what/res/2487.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1795" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568139053715.png">1568139053715.png</a> <span class="unimportant">(697.48 KB, 848x1200, <span class="postfilename">76604907_p0.png</span>)</span></p><a href="/agg/src/1568139053715.png" target="_blank"><img class="post-image" src="/agg/thumb/1568139053715.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1795" ><p class="intro"><input type="checkbox" class="delete" name="delete_1795" id="delete_1795" /><label for="delete_1795"><span class="name">Anonymous</span> <time datetime="2019-09-10T18:15:03Z">09/10/19 (Tue) 18:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1795" onclick="return highlightReply(1795, event)" href="/agg/res/1795#1795">No.</a><a class="post_no" onclick="return citeReply(1795)" href="/agg/res/1795#q1795">1795</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1795">[Reply]</a></p><div class="body">I love rogues so much, the constant action, the stealth, poisons and bleed, stunlocking people to death, it&#39;s great.<br/><a href=https://kissu.moe/qa/res/8147.html>https://kissu.moe/qa/res/8147.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1794" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568125238997.gif">1568125238997.gif</a> <span class="unimportant">(6.68 MB, 854x480, <span class="postfilename" title="cf730fd399613fda444025c161a3aee1.gif">cf730fd399613fda444025c161….gif</span>)</span></p><a href="/agg/src/1568125238997.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568125238997.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1794" ><p class="intro"><input type="checkbox" class="delete" name="delete_1794" id="delete_1794" /><label for="delete_1794"><span class="name">Anonymous</span> <time datetime="2019-09-10T14:25:03Z">09/10/19 (Tue) 14:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1794" onclick="return highlightReply(1794, event)" href="/agg/res/1794#1794">No.</a><a class="post_no" onclick="return citeReply(1794)" href="/agg/res/1794#q1794">1794</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1794">[Reply]</a></p><div class="body">If experience is required to make good posts then one should expect to see a greater amount of those as time passes, since the community accumulates experience.<br/>But that doesn&#39;t happen. Why?<br/>Does one need specific experiences? Does it go beyond time spent, and if so how? After one goes through those experiences, what motivates quality posting?<br/><a href=https://kissu.moe/qa/res/8134.html>https://kissu.moe/qa/res/8134.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1793" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568103031493.png">1568103031493.png</a> <span class="unimportant">(133.2 KB, 1222x250, <span class="postfilename">1567977837232.png</span>)</span></p><a href="/agg/src/1568103031493.png" target="_blank"><img class="post-image" src="/agg/thumb/1568103031493.png" style="width:255px;height:52px" alt="" /></a></div>    </div>    <div class="post op" id="op_1793" ><p class="intro"><input type="checkbox" class="delete" name="delete_1793" id="delete_1793" /><label for="delete_1793"><span class="name">Anonymous</span> <time datetime="2019-09-10T08:15:04Z">09/10/19 (Tue) 08:15:04</time></label>&nbsp;<a class="post_no" id="post_no_1793" onclick="return highlightReply(1793, event)" href="/agg/res/1793#1793">No.</a><a class="post_no" onclick="return citeReply(1793)" href="/agg/res/1793#q1793">1793</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1793">[Reply]</a></p><div class="body">Is this true? <br/><br/>(remade this thread after being too hasty to delete it, there weren&#39;t any comments yet)<br/><a href=https://kissu.moe/qa/res/8122.html>https://kissu.moe/qa/res/8122.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1792" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568102555468.jpg">1568102555468.jpg</a> <span class="unimportant">(391.56 KB, 666x658, <span class="postfilename">51090902_p0.jpg</span>)</span></p><a href="/agg/src/1568102555468.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568102555468.png" style="width:255px;height:252px" alt="" /></a></div>    </div>    <div class="post op" id="op_1792" ><p class="intro"><input type="checkbox" class="delete" name="delete_1792" id="delete_1792" /><label for="delete_1792"><span class="name">Cirno</span> <time datetime="2019-09-10T08:05:05Z">09/10/19 (Tue) 08:05:05</time></label>&nbsp;<a class="post_no" id="post_no_1792" onclick="return highlightReply(1792, event)" href="/agg/res/1792#1792">No.</a><a class="post_no" onclick="return citeReply(1792)" href="/agg/res/1792#q1792">1792</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1792">[Reply]</a></p><div class="body">i love the rain its cool and fine<br/>i wish that it&#39;d rain all the time<br/>if it did then that&#39;d be great<br/>i&#39;d post about it on /qa/<br/><a href=https://kissu.moe/qa/res/8120.html>https://kissu.moe/qa/res/8120.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1791" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568100949179.png">1568100949179.png</a> <span class="unimportant">(133.2 KB, 1222x250, <span class="postfilename">1567977837232.png</span>)</span></p><a href="/agg/src/1568100949179.png" target="_blank"><img class="post-image" src="/agg/thumb/1568100949179.png" style="width:255px;height:52px" alt="" /></a></div>    </div>    <div class="post op" id="op_1791" ><p class="intro"><input type="checkbox" class="delete" name="delete_1791" id="delete_1791" /><label for="delete_1791"><span class="name">Cirno</span> <time datetime="2019-09-10T07:40:04Z">09/10/19 (Tue) 07:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1791" onclick="return highlightReply(1791, event)" href="/agg/res/1791#1791">No.</a><a class="post_no" onclick="return citeReply(1791)" href="/agg/res/1791#q1791">1791</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1791">[Reply]</a></p><div class="body">were they right?<br/><a href=https://kissu.moe/qa/res/8117.html>https://kissu.moe/qa/res/8117.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1790" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568100943619.png">1568100943619.png</a> <span class="unimportant">(1.3 MB, 1414x1000, <span class="postfilename" title="__original_drawn_by_erica_naze1940__f3cb4a8f29fa56b09d5016c54e3ef165.png">__original_drawn_by_erica_….png</span>)</span></p><a href="/agg/src/1568100943619.png" target="_blank"><img class="post-image" src="/agg/thumb/1568100943619.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1790" ><p class="intro"><input type="checkbox" class="delete" name="delete_1790" id="delete_1790" /><label for="delete_1790"><span class="name">Cirno</span> <time datetime="2019-09-10T07:40:04Z">09/10/19 (Tue) 07:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1790" onclick="return highlightReply(1790, event)" href="/agg/res/1790#1790">No.</a><a class="post_no" onclick="return citeReply(1790)" href="/agg/res/1790#q1790">1790</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1790">[Reply]</a></p><div class="body">War, children<br/>It&#39;s just a shot away!<br/><a href=https://kissu.moe/qa/res/8116.html>https://kissu.moe/qa/res/8116.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1789" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568099381785.png">1568099381785.png</a> <span class="unimportant">(1.12 MB, 1440x1080, <span class="postfilename" title="[pseudo] Yu Yu Hakusho 058 [1080p] [h.265].mkv_snapshot_12.39_[2018.02.15_07.49.44].png">[pseudo] Yu Yu Hakusho 058….png</span>)</span></p><a href="/agg/src/1568099381785.png" target="_blank"><img class="post-image" src="/agg/thumb/1568099381785.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1789" ><p class="intro"><input type="checkbox" class="delete" name="delete_1789" id="delete_1789" /><label for="delete_1789"><span class="name">Cirno</span> <time datetime="2019-09-10T07:10:03Z">09/10/19 (Tue) 07:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1789" onclick="return highlightReply(1789, event)" href="/agg/res/1789#1789">No.</a><a class="post_no" onclick="return citeReply(1789)" href="/agg/res/1789#q1789">1789</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1789">[Reply]</a></p><div class="body">I&#39;m bored, /qa/<br/>it&#39;s hard to get used to a slower board, even if it&#39;s significantly better than what we had<br/><a href=https://kissu.moe/qa/res/8113.html>https://kissu.moe/qa/res/8113.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1788" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/tMFzejuUVK4" allowfullscreen></iframe>    <div class="post op" id="op_1788" ><p class="intro"><input type="checkbox" class="delete" name="delete_1788" id="delete_1788" /><label for="delete_1788"><span class="name">Cirno</span> <time datetime="2019-09-10T05:30:03Z">09/10/19 (Tue) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1788" onclick="return highlightReply(1788, event)" href="/agg/res/1788#1788">No.</a><a class="post_no" onclick="return citeReply(1788)" href="/agg/res/1788#q1788">1788</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1788">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/8104.html>https://kissu.moe/qa/res/8104.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1787" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568089950988.png">1568089950988.png</a> <span class="unimportant">(17.75 KB, 462x643, <span class="postfilename">suggest.png</span>)</span></p><a href="/agg/src/1568089950988.png" target="_blank"><img class="post-image" src="/agg/thumb/1568089950988.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1787" ><p class="intro"><input type="checkbox" class="delete" name="delete_1787" id="delete_1787" /><label for="delete_1787"><span class="name">Cirno</span> <time datetime="2019-09-10T04:35:06Z">09/10/19 (Tue) 04:35:06</time></label>&nbsp;<a class="post_no" id="post_no_1787" onclick="return highlightReply(1787, event)" href="/agg/res/1787#1787">No.</a><a class="post_no" onclick="return citeReply(1787)" href="/agg/res/1787#q1787">1787</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1787">[Reply]</a></p><div class="body">I have a lot of VN(most are eroge) and i think 2 JRPGs, any suggestions on what to play? I can&#39;t decide.<br/><a href=https://kissu.moe/qa/res/8074.html>https://kissu.moe/qa/res/8074.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1786" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568073436821.png">1568073436821.png</a> <span class="unimportant">(21.21 KB, 600x600, <span class="postfilename">40076585_p0.png</span>)</span></p><a href="/agg/src/1568073436821.png" target="_blank"><img class="post-image" src="/agg/thumb/1568073436821.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1786" ><p class="intro"><input type="checkbox" class="delete" name="delete_1786" id="delete_1786" /><label for="delete_1786"><span class="name">Cirno</span> <time datetime="2019-09-10T00:00:04Z">09/10/19 (Tue) 00:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1786" onclick="return highlightReply(1786, event)" href="/agg/res/1786#1786">No.</a><a class="post_no" onclick="return citeReply(1786)" href="/agg/res/1786#q1786">1786</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1786">[Reply]</a></p><div class="body">Cirno riding a banana again<br/><a href=https://kissu.moe/qa/res/8042.html>https://kissu.moe/qa/res/8042.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1785" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568070706119.jpg">1568070706119.jpg</a> <span class="unimportant">(781.58 KB, 1024x1125, <span class="postfilename">21135753_p0.jpg</span>)</span></p><a href="/agg/src/1568070706119.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568070706119.png" style="width:231px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1785" ><p class="intro"><input type="checkbox" class="delete" name="delete_1785" id="delete_1785" /><label for="delete_1785"><span class="name">Cirno</span> <time datetime="2019-09-09T23:15:03Z">09/09/19 (Mon) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1785" onclick="return highlightReply(1785, event)" href="/agg/res/1785#1785">No.</a><a class="post_no" onclick="return citeReply(1785)" href="/agg/res/1785#q1785">1785</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1785">[Reply]</a></p><div class="body">Cirno riding a banana.<br/><a href=https://kissu.moe/qa/res/8037.html>https://kissu.moe/qa/res/8037.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1784" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568052120983.png">1568052120983.png</a> <span class="unimportant">(533.74 KB, 650x720, <span class="postfilename">himawari.png</span>)</span></p><a href="/agg/src/1568052120983.png" target="_blank"><img class="post-image" src="/agg/thumb/1568052120983.png" style="width:230px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1784" ><p class="intro"><input type="checkbox" class="delete" name="delete_1784" id="delete_1784" /><label for="delete_1784"><span class="name">Cirno</span> <time datetime="2019-09-09T18:05:03Z">09/09/19 (Mon) 18:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1784" onclick="return highlightReply(1784, event)" href="/agg/res/1784#1784">No.</a><a class="post_no" onclick="return citeReply(1784)" href="/agg/res/1784#q1784">1784</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1784">[Reply]</a></p><div class="body">just spent three hours trying to fix my router because Opera&#39;s password manager slipped &#39;root&#39; into the &#39;Client ID to send when requesting DHCP&#39; field without my noticing....<br/><a href=https://kissu.moe/qa/res/8024.html>https://kissu.moe/qa/res/8024.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1783" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568041634135.jpg">1568041634135.jpg</a> <span class="unimportant">(753.75 KB, 1000x1500, <span class="postfilename">281_tamamo_summer110.jpg</span>)</span></p><a href="/agg/src/1568041634135.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568041634135.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1783" ><p class="intro"><input type="checkbox" class="delete" name="delete_1783" id="delete_1783" /><label for="delete_1783"><span class="name">Anonymous</span> <time datetime="2019-09-09T15:10:02Z">09/09/19 (Mon) 15:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1783" onclick="return highlightReply(1783, event)" href="/agg/res/1783#1783">No.</a><a class="post_no" onclick="return citeReply(1783)" href="/agg/res/1783#q1783">1783</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1783">[Reply]</a></p><div class="body">/what/ - ...<br/>The Society for the Study of Hairy pOOsy<br/><a href=http://what-ch.mooo.com/what/res/2476.html>http://what-ch.mooo.com/what/res/2476.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1782" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568030966737.jpg">1568030966737.jpg</a> <span class="unimportant">(97.76 KB, 572x800, <span class="postfilename" title="5f4278d035a936e136b7610a559ac120.jpg">5f4278d035a936e136b7610a55….jpg</span>)</span></p><a href="/agg/src/1568030966737.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568030966737.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1782" ><p class="intro"><input type="checkbox" class="delete" name="delete_1782" id="delete_1782" /><label for="delete_1782"><span class="name">Cirno</span> <time datetime="2019-09-09T12:10:04Z">09/09/19 (Mon) 12:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1782" onclick="return highlightReply(1782, event)" href="/agg/res/1782#1782">No.</a><a class="post_no" onclick="return citeReply(1782)" href="/agg/res/1782#q1782">1782</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1782">[Reply]</a></p><div class="body">Hello can I make a <span class="glowblue">question</span> about /qa/<br/>I never really browsed the board much but I heard a lot of people got banned<br/><br/>I read some people complain about the mods and some other people complain about the board getting raided by discord/IRC/other parallel communities<br/><br/>who is in the right here?<br/><a href=https://kissu.moe/qa/res/8011.html>https://kissu.moe/qa/res/8011.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1781" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568016286951.jpeg">1568016286951.jpeg</a> <span class="unimportant">(96.38 KB, 921x691, <span class="postfilename" title="D78A812B-E95A-4BD7-B8D8-BE6FCF6AF253.jpeg">D78A812B-E95A-4BD7-B8D8-B….jpeg</span>)</span></p><a href="/agg/src/1568016286951.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568016286951.png" style="width:255px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_1781" ><p class="intro"><input type="checkbox" class="delete" name="delete_1781" id="delete_1781" /><label for="delete_1781"><span class="name">jevin</span> <time datetime="2019-09-09T08:05:03Z">09/09/19 (Mon) 08:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1781" onclick="return highlightReply(1781, event)" href="/agg/res/1781#1781">No.</a><a class="post_no" onclick="return citeReply(1781)" href="/agg/res/1781#q1781">1781</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1781">[Reply]</a></p><div class="body">endless guilt-free promises<br/><a href=https://kissu.moe/qa/res/8002.html>https://kissu.moe/qa/res/8002.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1780" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568011547060.jpg">1568011547060.jpg</a> <span class="unimportant">(703.34 KB, 3541x3896, <span class="postfilename">miscellaneous 1837.jpg</span>)</span></p><a href="/agg/src/1568011547060.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568011547060.png" style="width:219px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1780" ><p class="intro"><input type="checkbox" class="delete" name="delete_1780" id="delete_1780" /><label for="delete_1780"><span class="name">Anonymous</span> <time datetime="2019-09-09T06:50:03Z">09/09/19 (Mon) 06:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1780" onclick="return highlightReply(1780, event)" href="/agg/res/1780#1780">No.</a><a class="post_no" onclick="return citeReply(1780)" href="/agg/res/1780#q1780">1780</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1780">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2467.html>http://what-ch.mooo.com/what/res/2467.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1779" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568010416708.png">1568010416708.png</a> <span class="unimportant">(943.63 KB, 1280x720, <span class="postfilename">maitetsu画像_20190909_022611.png</span>)</span></p><a href="/agg/src/1568010416708.png" target="_blank"><img class="post-image" src="/agg/thumb/1568010416708.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1779" ><p class="intro"><input type="checkbox" class="delete" name="delete_1779" id="delete_1779" /><label for="delete_1779"><span class="name">Cirno</span> <time datetime="2019-09-09T06:30:18Z">09/09/19 (Mon) 06:30:18</time></label>&nbsp;<a class="post_no" id="post_no_1779" onclick="return highlightReply(1779, event)" href="/agg/res/1779#1779">No.</a><a class="post_no" onclick="return citeReply(1779)" href="/agg/res/1779#q1779">1779</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1779">[Reply]</a></p><div class="body">Hello /qa/. This is my imouto and gf, Hibiki<br/><a href=https://kissu.moe/qa/res/7980.html>https://kissu.moe/qa/res/7980.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1778" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568007786951.jpg">1568007786951.jpg</a> <span class="unimportant">(477.27 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 08 [720p].mkv_snapshot_02.38_[2019.09.08_13.17.25].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1568007786951.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568007786951.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1778" ><p class="intro"><input type="checkbox" class="delete" name="delete_1778" id="delete_1778" /><label for="delete_1778"><span class="name">Cirno</span> <time datetime="2019-09-09T05:45:03Z">09/09/19 (Mon) 05:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1778" onclick="return highlightReply(1778, event)" href="/agg/res/1778#1778">No.</a><a class="post_no" onclick="return citeReply(1778)" href="/agg/res/1778#q1778">1778</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1778">[Reply]</a></p><div class="body">Pretty amazing how the lack of focus on a certain character made this episode so bearable...<br/><a href=https://kissu.moe/qa/res/7971.html>https://kissu.moe/qa/res/7971.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/19" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a class="selected">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/21" method="get"><input type="submit" value="Next" /></form>
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