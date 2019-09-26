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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-5.jpg" alt="" />
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
<input style="display:none" type="text" value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\" name="username">
<input type="hidden" name="board" value="agg">
<input name="lastname" value="g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div   style="display:none"><input   type="text"   name="search"   value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea style="display:none" name="user">&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" value="" name="7ykdefr3jg0ioqn2491mbap">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="2x⛝tavigslre96d83o7b♉yn1" value=""></div>
			
			
				<input name="iaze6dys♅pc97xrj8" value="" type="hidden">
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
				Comment				<input  value=""  name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf"  type="hidden">
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<input type="hidden" value="WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?" name="text">
				
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
								<input  name="firstname"  value="H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t"  type="hidden">
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
		<div class="thread" id="thread_1917" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568938012471.png">1568938012471.png</a> <span class="unimportant">(169.81 KB, 750x750, <span class="postfilename">1565483509023.png</span>)</span></p><a href="/agg/src/1568938012471.png" target="_blank"><img class="post-image" src="/agg/thumb/1568938012471.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1917" ><p class="intro"><input type="checkbox" class="delete" name="delete_1917" id="delete_1917" /><label for="delete_1917"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1917" onclick="return highlightReply(1917, event)" href="/agg/res/1917#1917">No.</a><a class="post_no" onclick="return citeReply(1917)" href="/agg/res/1917#q1917">1917</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1917">[Reply]</a></p><div class="body">why do people leave comments on exhentai<br/><a href=https://kissu.moe/qa/res/9638.html>https://kissu.moe/qa/res/9638.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1916" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568508294029.png">1568508294029.png</a> <span class="unimportant">(122.89 KB, 360x386, <span class="postfilename">1454624299544.png</span>)</span></p><a href="/agg/src/1568508294029.png" target="_blank"><img class="post-image" src="/agg/thumb/1568508294029.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1916" ><p class="intro"><input type="checkbox" class="delete" name="delete_1916" id="delete_1916" /><label for="delete_1916"><span class="subject">blog thread</span> <a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1916" onclick="return highlightReply(1916, event)" href="/agg/res/1916#1916">No.</a><a class="post_no" onclick="return citeReply(1916)" href="/agg/res/1916#q1916">1916</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1916">[Reply]</a></p><div class="body">WHERE IS THE BLOG THREAD<br/>today I ate a bowl of rice and was forced to leave my house by my parents<br/><a href=https://kissu.moe/qa/res/8837.html>https://kissu.moe/qa/res/8837.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1915" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568854668139.png">1568854668139.png</a> <span class="unimportant">(70.29 KB, 800x340, <span class="postfilename">800px-Tea_processing_chart.png</span>)</span></p><a href="/agg/src/1568854668139.png" target="_blank"><img class="post-image" src="/agg/thumb/1568854668139.png" style="width:255px;height:108px" alt="" /></a></div>    </div>    <div class="post op" id="op_1915" ><p class="intro"><input type="checkbox" class="delete" name="delete_1915" id="delete_1915" /><label for="delete_1915"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1915" onclick="return highlightReply(1915, event)" href="/agg/res/1915#1915">No.</a><a class="post_no" onclick="return citeReply(1915)" href="/agg/res/1915#q1915">1915</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1915">[Reply]</a></p><div class="body">Any fellow tea otaku among us?<br/><a href=https://kissu.moe/qa/res/9482.html>https://kissu.moe/qa/res/9482.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1914" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568914448096.jpg">1568914448096.jpg</a> <span class="unimportant">(591.86 KB, 800x600, <span class="postfilename" title="21a7155ad0c838715365dbc3d7aeebea.jpg">21a7155ad0c838715365dbc3d7….jpg</span>)</span></p><a href="/agg/src/1568914448096.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568914448096.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1914" ><p class="intro"><input type="checkbox" class="delete" name="delete_1914" id="delete_1914" /><label for="delete_1914"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1914" onclick="return highlightReply(1914, event)" href="/agg/res/1914#1914">No.</a><a class="post_no" onclick="return citeReply(1914)" href="/agg/res/1914#q1914">1914</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1914">[Reply]</a></p><div class="body">We all knew the /qa/ girls, but who are the kissu girls?<br/>I propose a tournament with at least 500 entrants to settle this matter<br/><a href=https://kissu.moe/qa/res/9580.html>https://kissu.moe/qa/res/9580.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1913" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568819679233.png">1568819679233.png</a> <span class="unimportant">(8.57 KB, 300x300, <span class="postfilename" title="42218d9160453ce9e7d163faffae4fe3538459f9.png">42218d9160453ce9e7d163faff….png</span>)</span></p><a href="/agg/src/1568819679233.png" target="_blank"><img class="post-image" src="/agg/thumb/1568819679233.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1913" ><p class="intro"><input type="checkbox" class="delete" name="delete_1913" id="delete_1913" /><label for="delete_1913"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1913" onclick="return highlightReply(1913, event)" href="/agg/res/1913#1913">No.</a><a class="post_no" onclick="return citeReply(1913)" href="/agg/res/1913#q1913">1913</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1913">[Reply]</a></p><div class="body">/qa/ cow<br/><a href=https://kissu.moe/qa/res/9459.html>https://kissu.moe/qa/res/9459.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1912" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568930139606.png">1568930139606.png</a> <span class="unimportant">(11.4 KB, 129x118, <span class="postfilename">1567482505575.png</span>)</span></p><a href="/agg/src/1568930139606.png" target="_blank"><img class="post-image" src="/agg/thumb/1568930139606.png" style="width:129px;height:118px" alt="" /></a></div>    </div>    <div class="post op" id="op_1912" ><p class="intro"><input type="checkbox" class="delete" name="delete_1912" id="delete_1912" /><label for="delete_1912"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1912" onclick="return highlightReply(1912, event)" href="/agg/res/1912#1912">No.</a><a class="post_no" onclick="return citeReply(1912)" href="/agg/res/1912#q1912">1912</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1912">[Reply]</a></p><div class="body">thinkin bout making a thread<br/><a href=https://kissu.moe/qa/res/9627.html>https://kissu.moe/qa/res/9627.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1911" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568932013195.png">1568932013195.png</a> <span class="unimportant">(2.76 MB, 1112x1600, <span class="postfilename">1565495003540.png</span>)</span></p><a href="/agg/src/1568932013195.png" target="_blank"><img class="post-image" src="/agg/thumb/1568932013195.png" style="width:177px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1911" ><p class="intro"><input type="checkbox" class="delete" name="delete_1911" id="delete_1911" /><label for="delete_1911"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1911" onclick="return highlightReply(1911, event)" href="/agg/res/1911#1911">No.</a><a class="post_no" onclick="return citeReply(1911)" href="/agg/res/1911#q1911">1911</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1911">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/9631.html>https://kissu.moe/qa/res/9631.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1910" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568930026215.gif">1568930026215.gif</a> <span class="unimportant">(457.02 KB, 1200x629, <span class="postfilename">1567306749720.gif</span>)</span></p><a href="/agg/src/1568930026215.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568930026215.png" style="width:255px;height:134px" alt="" /></a></div>    </div>    <div class="post op" id="op_1910" ><p class="intro"><input type="checkbox" class="delete" name="delete_1910" id="delete_1910" /><label for="delete_1910"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1910" onclick="return highlightReply(1910, event)" href="/agg/res/1910#1910">No.</a><a class="post_no" onclick="return citeReply(1910)" href="/agg/res/1910#q1910">1910</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1910">[Reply]</a></p><div class="body">My hips are moving on their own!<br/><a href=https://kissu.moe/qa/res/9626.html>https://kissu.moe/qa/res/9626.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1909" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568923381297.png">1568923381297.png</a> <span class="unimportant">(3.65 MB, 2279x1412, <span class="postfilename">1374392995722.png</span>)</span></p><a href="/agg/src/1568923381297.png" target="_blank"><img class="post-image" src="/agg/thumb/1568923381297.png" style="width:255px;height:158px" alt="" /></a></div>    </div>    <div class="post op" id="op_1909" ><p class="intro"><input type="checkbox" class="delete" name="delete_1909" id="delete_1909" /><label for="delete_1909"><span class="subject">blue thread</span> <a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1909" onclick="return highlightReply(1909, event)" href="/agg/res/1909#1909">No.</a><a class="post_no" onclick="return citeReply(1909)" href="/agg/res/1909#q1909">1909</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1909">[Reply]</a></p><div class="body">blue images<br/><a href=https://kissu.moe/qa/res/9599.html>https://kissu.moe/qa/res/9599.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1908" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568857071342.jpg">1568857071342.jpg</a> <span class="unimportant">(937.38 KB, 1800x2689, <span class="postfilename" title="8ab88089fdea9f16bb1e1f6f7aede99c.jpg">8ab88089fdea9f16bb1e1f6f7a….jpg</span>)</span></p><a href="/agg/src/1568857071342.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568857071342.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1908" ><p class="intro"><input type="checkbox" class="delete" name="delete_1908" id="delete_1908" /><label for="delete_1908"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1908" onclick="return highlightReply(1908, event)" href="/agg/res/1908#1908">No.</a><a class="post_no" onclick="return citeReply(1908)" href="/agg/res/1908#q1908">1908</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1908">[Reply]</a></p><div class="body">When will people learn to appreciate just how great anonymous IRC could be. <br/>Just imagine how much funposting there&#39;d be in <a href="irc://irc.sageru.org/#jp" rel="nofollow" target="_blank">irc://irc.sageru.org/#jp</a> if there were just double the current users...<br/><a href=https://kissu.moe/qa/res/9501.html>https://kissu.moe/qa/res/9501.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1907" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568923720187.png">1568923720187.png</a> <span class="unimportant">(183.33 KB, 426x463, <span class="postfilename">1565560764793.png</span>)</span></p><a href="/agg/src/1568923720187.png" target="_blank"><img class="post-image" src="/agg/thumb/1568923720187.png" style="width:235px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1907" ><p class="intro"><input type="checkbox" class="delete" name="delete_1907" id="delete_1907" /><label for="delete_1907"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1907" onclick="return highlightReply(1907, event)" href="/agg/res/1907#1907">No.</a><a class="post_no" onclick="return citeReply(1907)" href="/agg/res/1907#q1907">1907</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1907">[Reply]</a></p><div class="body">saw some ntr art<br/><a href=https://kissu.moe/qa/res/9601.html>https://kissu.moe/qa/res/9601.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1906" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568749671074.png">1568749671074.png</a> <span class="unimportant">(1007.84 KB, 1366x768, <span class="postfilename">drinking.png</span>)</span></p><a href="/agg/src/1568749671074.png" target="_blank"><img class="post-image" src="/agg/thumb/1568749671074.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1906" ><p class="intro"><input type="checkbox" class="delete" name="delete_1906" id="delete_1906" /><label for="delete_1906"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1906" onclick="return highlightReply(1906, event)" href="/agg/res/1906#1906">No.</a><a class="post_no" onclick="return citeReply(1906)" href="/agg/res/1906#q1906">1906</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1906">[Reply]</a></p><div class="body">How do people even enjoy gacha games? I&#39;m playing Honkai Impact and the grind keeps growing. It&#39;s generous, I know, but that just means other gachas are worse. How does anyone tolerate it? Why don&#39;t they just quit and play another game? I&#39;m not having fun, I&#39;m just missing when I could unlock stuff directly.<br/><a href=https://kissu.moe/qa/res/9274.html>https://kissu.moe/qa/res/9274.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1905" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568815594981.jpg">1568815594981.jpg</a> <span class="unimportant">(30.57 KB, 290x450, <span class="postfilename">the fabled ultimate anime.jpg</span>)</span></p><a href="/agg/src/1568815594981.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568815594981.png" style="width:164px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1905" ><p class="intro"><input type="checkbox" class="delete" name="delete_1905" id="delete_1905" /><label for="delete_1905"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1905" onclick="return highlightReply(1905, event)" href="/agg/res/1905#1905">No.</a><a class="post_no" onclick="return citeReply(1905)" href="/agg/res/1905#q1905">1905</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1905">[Reply]</a></p><div class="body">Persuade me to watch Boku no Pico.<br/><a href=https://kissu.moe/qa/res/9454.html>https://kissu.moe/qa/res/9454.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1904" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568321573241.jpg">1568321573241.jpg</a> <span class="unimportant">(54.22 KB, 1000x710, <span class="postfilename" title="265c3168c4bd40610d682d67ea355c94.jpg">265c3168c4bd40610d682d67ea….jpg</span>)</span></p><a href="/agg/src/1568321573241.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568321573241.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1904" ><p class="intro"><input type="checkbox" class="delete" name="delete_1904" id="delete_1904" /><label for="delete_1904"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1904" onclick="return highlightReply(1904, event)" href="/agg/res/1904#1904">No.</a><a class="post_no" onclick="return citeReply(1904)" href="/agg/res/1904#q1904">1904</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1904">[Reply]</a></p><div class="body">Does anyone here like writing as a hobby?<br/><a href=https://kissu.moe/qa/res/8514.html>https://kissu.moe/qa/res/8514.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1903" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568684720947.png">1568684720947.png</a> <span class="unimportant">(968.72 KB, 815x677, <span class="postfilename">featuredimg.png</span>)</span></p><a href="/agg/src/1568684720947.png" target="_blank"><img class="post-image" src="/agg/thumb/1568684720947.png" style="width:255px;height:212px" alt="" /></a></div>    </div>    <div class="post op" id="op_1903" ><p class="intro"><input type="checkbox" class="delete" name="delete_1903" id="delete_1903" /><label for="delete_1903"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1903" onclick="return highlightReply(1903, event)" href="/agg/res/1903#1903">No.</a><a class="post_no" onclick="return citeReply(1903)" href="/agg/res/1903#q1903">1903</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1903">[Reply]</a></p><div class="body">September 27th is the release day of the translated version! It&#39;ll probably take a day or two for a... free version but make plans to start reading it!<br/>How much can you read a VN each week? We can set a time frame so we have stuff to talk about each week.<br/>Are you up for reading Asuka&#39;s VN, /qa/?<br/><a href=https://kissu.moe/qa/res/9199.html>https://kissu.moe/qa/res/9199.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1902" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/cm2Xz8WKf-4" allowfullscreen></iframe>    <div class="post op" id="op_1902" ><p class="intro"><input type="checkbox" class="delete" name="delete_1902" id="delete_1902" /><label for="delete_1902"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1902" onclick="return highlightReply(1902, event)" href="/agg/res/1902#1902">No.</a><a class="post_no" onclick="return citeReply(1902)" href="/agg/res/1902#q1902">1902</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1902">[Reply]</a></p><div class="body">The imageboard anthem<br/><a href=https://kissu.moe/qa/res/9575.html>https://kissu.moe/qa/res/9575.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1901" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568448745057.png">1568448745057.png</a> <span class="unimportant">(921.32 KB, 1163x1000, <span class="postfilename" title="__drawn_by_ryuuka_sane__2687981e773ffe516717afc07a5d23f9.png">__drawn_by_ryuuka_sane__26….png</span>)</span></p><a href="/agg/src/1568448745057.png" target="_blank"><img class="post-image" src="/agg/thumb/1568448745057.png" style="width:255px;height:219px" alt="" /></a></div>    </div>    <div class="post op" id="op_1901" ><p class="intro"><input type="checkbox" class="delete" name="delete_1901" id="delete_1901" /><label for="delete_1901"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1901" onclick="return highlightReply(1901, event)" href="/agg/res/1901#1901">No.</a><a class="post_no" onclick="return citeReply(1901)" href="/agg/res/1901#q1901">1901</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1901">[Reply]</a></p><div class="body">Stop what you&#39;re doing and post a cute image in this thread RIGHT NOW<br/><a href=https://kissu.moe/qa/res/8734.html>https://kissu.moe/qa/res/8734.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1900" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568855607115.jpg">1568855607115.jpg</a> <span class="unimportant">(62.88 KB, 501x664, <span class="postfilename">thinkin bout cans.jpg</span>)</span></p><a href="/agg/src/1568855607115.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568855607115.png" style="width:193px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1900" ><p class="intro"><input type="checkbox" class="delete" name="delete_1900" id="delete_1900" /><label for="delete_1900"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1900" onclick="return highlightReply(1900, event)" href="/agg/res/1900#1900">No.</a><a class="post_no" onclick="return citeReply(1900)" href="/agg/res/1900#q1900">1900</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1900">[Reply]</a></p><div class="body"><span class="quote">&gt;forced noko on</span><br/>i liked typing noko into my options box..<br/><a href=https://kissu.moe/qa/res/9489.html>https://kissu.moe/qa/res/9489.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1899" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568700704018.jpg">1568700704018.jpg</a> <span class="unimportant">(103.29 KB, 700x600, <span class="postfilename">1409950721664.jpg</span>)</span></p><a href="/agg/src/1568700704018.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568700704018.png" style="width:255px;height:219px" alt="" /></a></div>    </div>    <div class="post op" id="op_1899" ><p class="intro"><input type="checkbox" class="delete" name="delete_1899" id="delete_1899" /><label for="delete_1899"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1899" onclick="return highlightReply(1899, event)" href="/agg/res/1899#1899">No.</a><a class="post_no" onclick="return citeReply(1899)" href="/agg/res/1899#q1899">1899</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1899">[Reply]</a></p><div class="body"><a href="https://lainchan.org/layer/index.html" rel="nofollow" target="_blank">https://lainchan.org/layer/index.html</a><br/><br/>A bit surprised DDT is still active and receiving regular use, but I guess it&#39;s a bit nice to see it not dead. Remember it being fun while it lasted on /qa/, even if it wasn&#39;t all that widely used.<br/><a href=https://kissu.moe/qa/res/9244.html>https://kissu.moe/qa/res/9244.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1898" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568838881854.png">1568838881854.png</a> <span class="unimportant">(135.51 KB, 319x349, <span class="postfilename">1559534854035.png</span>)</span></p><a href="/agg/src/1568838881854.png" target="_blank"><img class="post-image" src="/agg/thumb/1568838881854.png" style="width:233px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1898" ><p class="intro"><input type="checkbox" class="delete" name="delete_1898" id="delete_1898" /><label for="delete_1898"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1898" onclick="return highlightReply(1898, event)" href="/agg/res/1898#1898">No.</a><a class="post_no" onclick="return citeReply(1898)" href="/agg/res/1898#q1898">1898</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1898">[Reply]</a></p><div class="body">What hosting does kissu use? I&#39;m too lazy to use whois<br/><a href=https://kissu.moe/qa/res/9475.html>https://kissu.moe/qa/res/9475.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/13" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a class="selected">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/15" method="get"><input type="submit" value="Next" /></form>
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