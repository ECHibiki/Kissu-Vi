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
			<img class="board_image" src="/static/banners/banner-kissu-13.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span style="display:none"><input type="text" name="text" value="qmsS&#89;[&#118;pL&#72;2P&#92;1y@b,k&#95;"></span>
<input name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" type="hidden">
<input type="hidden" name="board" value="agg">
<input  type="hidden"  name="login"  value="&#47;[LH J&#105;&#58;`&#33;&#59;C&#43;6\o&#84;&lt;8&#79;bI&#124;?X]d.2☨{tW5 c⚱1B&#61;k@&#57;(3Ng&#9774;&#42;}4'PQ-MV⚯&#48;KD7u&#115;j">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<input type="hidden" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea name="search" style="display:none">b☵#Y{7`9J⚴@V^6_-</textarea>
			
			
				
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
		<div class="thread" id="thread_1850" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568502322878.png">1568502322878.png</a> <span class="unimportant">(3.06 MB, 1080x1920, <span class="postfilename">1568293589703.png</span>)</span></p><a href="/agg/src/1568502322878.png" target="_blank"><img class="post-image" src="/agg/thumb/1568502322878.png" style="width:143px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1850" ><p class="intro"><input type="checkbox" class="delete" name="delete_1850" id="delete_1850" /><label for="delete_1850"><span class="subject">Cinemassacre Thread</span> <span class="name">AVGN Otaku</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1850" onclick="return highlightReply(1850, event)" href="/agg/res/1850#1850">No.</a><a class="post_no" onclick="return citeReply(1850)" href="/agg/res/1850#q1850">1850</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1850">[Reply]</a></p><div class="body">I havent discussed cinemassacre for a while on the spinoffs. But, i have made so many fucking cinemassacre posts and threads on /v/ and /tv/ all the time. I probably made literally 500 posts, i would not be surprised. Before 4chan, I would only talk about it with Honduras poster on mero. The first time i ever mentioned my fandom was discussing berestain bears episode on gnfos way back in 2016. I thought james was doing amazing at the time, with the megaman ep, paperboy, and berestain. Little did i know that the fucking Sega Activator Menacer episode, the biggest piece of shit episode (besides chronologically confused kingdom hearts) would come out. Bootsy was also about to be fired, but, i really wasnt that big of a bootsy fan honestly. Board james wouldnt be board james without him, but.... board james was fucking over.<br/><br/>So, i figured, Why not update the casual viewers on whats going on with Cinemassacre.<br/> And, i think the best thing that sums it up is this post right here (not by me, but was my thoughts days before). This is talking about Mikes new video game show.<br/><a href="https://arch.b4k.co/v/thread/477792056/#477800723" rel="nofollow" target="_blank">https://arch.b4k.co/v/thread/477792056/#477800723</a><br/><br/>What the fuck is going to happen between Mike and the screenwave slobs? You can tell there is legit hatred between them. Unlike beta james, Ryan is not one to shy away from telling Mike the fuck off. I gaurantee, Ryan had a talk with Mike after the show.<br/>Also, Kieran is someone who gets into fights like a drunk irish man would (his blood is irish, but his stepmother was filipina i believe). When he was apart of Silvermania crew, he tried challenging Jarutt to fights a few times, and even kieran confirms it on stream. And kieran is someone who gets easily offended, like real easily. Challenging redditards to fights, rage quiting, etc. a real fat baby. (yes kieran, i know you answered my questions in the q&amp;A well, but im not going to censor my words).<br/><br/>So, im saying, real hostility and consequences with Ryan and Kieran, mike created. Hes on good terms with tony still though. But, I am hoping, and what some anons are expecting, is a bit of a "break up in the band" going on with this new disaster of a show.<br/><a href=https://kissu.moe/qa/res/8801.html>https://kissu.moe/qa/res/8801.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1849" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568486035030.jpg">1568486035030.jpg</a> <span class="unimportant">(54.33 KB, 411x623, <span class="postfilename" title="[Merchant] Sansha Sanyou - 12 [720p].mkv_snapshot_10.10_[2017.01.22_09.40.52].jpg">[Merchant] Sansha Sanyou -….jpg</span>)</span></p><a href="/agg/src/1568486035030.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568486035030.png" style="width:168px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1849" ><p class="intro"><input type="checkbox" class="delete" name="delete_1849" id="delete_1849" /><label for="delete_1849"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1849" onclick="return highlightReply(1849, event)" href="/agg/res/1849#1849">No.</a><a class="post_no" onclick="return citeReply(1849)" href="/agg/res/1849#q1849">1849</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1849">[Reply]</a></p><div class="body">Got 3 whole levels running SM so far today<br/><a href=https://kissu.moe/qa/res/8769.html>https://kissu.moe/qa/res/8769.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1848" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568434615153.jpg">1568434615153.jpg</a> <span class="unimportant">(16.29 KB, 263x283, <span class="postfilename">ika.jpg</span>)</span></p><a href="/agg/src/1568434615153.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568434615153.png" style="width:237px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1848" ><p class="intro"><input type="checkbox" class="delete" name="delete_1848" id="delete_1848" /><label for="delete_1848"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1848" onclick="return highlightReply(1848, event)" href="/agg/res/1848#1848">No.</a><a class="post_no" onclick="return citeReply(1848)" href="/agg/res/1848#q1848">1848</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1848">[Reply]</a></p><div class="body">nice squid<br/><a href=https://kissu.moe/qa/res/8690.html>https://kissu.moe/qa/res/8690.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1847" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568483665906.jpg">1568483665906.jpg</a> <span class="unimportant">(143.42 KB, 740x724, <span class="postfilename" title="afwkeajvqoopbmunemdefgnfcdaxyjfpdyefbijr-740.jpg">afwkeajvqoopbmunemdefgnfcd….jpg</span>)</span></p><a href="/agg/src/1568483665906.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568483665906.png" style="width:255px;height:249px" alt="" /></a></div>    </div>    <div class="post op" id="op_1847" ><p class="intro"><input type="checkbox" class="delete" name="delete_1847" id="delete_1847" /><label for="delete_1847"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1847" onclick="return highlightReply(1847, event)" href="/agg/res/1847#1847">No.</a><a class="post_no" onclick="return citeReply(1847)" href="/agg/res/1847#q1847">1847</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1847">[Reply]</a></p><div class="body">Muh favorite boards are /tv/ and /v/. <br/>yet, people keep telling me they are a cess pool and unbrowseable and dare, the worst boards on 4chan besides the unholy trinity: /r9k/, /soc/, and /lgbt/. but from my point of view, /tv/ and /v/ are the only tolerable boards on 4chan.<br/><br/>All the supposed "good" boards on 4chan are full of lesbians. LESBIANS. Do you guys actually like browsing boards with the filthy dykes? Its usually the peudo intellect board that have these filthy pussy eating creatures.<br/><br/>Every other board is just either incel-baiting, or boring.<br/>i dont know<br/><br/>I get 90% of my meme and funny images that i send to muh jap girlfriend from /tv/ /v/ and /qa/. I sometimes find something good on /biz/. but /biz/ is becoming really shit too. i dont know, i liked 2017 biz better.<br/><a href=https://kissu.moe/qa/res/8765.html>https://kissu.moe/qa/res/8765.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1846" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568441866494.png">1568441866494.png</a> <span class="unimportant">(557.25 KB, 662x897, <span class="postfilename" title="[RESubs] Higurashi no Naku Koro Ni Kai - 03 (BD 1920x1080 AC3) [72577263].mkv_snapshot_13.30_[2018.06.23_14.37.51].png">[RESubs] Higurashi no Naku….png</span>)</span></p><a href="/agg/src/1568441866494.png" target="_blank"><img class="post-image" src="/agg/thumb/1568441866494.png" style="width:188px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1846" ><p class="intro"><input type="checkbox" class="delete" name="delete_1846" id="delete_1846" /><label for="delete_1846"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1846" onclick="return highlightReply(1846, event)" href="/agg/res/1846#1846">No.</a><a class="post_no" onclick="return citeReply(1846)" href="/agg/res/1846#q1846">1846</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1846">[Reply]</a></p><div class="body"><span class="quote">&gt;she sees your kissu</span><br/>hmm that doesn&#39;t work too well<br/><a href=https://kissu.moe/qa/res/8722.html>https://kissu.moe/qa/res/8722.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1845" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568447175460.jpg">1568447175460.jpg</a> <span class="unimportant">(80.54 KB, 888x480, <span class="postfilename">mpv-shot0040.jpg</span>)</span></p><a href="/agg/src/1568447175460.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568447175460.png" style="width:255px;height:138px" alt="" /></a></div>    </div>    <div class="post op" id="op_1845" ><p class="intro"><input type="checkbox" class="delete" name="delete_1845" id="delete_1845" /><label for="delete_1845"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1845" onclick="return highlightReply(1845, event)" href="/agg/res/1845#1845">No.</a><a class="post_no" onclick="return citeReply(1845)" href="/agg/res/1845#q1845">1845</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1845">[Reply]</a></p><div class="body">i wish everyone on the planet would die &#39;cept for me and /qa/!<br/><a href=https://kissu.moe/qa/res/8728.html>https://kissu.moe/qa/res/8728.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1844" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568265776981.jpg">1568265776981.jpg</a> <span class="unimportant">(52.56 KB, 564x750, <span class="postfilename">HD600-large.jpg</span>)</span></p><a href="/agg/src/1568265776981.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568265776981.png" style="width:192px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1844" ><p class="intro"><input type="checkbox" class="delete" name="delete_1844" id="delete_1844" /><label for="delete_1844"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1844" onclick="return highlightReply(1844, event)" href="/agg/res/1844#1844">No.</a><a class="post_no" onclick="return citeReply(1844)" href="/agg/res/1844#q1844">1844</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1844">[Reply]</a></p><div class="body">Any friends into headphones here? I&#39;m saving up for an amp on my HD 600&#39;s<br/><a href=https://kissu.moe/qa/res/8443.html>https://kissu.moe/qa/res/8443.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1843" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568400857138.jpg">1568400857138.jpg</a> <span class="unimportant">(143.84 KB, 1280x720, <span class="postfilename" title="[Victorique]_Gosick_-_04_[BD][h264-720p][FLAC][A22F9F80].mkv_snapshot_05.49_[2017.09.17_15.01.23].jpg">[Victorique]_Gosick_-_04_[….jpg</span>)</span></p><a href="/agg/src/1568400857138.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568400857138.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1843" ><p class="intro"><input type="checkbox" class="delete" name="delete_1843" id="delete_1843" /><label for="delete_1843"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1843" onclick="return highlightReply(1843, event)" href="/agg/res/1843#1843">No.</a><a class="post_no" onclick="return citeReply(1843)" href="/agg/res/1843#q1843">1843</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1843">[Reply]</a></p><div class="body">Awfully quiet for a Friday...<br/><br/>You&#39;re not all out partying, are you?<br/><a href=https://kissu.moe/qa/res/8613.html>https://kissu.moe/qa/res/8613.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1842" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568416205179.jpg">1568416205179.jpg</a> <span class="unimportant">(143.13 KB, 1920x1080, <span class="postfilename" title="blazblue-alter-memory-ep-2-2.jpg">blazblue-alter-memory-ep-2….jpg</span>)</span></p><a href="/agg/src/1568416205179.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568416205179.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1842" ><p class="intro"><input type="checkbox" class="delete" name="delete_1842" id="delete_1842" /><label for="delete_1842"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1842" onclick="return highlightReply(1842, event)" href="/agg/res/1842#1842">No.</a><a class="post_no" onclick="return citeReply(1842)" href="/agg/res/1842#q1842">1842</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1842">[Reply]</a></p><div class="body">Tea only tastes good warm and nasty when cold<br/>Soda only tastes good cold and nasty when warm<br/><a href=https://kissu.moe/qa/res/8631.html>https://kissu.moe/qa/res/8631.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1841" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568311984651.png">1568311984651.png</a> <span class="unimportant">(127.86 KB, 319x531, <span class="postfilename">thinkin bout drippin.png</span>)</span></p><a href="/agg/src/1568311984651.png" target="_blank"><img class="post-image" src="/agg/thumb/1568311984651.png" style="width:153px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1841" ><p class="intro"><input type="checkbox" class="delete" name="delete_1841" id="delete_1841" /><label for="delete_1841"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1841" onclick="return highlightReply(1841, event)" href="/agg/res/1841#1841">No.</a><a class="post_no" onclick="return citeReply(1841)" href="/agg/res/1841#q1841">1841</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1841">[Reply]</a></p><div class="body">why are people so rude<br/>they keep making passing comments about my purchases<br/>i load orange soda into my cart and someone goes "1, 2, 3" and i have to chuckle and go "yeah, ha i usually get this amount.." and wheel my cart somewhere else to get more soda<br/>and wheeling the cart back home someone goes "orange soda! i love orange soda!" and i have to turn and smile and flash a thumbs up and say "hah yep, heh.."<br/><br/>this is a very not good experience i tell you, people are too nosy<br/><a href=https://kissu.moe/qa/res/8505.html>https://kissu.moe/qa/res/8505.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1840" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568396781415.jpg">1568396781415.jpg</a> <span class="unimportant">(36.48 KB, 400x400, <span class="postfilename">1516943858641.jpg</span>)</span></p><a href="/agg/src/1568396781415.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568396781415.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1840" ><p class="intro"><input type="checkbox" class="delete" name="delete_1840" id="delete_1840" /><label for="delete_1840"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1840" onclick="return highlightReply(1840, event)" href="/agg/res/1840#1840">No.</a><a class="post_no" onclick="return citeReply(1840)" href="/agg/res/1840#q1840">1840</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1840">[Reply]</a></p><div class="body">Questing in Stranglethorn was a mistake...<br/><a href=https://kissu.moe/qa/res/8612.html>https://kissu.moe/qa/res/8612.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1839" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568243684900.png">1568243684900.png</a> <span class="unimportant">(921.3 KB, 584x1003, <span class="postfilename">97cbd4730d.png</span>)</span></p><a href="/agg/src/1568243684900.png" target="_blank"><img class="post-image" src="/agg/thumb/1568243684900.png" style="width:148px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1839" ><p class="intro"><input type="checkbox" class="delete" name="delete_1839" id="delete_1839" /><label for="delete_1839"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1839" onclick="return highlightReply(1839, event)" href="/agg/res/1839#1839">No.</a><a class="post_no" onclick="return citeReply(1839)" href="/agg/res/1839#q1839">1839</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1839">[Reply]</a></p><div class="body">what&#39;s /qa/ think of my cute daughter<br/><a href=https://kissu.moe/qa/res/8354.html>https://kissu.moe/qa/res/8354.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1838" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568312963205.png">1568312963205.png</a> <span class="unimportant">(662.77 KB, 1280x720, <span class="postfilename" title="vlcsnap✝[HorribleSubs] Kanata no Astra - 11 [720p].mkv✝00_21_20✝2019-09-12-13h26m21s986.png">vlcsnap✝[HorribleSubs] Kan….png</span>)</span></p><a href="/agg/src/1568312963205.png" target="_blank"><img class="post-image" src="/agg/thumb/1568312963205.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1838" ><p class="intro"><input type="checkbox" class="delete" name="delete_1838" id="delete_1838" /><label for="delete_1838"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1838" onclick="return highlightReply(1838, event)" href="/agg/res/1838#1838">No.</a><a class="post_no" onclick="return citeReply(1838)" href="/agg/res/1838#q1838">1838</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1838">[Reply]</a></p><div class="body">Looks like it&#39;s back to square one, stuck in space with no ship.<br/><a href=https://kissu.moe/qa/res/8506.html>https://kissu.moe/qa/res/8506.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1837" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568322435299.jpg">1568322435299.jpg</a> <span class="unimportant">(70.91 KB, 700x700, <span class="postfilename" title="a1b97835a17ac7009d1dc6644c0190b2.jpg">a1b97835a17ac7009d1dc6644c….jpg</span>)</span></p><a href="/agg/src/1568322435299.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568322435299.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1837" ><p class="intro"><input type="checkbox" class="delete" name="delete_1837" id="delete_1837" /><label for="delete_1837"><span class="subject">Special Studying habits</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1837" onclick="return highlightReply(1837, event)" href="/agg/res/1837#1837">No.</a><a class="post_no" onclick="return citeReply(1837)" href="/agg/res/1837#q1837">1837</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1837">[Reply]</a></p><div class="body">So, i never really told anyone this. But when im doing really hardcore studying, i have to listen to this and only this<br/><br/><a href="https://www.youtube.com/watch?v=AyHJpHqI5uY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=AyHJpHqI5uY</a><br/><br/>Nothing else. Its how I passed the jlpt n4 (not impressive feat in the grand scheme, but i was studying for like 12 hours) And ill look at it, and itll say, "5:09:09" so, i guess Cirno is the only thing that makes me successful<br/><br/>If i dont pass muh statistics exam, muh future japanese hooker wife will never marry me. So, really huge pressure here...<br/>I literally need muh hooker wife&ndash; like my life depends on it.<br/><a href=https://kissu.moe/qa/res/8518.html>https://kissu.moe/qa/res/8518.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1836" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568333612452.jpg">1568333612452.jpg</a> <span class="unimportant">(380.73 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 09 [720p].mkv_snapshot_14.26_[2019.09.12_19.02.35].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1568333612452.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568333612452.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1836" ><p class="intro"><input type="checkbox" class="delete" name="delete_1836" id="delete_1836" /><label for="delete_1836"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1836" onclick="return highlightReply(1836, event)" href="/agg/res/1836#1836">No.</a><a class="post_no" onclick="return citeReply(1836)" href="/agg/res/1836#q1836">1836</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1836">[Reply]</a></p><div class="body">How can people stomach this horrid CG without wanting to vomit....<br/><a href=https://kissu.moe/qa/res/8547.html>https://kissu.moe/qa/res/8547.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1835" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568213890302.jpg">1568213890302.jpg</a> <span class="unimportant">(85.26 KB, 584x875, <span class="postfilename" title="__nanachi_made_in_abyss_drawn_by_kawasemi27__89596a04377aba26b2149a0cba87a940.jpg">__nanachi_made_in_abyss_dr….jpg</span>)</span></p><a href="/agg/src/1568213890302.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568213890302.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1835" ><p class="intro"><input type="checkbox" class="delete" name="delete_1835" id="delete_1835" /><label for="delete_1835"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1835" onclick="return highlightReply(1835, event)" href="/agg/res/1835#1835">No.</a><a class="post_no" onclick="return citeReply(1835)" href="/agg/res/1835#q1835">1835</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1835">[Reply]</a></p><div class="body">What&#39;s kissu&#39;s stance on cute kemono characters?<br/><a href=https://kissu.moe/qa/res/8288.html>https://kissu.moe/qa/res/8288.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1834" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568299628052.jpg">1568299628052.jpg</a> <span class="unimportant">(47.87 KB, 400x500, <span class="postfilename" title="c91a5e411c252dcba6ace0d482e7919f.jpg">c91a5e411c252dcba6ace0d482….jpg</span>)</span></p><a href="/agg/src/1568299628052.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568299628052.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1834" ><p class="intro"><input type="checkbox" class="delete" name="delete_1834" id="delete_1834" /><label for="delete_1834"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1834" onclick="return highlightReply(1834, event)" href="/agg/res/1834#1834">No.</a><a class="post_no" onclick="return citeReply(1834)" href="/agg/res/1834#q1834">1834</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1834">[Reply]</a></p><div class="body">babla!<br/><a href=https://kissu.moe/qa/res/8477.html>https://kissu.moe/qa/res/8477.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1833" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568209801138.jpg">1568209801138.jpg</a> <span class="unimportant">(56.19 KB, 876x876, <span class="postfilename" title="982cae352c2d7673998ebc46d9b5b88a.jpg">982cae352c2d7673998ebc46d9….jpg</span>)</span></p><a href="/agg/src/1568209801138.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568209801138.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1833" ><p class="intro"><input type="checkbox" class="delete" name="delete_1833" id="delete_1833" /><label for="delete_1833"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1833" onclick="return highlightReply(1833, event)" href="/agg/res/1833#1833">No.</a><a class="post_no" onclick="return citeReply(1833)" href="/agg/res/1833#q1833">1833</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1833">[Reply]</a></p><div class="body">How do people make it through their mornings without tea or coffee<br/><a href=https://kissu.moe/qa/res/8275.html>https://kissu.moe/qa/res/8275.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1832" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568251708196.png">1568251708196.png</a> <span class="unimportant">(6.33 KB, 419x258, <span class="postfilename">13d9820846.png</span>)</span></p><a href="/agg/src/1568251708196.png" target="_blank"><img class="post-image" src="/agg/thumb/1568251708196.png" style="width:255px;height:157px" alt="" /></a></div>    </div>    <div class="post op" id="op_1832" ><p class="intro"><input type="checkbox" class="delete" name="delete_1832" id="delete_1832" /><label for="delete_1832"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1832" onclick="return highlightReply(1832, event)" href="/agg/res/1832#1832">No.</a><a class="post_no" onclick="return citeReply(1832)" href="/agg/res/1832#q1832">1832</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1832">[Reply]</a></p><div class="body">cab you do it?<br/><a href="https://fineleatherjackets.net/realhuman/" rel="nofollow" target="_blank">https://fineleatherjackets.net/realhuman/</a><br/><a href=https://kissu.moe/qa/res/8400.html>https://kissu.moe/qa/res/8400.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1831" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568221519321.png">1568221519321.png</a> <span class="unimportant">(483.76 KB, 433x713, <span class="postfilename">Kurumizawa_Satanichia_C#.png</span>)</span></p><a href="/agg/src/1568221519321.png" target="_blank"><img class="post-image" src="/agg/thumb/1568221519321.png" style="width:155px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1831" ><p class="intro"><input type="checkbox" class="delete" name="delete_1831" id="delete_1831" /><label for="delete_1831"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1831" onclick="return highlightReply(1831, event)" href="/agg/res/1831#1831">No.</a><a class="post_no" onclick="return citeReply(1831)" href="/agg/res/1831#q1831">1831</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1831">[Reply]</a></p><div class="body">This is a thing<br/><a href="https://github.com/boyEstrogen/Anime-Girls-Holding-Programming-Books" rel="nofollow" target="_blank">https://github.com/boyEstrogen/Anime-Girls-Holding-Programming-Books</a><br/><a href=https://kissu.moe/qa/res/8303.html>https://kissu.moe/qa/res/8303.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/15" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a class="selected">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/17" method="get"><input type="submit" value="Next" /></form>
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