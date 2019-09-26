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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-24.png" alt="" />
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
<input style="display:none" type="text" name="user" value="" >
<input style="display:none" type="text" value="" name="lastname">
<input type="hidden" name="board" value="agg">
<input type="hidden" name="vwdrx5ukc8⚶6yftnl♑" value="c|x☁-☬vKNoym☀`GQwd'Ti♴ O☪L3&gt;l6kS9U%.♰1V=_(8BnupZ&amp;&lt;]52">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div   style="display:none"><input   type="text"   name="login"   value="x}FKalHy⛼?45{☓3twn/'♌26X⛩!$%#;hGO8&gt;@~zJS^0⚟Iod&lt;j[q(NALVfQ*bW=u ,)`r7mC|e-.☰c&amp;i♛⛗sv:T9_MEPgB]1Dk Z+"></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="text" value=""></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="q">⛥VvG7P~ryNq}dC^☵u#/⛺$U⛪0e@Fm*)Yc</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div   style="display:none"  ><input   type="text"   name="ghndafeicmvp7w9z306421♐8lq"   value=""  ></div  >
			
			
				<input style="display:none" type="text" name="w☖f⛡aigq7oc" value="">
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
		<div class="thread" id="thread_2157" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569470473157.jpg">1569470473157.jpg</a> <span class="unimportant">(866.16 KB, 1336x752, <span class="postfilename">IMG_20190925_215509756.jpg</span>)</span></p><a href="/agg/src/1569470473157.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569470473157.jpg" style="width:426px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2157" ><p class="intro"><input type="checkbox" class="delete" name="delete_2157" id="delete_2157" /><label for="delete_2157"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T04:05:03Z">09/26/19 (Thu) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2157" onclick="return highlightReply(2157, event)" href="/agg/res/2157#2157">No.</a><a class="post_no" onclick="return citeReply(2157)" href="/agg/res/2157#q2157">2157</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2157">[Reply]</a></p><div class="body">How jealous are you fucking idiot retard losers on a scale from 1 to *EXTREMELY FUCKING JEALOUS*?<br/><a href=https://gnfos.com/jp/res/369614.html>https://gnfos.com/jp/res/369614.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2156" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569470305325.jpeg">1569470305325.jpeg</a> <span class="unimportant">(375.15 KB, 1120x924, <span class="postfilename" title="31E62672-0970-484D-9A1D-C1AB92F52062.jpeg">31E62672-0970-484D-9A1D-C….jpeg</span>)</span></p><a href="/agg/src/1569470305325.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569470305325.jpeg" style="width:290px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2156" ><p class="intro"><input type="checkbox" class="delete" name="delete_2156" id="delete_2156" /><label for="delete_2156"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-26T04:00:05Z">09/26/19 (Thu) 04:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2156" onclick="return highlightReply(2156, event)" href="/agg/res/2156#2156">No.</a><a class="post_no" onclick="return citeReply(2156)" href="/agg/res/2156#q2156">2156</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2156">[Reply]</a></p><div class="body">This sexy black chick was eye fl8rting with me on campus then she literally jumped next to me and started talking to me and was really blunt she was like you&#39;re so quiet why are you so quiet then even said you don&#39;t know how to conversate with people but was saying I&#39;m so cute and then added my on snap and she&#39;s sending me sexy photos right now<br/><a href=https://gnfos.com/jp/res/369612.html>https://gnfos.com/jp/res/369612.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2155" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569460697974.jpg">1569460697974.jpg</a> <span class="unimportant">(98.32 KB, 1280x720, <span class="postfilename">IMG_5754.jpg</span>)</span></p><a href="/agg/src/1569460697974.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569460697974.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2155" ><p class="intro"><input type="checkbox" class="delete" name="delete_2155" id="delete_2155" /><label for="delete_2155"><span class="name">Anonymous</span> <time datetime="2019-09-26T01:20:03Z">09/26/19 (Thu) 01:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2155" onclick="return highlightReply(2155, event)" href="/agg/res/2155#2155">No.</a><a class="post_no" onclick="return citeReply(2155)" href="/agg/res/2155#q2155">2155</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2155">[Reply]</a></p><div class="body">brush teeth<br/><a href=https://kissu.moe/qa/res/10598.html>https://kissu.moe/qa/res/10598.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2154" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569456909640.png">1569456909640.png</a> <span class="unimportant">(99.94 KB, 636x375, <span class="postfilename">pissman.png</span>)</span></p><a href="/agg/src/1569456909640.png" target="_blank"><img class="post-image" src="/agg/thumb/1569456909640.png" style="width:407px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2154" ><p class="intro"><input type="checkbox" class="delete" name="delete_2154" id="delete_2154" /><label for="delete_2154"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-26T00:20:04Z">09/26/19 (Thu) 00:20:04</time></label>&nbsp;<a class="post_no" id="post_no_2154" onclick="return highlightReply(2154, event)" href="/agg/res/2154#2154">No.</a><a class="post_no" onclick="return citeReply(2154)" href="/agg/res/2154#q2154">2154</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2154">[Reply]</a></p><div class="body">bruh look at this dude<br/><a href=https://gnfos.com/jp/res/369596.html>https://gnfos.com/jp/res/369596.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2153" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569457097601.png">1569457097601.png</a> <span class="unimportant">(1.89 MB, 2024x1194, <span class="postfilename" title="206079536.06___cirno_and_daiyousei_touhou_drawn_by_asakura_masatoki__81476bc6389aac0feccc6d1a8033418f.png">206079536.06___cirno_and_d….png</span>)</span></p><a href="/agg/src/1569457097601.png" target="_blank"><img class="post-image" src="/agg/thumb/1569457097601.png" style="width:255px;height:150px" alt="" /></a></div>    </div>    <div class="post op" id="op_2153" ><p class="intro"><input type="checkbox" class="delete" name="delete_2153" id="delete_2153" /><label for="delete_2153"><span class="name">Anonymous</span> <time datetime="2019-09-26T00:20:04Z">09/26/19 (Thu) 00:20:04</time></label>&nbsp;<a class="post_no" id="post_no_2153" onclick="return highlightReply(2153, event)" href="/agg/res/2153#2153">No.</a><a class="post_no" onclick="return citeReply(2153)" href="/agg/res/2153#q2153">2153</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2153">[Reply]</a></p><div class="body">The greatest programmer<br/><a href=https://kissu.moe/qa/res/10581.html>https://kissu.moe/qa/res/10581.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2152" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569454745302.jpg">1569454745302.jpg</a> <span class="unimportant">(1.37 MB, 2102x3586, <span class="postfilename">1569449038199.jpg</span>)</span></p><a href="/agg/src/1569454745302.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569454745302.jpg" style="width:141px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2152" ><p class="intro"><input type="checkbox" class="delete" name="delete_2152" id="delete_2152" /><label for="delete_2152"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T23:40:05Z">09/25/19 (Wed) 23:40:05</time></label>&nbsp;<a class="post_no" id="post_no_2152" onclick="return highlightReply(2152, event)" href="/agg/res/2152#2152">No.</a><a class="post_no" onclick="return citeReply(2152)" href="/agg/res/2152#q2152">2152</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2152">[Reply]</a></p><div class="body"><span class="quote">&gt;white women</span><br/><a href=https://gnfos.com/jp/res/369594.html>https://gnfos.com/jp/res/369594.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2151" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569454521586.webm">1569454521586.webm</a> <span class="unimportant">(1.51 MB, 480x433, <span class="postfilename">1569437631824.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569454521586.webm&amp;t=1569437631824.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569454521586.jpg" style="width:266px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2151" ><p class="intro"><input type="checkbox" class="delete" name="delete_2151" id="delete_2151" /><label for="delete_2151"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T23:40:04Z">09/25/19 (Wed) 23:40:04</time></label>&nbsp;<a class="post_no" id="post_no_2151" onclick="return highlightReply(2151, event)" href="/agg/res/2151#2151">No.</a><a class="post_no" onclick="return citeReply(2151)" href="/agg/res/2151#q2151">2151</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2151">[Reply]</a></p><div class="body">How long until zoomers rise up against boomers and take back the wealth they stole from them?<br/><a href=https://gnfos.com/jp/res/369593.html>https://gnfos.com/jp/res/369593.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2150" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569454041907.jpg">1569454041907.jpg</a> <span class="unimportant">(61.45 KB, 1028x575, <span class="postfilename">1569420976790.jpg</span>)</span></p><a href="/agg/src/1569454041907.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569454041907.jpg" style="width:427px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_2150" ><p class="intro"><input type="checkbox" class="delete" name="delete_2150" id="delete_2150" /><label for="delete_2150"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T23:30:03Z">09/25/19 (Wed) 23:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2150" onclick="return highlightReply(2150, event)" href="/agg/res/2150#2150">No.</a><a class="post_no" onclick="return citeReply(2150)" href="/agg/res/2150#q2150">2150</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2150">[Reply]</a></p><div class="body">the incel cope<br/><a href=https://gnfos.com/jp/res/369592.html>https://gnfos.com/jp/res/369592.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2149" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569453860080.png">1569453860080.png</a> <span class="unimportant">(1010.65 KB, 2048x1872, <span class="postfilename">1569446511449.png</span>)</span></p><a href="/agg/src/1569453860080.png" target="_blank"><img class="post-image" src="/agg/thumb/1569453860080.png" style="width:263px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2149" ><p class="intro"><input type="checkbox" class="delete" name="delete_2149" id="delete_2149" /><label for="delete_2149"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T23:25:03Z">09/25/19 (Wed) 23:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2149" onclick="return highlightReply(2149, event)" href="/agg/res/2149#2149">No.</a><a class="post_no" onclick="return citeReply(2149)" href="/agg/res/2149#q2149">2149</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2149">[Reply]</a></p><div class="body"><span class="quote">&gt;the perfect woman doesn&#39;t exi-</span><br/><a href=https://gnfos.com/jp/res/369591.html>https://gnfos.com/jp/res/369591.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2148" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569452735348.jpeg">1569452735348.jpeg</a> <span class="unimportant">(344.76 KB, 750x561, <span class="postfilename" title="45C34DDB-B29F-4922-B768-5BA9EAB1C076.jpeg">45C34DDB-B29F-4922-B768-5….jpeg</span>)</span></p><a href="/agg/src/1569452735348.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569452735348.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2148" ><p class="intro"><input type="checkbox" class="delete" name="delete_2148" id="delete_2148" /><label for="delete_2148"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T23:10:03Z">09/25/19 (Wed) 23:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2148" onclick="return highlightReply(2148, event)" href="/agg/res/2148#2148">No.</a><a class="post_no" onclick="return citeReply(2148)" href="/agg/res/2148#q2148">2148</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2148">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369589.html>https://gnfos.com/jp/res/369589.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2147" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569450891992.jpg">1569450891992.jpg</a> <span class="unimportant">(153.63 KB, 986x995, <span class="postfilename">1557163687935.jpg</span>)</span></p><a href="/agg/src/1569450891992.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569450891992.png" style="width:252px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2147" ><p class="intro"><input type="checkbox" class="delete" name="delete_2147" id="delete_2147" /><label for="delete_2147"><span class="name">Anonymous</span> <time datetime="2019-09-25T22:35:03Z">09/25/19 (Wed) 22:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2147" onclick="return highlightReply(2147, event)" href="/agg/res/2147#2147">No.</a><a class="post_no" onclick="return citeReply(2147)" href="/agg/res/2147#q2147">2147</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2147">[Reply]</a></p><div class="body"><span class="quote">&gt;Stay in touch with your /qa/ friends!</span><br/>Hey wheeab! Remember me?<br/><a href=https://kissu.moe/qa/res/10566.html>https://kissu.moe/qa/res/10566.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2146" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569450736599.jpg">1569450736599.jpg</a> <span class="unimportant">(1.43 MB, 1176x996, <span class="postfilename">65718223_p0.jpg</span>)</span></p><a href="/agg/src/1569450736599.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569450736599.png" style="width:255px;height:216px" alt="" /></a></div>    </div>    <div class="post op" id="op_2146" ><p class="intro"><input type="checkbox" class="delete" name="delete_2146" id="delete_2146" /><label for="delete_2146"><span class="name">Anonymous</span> <time datetime="2019-09-25T22:35:03Z">09/25/19 (Wed) 22:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2146" onclick="return highlightReply(2146, event)" href="/agg/res/2146#2146">No.</a><a class="post_no" onclick="return citeReply(2146)" href="/agg/res/2146#q2146">2146</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2146">[Reply]</a></p><div class="body">Is it possible to hate the burg?<br/><a href=https://kissu.moe/qa/res/10565.html>https://kissu.moe/qa/res/10565.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2145" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569447895421.jpg">1569447895421.jpg</a> <span class="unimportant">(189.94 KB, 932x1396, <span class="postfilename" title="BlazBlue-Rachel-Alucard-Cosplay-Gamers-Heroes-3-932x1396.jpg">BlazBlue-Rachel-Alucard-Co….jpg</span>)</span></p><a href="/agg/src/1569447895421.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569447895421.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2145" ><p class="intro"><input type="checkbox" class="delete" name="delete_2145" id="delete_2145" /><label for="delete_2145"><span class="name">Anonymous</span> <time datetime="2019-09-25T21:45:03Z">09/25/19 (Wed) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2145" onclick="return highlightReply(2145, event)" href="/agg/res/2145#2145">No.</a><a class="post_no" onclick="return citeReply(2145)" href="/agg/res/2145#q2145">2145</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2145">[Reply]</a></p><div class="body">Bring me 4pq<br/>I have a question to ask him<br/><a href=https://kissu.moe/qa/res/10564.html>https://kissu.moe/qa/res/10564.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2144" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569447542427.png">1569447542427.png</a> <span class="unimportant">(562.59 KB, 1078x1021, <span class="postfilename">crossreview02.png</span>)</span></p><a href="/agg/src/1569447542427.png" target="_blank"><img class="post-image" src="/agg/thumb/1569447542427.png" style="width:253px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2144" ><p class="intro"><input type="checkbox" class="delete" name="delete_2144" id="delete_2144" /><label for="delete_2144"><span class="name">Tada Banri</span> <time datetime="2019-09-25T21:40:03Z">09/25/19 (Wed) 21:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2144" onclick="return highlightReply(2144, event)" href="/agg/res/2144#2144">No.</a><a class="post_no" onclick="return citeReply(2144)" href="/agg/res/2144#q2144">2144</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2144">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369584.html>https://gnfos.com/jp/res/369584.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2143" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569446090218.jpg">1569446090218.jpg</a> <span class="unimportant">(100.58 KB, 1500x1019, <span class="postfilename">EFUvmOAU4AU22wV.jpg</span>)</span></p><a href="/agg/src/1569446090218.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569446090218.png" style="width:255px;height:174px" alt="" /></a></div>    </div>    <div class="post op" id="op_2143" ><p class="intro"><input type="checkbox" class="delete" name="delete_2143" id="delete_2143" /><label for="delete_2143"><span class="name">としあき</span> <time datetime="2019-09-25T21:15:03Z">09/25/19 (Wed) 21:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2143" onclick="return highlightReply(2143, event)" href="/agg/res/2143#2143">No.</a><a class="post_no" onclick="return citeReply(2143)" href="/agg/res/2143#q2143">2143</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2143">[Reply]</a></p><div class="body"><a href=https://himasugi.blog/jp/res/956907.html>https://himasugi.blog/jp/res/956907.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2142" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569443816881.png">1569443816881.png</a> <span class="unimportant">(98.93 KB, 504x509, <span class="postfilename">1466504965233.png</span>)</span></p><a href="/agg/src/1569443816881.png" target="_blank"><img class="post-image" src="/agg/thumb/1569443816881.png" style="width:252px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2142" ><p class="intro"><input type="checkbox" class="delete" name="delete_2142" id="delete_2142" /><label for="delete_2142"><span class="name">Anonymous</span> <time datetime="2019-09-25T20:40:03Z">09/25/19 (Wed) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2142" onclick="return highlightReply(2142, event)" href="/agg/res/2142#2142">No.</a><a class="post_no" onclick="return citeReply(2142)" href="/agg/res/2142#q2142">2142</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2142">[Reply]</a></p><div class="body">How do I stop being attracted to teen girls?<br/>It makes me feel like a creep.<br/><a href=https://kissu.moe/qa/res/10558.html>https://kissu.moe/qa/res/10558.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2141" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569440365932.png">1569440365932.png</a> <span class="unimportant">(236.12 KB, 1000x1000, <span class="postfilename" title="fa32ec52301b8fc7cbe8dcba70abe253.png">fa32ec52301b8fc7cbe8dcba70….png</span>)</span></p><a href="/agg/src/1569440365932.png" target="_blank"><img class="post-image" src="/agg/thumb/1569440365932.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2141" ><p class="intro"><input type="checkbox" class="delete" name="delete_2141" id="delete_2141" /><label for="delete_2141"><span class="name">Anonymous</span> <time datetime="2019-09-25T19:40:03Z">09/25/19 (Wed) 19:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2141" onclick="return highlightReply(2141, event)" href="/agg/res/2141#2141">No.</a><a class="post_no" onclick="return citeReply(2141)" href="/agg/res/2141#q2141">2141</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2141">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2707.html>http://what-ch.mooo.com/what/res/2707.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2140" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569430857898.jpg">1569430857898.jpg</a> <span class="unimportant">(65.61 KB, 750x606, <span class="postfilename" title="[yurucamp][group][artist- nikoo]b86518a0fa8fee407ce1b57c40144485.jpg">[yurucamp][group][artist- ….jpg</span>)</span></p><a href="/agg/src/1569430857898.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569430857898.png" style="width:255px;height:206px" alt="" /></a></div>    </div>    <div class="post op" id="op_2140" ><p class="intro"><input type="checkbox" class="delete" name="delete_2140" id="delete_2140" /><label for="delete_2140"><span class="name">Anonymous</span> <time datetime="2019-09-25T17:05:08Z">09/25/19 (Wed) 17:05:08</time></label>&nbsp;<a class="post_no" id="post_no_2140" onclick="return highlightReply(2140, event)" href="/agg/res/2140#2140">No.</a><a class="post_no" onclick="return citeReply(2140)" href="/agg/res/2140#q2140">2140</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2140">[Reply]</a></p><div class="body">I knew that most of us already knew that tanasin&#39;s "complete history of 4chan" has been really awful the past few years, but the /qa/ part of it for the past month is truly atrocious.<br/><a href="http://tanasinn.info/wiki/Complete_History_of_4chan#2019" rel="nofollow" target="_blank">http://tanasinn.info/wiki/Complete_History_of_4chan#2019</a><br/>Should we update it to reflect the mass rangebans and other staff chicanery, or just leave it to rot?<br/><a href=https://kissu.moe/qa/res/10535.html>https://kissu.moe/qa/res/10535.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2139" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569429915108.jpg">1569429915108.jpg</a> <span class="unimportant">(431.93 KB, 1280x1024, <span class="postfilename" title="__artemis_and_hazuki_tsukuyomi_moonphase_drawn_by_aizawa_masahiro__c315f15a06db742af46b391eb6fbb4c3.jpg">__artemis_and_hazuki_tsuku….jpg</span>)</span></p><a href="/agg/src/1569429915108.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569429915108.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_2139" ><p class="intro"><input type="checkbox" class="delete" name="delete_2139" id="delete_2139" /><label for="delete_2139"><span class="name">Anonymous</span> <time datetime="2019-09-25T16:50:04Z">09/25/19 (Wed) 16:50:04</time></label>&nbsp;<a class="post_no" id="post_no_2139" onclick="return highlightReply(2139, event)" href="/agg/res/2139#2139">No.</a><a class="post_no" onclick="return citeReply(2139)" href="/agg/res/2139#q2139">2139</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2139">[Reply]</a></p><div class="body">Have you ever been mesmerized by an anime&#39;s soundtrack? To the point you think you may have missed some crucial plot points, or that you remember the ost more than the events?<br/><a href=https://kissu.moe/qa/res/10533.html>https://kissu.moe/qa/res/10533.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2138" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569428444621.png">1569428444621.png</a> <span class="unimportant">(1.84 MB, 1750x1950, <span class="postfilename" title="239522C1-66F4-4CB4-BEE0-BF6DF2E2B2B5.png">239522C1-66F4-4CB4-BEE0-BF….png</span>)</span></p><a href="/agg/src/1569428444621.png" target="_blank"><img class="post-image" src="/agg/thumb/1569428444621.png" style="width:215px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2138" ><p class="intro"><input type="checkbox" class="delete" name="delete_2138" id="delete_2138" /><label for="delete_2138"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T16:25:04Z">09/25/19 (Wed) 16:25:04</time></label>&nbsp;<a class="post_no" id="post_no_2138" onclick="return highlightReply(2138, event)" href="/agg/res/2138#2138">No.</a><a class="post_no" onclick="return citeReply(2138)" href="/agg/res/2138#q2138">2138</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2138">[Reply]</a></p><div class="body">I&#39;m going to get revenge<br/><a href=https://gnfos.com/jp/res/369578.html>https://gnfos.com/jp/res/369578.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/index" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a class="selected">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/3" method="get"><input type="submit" value="Next" /></form>
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