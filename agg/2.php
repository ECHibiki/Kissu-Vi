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
			<img class="board_image" src="/static/banners/banner-kissu-15.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="text" value="qmsSY[vpLH&#50;&#80;\&#49;y&#64;b,&#107;_" type="hidden">
<input type="hidden" value="f#⚈/ &#9836;3}{&#81;D&#116;7\+d5&#58;Y@⚒&#66;v&#86;T-&#115;epZ$~]IU;&#83;&#94;nhX&#33;9K&#91;)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<input name="login" value="&#47;[LH&#32;J&#105;:`&#33;&#59;C+6\oT&lt;&#56;ObI|?X]d.2&#9768;{tW5 c&#9905;1B=&#107;@9(3Ng☮&#42;}4'P&#81;&#45;MV&#9903;0KD7&#117;&#115;&#106;" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input   style="display:none"   type="text"   value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["   name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="y0kh38z9do♒sb"  >pN+&#62;8&#60;&#113;G&#47;&#54;d☎,&#39;F%;s&#9896;iAE&#33;Ruo&#80;K♿S}_☬&#86;(&#45;c^&#92;{QCD~⛼m⛰lx&#96;[a40.&#85;kb&#90;W⚈&#35;*)L&#119;M:|&#114;⛍]2y&#64;☪n&amp;5Y&#57;♪&#84; j1&#102;7$&#51;=</textarea  >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="search" value="b☵#Y{7&#96;9J⚴&#64;V^6_&#45;"></div>
			
			
				
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
		<div class="thread" id="thread_2130" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569387802164.png">1569387802164.png</a> <span class="unimportant">(344.63 KB, 680x962, <span class="postfilename">1535150378027.png</span>)</span></p><a href="/agg/src/1569387802164.png" target="_blank"><img class="post-image" src="/agg/thumb/1569387802164.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2130" ><p class="intro"><input type="checkbox" class="delete" name="delete_2130" id="delete_2130" /><label for="delete_2130"><span class="name">Anonymous</span> <time datetime="2019-09-25T05:05:03Z">09/25/19 (Wed) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2130" onclick="return highlightReply(2130, event)" href="/agg/res/2130#2130">No.</a><a class="post_no" onclick="return citeReply(2130)" href="/agg/res/2130#q2130">2130</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2130">[Reply]</a></p><div class="body">Why is there no activity anywhere tonight, I don&#39;t like this. Please, someone help<br/><a href=https://kissu.moe/qa/res/10485.html>https://kissu.moe/qa/res/10485.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2129" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569376067693.png">1569376067693.png</a> <span class="unimportant">(1.07 MB, 1150x1500, <span class="postfilename" title="eb011c73b652d493833e6f2c99185501.png">eb011c73b652d493833e6f2c99….png</span>)</span></p><a href="/agg/src/1569376067693.png" target="_blank"><img class="post-image" src="/agg/thumb/1569376067693.png" style="width:196px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2129" ><p class="intro"><input type="checkbox" class="delete" name="delete_2129" id="delete_2129" /><label for="delete_2129"><span class="name">Anonymous</span> <time datetime="2019-09-25T01:50:03Z">09/25/19 (Wed) 01:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2129" onclick="return highlightReply(2129, event)" href="/agg/res/2129#2129">No.</a><a class="post_no" onclick="return citeReply(2129)" href="/agg/res/2129#q2129">2129</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2129">[Reply]</a></p><div class="body">You like muscles, right, anon? Right?<br/><a href=https://kissu.moe/qa/res/10481.html>https://kissu.moe/qa/res/10481.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2128" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569371356348.png">1569371356348.png</a> <span class="unimportant">(179.91 KB, 402x469, <span class="postfilename">1496153927936.png</span>)</span></p><a href="/agg/src/1569371356348.png" target="_blank"><img class="post-image" src="/agg/thumb/1569371356348.png" style="width:219px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2128" ><p class="intro"><input type="checkbox" class="delete" name="delete_2128" id="delete_2128" /><label for="delete_2128"><span class="name">Anonymous</span> <time datetime="2019-09-25T00:30:03Z">09/25/19 (Wed) 00:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2128" onclick="return highlightReply(2128, event)" href="/agg/res/2128#2128">No.</a><a class="post_no" onclick="return citeReply(2128)" href="/agg/res/2128#q2128">2128</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2128">[Reply]</a></p><div class="body">Is there any media which you don&#39;t pirate?<br/><a href=https://kissu.moe/qa/res/10470.html>https://kissu.moe/qa/res/10470.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2127" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569369946915.jpg">1569369946915.jpg</a> <span class="unimportant">(189.68 KB, 1000x1024, <span class="postfilename">arc.jpg</span>)</span></p><a href="/agg/src/1569369946915.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569369946915.png" style="width:249px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2127" ><p class="intro"><input type="checkbox" class="delete" name="delete_2127" id="delete_2127" /><label for="delete_2127"><span class="name">Anonymous</span> <time datetime="2019-09-25T00:10:03Z">09/25/19 (Wed) 00:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2127" onclick="return highlightReply(2127, event)" href="/agg/res/2127#2127">No.</a><a class="post_no" onclick="return citeReply(2127)" href="/agg/res/2127#q2127">2127</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2127">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/10463.html>https://kissu.moe/qa/res/10463.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2126" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569366673924.jpg">1569366673924.jpg</a> <span class="unimportant">(669.73 KB, 1000x1272, <span class="postfilename">Ibuki.Suika.full.1780976.jpg</span>)</span></p><a href="/agg/src/1569366673924.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569366673924.png" style="width:200px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2126" ><p class="intro"><input type="checkbox" class="delete" name="delete_2126" id="delete_2126" /><label for="delete_2126"><span class="name">Anonymous</span> <time datetime="2019-09-24T23:15:03Z">09/24/19 (Tue) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2126" onclick="return highlightReply(2126, event)" href="/agg/res/2126#2126">No.</a><a class="post_no" onclick="return citeReply(2126)" href="/agg/res/2126#q2126">2126</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2126">[Reply]</a></p><div class="body">Theres a 90% probability im going to marry my japanese hooker girlfriend. its either that, or i will be single for life and just fuck more hookers.<br/><br/>Im dedicating so much time and money&ndash; <br/>And its just. I mean, i am fucking flying across the country,<br/><br/>Im not doing that shit with a chink girl at college. Like, i already spent a bunch of money. No way im going through this shit again, nothing will top it.<br/>And its JUST<br/><br/>Most yellow fever anons my age, get their first nerdy asian girlfriend in college, from like math or something<br/>that, or theyre incels<br/>Millionaires i know my age dont marry their hoes. They end up marrying some norm girl. I know the guy whos the Hit or Miss girl&#39;s boyfriend. (both from florida)<br/>But not me<br/>Not fucking Varappi, I have to go and marry a fucking japanese hooker. One, i have to fucking pay with my crypto to meet.<br/>hell, most people in long distance have to wait fucking half years or a whole year. Not ol&#39; fucking varappi.<br/><br/><span class="toolong">Post too long. Click <a href="/agg/res/2126#2126">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2125" data-board="agg"><div class="video-container" data-video="BUPU5js6SvI"><a href="https://youtu.be/BUPU5js6SvI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/BUPU5js6SvI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2125" ><p class="intro"><input type="checkbox" class="delete" name="delete_2125" id="delete_2125" /><label for="delete_2125"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-24T21:15:04Z">09/24/19 (Tue) 21:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2125" onclick="return highlightReply(2125, event)" href="/agg/res/2125#2125">No.</a><a class="post_no" onclick="return citeReply(2125)" href="/agg/res/2125#q2125">2125</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2125">[Reply]</a></p><div class="body">gn theme<br/><a href=https://gnfos.com/jp/res/369543.html>https://gnfos.com/jp/res/369543.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2124" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569359405246.png">1569359405246.png</a> <span class="unimportant">(61.87 KB, 595x671, <span class="postfilename">1569103323807.png</span>)</span></p><a href="/agg/src/1569359405246.png" target="_blank"><img class="post-image" src="/agg/thumb/1569359405246.png" style="width:213px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2124" ><p class="intro"><input type="checkbox" class="delete" name="delete_2124" id="delete_2124" /><label for="delete_2124"><span class="name">/QA/ Poster</span> <time datetime="2019-09-24T21:15:03Z">09/24/19 (Tue) 21:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2124" onclick="return highlightReply(2124, event)" href="/agg/res/2124#2124">No.</a><a class="post_no" onclick="return citeReply(2124)" href="/agg/res/2124#q2124">2124</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2124">[Reply]</a></p><div class="body">Oof.<br/><br/>So much for that "unavoidable" impeachment.<br/><a href=https://gnfos.com/jp/res/369542.html>https://gnfos.com/jp/res/369542.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2123" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569355693154.jpg">1569355693154.jpg</a> <span class="unimportant">(117.11 KB, 736x552, <span class="postfilename">1569215321227.jpg</span>)</span></p><a href="/agg/src/1569355693154.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569355693154.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2123" ><p class="intro"><input type="checkbox" class="delete" name="delete_2123" id="delete_2123" /><label for="delete_2123"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T20:10:03Z">09/24/19 (Tue) 20:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2123" onclick="return highlightReply(2123, event)" href="/agg/res/2123#2123">No.</a><a class="post_no" onclick="return citeReply(2123)" href="/agg/res/2123#q2123">2123</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2123">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369540.html>https://gnfos.com/jp/res/369540.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2122" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569355475604.png">1569355475604.png</a> <span class="unimportant">(525.64 KB, 2000x2501, <span class="postfilename" title="d647c2249478e263527bfb80950f6be9-imagepng.png">d647c2249478e263527bfb8095….png</span>)</span></p><a href="/agg/src/1569355475604.png" target="_blank"><img class="post-image" src="/agg/thumb/1569355475604.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2122" ><p class="intro"><input type="checkbox" class="delete" name="delete_2122" id="delete_2122" /><label for="delete_2122"><span class="name">Anonymous</span> <time datetime="2019-09-24T20:05:03Z">09/24/19 (Tue) 20:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2122" onclick="return highlightReply(2122, event)" href="/agg/res/2122#2122">No.</a><a class="post_no" onclick="return citeReply(2122)" href="/agg/res/2122#q2122">2122</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2122">[Reply]</a></p><div class="body">do you ever have trouble differentiating fanworks from the official thing?<br/><a href=https://kissu.moe/qa/res/10452.html>https://kissu.moe/qa/res/10452.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2121" data-board="agg"><div class="video-container" data-video="MMA3eDNS0jw"><a href="https://youtu.be/MMA3eDNS0jw" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/MMA3eDNS0jw/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2121" ><p class="intro"><input type="checkbox" class="delete" name="delete_2121" id="delete_2121" /><label for="delete_2121"><span class="name">Tada Banri</span> <time datetime="2019-09-24T18:55:03Z">09/24/19 (Tue) 18:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2121" onclick="return highlightReply(2121, event)" href="/agg/res/2121#2121">No.</a><a class="post_no" onclick="return citeReply(2121)" href="/agg/res/2121#q2121">2121</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2121">[Reply]</a></p><div class="body">Virgin otaku on suicide watch<br/><a href=https://gnfos.com/jp/res/369538.html>https://gnfos.com/jp/res/369538.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2120" data-board="agg"><div class="video-container" data-video="ULmk8mhiClI"><a href="https://youtu.be/ULmk8mhiClI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/ULmk8mhiClI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2120" ><p class="intro"><input type="checkbox" class="delete" name="delete_2120" id="delete_2120" /><label for="delete_2120"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T18:30:04Z">09/24/19 (Tue) 18:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2120" onclick="return highlightReply(2120, event)" href="/agg/res/2120#2120">No.</a><a class="post_no" onclick="return citeReply(2120)" href="/agg/res/2120#q2120">2120</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2120">[Reply]</a></p><div class="body">glad that we look to teenagers for guidance about how to run the world<br/><a href=https://gnfos.com/jp/res/369532.html>https://gnfos.com/jp/res/369532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2119" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569348771878.jpg">1569348771878.jpg</a> <span class="unimportant">(48.39 KB, 640x480, <span class="postfilename">shits on the floor.jpg</span>)</span></p><a href="/agg/src/1569348771878.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569348771878.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_2119" ><p class="intro"><input type="checkbox" class="delete" name="delete_2119" id="delete_2119" /><label for="delete_2119"><span class="name">Anonymous</span> <time datetime="2019-09-24T18:15:04Z">09/24/19 (Tue) 18:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2119" onclick="return highlightReply(2119, event)" href="/agg/res/2119#2119">No.</a><a class="post_no" onclick="return citeReply(2119)" href="/agg/res/2119#q2119">2119</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2119">[Reply]</a></p><div class="body">I have a very important message to /what/min<br/><a href=http://what-ch.mooo.com/what/res/2694.html>http://what-ch.mooo.com/what/res/2694.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2118" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569347639393.png">1569347639393.png</a> <span class="unimportant">(2.46 MB, 1334x750, <span class="postfilename" title="0802A1A6-9FA5-4535-805B-73ECF4186094.png">0802A1A6-9FA5-4535-805B-73….png</span>)</span></p><a href="/agg/src/1569347639393.png" target="_blank"><img class="post-image" src="/agg/thumb/1569347639393.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2118" ><p class="intro"><input type="checkbox" class="delete" name="delete_2118" id="delete_2118" /><label for="delete_2118"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T17:55:03Z">09/24/19 (Tue) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2118" onclick="return highlightReply(2118, event)" href="/agg/res/2118#2118">No.</a><a class="post_no" onclick="return citeReply(2118)" href="/agg/res/2118#q2118">2118</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2118">[Reply]</a></p><div class="body">Andrea?<br/><a href=https://gnfos.com/jp/res/369530.html>https://gnfos.com/jp/res/369530.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2117" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569344026622.jpg">1569344026622.jpg</a> <span class="unimportant">(33.9 KB, 456x429, <span class="postfilename">1569192204208.jpg</span>)</span></p><a href="/agg/src/1569344026622.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569344026622.png" style="width:255px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2117" ><p class="intro"><input type="checkbox" class="delete" name="delete_2117" id="delete_2117" /><label for="delete_2117"><span class="name">Anonymous</span> <time datetime="2019-09-24T16:55:04Z">09/24/19 (Tue) 16:55:04</time></label>&nbsp;<a class="post_no" id="post_no_2117" onclick="return highlightReply(2117, event)" href="/agg/res/2117#2117">No.</a><a class="post_no" onclick="return citeReply(2117)" href="/agg/res/2117#q2117">2117</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2117">[Reply]</a></p><div class="body"><span class="quote">&gt;Kissu.moe is a modern imageboard with a loose ruleset based around removing obnoxious content such as spam, griefing and 4chan&#39;s wide array of clickbait images.</span><br/><a href=https://kissu.moe/qa/res/10444.html>https://kissu.moe/qa/res/10444.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2116" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569343788861.jpg">1569343788861.jpg</a> <span class="unimportant">(57.21 KB, 959x538, <span class="postfilename">1560688822965.jpg</span>)</span></p><a href="/agg/src/1569343788861.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569343788861.jpg" style="width:427px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_2116" ><p class="intro"><input type="checkbox" class="delete" name="delete_2116" id="delete_2116" /><label for="delete_2116"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T16:50:09Z">09/24/19 (Tue) 16:50:09</time></label>&nbsp;<a class="post_no" id="post_no_2116" onclick="return highlightReply(2116, event)" href="/agg/res/2116#2116">No.</a><a class="post_no" onclick="return citeReply(2116)" href="/agg/res/2116#q2116">2116</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2116">[Reply]</a></p><div class="body">have to go back to working bros...<br/>lunch time is over :(<br/><a href=https://gnfos.com/jp/res/369528.html>https://gnfos.com/jp/res/369528.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2115" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569343056896.jpg">1569343056896.jpg</a> <span class="unimportant">(33.9 KB, 456x429, <span class="postfilename">1569192204208.jpg</span>)</span></p><a href="/agg/src/1569343056896.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569343056896.png" style="width:255px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2115" ><p class="intro"><input type="checkbox" class="delete" name="delete_2115" id="delete_2115" /><label for="delete_2115"><span class="name">Anonymous</span> <time datetime="2019-09-24T16:40:03Z">09/24/19 (Tue) 16:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2115" onclick="return highlightReply(2115, event)" href="/agg/res/2115#2115">No.</a><a class="post_no" onclick="return citeReply(2115)" href="/agg/res/2115#q2115">2115</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2115">[Reply]</a></p><div class="body"><span class="quote">&gt;Kissu.moe is a modern imageboard with a loose ruleset based around removing obnoxious content such as spam, griefing and 4chan&#39;s wide array of clickbait images.</span><br/><a href=https://kissu.moe/qa/res/10437.html>https://kissu.moe/qa/res/10437.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2114" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569341401727.png">1569341401727.png</a> <span class="unimportant">(602.25 KB, 860x1000, <span class="postfilename">tnkoy.png</span>)</span></p><a href="/agg/src/1569341401727.png" target="_blank"><img class="post-image" src="/agg/thumb/1569341401727.png" style="width:219px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2114" ><p class="intro"><input type="checkbox" class="delete" name="delete_2114" id="delete_2114" /><label for="delete_2114"><span class="name">Anonymous</span> <time datetime="2019-09-24T16:10:04Z">09/24/19 (Tue) 16:10:04</time></label>&nbsp;<a class="post_no" id="post_no_2114" onclick="return highlightReply(2114, event)" href="/agg/res/2114#2114">No.</a><a class="post_no" onclick="return citeReply(2114)" href="/agg/res/2114#q2114">2114</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2114">[Reply]</a></p><div class="body">Why do you watch anime<br/><a href=https://kissu.moe/qa/res/10431.html>https://kissu.moe/qa/res/10431.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2113" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569323500879.png">1569323500879.png</a> <span class="unimportant">(147.87 KB, 1134x652, <span class="postfilename">Untitled.png</span>)</span></p><a href="/agg/src/1569323500879.png" target="_blank"><img class="post-image" src="/agg/thumb/1569323500879.png" style="width:417px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2113" ><p class="intro"><input type="checkbox" class="delete" name="delete_2113" id="delete_2113" /><label for="delete_2113"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T11:15:03Z">09/24/19 (Tue) 11:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2113" onclick="return highlightReply(2113, event)" href="/agg/res/2113#2113">No.</a><a class="post_no" onclick="return citeReply(2113)" href="/agg/res/2113#q2113">2113</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2113">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369524.html>https://gnfos.com/jp/res/369524.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2112" data-board="agg"><div class="video-container" data-video="GQObHXySH9Y"><a href="https://youtu.be/GQObHXySH9Y" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/GQObHXySH9Y/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2112" ><p class="intro"><input type="checkbox" class="delete" name="delete_2112" id="delete_2112" /><label for="delete_2112"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T09:10:03Z">09/24/19 (Tue) 09:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2112" onclick="return highlightReply(2112, event)" href="/agg/res/2112#2112">No.</a><a class="post_no" onclick="return citeReply(2112)" href="/agg/res/2112#q2112">2112</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2112">[Reply]</a></p><div class="body">Think I’m gonna die to her voice<br/><a href=https://gnfos.com/jp/res/369523.html>https://gnfos.com/jp/res/369523.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2111" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569314579692.jpg">1569314579692.jpg</a> <span class="unimportant">(62.15 KB, 510x638, <span class="postfilename">1558381762529.jpg</span>)</span></p><a href="/agg/src/1569314579692.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569314579692.jpg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2111" ><p class="intro"><input type="checkbox" class="delete" name="delete_2111" id="delete_2111" /><label for="delete_2111"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-24T08:45:03Z">09/24/19 (Tue) 08:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2111" onclick="return highlightReply(2111, event)" href="/agg/res/2111#2111">No.</a><a class="post_no" onclick="return citeReply(2111)" href="/agg/res/2111#q2111">2111</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2111">[Reply]</a></p><div class="body">okay this board is just cringe<br/><br/>not going to advertise my board here anymore<br/><a href=https://gnfos.com/jp/res/369521.html>https://gnfos.com/jp/res/369521.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/index" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a class="selected">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/3" method="get"><input type="submit" value="Next" /></form>
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