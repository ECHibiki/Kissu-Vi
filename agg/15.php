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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-2.png" alt="" />
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
<span style="display:none"><input type="text" name="user" value=""></span>
<div style="display:none"><input type="text" name="lastname" value=""></div>
<input type="hidden" name="board" value="agg">
<input name="vwdrx5ukc8⚶6yftnl♑" value="c|x☁&#45;☬vKNo&#121;&#109;☀`GQwd'Ti♴ O&#9770;&#76;3&gt;l6kS&#57;U%&#46;♰1V&#61;_(8B&#110;&#117;&#112;Z&#38;&lt;]52" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="login" value="x}FKalHy⛼?45{☓3twn/'♌26X⛩!$%#;hGO8&gt;@~zJS^0⚟Iod&lt;j[q(NALVfQ*bW=u ,)`r7mC|e-.☰c&amp;i♛⛗sv:T9_MEPgB]1Dk Z+" type="hidden" >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value="" name="text" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="q" value="⛥VvG&#55;P&#126;ryNq&#125;dC^☵u#/⛺&#36;U⛪0e&#64;F&#109;*&#41;Y&#99;">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" value="" name="ghndafeicmvp7w9z306421♐8lq">
			
			
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
		<div class="thread" id="thread_1897" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568252427389.jpg">1568252427389.jpg</a> <span class="unimportant">(254.42 KB, 947x1500, <span class="postfilename">1563402531149.jpg</span>)</span></p><a href="/agg/src/1568252427389.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568252427389.png" style="width:161px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1897" ><p class="intro"><input type="checkbox" class="delete" name="delete_1897" id="delete_1897" /><label for="delete_1897"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1897" onclick="return highlightReply(1897, event)" href="/agg/res/1897#1897">No.</a><a class="post_no" onclick="return citeReply(1897)" href="/agg/res/1897#q1897">1897</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1897">[Reply]</a></p><div class="body">i really want a small, soft, and cute magical girl that smells nice to beat the shit out of me.<br/> maybe even kill me!<br/><a href=https://kissu.moe/qa/res/8403.html>https://kissu.moe/qa/res/8403.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1896" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568791873469.jpg">1568791873469.jpg</a> <span class="unimportant">(147.02 KB, 1500x1000, <span class="postfilename" title="096604fafcfb4ce55d02b669d84958cb-1000.jpg">096604fafcfb4ce55d02b669d8….jpg</span>)</span></p><a href="/agg/src/1568791873469.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568791873469.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1896" ><p class="intro"><input type="checkbox" class="delete" name="delete_1896" id="delete_1896" /><label for="delete_1896"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1896" onclick="return highlightReply(1896, event)" href="/agg/res/1896#1896">No.</a><a class="post_no" onclick="return citeReply(1896)" href="/agg/res/1896#q1896">1896</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1896">[Reply]</a></p><div class="body">hnnnng.<br/>No matter all the Reimus, Midaris, Rachels, and Mokous i meet<br/>for better or for worst, it seems my ideal girl is always kawashiro nitori. What is wrong with me. Even when she feels so far away, she keeps coming back into my life, as a reminder for what i want in a girl.<br/>She was my final fap before losing my virginity. i tink i fap to her after too. i do not know.<br/><br/>But, i have no met a kawashiro nitori girl. But, now i know, nitori is the one. And that the girl i marry, MUST be kawashiro nitori.<br/><br/><a href="https://www.youtube.com/watch?v=tX0PwiwvLnE" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=tX0PwiwvLnE</a><br/><a href=https://kissu.moe/qa/res/9438.html>https://kissu.moe/qa/res/9438.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1895" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568665131652.jpg">1568665131652.jpg</a> <span class="unimportant">(240.1 KB, 1280x720, <span class="postfilename">1485757957046.jpg</span>)</span></p><a href="/agg/src/1568665131652.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568665131652.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1895" ><p class="intro"><input type="checkbox" class="delete" name="delete_1895" id="delete_1895" /><label for="delete_1895"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1895" onclick="return highlightReply(1895, event)" href="/agg/res/1895#1895">No.</a><a class="post_no" onclick="return citeReply(1895)" href="/agg/res/1895#q1895">1895</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1895">[Reply]</a></p><div class="body"><span class="quote">&gt;No realms are currently available. (WOW51900309)</span><br/><a href=https://kissu.moe/qa/res/9114.html>https://kissu.moe/qa/res/9114.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1894" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568624267475.png">1568624267475.png</a> <span class="unimportant">(900.92 KB, 1905x584, <span class="postfilename" title="Screenshot_2019-09-16 Fall 2019 Anime Chart - All.png">Screenshot_2019-09-16 Fall….png</span>)</span></p><a href="/agg/src/1568624267475.png" target="_blank"><img class="post-image" src="/agg/thumb/1568624267475.png" style="width:255px;height:78px" alt="" /></a></div>    </div>    <div class="post op" id="op_1894" ><p class="intro"><input type="checkbox" class="delete" name="delete_1894" id="delete_1894" /><label for="delete_1894"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1894" onclick="return highlightReply(1894, event)" href="/agg/res/1894#1894">No.</a><a class="post_no" onclick="return citeReply(1894)" href="/agg/res/1894#q1894">1894</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1894">[Reply]</a></p><div class="body">While the fall season lineup doesn&#39;t stun me, it&#39;s got some promising entries in it. What&#39;s /qa/ planning to watch. And since we&#39;re coming up so close to the end of the decade, what&#39;s been your favorite anime of the 10&#39;s so far?<br/><a href=https://kissu.moe/qa/res/9049.html>https://kissu.moe/qa/res/9049.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1893" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568746804851.jpg">1568746804851.jpg</a> <span class="unimportant">(69.55 KB, 852x480, <span class="postfilename">1548714197423.jpg</span>)</span></p><a href="/agg/src/1568746804851.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568746804851.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1893" ><p class="intro"><input type="checkbox" class="delete" name="delete_1893" id="delete_1893" /><label for="delete_1893"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1893" onclick="return highlightReply(1893, event)" href="/agg/res/1893#1893">No.</a><a class="post_no" onclick="return citeReply(1893)" href="/agg/res/1893#q1893">1893</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1893">[Reply]</a></p><div class="body">I brought a new computer mouse a week ago and the scroll wheel is already acting strangely!<br/><a href=https://kissu.moe/qa/res/9269.html>https://kissu.moe/qa/res/9269.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1892" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568523737153.jpg">1568523737153.jpg</a> <span class="unimportant">(216.74 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Enen no Shouboutai - 10 [1080p].mkv_snapshot_17.43_[2019.09.15_00.00.04].jpg">[HorribleSubs] Enen no Sho….jpg</span>)</span></p><a href="/agg/src/1568523737153.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568523737153.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1892" ><p class="intro"><input type="checkbox" class="delete" name="delete_1892" id="delete_1892" /><label for="delete_1892"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1892" onclick="return highlightReply(1892, event)" href="/agg/res/1892#1892">No.</a><a class="post_no" onclick="return citeReply(1892)" href="/agg/res/1892#q1892">1892</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1892">[Reply]</a></p><div class="body">When did you first realize life was going to be okay?<br/>Me? It was when Tamaki entered my life<br/><a href=https://kissu.moe/qa/res/8860.html>https://kissu.moe/qa/res/8860.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1891" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568776911478.png">1568776911478.png</a> <span class="unimportant">(1.14 MB, 1430x1670, <span class="postfilename" title="b70ff9f96103eea430a66cf2625db38e.png">b70ff9f96103eea430a66cf262….png</span>)</span></p><a href="/agg/src/1568776911478.png" target="_blank"><img class="post-image" src="/agg/thumb/1568776911478.png" style="width:218px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1891" ><p class="intro"><input type="checkbox" class="delete" name="delete_1891" id="delete_1891" /><label for="delete_1891"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1891" onclick="return highlightReply(1891, event)" href="/agg/res/1891#1891">No.</a><a class="post_no" onclick="return citeReply(1891)" href="/agg/res/1891#q1891">1891</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1891">[Reply]</a></p><div class="body">Why are anime girls such LOLICONS?!<br/><a href=https://kissu.moe/qa/res/9385.html>https://kissu.moe/qa/res/9385.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1890" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568486546263.png">1568486546263.png</a> <span class="unimportant">(2.05 MB, 1100x1555, <span class="postfilename" title="3ea94439febd195731d7a2ffffb4310a.png">3ea94439febd195731d7a2ffff….png</span>)</span></p><a href="/agg/src/1568486546263.png" target="_blank"><img class="post-image" src="/agg/thumb/1568486546263.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1890" ><p class="intro"><input type="checkbox" class="delete" name="delete_1890" id="delete_1890" /><label for="delete_1890"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1890" onclick="return highlightReply(1890, event)" href="/agg/res/1890#1890">No.</a><a class="post_no" onclick="return citeReply(1890)" href="/agg/res/1890#q1890">1890</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1890">[Reply]</a></p><div class="body">for you, /qa/<br/><a href=https://kissu.moe/qa/res/8775.html>https://kissu.moe/qa/res/8775.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1889" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568225424488.gif">1568225424488.gif</a> <span class="unimportant">(2.55 MB, 1152x1152, <span class="postfilename" title="c63cae1344766f14d9d184e5aafed065.gif">c63cae1344766f14d9d184e5aa….gif</span>)</span></p><a href="/agg/src/1568225424488.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568225424488.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1889" ><p class="intro"><input type="checkbox" class="delete" name="delete_1889" id="delete_1889" /><label for="delete_1889"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1889" onclick="return highlightReply(1889, event)" href="/agg/res/1889#1889">No.</a><a class="post_no" onclick="return citeReply(1889)" href="/agg/res/1889#q1889">1889</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1889">[Reply]</a></p><div class="body">Can you play games on imageboards?<br/><a href=https://kissu.moe/qa/res/8318.html>https://kissu.moe/qa/res/8318.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1888" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568782247519.jpeg">1568782247519.jpeg</a> <span class="unimportant">(357.92 KB, 2168x1383, <span class="postfilename" title="99161268-4A6A-46FC-BEBB-0CACA192145C.jpeg">99161268-4A6A-46FC-BEBB-0….jpeg</span>)</span></p><a href="/agg/src/1568782247519.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568782247519.png" style="width:255px;height:163px" alt="" /></a></div>    </div>    <div class="post op" id="op_1888" ><p class="intro"><input type="checkbox" class="delete" name="delete_1888" id="delete_1888" /><label for="delete_1888"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1888" onclick="return highlightReply(1888, event)" href="/agg/res/1888#1888">No.</a><a class="post_no" onclick="return citeReply(1888)" href="/agg/res/1888#q1888">1888</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1888">[Reply]</a></p><div class="body">Nothing new comes from the sun.<br/>All that is new comes from our Lord.<br/>Life is a continuation,<br/>It is our Lord who gives life,<br/>Amen.<br/><a href=https://kissu.moe/qa/res/9417.html>https://kissu.moe/qa/res/9417.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1887" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568421949811.jpg">1568421949811.jpg</a> <span class="unimportant">(342.49 KB, 768x1024, <span class="postfilename">76242922_p0.jpg</span>)</span></p><a href="/agg/src/1568421949811.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568421949811.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1887" ><p class="intro"><input type="checkbox" class="delete" name="delete_1887" id="delete_1887" /><label for="delete_1887"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1887" onclick="return highlightReply(1887, event)" href="/agg/res/1887#1887">No.</a><a class="post_no" onclick="return citeReply(1887)" href="/agg/res/1887#q1887">1887</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1887">[Reply]</a></p><div class="body">Lala&#39;s home planet was so disappointing. I was expected a whole planet of people similar to Lala, but instead she&#39;s a black sheep.<br/>And there weren&#39;t any giant bananas to be seen<br/><a href=https://kissu.moe/qa/res/8653.html>https://kissu.moe/qa/res/8653.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1886" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568386826517.jpg">1568386826517.jpg</a> <span class="unimportant">(771.77 KB, 822x1000, <span class="postfilename" title="__kasane_teto_utau_drawn_by_amane_kurumi__16ec4b740968e9a068b7b50644a3f76a.jpg">__kasane_teto_utau_drawn_b….jpg</span>)</span></p><a href="/agg/src/1568386826517.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568386826517.png" style="width:210px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1886" ><p class="intro"><input type="checkbox" class="delete" name="delete_1886" id="delete_1886" /><label for="delete_1886"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1886" onclick="return highlightReply(1886, event)" href="/agg/res/1886#1886">No.</a><a class="post_no" onclick="return citeReply(1886)" href="/agg/res/1886#q1886">1886</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1886">[Reply]</a></p><div class="body">i freaking love bread<br/><a href=https://kissu.moe/qa/res/8603.html>https://kissu.moe/qa/res/8603.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1885" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568622569104.jpg">1568622569104.jpg</a> <span class="unimportant">(104 KB, 649x900, <span class="postfilename" title="911dce60b7fc92baabd63b6bc193b25d.jpg">911dce60b7fc92baabd63b6bc1….jpg</span>)</span></p><a href="/agg/src/1568622569104.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568622569104.png" style="width:184px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1885" ><p class="intro"><input type="checkbox" class="delete" name="delete_1885" id="delete_1885" /><label for="delete_1885"><span class="subject">what are the best spinoffs for specific boards</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1885" onclick="return highlightReply(1885, event)" href="/agg/res/1885#1885">No.</a><a class="post_no" onclick="return citeReply(1885)" href="/agg/res/1885#q1885">1885</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1885">[Reply]</a></p><div class="body">Like how kissu is (my) best /qa/ spinoff, what are the best spinoffs for other boards, like /jp/, /v/, /a/, etc.<br/><a href=https://kissu.moe/qa/res/9047.html>https://kissu.moe/qa/res/9047.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1884" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568594444973.png">1568594444973.png</a> <span class="unimportant">(13.04 MB, 4985x3520, <span class="postfilename" title="6c27931bcd88942da2c0cef25be42ce9.png">6c27931bcd88942da2c0cef25b….png</span>)</span></p><a href="/agg/src/1568594444973.png" target="_blank"><img class="post-image" src="/agg/thumb/1568594444973.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1884" ><p class="intro"><input type="checkbox" class="delete" name="delete_1884" id="delete_1884" /><label for="delete_1884"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1884" onclick="return highlightReply(1884, event)" href="/agg/res/1884#1884">No.</a><a class="post_no" onclick="return citeReply(1884)" href="/agg/res/1884#q1884">1884</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1884">[Reply]</a></p><div class="body">the floor is mirrors<br/><a href=https://kissu.moe/qa/res/9013.html>https://kissu.moe/qa/res/9013.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1883" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568737701209.jpeg">1568737701209.jpeg</a> <span class="unimportant">(176.04 KB, 900x600, <span class="postfilename" title="6b03dfa990702d43bb2e8e2b54d80555.jpeg">6b03dfa990702d43bb2e8e2b5….jpeg</span>)</span></p><a href="/agg/src/1568737701209.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568737701209.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1883" ><p class="intro"><input type="checkbox" class="delete" name="delete_1883" id="delete_1883" /><label for="delete_1883"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1883" onclick="return highlightReply(1883, event)" href="/agg/res/1883#1883">No.</a><a class="post_no" onclick="return citeReply(1883)" href="/agg/res/1883#q1883">1883</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1883">[Reply]</a></p><div class="body">What you guys are referring to as Linux, is in fact, GNU/Linux, or as I&#39;ve recently taken to calling it, GNU plus Linux. Linux is not an operating system unto itself, but rather another free component of a fully functioning GNU system made useful by the GNU corelibs, shell utilities and vital system components comprising a full OS as defined by POSIX.<br/><br/>Many computer users run a modified version of the GNU system every day, without realizing it. Through a peculiar turn of events, the version of GNU which is widely used today is often called "Linux", and many of its users are not aware that it is basically the GNU system, developed by the GNU Project.<br/><br/>There really is a Linux, and these people are using it, but it is just a part of the system they use. Linux is the kernel: the program in the system that allocates the machine&#39;s resources to the other programs that you run. The kernel is an essential part of an operating system, but useless by itself; it can only function in the context of a complete operating system. Linux is normally used in combination with the GNU operating system: the whole system is basically GNU with Linux added, or GNU/Linux. All the so-called "Linux" distributions are really distributions of GNU/Linux.<br/><a href=https://kissu.moe/qa/res/9262.html>https://kissu.moe/qa/res/9262.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1882" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568572592503.png">1568572592503.png</a> <span class="unimportant">(742.06 KB, 1024x1024, <span class="postfilename">fluffy tail.png</span>)</span></p><a href="/agg/src/1568572592503.png" target="_blank"><img class="post-image" src="/agg/thumb/1568572592503.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1882" ><p class="intro"><input type="checkbox" class="delete" name="delete_1882" id="delete_1882" /><label for="delete_1882"><span class="subject">mofuposting</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1882" onclick="return highlightReply(1882, event)" href="/agg/res/1882#1882">No.</a><a class="post_no" onclick="return citeReply(1882)" href="/agg/res/1882#q1882">1882</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1882">[Reply]</a></p><div class="body">alternative: fuwaposting<br/><a href=https://kissu.moe/qa/res/8951.html>https://kissu.moe/qa/res/8951.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1881" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568605559933.jpg">1568605559933.jpg</a> <span class="unimportant">(189.55 KB, 710x478, <span class="postfilename" title="13. Kino no Tabi - the Beautiful World [Hi10p AAC][kuchikirukia].mkv_snapshot_02.25_[2019.09.15_23.45.37].jpg">13. Kino no Tabi - the Bea….jpg</span>)</span></p><a href="/agg/src/1568605559933.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568605559933.png" style="width:255px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_1881" ><p class="intro"><input type="checkbox" class="delete" name="delete_1881" id="delete_1881" /><label for="delete_1881"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1881" onclick="return highlightReply(1881, event)" href="/agg/res/1881#1881">No.</a><a class="post_no" onclick="return citeReply(1881)" href="/agg/res/1881#q1881">1881</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1881">[Reply]</a></p><div class="body">the /qa/ bird<br/><a href=https://kissu.moe/qa/res/9025.html>https://kissu.moe/qa/res/9025.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1880" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568699860324.jpg">1568699860324.jpg</a> <span class="unimportant">(318.04 KB, 850x850, <span class="postfilename" title="d649844cd0f43a869c3eb31c6489d2c1.jpg">d649844cd0f43a869c3eb31c64….jpg</span>)</span></p><a href="/agg/src/1568699860324.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568699860324.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1880" ><p class="intro"><input type="checkbox" class="delete" name="delete_1880" id="delete_1880" /><label for="delete_1880"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1880" onclick="return highlightReply(1880, event)" href="/agg/res/1880#1880">No.</a><a class="post_no" onclick="return citeReply(1880)" href="/agg/res/1880#q1880">1880</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1880">[Reply]</a></p><div class="body">remember to hang christmas lights in your room even if it&#39;s not christmas! it improves the comfy by 100% and then you won&#39;t have to hang them when chrismas time comes.<br/><a href=https://kissu.moe/qa/res/9241.html>https://kissu.moe/qa/res/9241.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1879" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568689141656.png">1568689141656.png</a> <span class="unimportant">(816.09 KB, 1075x1500, <span class="postfilename" title="62b580de9b13374d1a11e690fec672d1.png">62b580de9b13374d1a11e690fe….png</span>)</span></p><a href="/agg/src/1568689141656.png" target="_blank"><img class="post-image" src="/agg/thumb/1568689141656.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1879" ><p class="intro"><input type="checkbox" class="delete" name="delete_1879" id="delete_1879" /><label for="delete_1879"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1879" onclick="return highlightReply(1879, event)" href="/agg/res/1879#1879">No.</a><a class="post_no" onclick="return citeReply(1879)" href="/agg/res/1879#q1879">1879</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1879">[Reply]</a></p><div class="body">Are these nekomimi to your liking, goshujinsama?<br/><a href=https://kissu.moe/qa/res/9206.html>https://kissu.moe/qa/res/9206.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1878" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568762188617.jpg">1568762188617.jpg</a> <span class="unimportant">(906.88 KB, 1200x1600, <span class="postfilename">1530284594877.jpg</span>)</span></p><a href="/agg/src/1568762188617.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568762188617.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1878" ><p class="intro"><input type="checkbox" class="delete" name="delete_1878" id="delete_1878" /><label for="delete_1878"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1878" onclick="return highlightReply(1878, event)" href="/agg/res/1878#1878">No.</a><a class="post_no" onclick="return citeReply(1878)" href="/agg/res/1878#q1878">1878</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1878">[Reply]</a></p><div class="body">since this site is moderated bringing up this topic shouldn&#39;t be too big a deal. what are you&#39;re thoughts on frogposters, specifically the ones on /qa/? i personally despise them and all the faction shitposting they stand for. especially when they espouse that they were doing it for the sake of meta, and the state of meta on /qa/ couldn&#39;t be in any worse shape.<br/><a href=https://kissu.moe/qa/res/9285.html>https://kissu.moe/qa/res/9285.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/14" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a class="selected">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/16" method="get"><input type="submit" value="Next" /></form>
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