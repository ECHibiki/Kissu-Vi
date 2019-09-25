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
			<img class="board_image" src="/static/banners/banner-kissu-16.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span style="display:none"><input type="text" name="text" value="q&#109;sSY[vpLH&#50;P\1&#121;@b,&#107;_"></span>
<input type="hidden" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea style="display:none" name="message" >wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[</textarea >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  type="hidden"  name="q"  value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" >
			</td>
		</tr>		<tr>
			<th>
				Options				<input type="hidden" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" name="y0kh38z9do♒sb">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input name="search" value="b☵#Y{7`9J⚴@V^6_-" type="hidden">
			
			
				
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
		<div class="thread" id="thread_1910" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568930026215.gif">1568930026215.gif</a> <span class="unimportant">(457.02 KB, 1200x629, <span class="postfilename">1567306749720.gif</span>)</span></p><a href="/agg/src/1568930026215.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568930026215.png" style="width:255px;height:134px" alt="" /></a></div>    </div>    <div class="post op" id="op_1910" ><p class="intro"><input type="checkbox" class="delete" name="delete_1910" id="delete_1910" /><label for="delete_1910"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1910" onclick="return highlightReply(1910, event)" href="/agg/res/1910#1910">No.</a><a class="post_no" onclick="return citeReply(1910)" href="/agg/res/1910#q1910">1910</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1910">[Reply]</a></p><div class="body">My hips are moving on their own!<br/><a href=https://kissu.moe/qa/res/9626.html>https://kissu.moe/qa/res/9626.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1909" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568923381297.png">1568923381297.png</a> <span class="unimportant">(3.65 MB, 2279x1412, <span class="postfilename">1374392995722.png</span>)</span></p><a href="/agg/src/1568923381297.png" target="_blank"><img class="post-image" src="/agg/thumb/1568923381297.png" style="width:255px;height:158px" alt="" /></a></div>    </div>    <div class="post op" id="op_1909" ><p class="intro"><input type="checkbox" class="delete" name="delete_1909" id="delete_1909" /><label for="delete_1909"><span class="subject">blue thread</span> <a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1909" onclick="return highlightReply(1909, event)" href="/agg/res/1909#1909">No.</a><a class="post_no" onclick="return citeReply(1909)" href="/agg/res/1909#q1909">1909</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1909">[Reply]</a></p><div class="body">blue images<br/><a href=https://kissu.moe/qa/res/9599.html>https://kissu.moe/qa/res/9599.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1908" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568857071342.jpg">1568857071342.jpg</a> <span class="unimportant">(937.38 KB, 1800x2689, <span class="postfilename" title="8ab88089fdea9f16bb1e1f6f7aede99c.jpg">8ab88089fdea9f16bb1e1f6f7a….jpg</span>)</span></p><a href="/agg/src/1568857071342.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568857071342.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1908" ><p class="intro"><input type="checkbox" class="delete" name="delete_1908" id="delete_1908" /><label for="delete_1908"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1908" onclick="return highlightReply(1908, event)" href="/agg/res/1908#1908">No.</a><a class="post_no" onclick="return citeReply(1908)" href="/agg/res/1908#q1908">1908</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1908">[Reply]</a></p><div class="body">When will people learn to appreciate just how great anonymous IRC could be. <br/>Just imagine how much funposting there&#39;d be in <a href="irc://irc.sageru.org/#jp" rel="nofollow" target="_blank">irc://irc.sageru.org/#jp</a> if there were just double the current users...<br/><a href=https://kissu.moe/qa/res/9501.html>https://kissu.moe/qa/res/9501.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1907" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568923720187.png">1568923720187.png</a> <span class="unimportant">(183.33 KB, 426x463, <span class="postfilename">1565560764793.png</span>)</span></p><a href="/agg/src/1568923720187.png" target="_blank"><img class="post-image" src="/agg/thumb/1568923720187.png" style="width:235px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1907" ><p class="intro"><input type="checkbox" class="delete" name="delete_1907" id="delete_1907" /><label for="delete_1907"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1907" onclick="return highlightReply(1907, event)" href="/agg/res/1907#1907">No.</a><a class="post_no" onclick="return citeReply(1907)" href="/agg/res/1907#q1907">1907</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1907">[Reply]</a></p><div class="body">saw some ntr art<br/><a href=https://kissu.moe/qa/res/9601.html>https://kissu.moe/qa/res/9601.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1906" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568749671074.png">1568749671074.png</a> <span class="unimportant">(1007.84 KB, 1366x768, <span class="postfilename">drinking.png</span>)</span></p><a href="/agg/src/1568749671074.png" target="_blank"><img class="post-image" src="/agg/thumb/1568749671074.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1906" ><p class="intro"><input type="checkbox" class="delete" name="delete_1906" id="delete_1906" /><label for="delete_1906"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1906" onclick="return highlightReply(1906, event)" href="/agg/res/1906#1906">No.</a><a class="post_no" onclick="return citeReply(1906)" href="/agg/res/1906#q1906">1906</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1906">[Reply]</a></p><div class="body">How do people even enjoy gacha games? I&#39;m playing Honkai Impact and the grind keeps growing. It&#39;s generous, I know, but that just means other gachas are worse. How does anyone tolerate it? Why don&#39;t they just quit and play another game? I&#39;m not having fun, I&#39;m just missing when I could unlock stuff directly.<br/><a href=https://kissu.moe/qa/res/9274.html>https://kissu.moe/qa/res/9274.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1905" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568815594981.jpg">1568815594981.jpg</a> <span class="unimportant">(30.57 KB, 290x450, <span class="postfilename">the fabled ultimate anime.jpg</span>)</span></p><a href="/agg/src/1568815594981.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568815594981.png" style="width:164px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1905" ><p class="intro"><input type="checkbox" class="delete" name="delete_1905" id="delete_1905" /><label for="delete_1905"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1905" onclick="return highlightReply(1905, event)" href="/agg/res/1905#1905">No.</a><a class="post_no" onclick="return citeReply(1905)" href="/agg/res/1905#q1905">1905</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1905">[Reply]</a></p><div class="body">Persuade me to watch Boku no Pico.<br/><a href=https://kissu.moe/qa/res/9454.html>https://kissu.moe/qa/res/9454.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1904" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568321573241.jpg">1568321573241.jpg</a> <span class="unimportant">(54.22 KB, 1000x710, <span class="postfilename" title="265c3168c4bd40610d682d67ea355c94.jpg">265c3168c4bd40610d682d67ea….jpg</span>)</span></p><a href="/agg/src/1568321573241.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568321573241.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1904" ><p class="intro"><input type="checkbox" class="delete" name="delete_1904" id="delete_1904" /><label for="delete_1904"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1904" onclick="return highlightReply(1904, event)" href="/agg/res/1904#1904">No.</a><a class="post_no" onclick="return citeReply(1904)" href="/agg/res/1904#q1904">1904</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1904">[Reply]</a></p><div class="body">Does anyone here like writing as a hobby?<br/><a href=https://kissu.moe/qa/res/8514.html>https://kissu.moe/qa/res/8514.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1903" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568684720947.png">1568684720947.png</a> <span class="unimportant">(968.72 KB, 815x677, <span class="postfilename">featuredimg.png</span>)</span></p><a href="/agg/src/1568684720947.png" target="_blank"><img class="post-image" src="/agg/thumb/1568684720947.png" style="width:255px;height:212px" alt="" /></a></div>    </div>    <div class="post op" id="op_1903" ><p class="intro"><input type="checkbox" class="delete" name="delete_1903" id="delete_1903" /><label for="delete_1903"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1903" onclick="return highlightReply(1903, event)" href="/agg/res/1903#1903">No.</a><a class="post_no" onclick="return citeReply(1903)" href="/agg/res/1903#q1903">1903</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1903">[Reply]</a></p><div class="body">September 27th is the release day of the translated version! It&#39;ll probably take a day or two for a... free version but make plans to start reading it!<br/>How much can you read a VN each week? We can set a time frame so we have stuff to talk about each week.<br/>Are you up for reading Asuka&#39;s VN, /qa/?<br/><a href=https://kissu.moe/qa/res/9199.html>https://kissu.moe/qa/res/9199.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1902" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/cm2Xz8WKf-4" allowfullscreen></iframe>    <div class="post op" id="op_1902" ><p class="intro"><input type="checkbox" class="delete" name="delete_1902" id="delete_1902" /><label for="delete_1902"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1902" onclick="return highlightReply(1902, event)" href="/agg/res/1902#1902">No.</a><a class="post_no" onclick="return citeReply(1902)" href="/agg/res/1902#q1902">1902</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1902">[Reply]</a></p><div class="body">The imageboard anthem<br/><a href=https://kissu.moe/qa/res/9575.html>https://kissu.moe/qa/res/9575.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1901" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568448745057.png">1568448745057.png</a> <span class="unimportant">(921.32 KB, 1163x1000, <span class="postfilename" title="__drawn_by_ryuuka_sane__2687981e773ffe516717afc07a5d23f9.png">__drawn_by_ryuuka_sane__26….png</span>)</span></p><a href="/agg/src/1568448745057.png" target="_blank"><img class="post-image" src="/agg/thumb/1568448745057.png" style="width:255px;height:219px" alt="" /></a></div>    </div>    <div class="post op" id="op_1901" ><p class="intro"><input type="checkbox" class="delete" name="delete_1901" id="delete_1901" /><label for="delete_1901"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1901" onclick="return highlightReply(1901, event)" href="/agg/res/1901#1901">No.</a><a class="post_no" onclick="return citeReply(1901)" href="/agg/res/1901#q1901">1901</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1901">[Reply]</a></p><div class="body">Stop what you&#39;re doing and post a cute image in this thread RIGHT NOW<br/><a href=https://kissu.moe/qa/res/8734.html>https://kissu.moe/qa/res/8734.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1900" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568855607115.jpg">1568855607115.jpg</a> <span class="unimportant">(62.88 KB, 501x664, <span class="postfilename">thinkin bout cans.jpg</span>)</span></p><a href="/agg/src/1568855607115.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568855607115.png" style="width:193px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1900" ><p class="intro"><input type="checkbox" class="delete" name="delete_1900" id="delete_1900" /><label for="delete_1900"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1900" onclick="return highlightReply(1900, event)" href="/agg/res/1900#1900">No.</a><a class="post_no" onclick="return citeReply(1900)" href="/agg/res/1900#q1900">1900</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1900">[Reply]</a></p><div class="body"><span class="quote">&gt;forced noko on</span><br/>i liked typing noko into my options box..<br/><a href=https://kissu.moe/qa/res/9489.html>https://kissu.moe/qa/res/9489.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1899" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568700704018.jpg">1568700704018.jpg</a> <span class="unimportant">(103.29 KB, 700x600, <span class="postfilename">1409950721664.jpg</span>)</span></p><a href="/agg/src/1568700704018.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568700704018.png" style="width:255px;height:219px" alt="" /></a></div>    </div>    <div class="post op" id="op_1899" ><p class="intro"><input type="checkbox" class="delete" name="delete_1899" id="delete_1899" /><label for="delete_1899"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1899" onclick="return highlightReply(1899, event)" href="/agg/res/1899#1899">No.</a><a class="post_no" onclick="return citeReply(1899)" href="/agg/res/1899#q1899">1899</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1899">[Reply]</a></p><div class="body"><a href="https://lainchan.org/layer/index.html" rel="nofollow" target="_blank">https://lainchan.org/layer/index.html</a><br/><br/>A bit surprised DDT is still active and receiving regular use, but I guess it&#39;s a bit nice to see it not dead. Remember it being fun while it lasted on /qa/, even if it wasn&#39;t all that widely used.<br/><a href=https://kissu.moe/qa/res/9244.html>https://kissu.moe/qa/res/9244.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1898" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568838881854.png">1568838881854.png</a> <span class="unimportant">(135.51 KB, 319x349, <span class="postfilename">1559534854035.png</span>)</span></p><a href="/agg/src/1568838881854.png" target="_blank"><img class="post-image" src="/agg/thumb/1568838881854.png" style="width:233px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1898" ><p class="intro"><input type="checkbox" class="delete" name="delete_1898" id="delete_1898" /><label for="delete_1898"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1898" onclick="return highlightReply(1898, event)" href="/agg/res/1898#1898">No.</a><a class="post_no" onclick="return citeReply(1898)" href="/agg/res/1898#q1898">1898</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1898">[Reply]</a></p><div class="body">What hosting does kissu use? I&#39;m too lazy to use whois<br/><a href=https://kissu.moe/qa/res/9475.html>https://kissu.moe/qa/res/9475.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1897" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568252427389.jpg">1568252427389.jpg</a> <span class="unimportant">(254.42 KB, 947x1500, <span class="postfilename">1563402531149.jpg</span>)</span></p><a href="/agg/src/1568252427389.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568252427389.png" style="width:161px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1897" ><p class="intro"><input type="checkbox" class="delete" name="delete_1897" id="delete_1897" /><label for="delete_1897"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1897" onclick="return highlightReply(1897, event)" href="/agg/res/1897#1897">No.</a><a class="post_no" onclick="return citeReply(1897)" href="/agg/res/1897#q1897">1897</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1897">[Reply]</a></p><div class="body">i really want a small, soft, and cute magical girl that smells nice to beat the shit out of me.<br/> maybe even kill me!<br/><a href=https://kissu.moe/qa/res/8403.html>https://kissu.moe/qa/res/8403.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1896" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568791873469.jpg">1568791873469.jpg</a> <span class="unimportant">(147.02 KB, 1500x1000, <span class="postfilename" title="096604fafcfb4ce55d02b669d84958cb-1000.jpg">096604fafcfb4ce55d02b669d8….jpg</span>)</span></p><a href="/agg/src/1568791873469.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568791873469.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1896" ><p class="intro"><input type="checkbox" class="delete" name="delete_1896" id="delete_1896" /><label for="delete_1896"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1896" onclick="return highlightReply(1896, event)" href="/agg/res/1896#1896">No.</a><a class="post_no" onclick="return citeReply(1896)" href="/agg/res/1896#q1896">1896</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1896">[Reply]</a></p><div class="body">hnnnng.<br/>No matter all the Reimus, Midaris, Rachels, and Mokous i meet<br/>for better or for worst, it seems my ideal girl is always kawashiro nitori. What is wrong with me. Even when she feels so far away, she keeps coming back into my life, as a reminder for what i want in a girl.<br/>She was my final fap before losing my virginity. i tink i fap to her after too. i do not know.<br/><br/>But, i have no met a kawashiro nitori girl. But, now i know, nitori is the one. And that the girl i marry, MUST be kawashiro nitori.<br/><br/><a href="https://www.youtube.com/watch?v=tX0PwiwvLnE" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=tX0PwiwvLnE</a><br/><a href=https://kissu.moe/qa/res/9438.html>https://kissu.moe/qa/res/9438.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1895" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568665131652.jpg">1568665131652.jpg</a> <span class="unimportant">(240.1 KB, 1280x720, <span class="postfilename">1485757957046.jpg</span>)</span></p><a href="/agg/src/1568665131652.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568665131652.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1895" ><p class="intro"><input type="checkbox" class="delete" name="delete_1895" id="delete_1895" /><label for="delete_1895"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1895" onclick="return highlightReply(1895, event)" href="/agg/res/1895#1895">No.</a><a class="post_no" onclick="return citeReply(1895)" href="/agg/res/1895#q1895">1895</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1895">[Reply]</a></p><div class="body"><span class="quote">&gt;No realms are currently available. (WOW51900309)</span><br/><a href=https://kissu.moe/qa/res/9114.html>https://kissu.moe/qa/res/9114.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1894" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568624267475.png">1568624267475.png</a> <span class="unimportant">(900.92 KB, 1905x584, <span class="postfilename" title="Screenshot_2019-09-16 Fall 2019 Anime Chart - All.png">Screenshot_2019-09-16 Fall….png</span>)</span></p><a href="/agg/src/1568624267475.png" target="_blank"><img class="post-image" src="/agg/thumb/1568624267475.png" style="width:255px;height:78px" alt="" /></a></div>    </div>    <div class="post op" id="op_1894" ><p class="intro"><input type="checkbox" class="delete" name="delete_1894" id="delete_1894" /><label for="delete_1894"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1894" onclick="return highlightReply(1894, event)" href="/agg/res/1894#1894">No.</a><a class="post_no" onclick="return citeReply(1894)" href="/agg/res/1894#q1894">1894</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1894">[Reply]</a></p><div class="body">While the fall season lineup doesn&#39;t stun me, it&#39;s got some promising entries in it. What&#39;s /qa/ planning to watch. And since we&#39;re coming up so close to the end of the decade, what&#39;s been your favorite anime of the 10&#39;s so far?<br/><a href=https://kissu.moe/qa/res/9049.html>https://kissu.moe/qa/res/9049.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1893" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568746804851.jpg">1568746804851.jpg</a> <span class="unimportant">(69.55 KB, 852x480, <span class="postfilename">1548714197423.jpg</span>)</span></p><a href="/agg/src/1568746804851.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568746804851.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1893" ><p class="intro"><input type="checkbox" class="delete" name="delete_1893" id="delete_1893" /><label for="delete_1893"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1893" onclick="return highlightReply(1893, event)" href="/agg/res/1893#1893">No.</a><a class="post_no" onclick="return citeReply(1893)" href="/agg/res/1893#q1893">1893</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1893">[Reply]</a></p><div class="body">I brought a new computer mouse a week ago and the scroll wheel is already acting strangely!<br/><a href=https://kissu.moe/qa/res/9269.html>https://kissu.moe/qa/res/9269.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1892" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568523737153.jpg">1568523737153.jpg</a> <span class="unimportant">(216.74 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Enen no Shouboutai - 10 [1080p].mkv_snapshot_17.43_[2019.09.15_00.00.04].jpg">[HorribleSubs] Enen no Sho….jpg</span>)</span></p><a href="/agg/src/1568523737153.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568523737153.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1892" ><p class="intro"><input type="checkbox" class="delete" name="delete_1892" id="delete_1892" /><label for="delete_1892"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1892" onclick="return highlightReply(1892, event)" href="/agg/res/1892#1892">No.</a><a class="post_no" onclick="return citeReply(1892)" href="/agg/res/1892#q1892">1892</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1892">[Reply]</a></p><div class="body">When did you first realize life was going to be okay?<br/>Me? It was when Tamaki entered my life<br/><a href=https://kissu.moe/qa/res/8860.html>https://kissu.moe/qa/res/8860.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1891" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568776911478.png">1568776911478.png</a> <span class="unimportant">(1.14 MB, 1430x1670, <span class="postfilename" title="b70ff9f96103eea430a66cf2625db38e.png">b70ff9f96103eea430a66cf262….png</span>)</span></p><a href="/agg/src/1568776911478.png" target="_blank"><img class="post-image" src="/agg/thumb/1568776911478.png" style="width:218px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1891" ><p class="intro"><input type="checkbox" class="delete" name="delete_1891" id="delete_1891" /><label for="delete_1891"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:24Z">09/20/19 (Fri) 15:39:24</time></label>&nbsp;<a class="post_no" id="post_no_1891" onclick="return highlightReply(1891, event)" href="/agg/res/1891#1891">No.</a><a class="post_no" onclick="return citeReply(1891)" href="/agg/res/1891#q1891">1891</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1891">[Reply]</a></p><div class="body">Why are anime girls such LOLICONS?!<br/><a href=https://kissu.moe/qa/res/9385.html>https://kissu.moe/qa/res/9385.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/12" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a class="selected">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/14" method="get"><input type="submit" value="Next" /></form>
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