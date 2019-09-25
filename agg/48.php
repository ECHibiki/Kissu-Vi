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
			<img class="board_image" src="/static/banners/banner-kissu-16.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div  style="display:none"><input  type="text"  name="text"  value="qmsSY[vpLH2P\1y@b,k_"></div>
<span style="display:none"><input type="text" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2"></span>
<input type="hidden" name="board" value="agg">
<input   style="display:none"   type="text"   value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj"   name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" name="message" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<span style="display:none"><input type="text" name="q" value=" f♻⛭♃9&#47;&#113;&#122;wZk.@&#104;&#124;;$LF⛡mdv,ER83&#87;%1Y&#73;M^iU☌5&#9741;+A&#103;☪T=`}&#9873;yc7J⛮&#80;#b&#63;⚤6X&amp;{&#68;x \4NpKHn&#58;)"></span>
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" name="y0kh38z9do♒sb" >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input name="search" value="b☵#Y{7`9J⚴@V^6_-" type="hidden">
			
			
				
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
		<div class="thread" id="thread_1198" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564651610788.png">1564651610788.png</a> <span class="unimportant">(1.03 MB, 1914x1080, <span class="postfilename">misc 2195.png</span>)</span></p><a href="/agg/src/1564651610788.png" target="_blank"><img class="post-image" src="/agg/thumb/1564651610788.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1198" ><p class="intro"><input type="checkbox" class="delete" name="delete_1198" id="delete_1198" /><label for="delete_1198"><span class="name">Anonymous</span> <time datetime="2019-08-01T09:30:02Z">08/01/19 (Thu) 09:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1198" onclick="return highlightReply(1198, event)" href="/agg/res/1198#1198">No.</a><a class="post_no" onclick="return citeReply(1198)" href="/agg/res/1198#q1198">1198</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1198">[Reply]</a></p><div class="body">whatmin never learned how to count tree rings because he dropped out of grade school<br/><a href=http://what-ch.mooo.com/what/res/1555.html>http://what-ch.mooo.com/what/res/1555.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1197" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564638781384.png">1564638781384.png</a> <span class="unimportant">(369.08 KB, 391x586, <span class="postfilename">4691160_003_96c5.png</span>)</span></p><a href="/agg/src/1564638781384.png" target="_blank"><img class="post-image" src="/agg/thumb/1564638781384.png" style="width:161px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1197" ><p class="intro"><input type="checkbox" class="delete" name="delete_1197" id="delete_1197" /><label for="delete_1197"><span class="name">Anonymous</span> <time datetime="2019-08-01T05:55:02Z">08/01/19 (Thu) 05:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1197" onclick="return highlightReply(1197, event)" href="/agg/res/1197#1197">No.</a><a class="post_no" onclick="return citeReply(1197)" href="/agg/res/1197#q1197">1197</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1197">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1551.html>http://what-ch.mooo.com/what/res/1551.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1196" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564633835304.jpg">1564633835304.jpg</a> <span class="unimportant">(575.98 KB, 860x1200, <span class="postfilename" title="ab9bf40aa010780a7dd3110a61b31e98.jpg">ab9bf40aa010780a7dd3110a61….jpg</span>)</span></p><a href="/agg/src/1564633835304.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564633835304.png" style="width:172px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1196" ><p class="intro"><input type="checkbox" class="delete" name="delete_1196" id="delete_1196" /><label for="delete_1196"><span class="name">Anonymous</span> <time datetime="2019-08-01T04:35:03Z">08/01/19 (Thu) 04:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1196" onclick="return highlightReply(1196, event)" href="/agg/res/1196#1196">No.</a><a class="post_no" onclick="return citeReply(1196)" href="/agg/res/1196#q1196">1196</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1196">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1545.html>http://what-ch.mooo.com/what/res/1545.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1195" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564623909646.jpg">1564623909646.jpg</a> <span class="unimportant">(52.85 KB, 266x266, <span class="postfilename">1564600914184.jpg</span>)</span></p><a href="/agg/src/1564623909646.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564623909646.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1195" ><p class="intro"><input type="checkbox" class="delete" name="delete_1195" id="delete_1195" /><label for="delete_1195"><span class="name">Chihaya Kisaragi</span> <time datetime="2019-08-01T01:50:02Z">08/01/19 (Thu) 01:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1195" onclick="return highlightReply(1195, event)" href="/agg/res/1195#1195">No.</a><a class="post_no" onclick="return citeReply(1195)" href="/agg/res/1195#q1195">1195</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1195">[Reply]</a></p><div class="body"><span class="quote">&gt;He moderates a anime board with a total. of 5 posters on it, out of which only I could even be considered human </span><br/><a href=https://kakashi-nenpo.com/jp/res/32547.html>https://kakashi-nenpo.com/jp/res/32547.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1194" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564623540119.jpg">1564623540119.jpg</a> <span class="unimportant">(52.85 KB, 266x266, <span class="postfilename">1564600914184.jpg</span>)</span></p><a href="/agg/src/1564623540119.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564623540119.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1194" ><p class="intro"><input type="checkbox" class="delete" name="delete_1194" id="delete_1194" /><label for="delete_1194"><span class="name">Anonymous</span> <time datetime="2019-08-01T01:40:04Z">08/01/19 (Thu) 01:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1194" onclick="return highlightReply(1194, event)" href="/agg/res/1194#1194">No.</a><a class="post_no" onclick="return citeReply(1194)" href="/agg/res/1194#q1194">1194</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1194">[Reply]</a></p><div class="body"><span class="quote">&gt;He moderates a anime board with a total. of 5 posters on it, out of which only I could even be considered human </span><br/><a href=http://what-ch.mooo.com/what/res/1537.html>http://what-ch.mooo.com/what/res/1537.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1193" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564605516621.jpg">1564605516621.jpg</a> <span class="unimportant">(750.39 KB, 1736x1736, <span class="postfilename">273582.jpg</span>)</span></p><a href="/agg/src/1564605516621.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564605516621.png" style="width:241px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1193" ><p class="intro"><input type="checkbox" class="delete" name="delete_1193" id="delete_1193" /><label for="delete_1193"><span class="name">Anonymous</span> <time datetime="2019-07-31T20:40:04Z">07/31/19 (Wed) 20:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1193" onclick="return highlightReply(1193, event)" href="/agg/res/1193#1193">No.</a><a class="post_no" onclick="return citeReply(1193)" href="/agg/res/1193#q1193">1193</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1193">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1529.html>http://what-ch.mooo.com/what/res/1529.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1192" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564565962325.jpg">1564565962325.jpg</a> <span class="unimportant">(529.79 KB, 1200x931, <span class="postfilename">hey.jpg</span>)</span></p><a href="/agg/src/1564565962325.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564565962325.png" style="width:255px;height:198px" alt="" /></a></div>    </div>    <div class="post op" id="op_1192" ><p class="intro"><input type="checkbox" class="delete" name="delete_1192" id="delete_1192" /><label for="delete_1192"><span class="name">Anonymous</span> <time datetime="2019-07-31T09:40:02Z">07/31/19 (Wed) 09:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1192" onclick="return highlightReply(1192, event)" href="/agg/res/1192#1192">No.</a><a class="post_no" onclick="return citeReply(1192)" href="/agg/res/1192#q1192">1192</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1192">[Reply]</a></p><div class="body">boson<br/><a href=https://kissu.moe/qa/res/4569.html>https://kissu.moe/qa/res/4569.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1191" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564533490736.png">1564533490736.png</a> <span class="unimportant">(1.29 MB, 1920x1080, <span class="postfilename" title="b9561e0fb380533973fb18128110fe638eed8ac2f1f77b3150b8f41077428db9.png">b9561e0fb380533973fb181281….png</span>)</span></p><a href="/agg/src/1564533490736.png" target="_blank"><img class="post-image" src="/agg/thumb/1564533490736.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1191" ><p class="intro"><input type="checkbox" class="delete" name="delete_1191" id="delete_1191" /><label for="delete_1191"><span class="name">Anonymous</span> <time datetime="2019-07-31T00:40:02Z">07/31/19 (Wed) 00:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1191" onclick="return highlightReply(1191, event)" href="/agg/res/1191#1191">No.</a><a class="post_no" onclick="return citeReply(1191)" href="/agg/res/1191#q1191">1191</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1191">[Reply]</a></p><div class="body">Oyasumi /what/.<br/><a href=http://what-ch.mooo.com/what/res/1509.html>http://what-ch.mooo.com/what/res/1509.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1190" data-board="agg">    <div class="files">    </div>    <div class="post op" id="op_1190" ><p class="intro"><input type="checkbox" class="delete" name="delete_1190" id="delete_1190" /><label for="delete_1190"><span class="name">Anonymous</span> <time datetime="2019-07-31T00:00:03Z">07/31/19 (Wed) 00:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1190" onclick="return highlightReply(1190, event)" href="/agg/res/1190#1190">No.</a><a class="post_no" onclick="return citeReply(1190)" href="/agg/res/1190#q1190">1190</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1190">[Reply]</a></p><div class="body">/what/time midnight cumpost.<br/><br/>post cums only at midnight.<br/><a href=http://what-ch.mooo.com/what/res/1507.html>http://what-ch.mooo.com/what/res/1507.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1189" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564522921424.gif">1564522921424.gif</a> <span class="unimportant">(988.13 KB, 500x281, <span class="postfilename">1564297544360.gif</span>)</span></p><a href="/agg/src/1564522921424.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564522921424.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1189" ><p class="intro"><input type="checkbox" class="delete" name="delete_1189" id="delete_1189" /><label for="delete_1189"><span class="name">Anonymous</span> <time datetime="2019-07-30T21:45:03Z">07/30/19 (Tue) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1189" onclick="return highlightReply(1189, event)" href="/agg/res/1189#1189">No.</a><a class="post_no" onclick="return citeReply(1189)" href="/agg/res/1189#q1189">1189</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1189">[Reply]</a></p><div class="body"><a href="https://nhentai.net/search/?q=artist%3A%22itoyoko%22+eng" rel="nofollow" target="_blank">https://nhentai.net/search/?q=artist%3A%22itoyoko%22+eng</a><br/><br/>It is I who nuts to that.<br/><a href=http://what-ch.mooo.com/what/res/1501.html>http://what-ch.mooo.com/what/res/1501.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1188" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564519984019.jpg">1564519984019.jpg</a> <span class="unimportant">(343.39 KB, 1307x1684, <span class="postfilename">1564511251053.jpg</span>)</span></p><a href="/agg/src/1564519984019.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564519984019.png" style="width:187px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1188" ><p class="intro"><input type="checkbox" class="delete" name="delete_1188" id="delete_1188" /><label for="delete_1188"><span class="name">Anonymous</span> <time datetime="2019-07-30T20:55:03Z">07/30/19 (Tue) 20:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1188" onclick="return highlightReply(1188, event)" href="/agg/res/1188#1188">No.</a><a class="post_no" onclick="return citeReply(1188)" href="/agg/res/1188#q1188">1188</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1188">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1498.html>http://what-ch.mooo.com/what/res/1498.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1187" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564501298996.gif">1564501298996.gif</a> <span class="unimportant">(494.95 KB, 700x393, <span class="postfilename">76492.gif</span>)</span></p><a href="/agg/src/1564501298996.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564501298996.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1187" ><p class="intro"><input type="checkbox" class="delete" name="delete_1187" id="delete_1187" /><label for="delete_1187"><span class="name">Anonymous</span> <time datetime="2019-07-30T15:45:02Z">07/30/19 (Tue) 15:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1187" onclick="return highlightReply(1187, event)" href="/agg/res/1187#1187">No.</a><a class="post_no" onclick="return citeReply(1187)" href="/agg/res/1187#q1187">1187</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1187">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1495.html>http://what-ch.mooo.com/what/res/1495.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1186" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564500924027.png">1564500924027.png</a> <span class="unimportant">(1.89 MB, 1842x926, <span class="postfilename">mod me.png</span>)</span></p><a href="/agg/src/1564500924027.png" target="_blank"><img class="post-image" src="/agg/thumb/1564500924027.png" style="width:240px;height:121px" alt="" /></a></div>    </div>    <div class="post op" id="op_1186" ><p class="intro"><input type="checkbox" class="delete" name="delete_1186" id="delete_1186" /><label for="delete_1186"><span class="name">Anonymous</span> <time datetime="2019-07-30T15:40:03Z">07/30/19 (Tue) 15:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1186" onclick="return highlightReply(1186, event)" href="/agg/res/1186#1186">No.</a><a class="post_no" onclick="return citeReply(1186)" href="/agg/res/1186#q1186">1186</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1186">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1492.html>http://what-ch.mooo.com/what/res/1492.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1185" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564491818562.png">1564491818562.png</a> <span class="unimportant">(1.94 MB, 1378x2039, <span class="postfilename" title="8e0400aef389120761417c9335922e2b.png">8e0400aef389120761417c9335….png</span>)</span></p><a href="/agg/src/1564491818562.png" target="_blank"><img class="post-image" src="/agg/thumb/1564491818562.png" style="width:163px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1185" ><p class="intro"><input type="checkbox" class="delete" name="delete_1185" id="delete_1185" /><label for="delete_1185"><span class="name">Anonymous</span> <time datetime="2019-07-30T13:05:02Z">07/30/19 (Tue) 13:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1185" onclick="return highlightReply(1185, event)" href="/agg/res/1185#1185">No.</a><a class="post_no" onclick="return citeReply(1185)" href="/agg/res/1185#q1185">1185</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1185">[Reply]</a></p><div class="body">I should be mod<br/><a href=http://what-ch.mooo.com/what/res/1486.html>http://what-ch.mooo.com/what/res/1486.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1184" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564489679233.jpg">1564489679233.jpg</a> <span class="unimportant">(93.31 KB, 450x350, <span class="postfilename">5621943_p0_master1200.jpg</span>)</span></p><a href="/agg/src/1564489679233.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564489679233.png" style="width:240px;height:187px" alt="" /></a></div>    </div>    <div class="post op" id="op_1184" ><p class="intro"><input type="checkbox" class="delete" name="delete_1184" id="delete_1184" /><label for="delete_1184"><span class="name">Anonymous</span> <time datetime="2019-07-30T12:30:02Z">07/30/19 (Tue) 12:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1184" onclick="return highlightReply(1184, event)" href="/agg/res/1184#1184">No.</a><a class="post_no" onclick="return citeReply(1184)" href="/agg/res/1184#q1184">1184</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1184">[Reply]</a></p><div class="body">mod me<br/><a href=http://what-ch.mooo.com/what/res/1485.html>http://what-ch.mooo.com/what/res/1485.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1183" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564482897467.png">1564482897467.png</a> <span class="unimportant">(1.03 MB, 1914x1080, <span class="postfilename">misc 2195.png</span>)</span></p><a href="/agg/src/1564482897467.png" target="_blank"><img class="post-image" src="/agg/thumb/1564482897467.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1183" ><p class="intro"><input type="checkbox" class="delete" name="delete_1183" id="delete_1183" /><label for="delete_1183"><span class="name">Anonymous</span> <time datetime="2019-07-30T10:35:03Z">07/30/19 (Tue) 10:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1183" onclick="return highlightReply(1183, event)" href="/agg/res/1183#1183">No.</a><a class="post_no" onclick="return citeReply(1183)" href="/agg/res/1183#q1183">1183</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1183">[Reply]</a></p><div class="body">can i be a moderator on here<br/><a href=http://what-ch.mooo.com/what/res/1481.html>http://what-ch.mooo.com/what/res/1481.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1182" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564474676192.png">1564474676192.png</a> <span class="unimportant">(1.23 MB, 923x1500, <span class="postfilename">Brenton8chad.png</span>)</span></p><a href="/agg/src/1564474676192.png" target="_blank"><img class="post-image" src="/agg/thumb/1564474676192.png" style="width:148px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1182" ><p class="intro"><input type="checkbox" class="delete" name="delete_1182" id="delete_1182" /><label for="delete_1182"><span class="name">Anonymous</span> <time datetime="2019-07-30T08:20:02Z">07/30/19 (Tue) 08:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1182" onclick="return highlightReply(1182, event)" href="/agg/res/1182#1182">No.</a><a class="post_no" onclick="return citeReply(1182)" href="/agg/res/1182#q1182">1182</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1182">[Reply]</a></p><div class="body">When will /what/ become as epic as 8chan /pol/?<br/><a href=http://what-ch.mooo.com/what/res/1470.html>http://what-ch.mooo.com/what/res/1470.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1181" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564472693718.png">1564472693718.png</a> <span class="unimportant">(165.65 KB, 686x699, <span class="postfilename">misc 2104.png</span>)</span></p><a href="/agg/src/1564472693718.png" target="_blank"><img class="post-image" src="/agg/thumb/1564472693718.png" style="width:236px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1181" ><p class="intro"><input type="checkbox" class="delete" name="delete_1181" id="delete_1181" /><label for="delete_1181"><span class="name">Anonymous</span> <time datetime="2019-07-30T07:45:02Z">07/30/19 (Tue) 07:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1181" onclick="return highlightReply(1181, event)" href="/agg/res/1181#1181">No.</a><a class="post_no" onclick="return citeReply(1181)" href="/agg/res/1181#q1181">1181</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1181">[Reply]</a></p><div class="body"><a href="https://www.patreon.com/warosu" rel="nofollow" target="_blank">https://www.patreon.com/warosu</a><br/><a href=http://what-ch.mooo.com/what/res/1469.html>http://what-ch.mooo.com/what/res/1469.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1180" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564468488543.jpg">1564468488543.jpg</a> <span class="unimportant">(73.6 KB, 639x360, <span class="postfilename" title="ef4f8f3ae327c4f329546d5a0b055c5d1286249840.jpg">ef4f8f3ae327c4f329546d5a0b….jpg</span>)</span></p><a href="/agg/src/1564468488543.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564468488543.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1180" ><p class="intro"><input type="checkbox" class="delete" name="delete_1180" id="delete_1180" /><label for="delete_1180"><span class="name">Anonymous</span> <time datetime="2019-07-30T06:35:02Z">07/30/19 (Tue) 06:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1180" onclick="return highlightReply(1180, event)" href="/agg/res/1180#1180">No.</a><a class="post_no" onclick="return citeReply(1180)" href="/agg/res/1180#q1180">1180</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1180">[Reply]</a></p><div class="body">For art, I give FULL 10 points. The main girls are Lilpris (Little Princesses) Ringo (Apple), Natsuki, and Layla. The girls are SOOO CHIBI CUTE! Their cuteness are off the meter. Every time I watch them, I smile and wanna hug them. My heart feels like it&#39;s gonna burst because the girls are just too cute. You know it&#39;s instant love when you get that feeling. They are absolutely adorable! The girls also have a shoujo form they can transform into with magic, turning into singing idols. They look PRETTY, whole lot better than your average shoujo girl, but I much prefer their Chibi form. As for the supporting cast, they are all divese, wonderful characters mainly from Fairyland.<br/><a href=http://what-ch.mooo.com/what/res/1464.html>http://what-ch.mooo.com/what/res/1464.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1179" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564465686548.jpg">1564465686548.jpg</a> <span class="unimportant">(631.03 KB, 1080x2368, <span class="postfilename">image0.jpg</span>)</span></p><a href="/agg/src/1564465686548.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564465686548.png" style="width:110px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1179" ><p class="intro"><input type="checkbox" class="delete" name="delete_1179" id="delete_1179" /><label for="delete_1179"><span class="name">Anonymous</span> <time datetime="2019-07-30T05:50:02Z">07/30/19 (Tue) 05:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1179" onclick="return highlightReply(1179, event)" href="/agg/res/1179#1179">No.</a><a class="post_no" onclick="return citeReply(1179)" href="/agg/res/1179#q1179">1179</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1179">[Reply]</a></p><div class="body"><span class="quote">&gt;/what/</span><br/><a href=http://what-ch.mooo.com/what/res/1463.html>http://what-ch.mooo.com/what/res/1463.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/47" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a class="selected">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/49" method="get"><input type="submit" value="Next" /></form>
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