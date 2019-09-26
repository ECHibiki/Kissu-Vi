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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-13.png" alt="" />
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
<input type="hidden" value=";EwqN*d9⛳PL&#9750;&#93;&#41;&#40;&#121;&#117;lRMJ_T D⛌?\=`o⛗&#46;n}!&#103;xc⚫jXW&lt; A^G&#98;&#39;v2U5☶&#112;+z☟rO&#35;Z,$Qa4☄&#64;&#107;S7BYF&#75;tV&#9863;msi1H" name="n2epfz9o8lygk6♒ub1ia3sjw7450vh" >
<input type="hidden" name="username" value="J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\" >
<input type="hidden" name="board" value="agg">
<input name="lastname" value="g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" value="" name="search">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="user" value="&gt;N⚤TI4`⚩~y♹*ZP%E8?uS+1iLA,hj☭:R$(05={V|}tf7q/HX@]K.⛎W⛏p2\_gsbr&amp;"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="7ykdefr3jg0ioqn2491mbap" value=""></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="2x⛝tavigslre96d83o7b♉yn1" value=""></span>
			
			
				<span style="display:none"><input type="text" name="iaze6dys♅pc97xrj8" value=""></span>
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<textarea style="display:none" name="url">24827</textarea>
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input  value=""  name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf"  type="hidden">
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<div style="display:none"  ><input type="text" name="text" value="WKTfg2&#104;!4&#115;&#81;&#77;&#68;9&amp;;♟n5B,&#111;qH&#116;S3&#56;b&#61;N♼k&#62;O-C&#42;]LJu &#48;⛏&#92;_F}r:ZX&#60;&#55;&#89;&#9848;&#86;m⚀♁jlG ^&#123;A.[)+%&#121;(~a$i'p♷1?"  ></div  >
				
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
								<input value="H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t" name="firstname" type="hidden">
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

