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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-13.png" alt="" />
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
<div style="display:none"><input type="text" name="user" value=""></div>
<input value="" name="lastname" type="hidden">
<input type="hidden" name="board" value="agg">
<input type="hidden" value="c&#124;x&#9729;-☬v&#75;Noym☀`GQw&#100;'T&#105;♴ &#79;&#9770;L3&gt;l6kS&#57;&#85;%.&#9840;1V=&#95;&#40;&#56;B&#110;u&#112;Z&#38;&lt;&#93;52" name="vwdrx5ukc8⚶6yftnl♑">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="&#120;&#125;FKalH&#121;⛼&#63;4&#53;{☓3twn/'♌26X⛩!$%#;&#104;&#71;O&#56;&gt;@~&#122;J&#83;^&#48;⚟&#73;od&lt;&#106;[q(N&#65;LVfQ*bW&#61;&#117; ,)`&#114;7mC|e&#45;.&#9776;c&amp;i&#9819;⛗s&#118;&#58;T9_MEPgB&#93;1&#68;k Z&#43;" name="login" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="text" value=""></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="q" value="⛥VvG7P~ryNq}dC^☵u#/⛺$U⛪0e@Fm*)Yc"></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div  style="display:none"><input  type="text"  name="ghndafeicmvp7w9z306421♐8lq"  value=""></div>
			
			
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
		<div class="thread" id="thread_2117" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569344026622.jpg">1569344026622.jpg</a> <span class="unimportant">(33.9 KB, 456x429, <span class="postfilename">1569192204208.jpg</span>)</span></p><a href="/agg/src/1569344026622.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569344026622.png" style="width:255px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2117" ><p class="intro"><input type="checkbox" class="delete" name="delete_2117" id="delete_2117" /><label for="delete_2117"><span class="name">Anonymous</span> <time datetime="2019-09-24T16:55:04Z">09/24/19 (Tue) 16:55:04</time></label>&nbsp;<a class="post_no" id="post_no_2117" onclick="return highlightReply(2117, event)" href="/agg/res/2117#2117">No.</a><a class="post_no" onclick="return citeReply(2117)" href="/agg/res/2117#q2117">2117</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2117">[Reply]</a></p><div class="body"><span class="quote">&gt;Kissu.moe is a modern imageboard with a loose ruleset based around removing obnoxious content such as spam, griefing and 4chan&#39;s wide array of clickbait images.</span><br/><a href=https://kissu.moe/qa/res/10444.html>https://kissu.moe/qa/res/10444.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2116" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569343788861.jpg">1569343788861.jpg</a> <span class="unimportant">(57.21 KB, 959x538, <span class="postfilename">1560688822965.jpg</span>)</span></p><a href="/agg/src/1569343788861.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569343788861.jpg" style="width:427px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_2116" ><p class="intro"><input type="checkbox" class="delete" name="delete_2116" id="delete_2116" /><label for="delete_2116"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T16:50:09Z">09/24/19 (Tue) 16:50:09</time></label>&nbsp;<a class="post_no" id="post_no_2116" onclick="return highlightReply(2116, event)" href="/agg/res/2116#2116">No.</a><a class="post_no" onclick="return citeReply(2116)" href="/agg/res/2116#q2116">2116</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2116">[Reply]</a></p><div class="body">have to go back to working bros...<br/>lunch time is over :(<br/><a href=https://gnfos.com/jp/res/369528.html>https://gnfos.com/jp/res/369528.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2115" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569343056896.jpg">1569343056896.jpg</a> <span class="unimportant">(33.9 KB, 456x429, <span class="postfilename">1569192204208.jpg</span>)</span></p><a href="/agg/src/1569343056896.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569343056896.png" style="width:255px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2115" ><p class="intro"><input type="checkbox" class="delete" name="delete_2115" id="delete_2115" /><label for="delete_2115"><span class="name">Anonymous</span> <time datetime="2019-09-24T16:40:03Z">09/24/19 (Tue) 16:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2115" onclick="return highlightReply(2115, event)" href="/agg/res/2115#2115">No.</a><a class="post_no" onclick="return citeReply(2115)" href="/agg/res/2115#q2115">2115</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2115">[Reply]</a></p><div class="body"><span class="quote">&gt;Kissu.moe is a modern imageboard with a loose ruleset based around removing obnoxious content such as spam, griefing and 4chan&#39;s wide array of clickbait images.</span><br/><a href=https://kissu.moe/qa/res/10437.html>https://kissu.moe/qa/res/10437.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2114" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569341401727.png">1569341401727.png</a> <span class="unimportant">(602.25 KB, 860x1000, <span class="postfilename">tnkoy.png</span>)</span></p><a href="/agg/src/1569341401727.png" target="_blank"><img class="post-image" src="/agg/thumb/1569341401727.png" style="width:219px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2114" ><p class="intro"><input type="checkbox" class="delete" name="delete_2114" id="delete_2114" /><label for="delete_2114"><span class="name">Anonymous</span> <time datetime="2019-09-24T16:10:04Z">09/24/19 (Tue) 16:10:04</time></label>&nbsp;<a class="post_no" id="post_no_2114" onclick="return highlightReply(2114, event)" href="/agg/res/2114#2114">No.</a><a class="post_no" onclick="return citeReply(2114)" href="/agg/res/2114#q2114">2114</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2114">[Reply]</a></p><div class="body">Why do you watch anime<br/><a href=https://kissu.moe/qa/res/10431.html>https://kissu.moe/qa/res/10431.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2113" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569323500879.png">1569323500879.png</a> <span class="unimportant">(147.87 KB, 1134x652, <span class="postfilename">Untitled.png</span>)</span></p><a href="/agg/src/1569323500879.png" target="_blank"><img class="post-image" src="/agg/thumb/1569323500879.png" style="width:417px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2113" ><p class="intro"><input type="checkbox" class="delete" name="delete_2113" id="delete_2113" /><label for="delete_2113"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T11:15:03Z">09/24/19 (Tue) 11:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2113" onclick="return highlightReply(2113, event)" href="/agg/res/2113#2113">No.</a><a class="post_no" onclick="return citeReply(2113)" href="/agg/res/2113#q2113">2113</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2113">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369524.html>https://gnfos.com/jp/res/369524.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2112" data-board="agg"><div class="video-container" data-video="GQObHXySH9Y"><a href="https://youtu.be/GQObHXySH9Y" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/GQObHXySH9Y/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2112" ><p class="intro"><input type="checkbox" class="delete" name="delete_2112" id="delete_2112" /><label for="delete_2112"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T09:10:03Z">09/24/19 (Tue) 09:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2112" onclick="return highlightReply(2112, event)" href="/agg/res/2112#2112">No.</a><a class="post_no" onclick="return citeReply(2112)" href="/agg/res/2112#q2112">2112</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2112">[Reply]</a></p><div class="body">Think I’m gonna die to her voice<br/><a href=https://gnfos.com/jp/res/369523.html>https://gnfos.com/jp/res/369523.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2111" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569314579692.jpg">1569314579692.jpg</a> <span class="unimportant">(62.15 KB, 510x638, <span class="postfilename">1558381762529.jpg</span>)</span></p><a href="/agg/src/1569314579692.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569314579692.jpg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2111" ><p class="intro"><input type="checkbox" class="delete" name="delete_2111" id="delete_2111" /><label for="delete_2111"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T08:45:03Z">09/24/19 (Tue) 08:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2111" onclick="return highlightReply(2111, event)" href="/agg/res/2111#2111">No.</a><a class="post_no" onclick="return citeReply(2111)" href="/agg/res/2111#q2111">2111</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2111">[Reply]</a></p><div class="body">okay this board is just cringe<br/><br/>not going to advertise my board here anymore<br/><a href=https://gnfos.com/jp/res/369521.html>https://gnfos.com/jp/res/369521.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2110" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569314370376.png">1569314370376.png</a> <span class="unimportant">(442.53 KB, 680x717, <span class="postfilename">1548609135147.png</span>)</span></p><a href="/agg/src/1569314370376.png" target="_blank"><img class="post-image" src="/agg/thumb/1569314370376.png" style="width:228px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2110" ><p class="intro"><input type="checkbox" class="delete" name="delete_2110" id="delete_2110" /><label for="delete_2110"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T08:40:05Z">09/24/19 (Tue) 08:40:05</time></label>&nbsp;<a class="post_no" id="post_no_2110" onclick="return highlightReply(2110, event)" href="/agg/res/2110#2110">No.</a><a class="post_no" onclick="return citeReply(2110)" href="/agg/res/2110#q2110">2110</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2110">[Reply]</a></p><div class="body">stream<br/><a href=https://gnfos.com/jp/res/369520.html>https://gnfos.com/jp/res/369520.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2109" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569313213062.jpeg">1569313213062.jpeg</a> <span class="unimportant">(266.3 KB, 528x843, <span class="postfilename" title="96E5314A-4223-4DD3-B793-C8AFD99FA11F.jpeg">96E5314A-4223-4DD3-B793-C….jpeg</span>)</span></p><a href="/agg/src/1569313213062.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569313213062.jpeg" style="width:150px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2109" ><p class="intro"><input type="checkbox" class="delete" name="delete_2109" id="delete_2109" /><label for="delete_2109"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-24T08:25:04Z">09/24/19 (Tue) 08:25:04</time></label>&nbsp;<a class="post_no" id="post_no_2109" onclick="return highlightReply(2109, event)" href="/agg/res/2109#2109">No.</a><a class="post_no" onclick="return citeReply(2109)" href="/agg/res/2109#q2109">2109</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2109">[Reply]</a></p><div class="body">Are these contacts creepy<br/><a href=https://gnfos.com/jp/res/369519.html>https://gnfos.com/jp/res/369519.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2108" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569310250592.jpeg">1569310250592.jpeg</a> <span class="unimportant">(1.49 MB, 4032x3024, <span class="postfilename" title="5F703496-7727-4E67-842B-7388A1B6DCA2.jpeg">5F703496-7727-4E67-842B-7….jpeg</span>)</span></p><a href="/agg/src/1569310250592.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569310250592.jpeg" style="width:240px;height:320px" alt="" /></a></div>    </div>    <div class="post op" id="op_2108" ><p class="intro"><input type="checkbox" class="delete" name="delete_2108" id="delete_2108" /><label for="delete_2108"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-24T07:35:04Z">09/24/19 (Tue) 07:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2108" onclick="return highlightReply(2108, event)" href="/agg/res/2108#2108">No.</a><a class="post_no" onclick="return citeReply(2108)" href="/agg/res/2108#q2108">2108</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2108">[Reply]</a></p><div class="body">Is this an egg sac it was under my bed omg there was a roach in my bed I’m hyperventilating<br/><a href=https://gnfos.com/jp/res/369516.html>https://gnfos.com/jp/res/369516.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2107" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569307215005.jpg">1569307215005.jpg</a> <span class="unimportant">(90.39 KB, 720x960, <span class="postfilename">ned.jpg</span>)</span></p><a href="/agg/src/1569307215005.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569307215005.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2107" ><p class="intro"><input type="checkbox" class="delete" name="delete_2107" id="delete_2107" /><label for="delete_2107"><span class="name">Anonymous</span> <time datetime="2019-09-24T06:45:03Z">09/24/19 (Tue) 06:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2107" onclick="return highlightReply(2107, event)" href="/agg/res/2107#2107">No.</a><a class="post_no" onclick="return citeReply(2107)" href="/agg/res/2107#q2107">2107</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2107">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2689.html>http://what-ch.mooo.com/what/res/2689.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2106" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569307013901.gif">1569307013901.gif</a> <span class="unimportant">(90.75 KB, 464x464, <span class="postfilename">USA.gif</span>)</span></p><a href="/agg/src/1569307013901.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569307013901.png" style="width:241px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2106" ><p class="intro"><input type="checkbox" class="delete" name="delete_2106" id="delete_2106" /><label for="delete_2106"><span class="name">Anonymous</span> <time datetime="2019-09-24T06:40:03Z">09/24/19 (Tue) 06:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2106" onclick="return highlightReply(2106, event)" href="/agg/res/2106#2106">No.</a><a class="post_no" onclick="return citeReply(2106)" href="/agg/res/2106#q2106">2106</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2106">[Reply]</a></p><div class="body">USA!<br/><a href=http://what-ch.mooo.com/what/res/2686.html>http://what-ch.mooo.com/what/res/2686.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2105" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569306774211.jpg">1569306774211.jpg</a> <span class="unimportant">(90.02 KB, 444x500, <span class="postfilename">1562771716224.jpg</span>)</span></p><a href="/agg/src/1569306774211.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569306774211.png" style="width:214px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2105" ><p class="intro"><input type="checkbox" class="delete" name="delete_2105" id="delete_2105" /><label for="delete_2105"><span class="name">Anonymous</span> <time datetime="2019-09-24T06:35:02Z">09/24/19 (Tue) 06:35:02</time></label>&nbsp;<a class="post_no" id="post_no_2105" onclick="return highlightReply(2105, event)" href="/agg/res/2105#2105">No.</a><a class="post_no" onclick="return citeReply(2105)" href="/agg/res/2105#q2105">2105</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2105">[Reply]</a></p><div class="body">Hi-diddly-hey!<br/><a href=http://what-ch.mooo.com/what/res/2684.html>http://what-ch.mooo.com/what/res/2684.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2104" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569306242080.png">1569306242080.png</a> <span class="unimportant">(1.82 MB, 1254x1771, <span class="postfilename">cowgirl.png</span>)</span></p><a href="/agg/src/1569306242080.png" target="_blank"><img class="post-image" src="/agg/thumb/1569306242080.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2104" ><p class="intro"><input type="checkbox" class="delete" name="delete_2104" id="delete_2104" /><label for="delete_2104"><span class="name">Anonymous</span> <time datetime="2019-09-24T06:25:03Z">09/24/19 (Tue) 06:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2104" onclick="return highlightReply(2104, event)" href="/agg/res/2104#2104">No.</a><a class="post_no" onclick="return citeReply(2104)" href="/agg/res/2104#q2104">2104</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2104">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2681.html>http://what-ch.mooo.com/what/res/2681.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2103" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569305789221.png">1569305789221.png</a> <span class="unimportant">(13.73 KB, 247x204, <span class="postfilename">images.png</span>)</span></p><a href="/agg/src/1569305789221.png" target="_blank"><img class="post-image" src="/agg/thumb/1569305789221.png" style="width:240px;height:199px" alt="" /></a></div>    </div>    <div class="post op" id="op_2103" ><p class="intro"><input type="checkbox" class="delete" name="delete_2103" id="delete_2103" /><label for="delete_2103"><span class="name">Anonymous</span> <time datetime="2019-09-24T06:20:03Z">09/24/19 (Tue) 06:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2103" onclick="return highlightReply(2103, event)" href="/agg/res/2103#2103">No.</a><a class="post_no" onclick="return citeReply(2103)" href="/agg/res/2103#q2103">2103</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2103">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2678.html>http://what-ch.mooo.com/what/res/2678.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2102" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/J9poH0Q4k6A" allowfullscreen></iframe>    <div class="post op" id="op_2102" ><p class="intro"><input type="checkbox" class="delete" name="delete_2102" id="delete_2102" /><label for="delete_2102"><span class="subject">♂ thread</span> <span class="name">Anonymous</span> <time datetime="2019-09-24T05:30:03Z">09/24/19 (Tue) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2102" onclick="return highlightReply(2102, event)" href="/agg/res/2102#2102">No.</a><a class="post_no" onclick="return citeReply(2102)" href="/agg/res/2102#q2102">2102</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2102">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/10415.html>https://kissu.moe/qa/res/10415.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2101" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569302272191.png">1569302272191.png</a> <span class="unimportant">(560.32 KB, 609x608, <span class="postfilename">thinkin bout ears.png</span>)</span></p><a href="/agg/src/1569302272191.png" target="_blank"><img class="post-image" src="/agg/thumb/1569302272191.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2101" ><p class="intro"><input type="checkbox" class="delete" name="delete_2101" id="delete_2101" /><label for="delete_2101"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-24T05:20:03Z">09/24/19 (Tue) 05:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2101" onclick="return highlightReply(2101, event)" href="/agg/res/2101#2101">No.</a><a class="post_no" onclick="return citeReply(2101)" href="/agg/res/2101#q2101">2101</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2101">[Reply]</a></p><div class="body">someone stole my loot...<br/>twice...<br/><a href=https://kissu.moe/qa/res/10411.html>https://kissu.moe/qa/res/10411.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2100" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569299361179.png">1569299361179.png</a> <span class="unimportant">(928.06 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Happy Sugar Life - 01 [720p].mkv_snapshot_21.08_[2018.11.04_22.59.38].png">[HorribleSubs] Happy Sugar….png</span>)</span></p><a href="/agg/src/1569299361179.png" target="_blank"><img class="post-image" src="/agg/thumb/1569299361179.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2100" ><p class="intro"><input type="checkbox" class="delete" name="delete_2100" id="delete_2100" /><label for="delete_2100"><span class="name">Anonymous</span> <time datetime="2019-09-24T04:30:03Z">09/24/19 (Tue) 04:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2100" onclick="return highlightReply(2100, event)" href="/agg/res/2100#2100">No.</a><a class="post_no" onclick="return citeReply(2100)" href="/agg/res/2100#q2100">2100</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2100">[Reply]</a></p><div class="body">I really love cute, violent anime girls. There&#39;s something about them which just clicks with me, and I want to continually watch them forever.<br/><a href=https://kissu.moe/qa/res/10407.html>https://kissu.moe/qa/res/10407.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2099" data-board="agg"><div class="video-container" data-video="MoLkabPK3YU"><a href="https://youtu.be/MoLkabPK3YU" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/MoLkabPK3YU/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2099" ><p class="intro"><input type="checkbox" class="delete" name="delete_2099" id="delete_2099" /><label for="delete_2099"><span class="name">Idiot</span> <time datetime="2019-09-24T03:45:03Z">09/24/19 (Tue) 03:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2099" onclick="return highlightReply(2099, event)" href="/agg/res/2099#2099">No.</a><a class="post_no" onclick="return citeReply(2099)" href="/agg/res/2099#q2099">2099</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2099">[Reply]</a></p><div class="body">feel with me<br/><a href=https://gnfos.com/jp/res/369506.html>https://gnfos.com/jp/res/369506.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2098" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569295888871.jpg">1569295888871.jpg</a> <span class="unimportant">(69.98 KB, 407x266, <span class="postfilename">1569106447574.jpg</span>)</span></p><a href="/agg/src/1569295888871.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569295888871.jpg" style="width:367px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2098" ><p class="intro"><input type="checkbox" class="delete" name="delete_2098" id="delete_2098" /><label for="delete_2098"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-24T03:35:03Z">09/24/19 (Tue) 03:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2098" onclick="return highlightReply(2098, event)" href="/agg/res/2098#2098">No.</a><a class="post_no" onclick="return citeReply(2098)" href="/agg/res/2098#q2098">2098</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2098">[Reply]</a></p><div class="body">How do I convince my mom we won&#39;t get shot at the Joker movie?<br/><a href=https://gnfos.com/jp/res/369503.html>https://gnfos.com/jp/res/369503.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/3" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a class="selected">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/5" method="get"><input type="submit" value="Next" /></form>
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