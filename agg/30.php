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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/static/banners/banner-kissu-9.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" value="qmsSY[vpLH2P\1y@b,k_" name="text" >
<input type="hidden" value="f#⚈&#47; ♬3&#125;{QD&#116;7\+d5:Y&#64;⚒&#66;&#118;VT&#45;&#115;&#101;&#112;Z$~&#93;&#73;U;S&#94;&#110;hX!9&#75;[&#41;&#109;u&lt;&#78;(W8&#9819;&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/[LH J&#105;&#58;&#96;!;C&#43;6\oT&lt;8ObI|?X]d.&#50;☨&#123;t&#87;5 c&#9905;1B&#61;k&#64;9(3&#78;g☮*}4'PQ-&#77;V⚯&#48;KD7&#117;&#115;&#106;" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none" ><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" ></div >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea style="display:none" name="search">b☵#Y{7`9J⚴@V^6_-</textarea>
			
			
				
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

<input type="hidden" name="hash" value="70d8f66fb8d17574c44a5a9958b0db21874a19a5">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><h2>Big merge in a few minutes, site won't be available for 10-30 minutes probably</h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/agg/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="agg" />
		<div class="thread" id="thread_1569" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566984191135.jpg">1566984191135.jpg</a> <span class="unimportant">(82.73 KB, 1280x720, <span class="postfilename">sugui.jpg</span>)</span></p><a href="/agg/src/1566984191135.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566984191135.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1569" ><p class="intro"><input type="checkbox" class="delete" name="delete_1569" id="delete_1569" /><label for="delete_1569"><span class="name">Anonymous</span> <time datetime="2019-08-28T09:25:03Z">08/28/19 (Wed) 09:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1569" onclick="return highlightReply(1569, event)" href="/agg/res/1569#1569">No.</a><a class="post_no" onclick="return citeReply(1569)" href="/agg/res/1569#q1569">1569</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1569">[Reply]</a></p><div class="body">what my pc recently fucked out<br/>i suspect the power supply is faulty, just bought a new stick of ram because my first thought was that was the problem, i now dont believe it is so<br/>it&#39;s pretty old now, like early &#39;10s tech<br/><br/>im not really a gamer, but have no use for a laptop<br/>but dont want a massive desktop, even though it would be most cost effective<br/>i dont even have a desk<br/><a href=http://what-ch.mooo.com/what/res/2316.html>http://what-ch.mooo.com/what/res/2316.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1568" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566980107104.jpg">1566980107104.jpg</a> <span class="unimportant">(262.7 KB, 567x999, <span class="postfilename">1481778194933.jpg</span>)</span></p><a href="/agg/src/1566980107104.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566980107104.png" style="width:145px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1568" ><p class="intro"><input type="checkbox" class="delete" name="delete_1568" id="delete_1568" /><label for="delete_1568"><span class="name">Anonymous</span> <time datetime="2019-08-28T08:20:02Z">08/28/19 (Wed) 08:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1568" onclick="return highlightReply(1568, event)" href="/agg/res/1568#1568">No.</a><a class="post_no" onclick="return citeReply(1568)" href="/agg/res/1568#q1568">1568</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1568">[Reply]</a></p><div class="body">*sip*<br/><a href=https://kissu.moe/qa/res/6357.html>https://kissu.moe/qa/res/6357.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1567" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566977904110.jpg">1566977904110.jpg</a> <span class="unimportant">(111.28 KB, 759x538, <span class="postfilename">Mornomism_isnt_good.jpg</span>)</span></p><a href="/agg/src/1566977904110.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566977904110.png" style="width:240px;height:171px" alt="" /></a></div>    </div>    <div class="post op" id="op_1567" ><p class="intro"><input type="checkbox" class="delete" name="delete_1567" id="delete_1567" /><label for="delete_1567"><span class="name">Anonymous</span> <time datetime="2019-08-28T07:40:03Z">08/28/19 (Wed) 07:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1567" onclick="return highlightReply(1567, event)" href="/agg/res/1567#1567">No.</a><a class="post_no" onclick="return citeReply(1567)" href="/agg/res/1567#q1567">1567</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1567">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2314.html>http://what-ch.mooo.com/what/res/2314.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1566" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566970301090.jpg">1566970301090.jpg</a> <span class="unimportant">(538.18 KB, 1300x1286, <span class="postfilename" title="9bb9d2bf46836b8e450583289d600ef4.jpg">9bb9d2bf46836b8e450583289d….jpg</span>)</span></p><a href="/agg/src/1566970301090.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566970301090.png" style="width:255px;height:253px" alt="" /></a></div>    </div>    <div class="post op" id="op_1566" ><p class="intro"><input type="checkbox" class="delete" name="delete_1566" id="delete_1566" /><label for="delete_1566"><span class="name">Anonymous</span> <time datetime="2019-08-28T05:35:03Z">08/28/19 (Wed) 05:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1566" onclick="return highlightReply(1566, event)" href="/agg/res/1566#1566">No.</a><a class="post_no" onclick="return citeReply(1566)" href="/agg/res/1566#q1566">1566</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1566">[Reply]</a></p><div class="body">HERE WE GO<br/>GOOD TO GO<br/><a href=https://kissu.moe/qa/res/6340.html>https://kissu.moe/qa/res/6340.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1565" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566967872876.jpg">1566967872876.jpg</a> <span class="unimportant">(1.81 MB, 1745x1922, <span class="postfilename" title="5ba9d096c038290c218b31f05a79db50.jpg">5ba9d096c038290c218b31f05a….jpg</span>)</span></p><a href="/agg/src/1566967872876.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566967872876.png" style="width:232px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1565" ><p class="intro"><input type="checkbox" class="delete" name="delete_1565" id="delete_1565" /><label for="delete_1565"><span class="name">Anonymous</span> <time datetime="2019-08-28T04:55:03Z">08/28/19 (Wed) 04:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1565" onclick="return highlightReply(1565, event)" href="/agg/res/1565#1565">No.</a><a class="post_no" onclick="return citeReply(1565)" href="/agg/res/1565#q1565">1565</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1565">[Reply]</a></p><div class="body">I ralized the main advantage of having /qa/ friends here. <br/><br/>I can shitpost all I want on /qa/ itself and not worry about detracting from it&#39;s quality by teasing the freakazoid for my own amusement. I love you friends!<br/><a href=https://kissu.moe/qa/res/6329.html>https://kissu.moe/qa/res/6329.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1564" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566966321002.jpg">1566966321002.jpg</a> <span class="unimportant">(1.56 MB, 1536x2048, <span class="postfilename">1560736497650.jpg</span>)</span></p><a href="/agg/src/1566966321002.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566966321002.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1564" ><p class="intro"><input type="checkbox" class="delete" name="delete_1564" id="delete_1564" /><label for="delete_1564"><span class="name">Anonymous</span> <time datetime="2019-08-28T04:30:03Z">08/28/19 (Wed) 04:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1564" onclick="return highlightReply(1564, event)" href="/agg/res/1564#1564">No.</a><a class="post_no" onclick="return citeReply(1564)" href="/agg/res/1564#q1564">1564</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1564">[Reply]</a></p><div class="body">(*´ω｀*)<br/>(*≧∀≦*)I... I... I... I LOVE OLDER SISTERS!!!<br/>(/∇＼*)｡o○<br/><a href=https://kissu.moe/qa/res/6323.html>https://kissu.moe/qa/res/6323.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1563" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566965729801.jpeg">1566965729801.jpeg</a> <span class="unimportant">(1.24 MB, 2005x1467, <span class="postfilename" title="41f795f22d74f38b1acd7a85c1bb3376.jpeg">41f795f22d74f38b1acd7a85c….jpeg</span>)</span></p><a href="/agg/src/1566965729801.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1566965729801.png" style="width:255px;height:186px" alt="" /></a></div>    </div>    <div class="post op" id="op_1563" ><p class="intro"><input type="checkbox" class="delete" name="delete_1563" id="delete_1563" /><label for="delete_1563"><span class="name">Anonymous</span> <time datetime="2019-08-28T04:20:03Z">08/28/19 (Wed) 04:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1563" onclick="return highlightReply(1563, event)" href="/agg/res/1563#1563">No.</a><a class="post_no" onclick="return citeReply(1563)" href="/agg/res/1563#q1563">1563</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1563">[Reply]</a></p><div class="body">I hate flashbacks and exposition<br/><a href=https://kissu.moe/qa/res/6321.html>https://kissu.moe/qa/res/6321.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1562" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566965047852.jpg">1566965047852.jpg</a> <span class="unimportant">(996.6 KB, 758x1048, <span class="postfilename" title="63cc2360361b69fd7528084c8ab6e9b4.jpg">63cc2360361b69fd7528084c8a….jpg</span>)</span></p><a href="/agg/src/1566965047852.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566965047852.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1562" ><p class="intro"><input type="checkbox" class="delete" name="delete_1562" id="delete_1562" /><label for="delete_1562"><span class="name">Anonymous</span> <time datetime="2019-08-28T04:05:03Z">08/28/19 (Wed) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1562" onclick="return highlightReply(1562, event)" href="/agg/res/1562#1562">No.</a><a class="post_no" onclick="return citeReply(1562)" href="/agg/res/1562#q1562">1562</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1562">[Reply]</a></p><div class="body">What race/class did you roll, and what gender?<br/><a href=https://kissu.moe/qa/res/6317.html>https://kissu.moe/qa/res/6317.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1561" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566964342107.jpg">1566964342107.jpg</a> <span class="unimportant">(145.88 KB, 1024x554, <span class="postfilename">1481836232930.jpg</span>)</span></p><a href="/agg/src/1566964342107.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566964342107.png" style="width:254px;height:138px" alt="" /></a></div>    </div>    <div class="post op" id="op_1561" ><p class="intro"><input type="checkbox" class="delete" name="delete_1561" id="delete_1561" /><label for="delete_1561"><span class="name">Anonymous</span> <time datetime="2019-08-28T03:55:03Z">08/28/19 (Wed) 03:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1561" onclick="return highlightReply(1561, event)" href="/agg/res/1561#1561">No.</a><a class="post_no" onclick="return citeReply(1561)" href="/agg/res/1561#q1561">1561</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1561">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/6310.html>https://kissu.moe/qa/res/6310.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1560" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566962758276.png">1566962758276.png</a> <span class="unimportant">(462 B, 44x28, <span class="postfilename">998faf51b6.png</span>)</span></p><a href="/agg/src/1566962758276.png" target="_blank"><img class="post-image" src="/agg/thumb/1566962758276.png" style="width:44px;height:28px" alt="" /></a></div>    </div>    <div class="post op" id="op_1560" ><p class="intro"><input type="checkbox" class="delete" name="delete_1560" id="delete_1560" /><label for="delete_1560"><span class="name">Anonymous</span> <time datetime="2019-08-28T03:30:03Z">08/28/19 (Wed) 03:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1560" onclick="return highlightReply(1560, event)" href="/agg/res/1560#1560">No.</a><a class="post_no" onclick="return citeReply(1560)" href="/agg/res/1560#q1560">1560</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1560">[Reply]</a></p><div class="body">WHAT WERE THEY THINKING?<br/><a href=https://kissu.moe/qa/res/6293.html>https://kissu.moe/qa/res/6293.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1559" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566962525009.jpg">1566962525009.jpg</a> <span class="unimportant">(183.38 KB, 675x860, <span class="postfilename">1566949247094.jpg</span>)</span></p><a href="/agg/src/1566962525009.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566962525009.png" style="width:201px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1559" ><p class="intro"><input type="checkbox" class="delete" name="delete_1559" id="delete_1559" /><label for="delete_1559"><span class="name">Anonymous</span> <time datetime="2019-08-28T03:25:03Z">08/28/19 (Wed) 03:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1559" onclick="return highlightReply(1559, event)" href="/agg/res/1559#1559">No.</a><a class="post_no" onclick="return citeReply(1559)" href="/agg/res/1559#q1559">1559</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1559">[Reply]</a></p><div class="body">Me on the right about to go to sleep with my cute gf<br/><a href=https://kissu.moe/qa/res/6289.html>https://kissu.moe/qa/res/6289.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1558" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566960607182.jpg">1566960607182.jpg</a> <span class="unimportant">(1.19 MB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Kobayashi-san Chi no Maid Dragon - 08 [1080p].mkv_snapshot_03.39_[2017.03.01_15.25.54].jpg">[HorribleSubs] Kobayashi-s….jpg</span>)</span></p><a href="/agg/src/1566960607182.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566960607182.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1558" ><p class="intro"><input type="checkbox" class="delete" name="delete_1558" id="delete_1558" /><label for="delete_1558"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:55:02Z">08/28/19 (Wed) 02:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1558" onclick="return highlightReply(1558, event)" href="/agg/res/1558#1558">No.</a><a class="post_no" onclick="return citeReply(1558)" href="/agg/res/1558#q1558">1558</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1558">[Reply]</a></p><div class="body">How come when I&#39;m actually looking forwards to an anime the studio burns down. I fucking hate this<br/><a href=https://kissu.moe/qa/res/6270.html>https://kissu.moe/qa/res/6270.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1557" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566960861996.png">1566960861996.png</a> <span class="unimportant">(1.4 KB, 159x42, <span class="postfilename">39cdc9cd48.png</span>)</span></p><a href="/agg/src/1566960861996.png" target="_blank"><img class="post-image" src="/agg/thumb/1566960861996.png" style="width:159px;height:42px" alt="" /></a></div>    </div>    <div class="post op" id="op_1557" ><p class="intro"><input type="checkbox" class="delete" name="delete_1557" id="delete_1557" /><label for="delete_1557"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:55:02Z">08/28/19 (Wed) 02:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1557" onclick="return highlightReply(1557, event)" href="/agg/res/1557#1557">No.</a><a class="post_no" onclick="return citeReply(1557)" href="/agg/res/1557#q1557">1557</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1557">[Reply]</a></p><div class="body">Does /qa/ seed?<br/><a href=https://kissu.moe/qa/res/6273.html>https://kissu.moe/qa/res/6273.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1556" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566960109876.jpg">1566960109876.jpg</a> <span class="unimportant">(1.19 MB, 1600x1200, <span class="postfilename" title="75e8fb2e72343bb797c36072384d52c6.jpg">75e8fb2e72343bb797c3607238….jpg</span>)</span></p><a href="/agg/src/1566960109876.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566960109876.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1556" ><p class="intro"><input type="checkbox" class="delete" name="delete_1556" id="delete_1556" /><label for="delete_1556"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:45:03Z">08/28/19 (Wed) 02:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1556" onclick="return highlightReply(1556, event)" href="/agg/res/1556#1556">No.</a><a class="post_no" onclick="return citeReply(1556)" href="/agg/res/1556#q1556">1556</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1556">[Reply]</a></p><div class="body">Getting tired earlier and earlier...<br/><a href=https://kissu.moe/qa/res/6267.html>https://kissu.moe/qa/res/6267.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1555" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566959662849.jpg">1566959662849.jpg</a> <span class="unimportant">(76.62 KB, 638x600, <span class="postfilename">1490917154772.jpg</span>)</span></p><a href="/agg/src/1566959662849.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566959662849.png" style="width:255px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1555" ><p class="intro"><input type="checkbox" class="delete" name="delete_1555" id="delete_1555" /><label for="delete_1555"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:35:03Z">08/28/19 (Wed) 02:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1555" onclick="return highlightReply(1555, event)" href="/agg/res/1555#1555">No.</a><a class="post_no" onclick="return citeReply(1555)" href="/agg/res/1555#q1555">1555</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1555">[Reply]</a></p><div class="body">are archives going to be dead for good<br/><a href=https://kissu.moe/qa/res/6262.html>https://kissu.moe/qa/res/6262.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1554" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566958666381.jpg">1566958666381.jpg</a> <span class="unimportant">(38.82 KB, 640x480, <span class="postfilename" title="13718545_10154346403413205_2565666706765764738_n.jpg">13718545_10154346403413205….jpg</span>)</span></p><a href="/agg/src/1566958666381.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566958666381.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1554" ><p class="intro"><input type="checkbox" class="delete" name="delete_1554" id="delete_1554" /><label for="delete_1554"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:20:03Z">08/28/19 (Wed) 02:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1554" onclick="return highlightReply(1554, event)" href="/agg/res/1554#1554">No.</a><a class="post_no" onclick="return citeReply(1554)" href="/agg/res/1554#q1554">1554</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1554">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2308.html>http://what-ch.mooo.com/what/res/2308.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1553" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566957943634.jpg">1566957943634.jpg</a> <span class="unimportant">(142.26 KB, 568x711, <span class="postfilename" title="06ea2191e4ab487475bb3a8cd972b6fd.jpg">06ea2191e4ab487475bb3a8cd9….jpg</span>)</span></p><a href="/agg/src/1566957943634.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566957943634.png" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1553" ><p class="intro"><input type="checkbox" class="delete" name="delete_1553" id="delete_1553" /><label for="delete_1553"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:10:03Z">08/28/19 (Wed) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1553" onclick="return highlightReply(1553, event)" href="/agg/res/1553#1553">No.</a><a class="post_no" onclick="return citeReply(1553)" href="/agg/res/1553#q1553">1553</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1553">[Reply]</a></p><div class="body">“The devil whispered in my ear, &#39;You are not strong enough to withstand the storm&#39;. Today, I whispered in the devil&#39;s ear, &#39;I am the storm&#39;.”<br/><a href=http://what-ch.mooo.com/what/res/2306.html>http://what-ch.mooo.com/what/res/2306.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1552" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566957695174.png">1566957695174.png</a> <span class="unimportant">(648.3 KB, 868x1228, <span class="postfilename">74393307_p3.png</span>)</span></p><a href="/agg/src/1566957695174.png" target="_blank"><img class="post-image" src="/agg/thumb/1566957695174.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1552" ><p class="intro"><input type="checkbox" class="delete" name="delete_1552" id="delete_1552" /><label for="delete_1552"><span class="name">Anonymous</span> <time datetime="2019-08-28T02:05:03Z">08/28/19 (Wed) 02:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1552" onclick="return highlightReply(1552, event)" href="/agg/res/1552#1552">No.</a><a class="post_no" onclick="return citeReply(1552)" href="/agg/res/1552#q1552">1552</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1552">[Reply]</a></p><div class="body">Do you meet your daily calcium requirements?<br/><a href=https://kissu.moe/qa/res/6251.html>https://kissu.moe/qa/res/6251.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1551" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566954639308.jpg">1566954639308.jpg</a> <span class="unimportant">(143.35 KB, 800x800, <span class="postfilename">1565291108863.jpg</span>)</span></p><a href="/agg/src/1566954639308.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566954639308.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1551" ><p class="intro"><input type="checkbox" class="delete" name="delete_1551" id="delete_1551" /><label for="delete_1551"><span class="name">Anonymous</span> <time datetime="2019-08-28T01:15:03Z">08/28/19 (Wed) 01:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1551" onclick="return highlightReply(1551, event)" href="/agg/res/1551#1551">No.</a><a class="post_no" onclick="return citeReply(1551)" href="/agg/res/1551#q1551">1551</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1551">[Reply]</a></p><div class="body">We trippy mane<br/><a href=https://kissu.moe/qa/res/6226.html>https://kissu.moe/qa/res/6226.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1550" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566952643728.png">1566952643728.png</a> <span class="unimportant">(290.46 KB, 979x403, <span class="postfilename">1566687267716.png</span>)</span></p><a href="/agg/src/1566952643728.png" target="_blank"><img class="post-image" src="/agg/thumb/1566952643728.png" style="width:255px;height:105px" alt="" /></a></div>    </div>    <div class="post op" id="op_1550" ><p class="intro"><input type="checkbox" class="delete" name="delete_1550" id="delete_1550" /><label for="delete_1550"><span class="name">Anonymous</span> <time datetime="2019-08-28T00:40:03Z">08/28/19 (Wed) 00:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1550" onclick="return highlightReply(1550, event)" href="/agg/res/1550#1550">No.</a><a class="post_no" onclick="return citeReply(1550)" href="/agg/res/1550#q1550">1550</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1550">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6218.html>https://kissu.moe/qa/res/6218.html</a></div></div><br class="clear"/><hr/></div>
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
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/29" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a class="selected">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/31" method="get"><input type="submit" value="Next" /></form>
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