<input type="hidden" name="hash" value="ef840e337c13cfd762e22af7e17c48cf05182ee3">
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
		<div class="thread" id="thread_1737" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567714733476.png">1567714733476.png</a> <span class="unimportant">(1.02 MB, 884x728, <span class="postfilename">52972140_p0.png</span>)</span></p><a href="/agg/src/1567714733476.png" target="_blank"><img class="post-image" src="/agg/thumb/1567714733476.png" style="width:255px;height:210px" alt="" /></a></div>    </div>    <div class="post op" id="op_1737" ><p class="intro"><input type="checkbox" class="delete" name="delete_1737" id="delete_1737" /><label for="delete_1737"><span class="name">Anonymous</span> <time datetime="2019-09-05T20:20:03Z">09/05/19 (Thu) 20:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1737" onclick="return highlightReply(1737, event)" href="/agg/res/1737#1737">No.</a><a class="post_no" onclick="return citeReply(1737)" href="/agg/res/1737#q1737">1737</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1737">[Reply]</a></p><div class="body">Do you read the news and stuff? I just like reading about science and nature things, like new discoveries or theories.<br/><a href=https://kissu.moe/qa/res/7531.html>https://kissu.moe/qa/res/7531.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1736" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567706358966.png">1567706358966.png</a> <span class="unimportant">(912.1 KB, 1070x1500, <span class="postfilename">63482876_p0.png</span>)</span></p><a href="/agg/src/1567706358966.png" target="_blank"><img class="post-image" src="/agg/thumb/1567706358966.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1736" ><p class="intro"><input type="checkbox" class="delete" name="delete_1736" id="delete_1736" /><label for="delete_1736"><span class="name">Anonymous</span> <time datetime="2019-09-05T18:00:03Z">09/05/19 (Thu) 18:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1736" onclick="return highlightReply(1736, event)" href="/agg/res/1736#1736">No.</a><a class="post_no" onclick="return citeReply(1736)" href="/agg/res/1736#q1736">1736</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1736">[Reply]</a></p><div class="body">Why do series like Eromanga-sensei include girls aside from the main one?<br/><a href=https://kissu.moe/qa/res/7525.html>https://kissu.moe/qa/res/7525.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1735" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567688074804.png">1567688074804.png</a> <span class="unimportant">(547.55 KB, 514x633, <span class="postfilename">1477589433428.png</span>)</span></p><a href="/agg/src/1567688074804.png" target="_blank"><img class="post-image" src="/agg/thumb/1567688074804.png" style="width:207px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1735" ><p class="intro"><input type="checkbox" class="delete" name="delete_1735" id="delete_1735" /><label for="delete_1735"><span class="subject">The internet is for arguing</span> <span class="name">Anonymous</span> <time datetime="2019-09-05T12:55:03Z">09/05/19 (Thu) 12:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1735" onclick="return highlightReply(1735, event)" href="/agg/res/1735#1735">No.</a><a class="post_no" onclick="return citeReply(1735)" href="/agg/res/1735#q1735">1735</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1735">[Reply]</a></p><div class="body">When was the last time you won an internet argument? I just won one by having the last word, pointing out his contradictions and then the thread archived! That means, I won, right?<br/><a href=https://kissu.moe/qa/res/7515.html>https://kissu.moe/qa/res/7515.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1734" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567659118263.jpg">1567659118263.jpg</a> <span class="unimportant">(68.46 KB, 750x600, <span class="postfilename">NO.jpg</span>)</span></p><a href="/agg/src/1567659118263.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567659118263.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_1734" ><p class="intro"><input type="checkbox" class="delete" name="delete_1734" id="delete_1734" /><label for="delete_1734"><span class="subject">NO</span> <a class="email" href="mailto:NO"><span class="name">NO</span></a> <time datetime="2019-09-05T04:55:03Z">09/05/19 (Thu) 04:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1734" onclick="return highlightReply(1734, event)" href="/agg/res/1734#1734">No.</a><a class="post_no" onclick="return citeReply(1734)" href="/agg/res/1734#q1734">1734</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1734">[Reply]</a></p><div class="body">NO<br/><a href=https://kissu.moe/qa/res/7498.html>https://kissu.moe/qa/res/7498.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1733" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567656231549.png">1567656231549.png</a> <span class="unimportant">(60.35 KB, 320x360, <span class="postfilename">mado.png</span>)</span></p><a href="/agg/src/1567656231549.png" target="_blank"><img class="post-image" src="/agg/thumb/1567656231549.png" style="width:214px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1733" ><p class="intro"><input type="checkbox" class="delete" name="delete_1733" id="delete_1733" /><label for="delete_1733"><span class="name">Anonymous</span> <time datetime="2019-09-05T04:05:03Z">09/05/19 (Thu) 04:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1733" onclick="return highlightReply(1733, event)" href="/agg/res/1733#1733">No.</a><a class="post_no" onclick="return citeReply(1733)" href="/agg/res/1733#q1733">1733</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1733">[Reply]</a></p><div class="body">im sorry im so terrible <br/>i really am but im just a stupid fucking retard <br/>i really miss noun i miss him so much and mira i fucked everything up holy shit why am i such a stupid fucking retarded fuck wad fuck fuck fuck fuckign kill me i loved her so much i loved him so much idk<br/><a href=http://what-ch.mooo.com/what/res/2420.html>http://what-ch.mooo.com/what/res/2420.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1732" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567649141333.jpg">1567649141333.jpg</a> <span class="unimportant">(368.39 KB, 1812x1019, <span class="postfilename">trap sex.jpg</span>)</span></p><a href="/agg/src/1567649141333.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567649141333.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1732" ><p class="intro"><input type="checkbox" class="delete" name="delete_1732" id="delete_1732" /><label for="delete_1732"><span class="name">Anonymous</span> <time datetime="2019-09-05T02:10:03Z">09/05/19 (Thu) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1732" onclick="return highlightReply(1732, event)" href="/agg/res/1732#1732">No.</a><a class="post_no" onclick="return citeReply(1732)" href="/agg/res/1732#q1732">1732</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1732">[Reply]</a></p><div class="body">is this really true?<br/><a href=https://kissu.moe/qa/res/7490.html>https://kissu.moe/qa/res/7490.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1731" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567648282337.jpg">1567648282337.jpg</a> <span class="unimportant">(614.57 KB, 774x1083, <span class="postfilename" title="1f8f04bf58e18b1a766e2703af7b54a2.jpg">1f8f04bf58e18b1a766e2703af….jpg</span>)</span></p><a href="/agg/src/1567648282337.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567648282337.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1731" ><p class="intro"><input type="checkbox" class="delete" name="delete_1731" id="delete_1731" /><label for="delete_1731"><span class="name">Anonymous</span> <time datetime="2019-09-05T01:55:04Z">09/05/19 (Thu) 01:55:04</time></label>&nbsp;<a class="post_no" id="post_no_1731" onclick="return highlightReply(1731, event)" href="/agg/res/1731#1731">No.</a><a class="post_no" onclick="return citeReply(1731)" href="/agg/res/1731#q1731">1731</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1731">[Reply]</a></p><div class="body">Fluffy tails, dragon wings, and clawed hands are good and all but you know what I really like? Tentacles. Just imagine getting wrapped up in a big tight hug by two arms and eight tentacles. Soft whispers of love while her heartbeat can be felt against your chest, breasts pressing into you. Imagine getting kissed by many suction cups at once as well as a set of soft moist lips. Imagine her hypnotic ability to multitask because of her extra limbs, making her a great housewife, maid, employee, senpai, teacher, mom, anything! Envision her taking you further into the ocean to see the beauty of shallow water reefs, guiding you through a whole new world you may not have seen with your own eyes.<br/>Dream of soft tentacle lap pillows while being patted, suction cups kissing you repeatedly, a gentle hand cleaning your ears while the other one keeps you steady.<br/>Think of her possibly even being your childhood friend, she&#39;s a master at hide-and-seek. She can be anywhere, anytime, and she can hug you in over 700 different ways, and that&#39;s just with her bare hands.<br/>How great of a tutor she can be. Her intellect working wonders to help you with any school work you may struggle with. Her ability to creatively think of new solutions to old or new problems.<br/>Imagine all this and more. So much more any tentacled maiden of the sea can do. That, friends, is what I find most beautiful.<br/><a href=https://kissu.moe/qa/res/7486.html>https://kissu.moe/qa/res/7486.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1730" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567644984836.jpg">1567644984836.jpg</a> <span class="unimportant">(218.38 KB, 850x1201, <span class="postfilename" title="__hatsune_miku_rozen_maiden_and_etc_drawn_by_iren_lovel__sample-e6a84c3f7c601fc0105c59f9f83f0286.jpg">__hatsune_miku_rozen_maide….jpg</span>)</span></p><a href="/agg/src/1567644984836.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567644984836.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1730" ><p class="intro"><input type="checkbox" class="delete" name="delete_1730" id="delete_1730" /><label for="delete_1730"><span class="name">Anonymous</span> <time datetime="2019-09-05T01:00:05Z">09/05/19 (Thu) 01:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1730" onclick="return highlightReply(1730, event)" href="/agg/res/1730#1730">No.</a><a class="post_no" onclick="return citeReply(1730)" href="/agg/res/1730#q1730">1730</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1730">[Reply]</a></p><div class="body">too tired to post <br/><br/><em>(full image here <a href="https://danbooru.donmai.us/posts/3615417" rel="nofollow" target="_blank">https://danbooru.donmai.us/posts/3615417</a> )</em><br/><a href=https://kissu.moe/qa/res/7482.html>https://kissu.moe/qa/res/7482.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1729" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567633577896.jpg">1567633577896.jpg</a> <span class="unimportant">(42.91 KB, 495x507, <span class="postfilename">1448104472816.jpg</span>)</span></p><a href="/agg/src/1567633577896.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567633577896.png" style="width:235px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1729" ><p class="intro"><input type="checkbox" class="delete" name="delete_1729" id="delete_1729" /><label for="delete_1729"><span class="name">Anonymous</span> <time datetime="2019-09-04T21:50:03Z">09/04/19 (Wed) 21:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1729" onclick="return highlightReply(1729, event)" href="/agg/res/1729#1729">No.</a><a class="post_no" onclick="return citeReply(1729)" href="/agg/res/1729#q1729">1729</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1729">[Reply]</a></p><div class="body">i am only pretending to be a lonely gay loser on /what/. i am not actually one, just so you guys know.<br/><a href=http://what-ch.mooo.com/what/res/2416.html>http://what-ch.mooo.com/what/res/2416.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1728" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567631705252-0.png">1567631705252-0.png</a> <span class="unimportant">(740.34 KB, 900x1200, <span class="postfilename" title="3738ebf0ad2dad3e69b2cd8b56512caf (1).png">3738ebf0ad2dad3e69b2cd8b56….png</span>)</span></p><a href="/agg/src/1567631705252-0.png" target="_blank"><img class="post-image" src="/agg/thumb/1567631705252-0.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1728" ><p class="intro"><input type="checkbox" class="delete" name="delete_1728" id="delete_1728" /><label for="delete_1728"><span class="name">Anonymous</span> <time datetime="2019-09-04T21:20:03Z">09/04/19 (Wed) 21:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1728" onclick="return highlightReply(1728, event)" href="/agg/res/1728#1728">No.</a><a class="post_no" onclick="return citeReply(1728)" href="/agg/res/1728#q1728">1728</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1728">[Reply]</a></p><div class="body">bored and gay<br/><a href=http://what-ch.mooo.com/what/res/2415.html>http://what-ch.mooo.com/what/res/2415.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1727" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567625292756.png">1567625292756.png</a> <span class="unimportant">(54.22 KB, 1025x654, <span class="postfilename" title="49616057345bade89b0408d8b473629db188314e8c883f79d8d3fe7ef9f654af.png">49616057345bade89b0408d8b4….png</span>)</span></p><a href="/agg/src/1567625292756.png" target="_blank"><img class="post-image" src="/agg/thumb/1567625292756.png" style="width:255px;height:163px" alt="" /></a></div>    </div>    <div class="post op" id="op_1727" ><p class="intro"><input type="checkbox" class="delete" name="delete_1727" id="delete_1727" /><label for="delete_1727"><span class="name">Anonymous</span> <time datetime="2019-09-04T19:30:03Z">09/04/19 (Wed) 19:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1727" onclick="return highlightReply(1727, event)" href="/agg/res/1727#1727">No.</a><a class="post_no" onclick="return citeReply(1727)" href="/agg/res/1727#q1727">1727</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1727">[Reply]</a></p><div class="body">Bad mod.<br/><a href=https://kissu.moe/qa/res/7463.html>https://kissu.moe/qa/res/7463.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1726" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567624988330.jpg">1567624988330.jpg</a> <span class="unimportant">(38.14 KB, 673x631, <span class="postfilename">1477635746662.jpg</span>)</span></p><a href="/agg/src/1567624988330.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567624988330.png" style="width:255px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_1726" ><p class="intro"><input type="checkbox" class="delete" name="delete_1726" id="delete_1726" /><label for="delete_1726"><span class="name">Anonymous</span> <time datetime="2019-09-04T19:25:02Z">09/04/19 (Wed) 19:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1726" onclick="return highlightReply(1726, event)" href="/agg/res/1726#1726">No.</a><a class="post_no" onclick="return citeReply(1726)" href="/agg/res/1726#q1726">1726</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1726">[Reply]</a></p><div class="body">Excuse me, why was I banned?<br/><a href=https://kissu.moe/qa/res/7461.html>https://kissu.moe/qa/res/7461.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1725" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567611739534.jpg">1567611739534.jpg</a> <span class="unimportant">(278.55 KB, 1440x1584, <span class="postfilename" title="fe8a15cfc628ad93b1b7d53f5a5b8940.jpg">fe8a15cfc628ad93b1b7d53f5a….jpg</span>)</span></p><a href="/agg/src/1567611739534.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567611739534.png" style="width:232px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1725" ><p class="intro"><input type="checkbox" class="delete" name="delete_1725" id="delete_1725" /><label for="delete_1725"><span class="name">Anonymous</span> <time datetime="2019-09-04T15:45:03Z">09/04/19 (Wed) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1725" onclick="return highlightReply(1725, event)" href="/agg/res/1725#1725">No.</a><a class="post_no" onclick="return citeReply(1725)" href="/agg/res/1725#q1725">1725</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1725">[Reply]</a></p><div class="body">Couldn&#39;t drink any coffee this morning....<br/>House had no electricity when I woke up<br/><a href=https://kissu.moe/qa/res/7449.html>https://kissu.moe/qa/res/7449.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1724" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567588478179.jpg">1567588478179.jpg</a> <span class="unimportant">(137.64 KB, 550x500, <span class="postfilename" title="7452be128b27e6fa1f3ebbff1ef256fc.jpg">7452be128b27e6fa1f3ebbff1e….jpg</span>)</span></p><a href="/agg/src/1567588478179.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567588478179.png" style="width:240px;height:219px" alt="" /></a></div>    </div>    <div class="post op" id="op_1724" ><p class="intro"><input type="checkbox" class="delete" name="delete_1724" id="delete_1724" /><label for="delete_1724"><span class="name">Anonymous</span> <time datetime="2019-09-04T09:15:07Z">09/04/19 (Wed) 09:15:07</time></label>&nbsp;<a class="post_no" id="post_no_1724" onclick="return highlightReply(1724, event)" href="/agg/res/1724#1724">No.</a><a class="post_no" onclick="return citeReply(1724)" href="/agg/res/1724#q1724">1724</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1724">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2413.html>http://what-ch.mooo.com/what/res/2413.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1723" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567586940320.png">1567586940320.png</a> <span class="unimportant">(2.52 MB, 2880x1440, <span class="postfilename">Screenshot_20190904-044259.png</span>)</span></p><a href="/agg/src/1567586940320.png" target="_blank"><img class="post-image" src="/agg/thumb/1567586940320.png" style="width:240px;height:120px" alt="" /></a></div>    </div>    <div class="post op" id="op_1723" ><p class="intro"><input type="checkbox" class="delete" name="delete_1723" id="delete_1723" /><label for="delete_1723"><span class="name">Anonymous</span> <time datetime="2019-09-04T08:50:02Z">09/04/19 (Wed) 08:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1723" onclick="return highlightReply(1723, event)" href="/agg/res/1723#1723">No.</a><a class="post_no" onclick="return citeReply(1723)" href="/agg/res/1723#q1723">1723</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1723">[Reply]</a></p><div class="body">Actually pretty luck, first time I got 3 unique ssr<br/><a href=http://what-ch.mooo.com/what/res/2412.html>http://what-ch.mooo.com/what/res/2412.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1722" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567583448158.jpg">1567583448158.jpg</a> <span class="unimportant">(70.29 KB, 426x960, <span class="postfilename" title="14102732_10210357409237933_5772637030992238112_n.jpg">14102732_10210357409237933….jpg</span>)</span></p><a href="/agg/src/1567583448158.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567583448158.png" style="width:107px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1722" ><p class="intro"><input type="checkbox" class="delete" name="delete_1722" id="delete_1722" /><label for="delete_1722"><span class="name">Anonymous</span> <time datetime="2019-09-04T07:55:03Z">09/04/19 (Wed) 07:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1722" onclick="return highlightReply(1722, event)" href="/agg/res/1722#1722">No.</a><a class="post_no" onclick="return citeReply(1722)" href="/agg/res/1722#q1722">1722</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1722">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2410.html>http://what-ch.mooo.com/what/res/2410.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1721" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567583283029.jpg">1567583283029.jpg</a> <span class="unimportant">(30.09 KB, 480x360, <span class="postfilename" title="13659195_10157195390320271_6909452833482996807_n.jpg">13659195_10157195390320271….jpg</span>)</span></p><a href="/agg/src/1567583283029.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567583283029.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1721" ><p class="intro"><input type="checkbox" class="delete" name="delete_1721" id="delete_1721" /><label for="delete_1721"><span class="name">Anonymous</span> <time datetime="2019-09-04T07:50:05Z">09/04/19 (Wed) 07:50:05</time></label>&nbsp;<a class="post_no" id="post_no_1721" onclick="return highlightReply(1721, event)" href="/agg/res/1721#1721">No.</a><a class="post_no" onclick="return citeReply(1721)" href="/agg/res/1721#q1721">1721</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1721">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2407.html>http://what-ch.mooo.com/what/res/2407.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1720" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567579312091.gif">1567579312091.gif</a> <span class="unimportant">(2.19 MB, 498x281, <span class="postfilename">1565818772478.gif</span>)</span></p><a href="/agg/src/1567579312091.gif" target="_blank"><img class="post-image" src="/agg/thumb/1567579312091.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1720" ><p class="intro"><input type="checkbox" class="delete" name="delete_1720" id="delete_1720" /><label for="delete_1720"><span class="name">Anonymous</span> <time datetime="2019-09-04T06:45:02Z">09/04/19 (Wed) 06:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1720" onclick="return highlightReply(1720, event)" href="/agg/res/1720#1720">No.</a><a class="post_no" onclick="return citeReply(1720)" href="/agg/res/1720#q1720">1720</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1720">[Reply]</a></p><div class="body">THE INTERNET FUCKING EXISTS!! Ohh, god what do I do there&#39;s so much I can do on here!<br/><a href=https://kissu.moe/qa/res/7421.html>https://kissu.moe/qa/res/7421.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1719" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/sw8CxyQx4zE" allowfullscreen></iframe>    <div class="post op" id="op_1719" ><p class="intro"><input type="checkbox" class="delete" name="delete_1719" id="delete_1719" /><label for="delete_1719"><span class="name">Anonymous</span> <time datetime="2019-09-04T06:40:03Z">09/04/19 (Wed) 06:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1719" onclick="return highlightReply(1719, event)" href="/agg/res/1719#1719">No.</a><a class="post_no" onclick="return citeReply(1719)" href="/agg/res/1719#q1719">1719</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1719">[Reply]</a></p><div class="body"><span class="quote">&gt;pissu</span><br/><a href=https://kissu.moe/qa/res/7420.html>https://kissu.moe/qa/res/7420.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1718" data-board="agg">    <div class="files">    </div>    <div class="post op" id="op_1718" ><p class="intro"><input type="checkbox" class="delete" name="delete_1718" id="delete_1718" /><label for="delete_1718"><span class="subject">Touhou</span> <span class="name">Araiguma</span> <time datetime="2019-09-04T05:30:03Z">09/04/19 (Wed) 05:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1718" onclick="return highlightReply(1718, event)" href="/agg/res/1718#1718">No.</a><a class="post_no" onclick="return citeReply(1718)" href="/agg/res/1718#q1718">1718</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1718">[Reply]</a></p><div class="body">Hey guys! I have a question regarding the most powerful character in Touhou. Now this question is simply along the lines of, how much of the total Gensokyo population can they beat from a power standpoint? This isn&#39;t a question of can they be beaten, because multiple characters are unbeatable without limits on their power, ex: Koishi Komeji which can erase her presence and Sakuya Izayoi who can simply stop time forever. So simply put, who, from a power standpoint, can defeat most of Gensokyo in a battle?<br/><a href=https://kakashi-nenpo.com/jp/res/32985.html>https://kakashi-nenpo.com/jp/res/32985.html</a></div></div><br class="clear"/><hr/></div>
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
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/22" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a class="selected">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/24" method="get"><input type="submit" value="Next" /></form>
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