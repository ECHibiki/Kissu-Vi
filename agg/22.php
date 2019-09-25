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
			<img class="board_image" src="/static/banners/banner-kissu-4.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" name="text" value="&#113;ms&#83;&#89;[&#118;&#112;LH2P\1y@&#98;,k_">
<input style="display:none" type="text" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div  style="display:none" ><input  type="text"  name="q"  value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" ></div >
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="pN+&gt;8&lt;qG/6d☎,'F%&#59;&#115;⚨iAE!R&#117;oP&#75;♿&#83;}_☬V(-&#99;^&#92;{&#81;CD~⛼m⛰l&#120;`[a40&#46;UkbZW&#9864;&#35;&#42;&#41;LwM:&#124;&#114;⛍]&#50;y@&#9770;n&amp;5&#89;&#57;♪&#84; j1f7$3=" name="y0kh38z9do♒sb" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea name="search" style="display:none">b☵#&#89;{&#55;`9J⚴&#64;V&#94;6_-</textarea>
			
			
				
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
		<div class="thread" id="thread_1730" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567644984836.jpg">1567644984836.jpg</a> <span class="unimportant">(218.38 KB, 850x1201, <span class="postfilename" title="__hatsune_miku_rozen_maiden_and_etc_drawn_by_iren_lovel__sample-e6a84c3f7c601fc0105c59f9f83f0286.jpg">__hatsune_miku_rozen_maide….jpg</span>)</span></p><a href="/agg/src/1567644984836.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567644984836.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1730" ><p class="intro"><input type="checkbox" class="delete" name="delete_1730" id="delete_1730" /><label for="delete_1730"><span class="name">Anonymous</span> <time datetime="2019-09-05T01:00:05Z">09/05/19 (Thu) 01:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1730" onclick="return highlightReply(1730, event)" href="/agg/res/1730#1730">No.</a><a class="post_no" onclick="return citeReply(1730)" href="/agg/res/1730#q1730">1730</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1730">[Reply]</a></p><div class="body">too tired to post <br/><br/><em>(full image here <a href="https://danbooru.donmai.us/posts/3615417" rel="nofollow" target="_blank">https://danbooru.donmai.us/posts/3615417</a> )</em><br/><a href=https://kissu.moe/qa/res/7482.html>https://kissu.moe/qa/res/7482.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1729" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567633577896.jpg">1567633577896.jpg</a> <span class="unimportant">(42.91 KB, 495x507, <span class="postfilename">1448104472816.jpg</span>)</span></p><a href="/agg/src/1567633577896.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567633577896.png" style="width:235px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1729" ><p class="intro"><input type="checkbox" class="delete" name="delete_1729" id="delete_1729" /><label for="delete_1729"><span class="name">Anonymous</span> <time datetime="2019-09-04T21:50:03Z">09/04/19 (Wed) 21:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1729" onclick="return highlightReply(1729, event)" href="/agg/res/1729#1729">No.</a><a class="post_no" onclick="return citeReply(1729)" href="/agg/res/1729#q1729">1729</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1729">[Reply]</a></p><div class="body">i am only pretending to be a lonely gay loser on /what/. i am not actually one, just so you guys know.<br/><a href=http://what-ch.mooo.com/what/res/2416.html>http://what-ch.mooo.com/what/res/2416.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1728" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567631705252-0.png">1567631705252-0.png</a> <span class="unimportant">(740.34 KB, 900x1200, <span class="postfilename" title="3738ebf0ad2dad3e69b2cd8b56512caf (1).png">3738ebf0ad2dad3e69b2cd8b56….png</span>)</span></p><a href="/agg/src/1567631705252-0.png" target="_blank"><img class="post-image" src="/agg/thumb/1567631705252-0.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1728" ><p class="intro"><input type="checkbox" class="delete" name="delete_1728" id="delete_1728" /><label for="delete_1728"><span class="name">Anonymous</span> <time datetime="2019-09-04T21:20:03Z">09/04/19 (Wed) 21:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1728" onclick="return highlightReply(1728, event)" href="/agg/res/1728#1728">No.</a><a class="post_no" onclick="return citeReply(1728)" href="/agg/res/1728#q1728">1728</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1728">[Reply]</a></p><div class="body">bored and gay<br/><a href=http://what-ch.mooo.com/what/res/2415.html>http://what-ch.mooo.com/what/res/2415.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1727" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567625292756.png">1567625292756.png</a> <span class="unimportant">(54.22 KB, 1025x654, <span class="postfilename" title="49616057345bade89b0408d8b473629db188314e8c883f79d8d3fe7ef9f654af.png">49616057345bade89b0408d8b4….png</span>)</span></p><a href="/agg/src/1567625292756.png" target="_blank"><img class="post-image" src="/agg/thumb/1567625292756.png" style="width:255px;height:163px" alt="" /></a></div>    </div>    <div class="post op" id="op_1727" ><p class="intro"><input type="checkbox" class="delete" name="delete_1727" id="delete_1727" /><label for="delete_1727"><span class="name">Anonymous</span> <time datetime="2019-09-04T19:30:03Z">09/04/19 (Wed) 19:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1727" onclick="return highlightReply(1727, event)" href="/agg/res/1727#1727">No.</a><a class="post_no" onclick="return citeReply(1727)" href="/agg/res/1727#q1727">1727</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1727">[Reply]</a></p><div class="body">Bad mod.<br/><a href=https://kissu.moe/qa/res/7463.html>https://kissu.moe/qa/res/7463.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1726" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567624988330.jpg">1567624988330.jpg</a> <span class="unimportant">(38.14 KB, 673x631, <span class="postfilename">1477635746662.jpg</span>)</span></p><a href="/agg/src/1567624988330.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567624988330.png" style="width:255px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_1726" ><p class="intro"><input type="checkbox" class="delete" name="delete_1726" id="delete_1726" /><label for="delete_1726"><span class="name">Anonymous</span> <time datetime="2019-09-04T19:25:02Z">09/04/19 (Wed) 19:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1726" onclick="return highlightReply(1726, event)" href="/agg/res/1726#1726">No.</a><a class="post_no" onclick="return citeReply(1726)" href="/agg/res/1726#q1726">1726</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1726">[Reply]</a></p><div class="body">Excuse me, why was I banned?<br/><a href=https://kissu.moe/qa/res/7461.html>https://kissu.moe/qa/res/7461.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1725" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567611739534.jpg">1567611739534.jpg</a> <span class="unimportant">(278.55 KB, 1440x1584, <span class="postfilename" title="fe8a15cfc628ad93b1b7d53f5a5b8940.jpg">fe8a15cfc628ad93b1b7d53f5a….jpg</span>)</span></p><a href="/agg/src/1567611739534.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567611739534.png" style="width:232px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1725" ><p class="intro"><input type="checkbox" class="delete" name="delete_1725" id="delete_1725" /><label for="delete_1725"><span class="name">Anonymous</span> <time datetime="2019-09-04T15:45:03Z">09/04/19 (Wed) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1725" onclick="return highlightReply(1725, event)" href="/agg/res/1725#1725">No.</a><a class="post_no" onclick="return citeReply(1725)" href="/agg/res/1725#q1725">1725</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1725">[Reply]</a></p><div class="body">Couldn&#39;t drink any coffee this morning....<br/>House had no electricity when I woke up<br/><a href=https://kissu.moe/qa/res/7449.html>https://kissu.moe/qa/res/7449.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1724" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567588478179.jpg">1567588478179.jpg</a> <span class="unimportant">(137.64 KB, 550x500, <span class="postfilename" title="7452be128b27e6fa1f3ebbff1ef256fc.jpg">7452be128b27e6fa1f3ebbff1e….jpg</span>)</span></p><a href="/agg/src/1567588478179.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567588478179.png" style="width:240px;height:219px" alt="" /></a></div>    </div>    <div class="post op" id="op_1724" ><p class="intro"><input type="checkbox" class="delete" name="delete_1724" id="delete_1724" /><label for="delete_1724"><span class="name">Anonymous</span> <time datetime="2019-09-04T09:15:07Z">09/04/19 (Wed) 09:15:07</time></label>&nbsp;<a class="post_no" id="post_no_1724" onclick="return highlightReply(1724, event)" href="/agg/res/1724#1724">No.</a><a class="post_no" onclick="return citeReply(1724)" href="/agg/res/1724#q1724">1724</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1724">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2413.html>http://what-ch.mooo.com/what/res/2413.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1723" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567586940320.png">1567586940320.png</a> <span class="unimportant">(2.52 MB, 2880x1440, <span class="postfilename">Screenshot_20190904-044259.png</span>)</span></p><a href="/agg/src/1567586940320.png" target="_blank"><img class="post-image" src="/agg/thumb/1567586940320.png" style="width:240px;height:120px" alt="" /></a></div>    </div>    <div class="post op" id="op_1723" ><p class="intro"><input type="checkbox" class="delete" name="delete_1723" id="delete_1723" /><label for="delete_1723"><span class="name">Anonymous</span> <time datetime="2019-09-04T08:50:02Z">09/04/19 (Wed) 08:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1723" onclick="return highlightReply(1723, event)" href="/agg/res/1723#1723">No.</a><a class="post_no" onclick="return citeReply(1723)" href="/agg/res/1723#q1723">1723</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1723">[Reply]</a></p><div class="body">Actually pretty luck, first time I got 3 unique ssr<br/><a href=http://what-ch.mooo.com/what/res/2412.html>http://what-ch.mooo.com/what/res/2412.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1722" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567583448158.jpg">1567583448158.jpg</a> <span class="unimportant">(70.29 KB, 426x960, <span class="postfilename" title="14102732_10210357409237933_5772637030992238112_n.jpg">14102732_10210357409237933….jpg</span>)</span></p><a href="/agg/src/1567583448158.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567583448158.png" style="width:107px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1722" ><p class="intro"><input type="checkbox" class="delete" name="delete_1722" id="delete_1722" /><label for="delete_1722"><span class="name">Anonymous</span> <time datetime="2019-09-04T07:55:03Z">09/04/19 (Wed) 07:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1722" onclick="return highlightReply(1722, event)" href="/agg/res/1722#1722">No.</a><a class="post_no" onclick="return citeReply(1722)" href="/agg/res/1722#q1722">1722</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1722">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2410.html>http://what-ch.mooo.com/what/res/2410.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1721" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567583283029.jpg">1567583283029.jpg</a> <span class="unimportant">(30.09 KB, 480x360, <span class="postfilename" title="13659195_10157195390320271_6909452833482996807_n.jpg">13659195_10157195390320271….jpg</span>)</span></p><a href="/agg/src/1567583283029.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567583283029.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1721" ><p class="intro"><input type="checkbox" class="delete" name="delete_1721" id="delete_1721" /><label for="delete_1721"><span class="name">Anonymous</span> <time datetime="2019-09-04T07:50:05Z">09/04/19 (Wed) 07:50:05</time></label>&nbsp;<a class="post_no" id="post_no_1721" onclick="return highlightReply(1721, event)" href="/agg/res/1721#1721">No.</a><a class="post_no" onclick="return citeReply(1721)" href="/agg/res/1721#q1721">1721</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1721">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2407.html>http://what-ch.mooo.com/what/res/2407.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1720" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567579312091.gif">1567579312091.gif</a> <span class="unimportant">(2.19 MB, 498x281, <span class="postfilename">1565818772478.gif</span>)</span></p><a href="/agg/src/1567579312091.gif" target="_blank"><img class="post-image" src="/agg/thumb/1567579312091.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1720" ><p class="intro"><input type="checkbox" class="delete" name="delete_1720" id="delete_1720" /><label for="delete_1720"><span class="name">Anonymous</span> <time datetime="2019-09-04T06:45:02Z">09/04/19 (Wed) 06:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1720" onclick="return highlightReply(1720, event)" href="/agg/res/1720#1720">No.</a><a class="post_no" onclick="return citeReply(1720)" href="/agg/res/1720#q1720">1720</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1720">[Reply]</a></p><div class="body">THE INTERNET FUCKING EXISTS!! Ohh, god what do I do there&#39;s so much I can do on here!<br/><a href=https://kissu.moe/qa/res/7421.html>https://kissu.moe/qa/res/7421.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1719" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/sw8CxyQx4zE" allowfullscreen></iframe>    <div class="post op" id="op_1719" ><p class="intro"><input type="checkbox" class="delete" name="delete_1719" id="delete_1719" /><label for="delete_1719"><span class="name">Anonymous</span> <time datetime="2019-09-04T06:40:03Z">09/04/19 (Wed) 06:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1719" onclick="return highlightReply(1719, event)" href="/agg/res/1719#1719">No.</a><a class="post_no" onclick="return citeReply(1719)" href="/agg/res/1719#q1719">1719</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1719">[Reply]</a></p><div class="body"><span class="quote">&gt;pissu</span><br/><a href=https://kissu.moe/qa/res/7420.html>https://kissu.moe/qa/res/7420.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1718" data-board="agg">    <div class="files">    </div>    <div class="post op" id="op_1718" ><p class="intro"><input type="checkbox" class="delete" name="delete_1718" id="delete_1718" /><label for="delete_1718"><span class="subject">Touhou</span> <span class="name">Araiguma</span> <time datetime="2019-09-04T05:30:03Z">09/04/19 (Wed) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1718" onclick="return highlightReply(1718, event)" href="/agg/res/1718#1718">No.</a><a class="post_no" onclick="return citeReply(1718)" href="/agg/res/1718#q1718">1718</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1718">[Reply]</a></p><div class="body">Hey guys! I have a question regarding the most powerful character in Touhou. Now this question is simply along the lines of, how much of the total Gensokyo population can they beat from a power standpoint? This isn&#39;t a question of can they be beaten, because multiple characters are unbeatable without limits on their power, ex: Koishi Komeji which can erase her presence and Sakuya Izayoi who can simply stop time forever. So simply put, who, from a power standpoint, can defeat most of Gensokyo in a battle?<br/><a href=https://kakashi-nenpo.com/jp/res/32985.html>https://kakashi-nenpo.com/jp/res/32985.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1717" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567570043489.png">1567570043489.png</a> <span class="unimportant">(924.79 KB, 947x719, <span class="postfilename">metal.png</span>)</span></p><a href="/agg/src/1567570043489.png" target="_blank"><img class="post-image" src="/agg/thumb/1567570043489.png" style="width:255px;height:194px" alt="" /></a></div>    </div>    <div class="post op" id="op_1717" ><p class="intro"><input type="checkbox" class="delete" name="delete_1717" id="delete_1717" /><label for="delete_1717"><span class="subject">I did a</span> <span class="name">Anonymous</span> <time datetime="2019-09-04T04:10:03Z">09/04/19 (Wed) 04:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1717" onclick="return highlightReply(1717, event)" href="/agg/res/1717#1717">No.</a><a class="post_no" onclick="return citeReply(1717)" href="/agg/res/1717#q1717">1717</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1717">[Reply]</a></p><div class="body">cum<br/><a href=https://kissu.moe/qa/res/7413.html>https://kissu.moe/qa/res/7413.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1716" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567564500346.jpg">1567564500346.jpg</a> <span class="unimportant">(163.42 KB, 1280x720, <span class="postfilename">fishe.jpg</span>)</span></p><a href="/agg/src/1567564500346.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567564500346.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1716" ><p class="intro"><input type="checkbox" class="delete" name="delete_1716" id="delete_1716" /><label for="delete_1716"><span class="name">Anonymous</span> <time datetime="2019-09-04T02:35:04Z">09/04/19 (Wed) 02:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1716" onclick="return highlightReply(1716, event)" href="/agg/res/1716#1716">No.</a><a class="post_no" onclick="return citeReply(1716)" href="/agg/res/1716#q1716">1716</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1716">[Reply]</a></p><div class="body">caught one<br/><a href=https://kissu.moe/qa/res/7398.html>https://kissu.moe/qa/res/7398.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1715" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567562925088.png">1567562925088.png</a> <span class="unimportant">(378.41 KB, 720x1200, <span class="postfilename">61735659_p0.png</span>)</span></p><a href="/agg/src/1567562925088.png" target="_blank"><img class="post-image" src="/agg/thumb/1567562925088.png" style="width:153px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1715" ><p class="intro"><input type="checkbox" class="delete" name="delete_1715" id="delete_1715" /><label for="delete_1715"><span class="name">Anonymous</span> <time datetime="2019-09-04T02:10:03Z">09/04/19 (Wed) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1715" onclick="return highlightReply(1715, event)" href="/agg/res/1715#1715">No.</a><a class="post_no" onclick="return citeReply(1715)" href="/agg/res/1715#q1715">1715</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1715">[Reply]</a></p><div class="body">Serve Satan<br/><a href=https://kissu.moe/qa/res/7392.html>https://kissu.moe/qa/res/7392.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1714" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567548563985.jpg">1567548563985.jpg</a> <span class="unimportant">(431.4 KB, 1280x720, <span class="postfilename" title="[Erai-raws] Lord El-Melloi II Sei no Jikenbo - Rail Zeppelin Grace Note - 09 [720p][Multiple Subtitle].mkv_snapshot_20.34.734.jpg">[Erai-raws] Lord El-Melloi….jpg</span>)</span></p><a href="/agg/src/1567548563985.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567548563985.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1714" ><p class="intro"><input type="checkbox" class="delete" name="delete_1714" id="delete_1714" /><label for="delete_1714"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-03T22:10:02Z">09/03/19 (Tue) 22:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1714" onclick="return highlightReply(1714, event)" href="/agg/res/1714#1714">No.</a><a class="post_no" onclick="return citeReply(1714)" href="/agg/res/1714#q1714">1714</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1714">[Reply]</a></p><div class="body">mfw I accidentally open up an imaginary number pocket dimension and my tutor&#39;s decapitated head falls out<br/><a href=https://kissu.moe/qa/res/7353.html>https://kissu.moe/qa/res/7353.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1713" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567548351422.png">1567548351422.png</a> <span class="unimportant">(1.19 MB, 976x800, <span class="postfilename" title="18b8c3480721d1516529772425e43ed5.png">18b8c3480721d1516529772425….png</span>)</span></p><a href="/agg/src/1567548351422.png" target="_blank"><img class="post-image" src="/agg/thumb/1567548351422.png" style="width:255px;height:209px" alt="" /></a></div>    </div>    <div class="post op" id="op_1713" ><p class="intro"><input type="checkbox" class="delete" name="delete_1713" id="delete_1713" /><label for="delete_1713"><span class="name">Anonymous</span> <time datetime="2019-09-03T22:10:02Z">09/03/19 (Tue) 22:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1713" onclick="return highlightReply(1713, event)" href="/agg/res/1713#1713">No.</a><a class="post_no" onclick="return citeReply(1713)" href="/agg/res/1713#q1713">1713</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1713">[Reply]</a></p><div class="body">How do you think people would react if somehow every <span class="glowblue">small</span> imageboard was merged into one? Let&#39;s also say that similar communities would be magically merged with the other similar communities. For example /a/-oriented communities are quite a bit different from the /jp/ ones, so they wouldn&#39;t be merged together. Similarly an anime board that loves generals and an anime board that bans them would not be merged together.<br/>Would people post more? Less? Would many people leave?<br/>How would you react?<br/><a href=https://kissu.moe/qa/res/7352.html>https://kissu.moe/qa/res/7352.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1712" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567546134836.jpg">1567546134836.jpg</a> <span class="unimportant">(456.01 KB, 1280x720, <span class="postfilename" title="[ESL] Gabriel DropOut - 08 [720p].mkv_snapshot_15.07_[2017.03.01_16.54.56].jpg">[ESL] Gabriel DropOut - 08….jpg</span>)</span></p><a href="/agg/src/1567546134836.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567546134836.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1712" ><p class="intro"><input type="checkbox" class="delete" name="delete_1712" id="delete_1712" /><label for="delete_1712"><span class="name">Anonymous</span> <time datetime="2019-09-03T21:30:03Z">09/03/19 (Tue) 21:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1712" onclick="return highlightReply(1712, event)" href="/agg/res/1712#1712">No.</a><a class="post_no" onclick="return citeReply(1712)" href="/agg/res/1712#q1712">1712</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1712">[Reply]</a></p><div class="body">Feels good killing Gnome scum<br/><a href=https://kissu.moe/qa/res/7346.html>https://kissu.moe/qa/res/7346.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1711" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567542645312.jpg">1567542645312.jpg</a> <span class="unimportant">(394.99 KB, 930x1024, <span class="postfilename">1521603179384.jpg</span>)</span></p><a href="/agg/src/1567542645312.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567542645312.png" style="width:232px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1711" ><p class="intro"><input type="checkbox" class="delete" name="delete_1711" id="delete_1711" /><label for="delete_1711"><span class="name">Anonymous</span> <time datetime="2019-09-03T20:35:03Z">09/03/19 (Tue) 20:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1711" onclick="return highlightReply(1711, event)" href="/agg/res/1711#1711">No.</a><a class="post_no" onclick="return citeReply(1711)" href="/agg/res/1711#q1711">1711</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1711">[Reply]</a></p><div class="body">Was anything really lost when 8gag shut down? Most boards that had some value, like /hgg/, already have bunkers which they&#39;ve migrated to. It dying also has a postive impact on alternative imageboards overall by making them a bit more decentralized for when 4chan dies, since people can&#39;t just flock there to create.  And to top it all off 4chan seems to have gotten back the shitty posters which left it behind for 8gag, so it&#39;ll only grow worse as time goes on.<br/><a href=https://kissu.moe/qa/res/7341.html>https://kissu.moe/qa/res/7341.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/21" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a class="selected">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/23" method="get"><input type="submit" value="Next" /></form>
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