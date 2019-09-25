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
			<img class="board_image" src="/static/banners/banner-kissu-5.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="text" value="q&#109;&#115;SY[&#118;pLH2&#80;\1y&#64;b,k_" >
<textarea name="firstname" style="display:none">f#⚈/ ♬3}{QD&#116;7\+d&#53;:&#89;@&#9874;Bv&#86;&#84;-sepZ$~]I&#85;&#59;S^nhX&#33;9K&#91;)&#109;&#117;&lt;N(W8♛&#62;&#120;r&#111;2</textarea>
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value=" &#102;♻⛭♃&#57;/qzwZk.&#64;h&#124;&#59;$LF&#9953;mdv&#44;&#69;R&#56;&#51;W%1&#89;IM&#94;iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤&#54;X&amp;&#123;D&#120; \4Np&#75;Hn:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea name="y0kh38z9do♒sb" style="display:none">pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input name="search" value="b☵#Y{7`9J⚴@V^6_-" type="hidden">
			
			
				
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
		<div class="thread" id="thread_1649" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567273408032.png">1567273408032.png</a> <span class="unimportant">(627.69 KB, 891x720, <span class="postfilename">1461360692632.png</span>)</span></p><a href="/agg/src/1567273408032.png" target="_blank"><img class="post-image" src="/agg/thumb/1567273408032.png" style="width:255px;height:206px" alt="" /></a></div>    </div>    <div class="post op" id="op_1649" ><p class="intro"><input type="checkbox" class="delete" name="delete_1649" id="delete_1649" /><label for="delete_1649"><span class="name">Anonymous</span> <time datetime="2019-08-31T17:45:03Z">08/31/19 (Sat) 17:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1649" onclick="return highlightReply(1649, event)" href="/agg/res/1649#1649">No.</a><a class="post_no" onclick="return citeReply(1649)" href="/agg/res/1649#q1649">1649</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1649">[Reply]</a></p><div class="body">Alcohol...<br/><a href=https://kissu.moe/qa/res/6879.html>https://kissu.moe/qa/res/6879.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1648" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567272782006.png">1567272782006.png</a> <span class="unimportant">(393.62 KB, 624x455, <span class="postfilename">dumbmaid.png</span>)</span></p><a href="/agg/src/1567272782006.png" target="_blank"><img class="post-image" src="/agg/thumb/1567272782006.png" style="width:255px;height:186px" alt="" /></a></div>    </div>    <div class="post op" id="op_1648" ><p class="intro"><input type="checkbox" class="delete" name="delete_1648" id="delete_1648" /><label for="delete_1648"><span class="name">Anonymous</span> <time datetime="2019-08-31T17:35:03Z">08/31/19 (Sat) 17:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1648" onclick="return highlightReply(1648, event)" href="/agg/res/1648#1648">No.</a><a class="post_no" onclick="return citeReply(1648)" href="/agg/res/1648#q1648">1648</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1648">[Reply]</a></p><div class="body">Have your maids ever given you reason to beat them?<br/><a href=https://kissu.moe/qa/res/6877.html>https://kissu.moe/qa/res/6877.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1647" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567264616084.jpg">1567264616084.jpg</a> <span class="unimportant">(793.96 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 139 [BD][1080p][849EE354].mkv_snapshot_06.31_[2019.08.10_15.32.26].jpg">[MiG_MuX] PriPara - 139 [B….jpg</span>)</span></p><a href="/agg/src/1567264616084.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567264616084.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1647" ><p class="intro"><input type="checkbox" class="delete" name="delete_1647" id="delete_1647" /><label for="delete_1647"><span class="name">Anonymous</span> <time datetime="2019-08-31T15:20:03Z">08/31/19 (Sat) 15:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1647" onclick="return highlightReply(1647, event)" href="/agg/res/1647#1647">No.</a><a class="post_no" onclick="return citeReply(1647)" href="/agg/res/1647#q1647">1647</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1647">[Reply]</a></p><div class="body">KYUPIKOOOOOOOOOOOOOOOOOOOOOOOOOON<br/><a href=https://kissu.moe/qa/res/6869.html>https://kissu.moe/qa/res/6869.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1646" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567259809167.png">1567259809167.png</a> <span class="unimportant">(85.21 KB, 423x77, <span class="postfilename">c1ac314369.png</span>)</span></p><a href="/agg/src/1567259809167.png" target="_blank"><img class="post-image" src="/agg/thumb/1567259809167.png" style="width:255px;height:46px" alt="" /></a></div>    </div>    <div class="post op" id="op_1646" ><p class="intro"><input type="checkbox" class="delete" name="delete_1646" id="delete_1646" /><label for="delete_1646"><span class="name">Anonymous</span> <time datetime="2019-08-31T14:00:04Z">08/31/19 (Sat) 14:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1646" onclick="return highlightReply(1646, event)" href="/agg/res/1646#1646">No.</a><a class="post_no" onclick="return citeReply(1646)" href="/agg/res/1646#q1646">1646</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1646">[Reply]</a></p><div class="body">no...<br/><a href=https://kissu.moe/qa/res/6858.html>https://kissu.moe/qa/res/6858.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1645" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567253356213.jpg">1567253356213.jpg</a> <span class="unimportant">(455.73 KB, 1280x720, <span class="postfilename" title="[Coalgirls]_Elfen_Lied_01_[1280x720_Blu-ray_FLAC]_[5BC74BC6].mkv_snapshot_15.06_[2019.08.31_08.07.46].jpg">[Coalgirls]_Elfen_Lied_01_….jpg</span>)</span></p><a href="/agg/src/1567253356213.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567253356213.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1645" ><p class="intro"><input type="checkbox" class="delete" name="delete_1645" id="delete_1645" /><label for="delete_1645"><span class="name">Anonymous</span> <time datetime="2019-08-31T12:10:03Z">08/31/19 (Sat) 12:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1645" onclick="return highlightReply(1645, event)" href="/agg/res/1645#1645">No.</a><a class="post_no" onclick="return citeReply(1645)" href="/agg/res/1645#q1645">1645</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1645">[Reply]</a></p><div class="body">ニュ～<br/><a href=https://kissu.moe/qa/res/6850.html>https://kissu.moe/qa/res/6850.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1644" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567250441691.jpg">1567250441691.jpg</a> <span class="unimportant">(238.14 KB, 671x1000, <span class="postfilename">1356417717799.jpg</span>)</span></p><a href="/agg/src/1567250441691.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567250441691.png" style="width:171px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1644" ><p class="intro"><input type="checkbox" class="delete" name="delete_1644" id="delete_1644" /><label for="delete_1644"><span class="name">Anonymous</span> <time datetime="2019-08-31T11:25:02Z">08/31/19 (Sat) 11:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1644" onclick="return highlightReply(1644, event)" href="/agg/res/1644#1644">No.</a><a class="post_no" onclick="return citeReply(1644)" href="/agg/res/1644#q1644">1644</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1644">[Reply]</a></p><div class="body">Really need to stop passing out<br/><a href=https://kissu.moe/qa/res/6846.html>https://kissu.moe/qa/res/6846.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1643" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567245845403.jpg">1567245845403.jpg</a> <span class="unimportant">(64.11 KB, 716x718, <span class="postfilename">1479468510212.jpg</span>)</span></p><a href="/agg/src/1567245845403.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567245845403.png" style="width:254px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1643" ><p class="intro"><input type="checkbox" class="delete" name="delete_1643" id="delete_1643" /><label for="delete_1643"><span class="name">Anonymous</span> <time datetime="2019-08-31T10:05:02Z">08/31/19 (Sat) 10:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1643" onclick="return highlightReply(1643, event)" href="/agg/res/1643#1643">No.</a><a class="post_no" onclick="return citeReply(1643)" href="/agg/res/1643#q1643">1643</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1643">[Reply]</a></p><div class="body">This board is so empty around this time of the day, I could be a huge faggot and there is no one to stop me!<br/><a href=https://kissu.moe/qa/res/6845.html>https://kissu.moe/qa/res/6845.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1642" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567240805538.jpg">1567240805538.jpg</a> <span class="unimportant">(1.78 MB, 3264x2448, <span class="postfilename">1567205732482.jpg</span>)</span></p><a href="/agg/src/1567240805538.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567240805538.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1642" ><p class="intro"><input type="checkbox" class="delete" name="delete_1642" id="delete_1642" /><label for="delete_1642"><span class="name">Anonymous</span> <time datetime="2019-08-31T08:45:04Z">08/31/19 (Sat) 08:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1642" onclick="return highlightReply(1642, event)" href="/agg/res/1642#1642">No.</a><a class="post_no" onclick="return citeReply(1642)" href="/agg/res/1642#q1642">1642</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1642">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2363.html>http://what-ch.mooo.com/what/res/2363.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1641" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567233117332.gif">1567233117332.gif</a> <span class="unimportant">(452.12 KB, 369x480, <span class="postfilename">1565422207416.gif</span>)</span></p><a href="/agg/src/1567233117332.gif" target="_blank"><img class="post-image" src="/agg/thumb/1567233117332.png" style="width:185px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1641" ><p class="intro"><input type="checkbox" class="delete" name="delete_1641" id="delete_1641" /><label for="delete_1641"><span class="name">Anonymous</span> <time datetime="2019-08-31T06:35:03Z">08/31/19 (Sat) 06:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1641" onclick="return highlightReply(1641, event)" href="/agg/res/1641#1641">No.</a><a class="post_no" onclick="return citeReply(1641)" href="/agg/res/1641#q1641">1641</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1641">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2362.html>http://what-ch.mooo.com/what/res/2362.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1640" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567224979341.png">1567224979341.png</a> <span class="unimportant">(1.06 MB, 1280x720, <span class="postfilename" title="[HorribleSubs] Enen no Shouboutai - 08 [720p]-00_22_07.201.png">[HorribleSubs] Enen no Sho….png</span>)</span></p><a href="/agg/src/1567224979341.png" target="_blank"><img class="post-image" src="/agg/thumb/1567224979341.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1640" ><p class="intro"><input type="checkbox" class="delete" name="delete_1640" id="delete_1640" /><label for="delete_1640"><span class="name">Anonymous</span> <time datetime="2019-08-31T04:20:04Z">08/31/19 (Sat) 04:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1640" onclick="return highlightReply(1640, event)" href="/agg/res/1640#1640">No.</a><a class="post_no" onclick="return citeReply(1640)" href="/agg/res/1640#q1640">1640</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1640">[Reply]</a></p><div class="body">didn&#39;t like this episode....<br/>Tamaki doesn&#39;t deserve this........<br/><a href=https://kissu.moe/qa/res/6830.html>https://kissu.moe/qa/res/6830.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1639" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567214788684.jpg">1567214788684.jpg</a> <span class="unimportant">(786.33 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 127 [BD][1080p][AB5DD073].mkv_snapshot_07.12_[2019.08.10_03.11.24].jpg">[MiG_MuX] PriPara - 127 [B….jpg</span>)</span></p><a href="/agg/src/1567214788684.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567214788684.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1639" ><p class="intro"><input type="checkbox" class="delete" name="delete_1639" id="delete_1639" /><label for="delete_1639"><span class="name">Anonymous</span> <time datetime="2019-08-31T01:30:03Z">08/31/19 (Sat) 01:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1639" onclick="return highlightReply(1639, event)" href="/agg/res/1639#1639">No.</a><a class="post_no" onclick="return citeReply(1639)" href="/agg/res/1639#q1639">1639</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1639">[Reply]</a></p><div class="body">Got fully rangebanned from 4chan, I&#39;m just that bad a dude<br/><a href=https://kissu.moe/qa/res/6799.html>https://kissu.moe/qa/res/6799.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1638" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567213250150.png">1567213250150.png</a> <span class="unimportant">(447.86 KB, 563x675, <span class="postfilename">saved.png</span>)</span></p><a href="/agg/src/1567213250150.png" target="_blank"><img class="post-image" src="/agg/thumb/1567213250150.png" style="width:213px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1638" ><p class="intro"><input type="checkbox" class="delete" name="delete_1638" id="delete_1638" /><label for="delete_1638"><span class="subject">The Eternal Thread</span> <span class="name">Anonymous</span> <time datetime="2019-08-31T01:05:03Z">08/31/19 (Sat) 01:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1638" onclick="return highlightReply(1638, event)" href="/agg/res/1638#1638">No.</a><a class="post_no" onclick="return citeReply(1638)" href="/agg/res/1638#q1638">1638</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1638">[Reply]</a></p><div class="body">Every time this thread reaches page 10, it will be bumped, until it dies, or until I stop saving images on this site.<br/><a href=https://kissu.moe/qa/res/6792.html>https://kissu.moe/qa/res/6792.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1637" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567210660688.jpg">1567210660688.jpg</a> <span class="unimportant">(114.7 KB, 1280x720, <span class="postfilename" title="[naisho] PriPara - 09 [7952844C].mkv_snapshot_04.16_[2017.08.15_04.41.29].jpg">[naisho] PriPara - 09 [795….jpg</span>)</span></p><a href="/agg/src/1567210660688.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567210660688.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1637" ><p class="intro"><input type="checkbox" class="delete" name="delete_1637" id="delete_1637" /><label for="delete_1637"><span class="name">Anonymous</span> <time datetime="2019-08-31T00:20:04Z">08/31/19 (Sat) 00:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1637" onclick="return highlightReply(1637, event)" href="/agg/res/1637#1637">No.</a><a class="post_no" onclick="return citeReply(1637)" href="/agg/res/1637#q1637">1637</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1637">[Reply]</a></p><div class="body">yoshi yoshi<br/>good NEET<br/><a href=https://kissu.moe/qa/res/6786.html>https://kissu.moe/qa/res/6786.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1636" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567207157988.jpg">1567207157988.jpg</a> <span class="unimportant">(188.39 KB, 1920x1080, <span class="postfilename">1516313671306.jpg</span>)</span></p><a href="/agg/src/1567207157988.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567207157988.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1636" ><p class="intro"><input type="checkbox" class="delete" name="delete_1636" id="delete_1636" /><label for="delete_1636"><span class="name">Anonymous</span> <time datetime="2019-08-30T23:20:04Z">08/30/19 (Fri) 23:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1636" onclick="return highlightReply(1636, event)" href="/agg/res/1636#1636">No.</a><a class="post_no" onclick="return citeReply(1636)" href="/agg/res/1636#q1636">1636</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1636">[Reply]</a></p><div class="body">Put some sesame chili sauce in my ramen and it was <strong>really</strong> good<br/><a href=https://kissu.moe/qa/res/6765.html>https://kissu.moe/qa/res/6765.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1635" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567207105581.jpg">1567207105581.jpg</a> <span class="unimportant">(125.21 KB, 1080x1440, <span class="postfilename">1561029904555.jpg</span>)</span></p><a href="/agg/src/1567207105581.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567207105581.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1635" ><p class="intro"><input type="checkbox" class="delete" name="delete_1635" id="delete_1635" /><label for="delete_1635"><span class="name">Anonymous</span> <time datetime="2019-08-30T23:20:04Z">08/30/19 (Fri) 23:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1635" onclick="return highlightReply(1635, event)" href="/agg/res/1635#1635">No.</a><a class="post_no" onclick="return citeReply(1635)" href="/agg/res/1635#q1635">1635</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1635">[Reply]</a></p><div class="body">fix your site pissman<br/><a href=https://kissu.moe/qa/res/6764.html>https://kissu.moe/qa/res/6764.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1634" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567206781918.jpg">1567206781918.jpg</a> <span class="unimportant">(146.74 KB, 760x875, <span class="postfilename">1444153766119.jpg</span>)</span></p><a href="/agg/src/1567206781918.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567206781918.png" style="width:221px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1634" ><p class="intro"><input type="checkbox" class="delete" name="delete_1634" id="delete_1634" /><label for="delete_1634"><span class="name">Anonymous</span> <time datetime="2019-08-30T23:15:03Z">08/30/19 (Fri) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1634" onclick="return highlightReply(1634, event)" href="/agg/res/1634#1634">No.</a><a class="post_no" onclick="return citeReply(1634)" href="/agg/res/1634#q1634">1634</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1634">[Reply]</a></p><div class="body">What is <em>with</em> girl&#39;s fascination with the perverse?<br/><a href=https://kissu.moe/qa/res/6757.html>https://kissu.moe/qa/res/6757.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1633" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567205936821.jpg">1567205936821.jpg</a> <span class="unimportant">(8.48 MB, 2894x4093, <span class="postfilename" title="530ef99546ab565c9e8e25d7490873c6.jpg">530ef99546ab565c9e8e25d749….jpg</span>)</span></p><a href="/agg/src/1567205936821.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567205936821.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1633" ><p class="intro"><input type="checkbox" class="delete" name="delete_1633" id="delete_1633" /><label for="delete_1633"><span class="name">Anonymous</span> <time datetime="2019-08-30T23:00:04Z">08/30/19 (Fri) 23:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1633" onclick="return highlightReply(1633, event)" href="/agg/res/1633#1633">No.</a><a class="post_no" onclick="return citeReply(1633)" href="/agg/res/1633#q1633">1633</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1633">[Reply]</a></p><div class="body">Who&#39;s your favorite of the latest IM@S idols?<br/><a href=https://kissu.moe/qa/res/6747.html>https://kissu.moe/qa/res/6747.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1632" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567204077703.jpg">1567204077703.jpg</a> <span class="unimportant">(84.26 KB, 700x629, <span class="postfilename">1505508641027.jpg</span>)</span></p><a href="/agg/src/1567204077703.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567204077703.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_1632" ><p class="intro"><input type="checkbox" class="delete" name="delete_1632" id="delete_1632" /><label for="delete_1632"><span class="name">Anonymous</span> <time datetime="2019-08-30T22:30:03Z">08/30/19 (Fri) 22:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1632" onclick="return highlightReply(1632, event)" href="/agg/res/1632#1632">No.</a><a class="post_no" onclick="return citeReply(1632)" href="/agg/res/1632#q1632">1632</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1632">[Reply]</a></p><div class="body">oh shit guys look at that it&#39;s <br/><span class="heading">FRIDAY NIGHT</span><br/><a href=https://kissu.moe/qa/res/6740.html>https://kissu.moe/qa/res/6740.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1631" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567203833295.jpg">1567203833295.jpg</a> <span class="unimportant">(78.79 KB, 716x768, <span class="postfilename">1401266977179.jpg</span>)</span></p><a href="/agg/src/1567203833295.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567203833295.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1631" ><p class="intro"><input type="checkbox" class="delete" name="delete_1631" id="delete_1631" /><label for="delete_1631"><span class="name">Anonymous</span> <time datetime="2019-08-30T22:25:02Z">08/30/19 (Fri) 22:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1631" onclick="return highlightReply(1631, event)" href="/agg/res/1631#1631">No.</a><a class="post_no" onclick="return citeReply(1631)" href="/agg/res/1631#q1631">1631</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1631">[Reply]</a></p><div class="body">Tell me about 20_other_users, why does he always change his name?<br/><a href=https://kissu.moe/qa/res/6738.html>https://kissu.moe/qa/res/6738.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1630" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567202259083.jpg">1567202259083.jpg</a> <span class="unimportant">(42.25 KB, 600x600, <span class="postfilename" title="473b4f8975eecff0ce5cb2d198724a94.jpg">473b4f8975eecff0ce5cb2d198….jpg</span>)</span></p><a href="/agg/src/1567202259083.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567202259083.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1630" ><p class="intro"><input type="checkbox" class="delete" name="delete_1630" id="delete_1630" /><label for="delete_1630"><span class="name">Anonymous</span> <time datetime="2019-08-30T22:00:09Z">08/30/19 (Fri) 22:00:09</time></label>&nbsp;<a class="post_no" id="post_no_1630" onclick="return highlightReply(1630, event)" href="/agg/res/1630#1630">No.</a><a class="post_no" onclick="return citeReply(1630)" href="/agg/res/1630#q1630">1630</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1630">[Reply]</a></p><div class="body">why are there so many posts? i don&#39;t wanna read all this crap...shut the heck up?<br/><a href=https://kissu.moe/qa/res/6726.html>https://kissu.moe/qa/res/6726.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/25" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a class="selected">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/27" method="get"><input type="submit" value="Next" /></form>
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