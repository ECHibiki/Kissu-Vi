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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-3.gif" alt="" />
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
<textarea style="display:none" name="n2epfz9o8lygk6♒ub1ia3sjw7450vh">;EwqN*d9⛳PL☖])(yulRMJ_T D⛌?\=`o⛗.n}!gxc⚫jXW&lt; A^Gb'v2U5☶p+z☟rO#Z,$Qa4☄@kS7BYFKtV⚇msi1H</textarea>
<input name="username" value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\" type="hidden">
<input type="hidden" name="board" value="agg">
<textarea name="lastname" style="display:none" >&#103;-[N&gt;ro⛚V2Fs&#90;9=Ac!&#100;+uL&#9928;Bf&#89;76q0IhR&#122;E&#79;&#63;&#92;☻⛻aQJMGW5U&#123;</textarea >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="search" value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;" name="user">
			</td>
		</tr>		<tr>
			<th>
				Options				<input   type="hidden"   name="7ykdefr3jg0ioqn2491mbap"   value="">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="2x⛝tavigslre96d83o7b♉yn1" value="" >
			
			
				<div   style="display:none"><input   type="text"   name="iaze6dys♅pc97xrj8"   value=""></div>
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input name="url" value="2&#52;&#56;2&#55;" type="hidden">
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
				<input style="display:none" type="text" name="text" value="WKTfg2h!4sQM&#68;9&amp;;♟&#110;&#53;B,oq&#72;tS38b=N♼k&gt;O-C*]&#76;Ju&#32;0&#9935;&#92;_F}r:ZX&lt;7Y♸V&#109;⚀&#9793;jl&#71; ^{A.[&#41;+%y(~a$i'p♷&#49;?">
				
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
		<div class="thread" id="thread_1757" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567859007163.png">1567859007163.png</a> <span class="unimportant">(1.96 MB, 1920x1080, <span class="postfilename">287700_20190728235727_1.png</span>)</span></p><a href="/agg/src/1567859007163.png" target="_blank"><img class="post-image" src="/agg/thumb/1567859007163.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1757" ><p class="intro"><input type="checkbox" class="delete" name="delete_1757" id="delete_1757" /><label for="delete_1757"><span class="name">Anonymous</span> <time datetime="2019-09-07T12:25:03Z">09/07/19 (Sat) 12:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1757" onclick="return highlightReply(1757, event)" href="/agg/res/1757#1757">No.</a><a class="post_no" onclick="return citeReply(1757)" href="/agg/res/1757#q1757">1757</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1757">[Reply]</a></p><div class="body"><strong> Anonymous Image Board. </strong><br/><strong> Motherbase. </strong><br/><strong> At least it was before I fucked everything up </strong><br/><a href=https://kissu.moe/qa/res/7766.html>https://kissu.moe/qa/res/7766.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1756" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567846079360.jpg">1567846079360.jpg</a> <span class="unimportant">(31.39 KB, 344x344, <span class="postfilename" title="e6074ea86d42b86017bc46aa7a70a5b6.jpg">e6074ea86d42b86017bc46aa7a….jpg</span>)</span></p><a href="/agg/src/1567846079360.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567846079360.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1756" ><p class="intro"><input type="checkbox" class="delete" name="delete_1756" id="delete_1756" /><label for="delete_1756"><span class="name">Anonymous</span> <time datetime="2019-09-07T08:50:03Z">09/07/19 (Sat) 08:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1756" onclick="return highlightReply(1756, event)" href="/agg/res/1756#1756">No.</a><a class="post_no" onclick="return citeReply(1756)" href="/agg/res/1756#q1756">1756</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1756">[Reply]</a></p><div class="body">going on special mission; find out: who take it easy, who dont.<br/><br/>polle: easy<br/><br/>polle: dont<br/><a href=https://kissu.moe/qa/res/7762.html>https://kissu.moe/qa/res/7762.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1755" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567845537304.png">1567845537304.png</a> <span class="unimportant">(1.01 MB, 885x1559, <span class="postfilename">waifu.png</span>)</span></p><a href="/agg/src/1567845537304.png" target="_blank"><img class="post-image" src="/agg/thumb/1567845537304.png" style="width:145px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1755" ><p class="intro"><input type="checkbox" class="delete" name="delete_1755" id="delete_1755" /><label for="delete_1755"><span class="name">Anonymous</span> <time datetime="2019-09-07T08:40:02Z">09/07/19 (Sat) 08:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1755" onclick="return highlightReply(1755, event)" href="/agg/res/1755#1755">No.</a><a class="post_no" onclick="return citeReply(1755)" href="/agg/res/1755#q1755">1755</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1755">[Reply]</a></p><div class="body"><span class="heading">Friendly greetings from <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://kissu.moe/qa/res/7760.html>https://kissu.moe/qa/res/7760.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1754" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567840990339.jpg">1567840990339.jpg</a> <span class="unimportant">(98.41 KB, 750x1000, <span class="postfilename" title="433d33e0684c2a50d6e8096290fe545a.jpg">433d33e0684c2a50d6e8096290….jpg</span>)</span></p><a href="/agg/src/1567840990339.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567840990339.png" style="width:192px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1754" ><p class="intro"><input type="checkbox" class="delete" name="delete_1754" id="delete_1754" /><label for="delete_1754"><span class="name">Anonymous</span> <time datetime="2019-09-07T07:25:03Z">09/07/19 (Sat) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1754" onclick="return highlightReply(1754, event)" href="/agg/res/1754#1754">No.</a><a class="post_no" onclick="return citeReply(1754)" href="/agg/res/1754#q1754">1754</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1754">[Reply]</a></p><div class="body">Remember that sleep is a vital requirement for taking it easy! Without it, you run the risk of being exhausted and aggravated<br/><a href=https://kissu.moe/qa/res/7755.html>https://kissu.moe/qa/res/7755.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1753" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/-_n52JJpwe8" allowfullscreen></iframe>    <div class="post op" id="op_1753" ><p class="intro"><input type="checkbox" class="delete" name="delete_1753" id="delete_1753" /><label for="delete_1753"><span class="name">Anonymous</span> <time datetime="2019-09-07T06:35:03Z">09/07/19 (Sat) 06:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1753" onclick="return highlightReply(1753, event)" href="/agg/res/1753#1753">No.</a><a class="post_no" onclick="return citeReply(1753)" href="/agg/res/1753#q1753">1753</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1753">[Reply]</a></p><div class="body">This is me<br/><a href=https://kissu.moe/qa/res/7733.html>https://kissu.moe/qa/res/7733.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1752" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567837286155.png">1567837286155.png</a> <span class="unimportant">(883.57 KB, 1024x1280, <span class="postfilename" title="682d6d88922107667895325fad018b8e.png">682d6d88922107667895325fad….png</span>)</span></p><a href="/agg/src/1567837286155.png" target="_blank"><img class="post-image" src="/agg/thumb/1567837286155.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1752" ><p class="intro"><input type="checkbox" class="delete" name="delete_1752" id="delete_1752" /><label for="delete_1752"><span class="name">Anonymous</span> <time datetime="2019-09-07T06:25:08Z">09/07/19 (Sat) 06:25:08</time></label>&nbsp;<a class="post_no" id="post_no_1752" onclick="return highlightReply(1752, event)" href="/agg/res/1752#1752">No.</a><a class="post_no" onclick="return citeReply(1752)" href="/agg/res/1752#q1752">1752</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1752">[Reply]</a></p><div class="body">You think there&#39;s anything under that kimono...<br/><a href=https://kissu.moe/qa/res/7728.html>https://kissu.moe/qa/res/7728.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1751" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567830029450.png">1567830029450.png</a> <span class="unimportant">(412.66 KB, 500x448, <span class="postfilename">Cover.png</span>)</span></p><a href="/agg/src/1567830029450.png" target="_blank"><img class="post-image" src="/agg/thumb/1567830029450.png" style="width:240px;height:216px" alt="" /></a></div>    </div>    <div class="post op" id="op_1751" ><p class="intro"><input type="checkbox" class="delete" name="delete_1751" id="delete_1751" /><label for="delete_1751"><span class="name">Anonymous</span> <time datetime="2019-09-07T04:25:02Z">09/07/19 (Sat) 04:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1751" onclick="return highlightReply(1751, event)" href="/agg/res/1751#1751">No.</a><a class="post_no" onclick="return citeReply(1751)" href="/agg/res/1751#q1751">1751</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1751">[Reply]</a></p><div class="body">What the fuck is an image album anyway?<br/><br/><a href="http://what-ch.mooo.com/up/02%20-%20Sensei...%20Hajimete%20Desu%20Ka.mp3" rel="nofollow" target="_blank">http://what-ch.mooo.com/up/02%20-%20Sensei...%20Hajimete%20Desu%20Ka.mp3</a><br/><a href=http://what-ch.mooo.com/what/res/2445.html>http://what-ch.mooo.com/what/res/2445.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1750" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567806207667.png">1567806207667.png</a> <span class="unimportant">(715.46 KB, 1280x720, <span class="postfilename" title="[Kirion] Higurashi no Naku Koro ni - 03 (BD 720p x264 AAC).mp4_snapshot_13.22_[2018.04.17_23.47.59].png">[Kirion] Higurashi no Naku….png</span>)</span></p><a href="/agg/src/1567806207667.png" target="_blank"><img class="post-image" src="/agg/thumb/1567806207667.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1750" ><p class="intro"><input type="checkbox" class="delete" name="delete_1750" id="delete_1750" /><label for="delete_1750"><span class="name">Anonymous</span> <time datetime="2019-09-06T21:45:03Z">09/06/19 (Fri) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1750" onclick="return highlightReply(1750, event)" href="/agg/res/1750#1750">No.</a><a class="post_no" onclick="return citeReply(1750)" href="/agg/res/1750#q1750">1750</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1750">[Reply]</a></p><div class="body">Remember to drink lots of water, eat healthy, and occasionally exercise!<br/><a href=https://kissu.moe/qa/res/7694.html>https://kissu.moe/qa/res/7694.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1749" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567802170933.jpeg">1567802170933.jpeg</a> <span class="unimportant">(881.21 KB, 1024x1047, <span class="postfilename" title="949869__safe_twilight+sparkle_rainbow+dash_pinkie+pie_fluttershy_rarity_applejack_princess+twilight_spike_mane+six(1).jpeg">949869__safe_twilight+spa….jpeg</span>)</span></p><a href="/agg/src/1567802170933.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567802170933.png" style="width:249px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1749" ><p class="intro"><input type="checkbox" class="delete" name="delete_1749" id="delete_1749" /><label for="delete_1749"><span class="name">Anonymous</span> <time datetime="2019-09-06T20:40:03Z">09/06/19 (Fri) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1749" onclick="return highlightReply(1749, event)" href="/agg/res/1749#1749">No.</a><a class="post_no" onclick="return citeReply(1749)" href="/agg/res/1749#q1749">1749</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1749">[Reply]</a></p><div class="body">Who is your favorite pony?<br/><a href=https://kissu.moe/qa/res/7674.html>https://kissu.moe/qa/res/7674.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1748" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567797189206.jpg">1567797189206.jpg</a> <span class="unimportant">(46.62 KB, 750x702, <span class="postfilename">wxonzduk3xk31.jpg</span>)</span></p><a href="/agg/src/1567797189206.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567797189206.png" style="width:255px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_1748" ><p class="intro"><input type="checkbox" class="delete" name="delete_1748" id="delete_1748" /><label for="delete_1748"><span class="name">Kisume</span> <time datetime="2019-09-06T19:15:02Z">09/06/19 (Fri) 19:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1748" onclick="return highlightReply(1748, event)" href="/agg/res/1748#1748">No.</a><a class="post_no" onclick="return citeReply(1748)" href="/agg/res/1748#q1748">1748</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1748">[Reply]</a></p><div class="body">Someone post this image here <a href="http://boards.4channel.org/int/thread/110911916" rel="nofollow" target="_blank">http://boards.4channel.org/int/thread/110911916</a> please I&#39;m rangebanned from posting images<br/><a href=https://kakashi-nenpo.com/jp/res/33007.html>https://kakashi-nenpo.com/jp/res/33007.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1747" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567785041306.jpg">1567785041306.jpg</a> <span class="unimportant">(167.28 KB, 600x800, <span class="postfilename">956916_p0.jpg</span>)</span></p><a href="/agg/src/1567785041306.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567785041306.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1747" ><p class="intro"><input type="checkbox" class="delete" name="delete_1747" id="delete_1747" /><label for="delete_1747"><span class="name">Anonymous</span> <time datetime="2019-09-06T15:55:03Z">09/06/19 (Fri) 15:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1747" onclick="return highlightReply(1747, event)" href="/agg/res/1747#1747">No.</a><a class="post_no" onclick="return citeReply(1747)" href="/agg/res/1747#q1747">1747</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1747">[Reply]</a></p><div class="body">Do you enjoy a bit of silence every now and then?<br/><a href=https://kissu.moe/qa/res/7667.html>https://kissu.moe/qa/res/7667.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1746" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567748637567.jpeg">1567748637567.jpeg</a> <span class="unimportant">(91.42 KB, 637x981, <span class="postfilename" title="CE4778AD-AB4E-423E-ACFA-D3380D792364.jpeg">CE4778AD-AB4E-423E-ACFA-D….jpeg</span>)</span></p><a href="/agg/src/1567748637567.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567748637567.png" style="width:166px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1746" ><p class="intro"><input type="checkbox" class="delete" name="delete_1746" id="delete_1746" /><label for="delete_1746"><span class="name">jevin</span> <time datetime="2019-09-06T05:45:04Z">09/06/19 (Fri) 05:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1746" onclick="return highlightReply(1746, event)" href="/agg/res/1746#1746">No.</a><a class="post_no" onclick="return citeReply(1746)" href="/agg/res/1746#q1746">1746</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1746">[Reply]</a></p><div class="body">twinny trees<br/>&#127769;&#127794;&#127748;&#127794;&#128171;<br/><a href=https://kissu.moe/qa/res/7634.html>https://kissu.moe/qa/res/7634.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1745" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567743211704.png">1567743211704.png</a> <span class="unimportant">(346.72 KB, 1200x850, <span class="postfilename">31321288_p0.png</span>)</span></p><a href="/agg/src/1567743211704.png" target="_blank"><img class="post-image" src="/agg/thumb/1567743211704.png" style="width:255px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_1745" ><p class="intro"><input type="checkbox" class="delete" name="delete_1745" id="delete_1745" /><label for="delete_1745"><span class="name">Anonymous</span> <time datetime="2019-09-06T04:15:03Z">09/06/19 (Fri) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1745" onclick="return highlightReply(1745, event)" href="/agg/res/1745#1745">No.</a><a class="post_no" onclick="return citeReply(1745)" href="/agg/res/1745#q1745">1745</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1745">[Reply]</a></p><div class="body">my eyes burn I can’t keep them open good night /qa/<br/><a href=https://kissu.moe/qa/res/7615.html>https://kissu.moe/qa/res/7615.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1744" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567743082709.png">1567743082709.png</a> <span class="unimportant">(81.51 KB, 1000x738, <span class="postfilename" title="__yakumo_yukari_touhou_drawn_by_ramburon__21a366c9b9d8f3ea2ff76fec0c50f85c.png">__yakumo_yukari_touhou_dra….png</span>)</span></p><a href="/agg/src/1567743082709.png" target="_blank"><img class="post-image" src="/agg/thumb/1567743082709.png" style="width:255px;height:188px" alt="" /></a></div>    </div>    <div class="post op" id="op_1744" ><p class="intro"><input type="checkbox" class="delete" name="delete_1744" id="delete_1744" /><label for="delete_1744"><span class="name">Anonymous</span> <time datetime="2019-09-06T04:15:03Z">09/06/19 (Fri) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1744" onclick="return highlightReply(1744, event)" href="/agg/res/1744#1744">No.</a><a class="post_no" onclick="return citeReply(1744)" href="/agg/res/1744#q1744">1744</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1744">[Reply]</a></p><div class="body">Any movies you watched lately? I watched it, but it wasn&#39;t that great.<br/><a href=https://kissu.moe/qa/res/7613.html>https://kissu.moe/qa/res/7613.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1743" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567738994925.jpg">1567738994925.jpg</a> <span class="unimportant">(188.8 KB, 552x900, <span class="postfilename" title="0a1dacc7026a79d1cf2192857fa43ebc.jpg">0a1dacc7026a79d1cf2192857f….jpg</span>)</span></p><a href="/agg/src/1567738994925.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567738994925.png" style="width:156px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1743" ><p class="intro"><input type="checkbox" class="delete" name="delete_1743" id="delete_1743" /><label for="delete_1743"><span class="name">Anonymous</span> <time datetime="2019-09-06T03:05:02Z">09/06/19 (Fri) 03:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1743" onclick="return highlightReply(1743, event)" href="/agg/res/1743#1743">No.</a><a class="post_no" onclick="return citeReply(1743)" href="/agg/res/1743#q1743">1743</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1743">[Reply]</a></p><div class="body">So I have an idea on how to deal with imageboards with bad moderation that I&#39;ve been stewing on a bit. The problem to solve is that you have two or more people wanting to talk to each other, but a mod on the board is stopping at least one of them from posting. So he needs to join the conversation another way. The traditional solution would be ghostposting. This, of course, depends on everyone else knowing about it, but that can be overcome.<br/><br/>Some of the problems with ghostposting are:<br/>(1) ghostposting isn&#39;t the archive&#39;s main goal so if the archive runs into problems with spammers, rather than trying to moderate, they&#39;ll often do things like impose crippling captchas or shut off ghostposting entirely<br/>(2) ghostposting by itself doesn&#39;t do anything to move people off a badly moderated board<br/><br/>So the idea is this: if there&#39;s a thread on one imageboard, and someone makes a thread on another imageboard linking to it, by some method alert the participants in the the first thread of the second, without anyone having to go post in the first thread, which we&#39;ll presume is crawling with obsessed hotpockets. Something like this could perhaps be implemented in 4chan X.<br/><br/>There are some design issues to think about.<br/><br/>For example, what form should such an alert take in the UI? Would it be sufficient to alert people who have the thread open, or should there be consideration of people who have the thread in their thread watcher? Would it be a good idea to add the second thread automatically to the watcher if somebody is watching the first, or should there be a different sort of alert with a choice of whether to add the second thread?<br/><br/>And how do we convey the information on a technical level? I can think of two ways of doing this, one having a list of board pairs, and whenever you&#39;re watching / opening a thread on the first board, your browser scans the second board for mentions of that thread. Another way would be to have a service that periodically scans imageboards for cross-site links and everyone&#39;s browser periodically downloads the list and uses it to check if the threads they&#39;re watching / opening are linked somewhere else. I can see problems with either approach; maybe you can think of something better. In any case, it ought to be possible for a user to subscribe to whatever servers or lists they choose.<br/><br/>Another thing to think about is whether this should be opt-in for t<span class="toolong">Post too long. Click <a href="/agg/res/1743#1743">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1742" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567736072527.png">1567736072527.png</a> <span class="unimportant">(454.22 KB, 715x1000, <span class="postfilename">1563494348630.png</span>)</span></p><a href="/agg/src/1567736072527.png" target="_blank"><img class="post-image" src="/agg/thumb/1567736072527.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1742" ><p class="intro"><input type="checkbox" class="delete" name="delete_1742" id="delete_1742" /><label for="delete_1742"><span class="name">Anonymous</span> <time datetime="2019-09-06T02:15:02Z">09/06/19 (Fri) 02:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1742" onclick="return highlightReply(1742, event)" href="/agg/res/1742#1742">No.</a><a class="post_no" onclick="return citeReply(1742)" href="/agg/res/1742#q1742">1742</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1742">[Reply]</a></p><div class="body">BrraaaAAAaaaaAAaaAAAAAaAApppPPpppp<br/><a href=https://kissu.moe/qa/res/7591.html>https://kissu.moe/qa/res/7591.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1741" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567733724821.jpg">1567733724821.jpg</a> <span class="unimportant">(1.24 MB, 1918x1928, <span class="postfilename" title="494f4f58b094b50ee4f47d2931c63b588b906646a9eef682087cd61cad557099.jpg">494f4f58b094b50ee4f47d2931….jpg</span>)</span></p><a href="/agg/src/1567733724821.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567733724821.png" style="width:254px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1741" ><p class="intro"><input type="checkbox" class="delete" name="delete_1741" id="delete_1741" /><label for="delete_1741"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-06T01:40:03Z">09/06/19 (Fri) 01:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1741" onclick="return highlightReply(1741, event)" href="/agg/res/1741#1741">No.</a><a class="post_no" onclick="return citeReply(1741)" href="/agg/res/1741#q1741">1741</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1741">[Reply]</a></p><div class="body">I LOVE AYAKA!!!!<br/><a href=https://kissu.moe/qa/res/7582.html>https://kissu.moe/qa/res/7582.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1740" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567731080263.jpg">1567731080263.jpg</a> <span class="unimportant">(1.98 MB, 1170x1471, <span class="postfilename" title="3c9202ef72af1538130471412818f9f0.jpg">3c9202ef72af15381304714128….jpg</span>)</span></p><a href="/agg/src/1567731080263.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567731080263.png" style="width:203px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1740" ><p class="intro"><input type="checkbox" class="delete" name="delete_1740" id="delete_1740" /><label for="delete_1740"><span class="name">Anonymous</span> <time datetime="2019-09-06T00:55:02Z">09/06/19 (Fri) 00:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1740" onclick="return highlightReply(1740, event)" href="/agg/res/1740#1740">No.</a><a class="post_no" onclick="return citeReply(1740)" href="/agg/res/1740#q1740">1740</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1740">[Reply]</a></p><div class="body">The Youjo Senki Movie Blurays are out! <br/>Time to watch it!<br/><a href=https://kissu.moe/qa/res/7575.html>https://kissu.moe/qa/res/7575.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1739" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567723490830.jpg">1567723490830.jpg</a> <span class="unimportant">(393.64 KB, 850x609, <span class="postfilename" title="6d56c4b595c2b4c144b07d46ec98e2ff.jpg">6d56c4b595c2b4c144b07d46ec….jpg</span>)</span></p><a href="/agg/src/1567723490830.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567723490830.png" style="width:255px;height:183px" alt="" /></a></div>    </div>    <div class="post op" id="op_1739" ><p class="intro"><input type="checkbox" class="delete" name="delete_1739" id="delete_1739" /><label for="delete_1739"><span class="name">Anonymous</span> <time datetime="2019-09-05T22:45:03Z">09/05/19 (Thu) 22:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1739" onclick="return highlightReply(1739, event)" href="/agg/res/1739#1739">No.</a><a class="post_no" onclick="return citeReply(1739)" href="/agg/res/1739#q1739">1739</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1739">[Reply]</a></p><div class="body">I wonder what imageboards will look like in five years, or even just one. Will there be more of them? Less?<br/>It&#39;s probably only a matter of time until 4chan has some severe legal issues that will close it down, but I wonder how it would happen in regards to other imageboards. I think most people would just return to solely using social media, but maybe about 5-10% of the posters, the older ones still habitually visiting, would scan out alternatives.<br/>I&#39;ve been watching the 8gag stuff pretty closely and it&#39;s an interesting view of how things might pan out if 4chan goes down. Some of the bunkers, even small ones, are saying to not link it anywhere, while others are trying to get the message out of their existence. <br/>Personally, I think they should be trying to get as many of their old users back as possible, but I can also understand the paranoia of outsiders.<br/><br/>What say you, /qa/?<br/><a href=https://kissu.moe/qa/res/7545.html>https://kissu.moe/qa/res/7545.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1738" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567718232618.jpg">1567718232618.jpg</a> <span class="unimportant">(283.77 KB, 650x675, <span class="postfilename">1528207051833.jpg</span>)</span></p><a href="/agg/src/1567718232618.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567718232618.png" style="width:245px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1738" ><p class="intro"><input type="checkbox" class="delete" name="delete_1738" id="delete_1738" /><label for="delete_1738"><span class="name">Anonymous</span> <time datetime="2019-09-05T21:20:03Z">09/05/19 (Thu) 21:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1738" onclick="return highlightReply(1738, event)" href="/agg/res/1738#1738">No.</a><a class="post_no" onclick="return citeReply(1738)" href="/agg/res/1738#q1738">1738</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1738">[Reply]</a></p><div class="body">There&#39;s a new <span class="glowblue">sticky</span> ( <a href="/b/res/1550.php#1550">&gt;&gt;&gt;/b/1550</a> ) if you wish to nominate tags to be added to the Captchouli CAPTCHA!<br/>Stickies on /qa/ are kind of annoying so I won&#39;t do it with this one<br/><a href=https://kissu.moe/qa/res/7539.html>https://kissu.moe/qa/res/7539.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/21" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a class="selected">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/23" method="get"><input type="submit" value="Next" /></form>
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