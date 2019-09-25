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
<textarea style="display:none" name="text">qmsSY[vpLH2P\1y@b,k_</textarea>
<input  value="f#&#9864;/ ♬3&#125;{Q&#68;t7&#92;&#43;d5:Y@⚒Bv&#86;T-&#115;ep&#90;$&#126;]IU&#59;&#83;^n&#104;X!9K[)mu&lt;N(W8♛&gt;&#120;&#114;o2"  name="firstname"  type="hidden">
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="message" value="wd&#49;☟7n%&#47;&#101;:&#123;I⚲^B&#54;⚪r&#103;_&#41;$zV&#104;]&#92;&#102;@Z5L&gt;23t&#59;&#9930;&#77;☃Y&#88;&#72;-QFR'y☘N&#75;&#42;x9T[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value=" f♻⛭♃9/&#113;zwZ&#107;.&#64;&#104;|;$LF⛡&#109;d&#118;,ER8&#51;W%1YI&#77;^iU&#9740;&#53;☍&#43;Ag&#9770;T=`}&#9873;yc7J&#9966;P#b?⚤6X&amp;&#123;Dx \4NpKHn:)" name="q" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=" name="y0kh38z9do♒sb" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input value="b☵#Y{7`9J⚴@V^6_-" name="search" type="hidden" >
			
			
				
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
		<div class="thread" id="thread_1309" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565577549908.jpg">1565577549908.jpg</a> <span class="unimportant">(555.19 KB, 2400x1481, <span class="postfilename">Vol.2_06_07.jpg</span>)</span></p><a href="/agg/src/1565577549908.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565577549908.png" style="width:240px;height:149px" alt="" /></a></div>    </div>    <div class="post op" id="op_1309" ><p class="intro"><input type="checkbox" class="delete" name="delete_1309" id="delete_1309" /><label for="delete_1309"><span class="name">Anonymous</span> <time datetime="2019-08-12T02:40:04Z">08/12/19 (Mon) 02:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1309" onclick="return highlightReply(1309, event)" href="/agg/res/1309#1309">No.</a><a class="post_no" onclick="return citeReply(1309)" href="/agg/res/1309#q1309">1309</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1309">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1902.html>http://what-ch.mooo.com/what/res/1902.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1308" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565533420719.gif">1565533420719.gif</a> <span class="unimportant">(102.25 KB, 800x1000, <span class="postfilename">misc 1403.gif</span>)</span></p><a href="/agg/src/1565533420719.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565533420719.png" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1308" ><p class="intro"><input type="checkbox" class="delete" name="delete_1308" id="delete_1308" /><label for="delete_1308"><span class="name">Anonymous</span> <time datetime="2019-08-11T14:25:03Z">08/11/19 (Sun) 14:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1308" onclick="return highlightReply(1308, event)" href="/agg/res/1308#1308">No.</a><a class="post_no" onclick="return citeReply(1308)" href="/agg/res/1308#q1308">1308</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1308">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1898.html>http://what-ch.mooo.com/what/res/1898.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1307" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565516361176.jpg">1565516361176.jpg</a> <span class="unimportant">(93 KB, 750x717, <span class="postfilename" title="Depression+nap_a5237e_6239609.jpg">Depression+nap_a5237e_6239….jpg</span>)</span></p><a href="/agg/src/1565516361176.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565516361176.png" style="width:255px;height:244px" alt="" /></a></div>    </div>    <div class="post op" id="op_1307" ><p class="intro"><input type="checkbox" class="delete" name="delete_1307" id="delete_1307" /><label for="delete_1307"><span class="name">Kanon</span> <time datetime="2019-08-11T09:40:03Z">08/11/19 (Sun) 09:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1307" onclick="return highlightReply(1307, event)" href="/agg/res/1307#1307">No.</a><a class="post_no" onclick="return citeReply(1307)" href="/agg/res/1307#q1307">1307</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1307">[Reply]</a></p><div class="body"><a href=https://kakashi-nenpo.com/jp/res/32718.html>https://kakashi-nenpo.com/jp/res/32718.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1306" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565516290297.png">1565516290297.png</a> <span class="unimportant">(456.3 KB, 1000x1412, <span class="postfilename">1563713316460.png</span>)</span></p><a href="/agg/src/1565516290297.png" target="_blank"><img class="post-image" src="/agg/thumb/1565516290297.png" style="width:181px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1306" ><p class="intro"><input type="checkbox" class="delete" name="delete_1306" id="delete_1306" /><label for="delete_1306"><span class="name">Fujiwara no Mokou</span> <time datetime="2019-08-11T09:40:02Z">08/11/19 (Sun) 09:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1306" onclick="return highlightReply(1306, event)" href="/agg/res/1306#1306">No.</a><a class="post_no" onclick="return citeReply(1306)" href="/agg/res/1306#q1306">1306</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1306">[Reply]</a></p><div class="body">i like how posting a too hoo vido is considered spma to this toxic admin<br/><br/>HAVE sex INCELmin<br/><a href=https://kakashi-nenpo.com/jp/res/32717.html>https://kakashi-nenpo.com/jp/res/32717.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1305" data-board="agg"><div class="video-container" data-video="TYkKPAhPdDM"><a href="https://youtu.be/TYkKPAhPdDM" target="_blank" class="file"><img src="//img.youtube.com/vi/TYkKPAhPdDM/0.jpg" class="video"/></a><div class="video2"/></div></div>    <div class="post op" id="op_1305" ><p class="intro"><input type="checkbox" class="delete" name="delete_1305" id="delete_1305" /><label for="delete_1305"><span class="name">Watatsuki no Yorihime</span> <time datetime="2019-08-11T09:40:02Z">08/11/19 (Sun) 09:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1305" onclick="return highlightReply(1305, event)" href="/agg/res/1305#1305">No.</a><a class="post_no" onclick="return citeReply(1305)" href="/agg/res/1305#q1305">1305</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1305">[Reply]</a></p><div class="body">This is the most imporant video ever made. Watch it and free yourself from saturns prison<br/><a href=https://kakashi-nenpo.com/jp/res/32716.html>https://kakashi-nenpo.com/jp/res/32716.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1304" data-board="agg"><div class="video-container" data-video="TYkKPAhPdDM"><a href="https://youtu.be/TYkKPAhPdDM" target="_blank" class="file"><img src="//img.youtube.com/vi/TYkKPAhPdDM/0.jpg" class="video"/></a><div class="video2"/></div></div>    <div class="post op" id="op_1304" ><p class="intro"><input type="checkbox" class="delete" name="delete_1304" id="delete_1304" /><label for="delete_1304"><span class="name">Hieda no Akyu</span> <time datetime="2019-08-11T09:20:05Z">08/11/19 (Sun) 09:20:05</time></label>&nbsp;<a class="post_no" id="post_no_1304" onclick="return highlightReply(1304, event)" href="/agg/res/1304#1304">No.</a><a class="post_no" onclick="return citeReply(1304)" href="/agg/res/1304#q1304">1304</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1304">[Reply]</a></p><div class="body">This is the most imporant video ever made. Watch it and free yourself from saturns prison<br/><a href=https://kakashi-nenpo.com/jp/res/32714.html>https://kakashi-nenpo.com/jp/res/32714.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1303" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565515034150.jpeg">1565515034150.jpeg</a> <span class="unimportant">(215.56 KB, 960x540, <span class="postfilename">misc 2207.jpeg</span>)</span></p><a href="/agg/src/1565515034150.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1565515034150.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1303" ><p class="intro"><input type="checkbox" class="delete" name="delete_1303" id="delete_1303" /><label for="delete_1303"><span class="name">Anonymous</span> <time datetime="2019-08-11T09:20:03Z">08/11/19 (Sun) 09:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1303" onclick="return highlightReply(1303, event)" href="/agg/res/1303#1303">No.</a><a class="post_no" onclick="return citeReply(1303)" href="/agg/res/1303#q1303">1303</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1303">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1895.html>http://what-ch.mooo.com/what/res/1895.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1302" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565513384837.png">1565513384837.png</a> <span class="unimportant">(360.15 KB, 1045x1492, <span class="postfilename">XX_021.png</span>)</span></p><a href="/agg/src/1565513384837.png" target="_blank"><img class="post-image" src="/agg/thumb/1565513384837.png" style="width:169px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1302" ><p class="intro"><input type="checkbox" class="delete" name="delete_1302" id="delete_1302" /><label for="delete_1302"><span class="name">Anonymous</span> <time datetime="2019-08-11T08:50:02Z">08/11/19 (Sun) 08:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1302" onclick="return highlightReply(1302, event)" href="/agg/res/1302#1302">No.</a><a class="post_no" onclick="return citeReply(1302)" href="/agg/res/1302#q1302">1302</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1302">[Reply]</a></p><div class="body">Guys my brain is melting from tplaying the Classic WoW open beta all weekend<br/><br/>It&#39;s like I&#39;ve lost 3 days<br/><a href=http://what-ch.mooo.com/what/res/1892.html>http://what-ch.mooo.com/what/res/1892.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1301" data-board="agg"><div class="video-container" data-video="TYkKPAhPdDM"><a href="https://youtu.be/TYkKPAhPdDM" target="_blank" class="file"><img src="//img.youtube.com/vi/TYkKPAhPdDM/0.jpg" class="video"/></a><div class="video2"/></div></div>    <div class="post op" id="op_1301" ><p class="intro"><input type="checkbox" class="delete" name="delete_1301" id="delete_1301" /><label for="delete_1301"><span class="name">Nazrin</span> <time datetime="2019-08-11T01:25:02Z">08/11/19 (Sun) 01:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1301" onclick="return highlightReply(1301, event)" href="/agg/res/1301#1301">No.</a><a class="post_no" onclick="return citeReply(1301)" href="/agg/res/1301#q1301">1301</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1301">[Reply]</a></p><div class="body">This is the most imporant video ever made. Watch it and free yourself from saturns prison<br/><a href=https://kakashi-nenpo.com/jp/res/32705.html>https://kakashi-nenpo.com/jp/res/32705.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1300" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565469353304.jpg">1565469353304.jpg</a> <span class="unimportant">(671.88 KB, 2150x3035, <span class="postfilename">72931097_p11.jpg</span>)</span></p><a href="/agg/src/1565469353304.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565469353304.png" style="width:171px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1300" ><p class="intro"><input type="checkbox" class="delete" name="delete_1300" id="delete_1300" /><label for="delete_1300"><span class="name">Anonymous</span> <time datetime="2019-08-10T20:40:08Z">08/10/19 (Sat) 20:40:08</time></label>&nbsp;<a class="post_no" id="post_no_1300" onclick="return highlightReply(1300, event)" href="/agg/res/1300#1300">No.</a><a class="post_no" onclick="return citeReply(1300)" href="/agg/res/1300#q1300">1300</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1300">[Reply]</a></p><div class="body">This is what /what/boys eat for dinner<br/><a href=http://what-ch.mooo.com/what/res/1885.html>http://what-ch.mooo.com/what/res/1885.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1299" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565468737492.jpg">1565468737492.jpg</a> <span class="unimportant">(977.13 KB, 1000x1263, <span class="postfilename" title="__wriggle_nightbug_kirisame_marisa_remilia_scarlet_mystia_lorelei_hakurei_reimu_and_etc_touhou_drawn_by_spark621__09e967d4a527500d09a9b37730452f5c.jpg">__wriggle_nightbug_kirisam….jpg</span>)</span></p><a href="/agg/src/1565468737492.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565468737492.png" style="width:202px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1299" ><p class="intro"><input type="checkbox" class="delete" name="delete_1299" id="delete_1299" /><label for="delete_1299"><span class="subject">Bump this thread every time you visit for the FIRST TIME today! Part 32</span> <span class="name">Takane Shijou</span> <time datetime="2019-08-10T20:30:02Z">08/10/19 (Sat) 20:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1299" onclick="return highlightReply(1299, event)" href="/agg/res/1299#1299">No.</a><a class="post_no" onclick="return citeReply(1299)" href="/agg/res/1299#q1299">1299</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1299">[Reply]</a></p><div class="body">Taking it easy during the beach episode vol.2!<br/><a href=https://kakashi-nenpo.com/jp/res/32692.html>https://kakashi-nenpo.com/jp/res/32692.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1298" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565465137684.jpg">1565465137684.jpg</a> <span class="unimportant">(495.47 KB, 1200x871, <span class="postfilename">madoka magica 0470.jpg</span>)</span></p><a href="/agg/src/1565465137684.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565465137684.png" style="width:240px;height:175px" alt="" /></a></div>    </div>    <div class="post op" id="op_1298" ><p class="intro"><input type="checkbox" class="delete" name="delete_1298" id="delete_1298" /><label for="delete_1298"><span class="name">Anonymous</span> <time datetime="2019-08-10T19:30:02Z">08/10/19 (Sat) 19:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1298" onclick="return highlightReply(1298, event)" href="/agg/res/1298#1298">No.</a><a class="post_no" onclick="return citeReply(1298)" href="/agg/res/1298#q1298">1298</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1298">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1884.html>http://what-ch.mooo.com/what/res/1884.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1297" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565444538879.jpg">1565444538879.jpg</a> <span class="unimportant">(117.19 KB, 800x600, <span class="postfilename">misc 2206.jpg</span>)</span></p><a href="/agg/src/1565444538879.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565444538879.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1297" ><p class="intro"><input type="checkbox" class="delete" name="delete_1297" id="delete_1297" /><label for="delete_1297"><span class="name">Anonymous</span> <time datetime="2019-08-10T13:45:03Z">08/10/19 (Sat) 13:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1297" onclick="return highlightReply(1297, event)" href="/agg/res/1297#1297">No.</a><a class="post_no" onclick="return citeReply(1297)" href="/agg/res/1297#q1297">1297</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1297">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1879.html>http://what-ch.mooo.com/what/res/1879.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1296" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565443329397.jpg">1565443329397.jpg</a> <span class="unimportant">(31.42 KB, 750x567, <span class="postfilename">IMG_20190810_084712.jpg</span>)</span></p><a href="/agg/src/1565443329397.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565443329397.png" style="width:240px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1296" ><p class="intro"><input type="checkbox" class="delete" name="delete_1296" id="delete_1296" /><label for="delete_1296"><span class="name">Anonymous</span> <time datetime="2019-08-10T13:25:03Z">08/10/19 (Sat) 13:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1296" onclick="return highlightReply(1296, event)" href="/agg/res/1296#1296">No.</a><a class="post_no" onclick="return citeReply(1296)" href="/agg/res/1296#q1296">1296</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1296">[Reply]</a></p><div class="body">it&#39;s a movie about whatmin<br/><a href=http://what-ch.mooo.com/what/res/1878.html>http://what-ch.mooo.com/what/res/1878.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1295" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565429723353.gif">1565429723353.gif</a> <span class="unimportant">(413.43 KB, 320x180, <span class="postfilename" title="0538eac231a9237c46d026939ba7d82d.gif">0538eac231a9237c46d026939b….gif</span>)</span></p><a href="/agg/src/1565429723353.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565429723353.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1295" ><p class="intro"><input type="checkbox" class="delete" name="delete_1295" id="delete_1295" /><label for="delete_1295"><span class="name">Anonymous</span> <time datetime="2019-08-10T09:40:02Z">08/10/19 (Sat) 09:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1295" onclick="return highlightReply(1295, event)" href="/agg/res/1295#1295">No.</a><a class="post_no" onclick="return citeReply(1295)" href="/agg/res/1295#q1295">1295</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1295">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1875.html>http://what-ch.mooo.com/what/res/1875.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1284" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565422452001.png">1565422452001.png</a> <span class="unimportant">(781.65 KB, 490x1015, <span class="postfilename">1428885438892.png</span>)</span></p><a href="/agg/src/1565422452001.png" target="_blank"><img class="post-image" src="/agg/thumb/1565422452001.png" style="width:116px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1284" ><p class="intro"><input type="checkbox" class="delete" name="delete_1284" id="delete_1284" /><label for="delete_1284"><span class="name">Anonymous</span> <time datetime="2019-08-10T07:35:02Z">08/10/19 (Sat) 07:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1284" onclick="return highlightReply(1284, event)" href="/agg/res/1284#1284">No.</a><a class="post_no" onclick="return citeReply(1284)" href="/agg/res/1284#q1284">1284</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1284">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1871.html>http://what-ch.mooo.com/what/res/1871.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1283" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565418035968.gif">1565418035968.gif</a> <span class="unimportant">(6.89 MB, 600x450, <span class="postfilename" title="96d881bc7025ed3af824be875c8615a1.gif">96d881bc7025ed3af824be875c….gif</span>)</span></p><a href="/agg/src/1565418035968.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565418035968.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1283" ><p class="intro"><input type="checkbox" class="delete" name="delete_1283" id="delete_1283" /><label for="delete_1283"><span class="name">Anonymous</span> <time datetime="2019-08-10T06:25:03Z">08/10/19 (Sat) 06:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1283" onclick="return highlightReply(1283, event)" href="/agg/res/1283#1283">No.</a><a class="post_no" onclick="return citeReply(1283)" href="/agg/res/1283#q1283">1283</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1283">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1869.html>http://what-ch.mooo.com/what/res/1869.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1282" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565416898568.gif">1565416898568.gif</a> <span class="unimportant">(1021.38 KB, 500x281, <span class="postfilename" title="1491004631_a37b2c64f6d1379160e9f0b0bb24592cb255d7a1_hq.gif">1491004631_a37b2c64f6d1379….gif</span>)</span></p><a href="/agg/src/1565416898568.gif" target="_blank"><img class="post-image" src="/agg/thumb/1565416898568.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1282" ><p class="intro"><input type="checkbox" class="delete" name="delete_1282" id="delete_1282" /><label for="delete_1282"><span class="name">Iku Nagae</span> <time datetime="2019-08-10T06:05:02Z">08/10/19 (Sat) 06:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1282" onclick="return highlightReply(1282, event)" href="/agg/res/1282#1282">No.</a><a class="post_no" onclick="return citeReply(1282)" href="/agg/res/1282#q1282">1282</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1282">[Reply]</a></p><div class="body"><span class="glowblue">De Geso time!</span><br/>Ika time before the end of the summer?<br/><a href=https://kakashi-nenpo.com/jp/res/32683.html>https://kakashi-nenpo.com/jp/res/32683.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1281" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565411207263.png">1565411207263.png</a> <span class="unimportant">(943.58 KB, 854x480, <span class="postfilename" title="palemoon_2019-08-09_23-26-15.png">palemoon_2019-08-09_23-26-….png</span>)</span></p><a href="/agg/src/1565411207263.png" target="_blank"><img class="post-image" src="/agg/thumb/1565411207263.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1281" ><p class="intro"><input type="checkbox" class="delete" name="delete_1281" id="delete_1281" /><label for="delete_1281"><span class="name">Anonymous</span> <time datetime="2019-08-10T04:30:03Z">08/10/19 (Sat) 04:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1281" onclick="return highlightReply(1281, event)" href="/agg/res/1281#1281">No.</a><a class="post_no" onclick="return citeReply(1281)" href="/agg/res/1281#q1281">1281</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1281">[Reply]</a></p><div class="body">OH MY GOD!<br/>WOOOOW!<br/><a href="https://www.youtube.com/watch?v=xDUd9SYCI2s" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=xDUd9SYCI2s</a><br/><a href=https://kissu.moe/qa/res/4624.html>https://kissu.moe/qa/res/4624.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1279" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1565400050671.jpg">1565400050671.jpg</a> <span class="unimportant">(303.16 KB, 716x768, <span class="postfilename">bane.jpg</span>)</span></p><a href="/agg/src/1565400050671.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1565400050671.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1279" ><p class="intro"><input type="checkbox" class="delete" name="delete_1279" id="delete_1279" /><label for="delete_1279"><span class="name">Nitori Kawashiro</span> <time datetime="2019-08-10T01:25:04Z">08/10/19 (Sat) 01:25:04</time></label>&nbsp;<a class="post_no" id="post_no_1279" onclick="return highlightReply(1279, event)" href="/agg/res/1279#1279">No.</a><a class="post_no" onclick="return citeReply(1279)" href="/agg/res/1279#q1279">1279</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1279">[Reply]</a></p><div class="body">Nenmin, your brains are about to get splattered all over your basement.<br/><a href=https://kakashi-nenpo.com/jp/res/32679.html>https://kakashi-nenpo.com/jp/res/32679.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/42" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a class="selected">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/44" method="get"><input type="submit" value="Next" /></form>
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