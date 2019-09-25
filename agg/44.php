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
			<img class="board_image" src="/static/banners/banner-kissu-10.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="text" value="qmsSY[vpLH2P\1y@b,k_">
<input type="hidden" name="firstname" value="f#⚈/ &#9836;3}{&#81;Dt7\+&#100;&#53;:Y@⚒BvVT-sep&#90;$~]&#73;U;S&#94;nhX&#33;9K&#91;)mu&#60;N&#40;W8&#9819;&gt;xro2">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" value="&#119;d&#49;☟7n%/e:{I&#9906;^B6⚪&#114;g_&#41;$&#122;&#86;h]\f&#64;Z5L&gt;&#50;3t;&#9930;M☃YXH-Q&#70;&#82;'&#121;☘NK*x9T[" name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" name="q">
			</td>
		</tr>		<tr>
			<th>
				Options				<input   type="hidden"   value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="   name="y0kh38z9do♒sb"   >
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
		<div class="thread" id="thread_1278" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565388410178.jpg">1565388410178.jpg</a> <span class="unimportant">(106.43 KB, 1068x587, <span class="postfilename">image0.jpg</span>)</span></p><a href="/agg/src/1565388410178.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565388410178.png" style="width:240px;height:132px" alt="" /></a></div>    </div>    <div class="post op" id="op_1278" ><p class="intro"><input type="checkbox" class="delete" name="delete_1278" id="delete_1278" /><label for="delete_1278"><span class="name">Anonymous</span> <time datetime="2019-08-09T22:10:03Z">08/09/19 (Fri) 22:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1278" onclick="return highlightReply(1278, event)" href="/agg/res/1278#1278">No.</a><a class="post_no" onclick="return citeReply(1278)" href="/agg/res/1278#q1278">1278</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1278">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1865.html>http://what-ch.mooo.com/what/res/1865.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1277" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565382598350.mp4">1565382598350.mp4</a> <span class="unimportant">(482.02 KB, 320x442, <span class="postfilename">1565222605129.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1565382598350.mp4&amp;t=1565222605129.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1565382598350.jpg" style="width:174px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1277" ><p class="intro"><input type="checkbox" class="delete" name="delete_1277" id="delete_1277" /><label for="delete_1277"><span class="name">Anonymous</span> <time datetime="2019-08-09T20:30:03Z">08/09/19 (Fri) 20:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1277" onclick="return highlightReply(1277, event)" href="/agg/res/1277#1277">No.</a><a class="post_no" onclick="return citeReply(1277)" href="/agg/res/1277#q1277">1277</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1277">[Reply]</a></p><div class="body"><a href="https://may.2chan.net/webm/futaba.htm" rel="nofollow" target="_blank">https://may.2chan.net/webm/futaba.htm</a><br/><a href=http://what-ch.mooo.com/what/res/1859.html>http://what-ch.mooo.com/what/res/1859.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1276" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565368158056.png">1565368158056.png</a> <span class="unimportant">(404.16 KB, 744x1100, <span class="postfilename" title="4523900B-029F-4BD4-8897-8D9A1974186B.png">4523900B-029F-4BD4-8897-8D….png</span>)</span></p><a href="/agg/src/1565368158056.png" target="_blank"><img class="post-image" src="/agg/thumb/1565368158056.png" style="width:173px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1276" ><p class="intro"><input type="checkbox" class="delete" name="delete_1276" id="delete_1276" /><label for="delete_1276"><span class="name">Kazuma</span> <time datetime="2019-08-09T16:30:04Z">08/09/19 (Fri) 16:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1276" onclick="return highlightReply(1276, event)" href="/agg/res/1276#1276">No.</a><a class="post_no" onclick="return citeReply(1276)" href="/agg/res/1276#q1276">1276</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1276">[Reply]</a></p><div class="body">Suwako Moriya thread<br/><a href=https://kakashi-nenpo.com/jp/res/32671.html>https://kakashi-nenpo.com/jp/res/32671.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1275" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565362984573.jpg">1565362984573.jpg</a> <span class="unimportant">(931.7 KB, 840x1028, <span class="postfilename">Doremy.Sweet.full.2160717.jpg</span>)</span></p><a href="/agg/src/1565362984573.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565362984573.png" style="width:209px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1275" ><p class="intro"><input type="checkbox" class="delete" name="delete_1275" id="delete_1275" /><label for="delete_1275"><span class="name">Sakutarou</span> <time datetime="2019-08-09T15:05:03Z">08/09/19 (Fri) 15:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1275" onclick="return highlightReply(1275, event)" href="/agg/res/1275#1275">No.</a><a class="post_no" onclick="return citeReply(1275)" href="/agg/res/1275#q1275">1275</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1275">[Reply]</a></p><div class="body">You&#39;ll get <span class="glowblue">rest</span> right nen?<br/><a href=https://kakashi-nenpo.com/jp/res/32667.html>https://kakashi-nenpo.com/jp/res/32667.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1274" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565359763325.png">1565359763325.png</a> <span class="unimportant">(379.86 KB, 760x725, <span class="postfilename">misc 1107.png</span>)</span></p><a href="/agg/src/1565359763325.png" target="_blank"><img class="post-image" src="/agg/thumb/1565359763325.png" style="width:240px;height:229px" alt="" /></a></div>    </div>    <div class="post op" id="op_1274" ><p class="intro"><input type="checkbox" class="delete" name="delete_1274" id="delete_1274" /><label for="delete_1274"><span class="name">Anonymous</span> <time datetime="2019-08-09T14:10:08Z">08/09/19 (Fri) 14:10:08</time></label>&nbsp;<a class="post_no" id="post_no_1274" onclick="return highlightReply(1274, event)" href="/agg/res/1274#1274">No.</a><a class="post_no" onclick="return citeReply(1274)" href="/agg/res/1274#q1274">1274</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1274">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1858.html>http://what-ch.mooo.com/what/res/1858.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1273" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565344474154.jpg">1565344474154.jpg</a> <span class="unimportant">(11.29 KB, 307x310, <span class="postfilename">1565173663844.jpg</span>)</span></p><a href="/agg/src/1565344474154.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565344474154.png" style="width:253px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1273" ><p class="intro"><input type="checkbox" class="delete" name="delete_1273" id="delete_1273" /><label for="delete_1273"><span class="name">Tewi Inaba</span> <time datetime="2019-08-09T09:55:03Z">08/09/19 (Fri) 09:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1273" onclick="return highlightReply(1273, event)" href="/agg/res/1273#1273">No.</a><a class="post_no" onclick="return citeReply(1273)" href="/agg/res/1273#q1273">1273</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1273">[Reply]</a></p><div class="body">I&#39;m coming for you nenmin. I know where you live<br/><a href=https://kakashi-nenpo.com/jp/res/32656.html>https://kakashi-nenpo.com/jp/res/32656.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1272" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565343423030.jpg">1565343423030.jpg</a> <span class="unimportant">(179.52 KB, 1080x1069, <span class="postfilename" title="30F50249-E8E1-4C4D-AA8D-469CA92DB7B0.jpg">30F50249-E8E1-4C4D-AA8D-46….jpg</span>)</span></p><a href="/agg/src/1565343423030.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565343423030.png" style="width:255px;height:253px" alt="" /></a></div>    </div>    <div class="post op" id="op_1272" ><p class="intro"><input type="checkbox" class="delete" name="delete_1272" id="delete_1272" /><label for="delete_1272"><span class="name">Rin Tohsaka</span> <time datetime="2019-08-09T09:40:03Z">08/09/19 (Fri) 09:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1272" onclick="return highlightReply(1272, event)" href="/agg/res/1272#1272">No.</a><a class="post_no" onclick="return citeReply(1272)" href="/agg/res/1272#q1272">1272</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1272">[Reply]</a></p><div class="body">I&#39;d love to kick Nenmin in the head. Just take a few steps run up then catch him with the full force of my steel capped toe under his chin, send that little friend flying through the air.<br/><br/>As he lies on the floor, coughing and wheezing and chocking on his own blood, his jaw a mangled mess of bones detached from the rest of his skull, I stand over him and laugh wickedly. He looks up at me in fear and pain, his eyes searching, begging me for mercy. He finds none. I raise my boot then stomp down, splitting his skull like a melon and finally ending his pathetic life.<br/><a href=https://kakashi-nenpo.com/jp/res/32651.html>https://kakashi-nenpo.com/jp/res/32651.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1271" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565343396140.jpg">1565343396140.jpg</a> <span class="unimportant">(78.39 KB, 900x900, <span class="postfilename">Bateman.jpg</span>)</span></p><a href="/agg/src/1565343396140.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565343396140.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1271" ><p class="intro"><input type="checkbox" class="delete" name="delete_1271" id="delete_1271" /><label for="delete_1271"><span class="name">Sagume Kishin</span> <time datetime="2019-08-09T09:40:03Z">08/09/19 (Fri) 09:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1271" onclick="return highlightReply(1271, event)" href="/agg/res/1271#1271">No.</a><a class="post_no" onclick="return citeReply(1271)" href="/agg/res/1271#q1271">1271</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1271">[Reply]</a></p><div class="body">Nenmin you will be screaming, crying, and begging for your life, and I&#39;ll look down and whisper, "NO." Then I will spatter your brains on the pavement.<br/><a href=https://kakashi-nenpo.com/jp/res/32650.html>https://kakashi-nenpo.com/jp/res/32650.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1270" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565341974111.jpg">1565341974111.jpg</a> <span class="unimportant">(146.87 KB, 960x960, <span class="postfilename">pack of wild millennials.jpg</span>)</span></p><a href="/agg/src/1565341974111.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565341974111.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1270" ><p class="intro"><input type="checkbox" class="delete" name="delete_1270" id="delete_1270" /><label for="delete_1270"><span class="name">Saber</span> <time datetime="2019-08-09T09:15:03Z">08/09/19 (Fri) 09:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1270" onclick="return highlightReply(1270, event)" href="/agg/res/1270#1270">No.</a><a class="post_no" onclick="return citeReply(1270)" href="/agg/res/1270#q1270">1270</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1270">[Reply]</a></p><div class="body">fUCK NENMIN<br/><a href=https://kakashi-nenpo.com/jp/res/32647.html>https://kakashi-nenpo.com/jp/res/32647.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1269" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565341479852.jpeg">1565341479852.jpeg</a> <span class="unimportant">(112.36 KB, 720x845, <span class="postfilename">1539577898448.jpeg</span>)</span></p><a href="/agg/src/1565341479852.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1565341479852.png" style="width:218px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1269" ><p class="intro"><input type="checkbox" class="delete" name="delete_1269" id="delete_1269" /><label for="delete_1269"><span class="name">Wakasagihime</span> <time datetime="2019-08-09T09:05:08Z">08/09/19 (Fri) 09:05:08</time></label>&nbsp;<a class="post_no" id="post_no_1269" onclick="return highlightReply(1269, event)" href="/agg/res/1269#1269">No.</a><a class="post_no" onclick="return citeReply(1269)" href="/agg/res/1269#q1269">1269</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1269">[Reply]</a></p><div class="body">Nenmin I will crush your skull open.<br/><a href=https://kakashi-nenpo.com/jp/res/32646.html>https://kakashi-nenpo.com/jp/res/32646.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1268" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565331577398.png">1565331577398.png</a> <span class="unimportant">(4.34 MB, 2880x1440, <span class="postfilename">Screenshot_20190808-225711.png</span>)</span></p><a href="/agg/src/1565331577398.png" target="_blank"><img class="post-image" src="/agg/thumb/1565331577398.png" style="width:240px;height:120px" alt="" /></a></div>    </div>    <div class="post op" id="op_1268" ><p class="intro"><input type="checkbox" class="delete" name="delete_1268" id="delete_1268" /><label for="delete_1268"><span class="name">Anonymous</span> <time datetime="2019-08-09T06:20:03Z">08/09/19 (Fri) 06:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1268" onclick="return highlightReply(1268, event)" href="/agg/res/1268#1268">No.</a><a class="post_no" onclick="return citeReply(1268)" href="/agg/res/1268#q1268">1268</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1268">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1855.html>http://what-ch.mooo.com/what/res/1855.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1267" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565328533511.jpg">1565328533511.jpg</a> <span class="unimportant">(708.58 KB, 1400x1037, <span class="postfilename">fate 0043.jpg</span>)</span></p><a href="/agg/src/1565328533511.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565328533511.png" style="width:240px;height:178px" alt="" /></a></div>    </div>    <div class="post op" id="op_1267" ><p class="intro"><input type="checkbox" class="delete" name="delete_1267" id="delete_1267" /><label for="delete_1267"><span class="name">Anonymous</span> <time datetime="2019-08-09T05:30:02Z">08/09/19 (Fri) 05:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1267" onclick="return highlightReply(1267, event)" href="/agg/res/1267#1267">No.</a><a class="post_no" onclick="return citeReply(1267)" href="/agg/res/1267#q1267">1267</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1267">[Reply]</a></p><div class="body">i cant post in gnfos because trevor wants me to enable javascript<br/><a href=http://what-ch.mooo.com/what/res/1852.html>http://what-ch.mooo.com/what/res/1852.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1266" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565296884045.jpg">1565296884045.jpg</a> <span class="unimportant">(11.29 KB, 307x310, <span class="postfilename">1565173663844.jpg</span>)</span></p><a href="/agg/src/1565296884045.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565296884045.png" style="width:253px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1266" ><p class="intro"><input type="checkbox" class="delete" name="delete_1266" id="delete_1266" /><label for="delete_1266"><span class="name">Keine Kamishirasawa</span> <time datetime="2019-08-08T20:45:03Z">08/08/19 (Thu) 20:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1266" onclick="return highlightReply(1266, event)" href="/agg/res/1266#1266">No.</a><a class="post_no" onclick="return citeReply(1266)" href="/agg/res/1266#q1266">1266</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1266">[Reply]</a></p><div class="body">Put a fucking bullet in your brain, nenmin.<br/><a href=https://kakashi-nenpo.com/jp/res/32642.html>https://kakashi-nenpo.com/jp/res/32642.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1265" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565288217491.jpg">1565288217491.jpg</a> <span class="unimportant">(387.49 KB, 2048x1536, <span class="postfilename">misc 2202.jpg</span>)</span></p><a href="/agg/src/1565288217491.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565288217491.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1265" ><p class="intro"><input type="checkbox" class="delete" name="delete_1265" id="delete_1265" /><label for="delete_1265"><span class="name">Anonymous</span> <time datetime="2019-08-08T18:20:03Z">08/08/19 (Thu) 18:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1265" onclick="return highlightReply(1265, event)" href="/agg/res/1265#1265">No.</a><a class="post_no" onclick="return citeReply(1265)" href="/agg/res/1265#q1265">1265</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1265">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1843.html>http://what-ch.mooo.com/what/res/1843.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1264" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565275936363.webm">1565275936363.webm</a> <span class="unimportant">(2.93 MB, 320x240, <span class="postfilename">soviet man.webm</span>)</span></p><a href="/player.php?v=/agg/src/1565275936363.webm&amp;t=soviet%20man.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1565275936363.jpg" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1264" ><p class="intro"><input type="checkbox" class="delete" name="delete_1264" id="delete_1264" /><label for="delete_1264"><span class="name">Anonymous</span> <time datetime="2019-08-08T14:55:03Z">08/08/19 (Thu) 14:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1264" onclick="return highlightReply(1264, event)" href="/agg/res/1264#1264">No.</a><a class="post_no" onclick="return citeReply(1264)" href="/agg/res/1264#q1264">1264</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1264">[Reply]</a></p><div class="body">a waltz<br/><a href=https://kissu.moe/qa/res/4612.html>https://kissu.moe/qa/res/4612.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1263" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565257519374.jpg">1565257519374.jpg</a> <span class="unimportant">(223.52 KB, 1080x1920, <span class="postfilename">1565222742464.jpg</span>)</span></p><a href="/agg/src/1565257519374.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565257519374.png" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1263" ><p class="intro"><input type="checkbox" class="delete" name="delete_1263" id="delete_1263" /><label for="delete_1263"><span class="name">Anonymous</span> <time datetime="2019-08-08T09:50:08Z">08/08/19 (Thu) 09:50:08</time></label>&nbsp;<a class="post_no" id="post_no_1263" onclick="return highlightReply(1263, event)" href="/agg/res/1263#1263">No.</a><a class="post_no" onclick="return citeReply(1263)" href="/agg/res/1263#q1263">1263</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1263">[Reply]</a></p><div class="body">How many faps does it take to get bored of Marie?<br/><a href=http://what-ch.mooo.com/what/res/1837.html>http://what-ch.mooo.com/what/res/1837.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1262" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565256252681.jpg">1565256252681.jpg</a> <span class="unimportant">(405.72 KB, 800x800, <span class="postfilename" title="ee0435e938c3215bcab9b9be562ce6d9.jpg">ee0435e938c3215bcab9b9be56….jpg</span>)</span></p><a href="/agg/src/1565256252681.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565256252681.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1262" ><p class="intro"><input type="checkbox" class="delete" name="delete_1262" id="delete_1262" /><label for="delete_1262"><span class="name">Anonymous</span> <time datetime="2019-08-08T09:25:03Z">08/08/19 (Thu) 09:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1262" onclick="return highlightReply(1262, event)" href="/agg/res/1262#1262">No.</a><a class="post_no" onclick="return citeReply(1262)" href="/agg/res/1262#q1262">1262</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1262">[Reply]</a></p><div class="body">whoa<br/><a href=https://kissu.moe/qa/res/4611.html>https://kissu.moe/qa/res/4611.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1261" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565254250592.png">1565254250592.png</a> <span class="unimportant">(357.79 KB, 1032x584, <span class="postfilename">1565241055373.png</span>)</span></p><a href="/agg/src/1565254250592.png" target="_blank"><img class="post-image" src="/agg/thumb/1565254250592.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1261" ><p class="intro"><input type="checkbox" class="delete" name="delete_1261" id="delete_1261" /><label for="delete_1261"><span class="name">Anonymous</span> <time datetime="2019-08-08T08:55:02Z">08/08/19 (Thu) 08:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1261" onclick="return highlightReply(1261, event)" href="/agg/res/1261#1261">No.</a><a class="post_no" onclick="return citeReply(1261)" href="/agg/res/1261#q1261">1261</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1261">[Reply]</a></p><div class="body">Dude weed lmao<br/><a href=http://what-ch.mooo.com/what/res/1835.html>http://what-ch.mooo.com/what/res/1835.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1260" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565241744022.jpg">1565241744022.jpg</a> <span class="unimportant">(39.37 KB, 494x686, <span class="postfilename">1564010620105.jpg</span>)</span></p><a href="/agg/src/1565241744022.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565241744022.png" style="width:173px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1260" ><p class="intro"><input type="checkbox" class="delete" name="delete_1260" id="delete_1260" /><label for="delete_1260"><span class="name">Anonymous</span> <time datetime="2019-08-08T05:25:02Z">08/08/19 (Thu) 05:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1260" onclick="return highlightReply(1260, event)" href="/agg/res/1260#1260">No.</a><a class="post_no" onclick="return citeReply(1260)" href="/agg/res/1260#q1260">1260</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1260">[Reply]</a></p><div class="body">Test<br/><a href=http://what-ch.mooo.com/what/res/1834.html>http://what-ch.mooo.com/what/res/1834.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1259" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565237491438.png">1565237491438.png</a> <span class="unimportant">(369.37 KB, 1158x768, <span class="postfilename">misc 0389.png</span>)</span></p><a href="/agg/src/1565237491438.png" target="_blank"><img class="post-image" src="/agg/thumb/1565237491438.png" style="width:240px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1259" ><p class="intro"><input type="checkbox" class="delete" name="delete_1259" id="delete_1259" /><label for="delete_1259"><span class="name">Anonymous</span> <time datetime="2019-08-08T04:15:03Z">08/08/19 (Thu) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1259" onclick="return highlightReply(1259, event)" href="/agg/res/1259#1259">No.</a><a class="post_no" onclick="return citeReply(1259)" href="/agg/res/1259#q1259">1259</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1259">[Reply]</a></p><div class="body">D&gt;Too deep 4 me<br/><a href=http://what-ch.mooo.com/what/res/1833.html>http://what-ch.mooo.com/what/res/1833.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/43" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a class="selected">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/45" method="get"><input type="submit" value="Next" /></form>
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