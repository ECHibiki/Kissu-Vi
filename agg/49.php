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
<textarea style="display:none" name="text">qmsSY[vpLH2P\1y@b,k_</textarea>
<div   style="display:none"><input   type="text"   name="firstname"   value="&#102;&#35;⚈&#47; ♬&#51;}&#123;QDt7\+d&#53;:Y@⚒BvVT-s&#101;pZ$~]IU&#59;S^n&#104;&#88;!9K&#91;)mu&lt;N(W8&#9819;&gt;xro2"></div>
<input type="hidden" name="board" value="agg">
<textarea style="display:none" name="login">&#47;[&#76;H Ji:&#96;!;C+6&#92;&#111;T&lt;8Ob&#73;|?X]d&#46;2☨{tW&#53; c&#9905;1B=k@9(&#51;Ng☮*&#125;4'&#80;&#81;-&#77;V⚯&#48;&#75;D7us&#106;</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input   type="hidden"   name="q"   value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)">
			</td>
		</tr>		<tr>
			<th>
				Options				<input name="y0kh38z9do♒sb" value="pN&#43;&#62;&#56;&lt;q&#71;/6&#100;☎,&#39;&#70;%;&#115;⚨i&#65;E!&#82;&#117;oPK♿S&#125;_☬V(&#45;c&#94;&#92;{Q&#67;D&#126;&#9980;m&#9968;lx`&#91;a40.UkbZW⚈#*)LwM:|&#114;⛍&#93;&#50;&#121;&#64;&#9770;n&amp;5&#89;9♪&#84; &#106;1f7&#36;3=" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="search" value="b&#9781;&#35;Y&#123;7&#96;&#57;J⚴@V&#94;6&#95;-"   >
			
			
				
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
		<div class="thread" id="thread_1178" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564452049167.png">1564452049167.png</a> <span class="unimportant">(1.42 MB, 1872x1000, <span class="postfilename">1564372144259.png</span>)</span></p><a href="/agg/src/1564452049167.png" target="_blank"><img class="post-image" src="/agg/thumb/1564452049167.png" style="width:240px;height:129px" alt="" /></a></div>    </div>    <div class="post op" id="op_1178" ><p class="intro"><input type="checkbox" class="delete" name="delete_1178" id="delete_1178" /><label for="delete_1178"><span class="name">Anonymous</span> <time datetime="2019-07-30T02:05:04Z">07/30/19 (Tue) 02:05:04</time></label>&nbsp;<a class="post_no" id="post_no_1178" onclick="return highlightReply(1178, event)" href="/agg/res/1178#1178">No.</a><a class="post_no" onclick="return citeReply(1178)" href="/agg/res/1178#q1178">1178</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1178">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1461.html>http://what-ch.mooo.com/what/res/1461.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1177" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564449422306.gif">1564449422306.gif</a> <span class="unimportant">(34 B, 1x1, <span class="postfilename">gif 0208.gif</span>)</span></p><a href="/agg/src/1564449422306.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564449422306.png" style="width:1px;height:1px" alt="" /></a></div>    </div>    <div class="post op" id="op_1177" ><p class="intro"><input type="checkbox" class="delete" name="delete_1177" id="delete_1177" /><label for="delete_1177"><span class="name">Anonymous</span> <time datetime="2019-07-30T01:20:03Z">07/30/19 (Tue) 01:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1177" onclick="return highlightReply(1177, event)" href="/agg/res/1177#1177">No.</a><a class="post_no" onclick="return citeReply(1177)" href="/agg/res/1177#q1177">1177</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1177">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1459.html>http://what-ch.mooo.com/what/res/1459.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1176" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564432836650.jpg">1564432836650.jpg</a> <span class="unimportant">(156.49 KB, 750x500, <span class="postfilename">!.jpg</span>)</span></p><a href="/agg/src/1564432836650.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564432836650.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1176" ><p class="intro"><input type="checkbox" class="delete" name="delete_1176" id="delete_1176" /><label for="delete_1176"><span class="name">jevin</span> <time datetime="2019-07-29T20:45:02Z">07/29/19 (Mon) 20:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1176" onclick="return highlightReply(1176, event)" href="/agg/res/1176#1176">No.</a><a class="post_no" onclick="return citeReply(1176)" href="/agg/res/1176#q1176">1176</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1176">[Reply]</a></p><div class="body">thanksgiving dinner<br/><a href=https://kissu.moe/qa/res/4551.html>https://kissu.moe/qa/res/4551.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1175" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564381880998.png">1564381880998.png</a> <span class="unimportant">(496.52 KB, 1076x720, <span class="postfilename">misc 1414.png</span>)</span></p><a href="/agg/src/1564381880998.png" target="_blank"><img class="post-image" src="/agg/thumb/1564381880998.png" style="width:240px;height:161px" alt="" /></a></div>    </div>    <div class="post op" id="op_1175" ><p class="intro"><input type="checkbox" class="delete" name="delete_1175" id="delete_1175" /><label for="delete_1175"><span class="name">Anonymous</span> <time datetime="2019-07-29T06:35:02Z">07/29/19 (Mon) 06:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1175" onclick="return highlightReply(1175, event)" href="/agg/res/1175#1175">No.</a><a class="post_no" onclick="return citeReply(1175)" href="/agg/res/1175#q1175">1175</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1175">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1450.html>http://what-ch.mooo.com/what/res/1450.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1174" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564367866561.png">1564367866561.png</a> <span class="unimportant">(1.03 MB, 1914x1080, <span class="postfilename" title="Screenshot_2019-07-29_04-12-12.png">Screenshot_2019-07-29_04-1….png</span>)</span></p><a href="/agg/src/1564367866561.png" target="_blank"><img class="post-image" src="/agg/thumb/1564367866561.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1174" ><p class="intro"><input type="checkbox" class="delete" name="delete_1174" id="delete_1174" /><label for="delete_1174"><span class="name">Anonymous</span> <time datetime="2019-07-29T02:40:03Z">07/29/19 (Mon) 02:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1174" onclick="return highlightReply(1174, event)" href="/agg/res/1174#1174">No.</a><a class="post_no" onclick="return citeReply(1174)" href="/agg/res/1174#q1174">1174</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1174">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1446.html>http://what-ch.mooo.com/what/res/1446.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1173" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564357455256.png">1564357455256.png</a> <span class="unimportant">(268.49 KB, 800x800, <span class="postfilename" title="3B807EE9-B8BB-441A-8A2F-27F90D5C1F05.png">3B807EE9-B8BB-441A-8A2F-27….png</span>)</span></p><a href="/agg/src/1564357455256.png" target="_blank"><img class="post-image" src="/agg/thumb/1564357455256.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1173" ><p class="intro"><input type="checkbox" class="delete" name="delete_1173" id="delete_1173" /><label for="delete_1173"><span class="name">Anonymous</span> <time datetime="2019-07-28T23:45:02Z">07/28/19 (Sun) 23:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1173" onclick="return highlightReply(1173, event)" href="/agg/res/1173#1173">No.</a><a class="post_no" onclick="return citeReply(1173)" href="/agg/res/1173#q1173">1173</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1173">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=x-3QV8aQBdU&amp;feature=youtu.be&amp;t=24m17s" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=x-3QV8aQBdU&amp;feature=youtu.be&amp;t=24m17s</a><br/><a href=https://kissu.moe/qa/res/4542.html>https://kissu.moe/qa/res/4542.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1172" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564350076681.png">1564350076681.png</a> <span class="unimportant">(1.32 MB, 1920x1080, <span class="postfilename">1564333303533.png</span>)</span></p><a href="/agg/src/1564350076681.png" target="_blank"><img class="post-image" src="/agg/thumb/1564350076681.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1172" ><p class="intro"><input type="checkbox" class="delete" name="delete_1172" id="delete_1172" /><label for="delete_1172"><span class="name">Anonymous</span> <time datetime="2019-07-28T21:45:03Z">07/28/19 (Sun) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1172" onclick="return highlightReply(1172, event)" href="/agg/res/1172#1172">No.</a><a class="post_no" onclick="return citeReply(1172)" href="/agg/res/1172#q1172">1172</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1172">[Reply]</a></p><div class="body">i cant stop fapping to my desktop wallpaper<br/><a href=http://what-ch.mooo.com/what/res/1441.html>http://what-ch.mooo.com/what/res/1441.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1171" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564349800423.jpeg">1564349800423.jpeg</a> <span class="unimportant">(211.3 KB, 1080x1080, <span class="postfilename" title="7AE7071D-C9EA-4339-8557-96FD988336FE.jpeg">7AE7071D-C9EA-4339-8557-9….jpeg</span>)</span></p><a href="/agg/src/1564349800423.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1564349800423.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1171" ><p class="intro"><input type="checkbox" class="delete" name="delete_1171" id="delete_1171" /><label for="delete_1171"><span class="name">Anonymous</span> <time datetime="2019-07-28T21:40:02Z">07/28/19 (Sun) 21:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1171" onclick="return highlightReply(1171, event)" href="/agg/res/1171#1171">No.</a><a class="post_no" onclick="return citeReply(1171)" href="/agg/res/1171#q1171">1171</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1171">[Reply]</a></p><div class="body"><span class="quote">&gt;stop masturbation for 2 weeks as I was becoming extremely tired</span><br/><span class="quote">&gt;forgot about porn and was starting to enjoy life</span><br/><span class="quote">&gt;had to go to dentist appointment yesterday </span><br/><span class="quote">&gt;cute asian hygienist begins cleaning my teeth </span><br/><span class="quote">&gt;she&#39;s wearing some perfume </span><br/><span class="quote">&gt;never had sex before and still a Virgin at the age of 29</span><br/><span class="quote">&gt;begin to realize I&#39;ve screwed up as I haven&#39;t masturbated in forever </span><br/><span class="quote">&gt;she begins brushing my arms and I begin getting a boner </span><br/><span class="quote">&gt;she leans in to get av better angle and I feel the side of her breast touch my shoulder </span><br/><span class="quote">&gt;first time I&#39;ve ever felt a breast </span><br/><span class="quote">&gt;I begin to lose it and squirm in the chair which causes a lot of pain </span><br/><span class="quote">&gt;she puts her hand on my chest and apologizes I cum in my pants </span><br/><span class="quote">&gt;realize what the fuck I just did wearing sweat pants and the stain begins to appear </span><br/><span class="quote">&gt;I panic and tell her im cold can she pass me my hoodie </span><br/><span class="quote">&gt;put it over my legs so she can&#39;t see my cum pants</span><br/><span class="toolong">Post too long. Click <a href="/agg/res/1171#1171">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1170" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564333498911.jpg">1564333498911.jpg</a> <span class="unimportant">(34.17 KB, 303x435, <span class="postfilename">misc 2179.jpg</span>)</span></p><a href="/agg/src/1564333498911.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564333498911.png" style="width:168px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1170" ><p class="intro"><input type="checkbox" class="delete" name="delete_1170" id="delete_1170" /><label for="delete_1170"><span class="name">Anonymous</span> <time datetime="2019-07-28T17:05:08Z">07/28/19 (Sun) 17:05:08</time></label>&nbsp;<a class="post_no" id="post_no_1170" onclick="return highlightReply(1170, event)" href="/agg/res/1170#1170">No.</a><a class="post_no" onclick="return citeReply(1170)" href="/agg/res/1170#q1170">1170</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1170">[Reply]</a></p><div class="body">Basic gestalt is that people are noticing they aren&#39;t saying or searching but merely THINKING of something and targeted ads relating to it pop up soon after.<br/><br/>I personally had this happen while participating in this thread. I didnt say a word to myself or anyone and left my phone in the basement. Walked up stairs, took a shower, came down, clickeded a video linked by an anon and an ad for soap came up. Even weirder is the video was opened in a browswere where i was not logged in to youtube.<br/><br/>Also of note, Alex Jones mentioned a computerized hive mind on the Joe Rogan show as seen here. <a href="https://www.youtube.com/watch?v=gqLrCeqc070" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=gqLrCeqc070</a> [Embed]<br/><br/>Anyone else notice things like this?<br/><a href=http://what-ch.mooo.com/what/res/1438.html>http://what-ch.mooo.com/what/res/1438.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1169" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564331995116.png">1564331995116.png</a> <span class="unimportant">(825.38 KB, 1705x2400, <span class="postfilename">36_36.png</span>)</span></p><a href="/agg/src/1564331995116.png" target="_blank"><img class="post-image" src="/agg/thumb/1564331995116.png" style="width:171px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1169" ><p class="intro"><input type="checkbox" class="delete" name="delete_1169" id="delete_1169" /><label for="delete_1169"><span class="name">Anonymous</span> <time datetime="2019-07-28T16:40:02Z">07/28/19 (Sun) 16:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1169" onclick="return highlightReply(1169, event)" href="/agg/res/1169#1169">No.</a><a class="post_no" onclick="return citeReply(1169)" href="/agg/res/1169#q1169">1169</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1169">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1436.html>http://what-ch.mooo.com/what/res/1436.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1168" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564306711321.jpg">1564306711321.jpg</a> <span class="unimportant">(90.96 KB, 800x800, <span class="postfilename">1521208622372.jpg</span>)</span></p><a href="/agg/src/1564306711321.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564306711321.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1168" ><p class="intro"><input type="checkbox" class="delete" name="delete_1168" id="delete_1168" /><label for="delete_1168"><span class="name">Anonymous</span> <time datetime="2019-07-28T09:40:02Z">07/28/19 (Sun) 09:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1168" onclick="return highlightReply(1168, event)" href="/agg/res/1168#1168">No.</a><a class="post_no" onclick="return citeReply(1168)" href="/agg/res/1168#q1168">1168</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1168">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=IdfFiF-K0iQ" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=IdfFiF-K0iQ</a><br/><br/>What a banger<br/><a href=http://what-ch.mooo.com/what/res/1428.html>http://what-ch.mooo.com/what/res/1428.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1167" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564298636678.gif">1564298636678.gif</a> <span class="unimportant">(1.63 MB, 500x500, <span class="postfilename">1564267275750.gif</span>)</span></p><a href="/agg/src/1564298636678.gif" target="_blank"><img class="post-image" src="/agg/thumb/1564298636678.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1167" ><p class="intro"><input type="checkbox" class="delete" name="delete_1167" id="delete_1167" /><label for="delete_1167"><span class="name">Anonymous</span> <time datetime="2019-07-28T07:25:03Z">07/28/19 (Sun) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1167" onclick="return highlightReply(1167, event)" href="/agg/res/1167#1167">No.</a><a class="post_no" onclick="return citeReply(1167)" href="/agg/res/1167#q1167">1167</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1167">[Reply]</a></p><div class="body">Tifa Lockhart<br/><a href=http://what-ch.mooo.com/what/res/1426.html>http://what-ch.mooo.com/what/res/1426.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1166" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564291736854.jpg">1564291736854.jpg</a> <span class="unimportant">(350.62 KB, 800x600, <span class="postfilename">1465648995770.jpg</span>)</span></p><a href="/agg/src/1564291736854.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564291736854.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1166" ><p class="intro"><input type="checkbox" class="delete" name="delete_1166" id="delete_1166" /><label for="delete_1166"><a class="repo" href="javascript:void(0); repo"><span class="name">Anonymous</span></a> <time datetime="2019-07-28T05:30:03Z">07/28/19 (Sun) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1166" onclick="return highlightReply(1166, event)" href="/agg/res/1166#1166">No.</a><a class="post_no" onclick="return citeReply(1166)" href="/agg/res/1166#q1166">1166</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1166">[Reply]</a></p><div class="body">What did you grab before exhentai went down?<br/><a href=https://kissu.moe/qa/res/4532.html>https://kissu.moe/qa/res/4532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1165" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564291599398.jpg">1564291599398.jpg</a> <span class="unimportant">(1.2 MB, 1228x1676, <span class="postfilename" title="__mononobe_no_futo_touhou_drawn_by_sinzen__26807431528ce0a68725faeb9f5259bd.jpg">__mononobe_no_futo_touhou_….jpg</span>)</span></p><a href="/agg/src/1564291599398.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564291599398.png" style="width:187px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1165" ><p class="intro"><input type="checkbox" class="delete" name="delete_1165" id="delete_1165" /><label for="delete_1165"><span class="name">Anonymous</span> <time datetime="2019-07-28T05:30:03Z">07/28/19 (Sun) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1165" onclick="return highlightReply(1165, event)" href="/agg/res/1165#1165">No.</a><a class="post_no" onclick="return citeReply(1165)" href="/agg/res/1165#q1165">1165</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1165">[Reply]</a></p><div class="body">oh geez<br/><a href=https://kissu.moe/qa/res/4531.html>https://kissu.moe/qa/res/4531.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1164" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564290610352.jpg">1564290610352.jpg</a> <span class="unimportant">(78.15 KB, 800x480, <span class="postfilename">misc 1877.jpg</span>)</span></p><a href="/agg/src/1564290610352.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564290610352.png" style="width:240px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1164" ><p class="intro"><input type="checkbox" class="delete" name="delete_1164" id="delete_1164" /><label for="delete_1164"><span class="name">Anonymous</span> <time datetime="2019-07-28T05:15:02Z">07/28/19 (Sun) 05:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1164" onclick="return highlightReply(1164, event)" href="/agg/res/1164#1164">No.</a><a class="post_no" onclick="return citeReply(1164)" href="/agg/res/1164#q1164">1164</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1164">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1424.html>http://what-ch.mooo.com/what/res/1424.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1163" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564265513821.jpg">1564265513821.jpg</a> <span class="unimportant">(135.34 KB, 750x750, <span class="postfilename">1564246837670.jpg</span>)</span></p><a href="/agg/src/1564265513821.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564265513821.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1163" ><p class="intro"><input type="checkbox" class="delete" name="delete_1163" id="delete_1163" /><label for="delete_1163"><span class="name">Anonymous</span> <time datetime="2019-07-27T22:15:02Z">07/27/19 (Sat) 22:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1163" onclick="return highlightReply(1163, event)" href="/agg/res/1163#1163">No.</a><a class="post_no" onclick="return citeReply(1163)" href="/agg/res/1163#q1163">1163</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1163">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1420.html>http://what-ch.mooo.com/what/res/1420.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1162" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564256724888.jpg">1564256724888.jpg</a> <span class="unimportant">(1.2 MB, 2119x1500, <span class="postfilename">chuunibyou 0167.jpg</span>)</span></p><a href="/agg/src/1564256724888.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564256724888.png" style="width:240px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1162" ><p class="intro"><input type="checkbox" class="delete" name="delete_1162" id="delete_1162" /><label for="delete_1162"><span class="name">Anonymous</span> <time datetime="2019-07-27T19:50:02Z">07/27/19 (Sat) 19:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1162" onclick="return highlightReply(1162, event)" href="/agg/res/1162#1162">No.</a><a class="post_no" onclick="return citeReply(1162)" href="/agg/res/1162#q1162">1162</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1162">[Reply]</a></p><div class="body">cums<br/><a href=http://what-ch.mooo.com/what/res/1419.html>http://what-ch.mooo.com/what/res/1419.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1161" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564196287301.jpg">1564196287301.jpg</a> <span class="unimportant">(385.5 KB, 1280x1829, <span class="postfilename">kancolle192.jpg</span>)</span></p><a href="/agg/src/1564196287301.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564196287301.png" style="width:168px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1161" ><p class="intro"><input type="checkbox" class="delete" name="delete_1161" id="delete_1161" /><label for="delete_1161"><span class="name">Anonymous</span> <time datetime="2019-07-27T03:00:03Z">07/27/19 (Sat) 03:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1161" onclick="return highlightReply(1161, event)" href="/agg/res/1161#1161">No.</a><a class="post_no" onclick="return citeReply(1161)" href="/agg/res/1161#q1161">1161</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1161">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1408.html>http://what-ch.mooo.com/what/res/1408.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1160" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564189896171.png">1564189896171.png</a> <span class="unimportant">(164.62 KB, 531x346, <span class="postfilename">sayonara.png</span>)</span></p><a href="/agg/src/1564189896171.png" target="_blank"><img class="post-image" src="/agg/thumb/1564189896171.png" style="width:255px;height:166px" alt="" /></a></div>    </div>    <div class="post op" id="op_1160" ><p class="intro"><input type="checkbox" class="delete" name="delete_1160" id="delete_1160" /><label for="delete_1160"><span class="name">Anonymous</span> <time datetime="2019-07-27T01:15:03Z">07/27/19 (Sat) 01:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1160" onclick="return highlightReply(1160, event)" href="/agg/res/1160#1160">No.</a><a class="post_no" onclick="return citeReply(1160)" href="/agg/res/1160#q1160">1160</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1160">[Reply]</a></p><div class="body">SAY GOODBYE TO YOUR PRECIOUS CARD, POPO<br/><a href=https://kissu.moe/qa/res/4514.html>https://kissu.moe/qa/res/4514.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1159" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564164570736.png">1564164570736.png</a> <span class="unimportant">(1.03 MB, 1157x1127, <span class="postfilename">1564151316881.png</span>)</span></p><a href="/agg/src/1564164570736.png" target="_blank"><img class="post-image" src="/agg/thumb/1564164570736.png" style="width:240px;height:234px" alt="" /></a></div>    </div>    <div class="post op" id="op_1159" ><p class="intro"><input type="checkbox" class="delete" name="delete_1159" id="delete_1159" /><label for="delete_1159"><span class="name">Anonymous</span> <time datetime="2019-07-26T18:10:02Z">07/26/19 (Fri) 18:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1159" onclick="return highlightReply(1159, event)" href="/agg/res/1159#1159">No.</a><a class="post_no" onclick="return citeReply(1159)" href="/agg/res/1159#q1159">1159</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1159">[Reply]</a></p><div class="body">Kyouko is the sexiest<br/><a href=http://what-ch.mooo.com/what/res/1401.html>http://what-ch.mooo.com/what/res/1401.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/48" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a class="selected">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/50" method="get"><input type="submit" value="Next" /></form>
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