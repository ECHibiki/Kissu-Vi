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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-27.jpg" alt="" />
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
<input value="" name="user" type="hidden">
<input type="hidden" name="lastname" value="">
<input type="hidden" name="board" value="agg">
<input  name="vwdrx5ukc8⚶6yftnl♑"  value="&#99;|x☁-☬vKNo&#121;m☀`GQwd'Ti♴ O☪L3&gt;l6k&#83;9U&#37;&#46;&#9840;1V=_(8&#66;nu&#112;Z&amp;&lt;&#93;&#53;2"  type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea  name="login"  style="display:none">x}FKalHy⛼?45{☓3twn/'♌26X⛩!$%#;hGO8&gt;@~zJS^0⚟Iod&lt;j[q(NALVfQ*bW=u ,)`r7mC|e-.☰c&amp;i♛⛗sv:T9_MEPgB]1Dk Z+</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<span style="display:none"><input type="text" name="text" value=""></span>
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="q" value="⛥VvG7P~ryNq}dC^☵u#/⛺$U⛪0e@Fm*)Yc">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" value="" name="ghndafeicmvp7w9z306421♐8lq">
			
			
				<input value="" name="w☖f⛡aigq7oc" type="hidden">
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

<input type="hidden" name="hash" value="1e52d5205b50977227181f21055a9f301aa58ce3">
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
		<div class="thread" id="thread_1817" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568908983127.jpg">1568908983127.jpg</a> <span class="unimportant">(93.81 KB, 615x863, <span class="postfilename">1568905077832.jpg</span>)</span></p><a href="/agg/src/1568908983127.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568908983127.png" style="width:172px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1817" ><p class="intro"><input type="checkbox" class="delete" name="delete_1817" id="delete_1817" /><label for="delete_1817"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:17Z">09/20/19 (Fri) 15:39:17</time></label>&nbsp;<a class="post_no" id="post_no_1817" onclick="return highlightReply(1817, event)" href="/agg/res/1817#1817">No.</a><a class="post_no" onclick="return citeReply(1817)" href="/agg/res/1817#q1817">1817</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1817">[Reply]</a></p><div class="body">My future gf<br/><a href=http://what-ch.mooo.com/what/res/2635.html>http://what-ch.mooo.com/what/res/2635.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1816" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568905848395.jpeg">1568905848395.jpeg</a> <span class="unimportant">(603.76 KB, 2000x1404, <span class="postfilename" title="5acbae43776b2dd75fb12520def815d4.jpeg">5acbae43776b2dd75fb12520d….jpeg</span>)</span></p><a href="/agg/src/1568905848395.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568905848395.png" style="width:240px;height:169px" alt="" /></a></div>    </div>    <div class="post op" id="op_1816" ><p class="intro"><input type="checkbox" class="delete" name="delete_1816" id="delete_1816" /><label for="delete_1816"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:15Z">09/20/19 (Fri) 15:39:15</time></label>&nbsp;<a class="post_no" id="post_no_1816" onclick="return highlightReply(1816, event)" href="/agg/res/1816#1816">No.</a><a class="post_no" onclick="return citeReply(1816)" href="/agg/res/1816#q1816">1816</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1816">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2634.html>http://what-ch.mooo.com/what/res/2634.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1815" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568626943992.jpg">1568626943992.jpg</a> <span class="unimportant">(84.17 KB, 886x1181, <span class="postfilename">IMG_20190722_132007_439.jpg</span>)</span></p><a href="/agg/src/1568626943992.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568626943992.png" style="width:181px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1815" ><p class="intro"><input type="checkbox" class="delete" name="delete_1815" id="delete_1815" /><label for="delete_1815"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:15Z">09/20/19 (Fri) 15:39:15</time></label>&nbsp;<a class="post_no" id="post_no_1815" onclick="return highlightReply(1815, event)" href="/agg/res/1815#1815">No.</a><a class="post_no" onclick="return citeReply(1815)" href="/agg/res/1815#q1815">1815</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1815">[Reply]</a></p><div class="body">I&#39;m not happy with the way my life progresses (rather, stagnates), so here is this image<br/><a href=http://what-ch.mooo.com/what/res/2577.html>http://what-ch.mooo.com/what/res/2577.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1814" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568845291457.png">1568845291457.png</a> <span class="unimportant">(3.65 MB, 2880x1440, <span class="postfilename">Screenshot_20190918-181139.png</span>)</span></p><a href="/agg/src/1568845291457.png" target="_blank"><img class="post-image" src="/agg/thumb/1568845291457.png" style="width:240px;height:120px" alt="" /></a></div>    </div>    <div class="post op" id="op_1814" ><p class="intro"><input type="checkbox" class="delete" name="delete_1814" id="delete_1814" /><label for="delete_1814"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:04Z">09/20/19 (Fri) 15:39:04</time></label>&nbsp;<a class="post_no" id="post_no_1814" onclick="return highlightReply(1814, event)" href="/agg/res/1814#1814">No.</a><a class="post_no" onclick="return citeReply(1814)" href="/agg/res/1814#q1814">1814</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1814">[Reply]</a></p><div class="body">I got 8ssr in 9 pulls but no asuka ninomiya that I was rolling for -_-<br/><a href=http://what-ch.mooo.com/what/res/2621.html>http://what-ch.mooo.com/what/res/2621.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1813" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568761562785.jpeg">1568761562785.jpeg</a> <span class="unimportant">(603.76 KB, 2000x1404, <span class="postfilename" title="5acbae43776b2dd75fb12520def815d4.jpeg">5acbae43776b2dd75fb12520d….jpeg</span>)</span></p><a href="/agg/src/1568761562785.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568761562785.png" style="width:240px;height:169px" alt="" /></a></div>    </div>    <div class="post op" id="op_1813" ><p class="intro"><input type="checkbox" class="delete" name="delete_1813" id="delete_1813" /><label for="delete_1813"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:02Z">09/20/19 (Fri) 15:39:02</time></label>&nbsp;<a class="post_no" id="post_no_1813" onclick="return highlightReply(1813, event)" href="/agg/res/1813#1813">No.</a><a class="post_no" onclick="return citeReply(1813)" href="/agg/res/1813#q1813">1813</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1813">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2602.html>http://what-ch.mooo.com/what/res/2602.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1812" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568584564399.png">1568584564399.png</a> <span class="unimportant">(178.01 KB, 640x426, <span class="postfilename">life.png</span>)</span></p><a href="/agg/src/1568584564399.png" target="_blank"><img class="post-image" src="/agg/thumb/1568584564399.png" style="width:240px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1812" ><p class="intro"><input type="checkbox" class="delete" name="delete_1812" id="delete_1812" /><label for="delete_1812"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:02Z">09/20/19 (Fri) 15:39:02</time></label>&nbsp;<a class="post_no" id="post_no_1812" onclick="return highlightReply(1812, event)" href="/agg/res/1812#1812">No.</a><a class="post_no" onclick="return citeReply(1812)" href="/agg/res/1812#q1812">1812</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1812">[Reply]</a></p><div class="body"><a href="https://crystal.cafe/b/" rel="nofollow" target="_blank">https://crystal.cafe/b/</a><br/>GET IN HERE<br/><a href=http://what-ch.mooo.com/what/res/2564.html>http://what-ch.mooo.com/what/res/2564.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1811" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568482160356.png">1568482160356.png</a> <span class="unimportant">(2.14 MB, 1500x2121, <span class="postfilename">76784139_p0.png</span>)</span></p><a href="/agg/src/1568482160356.png" target="_blank"><img class="post-image" src="/agg/thumb/1568482160356.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1811" ><p class="intro"><input type="checkbox" class="delete" name="delete_1811" id="delete_1811" /><label for="delete_1811"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:58Z">09/20/19 (Fri) 15:38:58</time></label>&nbsp;<a class="post_no" id="post_no_1811" onclick="return highlightReply(1811, event)" href="/agg/res/1811#1811">No.</a><a class="post_no" onclick="return citeReply(1811)" href="/agg/res/1811#q1811">1811</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1811">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2541.html>http://what-ch.mooo.com/what/res/2541.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1810" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568836820706.gif">1568836820706.gif</a> <span class="unimportant">(4.05 MB, 540x304, <span class="postfilename">0f8.gif</span>)</span></p><a href="/agg/src/1568836820706.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568836820706.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1810" ><p class="intro"><input type="checkbox" class="delete" name="delete_1810" id="delete_1810" /><label for="delete_1810"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:49Z">09/20/19 (Fri) 15:38:49</time></label>&nbsp;<a class="post_no" id="post_no_1810" onclick="return highlightReply(1810, event)" href="/agg/res/1810#1810">No.</a><a class="post_no" onclick="return citeReply(1810)" href="/agg/res/1810#q1810">1810</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1810">[Reply]</a></p><div class="body">god i wish that was me<br/><a href=http://what-ch.mooo.com/what/res/2620.html>http://what-ch.mooo.com/what/res/2620.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1809" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568776171140.jpg">1568776171140.jpg</a> <span class="unimportant">(378.18 KB, 720x1080, <span class="postfilename">76432756_p0.jpg</span>)</span></p><a href="/agg/src/1568776171140.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568776171140.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1809" ><p class="intro"><input type="checkbox" class="delete" name="delete_1809" id="delete_1809" /><label for="delete_1809"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:48Z">09/20/19 (Fri) 15:38:48</time></label>&nbsp;<a class="post_no" id="post_no_1809" onclick="return highlightReply(1809, event)" href="/agg/res/1809#1809">No.</a><a class="post_no" onclick="return citeReply(1809)" href="/agg/res/1809#q1809">1809</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1809">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2611.html>http://what-ch.mooo.com/what/res/2611.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1808" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568717664898.jpg">1568717664898.jpg</a> <span class="unimportant">(237.47 KB, 1200x1221, <span class="postfilename">01.jpg</span>)</span></p><a href="/agg/src/1568717664898.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568717664898.png" style="width:236px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1808" ><p class="intro"><input type="checkbox" class="delete" name="delete_1808" id="delete_1808" /><label for="delete_1808"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:47Z">09/20/19 (Fri) 15:38:47</time></label>&nbsp;<a class="post_no" id="post_no_1808" onclick="return highlightReply(1808, event)" href="/agg/res/1808#1808">No.</a><a class="post_no" onclick="return citeReply(1808)" href="/agg/res/1808#q1808">1808</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1808">[Reply]</a></p><div class="body">Woah<br/><a href=http://what-ch.mooo.com/what/res/2595.html>http://what-ch.mooo.com/what/res/2595.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1807" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568199166484.jpg">1568199166484.jpg</a> <span class="unimportant">(216.67 KB, 594x681, <span class="postfilename">misc 2210.jpg</span>)</span></p><a href="/agg/src/1568199166484.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568199166484.png" style="width:210px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1807" ><p class="intro"><input type="checkbox" class="delete" name="delete_1807" id="delete_1807" /><label for="delete_1807"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:47Z">09/20/19 (Fri) 15:38:47</time></label>&nbsp;<a class="post_no" id="post_no_1807" onclick="return highlightReply(1807, event)" href="/agg/res/1807#1807">No.</a><a class="post_no" onclick="return citeReply(1807)" href="/agg/res/1807#q1807">1807</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1807">[Reply]</a></p><div class="body">are there any girls here?<br/><a href=http://what-ch.mooo.com/what/res/2498.html>http://what-ch.mooo.com/what/res/2498.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1806" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568668575760.jpg">1568668575760.jpg</a> <span class="unimportant">(719.19 KB, 1280x1831, <span class="postfilename" title="1482954-25d3d7a976-00000020.jpg">1482954-25d3d7a976-0000002….jpg</span>)</span></p><a href="/agg/src/1568668575760.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568668575760.png" style="width:168px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1806" ><p class="intro"><input type="checkbox" class="delete" name="delete_1806" id="delete_1806" /><label for="delete_1806"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:45Z">09/20/19 (Fri) 15:38:45</time></label>&nbsp;<a class="post_no" id="post_no_1806" onclick="return highlightReply(1806, event)" href="/agg/res/1806#1806">No.</a><a class="post_no" onclick="return citeReply(1806)" href="/agg/res/1806#q1806">1806</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1806">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2586.html>http://what-ch.mooo.com/what/res/2586.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1805" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568529811032.png">1568529811032.png</a> <span class="unimportant">(2.19 MB, 1902x921, <span class="postfilename">beach.png</span>)</span></p><a href="/agg/src/1568529811032.png" target="_blank"><img class="post-image" src="/agg/thumb/1568529811032.png" style="width:240px;height:117px" alt="" /></a></div>    </div>    <div class="post op" id="op_1805" ><p class="intro"><input type="checkbox" class="delete" name="delete_1805" id="delete_1805" /><label for="delete_1805"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:40Z">09/20/19 (Fri) 15:38:40</time></label>&nbsp;<a class="post_no" id="post_no_1805" onclick="return highlightReply(1805, event)" href="/agg/res/1805#1805">No.</a><a class="post_no" onclick="return citeReply(1805)" href="/agg/res/1805#q1805">1805</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1805">[Reply]</a></p><div class="body">you wake up in your cheap motel room on tokashiki island<br/>it&#39;s ten am and you&#39;ve had a long restful sleep, you stretch out on the bed and it&#39;s mostly quite save for the odd bird call<br/><br/>you make some coffee and enjoy it on the balcony with cigarette, that you no longer feel guilty about because you&#39;re already dying<br/><br/>it&#39;s overcsast but warm and you only need shorts and flip flops on<br/>maybe it will storm later, oh well, it&#39;s pleasent at the moment<br/>you can see the and hear the ocean, about ten minutes walk away<br/><br/>you dont bother checking your phone because there&#39;s nothing to check up on, it no longer matters<br/><br/>you go downstairs where the cute inn keeper woman greets you and you get some breakfast<br/><br/>afterwards you leave the inn and just walk around as per ususal, you have nowhere to be and nothing to do<br/><br/><span class="toolong">Post too long. Click <a href="/agg/res/1805#1805">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1804" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568186695321.jpg">1568186695321.jpg</a> <span class="unimportant">(86.67 KB, 600x800, <span class="postfilename">1568144838312.jpg</span>)</span></p><a href="/agg/src/1568186695321.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568186695321.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1804" ><p class="intro"><input type="checkbox" class="delete" name="delete_1804" id="delete_1804" /><label for="delete_1804"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:40Z">09/20/19 (Fri) 15:38:40</time></label>&nbsp;<a class="post_no" id="post_no_1804" onclick="return highlightReply(1804, event)" href="/agg/res/1804#1804">No.</a><a class="post_no" onclick="return citeReply(1804)" href="/agg/res/1804#q1804">1804</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1804">[Reply]</a></p><div class="body"><br/>So as a joke, I went to my friend&#39;s house while wearing Konata&#39;s blue wig and uniform. I could barely stop my laughter as he went as red as a tomato and looked at me from head to toe with a bit of drool in his mouth. The way he stared made me feel a bit funny too, but I decided to tease him more by taking off my clothes. He asked me, "Are you serious?" and I said, "Yup."<br/><br/>He went silent for what seemed like forever, so I asked him, "What&#39;s the matter?" He said he&#39;s confused, but then his boner got really hard, which made me take off his clothes. I expected him to scream, "Stop!" as I kissed him and stroked his cock, but he instead shouted, "Oh God, Konata!" which made me get a boner myself. Before I knew it, I was blowing him for the first time till he came.<br/><br/>His semen was so thick, it got stuck inside my throat no matter how hard I swallowed. He then said, "I want to fuck you now!" and seeing that we&#39;ve already gone that far and we were both naked, I obliged. A few hours later, the jerk went all pale and said to me, "Why did we do that? Now I&#39;m totally gay." But he looked so cute all confused like that, so I took pity on him and reassured while wiping his cum off my face, "Let&#39;s just pretend I&#39;m still Konata."<br/><br/>Pic related. It&#39;s me dressed as Konata.<br/><a href=http://what-ch.mooo.com/what/res/2494.html>http://what-ch.mooo.com/what/res/2494.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1803" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568433225073.jpg">1568433225073.jpg</a> <span class="unimportant">(206.27 KB, 1280x903, <span class="postfilename">004.jpg</span>)</span></p><a href="/agg/src/1568433225073.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568433225073.png" style="width:240px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1803" ><p class="intro"><input type="checkbox" class="delete" name="delete_1803" id="delete_1803" /><label for="delete_1803"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:39Z">09/20/19 (Fri) 15:38:39</time></label>&nbsp;<a class="post_no" id="post_no_1803" onclick="return highlightReply(1803, event)" href="/agg/res/1803#1803">No.</a><a class="post_no" onclick="return citeReply(1803)" href="/agg/res/1803#q1803">1803</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1803">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2532.html>http://what-ch.mooo.com/what/res/2532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1802" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568508910928.png">1568508910928.png</a> <span class="unimportant">(285.87 KB, 680x714, <span class="postfilename">1567809998103.png</span>)</span></p><a href="/agg/src/1568508910928.png" target="_blank"><img class="post-image" src="/agg/thumb/1568508910928.png" style="width:229px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1802" ><p class="intro"><input type="checkbox" class="delete" name="delete_1802" id="delete_1802" /><label for="delete_1802"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:38Z">09/20/19 (Fri) 15:38:38</time></label>&nbsp;<a class="post_no" id="post_no_1802" onclick="return highlightReply(1802, event)" href="/agg/res/1802#1802">No.</a><a class="post_no" onclick="return citeReply(1802)" href="/agg/res/1802#q1802">1802</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1802">[Reply]</a></p><div class="body">Test<br/><a href=http://what-ch.mooo.com/what/res/2551.html>http://what-ch.mooo.com/what/res/2551.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1801" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568257806526.jpg">1568257806526.jpg</a> <span class="unimportant">(370.33 KB, 1920x1080, <span class="postfilename">20190911225117_1.jpg</span>)</span></p><a href="/agg/src/1568257806526.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568257806526.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1801" ><p class="intro"><input type="checkbox" class="delete" name="delete_1801" id="delete_1801" /><label for="delete_1801"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:37Z">09/20/19 (Fri) 15:38:37</time></label>&nbsp;<a class="post_no" id="post_no_1801" onclick="return highlightReply(1801, event)" href="/agg/res/1801#1801">No.</a><a class="post_no" onclick="return citeReply(1801)" href="/agg/res/1801#q1801">1801</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1801">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2508.html>http://what-ch.mooo.com/what/res/2508.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1800" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568489807752.jpg">1568489807752.jpg</a> <span class="unimportant">(44.24 KB, 1280x720, <span class="postfilename" title="[URW]_Chuunibyou_demo_Koi_ga_Shitai!_-_OVA_[BD][720p][55C22F0C].mkv_snapshot_10.31_[2014.01.14_20.35.50].jpg">[URW]_Chuunibyou_demo_Koi_….jpg</span>)</span></p><a href="/agg/src/1568489807752.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568489807752.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1800" ><p class="intro"><input type="checkbox" class="delete" name="delete_1800" id="delete_1800" /><label for="delete_1800"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:36Z">09/20/19 (Fri) 15:38:36</time></label>&nbsp;<a class="post_no" id="post_no_1800" onclick="return highlightReply(1800, event)" href="/agg/res/1800#1800">No.</a><a class="post_no" onclick="return citeReply(1800)" href="/agg/res/1800#q1800">1800</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1800">[Reply]</a></p><div class="body">merorin was here, you guys are faggots<br/><a href=http://what-ch.mooo.com/what/res/2546.html>http://what-ch.mooo.com/what/res/2546.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1799" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568452411454.jpg">1568452411454.jpg</a> <span class="unimportant">(55.48 KB, 400x400, <span class="postfilename" title="mpv-1-02 Dear you -Feel--00:00:35.972.jpg">mpv-1-02 Dear you -Feel--0….jpg</span>)</span></p><a href="/agg/src/1568452411454.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568452411454.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1799" ><p class="intro"><input type="checkbox" class="delete" name="delete_1799" id="delete_1799" /><label for="delete_1799"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:36Z">09/20/19 (Fri) 15:38:36</time></label>&nbsp;<a class="post_no" id="post_no_1799" onclick="return highlightReply(1799, event)" href="/agg/res/1799#1799">No.</a><a class="post_no" onclick="return citeReply(1799)" href="/agg/res/1799#q1799">1799</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1799">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2534.html>http://what-ch.mooo.com/what/res/2534.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1798" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568228635634.jpg">1568228635634.jpg</a> <span class="unimportant">(725.38 KB, 780x1140, <span class="postfilename">1568219513978.jpg</span>)</span></p><a href="/agg/src/1568228635634.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568228635634.png" style="width:165px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1798" ><p class="intro"><input type="checkbox" class="delete" name="delete_1798" id="delete_1798" /><label for="delete_1798"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:34Z">09/20/19 (Fri) 15:38:34</time></label>&nbsp;<a class="post_no" id="post_no_1798" onclick="return highlightReply(1798, event)" href="/agg/res/1798#1798">No.</a><a class="post_no" onclick="return citeReply(1798)" href="/agg/res/1798#q1798">1798</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1798">[Reply]</a></p><div class="body">Tifas<br/><a href=http://what-ch.mooo.com/what/res/2505.html>http://what-ch.mooo.com/what/res/2505.html</a></div></div><br class="clear"/><hr/></div>
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
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/18" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a class="selected">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/20" method="get"><input type="submit" value="Next" /></form>
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