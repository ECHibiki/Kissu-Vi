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
			<img class="board_image" src="/static/banners/banner-kissu-21.jpg" alt="" />	<header>
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
<div style="display:none"><input type="text" name="firstname" value="f#⚈/ &#9836;3&#125;&#123;&#81;D&#116;&#55;\&#43;d&#53;&#58;Y@⚒BvVT-sepZ&#36;&#126;]&#73;&#85;;&#83;^nhX!&#57;K[&#41;m&#117;&lt;N&#40;W&#56;♛&gt;&#120;ro2"></div>
<input type="hidden" name="board" value="agg">
<input   style="display:none"   type="text"   value="/[LH Ji&#58;`&#33;&#59;C+6\oT&lt;&#56;&#79;bI|?X]d.2☨{&#116;&#87;5&#32;c⚱&#49;&#66;&#61;k@9(3Ng☮*}4'&#80;Q-&#77;V⚯0K&#68;&#55;usj"   name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input  style="display:none"  type="text"  value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["  name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div   style="display:none"><input   type="text"   name="q"   value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" name="y0kh38z9do♒sb" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" value="b☵#Y{7`9J⚴@V^6_-" name="search" >
			
			
				
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
		<div class="thread" id="thread_1449" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566512717211.jpg">1566512717211.jpg</a> <span class="unimportant">(365.83 KB, 656x589, <span class="postfilename">097.jpg</span>)</span></p><a href="/agg/src/1566512717211.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566512717211.png" style="width:255px;height:229px" alt="" /></a></div>    </div>    <div class="post op" id="op_1449" ><p class="intro"><input type="checkbox" class="delete" name="delete_1449" id="delete_1449" /><label for="delete_1449"><span class="name">suiseimushi</span> <time datetime="2019-08-22T22:30:03Z">08/22/19 (Thu) 22:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1449" onclick="return highlightReply(1449, event)" href="/agg/res/1449#1449">No.</a><a class="post_no" onclick="return citeReply(1449)" href="/agg/res/1449#q1449">1449</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1449">[Reply]</a></p><div class="body">Hey, /qa/. Long time no see. I&#39;ve been away for over half a year. Could you fill me in on what happened these past few months? Thanks.<br/><br/>Name field is/was my nick on the IRC channel, if anyone still remembers.<br/><a href=https://kissu.moe/qa/res/5511.html>https://kissu.moe/qa/res/5511.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1448" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566509330100.gif">1566509330100.gif</a> <span class="unimportant">(1021.04 KB, 500x225, <span class="postfilename">gif 0504.gif</span>)</span></p><a href="/agg/src/1566509330100.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566509330100.png" style="width:240px;height:108px" alt="" /></a></div>    </div>    <div class="post op" id="op_1448" ><p class="intro"><input type="checkbox" class="delete" name="delete_1448" id="delete_1448" /><label for="delete_1448"><span class="name">Anonymous</span> <time datetime="2019-08-22T21:30:03Z">08/22/19 (Thu) 21:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1448" onclick="return highlightReply(1448, event)" href="/agg/res/1448#1448">No.</a><a class="post_no" onclick="return citeReply(1448)" href="/agg/res/1448#q1448">1448</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1448">[Reply]</a></p><div class="body"> I really want to help some hung stud like whatmin cum<br/><a href=http://what-ch.mooo.com/what/res/2204.html>http://what-ch.mooo.com/what/res/2204.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1447" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566507499272.png">1566507499272.png</a> <span class="unimportant">(6.05 KB, 281x71, <span class="postfilename">huh.png</span>)</span></p><a href="/agg/src/1566507499272.png" target="_blank"><img class="post-image" src="/agg/thumb/1566507499272.png" style="width:255px;height:64px" alt="" /></a></div>    </div>    <div class="post op" id="op_1447" ><p class="intro"><input type="checkbox" class="delete" name="delete_1447" id="delete_1447" /><label for="delete_1447"><span class="name">Anonymous</span> <time datetime="2019-08-22T21:00:04Z">08/22/19 (Thu) 21:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1447" onclick="return highlightReply(1447, event)" href="/agg/res/1447#1447">No.</a><a class="post_no" onclick="return citeReply(1447)" href="/agg/res/1447#q1447">1447</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1447">[Reply]</a></p><div class="body">Can someone explain this?<br/><a href=https://kissu.moe/qa/res/5501.html>https://kissu.moe/qa/res/5501.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1446" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566503871294.png">1566503871294.png</a> <span class="unimportant">(642.34 KB, 1028x732, <span class="postfilename" title="6b5800fc96d88eb71623126dd2e0795d0077a664.png">6b5800fc96d88eb71623126dd2….png</span>)</span></p><a href="/agg/src/1566503871294.png" target="_blank"><img class="post-image" src="/agg/thumb/1566503871294.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1446" ><p class="intro"><input type="checkbox" class="delete" name="delete_1446" id="delete_1446" /><label for="delete_1446"><span class="name">Anonymous</span> <time datetime="2019-08-22T20:00:05Z">08/22/19 (Thu) 20:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1446" onclick="return highlightReply(1446, event)" href="/agg/res/1446#1446">No.</a><a class="post_no" onclick="return citeReply(1446)" href="/agg/res/1446#q1446">1446</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1446">[Reply]</a></p><div class="body">oh no! kaos needs a face!<br/><a href=https://kissu.moe/qa/res/5494.html>https://kissu.moe/qa/res/5494.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1445" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566502627178.jpg">1566502627178.jpg</a> <span class="unimportant">(64.24 KB, 526x800, <span class="postfilename">misc 1706.jpg</span>)</span></p><a href="/agg/src/1566502627178.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566502627178.png" style="width:158px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1445" ><p class="intro"><input type="checkbox" class="delete" name="delete_1445" id="delete_1445" /><label for="delete_1445"><span class="name">Anonymous</span> <time datetime="2019-08-22T19:40:02Z">08/22/19 (Thu) 19:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1445" onclick="return highlightReply(1445, event)" href="/agg/res/1445#1445">No.</a><a class="post_no" onclick="return citeReply(1445)" href="/agg/res/1445#q1445">1445</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1445">[Reply]</a></p><div class="body">Found this in whatmin&#39;s computer<br/><a href=http://what-ch.mooo.com/what/res/2198.html>http://what-ch.mooo.com/what/res/2198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1444" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566496969523.jpg">1566496969523.jpg</a> <span class="unimportant">(642.81 KB, 2048x1534, <span class="postfilename">1565850590382.jpg</span>)</span></p><a href="/agg/src/1566496969523.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566496969523.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1444" ><p class="intro"><input type="checkbox" class="delete" name="delete_1444" id="delete_1444" /><label for="delete_1444"><span class="name">Anonymous</span> <time datetime="2019-08-22T18:05:03Z">08/22/19 (Thu) 18:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1444" onclick="return highlightReply(1444, event)" href="/agg/res/1444#1444">No.</a><a class="post_no" onclick="return citeReply(1444)" href="/agg/res/1444#q1444">1444</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1444">[Reply]</a></p><div class="body">test<br/><a href=http://what-ch.mooo.com/what/res/2196.html>http://what-ch.mooo.com/what/res/2196.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1443" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566491169887.jpg">1566491169887.jpg</a> <span class="unimportant">(91.02 KB, 1280x720, <span class="postfilename">1488229720775.jpg</span>)</span></p><a href="/agg/src/1566491169887.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566491169887.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1443" ><p class="intro"><input type="checkbox" class="delete" name="delete_1443" id="delete_1443" /><label for="delete_1443"><span class="name">Anonymous</span> <time datetime="2019-08-22T16:30:03Z">08/22/19 (Thu) 16:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1443" onclick="return highlightReply(1443, event)" href="/agg/res/1443#1443">No.</a><a class="post_no" onclick="return citeReply(1443)" href="/agg/res/1443#q1443">1443</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1443">[Reply]</a></p><div class="body">i&#39;m taking it easy, are you taking it easy<br/><a href=https://kissu.moe/qa/res/5482.html>https://kissu.moe/qa/res/5482.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1442" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566485955219.png">1566485955219.png</a> <span class="unimportant">(799.09 KB, 744x1052, <span class="postfilename" title="250C1F3C-4232-4237-ABBE-35A07DE249B0.png">250C1F3C-4232-4237-ABBE-35….png</span>)</span></p><a href="/agg/src/1566485955219.png" target="_blank"><img class="post-image" src="/agg/thumb/1566485955219.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1442" ><p class="intro"><input type="checkbox" class="delete" name="delete_1442" id="delete_1442" /><label for="delete_1442"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-08-22T15:00:03Z">08/22/19 (Thu) 15:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1442" onclick="return highlightReply(1442, event)" href="/agg/res/1442#1442">No.</a><a class="post_no" onclick="return citeReply(1442)" href="/agg/res/1442#q1442">1442</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1442">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5479.html>https://kissu.moe/qa/res/5479.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1441" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566472551941.jpg">1566472551941.jpg</a> <span class="unimportant">(217.08 KB, 1000x707, <span class="postfilename">oniai 0025.jpg</span>)</span></p><a href="/agg/src/1566472551941.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566472551941.png" style="width:240px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1441" ><p class="intro"><input type="checkbox" class="delete" name="delete_1441" id="delete_1441" /><label for="delete_1441"><span class="name">Anonymous</span> <time datetime="2019-08-22T11:20:04Z">08/22/19 (Thu) 11:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1441" onclick="return highlightReply(1441, event)" href="/agg/res/1441#1441">No.</a><a class="post_no" onclick="return citeReply(1441)" href="/agg/res/1441#q1441">1441</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1441">[Reply]</a></p><div class="body">whatmin add me on steam so we can fap together<br/><a href=http://what-ch.mooo.com/what/res/2188.html>http://what-ch.mooo.com/what/res/2188.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1440" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566470314209.png">1566470314209.png</a> <span class="unimportant">(447.86 KB, 563x675, <span class="postfilename">saved.png</span>)</span></p><a href="/agg/src/1566470314209.png" target="_blank"><img class="post-image" src="/agg/thumb/1566470314209.png" style="width:213px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1440" ><p class="intro"><input type="checkbox" class="delete" name="delete_1440" id="delete_1440" /><label for="delete_1440"><span class="name">Anonymous</span> <time datetime="2019-08-22T10:40:03Z">08/22/19 (Thu) 10:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1440" onclick="return highlightReply(1440, event)" href="/agg/res/1440#1440">No.</a><a class="post_no" onclick="return citeReply(1440)" href="/agg/res/1440#q1440">1440</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1440">[Reply]</a></p><div class="body">Please add a download button besides filename in order to make saving images/videos easier instead of having to <span class="glowpink">right click&gt;save image as&gt;save</span><br/>btw i saved a lot of images here!<br/><a href=https://kissu.moe/qa/res/5475.html>https://kissu.moe/qa/res/5475.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1439" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566467716550.jpg">1566467716550.jpg</a> <span class="unimportant">(190.76 KB, 1024x768, <span class="postfilename">DSCF4231-1024x768.jpg</span>)</span></p><a href="/agg/src/1566467716550.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566467716550.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1439" ><p class="intro"><input type="checkbox" class="delete" name="delete_1439" id="delete_1439" /><label for="delete_1439"><span class="name">Anonymous</span> <time datetime="2019-08-22T10:00:03Z">08/22/19 (Thu) 10:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1439" onclick="return highlightReply(1439, event)" href="/agg/res/1439#1439">No.</a><a class="post_no" onclick="return citeReply(1439)" href="/agg/res/1439#q1439">1439</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1439">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2184.html>http://what-ch.mooo.com/what/res/2184.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1438" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566465178635.jpg">1566465178635.jpg</a> <span class="unimportant">(169.53 KB, 1474x1943, <span class="postfilename">DmfWU8eVsAEbKOm.jpg</span>)</span></p><a href="/agg/src/1566465178635.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566465178635.png" style="width:183px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1438" ><p class="intro"><input type="checkbox" class="delete" name="delete_1438" id="delete_1438" /><label for="delete_1438"><span class="name">Anonymous</span> <time datetime="2019-08-22T09:15:03Z">08/22/19 (Thu) 09:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1438" onclick="return highlightReply(1438, event)" href="/agg/res/1438#1438">No.</a><a class="post_no" onclick="return citeReply(1438)" href="/agg/res/1438#q1438">1438</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1438">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2181.html>http://what-ch.mooo.com/what/res/2181.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1437" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566456165567.jpg">1566456165567.jpg</a> <span class="unimportant">(185.16 KB, 374x1300, <span class="postfilename">1306370293658.jpg</span>)</span></p><a href="/agg/src/1566456165567.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566456165567.png" style="width:70px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1437" ><p class="intro"><input type="checkbox" class="delete" name="delete_1437" id="delete_1437" /><label for="delete_1437"><span class="name">Anonymous</span> <time datetime="2019-08-22T06:45:04Z">08/22/19 (Thu) 06:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1437" onclick="return highlightReply(1437, event)" href="/agg/res/1437#1437">No.</a><a class="post_no" onclick="return citeReply(1437)" href="/agg/res/1437#q1437">1437</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1437">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2172.html>http://what-ch.mooo.com/what/res/2172.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1436" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566456164581.jpg">1566456164581.jpg</a> <span class="unimportant">(138.71 KB, 500x700, <span class="postfilename">1566453829386.jpg</span>)</span></p><a href="/agg/src/1566456164581.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566456164581.png" style="width:172px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1436" ><p class="intro"><input type="checkbox" class="delete" name="delete_1436" id="delete_1436" /><label for="delete_1436"><span class="name">Anonymous</span> <time datetime="2019-08-22T06:45:03Z">08/22/19 (Thu) 06:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1436" onclick="return highlightReply(1436, event)" href="/agg/res/1436#1436">No.</a><a class="post_no" onclick="return citeReply(1436)" href="/agg/res/1436#q1436">1436</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1436">[Reply]</a></p><div class="body">sexier<br/><a href=http://what-ch.mooo.com/what/res/2171.html>http://what-ch.mooo.com/what/res/2171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1435" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566454240119.jpg">1566454240119.jpg</a> <span class="unimportant">(181 KB, 640x512, <span class="postfilename">9405098_p0.jpg</span>)</span></p><a href="/agg/src/1566454240119.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566454240119.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_1435" ><p class="intro"><input type="checkbox" class="delete" name="delete_1435" id="delete_1435" /><label for="delete_1435"><span class="name">Anonymous</span> <time datetime="2019-08-22T06:15:03Z">08/22/19 (Thu) 06:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1435" onclick="return highlightReply(1435, event)" href="/agg/res/1435#1435">No.</a><a class="post_no" onclick="return citeReply(1435)" href="/agg/res/1435#q1435">1435</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1435">[Reply]</a></p><div class="body">went to dentist!<br/><br/>teeth clean as can be!<br/><a href=https://kissu.moe/qa/res/5466.html>https://kissu.moe/qa/res/5466.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1434" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566453829386.jpg">1566453829386.jpg</a> <span class="unimportant">(149.7 KB, 500x700, <span class="postfilename">lucky star 0356.jpg</span>)</span></p><a href="/agg/src/1566453829386.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566453829386.png" style="width:172px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1434" ><p class="intro"><input type="checkbox" class="delete" name="delete_1434" id="delete_1434" /><label for="delete_1434"><span class="name">Anonymous</span> <time datetime="2019-08-22T06:05:03Z">08/22/19 (Thu) 06:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1434" onclick="return highlightReply(1434, event)" href="/agg/res/1434#1434">No.</a><a class="post_no" onclick="return citeReply(1434)" href="/agg/res/1434#q1434">1434</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1434">[Reply]</a></p><div class="body">woah!! sexy!<br/><a href=http://what-ch.mooo.com/what/res/2170.html>http://what-ch.mooo.com/what/res/2170.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1433" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566450864438.jpg">1566450864438.jpg</a> <span class="unimportant">(584.45 KB, 1152x1181, <span class="postfilename">1535823689865.jpg</span>)</span></p><a href="/agg/src/1566450864438.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566450864438.png" style="width:248px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1433" ><p class="intro"><input type="checkbox" class="delete" name="delete_1433" id="delete_1433" /><label for="delete_1433"><span class="name">Anonymous</span> <time datetime="2019-08-22T05:15:03Z">08/22/19 (Thu) 05:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1433" onclick="return highlightReply(1433, event)" href="/agg/res/1433#1433">No.</a><a class="post_no" onclick="return citeReply(1433)" href="/agg/res/1433#q1433">1433</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1433">[Reply]</a></p><div class="body">ummm you ok bro?<br/><a href=https://kissu.moe/qa/res/5459.html>https://kissu.moe/qa/res/5459.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1432" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566448436080.png">1566448436080.png</a> <span class="unimportant">(3.63 MB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 014 [BD][1080p][600C5097].mkv_snapshot_10.40_[2019.08.05_20.51.34].png">[MiG_MuX] PriPara - 014 [B….png</span>)</span></p><a href="/agg/src/1566448436080.png" target="_blank"><img class="post-image" src="/agg/thumb/1566448436080.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1432" ><p class="intro"><input type="checkbox" class="delete" name="delete_1432" id="delete_1432" /><label for="delete_1432"><span class="name">Anonymous</span> <time datetime="2019-08-22T04:35:03Z">08/22/19 (Thu) 04:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1432" onclick="return highlightReply(1432, event)" href="/agg/res/1432#1432">No.</a><a class="post_no" onclick="return citeReply(1432)" href="/agg/res/1432#q1432">1432</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1432">[Reply]</a></p><div class="body">Step aside, Sachiko. There&#39;s a new top idol in town<br/><a href=https://kissu.moe/qa/res/5436.html>https://kissu.moe/qa/res/5436.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1431" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566448285131.png">1566448285131.png</a> <span class="unimportant">(139.04 KB, 290x290, <span class="postfilename">tenshi cry.png</span>)</span></p><a href="/agg/src/1566448285131.png" target="_blank"><img class="post-image" src="/agg/thumb/1566448285131.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1431" ><p class="intro"><input type="checkbox" class="delete" name="delete_1431" id="delete_1431" /><label for="delete_1431"><a class="email" href="mailto:knocko"><span class="name">Anonymous</span></a> <time datetime="2019-08-22T04:35:03Z">08/22/19 (Thu) 04:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1431" onclick="return highlightReply(1431, event)" href="/agg/res/1431#1431">No.</a><a class="post_no" onclick="return citeReply(1431)" href="/agg/res/1431#q1431">1431</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1431">[Reply]</a></p><div class="body">where is 4chan and why isn&#39;t desu working?<br/><a href=https://kissu.moe/qa/res/5434.html>https://kissu.moe/qa/res/5434.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1430" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566447974206.jpg">1566447974206.jpg</a> <span class="unimportant">(100.26 KB, 620x438, <span class="postfilename">c4d425e2_1477200651832.jpg</span>)</span></p><a href="/agg/src/1566447974206.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566447974206.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1430" ><p class="intro"><input type="checkbox" class="delete" name="delete_1430" id="delete_1430" /><label for="delete_1430"><span class="name">Anonymous</span> <time datetime="2019-08-22T04:30:04Z">08/22/19 (Thu) 04:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1430" onclick="return highlightReply(1430, event)" href="/agg/res/1430#1430">No.</a><a class="post_no" onclick="return citeReply(1430)" href="/agg/res/1430#q1430">1430</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1430">[Reply]</a></p><div class="body">Why is nobody playing mahjong anymore<br/><a href=https://kissu.moe/qa/res/5428.html>https://kissu.moe/qa/res/5428.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/35" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a class="selected">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/37" method="get"><input type="submit" value="Next" /></form>
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