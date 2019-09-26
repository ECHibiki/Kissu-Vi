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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-8.gif" alt="" />
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
<input  style="display:none"  type="text"  name="n2epfz9o8lygk6♒ub1ia3sjw7450vh"  value="&#59;&#69;wqN*d&#57;&#9971;PL☖])(&#121;u&#108;RM&#74;_T D&#9932;?\&#61;&#96;o⛗.n&#125;&#33;gxc⚫jXW&#60;&#32;A^&#71;&#98;&#39;v2U5&#9782;&#112;&#43;z☟r&#79;#Z,$Qa4☄@kS7&#66;YFK&#116;V&#9863;m&#115;i1H">
<input style="display:none" type="text" value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\" name="username">
<input type="hidden" name="board" value="agg">
<input value="g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{" name="lastname" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" name="search" value="">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="user" value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<input  type="hidden"  name="7ykdefr3jg0ioqn2491mbap"  value="">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="2x⛝tavigslre96d83o7b♉yn1" value=""></span>
			
			
				<input name="iaze6dys♅pc97xrj8" value="" type="hidden"   >
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<textarea style="display:none" name="url">24827</textarea>
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<span style="display:none"><input type="text" name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf" value=""></span>
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<input type="hidden" value="WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?" name="text" >
				
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
								<input value="H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t" name="firstname" type="hidden">
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
		<div class="thread" id="thread_1997" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569112333877.jpg">1569112333877.jpg</a> <span class="unimportant">(1.97 MB, 2350x3200, <span class="postfilename" title="e658c811bd05ed66dfd76ea9c6988f37-imagejpeg.jpg">e658c811bd05ed66dfd76ea9c6….jpg</span>)</span></p><a href="/agg/src/1569112333877.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569112333877.png" style="width:187px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1997" ><p class="intro"><input type="checkbox" class="delete" name="delete_1997" id="delete_1997" /><label for="delete_1997"><span class="name">Anonymous</span> <time datetime="2019-09-22T00:35:02Z">09/22/19 (Sun) 00:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1997" onclick="return highlightReply(1997, event)" href="/agg/res/1997#1997">No.</a><a class="post_no" onclick="return citeReply(1997)" href="/agg/res/1997#q1997">1997</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1997">[Reply]</a></p><div class="body">Oh?<br/><a href=https://kissu.moe/qa/res/9963.html>https://kissu.moe/qa/res/9963.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1996" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569110555814.jpg">1569110555814.jpg</a> <span class="unimportant">(207.93 KB, 800x800, <span class="postfilename">1568430315976.jpg</span>)</span></p><a href="/agg/src/1569110555814.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569110555814.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1996" ><p class="intro"><input type="checkbox" class="delete" name="delete_1996" id="delete_1996" /><label for="delete_1996"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T00:05:08Z">09/22/19 (Sun) 00:05:08</time></label>&nbsp;<a class="post_no" id="post_no_1996" onclick="return highlightReply(1996, event)" href="/agg/res/1996#1996">No.</a><a class="post_no" onclick="return citeReply(1996)" href="/agg/res/1996#q1996">1996</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1996">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369262.html>https://gnfos.com/jp/res/369262.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1995" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569109962411.gif">1569109962411.gif</a> <span class="unimportant">(999.83 KB, 500x281, <span class="postfilename">1567465939985.gif</span>)</span></p><a href="/agg/src/1569109962411.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569109962411.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1995" ><p class="intro"><input type="checkbox" class="delete" name="delete_1995" id="delete_1995" /><label for="delete_1995"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:55:17Z">09/21/19 (Sat) 23:55:17</time></label>&nbsp;<a class="post_no" id="post_no_1995" onclick="return highlightReply(1995, event)" href="/agg/res/1995#1995">No.</a><a class="post_no" onclick="return citeReply(1995)" href="/agg/res/1995#q1995">1995</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1995">[Reply]</a></p><div class="body">someone tells you<br/>"ewwww kissu and qa are shit, why do you browse there?"<br/>what do you do<br/>WHAT DO YOU DO?<br/><a href=https://kissu.moe/qa/res/9960.html>https://kissu.moe/qa/res/9960.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1994" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569109124068.jpg">1569109124068.jpg</a> <span class="unimportant">(84.31 KB, 607x647, <span class="postfilename" title="[HorribleSubs] Zombieland Saga - 12 [720p].mkv_snapshot_07.19.325.jpg">[HorribleSubs] Zombieland ….jpg</span>)</span></p><a href="/agg/src/1569109124068.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569109124068.jpg" style="width:225px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1994" ><p class="intro"><input type="checkbox" class="delete" name="delete_1994" id="delete_1994" /><label for="delete_1994"><span class="name">Tada Banri</span> <time datetime="2019-09-21T23:40:05Z">09/21/19 (Sat) 23:40:05</time></label>&nbsp;<a class="post_no" id="post_no_1994" onclick="return highlightReply(1994, event)" href="/agg/res/1994#1994">No.</a><a class="post_no" onclick="return citeReply(1994)" href="/agg/res/1994#q1994">1994</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1994">[Reply]</a></p><div class="body">Bored and my fucking shitty computer fan won&#39;t stop making a racket....<br/><br/>I&#39;m so close to ripping it out and smashing it against the wall.....<br/><a href=https://gnfos.com/jp/res/369259.html>https://gnfos.com/jp/res/369259.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1993" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569108633327.png">1569108633327.png</a> <span class="unimportant">(1.81 MB, 1920x1080, <span class="postfilename">1568929525828.png</span>)</span></p><a href="/agg/src/1569108633327.png" target="_blank"><img class="post-image" src="/agg/thumb/1569108633327.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1993" ><p class="intro"><input type="checkbox" class="delete" name="delete_1993" id="delete_1993" /><label for="delete_1993"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:35:05Z">09/21/19 (Sat) 23:35:05</time></label>&nbsp;<a class="post_no" id="post_no_1993" onclick="return highlightReply(1993, event)" href="/agg/res/1993#1993">No.</a><a class="post_no" onclick="return citeReply(1993)" href="/agg/res/1993#q1993">1993</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1993">[Reply]</a></p><div class="body">do you ever worry about the future?<br/>both personally and for the internet as a whole?<br/><a href=https://kissu.moe/qa/res/9957.html>https://kissu.moe/qa/res/9957.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1992" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569108511145.jpg">1569108511145.jpg</a> <span class="unimportant">(65.32 KB, 549x721, <span class="postfilename">1567670052560.jpg</span>)</span></p><a href="/agg/src/1569108511145.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569108511145.png" style="width:194px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1992" ><p class="intro"><input type="checkbox" class="delete" name="delete_1992" id="delete_1992" /><label for="delete_1992"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:30:03Z">09/21/19 (Sat) 23:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1992" onclick="return highlightReply(1992, event)" href="/agg/res/1992#1992">No.</a><a class="post_no" onclick="return citeReply(1992)" href="/agg/res/1992#q1992">1992</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1992">[Reply]</a></p><div class="body">you ever need a break from hard fetishes after a while? <br/>yuri feels like drinking hot cocoa after drinking liquors for weeks, maybe i should just stay in the yuri world forever...<br/><a href=https://kissu.moe/qa/res/9956.html>https://kissu.moe/qa/res/9956.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1991" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569108006893.jpg">1569108006893.jpg</a> <span class="unimportant">(1.62 MB, 1240x1753, <span class="postfilename">1565892282884.jpg</span>)</span></p><a href="/agg/src/1569108006893.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569108006893.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1991" ><p class="intro"><input type="checkbox" class="delete" name="delete_1991" id="delete_1991" /><label for="delete_1991"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:20:10Z">09/21/19 (Sat) 23:20:10</time></label>&nbsp;<a class="post_no" id="post_no_1991" onclick="return highlightReply(1991, event)" href="/agg/res/1991#1991">No.</a><a class="post_no" onclick="return citeReply(1991)" href="/agg/res/1991#q1991">1991</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1991">[Reply]</a></p><div class="body">why&#39;d you change the link from [ota/ to [nen/ back to [ota/?<br/><a href=https://kissu.moe/qa/res/9955.html>https://kissu.moe/qa/res/9955.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1990" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569104937585.jpg">1569104937585.jpg</a> <span class="unimportant">(319.14 KB, 1680x1050, <span class="postfilename" title="fda3154c864c59938a5e63a6407cd970.jpg">fda3154c864c59938a5e63a640….jpg</span>)</span></p><a href="/agg/src/1569104937585.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569104937585.png" style="width:255px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1990" ><p class="intro"><input type="checkbox" class="delete" name="delete_1990" id="delete_1990" /><label for="delete_1990"><span class="name">Anonymous</span> <time datetime="2019-09-21T22:30:05Z">09/21/19 (Sat) 22:30:05</time></label>&nbsp;<a class="post_no" id="post_no_1990" onclick="return highlightReply(1990, event)" href="/agg/res/1990#1990">No.</a><a class="post_no" onclick="return citeReply(1990)" href="/agg/res/1990#q1990">1990</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1990">[Reply]</a></p><div class="body">Whatever happened to having an actual badass as an anime&#39;s main character instead of some wimp just playing the role of one?<br/><a href=https://kissu.moe/qa/res/9947.html>https://kissu.moe/qa/res/9947.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1989" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569104061636.jpg">1569104061636.jpg</a> <span class="unimportant">(185.11 KB, 1080x1333, <span class="postfilename">1569097293112.jpg</span>)</span></p><a href="/agg/src/1569104061636.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569104061636.jpg" style="width:194px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1989" ><p class="intro"><input type="checkbox" class="delete" name="delete_1989" id="delete_1989" /><label for="delete_1989"><span class="name">/QA/ Poster</span> <time datetime="2019-09-21T22:15:03Z">09/21/19 (Sat) 22:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1989" onclick="return highlightReply(1989, event)" href="/agg/res/1989#1989">No.</a><a class="post_no" onclick="return citeReply(1989)" href="/agg/res/1989#q1989">1989</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1989">[Reply]</a></p><div class="body">He did it again<br/><a href=https://gnfos.com/jp/res/369255.html>https://gnfos.com/jp/res/369255.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1988" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569102901163.jpg">1569102901163.jpg</a> <span class="unimportant">(22.72 KB, 500x282, <span class="postfilename" title="cd2cc65ff07f62533821f952e3542bd8.jpg">cd2cc65ff07f62533821f952e3….jpg</span>)</span></p><a href="/agg/src/1569102901163.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569102901163.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1988" ><p class="intro"><input type="checkbox" class="delete" name="delete_1988" id="delete_1988" /><label for="delete_1988"><span class="subject">Do you like cute anime and videogame discord server?</span> <span class="name">Anonymous</span> <time datetime="2019-09-21T21:55:05Z">09/21/19 (Sat) 21:55:05</time></label>&nbsp;<a class="post_no" id="post_no_1988" onclick="return highlightReply(1988, event)" href="/agg/res/1988#1988">No.</a><a class="post_no" onclick="return citeReply(1988)" href="/agg/res/1988#q1988">1988</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1988">[Reply]</a></p><div class="body">Well? You can join this one if you are looking for a comfy anime and vidya community to interact with. We don&#39;t plan on getting big, just somewhat active with several active members. It&#39;s pretty comfy, honestly. <br/><br/><a href="https://discord.gg/qxKN2x" rel="nofollow" target="_blank">https://discord.gg/qxKN2x</a><br/><a href=https://kissu.moe/qa/res/9939.html>https://kissu.moe/qa/res/9939.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1987" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569100585381.png">1569100585381.png</a> <span class="unimportant">(1.84 MB, 1750x1950, <span class="postfilename" title="BB4AABCF-1645-4D94-AF85-E33974180D5D.png">BB4AABCF-1645-4D94-AF85-E3….png</span>)</span></p><a href="/agg/src/1569100585381.png" target="_blank"><img class="post-image" src="/agg/thumb/1569100585381.png" style="width:215px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1987" ><p class="intro"><input type="checkbox" class="delete" name="delete_1987" id="delete_1987" /><label for="delete_1987"><span class="name">Idiot</span> <time datetime="2019-09-21T21:20:03Z">09/21/19 (Sat) 21:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1987" onclick="return highlightReply(1987, event)" href="/agg/res/1987#1987">No.</a><a class="post_no" onclick="return citeReply(1987)" href="/agg/res/1987#q1987">1987</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1987">[Reply]</a></p><div class="body">Should I kill myself why or why not<br/><a href=https://gnfos.com/jp/res/369252.html>https://gnfos.com/jp/res/369252.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1986" data-board="agg"><div class="video-container" data-video="JaTYFs380rI"><a href="https://youtu.be/JaTYFs380rI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/JaTYFs380rI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1986" ><p class="intro"><input type="checkbox" class="delete" name="delete_1986" id="delete_1986" /><label for="delete_1986"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T21:05:03Z">09/21/19 (Sat) 21:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1986" onclick="return highlightReply(1986, event)" href="/agg/res/1986#1986">No.</a><a class="post_no" onclick="return citeReply(1986)" href="/agg/res/1986#q1986">1986</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1986">[Reply]</a></p><div class="body">gn server<br/><a href=https://gnfos.com/jp/res/369250.html>https://gnfos.com/jp/res/369250.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1985" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569099073764.jpeg">1569099073764.jpeg</a> <span class="unimportant">(359.49 KB, 1280x1807, <span class="postfilename" title="4F540121-173C-412D-8FBE-BE343CEFE0B0.jpeg">4F540121-173C-412D-8FBE-B….jpeg</span>)</span></p><a href="/agg/src/1569099073764.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569099073764.jpeg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1985" ><p class="intro"><input type="checkbox" class="delete" name="delete_1985" id="delete_1985" /><label for="delete_1985"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T20:55:03Z">09/21/19 (Sat) 20:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1985" onclick="return highlightReply(1985, event)" href="/agg/res/1985#1985">No.</a><a class="post_no" onclick="return citeReply(1985)" href="/agg/res/1985#q1985">1985</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1985">[Reply]</a></p><div class="body"><a href="https://www.foundmyfitness.com/episodes/exercise-depression" rel="nofollow" target="_blank">https://www.foundmyfitness.com/episodes/exercise-depression</a><br/><br/>Sigh with me Bros I&#39;m about to go to the gym<br/><a href=https://gnfos.com/jp/res/369248.html>https://gnfos.com/jp/res/369248.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1984" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569098230518.png">1569098230518.png</a> <span class="unimportant">(223.67 KB, 399x485, <span class="postfilename" title="D9D39D4A-CDA4-4ADB-B874-E9FC0B6802EC.png">D9D39D4A-CDA4-4ADB-B874-E9….png</span>)</span></p><a href="/agg/src/1569098230518.png" target="_blank"><img class="post-image" src="/agg/thumb/1569098230518.png" style="width:197px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1984" ><p class="intro"><input type="checkbox" class="delete" name="delete_1984" id="delete_1984" /><label for="delete_1984"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T20:40:03Z">09/21/19 (Sat) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1984" onclick="return highlightReply(1984, event)" href="/agg/res/1984#1984">No.</a><a class="post_no" onclick="return citeReply(1984)" href="/agg/res/1984#q1984">1984</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1984">[Reply]</a></p><div class="body">People that suffered just a single head injury were found to have tau tangles in their brain. Tau tangles are associated with Alzheimer&#39;s disease, dementia, and are also linked to progressive nerve damage<br/><br/><br/>Jesus Christ don&#39;t ever get in a fight<br/><a href=https://gnfos.com/jp/res/369247.html>https://gnfos.com/jp/res/369247.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1983" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569097916169.png">1569097916169.png</a> <span class="unimportant">(1.19 MB, 885x1559, <span class="postfilename">spacechan1.png</span>)</span></p><a href="/agg/src/1569097916169.png" target="_blank"><img class="post-image" src="/agg/thumb/1569097916169.png" style="width:136px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1983" ><p class="intro"><input type="checkbox" class="delete" name="delete_1983" id="delete_1983" /><label for="delete_1983"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-21T20:35:03Z">09/21/19 (Sat) 20:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1983" onclick="return highlightReply(1983, event)" href="/agg/res/1983#1983">No.</a><a class="post_no" onclick="return citeReply(1983)" href="/agg/res/1983#q1983">1983</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1983">[Reply]</a></p><div class="body"><span class="heading">Come funpost at <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://gnfos.com/jp/res/369245.html>https://gnfos.com/jp/res/369245.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1982" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569096390197.jpg">1569096390197.jpg</a> <span class="unimportant">(79.18 KB, 616x353, <span class="postfilename">aaa.jpg</span>)</span></p><a href="/agg/src/1569096390197.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569096390197.jpg" style="width:419px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1982" ><p class="intro"><input type="checkbox" class="delete" name="delete_1982" id="delete_1982" /><label for="delete_1982"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T20:10:03Z">09/21/19 (Sat) 20:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1982" onclick="return highlightReply(1982, event)" href="/agg/res/1982#1982">No.</a><a class="post_no" onclick="return citeReply(1982)" href="/agg/res/1982#q1982">1982</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1982">[Reply]</a></p><div class="body">Does anyone wants to play world at war zombies or multiplayer?<br/><a href=https://gnfos.com/jp/res/369240.html>https://gnfos.com/jp/res/369240.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1981" data-board="agg"><div class="video-container" data-video="UTpCBgrqmlg"><a href="https://youtu.be/UTpCBgrqmlg" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/UTpCBgrqmlg/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1981" ><p class="intro"><input type="checkbox" class="delete" name="delete_1981" id="delete_1981" /><label for="delete_1981"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T19:55:03Z">09/21/19 (Sat) 19:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1981" onclick="return highlightReply(1981, event)" href="/agg/res/1981#1981">No.</a><a class="post_no" onclick="return citeReply(1981)" href="/agg/res/1981#q1981">1981</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1981">[Reply]</a></p><div class="body">Feel with me celbros<br/><a href=https://gnfos.com/jp/res/369237.html>https://gnfos.com/jp/res/369237.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1980" data-board="agg"><div class="video-container" data-video="MV_3Dpw-BRY"><a href="https://youtu.be/MV_3Dpw-BRY" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/MV_3Dpw-BRY/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1980" ><p class="intro"><input type="checkbox" class="delete" name="delete_1980" id="delete_1980" /><label for="delete_1980"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T19:50:03Z">09/21/19 (Sat) 19:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1980" onclick="return highlightReply(1980, event)" href="/agg/res/1980#1980">No.</a><a class="post_no" onclick="return citeReply(1980)" href="/agg/res/1980#q1980">1980</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1980">[Reply]</a></p><div class="body">post GN themes<br/><a href=https://gnfos.com/jp/res/369232.html>https://gnfos.com/jp/res/369232.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1979" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569095166360.jpeg">1569095166360.jpeg</a> <span class="unimportant">(375.15 KB, 1120x924, <span class="postfilename" title="26B08708-E74C-4557-A90B-93A7D04292F9.jpeg">26B08708-E74C-4557-A90B-9….jpeg</span>)</span></p><a href="/agg/src/1569095166360.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569095166360.jpeg" style="width:290px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1979" ><p class="intro"><input type="checkbox" class="delete" name="delete_1979" id="delete_1979" /><label for="delete_1979"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T19:50:03Z">09/21/19 (Sat) 19:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1979" onclick="return highlightReply(1979, event)" href="/agg/res/1979#1979">No.</a><a class="post_no" onclick="return citeReply(1979)" href="/agg/res/1979#q1979">1979</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1979">[Reply]</a></p><div class="body">Why do zoomers believe we can stop climate change and the way to do so is through more power and money to our overlords<br/><a href=https://gnfos.com/jp/res/369229.html>https://gnfos.com/jp/res/369229.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1978" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569094169262.jpeg">1569094169262.jpeg</a> <span class="unimportant">(334.44 KB, 750x594, <span class="postfilename" title="915429B6-A5B3-4A04-9DA4-5C11EDE0AF13.jpeg">915429B6-A5B3-4A04-9DA4-5….jpeg</span>)</span></p><a href="/agg/src/1569094169262.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569094169262.jpeg" style="width:303px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1978" ><p class="intro"><input type="checkbox" class="delete" name="delete_1978" id="delete_1978" /><label for="delete_1978"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T19:30:03Z">09/21/19 (Sat) 19:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1978" onclick="return highlightReply(1978, event)" href="/agg/res/1978#1978">No.</a><a class="post_no" onclick="return citeReply(1978)" href="/agg/res/1978#q1978">1978</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1978">[Reply]</a></p><div class="body"><a href="https://www.instagram.com/p/B2qQuFRn-k6" rel="nofollow" target="_blank">https://www.instagram.com/p/B2qQuFRn-k6</a><br/><a href=https://gnfos.com/jp/res/369219.html>https://gnfos.com/jp/res/369219.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/9" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a class="selected">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/11" method="get"><input type="submit" value="Next" /></form>
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