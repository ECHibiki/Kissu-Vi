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
			<img class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="text" value="qmsSY[vpLH2P\1y@b,k_" type="hidden" >
<textarea style="display:none" name="firstname">f&#35;⚈/ ♬3}&#123;QDt7&#92;+d&#53;&#58;&#89;@⚒BvVT&#45;se&#112;Z$~]&#73;U&#59;S^n&#104;X!9K[)mu&#60;N(W8&#9819;&gt;&#120;ro2</textarea>
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/[&#76;H Ji&#58;`&#33;;C+6\o&#84;&#60;8&#79;bI|?X]d&#46;2&#9768;{tW5&#32;c⚱1&#66;=k@9&#40;&#51;Ng&#9774;*&#125;4&#39;P&#81;-MV⚯0&#75;D7&#117;&#115;j" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea style="display:none" name="message">wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div   style="display:none"><input   type="text"   name="q"   value=" f♻⛭&#9795;&#57;/q&#122;wZk&#46;@h|;$L&#70;&#9953;m&#100;&#118;,&#69;R&#56;3W%1&#89;I&#77;^iU☌5☍+Ag&#9770;T=`}⚑yc&#55;J⛮P#b?⚤6&#88;&amp;{&#68;x &#92;4NpKH&#110;:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="y0kh38z9do♒sb">pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=</textarea>
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
		<div class="thread" id="thread_1970" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569088435693.png">1569088435693.png</a> <span class="unimportant">(168.42 KB, 600x420, <span class="postfilename">1569084488400.png</span>)</span></p><a href="/agg/src/1569088435693.png" target="_blank"><img class="post-image" src="/agg/thumb/1569088435693.png" style="width:343px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1970" ><p class="intro"><input type="checkbox" class="delete" name="delete_1970" id="delete_1970" /><label for="delete_1970"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T17:55:04Z">09/21/19 (Sat) 17:55:04</time></label>&nbsp;<a class="post_no" id="post_no_1970" onclick="return highlightReply(1970, event)" href="/agg/res/1970#1970">No.</a><a class="post_no" onclick="return citeReply(1970)" href="/agg/res/1970#q1970">1970</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1970">[Reply]</a></p><div class="body">?<br/><a href=https://gnfos.com/jp/res/369185.html>https://gnfos.com/jp/res/369185.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1969" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569088241684.jpg">1569088241684.jpg</a> <span class="unimportant">(173.86 KB, 1920x1080, <span class="postfilename" title="preacher.s04e09.1080p.web.h264-tbs.mkv_snapshot_26.39.257.jpg">preacher.s04e09.1080p.web.….jpg</span>)</span></p><a href="/agg/src/1569088241684.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569088241684.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1969" ><p class="intro"><input type="checkbox" class="delete" name="delete_1969" id="delete_1969" /><label for="delete_1969"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T17:55:03Z">09/21/19 (Sat) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1969" onclick="return highlightReply(1969, event)" href="/agg/res/1969#1969">No.</a><a class="post_no" onclick="return citeReply(1969)" href="/agg/res/1969#q1969">1969</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1969">[Reply]</a></p><div class="body"><span class="quote">&gt;ota</span><br/><a href=https://gnfos.com/jp/res/369183.html>https://gnfos.com/jp/res/369183.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1968" data-board="agg"><div class="video-container" data-video="SPwaixIuTrU"><a href="https://youtu.be/SPwaixIuTrU" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/SPwaixIuTrU/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1968" ><p class="intro"><input type="checkbox" class="delete" name="delete_1968" id="delete_1968" /><label for="delete_1968"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T16:45:04Z">09/21/19 (Sat) 16:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1968" onclick="return highlightReply(1968, event)" href="/agg/res/1968#1968">No.</a><a class="post_no" onclick="return citeReply(1968)" href="/agg/res/1968#q1968">1968</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1968">[Reply]</a></p><div class="body">HAHAHAHAHAHA JORDAN CUCKERSTEIN ON SUICIDE WATCH!!!!<br/><a href=https://gnfos.com/jp/res/369164.html>https://gnfos.com/jp/res/369164.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1967" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569084005109.png">1569084005109.png</a> <span class="unimportant">(603.45 KB, 1280x720, <span class="postfilename">1499298073296.png</span>)</span></p><a href="/agg/src/1569084005109.png" target="_blank"><img class="post-image" src="/agg/thumb/1569084005109.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1967" ><p class="intro"><input type="checkbox" class="delete" name="delete_1967" id="delete_1967" /><label for="delete_1967"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T16:45:03Z">09/21/19 (Sat) 16:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1967" onclick="return highlightReply(1967, event)" href="/agg/res/1967#1967">No.</a><a class="post_no" onclick="return citeReply(1967)" href="/agg/res/1967#q1967">1967</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1967">[Reply]</a></p><div class="body">I&#39;M A /qa/ USER!<br/>I&#39;M ACTUALLY A NEWFAG THAT CAME IN FEBRUARY FROM SOME /jp/ "SPINOFF", BUT IF YOU MENTION THAT, I&#39;LL JUST THROW MY FAVORITE BUZZWORDS AT YOU! GO BACK THERE BASED BRONY BUTTHURT SPIC FROGPOSTER CONCERNBRO! YOU&#39;RE BUTTHURT! I HOPE YOU DON&#39;T MIND IF I SPAM YOUR THREAD WITH /jp/ IMAGE MACROS WHILE SAGING WITH EVERY POST! SAGE IS NOT A DOWNVOTE BAKA! IT DOESN&#39;T MATTER IF I&#39;M SPAMMING YOUR THREAD BECAUSE I DON&#39;T LIKE IT, I&#39;M STILL POLITELY SAGING! BY THE WAY, I&#39;M SO AUTISTIC THAT I ACTUALLY GIVE A SHIT ABOUT FILENAMES! YOUR IMAGE NAME STARTS WITH "149"? YOU MUST BE A NEWFAG! GO BACK THERE! THIS IS THE 2D/RANDOM BOARD! YOU&#39;RE NOT ALLOWED TO POST NON-/jp/ SHIT HERE, BUT WE STILL CLAIM THAT YOU ARE, EVEN THOUGH WE&#39;LL SHIT UP YOUR THREAD ANYWAY! OH, YOU SAID "WE"? THERE IS A CLEARLY DEFINED GROUP OF SPINOFF FAGS, BUT WE JUST PRETEND THAT "WE" DON&#39;T EXIST! HUH? YOU WANT TO MAKE /qa/ LIKE ITS OLD SELF? TOO BAD! /qa/ IS WHERE MY FRIENDS ARE! WE 2D/RANDOM POSTERS ARE HAVING FUN! WHY DO YOU HATE FUN? GO BACK! DIE, RETARD! YOU&#39;RE BUTTHURT! YOU CAN STILL POST META THREADS! BUT IF YOU DO, YOU&#39;LL GET TOLD TO GO BACK AND DIE AFTER WE SPAM YOUR THREAD! EVERYONE I DON&#39;T LIKE IS A BASED ____BRO! YOU&#39;RE Ron Paul IF YOU DON&#39;T AGREE! LET&#39;S JUST IGNORE THE FACT THAT HE&#39;S FROM /jp/ AND ITS SPINOFFS. I POST IN JAPANESE EVEN THOUGH 4CHAN IS AN AMERICAN MADE ENGLISH SPEAKING IMAGEBOARD! BASED! MODS DON&#39;T USE THIS BOARD EVEN THOUGH THEY DO! GO TO IRC OR FEEDBACK AND GET NO HELP WHATSOEVER! EVERYONE BELOW THIS LINE IS TROLLED! SO FUCKING BASED MY /jp/BRO! T. BUTTHURT! GO BACK! SO FUCKING BASED! WE SURE DID TROLL THAT BASED DISCORDBRO FROGBRO BRONYBRO! CONCERNBRO AT IT AGAIN! SAGED! GO BACK! BACK. Back. we post in all lowercase and with no punctuation<br/>based<br/>die retard<br/>t. butthurt spic<br/>based concernbro posting them frogs<br/>basedbasedbasedbased<br/>basedbasedbasedbasedbasedbasedbasedbased<br/><a href=https://gnfos.com/jp/res/369163.html>https://gnfos.com/jp/res/369163.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1966" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569071645862.jpg">1569071645862.jpg</a> <span class="unimportant">(488.76 KB, 1100x618, <span class="postfilename">Blade-Runner.jpg</span>)</span></p><a href="/agg/src/1569071645862.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569071645862.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1966" ><p class="intro"><input type="checkbox" class="delete" name="delete_1966" id="delete_1966" /><label for="delete_1966"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-21T13:15:03Z">09/21/19 (Sat) 13:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1966" onclick="return highlightReply(1966, event)" href="/agg/res/1966#1966">No.</a><a class="post_no" onclick="return citeReply(1966)" href="/agg/res/1966#q1966">1966</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1966">[Reply]</a></p><div class="body">Did you like it?<br/><a href=https://gnfos.com/jp/res/369135.html>https://gnfos.com/jp/res/369135.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1965" data-board="agg"><div class="video-container" data-video="xWxYIMxpWsM"><a href="https://youtu.be/xWxYIMxpWsM" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/xWxYIMxpWsM/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1965" ><p class="intro"><input type="checkbox" class="delete" name="delete_1965" id="delete_1965" /><label for="delete_1965"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T12:25:03Z">09/21/19 (Sat) 12:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1965" onclick="return highlightReply(1965, event)" href="/agg/res/1965#1965">No.</a><a class="post_no" onclick="return citeReply(1965)" href="/agg/res/1965#q1965">1965</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1965">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369129.html>https://gnfos.com/jp/res/369129.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1964" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569050686696.png">1569050686696.png</a> <span class="unimportant">(1.16 MB, 958x1200, <span class="postfilename" title="0986123ff0b15e0ebb37c75dadeef856.png">0986123ff0b15e0ebb37c75dad….png</span>)</span></p><a href="/agg/src/1569050686696.png" target="_blank"><img class="post-image" src="/agg/thumb/1569050686696.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1964" ><p class="intro"><input type="checkbox" class="delete" name="delete_1964" id="delete_1964" /><label for="delete_1964"><span class="name">Anonymous</span> <time datetime="2019-09-21T07:25:03Z">09/21/19 (Sat) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1964" onclick="return highlightReply(1964, event)" href="/agg/res/1964#1964">No.</a><a class="post_no" onclick="return citeReply(1964)" href="/agg/res/1964#q1964">1964</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1964">[Reply]</a></p><div class="body">Greetings from gnfos.com/jPISSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS<br/><a href=https://kissu.moe/qa/res/9908.html>https://kissu.moe/qa/res/9908.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1963" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569048991774.png">1569048991774.png</a> <span class="unimportant">(3.45 MB, 1920x1440, <span class="postfilename">thumb-1920-569355.png</span>)</span></p><a href="/agg/src/1569048991774.png" target="_blank"><img class="post-image" src="/agg/thumb/1569048991774.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1963" ><p class="intro"><input type="checkbox" class="delete" name="delete_1963" id="delete_1963" /><label for="delete_1963"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-21T07:00:05Z">09/21/19 (Sat) 07:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1963" onclick="return highlightReply(1963, event)" href="/agg/res/1963#1963">No.</a><a class="post_no" onclick="return citeReply(1963)" href="/agg/res/1963#q1963">1963</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1963">[Reply]</a></p><div class="body">What are some nice images to look at?<br/><a href=https://kissu.moe/qa/res/9901.html>https://kissu.moe/qa/res/9901.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1962" data-board="agg"><div class="video-container" data-video="tDdNDZkle3A"><a href="https://youtu.be/tDdNDZkle3A" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/tDdNDZkle3A/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1962" ><p class="intro"><input type="checkbox" class="delete" name="delete_1962" id="delete_1962" /><label for="delete_1962"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T06:30:04Z">09/21/19 (Sat) 06:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1962" onclick="return highlightReply(1962, event)" href="/agg/res/1962#1962">No.</a><a class="post_no" onclick="return citeReply(1962)" href="/agg/res/1962#q1962">1962</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1962">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369119.html>https://gnfos.com/jp/res/369119.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1961" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569046827900.png">1569046827900.png</a> <span class="unimportant">(176.38 KB, 700x840, <span class="postfilename" title="__akigumo_kantai_collection_drawn_by_kawashina_momen_silicon__e2df8311293e49c25d81a103228e73af.png">__akigumo_kantai_collectio….png</span>)</span></p><a href="/agg/src/1569046827900.png" target="_blank"><img class="post-image" src="/agg/thumb/1569046827900.png" style="width:200px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1961" ><p class="intro"><input type="checkbox" class="delete" name="delete_1961" id="delete_1961" /><label for="delete_1961"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T06:25:03Z">09/21/19 (Sat) 06:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1961" onclick="return highlightReply(1961, event)" href="/agg/res/1961#1961">No.</a><a class="post_no" onclick="return citeReply(1961)" href="/agg/res/1961#q1961">1961</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1961">[Reply]</a></p><div class="body">Bored and gay.....<br/><a href=https://gnfos.com/jp/res/369117.html>https://gnfos.com/jp/res/369117.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1960" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569043719838.png">1569043719838.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="78180EEC-0C9D-4E26-8863-63B6003B579B.png">78180EEC-0C9D-4E26-8863-63….png</span>)</span></p><a href="/agg/src/1569043719838.png" target="_blank"><img class="post-image" src="/agg/thumb/1569043719838.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1960" ><p class="intro"><input type="checkbox" class="delete" name="delete_1960" id="delete_1960" /><label for="delete_1960"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T05:30:04Z">09/21/19 (Sat) 05:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1960" onclick="return highlightReply(1960, event)" href="/agg/res/1960#1960">No.</a><a class="post_no" onclick="return citeReply(1960)" href="/agg/res/1960#q1960">1960</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1960">[Reply]</a></p><div class="body">I AM NOT A CUCK<br/><a href=https://gnfos.com/jp/res/369115.html>https://gnfos.com/jp/res/369115.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1959" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569042389932.png">1569042389932.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="8B2D86D8-8955-40B4-BCF0-F2D05152B23A.png">8B2D86D8-8955-40B4-BCF0-F2….png</span>)</span></p><a href="/agg/src/1569042389932.png" target="_blank"><img class="post-image" src="/agg/thumb/1569042389932.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1959" ><p class="intro"><input type="checkbox" class="delete" name="delete_1959" id="delete_1959" /><label for="delete_1959"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T05:10:03Z">09/21/19 (Sat) 05:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1959" onclick="return highlightReply(1959, event)" href="/agg/res/1959#1959">No.</a><a class="post_no" onclick="return citeReply(1959)" href="/agg/res/1959#q1959">1959</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1959">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369110.html>https://gnfos.com/jp/res/369110.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1958" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569040766218.png">1569040766218.png</a> <span class="unimportant">(712.54 KB, 1000x1100, <span class="postfilename" title="3b2abc0459051483151802125d051ff0.png">3b2abc0459051483151802125d….png</span>)</span></p><a href="/agg/src/1569040766218.png" target="_blank"><img class="post-image" src="/agg/thumb/1569040766218.png" style="width:232px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1958" ><p class="intro"><input type="checkbox" class="delete" name="delete_1958" id="delete_1958" /><label for="delete_1958"><span class="name">Anonymous</span> <time datetime="2019-09-21T04:40:03Z">09/21/19 (Sat) 04:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1958" onclick="return highlightReply(1958, event)" href="/agg/res/1958#1958">No.</a><a class="post_no" onclick="return citeReply(1958)" href="/agg/res/1958#q1958">1958</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1958">[Reply]</a></p><div class="body"><span class="quote">&gt;excuse me kissu, but where are the corndogs?</span><br/><a href=https://kissu.moe/qa/res/9801.html>https://kissu.moe/qa/res/9801.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1957" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569038692515.png">1569038692515.png</a> <span class="unimportant">(155.13 KB, 485x797, <span class="postfilename" title="e7b3f3fb5a1f31f8cf3dcf25dabb801693141a9b.png">e7b3f3fb5a1f31f8cf3dcf25da….png</span>)</span></p><a href="/agg/src/1569038692515.png" target="_blank"><img class="post-image" src="/agg/thumb/1569038692515.png" style="width:155px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1957" ><p class="intro"><input type="checkbox" class="delete" name="delete_1957" id="delete_1957" /><label for="delete_1957"><span class="name">Anonymous</span> <time datetime="2019-09-21T04:05:03Z">09/21/19 (Sat) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1957" onclick="return highlightReply(1957, event)" href="/agg/res/1957#1957">No.</a><a class="post_no" onclick="return citeReply(1957)" href="/agg/res/1957#q1957">1957</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1957">[Reply]</a></p><div class="body">friday night oj with your friends!<br/><br/>100% /qa/<br/>friends<br/><a href=https://kissu.moe/qa/res/9799.html>https://kissu.moe/qa/res/9799.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1956" data-board="agg"><div class="video-container" data-video="rR15EKRlU8U"><a href="https://youtu.be/rR15EKRlU8U" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/rR15EKRlU8U/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1956" ><p class="intro"><input type="checkbox" class="delete" name="delete_1956" id="delete_1956" /><label for="delete_1956"><span class="name">Tada Banri</span> <time datetime="2019-09-21T03:55:03Z">09/21/19 (Sat) 03:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1956" onclick="return highlightReply(1956, event)" href="/agg/res/1956#1956">No.</a><a class="post_no" onclick="return citeReply(1956)" href="/agg/res/1956#q1956">1956</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1956">[Reply]</a></p><div class="body">Bruh Jordan person is a fucking druggie LMAO nigga need to clean his room<br/><a href=https://gnfos.com/jp/res/369105.html>https://gnfos.com/jp/res/369105.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1955" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569036362806.jpeg">1569036362806.jpeg</a> <span class="unimportant">(86.79 KB, 750x377, <span class="postfilename" title="895B4CB0-7CFB-471F-8295-EA671C9B8B20.jpeg">895B4CB0-7CFB-471F-8295-E….jpeg</span>)</span></p><a href="/agg/src/1569036362806.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569036362806.jpeg" style="width:427px;height:215px" alt="" /></a></div>    </div>    <div class="post op" id="op_1955" ><p class="intro"><input type="checkbox" class="delete" name="delete_1955" id="delete_1955" /><label for="delete_1955"><span class="name">Tada Banri</span> <time datetime="2019-09-21T03:30:03Z">09/21/19 (Sat) 03:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1955" onclick="return highlightReply(1955, event)" href="/agg/res/1955#1955">No.</a><a class="post_no" onclick="return citeReply(1955)" href="/agg/res/1955#q1955">1955</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1955">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369104.html>https://gnfos.com/jp/res/369104.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1954" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569032528794.jpg">1569032528794.jpg</a> <span class="unimportant">(230.92 KB, 1797x1011, <span class="postfilename" title="mpc-hc64_2019-09-20_21-19-52.jpg">mpc-hc64_2019-09-20_21-19-….jpg</span>)</span></p><a href="/agg/src/1569032528794.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569032528794.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1954" ><p class="intro"><input type="checkbox" class="delete" name="delete_1954" id="delete_1954" /><label for="delete_1954"><span class="name">Anonymous</span> <time datetime="2019-09-21T02:25:03Z">09/21/19 (Sat) 02:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1954" onclick="return highlightReply(1954, event)" href="/agg/res/1954#1954">No.</a><a class="post_no" onclick="return citeReply(1954)" href="/agg/res/1954#q1954">1954</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1954">[Reply]</a></p><div class="body">Finally going to watch the Higurashi fanservice OVA. I had no idea that&#39;s what this song was from<br/><a href=https://kissu.moe/qa/res/9788.html>https://kissu.moe/qa/res/9788.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1953" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569026582114.jpg">1569026582114.jpg</a> <span class="unimportant">(275.76 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Enen no Shouboutai - 11 [1080p].mkv_snapshot_00.15_[2019.09.20_19.41.05].jpg">[HorribleSubs] Enen no Sho….jpg</span>)</span></p><a href="/agg/src/1569026582114.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569026582114.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1953" ><p class="intro"><input type="checkbox" class="delete" name="delete_1953" id="delete_1953" /><label for="delete_1953"><span class="name">Anonymous</span> <time datetime="2019-09-21T00:45:03Z">09/21/19 (Sat) 00:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1953" onclick="return highlightReply(1953, event)" href="/agg/res/1953#1953">No.</a><a class="post_no" onclick="return citeReply(1953)" href="/agg/res/1953#q1953">1953</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1953">[Reply]</a></p><div class="body">they see your /qa/<br/><a href=https://kissu.moe/qa/res/9780.html>https://kissu.moe/qa/res/9780.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1952" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569025229863.jpg">1569025229863.jpg</a> <span class="unimportant">(81.09 KB, 931x859, <span class="postfilename">1562025214261.jpg</span>)</span></p><a href="/agg/src/1569025229863.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569025229863.png" style="width:255px;height:235px" alt="" /></a></div>    </div>    <div class="post op" id="op_1952" ><p class="intro"><input type="checkbox" class="delete" name="delete_1952" id="delete_1952" /><label for="delete_1952"><span class="name">Anonymous</span> <time datetime="2019-09-21T00:25:04Z">09/21/19 (Sat) 00:25:04</time></label>&nbsp;<a class="post_no" id="post_no_1952" onclick="return highlightReply(1952, event)" href="/agg/res/1952#1952">No.</a><a class="post_no" onclick="return citeReply(1952)" href="/agg/res/1952#q1952">1952</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1952">[Reply]</a></p><div class="body">ぽゃ〜<br/><a href=https://kissu.moe/qa/res/9775.html>https://kissu.moe/qa/res/9775.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1951" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569023876287.png">1569023876287.png</a> <span class="unimportant">(486.99 KB, 563x900, <span class="postfilename" title="fec534283f02badfdcc117e2b84e19af.png">fec534283f02badfdcc117e2b8….png</span>)</span></p><a href="/agg/src/1569023876287.png" target="_blank"><img class="post-image" src="/agg/thumb/1569023876287.png" style="width:160px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1951" ><p class="intro"><input type="checkbox" class="delete" name="delete_1951" id="delete_1951" /><label for="delete_1951"><span class="name">Anonymous</span> <time datetime="2019-09-21T00:00:04Z">09/21/19 (Sat) 00:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1951" onclick="return highlightReply(1951, event)" href="/agg/res/1951#1951">No.</a><a class="post_no" onclick="return citeReply(1951)" href="/agg/res/1951#q1951">1951</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1951">[Reply]</a></p><div class="body">fuck /qa]<br/><a href=https://kissu.moe/qa/res/9767.html>https://kissu.moe/qa/res/9767.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/9" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a class="selected">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/11" method="get"><input type="submit" value="Next" /></form>
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