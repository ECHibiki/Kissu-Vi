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
			<img class="board_image" src="/static/banners/banner-kissu-5.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea name="text" style="display:none">qmsSY[vpLH2P\1y@b,k_</textarea>
<input style="display:none" type="text" name="firstname" value="&#102;&#35;&#9864;&#47; &#9836;3&#125;&#123;Q&#68;t&#55;&#92;+d5:Y&#64;&#9874;B&#118;V&#84;-&#115;e&#112;Z&#36;~]IU&#59;S&#94;n&#104;X!9&#75;[&#41;mu&lt;N(W8♛&gt;&#120;r&#111;&#50;" >
<input type="hidden" name="board" value="agg">
<div style="display:none"><input type="text" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj"></div>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea  style="display:none"  name="message">wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="y0kh38z9do♒sb" >pN+&gt;8&lt;q&#71;/6d☎,&#39;&#70;%;&#115;⚨iAE&#33;&#82;uo&#80;K♿&#83;}_&#9772;V(-c^\{QCD~⛼m⛰lx`&#91;a40.UkbZW⚈#&#42;)Lw&#77;:&#124;r⛍]2y@☪n&amp;5&#89;&#57;♪T j&#49;f7$&#51;=</textarea >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea   name="search"   style="display:none" >b☵#Y{7`9J⚴@V^6_-</textarea >
			
			
				
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
		<div class="thread" id="thread_1529" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566857498619.jpg">1566857498619.jpg</a> <span class="unimportant">(109.75 KB, 600x600, <span class="postfilename" title="mpv-01 39 (sasakure.UK x DECO_27) [feat. Hatsune Miku]-00:02:16.334.jpg">mpv-01 39 (sasakure.UK x D….jpg</span>)</span></p><a href="/agg/src/1566857498619.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566857498619.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1529" ><p class="intro"><input type="checkbox" class="delete" name="delete_1529" id="delete_1529" /><label for="delete_1529"><span class="name">Anonymous</span> <time datetime="2019-08-26T22:15:02Z">08/26/19 (Mon) 22:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1529" onclick="return highlightReply(1529, event)" href="/agg/res/1529#1529">No.</a><a class="post_no" onclick="return citeReply(1529)" href="/agg/res/1529#q1529">1529</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1529">[Reply]</a></p><div class="body"><a href="http://what-ch.mooo.com/up/1c988967b7b408f35c8b2841e2383595.m4a" rel="nofollow" target="_blank">http://what-ch.mooo.com/up/1c988967b7b408f35c8b2841e2383595.m4a</a><br/><a href=http://what-ch.mooo.com/what/res/2292.html>http://what-ch.mooo.com/what/res/2292.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1528" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566851224111.png">1566851224111.png</a> <span class="unimportant">(547.95 KB, 444x500, <span class="postfilename" title="palemoon_2019-08-26_15-24-41.png">palemoon_2019-08-26_15-24-….png</span>)</span></p><a href="/agg/src/1566851224111.png" target="_blank"><img class="post-image" src="/agg/thumb/1566851224111.png" style="width:226px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1528" ><p class="intro"><input type="checkbox" class="delete" name="delete_1528" id="delete_1528" /><label for="delete_1528"><span class="name">Anonymous</span> <time datetime="2019-08-26T20:30:03Z">08/26/19 (Mon) 20:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1528" onclick="return highlightReply(1528, event)" href="/agg/res/1528#1528">No.</a><a class="post_no" onclick="return citeReply(1528)" href="/agg/res/1528#q1528">1528</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1528">[Reply]</a></p><div class="body">Which ones are Youmu? I assumed top middle and middle right, but got it wrong. Can the answer be only one? I assumed it had to be at least two.<br/>But none of them really look like Youmu<br/><a href=https://kissu.moe/qa/res/6038.html>https://kissu.moe/qa/res/6038.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1527" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566849295846.jpg">1566849295846.jpg</a> <span class="unimportant">(209.3 KB, 1192x670, <span class="postfilename">1541896955042.jpg</span>)</span></p><a href="/agg/src/1566849295846.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566849295846.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1527" ><p class="intro"><input type="checkbox" class="delete" name="delete_1527" id="delete_1527" /><label for="delete_1527"><span class="name">Anonymous</span> <time datetime="2019-08-26T19:55:03Z">08/26/19 (Mon) 19:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1527" onclick="return highlightReply(1527, event)" href="/agg/res/1527#1527">No.</a><a class="post_no" onclick="return citeReply(1527)" href="/agg/res/1527#q1527">1527</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1527">[Reply]</a></p><div class="body">WHY DOES A FLY EXIST IN A CLEAN ROOM WITH NO FOOD TO SPEAK OF<br/><a href=https://kissu.moe/qa/res/6028.html>https://kissu.moe/qa/res/6028.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1526" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566848234026.png">1566848234026.png</a> <span class="unimportant">(1.14 MB, 1280x720, <span class="postfilename" title="[Asenshi] Yuru Camp - 06 [A891D599].mkv_snapshot_00.40_[2018.02.09_01.50.50].png">[Asenshi] Yuru Camp - 06 [….png</span>)</span></p><a href="/agg/src/1566848234026.png" target="_blank"><img class="post-image" src="/agg/thumb/1566848234026.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1526" ><p class="intro"><input type="checkbox" class="delete" name="delete_1526" id="delete_1526" /><label for="delete_1526"><span class="name">Anonymous</span> <time datetime="2019-08-26T19:40:03Z">08/26/19 (Mon) 19:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1526" onclick="return highlightReply(1526, event)" href="/agg/res/1526#1526">No.</a><a class="post_no" onclick="return citeReply(1526)" href="/agg/res/1526#q1526">1526</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1526">[Reply]</a></p><div class="body">Rin cupping large invisible breasts<br/><a href=https://kissu.moe/qa/res/6023.html>https://kissu.moe/qa/res/6023.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1525" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566846099035.jpg">1566846099035.jpg</a> <span class="unimportant">(139.12 KB, 1024x768, <span class="postfilename">20190826150035_1.jpg</span>)</span></p><a href="/agg/src/1566846099035.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566846099035.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1525" ><p class="intro"><input type="checkbox" class="delete" name="delete_1525" id="delete_1525" /><label for="delete_1525"><span class="name">Anonymous</span> <time datetime="2019-08-26T19:05:03Z">08/26/19 (Mon) 19:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1525" onclick="return highlightReply(1525, event)" href="/agg/res/1525#1525">No.</a><a class="post_no" onclick="return citeReply(1525)" href="/agg/res/1525#q1525">1525</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1525">[Reply]</a></p><div class="body">practicing for the upcoming grindfest with one of the grindiest games out there<br/><a href=https://kissu.moe/qa/res/6017.html>https://kissu.moe/qa/res/6017.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1524" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566843628909.png">1566843628909.png</a> <span class="unimportant">(336.09 KB, 600x801, <span class="postfilename">45546077_p0.png</span>)</span></p><a href="/agg/src/1566843628909.png" target="_blank"><img class="post-image" src="/agg/thumb/1566843628909.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1524" ><p class="intro"><input type="checkbox" class="delete" name="delete_1524" id="delete_1524" /><label for="delete_1524"><span class="name">Anonymous</span> <time datetime="2019-08-26T18:25:03Z">08/26/19 (Mon) 18:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1524" onclick="return highlightReply(1524, event)" href="/agg/res/1524#1524">No.</a><a class="post_no" onclick="return citeReply(1524)" href="/agg/res/1524#q1524">1524</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1524">[Reply]</a></p><div class="body">Lala&#39;s fans sure do take her to strange places<br/><a href=https://kissu.moe/qa/res/6013.html>https://kissu.moe/qa/res/6013.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1523" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566841795928.jpeg">1566841795928.jpeg</a> <span class="unimportant">(289.82 KB, 1536x2048, <span class="postfilename" title="54db21ab8c5b63a9975071df920f4e2e.jpeg">54db21ab8c5b63a9975071df9….jpeg</span>)</span></p><a href="/agg/src/1566841795928.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1566841795928.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1523" ><p class="intro"><input type="checkbox" class="delete" name="delete_1523" id="delete_1523" /><label for="delete_1523"><span class="name">Anonymous</span> <time datetime="2019-08-26T17:50:03Z">08/26/19 (Mon) 17:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1523" onclick="return highlightReply(1523, event)" href="/agg/res/1523#1523">No.</a><a class="post_no" onclick="return citeReply(1523)" href="/agg/res/1523#q1523">1523</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1523">[Reply]</a></p><div class="body"><span class="quote">&gt;pissu</span><br/><a href=https://kissu.moe/qa/res/6010.html>https://kissu.moe/qa/res/6010.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1522" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566838271404.jpg">1566838271404.jpg</a> <span class="unimportant">(359.06 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 07 [720p].mkv_snapshot_19.33_[2019.08.26_12.50.44].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1566838271404.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566838271404.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1522" ><p class="intro"><input type="checkbox" class="delete" name="delete_1522" id="delete_1522" /><label for="delete_1522"><span class="name">Anonymous</span> <time datetime="2019-08-26T16:55:03Z">08/26/19 (Mon) 16:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1522" onclick="return highlightReply(1522, event)" href="/agg/res/1522#1522">No.</a><a class="post_no" onclick="return citeReply(1522)" href="/agg/res/1522#q1522">1522</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1522">[Reply]</a></p><div class="body">Good.<br/><a href=https://kissu.moe/qa/res/6005.html>https://kissu.moe/qa/res/6005.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1521" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566836944249.jpg">1566836944249.jpg</a> <span class="unimportant">(210.11 KB, 1280x1440, <span class="postfilename">1477331576874.jpg</span>)</span></p><a href="/agg/src/1566836944249.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566836944249.png" style="width:227px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1521" ><p class="intro"><input type="checkbox" class="delete" name="delete_1521" id="delete_1521" /><label for="delete_1521"><span class="name">Anonymous</span> <time datetime="2019-08-26T16:30:04Z">08/26/19 (Mon) 16:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1521" onclick="return highlightReply(1521, event)" href="/agg/res/1521#1521">No.</a><a class="post_no" onclick="return citeReply(1521)" href="/agg/res/1521#q1521">1521</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1521">[Reply]</a></p><div class="body">Disable 4chan x you fag.<br/>Images are expanding and opening in gallery at the same time on click. That on top of the post form going big and small on hover is just a real clusterfuck to navigate.<br/><a href=https://kissu.moe/qa/res/6003.html>https://kissu.moe/qa/res/6003.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1520" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566835560900.png">1566835560900.png</a> <span class="unimportant">(639.42 KB, 971x1200, <span class="postfilename">52641589_p0.png</span>)</span></p><a href="/agg/src/1566835560900.png" target="_blank"><img class="post-image" src="/agg/thumb/1566835560900.png" style="width:206px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1520" ><p class="intro"><input type="checkbox" class="delete" name="delete_1520" id="delete_1520" /><label for="delete_1520"><span class="name">Anonymous</span> <time datetime="2019-08-26T16:10:03Z">08/26/19 (Mon) 16:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1520" onclick="return highlightReply(1520, event)" href="/agg/res/1520#1520">No.</a><a class="post_no" onclick="return citeReply(1520)" href="/agg/res/1520#q1520">1520</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1520">[Reply]</a></p><div class="body">I can&#39;t tell if it&#39;s a good or bad thing that Tsukihime hasn&#39;t gotten much love from modern Type-Moon<br/><a href=https://kissu.moe/qa/res/5999.html>https://kissu.moe/qa/res/5999.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1519" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566832760025.jpg">1566832760025.jpg</a> <span class="unimportant">(100.96 KB, 600x973, <span class="postfilename">finger.jpg</span>)</span></p><a href="/agg/src/1566832760025.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566832760025.png" style="width:148px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1519" ><p class="intro"><input type="checkbox" class="delete" name="delete_1519" id="delete_1519" /><label for="delete_1519"><span class="name">Anonymous</span> <time datetime="2019-08-26T15:20:02Z">08/26/19 (Mon) 15:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1519" onclick="return highlightReply(1519, event)" href="/agg/res/1519#1519">No.</a><a class="post_no" onclick="return citeReply(1519)" href="/agg/res/1519#q1519">1519</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1519">[Reply]</a></p><div class="body">what is your favorite mating spot?<br/><a href=http://what-ch.mooo.com/what/res/2288.html>http://what-ch.mooo.com/what/res/2288.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1518" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566828549548.jpg">1566828549548.jpg</a> <span class="unimportant">(251.89 KB, 600x600, <span class="postfilename">1464029235748.jpg</span>)</span></p><a href="/agg/src/1566828549548.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566828549548.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1518" ><p class="intro"><input type="checkbox" class="delete" name="delete_1518" id="delete_1518" /><label for="delete_1518"><span class="name">Anonymous</span> <time datetime="2019-08-26T14:10:03Z">08/26/19 (Mon) 14:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1518" onclick="return highlightReply(1518, event)" href="/agg/res/1518#1518">No.</a><a class="post_no" onclick="return citeReply(1518)" href="/agg/res/1518#q1518">1518</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1518">[Reply]</a></p><div class="body">This website sure starts to suck whenever I go to sleep.<br/><a href=https://kissu.moe/qa/res/5994.html>https://kissu.moe/qa/res/5994.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1517" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566805340785.jpg">1566805340785.jpg</a> <span class="unimportant">(432.18 KB, 1042x736, <span class="postfilename" title="2f4a0d8c5f843665678645acaa34727d.jpg">2f4a0d8c5f843665678645acaa….jpg</span>)</span></p><a href="/agg/src/1566805340785.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566805340785.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1517" ><p class="intro"><input type="checkbox" class="delete" name="delete_1517" id="delete_1517" /><label for="delete_1517"><span class="name">Anonymous</span> <time datetime="2019-08-26T07:45:02Z">08/26/19 (Mon) 07:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1517" onclick="return highlightReply(1517, event)" href="/agg/res/1517#1517">No.</a><a class="post_no" onclick="return citeReply(1517)" href="/agg/res/1517#q1517">1517</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1517">[Reply]</a></p><div class="body">oyasumi<br/><a href=https://kissu.moe/qa/res/5983.html>https://kissu.moe/qa/res/5983.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1516" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566801374510.jpg">1566801374510.jpg</a> <span class="unimportant">(306.73 KB, 594x529, <span class="postfilename">1533557652062.jpg</span>)</span></p><a href="/agg/src/1566801374510.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566801374510.png" style="width:255px;height:228px" alt="" /></a></div>    </div>    <div class="post op" id="op_1516" ><p class="intro"><input type="checkbox" class="delete" name="delete_1516" id="delete_1516" /><label for="delete_1516"><span class="name">Anonymous</span> <time datetime="2019-08-26T06:40:03Z">08/26/19 (Mon) 06:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1516" onclick="return highlightReply(1516, event)" href="/agg/res/1516#1516">No.</a><a class="post_no" onclick="return citeReply(1516)" href="/agg/res/1516#q1516">1516</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1516">[Reply]</a></p><div class="body">helpful homu<br/><a href=https://kissu.moe/qa/res/5979.html>https://kissu.moe/qa/res/5979.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1515" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566800883042.png">1566800883042.png</a> <span class="unimportant">(232.86 KB, 340x556, <span class="postfilename">quiz_kizuna.png</span>)</span></p><a href="/agg/src/1566800883042.png" target="_blank"><img class="post-image" src="/agg/thumb/1566800883042.png" style="width:156px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1515" ><p class="intro"><input type="checkbox" class="delete" name="delete_1515" id="delete_1515" /><label for="delete_1515"><a class="repo" href="javascript:void(0); repo"><span class="name">Anonymous</span></a> <time datetime="2019-08-26T06:30:03Z">08/26/19 (Mon) 06:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1515" onclick="return highlightReply(1515, event)" href="/agg/res/1515#1515">No.</a><a class="post_no" onclick="return citeReply(1515)" href="/agg/res/1515#q1515">1515</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1515">[Reply]</a></p><div class="body">Were virtual youtubers Japan&#39;s fad of the century?<br/><a href=https://kissu.moe/qa/res/5977.html>https://kissu.moe/qa/res/5977.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1514" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566795863263.jpg">1566795863263.jpg</a> <span class="unimportant">(178.38 KB, 1920x1080, <span class="postfilename">20190823003038_1.jpg</span>)</span></p><a href="/agg/src/1566795863263.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566795863263.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1514" ><p class="intro"><input type="checkbox" class="delete" name="delete_1514" id="delete_1514" /><label for="delete_1514"><span class="name">Anonymous</span> <time datetime="2019-08-26T05:05:03Z">08/26/19 (Mon) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1514" onclick="return highlightReply(1514, event)" href="/agg/res/1514#1514">No.</a><a class="post_no" onclick="return citeReply(1514)" href="/agg/res/1514#q1514">1514</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1514">[Reply]</a></p><div class="body">im playin FEAR for first time its pretty scary and i pause often <br/><br/>i get like 600fps on average and the lighting and psychics engine are A+<br/><br/>models and graphics are pretty dated but as a shooter its really fun, lots of unfamiliar weapons and has solid feel.<br/><br/>i have no idea what the story is about<br/><a href=http://what-ch.mooo.com/what/res/2281.html>http://what-ch.mooo.com/what/res/2281.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1513" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566794156683.jpg">1566794156683.jpg</a> <span class="unimportant">(178.82 KB, 600x600, <span class="postfilename">Miyuki and mom.jpg</span>)</span></p><a href="/agg/src/1566794156683.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566794156683.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1513" ><p class="intro"><input type="checkbox" class="delete" name="delete_1513" id="delete_1513" /><label for="delete_1513"><span class="name">Anonymous</span> <time datetime="2019-08-26T04:40:02Z">08/26/19 (Mon) 04:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1513" onclick="return highlightReply(1513, event)" href="/agg/res/1513#1513">No.</a><a class="post_no" onclick="return citeReply(1513)" href="/agg/res/1513#q1513">1513</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1513">[Reply]</a></p><div class="body">Anime mothers are cute!<br/><a href=https://kissu.moe/qa/res/5974.html>https://kissu.moe/qa/res/5974.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1512" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566787540970.png">1566787540970.png</a> <span class="unimportant">(186.15 KB, 713x1166, <span class="postfilename">f34.png</span>)</span></p><a href="/agg/src/1566787540970.png" target="_blank"><img class="post-image" src="/agg/thumb/1566787540970.png" style="width:156px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1512" ><p class="intro"><input type="checkbox" class="delete" name="delete_1512" id="delete_1512" /><label for="delete_1512"><span class="name">Anonymous</span> <time datetime="2019-08-26T02:50:03Z">08/26/19 (Mon) 02:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1512" onclick="return highlightReply(1512, event)" href="/agg/res/1512#1512">No.</a><a class="post_no" onclick="return citeReply(1512)" href="/agg/res/1512#q1512">1512</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1512">[Reply]</a></p><div class="body">have you been reading fun manga lately? i caught with dungeon meshi, it&#39;s really good but man it gets really grim sometimes<br/><a href=https://kissu.moe/qa/res/5958.html>https://kissu.moe/qa/res/5958.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1511" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566784235822.jpg">1566784235822.jpg</a> <span class="unimportant">(343.83 KB, 1920x1080, <span class="postfilename" title="[Better-Raws] Karakai Jouzu no Takagi-san S2 - 08 (NF 1920x1080 x264 EAC3).mkv_snapshot_04.05_[2019.08.25_19.35.46].jpg">[Better-Raws] Karakai Jouz….jpg</span>)</span></p><a href="/agg/src/1566784235822.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566784235822.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1511" ><p class="intro"><input type="checkbox" class="delete" name="delete_1511" id="delete_1511" /><label for="delete_1511"><span class="name">Anonymous</span> <time datetime="2019-08-26T01:55:03Z">08/26/19 (Mon) 01:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1511" onclick="return highlightReply(1511, event)" href="/agg/res/1511#1511">No.</a><a class="post_no" onclick="return citeReply(1511)" href="/agg/res/1511#q1511">1511</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1511">[Reply]</a></p><div class="body">shh she&#39;s sleeping<br/><a href=https://kissu.moe/qa/res/5942.html>https://kissu.moe/qa/res/5942.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1510" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566781539386.jpeg">1566781539386.jpeg</a> <span class="unimportant">(39.4 KB, 533x800, <span class="postfilename">gumonshoe1424260821.jpeg</span>)</span></p><a href="/agg/src/1566781539386.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1566781539386.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1510" ><p class="intro"><input type="checkbox" class="delete" name="delete_1510" id="delete_1510" /><label for="delete_1510"><span class="name">Anonymous</span> <time datetime="2019-08-26T01:10:03Z">08/26/19 (Mon) 01:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1510" onclick="return highlightReply(1510, event)" href="/agg/res/1510#1510">No.</a><a class="post_no" onclick="return citeReply(1510)" href="/agg/res/1510#q1510">1510</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1510">[Reply]</a></p><div class="body">i ate a bunch of cookies and reeses minis a couple days ago and now i have been dehydrated for the past 2 days even though im drinking a glass of water at least once a hour<br/>is this diabetes? i used to get this all the time until i stopped eating sugary snacks earlier this year, it only happens when i eat an obscene amount at once too and it doesnt go away for days at a time<br/><br/>also my kidneys (or where i think my kidneys are) have been feeling numb for years and i used to get shooting pains in them sometimes when i was more unheatly<br/>i have been eating less salt and sugar over the past year and it has been getting better but sometimes i stop caring and have soy sauce on my dinner or buy a bag of cookies for the weekend and i end up feeling like garbage beccause of it<br/><a href=https://kissu.moe/qa/res/5929.html>https://kissu.moe/qa/res/5929.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/31" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a class="selected">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/33" method="get"><input type="submit" value="Next" /></form>
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