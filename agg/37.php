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
			<img class="board_image" src="/static/banners/banner-kissu-19.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none"><input type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_"></div>
<input value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname" type="hidden">
<input type="hidden" name="board" value="agg">
<input value="/[LH Ji:`!;C+6\o&#84;&#60;8ObI|&#63;X]&#100;&#46;2&#9768;{&#116;W5 c⚱1&#66;=&#107;@9(3&#78;g☮*&#125;4'P&#81;&#45;&#77;V⚯0&#75;D7usj" name="login" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" name="q" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="y0kh38z9do♒sb">&#112;&#78;+&gt;8&lt;q&#71;&#47;6d☎&#44;&#39;&#70;%;s&#9896;i&#65;E!R&#117;&#111;PK&#9855;S}_☬V(&#45;c&#94;\{QCD~⛼m⛰lx`&#91;a40.&#85;kbZW⚈#&#42;&#41;Lw&#77;:|r&#9933;&#93;2&#121;@☪n&amp;&#53;Y&#57;♪T&#32;j1f7$3=</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" value="b☵#Y{7`9J⚴@V^6_-" name="search">
			
			
				
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
		<div class="thread" id="thread_1429" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566446335074.jpg">1566446335074.jpg</a> <span class="unimportant">(1.54 MB, 1876x2736, <span class="postfilename">Di Gi Charat v1 p055.jpg</span>)</span></p><a href="/agg/src/1566446335074.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566446335074.png" style="width:165px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1429" ><p class="intro"><input type="checkbox" class="delete" name="delete_1429" id="delete_1429" /><label for="delete_1429"><span class="name">Anonymous</span> <time datetime="2019-08-22T04:00:04Z">08/22/19 (Thu) 04:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1429" onclick="return highlightReply(1429, event)" href="/agg/res/1429#1429">No.</a><a class="post_no" onclick="return citeReply(1429)" href="/agg/res/1429#q1429">1429</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1429">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2165.html>http://what-ch.mooo.com/what/res/2165.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1428" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566445019238.jpg">1566445019238.jpg</a> <span class="unimportant">(54.03 KB, 589x393, <span class="postfilename">Sayanouta-041.jpg</span>)</span></p><a href="/agg/src/1566445019238.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566445019238.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1428" ><p class="intro"><input type="checkbox" class="delete" name="delete_1428" id="delete_1428" /><label for="delete_1428"><span class="name">Anonymous</span> <time datetime="2019-08-22T03:40:02Z">08/22/19 (Thu) 03:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1428" onclick="return highlightReply(1428, event)" href="/agg/res/1428#1428">No.</a><a class="post_no" onclick="return citeReply(1428)" href="/agg/res/1428#q1428">1428</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1428">[Reply]</a></p><div class="body">Have you ever not specifically avoided a route of a VN before?<br/><a href=https://kissu.moe/qa/res/5417.html>https://kissu.moe/qa/res/5417.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1427" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566444702655.jpg">1566444702655.jpg</a> <span class="unimportant">(76.91 KB, 500x568, <span class="postfilename">1432871963326.jpg</span>)</span></p><a href="/agg/src/1566444702655.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566444702655.png" style="width:224px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1427" ><p class="intro"><input type="checkbox" class="delete" name="delete_1427" id="delete_1427" /><label for="delete_1427"><span class="name">Anonymous</span> <time datetime="2019-08-22T03:35:03Z">08/22/19 (Thu) 03:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1427" onclick="return highlightReply(1427, event)" href="/agg/res/1427#1427">No.</a><a class="post_no" onclick="return citeReply(1427)" href="/agg/res/1427#q1427">1427</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1427">[Reply]</a></p><div class="body">keep posting anime<br/><a href=https://kissu.moe/qa/res/5416.html>https://kissu.moe/qa/res/5416.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1426" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566444006571.png">1566444006571.png</a> <span class="unimportant">(500.01 KB, 1000x1179, <span class="postfilename" title="[crossover][group][artist-haruzu2000]d0ae93a9ad5e484a7f2d1e8bb64465ab.png">[crossover][group][artist-….png</span>)</span></p><a href="/agg/src/1566444006571.png" target="_blank"><img class="post-image" src="/agg/thumb/1566444006571.png" style="width:216px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1426" ><p class="intro"><input type="checkbox" class="delete" name="delete_1426" id="delete_1426" /><label for="delete_1426"><span class="name">Anonymous</span> <time datetime="2019-08-22T03:25:04Z">08/22/19 (Thu) 03:25:04</time></label>&nbsp;<a class="post_no" id="post_no_1426" onclick="return highlightReply(1426, event)" href="/agg/res/1426#1426">No.</a><a class="post_no" onclick="return citeReply(1426)" href="/agg/res/1426#q1426">1426</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1426">[Reply]</a></p><div class="body">What online multiplayer games do you play? Would you be interested in playing some RTS games maybe?<br/>I don&#39;t think it&#39;s hard to pirate and play Supreme Commander online, for example<br/><a href=https://kissu.moe/qa/res/5406.html>https://kissu.moe/qa/res/5406.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1425" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566444152953.jpg">1566444152953.jpg</a> <span class="unimportant">(5.42 MB, 2025x2867, <span class="postfilename">76320758_p0.jpg</span>)</span></p><a href="/agg/src/1566444152953.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566444152953.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1425" ><p class="intro"><input type="checkbox" class="delete" name="delete_1425" id="delete_1425" /><label for="delete_1425"><span class="name">Anonymous</span> <time datetime="2019-08-22T03:25:03Z">08/22/19 (Thu) 03:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1425" onclick="return highlightReply(1425, event)" href="/agg/res/1425#1425">No.</a><a class="post_no" onclick="return citeReply(1425)" href="/agg/res/1425#q1425">1425</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1425">[Reply]</a></p><div class="body">Is this an anthropomorphic ("furry") image?<br/><a href=https://kissu.moe/qa/res/5408.html>https://kissu.moe/qa/res/5408.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1424" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566442756150.jpg">1566442756150.jpg</a> <span class="unimportant">(930.07 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 076 [BD][1080p][581D8EFF].mkv_snapshot_09.16_[2019.08.08_12.03.28].jpg">[MiG_MuX] PriPara - 076 [B….jpg</span>)</span></p><a href="/agg/src/1566442756150.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566442756150.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1424" ><p class="intro"><input type="checkbox" class="delete" name="delete_1424" id="delete_1424" /><label for="delete_1424"><span class="name">Anonymous</span> <time datetime="2019-08-22T03:00:03Z">08/22/19 (Thu) 03:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1424" onclick="return highlightReply(1424, event)" href="/agg/res/1424#1424">No.</a><a class="post_no" onclick="return citeReply(1424)" href="/agg/res/1424#q1424">1424</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1424">[Reply]</a></p><div class="body">Do your qualifications compare to those of an idol&#39;s?<br/><a href=https://kissu.moe/qa/res/5398.html>https://kissu.moe/qa/res/5398.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1423" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566439723027.png">1566439723027.png</a> <span class="unimportant">(2.6 MB, 1920x1080, <span class="postfilename" title="[ANE] Denpa Onna to Seishun Otoko - Ep01 [BDRip 1080p x264 FLAC].mkv_snapshot_22.06_[2018.09.29_19.23.35].png">[ANE] Denpa Onna to Seishu….png</span>)</span></p><a href="/agg/src/1566439723027.png" target="_blank"><img class="post-image" src="/agg/thumb/1566439723027.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1423" ><p class="intro"><input type="checkbox" class="delete" name="delete_1423" id="delete_1423" /><label for="delete_1423"><span class="name">Anonymous</span> <time datetime="2019-08-22T02:10:03Z">08/22/19 (Thu) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1423" onclick="return highlightReply(1423, event)" href="/agg/res/1423#1423">No.</a><a class="post_no" onclick="return citeReply(1423)" href="/agg/res/1423#q1423">1423</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1423">[Reply]</a></p><div class="body">Quite a spectacle you have going on in /qa/<br/><a href=https://kissu.moe/qa/res/5373.html>https://kissu.moe/qa/res/5373.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1422" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566438287861.jpg">1566438287861.jpg</a> <span class="unimportant">(127.09 KB, 850x789, <span class="postfilename">sample.jpg</span>)</span></p><a href="/agg/src/1566438287861.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566438287861.png" style="width:240px;height:223px" alt="" /></a></div>    </div>    <div class="post op" id="op_1422" ><p class="intro"><input type="checkbox" class="delete" name="delete_1422" id="delete_1422" /><label for="delete_1422"><span class="name">Anonymous</span> <time datetime="2019-08-22T01:45:03Z">08/22/19 (Thu) 01:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1422" onclick="return highlightReply(1422, event)" href="/agg/res/1422#1422">No.</a><a class="post_no" onclick="return citeReply(1422)" href="/agg/res/1422#q1422">1422</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1422">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2162.html>http://what-ch.mooo.com/what/res/2162.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1421" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566437636693.png">1566437636693.png</a> <span class="unimportant">(129.66 KB, 452x482, <span class="postfilename">1350968941376.png</span>)</span></p><a href="/agg/src/1566437636693.png" target="_blank"><img class="post-image" src="/agg/thumb/1566437636693.png" style="width:239px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1421" ><p class="intro"><input type="checkbox" class="delete" name="delete_1421" id="delete_1421" /><label for="delete_1421"><span class="name">Anonymous</span> <time datetime="2019-08-22T01:35:02Z">08/22/19 (Thu) 01:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1421" onclick="return highlightReply(1421, event)" href="/agg/res/1421#1421">No.</a><a class="post_no" onclick="return citeReply(1421)" href="/agg/res/1421#q1421">1421</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1421">[Reply]</a></p><div class="body">I&#39;m here, now what?<br/><a href=https://kissu.moe/qa/res/5365.html>https://kissu.moe/qa/res/5365.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1420" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566435335984.jpg">1566435335984.jpg</a> <span class="unimportant">(1.24 MB, 1280x1519, <span class="postfilename">aawabwaw.jpg</span>)</span></p><a href="/agg/src/1566435335984.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566435335984.png" style="width:215px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1420" ><p class="intro"><input type="checkbox" class="delete" name="delete_1420" id="delete_1420" /><label for="delete_1420"><span class="subject">ITT: belly</span> <span class="name">Anonymous</span> <time datetime="2019-08-22T01:00:04Z">08/22/19 (Thu) 01:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1420" onclick="return highlightReply(1420, event)" href="/agg/res/1420#1420">No.</a><a class="post_no" onclick="return citeReply(1420)" href="/agg/res/1420#q1420">1420</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1420">[Reply]</a></p><div class="body">preg<br/><a href=https://kissu.moe/qa/res/5358.html>https://kissu.moe/qa/res/5358.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1419" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566430162517.jpg">1566430162517.jpg</a> <span class="unimportant">(377.16 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Kuma Miko - 08 [720p].mkv_snapshot_21.25_[2017.04.24_21.05.17].jpg">[HorribleSubs] Kuma Miko -….jpg</span>)</span></p><a href="/agg/src/1566430162517.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566430162517.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1419" ><p class="intro"><input type="checkbox" class="delete" name="delete_1419" id="delete_1419" /><label for="delete_1419"><span class="name">Anonymous</span> <time datetime="2019-08-21T23:30:03Z">08/21/19 (Wed) 23:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1419" onclick="return highlightReply(1419, event)" href="/agg/res/1419#1419">No.</a><a class="post_no" onclick="return citeReply(1419)" href="/agg/res/1419#q1419">1419</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1419">[Reply]</a></p><div class="body">Started to waste my days away with youtube again...<br/>It&#39;s very troubling<br/><a href=https://kissu.moe/qa/res/5349.html>https://kissu.moe/qa/res/5349.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1418" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566429551774.png">1566429551774.png</a> <span class="unimportant">(364.23 KB, 640x480, <span class="postfilename">fighting.png</span>)</span></p><a href="/agg/src/1566429551774.png" target="_blank"><img class="post-image" src="/agg/thumb/1566429551774.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1418" ><p class="intro"><input type="checkbox" class="delete" name="delete_1418" id="delete_1418" /><label for="delete_1418"><span class="name">Anonymous</span> <time datetime="2019-08-21T23:20:03Z">08/21/19 (Wed) 23:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1418" onclick="return highlightReply(1418, event)" href="/agg/res/1418#1418">No.</a><a class="post_no" onclick="return citeReply(1418)" href="/agg/res/1418#q1418">1418</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1418">[Reply]</a></p><div class="body">Mecha characters sure have it rough, almost always fighting without a moment of peace or rest<br/><a href=https://kissu.moe/qa/res/5346.html>https://kissu.moe/qa/res/5346.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1417" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566423667307.gif">1566423667307.gif</a> <span class="unimportant">(39.65 KB, 640x400, <span class="postfilename" title="405469-yu-no-kono-yo-no-hate-de-koi-o-utau-shojo-pc-98-screenshot.gif">405469-yu-no-kono-yo-no-ha….gif</span>)</span></p><a href="/agg/src/1566423667307.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566423667307.png" style="width:255px;height:159px" alt="" /></a></div>    </div>    <div class="post op" id="op_1417" ><p class="intro"><input type="checkbox" class="delete" name="delete_1417" id="delete_1417" /><label for="delete_1417"><span class="name">Anonymous</span> <time datetime="2019-08-21T21:45:03Z">08/21/19 (Wed) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1417" onclick="return highlightReply(1417, event)" href="/agg/res/1417#1417">No.</a><a class="post_no" onclick="return citeReply(1417)" href="/agg/res/1417#q1417">1417</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1417">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/5337.html>https://kissu.moe/qa/res/5337.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1416" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566420820604.mp4">1566420820604.mp4</a> <span class="unimportant">(24.23 MB, 1920x1080, <span class="postfilename">5cb9ca55f2ce6.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1566420820604.mp4&amp;t=5cb9ca55f2ce6.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566420820604.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1416" ><p class="intro"><input type="checkbox" class="delete" name="delete_1416" id="delete_1416" /><label for="delete_1416"><span class="name">Anonymous</span> <time datetime="2019-08-21T20:55:03Z">08/21/19 (Wed) 20:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1416" onclick="return highlightReply(1416, event)" href="/agg/res/1416#1416">No.</a><a class="post_no" onclick="return citeReply(1416)" href="/agg/res/1416#q1416">1416</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1416">[Reply]</a></p><div class="body"><span class="quote">&gt;/jp/</span><br/><a href=http://what-ch.mooo.com/what/res/2148.html>http://what-ch.mooo.com/what/res/2148.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1415" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566415774389.gif">1566415774389.gif</a> <span class="unimportant">(101.9 KB, 758x696, <span class="postfilename">1536203746404.gif</span>)</span></p><a href="/agg/src/1566415774389.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566415774389.png" style="width:255px;height:234px" alt="" /></a></div>    </div>    <div class="post op" id="op_1415" ><p class="intro"><input type="checkbox" class="delete" name="delete_1415" id="delete_1415" /><label for="delete_1415"><span class="subject">/qa/ friends</span> <span class="name">Anonymous</span> <time datetime="2019-08-21T19:30:03Z">08/21/19 (Wed) 19:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1415" onclick="return highlightReply(1415, event)" href="/agg/res/1415#1415">No.</a><a class="post_no" onclick="return citeReply(1415)" href="/agg/res/1415#q1415">1415</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1415">[Reply]</a></p><div class="body">Hello /qa/ friends! I came from <a href="https://www.4chan-x.net/qa_friends.html" rel="nofollow" target="_blank">https://www.4chan-x.net/qa_friends.html</a> <br/>let&#39;s all have a good time here<br/><a href=https://kissu.moe/qa/res/5319.html>https://kissu.moe/qa/res/5319.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1414" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566405628269.png">1566405628269.png</a> <span class="unimportant">(2.03 MB, 1237x1091, <span class="postfilename">antonov.png</span>)</span></p><a href="/agg/src/1566405628269.png" target="_blank"><img class="post-image" src="/agg/thumb/1566405628269.png" style="width:240px;height:212px" alt="" /></a></div>    </div>    <div class="post op" id="op_1414" ><p class="intro"><input type="checkbox" class="delete" name="delete_1414" id="delete_1414" /><label for="delete_1414"><span class="name">Anonymous</span> <time datetime="2019-08-21T16:45:03Z">08/21/19 (Wed) 16:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1414" onclick="return highlightReply(1414, event)" href="/agg/res/1414#1414">No.</a><a class="post_no" onclick="return citeReply(1414)" href="/agg/res/1414#q1414">1414</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1414">[Reply]</a></p><div class="body">Sarzhent Antonov and his BMP crew stranded deep inside homo territory...<br/><a href=http://what-ch.mooo.com/what/res/2143.html>http://what-ch.mooo.com/what/res/2143.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1413" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566400516344.jpg">1566400516344.jpg</a> <span class="unimportant">(171.77 KB, 899x723, <span class="postfilename" title="cdb9ea31baa6482c376f3a879c426fe7.jpg">cdb9ea31baa6482c376f3a879c….jpg</span>)</span></p><a href="/agg/src/1566400516344.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566400516344.png" style="width:240px;height:194px" alt="" /></a></div>    </div>    <div class="post op" id="op_1413" ><p class="intro"><input type="checkbox" class="delete" name="delete_1413" id="delete_1413" /><label for="delete_1413"><span class="name">Anonymous</span> <time datetime="2019-08-21T15:20:03Z">08/21/19 (Wed) 15:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1413" onclick="return highlightReply(1413, event)" href="/agg/res/1413#1413">No.</a><a class="post_no" onclick="return citeReply(1413)" href="/agg/res/1413#q1413">1413</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1413">[Reply]</a></p><div class="body">the /what/ sandwich<br/><a href=http://what-ch.mooo.com/what/res/2141.html>http://what-ch.mooo.com/what/res/2141.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1412" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566378829072.jpg">1566378829072.jpg</a> <span class="unimportant">(93.57 KB, 850x593, <span class="postfilename" title="c77f2e777b536e53d93c47c32328d868.jpg">c77f2e777b536e53d93c47c323….jpg</span>)</span></p><a href="/agg/src/1566378829072.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566378829072.png" style="width:240px;height:168px" alt="" /></a></div>    </div>    <div class="post op" id="op_1412" ><p class="intro"><input type="checkbox" class="delete" name="delete_1412" id="delete_1412" /><label for="delete_1412"><span class="name">Anonymous</span> <time datetime="2019-08-21T09:15:03Z">08/21/19 (Wed) 09:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1412" onclick="return highlightReply(1412, event)" href="/agg/res/1412#1412">No.</a><a class="post_no" onclick="return citeReply(1412)" href="/agg/res/1412#q1412">1412</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1412">[Reply]</a></p><div class="body">/what/ meetup<br/><a href=http://what-ch.mooo.com/what/res/2126.html>http://what-ch.mooo.com/what/res/2126.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1411" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566375178771.png">1566375178771.png</a> <span class="unimportant">(85.49 KB, 184x289, <span class="postfilename">1413352897249.png</span>)</span></p><a href="/agg/src/1566375178771.png" target="_blank"><img class="post-image" src="/agg/thumb/1566375178771.png" style="width:162px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1411" ><p class="intro"><input type="checkbox" class="delete" name="delete_1411" id="delete_1411" /><label for="delete_1411"><span class="name">Anonymous</span> <time datetime="2019-08-21T08:15:04Z">08/21/19 (Wed) 08:15:04</time></label>&nbsp;<a class="post_no" id="post_no_1411" onclick="return highlightReply(1411, event)" href="/agg/res/1411#1411">No.</a><a class="post_no" onclick="return citeReply(1411)" href="/agg/res/1411#q1411">1411</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1411">[Reply]</a></p><div class="body">I&#39;m having an existential crisis<br/><br/>How am I supposed to love and be with Homu if she&#39;s meant for Madoka?<br/><a href=https://kissu.moe/qa/res/5297.html>https://kissu.moe/qa/res/5297.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1410" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566373926592.jpg">1566373926592.jpg</a> <span class="unimportant">(425.33 KB, 960x1200, <span class="postfilename">1449378367456.jpg</span>)</span></p><a href="/agg/src/1566373926592.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566373926592.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1410" ><p class="intro"><input type="checkbox" class="delete" name="delete_1410" id="delete_1410" /><label for="delete_1410"><span class="name">Anonymous</span> <time datetime="2019-08-21T07:55:03Z">08/21/19 (Wed) 07:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1410" onclick="return highlightReply(1410, event)" href="/agg/res/1410#1410">No.</a><a class="post_no" onclick="return citeReply(1410)" href="/agg/res/1410#q1410">1410</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1410">[Reply]</a></p><div class="body">How many bans did you win while posting on /qa/? I netted at least a couple dozen permas as well as close to a dozen rangebans, including one that I&#39;ve currently had since around May<br/><a href=https://kissu.moe/qa/res/5293.html>https://kissu.moe/qa/res/5293.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/36" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a class="selected">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/38" method="get"><input type="submit" value="Next" /></form>
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