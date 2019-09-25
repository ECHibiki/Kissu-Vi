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
<input style="display:none" type="text" value="qmsSY[vpLH2P\1y@b,k_" name="text">
<textarea name="firstname" style="display:none">f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2</textarea>
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input  type="hidden"  value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["  name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value=" &#102;&#9851;⛭♃&#57;/&#113;z&#119;Zk.&#64;h|;$&#76;F&#9953;mdv,ER83&#87;%1YIM^iU&#9740;5☍+Ag☪&#84;=`}&#9873;y&#99;7&#74;⛮&#80;#b&#63;&#9892;6X&amp;{Dx&#32;\&#52;NpK&#72;&#110;:)" name="q">
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" name="y0kh38z9do♒sb" type="hidden">
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
		<div class="thread" id="thread_1329" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565913843327.jpg">1565913843327.jpg</a> <span class="unimportant">(111.27 KB, 620x413, <span class="postfilename">1565678730571.jpg</span>)</span></p><a href="/agg/src/1565913843327.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565913843327.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1329" ><p class="intro"><input type="checkbox" class="delete" name="delete_1329" id="delete_1329" /><label for="delete_1329"><span class="name">Anonymous</span> <time datetime="2019-08-16T00:05:03Z">08/16/19 (Fri) 00:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1329" onclick="return highlightReply(1329, event)" href="/agg/res/1329#1329">No.</a><a class="post_no" onclick="return citeReply(1329)" href="/agg/res/1329#q1329">1329</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1329">[Reply]</a></p><div class="body">Is this an anthropomorphic ("furry") image?<br/><a href=https://kissu.moe/qa/res/4704.html>https://kissu.moe/qa/res/4704.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1328" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565913811799.jpg">1565913811799.jpg</a> <span class="unimportant">(152.23 KB, 1024x685, <span class="postfilename">1024px-Matsumoto_castle.jpg</span>)</span></p><a href="/agg/src/1565913811799.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565913811799.png" style="width:255px;height:171px" alt="" /></a></div>    </div>    <div class="post op" id="op_1328" ><p class="intro"><input type="checkbox" class="delete" name="delete_1328" id="delete_1328" /><label for="delete_1328"><span class="name">Anonymous</span> <time datetime="2019-08-16T00:05:03Z">08/16/19 (Fri) 00:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1328" onclick="return highlightReply(1328, event)" href="/agg/res/1328#1328">No.</a><a class="post_no" onclick="return citeReply(1328)" href="/agg/res/1328#q1328">1328</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1328">[Reply]</a></p><div class="body">If you had unlimited funds, what kind of building would you want to live in? What about the surroundings?<br/>For me it&#39;s hard to not choose the fancy Japanese stuff and their very peaceful and harmonious gardens.<br/><a href=https://kissu.moe/qa/res/4703.html>https://kissu.moe/qa/res/4703.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1327" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565912894251.png">1565912894251.png</a> <span class="unimportant">(196 B, 128x128, <span class="postfilename">icon128.png</span>)</span></p><a href="/agg/src/1565912894251.png" target="_blank"><img class="post-image" src="/agg/thumb/1565912894251.png" style="width:128px;height:128px" alt="" /></a></div>    </div>    <div class="post op" id="op_1327" ><p class="intro"><input type="checkbox" class="delete" name="delete_1327" id="delete_1327" /><label for="delete_1327"><span class="name">Anonymous</span> <time datetime="2019-08-15T23:50:02Z">08/15/19 (Thu) 23:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1327" onclick="return highlightReply(1327, event)" href="/agg/res/1327#1327">No.</a><a class="post_no" onclick="return citeReply(1327)" href="/agg/res/1327#q1327">1327</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1327">[Reply]</a></p><div class="body">What can be done to help /qa/ right now from 4chan X&#39;s end? I&#39;m thinking of enabling it on Kissu by default (something I plan to do anyway in September along with a lot of other boards). But is there anything else that would be useful?<br/><a href=https://kissu.moe/qa/res/4700.html>https://kissu.moe/qa/res/4700.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1326" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565911861906.png">1565911861906.png</a> <span class="unimportant">(451.9 KB, 1334x1254, <span class="postfilename">1565668892897.png</span>)</span></p><a href="/agg/src/1565911861906.png" target="_blank"><img class="post-image" src="/agg/thumb/1565911861906.png" style="width:255px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1326" ><p class="intro"><input type="checkbox" class="delete" name="delete_1326" id="delete_1326" /><label for="delete_1326"><span class="name">Anonymous</span> <time datetime="2019-08-15T23:35:07Z">08/15/19 (Thu) 23:35:07</time></label>&nbsp;<a class="post_no" id="post_no_1326" onclick="return highlightReply(1326, event)" href="/agg/res/1326#1326">No.</a><a class="post_no" onclick="return citeReply(1326)" href="/agg/res/1326#q1326">1326</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1326">[Reply]</a></p><div class="body">What do you think of the newhus?<br/><a href=https://kissu.moe/qa/res/4694.html>https://kissu.moe/qa/res/4694.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1325" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565891593016.gif">1565891593016.gif</a> <span class="unimportant">(477.29 KB, 240x320, <span class="postfilename">1565538060863.gif</span>)</span></p><a href="/agg/src/1565891593016.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565891593016.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1325" ><p class="intro"><input type="checkbox" class="delete" name="delete_1325" id="delete_1325" /><label for="delete_1325"><span class="name">Anonymous</span> <time datetime="2019-08-15T17:55:03Z">08/15/19 (Thu) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1325" onclick="return highlightReply(1325, event)" href="/agg/res/1325#1325">No.</a><a class="post_no" onclick="return citeReply(1325)" href="/agg/res/1325#q1325">1325</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1325">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=RUmhADkPwIY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=RUmhADkPwIY</a><br/><br/>lol<br/><a href=http://what-ch.mooo.com/what/res/1998.html>http://what-ch.mooo.com/what/res/1998.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1324" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565877196927.jpg">1565877196927.jpg</a> <span class="unimportant">(277.69 KB, 2048x1536, <span class="postfilename">1565764448504.jpg</span>)</span></p><a href="/agg/src/1565877196927.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565877196927.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1324" ><p class="intro"><input type="checkbox" class="delete" name="delete_1324" id="delete_1324" /><label for="delete_1324"><span class="name">Anonymous</span> <time datetime="2019-08-15T13:55:02Z">08/15/19 (Thu) 13:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1324" onclick="return highlightReply(1324, event)" href="/agg/res/1324#1324">No.</a><a class="post_no" onclick="return citeReply(1324)" href="/agg/res/1324#q1324">1324</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1324">[Reply]</a></p><div class="body">Fapping to this RIGHT now<br/><a href=http://what-ch.mooo.com/what/res/1991.html>http://what-ch.mooo.com/what/res/1991.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1323" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565859330736.png">1565859330736.png</a> <span class="unimportant">(1.66 MB, 1600x1600, <span class="postfilename">63128914_p0.png</span>)</span></p><a href="/agg/src/1565859330736.png" target="_blank"><img class="post-image" src="/agg/thumb/1565859330736.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1323" ><p class="intro"><input type="checkbox" class="delete" name="delete_1323" id="delete_1323" /><label for="delete_1323"><span class="name">Anonymous</span> <time datetime="2019-08-15T09:00:04Z">08/15/19 (Thu) 09:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1323" onclick="return highlightReply(1323, event)" href="/agg/res/1323#1323">No.</a><a class="post_no" onclick="return citeReply(1323)" href="/agg/res/1323#q1323">1323</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1323">[Reply]</a></p><div class="body">do you like linux?<br/><a href=https://kissu.moe/qa/res/4675.html>https://kissu.moe/qa/res/4675.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1322" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565858931163.png">1565858931163.png</a> <span class="unimportant">(379.66 KB, 673x900, <span class="postfilename">flanhide.png</span>)</span></p><a href="/agg/src/1565858931163.png" target="_blank"><img class="post-image" src="/agg/thumb/1565858931163.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1322" ><p class="intro"><input type="checkbox" class="delete" name="delete_1322" id="delete_1322" /><label for="delete_1322"><span class="name">Anonymous</span> <time datetime="2019-08-15T08:50:04Z">08/15/19 (Thu) 08:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1322" onclick="return highlightReply(1322, event)" href="/agg/res/1322#1322">No.</a><a class="post_no" onclick="return citeReply(1322)" href="/agg/res/1322#q1322">1322</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1322">[Reply]</a></p><div class="body">Will I need to stretch my brain and create 30 threads and hope one of them takes off? That&#39;s how I did it on /qa/.<br/>Bump any threads you like because I&#39;ll be trying to get some activity here.<br/><a href=https://kissu.moe/qa/res/4673.html>https://kissu.moe/qa/res/4673.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1321" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565846244870.jpg">1565846244870.jpg</a> <span class="unimportant">(36.03 KB, 550x366, <span class="postfilename">174255-004-9A4971E9.jpg</span>)</span></p><a href="/agg/src/1565846244870.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565846244870.png" style="width:240px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1321" ><p class="intro"><input type="checkbox" class="delete" name="delete_1321" id="delete_1321" /><label for="delete_1321"><span class="name">Anonymous</span> <time datetime="2019-08-15T05:20:03Z">08/15/19 (Thu) 05:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1321" onclick="return highlightReply(1321, event)" href="/agg/res/1321#1321">No.</a><a class="post_no" onclick="return citeReply(1321)" href="/agg/res/1321#q1321">1321</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1321">[Reply]</a></p><div class="body"><br/>A good website in a weary world welcomes people like yourself <a href="https://cow.vg/" rel="nofollow" target="_blank">https://cow.vg/</a> or @Tor <a href="http://2ftgu27lxmjmc3bjlqvzbn4gorx5yku3kylhbsn6g4ggum2e2jgcpoqd.onion/" rel="nofollow" target="_blank">http://2ftgu27lxmjmc3bjlqvzbn4gorx5yku3kylhbsn6g4ggum2e2jgcpoqd.onion/</a> Share the word, this is not spam but a special invitation to you. This invitation is unique and not many will get it, so rejoice. Our website is especially designed to help you tune into yourself, into your cow. Into the possibilities of milky delight that you will discover within you. Each time you visit our website you will understand more, and more will rise up within you in response. Visit our website, again and again. Visit alone, or with your cow. Try whatever appeals to you in the course of your visit and click something new! something different... each time. Then when you are comfortable with everything on our website use is as a wallpaper for your computer, let it become a part of your imagination, a part of you. The possibilities that this website will open are truly limitless.<br/><a href=http://what-ch.mooo.com/what/res/1982.html>http://what-ch.mooo.com/what/res/1982.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1320" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565837454264.jpg">1565837454264.jpg</a> <span class="unimportant">(381.23 KB, 1472x2048, <span class="postfilename">wfelnqy9ayc31.jpg</span>)</span></p><a href="/agg/src/1565837454264.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565837454264.png" style="width:173px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1320" ><p class="intro"><input type="checkbox" class="delete" name="delete_1320" id="delete_1320" /><label for="delete_1320"><span class="name">Anonymous</span> <time datetime="2019-08-15T02:55:03Z">08/15/19 (Thu) 02:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1320" onclick="return highlightReply(1320, event)" href="/agg/res/1320#1320">No.</a><a class="post_no" onclick="return citeReply(1320)" href="/agg/res/1320#q1320">1320</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1320">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1979.html>http://what-ch.mooo.com/what/res/1979.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1319" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565806505148.jpg">1565806505148.jpg</a> <span class="unimportant">(329.39 KB, 1135x1880, <span class="postfilename">1565708632122.jpg</span>)</span></p><a href="/agg/src/1565806505148.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565806505148.png" style="width:145px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1319" ><p class="intro"><input type="checkbox" class="delete" name="delete_1319" id="delete_1319" /><label for="delete_1319"><span class="name">Anonymous</span> <time datetime="2019-08-14T18:20:03Z">08/14/19 (Wed) 18:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1319" onclick="return highlightReply(1319, event)" href="/agg/res/1319#1319">No.</a><a class="post_no" onclick="return citeReply(1319)" href="/agg/res/1319#q1319">1319</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1319">[Reply]</a></p><div class="body">imagine putting your penis inside rikka and cumming!!<br/><a href=http://what-ch.mooo.com/what/res/1968.html>http://what-ch.mooo.com/what/res/1968.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1318" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565804317834.jpg">1565804317834.jpg</a> <span class="unimportant">(218.37 KB, 1280x720, <span class="postfilename" title="mpv-watch?v=4dZFVJhtJE0-00:00:30.583.jpg">mpv-watch?v=4dZFVJhtJE0-00….jpg</span>)</span></p><a href="/agg/src/1565804317834.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565804317834.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1318" ><p class="intro"><input type="checkbox" class="delete" name="delete_1318" id="delete_1318" /><label for="delete_1318"><span class="name">Anonymous</span> <time datetime="2019-08-14T17:40:03Z">08/14/19 (Wed) 17:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1318" onclick="return highlightReply(1318, event)" href="/agg/res/1318#1318">No.</a><a class="post_no" onclick="return citeReply(1318)" href="/agg/res/1318#q1318">1318</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1318">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=4dZFVJhtJE0" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=4dZFVJhtJE0</a><br/><span class="quote"><br/>&gt;Mitsu hoshi chef hanashi de run away</span><br/>The 3-star chef ran away<br/><span class="quote">&gt;Detarame recipe de okay go my way</span><br/>So I&#39;m okay with a bullshit recipe<br/><a href=http://what-ch.mooo.com/what/res/1967.html>http://what-ch.mooo.com/what/res/1967.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1317" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565767739650.jpg">1565767739650.jpg</a> <span class="unimportant">(112.28 KB, 1000x682, <span class="postfilename">35mm-10292-030d.jpg</span>)</span></p><a href="/agg/src/1565767739650.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565767739650.png" style="width:240px;height:164px" alt="" /></a></div>    </div>    <div class="post op" id="op_1317" ><p class="intro"><input type="checkbox" class="delete" name="delete_1317" id="delete_1317" /><label for="delete_1317"><span class="name">Anonymous</span> <time datetime="2019-08-14T07:30:02Z">08/14/19 (Wed) 07:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1317" onclick="return highlightReply(1317, event)" href="/agg/res/1317#1317">No.</a><a class="post_no" onclick="return citeReply(1317)" href="/agg/res/1317#q1317">1317</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1317">[Reply]</a></p><div class="body">Those dang millennials always looking at their phones... Back in my day things were different.<br/><a href=http://what-ch.mooo.com/what/res/1959.html>http://what-ch.mooo.com/what/res/1959.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1316" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565713722426.jpg">1565713722426.jpg</a> <span class="unimportant">(329.39 KB, 1135x1880, <span class="postfilename">1565708632122.jpg</span>)</span></p><a href="/agg/src/1565713722426.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565713722426.png" style="width:145px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1316" ><p class="intro"><input type="checkbox" class="delete" name="delete_1316" id="delete_1316" /><label for="delete_1316"><span class="name">Anonymous</span> <time datetime="2019-08-13T16:30:05Z">08/13/19 (Tue) 16:30:05</time></label>&nbsp;<a class="post_no" id="post_no_1316" onclick="return highlightReply(1316, event)" href="/agg/res/1316#1316">No.</a><a class="post_no" onclick="return citeReply(1316)" href="/agg/res/1316#q1316">1316</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1316">[Reply]</a></p><div class="body">imagine cumming inside rikka after fucking her with your dick<br/><a href=http://what-ch.mooo.com/what/res/1946.html>http://what-ch.mooo.com/what/res/1946.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1315" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565678486441.png">1565678486441.png</a> <span class="unimportant">(596.84 KB, 717x760, <span class="postfilename" title="[idolmaster][group][artist-takotsu]a3f145734576f50bb86352580cfd1c85.png">[idolmaster][group][artist….png</span>)</span></p><a href="/agg/src/1565678486441.png" target="_blank"><img class="post-image" src="/agg/thumb/1565678486441.png" style="width:241px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1315" ><p class="intro"><input type="checkbox" class="delete" name="delete_1315" id="delete_1315" /><label for="delete_1315"><span class="name">Anonymous</span> <time datetime="2019-08-13T06:45:04Z">08/13/19 (Tue) 06:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1315" onclick="return highlightReply(1315, event)" href="/agg/res/1315#1315">No.</a><a class="post_no" onclick="return citeReply(1315)" href="/agg/res/1315#q1315">1315</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1315">[Reply]</a></p><div class="body">I think I&#39;ll convert what was going to be an oneechan Riamu /qa/ theme into a new theme option for kissu. I wonder if there&#39;s an imagehost I could use for the images if the images should just be hosted here<br/><a href=https://kissu.moe/qa/res/4663.html>https://kissu.moe/qa/res/4663.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1314" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565672541647.jpg">1565672541647.jpg</a> <span class="unimportant">(175.66 KB, 1128x846, <span class="postfilename">1348469587477.jpg</span>)</span></p><a href="/agg/src/1565672541647.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565672541647.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1314" ><p class="intro"><input type="checkbox" class="delete" name="delete_1314" id="delete_1314" /><label for="delete_1314"><span class="subject">ITT we post our cock sizes (bone pressed, fully erect)</span> <span class="name">Anonymous</span> <time datetime="2019-08-13T05:05:08Z">08/13/19 (Tue) 05:05:08</time></label>&nbsp;<a class="post_no" id="post_no_1314" onclick="return highlightReply(1314, event)" href="/agg/res/1314#1314">No.</a><a class="post_no" onclick="return citeReply(1314)" href="/agg/res/1314#q1314">1314</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1314">[Reply]</a></p><div class="body">I&#39;ll start:<br/>13 CM<br/><a href=http://what-ch.mooo.com/what/res/1928.html>http://what-ch.mooo.com/what/res/1928.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1313" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565672316166.jpg">1565672316166.jpg</a> <span class="unimportant">(30.46 KB, 400x240, <span class="postfilename">C44vj76UMAEjV3W.jpg</span>)</span></p><a href="/agg/src/1565672316166.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565672316166.png" style="width:255px;height:153px" alt="" /></a></div>    </div>    <div class="post op" id="op_1313" ><p class="intro"><input type="checkbox" class="delete" name="delete_1313" id="delete_1313" /><label for="delete_1313"><span class="name">Anonymous</span> <time datetime="2019-08-13T05:00:03Z">08/13/19 (Tue) 05:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1313" onclick="return highlightReply(1313, event)" href="/agg/res/1313#1313">No.</a><a class="post_no" onclick="return citeReply(1313)" href="/agg/res/1313#q1313">1313</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1313">[Reply]</a></p><div class="body">I married Inari! We don&#39;t have a kid yet, but so far it&#39;s pretty nice. Unfortunately she&#39;s an unusual bachelorette because she can&#39;t leave her shrine, so she didn&#39;t move in to my house.<br/>sigh... love can&#39;t overcome everything I guess<br/><a href=https://kissu.moe/qa/res/4661.html>https://kissu.moe/qa/res/4661.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1312" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565639197430.jpg">1565639197430.jpg</a> <span class="unimportant">(2.13 MB, 3500x2420, <span class="postfilename">yu-sibu 0027.jpg</span>)</span></p><a href="/agg/src/1565639197430.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565639197430.png" style="width:240px;height:166px" alt="" /></a></div>    </div>    <div class="post op" id="op_1312" ><p class="intro"><input type="checkbox" class="delete" name="delete_1312" id="delete_1312" /><label for="delete_1312"><span class="name">Anonymous</span> <time datetime="2019-08-12T19:50:03Z">08/12/19 (Mon) 19:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1312" onclick="return highlightReply(1312, event)" href="/agg/res/1312#1312">No.</a><a class="post_no" onclick="return citeReply(1312)" href="/agg/res/1312#q1312">1312</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1312">[Reply]</a></p><div class="body">fuck niggers!<br/><a href=http://what-ch.mooo.com/what/res/1916.html>http://what-ch.mooo.com/what/res/1916.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1311" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565593982461.jpg">1565593982461.jpg</a> <span class="unimportant">(377.01 KB, 935x1300, <span class="postfilename">kancolle 0154.jpg</span>)</span></p><a href="/agg/src/1565593982461.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565593982461.png" style="width:173px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1311" ><p class="intro"><input type="checkbox" class="delete" name="delete_1311" id="delete_1311" /><label for="delete_1311"><span class="name">Anonymous</span> <time datetime="2019-08-12T07:15:02Z">08/12/19 (Mon) 07:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1311" onclick="return highlightReply(1311, event)" href="/agg/res/1311#1311">No.</a><a class="post_no" onclick="return citeReply(1311)" href="/agg/res/1311#q1311">1311</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1311">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1906.html>http://what-ch.mooo.com/what/res/1906.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1310" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565586598830.mp4">1565586598830.mp4</a> <span class="unimportant">(22.7 MB, 640x480, <span class="postfilename" title="[Hatsune Miku English V2] Heaven Is A Place On Earth _ Belinda Carlisle-HATpOha7DFg.mp4">[Hatsune Miku English V2] ….mp4</span>)</span></p><a href="/player.php?v=/agg/src/1565586598830.mp4&amp;t=%5BHatsune%20Miku%20English%20V2%5D%20Heaven%20Is%20A%20Place%20On%20Earth%20_%20Belinda%20Carlisle-HATpOha7DFg.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1565586598830.jpg" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1310" ><p class="intro"><input type="checkbox" class="delete" name="delete_1310" id="delete_1310" /><label for="delete_1310"><span class="name">Anonymous</span> <time datetime="2019-08-12T05:10:03Z">08/12/19 (Mon) 05:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1310" onclick="return highlightReply(1310, event)" href="/agg/res/1310#1310">No.</a><a class="post_no" onclick="return citeReply(1310)" href="/agg/res/1310#q1310">1310</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1310">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1904.html>http://what-ch.mooo.com/what/res/1904.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/41" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a class="selected">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/43" method="get"><input type="submit" value="Next" /></form>
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