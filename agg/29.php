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
			<img class="board_image" src="/static/banners/banner-kissu-12.gif" alt="" />	<header>
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
<input  type="hidden"  name="firstname"  value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" >
<input type="hidden" name="board" value="agg">
<input   name="login"   value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj"   type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟&#55;n%/&#101;:{&#73;⚲^B6&#9898;&#114;&#103;_&#41;&#36;zVh]&#92;&#102;@Z&#53;&#76;&#62;23t;⛊M☃&#89;XH-Q&#70;R&#39;y&#9752;&#78;K*x9&#84;["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none" ><input type="text" name="q" value=" &#102;♻&#9965;♃&#57;&#47;&#113;zwZk.@&#104;|;$LF⛡mdv,ER8&#51;W%1YIM&#94;iU&#9740;5&#9741;+Ag☪T=`}&#9873;yc&#55;J⛮&#80;#b?&#9892;6X&amp;{Dx \4NpKHn:&#41;" ></div >
			</td>
		</tr>		<tr>
			<th>
				Options				<input  style="display:none"  type="text"  name="y0kh38z9do♒sb"  value="pN&#43;&gt;8&lt;qG&#47;&#54;d☎,'F&#37;;&#115;⚨iA&#69;!RuoPK&#9855;&#83;}_☬V(-c^\{QCD~⛼m⛰l&#120;`[&#97;40&#46;U&#107;bZ&#87;⚈#*)LwM&#58;&#124;&#114;⛍]2&#121;@☪n&amp;5Y9&#9834;T j&#49;f7&#36;3=">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input  name="search"  value="b☵#Y{7`9J⚴@V^6_-"  type="hidden">
			
			
				
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
		<div class="thread" id="thread_1589" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567059119043.jpg">1567059119043.jpg</a> <span class="unimportant">(82.29 KB, 1100x1531, <span class="postfilename">68069314_p18.jpg</span>)</span></p><a href="/agg/src/1567059119043.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567059119043.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1589" ><p class="intro"><input type="checkbox" class="delete" name="delete_1589" id="delete_1589" /><label for="delete_1589"><span class="name">Anonymous</span> <time datetime="2019-08-29T06:15:03Z">08/29/19 (Thu) 06:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1589" onclick="return highlightReply(1589, event)" href="/agg/res/1589#1589">No.</a><a class="post_no" onclick="return citeReply(1589)" href="/agg/res/1589#q1589">1589</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1589">[Reply]</a></p><div class="body">How can girls compete in coolness to boys like this?<br/><a href=https://kissu.moe/qa/res/6491.html>https://kissu.moe/qa/res/6491.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1588" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567058723513.jpg">1567058723513.jpg</a> <span class="unimportant">(135.35 KB, 706x1000, <span class="postfilename">31380457_p0.jpg</span>)</span></p><a href="/agg/src/1567058723513.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567058723513.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1588" ><p class="intro"><input type="checkbox" class="delete" name="delete_1588" id="delete_1588" /><label for="delete_1588"><span class="name">Anonymous</span> <time datetime="2019-08-29T06:10:04Z">08/29/19 (Thu) 06:10:04</time></label>&nbsp;<a class="post_no" id="post_no_1588" onclick="return highlightReply(1588, event)" href="/agg/res/1588#1588">No.</a><a class="post_no" onclick="return citeReply(1588)" href="/agg/res/1588#q1588">1588</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1588">[Reply]</a></p><div class="body">How often do you leave the house?<br/><a href=https://kissu.moe/qa/res/6489.html>https://kissu.moe/qa/res/6489.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1587" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567057838151.jpg">1567057838151.jpg</a> <span class="unimportant">(144.52 KB, 566x800, <span class="postfilename">61832602_p6.jpg</span>)</span></p><a href="/agg/src/1567057838151.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567057838151.png" style="width:181px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1587" ><p class="intro"><input type="checkbox" class="delete" name="delete_1587" id="delete_1587" /><label for="delete_1587"><span class="name">Anonymous</span> <time datetime="2019-08-29T05:55:03Z">08/29/19 (Thu) 05:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1587" onclick="return highlightReply(1587, event)" href="/agg/res/1587#1587">No.</a><a class="post_no" onclick="return citeReply(1587)" href="/agg/res/1587#q1587">1587</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1587">[Reply]</a></p><div class="body">have you ever had an encounter with satan<br/><a href=https://kissu.moe/qa/res/6485.html>https://kissu.moe/qa/res/6485.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1586" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567057509370.jpg">1567057509370.jpg</a> <span class="unimportant">(36.31 KB, 646x485, <span class="postfilename">Pretty kitty.jpg</span>)</span></p><a href="/agg/src/1567057509370.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567057509370.png" style="width:255px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_1586" ><p class="intro"><input type="checkbox" class="delete" name="delete_1586" id="delete_1586" /><label for="delete_1586"><span class="name">Anonymous</span> <time datetime="2019-08-29T05:50:03Z">08/29/19 (Thu) 05:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1586" onclick="return highlightReply(1586, event)" href="/agg/res/1586#1586">No.</a><a class="post_no" onclick="return citeReply(1586)" href="/agg/res/1586#q1586">1586</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1586">[Reply]</a></p><div class="body">Preparations are complete. The flood will begin in a few hours.<br/><br/>Don&#39;t go to sleep weabs!<br/><a href=https://kissu.moe/qa/res/6483.html>https://kissu.moe/qa/res/6483.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1585" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567057377635.jpg">1567057377635.jpg</a> <span class="unimportant">(89.68 KB, 407x600, <span class="postfilename" title="__hakurei_reimu_and_kirisame_marisa_touhou_drawn_by_dairi__ff8cc82565b43fdddd2292cab92a64d4.jpg">__hakurei_reimu_and_kirisa….jpg</span>)</span></p><a href="/agg/src/1567057377635.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567057377635.png" style="width:173px;height:254px" alt="" /></a></div>    </div>    <div class="post op" id="op_1585" ><p class="intro"><input type="checkbox" class="delete" name="delete_1585" id="delete_1585" /><label for="delete_1585"><span class="name">Anonymous</span> <time datetime="2019-08-29T05:45:02Z">08/29/19 (Thu) 05:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1585" onclick="return highlightReply(1585, event)" href="/agg/res/1585#1585">No.</a><a class="post_no" onclick="return citeReply(1585)" href="/agg/res/1585#q1585">1585</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1585">[Reply]</a></p><div class="body">How much sperms does /qa/ produce on a daily basis<br/><a href=https://kissu.moe/qa/res/6482.html>https://kissu.moe/qa/res/6482.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1584" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567047926724.jpg">1567047926724.jpg</a> <span class="unimportant">(377.08 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 140 [BD][1080p][48D1F5E7].mkv_snapshot_17.51_[2019.08.28_20.54.55].jpg">[MiG_MuX] PriPara - 140 [B….jpg</span>)</span></p><a href="/agg/src/1567047926724.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567047926724.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1584" ><p class="intro"><input type="checkbox" class="delete" name="delete_1584" id="delete_1584" /><label for="delete_1584"><span class="name">Anonymous</span> <time datetime="2019-08-29T03:10:03Z">08/29/19 (Thu) 03:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1584" onclick="return highlightReply(1584, event)" href="/agg/res/1584#1584">No.</a><a class="post_no" onclick="return citeReply(1584)" href="/agg/res/1584#q1584">1584</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1584">[Reply]</a></p><div class="body">It&#39;s over.<br/><a href=https://kissu.moe/qa/res/6445.html>https://kissu.moe/qa/res/6445.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1583" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567047516290.jpg">1567047516290.jpg</a> <span class="unimportant">(409.43 KB, 1600x1000, <span class="postfilename" title="7ad5753d0c2afb7d9b961cf9e8e1d3fe.jpg">7ad5753d0c2afb7d9b961cf9e8….jpg</span>)</span></p><a href="/agg/src/1567047516290.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567047516290.png" style="width:255px;height:159px" alt="" /></a></div>    </div>    <div class="post op" id="op_1583" ><p class="intro"><input type="checkbox" class="delete" name="delete_1583" id="delete_1583" /><label for="delete_1583"><span class="name">Anonymous</span> <time datetime="2019-08-29T03:00:03Z">08/29/19 (Thu) 03:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1583" onclick="return highlightReply(1583, event)" href="/agg/res/1583#1583">No.</a><a class="post_no" onclick="return citeReply(1583)" href="/agg/res/1583#q1583">1583</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1583">[Reply]</a></p><div class="body">Don&#39;t you hate it when you stumble upon a really good image you want to post, but it&#39;s out of season?<br/><a href=https://kissu.moe/qa/res/6442.html>https://kissu.moe/qa/res/6442.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1582" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567047120225.jpg">1567047120225.jpg</a> <span class="unimportant">(1.5 MB, 2660x1330, <span class="postfilename" title="544e426c18d6eb8f9e689c148fa157bb.jpg">544e426c18d6eb8f9e689c148f….jpg</span>)</span></p><a href="/agg/src/1567047120225.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567047120225.png" style="width:255px;height:128px" alt="" /></a></div>    </div>    <div class="post op" id="op_1582" ><p class="intro"><input type="checkbox" class="delete" name="delete_1582" id="delete_1582" /><label for="delete_1582"><span class="name">Anonymous</span> <time datetime="2019-08-29T02:55:03Z">08/29/19 (Thu) 02:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1582" onclick="return highlightReply(1582, event)" href="/agg/res/1582#1582">No.</a><a class="post_no" onclick="return citeReply(1582)" href="/agg/res/1582#q1582">1582</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1582">[Reply]</a></p><div class="body">Is there any game worth waiting for after classic other than Doom?<br/><a href=https://kissu.moe/qa/res/6436.html>https://kissu.moe/qa/res/6436.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1581" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567044405215.jpg">1567044405215.jpg</a> <span class="unimportant">(279.17 KB, 1500x1773, <span class="postfilename">Super Hug Sisters Ultimate.jpg</span>)</span></p><a href="/agg/src/1567044405215.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567044405215.png" style="width:215px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1581" ><p class="intro"><input type="checkbox" class="delete" name="delete_1581" id="delete_1581" /><label for="delete_1581"><span class="subject">Tulpa thread</span> <span class="name">Anonymous</span> <time datetime="2019-08-29T02:10:03Z">08/29/19 (Thu) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1581" onclick="return highlightReply(1581, event)" href="/agg/res/1581#1581">No.</a><a class="post_no" onclick="return citeReply(1581)" href="/agg/res/1581#q1581">1581</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1581">[Reply]</a></p><div class="body">Anything about tulpas<br/><a href=https://kissu.moe/qa/res/6429.html>https://kissu.moe/qa/res/6429.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1580" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567042744618.jpg">1567042744618.jpg</a> <span class="unimportant">(136.47 KB, 320x240, <span class="postfilename">tl00.jpg</span>)</span></p><a href="/agg/src/1567042744618.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567042744618.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1580" ><p class="intro"><input type="checkbox" class="delete" name="delete_1580" id="delete_1580" /><label for="delete_1580"><span class="name">Anonymous</span> <time datetime="2019-08-29T01:40:03Z">08/29/19 (Thu) 01:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1580" onclick="return highlightReply(1580, event)" href="/agg/res/1580#1580">No.</a><a class="post_no" onclick="return citeReply(1580)" href="/agg/res/1580#q1580">1580</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1580">[Reply]</a></p><div class="body">how the FUCK has anybody ever beaten one of these games<br/><a href=https://kissu.moe/qa/res/6427.html>https://kissu.moe/qa/res/6427.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1579" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567040555061.png">1567040555061.png</a> <span class="unimportant">(2.63 MB, 1546x3000, <span class="postfilename">Untitled2.png</span>)</span></p><a href="/agg/src/1567040555061.png" target="_blank"><img class="post-image" src="/agg/thumb/1567040555061.png" style="width:124px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1579" ><p class="intro"><input type="checkbox" class="delete" name="delete_1579" id="delete_1579" /><label for="delete_1579"><span class="name">Anonymous</span> <time datetime="2019-08-29T01:05:03Z">08/29/19 (Thu) 01:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1579" onclick="return highlightReply(1579, event)" href="/agg/res/1579#1579">No.</a><a class="post_no" onclick="return citeReply(1579)" href="/agg/res/1579#q1579">1579</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1579">[Reply]</a></p><div class="body">test<br/><a href=http://what-ch.mooo.com/what/res/2330.html>http://what-ch.mooo.com/what/res/2330.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1578" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567038805315.png">1567038805315.png</a> <span class="unimportant">(40.1 KB, 400x400, <span class="postfilename">1352582372155.png</span>)</span></p><a href="/agg/src/1567038805315.png" target="_blank"><img class="post-image" src="/agg/thumb/1567038805315.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1578" ><p class="intro"><input type="checkbox" class="delete" name="delete_1578" id="delete_1578" /><label for="delete_1578"><span class="name">Anonymous</span> <time datetime="2019-08-29T00:35:03Z">08/29/19 (Thu) 00:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1578" onclick="return highlightReply(1578, event)" href="/agg/res/1578#1578">No.</a><a class="post_no" onclick="return citeReply(1578)" href="/agg/res/1578#q1578">1578</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1578">[Reply]</a></p><div class="body">come give me censored images to decensor with a neural network thingie<br/><a href="/megu/res/501.php#638">&gt;&gt;&gt;/megu/638</a><br/><a href=https://kissu.moe/qa/res/6420.html>https://kissu.moe/qa/res/6420.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1577" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567033990447.jpg">1567033990447.jpg</a> <span class="unimportant">(196.92 KB, 1010x1254, <span class="postfilename" title="__tatara_kogasa_touhou_drawn_by_salt_seasoning__ab3cb9fcc54e95aa1a65d10619ef9d8a.jpg">__tatara_kogasa_touhou_dra….jpg</span>)</span></p><a href="/agg/src/1567033990447.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567033990447.png" style="width:205px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1577" ><p class="intro"><input type="checkbox" class="delete" name="delete_1577" id="delete_1577" /><label for="delete_1577"><span class="name">Anonymous</span> <time datetime="2019-08-28T23:15:03Z">08/28/19 (Wed) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1577" onclick="return highlightReply(1577, event)" href="/agg/res/1577#1577">No.</a><a class="post_no" onclick="return citeReply(1577)" href="/agg/res/1577#q1577">1577</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1577">[Reply]</a></p><div class="body">this bored just got fucking CRINGED ON<br/><a href=https://kissu.moe/qa/res/6412.html>https://kissu.moe/qa/res/6412.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1576" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567033029105.png">1567033029105.png</a> <span class="unimportant">(192.79 KB, 500x412, <span class="postfilename">1527130070531.png</span>)</span></p><a href="/agg/src/1567033029105.png" target="_blank"><img class="post-image" src="/agg/thumb/1567033029105.png" style="width:255px;height:210px" alt="" /></a></div>    </div>    <div class="post op" id="op_1576" ><p class="intro"><input type="checkbox" class="delete" name="delete_1576" id="delete_1576" /><label for="delete_1576"><span class="name">Anonymous</span> <time datetime="2019-08-28T23:00:04Z">08/28/19 (Wed) 23:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1576" onclick="return highlightReply(1576, event)" href="/agg/res/1576#1576">No.</a><a class="post_no" onclick="return citeReply(1576)" href="/agg/res/1576#q1576">1576</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1576">[Reply]</a></p><div class="body">blep<br/><a href=https://kissu.moe/qa/res/6411.html>https://kissu.moe/qa/res/6411.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1575" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567025119535.png">1567025119535.png</a> <span class="unimportant">(279.12 KB, 1000x1414, <span class="postfilename" title="d84c003de109e08048524ad231c9bf1a.png">d84c003de109e08048524ad231….png</span>)</span></p><a href="/agg/src/1567025119535.png" target="_blank"><img class="post-image" src="/agg/thumb/1567025119535.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1575" ><p class="intro"><input type="checkbox" class="delete" name="delete_1575" id="delete_1575" /><label for="delete_1575"><span class="name">Anonymous</span> <time datetime="2019-08-28T20:50:04Z">08/28/19 (Wed) 20:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1575" onclick="return highlightReply(1575, event)" href="/agg/res/1575#1575">No.</a><a class="post_no" onclick="return citeReply(1575)" href="/agg/res/1575#q1575">1575</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1575">[Reply]</a></p><div class="body">I argued with a gay guy about why homosexuality is detrimental to society, and he said I have a nice ass.<br/><a href=http://what-ch.mooo.com/what/res/2327.html>http://what-ch.mooo.com/what/res/2327.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1574" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567024864449.jpg">1567024864449.jpg</a> <span class="unimportant">(775.55 KB, 1200x1600, <span class="postfilename">1311281004411.jpg</span>)</span></p><a href="/agg/src/1567024864449.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567024864449.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1574" ><p class="intro"><input type="checkbox" class="delete" name="delete_1574" id="delete_1574" /><label for="delete_1574"><span class="name">Anonymous</span> <time datetime="2019-08-28T20:45:10Z">08/28/19 (Wed) 20:45:10</time></label>&nbsp;<a class="post_no" id="post_no_1574" onclick="return highlightReply(1574, event)" href="/agg/res/1574#1574">No.</a><a class="post_no" onclick="return citeReply(1574)" href="/agg/res/1574#q1574">1574</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1574">[Reply]</a></p><div class="body">Do you read kissnons?<br/><a href=https://kissu.moe/qa/res/6396.html>https://kissu.moe/qa/res/6396.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1573" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567023427345.png">1567023427345.png</a> <span class="unimportant">(7.52 KB, 205x245, <span class="postfilename">bee yourself.png</span>)</span></p><a href="/agg/src/1567023427345.png" target="_blank"><img class="post-image" src="/agg/thumb/1567023427345.png" style="width:201px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1573" ><p class="intro"><input type="checkbox" class="delete" name="delete_1573" id="delete_1573" /><label for="delete_1573"><span class="name">Anonymous</span> <time datetime="2019-08-28T20:20:03Z">08/28/19 (Wed) 20:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1573" onclick="return highlightReply(1573, event)" href="/agg/res/1573#1573">No.</a><a class="post_no" onclick="return citeReply(1573)" href="/agg/res/1573#q1573">1573</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1573">[Reply]</a></p><div class="body">merorin was here, you guys are faggots<br/><a href=http://what-ch.mooo.com/what/res/2326.html>http://what-ch.mooo.com/what/res/2326.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1572" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567022438702.jpg">1567022438702.jpg</a> <span class="unimportant">(127.94 KB, 876x913, <span class="postfilename">Flandre.jpg</span>)</span></p><a href="/agg/src/1567022438702.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567022438702.png" style="width:245px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1572" ><p class="intro"><input type="checkbox" class="delete" name="delete_1572" id="delete_1572" /><label for="delete_1572"><span class="name">Anonymous</span> <time datetime="2019-08-28T20:05:03Z">08/28/19 (Wed) 20:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1572" onclick="return highlightReply(1572, event)" href="/agg/res/1572#1572">No.</a><a class="post_no" onclick="return citeReply(1572)" href="/agg/res/1572#q1572">1572</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1572">[Reply]</a></p><div class="body">Tell me about barneyfag, Is it really just one man? How can one man monitor ALL posts from ALL boards for so many years without getting tired of it? <br/>What is his mindset?<br/><a href=https://kissu.moe/qa/res/6393.html>https://kissu.moe/qa/res/6393.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1571" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567019827720.jpg">1567019827720.jpg</a> <span class="unimportant">(576.29 KB, 1021x1418, <span class="postfilename" title="4645d5059a39854ddc42eabef63279b5.jpg">4645d5059a39854ddc42eabef6….jpg</span>)</span></p><a href="/agg/src/1567019827720.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567019827720.png" style="width:173px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1571" ><p class="intro"><input type="checkbox" class="delete" name="delete_1571" id="delete_1571" /><label for="delete_1571"><span class="name">Anonymous</span> <time datetime="2019-08-28T19:20:03Z">08/28/19 (Wed) 19:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1571" onclick="return highlightReply(1571, event)" href="/agg/res/1571#1571">No.</a><a class="post_no" onclick="return citeReply(1571)" href="/agg/res/1571#q1571">1571</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1571">[Reply]</a></p><div class="body"><span class="quote">&gt;/what/ doesn&#39;t like okinawan girls</span><br/><a href=http://what-ch.mooo.com/what/res/2324.html>http://what-ch.mooo.com/what/res/2324.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1570" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567002112038.jpg">1567002112038.jpg</a> <span class="unimportant">(70.26 KB, 445x699, <span class="postfilename" title="[naisho] PriPara - 07 [21989973].mkv_snapshot_12.43_[2017.08.14_19.08.02].jpg">[naisho] PriPara - 07 [219….jpg</span>)</span></p><a href="/agg/src/1567002112038.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567002112038.png" style="width:162px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1570" ><p class="intro"><input type="checkbox" class="delete" name="delete_1570" id="delete_1570" /><label for="delete_1570"><span class="name">Anonymous</span> <time datetime="2019-08-28T14:25:03Z">08/28/19 (Wed) 14:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1570" onclick="return highlightReply(1570, event)" href="/agg/res/1570#1570">No.</a><a class="post_no" onclick="return citeReply(1570)" href="/agg/res/1570#q1570">1570</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1570">[Reply]</a></p><div class="body">literally me<br/><a href=https://kissu.moe/qa/res/6367.html>https://kissu.moe/qa/res/6367.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/28" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a class="selected">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/30" method="get"><input type="submit" value="Next" /></form>
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