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
			<img class="board_image" src="/static/banners/banner-kissu-20.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea style="display:none" name="text">&#113;&#109;sS&#89;[vpLH2P&#92;1y@b,k_</textarea>
<span style="display:none"><input type="text" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2"></span>
<input type="hidden" name="board" value="agg">
<textarea style="display:none" name="login">/[L&#72; Ji:`&#33;&#59;C+6\&#111;T&lt;8Ob&#73;|?X&#93;&#100;&#46;2☨&#123;&#116;W5 c⚱1B=k@9(3Ng☮*}4'&#80;&#81;-MV⚯0KD7usj</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea name="message" style="display:none">wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea   style="display:none"   name="q"> f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&#60;qG/6&#100;☎,&#39;&#70;%&#59;s⚨&#105;AE&#33;&#82;uoP&#75;&#9855;&#83;&#125;_☬V&#40;&#45;&#99;^\{Q&#67;D~⛼m&#9968;l&#120;&#96;[&#97;40.&#85;kbZ&#87;&#9864;#*)&#76;wM&#58;|r⛍]2y@☪n&#38;5Y9♪T j1&#102;7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input name="search" value="b☵&#35;Y{7`&#57;J⚴&#64;V^6_&#45;" type="hidden">
			
			
				
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
		<div class="thread" id="thread_1690" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567476748903.png">1567476748903.png</a> <span class="unimportant">(45.46 KB, 1000x1000, <span class="postfilename">EC79B9iXYAIqt_u.png</span>)</span></p><a href="/agg/src/1567476748903.png" target="_blank"><img class="post-image" src="/agg/thumb/1567476748903.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1690" ><p class="intro"><input type="checkbox" class="delete" name="delete_1690" id="delete_1690" /><label for="delete_1690"><span class="subject">hello</span> <span class="name">Chijo</span> <time datetime="2019-09-03T02:15:03Z">09/03/19 (Tue) 02:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1690" onclick="return highlightReply(1690, event)" href="/agg/res/1690#1690">No.</a><a class="post_no" onclick="return citeReply(1690)" href="/agg/res/1690#q1690">1690</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1690">[Reply]</a></p><div class="body">can this be my home<br/><a href=http://what-ch.mooo.com/what/res/2395.html>http://what-ch.mooo.com/what/res/2395.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1689" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567476584740.png">1567476584740.png</a> <span class="unimportant">(1.01 MB, 885x1559, <span class="postfilename">waifu.png</span>)</span></p><a href="/agg/src/1567476584740.png" target="_blank"><img class="post-image" src="/agg/thumb/1567476584740.png" style="width:145px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1689" ><p class="intro"><input type="checkbox" class="delete" name="delete_1689" id="delete_1689" /><label for="delete_1689"><span class="name">Anonymous</span> <time datetime="2019-09-03T02:10:09Z">09/03/19 (Tue) 02:10:09</time></label>&nbsp;<a class="post_no" id="post_no_1689" onclick="return highlightReply(1689, event)" href="/agg/res/1689#1689">No.</a><a class="post_no" onclick="return citeReply(1689)" href="/agg/res/1689#q1689">1689</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1689">[Reply]</a></p><div class="body">Friendly greetings from your frens at <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a><br/><a href=https://kissu.moe/qa/res/7205.html>https://kissu.moe/qa/res/7205.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1688" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567476420384.png">1567476420384.png</a> <span class="unimportant">(1.01 MB, 885x1559, <span class="postfilename">waifu.png</span>)</span></p><a href="/agg/src/1567476420384.png" target="_blank"><img class="post-image" src="/agg/thumb/1567476420384.png" style="width:137px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1688" ><p class="intro"><input type="checkbox" class="delete" name="delete_1688" id="delete_1688" /><label for="delete_1688"><span class="name">Anonymous</span> <time datetime="2019-09-03T02:10:02Z">09/03/19 (Tue) 02:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1688" onclick="return highlightReply(1688, event)" href="/agg/res/1688#1688">No.</a><a class="post_no" onclick="return citeReply(1688)" href="/agg/res/1688#q1688">1688</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1688">[Reply]</a></p><div class="body">Friendly greetings from <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a><br/><a href=http://what-ch.mooo.com/what/res/2392.html>http://what-ch.mooo.com/what/res/2392.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1687" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567476154741.jpg">1567476154741.jpg</a> <span class="unimportant">(46.73 KB, 900x675, <span class="postfilename" title="[touhou][wakasagihime][artist- hi-yo]99dfd1867dba6b8534c9d89e5641d46b.jpg">[touhou][wakasagihime][art….jpg</span>)</span></p><a href="/agg/src/1567476154741.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567476154741.png" style="width:255px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_1687" ><p class="intro"><input type="checkbox" class="delete" name="delete_1687" id="delete_1687" /><label for="delete_1687"><span class="name">Anonymous</span> <time datetime="2019-09-03T02:05:02Z">09/03/19 (Tue) 02:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1687" onclick="return highlightReply(1687, event)" href="/agg/res/1687#1687">No.</a><a class="post_no" onclick="return citeReply(1687)" href="/agg/res/1687#q1687">1687</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1687">[Reply]</a></p><div class="body">nature is scary<br/><a href="https://www.youtube.com/watch?v=ZM6Ld3CdHXY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=ZM6Ld3CdHXY</a><br/><a href=https://kissu.moe/qa/res/7201.html>https://kissu.moe/qa/res/7201.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1686" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567475450789.jpg">1567475450789.jpg</a> <span class="unimportant">(96.54 KB, 960x678, <span class="postfilename">yukata.jpg</span>)</span></p><a href="/agg/src/1567475450789.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567475450789.png" style="width:255px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_1686" ><p class="intro"><input type="checkbox" class="delete" name="delete_1686" id="delete_1686" /><label for="delete_1686"><span class="name">Anonymous</span> <time datetime="2019-09-03T01:55:03Z">09/03/19 (Tue) 01:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1686" onclick="return highlightReply(1686, event)" href="/agg/res/1686#1686">No.</a><a class="post_no" onclick="return citeReply(1686)" href="/agg/res/1686#q1686">1686</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1686">[Reply]</a></p><div class="body">/qa/ on the.. uh. ri- no.. um, left? err.. heck i have no idea..<br/><a href=https://kissu.moe/qa/res/7195.html>https://kissu.moe/qa/res/7195.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1685" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567473887436.png">1567473887436.png</a> <span class="unimportant">(242.16 KB, 615x311, <span class="postfilename">thinkin bout meat.png</span>)</span></p><a href="/agg/src/1567473887436.png" target="_blank"><img class="post-image" src="/agg/thumb/1567473887436.png" style="width:255px;height:129px" alt="" /></a></div>    </div>    <div class="post op" id="op_1685" ><p class="intro"><input type="checkbox" class="delete" name="delete_1685" id="delete_1685" /><label for="delete_1685"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-03T01:25:03Z">09/03/19 (Tue) 01:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1685" onclick="return highlightReply(1685, event)" href="/agg/res/1685#1685">No.</a><a class="post_no" onclick="return citeReply(1685)" href="/agg/res/1685#q1685">1685</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1685">[Reply]</a></p><div class="body">do you?<br/><a href=https://kissu.moe/qa/res/7186.html>https://kissu.moe/qa/res/7186.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1684" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567467995434.jpg">1567467995434.jpg</a> <span class="unimportant">(218.91 KB, 800x1167, <span class="postfilename">1567448344981.jpg</span>)</span></p><a href="/agg/src/1567467995434.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567467995434.png" style="width:165px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1684" ><p class="intro"><input type="checkbox" class="delete" name="delete_1684" id="delete_1684" /><label for="delete_1684"><span class="name">Anonymous</span> <time datetime="2019-09-02T23:50:03Z">09/02/19 (Mon) 23:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1684" onclick="return highlightReply(1684, event)" href="/agg/res/1684#1684">No.</a><a class="post_no" onclick="return citeReply(1684)" href="/agg/res/1684#q1684">1684</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1684">[Reply]</a></p><div class="body">/what/ needs to be bullied anally.<br/><a href=http://what-ch.mooo.com/what/res/2391.html>http://what-ch.mooo.com/what/res/2391.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1683" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567466879318.png">1567466879318.png</a> <span class="unimportant">(2.02 MB, 1748x1181, <span class="postfilename">76585006_p0.png</span>)</span></p><a href="/agg/src/1567466879318.png" target="_blank"><img class="post-image" src="/agg/thumb/1567466879318.png" style="width:255px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_1683" ><p class="intro"><input type="checkbox" class="delete" name="delete_1683" id="delete_1683" /><label for="delete_1683"><span class="name">Anonymous</span> <time datetime="2019-09-02T23:30:03Z">09/02/19 (Mon) 23:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1683" onclick="return highlightReply(1683, event)" href="/agg/res/1683#1683">No.</a><a class="post_no" onclick="return citeReply(1683)" href="/agg/res/1683#q1683">1683</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1683">[Reply]</a></p><div class="body">What do you think of boobie Sachiko? I know there&#39;s a sort of similar thread, but this is is specifically about Riamu.<br/><a href=https://kissu.moe/qa/res/7176.html>https://kissu.moe/qa/res/7176.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1682" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567462979172.jpg">1567462979172.jpg</a> <span class="unimportant">(509.47 KB, 1920x1080, <span class="postfilename">1567435893358.jpg</span>)</span></p><a href="/agg/src/1567462979172.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567462979172.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1682" ><p class="intro"><input type="checkbox" class="delete" name="delete_1682" id="delete_1682" /><label for="delete_1682"><span class="name">Anonymous</span> <time datetime="2019-09-02T22:25:04Z">09/02/19 (Mon) 22:25:04</time></label>&nbsp;<a class="post_no" id="post_no_1682" onclick="return highlightReply(1682, event)" href="/agg/res/1682#1682">No.</a><a class="post_no" onclick="return citeReply(1682)" href="/agg/res/1682#q1682">1682</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1682">[Reply]</a></p><div class="body">the /qa/ crime<br/><a href=https://kissu.moe/qa/res/7171.html>https://kissu.moe/qa/res/7171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1681" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567460692199.png">1567460692199.png</a> <span class="unimportant">(1.99 MB, 1200x900, <span class="postfilename" title="543446ecaf8f3251e92df2fd5ed74519.png">543446ecaf8f3251e92df2fd5e….png</span>)</span></p><a href="/agg/src/1567460692199.png" target="_blank"><img class="post-image" src="/agg/thumb/1567460692199.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1681" ><p class="intro"><input type="checkbox" class="delete" name="delete_1681" id="delete_1681" /><label for="delete_1681"><span class="name">Anonymous</span> <time datetime="2019-09-02T21:45:03Z">09/02/19 (Mon) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1681" onclick="return highlightReply(1681, event)" href="/agg/res/1681#1681">No.</a><a class="post_no" onclick="return citeReply(1681)" href="/agg/res/1681#q1681">1681</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1681">[Reply]</a></p><div class="body">why do girls do this<br/><a href=https://kissu.moe/qa/res/7169.html>https://kissu.moe/qa/res/7169.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1680" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567459659825.png">1567459659825.png</a> <span class="unimportant">(233.11 KB, 1458x1458, <span class="postfilename">8vc2.png</span>)</span></p><a href="/agg/src/1567459659825.png" target="_blank"><img class="post-image" src="/agg/thumb/1567459659825.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1680" ><p class="intro"><input type="checkbox" class="delete" name="delete_1680" id="delete_1680" /><label for="delete_1680"><span class="name">Ruiko Saten</span> <time datetime="2019-09-02T21:30:03Z">09/02/19 (Mon) 21:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1680" onclick="return highlightReply(1680, event)" href="/agg/res/1680#1680">No.</a><a class="post_no" onclick="return citeReply(1680)" href="/agg/res/1680#q1680">1680</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1680">[Reply]</a></p><div class="body"><a href="https://kellychan.net/" rel="nofollow" target="_blank">https://kellychan.net/</a><br/><a href=https://kakashi-nenpo.com/jp/res/32973.html>https://kakashi-nenpo.com/jp/res/32973.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1679" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567454771524.png">1567454771524.png</a> <span class="unimportant">(32.85 KB, 220x200, <span class="postfilename">PogChamp_Emote.png</span>)</span></p><a href="/agg/src/1567454771524.png" target="_blank"><img class="post-image" src="/agg/thumb/1567454771524.png" style="width:220px;height:200px" alt="" /></a></div>    </div>    <div class="post op" id="op_1679" ><p class="intro"><input type="checkbox" class="delete" name="delete_1679" id="delete_1679" /><label for="delete_1679"><span class="name">Anonymous</span> <time datetime="2019-09-02T20:10:03Z">09/02/19 (Mon) 20:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1679" onclick="return highlightReply(1679, event)" href="/agg/res/1679#1679">No.</a><a class="post_no" onclick="return citeReply(1679)" href="/agg/res/1679#q1679">1679</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1679">[Reply]</a></p><div class="body"><span class="quote">&gt;Mfw when my best bro lets me touch dicks with him</span><br/><a href=https://kissu.moe/qa/res/7160.html>https://kissu.moe/qa/res/7160.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1678" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567448478453.jpg">1567448478453.jpg</a> <span class="unimportant">(54.27 KB, 1024x674, <span class="postfilename">1556929649432.jpg</span>)</span></p><a href="/agg/src/1567448478453.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567448478453.png" style="width:255px;height:168px" alt="" /></a></div>    </div>    <div class="post op" id="op_1678" ><p class="intro"><input type="checkbox" class="delete" name="delete_1678" id="delete_1678" /><label for="delete_1678"><span class="name">Ciel</span> <time datetime="2019-09-02T18:25:03Z">09/02/19 (Mon) 18:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1678" onclick="return highlightReply(1678, event)" href="/agg/res/1678#1678">No.</a><a class="post_no" onclick="return citeReply(1678)" href="/agg/res/1678#q1678">1678</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1678">[Reply]</a></p><div class="body">This one&#39;s for the outcasts.<br/><br/>The NEETs, the virgins, the late transitioners, the funposters, the porn addicts, the autists, the chickens, the pedophiles, the misogynists, the spammers, the racists, the hapas, the radical feminists, the furries, the hideously ugly, the <span class="glowpink">kawaii</span>, the bereaved, the scat fetishists, the gay men who hate hook ups, the jilted and recently divorced. This is for the homeless, the directionless, the loveless, the jobless.<br/><br/>This is for everybody who&#39;s ever hated everybody. This is for the people who can&#39;t imagine being alive in three years. This is for the folks who always felt alone. This is for those who will leave nothing behind.<br/><br/>I&#39;m not here to tell you things will get better. I&#39;m not here to tell you you have potential. I&#39;m here to tell you that you matter.<br/><br/>Even though we never met, we all suffered. For many of us life was hell. We cried and we hid it. We were lonely and friendless in a world of lonely, friendless people, and we met nobody.<br/><br/>It&#39;s fucking sad. I really wish it wasn&#39;t like this. I wish people didn&#39;t have friends or enemies, and everybody was kind to everybody. I wish I changed and I wish all of you changed. I wish I found another person like myself and made them happy.<br/><br/>But I didn&#39;t. I won&#39;t. I&#39;ve given up, like many of you have given up. And I&#39;m sorry. I&#39;m sorry because nobody deserves to suffer the way I suffered, and I couldn&#39;t save anyone. I barely tried.<br/><br/>You don&#39;t have to be funny, or intelligent, or kind. Suffering is enough. Everybody suffers so everybody is important. Don&#39;t spit on that and don&#39;t sneer. This is brotherhood between men and the grace of God. This is the noblest thing in the universe.<br/><span class="toolong">Post too long. Click <a href="/agg/res/1678#1678">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1677" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567448439586.jpg">1567448439586.jpg</a> <span class="unimportant">(54.27 KB, 1024x674, <span class="postfilename">1556929649432.jpg</span>)</span></p><a href="/agg/src/1567448439586.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567448439586.png" style="width:240px;height:158px" alt="" /></a></div>    </div>    <div class="post op" id="op_1677" ><p class="intro"><input type="checkbox" class="delete" name="delete_1677" id="delete_1677" /><label for="delete_1677"><span class="name">Anonymous</span> <time datetime="2019-09-02T18:25:02Z">09/02/19 (Mon) 18:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1677" onclick="return highlightReply(1677, event)" href="/agg/res/1677#1677">No.</a><a class="post_no" onclick="return citeReply(1677)" href="/agg/res/1677#q1677">1677</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1677">[Reply]</a></p><div class="body">This one&#39;s for the outcasts.<br/><br/>The NEETs, the virgins, the late transitioners, the funposters, the porn addicts, the autists, the cucks, the pedophiles, the misogynists, the spammers, the racists, the hapas, the radical feminists, the furries, the hideously ugly, the retarded, the bereaved, the scat fetishists, the gay men who hate hook ups, the jilted and recently divorced. This is for the homeless, the directionless, the loveless, the jobless.<br/><br/>This is for everybody who&#39;s ever hated everybody. This is for the people who can&#39;t imagine being alive in three years. This is for the folks who always felt alone. This is for those who will leave nothing behind.<br/><br/>I&#39;m not here to tell you things will get better. I&#39;m not here to tell you you have potential. I&#39;m here to tell you that you matter.<br/><br/>Even though we never met, we all suffered. For many of us life was hell. We cried and we hid it. We were lonely and friendless in a world of lonely, friendless people, and we met nobody.<br/><br/>It&#39;s fucking sad. I really wish it wasn&#39;t like this. I wish people didn&#39;t have friends or enemies, and everybody was kind to everybody. I wish I changed and I wish all of you changed. I wish I found another person like myself and made them happy.<br/><br/>But I didn&#39;t. I won&#39;t. I&#39;ve given up, like many of you have given up. And I&#39;m sorry. I&#39;m sorry because nobody deserves to suffer the way I suffered, and I couldn&#39;t save anyone. I barely tried.<br/><br/>You don&#39;t have to be funny, or intelligent, or kind. Suffering is enough. Everybody suffers so everybody is important. Don&#39;t spit on that and don&#39;t sneer. This is brotherhood between men and the grace of God. This is the noblest thing in the universe.<br/><span class="toolong">Post too long. Click <a href="/agg/res/1677#1677">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1676" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567412613336.jpg">1567412613336.jpg</a> <span class="unimportant">(64.04 KB, 396x544, <span class="postfilename">1489273665579.jpg</span>)</span></p><a href="/agg/src/1567412613336.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567412613336.png" style="width:186px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1676" ><p class="intro"><input type="checkbox" class="delete" name="delete_1676" id="delete_1676" /><label for="delete_1676"><span class="name">Anonymous</span> <time datetime="2019-09-02T08:25:03Z">09/02/19 (Mon) 08:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1676" onclick="return highlightReply(1676, event)" href="/agg/res/1676#1676">No.</a><a class="post_no" onclick="return citeReply(1676)" href="/agg/res/1676#q1676">1676</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1676">[Reply]</a></p><div class="body">How adventurous are you?<br/><a href=https://kissu.moe/qa/res/7134.html>https://kissu.moe/qa/res/7134.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1675" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567403097272.jpg">1567403097272.jpg</a> <span class="unimportant">(38.95 KB, 639x479, <span class="postfilename" title="44998555_173258883613564_2865555807129305088_n.jpg">44998555_173258883613564_2….jpg</span>)</span></p><a href="/agg/src/1567403097272.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567403097272.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1675" ><p class="intro"><input type="checkbox" class="delete" name="delete_1675" id="delete_1675" /><label for="delete_1675"><span class="name">Anonymous</span> <time datetime="2019-09-02T05:45:03Z">09/02/19 (Mon) 05:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1675" onclick="return highlightReply(1675, event)" href="/agg/res/1675#1675">No.</a><a class="post_no" onclick="return citeReply(1675)" href="/agg/res/1675#q1675">1675</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1675">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2375.html>http://what-ch.mooo.com/what/res/2375.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1674" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567390652617.png">1567390652617.png</a> <span class="unimportant">(59.94 KB, 477x444, <span class="postfilename">291896429008211.png</span>)</span></p><a href="/agg/src/1567390652617.png" target="_blank"><img class="post-image" src="/agg/thumb/1567390652617.png" style="width:255px;height:237px" alt="" /></a></div>    </div>    <div class="post op" id="op_1674" ><p class="intro"><input type="checkbox" class="delete" name="delete_1674" id="delete_1674" /><label for="delete_1674"><span class="name">Anonymous</span> <time datetime="2019-09-02T02:20:03Z">09/02/19 (Mon) 02:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1674" onclick="return highlightReply(1674, event)" href="/agg/res/1674#1674">No.</a><a class="post_no" onclick="return citeReply(1674)" href="/agg/res/1674#q1674">1674</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1674">[Reply]</a></p><div class="body">Trevor sends his regards.<br/><a href=https://kissu.moe/qa/res/7101.html>https://kissu.moe/qa/res/7101.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1673" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567389358242.png">1567389358242.png</a> <span class="unimportant">(82.94 KB, 301x307, <span class="postfilename">1474832849896.png</span>)</span></p><a href="/agg/src/1567389358242.png" target="_blank"><img class="post-image" src="/agg/thumb/1567389358242.png" style="width:250px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1673" ><p class="intro"><input type="checkbox" class="delete" name="delete_1673" id="delete_1673" /><label for="delete_1673"><span class="name">Anonymous</span> <time datetime="2019-09-02T02:00:05Z">09/02/19 (Mon) 02:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1673" onclick="return highlightReply(1673, event)" href="/agg/res/1673#1673">No.</a><a class="post_no" onclick="return citeReply(1673)" href="/agg/res/1673#q1673">1673</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1673">[Reply]</a></p><div class="body">poured out all the water in my instant ramen instead of saving it.<br/><br/>i could eat this for weeks!<br/><a href=https://kissu.moe/qa/res/7092.html>https://kissu.moe/qa/res/7092.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1672" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567384599769.jpg">1567384599769.jpg</a> <span class="unimportant">(142.62 KB, 897x1200, <span class="postfilename">eat.jpg</span>)</span></p><a href="/agg/src/1567384599769.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567384599769.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1672" ><p class="intro"><input type="checkbox" class="delete" name="delete_1672" id="delete_1672" /><label for="delete_1672"><span class="name">Anonymous</span> <time datetime="2019-09-02T00:40:03Z">09/02/19 (Mon) 00:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1672" onclick="return highlightReply(1672, event)" href="/agg/res/1672#1672">No.</a><a class="post_no" onclick="return citeReply(1672)" href="/agg/res/1672#q1672">1672</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1672">[Reply]</a></p><div class="body">eat food<br/><a href=https://kissu.moe/qa/res/7081.html>https://kissu.moe/qa/res/7081.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1671" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567379406628.jpg">1567379406628.jpg</a> <span class="unimportant">(264.26 KB, 650x778, <span class="postfilename">1509926488117.jpg</span>)</span></p><a href="/agg/src/1567379406628.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567379406628.png" style="width:213px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1671" ><p class="intro"><input type="checkbox" class="delete" name="delete_1671" id="delete_1671" /><label for="delete_1671"><span class="name">Anonymous</span> <time datetime="2019-09-01T23:15:03Z">09/01/19 (Sun) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1671" onclick="return highlightReply(1671, event)" href="/agg/res/1671#1671">No.</a><a class="post_no" onclick="return citeReply(1671)" href="/agg/res/1671#q1671">1671</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1671">[Reply]</a></p><div class="body"><span class="quote">&gt;tfw had to switch out my comfortable logitech mousepad for a tiny plastic patchouli one because i spilled soy sauce all over it</span><br/>Lol im such an otaku XD<br/><a href=https://kissu.moe/qa/res/7072.html>https://kissu.moe/qa/res/7072.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/23" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a class="selected">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/25" method="get"><input type="submit" value="Next" /></form>
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