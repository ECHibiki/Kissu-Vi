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
<div style="display:none" ><input type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_" ></div >
<span style="display:none"><input type="text" name="firstname" value="f&#35;⚈/ &#9836;&#51;}{&#81;Dt7\+&#100;5:&#89;@&#9874;B&#118;VT&#45;&#115;epZ&#36;~]&#73;&#85;;S^nhX!9K[)m&#117;&lt;&#78;(&#87;8♛&gt;&#120;&#114;o2"></span>
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input   style="display:none"   type="text"   name="q"   value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"   >
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="y0kh38z9do♒sb" >pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=</textarea >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></span>
			
			
				
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
		<div class="thread" id="thread_1890" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568486546263.png">1568486546263.png</a> <span class="unimportant">(2.05 MB, 1100x1555, <span class="postfilename" title="3ea94439febd195731d7a2ffffb4310a.png">3ea94439febd195731d7a2ffff….png</span>)</span></p><a href="/agg/src/1568486546263.png" target="_blank"><img class="post-image" src="/agg/thumb/1568486546263.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1890" ><p class="intro"><input type="checkbox" class="delete" name="delete_1890" id="delete_1890" /><label for="delete_1890"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1890" onclick="return highlightReply(1890, event)" href="/agg/res/1890#1890">No.</a><a class="post_no" onclick="return citeReply(1890)" href="/agg/res/1890#q1890">1890</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1890">[Reply]</a></p><div class="body">for you, /qa/<br/><a href=https://kissu.moe/qa/res/8775.html>https://kissu.moe/qa/res/8775.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1889" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568225424488.gif">1568225424488.gif</a> <span class="unimportant">(2.55 MB, 1152x1152, <span class="postfilename" title="c63cae1344766f14d9d184e5aafed065.gif">c63cae1344766f14d9d184e5aa….gif</span>)</span></p><a href="/agg/src/1568225424488.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568225424488.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1889" ><p class="intro"><input type="checkbox" class="delete" name="delete_1889" id="delete_1889" /><label for="delete_1889"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1889" onclick="return highlightReply(1889, event)" href="/agg/res/1889#1889">No.</a><a class="post_no" onclick="return citeReply(1889)" href="/agg/res/1889#q1889">1889</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1889">[Reply]</a></p><div class="body">Can you play games on imageboards?<br/><a href=https://kissu.moe/qa/res/8318.html>https://kissu.moe/qa/res/8318.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1888" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568782247519.jpeg">1568782247519.jpeg</a> <span class="unimportant">(357.92 KB, 2168x1383, <span class="postfilename" title="99161268-4A6A-46FC-BEBB-0CACA192145C.jpeg">99161268-4A6A-46FC-BEBB-0….jpeg</span>)</span></p><a href="/agg/src/1568782247519.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568782247519.png" style="width:255px;height:163px" alt="" /></a></div>    </div>    <div class="post op" id="op_1888" ><p class="intro"><input type="checkbox" class="delete" name="delete_1888" id="delete_1888" /><label for="delete_1888"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1888" onclick="return highlightReply(1888, event)" href="/agg/res/1888#1888">No.</a><a class="post_no" onclick="return citeReply(1888)" href="/agg/res/1888#q1888">1888</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1888">[Reply]</a></p><div class="body">Nothing new comes from the sun.<br/>All that is new comes from our Lord.<br/>Life is a continuation,<br/>It is our Lord who gives life,<br/>Amen.<br/><a href=https://kissu.moe/qa/res/9417.html>https://kissu.moe/qa/res/9417.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1887" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568421949811.jpg">1568421949811.jpg</a> <span class="unimportant">(342.49 KB, 768x1024, <span class="postfilename">76242922_p0.jpg</span>)</span></p><a href="/agg/src/1568421949811.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568421949811.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1887" ><p class="intro"><input type="checkbox" class="delete" name="delete_1887" id="delete_1887" /><label for="delete_1887"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1887" onclick="return highlightReply(1887, event)" href="/agg/res/1887#1887">No.</a><a class="post_no" onclick="return citeReply(1887)" href="/agg/res/1887#q1887">1887</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1887">[Reply]</a></p><div class="body">Lala&#39;s home planet was so disappointing. I was expected a whole planet of people similar to Lala, but instead she&#39;s a black sheep.<br/>And there weren&#39;t any giant bananas to be seen<br/><a href=https://kissu.moe/qa/res/8653.html>https://kissu.moe/qa/res/8653.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1886" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568386826517.jpg">1568386826517.jpg</a> <span class="unimportant">(771.77 KB, 822x1000, <span class="postfilename" title="__kasane_teto_utau_drawn_by_amane_kurumi__16ec4b740968e9a068b7b50644a3f76a.jpg">__kasane_teto_utau_drawn_b….jpg</span>)</span></p><a href="/agg/src/1568386826517.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568386826517.png" style="width:210px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1886" ><p class="intro"><input type="checkbox" class="delete" name="delete_1886" id="delete_1886" /><label for="delete_1886"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1886" onclick="return highlightReply(1886, event)" href="/agg/res/1886#1886">No.</a><a class="post_no" onclick="return citeReply(1886)" href="/agg/res/1886#q1886">1886</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1886">[Reply]</a></p><div class="body">i freaking love bread<br/><a href=https://kissu.moe/qa/res/8603.html>https://kissu.moe/qa/res/8603.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1885" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568622569104.jpg">1568622569104.jpg</a> <span class="unimportant">(104 KB, 649x900, <span class="postfilename" title="911dce60b7fc92baabd63b6bc193b25d.jpg">911dce60b7fc92baabd63b6bc1….jpg</span>)</span></p><a href="/agg/src/1568622569104.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568622569104.png" style="width:184px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1885" ><p class="intro"><input type="checkbox" class="delete" name="delete_1885" id="delete_1885" /><label for="delete_1885"><span class="subject">what are the best spinoffs for specific boards</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1885" onclick="return highlightReply(1885, event)" href="/agg/res/1885#1885">No.</a><a class="post_no" onclick="return citeReply(1885)" href="/agg/res/1885#q1885">1885</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1885">[Reply]</a></p><div class="body">Like how kissu is (my) best /qa/ spinoff, what are the best spinoffs for other boards, like /jp/, /v/, /a/, etc.<br/><a href=https://kissu.moe/qa/res/9047.html>https://kissu.moe/qa/res/9047.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1884" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568594444973.png">1568594444973.png</a> <span class="unimportant">(13.04 MB, 4985x3520, <span class="postfilename" title="6c27931bcd88942da2c0cef25be42ce9.png">6c27931bcd88942da2c0cef25b….png</span>)</span></p><a href="/agg/src/1568594444973.png" target="_blank"><img class="post-image" src="/agg/thumb/1568594444973.png" style="width:255px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1884" ><p class="intro"><input type="checkbox" class="delete" name="delete_1884" id="delete_1884" /><label for="delete_1884"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1884" onclick="return highlightReply(1884, event)" href="/agg/res/1884#1884">No.</a><a class="post_no" onclick="return citeReply(1884)" href="/agg/res/1884#q1884">1884</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1884">[Reply]</a></p><div class="body">the floor is mirrors<br/><a href=https://kissu.moe/qa/res/9013.html>https://kissu.moe/qa/res/9013.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1883" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568737701209.jpeg">1568737701209.jpeg</a> <span class="unimportant">(176.04 KB, 900x600, <span class="postfilename" title="6b03dfa990702d43bb2e8e2b54d80555.jpeg">6b03dfa990702d43bb2e8e2b5….jpeg</span>)</span></p><a href="/agg/src/1568737701209.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568737701209.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1883" ><p class="intro"><input type="checkbox" class="delete" name="delete_1883" id="delete_1883" /><label for="delete_1883"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1883" onclick="return highlightReply(1883, event)" href="/agg/res/1883#1883">No.</a><a class="post_no" onclick="return citeReply(1883)" href="/agg/res/1883#q1883">1883</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1883">[Reply]</a></p><div class="body">What you guys are referring to as Linux, is in fact, GNU/Linux, or as I&#39;ve recently taken to calling it, GNU plus Linux. Linux is not an operating system unto itself, but rather another free component of a fully functioning GNU system made useful by the GNU corelibs, shell utilities and vital system components comprising a full OS as defined by POSIX.<br/><br/>Many computer users run a modified version of the GNU system every day, without realizing it. Through a peculiar turn of events, the version of GNU which is widely used today is often called "Linux", and many of its users are not aware that it is basically the GNU system, developed by the GNU Project.<br/><br/>There really is a Linux, and these people are using it, but it is just a part of the system they use. Linux is the kernel: the program in the system that allocates the machine&#39;s resources to the other programs that you run. The kernel is an essential part of an operating system, but useless by itself; it can only function in the context of a complete operating system. Linux is normally used in combination with the GNU operating system: the whole system is basically GNU with Linux added, or GNU/Linux. All the so-called "Linux" distributions are really distributions of GNU/Linux.<br/><a href=https://kissu.moe/qa/res/9262.html>https://kissu.moe/qa/res/9262.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1882" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568572592503.png">1568572592503.png</a> <span class="unimportant">(742.06 KB, 1024x1024, <span class="postfilename">fluffy tail.png</span>)</span></p><a href="/agg/src/1568572592503.png" target="_blank"><img class="post-image" src="/agg/thumb/1568572592503.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1882" ><p class="intro"><input type="checkbox" class="delete" name="delete_1882" id="delete_1882" /><label for="delete_1882"><span class="subject">mofuposting</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1882" onclick="return highlightReply(1882, event)" href="/agg/res/1882#1882">No.</a><a class="post_no" onclick="return citeReply(1882)" href="/agg/res/1882#q1882">1882</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1882">[Reply]</a></p><div class="body">alternative: fuwaposting<br/><a href=https://kissu.moe/qa/res/8951.html>https://kissu.moe/qa/res/8951.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1881" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568605559933.jpg">1568605559933.jpg</a> <span class="unimportant">(189.55 KB, 710x478, <span class="postfilename" title="13. Kino no Tabi - the Beautiful World [Hi10p AAC][kuchikirukia].mkv_snapshot_02.25_[2019.09.15_23.45.37].jpg">13. Kino no Tabi - the Bea….jpg</span>)</span></p><a href="/agg/src/1568605559933.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568605559933.png" style="width:255px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_1881" ><p class="intro"><input type="checkbox" class="delete" name="delete_1881" id="delete_1881" /><label for="delete_1881"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1881" onclick="return highlightReply(1881, event)" href="/agg/res/1881#1881">No.</a><a class="post_no" onclick="return citeReply(1881)" href="/agg/res/1881#q1881">1881</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1881">[Reply]</a></p><div class="body">the /qa/ bird<br/><a href=https://kissu.moe/qa/res/9025.html>https://kissu.moe/qa/res/9025.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1880" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568699860324.jpg">1568699860324.jpg</a> <span class="unimportant">(318.04 KB, 850x850, <span class="postfilename" title="d649844cd0f43a869c3eb31c6489d2c1.jpg">d649844cd0f43a869c3eb31c64….jpg</span>)</span></p><a href="/agg/src/1568699860324.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568699860324.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1880" ><p class="intro"><input type="checkbox" class="delete" name="delete_1880" id="delete_1880" /><label for="delete_1880"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1880" onclick="return highlightReply(1880, event)" href="/agg/res/1880#1880">No.</a><a class="post_no" onclick="return citeReply(1880)" href="/agg/res/1880#q1880">1880</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1880">[Reply]</a></p><div class="body">remember to hang christmas lights in your room even if it&#39;s not christmas! it improves the comfy by 100% and then you won&#39;t have to hang them when chrismas time comes.<br/><a href=https://kissu.moe/qa/res/9241.html>https://kissu.moe/qa/res/9241.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1879" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568689141656.png">1568689141656.png</a> <span class="unimportant">(816.09 KB, 1075x1500, <span class="postfilename" title="62b580de9b13374d1a11e690fec672d1.png">62b580de9b13374d1a11e690fe….png</span>)</span></p><a href="/agg/src/1568689141656.png" target="_blank"><img class="post-image" src="/agg/thumb/1568689141656.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1879" ><p class="intro"><input type="checkbox" class="delete" name="delete_1879" id="delete_1879" /><label for="delete_1879"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1879" onclick="return highlightReply(1879, event)" href="/agg/res/1879#1879">No.</a><a class="post_no" onclick="return citeReply(1879)" href="/agg/res/1879#q1879">1879</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1879">[Reply]</a></p><div class="body">Are these nekomimi to your liking, goshujinsama?<br/><a href=https://kissu.moe/qa/res/9206.html>https://kissu.moe/qa/res/9206.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1878" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568762188617.jpg">1568762188617.jpg</a> <span class="unimportant">(906.88 KB, 1200x1600, <span class="postfilename">1530284594877.jpg</span>)</span></p><a href="/agg/src/1568762188617.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568762188617.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1878" ><p class="intro"><input type="checkbox" class="delete" name="delete_1878" id="delete_1878" /><label for="delete_1878"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1878" onclick="return highlightReply(1878, event)" href="/agg/res/1878#1878">No.</a><a class="post_no" onclick="return citeReply(1878)" href="/agg/res/1878#q1878">1878</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1878">[Reply]</a></p><div class="body">since this site is moderated bringing up this topic shouldn&#39;t be too big a deal. what are you&#39;re thoughts on frogposters, specifically the ones on /qa/? i personally despise them and all the faction shitposting they stand for. especially when they espouse that they were doing it for the sake of meta, and the state of meta on /qa/ couldn&#39;t be in any worse shape.<br/><a href=https://kissu.moe/qa/res/9285.html>https://kissu.moe/qa/res/9285.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1877" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568568029184.jpg">1568568029184.jpg</a> <span class="unimportant">(1.38 MB, 1500x1555, <span class="postfilename" title="ece5c3e9a4156b02d04757a08e9b5386.jpg">ece5c3e9a4156b02d04757a08e….jpg</span>)</span></p><a href="/agg/src/1568568029184.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568568029184.png" style="width:246px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1877" ><p class="intro"><input type="checkbox" class="delete" name="delete_1877" id="delete_1877" /><label for="delete_1877"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1877" onclick="return highlightReply(1877, event)" href="/agg/res/1877#1877">No.</a><a class="post_no" onclick="return citeReply(1877)" href="/agg/res/1877#q1877">1877</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1877">[Reply]</a></p><div class="body"><a onclick="return highlightReply(&#39;8859&#39;, event);" href="/qa/res/4165#8859">&gt;&gt;8859</a><br/>I think what&#39;s contributed to the drouht of passionate people is the perception online of passionate people as losers. Like how when people do express passion on many places they&#39;re met with responses of "cringe" or disapproval of their passion. So they try to not show it, or hide it under irony. Wish that perception would change though, irony sucks.<br/><a href=https://kissu.moe/qa/res/8928.html>https://kissu.moe/qa/res/8928.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1876" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568746440967.jpg">1568746440967.jpg</a> <span class="unimportant">(61.88 KB, 640x713, <span class="postfilename" title="52f17b61a3481b2db3a96060fc3fcc51.jpg">52f17b61a3481b2db3a96060fc….jpg</span>)</span></p><a href="/agg/src/1568746440967.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568746440967.png" style="width:229px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1876" ><p class="intro"><input type="checkbox" class="delete" name="delete_1876" id="delete_1876" /><label for="delete_1876"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1876" onclick="return highlightReply(1876, event)" href="/agg/res/1876#1876">No.</a><a class="post_no" onclick="return citeReply(1876)" href="/agg/res/1876#q1876">1876</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1876">[Reply]</a></p><div class="body">Muh japanese mommy girlfriend is demanding i come to japan now. She cant wait for christmas.<br/>So now, im gonna have to sneak a flight to japan in October on a weekend.<br/><br/>$2500, for a date. holy fuck.<br/><br/>What the fuck kind of life is this? oh well....<br/><a href=https://kissu.moe/qa/res/9267.html>https://kissu.moe/qa/res/9267.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1875" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568699139027.png">1568699139027.png</a> <span class="unimportant">(2.08 MB, 1500x2000, <span class="postfilename" title="__joutouguu_mayumi_touhou_drawn_by_kikoka_mizuumi__dcb7bbfe13166f0c5733327dd8640f33.png">__joutouguu_mayumi_touhou_….png</span>)</span></p><a href="/agg/src/1568699139027.png" target="_blank"><img class="post-image" src="/agg/thumb/1568699139027.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1875" ><p class="intro"><input type="checkbox" class="delete" name="delete_1875" id="delete_1875" /><label for="delete_1875"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1875" onclick="return highlightReply(1875, event)" href="/agg/res/1875#1875">No.</a><a class="post_no" onclick="return citeReply(1875)" href="/agg/res/1875#q1875">1875</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1875">[Reply]</a></p><div class="body">I notice the thread that was something along the lines of "I miss talking about Touhou" died. A fancy funpost eludes me, but I like this image, so... what did you think of Wily Beast?<br/><a href=https://kissu.moe/qa/res/9239.html>https://kissu.moe/qa/res/9239.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1874" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568684672860.jpg">1568684672860.jpg</a> <span class="unimportant">(15 KB, 190x190, <span class="postfilename">1429849963868.jpg</span>)</span></p><a href="/agg/src/1568684672860.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568684672860.png" style="width:190px;height:190px" alt="" /></a></div>    </div>    <div class="post op" id="op_1874" ><p class="intro"><input type="checkbox" class="delete" name="delete_1874" id="delete_1874" /><label for="delete_1874"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1874" onclick="return highlightReply(1874, event)" href="/agg/res/1874#1874">No.</a><a class="post_no" onclick="return citeReply(1874)" href="/agg/res/1874#q1874">1874</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1874">[Reply]</a></p><div class="body">You ever wish you were dumber?<br/><a href=https://kissu.moe/qa/res/9198.html>https://kissu.moe/qa/res/9198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1873" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568692628857.png">1568692628857.png</a> <span class="unimportant">(253.27 KB, 700x543, <span class="postfilename">thinkin bout da moon.png</span>)</span></p><a href="/agg/src/1568692628857.png" target="_blank"><img class="post-image" src="/agg/thumb/1568692628857.png" style="width:255px;height:198px" alt="" /></a></div>    </div>    <div class="post op" id="op_1873" ><p class="intro"><input type="checkbox" class="delete" name="delete_1873" id="delete_1873" /><label for="delete_1873"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1873" onclick="return highlightReply(1873, event)" href="/agg/res/1873#1873">No.</a><a class="post_no" onclick="return citeReply(1873)" href="/agg/res/1873#q1873">1873</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1873">[Reply]</a></p><div class="body">clouds in the night sky<br/>sky so bright thanks to the moon<br/>havent seen the moon in forever<br/>til ten minutes ago ah the moon it was up there so big so fast so shiny!<br/><a href=https://kissu.moe/qa/res/9215.html>https://kissu.moe/qa/res/9215.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1872" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568583095323.jpg">1568583095323.jpg</a> <span class="unimportant">(25.59 KB, 451x630, <span class="postfilename">1565485467590.jpg</span>)</span></p><a href="/agg/src/1568583095323.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568583095323.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1872" ><p class="intro"><input type="checkbox" class="delete" name="delete_1872" id="delete_1872" /><label for="delete_1872"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1872" onclick="return highlightReply(1872, event)" href="/agg/res/1872#1872">No.</a><a class="post_no" onclick="return citeReply(1872)" href="/agg/res/1872#q1872">1872</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1872">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/8987.html>https://kissu.moe/qa/res/8987.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1871" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568654083315.gif">1568654083315.gif</a> <span class="unimportant">(2.02 MB, 533x759, <span class="postfilename">carnivate-carn-lamia-loop.gif</span>)</span></p><a href="/agg/src/1568654083315.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568654083315.png" style="width:179px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1871" ><p class="intro"><input type="checkbox" class="delete" name="delete_1871" id="delete_1871" /><label for="delete_1871"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1871" onclick="return highlightReply(1871, event)" href="/agg/res/1871#1871">No.</a><a class="post_no" onclick="return citeReply(1871)" href="/agg/res/1871#q1871">1871</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1871">[Reply]</a></p><div class="body">What do you call things like centaurs or lamia? half human half animal hybrids I mean<br/><a href=https://kissu.moe/qa/res/9085.html>https://kissu.moe/qa/res/9085.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/13" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a class="selected">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/15" method="get"><input type="submit" value="Next" /></form>
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