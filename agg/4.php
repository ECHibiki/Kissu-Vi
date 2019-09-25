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
			<img class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span   style="display:none"><input   type="text"   name="text"   value="qmsSY[vpLH2P\1y@b,k_"></span>
<div style="display:none" ><input type="text" name="firstname" value="&#102;#⚈/ ♬3}&#123;QDt&#55;&#92;+&#100;5&#58;Y@⚒BvVT-&#115;e&#112;Z&#36;~]&#73;U;&#83;^n&#104;X!9K[)mu&lt;N&#40;&#87;&#56;&#9819;&gt;&#120;&#114;o&#50;" ></div >
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/&#91;LH Ji:`&#33;&#59;C+6\&#111;T&lt;8&#79;&#98;&#73;|?X]d&#46;&#50;&#9768;{tW&#53;&#32;c⚱&#49;B=k@9(&#51;&#78;g☮*}&#52;'PQ-MV&#9903;0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none" ><input type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" ></div >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input   style="display:none"   type="text"   name="q"   value=" &#102;♻&#9965;♃&#57;/&#113;&#122;wZk&#46;&#64;h|;$LF⛡mdv,ER&#56;3W%1&#89;I&#77;^&#105;&#85;&#9740;5☍+Ag&#9770;T=`}⚑yc7J⛮P&#35;&#98;?&#9892;6X&amp;&#123;Dx&#32;&#92;4N&#112;KH&#110;:)">
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"  ><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;q&#71;/6d☎,'F%;s⚨iAE!RuoPK♿S&#125;_☬&#86;&#40;-c&#94;&#92;&#123;QCD~⛼m⛰lx`[a40.Ukb&#90;&#87;⚈#*)Lw&#77;:|r⛍]2&#121;@&#9770;n&amp;5&#89;9♪T j1f&#55;$3="  ></div  >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input  value="b☵#Y{7`9J⚴@V^6_-"  name="search"  type="hidden">
			
			
				
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
		<div class="thread" id="thread_2090" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569281201123.jpg">1569281201123.jpg</a> <span class="unimportant">(90.8 KB, 1280x960, <span class="postfilename">1453614245460.jpg</span>)</span></p><a href="/agg/src/1569281201123.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569281201123.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2090" ><p class="intro"><input type="checkbox" class="delete" name="delete_2090" id="delete_2090" /><label for="delete_2090"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T23:30:05Z">09/23/19 (Mon) 23:30:05</time></label>&nbsp;<a class="post_no" id="post_no_2090" onclick="return highlightReply(2090, event)" href="/agg/res/2090#2090">No.</a><a class="post_no" onclick="return citeReply(2090)" href="/agg/res/2090#q2090">2090</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2090">[Reply]</a></p><div class="body">my soul was harvested by evil when i was a child<br/><a href=https://gnfos.com/jp/res/369472.html>https://gnfos.com/jp/res/369472.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2089" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569276742151.png">1569276742151.png</a> <span class="unimportant">(730.47 KB, 715x1000, <span class="postfilename" title="adca2e97319ba5545a8c115ded9e90e3eeaec6555c0846da887c94139524fc0f.png">adca2e97319ba5545a8c115ded….png</span>)</span></p><a href="/agg/src/1569276742151.png" target="_blank"><img class="post-image" src="/agg/thumb/1569276742151.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2089" ><p class="intro"><input type="checkbox" class="delete" name="delete_2089" id="delete_2089" /><label for="delete_2089"><span class="name">Anonymous</span> <time datetime="2019-09-23T22:15:03Z">09/23/19 (Mon) 22:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2089" onclick="return highlightReply(2089, event)" href="/agg/res/2089#2089">No.</a><a class="post_no" onclick="return citeReply(2089)" href="/agg/res/2089#q2089">2089</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2089">[Reply]</a></p><div class="body">we made it, /qa/!<br/>summer is gone and fall is finally here!<br/>winter is only three months away!<br/><a href=https://kissu.moe/qa/res/10325.html>https://kissu.moe/qa/res/10325.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2088" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569275686668.png">1569275686668.png</a> <span class="unimportant">(144.83 KB, 2100x1500, <span class="postfilename">qamblr.png</span>)</span></p><a href="/agg/src/1569275686668.png" target="_blank"><img class="post-image" src="/agg/thumb/1569275686668.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_2088" ><p class="intro"><input type="checkbox" class="delete" name="delete_2088" id="delete_2088" /><label for="delete_2088"><span class="name">Anonymous</span> <time datetime="2019-09-23T21:55:04Z">09/23/19 (Mon) 21:55:04</time></label>&nbsp;<a class="post_no" id="post_no_2088" onclick="return highlightReply(2088, event)" href="/agg/res/2088#2088">No.</a><a class="post_no" onclick="return citeReply(2088)" href="/agg/res/2088#q2088">2088</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2088">[Reply]</a></p><div class="body">oh!!<br/><a href=https://kissu.moe/qa/res/10315.html>https://kissu.moe/qa/res/10315.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2087" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569275655659.png">1569275655659.png</a> <span class="unimportant">(144.83 KB, 2100x1500, <span class="postfilename">qamblr.png</span>)</span></p><a href="/agg/src/1569275655659.png" target="_blank"><img class="post-image" src="/agg/thumb/1569275655659.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_2087" ><p class="intro"><input type="checkbox" class="delete" name="delete_2087" id="delete_2087" /><label for="delete_2087"><span class="name">Anonymous</span> <time datetime="2019-09-23T21:55:04Z">09/23/19 (Mon) 21:55:04</time></label>&nbsp;<a class="post_no" id="post_no_2087" onclick="return highlightReply(2087, event)" href="/agg/res/2087#2087">No.</a><a class="post_no" onclick="return citeReply(2087)" href="/agg/res/2087#q2087">2087</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2087">[Reply]</a></p><div class="body">/q/mblr...?<br/><a href=https://kissu.moe/qa/res/10313.html>https://kissu.moe/qa/res/10313.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2086" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569274197359.png">1569274197359.png</a> <span class="unimportant">(1003.92 KB, 1006x1189, <span class="postfilename" title="Greta_Thunberg_au_parlement_europ%C3%A9en_%2833744056508%29%2C_recadr%C3%A9.png">Greta_Thunberg_au_parlemen….png</span>)</span></p><a href="/agg/src/1569274197359.png" target="_blank"><img class="post-image" src="/agg/thumb/1569274197359.png" style="width:216px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2086" ><p class="intro"><input type="checkbox" class="delete" name="delete_2086" id="delete_2086" /><label for="delete_2086"><span class="name">Anonymous</span> <time datetime="2019-09-23T21:30:04Z">09/23/19 (Mon) 21:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2086" onclick="return highlightReply(2086, event)" href="/agg/res/2086#2086">No.</a><a class="post_no" onclick="return citeReply(2086)" href="/agg/res/2086#q2086">2086</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2086">[Reply]</a></p><div class="body">politics / activism thread. this thread is for any and all instances of twitter politics, leftypol, pol, outrage politics, 8gag, teen activism, concernbro activism, spinoff teens, teenbro or activsim teen politics. post away. no restrictions&ndash; post away. pic related: an activist teen<br/><a href=https://kissu.moe/qa/res/10311.html>https://kissu.moe/qa/res/10311.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2085" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569273941237.jpg">1569273941237.jpg</a> <span class="unimportant">(58.99 KB, 675x959, <span class="postfilename">FB_IMG_1569273556870.jpg</span>)</span></p><a href="/agg/src/1569273941237.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569273941237.png" style="width:169px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2085" ><p class="intro"><input type="checkbox" class="delete" name="delete_2085" id="delete_2085" /><label for="delete_2085"><span class="name">Anonymous</span> <time datetime="2019-09-23T21:30:03Z">09/23/19 (Mon) 21:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2085" onclick="return highlightReply(2085, event)" href="/agg/res/2085#2085">No.</a><a class="post_no" onclick="return citeReply(2085)" href="/agg/res/2085#q2085">2085</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2085">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2673.html>http://what-ch.mooo.com/what/res/2673.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2084" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569273733113.png">1569273733113.png</a> <span class="unimportant">(510 KB, 640x360, <span class="postfilename">454532.png</span>)</span></p><a href="/agg/src/1569273733113.png" target="_blank"><img class="post-image" src="/agg/thumb/1569273733113.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2084" ><p class="intro"><input type="checkbox" class="delete" name="delete_2084" id="delete_2084" /><label for="delete_2084"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T21:25:03Z">09/23/19 (Mon) 21:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2084" onclick="return highlightReply(2084, event)" href="/agg/res/2084#2084">No.</a><a class="post_no" onclick="return citeReply(2084)" href="/agg/res/2084#q2084">2084</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2084">[Reply]</a></p><div class="body">The Scorpion and the Frog is an animal fable about a scorpion asking a frog to carry him across a river. The frog is afraid of being stung during the trip, but the scorpion argues that if it stung the frog, the frog would sink and the scorpion would drown. The frog agrees and begins carrying the scorpion, but midway across the river the scorpion does indeed sting the frog, dooming them both. When asked why, the scorpion points out that this is its nature..<br/><a href=https://gnfos.com/jp/res/369467.html>https://gnfos.com/jp/res/369467.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2083" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569268687473.png">1569268687473.png</a> <span class="unimportant">(144.83 KB, 2100x1500, <span class="postfilename">1569082320845.png</span>)</span></p><a href="/agg/src/1569268687473.png" target="_blank"><img class="post-image" src="/agg/thumb/1569268687473.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_2083" ><p class="intro"><input type="checkbox" class="delete" name="delete_2083" id="delete_2083" /><label for="delete_2083"><span class="name">Anonymous</span> <time datetime="2019-09-23T20:00:05Z">09/23/19 (Mon) 20:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2083" onclick="return highlightReply(2083, event)" href="/agg/res/2083#2083">No.</a><a class="post_no" onclick="return citeReply(2083)" href="/agg/res/2083#q2083">2083</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2083">[Reply]</a></p><div class="body">well...?<br/><a href=https://kissu.moe/qa/res/10291.html>https://kissu.moe/qa/res/10291.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2082" data-board="agg"><div class="video-container" data-video="3ymwOvzhwHs"><a href="https://youtu.be/3ymwOvzhwHs" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/3ymwOvzhwHs/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2082" ><p class="intro"><input type="checkbox" class="delete" name="delete_2082" id="delete_2082" /><label for="delete_2082"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-23T19:45:03Z">09/23/19 (Mon) 19:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2082" onclick="return highlightReply(2082, event)" href="/agg/res/2082#2082">No.</a><a class="post_no" onclick="return citeReply(2082)" href="/agg/res/2082#q2082">2082</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2082">[Reply]</a></p><div class="body">It keeps fucking happening this not a coincidence<br/><a href=https://gnfos.com/jp/res/369466.html>https://gnfos.com/jp/res/369466.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2081" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569267617257.png">1569267617257.png</a> <span class="unimportant">(2.09 MB, 1800x2545, <span class="postfilename" title="__kochiya_sanae_touhou_drawn_by_himegi__28c3d06c571b2ef8e0268fb3dccc3402.png">__kochiya_sanae_touhou_dra….png</span>)</span></p><a href="/agg/src/1569267617257.png" target="_blank"><img class="post-image" src="/agg/thumb/1569267617257.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2081" ><p class="intro"><input type="checkbox" class="delete" name="delete_2081" id="delete_2081" /><label for="delete_2081"><span class="name">Anonymous</span> <time datetime="2019-09-23T19:45:03Z">09/23/19 (Mon) 19:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2081" onclick="return highlightReply(2081, event)" href="/agg/res/2081#2081">No.</a><a class="post_no" onclick="return citeReply(2081)" href="/agg/res/2081#q2081">2081</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2081">[Reply]</a></p><div class="body"><span class="heading">EXTREME</span> cooking with Sanae<br/><a href=https://kissu.moe/qa/res/10289.html>https://kissu.moe/qa/res/10289.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2080" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569263143925.jpg">1569263143925.jpg</a> <span class="unimportant">(123.84 KB, 627x776, <span class="postfilename" title="__komori_kiri_sayonara_zetsubou_sensei_drawn_by_ekra__2443e2d8163e4462bad6465ed542bcd6.jpg">__komori_kiri_sayonara_zet….jpg</span>)</span></p><a href="/agg/src/1569263143925.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569263143925.png" style="width:207px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2080" ><p class="intro"><input type="checkbox" class="delete" name="delete_2080" id="delete_2080" /><label for="delete_2080"><span class="name">Anonymous</span> <time datetime="2019-09-23T18:30:03Z">09/23/19 (Mon) 18:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2080" onclick="return highlightReply(2080, event)" href="/agg/res/2080#2080">No.</a><a class="post_no" onclick="return citeReply(2080)" href="/agg/res/2080#q2080">2080</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2080">[Reply]</a></p><div class="body">What happens when someone who&#39;s been desperately dedicating their entire life to ridding a place of something finally gets rid of it? How do they go about their life after having made it entirely revolve around that one goal<br/><a href=https://kissu.moe/qa/res/10287.html>https://kissu.moe/qa/res/10287.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2079" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569262282937.gif">1569262282937.gif</a> <span class="unimportant">(125.16 KB, 500x365, <span class="postfilename" title="D1C83CC1-CB5C-40A8-AC92-A111E58D9C01.gif">D1C83CC1-CB5C-40A8-AC92-A1….gif</span>)</span></p><a href="/agg/src/1569262282937.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569262282937.gif" style="width:329px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2079" ><p class="intro"><input type="checkbox" class="delete" name="delete_2079" id="delete_2079" /><label for="delete_2079"><span class="name">Tada Banri</span> <time datetime="2019-09-23T18:15:03Z">09/23/19 (Mon) 18:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2079" onclick="return highlightReply(2079, event)" href="/agg/res/2079#2079">No.</a><a class="post_no" onclick="return citeReply(2079)" href="/agg/res/2079#q2079">2079</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2079">[Reply]</a></p><div class="body"><span class="quote">&gt;You can’t just follow me into fire!</span><br/><span class="quote"><br/>&gt;Then don’t run into fire!!</span><br/><br/>I can’t stop the tears<br/><a href=https://gnfos.com/jp/res/369463.html>https://gnfos.com/jp/res/369463.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2078" data-board="agg"><div class="video-container" data-video="Xw7Aii1Fyq4"><a href="https://youtu.be/Xw7Aii1Fyq4" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/Xw7Aii1Fyq4/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2078" ><p class="intro"><input type="checkbox" class="delete" name="delete_2078" id="delete_2078" /><label for="delete_2078"><span class="name">Idiot</span> <time datetime="2019-09-23T18:00:05Z">09/23/19 (Mon) 18:00:05</time></label>&nbsp;<a class="post_no" id="post_no_2078" onclick="return highlightReply(2078, event)" href="/agg/res/2078#2078">No.</a><a class="post_no" onclick="return citeReply(2078)" href="/agg/res/2078#q2078">2078</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2078">[Reply]</a></p><div class="body">TODAY IS LITERALLY CHRISTMAS<br/><a href=https://gnfos.com/jp/res/369462.html>https://gnfos.com/jp/res/369462.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2077" data-board="agg"><div class="video-container" data-video="bwzLiQZDw2I"><a href="https://youtu.be/bwzLiQZDw2I" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/bwzLiQZDw2I/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2077" ><p class="intro"><input type="checkbox" class="delete" name="delete_2077" id="delete_2077" /><label for="delete_2077"><span class="name">Idiot</span> <time datetime="2019-09-23T17:55:03Z">09/23/19 (Mon) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2077" onclick="return highlightReply(2077, event)" href="/agg/res/2077#2077">No.</a><a class="post_no" onclick="return citeReply(2077)" href="/agg/res/2077#q2077">2077</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2077">[Reply]</a></p><div class="body">I’M SOBBING UNCONTROLLABLY STICKY THIS TTARD<br/><a href=https://gnfos.com/jp/res/369460.html>https://gnfos.com/jp/res/369460.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2076" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569253653842.jpg">1569253653842.jpg</a> <span class="unimportant">(2.24 MB, 2385x1633, <span class="postfilename" title="Ciconia_ciconia_in_Marrakesh_02.jpg">Ciconia_ciconia_in_Marrake….jpg</span>)</span></p><a href="/agg/src/1569253653842.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569253653842.jpg" style="width:350px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2076" ><p class="intro"><input type="checkbox" class="delete" name="delete_2076" id="delete_2076" /><label for="delete_2076"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-23T15:50:03Z">09/23/19 (Mon) 15:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2076" onclick="return highlightReply(2076, event)" href="/agg/res/2076#2076">No.</a><a class="post_no" onclick="return citeReply(2076)" href="/agg/res/2076#q2076">2076</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2076">[Reply]</a></p><div class="body">have sex<br/><a href=https://gnfos.com/jp/res/369459.html>https://gnfos.com/jp/res/369459.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2075" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569253237817.jpg">1569253237817.jpg</a> <span class="unimportant">(30.27 KB, 540x720, <span class="postfilename">1564074390283.jpg</span>)</span></p><a href="/agg/src/1569253237817.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569253237817.jpg" style="width:180px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_2075" ><p class="intro"><input type="checkbox" class="delete" name="delete_2075" id="delete_2075" /><label for="delete_2075"><span class="name">Idiot</span> <time datetime="2019-09-23T15:45:03Z">09/23/19 (Mon) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2075" onclick="return highlightReply(2075, event)" href="/agg/res/2075#2075">No.</a><a class="post_no" onclick="return citeReply(2075)" href="/agg/res/2075#q2075">2075</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2075">[Reply]</a></p><div class="body">merorin was here, you guys are faggots<br/><a href=https://gnfos.com/jp/res/369458.html>https://gnfos.com/jp/res/369458.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2074" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569245755240.jpg">1569245755240.jpg</a> <span class="unimportant">(225.58 KB, 950x1280, <span class="postfilename" title="cb07157cce2ff3f54332db53a87d1757.jpg">cb07157cce2ff3f54332db53a8….jpg</span>)</span></p><a href="/agg/src/1569245755240.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569245755240.png" style="width:190px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2074" ><p class="intro"><input type="checkbox" class="delete" name="delete_2074" id="delete_2074" /><label for="delete_2074"><span class="name">Anonymous</span> <time datetime="2019-09-23T13:40:03Z">09/23/19 (Mon) 13:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2074" onclick="return highlightReply(2074, event)" href="/agg/res/2074#2074">No.</a><a class="post_no" onclick="return citeReply(2074)" href="/agg/res/2074#q2074">2074</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2074">[Reply]</a></p><div class="body">Do thighhighs serve any practical purpose?<br/><a href=https://kissu.moe/qa/res/10269.html>https://kissu.moe/qa/res/10269.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2073" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569234100052.jpg">1569234100052.jpg</a> <span class="unimportant">(224.95 KB, 1375x750, <span class="postfilename">EFFJz7KU0AAgp5Q.jpg</span>)</span></p><a href="/agg/src/1569234100052.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569234100052.png" style="width:240px;height:131px" alt="" /></a></div>    </div>    <div class="post op" id="op_2073" ><p class="intro"><input type="checkbox" class="delete" name="delete_2073" id="delete_2073" /><label for="delete_2073"><span class="name">Anonymous</span> <time datetime="2019-09-23T10:25:03Z">09/23/19 (Mon) 10:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2073" onclick="return highlightReply(2073, event)" href="/agg/res/2073#2073">No.</a><a class="post_no" onclick="return citeReply(2073)" href="/agg/res/2073#q2073">2073</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2073">[Reply]</a></p><div class="body">Anyone in California donating blood for a free copy of Code Vein?<br/><a href=http://what-ch.mooo.com/what/res/2669.html>http://what-ch.mooo.com/what/res/2669.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2072" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569228520571.png">1569228520571.png</a> <span class="unimportant">(362.43 KB, 1901x949, <span class="postfilename">1569103323807.png</span>)</span></p><a href="/agg/src/1569228520571.png" target="_blank"><img class="post-image" src="/agg/thumb/1569228520571.png" style="width:427px;height:213px" alt="" /></a></div>    </div>    <div class="post op" id="op_2072" ><p class="intro"><input type="checkbox" class="delete" name="delete_2072" id="delete_2072" /><label for="delete_2072"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T08:50:02Z">09/23/19 (Mon) 08:50:02</time></label>&nbsp;<a class="post_no" id="post_no_2072" onclick="return highlightReply(2072, event)" href="/agg/res/2072#2072">No.</a><a class="post_no" onclick="return citeReply(2072)" href="/agg/res/2072#q2072">2072</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2072">[Reply]</a></p><div class="body">Sleek site design. I can&#39;t even see the third thread.<br/><a href=https://gnfos.com/jp/res/369454.html>https://gnfos.com/jp/res/369454.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2071" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569227564383.png">1569227564383.png</a> <span class="unimportant">(78.21 KB, 1919x951, <span class="postfilename">1569103323807.png</span>)</span></p><a href="/agg/src/1569227564383.png" target="_blank"><img class="post-image" src="/agg/thumb/1569227564383.png" style="width:255px;height:126px" alt="" /></a></div>    </div>    <div class="post op" id="op_2071" ><p class="intro"><input type="checkbox" class="delete" name="delete_2071" id="delete_2071" /><label for="delete_2071"><span class="name">Anonymous</span> <time datetime="2019-09-23T08:35:03Z">09/23/19 (Mon) 08:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2071" onclick="return highlightReply(2071, event)" href="/agg/res/2071#2071">No.</a><a class="post_no" onclick="return citeReply(2071)" href="/agg/res/2071#q2071">2071</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2071">[Reply]</a></p><div class="body">Sleek site design. I can&#39;t even see the first thread.<br/><a href=https://kissu.moe/qa/res/10260.html>https://kissu.moe/qa/res/10260.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/3" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a class="selected">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/5" method="get"><input type="submit" value="Next" /></form>
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