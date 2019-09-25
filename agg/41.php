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
<input value="qmsSY[vpLH2P\1y@b,k_" name="text" type="hidden">
<input  type="hidden"  value="f#⚈&#47; ♬&#51;}{&#81;&#68;&#116;7\&#43;d5:Y@⚒BvVT-sep&#90;$&#126;]I&#85;&#59;S^&#110;hX!9K[)&#109;&#117;&lt;N&#40;W8♛&gt;xro2"  name="firstname">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input   value="wd1☟7n%&#47;e&#58;{I⚲^B&#54;⚪&#114;&#103;_)$z&#86;h]\f@Z&#53;&#76;&gt;2&#51;t;⛊&#77;☃YXH-Q&#70;&#82;'y&#9752;&#78;&#75;*&#120;9T["   name="message"   type="hidden"   >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<div   style="display:none"><input   type="text"   name="y0kh38z9do♒sb"   value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
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
		<div class="thread" id="thread_1349" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566002710536.png">1566002710536.png</a> <span class="unimportant">(650.77 KB, 719x725, <span class="postfilename">456.png</span>)</span></p><a href="/agg/src/1566002710536.png" target="_blank"><img class="post-image" src="/agg/thumb/1566002710536.png" style="width:253px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1349" ><p class="intro"><input type="checkbox" class="delete" name="delete_1349" id="delete_1349" /><label for="delete_1349"><span class="name">Anonymous</span> <time datetime="2019-08-17T00:50:03Z">08/17/19 (Sat) 00:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1349" onclick="return highlightReply(1349, event)" href="/agg/res/1349#1349">No.</a><a class="post_no" onclick="return citeReply(1349)" href="/agg/res/1349#q1349">1349</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1349">[Reply]</a></p><div class="body">Can I have my own sick capcode? Anonymous ## Kissu Pro. Thanks kissmin.<br/><a href=https://kissu.moe/qa/res/4823.html>https://kissu.moe/qa/res/4823.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1348" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565997471976.jpg">1565997471976.jpg</a> <span class="unimportant">(617.4 KB, 2715x1527, <span class="postfilename">20190816191614_1.jpg</span>)</span></p><a href="/agg/src/1565997471976.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565997471976.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1348" ><p class="intro"><input type="checkbox" class="delete" name="delete_1348" id="delete_1348" /><label for="delete_1348"><span class="name">Anonymous</span> <time datetime="2019-08-16T23:20:04Z">08/16/19 (Fri) 23:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1348" onclick="return highlightReply(1348, event)" href="/agg/res/1348#1348">No.</a><a class="post_no" onclick="return citeReply(1348)" href="/agg/res/1348#q1348">1348</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1348">[Reply]</a></p><div class="body">farming karma<br/><a href=http://what-ch.mooo.com/what/res/2017.html>http://what-ch.mooo.com/what/res/2017.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1347" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565988350195.png">1565988350195.png</a> <span class="unimportant">(435.68 KB, 570x960, <span class="postfilename">EAzeQ9_X4AI7wQY.png</span>)</span></p><a href="/agg/src/1565988350195.png" target="_blank"><img class="post-image" src="/agg/thumb/1565988350195.png" style="width:151px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1347" ><p class="intro"><input type="checkbox" class="delete" name="delete_1347" id="delete_1347" /><label for="delete_1347"><span class="subject">leddit</span> <span class="name">Anonymous</span> <time datetime="2019-08-16T20:50:03Z">08/16/19 (Fri) 20:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1347" onclick="return highlightReply(1347, event)" href="/agg/res/1347#1347">No.</a><a class="post_no" onclick="return citeReply(1347)" href="/agg/res/1347#q1347">1347</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1347">[Reply]</a></p><div class="body">i unironically find r/animemes funny<br/>what do?<br/><a href=https://kissu.moe/qa/res/4810.html>https://kissu.moe/qa/res/4810.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1346" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565988254794.png">1565988254794.png</a> <span class="unimportant">(36.06 KB, 1831x372, <span class="postfilename" title="Screenshot_2019-08-16 Ban list.png">Screenshot_2019-08-16 Ban ….png</span>)</span></p><a href="/agg/src/1565988254794.png" target="_blank"><img class="post-image" src="/agg/thumb/1565988254794.png" style="width:255px;height:52px" alt="" /></a></div>    </div>    <div class="post op" id="op_1346" ><p class="intro"><input type="checkbox" class="delete" name="delete_1346" id="delete_1346" /><label for="delete_1346"><span class="name">Anonymous</span> <time datetime="2019-08-16T20:45:03Z">08/16/19 (Fri) 20:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1346" onclick="return highlightReply(1346, event)" href="/agg/res/1346#1346">No.</a><a class="post_no" onclick="return citeReply(1346)" href="/agg/res/1346#q1346">1346</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1346">[Reply]</a></p><div class="body">wouldn&#39;t this work better if you made so it filters out bans with the reason "Proxy, VPN or Tor node"<br/><a href=https://kissu.moe/qa/res/4809.html>https://kissu.moe/qa/res/4809.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1345" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565988030712.jpg">1565988030712.jpg</a> <span class="unimportant">(50.24 KB, 557x378, <span class="postfilename">1465002064653.jpg</span>)</span></p><a href="/agg/src/1565988030712.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565988030712.png" style="width:255px;height:173px" alt="" /></a></div>    </div>    <div class="post op" id="op_1345" ><p class="intro"><input type="checkbox" class="delete" name="delete_1345" id="delete_1345" /><label for="delete_1345"><span class="subject">WTF</span> <span class="name">Anonymous</span> <time datetime="2019-08-16T20:45:03Z">08/16/19 (Fri) 20:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1345" onclick="return highlightReply(1345, event)" href="/agg/res/1345#1345">No.</a><a class="post_no" onclick="return citeReply(1345)" href="/agg/res/1345#q1345">1345</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1345">[Reply]</a></p><div class="body">WTF<br/><a href=https://kissu.moe/qa/res/4807.html>https://kissu.moe/qa/res/4807.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1344" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565987043982.jpg">1565987043982.jpg</a> <span class="unimportant">(433.22 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Dr. Stone - 07 [720p].mkv_snapshot_11.03_[2019.08.16_16.01.52].jpg">[HorribleSubs] Dr. Stone -….jpg</span>)</span></p><a href="/agg/src/1565987043982.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565987043982.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1344" ><p class="intro"><input type="checkbox" class="delete" name="delete_1344" id="delete_1344" /><label for="delete_1344"><span class="name">Anonymous</span> <time datetime="2019-08-16T20:25:02Z">08/16/19 (Fri) 20:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1344" onclick="return highlightReply(1344, event)" href="/agg/res/1344#1344">No.</a><a class="post_no" onclick="return citeReply(1344)" href="/agg/res/1344#q1344">1344</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1344">[Reply]</a></p><div class="body">Funny how a couple of episodes can completely change how I view a series. Was thinking that Enen no Shoubutai would be the better of the two WSJ series airing this season after the more serious tone it took in its second episode, but it developed more into a generic conspiracy with sentient fire monsters. On the other hand, Dr. Stone has kept itself more grounded by sticking to science as its ultimate weapon, with the main threat being trying to overcome the hazards of a primitive world while trying to successfully modernize it.<br/><a href=https://kissu.moe/qa/res/4806.html>https://kissu.moe/qa/res/4806.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1343" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565978073258.png">1565978073258.png</a> <span class="unimportant">(290.15 KB, 512x427, <span class="postfilename">demons-souls-2-3.png</span>)</span></p><a href="/agg/src/1565978073258.png" target="_blank"><img class="post-image" src="/agg/thumb/1565978073258.png" style="width:255px;height:213px" alt="" /></a></div>    </div>    <div class="post op" id="op_1343" ><p class="intro"><input type="checkbox" class="delete" name="delete_1343" id="delete_1343" /><label for="delete_1343"><span class="name">Anonymous</span> <time datetime="2019-08-16T17:55:02Z">08/16/19 (Fri) 17:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1343" onclick="return highlightReply(1343, event)" href="/agg/res/1343#1343">No.</a><a class="post_no" onclick="return citeReply(1343)" href="/agg/res/1343#q1343">1343</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1343">[Reply]</a></p><div class="body">Why are some video game bosses so completely broken...<br/><a href=https://kissu.moe/qa/res/4801.html>https://kissu.moe/qa/res/4801.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1342" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565974414287.jpg">1565974414287.jpg</a> <span class="unimportant">(98.35 KB, 1002x1146, <span class="postfilename">1565228004587.jpg</span>)</span></p><a href="/agg/src/1565974414287.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565974414287.png" style="width:223px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1342" ><p class="intro"><input type="checkbox" class="delete" name="delete_1342" id="delete_1342" /><label for="delete_1342"><span class="subject">plz explain uwu</span> <span class="name">Anonymous</span> <time datetime="2019-08-16T16:55:03Z">08/16/19 (Fri) 16:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1342" onclick="return highlightReply(1342, event)" href="/agg/res/1342#1342">No.</a><a class="post_no" onclick="return citeReply(1342)" href="/agg/res/1342#q1342">1342</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1342">[Reply]</a></p><div class="body">1. what exactly is this "/qa/ webring"?<br/>2. why is this image board sometimes called a "spin-off"?<br/>3. how exactly is this place related to 4chan?<br/>4. is this the best image board in the world?<br/><a href=https://kissu.moe/qa/res/4796.html>https://kissu.moe/qa/res/4796.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1341" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565968509341.jpg">1565968509341.jpg</a> <span class="unimportant">(329.39 KB, 1135x1880, <span class="postfilename">1565708632122.jpg</span>)</span></p><a href="/agg/src/1565968509341.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565968509341.png" style="width:145px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1341" ><p class="intro"><input type="checkbox" class="delete" name="delete_1341" id="delete_1341" /><label for="delete_1341"><span class="name">Anonymous</span> <time datetime="2019-08-16T15:20:03Z">08/16/19 (Fri) 15:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1341" onclick="return highlightReply(1341, event)" href="/agg/res/1341#1341">No.</a><a class="post_no" onclick="return citeReply(1341)" href="/agg/res/1341#q1341">1341</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1341">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2011.html>http://what-ch.mooo.com/what/res/2011.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1340" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565949627086.jpg">1565949627086.jpg</a> <span class="unimportant">(181.18 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Dumbbell Nan Kilo Moteru - 01 [720p].mkv_snapshot_22.49_[2019.07.14_20.55.20].jpg">[HorribleSubs] Dumbbell Na….jpg</span>)</span></p><a href="/agg/src/1565949627086.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565949627086.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1340" ><p class="intro"><input type="checkbox" class="delete" name="delete_1340" id="delete_1340" /><label for="delete_1340"><span class="name">Anonymous</span> <time datetime="2019-08-16T10:05:06Z">08/16/19 (Fri) 10:05:06</time></label>&nbsp;<a class="post_no" id="post_no_1340" onclick="return highlightReply(1340, event)" href="/agg/res/1340#1340">No.</a><a class="post_no" onclick="return citeReply(1340)" href="/agg/res/1340#q1340">1340</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1340">[Reply]</a></p><div class="body">ONEGAI MUSCLE<br/><a href=https://kissu.moe/qa/res/4786.html>https://kissu.moe/qa/res/4786.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1339" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565943930349.jpg">1565943930349.jpg</a> <span class="unimportant">(164.1 KB, 851x1213, <span class="postfilename">024.jpg</span>)</span></p><a href="/agg/src/1565943930349.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565943930349.png" style="width:169px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1339" ><p class="intro"><input type="checkbox" class="delete" name="delete_1339" id="delete_1339" /><label for="delete_1339"><span class="name">Anonymous</span> <time datetime="2019-08-16T08:30:03Z">08/16/19 (Fri) 08:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1339" onclick="return highlightReply(1339, event)" href="/agg/res/1339#1339">No.</a><a class="post_no" onclick="return citeReply(1339)" href="/agg/res/1339#q1339">1339</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1339">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2006.html>http://what-ch.mooo.com/what/res/2006.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1338" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565941164520.png">1565941164520.png</a> <span class="unimportant">(359.36 KB, 480x580, <span class="postfilename">misc 2159.png</span>)</span></p><a href="/agg/src/1565941164520.png" target="_blank"><img class="post-image" src="/agg/thumb/1565941164520.png" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1338" ><p class="intro"><input type="checkbox" class="delete" name="delete_1338" id="delete_1338" /><label for="delete_1338"><span class="name">Anonymous</span> <time datetime="2019-08-16T07:40:09Z">08/16/19 (Fri) 07:40:09</time></label>&nbsp;<a class="post_no" id="post_no_1338" onclick="return highlightReply(1338, event)" href="/agg/res/1338#1338">No.</a><a class="post_no" onclick="return citeReply(1338)" href="/agg/res/1338#q1338">1338</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1338">[Reply]</a></p><div class="body">I want to hop in bed with whatmin and suck him til I pass out<br/><a href=http://what-ch.mooo.com/what/res/2001.html>http://what-ch.mooo.com/what/res/2001.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1337" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565936411917.jpg">1565936411917.jpg</a> <span class="unimportant">(220.53 KB, 707x915, <span class="postfilename" title="9e074d2b9e597371dccce2667a8567d9.jpg">9e074d2b9e597371dccce2667a….jpg</span>)</span></p><a href="/agg/src/1565936411917.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565936411917.png" style="width:197px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1337" ><p class="intro"><input type="checkbox" class="delete" name="delete_1337" id="delete_1337" /><label for="delete_1337"><span class="name">Anonymous</span> <time datetime="2019-08-16T06:25:03Z">08/16/19 (Fri) 06:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1337" onclick="return highlightReply(1337, event)" href="/agg/res/1337#1337">No.</a><a class="post_no" onclick="return citeReply(1337)" href="/agg/res/1337#q1337">1337</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1337">[Reply]</a></p><div class="body">What are you most afraid of?<br/><a href=https://kissu.moe/qa/res/4768.html>https://kissu.moe/qa/res/4768.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1336" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565935790324.jpg">1565935790324.jpg</a> <span class="unimportant">(456.96 KB, 865x665, <span class="postfilename" title="ab2e8557c4f609c91cdb11ff9b2a4247.jpg">ab2e8557c4f609c91cdb11ff9b….jpg</span>)</span></p><a href="/agg/src/1565935790324.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565935790324.png" style="width:255px;height:196px" alt="" /></a></div>    </div>    <div class="post op" id="op_1336" ><p class="intro"><input type="checkbox" class="delete" name="delete_1336" id="delete_1336" /><label for="delete_1336"><span class="name">Anonymous</span> <time datetime="2019-08-16T06:10:03Z">08/16/19 (Fri) 06:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1336" onclick="return highlightReply(1336, event)" href="/agg/res/1336#1336">No.</a><a class="post_no" onclick="return citeReply(1336)" href="/agg/res/1336#q1336">1336</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1336">[Reply]</a></p><div class="body">Do you ever do anything to think of thread ideas? Sometimes I open random images on my hard drive and think of a thread that would go with that image. And sometimes I use that userscript that opens random posts on 4chan (might be interesting to extend it to other imageboards).<br/><a href=https://kissu.moe/qa/res/4765.html>https://kissu.moe/qa/res/4765.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1335" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565927536010.png">1565927536010.png</a> <span class="unimportant">(2.55 MB, 1814x2300, <span class="postfilename" title="14f85a0f6bfa493e39f4d4bafd391213.png">14f85a0f6bfa493e39f4d4bafd….png</span>)</span></p><a href="/agg/src/1565927536010.png" target="_blank"><img class="post-image" src="/agg/thumb/1565927536010.png" style="width:201px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1335" ><p class="intro"><input type="checkbox" class="delete" name="delete_1335" id="delete_1335" /><label for="delete_1335"><span class="name">Anonymous</span> <time datetime="2019-08-16T03:55:05Z">08/16/19 (Fri) 03:55:05</time></label>&nbsp;<a class="post_no" id="post_no_1335" onclick="return highlightReply(1335, event)" href="/agg/res/1335#1335">No.</a><a class="post_no" onclick="return citeReply(1335)" href="/agg/res/1335#q1335">1335</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1335">[Reply]</a></p><div class="body">Thinking about lowering the captcha trigger some more<br/><a href=https://kissu.moe/qa/res/4739.html>https://kissu.moe/qa/res/4739.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1334" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565926312931.gif">1565926312931.gif</a> <span class="unimportant">(535.09 KB, 400x226, <span class="postfilename">1536796087622.gif</span>)</span></p><a href="/agg/src/1565926312931.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565926312931.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1334" ><p class="intro"><input type="checkbox" class="delete" name="delete_1334" id="delete_1334" /><label for="delete_1334"><span class="subject">This is the thread for</span> <span class="name">Anonymous</span> <time datetime="2019-08-16T03:35:02Z">08/16/19 (Fri) 03:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1334" onclick="return highlightReply(1334, event)" href="/agg/res/1334#1334">No.</a><a class="post_no" onclick="return citeReply(1334)" href="/agg/res/1334#q1334">1334</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1334">[Reply]</a></p><div class="body">all the anime that you really enjoyed but seemed to pass by unnoticed and is now all but forgotten! Post it here to give it a little more recognition and so other friends can enjoy it as well!<br/><br/>I really liked kowarekake no orgel, it was <span class="glowpink"> cute </span> and i wish i could marry <span class="glowblue"> Flower </span> and give her a good home where she could live happily. It might have been nice to have more than an OVA, but it makes our short time with <span class="glowblue"> Flower </span> all the more important<br/><br/>hope nobody saw that..<br/><a href=https://kissu.moe/qa/res/4731.html>https://kissu.moe/qa/res/4731.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1333" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565926179654.gif">1565926179654.gif</a> <span class="unimportant">(535.09 KB, 400x226, <span class="postfilename">1536796087622.gif</span>)</span></p><a href="/agg/src/1565926179654.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565926179654.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1333" ><p class="intro"><input type="checkbox" class="delete" name="delete_1333" id="delete_1333" /><label for="delete_1333"><span class="name">Anonymous</span> <time datetime="2019-08-16T03:30:03Z">08/16/19 (Fri) 03:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1333" onclick="return highlightReply(1333, event)" href="/agg/res/1333#1333">No.</a><a class="post_no" onclick="return citeReply(1333)" href="/agg/res/1333#q1333">1333</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1333">[Reply]</a></p><div class="body">all the anime that you really enjoyed but seemed to pass by unnoticed and is now all but forgotten! Post it here to give it a little more recognition and so other friends can enjoy it as well!<br/><br/>I really liked kowarekake no orgel, it was  cute  and i wish i could marry  Flower  and give her a nice home where she could live happily. It might have been nice to have more than an OVA, but it makes our short time with <span class="glowblue"> Flower </span> all the more important<br/><a href=https://kissu.moe/qa/res/4730.html>https://kissu.moe/qa/res/4730.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1332" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565924472462.jpg">1565924472462.jpg</a> <span class="unimportant">(66.25 KB, 640x480, <span class="postfilename">1496052905178.jpg</span>)</span></p><a href="/agg/src/1565924472462.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565924472462.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1332" ><p class="intro"><input type="checkbox" class="delete" name="delete_1332" id="delete_1332" /><label for="delete_1332"><span class="name">Anonymous</span> <time datetime="2019-08-16T03:05:02Z">08/16/19 (Fri) 03:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1332" onclick="return highlightReply(1332, event)" href="/agg/res/1332#1332">No.</a><a class="post_no" onclick="return citeReply(1332)" href="/agg/res/1332#q1332">1332</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1332">[Reply]</a></p><div class="body">would birds still be cute if they had arms?<br/><a href=https://kissu.moe/qa/res/4726.html>https://kissu.moe/qa/res/4726.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1331" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565924370366.jpg">1565924370366.jpg</a> <span class="unimportant">(127.34 KB, 805x1200, <span class="postfilename">71209818_p0.jpg</span>)</span></p><a href="/agg/src/1565924370366.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565924370366.png" style="width:172px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1331" ><p class="intro"><input type="checkbox" class="delete" name="delete_1331" id="delete_1331" /><label for="delete_1331"><span class="name">Anonymous</span> <time datetime="2019-08-16T03:00:10Z">08/16/19 (Fri) 03:00:10</time></label>&nbsp;<a class="post_no" id="post_no_1331" onclick="return highlightReply(1331, event)" href="/agg/res/1331#1331">No.</a><a class="post_no" onclick="return citeReply(1331)" href="/agg/res/1331#q1331">1331</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1331">[Reply]</a></p><div class="body">how come this place has feet all over the ads but all the feet are over on gn?!<br/><br/><a href="https://gnfos.com/jp/res/363097.html" rel="nofollow" target="_blank">https://gnfos.com/jp/res/363097.html</a><br/><a href=https://kissu.moe/qa/res/4725.html>https://kissu.moe/qa/res/4725.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1330" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565919042073.jpg">1565919042073.jpg</a> <span class="unimportant">(106.03 KB, 960x720, <span class="postfilename" title="[Coalgirls]_Cardcaptor_Sakura_35_(960x720_Blu-ray_FLAC)_[56A2C160].mkv_snapshot_04.33_[2019.05.14_14.18.03].jpg">[Coalgirls]_Cardcaptor_Sak….jpg</span>)</span></p><a href="/agg/src/1565919042073.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565919042073.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1330" ><p class="intro"><input type="checkbox" class="delete" name="delete_1330" id="delete_1330" /><label for="delete_1330"><span class="subject">/qa/&amp;#39;s favorite anime</span> <span class="name">Anonymous</span> <time datetime="2019-08-16T01:35:03Z">08/16/19 (Fri) 01:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1330" onclick="return highlightReply(1330, event)" href="/agg/res/1330#1330">No.</a><a class="post_no" onclick="return citeReply(1330)" href="/agg/res/1330#q1330">1330</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1330">[Reply]</a></p><div class="body">What are your favorite anime? I&#39;ve been looking through my backlog and just can&#39;t decide what to watch, and was thinking maybe I could take inspiration from seeing what others on here like.<br/><a href=https://kissu.moe/qa/res/4710.html>https://kissu.moe/qa/res/4710.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/40" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a class="selected">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/42" method="get"><input type="submit" value="Next" /></form>
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