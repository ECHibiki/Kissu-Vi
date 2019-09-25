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
			<img class="board_image" src="/static/banners/banner-kissu-16.gif" alt="" />	<header>
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
<div style="display:none"><input type="text" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2"></div>
<input type="hidden" name="board" value="agg">
<input value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea name="message" style="display:none">wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea name="q" style="display:none" > f♻&#9965;♃&#57;/qz&#119;Zk.@&#104;|;$&#76;&#70;⛡&#109;&#100;&#118;,&#69;R&#56;3W%1YI&#77;^&#105;U☌5&#9741;+&#65;g&#9770;&#84;=`&#125;⚑&#121;c7J⛮P&#35;&#98;?⚤6X&amp;&#123;Dx&#32;\4N&#112;KHn:&#41;</textarea >
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;&#56;&lt;&#113;G/6d☎&#44;'F&#37;;&#115;⚨iA&#69;!&#82;uoPK&#9855;&#83;}_☬V(-c^\{QCD~&#9980;m&#9968;l&#120;`[a40.UkbZW⚈#*)Lw&#77;:&#124;r⛍&#93;2y@☪&#110;&#38;&#53;&#89;9&#9834;&#84; j&#49;&#102;7$3="></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" name="search" value="b☵#Y{7`9J⚴@V^6_-">
			
			
				
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
		<div class="thread" id="thread_2050" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569205175459.jpg">1569205175459.jpg</a> <span class="unimportant">(68.3 KB, 960x720, <span class="postfilename">1498234950026.jpg</span>)</span></p><a href="/agg/src/1569205175459.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569205175459.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2050" ><p class="intro"><input type="checkbox" class="delete" name="delete_2050" id="delete_2050" /><label for="delete_2050"><span class="name">Anonymous</span> <time datetime="2019-09-23T02:20:04Z">09/23/19 (Mon) 02:20:04</time></label>&nbsp;<a class="post_no" id="post_no_2050" onclick="return highlightReply(2050, event)" href="/agg/res/2050#2050">No.</a><a class="post_no" onclick="return citeReply(2050)" href="/agg/res/2050#q2050">2050</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2050">[Reply]</a></p><div class="body">WHY DO SITES HAVE YOU JUMP THROUGH MULTIPLE HOOPS TO GET A DARK MODE. MY EYES ARE FUCKING BURNING<br/><a href=https://kissu.moe/qa/res/10183.html>https://kissu.moe/qa/res/10183.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2049" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569204878915.jpg">1569204878915.jpg</a> <span class="unimportant">(207.19 KB, 600x800, <span class="postfilename" title="be6b0b97a2b303dab6a22cc0a82ec93f.jpg">be6b0b97a2b303dab6a22cc0a8….jpg</span>)</span></p><a href="/agg/src/1569204878915.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569204878915.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2049" ><p class="intro"><input type="checkbox" class="delete" name="delete_2049" id="delete_2049" /><label for="delete_2049"><span class="name">Anonymous</span> <time datetime="2019-09-23T02:15:04Z">09/23/19 (Mon) 02:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2049" onclick="return highlightReply(2049, event)" href="/agg/res/2049#2049">No.</a><a class="post_no" onclick="return citeReply(2049)" href="/agg/res/2049#q2049">2049</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2049">[Reply]</a></p><div class="body">Any fun games you&#39;ve played recently?<br/><a href=https://kissu.moe/qa/res/10182.html>https://kissu.moe/qa/res/10182.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2048" data-board="agg"><div class="video-container" data-video="1p09JkQiNSI"><a href="https://youtu.be/1p09JkQiNSI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/1p09JkQiNSI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2048" ><p class="intro"><input type="checkbox" class="delete" name="delete_2048" id="delete_2048" /><label for="delete_2048"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T02:10:03Z">09/23/19 (Mon) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2048" onclick="return highlightReply(2048, event)" href="/agg/res/2048#2048">No.</a><a class="post_no" onclick="return citeReply(2048)" href="/agg/res/2048#q2048">2048</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2048">[Reply]</a></p><div class="body">Loneliness is pretty unbearable, man.<br/><a href=https://gnfos.com/jp/res/369431.html>https://gnfos.com/jp/res/369431.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2047" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569204542083.jpg">1569204542083.jpg</a> <span class="unimportant">(627.08 KB, 1600x1064, <span class="postfilename">balboa.jpg</span>)</span></p><a href="/agg/src/1569204542083.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569204542083.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_2047" ><p class="intro"><input type="checkbox" class="delete" name="delete_2047" id="delete_2047" /><label for="delete_2047"><span class="name">としあき</span> <time datetime="2019-09-23T02:10:03Z">09/23/19 (Mon) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2047" onclick="return highlightReply(2047, event)" href="/agg/res/2047#2047">No.</a><a class="post_no" onclick="return citeReply(2047)" href="/agg/res/2047#q2047">2047</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2047">[Reply]</a></p><div class="body"><span class="heading">Friendly greetings from <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://himasugi.blog/jp/res/956312.html>https://himasugi.blog/jp/res/956312.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2046" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569204150167.jpg">1569204150167.jpg</a> <span class="unimportant">(90.48 KB, 1592x982, <span class="postfilename" title="__original_drawn_by_masuda_yousaytwosin__c4f08d6ab4338dfe2ef5a7a0385a0be9.jpg">__original_drawn_by_masuda….jpg</span>)</span></p><a href="/agg/src/1569204150167.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569204150167.png" style="width:255px;height:158px" alt="" /></a></div>    </div>    <div class="post op" id="op_2046" ><p class="intro"><input type="checkbox" class="delete" name="delete_2046" id="delete_2046" /><label for="delete_2046"><span class="name">としあき</span> <time datetime="2019-09-23T02:05:03Z">09/23/19 (Mon) 02:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2046" onclick="return highlightReply(2046, event)" href="/agg/res/2046#2046">No.</a><a class="post_no" onclick="return citeReply(2046)" href="/agg/res/2046#q2046">2046</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2046">[Reply]</a></p><div class="body"><a href=https://himasugi.blog/jp/res/956298.html>https://himasugi.blog/jp/res/956298.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2045" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569203007223.jpeg">1569203007223.jpeg</a> <span class="unimportant">(28.22 KB, 421x421, <span class="postfilename" title="59067A1D-AAA3-46F1-BCBB-4E0555BEDEC5.jpeg">59067A1D-AAA3-46F1-BCBB-4….jpeg</span>)</span></p><a href="/agg/src/1569203007223.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569203007223.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2045" ><p class="intro"><input type="checkbox" class="delete" name="delete_2045" id="delete_2045" /><label for="delete_2045"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-23T01:45:03Z">09/23/19 (Mon) 01:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2045" onclick="return highlightReply(2045, event)" href="/agg/res/2045#2045">No.</a><a class="post_no" onclick="return citeReply(2045)" href="/agg/res/2045#q2045">2045</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2045">[Reply]</a></p><div class="body">Thought so<br/><a href=https://kissu.moe/qa/res/10177.html>https://kissu.moe/qa/res/10177.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2044" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569201047123.jpg">1569201047123.jpg</a> <span class="unimportant">(127.37 KB, 960x720, <span class="postfilename" title="[EG]ZZ_Gundam_BD_44_Resub(720p)[0BDC3DBB].mkv_snapshot_14.25_[2019.06.07_13.47.04].jpg">[EG]ZZ_Gundam_BD_44_Resub(….jpg</span>)</span></p><a href="/agg/src/1569201047123.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569201047123.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2044" ><p class="intro"><input type="checkbox" class="delete" name="delete_2044" id="delete_2044" /><label for="delete_2044"><span class="name">Anonymous</span> <time datetime="2019-09-23T01:15:04Z">09/23/19 (Mon) 01:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2044" onclick="return highlightReply(2044, event)" href="/agg/res/2044#2044">No.</a><a class="post_no" onclick="return citeReply(2044)" href="/agg/res/2044#q2044">2044</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2044">[Reply]</a></p><div class="body">Giant, sexy, robots<br/><a href=https://kissu.moe/qa/res/10172.html>https://kissu.moe/qa/res/10172.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2043" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569200978020.jpg">1569200978020.jpg</a> <span class="unimportant">(908.3 KB, 2000x1500, <span class="postfilename" title="c22841ee22b544c47e5ffcd34bf6ab9e.jpg">c22841ee22b544c47e5ffcd34b….jpg</span>)</span></p><a href="/agg/src/1569200978020.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569200978020.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2043" ><p class="intro"><input type="checkbox" class="delete" name="delete_2043" id="delete_2043" /><label for="delete_2043"><span class="name">Anonymous</span> <time datetime="2019-09-23T01:10:03Z">09/23/19 (Mon) 01:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2043" onclick="return highlightReply(2043, event)" href="/agg/res/2043#2043">No.</a><a class="post_no" onclick="return citeReply(2043)" href="/agg/res/2043#q2043">2043</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2043">[Reply]</a></p><div class="body">Do you like asmr? What kind do you like? Do you like it lewd or safe? What kind of voices do you like? What kind of sounds? What kind of scenarios and characters? What kind of background noise do you prefer, if any? Do you listen to tracks from voice actors or videos from youtubers?<br/><a href=https://kissu.moe/qa/res/10171.html>https://kissu.moe/qa/res/10171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2042" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569196809296.jpg">1569196809296.jpg</a> <span class="unimportant">(549.26 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Maou-sama, Retry! - 08 [720p].mkv_snapshot_10.27_[2019.09.22_18.03.01].jpg">[HorribleSubs] Maou-sama, ….jpg</span>)</span></p><a href="/agg/src/1569196809296.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569196809296.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2042" ><p class="intro"><input type="checkbox" class="delete" name="delete_2042" id="delete_2042" /><label for="delete_2042"><span class="name">Anonymous</span> <time datetime="2019-09-23T00:05:03Z">09/23/19 (Mon) 00:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2042" onclick="return highlightReply(2042, event)" href="/agg/res/2042#2042">No.</a><a class="post_no" onclick="return citeReply(2042)" href="/agg/res/2042#q2042">2042</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2042">[Reply]</a></p><div class="body">You ever find yourself thoughtlessly watching an anime? With your mind more or less on autopilot<br/><a href=https://kissu.moe/qa/res/10159.html>https://kissu.moe/qa/res/10159.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2041" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569195248397.jpg">1569195248397.jpg</a> <span class="unimportant">(147.15 KB, 900x1200, <span class="postfilename">EFCbkOTUcAAFJ9U.jpg</span>)</span></p><a href="/agg/src/1569195248397.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569195248397.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2041" ><p class="intro"><input type="checkbox" class="delete" name="delete_2041" id="delete_2041" /><label for="delete_2041"><span class="name">Anonymous</span> <time datetime="2019-09-22T23:35:04Z">09/22/19 (Sun) 23:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2041" onclick="return highlightReply(2041, event)" href="/agg/res/2041#2041">No.</a><a class="post_no" onclick="return citeReply(2041)" href="/agg/res/2041#q2041">2041</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2041">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2658.html>http://what-ch.mooo.com/what/res/2658.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2040" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569192631021.gif">1569192631021.gif</a> <span class="unimportant">(87.94 KB, 400x452, <span class="postfilename">1569118665148.gif</span>)</span></p><a href="/agg/src/1569192631021.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569192631021.gif" style="width:213px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2040" ><p class="intro"><input type="checkbox" class="delete" name="delete_2040" id="delete_2040" /><label for="delete_2040"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T22:55:03Z">09/22/19 (Sun) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2040" onclick="return highlightReply(2040, event)" href="/agg/res/2040#2040">No.</a><a class="post_no" onclick="return citeReply(2040)" href="/agg/res/2040#q2040">2040</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2040">[Reply]</a></p><div class="body">wtf otamin keeps banning me this is bullshit<br/><a href=https://gnfos.com/jp/res/369422.html>https://gnfos.com/jp/res/369422.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2039" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569192853651.jpeg">1569192853651.jpeg</a> <span class="unimportant">(600.4 KB, 1280x1810, <span class="postfilename" title="9959E0BA-E1F6-420F-B20E-E352DCC69C61.jpeg">9959E0BA-E1F6-420F-B20E-E….jpeg</span>)</span></p><a href="/agg/src/1569192853651.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569192853651.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2039" ><p class="intro"><input type="checkbox" class="delete" name="delete_2039" id="delete_2039" /><label for="delete_2039"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:55:03Z">09/22/19 (Sun) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2039" onclick="return highlightReply(2039, event)" href="/agg/res/2039#2039">No.</a><a class="post_no" onclick="return citeReply(2039)" href="/agg/res/2039#q2039">2039</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2039">[Reply]</a></p><div class="body">What&#39;s good pisstards<br/><a href=https://kissu.moe/qa/res/10143.html>https://kissu.moe/qa/res/10143.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2038" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569192648420.jpg">1569192648420.jpg</a> <span class="unimportant">(143.42 KB, 740x724, <span class="postfilename" title="afwkeajvqoopbmunemdefgnfcdaxyjfpdyefbijr-740.jpg">afwkeajvqoopbmunemdefgnfcd….jpg</span>)</span></p><a href="/agg/src/1569192648420.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569192648420.png" style="width:255px;height:249px" alt="" /></a></div>    </div>    <div class="post op" id="op_2038" ><p class="intro"><input type="checkbox" class="delete" name="delete_2038" id="delete_2038" /><label for="delete_2038"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:55:03Z">09/22/19 (Sun) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2038" onclick="return highlightReply(2038, event)" href="/agg/res/2038#2038">No.</a><a class="post_no" onclick="return citeReply(2038)" href="/agg/res/2038#q2038">2038</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2038">[Reply]</a></p><div class="body">Anyone else feel like they found the key to happiness, but when you try to force your ideals and strategies onto others, they reject you, despite the people you help, are the miserable ones?<br/><br/>i dont know, i spend a lot of my time trying to help people, and granted, a lot of the stuff i wrote in the past was useless and i was miserable myself while writing it, but there are things that have improved me, and i try to share with the world//<br/><br/>I guess you can make the argument<br/><span class="quote">&gt;well no one is going to you for answers varappi, why bother forcing your ideals everywhere</span><br/>that is true.<br/>but at the same time, i wouldnt even have any money in crypto at all, if it wasnt for a femanon on /ic/ spamming crypto propaganda in stock market thread on /biz/<br/><br/>Yet, no one seems to listen. i guess all i can do is watch the world burn.<br/><a onclick="return highlightReply(&#39;10134&#39;, event);" href="/qa/res/10134#10134">&gt;&gt;10134</a><br/>youre a fucking dyke enabler. You are the cause for the whole world going to shit. But, i am not going to stop you. i am just going to enjoy my life while i can, instead of trying to risk it helping others.<br/><a href=https://kissu.moe/qa/res/10141.html>https://kissu.moe/qa/res/10141.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2037" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569190398408.jpg">1569190398408.jpg</a> <span class="unimportant">(861.4 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 127 [BD][1080p][AB5DD073].mkv_snapshot_06.06_[2019.08.10_03.10.14].jpg">[MiG_MuX] PriPara - 127 [B….jpg</span>)</span></p><a href="/agg/src/1569190398408.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569190398408.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2037" ><p class="intro"><input type="checkbox" class="delete" name="delete_2037" id="delete_2037" /><label for="delete_2037"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:15:04Z">09/22/19 (Sun) 22:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2037" onclick="return highlightReply(2037, event)" href="/agg/res/2037#2037">No.</a><a class="post_no" onclick="return citeReply(2037)" href="/agg/res/2037#q2037">2037</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2037">[Reply]</a></p><div class="body">Why aren&#39;t there more <em><span class="glowpink">cute</span></em> girl anime? I look at season charts and all I see are a few anime which meet the criteria for &#39;good&#39;, while the rest are filled with or centered around nasty boys<br/><a href=https://kissu.moe/qa/res/10134.html>https://kissu.moe/qa/res/10134.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2036" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569189933522.jpg">1569189933522.jpg</a> <span class="unimportant">(144.29 KB, 1440x1080, <span class="postfilename" title="[a-s]_mobile_suit_zeta_gundam_-_01_-_black_gundam__rs2_[1080p_bd-rip][B8B49416].mkv_snapshot_07.13_[2019.05.23_23.05.01].jpg">[a-s]_mobile_suit_zeta_gun….jpg</span>)</span></p><a href="/agg/src/1569189933522.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569189933522.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2036" ><p class="intro"><input type="checkbox" class="delete" name="delete_2036" id="delete_2036" /><label for="delete_2036"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:10:03Z">09/22/19 (Sun) 22:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2036" onclick="return highlightReply(2036, event)" href="/agg/res/2036#2036">No.</a><a class="post_no" onclick="return citeReply(2036)" href="/agg/res/2036#q2036">2036</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2036">[Reply]</a></p><div class="body">Kissu? Isn&#39;t that a girl&#39;s website?<br/><a href=https://kissu.moe/qa/res/10132.html>https://kissu.moe/qa/res/10132.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2035" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569187842054.jpg">1569187842054.jpg</a> <span class="unimportant">(176.08 KB, 906x1000, <span class="postfilename">elma confused.jpg</span>)</span></p><a href="/agg/src/1569187842054.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569187842054.png" style="width:231px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2035" ><p class="intro"><input type="checkbox" class="delete" name="delete_2035" id="delete_2035" /><label for="delete_2035"><span class="name">Anonymous</span> <time datetime="2019-09-22T21:35:03Z">09/22/19 (Sun) 21:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2035" onclick="return highlightReply(2035, event)" href="/agg/res/2035#2035">No.</a><a class="post_no" onclick="return citeReply(2035)" href="/agg/res/2035#q2035">2035</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2035">[Reply]</a></p><div class="body">So, I&#39;ve been meaning to ask, what&#39;s a boy?<br/><a href=https://kissu.moe/qa/res/10120.html>https://kissu.moe/qa/res/10120.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2034" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569185329789.jpg">1569185329789.jpg</a> <span class="unimportant">(1.6 MB, 1296x1812, <span class="postfilename" title="a82247215faa24354f76d823c7ff72e6a5622c4b298d76f0f099bdc635b93d99.jpg">a82247215faa24354f76d823c7….jpg</span>)</span></p><a href="/agg/src/1569185329789.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569185329789.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2034" ><p class="intro"><input type="checkbox" class="delete" name="delete_2034" id="delete_2034" /><label for="delete_2034"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T20:50:08Z">09/22/19 (Sun) 20:50:08</time></label>&nbsp;<a class="post_no" id="post_no_2034" onclick="return highlightReply(2034, event)" href="/agg/res/2034#2034">No.</a><a class="post_no" onclick="return citeReply(2034)" href="/agg/res/2034#q2034">2034</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2034">[Reply]</a></p><div class="body">What mascots are you guys browsing the /qa/ with? It&#39;s difficult to decide who I want to keep me company when I&#39;m perusing kissu.<br/><a href=https://kissu.moe/qa/res/10112.html>https://kissu.moe/qa/res/10112.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2033" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569182468400.png">1569182468400.png</a> <span class="unimportant">(1.18 MB, 1000x1333, <span class="postfilename" title="616a097085ad07d8b4a0387f60844ccd.png">616a097085ad07d8b4a0387f60….png</span>)</span></p><a href="/agg/src/1569182468400.png" target="_blank"><img class="post-image" src="/agg/thumb/1569182468400.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2033" ><p class="intro"><input type="checkbox" class="delete" name="delete_2033" id="delete_2033" /><label for="delete_2033"><span class="name">Anonymous</span> <time datetime="2019-09-22T20:05:03Z">09/22/19 (Sun) 20:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2033" onclick="return highlightReply(2033, event)" href="/agg/res/2033#2033">No.</a><a class="post_no" onclick="return citeReply(2033)" href="/agg/res/2033#q2033">2033</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2033">[Reply]</a></p><div class="body">mfw kissu is faster than gnfos and kissu has no freaks<br/><a href=https://kissu.moe/qa/res/10102.html>https://kissu.moe/qa/res/10102.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2032" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569181506064.jpg">1569181506064.jpg</a> <span class="unimportant">(76.83 KB, 1024x922, <span class="postfilename">1480476882671.jpg</span>)</span></p><a href="/agg/src/1569181506064.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569181506064.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_2032" ><p class="intro"><input type="checkbox" class="delete" name="delete_2032" id="delete_2032" /><label for="delete_2032"><span class="name">Anonymous</span> <time datetime="2019-09-22T19:50:05Z">09/22/19 (Sun) 19:50:05</time></label>&nbsp;<a class="post_no" id="post_no_2032" onclick="return highlightReply(2032, event)" href="/agg/res/2032#2032">No.</a><a class="post_no" onclick="return citeReply(2032)" href="/agg/res/2032#q2032">2032</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2032">[Reply]</a></p><div class="body">So, um, like, where&#39;s the anime board?<br/><a href=https://kissu.moe/qa/res/10098.html>https://kissu.moe/qa/res/10098.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2031" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569173531649.jpeg">1569173531649.jpeg</a> <span class="unimportant">(100.49 KB, 560x700, <span class="postfilename" title="F669B7BF-B82D-4621-8F89-22B149098C83.jpeg">F669B7BF-B82D-4621-8F89-2….jpeg</span>)</span></p><a href="/agg/src/1569173531649.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569173531649.jpeg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2031" ><p class="intro"><input type="checkbox" class="delete" name="delete_2031" id="delete_2031" /><label for="delete_2031"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T17:35:03Z">09/22/19 (Sun) 17:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2031" onclick="return highlightReply(2031, event)" href="/agg/res/2031#2031">No.</a><a class="post_no" onclick="return citeReply(2031)" href="/agg/res/2031#q2031">2031</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2031">[Reply]</a></p><div class="body">/intl/ won<br/><a href="https://spacechan.xyz/intl/" rel="nofollow" target="_blank">https://spacechan.xyz/intl/</a><br/><a href=https://gnfos.com/jp/res/369416.html>https://gnfos.com/jp/res/369416.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/5" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a class="selected">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/7" method="get"><input type="submit" value="Next" /></form>
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