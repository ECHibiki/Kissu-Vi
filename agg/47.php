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
			<img class="board_image" src="/static/banners/banner-kissu-9.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="text" value="qmsSY[vpLH2P\1y@b,k_" type="hidden">
<input type="hidden" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea name="message" style="display:none">wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" name="q" value="&#32;f&#9851;⛭&#9795;9/q&#122;&#119;Zk&#46;@h|;$L&#70;⛡m&#100;v,&#69;&#82;83W&#37;1YIM^&#105;U&#9740;&#53;☍+Ag☪T&#61;`}&#9873;&#121;c7J⛮P&#35;b&#63;⚤6&#88;&#38;&#123;Dx&#32;\4N&#112;KHn:)">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea name="y0kh38z9do♒sb" style="display:none">pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=</textarea>
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
		<div class="thread" id="thread_1218" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564748758589.webm">1564748758589.webm</a> <span class="unimportant">(4.58 MB, 640x360, <span class="postfilename">akarin~.webm</span>)</span></p><a href="/player.php?v=/agg/src/1564748758589.webm&amp;t=akarin~.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1564748758589.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1218" ><p class="intro"><input type="checkbox" class="delete" name="delete_1218" id="delete_1218" /><label for="delete_1218"><span class="name">Anonymous</span> <time datetime="2019-08-02T12:30:02Z">08/02/19 (Fri) 12:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1218" onclick="return highlightReply(1218, event)" href="/agg/res/1218#1218">No.</a><a class="post_no" onclick="return citeReply(1218)" href="/agg/res/1218#q1218">1218</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1218">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1638.html>http://what-ch.mooo.com/what/res/1638.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1217" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564739372579.jpg">1564739372579.jpg</a> <span class="unimportant">(157.01 KB, 460x460, <span class="postfilename">1564703905451.jpg</span>)</span></p><a href="/agg/src/1564739372579.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564739372579.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1217" ><p class="intro"><input type="checkbox" class="delete" name="delete_1217" id="delete_1217" /><label for="delete_1217"><span class="name">Anonymous</span> <time datetime="2019-08-02T09:50:02Z">08/02/19 (Fri) 09:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1217" onclick="return highlightReply(1217, event)" href="/agg/res/1217#1217">No.</a><a class="post_no" onclick="return citeReply(1217)" href="/agg/res/1217#q1217">1217</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1217">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1636.html>http://what-ch.mooo.com/what/res/1636.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1216" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/JZjAg6fK-BQ" allowfullscreen></iframe>    <div class="post op" id="op_1216" ><p class="intro"><input type="checkbox" class="delete" name="delete_1216" id="delete_1216" /><label for="delete_1216"><span class="name">Anonymous</span> <time datetime="2019-08-02T08:15:02Z">08/02/19 (Fri) 08:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1216" onclick="return highlightReply(1216, event)" href="/agg/res/1216#1216">No.</a><a class="post_no" onclick="return citeReply(1216)" href="/agg/res/1216#q1216">1216</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1216">[Reply]</a></p><div class="body">when im rich im gonna buy all the fancy clothes hes got in the video<br/><a href=https://kissu.moe/qa/res/4585.html>https://kissu.moe/qa/res/4585.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1215" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564732370452.png">1564732370452.png</a> <span class="unimportant">(1.76 MB, 1280x960, <span class="postfilename" title="2019-08-02-034532_1280x960_scrot.png">2019-08-02-034532_1280x960….png</span>)</span></p><a href="/agg/src/1564732370452.png" target="_blank"><img class="post-image" src="/agg/thumb/1564732370452.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1215" ><p class="intro"><input type="checkbox" class="delete" name="delete_1215" id="delete_1215" /><label for="delete_1215"><span class="name">Anonymous</span> <time datetime="2019-08-02T07:55:02Z">08/02/19 (Fri) 07:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1215" onclick="return highlightReply(1215, event)" href="/agg/res/1215#1215">No.</a><a class="post_no" onclick="return citeReply(1215)" href="/agg/res/1215#q1215">1215</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1215">[Reply]</a></p><div class="body">le touhou free trial on steam<br/><a href=http://what-ch.mooo.com/what/res/1628.html>http://what-ch.mooo.com/what/res/1628.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1214" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564722271504.jpg">1564722271504.jpg</a> <span class="unimportant">(456.62 KB, 1071x1692, <span class="postfilename">1564708176594.jpg</span>)</span></p><a href="/agg/src/1564722271504.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564722271504.png" style="width:152px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1214" ><p class="intro"><input type="checkbox" class="delete" name="delete_1214" id="delete_1214" /><label for="delete_1214"><span class="name">Anonymous</span> <time datetime="2019-08-02T05:05:02Z">08/02/19 (Fri) 05:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1214" onclick="return highlightReply(1214, event)" href="/agg/res/1214#1214">No.</a><a class="post_no" onclick="return citeReply(1214)" href="/agg/res/1214#q1214">1214</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1214">[Reply]</a></p><div class="body">why does god troll us like this i thought we were special and the only humans in the universe<br/><a href=http://what-ch.mooo.com/what/res/1618.html>http://what-ch.mooo.com/what/res/1618.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1213" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564721638017.jpg">1564721638017.jpg</a> <span class="unimportant">(595.13 KB, 1100x1020, <span class="postfilename">1564693632000.jpg</span>)</span></p><a href="/agg/src/1564721638017.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564721638017.png" style="width:240px;height:223px" alt="" /></a></div>    </div>    <div class="post op" id="op_1213" ><p class="intro"><input type="checkbox" class="delete" name="delete_1213" id="delete_1213" /><label for="delete_1213"><span class="name">Anonymous</span> <time datetime="2019-08-02T04:55:03Z">08/02/19 (Fri) 04:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1213" onclick="return highlightReply(1213, event)" href="/agg/res/1213#1213">No.</a><a class="post_no" onclick="return citeReply(1213)" href="/agg/res/1213#q1213">1213</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1213">[Reply]</a></p><div class="body">I love Karen<br/>She&#39;s so cute and genki<br/><a href=http://what-ch.mooo.com/what/res/1617.html>http://what-ch.mooo.com/what/res/1617.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1212" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564721585144.png">1564721585144.png</a> <span class="unimportant">(80.27 KB, 600x730, <span class="postfilename" title="07fceb58d554e284c309faf5392a1e2a.png">07fceb58d554e284c309faf539….png</span>)</span></p><a href="/agg/src/1564721585144.png" target="_blank"><img class="post-image" src="/agg/thumb/1564721585144.png" style="width:198px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1212" ><p class="intro"><input type="checkbox" class="delete" name="delete_1212" id="delete_1212" /><label for="delete_1212"><span class="name">Anonymous</span> <time datetime="2019-08-02T04:55:03Z">08/02/19 (Fri) 04:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1212" onclick="return highlightReply(1212, event)" href="/agg/res/1212#1212">No.</a><a class="post_no" onclick="return citeReply(1212)" href="/agg/res/1212#q1212">1212</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1212">[Reply]</a></p><div class="body">Fuck me good, fuck me long, fuck me numb...Love me now, when I&#39;m gone, love me none<br/><a href=http://what-ch.mooo.com/what/res/1616.html>http://what-ch.mooo.com/what/res/1616.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1211" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564718419089.jpg">1564718419089.jpg</a> <span class="unimportant">(30.09 KB, 480x360, <span class="postfilename" title="13659195_10157195390320271_6909452833482996807_n.jpg">13659195_10157195390320271….jpg</span>)</span></p><a href="/agg/src/1564718419089.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564718419089.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1211" ><p class="intro"><input type="checkbox" class="delete" name="delete_1211" id="delete_1211" /><label for="delete_1211"><span class="name">Anonymous</span> <time datetime="2019-08-02T04:05:03Z">08/02/19 (Fri) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1211" onclick="return highlightReply(1211, event)" href="/agg/res/1211#1211">No.</a><a class="post_no" onclick="return citeReply(1211)" href="/agg/res/1211#q1211">1211</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1211">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1612.html>http://what-ch.mooo.com/what/res/1612.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1210" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/p_tLYTzWipU" allowfullscreen></iframe>    <div class="post op" id="op_1210" ><p class="intro"><input type="checkbox" class="delete" name="delete_1210" id="delete_1210" /><label for="delete_1210"><span class="name">Anonymous</span> <time datetime="2019-08-02T02:10:04Z">08/02/19 (Fri) 02:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1210" onclick="return highlightReply(1210, event)" href="/agg/res/1210#1210">No.</a><a class="post_no" onclick="return citeReply(1210)" href="/agg/res/1210#q1210">1210</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1210">[Reply]</a></p><div class="body">present for kissmin<br/><a href=https://kissu.moe/qa/res/4583.html>https://kissu.moe/qa/res/4583.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1209" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564707729309.png">1564707729309.png</a> <span class="unimportant">(1.77 KB, 35x33, <span class="postfilename">sticky.png</span>)</span></p><a href="/agg/src/1564707729309.png" target="_blank"><img class="post-image" src="/agg/thumb/1564707729309.png" style="width:35px;height:33px" alt="" /></a></div>    </div>    <div class="post op" id="op_1209" ><p class="intro"><input type="checkbox" class="delete" name="delete_1209" id="delete_1209" /><label for="delete_1209"><span class="name">Anonymous</span> <time datetime="2019-08-02T01:05:02Z">08/02/19 (Fri) 01:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1209" onclick="return highlightReply(1209, event)" href="/agg/res/1209#1209">No.</a><a class="post_no" onclick="return citeReply(1209)" href="/agg/res/1209#q1209">1209</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1209">[Reply]</a></p><div class="body"><span class="quote">&gt;/what/</span><br/><a href=http://what-ch.mooo.com/what/res/1610.html>http://what-ch.mooo.com/what/res/1610.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1208" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564706186932.png">1564706186932.png</a> <span class="unimportant">(1.48 MB, 1916x1080, <span class="postfilename">misc 2198.png</span>)</span></p><a href="/agg/src/1564706186932.png" target="_blank"><img class="post-image" src="/agg/thumb/1564706186932.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1208" ><p class="intro"><input type="checkbox" class="delete" name="delete_1208" id="delete_1208" /><label for="delete_1208"><span class="name">Anonymous</span> <time datetime="2019-08-02T00:40:02Z">08/02/19 (Fri) 00:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1208" onclick="return highlightReply(1208, event)" href="/agg/res/1208#1208">No.</a><a class="post_no" onclick="return citeReply(1208)" href="/agg/res/1208#q1208">1208</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1208">[Reply]</a></p><div class="body"><a href="https://en.wikipedia.org/wiki/Mietek_Grocher" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Mietek_Grocher</a><br/><a href=http://what-ch.mooo.com/what/res/1609.html>http://what-ch.mooo.com/what/res/1609.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1207" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564705839689.jpg">1564705839689.jpg</a> <span class="unimportant">(51.94 KB, 700x393, <span class="postfilename">1511487239830.jpg</span>)</span></p><a href="/agg/src/1564705839689.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564705839689.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1207" ><p class="intro"><input type="checkbox" class="delete" name="delete_1207" id="delete_1207" /><label for="delete_1207"><span class="name">Anonymous</span> <time datetime="2019-08-02T00:35:02Z">08/02/19 (Fri) 00:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1207" onclick="return highlightReply(1207, event)" href="/agg/res/1207#1207">No.</a><a class="post_no" onclick="return citeReply(1207)" href="/agg/res/1207#q1207">1207</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1207">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1608.html>http://what-ch.mooo.com/what/res/1608.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1206" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564704822733.jpg">1564704822733.jpg</a> <span class="unimportant">(86.6 KB, 1024x629, <span class="postfilename">1564704103728.jpg</span>)</span></p><a href="/agg/src/1564704822733.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564704822733.png" style="width:240px;height:148px" alt="" /></a></div>    </div>    <div class="post op" id="op_1206" ><p class="intro"><input type="checkbox" class="delete" name="delete_1206" id="delete_1206" /><label for="delete_1206"><span class="name">Anonymous</span> <time datetime="2019-08-02T00:15:04Z">08/02/19 (Fri) 00:15:04</time></label>&nbsp;<a class="post_no" id="post_no_1206" onclick="return highlightReply(1206, event)" href="/agg/res/1206#1206">No.</a><a class="post_no" onclick="return citeReply(1206)" href="/agg/res/1206#q1206">1206</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1206">[Reply]</a></p><div class="body">how do i get a tomoko girl sex slave in my NEET fortress<br/><a href=http://what-ch.mooo.com/what/res/1605.html>http://what-ch.mooo.com/what/res/1605.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1205" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564701287779.png">1564701287779.png</a> <span class="unimportant">(664.46 KB, 1366x768, <span class="postfilename" title="Screenshot from 016-08-07 16-22-37.png">Screenshot from 016-08-07 ….png</span>)</span></p><a href="/agg/src/1564701287779.png" target="_blank"><img class="post-image" src="/agg/thumb/1564701287779.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1205" ><p class="intro"><input type="checkbox" class="delete" name="delete_1205" id="delete_1205" /><label for="delete_1205"><span class="name">Anonymous</span> <time datetime="2019-08-01T23:15:03Z">08/01/19 (Thu) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1205" onclick="return highlightReply(1205, event)" href="/agg/res/1205#1205">No.</a><a class="post_no" onclick="return citeReply(1205)" href="/agg/res/1205#q1205">1205</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1205">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1604.html>http://what-ch.mooo.com/what/res/1604.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1204" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564699870103.jpg">1564699870103.jpg</a> <span class="unimportant">(69.63 KB, 649x587, <span class="postfilename">1564697360609.jpg</span>)</span></p><a href="/agg/src/1564699870103.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564699870103.png" style="width:240px;height:218px" alt="" /></a></div>    </div>    <div class="post op" id="op_1204" ><p class="intro"><input type="checkbox" class="delete" name="delete_1204" id="delete_1204" /><label for="delete_1204"><span class="name">Anonymous</span> <time datetime="2019-08-01T22:55:02Z">08/01/19 (Thu) 22:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1204" onclick="return highlightReply(1204, event)" href="/agg/res/1204#1204">No.</a><a class="post_no" onclick="return citeReply(1204)" href="/agg/res/1204#q1204">1204</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1204">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1601.html>http://what-ch.mooo.com/what/res/1601.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1203" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564697201377.jpg">1564697201377.jpg</a> <span class="unimportant">(92.07 KB, 750x494, <span class="postfilename">1563213799550.jpg</span>)</span></p><a href="/agg/src/1564697201377.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564697201377.png" style="width:240px;height:159px" alt="" /></a></div>    </div>    <div class="post op" id="op_1203" ><p class="intro"><input type="checkbox" class="delete" name="delete_1203" id="delete_1203" /><label for="delete_1203"><span class="name">Anonymous</span> <time datetime="2019-08-01T22:10:02Z">08/01/19 (Thu) 22:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1203" onclick="return highlightReply(1203, event)" href="/agg/res/1203#1203">No.</a><a class="post_no" onclick="return citeReply(1203)" href="/agg/res/1203#q1203">1203</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1203">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1599.html>http://what-ch.mooo.com/what/res/1599.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1202" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564691841750.gif">1564691841750.gif</a> <span class="unimportant">(600.94 KB, 320x240, <span class="postfilename">1545331486962.gif</span>)</span></p><a href="/agg/src/1564691841750.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564691841750.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1202" ><p class="intro"><input type="checkbox" class="delete" name="delete_1202" id="delete_1202" /><label for="delete_1202"><span class="name">Anonymous</span> <time datetime="2019-08-01T20:40:02Z">08/01/19 (Thu) 20:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1202" onclick="return highlightReply(1202, event)" href="/agg/res/1202#1202">No.</a><a class="post_no" onclick="return citeReply(1202)" href="/agg/res/1202#q1202">1202</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1202">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1596.html>http://what-ch.mooo.com/what/res/1596.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1201" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564658398801.png">1564658398801.png</a> <span class="unimportant">(179.52 KB, 360x600, <span class="postfilename">1540302500259.png</span>)</span></p><a href="/agg/src/1564658398801.png" target="_blank"><img class="post-image" src="/agg/thumb/1564658398801.png" style="width:153px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1201" ><p class="intro"><input type="checkbox" class="delete" name="delete_1201" id="delete_1201" /><label for="delete_1201"><span class="name">Anonymous</span> <time datetime="2019-08-01T11:20:02Z">08/01/19 (Thu) 11:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1201" onclick="return highlightReply(1201, event)" href="/agg/res/1201#1201">No.</a><a class="post_no" onclick="return citeReply(1201)" href="/agg/res/1201#q1201">1201</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1201">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=https://kissu.moe/qa/res/4579.html>https://kissu.moe/qa/res/4579.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1200" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564655510948.png">1564655510948.png</a> <span class="unimportant">(1.11 MB, 1916x1078, <span class="postfilename">misc 2192.png</span>)</span></p><a href="/agg/src/1564655510948.png" target="_blank"><img class="post-image" src="/agg/thumb/1564655510948.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1200" ><p class="intro"><input type="checkbox" class="delete" name="delete_1200" id="delete_1200" /><label for="delete_1200"><span class="name">Anonymous</span> <time datetime="2019-08-01T10:35:02Z">08/01/19 (Thu) 10:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1200" onclick="return highlightReply(1200, event)" href="/agg/res/1200#1200">No.</a><a class="post_no" onclick="return citeReply(1200)" href="/agg/res/1200#q1200">1200</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1200">[Reply]</a></p><div class="body"><span class="quote">&gt;Santa Claus is real, you literally can&#39;t prove me wrong.</span><br/><br/>Christcucks destroyed again. Time to masturbate to animes.<br/><a href=http://what-ch.mooo.com/what/res/1583.html>http://what-ch.mooo.com/what/res/1583.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1199" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564654634912.png">1564654634912.png</a> <span class="unimportant">(245.23 KB, 793x1117, <span class="postfilename">misc 1397.png</span>)</span></p><a href="/agg/src/1564654634912.png" target="_blank"><img class="post-image" src="/agg/thumb/1564654634912.png" style="width:171px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1199" ><p class="intro"><input type="checkbox" class="delete" name="delete_1199" id="delete_1199" /><label for="delete_1199"><span class="name">Anonymous</span> <time datetime="2019-08-01T10:20:02Z">08/01/19 (Thu) 10:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1199" onclick="return highlightReply(1199, event)" href="/agg/res/1199#1199">No.</a><a class="post_no" onclick="return citeReply(1199)" href="/agg/res/1199#q1199">1199</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1199">[Reply]</a></p><div class="body">64% of Americans worship Harry Potter and ritually sacrifice goats and babies in the name of JK Rowling<br/><a href=http://what-ch.mooo.com/what/res/1575.html>http://what-ch.mooo.com/what/res/1575.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/46" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a class="selected">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/48" method="get"><input type="submit" value="Next" /></form>
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