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
			<img class="board_image" src="/static/banners/banner-kissu-17.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_">
<input type="hidden" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" name="login" value="/[LH &#74;i:`!;C&#43;6\&#111;T&lt;&#56;&#79;bI&#124;&#63;X]&#100;&#46;&#50;☨&#123;tW5 c⚱1B&#61;&#107;@&#57;(&#51;&#78;g&#9774;*&#125;4'PQ&#45;&#77;V⚯0KD&#55;usj">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input   style="display:none"   type="text"   name="q"   value="&#32;f♻⛭♃9/qzwZ&#107;.@h&#124;;$LF⛡m&#100;&#118;&#44;ER8&#51;W%1YIM^&#105;U☌&#53;&#9741;&#43;Ag☪T=`}&#9873;yc&#55;J⛮P#&#98;?&#9892;6X&amp;{Dx &#92;4N&#112;KHn&#58;)">
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;&#56;&#60;&#113;G/&#54;&#100;☎,'F&#37;;s&#9896;iAE!Ruo&#80;K♿S}_☬V&#40;-c^\&#123;QCD~&#9980;m⛰lx`[a40&#46;Ukb&#90;W⚈#&#42;)&#76;wM:&#124;r⛍]2&#121;@☪n&amp;5Y&#57;&#9834;&#84;&#32;j&#49;f7$3="></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea name="search" style="display:none">b&#9781;#Y{7`9&#74;&#9908;&#64;V&#94;6_-</textarea>
			
			
				
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
		<div class="thread" id="thread_1750" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567806207667.png">1567806207667.png</a> <span class="unimportant">(715.46 KB, 1280x720, <span class="postfilename" title="[Kirion] Higurashi no Naku Koro ni - 03 (BD 720p x264 AAC).mp4_snapshot_13.22_[2018.04.17_23.47.59].png">[Kirion] Higurashi no Naku….png</span>)</span></p><a href="/agg/src/1567806207667.png" target="_blank"><img class="post-image" src="/agg/thumb/1567806207667.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1750" ><p class="intro"><input type="checkbox" class="delete" name="delete_1750" id="delete_1750" /><label for="delete_1750"><span class="name">Anonymous</span> <time datetime="2019-09-06T21:45:03Z">09/06/19 (Fri) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1750" onclick="return highlightReply(1750, event)" href="/agg/res/1750#1750">No.</a><a class="post_no" onclick="return citeReply(1750)" href="/agg/res/1750#q1750">1750</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1750">[Reply]</a></p><div class="body">Remember to drink lots of water, eat healthy, and occasionally exercise!<br/><a href=https://kissu.moe/qa/res/7694.html>https://kissu.moe/qa/res/7694.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1749" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567802170933.jpeg">1567802170933.jpeg</a> <span class="unimportant">(881.21 KB, 1024x1047, <span class="postfilename" title="949869__safe_twilight+sparkle_rainbow+dash_pinkie+pie_fluttershy_rarity_applejack_princess+twilight_spike_mane+six(1).jpeg">949869__safe_twilight+spa….jpeg</span>)</span></p><a href="/agg/src/1567802170933.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567802170933.png" style="width:249px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1749" ><p class="intro"><input type="checkbox" class="delete" name="delete_1749" id="delete_1749" /><label for="delete_1749"><span class="name">Anonymous</span> <time datetime="2019-09-06T20:40:03Z">09/06/19 (Fri) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1749" onclick="return highlightReply(1749, event)" href="/agg/res/1749#1749">No.</a><a class="post_no" onclick="return citeReply(1749)" href="/agg/res/1749#q1749">1749</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1749">[Reply]</a></p><div class="body">Who is your favorite pony?<br/><a href=https://kissu.moe/qa/res/7674.html>https://kissu.moe/qa/res/7674.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1748" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567797189206.jpg">1567797189206.jpg</a> <span class="unimportant">(46.62 KB, 750x702, <span class="postfilename">wxonzduk3xk31.jpg</span>)</span></p><a href="/agg/src/1567797189206.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567797189206.png" style="width:255px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_1748" ><p class="intro"><input type="checkbox" class="delete" name="delete_1748" id="delete_1748" /><label for="delete_1748"><span class="name">Kisume</span> <time datetime="2019-09-06T19:15:02Z">09/06/19 (Fri) 19:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1748" onclick="return highlightReply(1748, event)" href="/agg/res/1748#1748">No.</a><a class="post_no" onclick="return citeReply(1748)" href="/agg/res/1748#q1748">1748</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1748">[Reply]</a></p><div class="body">Someone post this image here <a href="http://boards.4channel.org/int/thread/110911916" rel="nofollow" target="_blank">http://boards.4channel.org/int/thread/110911916</a> please I&#39;m rangebanned from posting images<br/><a href=https://kakashi-nenpo.com/jp/res/33007.html>https://kakashi-nenpo.com/jp/res/33007.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1747" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567785041306.jpg">1567785041306.jpg</a> <span class="unimportant">(167.28 KB, 600x800, <span class="postfilename">956916_p0.jpg</span>)</span></p><a href="/agg/src/1567785041306.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567785041306.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1747" ><p class="intro"><input type="checkbox" class="delete" name="delete_1747" id="delete_1747" /><label for="delete_1747"><span class="name">Anonymous</span> <time datetime="2019-09-06T15:55:03Z">09/06/19 (Fri) 15:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1747" onclick="return highlightReply(1747, event)" href="/agg/res/1747#1747">No.</a><a class="post_no" onclick="return citeReply(1747)" href="/agg/res/1747#q1747">1747</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1747">[Reply]</a></p><div class="body">Do you enjoy a bit of silence every now and then?<br/><a href=https://kissu.moe/qa/res/7667.html>https://kissu.moe/qa/res/7667.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1746" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567748637567.jpeg">1567748637567.jpeg</a> <span class="unimportant">(91.42 KB, 637x981, <span class="postfilename" title="CE4778AD-AB4E-423E-ACFA-D3380D792364.jpeg">CE4778AD-AB4E-423E-ACFA-D….jpeg</span>)</span></p><a href="/agg/src/1567748637567.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567748637567.png" style="width:166px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1746" ><p class="intro"><input type="checkbox" class="delete" name="delete_1746" id="delete_1746" /><label for="delete_1746"><span class="name">jevin</span> <time datetime="2019-09-06T05:45:04Z">09/06/19 (Fri) 05:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1746" onclick="return highlightReply(1746, event)" href="/agg/res/1746#1746">No.</a><a class="post_no" onclick="return citeReply(1746)" href="/agg/res/1746#q1746">1746</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1746">[Reply]</a></p><div class="body">twinny trees<br/>&#127769;&#127794;&#127748;&#127794;&#128171;<br/><a href=https://kissu.moe/qa/res/7634.html>https://kissu.moe/qa/res/7634.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1745" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567743211704.png">1567743211704.png</a> <span class="unimportant">(346.72 KB, 1200x850, <span class="postfilename">31321288_p0.png</span>)</span></p><a href="/agg/src/1567743211704.png" target="_blank"><img class="post-image" src="/agg/thumb/1567743211704.png" style="width:255px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_1745" ><p class="intro"><input type="checkbox" class="delete" name="delete_1745" id="delete_1745" /><label for="delete_1745"><span class="name">Anonymous</span> <time datetime="2019-09-06T04:15:03Z">09/06/19 (Fri) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1745" onclick="return highlightReply(1745, event)" href="/agg/res/1745#1745">No.</a><a class="post_no" onclick="return citeReply(1745)" href="/agg/res/1745#q1745">1745</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1745">[Reply]</a></p><div class="body">my eyes burn I can’t keep them open good night /qa/<br/><a href=https://kissu.moe/qa/res/7615.html>https://kissu.moe/qa/res/7615.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1744" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567743082709.png">1567743082709.png</a> <span class="unimportant">(81.51 KB, 1000x738, <span class="postfilename" title="__yakumo_yukari_touhou_drawn_by_ramburon__21a366c9b9d8f3ea2ff76fec0c50f85c.png">__yakumo_yukari_touhou_dra….png</span>)</span></p><a href="/agg/src/1567743082709.png" target="_blank"><img class="post-image" src="/agg/thumb/1567743082709.png" style="width:255px;height:188px" alt="" /></a></div>    </div>    <div class="post op" id="op_1744" ><p class="intro"><input type="checkbox" class="delete" name="delete_1744" id="delete_1744" /><label for="delete_1744"><span class="name">Anonymous</span> <time datetime="2019-09-06T04:15:03Z">09/06/19 (Fri) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1744" onclick="return highlightReply(1744, event)" href="/agg/res/1744#1744">No.</a><a class="post_no" onclick="return citeReply(1744)" href="/agg/res/1744#q1744">1744</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1744">[Reply]</a></p><div class="body">Any movies you watched lately? I watched it, but it wasn&#39;t that great.<br/><a href=https://kissu.moe/qa/res/7613.html>https://kissu.moe/qa/res/7613.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1743" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567738994925.jpg">1567738994925.jpg</a> <span class="unimportant">(188.8 KB, 552x900, <span class="postfilename" title="0a1dacc7026a79d1cf2192857fa43ebc.jpg">0a1dacc7026a79d1cf2192857f….jpg</span>)</span></p><a href="/agg/src/1567738994925.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567738994925.png" style="width:156px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1743" ><p class="intro"><input type="checkbox" class="delete" name="delete_1743" id="delete_1743" /><label for="delete_1743"><span class="name">Anonymous</span> <time datetime="2019-09-06T03:05:02Z">09/06/19 (Fri) 03:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1743" onclick="return highlightReply(1743, event)" href="/agg/res/1743#1743">No.</a><a class="post_no" onclick="return citeReply(1743)" href="/agg/res/1743#q1743">1743</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1743">[Reply]</a></p><div class="body">So I have an idea on how to deal with imageboards with bad moderation that I&#39;ve been stewing on a bit. The problem to solve is that you have two or more people wanting to talk to each other, but a mod on the board is stopping at least one of them from posting. So he needs to join the conversation another way. The traditional solution would be ghostposting. This, of course, depends on everyone else knowing about it, but that can be overcome.<br/><br/>Some of the problems with ghostposting are:<br/>(1) ghostposting isn&#39;t the archive&#39;s main goal so if the archive runs into problems with spammers, rather than trying to moderate, they&#39;ll often do things like impose crippling captchas or shut off ghostposting entirely<br/>(2) ghostposting by itself doesn&#39;t do anything to move people off a badly moderated board<br/><br/>So the idea is this: if there&#39;s a thread on one imageboard, and someone makes a thread on another imageboard linking to it, by some method alert the participants in the the first thread of the second, without anyone having to go post in the first thread, which we&#39;ll presume is crawling with obsessed hotpockets. Something like this could perhaps be implemented in 4chan X.<br/><br/>There are some design issues to think about.<br/><br/>For example, what form should such an alert take in the UI? Would it be sufficient to alert people who have the thread open, or should there be consideration of people who have the thread in their thread watcher? Would it be a good idea to add the second thread automatically to the watcher if somebody is watching the first, or should there be a different sort of alert with a choice of whether to add the second thread?<br/><br/>And how do we convey the information on a technical level? I can think of two ways of doing this, one having a list of board pairs, and whenever you&#39;re watching / opening a thread on the first board, your browser scans the second board for mentions of that thread. Another way would be to have a service that periodically scans imageboards for cross-site links and everyone&#39;s browser periodically downloads the list and uses it to check if the threads they&#39;re watching / opening are linked somewhere else. I can see problems with either approach; maybe you can think of something better. In any case, it ought to be possible for a user to subscribe to whatever servers or lists they choose.<br/><br/>Another thing to think about is whether this should be opt-in for t<span class="toolong">Post too long. Click <a href="/agg/res/1743#1743">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1742" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567736072527.png">1567736072527.png</a> <span class="unimportant">(454.22 KB, 715x1000, <span class="postfilename">1563494348630.png</span>)</span></p><a href="/agg/src/1567736072527.png" target="_blank"><img class="post-image" src="/agg/thumb/1567736072527.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1742" ><p class="intro"><input type="checkbox" class="delete" name="delete_1742" id="delete_1742" /><label for="delete_1742"><span class="name">Anonymous</span> <time datetime="2019-09-06T02:15:02Z">09/06/19 (Fri) 02:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1742" onclick="return highlightReply(1742, event)" href="/agg/res/1742#1742">No.</a><a class="post_no" onclick="return citeReply(1742)" href="/agg/res/1742#q1742">1742</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1742">[Reply]</a></p><div class="body">BrraaaAAAaaaaAAaaAAAAAaAApppPPpppp<br/><a href=https://kissu.moe/qa/res/7591.html>https://kissu.moe/qa/res/7591.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1741" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567733724821.jpg">1567733724821.jpg</a> <span class="unimportant">(1.24 MB, 1918x1928, <span class="postfilename" title="494f4f58b094b50ee4f47d2931c63b588b906646a9eef682087cd61cad557099.jpg">494f4f58b094b50ee4f47d2931….jpg</span>)</span></p><a href="/agg/src/1567733724821.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567733724821.png" style="width:254px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1741" ><p class="intro"><input type="checkbox" class="delete" name="delete_1741" id="delete_1741" /><label for="delete_1741"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-06T01:40:03Z">09/06/19 (Fri) 01:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1741" onclick="return highlightReply(1741, event)" href="/agg/res/1741#1741">No.</a><a class="post_no" onclick="return citeReply(1741)" href="/agg/res/1741#q1741">1741</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1741">[Reply]</a></p><div class="body">I LOVE AYAKA!!!!<br/><a href=https://kissu.moe/qa/res/7582.html>https://kissu.moe/qa/res/7582.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1740" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567731080263.jpg">1567731080263.jpg</a> <span class="unimportant">(1.98 MB, 1170x1471, <span class="postfilename" title="3c9202ef72af1538130471412818f9f0.jpg">3c9202ef72af15381304714128….jpg</span>)</span></p><a href="/agg/src/1567731080263.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567731080263.png" style="width:203px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1740" ><p class="intro"><input type="checkbox" class="delete" name="delete_1740" id="delete_1740" /><label for="delete_1740"><span class="name">Anonymous</span> <time datetime="2019-09-06T00:55:02Z">09/06/19 (Fri) 00:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1740" onclick="return highlightReply(1740, event)" href="/agg/res/1740#1740">No.</a><a class="post_no" onclick="return citeReply(1740)" href="/agg/res/1740#q1740">1740</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1740">[Reply]</a></p><div class="body">The Youjo Senki Movie Blurays are out! <br/>Time to watch it!<br/><a href=https://kissu.moe/qa/res/7575.html>https://kissu.moe/qa/res/7575.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1739" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567723490830.jpg">1567723490830.jpg</a> <span class="unimportant">(393.64 KB, 850x609, <span class="postfilename" title="6d56c4b595c2b4c144b07d46ec98e2ff.jpg">6d56c4b595c2b4c144b07d46ec….jpg</span>)</span></p><a href="/agg/src/1567723490830.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567723490830.png" style="width:255px;height:183px" alt="" /></a></div>    </div>    <div class="post op" id="op_1739" ><p class="intro"><input type="checkbox" class="delete" name="delete_1739" id="delete_1739" /><label for="delete_1739"><span class="name">Anonymous</span> <time datetime="2019-09-05T22:45:03Z">09/05/19 (Thu) 22:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1739" onclick="return highlightReply(1739, event)" href="/agg/res/1739#1739">No.</a><a class="post_no" onclick="return citeReply(1739)" href="/agg/res/1739#q1739">1739</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1739">[Reply]</a></p><div class="body">I wonder what imageboards will look like in five years, or even just one. Will there be more of them? Less?<br/>It&#39;s probably only a matter of time until 4chan has some severe legal issues that will close it down, but I wonder how it would happen in regards to other imageboards. I think most people would just return to solely using social media, but maybe about 5-10% of the posters, the older ones still habitually visiting, would scan out alternatives.<br/>I&#39;ve been watching the 8gag stuff pretty closely and it&#39;s an interesting view of how things might pan out if 4chan goes down. Some of the bunkers, even small ones, are saying to not link it anywhere, while others are trying to get the message out of their existence. <br/>Personally, I think they should be trying to get as many of their old users back as possible, but I can also understand the paranoia of outsiders.<br/><br/>What say you, /qa/?<br/><a href=https://kissu.moe/qa/res/7545.html>https://kissu.moe/qa/res/7545.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1738" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567718232618.jpg">1567718232618.jpg</a> <span class="unimportant">(283.77 KB, 650x675, <span class="postfilename">1528207051833.jpg</span>)</span></p><a href="/agg/src/1567718232618.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567718232618.png" style="width:245px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1738" ><p class="intro"><input type="checkbox" class="delete" name="delete_1738" id="delete_1738" /><label for="delete_1738"><span class="name">Anonymous</span> <time datetime="2019-09-05T21:20:03Z">09/05/19 (Thu) 21:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1738" onclick="return highlightReply(1738, event)" href="/agg/res/1738#1738">No.</a><a class="post_no" onclick="return citeReply(1738)" href="/agg/res/1738#q1738">1738</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1738">[Reply]</a></p><div class="body">There&#39;s a new <span class="glowblue">sticky</span> ( <a href="/b/res/1550.php#1550">&gt;&gt;&gt;/b/1550</a> ) if you wish to nominate tags to be added to the Captchouli CAPTCHA!<br/>Stickies on /qa/ are kind of annoying so I won&#39;t do it with this one<br/><a href=https://kissu.moe/qa/res/7539.html>https://kissu.moe/qa/res/7539.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1737" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567714733476.png">1567714733476.png</a> <span class="unimportant">(1.02 MB, 884x728, <span class="postfilename">52972140_p0.png</span>)</span></p><a href="/agg/src/1567714733476.png" target="_blank"><img class="post-image" src="/agg/thumb/1567714733476.png" style="width:255px;height:210px" alt="" /></a></div>    </div>    <div class="post op" id="op_1737" ><p class="intro"><input type="checkbox" class="delete" name="delete_1737" id="delete_1737" /><label for="delete_1737"><span class="name">Anonymous</span> <time datetime="2019-09-05T20:20:03Z">09/05/19 (Thu) 20:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1737" onclick="return highlightReply(1737, event)" href="/agg/res/1737#1737">No.</a><a class="post_no" onclick="return citeReply(1737)" href="/agg/res/1737#q1737">1737</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1737">[Reply]</a></p><div class="body">Do you read the news and stuff? I just like reading about science and nature things, like new discoveries or theories.<br/><a href=https://kissu.moe/qa/res/7531.html>https://kissu.moe/qa/res/7531.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1736" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567706358966.png">1567706358966.png</a> <span class="unimportant">(912.1 KB, 1070x1500, <span class="postfilename">63482876_p0.png</span>)</span></p><a href="/agg/src/1567706358966.png" target="_blank"><img class="post-image" src="/agg/thumb/1567706358966.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1736" ><p class="intro"><input type="checkbox" class="delete" name="delete_1736" id="delete_1736" /><label for="delete_1736"><span class="name">Anonymous</span> <time datetime="2019-09-05T18:00:03Z">09/05/19 (Thu) 18:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1736" onclick="return highlightReply(1736, event)" href="/agg/res/1736#1736">No.</a><a class="post_no" onclick="return citeReply(1736)" href="/agg/res/1736#q1736">1736</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1736">[Reply]</a></p><div class="body">Why do series like Eromanga-sensei include girls aside from the main one?<br/><a href=https://kissu.moe/qa/res/7525.html>https://kissu.moe/qa/res/7525.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1735" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567688074804.png">1567688074804.png</a> <span class="unimportant">(547.55 KB, 514x633, <span class="postfilename">1477589433428.png</span>)</span></p><a href="/agg/src/1567688074804.png" target="_blank"><img class="post-image" src="/agg/thumb/1567688074804.png" style="width:207px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1735" ><p class="intro"><input type="checkbox" class="delete" name="delete_1735" id="delete_1735" /><label for="delete_1735"><span class="subject">The internet is for arguing</span> <span class="name">Anonymous</span> <time datetime="2019-09-05T12:55:03Z">09/05/19 (Thu) 12:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1735" onclick="return highlightReply(1735, event)" href="/agg/res/1735#1735">No.</a><a class="post_no" onclick="return citeReply(1735)" href="/agg/res/1735#q1735">1735</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1735">[Reply]</a></p><div class="body">When was the last time you won an internet argument? I just won one by having the last word, pointing out his contradictions and then the thread archived! That means, I won, right?<br/><a href=https://kissu.moe/qa/res/7515.html>https://kissu.moe/qa/res/7515.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1734" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567659118263.jpg">1567659118263.jpg</a> <span class="unimportant">(68.46 KB, 750x600, <span class="postfilename">NO.jpg</span>)</span></p><a href="/agg/src/1567659118263.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567659118263.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_1734" ><p class="intro"><input type="checkbox" class="delete" name="delete_1734" id="delete_1734" /><label for="delete_1734"><span class="subject">NO</span> <a class="email" href="mailto:NO"><span class="name">NO</span></a> <time datetime="2019-09-05T04:55:03Z">09/05/19 (Thu) 04:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1734" onclick="return highlightReply(1734, event)" href="/agg/res/1734#1734">No.</a><a class="post_no" onclick="return citeReply(1734)" href="/agg/res/1734#q1734">1734</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1734">[Reply]</a></p><div class="body">NO<br/><a href=https://kissu.moe/qa/res/7498.html>https://kissu.moe/qa/res/7498.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1733" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567656231549.png">1567656231549.png</a> <span class="unimportant">(60.35 KB, 320x360, <span class="postfilename">mado.png</span>)</span></p><a href="/agg/src/1567656231549.png" target="_blank"><img class="post-image" src="/agg/thumb/1567656231549.png" style="width:214px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1733" ><p class="intro"><input type="checkbox" class="delete" name="delete_1733" id="delete_1733" /><label for="delete_1733"><span class="name">Anonymous</span> <time datetime="2019-09-05T04:05:03Z">09/05/19 (Thu) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1733" onclick="return highlightReply(1733, event)" href="/agg/res/1733#1733">No.</a><a class="post_no" onclick="return citeReply(1733)" href="/agg/res/1733#q1733">1733</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1733">[Reply]</a></p><div class="body">im sorry im so terrible <br/>i really am but im just a stupid fucking retard <br/>i really miss noun i miss him so much and mira i fucked everything up holy shit why am i such a stupid fucking retarded fuck wad fuck fuck fuck fuckign kill me i loved her so much i loved him so much idk<br/><a href=http://what-ch.mooo.com/what/res/2420.html>http://what-ch.mooo.com/what/res/2420.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1732" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567649141333.jpg">1567649141333.jpg</a> <span class="unimportant">(368.39 KB, 1812x1019, <span class="postfilename">trap sex.jpg</span>)</span></p><a href="/agg/src/1567649141333.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567649141333.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1732" ><p class="intro"><input type="checkbox" class="delete" name="delete_1732" id="delete_1732" /><label for="delete_1732"><span class="name">Anonymous</span> <time datetime="2019-09-05T02:10:03Z">09/05/19 (Thu) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1732" onclick="return highlightReply(1732, event)" href="/agg/res/1732#1732">No.</a><a class="post_no" onclick="return citeReply(1732)" href="/agg/res/1732#q1732">1732</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1732">[Reply]</a></p><div class="body">is this really true?<br/><a href=https://kissu.moe/qa/res/7490.html>https://kissu.moe/qa/res/7490.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1731" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567648282337.jpg">1567648282337.jpg</a> <span class="unimportant">(614.57 KB, 774x1083, <span class="postfilename" title="1f8f04bf58e18b1a766e2703af7b54a2.jpg">1f8f04bf58e18b1a766e2703af….jpg</span>)</span></p><a href="/agg/src/1567648282337.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567648282337.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1731" ><p class="intro"><input type="checkbox" class="delete" name="delete_1731" id="delete_1731" /><label for="delete_1731"><span class="name">Anonymous</span> <time datetime="2019-09-05T01:55:04Z">09/05/19 (Thu) 01:55:04</time></label>&nbsp;<a class="post_no" id="post_no_1731" onclick="return highlightReply(1731, event)" href="/agg/res/1731#1731">No.</a><a class="post_no" onclick="return citeReply(1731)" href="/agg/res/1731#q1731">1731</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1731">[Reply]</a></p><div class="body">Fluffy tails, dragon wings, and clawed hands are good and all but you know what I really like? Tentacles. Just imagine getting wrapped up in a big tight hug by two arms and eight tentacles. Soft whispers of love while her heartbeat can be felt against your chest, breasts pressing into you. Imagine getting kissed by many suction cups at once as well as a set of soft moist lips. Imagine her hypnotic ability to multitask because of her extra limbs, making her a great housewife, maid, employee, senpai, teacher, mom, anything! Envision her taking you further into the ocean to see the beauty of shallow water reefs, guiding you through a whole new world you may not have seen with your own eyes.<br/>Dream of soft tentacle lap pillows while being patted, suction cups kissing you repeatedly, a gentle hand cleaning your ears while the other one keeps you steady.<br/>Think of her possibly even being your childhood friend, she&#39;s a master at hide-and-seek. She can be anywhere, anytime, and she can hug you in over 700 different ways, and that&#39;s just with her bare hands.<br/>How great of a tutor she can be. Her intellect working wonders to help you with any school work you may struggle with. Her ability to creatively think of new solutions to old or new problems.<br/>Imagine all this and more. So much more any tentacled maiden of the sea can do. That, friends, is what I find most beautiful.<br/><a href=https://kissu.moe/qa/res/7486.html>https://kissu.moe/qa/res/7486.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/20" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a class="selected">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/22" method="get"><input type="submit" value="Next" /></form>
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