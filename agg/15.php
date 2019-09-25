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
			<img class="board_image" src="/static/banners/banner-kissu-21.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" name="text" value="qmsSY[vpLH2P\1y@b,k_" >
<input style="display:none" type="text" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<textarea name="login" style="display:none">/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value="&#32;f♻&#9965;&#9795;9/q&#122;wZk.&#64;h|;$L&#70;⛡md&#118;,ER83W&#37;&#49;YIM^iU&#9740;&#53;&#9741;+Ag☪T=`}⚑yc7J&#9966;P#&#98;?⚤6X&amp;{Dx &#92;4NpK&#72;n:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="search" value="b☵#&#89;{&#55;`9&#74;⚴@V&#94;6_-"></span>
			
			
				
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
		<div class="thread" id="thread_1870" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568676454080.jpg">1568676454080.jpg</a> <span class="unimportant">(203.45 KB, 479x470, <span class="postfilename">1547142575911.jpg</span>)</span></p><a href="/agg/src/1568676454080.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568676454080.png" style="width:255px;height:250px" alt="" /></a></div>    </div>    <div class="post op" id="op_1870" ><p class="intro"><input type="checkbox" class="delete" name="delete_1870" id="delete_1870" /><label for="delete_1870"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1870" onclick="return highlightReply(1870, event)" href="/agg/res/1870#1870">No.</a><a class="post_no" onclick="return citeReply(1870)" href="/agg/res/1870#q1870">1870</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1870">[Reply]</a></p><div class="body">Ya feel that? Ya feel that, boy? That wet stuff in yo socks? That wet and sticky stuff in yo socks? Das mah cohm. I cohmed in yo socks, cracka. How dat feel, boi?<br/><a href=https://kissu.moe/qa/res/9160.html>https://kissu.moe/qa/res/9160.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1869" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568665335502.png">1568665335502.png</a> <span class="unimportant">(466.52 KB, 839x484, <span class="postfilename">thinkin bout math.png</span>)</span></p><a href="/agg/src/1568665335502.png" target="_blank"><img class="post-image" src="/agg/thumb/1568665335502.png" style="width:255px;height:147px" alt="" /></a></div>    </div>    <div class="post op" id="op_1869" ><p class="intro"><input type="checkbox" class="delete" name="delete_1869" id="delete_1869" /><label for="delete_1869"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1869" onclick="return highlightReply(1869, event)" href="/agg/res/1869#1869">No.</a><a class="post_no" onclick="return citeReply(1869)" href="/agg/res/1869#q1869">1869</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1869">[Reply]</a></p><div class="body">new word.<br/>p*nis + wiener = peener<br/><a href=https://kissu.moe/qa/res/9115.html>https://kissu.moe/qa/res/9115.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1868" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568661136094.png">1568661136094.png</a> <span class="unimportant">(805.84 KB, 688x837, <span class="postfilename">1565490190555.png</span>)</span></p><a href="/agg/src/1568661136094.png" target="_blank"><img class="post-image" src="/agg/thumb/1568661136094.png" style="width:210px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1868" ><p class="intro"><input type="checkbox" class="delete" name="delete_1868" id="delete_1868" /><label for="delete_1868"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1868" onclick="return highlightReply(1868, event)" href="/agg/res/1868#1868">No.</a><a class="post_no" onclick="return citeReply(1868)" href="/agg/res/1868#q1868">1868</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1868">[Reply]</a></p><div class="body">don&#39;t know if i&#39;ve become some sort of purityfag but non-virgins in 2D stuff kind of gross me out now<br/><a href=https://kissu.moe/qa/res/9096.html>https://kissu.moe/qa/res/9096.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1867" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568678000692.png">1568678000692.png</a> <span class="unimportant">(384.6 KB, 770x630, <span class="postfilename">ass.png</span>)</span></p><a href="/agg/src/1568678000692.png" target="_blank"><img class="post-image" src="/agg/thumb/1568678000692.png" style="width:255px;height:209px" alt="" /></a></div>    </div>    <div class="post op" id="op_1867" ><p class="intro"><input type="checkbox" class="delete" name="delete_1867" id="delete_1867" /><label for="delete_1867"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1867" onclick="return highlightReply(1867, event)" href="/agg/res/1867#1867">No.</a><a class="post_no" onclick="return citeReply(1867)" href="/agg/res/1867#q1867">1867</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1867">[Reply]</a></p><div class="body">i&#39;m paste<br/>i&#39;m paste <br/>i&#39;m flippin paste<br/><a href=https://kissu.moe/qa/res/9171.html>https://kissu.moe/qa/res/9171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1866" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568663149119.png">1568663149119.png</a> <span class="unimportant">(87.64 KB, 330x263, <span class="postfilename">1565587800176.png</span>)</span></p><a href="/agg/src/1568663149119.png" target="_blank"><img class="post-image" src="/agg/thumb/1568663149119.png" style="width:255px;height:203px" alt="" /></a></div>    </div>    <div class="post op" id="op_1866" ><p class="intro"><input type="checkbox" class="delete" name="delete_1866" id="delete_1866" /><label for="delete_1866"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1866" onclick="return highlightReply(1866, event)" href="/agg/res/1866#1866">No.</a><a class="post_no" onclick="return citeReply(1866)" href="/agg/res/1866#q1866">1866</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1866">[Reply]</a></p><div class="body">read some mangadex comments<br/><a href=https://kissu.moe/qa/res/9102.html>https://kissu.moe/qa/res/9102.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1865" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568485843183.png">1568485843183.png</a> <span class="unimportant">(468.18 KB, 1235x697, <span class="postfilename">1539964813475.png</span>)</span></p><a href="/agg/src/1568485843183.png" target="_blank"><img class="post-image" src="/agg/thumb/1568485843183.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1865" ><p class="intro"><input type="checkbox" class="delete" name="delete_1865" id="delete_1865" /><label for="delete_1865"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1865" onclick="return highlightReply(1865, event)" href="/agg/res/1865#1865">No.</a><a class="post_no" onclick="return citeReply(1865)" href="/agg/res/1865#q1865">1865</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1865">[Reply]</a></p><div class="body">Is wakabb down? It no work for me.<br/><a href=https://kissu.moe/qa/res/8767.html>https://kissu.moe/qa/res/8767.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1864" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568665724394.png">1568665724394.png</a> <span class="unimportant">(718.77 KB, 1059x597, <span class="postfilename">6fab701772.png</span>)</span></p><a href="/agg/src/1568665724394.png" target="_blank"><img class="post-image" src="/agg/thumb/1568665724394.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1864" ><p class="intro"><input type="checkbox" class="delete" name="delete_1864" id="delete_1864" /><label for="delete_1864"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1864" onclick="return highlightReply(1864, event)" href="/agg/res/1864#1864">No.</a><a class="post_no" onclick="return citeReply(1864)" href="/agg/res/1864#q1864">1864</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1864">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/9120.html>https://kissu.moe/qa/res/9120.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1863" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568666997376.mp4">1568666997376.mp4</a> <span class="unimportant">(229.95 KB, 536x596, <span class="postfilename" title="628efbe2fe446d5908ceffb4aeee7510aef722d4.mp4">628efbe2fe446d5908ceffb4ae….mp4</span>)</span></p><a href="/player.php?v=/agg/src/1568666997376.mp4&amp;t=628efbe2fe446d5908ceffb4aeee7510aef722d4.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1568666997376.jpg" style="width:229px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1863" ><p class="intro"><input type="checkbox" class="delete" name="delete_1863" id="delete_1863" /><label for="delete_1863"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1863" onclick="return highlightReply(1863, event)" href="/agg/res/1863#1863">No.</a><a class="post_no" onclick="return citeReply(1863)" href="/agg/res/1863#q1863">1863</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1863">[Reply]</a></p><div class="body">me<br/><a href=https://kissu.moe/qa/res/9132.html>https://kissu.moe/qa/res/9132.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1862" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568563607864.png">1568563607864.png</a> <span class="unimportant">(744.01 KB, 1200x1014, <span class="postfilename">plsfapnt2.png</span>)</span></p><a href="/agg/src/1568563607864.png" target="_blank"><img class="post-image" src="/agg/thumb/1568563607864.png" style="width:255px;height:215px" alt="" /></a></div>    </div>    <div class="post op" id="op_1862" ><p class="intro"><input type="checkbox" class="delete" name="delete_1862" id="delete_1862" /><label for="delete_1862"><span class="subject">[qa] nof*p thread #2</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1862" onclick="return highlightReply(1862, event)" href="/agg/res/1862#1862">No.</a><a class="post_no" onclick="return citeReply(1862)" href="/agg/res/1862#q1862">1862</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1862">[Reply]</a></p><div class="body">dis thread is for all of you who want to stop f*pping! u ar not alone. there ar a bunch of us here who r willing to support one another. beating addiction is hard so lets do id together!!!!<br/><br/>pls share tips and tricks dat work for u. and if u slip up dond be ashamed to share it so we can identify the problem and help u in the future<br/><br/>i will make a new thread once dis one is archived.......<br/><a href=https://kissu.moe/qa/res/8920.html>https://kissu.moe/qa/res/8920.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1861" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568594393456.jpg">1568594393456.jpg</a> <span class="unimportant">(310.62 KB, 1920x1080, <span class="postfilename">1561816140680.jpg</span>)</span></p><a href="/agg/src/1568594393456.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568594393456.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1861" ><p class="intro"><input type="checkbox" class="delete" name="delete_1861" id="delete_1861" /><label for="delete_1861"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1861" onclick="return highlightReply(1861, event)" href="/agg/res/1861#1861">No.</a><a class="post_no" onclick="return citeReply(1861)" href="/agg/res/1861#q1861">1861</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1861">[Reply]</a></p><div class="body">STOP calling<br/>STOP calling<br/>I dont want to think anymore&ndash;<br/><a href=https://kissu.moe/qa/res/9012.html>https://kissu.moe/qa/res/9012.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1860" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/2LTkcWxS2S8" allowfullscreen></iframe>    <div class="post op" id="op_1860" ><p class="intro"><input type="checkbox" class="delete" name="delete_1860" id="delete_1860" /><label for="delete_1860"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1860" onclick="return highlightReply(1860, event)" href="/agg/res/1860#1860">No.</a><a class="post_no" onclick="return citeReply(1860)" href="/agg/res/1860#q1860">1860</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1860">[Reply]</a></p><div class="body">Relax with some cookie.<br/><a href=https://kissu.moe/qa/res/9062.html>https://kissu.moe/qa/res/9062.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1859" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568606872834.png">1568606872834.png</a> <span class="unimportant">(628.17 KB, 853x480, <span class="postfilename">bcb9a040a7.png</span>)</span></p><a href="/agg/src/1568606872834.png" target="_blank"><img class="post-image" src="/agg/thumb/1568606872834.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1859" ><p class="intro"><input type="checkbox" class="delete" name="delete_1859" id="delete_1859" /><label for="delete_1859"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1859" onclick="return highlightReply(1859, event)" href="/agg/res/1859#1859">No.</a><a class="post_no" onclick="return citeReply(1859)" href="/agg/res/1859#q1859">1859</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1859">[Reply]</a></p><div class="body">when was the last time an anime made you cry<br/><a href=https://kissu.moe/qa/res/9032.html>https://kissu.moe/qa/res/9032.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1858" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568583039459.jpg">1568583039459.jpg</a> <span class="unimportant">(148.13 KB, 1280x720, <span class="postfilename">1565554281466.jpg</span>)</span></p><a href="/agg/src/1568583039459.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568583039459.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1858" ><p class="intro"><input type="checkbox" class="delete" name="delete_1858" id="delete_1858" /><label for="delete_1858"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1858" onclick="return highlightReply(1858, event)" href="/agg/res/1858#1858">No.</a><a class="post_no" onclick="return citeReply(1858)" href="/agg/res/1858#q1858">1858</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1858">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/8986.html>https://kissu.moe/qa/res/8986.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1857" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568529503777.jpg">1568529503777.jpg</a> <span class="unimportant">(71.57 KB, 710x478, <span class="postfilename" title="04. Kino no Tabi - the Beautiful World [Hi10p AAC][kuchikirukia].mkv_snapshot_02.15_[2017.10.17_22.02.47].jpg">04. Kino no Tabi - the Bea….jpg</span>)</span></p><a href="/agg/src/1568529503777.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568529503777.png" style="width:255px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_1857" ><p class="intro"><input type="checkbox" class="delete" name="delete_1857" id="delete_1857" /><label for="delete_1857"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1857" onclick="return highlightReply(1857, event)" href="/agg/res/1857#1857">No.</a><a class="post_no" onclick="return citeReply(1857)" href="/agg/res/1857#q1857">1857</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1857">[Reply]</a></p><div class="body">Going to stream Kino at 6pm EST tonight, give it a watch if you want, it&#39;s pretty good.<br/><a href=https://kissu.moe/qa/res/8896.html>https://kissu.moe/qa/res/8896.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1856" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568508163113.jpg">1568508163113.jpg</a> <span class="unimportant">(758.27 KB, 1920x1080, <span class="postfilename">1565575739694.jpg</span>)</span></p><a href="/agg/src/1568508163113.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568508163113.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1856" ><p class="intro"><input type="checkbox" class="delete" name="delete_1856" id="delete_1856" /><label for="delete_1856"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1856" onclick="return highlightReply(1856, event)" href="/agg/res/1856#1856">No.</a><a class="post_no" onclick="return citeReply(1856)" href="/agg/res/1856#q1856">1856</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1856">[Reply]</a></p><div class="body">What is your opinion on NTR?<br/><a href=https://kissu.moe/qa/res/8834.html>https://kissu.moe/qa/res/8834.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1855" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568536471787.png">1568536471787.png</a> <span class="unimportant">(80.67 KB, 696x394, <span class="postfilename">1513634707904.png</span>)</span></p><a href="/agg/src/1568536471787.png" target="_blank"><img class="post-image" src="/agg/thumb/1568536471787.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1855" ><p class="intro"><input type="checkbox" class="delete" name="delete_1855" id="delete_1855" /><label for="delete_1855"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1855" onclick="return highlightReply(1855, event)" href="/agg/res/1855#1855">No.</a><a class="post_no" onclick="return citeReply(1855)" href="/agg/res/1855#q1855">1855</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1855">[Reply]</a></p><div class="body">My cats litter box makes the bathroom and hallway reek like piss and feel dirty, and every second day he shits on the floor just for good measure. On top of that the fat motherfucker won&#39;t stop nagging me for food, even when I give him more than he&#39;s supposed to have. He&#39;s so demanding it makes me want to kick him until he shuts up. I literally think I&#39;m going to snap and kill this dead weight narcissistic piece of shit one day. Is killing your cat and burying it in your back yard illegal?<br/><a href=https://kissu.moe/qa/res/8909.html>https://kissu.moe/qa/res/8909.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1854" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/Xl5r-raQ7to" allowfullscreen></iframe>    <div class="post op" id="op_1854" ><p class="intro"><input type="checkbox" class="delete" name="delete_1854" id="delete_1854" /><label for="delete_1854"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1854" onclick="return highlightReply(1854, event)" href="/agg/res/1854#1854">No.</a><a class="post_no" onclick="return citeReply(1854)" href="/agg/res/1854#q1854">1854</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1854">[Reply]</a></p><div class="body">Why do these videos always have dark endings?<br/><a href=https://kissu.moe/qa/res/8853.html>https://kissu.moe/qa/res/8853.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1853" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/-anabfAg06U" allowfullscreen></iframe>    <div class="post op" id="op_1853" ><p class="intro"><input type="checkbox" class="delete" name="delete_1853" id="delete_1853" /><label for="delete_1853"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1853" onclick="return highlightReply(1853, event)" href="/agg/res/1853#1853">No.</a><a class="post_no" onclick="return citeReply(1853)" href="/agg/res/1853#q1853">1853</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1853">[Reply]</a></p><div class="body"><span class="quote">&gt;kissu</span><br/><a href=https://kissu.moe/qa/res/8854.html>https://kissu.moe/qa/res/8854.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1852" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568508131713.png">1568508131713.png</a> <span class="unimportant">(2.62 MB, 2000x1200, <span class="postfilename">cocks....png</span>)</span></p><a href="/agg/src/1568508131713.png" target="_blank"><img class="post-image" src="/agg/thumb/1568508131713.png" style="width:255px;height:153px" alt="" /></a></div>    </div>    <div class="post op" id="op_1852" ><p class="intro"><input type="checkbox" class="delete" name="delete_1852" id="delete_1852" /><label for="delete_1852"><span class="subject">cocks...</span> <a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1852" onclick="return highlightReply(1852, event)" href="/agg/res/1852#1852">No.</a><a class="post_no" onclick="return citeReply(1852)" href="/agg/res/1852#q1852">1852</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1852">[Reply]</a></p><div class="body">cocks...<br/><a href=https://kissu.moe/qa/res/8833.html>https://kissu.moe/qa/res/8833.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1851" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568174777014.jpg">1568174777014.jpg</a> <span class="unimportant">(95.21 KB, 1050x510, <span class="postfilename" title="supreme-commander-forged-alliance-screenshot-3.jpg">supreme-commander-forged-a….jpg</span>)</span></p><a href="/agg/src/1568174777014.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568174777014.png" style="width:255px;height:124px" alt="" /></a></div>    </div>    <div class="post op" id="op_1851" ><p class="intro"><input type="checkbox" class="delete" name="delete_1851" id="delete_1851" /><label for="delete_1851"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1851" onclick="return highlightReply(1851, event)" href="/agg/res/1851#1851">No.</a><a class="post_no" onclick="return citeReply(1851)" href="/agg/res/1851#q1851">1851</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1851">[Reply]</a></p><div class="body">How do you feel about RTS games? Would you be up for playing them with other people here?<br/>I&#39;m not very competitive, though.<br/><a href=https://kissu.moe/qa/res/8232.html>https://kissu.moe/qa/res/8232.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/14" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a class="selected">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/16" method="get"><input type="submit" value="Next" /></form>
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