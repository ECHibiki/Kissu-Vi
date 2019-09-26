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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-6.png" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	
        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", 'https://kissu.moe/motd.txt');
                request.onreadystatechange = function() { 
                if (this.readyState === 4 && this.status === 200) {
                        motd = this.responseText;
                        var request = new XMLHttpRequest(); 
                        localStorage.firstLoad = 3;
                        alert(
                        "<h1>Welcome to kissu.moe!</h1><br/>\
                         <h2>Message Of the Day</h2>\
                        <p><strong>" + motd + "</strong></p>\
                        <h2>Boards</h2>\
                        <ul style='text-align: left;'><li>/qa/ - Random content(NSFW spoilered)</li><li>/b/ - Site Developement</li><li>/megu/ - NSFW content</li></ul>\
                        <h2>Select Default Theme</h2>\
                        Other options are selectable later in options<br/><br/>\
                        <label>Default Theme: <select onchange='$(\"#style-select-\" + $(this).val()).click();'><option value='1'>Light</option><option selected='selected' value='2'>Dark</option><option value='3'>Special</option></select></label><br/>\
                        <h2>Rules</h2>\
                        <p>Don't post obnoxious stuff. Bans are only reserved for the worst cases of people. A deletion does not mean it's personal</p><hr/>\
                        <br/>Contact Vermin for issues, site bugs and feedback</p>\
                        "
                        );

                };

        }
        request.send();
}
</script>


	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" name="user" value="">
<div style="display:none"><input type="text" name="lastname" value=""></div>
<input type="hidden" name="board" value="agg">
<input type="hidden" name="vwdrx5ukc8⚶6yftnl♑" value="c|x☁-☬vKNoym☀`GQwd'Ti♴ O☪L3&gt;l6kS9U%.♰1V=_(8BnupZ&amp;&lt;]52">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="login" value="x}&#70;KalH&#121;&#9980;?45{☓&#51;&#116;wn&#47;'♌2&#54;X⛩&#33;$%#;hGO8&gt;&#64;~&#122;J&#83;^0&#9887;Iod&lt;&#106;&#91;q(NALVfQ&#42;b&#87;&#61;u ,)`&#114;7m&#67;|e-&#46;&#9776;c&amp;i♛⛗&#115;v&#58;T9_M&#69;PgB]&#49;Dk &#90;+"></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value="" name="text" >
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="⛥Vv&#71;&#55;P~r&#121;Nq}d&#67;^☵&#117;&#35;/&#9978;$U⛪&#48;&#101;@Fm*&#41;&#89;c" name="q" type="hidden" >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input value="" name="ghndafeicmvp7w9z306421♐8lq" type="hidden" >
			
			
				<input   type="hidden"   value=""   name="w☖f⛡aigq7oc" >
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

