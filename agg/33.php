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
			<img class="board_image" src="/static/banners/banner-kissu-1.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea name="text" style="display:none">&#113;msS&#89;&#91;v&#112;&#76;H&#50;P\1y@b&#44;&#107;_</textarea>
<input value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname" type="hidden">
<input type="hidden" name="board" value="agg">
<textarea style="display:none" name="login">&#47;[L&#72; Ji&#58;`!;C+6\o&#84;&lt;8&#79;&#98;&#73;|?&#88;&#93;d.2☨{tW5 c&#9905;1&#66;&#61;&#107;@&#57;(&#51;N&#103;☮*}&#52;'P&#81;-M&#86;⚯0&#75;&#68;7u&#115;j</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea name="q" style="display:none"> f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				<input   type="hidden"   value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="   name="y0kh38z9do♒sb">
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
		<div class="thread" id="thread_1509" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566780941442.jpg">1566780941442.jpg</a> <span class="unimportant">(101.14 KB, 583x585, <span class="postfilename">thinkin bout fins.jpg</span>)</span></p><a href="/agg/src/1566780941442.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566780941442.png" style="width:254px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1509" ><p class="intro"><input type="checkbox" class="delete" name="delete_1509" id="delete_1509" /><label for="delete_1509"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-26T01:00:03Z">08/26/19 (Mon) 01:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1509" onclick="return highlightReply(1509, event)" href="/agg/res/1509#1509">No.</a><a class="post_no" onclick="return citeReply(1509)" href="/agg/res/1509#q1509">1509</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1509">[Reply]</a></p><div class="body">been eatin egg and cheese sandwiches with french toast slices for bread instead of regular bread<br/>has anyone ever done this i dont think anybody has EVER done this its great<br/><a href=https://kissu.moe/qa/res/5925.html>https://kissu.moe/qa/res/5925.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1508" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/02XnHTF6pso" allowfullscreen></iframe>    <div class="post op" id="op_1508" ><p class="intro"><input type="checkbox" class="delete" name="delete_1508" id="delete_1508" /><label for="delete_1508"><span class="name">Anonymous</span> <time datetime="2019-08-26T00:00:03Z">08/26/19 (Mon) 00:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1508" onclick="return highlightReply(1508, event)" href="/agg/res/1508#1508">No.</a><a class="post_no" onclick="return citeReply(1508)" href="/agg/res/1508#q1508">1508</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1508">[Reply]</a></p><div class="body">do you like math<br/><a href=https://kissu.moe/qa/res/5912.html>https://kissu.moe/qa/res/5912.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1507" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566774737132.png">1566774737132.png</a> <span class="unimportant">(199.43 KB, 1200x900, <span class="postfilename">1437214783811.png</span>)</span></p><a href="/agg/src/1566774737132.png" target="_blank"><img class="post-image" src="/agg/thumb/1566774737132.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1507" ><p class="intro"><input type="checkbox" class="delete" name="delete_1507" id="delete_1507" /><label for="delete_1507"><span class="name">Anonymous</span> <time datetime="2019-08-25T23:15:03Z">08/25/19 (Sun) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1507" onclick="return highlightReply(1507, event)" href="/agg/res/1507#1507">No.</a><a class="post_no" onclick="return citeReply(1507)" href="/agg/res/1507#q1507">1507</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1507">[Reply]</a></p><div class="body">me and kissu<br/><a href=https://kissu.moe/qa/res/5906.html>https://kissu.moe/qa/res/5906.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1506" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566768392084.jpg">1566768392084.jpg</a> <span class="unimportant">(153.44 KB, 720x960, <span class="postfilename">rx7o30l5kii31.jpg</span>)</span></p><a href="/agg/src/1566768392084.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566768392084.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1506" ><p class="intro"><input type="checkbox" class="delete" name="delete_1506" id="delete_1506" /><label for="delete_1506"><span class="name">Anonymous</span> <time datetime="2019-08-25T21:30:03Z">08/25/19 (Sun) 21:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1506" onclick="return highlightReply(1506, event)" href="/agg/res/1506#1506">No.</a><a class="post_no" onclick="return citeReply(1506)" href="/agg/res/1506#q1506">1506</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1506">[Reply]</a></p><div class="body">Gaben with his wife.<br/><a href=http://what-ch.mooo.com/what/res/2275.html>http://what-ch.mooo.com/what/res/2275.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1505" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566766238504.webm">1566766238504.webm</a> <span class="unimportant">(2.72 MB, 576x324, <span class="postfilename">1566742958447.webm</span>)</span></p><a href="/player.php?v=/agg/src/1566766238504.webm&amp;t=1566742958447.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566766238504.jpg" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1505" ><p class="intro"><input type="checkbox" class="delete" name="delete_1505" id="delete_1505" /><label for="delete_1505"><span class="name">Anonymous</span> <time datetime="2019-08-25T20:55:03Z">08/25/19 (Sun) 20:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1505" onclick="return highlightReply(1505, event)" href="/agg/res/1505#1505">No.</a><a class="post_no" onclick="return citeReply(1505)" href="/agg/res/1505#q1505">1505</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1505">[Reply]</a></p><div class="body">OH NOW I GET IT<br/>SNEED RHYMES WITH FEED AND SEED<br/>AND CHUCK<br/>RHYMES<br/>WITH<br/>FUCK<br/>AND<br/>SUCK<br/><a href=https://kissu.moe/qa/res/5881.html>https://kissu.moe/qa/res/5881.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1504" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566758617659.png">1566758617659.png</a> <span class="unimportant">(1.12 MB, 560x700, <span class="postfilename" title="95f01fd27a07d9a8e14bf72e41947269.png">95f01fd27a07d9a8e14bf72e41….png</span>)</span></p><a href="/agg/src/1566758617659.png" target="_blank"><img class="post-image" src="/agg/thumb/1566758617659.png" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1504" ><p class="intro"><input type="checkbox" class="delete" name="delete_1504" id="delete_1504" /><label for="delete_1504"><span class="name">Anonymous</span> <time datetime="2019-08-25T18:45:03Z">08/25/19 (Sun) 18:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1504" onclick="return highlightReply(1504, event)" href="/agg/res/1504#1504">No.</a><a class="post_no" onclick="return citeReply(1504)" href="/agg/res/1504#q1504">1504</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1504">[Reply]</a></p><div class="body">Met a ten year old at the drive-by today, he bent over to tie his shoes and showed me his supple ten-year-old ass in short shorts. Got the hardest stiffy I&#39;ve had in months.<br/><a href=http://what-ch.mooo.com/what/res/2271.html>http://what-ch.mooo.com/what/res/2271.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1503" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566751977324.jpg">1566751977324.jpg</a> <span class="unimportant">(126.21 KB, 1240x874, <span class="postfilename">1352444249813.jpg</span>)</span></p><a href="/agg/src/1566751977324.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566751977324.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1503" ><p class="intro"><input type="checkbox" class="delete" name="delete_1503" id="delete_1503" /><label for="delete_1503"><span class="name">Anonymous</span> <time datetime="2019-08-25T16:55:03Z">08/25/19 (Sun) 16:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1503" onclick="return highlightReply(1503, event)" href="/agg/res/1503#1503">No.</a><a class="post_no" onclick="return citeReply(1503)" href="/agg/res/1503#q1503">1503</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1503">[Reply]</a></p><div class="body">You ever have one of those days where you take it so easy that even getting out of bed is too much work?<br/><a href=https://kissu.moe/qa/res/5864.html>https://kissu.moe/qa/res/5864.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1502" data-board="agg"><div class="video-container" data-video="SYQOAuarDZA"><a href="https://youtu.be/SYQOAuarDZA" target="_blank" class="file"><img src="//img.youtube.com/vi/SYQOAuarDZA/0.jpg" class="video"/></a><div class="video2"/></div></div>    <div class="post op" id="op_1502" ><p class="intro"><input type="checkbox" class="delete" name="delete_1502" id="delete_1502" /><label for="delete_1502"><span class="name">Nozomi Toujou</span> <time datetime="2019-08-25T14:35:03Z">08/25/19 (Sun) 14:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1502" onclick="return highlightReply(1502, event)" href="/agg/res/1502#1502">No.</a><a class="post_no" onclick="return citeReply(1502)" href="/agg/res/1502#q1502">1502</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1502">[Reply]</a></p><div class="body">Happy sunday nen!  I&#39;m going to tidy up a bit and then get around to finally mending my jeans, and maybe practice a bit of piano.  What are your plans?<br/><a href=https://kakashi-nenpo.com/jp/res/32869.html>https://kakashi-nenpo.com/jp/res/32869.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1501" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566733960331.png">1566733960331.png</a> <span class="unimportant">(250.67 KB, 826x704, <span class="postfilename">based.png</span>)</span></p><a href="/agg/src/1566733960331.png" target="_blank"><img class="post-image" src="/agg/thumb/1566733960331.png" style="width:255px;height:217px" alt="" /></a></div>    </div>    <div class="post op" id="op_1501" ><p class="intro"><input type="checkbox" class="delete" name="delete_1501" id="delete_1501" /><label for="delete_1501"><span class="name">Anonymous</span> <time datetime="2019-08-25T11:55:03Z">08/25/19 (Sun) 11:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1501" onclick="return highlightReply(1501, event)" href="/agg/res/1501#1501">No.</a><a class="post_no" onclick="return citeReply(1501)" href="/agg/res/1501#q1501">1501</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1501">[Reply]</a></p><div class="body">WOAH<br/><a href=https://kissu.moe/qa/res/5851.html>https://kissu.moe/qa/res/5851.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1500" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566717780240.jpg">1566717780240.jpg</a> <span class="unimportant">(43.24 KB, 640x480, <span class="postfilename" title="62626165_460921828003907_4433921006155179189_n.jpg">62626165_460921828003907_4….jpg</span>)</span></p><a href="/agg/src/1566717780240.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566717780240.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1500" ><p class="intro"><input type="checkbox" class="delete" name="delete_1500" id="delete_1500" /><label for="delete_1500"><span class="name">Anonymous</span> <time datetime="2019-08-25T07:25:03Z">08/25/19 (Sun) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1500" onclick="return highlightReply(1500, event)" href="/agg/res/1500#1500">No.</a><a class="post_no" onclick="return citeReply(1500)" href="/agg/res/1500#q1500">1500</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1500">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2265.html>http://what-ch.mooo.com/what/res/2265.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1499" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566709692679.jpg">1566709692679.jpg</a> <span class="unimportant">(3.9 MB, 9118x10000, <span class="postfilename">1502193168788.jpg</span>)</span></p><a href="/agg/src/1566709692679.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566709692679.png" style="width:233px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1499" ><p class="intro"><input type="checkbox" class="delete" name="delete_1499" id="delete_1499" /><label for="delete_1499"><span class="name">Anonymous</span> <time datetime="2019-08-25T05:10:04Z">08/25/19 (Sun) 05:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1499" onclick="return highlightReply(1499, event)" href="/agg/res/1499#1499">No.</a><a class="post_no" onclick="return citeReply(1499)" href="/agg/res/1499#q1499">1499</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1499">[Reply]</a></p><div class="body">are you all having FUN here<br/><a href=https://kissu.moe/qa/res/5839.html>https://kissu.moe/qa/res/5839.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1498" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566708732348.jpg">1566708732348.jpg</a> <span class="unimportant">(472.76 KB, 700x700, <span class="postfilename" title="__kohaku_tsukihime_drawn_by_inaeda_kei__6f60022346ee6857fae2aca60c7b7ffe.jpg">__kohaku_tsukihime_drawn_b….jpg</span>)</span></p><a href="/agg/src/1566708732348.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566708732348.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1498" ><p class="intro"><input type="checkbox" class="delete" name="delete_1498" id="delete_1498" /><label for="delete_1498"><span class="name">Anonymous</span> <time datetime="2019-08-25T04:55:03Z">08/25/19 (Sun) 04:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1498" onclick="return highlightReply(1498, event)" href="/agg/res/1498#1498">No.</a><a class="post_no" onclick="return citeReply(1498)" href="/agg/res/1498#q1498">1498</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1498">[Reply]</a></p><div class="body">Today&#39;s lucky item: ........................................<br/>....................................................................<br/>.................... new beginnings<br/><a href=https://kissu.moe/qa/res/5835.html>https://kissu.moe/qa/res/5835.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1497" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566704712177.jpg">1566704712177.jpg</a> <span class="unimportant">(329.2 KB, 600x800, <span class="postfilename">74371416_p0.jpg</span>)</span></p><a href="/agg/src/1566704712177.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566704712177.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1497" ><p class="intro"><input type="checkbox" class="delete" name="delete_1497" id="delete_1497" /><label for="delete_1497"><span class="name">Anonymous</span> <time datetime="2019-08-25T03:50:03Z">08/25/19 (Sun) 03:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1497" onclick="return highlightReply(1497, event)" href="/agg/res/1497#1497">No.</a><a class="post_no" onclick="return citeReply(1497)" href="/agg/res/1497#q1497">1497</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1497">[Reply]</a></p><div class="body">this creature steals your dirty smelly NEET sock. <br/><br/>what do?<br/><a href=https://kissu.moe/qa/res/5817.html>https://kissu.moe/qa/res/5817.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1496" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566698938297.jpg">1566698938297.jpg</a> <span class="unimportant">(10.39 KB, 315x315, <span class="postfilename">dog.jpg</span>)</span></p><a href="/agg/src/1566698938297.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566698938297.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1496" ><p class="intro"><input type="checkbox" class="delete" name="delete_1496" id="delete_1496" /><label for="delete_1496"><span class="name">Anonymous</span> <time datetime="2019-08-25T02:10:05Z">08/25/19 (Sun) 02:10:05</time></label>&nbsp;<a class="post_no" id="post_no_1496" onclick="return highlightReply(1496, event)" href="/agg/res/1496#1496">No.</a><a class="post_no" onclick="return citeReply(1496)" href="/agg/res/1496#q1496">1496</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1496">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5805.html>https://kissu.moe/qa/res/5805.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1495" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566689606464.png">1566689606464.png</a> <span class="unimportant">(3.21 MB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 057 [BD][1080p][53FCFDF5].mkv_snapshot_08.47_[2019.08.07_17.33.30].png">[MiG_MuX] PriPara - 057 [B….png</span>)</span></p><a href="/agg/src/1566689606464.png" target="_blank"><img class="post-image" src="/agg/thumb/1566689606464.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1495" ><p class="intro"><input type="checkbox" class="delete" name="delete_1495" id="delete_1495" /><label for="delete_1495"><span class="name">Anonymous</span> <time datetime="2019-08-24T23:35:03Z">08/24/19 (Sat) 23:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1495" onclick="return highlightReply(1495, event)" href="/agg/res/1495#1495">No.</a><a class="post_no" onclick="return citeReply(1495)" href="/agg/res/1495#q1495">1495</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1495">[Reply]</a></p><div class="body">pushuuuu~<br/><a href=https://kissu.moe/qa/res/5799.html>https://kissu.moe/qa/res/5799.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1494" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566686757941.png">1566686757941.png</a> <span class="unimportant">(304.4 KB, 532x630, <span class="postfilename">1504210464170.png</span>)</span></p><a href="/agg/src/1566686757941.png" target="_blank"><img class="post-image" src="/agg/thumb/1566686757941.png" style="width:215px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1494" ><p class="intro"><input type="checkbox" class="delete" name="delete_1494" id="delete_1494" /><label for="delete_1494"><span class="name">Anonymous</span> <time datetime="2019-08-24T22:50:04Z">08/24/19 (Sat) 22:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1494" onclick="return highlightReply(1494, event)" href="/agg/res/1494#1494">No.</a><a class="post_no" onclick="return citeReply(1494)" href="/agg/res/1494#q1494">1494</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1494">[Reply]</a></p><div class="body">Why doesn&#39;t sageru #jp get any advertisement, it needs it<br/><a href=https://kissu.moe/qa/res/5796.html>https://kissu.moe/qa/res/5796.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1493" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566685434313.png">1566685434313.png</a> <span class="unimportant">(511.3 KB, 640x480, <span class="postfilename" title="[アニメ DVD] -DiGiCharat- デ・ジ・キャラット Vol2 第15話 「PARTY NIGHT」 (XviD 640x480 AC3).avi_snapshot_02.55_[2018.05.25_17.27.58].png">[アニメ DVD] -DiGiCharat- デ・ジ….png</span>)</span></p><a href="/agg/src/1566685434313.png" target="_blank"><img class="post-image" src="/agg/thumb/1566685434313.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1493" ><p class="intro"><input type="checkbox" class="delete" name="delete_1493" id="delete_1493" /><label for="delete_1493"><span class="name">Anonymous</span> <time datetime="2019-08-24T22:25:03Z">08/24/19 (Sat) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1493" onclick="return highlightReply(1493, event)" href="/agg/res/1493#1493">No.</a><a class="post_no" onclick="return citeReply(1493)" href="/agg/res/1493#q1493">1493</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1493">[Reply]</a></p><div class="body">Hello /qa/ friends!<br/>For those that aren&#39;t in IRC or weren&#39;t able to see the threads on 4/qa/ before they began to be sniped in minutes or seconds, I&#39;m going to remind everyone again that I host a seasonal anime stream every Saturday (I.E today) at 7PM EST/11GMT.<br/>I also occasionally host other streams, (and other people host stuff too) on other days, but that would be announced at least days in advance.<br/>We use kissu theater, which is version of cytube that supports <span class="glowblue">anonymous</span> chat.<br/>The URL for mine (seasonal and stuff) is at <a href="https://theatre.kissu.moe/kiss/yukkuri" rel="nofollow" target="_blank">https://theatre.kissu.moe/kiss/yukkuri</a><br/>Hope to see you there!<br/><a href=https://kissu.moe/qa/res/5785.html>https://kissu.moe/qa/res/5785.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1492" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566684472429.webm">1566684472429.webm</a> <span class="unimportant">(1.7 MB, 1280x720, <span class="postfilename">1566664997380.webm</span>)</span></p><a href="/player.php?v=/agg/src/1566684472429.webm&amp;t=1566664997380.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566684472429.jpg" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1492" ><p class="intro"><input type="checkbox" class="delete" name="delete_1492" id="delete_1492" /><label for="delete_1492"><span class="name">Anonymous</span> <time datetime="2019-08-24T22:10:03Z">08/24/19 (Sat) 22:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1492" onclick="return highlightReply(1492, event)" href="/agg/res/1492#1492">No.</a><a class="post_no" onclick="return citeReply(1492)" href="/agg/res/1492#q1492">1492</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1492">[Reply]</a></p><div class="body">She sees your dick<br/><a href=https://kissu.moe/qa/res/5776.html>https://kissu.moe/qa/res/5776.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1491" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566683531233.gif">1566683531233.gif</a> <span class="unimportant">(1006.98 KB, 400x400, <span class="postfilename">700749206_1761791.gif</span>)</span></p><a href="/agg/src/1566683531233.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566683531233.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1491" ><p class="intro"><input type="checkbox" class="delete" name="delete_1491" id="delete_1491" /><label for="delete_1491"><span class="name">Anonymous</span> <time datetime="2019-08-24T21:55:03Z">08/24/19 (Sat) 21:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1491" onclick="return highlightReply(1491, event)" href="/agg/res/1491#1491">No.</a><a class="post_no" onclick="return citeReply(1491)" href="/agg/res/1491#q1491">1491</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1491">[Reply]</a></p><div class="body">i cant decide if i want to go rpvp in classic wow, i dont want to miss out on world pvp but at the same time im not joining a guild so im going to get owned by people who outgear and outnumber me later on<br/><a href=https://kissu.moe/qa/res/5769.html>https://kissu.moe/qa/res/5769.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1490" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566676740260.jpg">1566676740260.jpg</a> <span class="unimportant">(50.46 KB, 574x576, <span class="postfilename">misc 2048.jpg</span>)</span></p><a href="/agg/src/1566676740260.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566676740260.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1490" ><p class="intro"><input type="checkbox" class="delete" name="delete_1490" id="delete_1490" /><label for="delete_1490"><span class="name">Anonymous</span> <time datetime="2019-08-24T20:00:03Z">08/24/19 (Sat) 20:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1490" onclick="return highlightReply(1490, event)" href="/agg/res/1490#1490">No.</a><a class="post_no" onclick="return citeReply(1490)" href="/agg/res/1490#q1490">1490</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1490">[Reply]</a></p><div class="body">I&#39;m gonna cu-<br/><a href=http://what-ch.mooo.com/what/res/2260.html>http://what-ch.mooo.com/what/res/2260.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/32" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a class="selected">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/34" method="get"><input type="submit" value="Next" /></form>
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