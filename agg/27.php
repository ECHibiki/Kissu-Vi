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
			<img class="board_image" src="/static/banners/banner-kissu-25.jpg" alt="" />	<header>
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
<input style="display:none" type="text" value="f#⚈/ ♬3&#125;{QD&#116;7\+d&#53;:&#89;@⚒&#66;vV&#84;&#45;s&#101;pZ$&#126;]&#73;U;S^&#110;hX!9K[)mu&lt;&#78;(W8♛&#62;xr&#111;&#50;" name="firstname">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/&#91;&#76;&#72;&#32;&#74;i:`!;C&#43;6\oT&lt;&#56;Ob&#73;|?X]&#100;.2☨&#123;tW5 c⚱1B&#61;k@9(3Ng☮*}&#52;'&#80;&#81;-M&#86;⚯&#48;&#75;D7u&#115;j" name="login" >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value=" f♻⛭♃9&#47;&#113;&#122;wZ&#107;&#46;@h&#124;;&#36;LF⛡&#109;dv&#44;&#69;R&#56;3W%1YIM^iU☌&#53;☍+&#65;g☪T=&#96;}⚑yc&#55;J⛮&#80;&#35;b?⚤6X&amp;{Dx &#92;4&#78;pKHn&#58;)" name="q" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></div>
			
			
				
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
		<div class="thread" id="thread_1629" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567200754086.gif">1567200754086.gif</a> <span class="unimportant">(85.86 KB, 500x281, <span class="postfilename">1527369816215.gif</span>)</span></p><a href="/agg/src/1567200754086.gif" target="_blank"><img class="post-image" src="/agg/thumb/1567200754086.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1629" ><p class="intro"><input type="checkbox" class="delete" name="delete_1629" id="delete_1629" /><label for="delete_1629"><span class="name">Anonymous</span> <time datetime="2019-08-30T21:35:03Z">08/30/19 (Fri) 21:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1629" onclick="return highlightReply(1629, event)" href="/agg/res/1629#1629">No.</a><a class="post_no" onclick="return citeReply(1629)" href="/agg/res/1629#q1629">1629</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1629">[Reply]</a></p><div class="body">this poor bird accidentally looked directly into the /qa/ dream<br/><a href=https://kissu.moe/qa/res/6718.html>https://kissu.moe/qa/res/6718.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1628" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567200657798.jpg">1567200657798.jpg</a> <span class="unimportant">(40.65 KB, 272x427, <span class="postfilename" title="Or+if+theyre+a+pet+with+a+strapon+3+_064d71cf680d84166316da485f14a127.jpg">Or+if+theyre+a+pet+with+a+….jpg</span>)</span></p><a href="/agg/src/1567200657798.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567200657798.png" style="width:162px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1628" ><p class="intro"><input type="checkbox" class="delete" name="delete_1628" id="delete_1628" /><label for="delete_1628"><span class="name">Anonymous</span> <time datetime="2019-08-30T21:35:03Z">08/30/19 (Fri) 21:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1628" onclick="return highlightReply(1628, event)" href="/agg/res/1628#1628">No.</a><a class="post_no" onclick="return citeReply(1628)" href="/agg/res/1628#q1628">1628</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1628">[Reply]</a></p><div class="body">How many cucks does it take to screw in a lightbulb?<br/><br/>None, they prefer to watch someone else screw it in LMAOOOOOOOOOOOOOOOOOOOOOO<br/><a href=https://kissu.moe/qa/res/6717.html>https://kissu.moe/qa/res/6717.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1627" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567198591755.jpg">1567198591755.jpg</a> <span class="unimportant">(26.22 KB, 450x337, <span class="postfilename">cat20typing.jpg</span>)</span></p><a href="/agg/src/1567198591755.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567198591755.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1627" ><p class="intro"><input type="checkbox" class="delete" name="delete_1627" id="delete_1627" /><label for="delete_1627"><span class="name">Anonymous</span> <time datetime="2019-08-30T21:00:03Z">08/30/19 (Fri) 21:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1627" onclick="return highlightReply(1627, event)" href="/agg/res/1627#1627">No.</a><a class="post_no" onclick="return citeReply(1627)" href="/agg/res/1627#q1627">1627</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1627">[Reply]</a></p><div class="body"><span class="quote">&gt;Yeah, I hate niggers. How could you tell?</span><br/><a href=https://kissu.moe/qa/res/6712.html>https://kissu.moe/qa/res/6712.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1626" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567197142824.jpg">1567197142824.jpg</a> <span class="unimportant">(173.87 KB, 550x856, <span class="postfilename" title="yuu-mental-clinic-mental-health-through-manga-lolicon-vs-pedophilia-001.jpg">yuu-mental-clinic-mental-h….jpg</span>)</span></p><a href="/agg/src/1567197142824.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567197142824.png" style="width:164px;height:254px" alt="" /></a></div>    </div>    <div class="post op" id="op_1626" ><p class="intro"><input type="checkbox" class="delete" name="delete_1626" id="delete_1626" /><label for="delete_1626"><span class="name">Anonymous</span> <time datetime="2019-08-30T20:35:03Z">08/30/19 (Fri) 20:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1626" onclick="return highlightReply(1626, event)" href="/agg/res/1626#1626">No.</a><a class="post_no" onclick="return citeReply(1626)" href="/agg/res/1626#q1626">1626</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1626">[Reply]</a></p><div class="body">important lesson for kissu<br/><a href=https://kissu.moe/qa/res/6702.html>https://kissu.moe/qa/res/6702.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1625" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567196879918.jpg">1567196879918.jpg</a> <span class="unimportant">(33.39 KB, 128x128, <span class="postfilename">1567192349136.jpg</span>)</span></p><a href="/agg/src/1567196879918.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567196879918.png" style="width:128px;height:128px" alt="" /></a></div>    </div>    <div class="post op" id="op_1625" ><p class="intro"><input type="checkbox" class="delete" name="delete_1625" id="delete_1625" /><label for="delete_1625"><span class="name">Anonymous</span> <time datetime="2019-08-30T20:30:03Z">08/30/19 (Fri) 20:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1625" onclick="return highlightReply(1625, event)" href="/agg/res/1625#1625">No.</a><a class="post_no" onclick="return citeReply(1625)" href="/agg/res/1625#q1625">1625</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1625">[Reply]</a></p><div class="body">cummed<br/><a href=https://kissu.moe/qa/res/6698.html>https://kissu.moe/qa/res/6698.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1624" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567195213853.png">1567195213853.png</a> <span class="unimportant">(208.21 KB, 285x284, <span class="postfilename">f55952bef3.png</span>)</span></p><a href="/agg/src/1567195213853.png" target="_blank"><img class="post-image" src="/agg/thumb/1567195213853.png" style="width:255px;height:254px" alt="" /></a></div>    </div>    <div class="post op" id="op_1624" ><p class="intro"><input type="checkbox" class="delete" name="delete_1624" id="delete_1624" /><label for="delete_1624"><span class="name">Anonymous</span> <time datetime="2019-08-30T20:05:03Z">08/30/19 (Fri) 20:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1624" onclick="return highlightReply(1624, event)" href="/agg/res/1624#1624">No.</a><a class="post_no" onclick="return citeReply(1624)" href="/agg/res/1624#q1624">1624</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1624">[Reply]</a></p><div class="body">megumin movie soon<br/><a href=https://kissu.moe/qa/res/6693.html>https://kissu.moe/qa/res/6693.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1623" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567191608700.jpg">1567191608700.jpg</a> <span class="unimportant">(688.07 KB, 1280x720, <span class="postfilename" title="[Erai-raws] Machikado Mazoku - 08 [720p].mkv_snapshot_10.39.658.jpg">[Erai-raws] Machikado Mazo….jpg</span>)</span></p><a href="/agg/src/1567191608700.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567191608700.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1623" ><p class="intro"><input type="checkbox" class="delete" name="delete_1623" id="delete_1623" /><label for="delete_1623"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-30T19:05:03Z">08/30/19 (Fri) 19:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1623" onclick="return highlightReply(1623, event)" href="/agg/res/1623#1623">No.</a><a class="post_no" onclick="return citeReply(1623)" href="/agg/res/1623#q1623">1623</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1623">[Reply]</a></p><div class="body">Mikan is CUUUUUUUUUUUUUUUUUUUUUUTE!!!!!!!!!<br/><a href=https://kissu.moe/qa/res/6677.html>https://kissu.moe/qa/res/6677.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1622" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567191249109.jpg">1567191249109.jpg</a> <span class="unimportant">(332.96 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] THE iDOLM@STER CINDERELLA GIRLS - 04 [720p].mkv_snapshot_19.43_[2017.04.17_21.42.45].jpg">[HorribleSubs] THE iDOLM@S….jpg</span>)</span></p><a href="/agg/src/1567191249109.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567191249109.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1622" ><p class="intro"><input type="checkbox" class="delete" name="delete_1622" id="delete_1622" /><label for="delete_1622"><span class="name">Anonymous</span> <time datetime="2019-08-30T18:55:04Z">08/30/19 (Fri) 18:55:04</time></label>&nbsp;<a class="post_no" id="post_no_1622" onclick="return highlightReply(1622, event)" href="/agg/res/1622#1622">No.</a><a class="post_no" onclick="return citeReply(1622)" href="/agg/res/1622#q1622">1622</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1622">[Reply]</a></p><div class="body">If classic WoW is such a good and challenging game, how come somebody already got to 60 in just 4 days?<br/><a href=https://kissu.moe/qa/res/6674.html>https://kissu.moe/qa/res/6674.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1621" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567188764335.jpg">1567188764335.jpg</a> <span class="unimportant">(111.4 KB, 1024x768, <span class="postfilename">maki_pointing.jpg</span>)</span></p><a href="/agg/src/1567188764335.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567188764335.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1621" ><p class="intro"><input type="checkbox" class="delete" name="delete_1621" id="delete_1621" /><label for="delete_1621"><span class="name">Anonymous</span> <time datetime="2019-08-30T18:15:03Z">08/30/19 (Fri) 18:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1621" onclick="return highlightReply(1621, event)" href="/agg/res/1621#1621">No.</a><a class="post_no" onclick="return citeReply(1621)" href="/agg/res/1621#q1621">1621</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1621">[Reply]</a></p><div class="body">sorry pissman, but these quads are for maki<br/><a href=https://kissu.moe/qa/res/6666.html>https://kissu.moe/qa/res/6666.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1620" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567187396626.jpg">1567187396626.jpg</a> <span class="unimportant">(385.87 KB, 1326x1800, <span class="postfilename" title="08796025bff1ee999bd624b8d9e82a97.jpg">08796025bff1ee999bd624b8d9….jpg</span>)</span></p><a href="/agg/src/1567187396626.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567187396626.png" style="width:188px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1620" ><p class="intro"><input type="checkbox" class="delete" name="delete_1620" id="delete_1620" /><label for="delete_1620"><span class="name">Anonymous</span> <time datetime="2019-08-30T17:50:03Z">08/30/19 (Fri) 17:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1620" onclick="return highlightReply(1620, event)" href="/agg/res/1620#1620">No.</a><a class="post_no" onclick="return citeReply(1620)" href="/agg/res/1620#q1620">1620</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1620">[Reply]</a></p><div class="body">Does /qa/ have any pets?<br/><a href=https://kissu.moe/qa/res/6663.html>https://kissu.moe/qa/res/6663.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1619" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567186349523.jpg">1567186349523.jpg</a> <span class="unimportant">(59.66 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Devilman Crybaby - 01 [720p].mkv_snapshot_19.18_[2018.01.07_18.42.56].jpg">[HorribleSubs] Devilman Cr….jpg</span>)</span></p><a href="/agg/src/1567186349523.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567186349523.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1619" ><p class="intro"><input type="checkbox" class="delete" name="delete_1619" id="delete_1619" /><label for="delete_1619"><span class="name">Anonymous</span> <time datetime="2019-08-30T17:35:03Z">08/30/19 (Fri) 17:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1619" onclick="return highlightReply(1619, event)" href="/agg/res/1619#1619">No.</a><a class="post_no" onclick="return citeReply(1619)" href="/agg/res/1619#q1619">1619</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1619">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/6661.html>https://kissu.moe/qa/res/6661.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1618" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567183837031.jpg">1567183837031.jpg</a> <span class="unimportant">(131.15 KB, 521x587, <span class="postfilename">1537813674244.jpg</span>)</span></p><a href="/agg/src/1567183837031.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567183837031.png" style="width:226px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1618" ><p class="intro"><input type="checkbox" class="delete" name="delete_1618" id="delete_1618" /><label for="delete_1618"><span class="name">Anonymous</span> <time datetime="2019-08-30T16:55:03Z">08/30/19 (Fri) 16:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1618" onclick="return highlightReply(1618, event)" href="/agg/res/1618#1618">No.</a><a class="post_no" onclick="return citeReply(1618)" href="/agg/res/1618#q1618">1618</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1618">[Reply]</a></p><div class="body">Bolivia<br/><a href=https://kissu.moe/qa/res/6655.html>https://kissu.moe/qa/res/6655.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1617" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567183356383.jpg">1567183356383.jpg</a> <span class="unimportant">(72.78 KB, 850x1275, <span class="postfilename">man.jpg</span>)</span></p><a href="/agg/src/1567183356383.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567183356383.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1617" ><p class="intro"><input type="checkbox" class="delete" name="delete_1617" id="delete_1617" /><label for="delete_1617"><span class="name">Anonymous</span> <time datetime="2019-08-30T16:45:03Z">08/30/19 (Fri) 16:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1617" onclick="return highlightReply(1617, event)" href="/agg/res/1617#1617">No.</a><a class="post_no" onclick="return citeReply(1617)" href="/agg/res/1617#q1617">1617</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1617">[Reply]</a></p><div class="body">why is japanese cunny so big?<br/><a href=http://what-ch.mooo.com/what/res/2356.html>http://what-ch.mooo.com/what/res/2356.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1616" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567174327219.jpg">1567174327219.jpg</a> <span class="unimportant">(131.07 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Joshikousei no Mudazukai - 09 [720p].mkv_snapshot_13.43_[2019.08.30_07.56.18].jpg">[HorribleSubs] Joshikousei….jpg</span>)</span></p><a href="/agg/src/1567174327219.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567174327219.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1616" ><p class="intro"><input type="checkbox" class="delete" name="delete_1616" id="delete_1616" /><label for="delete_1616"><span class="name">Anonymous</span> <time datetime="2019-08-30T14:15:03Z">08/30/19 (Fri) 14:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1616" onclick="return highlightReply(1616, event)" href="/agg/res/1616#1616">No.</a><a class="post_no" onclick="return citeReply(1616)" href="/agg/res/1616#q1616">1616</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1616">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6642.html>https://kissu.moe/qa/res/6642.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1615" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567171975554.png">1567171975554.png</a> <span class="unimportant">(1.16 MB, 1094x1795, <span class="postfilename" title="b5352afc1b0552c00a7b97718147e7f4.png">b5352afc1b0552c00a7b977181….png</span>)</span></p><a href="/agg/src/1567171975554.png" target="_blank"><img class="post-image" src="/agg/thumb/1567171975554.png" style="width:155px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1615" ><p class="intro"><input type="checkbox" class="delete" name="delete_1615" id="delete_1615" /><label for="delete_1615"><span class="name">Anonymous</span> <time datetime="2019-08-30T13:35:02Z">08/30/19 (Fri) 13:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1615" onclick="return highlightReply(1615, event)" href="/agg/res/1615#1615">No.</a><a class="post_no" onclick="return citeReply(1615)" href="/agg/res/1615#q1615">1615</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1615">[Reply]</a></p><div class="body">A new day has dawned!<br/><a href=https://kissu.moe/qa/res/6640.html>https://kissu.moe/qa/res/6640.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1614" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567165774869.png">1567165774869.png</a> <span class="unimportant">(49.57 KB, 582x178, <span class="postfilename">divine punishment.png</span>)</span></p><a href="/agg/src/1567165774869.png" target="_blank"><img class="post-image" src="/agg/thumb/1567165774869.png" style="width:255px;height:78px" alt="" /></a></div>    </div>    <div class="post op" id="op_1614" ><p class="intro"><input type="checkbox" class="delete" name="delete_1614" id="delete_1614" /><label for="delete_1614"><span class="name">Anonymous</span> <time datetime="2019-08-30T11:50:03Z">08/30/19 (Fri) 11:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1614" onclick="return highlightReply(1614, event)" href="/agg/res/1614#1614">No.</a><a class="post_no" onclick="return citeReply(1614)" href="/agg/res/1614#q1614">1614</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1614">[Reply]</a></p><div class="body">Ever since I laid my eyes on you, I have always...thought it would be nice...<br/><a href=https://kissu.moe/qa/res/6636.html>https://kissu.moe/qa/res/6636.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1613" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567161518274.png">1567161518274.png</a> <span class="unimportant">(85.45 KB, 540x480, <span class="postfilename">thinkin bout sittin.png</span>)</span></p><a href="/agg/src/1567161518274.png" target="_blank"><img class="post-image" src="/agg/thumb/1567161518274.png" style="width:255px;height:227px" alt="" /></a></div>    </div>    <div class="post op" id="op_1613" ><p class="intro"><input type="checkbox" class="delete" name="delete_1613" id="delete_1613" /><label for="delete_1613"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-30T10:40:04Z">08/30/19 (Fri) 10:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1613" onclick="return highlightReply(1613, event)" href="/agg/res/1613#1613">No.</a><a class="post_no" onclick="return citeReply(1613)" href="/agg/res/1613#q1613">1613</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1613">[Reply]</a></p><div class="body">im feline fine<br/><a href=https://kissu.moe/qa/res/6632.html>https://kissu.moe/qa/res/6632.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1612" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567141691108.jpg">1567141691108.jpg</a> <span class="unimportant">(307.55 KB, 1086x1206, <span class="postfilename">Mississippi_Kite.jpg</span>)</span></p><a href="/agg/src/1567141691108.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567141691108.png" style="width:230px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1612" ><p class="intro"><input type="checkbox" class="delete" name="delete_1612" id="delete_1612" /><label for="delete_1612"><span class="name">Anonymous</span> <time datetime="2019-08-30T05:10:08Z">08/30/19 (Fri) 05:10:08</time></label>&nbsp;<a class="post_no" id="post_no_1612" onclick="return highlightReply(1612, event)" href="/agg/res/1612#1612">No.</a><a class="post_no" onclick="return citeReply(1612)" href="/agg/res/1612#q1612">1612</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1612">[Reply]</a></p><div class="body">I saw <strong>FIVE</strong> of these guys outside on the telephone line today.<br/>One of them was smaller than the others, definitely a child from one of the pairs. This is what they sound like: <a href="https://www.youtube.com/watch?v=vUY_JuyRwAo" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=vUY_JuyRwAo</a><br/>It&#39;s pretty weird, last year was the first time one ever showed up here, and now there&#39;s five.<br/><br/>Do you have any cool stuff around you happening?<br/><a href=https://kissu.moe/qa/res/6609.html>https://kissu.moe/qa/res/6609.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1611" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567138327367.jpg">1567138327367.jpg</a> <span class="unimportant">(5.34 KB, 240x240, <span class="postfilename">1503855707381s.jpg</span>)</span></p><a href="/agg/src/1567138327367.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567138327367.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1611" ><p class="intro"><input type="checkbox" class="delete" name="delete_1611" id="delete_1611" /><label for="delete_1611"><span class="name">Anonymous</span> <time datetime="2019-08-30T04:15:03Z">08/30/19 (Fri) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1611" onclick="return highlightReply(1611, event)" href="/agg/res/1611#1611">No.</a><a class="post_no" onclick="return citeReply(1611)" href="/agg/res/1611#q1611">1611</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1611">[Reply]</a></p><div class="body">what would happen if you uploaded a video about Tiananmen Square on bilibili?<br/><a href=http://what-ch.mooo.com/what/res/2353.html>http://what-ch.mooo.com/what/res/2353.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1610" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567137316420.png">1567137316420.png</a> <span class="unimportant">(1.92 MB, 1680x1050, <span class="postfilename" title="100orange_2019-08-29_20-07-13.png">100orange_2019-08-29_20-07….png</span>)</span></p><a href="/agg/src/1567137316420.png" target="_blank"><img class="post-image" src="/agg/thumb/1567137316420.png" style="width:255px;height:159px" alt="" /></a></div>    </div>    <div class="post op" id="op_1610" ><p class="intro"><input type="checkbox" class="delete" name="delete_1610" id="delete_1610" /><label for="delete_1610"><span class="name">Anonymous</span> <time datetime="2019-08-30T04:00:05Z">08/30/19 (Fri) 04:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1610" onclick="return highlightReply(1610, event)" href="/agg/res/1610#1610">No.</a><a class="post_no" onclick="return citeReply(1610)" href="/agg/res/1610#q1610">1610</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1610">[Reply]</a></p><div class="body">We are the Godslayers. The ones who were cast out of paradise, returning to strike at the almighty.<br/>I am become Poppo, the destroyer of worlds<br/><a href=https://kissu.moe/qa/res/6598.html>https://kissu.moe/qa/res/6598.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/26" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a class="selected">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/28" method="get"><input type="submit" value="Next" /></form>
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