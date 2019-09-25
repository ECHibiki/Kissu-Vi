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
			<img class="board_image" src="/static/banners/banner-kissu-6.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span   style="display:none" ><input   type="text"   name="text"   value="qmsSY[vpLH2P\1y@b,k_" ></span >
<textarea style="display:none" name="firstname">f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2</textarea>
<input type="hidden" name="board" value="agg">
<input value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea style="display:none" name="message">wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value=" f♻⛭♃9/&#113;&#122;wZ&#107;.@h&#124;&#59;$LF⛡&#109;d&#118;,ER83W%&#49;Y&#73;&#77;^i&#85;☌5&#9741;&#43;&#65;&#103;☪&#84;=`}⚑yc7J⛮&#80;#b?⚤6X&amp;&#123;Dx \4Np&#75;Hn&#58;)" name="q" >
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></span>
			
			
				
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
		<div class="thread" id="thread_1950" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569023439702.jpeg">1569023439702.jpeg</a> <span class="unimportant">(1.01 MB, 1600x1200, <span class="postfilename" title="D99D0ACE-01E4-436A-9A90-ECFC54371150.jpeg">D99D0ACE-01E4-436A-9A90-E….jpeg</span>)</span></p><a href="/agg/src/1569023439702.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569023439702.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1950" ><p class="intro"><input type="checkbox" class="delete" name="delete_1950" id="delete_1950" /><label for="delete_1950"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T23:55:03Z">09/20/19 (Fri) 23:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1950" onclick="return highlightReply(1950, event)" href="/agg/res/1950#1950">No.</a><a class="post_no" onclick="return citeReply(1950)" href="/agg/res/1950#q1950">1950</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1950">[Reply]</a></p><div class="body">Why is black culture so destructive<br/><a href=https://gnfos.com/jp/res/369076.html>https://gnfos.com/jp/res/369076.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1949" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569023224138.png">1569023224138.png</a> <span class="unimportant">(234.32 KB, 1500x1500, <span class="postfilename">hibikimon.png</span>)</span></p><a href="/agg/src/1569023224138.png" target="_blank"><img class="post-image" src="/agg/thumb/1569023224138.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1949" ><p class="intro"><input type="checkbox" class="delete" name="delete_1949" id="delete_1949" /><label for="delete_1949"><span class="name">Anonymous</span> <time datetime="2019-09-20T23:50:03Z">09/20/19 (Fri) 23:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1949" onclick="return highlightReply(1949, event)" href="/agg/res/1949#1949">No.</a><a class="post_no" onclick="return citeReply(1949)" href="/agg/res/1949#q1949">1949</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1949">[Reply]</a></p><div class="body">test test test test test<br/><a href=http://what-ch.mooo.com/what/res/2644.html>http://what-ch.mooo.com/what/res/2644.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1948" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569022495470.jpg">1569022495470.jpg</a> <span class="unimportant">(663.27 KB, 1063x1500, <span class="postfilename">909f.jpg</span>)</span></p><a href="/agg/src/1569022495470.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569022495470.jpg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1948" ><p class="intro"><input type="checkbox" class="delete" name="delete_1948" id="delete_1948" /><label for="delete_1948"><span class="subject">Fuck the mods</span> <span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T23:35:04Z">09/20/19 (Fri) 23:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1948" onclick="return highlightReply(1948, event)" href="/agg/res/1948#1948">No.</a><a class="post_no" onclick="return citeReply(1948)" href="/agg/res/1948#q1948">1948</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1948">[Reply]</a></p><div class="body"><span class="heading">Come funpost at <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://gnfos.com/jp/res/369074.html>https://gnfos.com/jp/res/369074.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1947" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569022434535.png">1569022434535.png</a> <span class="unimportant">(73.94 KB, 300x256, <span class="postfilename">084.png</span>)</span></p><a href="/agg/src/1569022434535.png" target="_blank"><img class="post-image" src="/agg/thumb/1569022434535.png" style="width:281px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1947" ><p class="intro"><input type="checkbox" class="delete" name="delete_1947" id="delete_1947" /><label for="delete_1947"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T23:35:04Z">09/20/19 (Fri) 23:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1947" onclick="return highlightReply(1947, event)" href="/agg/res/1947#1947">No.</a><a class="post_no" onclick="return citeReply(1947)" href="/agg/res/1947#q1947">1947</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1947">[Reply]</a></p><div class="body"><span class="quote">&gt;that pedophile developer who eats his own foot fungus</span><br/>Unironically <em>who</em>?<br/><a href=https://gnfos.com/jp/res/369073.html>https://gnfos.com/jp/res/369073.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1946" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569020383798.jpg">1569020383798.jpg</a> <span class="unimportant">(55.52 KB, 796x960, <span class="postfilename">1568930110751.jpg</span>)</span></p><a href="/agg/src/1569020383798.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569020383798.jpg" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1946" ><p class="intro"><input type="checkbox" class="delete" name="delete_1946" id="delete_1946" /><label for="delete_1946"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T23:00:04Z">09/20/19 (Fri) 23:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1946" onclick="return highlightReply(1946, event)" href="/agg/res/1946#1946">No.</a><a class="post_no" onclick="return citeReply(1946)" href="/agg/res/1946#q1946">1946</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1946">[Reply]</a></p><div class="body">I hate myself<br/><a href=https://gnfos.com/jp/res/369072.html>https://gnfos.com/jp/res/369072.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1945" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569018069616.png">1569018069616.png</a> <span class="unimportant">(471.97 KB, 720x715, <span class="postfilename" title="A1B25248-3996-4128-BEE1-88D502AFBCF4.png">A1B25248-3996-4128-BEE1-88….png</span>)</span></p><a href="/agg/src/1569018069616.png" target="_blank"><img class="post-image" src="/agg/thumb/1569018069616.png" style="width:242px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1945" ><p class="intro"><input type="checkbox" class="delete" name="delete_1945" id="delete_1945" /><label for="delete_1945"><span class="name">Idiot</span> <time datetime="2019-09-20T22:25:03Z">09/20/19 (Fri) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1945" onclick="return highlightReply(1945, event)" href="/agg/res/1945#1945">No.</a><a class="post_no" onclick="return citeReply(1945)" href="/agg/res/1945#q1945">1945</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1945">[Reply]</a></p><div class="body">If whites are so smart how come they are dying out lol<br/><a href=https://gnfos.com/jp/res/369064.html>https://gnfos.com/jp/res/369064.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1944" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569017590292.png">1569017590292.png</a> <span class="unimportant">(371.31 KB, 735x562, <span class="postfilename">1569009088786-1.png</span>)</span></p><a href="/agg/src/1569017590292.png" target="_blank"><img class="post-image" src="/agg/thumb/1569017590292.png" style="width:314px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1944" ><p class="intro"><input type="checkbox" class="delete" name="delete_1944" id="delete_1944" /><label for="delete_1944"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-20T22:15:03Z">09/20/19 (Fri) 22:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1944" onclick="return highlightReply(1944, event)" href="/agg/res/1944#1944">No.</a><a class="post_no" onclick="return citeReply(1944)" href="/agg/res/1944#q1944">1944</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1944">[Reply]</a></p><div class="body">White women everybody<br/><a href=https://gnfos.com/jp/res/369057.html>https://gnfos.com/jp/res/369057.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1943" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569016600868.jpg">1569016600868.jpg</a> <span class="unimportant">(1.89 MB, 2450x3200, <span class="postfilename" title="1b22816636057ddcd732d1d6deb34de7-imagejpeg.jpg">1b22816636057ddcd732d1d6de….jpg</span>)</span></p><a href="/agg/src/1569016600868.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569016600868.png" style="width:196px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1943" ><p class="intro"><input type="checkbox" class="delete" name="delete_1943" id="delete_1943" /><label for="delete_1943"><span class="name">Anonymous</span> <time datetime="2019-09-20T22:00:04Z">09/20/19 (Fri) 22:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1943" onclick="return highlightReply(1943, event)" href="/agg/res/1943#1943">No.</a><a class="post_no" onclick="return citeReply(1943)" href="/agg/res/1943#q1943">1943</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1943">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/9756.html>https://kissu.moe/qa/res/9756.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1942" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569016482257.jpg">1569016482257.jpg</a> <span class="unimportant">(509.05 KB, 1200x860, <span class="postfilename" title="eecf69194dd9ad5df54765a8de3d3c967827f1bd.jpg">eecf69194dd9ad5df54765a8de….jpg</span>)</span></p><a href="/agg/src/1569016482257.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569016482257.png" style="width:255px;height:183px" alt="" /></a></div>    </div>    <div class="post op" id="op_1942" ><p class="intro"><input type="checkbox" class="delete" name="delete_1942" id="delete_1942" /><label for="delete_1942"><span class="name">Anonymous</span> <time datetime="2019-09-20T21:55:03Z">09/20/19 (Fri) 21:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1942" onclick="return highlightReply(1942, event)" href="/agg/res/1942#1942">No.</a><a class="post_no" onclick="return citeReply(1942)" href="/agg/res/1942#q1942">1942</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1942">[Reply]</a></p><div class="body">Oh?<br/><a href=https://kissu.moe/qa/res/9754.html>https://kissu.moe/qa/res/9754.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1941" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569016073535.jpg">1569016073535.jpg</a> <span class="unimportant">(17.39 KB, 526x255, <span class="postfilename">1569016001590.jpg</span>)</span></p><a href="/agg/src/1569016073535.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569016073535.jpg" style="width:427px;height:207px" alt="" /></a></div>    </div>    <div class="post op" id="op_1941" ><p class="intro"><input type="checkbox" class="delete" name="delete_1941" id="delete_1941" /><label for="delete_1941"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T21:50:06Z">09/20/19 (Fri) 21:50:06</time></label>&nbsp;<a class="post_no" id="post_no_1941" onclick="return highlightReply(1941, event)" href="/agg/res/1941#1941">No.</a><a class="post_no" onclick="return citeReply(1941)" href="/agg/res/1941#q1941">1941</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1941">[Reply]</a></p><div class="body">fishe<br/><a href=https://gnfos.com/jp/res/369053.html>https://gnfos.com/jp/res/369053.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1940" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569015314841.gif">1569015314841.gif</a> <span class="unimportant">(1.46 MB, 500x629, <span class="postfilename">1441776439510.gif</span>)</span></p><a href="/agg/src/1569015314841.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569015314841.gif" style="width:191px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1940" ><p class="intro"><input type="checkbox" class="delete" name="delete_1940" id="delete_1940" /><label for="delete_1940"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T21:40:04Z">09/20/19 (Fri) 21:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1940" onclick="return highlightReply(1940, event)" href="/agg/res/1940#1940">No.</a><a class="post_no" onclick="return citeReply(1940)" href="/agg/res/1940#q1940">1940</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1940">[Reply]</a></p><div class="body">Tempted?<br/><a href=https://gnfos.com/jp/res/369052.html>https://gnfos.com/jp/res/369052.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1939" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569013532198.jpeg">1569013532198.jpeg</a> <span class="unimportant">(1.6 MB, 3264x2448, <span class="postfilename" title="001ACE36-9A0E-4E5E-9B92-18FE292171FA.jpeg">001ACE36-9A0E-4E5E-9B92-1….jpeg</span>)</span></p><a href="/agg/src/1569013532198.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569013532198.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1939" ><p class="intro"><input type="checkbox" class="delete" name="delete_1939" id="delete_1939" /><label for="delete_1939"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T21:10:04Z">09/20/19 (Fri) 21:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1939" onclick="return highlightReply(1939, event)" href="/agg/res/1939#1939">No.</a><a class="post_no" onclick="return citeReply(1939)" href="/agg/res/1939#q1939">1939</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1939">[Reply]</a></p><div class="body">How many gallons of cum have you excreted over the years<br/><a href=https://gnfos.com/jp/res/369050.html>https://gnfos.com/jp/res/369050.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1938" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569012517614.png">1569012517614.png</a> <span class="unimportant">(34.64 KB, 300x177, <span class="postfilename" title="707506D3-6D71-424B-B9E9-A6CB97CADE55.png">707506D3-6D71-424B-B9E9-A6….png</span>)</span></p><a href="/agg/src/1569012517614.png" target="_blank"><img class="post-image" src="/agg/thumb/1569012517614.png" style="width:300px;height:177px" alt="" /></a></div>    </div>    <div class="post op" id="op_1938" ><p class="intro"><input type="checkbox" class="delete" name="delete_1938" id="delete_1938" /><label for="delete_1938"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T20:50:03Z">09/20/19 (Fri) 20:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1938" onclick="return highlightReply(1938, event)" href="/agg/res/1938#1938">No.</a><a class="post_no" onclick="return citeReply(1938)" href="/agg/res/1938#q1938">1938</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1938">[Reply]</a></p><div class="body">How do I stop masturbating to traumatic memories all day<br/><a href=https://gnfos.com/jp/res/369049.html>https://gnfos.com/jp/res/369049.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1937" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569011946320.jpeg">1569011946320.jpeg</a> <span class="unimportant">(229.19 KB, 750x614, <span class="postfilename" title="8B7BAD58-1D86-49F7-9696-74D7D2231799.jpeg">8B7BAD58-1D86-49F7-9696-7….jpeg</span>)</span></p><a href="/agg/src/1569011946320.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569011946320.jpeg" style="width:293px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1937" ><p class="intro"><input type="checkbox" class="delete" name="delete_1937" id="delete_1937" /><label for="delete_1937"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T20:40:03Z">09/20/19 (Fri) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1937" onclick="return highlightReply(1937, event)" href="/agg/res/1937#1937">No.</a><a class="post_no" onclick="return citeReply(1937)" href="/agg/res/1937#q1937">1937</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1937">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369044.html>https://gnfos.com/jp/res/369044.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1936" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569011282536.jpg">1569011282536.jpg</a> <span class="unimportant">(79.36 KB, 752x624, <span class="postfilename">1524619443205.jpg</span>)</span></p><a href="/agg/src/1569011282536.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569011282536.jpg" style="width:289px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1936" ><p class="intro"><input type="checkbox" class="delete" name="delete_1936" id="delete_1936" /><label for="delete_1936"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T20:30:03Z">09/20/19 (Fri) 20:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1936" onclick="return highlightReply(1936, event)" href="/agg/res/1936#1936">No.</a><a class="post_no" onclick="return citeReply(1936)" href="/agg/res/1936#q1936">1936</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1936">[Reply]</a></p><div class="body"><a href="https://www.dailymail.co.uk/news/article-7486701/Eva-Brauns-knickers-sell-6-000-auction.html" rel="nofollow" target="_blank">https://www.dailymail.co.uk/news/article-7486701/Eva-Brauns-knickers-sell-6-000-auction.html</a><br/><a href=https://gnfos.com/jp/res/369041.html>https://gnfos.com/jp/res/369041.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1935" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569011259368.png">1569011259368.png</a> <span class="unimportant">(267.77 KB, 425x377, <span class="postfilename" title="2F65DAD5-FC9F-47BC-BB85-86935AA38705.png">2F65DAD5-FC9F-47BC-BB85-86….png</span>)</span></p><a href="/agg/src/1569011259368.png" target="_blank"><img class="post-image" src="/agg/thumb/1569011259368.png" style="width:271px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1935" ><p class="intro"><input type="checkbox" class="delete" name="delete_1935" id="delete_1935" /><label for="delete_1935"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T20:30:03Z">09/20/19 (Fri) 20:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1935" onclick="return highlightReply(1935, event)" href="/agg/res/1935#1935">No.</a><a class="post_no" onclick="return citeReply(1935)" href="/agg/res/1935#q1935">1935</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1935">[Reply]</a></p><div class="body">Bruh I need serious help<br/><a href=https://gnfos.com/jp/res/369040.html>https://gnfos.com/jp/res/369040.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1934" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569010763448.png">1569010763448.png</a> <span class="unimportant">(368.69 KB, 480x479, <span class="postfilename">1567829112842.png</span>)</span></p><a href="/agg/src/1569010763448.png" target="_blank"><img class="post-image" src="/agg/thumb/1569010763448.png" style="width:241px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1934" ><p class="intro"><input type="checkbox" class="delete" name="delete_1934" id="delete_1934" /><label for="delete_1934"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T20:20:04Z">09/20/19 (Fri) 20:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1934" onclick="return highlightReply(1934, event)" href="/agg/res/1934#1934">No.</a><a class="post_no" onclick="return citeReply(1934)" href="/agg/res/1934#q1934">1934</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1934">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369038.html>https://gnfos.com/jp/res/369038.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1933" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569010506762.png">1569010506762.png</a> <span class="unimportant">(827.84 KB, 800x450, <span class="postfilename" title="6A3C8F16-5D24-43B4-A8DD-5988929CC074.png">6A3C8F16-5D24-43B4-A8DD-59….png</span>)</span></p><a href="/agg/src/1569010506762.png" target="_blank"><img class="post-image" src="/agg/thumb/1569010506762.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1933" ><p class="intro"><input type="checkbox" class="delete" name="delete_1933" id="delete_1933" /><label for="delete_1933"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-20T20:20:04Z">09/20/19 (Fri) 20:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1933" onclick="return highlightReply(1933, event)" href="/agg/res/1933#1933">No.</a><a class="post_no" onclick="return citeReply(1933)" href="/agg/res/1933#q1933">1933</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1933">[Reply]</a></p><div class="body">Where&#39;s all my posts<br/><a href=https://gnfos.com/jp/res/369037.html>https://gnfos.com/jp/res/369037.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1932" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569009478168.png">1569009478168.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="3DEF04E2-5DAF-49B6-A80C-F0D79D0458E3.png">3DEF04E2-5DAF-49B6-A80C-F0….png</span>)</span></p><a href="/agg/src/1569009478168.png" target="_blank"><img class="post-image" src="/agg/thumb/1569009478168.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1932" ><p class="intro"><input type="checkbox" class="delete" name="delete_1932" id="delete_1932" /><label for="delete_1932"><span class="name">Idiot</span> <time datetime="2019-09-20T20:00:04Z">09/20/19 (Fri) 20:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1932" onclick="return highlightReply(1932, event)" href="/agg/res/1932#1932">No.</a><a class="post_no" onclick="return citeReply(1932)" href="/agg/res/1932#q1932">1932</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1932">[Reply]</a></p><div class="body">Why does my crush have to have a nice bf<br/><a href=https://gnfos.com/jp/res/369036.html>https://gnfos.com/jp/res/369036.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1931" data-board="agg"><div class="video-container" data-video="WTDNEhDyKdo"><a href="https://youtu.be/WTDNEhDyKdo" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/WTDNEhDyKdo/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1931" ><p class="intro"><input type="checkbox" class="delete" name="delete_1931" id="delete_1931" /><label for="delete_1931"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T18:40:03Z">09/20/19 (Fri) 18:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1931" onclick="return highlightReply(1931, event)" href="/agg/res/1931#1931">No.</a><a class="post_no" onclick="return citeReply(1931)" href="/agg/res/1931#q1931">1931</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1931">[Reply]</a></p><div class="body">She doesn&#39;t age cuz if all the boys that Jack off to her and give her their life force<br/><a href=https://gnfos.com/jp/res/369035.html>https://gnfos.com/jp/res/369035.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/10" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a class="selected">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/12" method="get"><input type="submit" value="Next" /></form>
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