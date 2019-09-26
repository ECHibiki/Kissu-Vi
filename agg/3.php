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
<div style="display:none"><input type="text" name="n2epfz9o8lygk6♒ub1ia3sjw7450vh" value=";EwqN*d9⛳PL☖])(yulRMJ_T D⛌?\=`o⛗.n}!gxc⚫jXW&lt; A^Gb'v2U5☶p+z☟rO#Z,$Qa4☄@kS7BYFKtV⚇msi1H"></div>
<input type="hidden" name="username" value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\">
<input type="hidden" name="board" value="agg">
<span style="display:none"><input type="text" name="lastname" value="g-[N&gt;r&#111;⛚V2Fs&#90;9&#61;A&#99;!&#100;+&#117;L⛈B&#102;Y76&#113;0IhR&#122;EO?\&#9787;⛻aQ&#74;&#77;GW5&#85;{"></span>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="search" value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input name="user" value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<input type="hidden" name="7ykdefr3jg0ioqn2491mbap" value="">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span   style="display:none"><input   type="text"   name="2x⛝tavigslre96d83o7b♉yn1"   value=""></span>
			
			
				<input  style="display:none"  type="text"  value=""  name="iaze6dys♅pc97xrj8">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<div   style="display:none"><input   type="text"   name="url"   value="24827"></div>
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
				<textarea name="text" style="display:none">WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?</textarea>
				
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
		<div class="thread" id="thread_2137" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569427643054.png">1569427643054.png</a> <span class="unimportant">(540.44 KB, 663x585, <span class="postfilename">1569417480314.png</span>)</span></p><a href="/agg/src/1569427643054.png" target="_blank"><img class="post-image" src="/agg/thumb/1569427643054.png" style="width:272px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2137" ><p class="intro"><input type="checkbox" class="delete" name="delete_2137" id="delete_2137" /><label for="delete_2137"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T16:10:03Z">09/25/19 (Wed) 16:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2137" onclick="return highlightReply(2137, event)" href="/agg/res/2137#2137">No.</a><a class="post_no" onclick="return citeReply(2137)" href="/agg/res/2137#q2137">2137</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2137">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369576.html>https://gnfos.com/jp/res/369576.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2136" data-board="agg"><div class="video-container" data-video="4lon4fZaoXI"><a href="https://youtu.be/4lon4fZaoXI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/4lon4fZaoXI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2136" ><p class="intro"><input type="checkbox" class="delete" name="delete_2136" id="delete_2136" /><label for="delete_2136"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T16:00:03Z">09/25/19 (Wed) 16:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2136" onclick="return highlightReply(2136, event)" href="/agg/res/2136#2136">No.</a><a class="post_no" onclick="return citeReply(2136)" href="/agg/res/2136#q2136">2136</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2136">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369574.html>https://gnfos.com/jp/res/369574.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2135" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/m1569426189506.png">m1569426189506.png</a> <span class="unimportant">(885.84 KB, 1240x1240, <span class="postfilename" title="f24464ce3b4df41b6dea09426578fd28.png">f24464ce3b4df41b6dea094265….png</span>)</span></p><a href="/agg/src/m1569426189506.png" target="_blank"><img class="post-image" src="/agg/thumb/m1569426189506.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2135" ><p class="intro"><input type="checkbox" class="delete" name="delete_2135" id="delete_2135" /><label for="delete_2135"><span class="name">Anonymous</span> <time datetime="2019-09-25T15:45:03Z">09/25/19 (Wed) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2135" onclick="return highlightReply(2135, event)" href="/agg/res/2135#2135">No.</a><a class="post_no" onclick="return citeReply(2135)" href="/agg/res/2135#q2135">2135</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2135">[Reply]</a></p><div class="body">Vichan has next to no active development, however you can still pay for support. Basic support costs $40/hr, and is only payable in BTC. New features depend on what you want. Email COPYPASTE &lt;AT&gt; KITTENS &lt;DOT&gt; PH if you&#39;re interested—Vichan forks such as OpenIB are included in this offer.<br/><br/>yikes<br/><a href=https://kissu.moe/qa/res/10532.html>https://kissu.moe/qa/res/10532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2134" data-board="agg"><div class="video-container" data-video="21NjNOyMRBc"><a href="https://youtu.be/21NjNOyMRBc" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/21NjNOyMRBc/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2134" ><p class="intro"><input type="checkbox" class="delete" name="delete_2134" id="delete_2134" /><label for="delete_2134"><span class="name">Tada Banri</span> <time datetime="2019-09-25T15:10:08Z">09/25/19 (Wed) 15:10:08</time></label>&nbsp;<a class="post_no" id="post_no_2134" onclick="return highlightReply(2134, event)" href="/agg/res/2134#2134">No.</a><a class="post_no" onclick="return citeReply(2134)" href="/agg/res/2134#q2134">2134</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2134">[Reply]</a></p><div class="body">Amazing CG wasted on utter trash.<br/><br/>Fuck Blizzard.<br/><a href=https://gnfos.com/jp/res/369571.html>https://gnfos.com/jp/res/369571.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2133" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569422026346.jpg">1569422026346.jpg</a> <span class="unimportant">(66.33 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Cop Craft - 11 [720p].mkv_snapshot_10.43.436.jpg">[HorribleSubs] Cop Craft -….jpg</span>)</span></p><a href="/agg/src/1569422026346.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569422026346.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2133" ><p class="intro"><input type="checkbox" class="delete" name="delete_2133" id="delete_2133" /><label for="delete_2133"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T14:35:03Z">09/25/19 (Wed) 14:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2133" onclick="return highlightReply(2133, event)" href="/agg/res/2133#2133">No.</a><a class="post_no" onclick="return citeReply(2133)" href="/agg/res/2133#q2133">2133</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2133">[Reply]</a></p><div class="body">This show suddenly got extremely stupid out of completely nowhere.<br/><a href=https://gnfos.com/jp/res/369570.html>https://gnfos.com/jp/res/369570.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2132" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569398893766.jpg">1569398893766.jpg</a> <span class="unimportant">(2.28 MB, 2448x3264, <span class="postfilename">1547773867933.jpg</span>)</span></p><a href="/agg/src/1569398893766.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569398893766.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2132" ><p class="intro"><input type="checkbox" class="delete" name="delete_2132" id="delete_2132" /><label for="delete_2132"><span class="name">Anonymous</span> <time datetime="2019-09-25T08:10:03Z">09/25/19 (Wed) 08:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2132" onclick="return highlightReply(2132, event)" href="/agg/res/2132#2132">No.</a><a class="post_no" onclick="return citeReply(2132)" href="/agg/res/2132#q2132">2132</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2132">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2698.html>http://what-ch.mooo.com/what/res/2698.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2131" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569397948021.png">1569397948021.png</a> <span class="unimportant">(367.15 KB, 1024x658, <span class="postfilename">1481005734105.png</span>)</span></p><a href="/agg/src/1569397948021.png" target="_blank"><img class="post-image" src="/agg/thumb/1569397948021.png" style="width:255px;height:164px" alt="" /></a></div>    </div>    <div class="post op" id="op_2131" ><p class="intro"><input type="checkbox" class="delete" name="delete_2131" id="delete_2131" /><label for="delete_2131"><span class="name">Anonymous</span> <time datetime="2019-09-25T07:55:03Z">09/25/19 (Wed) 07:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2131" onclick="return highlightReply(2131, event)" href="/agg/res/2131#2131">No.</a><a class="post_no" onclick="return citeReply(2131)" href="/agg/res/2131#q2131">2131</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2131">[Reply]</a></p><div class="body">Kissu more like pissu lol<br/><a href=https://kissu.moe/qa/res/10520.html>https://kissu.moe/qa/res/10520.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2130" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569387802164.png">1569387802164.png</a> <span class="unimportant">(344.63 KB, 680x962, <span class="postfilename">1535150378027.png</span>)</span></p><a href="/agg/src/1569387802164.png" target="_blank"><img class="post-image" src="/agg/thumb/1569387802164.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2130" ><p class="intro"><input type="checkbox" class="delete" name="delete_2130" id="delete_2130" /><label for="delete_2130"><span class="name">Anonymous</span> <time datetime="2019-09-25T05:05:03Z">09/25/19 (Wed) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2130" onclick="return highlightReply(2130, event)" href="/agg/res/2130#2130">No.</a><a class="post_no" onclick="return citeReply(2130)" href="/agg/res/2130#q2130">2130</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2130">[Reply]</a></p><div class="body">Why is there no activity anywhere tonight, I don&#39;t like this. Please, someone help<br/><a href=https://kissu.moe/qa/res/10485.html>https://kissu.moe/qa/res/10485.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2129" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569376067693.png">1569376067693.png</a> <span class="unimportant">(1.07 MB, 1150x1500, <span class="postfilename" title="eb011c73b652d493833e6f2c99185501.png">eb011c73b652d493833e6f2c99….png</span>)</span></p><a href="/agg/src/1569376067693.png" target="_blank"><img class="post-image" src="/agg/thumb/1569376067693.png" style="width:196px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2129" ><p class="intro"><input type="checkbox" class="delete" name="delete_2129" id="delete_2129" /><label for="delete_2129"><span class="name">Anonymous</span> <time datetime="2019-09-25T01:50:03Z">09/25/19 (Wed) 01:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2129" onclick="return highlightReply(2129, event)" href="/agg/res/2129#2129">No.</a><a class="post_no" onclick="return citeReply(2129)" href="/agg/res/2129#q2129">2129</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2129">[Reply]</a></p><div class="body">You like muscles, right, anon? Right?<br/><a href=https://kissu.moe/qa/res/10481.html>https://kissu.moe/qa/res/10481.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2128" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569371356348.png">1569371356348.png</a> <span class="unimportant">(179.91 KB, 402x469, <span class="postfilename">1496153927936.png</span>)</span></p><a href="/agg/src/1569371356348.png" target="_blank"><img class="post-image" src="/agg/thumb/1569371356348.png" style="width:219px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2128" ><p class="intro"><input type="checkbox" class="delete" name="delete_2128" id="delete_2128" /><label for="delete_2128"><span class="name">Anonymous</span> <time datetime="2019-09-25T00:30:03Z">09/25/19 (Wed) 00:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2128" onclick="return highlightReply(2128, event)" href="/agg/res/2128#2128">No.</a><a class="post_no" onclick="return citeReply(2128)" href="/agg/res/2128#q2128">2128</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2128">[Reply]</a></p><div class="body">Is there any media which you don&#39;t pirate?<br/><a href=https://kissu.moe/qa/res/10470.html>https://kissu.moe/qa/res/10470.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2127" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569369946915.jpg">1569369946915.jpg</a> <span class="unimportant">(189.68 KB, 1000x1024, <span class="postfilename">arc.jpg</span>)</span></p><a href="/agg/src/1569369946915.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569369946915.png" style="width:249px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2127" ><p class="intro"><input type="checkbox" class="delete" name="delete_2127" id="delete_2127" /><label for="delete_2127"><span class="name">Anonymous</span> <time datetime="2019-09-25T00:10:03Z">09/25/19 (Wed) 00:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2127" onclick="return highlightReply(2127, event)" href="/agg/res/2127#2127">No.</a><a class="post_no" onclick="return citeReply(2127)" href="/agg/res/2127#q2127">2127</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2127">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/10463.html>https://kissu.moe/qa/res/10463.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2126" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569366673924.jpg">1569366673924.jpg</a> <span class="unimportant">(669.73 KB, 1000x1272, <span class="postfilename">Ibuki.Suika.full.1780976.jpg</span>)</span></p><a href="/agg/src/1569366673924.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569366673924.png" style="width:200px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2126" ><p class="intro"><input type="checkbox" class="delete" name="delete_2126" id="delete_2126" /><label for="delete_2126"><span class="name">Anonymous</span> <time datetime="2019-09-24T23:15:03Z">09/24/19 (Tue) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2126" onclick="return highlightReply(2126, event)" href="/agg/res/2126#2126">No.</a><a class="post_no" onclick="return citeReply(2126)" href="/agg/res/2126#q2126">2126</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2126">[Reply]</a></p><div class="body">Theres a 90% probability im going to marry my japanese hooker girlfriend. its either that, or i will be single for life and just fuck more hookers.<br/><br/>Im dedicating so much time and money&ndash; <br/>And its just. I mean, i am fucking flying across the country,<br/><br/>Im not doing that shit with a chink girl at college. Like, i already spent a bunch of money. No way im going through this shit again, nothing will top it.<br/>And its JUST<br/><br/>Most yellow fever anons my age, get their first nerdy asian girlfriend in college, from like math or something<br/>that, or theyre incels<br/>Millionaires i know my age dont marry their hoes. They end up marrying some norm girl. I know the guy whos the Hit or Miss girl&#39;s boyfriend. (both from florida)<br/>But not me<br/>Not fucking Varappi, I have to go and marry a fucking japanese hooker. One, i have to fucking pay with my crypto to meet.<br/>hell, most people in long distance have to wait fucking half years or a whole year. Not ol&#39; fucking varappi.<br/><br/><span class="toolong">Post too long. Click <a href="/agg/res/2126#2126">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2125" data-board="agg"><div class="video-container" data-video="BUPU5js6SvI"><a href="https://youtu.be/BUPU5js6SvI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/BUPU5js6SvI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2125" ><p class="intro"><input type="checkbox" class="delete" name="delete_2125" id="delete_2125" /><label for="delete_2125"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-24T21:15:04Z">09/24/19 (Tue) 21:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2125" onclick="return highlightReply(2125, event)" href="/agg/res/2125#2125">No.</a><a class="post_no" onclick="return citeReply(2125)" href="/agg/res/2125#q2125">2125</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2125">[Reply]</a></p><div class="body">gn theme<br/><a href=https://gnfos.com/jp/res/369543.html>https://gnfos.com/jp/res/369543.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2124" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569359405246.png">1569359405246.png</a> <span class="unimportant">(61.87 KB, 595x671, <span class="postfilename">1569103323807.png</span>)</span></p><a href="/agg/src/1569359405246.png" target="_blank"><img class="post-image" src="/agg/thumb/1569359405246.png" style="width:213px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2124" ><p class="intro"><input type="checkbox" class="delete" name="delete_2124" id="delete_2124" /><label for="delete_2124"><span class="name">/QA/ Poster</span> <time datetime="2019-09-24T21:15:03Z">09/24/19 (Tue) 21:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2124" onclick="return highlightReply(2124, event)" href="/agg/res/2124#2124">No.</a><a class="post_no" onclick="return citeReply(2124)" href="/agg/res/2124#q2124">2124</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2124">[Reply]</a></p><div class="body">Oof.<br/><br/>So much for that "unavoidable" impeachment.<br/><a href=https://gnfos.com/jp/res/369542.html>https://gnfos.com/jp/res/369542.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2123" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569355693154.jpg">1569355693154.jpg</a> <span class="unimportant">(117.11 KB, 736x552, <span class="postfilename">1569215321227.jpg</span>)</span></p><a href="/agg/src/1569355693154.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569355693154.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2123" ><p class="intro"><input type="checkbox" class="delete" name="delete_2123" id="delete_2123" /><label for="delete_2123"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T20:10:03Z">09/24/19 (Tue) 20:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2123" onclick="return highlightReply(2123, event)" href="/agg/res/2123#2123">No.</a><a class="post_no" onclick="return citeReply(2123)" href="/agg/res/2123#q2123">2123</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2123">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369540.html>https://gnfos.com/jp/res/369540.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2122" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569355475604.png">1569355475604.png</a> <span class="unimportant">(525.64 KB, 2000x2501, <span class="postfilename" title="d647c2249478e263527bfb80950f6be9-imagepng.png">d647c2249478e263527bfb8095….png</span>)</span></p><a href="/agg/src/1569355475604.png" target="_blank"><img class="post-image" src="/agg/thumb/1569355475604.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2122" ><p class="intro"><input type="checkbox" class="delete" name="delete_2122" id="delete_2122" /><label for="delete_2122"><span class="name">Anonymous</span> <time datetime="2019-09-24T20:05:03Z">09/24/19 (Tue) 20:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2122" onclick="return highlightReply(2122, event)" href="/agg/res/2122#2122">No.</a><a class="post_no" onclick="return citeReply(2122)" href="/agg/res/2122#q2122">2122</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2122">[Reply]</a></p><div class="body">do you ever have trouble differentiating fanworks from the official thing?<br/><a href=https://kissu.moe/qa/res/10452.html>https://kissu.moe/qa/res/10452.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2121" data-board="agg"><div class="video-container" data-video="MMA3eDNS0jw"><a href="https://youtu.be/MMA3eDNS0jw" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/MMA3eDNS0jw/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2121" ><p class="intro"><input type="checkbox" class="delete" name="delete_2121" id="delete_2121" /><label for="delete_2121"><span class="name">Tada Banri</span> <time datetime="2019-09-24T18:55:03Z">09/24/19 (Tue) 18:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2121" onclick="return highlightReply(2121, event)" href="/agg/res/2121#2121">No.</a><a class="post_no" onclick="return citeReply(2121)" href="/agg/res/2121#q2121">2121</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2121">[Reply]</a></p><div class="body">Virgin otaku on suicide watch<br/><a href=https://gnfos.com/jp/res/369538.html>https://gnfos.com/jp/res/369538.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2120" data-board="agg"><div class="video-container" data-video="ULmk8mhiClI"><a href="https://youtu.be/ULmk8mhiClI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/ULmk8mhiClI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2120" ><p class="intro"><input type="checkbox" class="delete" name="delete_2120" id="delete_2120" /><label for="delete_2120"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T18:30:04Z">09/24/19 (Tue) 18:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2120" onclick="return highlightReply(2120, event)" href="/agg/res/2120#2120">No.</a><a class="post_no" onclick="return citeReply(2120)" href="/agg/res/2120#q2120">2120</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2120">[Reply]</a></p><div class="body">glad that we look to teenagers for guidance about how to run the world<br/><a href=https://gnfos.com/jp/res/369532.html>https://gnfos.com/jp/res/369532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2119" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569348771878.jpg">1569348771878.jpg</a> <span class="unimportant">(48.39 KB, 640x480, <span class="postfilename">shits on the floor.jpg</span>)</span></p><a href="/agg/src/1569348771878.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569348771878.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_2119" ><p class="intro"><input type="checkbox" class="delete" name="delete_2119" id="delete_2119" /><label for="delete_2119"><span class="name">Anonymous</span> <time datetime="2019-09-24T18:15:04Z">09/24/19 (Tue) 18:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2119" onclick="return highlightReply(2119, event)" href="/agg/res/2119#2119">No.</a><a class="post_no" onclick="return citeReply(2119)" href="/agg/res/2119#q2119">2119</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2119">[Reply]</a></p><div class="body">I have a very important message to /what/min<br/><a href=http://what-ch.mooo.com/what/res/2694.html>http://what-ch.mooo.com/what/res/2694.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2118" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569347639393.png">1569347639393.png</a> <span class="unimportant">(2.46 MB, 1334x750, <span class="postfilename" title="0802A1A6-9FA5-4535-805B-73ECF4186094.png">0802A1A6-9FA5-4535-805B-73….png</span>)</span></p><a href="/agg/src/1569347639393.png" target="_blank"><img class="post-image" src="/agg/thumb/1569347639393.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2118" ><p class="intro"><input type="checkbox" class="delete" name="delete_2118" id="delete_2118" /><label for="delete_2118"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T17:55:03Z">09/24/19 (Tue) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2118" onclick="return highlightReply(2118, event)" href="/agg/res/2118#2118">No.</a><a class="post_no" onclick="return citeReply(2118)" href="/agg/res/2118#q2118">2118</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2118">[Reply]</a></p><div class="body">Andrea?<br/><a href=https://gnfos.com/jp/res/369530.html>https://gnfos.com/jp/res/369530.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/2" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a class="selected">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/4" method="get"><input type="submit" value="Next" /></form>
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