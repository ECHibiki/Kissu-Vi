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
			<img class="board_image" src="/static/banners/banner-kissu-26.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" value="qmsSY[vpLH2P\1y@b,k_" name="text">
<textarea style="display:none" name="firstname">f&#35;⚈&#47; ♬3}{QD&#116;7\+d5:Y@⚒BvVT&#45;sepZ$&#126;]IU&#59;S&#94;n&#104;&#88;!9&#75;[&#41;mu&#60;&#78;(W&#56;&#9819;&gt;x&#114;o2</textarea>
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/&#91;LH&#32;J&#105;:`!;C+6\&#111;T&lt;&#56;&#79;&#98;I|&#63;&#88;]d.2☨{&#116;&#87;5&#32;c&#9905;1B=&#107;@&#57;(3Ng&#9774;*}&#52;'&#80;Q-&#77;V⚯0K&#68;7&#117;sj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<span style="display:none" ><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" ></span >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)">
			</td>
		</tr>		<tr>
			<th>
				Options				<input   value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="   name="y0kh38z9do♒sb"   type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea name="search" style="display:none">b☵#Y&#123;7&#96;9&#74;&#9908;&#64;&#86;^&#54;_&#45;</textarea>
			
			
				
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
		<div class="thread" id="thread_1258" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565235226031.png">1565235226031.png</a> <span class="unimportant">(519.25 KB, 640x459, <span class="postfilename">1452283852572.png</span>)</span></p><a href="/agg/src/1565235226031.png" target="_blank"><img class="post-image" src="/agg/thumb/1565235226031.png" style="width:240px;height:173px" alt="" /></a></div>    </div>    <div class="post op" id="op_1258" ><p class="intro"><input type="checkbox" class="delete" name="delete_1258" id="delete_1258" /><label for="delete_1258"><span class="name">Anonymous</span> <time datetime="2019-08-08T03:35:02Z">08/08/19 (Thu) 03:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1258" onclick="return highlightReply(1258, event)" href="/agg/res/1258#1258">No.</a><a class="post_no" onclick="return citeReply(1258)" href="/agg/res/1258#q1258">1258</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1258">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1825.html>http://what-ch.mooo.com/what/res/1825.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1257" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565233173801.png">1565233173801.png</a> <span class="unimportant">(1.05 MB, 1196x676, <span class="postfilename">1565212166327.png</span>)</span></p><a href="/agg/src/1565233173801.png" target="_blank"><img class="post-image" src="/agg/thumb/1565233173801.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1257" ><p class="intro"><input type="checkbox" class="delete" name="delete_1257" id="delete_1257" /><label for="delete_1257"><span class="name">Anonymous</span> <time datetime="2019-08-08T03:00:03Z">08/08/19 (Thu) 03:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1257" onclick="return highlightReply(1257, event)" href="/agg/res/1257#1257">No.</a><a class="post_no" onclick="return citeReply(1257)" href="/agg/res/1257#q1257">1257</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1257">[Reply]</a></p><div class="body">/what/ operators<br/><a href=http://what-ch.mooo.com/what/res/1819.html>http://what-ch.mooo.com/what/res/1819.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1256" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565229778107.jpg">1565229778107.jpg</a> <span class="unimportant">(1.94 MB, 2480x3508, <span class="postfilename">1562824994508.jpg</span>)</span></p><a href="/agg/src/1565229778107.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565229778107.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1256" ><p class="intro"><input type="checkbox" class="delete" name="delete_1256" id="delete_1256" /><label for="delete_1256"><span class="name">Anonymous</span> <time datetime="2019-08-08T02:05:02Z">08/08/19 (Thu) 02:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1256" onclick="return highlightReply(1256, event)" href="/agg/res/1256#1256">No.</a><a class="post_no" onclick="return citeReply(1256)" href="/agg/res/1256#q1256">1256</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1256">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1818.html>http://what-ch.mooo.com/what/res/1818.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1255" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565189878818.png">1565189878818.png</a> <span class="unimportant">(3.01 MB, 2522x1771, <span class="postfilename" title="b15ef831d4ce86f15929004055fcb41f.png">b15ef831d4ce86f15929004055….png</span>)</span></p><a href="/agg/src/1565189878818.png" target="_blank"><img class="post-image" src="/agg/thumb/1565189878818.png" style="width:240px;height:169px" alt="" /></a></div>    </div>    <div class="post op" id="op_1255" ><p class="intro"><input type="checkbox" class="delete" name="delete_1255" id="delete_1255" /><label for="delete_1255"><span class="name">Anonymous</span> <time datetime="2019-08-07T15:00:09Z">08/07/19 (Wed) 15:00:09</time></label>&nbsp;<a class="post_no" id="post_no_1255" onclick="return highlightReply(1255, event)" href="/agg/res/1255#1255">No.</a><a class="post_no" onclick="return citeReply(1255)" href="/agg/res/1255#q1255">1255</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1255">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1808.html>http://what-ch.mooo.com/what/res/1808.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1254" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565184671619.jpeg">1565184671619.jpeg</a> <span class="unimportant">(86.34 KB, 626x620, <span class="postfilename">misc 2020.jpeg</span>)</span></p><a href="/agg/src/1565184671619.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1565184671619.png" style="width:240px;height:238px" alt="" /></a></div>    </div>    <div class="post op" id="op_1254" ><p class="intro"><input type="checkbox" class="delete" name="delete_1254" id="delete_1254" /><label for="delete_1254"><span class="name">Anonymous</span> <time datetime="2019-08-07T13:35:02Z">08/07/19 (Wed) 13:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1254" onclick="return highlightReply(1254, event)" href="/agg/res/1254#1254">No.</a><a class="post_no" onclick="return citeReply(1254)" href="/agg/res/1254#q1254">1254</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1254">[Reply]</a></p><div class="body">Take your cock out! Grab it tight!<br/>Pump it morning, noon and night!<br/>Jerk it while it throbs and grows!<br/>Stroke it til it really blows!<br/>Pant out hard and moan out loud!<br/>Feel just like you&#39;re on a cloud!<br/><a href=http://what-ch.mooo.com/what/res/1806.html>http://what-ch.mooo.com/what/res/1806.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1253" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565174034037.jpg">1565174034037.jpg</a> <span class="unimportant">(405.72 KB, 800x800, <span class="postfilename" title="ee0435e938c3215bcab9b9be562ce6d9.jpg">ee0435e938c3215bcab9b9be56….jpg</span>)</span></p><a href="/agg/src/1565174034037.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565174034037.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1253" ><p class="intro"><input type="checkbox" class="delete" name="delete_1253" id="delete_1253" /><label for="delete_1253"><span class="name">Anonymous</span> <time datetime="2019-08-07T10:35:02Z">08/07/19 (Wed) 10:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1253" onclick="return highlightReply(1253, event)" href="/agg/res/1253#1253">No.</a><a class="post_no" onclick="return citeReply(1253)" href="/agg/res/1253#q1253">1253</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1253">[Reply]</a></p><div class="body">The Legendary /pissu/ heritage<br/><a href=https://kissu.moe/qa/res/4607.html>https://kissu.moe/qa/res/4607.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1252" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565168705578.mp4">1565168705578.mp4</a> <span class="unimportant">(1.2 MB, 960x540, <span class="postfilename">yukari faggot.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1565168705578.mp4&amp;t=yukari%20faggot.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1565168705578.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1252" ><p class="intro"><input type="checkbox" class="delete" name="delete_1252" id="delete_1252" /><label for="delete_1252"><span class="name">Anonymous</span> <time datetime="2019-08-07T09:10:02Z">08/07/19 (Wed) 09:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1252" onclick="return highlightReply(1252, event)" href="/agg/res/1252#1252">No.</a><a class="post_no" onclick="return citeReply(1252)" href="/agg/res/1252#q1252">1252</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1252">[Reply]</a></p><div class="body">Wtf I can&#39;t believe this was in Persona 3<br/><a href=http://what-ch.mooo.com/what/res/1802.html>http://what-ch.mooo.com/what/res/1802.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1251" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565156176481.png">1565156176481.png</a> <span class="unimportant">(227.99 KB, 800x600, <span class="postfilename">ec4.png</span>)</span></p><a href="/agg/src/1565156176481.png" target="_blank"><img class="post-image" src="/agg/thumb/1565156176481.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1251" ><p class="intro"><input type="checkbox" class="delete" name="delete_1251" id="delete_1251" /><label for="delete_1251"><span class="name">Anonymous</span> <time datetime="2019-08-07T05:40:02Z">08/07/19 (Wed) 05:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1251" onclick="return highlightReply(1251, event)" href="/agg/res/1251#1251">No.</a><a class="post_no" onclick="return citeReply(1251)" href="/agg/res/1251#q1251">1251</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1251">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1797.html>http://what-ch.mooo.com/what/res/1797.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1250" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565149929834.jpg">1565149929834.jpg</a> <span class="unimportant">(83.08 KB, 704x540, <span class="postfilename">misc 0955.jpg</span>)</span></p><a href="/agg/src/1565149929834.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565149929834.png" style="width:240px;height:185px" alt="" /></a></div>    </div>    <div class="post op" id="op_1250" ><p class="intro"><input type="checkbox" class="delete" name="delete_1250" id="delete_1250" /><label for="delete_1250"><span class="name">Anonymous</span> <time datetime="2019-08-07T03:55:03Z">08/07/19 (Wed) 03:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1250" onclick="return highlightReply(1250, event)" href="/agg/res/1250#1250">No.</a><a class="post_no" onclick="return citeReply(1250)" href="/agg/res/1250#q1250">1250</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1250">[Reply]</a></p><div class="body">This triggers whatmin.<br/><a href=http://what-ch.mooo.com/what/res/1784.html>http://what-ch.mooo.com/what/res/1784.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1249" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565149637188.png">1565149637188.png</a> <span class="unimportant">(722.21 KB, 690x1196, <span class="postfilename" title="6599386d2b690b4d40ca903639998ba3.png">6599386d2b690b4d40ca903639….png</span>)</span></p><a href="/agg/src/1565149637188.png" target="_blank"><img class="post-image" src="/agg/thumb/1565149637188.png" style="width:148px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1249" ><p class="intro"><input type="checkbox" class="delete" name="delete_1249" id="delete_1249" /><label for="delete_1249"><span class="name">Mononobe no Futo</span> <time datetime="2019-08-07T03:50:02Z">08/07/19 (Wed) 03:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1249" onclick="return highlightReply(1249, event)" href="/agg/res/1249#1249">No.</a><a class="post_no" onclick="return citeReply(1249)" href="/agg/res/1249#q1249">1249</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1249">[Reply]</a></p><div class="body">I LOVE MY DOG<br/><a href=https://kakashi-nenpo.com/jp/res/32610.html>https://kakashi-nenpo.com/jp/res/32610.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1248" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565148309537.jpg">1565148309537.jpg</a> <span class="unimportant">(152.81 KB, 800x600, <span class="postfilename">18-UBW15-08-19.jpg</span>)</span></p><a href="/agg/src/1565148309537.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565148309537.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1248" ><p class="intro"><input type="checkbox" class="delete" name="delete_1248" id="delete_1248" /><label for="delete_1248"><span class="name">Anonymous</span> <time datetime="2019-08-07T03:30:03Z">08/07/19 (Wed) 03:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1248" onclick="return highlightReply(1248, event)" href="/agg/res/1248#1248">No.</a><a class="post_no" onclick="return citeReply(1248)" href="/agg/res/1248#q1248">1248</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1248">[Reply]</a></p><div class="body">Read Fate Stay Night<br/><a href=http://what-ch.mooo.com/what/res/1783.html>http://what-ch.mooo.com/what/res/1783.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1247" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565147913145.png">1565147913145.png</a> <span class="unimportant">(197.87 KB, 1926x1080, <span class="postfilename" title="Screenshot_2019-08-07_04-32-53.png">Screenshot_2019-08-07_04-3….png</span>)</span></p><a href="/agg/src/1565147913145.png" target="_blank"><img class="post-image" src="/agg/thumb/1565147913145.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1247" ><p class="intro"><input type="checkbox" class="delete" name="delete_1247" id="delete_1247" /><label for="delete_1247"><span class="name">Medicine Melancholy</span> <time datetime="2019-08-07T03:20:03Z">08/07/19 (Wed) 03:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1247" onclick="return highlightReply(1247, event)" href="/agg/res/1247#1247">No.</a><a class="post_no" onclick="return citeReply(1247)" href="/agg/res/1247#q1247">1247</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1247">[Reply]</a></p><div class="body">Can I come here?<br/><a href=https://kakashi-nenpo.com/jp/res/32608.html>https://kakashi-nenpo.com/jp/res/32608.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1246" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565144795232.jpg">1565144795232.jpg</a> <span class="unimportant">(101.17 KB, 690x689, <span class="postfilename" title="0a0e0d3a031539ad3ca04e77f40f7fbc.jpg">0a0e0d3a031539ad3ca04e77f4….jpg</span>)</span></p><a href="/agg/src/1565144795232.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565144795232.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1246" ><p class="intro"><input type="checkbox" class="delete" name="delete_1246" id="delete_1246" /><label for="delete_1246"><span class="name">Anonymous</span> <time datetime="2019-08-07T02:30:02Z">08/07/19 (Wed) 02:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1246" onclick="return highlightReply(1246, event)" href="/agg/res/1246#1246">No.</a><a class="post_no" onclick="return citeReply(1246)" href="/agg/res/1246#q1246">1246</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1246">[Reply]</a></p><div class="body">this is literally a honeypot run by the fedsd. why does anyone come here?<br/><a href=http://what-ch.mooo.com/what/res/1780.html>http://what-ch.mooo.com/what/res/1780.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1245" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565104811172.png">1565104811172.png</a> <span class="unimportant">(395.07 KB, 671x797, <span class="postfilename">1565103589209.png</span>)</span></p><a href="/agg/src/1565104811172.png" target="_blank"><img class="post-image" src="/agg/thumb/1565104811172.png" style="width:215px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1245" ><p class="intro"><input type="checkbox" class="delete" name="delete_1245" id="delete_1245" /><label for="delete_1245"><span class="name">Anonymous</span> <time datetime="2019-08-06T15:25:02Z">08/06/19 (Tue) 15:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1245" onclick="return highlightReply(1245, event)" href="/agg/res/1245#1245">No.</a><a class="post_no" onclick="return citeReply(1245)" href="/agg/res/1245#q1245">1245</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1245">[Reply]</a></p><div class="body"><br/>дурак...<br/><a href=https://kissu.moe/qa/res/4603.html>https://kissu.moe/qa/res/4603.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1244" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565070222029.jpg">1565070222029.jpg</a> <span class="unimportant">(10.54 KB, 240x320, <span class="postfilename">1565070120708.jpg</span>)</span></p><a href="/agg/src/1565070222029.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565070222029.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1244" ><p class="intro"><input type="checkbox" class="delete" name="delete_1244" id="delete_1244" /><label for="delete_1244"><span class="name">Anonymous</span> <time datetime="2019-08-06T05:45:03Z">08/06/19 (Tue) 05:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1244" onclick="return highlightReply(1244, event)" href="/agg/res/1244#1244">No.</a><a class="post_no" onclick="return citeReply(1244)" href="/agg/res/1244#q1244">1244</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1244">[Reply]</a></p><div class="body">dani is traveling the world and exploring other cultures, <br/>but whatmin has never even left new jersey.<br/><a href=http://what-ch.mooo.com/what/res/1758.html>http://what-ch.mooo.com/what/res/1758.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1243" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565062545971.jpg">1565062545971.jpg</a> <span class="unimportant">(178.29 KB, 640x640, <span class="postfilename">keion 0380.jpg</span>)</span></p><a href="/agg/src/1565062545971.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565062545971.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1243" ><p class="intro"><input type="checkbox" class="delete" name="delete_1243" id="delete_1243" /><label for="delete_1243"><span class="name">Anonymous</span> <time datetime="2019-08-06T03:40:02Z">08/06/19 (Tue) 03:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1243" onclick="return highlightReply(1243, event)" href="/agg/res/1243#1243">No.</a><a class="post_no" onclick="return citeReply(1243)" href="/agg/res/1243#q1243">1243</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1243">[Reply]</a></p><div class="body">I&#39;ve been watching K-On lately and often feel the urge to pull Azunyan&#39;s pigtails and drag her on to my cock whenever I see her. Anyone else feel this way?<br/><a href=http://what-ch.mooo.com/what/res/1753.html>http://what-ch.mooo.com/what/res/1753.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1242" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565047755664.png">1565047755664.png</a> <span class="unimportant">(2.18 MB, 2880x1440, <span class="postfilename">Screenshot_20190805-145331.png</span>)</span></p><a href="/agg/src/1565047755664.png" target="_blank"><img class="post-image" src="/agg/thumb/1565047755664.png" style="width:240px;height:120px" alt="" /></a></div>    </div>    <div class="post op" id="op_1242" ><p class="intro"><input type="checkbox" class="delete" name="delete_1242" id="delete_1242" /><label for="delete_1242"><span class="name">Anonymous</span> <time datetime="2019-08-05T23:30:02Z">08/05/19 (Mon) 23:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1242" onclick="return highlightReply(1242, event)" href="/agg/res/1242#1242">No.</a><a class="post_no" onclick="return citeReply(1242)" href="/agg/res/1242#q1242">1242</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1242">[Reply]</a></p><div class="body">big combo<br/><a href=http://what-ch.mooo.com/what/res/1750.html>http://what-ch.mooo.com/what/res/1750.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1241" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565042949516.jpg">1565042949516.jpg</a> <span class="unimportant">(200.45 KB, 791x1000, <span class="postfilename">my cummer and me.jpg</span>)</span></p><a href="/agg/src/1565042949516.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565042949516.png" style="width:190px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1241" ><p class="intro"><input type="checkbox" class="delete" name="delete_1241" id="delete_1241" /><label for="delete_1241"><span class="name">Anonymous</span> <time datetime="2019-08-05T22:10:03Z">08/05/19 (Mon) 22:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1241" onclick="return highlightReply(1241, event)" href="/agg/res/1241#1241">No.</a><a class="post_no" onclick="return citeReply(1241)" href="/agg/res/1241#q1241">1241</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1241">[Reply]</a></p><div class="body">me and my cummer<br/><a href=http://what-ch.mooo.com/what/res/1748.html>http://what-ch.mooo.com/what/res/1748.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1240" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564998071403.jpeg">1564998071403.jpeg</a> <span class="unimportant">(252.7 KB, 900x1200, <span class="postfilename">b1bff1ae75a2f6fa.jpeg</span>)</span></p><a href="/agg/src/1564998071403.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1564998071403.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1240" ><p class="intro"><input type="checkbox" class="delete" name="delete_1240" id="delete_1240" /><label for="delete_1240"><span class="name">Anonymous</span> <time datetime="2019-08-05T09:45:02Z">08/05/19 (Mon) 09:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1240" onclick="return highlightReply(1240, event)" href="/agg/res/1240#1240">No.</a><a class="post_no" onclick="return citeReply(1240)" href="/agg/res/1240#q1240">1240</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1240">[Reply]</a></p><div class="body">The ideal woman<br/><a href=http://what-ch.mooo.com/what/res/1742.html>http://what-ch.mooo.com/what/res/1742.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1239" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564985968074.jpg">1564985968074.jpg</a> <span class="unimportant">(76.89 KB, 600x726, <span class="postfilename" title="2147b099af81f770062312c49e86012e740f6af8_hq.jpg">2147b099af81f770062312c49e….jpg</span>)</span></p><a href="/agg/src/1564985968074.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564985968074.png" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1239" ><p class="intro"><input type="checkbox" class="delete" name="delete_1239" id="delete_1239" /><label for="delete_1239"><span class="name">Anonymous</span> <time datetime="2019-08-05T06:20:04Z">08/05/19 (Mon) 06:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1239" onclick="return highlightReply(1239, event)" href="/agg/res/1239#1239">No.</a><a class="post_no" onclick="return citeReply(1239)" href="/agg/res/1239#q1239">1239</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1239">[Reply]</a></p><div class="body">I&#39;ve been with Konata for 10 years now. We met in high school, and I got her pregnant.<br/><br/>She is and always has been a lazy person and a shit cook. I wouldn&#39;t even mind eating shit food if she at least made it on time. But she rarely did.<br/><br/>We&#39;d get into screaming arguments constantly about how lazy and worthless she was. I felt like an asshole for it, but goddamn she was a real piece of work. The only reason I dealt with all this was for the kids, and also because the sex is great.<br/><br/>But one night, I got fed up. Not only did she get drunk, neglect the kids, and made me Indomie noodles for dinner, but she decided to give me attitude too. She was being real fucking bitchy. So I told my grandparents to keep an eye on the kids and told her we were going to go out and have dinner together then go to the arcade. I drove maybe 3 blocks to a quiet area (we live in Tokyo, it&#39;s not hard to find a lonely industrial park) and I got out of the car, went around like I was going to open her door for her and let her out, and I just beat the shit out of her while she was still seatbelted. After a few punches, I asked her if she wanted to go back to her dad&#39;s. She started screaming and yelling and said yes, so I beat the shit out of her again. Then I asked her what she wanted to do. She finally got smart and said she wanted to go home. So I took her home and dared her to start trouble. I even handed her my cellphone and dialed her dad&#39;s number on the drive home. I made her talk to him, while daring her to fucking say something.<br/><br/>Before that incident, I had never laid a hand on her. But I had always threatened it. I told her "one of these days, if you don&#39;t straighten up, I&#39;m going to lay hands on you."<br/><br/>All my meals have been on time, and she just recently tried to make a omrice. It was mediocre, but I was just thrilled that she tried.<br/><a href=http://what-ch.mooo.com/what/res/1740.html>http://what-ch.mooo.com/what/res/1740.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/44" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a class="selected">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/46" method="get"><input type="submit" value="Next" /></form>
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