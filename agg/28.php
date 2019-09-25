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
			<img class="board_image" src="/static/banners/banner-kissu-14.gif" alt="" />	<header>
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
<input style="display:none" type="text" name="firstname" value="f#⚈/ ♬&#51;}{QD&#116;7\+d5:Y&#64;⚒&#66;&#118;V&#84;-&#115;ep&#90;$~]IU;&#83;^&#110;&#104;X&#33;&#57;&#75;&#91;&#41;mu&lt;N(W8♛&#62;xro&#50;">
<input type="hidden" name="board" value="agg">
<input   value="/[LH Ji:`&#33;;&#67;+6\oT&lt;8&#79;bI|?&#88;]d.2&#9768;&#123;t&#87;5&#32;c⚱&#49;B&#61;k@9(&#51;Ng☮*}&#52;'PQ&#45;MV⚯0KD&#55;u&#115;j"   name="login"   type="hidden"  >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" name="q">
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" name="y0kh38z9do♒sb" type="hidden">
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
		<div class="thread" id="thread_1609" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567136786723.png">1567136786723.png</a> <span class="unimportant">(48.58 KB, 200x200, <span class="postfilename">memebase.com.png</span>)</span></p><a href="/agg/src/1567136786723.png" target="_blank"><img class="post-image" src="/agg/thumb/1567136786723.png" style="width:200px;height:200px" alt="" /></a></div>    </div>    <div class="post op" id="op_1609" ><p class="intro"><input type="checkbox" class="delete" name="delete_1609" id="delete_1609" /><label for="delete_1609"><span class="name">Anonymous</span> <time datetime="2019-08-30T03:50:03Z">08/30/19 (Fri) 03:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1609" onclick="return highlightReply(1609, event)" href="/agg/res/1609#1609">No.</a><a class="post_no" onclick="return citeReply(1609)" href="/agg/res/1609#q1609">1609</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1609">[Reply]</a></p><div class="body">Yo im gettin some complains from the neighbors sayin you niggas is makin too much damn racket. Now is i gonna have to evict yo asses or is you niggas finna shut the fuck up?<br/><a href=https://kissu.moe/qa/res/6595.html>https://kissu.moe/qa/res/6595.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1608" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567135772876.jpg">1567135772876.jpg</a> <span class="unimportant">(72.41 KB, 640x480, <span class="postfilename" title="Di Gi Charat - 05.avi_snapshot_01.32_[2017.07.17_12.33.30].jpg">Di Gi Charat - 05.avi_snap….jpg</span>)</span></p><a href="/agg/src/1567135772876.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567135772876.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1608" ><p class="intro"><input type="checkbox" class="delete" name="delete_1608" id="delete_1608" /><label for="delete_1608"><span class="name">Anonymous</span> <time datetime="2019-08-30T03:30:02Z">08/30/19 (Fri) 03:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1608" onclick="return highlightReply(1608, event)" href="/agg/res/1608#1608">No.</a><a class="post_no" onclick="return citeReply(1608)" href="/agg/res/1608#q1608">1608</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1608">[Reply]</a></p><div class="body">Whatever happened to anime parodying otaku culture?<br/><a href=https://kissu.moe/qa/res/6594.html>https://kissu.moe/qa/res/6594.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1607" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567133459220.png">1567133459220.png</a> <span class="unimportant">(3.66 KB, 95x45, <span class="postfilename">Wow_Ve7RZHd6B6.png</span>)</span></p><a href="/agg/src/1567133459220.png" target="_blank"><img class="post-image" src="/agg/thumb/1567133459220.png" style="width:95px;height:45px" alt="" /></a></div>    </div>    <div class="post op" id="op_1607" ><p class="intro"><input type="checkbox" class="delete" name="delete_1607" id="delete_1607" /><label for="delete_1607"><span class="name">Anonymous</span> <time datetime="2019-08-30T02:55:03Z">08/30/19 (Fri) 02:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1607" onclick="return highlightReply(1607, event)" href="/agg/res/1607#1607">No.</a><a class="post_no" onclick="return citeReply(1607)" href="/agg/res/1607#q1607">1607</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1607">[Reply]</a></p><div class="body">gold GET<br/><a href=https://kissu.moe/qa/res/6586.html>https://kissu.moe/qa/res/6586.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1606" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567133365091.jpg">1567133365091.jpg</a> <span class="unimportant">(344.34 KB, 700x1000, <span class="postfilename">71537612_p0.jpg</span>)</span></p><a href="/agg/src/1567133365091.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567133365091.png" style="width:179px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1606" ><p class="intro"><input type="checkbox" class="delete" name="delete_1606" id="delete_1606" /><label for="delete_1606"><span class="name">Anonymous</span> <time datetime="2019-08-30T02:50:03Z">08/30/19 (Fri) 02:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1606" onclick="return highlightReply(1606, event)" href="/agg/res/1606#1606">No.</a><a class="post_no" onclick="return citeReply(1606)" href="/agg/res/1606#q1606">1606</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1606">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=oh4tHpUflDA" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=oh4tHpUflDA</a><br/><a href=https://kissu.moe/qa/res/6585.html>https://kissu.moe/qa/res/6585.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1605" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567133013602.jpg">1567133013602.jpg</a> <span class="unimportant">(1.44 MB, 909x1225, <span class="postfilename" title="__hatsune_miku_vocaloid_drawn_by_shiamimazuki__d229a0671ce255da099b5b376bb6ad69.jpg">__hatsune_miku_vocaloid_dr….jpg</span>)</span></p><a href="/agg/src/1567133013602.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567133013602.png" style="width:189px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1605" ><p class="intro"><input type="checkbox" class="delete" name="delete_1605" id="delete_1605" /><label for="delete_1605"><span class="name">Anonymous</span> <time datetime="2019-08-30T02:45:03Z">08/30/19 (Fri) 02:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1605" onclick="return highlightReply(1605, event)" href="/agg/res/1605#1605">No.</a><a class="post_no" onclick="return citeReply(1605)" href="/agg/res/1605#q1605">1605</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1605">[Reply]</a></p><div class="body">4chan posting is dead! <br/>we need more days like this<br/><a href=https://kissu.moe/qa/res/6584.html>https://kissu.moe/qa/res/6584.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1604" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567129955762.png">1567129955762.png</a> <span class="unimportant">(140.21 KB, 960x960, <span class="postfilename">1561057798740.png</span>)</span></p><a href="/agg/src/1567129955762.png" target="_blank"><img class="post-image" src="/agg/thumb/1567129955762.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1604" ><p class="intro"><input type="checkbox" class="delete" name="delete_1604" id="delete_1604" /><label for="delete_1604"><span class="name">sage</span> <time datetime="2019-08-30T01:55:03Z">08/30/19 (Fri) 01:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1604" onclick="return highlightReply(1604, event)" href="/agg/res/1604#1604">No.</a><a class="post_no" onclick="return citeReply(1604)" href="/agg/res/1604#q1604">1604</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1604">[Reply]</a></p><div class="body">neetblog here<br/>im baste<br/><a href=https://kakashi-nenpo.com/jp/res/32926.html>https://kakashi-nenpo.com/jp/res/32926.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1603" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567122639441.jpg">1567122639441.jpg</a> <span class="unimportant">(130.76 KB, 1295x1044, <span class="postfilename" title="2132388bd3e04c473757de868c176eb0.jpg">2132388bd3e04c473757de868c….jpg</span>)</span></p><a href="/agg/src/1567122639441.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567122639441.png" style="width:255px;height:205px" alt="" /></a></div>    </div>    <div class="post op" id="op_1603" ><p class="intro"><input type="checkbox" class="delete" name="delete_1603" id="delete_1603" /><label for="delete_1603"><span class="name">Anonymous</span> <time datetime="2019-08-29T23:55:03Z">08/29/19 (Thu) 23:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1603" onclick="return highlightReply(1603, event)" href="/agg/res/1603#1603">No.</a><a class="post_no" onclick="return citeReply(1603)" href="/agg/res/1603#q1603">1603</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1603">[Reply]</a></p><div class="body">Subs or sandwiches?<br/><a href=https://kissu.moe/qa/res/6570.html>https://kissu.moe/qa/res/6570.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1602" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567119058410.jpg">1567119058410.jpg</a> <span class="unimportant">(79.02 KB, 500x281, <span class="postfilename" title="617261_1481111457321_500_281.jpg">617261_1481111457321_500_2….jpg</span>)</span></p><a href="/agg/src/1567119058410.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567119058410.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1602" ><p class="intro"><input type="checkbox" class="delete" name="delete_1602" id="delete_1602" /><label for="delete_1602"><span class="name">Anonymous</span> <time datetime="2019-08-29T22:55:03Z">08/29/19 (Thu) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1602" onclick="return highlightReply(1602, event)" href="/agg/res/1602#1602">No.</a><a class="post_no" onclick="return citeReply(1602)" href="/agg/res/1602#q1602">1602</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1602">[Reply]</a></p><div class="body">/vg/ wasn&#39;t working so I&#39;m posting this shit here instead<br/><span class="quote"><br/>&gt;In Path of Exile: Blight you&#39;ll be able to wear two helmet attachments at once!</span><br/>Did anyone else burst out laughing when they read this in their sub box? Like holy shit lmao<br/><a href=https://kissu.moe/qa/res/6562.html>https://kissu.moe/qa/res/6562.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1601" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567116801755.webm">1567116801755.webm</a> <span class="unimportant">(3.3 MB, 640x360, <span class="postfilename">CUM ZONE.webm</span>)</span></p><a href="/player.php?v=/agg/src/1567116801755.webm&amp;t=CUM%20ZONE.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1567116801755.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1601" ><p class="intro"><input type="checkbox" class="delete" name="delete_1601" id="delete_1601" /><label for="delete_1601"><span class="name">Anonymous</span> <time datetime="2019-08-29T22:15:03Z">08/29/19 (Thu) 22:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1601" onclick="return highlightReply(1601, event)" href="/agg/res/1601#1601">No.</a><a class="post_no" onclick="return citeReply(1601)" href="/agg/res/1601#q1601">1601</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1601">[Reply]</a></p><div class="body">cummies<br/><a href=http://what-ch.mooo.com/what/res/2345.html>http://what-ch.mooo.com/what/res/2345.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1600" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567115217977.jpg">1567115217977.jpg</a> <span class="unimportant">(37.4 KB, 720x480, <span class="postfilename" title="[Exiled-Destiny]_Tsukuyomi_Moon_Phase_Ep08_(AEAC7B4D).mkv_snapshot_06.20_[2019.08.29_15.01.31].jpg">[Exiled-Destiny]_Tsukuyomi….jpg</span>)</span></p><a href="/agg/src/1567115217977.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567115217977.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1600" ><p class="intro"><input type="checkbox" class="delete" name="delete_1600" id="delete_1600" /><label for="delete_1600"><span class="name">Anonymous</span> <time datetime="2019-08-29T21:50:03Z">08/29/19 (Thu) 21:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1600" onclick="return highlightReply(1600, event)" href="/agg/res/1600#1600">No.</a><a class="post_no" onclick="return citeReply(1600)" href="/agg/res/1600#q1600">1600</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1600">[Reply]</a></p><div class="body">Do you have any real-life video from movies or anything? This thing seems really cool to mess with:<br/><a href="https://ebsynth.com/" rel="nofollow" target="_blank">https://ebsynth.com/</a><br/><a href="https://www.youtube.com/watch?v=eghGQtQhY38" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=eghGQtQhY38</a><br/>But I don&#39;t have anything to use as a source<br/><a href=https://kissu.moe/qa/res/6557.html>https://kissu.moe/qa/res/6557.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1599" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567108171007.jpg">1567108171007.jpg</a> <span class="unimportant">(49.67 KB, 500x400, <span class="postfilename" title="[higurashi no naku koro ni][furude rika][artist- sakuramori sumomo] a0a307a82e59790a6ae42c3570f3deab.jpg">[higurashi no naku koro ni….jpg</span>)</span></p><a href="/agg/src/1567108171007.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567108171007.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_1599" ><p class="intro"><input type="checkbox" class="delete" name="delete_1599" id="delete_1599" /><label for="delete_1599"><span class="name">Anonymous</span> <time datetime="2019-08-29T19:50:02Z">08/29/19 (Thu) 19:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1599" onclick="return highlightReply(1599, event)" href="/agg/res/1599#1599">No.</a><a class="post_no" onclick="return citeReply(1599)" href="/agg/res/1599#q1599">1599</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1599">[Reply]</a></p><div class="body">so did all those people wake up yet?<br/><a href=https://kissu.moe/qa/res/6549.html>https://kissu.moe/qa/res/6549.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1598" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567087820349.jpg">1567087820349.jpg</a> <span class="unimportant">(290.59 KB, 1600x1200, <span class="postfilename">1563375954940.jpg</span>)</span></p><a href="/agg/src/1567087820349.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567087820349.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1598" ><p class="intro"><input type="checkbox" class="delete" name="delete_1598" id="delete_1598" /><label for="delete_1598"><span class="subject">anime x real life images thread</span> <span class="name">Anonymous</span> <time datetime="2019-08-29T14:15:03Z">08/29/19 (Thu) 14:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1598" onclick="return highlightReply(1598, event)" href="/agg/res/1598#1598">No.</a><a class="post_no" onclick="return citeReply(1598)" href="/agg/res/1598#q1598">1598</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1598">[Reply]</a></p><div class="body">irl backgrounds and anime grills/boys<br/><a href=https://kissu.moe/qa/res/6529.html>https://kissu.moe/qa/res/6529.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1597" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567074780719.png">1567074780719.png</a> <span class="unimportant">(304.22 KB, 500x494, <span class="postfilename" title="0-46-asmr-two-lolis-harass-you-at-a-truck-stop-41622404.png">0-46-asmr-two-lolis-harass….png</span>)</span></p><a href="/agg/src/1567074780719.png" target="_blank"><img class="post-image" src="/agg/thumb/1567074780719.png" style="width:255px;height:252px" alt="" /></a></div>    </div>    <div class="post op" id="op_1597" ><p class="intro"><input type="checkbox" class="delete" name="delete_1597" id="delete_1597" /><label for="delete_1597"><span class="name">Anonymous</span> <time datetime="2019-08-29T10:35:03Z">08/29/19 (Thu) 10:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1597" onclick="return highlightReply(1597, event)" href="/agg/res/1597#1597">No.</a><a class="post_no" onclick="return citeReply(1597)" href="/agg/res/1597#q1597">1597</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1597">[Reply]</a></p><div class="body">why dont you losers post in a real spinoff like meromin<br/><a href=https://kissu.moe/qa/res/6522.html>https://kissu.moe/qa/res/6522.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1596" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567066300857.jpg">1567066300857.jpg</a> <span class="unimportant">(23.61 KB, 374x267, <span class="postfilename">1436678669856.jpg</span>)</span></p><a href="/agg/src/1567066300857.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567066300857.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1596" ><p class="intro"><input type="checkbox" class="delete" name="delete_1596" id="delete_1596" /><label for="delete_1596"><span class="name">Anonymous</span> <time datetime="2019-08-29T08:15:03Z">08/29/19 (Thu) 08:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1596" onclick="return highlightReply(1596, event)" href="/agg/res/1596#1596">No.</a><a class="post_no" onclick="return citeReply(1596)" href="/agg/res/1596#q1596">1596</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1596">[Reply]</a></p><div class="body">Why is almost every anonymous poster here today yellow? Is only one person posting?<br/><a href=https://kissu.moe/qa/res/6517.html>https://kissu.moe/qa/res/6517.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1595" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567064828085.jpg">1567064828085.jpg</a> <span class="unimportant">(1.37 MB, 1755x1755, <span class="postfilename" title="b29930532151b0fe455f35a5d79f5690.jpg">b29930532151b0fe455f35a5d7….jpg</span>)</span></p><a href="/agg/src/1567064828085.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567064828085.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1595" ><p class="intro"><input type="checkbox" class="delete" name="delete_1595" id="delete_1595" /><label for="delete_1595"><span class="name">Anonymous</span> <time datetime="2019-08-29T07:50:04Z">08/29/19 (Thu) 07:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1595" onclick="return highlightReply(1595, event)" href="/agg/res/1595#1595">No.</a><a class="post_no" onclick="return citeReply(1595)" href="/agg/res/1595#q1595">1595</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1595">[Reply]</a></p><div class="body">how do you friends organize your images?<br/><a href=https://kissu.moe/qa/res/6514.html>https://kissu.moe/qa/res/6514.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1594" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567063199947.jpg">1567063199947.jpg</a> <span class="unimportant">(151.42 KB, 1280x720, <span class="postfilename" title="[naisho] PriPara - 08 [C0D46CF3].mkv_snapshot_05.42_[2017.08.14_19.43.54].jpg">[naisho] PriPara - 08 [C0D….jpg</span>)</span></p><a href="/agg/src/1567063199947.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567063199947.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1594" ><p class="intro"><input type="checkbox" class="delete" name="delete_1594" id="delete_1594" /><label for="delete_1594"><span class="name">Anonymous</span> <time datetime="2019-08-29T07:20:09Z">08/29/19 (Thu) 07:20:09</time></label>&nbsp;<a class="post_no" id="post_no_1594" onclick="return highlightReply(1594, event)" href="/agg/res/1594#1594">No.</a><a class="post_no" onclick="return citeReply(1594)" href="/agg/res/1594#q1594">1594</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1594">[Reply]</a></p><div class="body">There are people who STILL haven&#39;t watched PriPara?<br/><a href=https://kissu.moe/qa/res/6512.html>https://kissu.moe/qa/res/6512.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1593" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567061841435.png">1567061841435.png</a> <span class="unimportant">(172.12 KB, 424x600, <span class="postfilename" title="__cirno_touhou_drawn_by_okumari__d72e6b519a5ea7fadf68cf63274ded60.png">__cirno_touhou_drawn_by_ok….png</span>)</span></p><a href="/agg/src/1567061841435.png" target="_blank"><img class="post-image" src="/agg/thumb/1567061841435.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1593" ><p class="intro"><input type="checkbox" class="delete" name="delete_1593" id="delete_1593" /><label for="delete_1593"><span class="name">Anonymous</span> <time datetime="2019-08-29T07:00:03Z">08/29/19 (Thu) 07:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1593" onclick="return highlightReply(1593, event)" href="/agg/res/1593#1593">No.</a><a class="post_no" onclick="return citeReply(1593)" href="/agg/res/1593#q1593">1593</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1593">[Reply]</a></p><div class="body">Where does jevin disappear to all the time?<br/><a href=https://kissu.moe/qa/res/6509.html>https://kissu.moe/qa/res/6509.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1592" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567060367609.png">1567060367609.png</a> <span class="unimportant">(762.06 KB, 1245x1403, <span class="postfilename" title="__hagoromo_lala_star_twinkle_precure_and_etc_drawn_by_disco_brando__72b5cda3595defd50bb55796c9237898.png">__hagoromo_lala_star_twink….png</span>)</span></p><a href="/agg/src/1567060367609.png" target="_blank"><img class="post-image" src="/agg/thumb/1567060367609.png" style="width:226px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1592" ><p class="intro"><input type="checkbox" class="delete" name="delete_1592" id="delete_1592" /><label for="delete_1592"><span class="name">Anonymous</span> <time datetime="2019-08-29T06:35:04Z">08/29/19 (Thu) 06:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1592" onclick="return highlightReply(1592, event)" href="/agg/res/1592#1592">No.</a><a class="post_no" onclick="return citeReply(1592)" href="/agg/res/1592#q1592">1592</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1592">[Reply]</a></p><div class="body">why do people even bother making non-shoujo anime? they never ever achieve the heights of shoujo anime so why even try<br/><a href=https://kissu.moe/qa/res/6505.html>https://kissu.moe/qa/res/6505.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1591" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567059884437.png">1567059884437.png</a> <span class="unimportant">(5.85 MB, 2232x3100, <span class="postfilename" title="51e8cbd8d6031dabf88dd775b74dc45c.png">51e8cbd8d6031dabf88dd775b7….png</span>)</span></p><a href="/agg/src/1567059884437.png" target="_blank"><img class="post-image" src="/agg/thumb/1567059884437.png" style="width:184px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1591" ><p class="intro"><input type="checkbox" class="delete" name="delete_1591" id="delete_1591" /><label for="delete_1591"><span class="name">Anonymous</span> <time datetime="2019-08-29T06:25:02Z">08/29/19 (Thu) 06:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1591" onclick="return highlightReply(1591, event)" href="/agg/res/1591#1591">No.</a><a class="post_no" onclick="return citeReply(1591)" href="/agg/res/1591#q1591">1591</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1591">[Reply]</a></p><div class="body">think I&#39;m gonna Z<br/><a href=https://kissu.moe/qa/res/6500.html>https://kissu.moe/qa/res/6500.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1590" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567059409293.jpg">1567059409293.jpg</a> <span class="unimportant">(15.74 KB, 238x223, <span class="postfilename">1450076864797.jpg</span>)</span></p><a href="/agg/src/1567059409293.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567059409293.png" style="width:238px;height:223px" alt="" /></a></div>    </div>    <div class="post op" id="op_1590" ><p class="intro"><input type="checkbox" class="delete" name="delete_1590" id="delete_1590" /><label for="delete_1590"><span class="name">Anonymous</span> <time datetime="2019-08-29T06:20:02Z">08/29/19 (Thu) 06:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1590" onclick="return highlightReply(1590, event)" href="/agg/res/1590#1590">No.</a><a class="post_no" onclick="return citeReply(1590)" href="/agg/res/1590#q1590">1590</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1590">[Reply]</a></p><div class="body">goodnight /qa/<br/><a href=https://kissu.moe/qa/res/6494.html>https://kissu.moe/qa/res/6494.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/27" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a class="selected">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/29" method="get"><input type="submit" value="Next" /></form>
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