<input type="hidden" name="hash" value="1e52d5205b50977227181f21055a9f301aa58ce3">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter">We have an archive, because why not<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/agg/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/agg/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="agg" />
		<div class="thread" id="thread_2037" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569190398408.jpg">1569190398408.jpg</a> <span class="unimportant">(861.4 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 127 [BD][1080p][AB5DD073].mkv_snapshot_06.06_[2019.08.10_03.10.14].jpg">[MiG_MuX] PriPara - 127 [B….jpg</span>)</span></p><a href="/agg/src/1569190398408.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569190398408.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2037" ><p class="intro"><input type="checkbox" class="delete" name="delete_2037" id="delete_2037" /><label for="delete_2037"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:15:04Z">09/22/19 (Sun) 22:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2037" onclick="return highlightReply(2037, event)" href="/agg/res/2037#2037">No.</a><a class="post_no" onclick="return citeReply(2037)" href="/agg/res/2037#q2037">2037</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2037">[Reply]</a></p><div class="body">Why aren&#39;t there more <em><span class="glowpink">cute</span></em> girl anime? I look at season charts and all I see are a few anime which meet the criteria for &#39;good&#39;, while the rest are filled with or centered around nasty boys<br/><a href=https://kissu.moe/qa/res/10134.html>https://kissu.moe/qa/res/10134.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2036" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569189933522.jpg">1569189933522.jpg</a> <span class="unimportant">(144.29 KB, 1440x1080, <span class="postfilename" title="[a-s]_mobile_suit_zeta_gundam_-_01_-_black_gundam__rs2_[1080p_bd-rip][B8B49416].mkv_snapshot_07.13_[2019.05.23_23.05.01].jpg">[a-s]_mobile_suit_zeta_gun….jpg</span>)</span></p><a href="/agg/src/1569189933522.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569189933522.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2036" ><p class="intro"><input type="checkbox" class="delete" name="delete_2036" id="delete_2036" /><label for="delete_2036"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:10:03Z">09/22/19 (Sun) 22:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2036" onclick="return highlightReply(2036, event)" href="/agg/res/2036#2036">No.</a><a class="post_no" onclick="return citeReply(2036)" href="/agg/res/2036#q2036">2036</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2036">[Reply]</a></p><div class="body">Kissu? Isn&#39;t that a girl&#39;s website?<br/><a href=https://kissu.moe/qa/res/10132.html>https://kissu.moe/qa/res/10132.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2035" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569187842054.jpg">1569187842054.jpg</a> <span class="unimportant">(176.08 KB, 906x1000, <span class="postfilename">elma confused.jpg</span>)</span></p><a href="/agg/src/1569187842054.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569187842054.png" style="width:231px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2035" ><p class="intro"><input type="checkbox" class="delete" name="delete_2035" id="delete_2035" /><label for="delete_2035"><span class="name">Anonymous</span> <time datetime="2019-09-22T21:35:03Z">09/22/19 (Sun) 21:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2035" onclick="return highlightReply(2035, event)" href="/agg/res/2035#2035">No.</a><a class="post_no" onclick="return citeReply(2035)" href="/agg/res/2035#q2035">2035</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2035">[Reply]</a></p><div class="body">So, I&#39;ve been meaning to ask, what&#39;s a boy?<br/><a href=https://kissu.moe/qa/res/10120.html>https://kissu.moe/qa/res/10120.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2034" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569185329789.jpg">1569185329789.jpg</a> <span class="unimportant">(1.6 MB, 1296x1812, <span class="postfilename" title="a82247215faa24354f76d823c7ff72e6a5622c4b298d76f0f099bdc635b93d99.jpg">a82247215faa24354f76d823c7….jpg</span>)</span></p><a href="/agg/src/1569185329789.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569185329789.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2034" ><p class="intro"><input type="checkbox" class="delete" name="delete_2034" id="delete_2034" /><label for="delete_2034"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T20:50:08Z">09/22/19 (Sun) 20:50:08</time></label>&nbsp;<a class="post_no" id="post_no_2034" onclick="return highlightReply(2034, event)" href="/agg/res/2034#2034">No.</a><a class="post_no" onclick="return citeReply(2034)" href="/agg/res/2034#q2034">2034</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2034">[Reply]</a></p><div class="body">What mascots are you guys browsing the /qa/ with? It&#39;s difficult to decide who I want to keep me company when I&#39;m perusing kissu.<br/><a href=https://kissu.moe/qa/res/10112.html>https://kissu.moe/qa/res/10112.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2033" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569182468400.png">1569182468400.png</a> <span class="unimportant">(1.18 MB, 1000x1333, <span class="postfilename" title="616a097085ad07d8b4a0387f60844ccd.png">616a097085ad07d8b4a0387f60….png</span>)</span></p><a href="/agg/src/1569182468400.png" target="_blank"><img class="post-image" src="/agg/thumb/1569182468400.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2033" ><p class="intro"><input type="checkbox" class="delete" name="delete_2033" id="delete_2033" /><label for="delete_2033"><span class="name">Anonymous</span> <time datetime="2019-09-22T20:05:03Z">09/22/19 (Sun) 20:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2033" onclick="return highlightReply(2033, event)" href="/agg/res/2033#2033">No.</a><a class="post_no" onclick="return citeReply(2033)" href="/agg/res/2033#q2033">2033</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2033">[Reply]</a></p><div class="body">mfw kissu is faster than gnfos and kissu has no freaks<br/><a href=https://kissu.moe/qa/res/10102.html>https://kissu.moe/qa/res/10102.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2032" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569181506064.jpg">1569181506064.jpg</a> <span class="unimportant">(76.83 KB, 1024x922, <span class="postfilename">1480476882671.jpg</span>)</span></p><a href="/agg/src/1569181506064.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569181506064.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_2032" ><p class="intro"><input type="checkbox" class="delete" name="delete_2032" id="delete_2032" /><label for="delete_2032"><span class="name">Anonymous</span> <time datetime="2019-09-22T19:50:05Z">09/22/19 (Sun) 19:50:05</time></label>&nbsp;<a class="post_no" id="post_no_2032" onclick="return highlightReply(2032, event)" href="/agg/res/2032#2032">No.</a><a class="post_no" onclick="return citeReply(2032)" href="/agg/res/2032#q2032">2032</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2032">[Reply]</a></p><div class="body">So, um, like, where&#39;s the anime board?<br/><a href=https://kissu.moe/qa/res/10098.html>https://kissu.moe/qa/res/10098.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2031" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569173531649.jpeg">1569173531649.jpeg</a> <span class="unimportant">(100.49 KB, 560x700, <span class="postfilename" title="F669B7BF-B82D-4621-8F89-22B149098C83.jpeg">F669B7BF-B82D-4621-8F89-2….jpeg</span>)</span></p><a href="/agg/src/1569173531649.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569173531649.jpeg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2031" ><p class="intro"><input type="checkbox" class="delete" name="delete_2031" id="delete_2031" /><label for="delete_2031"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T17:35:03Z">09/22/19 (Sun) 17:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2031" onclick="return highlightReply(2031, event)" href="/agg/res/2031#2031">No.</a><a class="post_no" onclick="return citeReply(2031)" href="/agg/res/2031#q2031">2031</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2031">[Reply]</a></p><div class="body">/intl/ won<br/><a href="https://spacechan.xyz/intl/" rel="nofollow" target="_blank">https://spacechan.xyz/intl/</a><br/><a href=https://gnfos.com/jp/res/369416.html>https://gnfos.com/jp/res/369416.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2030" data-board="agg"><div class="video-container" data-video="8qLL2Gx3I_k"><a href="https://youtu.be/8qLL2Gx3I_k" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/8qLL2Gx3I_k/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2030" ><p class="intro"><input type="checkbox" class="delete" name="delete_2030" id="delete_2030" /><label for="delete_2030"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T17:25:03Z">09/22/19 (Sun) 17:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2030" onclick="return highlightReply(2030, event)" href="/agg/res/2030#2030">No.</a><a class="post_no" onclick="return citeReply(2030)" href="/agg/res/2030#q2030">2030</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2030">[Reply]</a></p><div class="body">Wow<br/><a href=https://gnfos.com/jp/res/369415.html>https://gnfos.com/jp/res/369415.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2029" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569172186159.jpg">1569172186159.jpg</a> <span class="unimportant">(213.87 KB, 659x499, <span class="postfilename">1569170192895.jpg</span>)</span></p><a href="/agg/src/1569172186159.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569172186159.jpg" style="width:317px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2029" ><p class="intro"><input type="checkbox" class="delete" name="delete_2029" id="delete_2029" /><label for="delete_2029"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T17:10:03Z">09/22/19 (Sun) 17:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2029" onclick="return highlightReply(2029, event)" href="/agg/res/2029#2029">No.</a><a class="post_no" onclick="return citeReply(2029)" href="/agg/res/2029#q2029">2029</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2029">[Reply]</a></p><div class="body">Get in here<br/><a href=https://gnfos.com/jp/res/369414.html>https://gnfos.com/jp/res/369414.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2028" data-board="agg"><div class="video-container" data-video="aJZny1N0yJM"><a href="https://youtu.be/aJZny1N0yJM" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/aJZny1N0yJM/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2028" ><p class="intro"><input type="checkbox" class="delete" name="delete_2028" id="delete_2028" /><label for="delete_2028"><span class="name">Tada Banri</span> <time datetime="2019-09-22T16:45:03Z">09/22/19 (Sun) 16:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2028" onclick="return highlightReply(2028, event)" href="/agg/res/2028#2028">No.</a><a class="post_no" onclick="return citeReply(2028)" href="/agg/res/2028#q2028">2028</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2028">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369413.html>https://gnfos.com/jp/res/369413.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2027" data-board="agg"><div class="video-container" data-video="AR74HitPvws"><a href="https://youtu.be/AR74HitPvws" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/AR74HitPvws/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2027" ><p class="intro"><input type="checkbox" class="delete" name="delete_2027" id="delete_2027" /><label for="delete_2027"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T16:10:03Z">09/22/19 (Sun) 16:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2027" onclick="return highlightReply(2027, event)" href="/agg/res/2027#2027">No.</a><a class="post_no" onclick="return citeReply(2027)" href="/agg/res/2027#q2027">2027</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2027">[Reply]</a></p><div class="body">I&#39;m finally range bang<br/><a href=https://gnfos.com/jp/res/369412.html>https://gnfos.com/jp/res/369412.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2026" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569164326403.jpeg">1569164326403.jpeg</a> <span class="unimportant">(91.15 KB, 767x1041, <span class="postfilename" title="76A5489B-2175-4EB9-A1E0-F37424BCDE7C.jpeg">76A5489B-2175-4EB9-A1E0-F….jpeg</span>)</span></p><a href="/agg/src/1569164326403.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569164326403.png" style="width:188px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2026" ><p class="intro"><input type="checkbox" class="delete" name="delete_2026" id="delete_2026" /><label for="delete_2026"><span class="name">Anonymous</span> <time datetime="2019-09-22T15:00:04Z">09/22/19 (Sun) 15:00:04</time></label>&nbsp;<a class="post_no" id="post_no_2026" onclick="return highlightReply(2026, event)" href="/agg/res/2026#2026">No.</a><a class="post_no" onclick="return citeReply(2026)" href="/agg/res/2026#q2026">2026</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2026">[Reply]</a></p><div class="body">Cool-guy your life is about to get very miserable<br/><a href=https://kissu.moe/qa/res/10070.html>https://kissu.moe/qa/res/10070.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2025" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569159099755.png">1569159099755.png</a> <span class="unimportant">(49.64 KB, 324x585, <span class="postfilename">Domestic_CatOriginal.jpg.png</span>)</span></p><a href="/agg/src/1569159099755.png" target="_blank"><img class="post-image" src="/agg/thumb/1569159099755.png" style="width:141px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2025" ><p class="intro"><input type="checkbox" class="delete" name="delete_2025" id="delete_2025" /><label for="delete_2025"><span class="name">Anonymous</span> <time datetime="2019-09-22T13:35:03Z">09/22/19 (Sun) 13:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2025" onclick="return highlightReply(2025, event)" href="/agg/res/2025#2025">No.</a><a class="post_no" onclick="return citeReply(2025)" href="/agg/res/2025#q2025">2025</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2025">[Reply]</a></p><div class="body">I like cats.<br/><a href=https://kissu.moe/qa/res/10067.html>https://kissu.moe/qa/res/10067.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2024" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569157568592.jpg">1569157568592.jpg</a> <span class="unimportant">(162.93 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Machikado Mazoku - 11 [1080p].mkv_snapshot_05.58_[2019.09.22_08.05.50].jpg">[HorribleSubs] Machikado M….jpg</span>)</span></p><a href="/agg/src/1569157568592.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569157568592.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2024" ><p class="intro"><input type="checkbox" class="delete" name="delete_2024" id="delete_2024" /><label for="delete_2024"><span class="name">Anonymous</span> <time datetime="2019-09-22T13:10:03Z">09/22/19 (Sun) 13:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2024" onclick="return highlightReply(2024, event)" href="/agg/res/2024#2024">No.</a><a class="post_no" onclick="return citeReply(2024)" href="/agg/res/2024#q2024">2024</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2024">[Reply]</a></p><div class="body">The summer season is drawing to a close. Which shows did you like? Which ones did you drop?<br/>How would you rate the season itself?<br/><a href=https://kissu.moe/qa/res/10064.html>https://kissu.moe/qa/res/10064.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2023" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569155656296.jpg">1569155656296.jpg</a> <span class="unimportant">(27.87 KB, 480x480, <span class="postfilename">1568122169634.jpg</span>)</span></p><a href="/agg/src/1569155656296.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569155656296.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2023" ><p class="intro"><input type="checkbox" class="delete" name="delete_2023" id="delete_2023" /><label for="delete_2023"><span class="name">Tada Banri</span> <time datetime="2019-09-22T12:35:04Z">09/22/19 (Sun) 12:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2023" onclick="return highlightReply(2023, event)" href="/agg/res/2023#2023">No.</a><a class="post_no" onclick="return citeReply(2023)" href="/agg/res/2023#q2023">2023</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2023">[Reply]</a></p><div class="body"><span class="quote">&gt;fucking around with some shitty game for what I thought was like an hour before going to bed</span><br/><span class="quote">&gt;it was actually 5 hours</span><br/><span class="quote">&gt;it&#39;s now 6:30am and the sun is up</span><br/><br/><span class="heading"><strong>FUCK</strong></span><br/><a href=https://gnfos.com/jp/res/369409.html>https://gnfos.com/jp/res/369409.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2022" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569139869115.jpg">1569139869115.jpg</a> <span class="unimportant">(75.98 KB, 472x472, <span class="postfilename">1569139374411.jpg</span>)</span></p><a href="/agg/src/1569139869115.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569139869115.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2022" ><p class="intro"><input type="checkbox" class="delete" name="delete_2022" id="delete_2022" /><label for="delete_2022"><span class="name">Anonymous</span> <time datetime="2019-09-22T08:15:04Z">09/22/19 (Sun) 08:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2022" onclick="return highlightReply(2022, event)" href="/agg/res/2022#2022">No.</a><a class="post_no" onclick="return citeReply(2022)" href="/agg/res/2022#q2022">2022</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2022">[Reply]</a></p><div class="body">Shut the FUCK up /qa/, you faggots. Fucking skinny, buttmunching faggots. I hate you, you know that? I really do. &#39;Cause all you do is fucking prance around 4chan talking about your faggoty fairy meetups. I&#39;LL TELL YOU WHAT, I don&#39;t wanna hear about your fucking meetups, and how your assholes work, alright? It makes me sick, and I, I fucking hope you all fucking die of fag disease<br/><a href=https://kissu.moe/qa/res/10050.html>https://kissu.moe/qa/res/10050.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2021" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569136609401.jpg">1569136609401.jpg</a> <span class="unimportant">(427.48 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] UchiMusume - 08 [720p].mkv_snapshot_11.21_[2019.08.23_13.21.17].jpg">[HorribleSubs] UchiMusume ….jpg</span>)</span></p><a href="/agg/src/1569136609401.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569136609401.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2021" ><p class="intro"><input type="checkbox" class="delete" name="delete_2021" id="delete_2021" /><label for="delete_2021"><span class="subject">Average show appreciation</span> <span class="name">Anonymous</span> <time datetime="2019-09-22T07:20:08Z">09/22/19 (Sun) 07:20:08</time></label>&nbsp;<a class="post_no" id="post_no_2021" onclick="return highlightReply(2021, event)" href="/agg/res/2021#2021">No.</a><a class="post_no" onclick="return citeReply(2021)" href="/agg/res/2021#q2021">2021</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2021">[Reply]</a></p><div class="body">A thread for the shows that weren&#39;t anything special, amazing, or awful, but were still nice and not a drag to sit through regardless. Because they need a bit of love after they finish airing too<br/><a href=https://kissu.moe/qa/res/10038.html>https://kissu.moe/qa/res/10038.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2020" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569135542907.jpg">1569135542907.jpg</a> <span class="unimportant">(117.16 KB, 876x719, <span class="postfilename">1444342842313.jpg</span>)</span></p><a href="/agg/src/1569135542907.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569135542907.png" style="width:255px;height:209px" alt="" /></a></div>    </div>    <div class="post op" id="op_2020" ><p class="intro"><input type="checkbox" class="delete" name="delete_2020" id="delete_2020" /><label for="delete_2020"><span class="name">Anonymous</span> <time datetime="2019-09-22T07:00:03Z">09/22/19 (Sun) 07:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2020" onclick="return highlightReply(2020, event)" href="/agg/res/2020#2020">No.</a><a class="post_no" onclick="return citeReply(2020)" href="/agg/res/2020#q2020">2020</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2020">[Reply]</a></p><div class="body">Really got to admire the skill of some of these speedrunners. Can&#39;t imagine myself pulling some of these off in a million years.<br/><br/><a href="https://www.youtube.com/watch?v=C511V8wj9-U" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=C511V8wj9-U</a><br/><a href=https://kissu.moe/qa/res/10028.html>https://kissu.moe/qa/res/10028.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2019" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569132275559.jpeg">1569132275559.jpeg</a> <span class="unimportant">(91.15 KB, 767x1041, <span class="postfilename" title="539B4C26-0130-47C6-9BC0-58310679A723.jpeg">539B4C26-0130-47C6-9BC0-5….jpeg</span>)</span></p><a href="/agg/src/1569132275559.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569132275559.png" style="width:188px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2019" ><p class="intro"><input type="checkbox" class="delete" name="delete_2019" id="delete_2019" /><label for="delete_2019"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T06:05:03Z">09/22/19 (Sun) 06:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2019" onclick="return highlightReply(2019, event)" href="/agg/res/2019#2019">No.</a><a class="post_no" onclick="return citeReply(2019)" href="/agg/res/2019#q2019">2019</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2019">[Reply]</a></p><div class="body"><a onclick="return highlightReply(&#39;10003&#39;, event);" href="/qa/res/9998#10003">&gt;&gt;10003</a><br/>I can’t I’m rage banned<br/><a href=https://kissu.moe/qa/res/10012.html>https://kissu.moe/qa/res/10012.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2018" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569132236912.png">1569132236912.png</a> <span class="unimportant">(1.84 MB, 1750x1950, <span class="postfilename" title="CC239A3B-F98A-4E08-BC51-540EC321616C.png">CC239A3B-F98A-4E08-BC51-54….png</span>)</span></p><a href="/agg/src/1569132236912.png" target="_blank"><img class="post-image" src="/agg/thumb/1569132236912.png" style="width:229px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2018" ><p class="intro"><input type="checkbox" class="delete" name="delete_2018" id="delete_2018" /><label for="delete_2018"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T06:05:03Z">09/22/19 (Sun) 06:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2018" onclick="return highlightReply(2018, event)" href="/agg/res/2018#2018">No.</a><a class="post_no" onclick="return citeReply(2018)" href="/agg/res/2018#q2018">2018</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2018">[Reply]</a></p><div class="body"><a onclick="return highlightReply(&#39;9999&#39;, event);" href="/qa/res/9998#9999">&gt;&gt;9999</a><br/>Yeah lol zoomer Bros represents<br/><a href=https://kissu.moe/qa/res/10011.html>https://kissu.moe/qa/res/10011.html</a></div></div><br class="clear"/><hr/></div>
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
		                <a id="archive-link-bottom" href="/agg/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/7" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a class="selected">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/9" method="get"><input type="submit" value="Next" /></form>
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