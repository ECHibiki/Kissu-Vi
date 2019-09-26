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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-20.jpg" alt="" />
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
<input name="lastname" value="g-&#91;N&gt;ro⛚&#86;&#50;FsZ&#57;=Ac!d&#43;uL&#9928;Bf&#89;76&#113;0Ih&#82;zEO?\☻⛻a&#81;JMGW&#53;&#85;&#123;" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="search" value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="user" value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<span   style="display:none" ><input   type="text"   name="7ykdefr3jg0ioqn2491mbap"   value="" ></span >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div  style="display:none"><input  type="text"  name="2x⛝tavigslre96d83o7b♉yn1"  value=""></div>
			
			
				<input value="" name="iaze6dys♅pc97xrj8" type="hidden">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input  type="hidden"  name="url"  value="24827" >
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<span  style="display:none"><input  type="text"  name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf"  value=""></span>
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
								<input style="display:none" type="text" name="firstname" value="H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t">
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
		<div class="thread" id="thread_1837" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568322435299.jpg">1568322435299.jpg</a> <span class="unimportant">(70.91 KB, 700x700, <span class="postfilename" title="a1b97835a17ac7009d1dc6644c0190b2.jpg">a1b97835a17ac7009d1dc6644c….jpg</span>)</span></p><a href="/agg/src/1568322435299.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568322435299.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1837" ><p class="intro"><input type="checkbox" class="delete" name="delete_1837" id="delete_1837" /><label for="delete_1837"><span class="subject">Special Studying habits</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1837" onclick="return highlightReply(1837, event)" href="/agg/res/1837#1837">No.</a><a class="post_no" onclick="return citeReply(1837)" href="/agg/res/1837#q1837">1837</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1837">[Reply]</a></p><div class="body">So, i never really told anyone this. But when im doing really hardcore studying, i have to listen to this and only this<br/><br/><a href="https://www.youtube.com/watch?v=AyHJpHqI5uY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=AyHJpHqI5uY</a><br/><br/>Nothing else. Its how I passed the jlpt n4 (not impressive feat in the grand scheme, but i was studying for like 12 hours) And ill look at it, and itll say, "5:09:09" so, i guess Cirno is the only thing that makes me successful<br/><br/>If i dont pass muh statistics exam, muh future japanese hooker wife will never marry me. So, really huge pressure here...<br/>I literally need muh hooker wife&ndash; like my life depends on it.<br/><a href=https://kissu.moe/qa/res/8518.html>https://kissu.moe/qa/res/8518.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1836" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568333612452.jpg">1568333612452.jpg</a> <span class="unimportant">(380.73 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 09 [720p].mkv_snapshot_14.26_[2019.09.12_19.02.35].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1568333612452.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568333612452.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1836" ><p class="intro"><input type="checkbox" class="delete" name="delete_1836" id="delete_1836" /><label for="delete_1836"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1836" onclick="return highlightReply(1836, event)" href="/agg/res/1836#1836">No.</a><a class="post_no" onclick="return citeReply(1836)" href="/agg/res/1836#q1836">1836</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1836">[Reply]</a></p><div class="body">How can people stomach this horrid CG without wanting to vomit....<br/><a href=https://kissu.moe/qa/res/8547.html>https://kissu.moe/qa/res/8547.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1835" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568213890302.jpg">1568213890302.jpg</a> <span class="unimportant">(85.26 KB, 584x875, <span class="postfilename" title="__nanachi_made_in_abyss_drawn_by_kawasemi27__89596a04377aba26b2149a0cba87a940.jpg">__nanachi_made_in_abyss_dr….jpg</span>)</span></p><a href="/agg/src/1568213890302.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568213890302.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1835" ><p class="intro"><input type="checkbox" class="delete" name="delete_1835" id="delete_1835" /><label for="delete_1835"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1835" onclick="return highlightReply(1835, event)" href="/agg/res/1835#1835">No.</a><a class="post_no" onclick="return citeReply(1835)" href="/agg/res/1835#q1835">1835</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1835">[Reply]</a></p><div class="body">What&#39;s kissu&#39;s stance on cute kemono characters?<br/><a href=https://kissu.moe/qa/res/8288.html>https://kissu.moe/qa/res/8288.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1834" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568299628052.jpg">1568299628052.jpg</a> <span class="unimportant">(47.87 KB, 400x500, <span class="postfilename" title="c91a5e411c252dcba6ace0d482e7919f.jpg">c91a5e411c252dcba6ace0d482….jpg</span>)</span></p><a href="/agg/src/1568299628052.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568299628052.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1834" ><p class="intro"><input type="checkbox" class="delete" name="delete_1834" id="delete_1834" /><label for="delete_1834"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1834" onclick="return highlightReply(1834, event)" href="/agg/res/1834#1834">No.</a><a class="post_no" onclick="return citeReply(1834)" href="/agg/res/1834#q1834">1834</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1834">[Reply]</a></p><div class="body">babla!<br/><a href=https://kissu.moe/qa/res/8477.html>https://kissu.moe/qa/res/8477.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1833" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568209801138.jpg">1568209801138.jpg</a> <span class="unimportant">(56.19 KB, 876x876, <span class="postfilename" title="982cae352c2d7673998ebc46d9b5b88a.jpg">982cae352c2d7673998ebc46d9….jpg</span>)</span></p><a href="/agg/src/1568209801138.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568209801138.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1833" ><p class="intro"><input type="checkbox" class="delete" name="delete_1833" id="delete_1833" /><label for="delete_1833"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1833" onclick="return highlightReply(1833, event)" href="/agg/res/1833#1833">No.</a><a class="post_no" onclick="return citeReply(1833)" href="/agg/res/1833#q1833">1833</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1833">[Reply]</a></p><div class="body">How do people make it through their mornings without tea or coffee<br/><a href=https://kissu.moe/qa/res/8275.html>https://kissu.moe/qa/res/8275.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1832" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568251708196.png">1568251708196.png</a> <span class="unimportant">(6.33 KB, 419x258, <span class="postfilename">13d9820846.png</span>)</span></p><a href="/agg/src/1568251708196.png" target="_blank"><img class="post-image" src="/agg/thumb/1568251708196.png" style="width:255px;height:157px" alt="" /></a></div>    </div>    <div class="post op" id="op_1832" ><p class="intro"><input type="checkbox" class="delete" name="delete_1832" id="delete_1832" /><label for="delete_1832"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1832" onclick="return highlightReply(1832, event)" href="/agg/res/1832#1832">No.</a><a class="post_no" onclick="return citeReply(1832)" href="/agg/res/1832#q1832">1832</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1832">[Reply]</a></p><div class="body">cab you do it?<br/><a href="https://fineleatherjackets.net/realhuman/" rel="nofollow" target="_blank">https://fineleatherjackets.net/realhuman/</a><br/><a href=https://kissu.moe/qa/res/8400.html>https://kissu.moe/qa/res/8400.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1831" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568221519321.png">1568221519321.png</a> <span class="unimportant">(483.76 KB, 433x713, <span class="postfilename">Kurumizawa_Satanichia_C#.png</span>)</span></p><a href="/agg/src/1568221519321.png" target="_blank"><img class="post-image" src="/agg/thumb/1568221519321.png" style="width:155px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1831" ><p class="intro"><input type="checkbox" class="delete" name="delete_1831" id="delete_1831" /><label for="delete_1831"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1831" onclick="return highlightReply(1831, event)" href="/agg/res/1831#1831">No.</a><a class="post_no" onclick="return citeReply(1831)" href="/agg/res/1831#q1831">1831</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1831">[Reply]</a></p><div class="body">This is a thing<br/><a href="https://github.com/boyEstrogen/Anime-Girls-Holding-Programming-Books" rel="nofollow" target="_blank">https://github.com/boyEstrogen/Anime-Girls-Holding-Programming-Books</a><br/><a href=https://kissu.moe/qa/res/8303.html>https://kissu.moe/qa/res/8303.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1830" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568194972746.jpg">1568194972746.jpg</a> <span class="unimportant">(60.27 KB, 600x930, <span class="postfilename" title="rachel_alucard_by_lexiipantz_dakr208-fullview.jpg">rachel_alucard_by_lexiipan….jpg</span>)</span></p><a href="/agg/src/1568194972746.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568194972746.png" style="width:164px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1830" ><p class="intro"><input type="checkbox" class="delete" name="delete_1830" id="delete_1830" /><label for="delete_1830"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1830" onclick="return highlightReply(1830, event)" href="/agg/res/1830#1830">No.</a><a class="post_no" onclick="return citeReply(1830)" href="/agg/res/1830#q1830">1830</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1830">[Reply]</a></p><div class="body">I was debating between getting penis extension and girth-adding surgery for muh future japanese hooker wife.<br/>BUT<br/>Since she is hooker, she has probably already slept with the 8 inch dragons, and she like<br/>likes me for who i am or something.<br/><br/>So, the 5 k im not spending on surgery, will just go to spending time with her<br/>BUT<br/>if she has any indication that she doesnt feel anything from the sex, i will get the surgery.<br/><a href=https://kissu.moe/qa/res/8262.html>https://kissu.moe/qa/res/8262.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1829" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568180215824.jpg">1568180215824.jpg</a> <span class="unimportant">(61.92 KB, 425x288, <span class="postfilename">key poll.jpg</span>)</span></p><a href="/agg/src/1568180215824.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568180215824.png" style="width:255px;height:173px" alt="" /></a></div>    </div>    <div class="post op" id="op_1829" ><p class="intro"><input type="checkbox" class="delete" name="delete_1829" id="delete_1829" /><label for="delete_1829"><span class="subject">KEY popularity poll</span> <a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1829" onclick="return highlightReply(1829, event)" href="/agg/res/1829#1829">No.</a><a class="post_no" onclick="return citeReply(1829)" href="/agg/res/1829#q1829">1829</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1829">[Reply]</a></p><div class="body">Key is letting people vote on their favorite character from across all their works. Who do you think will win?<br/><br/><a href="http://dlsv.product.jp/key/key20th-character/" rel="nofollow" target="_blank">http://dlsv.product.jp/key/key20th-character/</a><br/><a href=https://kissu.moe/qa/res/8252.html>https://kissu.moe/qa/res/8252.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1828" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568166500958.png">1568166500958.png</a> <span class="unimportant">(1.18 MB, 960x720, <span class="postfilename" title="[xPearse] Magic Knight Rayearth Ep04 [720p].mkv_snapshot_10.38_[2017.02.23_18.02.44].png">[xPearse] Magic Knight Ray….png</span>)</span></p><a href="/agg/src/1568166500958.png" target="_blank"><img class="post-image" src="/agg/thumb/1568166500958.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1828" ><p class="intro"><input type="checkbox" class="delete" name="delete_1828" id="delete_1828" /><label for="delete_1828"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1828" onclick="return highlightReply(1828, event)" href="/agg/res/1828#1828">No.</a><a class="post_no" onclick="return citeReply(1828)" href="/agg/res/1828#q1828">1828</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1828">[Reply]</a></p><div class="body">Fashion can be bought. Style one must possess.<br/><a href=https://kissu.moe/qa/res/8207.html>https://kissu.moe/qa/res/8207.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1827" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568164001769.png">1568164001769.png</a> <span class="unimportant">(606.43 KB, 852x480, <span class="postfilename">1400908935814.png</span>)</span></p><a href="/agg/src/1568164001769.png" target="_blank"><img class="post-image" src="/agg/thumb/1568164001769.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1827" ><p class="intro"><input type="checkbox" class="delete" name="delete_1827" id="delete_1827" /><label for="delete_1827"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1827" onclick="return highlightReply(1827, event)" href="/agg/res/1827#1827">No.</a><a class="post_no" onclick="return citeReply(1827)" href="/agg/res/1827#q1827">1827</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1827">[Reply]</a></p><div class="body">what&#39;s that supposed to mean...<br/><a href=https://kissu.moe/qa/res/8197.html>https://kissu.moe/qa/res/8197.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1826" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/R_uS0aT0bG8" allowfullscreen></iframe>    <div class="post op" id="op_1826" ><p class="intro"><input type="checkbox" class="delete" name="delete_1826" id="delete_1826" /><label for="delete_1826"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1826" onclick="return highlightReply(1826, event)" href="/agg/res/1826#1826">No.</a><a class="post_no" onclick="return citeReply(1826)" href="/agg/res/1826#q1826">1826</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1826">[Reply]</a></p><div class="body">Luca or Miku?<br/>song unrelated<br/><a href=https://kissu.moe/qa/res/8234.html>https://kissu.moe/qa/res/8234.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1825" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568170276330.png">1568170276330.png</a> <span class="unimportant">(79.12 KB, 284x148, <span class="postfilename">1557871937710.png</span>)</span></p><a href="/agg/src/1568170276330.png" target="_blank"><img class="post-image" src="/agg/thumb/1568170276330.png" style="width:255px;height:133px" alt="" /></a></div>    </div>    <div class="post op" id="op_1825" ><p class="intro"><input type="checkbox" class="delete" name="delete_1825" id="delete_1825" /><label for="delete_1825"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1825" onclick="return highlightReply(1825, event)" href="/agg/res/1825#1825">No.</a><a class="post_no" onclick="return citeReply(1825)" href="/agg/res/1825#q1825">1825</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1825">[Reply]</a></p><div class="body">...what&#39;s this place?<br/>can i post patchouli here?<br/><a href=https://kissu.moe/qa/res/8214.html>https://kissu.moe/qa/res/8214.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1824" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568163002537.jpg">1568163002537.jpg</a> <span class="unimportant">(756.4 KB, 1100x1420, <span class="postfilename">60635821_p7.jpg</span>)</span></p><a href="/agg/src/1568163002537.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568163002537.png" style="width:198px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1824" ><p class="intro"><input type="checkbox" class="delete" name="delete_1824" id="delete_1824" /><label for="delete_1824"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1824" onclick="return highlightReply(1824, event)" href="/agg/res/1824#1824">No.</a><a class="post_no" onclick="return citeReply(1824)" href="/agg/res/1824#q1824">1824</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1824">[Reply]</a></p><div class="body">Would you offer yourself up to be eaten for the sake of sating a cute idol&#39;s hunger?<br/><a href=https://kissu.moe/qa/res/8196.html>https://kissu.moe/qa/res/8196.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1823" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568157560560.jpg">1568157560560.jpg</a> <span class="unimportant">(914.51 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 130 [BD][1080p][8A55CC54].mkv_snapshot_19.04_[2019.08.10_04.48.36].jpg">[MiG_MuX] PriPara - 130 [B….jpg</span>)</span></p><a href="/agg/src/1568157560560.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568157560560.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1823" ><p class="intro"><input type="checkbox" class="delete" name="delete_1823" id="delete_1823" /><label for="delete_1823"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1823" onclick="return highlightReply(1823, event)" href="/agg/res/1823#1823">No.</a><a class="post_no" onclick="return citeReply(1823)" href="/agg/res/1823#q1823">1823</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1823">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/8175.html>https://kissu.moe/qa/res/8175.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1822" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568152700461.jpg">1568152700461.jpg</a> <span class="unimportant">(45.67 KB, 403x396, <span class="postfilename">1397576281635.jpg</span>)</span></p><a href="/agg/src/1568152700461.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568152700461.png" style="width:255px;height:251px" alt="" /></a></div>    </div>    <div class="post op" id="op_1822" ><p class="intro"><input type="checkbox" class="delete" name="delete_1822" id="delete_1822" /><label for="delete_1822"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1822" onclick="return highlightReply(1822, event)" href="/agg/res/1822#1822">No.</a><a class="post_no" onclick="return citeReply(1822)" href="/agg/res/1822#q1822">1822</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1822">[Reply]</a></p><div class="body">Was thinking up a post and the phrase "aped off of" came to mind, it&#39;s a pretty hilarious phrase, isn&#39;t it?<br/><a href=https://kissu.moe/qa/res/8161.html>https://kissu.moe/qa/res/8161.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1821" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568158090502.png">1568158090502.png</a> <span class="unimportant">(88.62 KB, 452x132, <span class="postfilename">caa00156c9.png</span>)</span></p><a href="/agg/src/1568158090502.png" target="_blank"><img class="post-image" src="/agg/thumb/1568158090502.png" style="width:255px;height:74px" alt="" /></a></div>    </div>    <div class="post op" id="op_1821" ><p class="intro"><input type="checkbox" class="delete" name="delete_1821" id="delete_1821" /><label for="delete_1821"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:21Z">09/20/19 (Fri) 15:39:21</time></label>&nbsp;<a class="post_no" id="post_no_1821" onclick="return highlightReply(1821, event)" href="/agg/res/1821#1821">No.</a><a class="post_no" onclick="return citeReply(1821)" href="/agg/res/1821#q1821">1821</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1821">[Reply]</a></p><div class="body">no...<br/><a href=https://kissu.moe/qa/res/8177.html>https://kissu.moe/qa/res/8177.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1820" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568974623988.png">1568974623988.png</a> <span class="unimportant">(1.19 MB, 885x1559, <span class="postfilename">spacechan1.png</span>)</span></p><a href="/agg/src/1568974623988.png" target="_blank"><img class="post-image" src="/agg/thumb/1568974623988.png" style="width:137px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1820" ><p class="intro"><input type="checkbox" class="delete" name="delete_1820" id="delete_1820" /><label for="delete_1820"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:19Z">09/20/19 (Fri) 15:39:19</time></label>&nbsp;<a class="post_no" id="post_no_1820" onclick="return highlightReply(1820, event)" href="/agg/res/1820#1820">No.</a><a class="post_no" onclick="return citeReply(1820)" href="/agg/res/1820#q1820">1820</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1820">[Reply]</a></p><div class="body"><span class="heading">Come funpost at <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=http://what-ch.mooo.com/what/res/2641.html>http://what-ch.mooo.com/what/res/2641.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1819" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568675235422.jpg">1568675235422.jpg</a> <span class="unimportant">(628.9 KB, 748x1200, <span class="postfilename">1443112320675.jpg</span>)</span></p><a href="/agg/src/1568675235422.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568675235422.png" style="width:150px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1819" ><p class="intro"><input type="checkbox" class="delete" name="delete_1819" id="delete_1819" /><label for="delete_1819"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:18Z">09/20/19 (Fri) 15:39:18</time></label>&nbsp;<a class="post_no" id="post_no_1819" onclick="return highlightReply(1819, event)" href="/agg/res/1819#1819">No.</a><a class="post_no" onclick="return citeReply(1819)" href="/agg/res/1819#q1819">1819</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1819">[Reply]</a></p><div class="body">i miss my frens. where are they? i miss it<br/><a href=http://what-ch.mooo.com/what/res/2589.html>http://what-ch.mooo.com/what/res/2589.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1818" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568926148616.jpg">1568926148616.jpg</a> <span class="unimportant">(53.56 KB, 659x506, <span class="postfilename">1568914215455.jpg</span>)</span></p><a href="/agg/src/1568926148616.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568926148616.png" style="width:240px;height:185px" alt="" /></a></div>    </div>    <div class="post op" id="op_1818" ><p class="intro"><input type="checkbox" class="delete" name="delete_1818" id="delete_1818" /><label for="delete_1818"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:17Z">09/20/19 (Fri) 15:39:17</time></label>&nbsp;<a class="post_no" id="post_no_1818" onclick="return highlightReply(1818, event)" href="/agg/res/1818#1818">No.</a><a class="post_no" onclick="return citeReply(1818)" href="/agg/res/1818#q1818">1818</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1818">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2636.html>http://what-ch.mooo.com/what/res/2636.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/17" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a class="selected">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/19" method="get"><input type="submit" value="Next" /></form>
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