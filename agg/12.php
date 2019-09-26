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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-7.jpg" alt="" />
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
<input type="hidden" name="n2epfz9o8lygk6♒ub1ia3sjw7450vh" value=";EwqN*d9⛳PL☖])(yulRMJ_T D⛌?\=`o⛗.n}!gxc⚫jXW&lt; A^Gb'v2U5☶p+z☟rO#Z,$Qa4☄@kS7BYFKtV⚇msi1H">
<textarea  style="display:none"  name="username">J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\</textarea>
<input type="hidden" name="board" value="agg">
<input type="hidden" value="g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{" name="lastname">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="search" value="" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<span   style="display:none"  ><input   type="text"   name="user"   value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;"  ></span  >
			</td>
		</tr>		<tr>
			<th>
				Options				<input name="7ykdefr3jg0ioqn2491mbap" value="" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input  type="hidden"  value=""  name="2x⛝tavigslre96d83o7b♉yn1">
			
			
				<div style="display:none"><input type="text" name="iaze6dys♅pc97xrj8" value=""></div>
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input  name="url"  value="24827"  type="hidden" >
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input   style="display:none"   type="text"   value=""   name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf">
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<input  type="hidden"  value="WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?"  name="text" >
				
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
								<textarea name="firstname" style="display:none">H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t</textarea>
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
		<div class="thread" id="thread_1957" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569038692515.png">1569038692515.png</a> <span class="unimportant">(155.13 KB, 485x797, <span class="postfilename" title="e7b3f3fb5a1f31f8cf3dcf25dabb801693141a9b.png">e7b3f3fb5a1f31f8cf3dcf25da….png</span>)</span></p><a href="/agg/src/1569038692515.png" target="_blank"><img class="post-image" src="/agg/thumb/1569038692515.png" style="width:155px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1957" ><p class="intro"><input type="checkbox" class="delete" name="delete_1957" id="delete_1957" /><label for="delete_1957"><span class="name">Anonymous</span> <time datetime="2019-09-21T04:05:03Z">09/21/19 (Sat) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1957" onclick="return highlightReply(1957, event)" href="/agg/res/1957#1957">No.</a><a class="post_no" onclick="return citeReply(1957)" href="/agg/res/1957#q1957">1957</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1957">[Reply]</a></p><div class="body">friday night oj with your friends!<br/><br/>100% /qa/<br/>friends<br/><a href=https://kissu.moe/qa/res/9799.html>https://kissu.moe/qa/res/9799.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1956" data-board="agg"><div class="video-container" data-video="rR15EKRlU8U"><a href="https://youtu.be/rR15EKRlU8U" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/rR15EKRlU8U/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1956" ><p class="intro"><input type="checkbox" class="delete" name="delete_1956" id="delete_1956" /><label for="delete_1956"><span class="name">Tada Banri</span> <time datetime="2019-09-21T03:55:03Z">09/21/19 (Sat) 03:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1956" onclick="return highlightReply(1956, event)" href="/agg/res/1956#1956">No.</a><a class="post_no" onclick="return citeReply(1956)" href="/agg/res/1956#q1956">1956</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1956">[Reply]</a></p><div class="body">Bruh Jordan person is a fucking druggie LMAO nigga need to clean his room<br/><a href=https://gnfos.com/jp/res/369105.html>https://gnfos.com/jp/res/369105.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1955" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569036362806.jpeg">1569036362806.jpeg</a> <span class="unimportant">(86.79 KB, 750x377, <span class="postfilename" title="895B4CB0-7CFB-471F-8295-EA671C9B8B20.jpeg">895B4CB0-7CFB-471F-8295-E….jpeg</span>)</span></p><a href="/agg/src/1569036362806.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569036362806.jpeg" style="width:427px;height:215px" alt="" /></a></div>    </div>    <div class="post op" id="op_1955" ><p class="intro"><input type="checkbox" class="delete" name="delete_1955" id="delete_1955" /><label for="delete_1955"><span class="name">Tada Banri</span> <time datetime="2019-09-21T03:30:03Z">09/21/19 (Sat) 03:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1955" onclick="return highlightReply(1955, event)" href="/agg/res/1955#1955">No.</a><a class="post_no" onclick="return citeReply(1955)" href="/agg/res/1955#q1955">1955</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1955">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369104.html>https://gnfos.com/jp/res/369104.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1954" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569032528794.jpg">1569032528794.jpg</a> <span class="unimportant">(230.92 KB, 1797x1011, <span class="postfilename" title="mpc-hc64_2019-09-20_21-19-52.jpg">mpc-hc64_2019-09-20_21-19-….jpg</span>)</span></p><a href="/agg/src/1569032528794.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569032528794.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1954" ><p class="intro"><input type="checkbox" class="delete" name="delete_1954" id="delete_1954" /><label for="delete_1954"><span class="name">Anonymous</span> <time datetime="2019-09-21T02:25:03Z">09/21/19 (Sat) 02:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1954" onclick="return highlightReply(1954, event)" href="/agg/res/1954#1954">No.</a><a class="post_no" onclick="return citeReply(1954)" href="/agg/res/1954#q1954">1954</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1954">[Reply]</a></p><div class="body">Finally going to watch the Higurashi fanservice OVA. I had no idea that&#39;s what this song was from<br/><a href=https://kissu.moe/qa/res/9788.html>https://kissu.moe/qa/res/9788.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1953" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569026582114.jpg">1569026582114.jpg</a> <span class="unimportant">(275.76 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Enen no Shouboutai - 11 [1080p].mkv_snapshot_00.15_[2019.09.20_19.41.05].jpg">[HorribleSubs] Enen no Sho….jpg</span>)</span></p><a href="/agg/src/1569026582114.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569026582114.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1953" ><p class="intro"><input type="checkbox" class="delete" name="delete_1953" id="delete_1953" /><label for="delete_1953"><span class="name">Anonymous</span> <time datetime="2019-09-21T00:45:03Z">09/21/19 (Sat) 00:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1953" onclick="return highlightReply(1953, event)" href="/agg/res/1953#1953">No.</a><a class="post_no" onclick="return citeReply(1953)" href="/agg/res/1953#q1953">1953</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1953">[Reply]</a></p><div class="body">they see your /qa/<br/><a href=https://kissu.moe/qa/res/9780.html>https://kissu.moe/qa/res/9780.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1952" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569025229863.jpg">1569025229863.jpg</a> <span class="unimportant">(81.09 KB, 931x859, <span class="postfilename">1562025214261.jpg</span>)</span></p><a href="/agg/src/1569025229863.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569025229863.png" style="width:255px;height:235px" alt="" /></a></div>    </div>    <div class="post op" id="op_1952" ><p class="intro"><input type="checkbox" class="delete" name="delete_1952" id="delete_1952" /><label for="delete_1952"><span class="name">Anonymous</span> <time datetime="2019-09-21T00:25:04Z">09/21/19 (Sat) 00:25:04</time></label>&nbsp;<a class="post_no" id="post_no_1952" onclick="return highlightReply(1952, event)" href="/agg/res/1952#1952">No.</a><a class="post_no" onclick="return citeReply(1952)" href="/agg/res/1952#q1952">1952</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1952">[Reply]</a></p><div class="body">ぽゃ〜<br/><a href=https://kissu.moe/qa/res/9775.html>https://kissu.moe/qa/res/9775.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1951" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569023876287.png">1569023876287.png</a> <span class="unimportant">(486.99 KB, 563x900, <span class="postfilename" title="fec534283f02badfdcc117e2b84e19af.png">fec534283f02badfdcc117e2b8….png</span>)</span></p><a href="/agg/src/1569023876287.png" target="_blank"><img class="post-image" src="/agg/thumb/1569023876287.png" style="width:160px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1951" ><p class="intro"><input type="checkbox" class="delete" name="delete_1951" id="delete_1951" /><label for="delete_1951"><span class="name">Anonymous</span> <time datetime="2019-09-21T00:00:04Z">09/21/19 (Sat) 00:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1951" onclick="return highlightReply(1951, event)" href="/agg/res/1951#1951">No.</a><a class="post_no" onclick="return citeReply(1951)" href="/agg/res/1951#q1951">1951</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1951">[Reply]</a></p><div class="body">fuck /qa]<br/><a href=https://kissu.moe/qa/res/9767.html>https://kissu.moe/qa/res/9767.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1950" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569023439702.jpeg">1569023439702.jpeg</a> <span class="unimportant">(1.01 MB, 1600x1200, <span class="postfilename" title="D99D0ACE-01E4-436A-9A90-ECFC54371150.jpeg">D99D0ACE-01E4-436A-9A90-E….jpeg</span>)</span></p><a href="/agg/src/1569023439702.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569023439702.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1950" ><p class="intro"><input type="checkbox" class="delete" name="delete_1950" id="delete_1950" /><label for="delete_1950"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T23:55:03Z">09/20/19 (Fri) 23:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1950" onclick="return highlightReply(1950, event)" href="/agg/res/1950#1950">No.</a><a class="post_no" onclick="return citeReply(1950)" href="/agg/res/1950#q1950">1950</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1950">[Reply]</a></p><div class="body">Why is black culture so destructive<br/><a href=https://gnfos.com/jp/res/369076.html>https://gnfos.com/jp/res/369076.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1949" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569023224138.png">1569023224138.png</a> <span class="unimportant">(234.32 KB, 1500x1500, <span class="postfilename">hibikimon.png</span>)</span></p><a href="/agg/src/1569023224138.png" target="_blank"><img class="post-image" src="/agg/thumb/1569023224138.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1949" ><p class="intro"><input type="checkbox" class="delete" name="delete_1949" id="delete_1949" /><label for="delete_1949"><span class="name">Anonymous</span> <time datetime="2019-09-20T23:50:03Z">09/20/19 (Fri) 23:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1949" onclick="return highlightReply(1949, event)" href="/agg/res/1949#1949">No.</a><a class="post_no" onclick="return citeReply(1949)" href="/agg/res/1949#q1949">1949</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1949">[Reply]</a></p><div class="body">test test test test test<br/><a href=http://what-ch.mooo.com/what/res/2644.html>http://what-ch.mooo.com/what/res/2644.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1948" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569022495470.jpg">1569022495470.jpg</a> <span class="unimportant">(663.27 KB, 1063x1500, <span class="postfilename">909f.jpg</span>)</span></p><a href="/agg/src/1569022495470.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569022495470.jpg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1948" ><p class="intro"><input type="checkbox" class="delete" name="delete_1948" id="delete_1948" /><label for="delete_1948"><span class="subject">Fuck the mods</span> <span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T23:35:04Z">09/20/19 (Fri) 23:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1948" onclick="return highlightReply(1948, event)" href="/agg/res/1948#1948">No.</a><a class="post_no" onclick="return citeReply(1948)" href="/agg/res/1948#q1948">1948</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1948">[Reply]</a></p><div class="body"><span class="heading">Come funpost at <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://gnfos.com/jp/res/369074.html>https://gnfos.com/jp/res/369074.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1947" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569022434535.png">1569022434535.png</a> <span class="unimportant">(73.94 KB, 300x256, <span class="postfilename">084.png</span>)</span></p><a href="/agg/src/1569022434535.png" target="_blank"><img class="post-image" src="/agg/thumb/1569022434535.png" style="width:281px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1947" ><p class="intro"><input type="checkbox" class="delete" name="delete_1947" id="delete_1947" /><label for="delete_1947"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T23:35:04Z">09/20/19 (Fri) 23:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1947" onclick="return highlightReply(1947, event)" href="/agg/res/1947#1947">No.</a><a class="post_no" onclick="return citeReply(1947)" href="/agg/res/1947#q1947">1947</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1947">[Reply]</a></p><div class="body"><span class="quote">&gt;that pedophile developer who eats his own foot fungus</span><br/>Unironically <em>who</em>?<br/><a href=https://gnfos.com/jp/res/369073.html>https://gnfos.com/jp/res/369073.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1946" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569020383798.jpg">1569020383798.jpg</a> <span class="unimportant">(55.52 KB, 796x960, <span class="postfilename">1568930110751.jpg</span>)</span></p><a href="/agg/src/1569020383798.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569020383798.jpg" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1946" ><p class="intro"><input type="checkbox" class="delete" name="delete_1946" id="delete_1946" /><label for="delete_1946"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T23:00:04Z">09/20/19 (Fri) 23:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1946" onclick="return highlightReply(1946, event)" href="/agg/res/1946#1946">No.</a><a class="post_no" onclick="return citeReply(1946)" href="/agg/res/1946#q1946">1946</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1946">[Reply]</a></p><div class="body">I hate myself<br/><a href=https://gnfos.com/jp/res/369072.html>https://gnfos.com/jp/res/369072.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1945" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569018069616.png">1569018069616.png</a> <span class="unimportant">(471.97 KB, 720x715, <span class="postfilename" title="A1B25248-3996-4128-BEE1-88D502AFBCF4.png">A1B25248-3996-4128-BEE1-88….png</span>)</span></p><a href="/agg/src/1569018069616.png" target="_blank"><img class="post-image" src="/agg/thumb/1569018069616.png" style="width:242px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1945" ><p class="intro"><input type="checkbox" class="delete" name="delete_1945" id="delete_1945" /><label for="delete_1945"><span class="name">Idiot</span> <time datetime="2019-09-20T22:25:03Z">09/20/19 (Fri) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1945" onclick="return highlightReply(1945, event)" href="/agg/res/1945#1945">No.</a><a class="post_no" onclick="return citeReply(1945)" href="/agg/res/1945#q1945">1945</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1945">[Reply]</a></p><div class="body">If whites are so smart how come they are dying out lol<br/><a href=https://gnfos.com/jp/res/369064.html>https://gnfos.com/jp/res/369064.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1944" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569017590292.png">1569017590292.png</a> <span class="unimportant">(371.31 KB, 735x562, <span class="postfilename">1569009088786-1.png</span>)</span></p><a href="/agg/src/1569017590292.png" target="_blank"><img class="post-image" src="/agg/thumb/1569017590292.png" style="width:314px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1944" ><p class="intro"><input type="checkbox" class="delete" name="delete_1944" id="delete_1944" /><label for="delete_1944"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-20T22:15:03Z">09/20/19 (Fri) 22:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1944" onclick="return highlightReply(1944, event)" href="/agg/res/1944#1944">No.</a><a class="post_no" onclick="return citeReply(1944)" href="/agg/res/1944#q1944">1944</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1944">[Reply]</a></p><div class="body">White women everybody<br/><a href=https://gnfos.com/jp/res/369057.html>https://gnfos.com/jp/res/369057.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1943" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569016600868.jpg">1569016600868.jpg</a> <span class="unimportant">(1.89 MB, 2450x3200, <span class="postfilename" title="1b22816636057ddcd732d1d6deb34de7-imagejpeg.jpg">1b22816636057ddcd732d1d6de….jpg</span>)</span></p><a href="/agg/src/1569016600868.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569016600868.png" style="width:196px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1943" ><p class="intro"><input type="checkbox" class="delete" name="delete_1943" id="delete_1943" /><label for="delete_1943"><span class="name">Anonymous</span> <time datetime="2019-09-20T22:00:04Z">09/20/19 (Fri) 22:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1943" onclick="return highlightReply(1943, event)" href="/agg/res/1943#1943">No.</a><a class="post_no" onclick="return citeReply(1943)" href="/agg/res/1943#q1943">1943</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1943">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/9756.html>https://kissu.moe/qa/res/9756.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1942" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569016482257.jpg">1569016482257.jpg</a> <span class="unimportant">(509.05 KB, 1200x860, <span class="postfilename" title="eecf69194dd9ad5df54765a8de3d3c967827f1bd.jpg">eecf69194dd9ad5df54765a8de….jpg</span>)</span></p><a href="/agg/src/1569016482257.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569016482257.png" style="width:255px;height:183px" alt="" /></a></div>    </div>    <div class="post op" id="op_1942" ><p class="intro"><input type="checkbox" class="delete" name="delete_1942" id="delete_1942" /><label for="delete_1942"><span class="name">Anonymous</span> <time datetime="2019-09-20T21:55:03Z">09/20/19 (Fri) 21:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1942" onclick="return highlightReply(1942, event)" href="/agg/res/1942#1942">No.</a><a class="post_no" onclick="return citeReply(1942)" href="/agg/res/1942#q1942">1942</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1942">[Reply]</a></p><div class="body">Oh?<br/><a href=https://kissu.moe/qa/res/9754.html>https://kissu.moe/qa/res/9754.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1941" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569016073535.jpg">1569016073535.jpg</a> <span class="unimportant">(17.39 KB, 526x255, <span class="postfilename">1569016001590.jpg</span>)</span></p><a href="/agg/src/1569016073535.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569016073535.jpg" style="width:427px;height:207px" alt="" /></a></div>    </div>    <div class="post op" id="op_1941" ><p class="intro"><input type="checkbox" class="delete" name="delete_1941" id="delete_1941" /><label for="delete_1941"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T21:50:06Z">09/20/19 (Fri) 21:50:06</time></label>&nbsp;<a class="post_no" id="post_no_1941" onclick="return highlightReply(1941, event)" href="/agg/res/1941#1941">No.</a><a class="post_no" onclick="return citeReply(1941)" href="/agg/res/1941#q1941">1941</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1941">[Reply]</a></p><div class="body">fishe<br/><a href=https://gnfos.com/jp/res/369053.html>https://gnfos.com/jp/res/369053.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1940" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569015314841.gif">1569015314841.gif</a> <span class="unimportant">(1.46 MB, 500x629, <span class="postfilename">1441776439510.gif</span>)</span></p><a href="/agg/src/1569015314841.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569015314841.gif" style="width:191px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1940" ><p class="intro"><input type="checkbox" class="delete" name="delete_1940" id="delete_1940" /><label for="delete_1940"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T21:40:04Z">09/20/19 (Fri) 21:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1940" onclick="return highlightReply(1940, event)" href="/agg/res/1940#1940">No.</a><a class="post_no" onclick="return citeReply(1940)" href="/agg/res/1940#q1940">1940</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1940">[Reply]</a></p><div class="body">Tempted?<br/><a href=https://gnfos.com/jp/res/369052.html>https://gnfos.com/jp/res/369052.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1939" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569013532198.jpeg">1569013532198.jpeg</a> <span class="unimportant">(1.6 MB, 3264x2448, <span class="postfilename" title="001ACE36-9A0E-4E5E-9B92-18FE292171FA.jpeg">001ACE36-9A0E-4E5E-9B92-1….jpeg</span>)</span></p><a href="/agg/src/1569013532198.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569013532198.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1939" ><p class="intro"><input type="checkbox" class="delete" name="delete_1939" id="delete_1939" /><label for="delete_1939"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T21:10:04Z">09/20/19 (Fri) 21:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1939" onclick="return highlightReply(1939, event)" href="/agg/res/1939#1939">No.</a><a class="post_no" onclick="return citeReply(1939)" href="/agg/res/1939#q1939">1939</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1939">[Reply]</a></p><div class="body">How many gallons of cum have you excreted over the years<br/><a href=https://gnfos.com/jp/res/369050.html>https://gnfos.com/jp/res/369050.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1938" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569012517614.png">1569012517614.png</a> <span class="unimportant">(34.64 KB, 300x177, <span class="postfilename" title="707506D3-6D71-424B-B9E9-A6CB97CADE55.png">707506D3-6D71-424B-B9E9-A6….png</span>)</span></p><a href="/agg/src/1569012517614.png" target="_blank"><img class="post-image" src="/agg/thumb/1569012517614.png" style="width:300px;height:177px" alt="" /></a></div>    </div>    <div class="post op" id="op_1938" ><p class="intro"><input type="checkbox" class="delete" name="delete_1938" id="delete_1938" /><label for="delete_1938"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T20:50:03Z">09/20/19 (Fri) 20:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1938" onclick="return highlightReply(1938, event)" href="/agg/res/1938#1938">No.</a><a class="post_no" onclick="return citeReply(1938)" href="/agg/res/1938#q1938">1938</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1938">[Reply]</a></p><div class="body">How do I stop masturbating to traumatic memories all day<br/><a href=https://gnfos.com/jp/res/369049.html>https://gnfos.com/jp/res/369049.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/11" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a class="selected">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/13" method="get"><input type="submit" value="Next" /></form>
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