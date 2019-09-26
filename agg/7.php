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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-14.gif" alt="" />
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
<span style="display:none"><input type="text" name="vwdrx5ukc8⚶6yftnl♑" value="c|x☁-☬vKNoym☀`GQwd'Ti♴ O☪L3&gt;l6kS9U%.♰1V=_(8BnupZ&amp;&lt;]52"></span>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<span style="display:none"><input type="text" name="login" value="x}FKalHy⛼?45{☓3twn/'♌26X⛩!$%#;hGO8&gt;@~zJS^0⚟Iod&lt;j[q(NALVfQ*bW=u ,)`r7mC|e-.☰c&amp;i♛⛗sv:T9_MEPgB]1Dk Z+"></span>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none" ><input type="text" name="text" value="" ></div >
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea name="q" style="display:none">&#9957;VvG7P~&#114;y&#78;&#113;}dC^☵u#/&#9978;$&#85;⛪&#48;&#101;@F&#109;*)Yc</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="ghndafeicmvp7w9z306421♐8lq" value="" >
			
			
				<span   style="display:none"><input   type="text"   name="w☖f⛡aigq7oc"   value=""></span>
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
		<div class="thread" id="thread_2057" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569213545685.jpg">1569213545685.jpg</a> <span class="unimportant">(24.66 KB, 333x499, <span class="postfilename">henry-ford-jews.jpg</span>)</span></p><a href="/agg/src/1569213545685.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569213545685.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2057" ><p class="intro"><input type="checkbox" class="delete" name="delete_2057" id="delete_2057" /><label for="delete_2057"><span class="name">Anonymous</span> <time datetime="2019-09-23T04:40:04Z">09/23/19 (Mon) 04:40:04</time></label>&nbsp;<a class="post_no" id="post_no_2057" onclick="return highlightReply(2057, event)" href="/agg/res/2057#2057">No.</a><a class="post_no" onclick="return citeReply(2057)" href="/agg/res/2057#q2057">2057</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2057">[Reply]</a></p><div class="body">i hate jews so god damn much<br/><a href=https://kissu.moe/qa/res/10212.html>https://kissu.moe/qa/res/10212.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2056" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569213294594.jpg">1569213294594.jpg</a> <span class="unimportant">(36.47 KB, 700x484, <span class="postfilename">weeb-worse-than-jew.jpg</span>)</span></p><a href="/agg/src/1569213294594.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569213294594.png" style="width:255px;height:176px" alt="" /></a></div>    </div>    <div class="post op" id="op_2056" ><p class="intro"><input type="checkbox" class="delete" name="delete_2056" id="delete_2056" /><label for="delete_2056"><span class="name">Anonymous</span> <time datetime="2019-09-23T04:35:03Z">09/23/19 (Mon) 04:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2056" onclick="return highlightReply(2056, event)" href="/agg/res/2056#2056">No.</a><a class="post_no" onclick="return citeReply(2056)" href="/agg/res/2056#q2056">2056</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2056">[Reply]</a></p><div class="body">Fuck Jews<br/><a href=https://kissu.moe/qa/res/10209.html>https://kissu.moe/qa/res/10209.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2055" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569211640428.jpeg">1569211640428.jpeg</a> <span class="unimportant">(224.13 KB, 659x499, <span class="postfilename" title="8A7DB1C1-4594-48EC-8608-904C8017F254.jpeg">8A7DB1C1-4594-48EC-8608-9….jpeg</span>)</span></p><a href="/agg/src/1569211640428.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569211640428.jpeg" style="width:317px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2055" ><p class="intro"><input type="checkbox" class="delete" name="delete_2055" id="delete_2055" /><label for="delete_2055"><span class="name">Idiot</span> <time datetime="2019-09-23T04:10:04Z">09/23/19 (Mon) 04:10:04</time></label>&nbsp;<a class="post_no" id="post_no_2055" onclick="return highlightReply(2055, event)" href="/agg/res/2055#2055">No.</a><a class="post_no" onclick="return citeReply(2055)" href="/agg/res/2055#q2055">2055</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2055">[Reply]</a></p><div class="body"><a href="https://instagram.com/stories/dababy/2138598940711282355" rel="nofollow" target="_blank">https://instagram.com/stories/dababy/2138598940711282355</a><br/><a href=https://gnfos.com/jp/res/369436.html>https://gnfos.com/jp/res/369436.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2054" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569208325127.png">1569208325127.png</a> <span class="unimportant">(364.24 KB, 720x481, <span class="postfilename" title="palemoon_2019-09-22_22-10-54.png">palemoon_2019-09-22_22-10-….png</span>)</span></p><a href="/agg/src/1569208325127.png" target="_blank"><img class="post-image" src="/agg/thumb/1569208325127.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_2054" ><p class="intro"><input type="checkbox" class="delete" name="delete_2054" id="delete_2054" /><label for="delete_2054"><span class="name">Anonymous</span> <time datetime="2019-09-23T03:15:08Z">09/23/19 (Mon) 03:15:08</time></label>&nbsp;<a class="post_no" id="post_no_2054" onclick="return highlightReply(2054, event)" href="/agg/res/2054#2054">No.</a><a class="post_no" onclick="return citeReply(2054)" href="/agg/res/2054#q2054">2054</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2054">[Reply]</a></p><div class="body">This thing classifies images like google or facebook:<br/><a href="https://imagenet-roulette.paglen.com/" rel="nofollow" target="_blank">https://imagenet-roulette.paglen.com/</a><br/>Obviously it&#39;s not meant to classify 2D images, but it&#39;s still kind of funny<br/>It&#39;s going down in 5 days, though, so let&#39;s enjoy it while we can<br/><a href=https://kissu.moe/qa/res/10198.html>https://kissu.moe/qa/res/10198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2053" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569207820590.jpg">1569207820590.jpg</a> <span class="unimportant">(26.09 KB, 348x373, <span class="postfilename">aidsupoiasuod.jpg</span>)</span></p><a href="/agg/src/1569207820590.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569207820590.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2053" ><p class="intro"><input type="checkbox" class="delete" name="delete_2053" id="delete_2053" /><label for="delete_2053"><span class="name">Anonymous</span> <time datetime="2019-09-23T03:05:04Z">09/23/19 (Mon) 03:05:04</time></label>&nbsp;<a class="post_no" id="post_no_2053" onclick="return highlightReply(2053, event)" href="/agg/res/2053#2053">No.</a><a class="post_no" onclick="return citeReply(2053)" href="/agg/res/2053#q2053">2053</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2053">[Reply]</a></p><div class="body">my first accounting exam is soon.<br/><br/>Oh my fuck, its coming.<br/>Fucking accounting. The course that ate me alive last time<br/>Theres not much time left to prepare<br/>Every night this week I will have to chug coffee and memorize all these accounting chapters.<br/><br/>If i dont get an A on this fucking exam, my future japanese hooker wife will marry another sugar daddy.<br/><br/>Holy Fuck dude.<br/><a href=https://kissu.moe/qa/res/10195.html>https://kissu.moe/qa/res/10195.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2052" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569206214267.jpg">1569206214267.jpg</a> <span class="unimportant">(399.08 KB, 1967x1744, <span class="postfilename">cover.jpg</span>)</span></p><a href="/agg/src/1569206214267.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569206214267.png" style="width:240px;height:213px" alt="" /></a></div>    </div>    <div class="post op" id="op_2052" ><p class="intro"><input type="checkbox" class="delete" name="delete_2052" id="delete_2052" /><label for="delete_2052"><span class="name">Anonymous</span> <time datetime="2019-09-23T02:40:05Z">09/23/19 (Mon) 02:40:05</time></label>&nbsp;<a class="post_no" id="post_no_2052" onclick="return highlightReply(2052, event)" href="/agg/res/2052#2052">No.</a><a class="post_no" onclick="return citeReply(2052)" href="/agg/res/2052#q2052">2052</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2052">[Reply]</a></p><div class="body"><a href="http://what-ch.mooo.com/up/05%20-%20Light%20Song.mp3" rel="nofollow" target="_blank">http://what-ch.mooo.com/up/05%20-%20Light%20Song.mp3</a><br/><span class="quote"><br/>&gt;fighto</span><br/><a href=http://what-ch.mooo.com/what/res/2659.html>http://what-ch.mooo.com/what/res/2659.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2051" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569205237586.png">1569205237586.png</a> <span class="unimportant">(2.64 MB, 750x1334, <span class="postfilename" title="849F93EF-CF04-4988-8517-E36CD86FB278.png">849F93EF-CF04-4988-8517-E3….png</span>)</span></p><a href="/agg/src/1569205237586.png" target="_blank"><img class="post-image" src="/agg/thumb/1569205237586.png" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2051" ><p class="intro"><input type="checkbox" class="delete" name="delete_2051" id="delete_2051" /><label for="delete_2051"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-23T02:25:04Z">09/23/19 (Mon) 02:25:04</time></label>&nbsp;<a class="post_no" id="post_no_2051" onclick="return highlightReply(2051, event)" href="/agg/res/2051#2051">No.</a><a class="post_no" onclick="return citeReply(2051)" href="/agg/res/2051#q2051">2051</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2051">[Reply]</a></p><div class="body">Wow you freaks idolize a gay man???? Wow what a bunch of homos<br/><a href=https://gnfos.com/jp/res/369432.html>https://gnfos.com/jp/res/369432.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2050" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569205175459.jpg">1569205175459.jpg</a> <span class="unimportant">(68.3 KB, 960x720, <span class="postfilename">1498234950026.jpg</span>)</span></p><a href="/agg/src/1569205175459.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569205175459.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2050" ><p class="intro"><input type="checkbox" class="delete" name="delete_2050" id="delete_2050" /><label for="delete_2050"><span class="name">Anonymous</span> <time datetime="2019-09-23T02:20:04Z">09/23/19 (Mon) 02:20:04</time></label>&nbsp;<a class="post_no" id="post_no_2050" onclick="return highlightReply(2050, event)" href="/agg/res/2050#2050">No.</a><a class="post_no" onclick="return citeReply(2050)" href="/agg/res/2050#q2050">2050</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2050">[Reply]</a></p><div class="body">WHY DO SITES HAVE YOU JUMP THROUGH MULTIPLE HOOPS TO GET A DARK MODE. MY EYES ARE FUCKING BURNING<br/><a href=https://kissu.moe/qa/res/10183.html>https://kissu.moe/qa/res/10183.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2049" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569204878915.jpg">1569204878915.jpg</a> <span class="unimportant">(207.19 KB, 600x800, <span class="postfilename" title="be6b0b97a2b303dab6a22cc0a82ec93f.jpg">be6b0b97a2b303dab6a22cc0a8….jpg</span>)</span></p><a href="/agg/src/1569204878915.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569204878915.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2049" ><p class="intro"><input type="checkbox" class="delete" name="delete_2049" id="delete_2049" /><label for="delete_2049"><span class="name">Anonymous</span> <time datetime="2019-09-23T02:15:04Z">09/23/19 (Mon) 02:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2049" onclick="return highlightReply(2049, event)" href="/agg/res/2049#2049">No.</a><a class="post_no" onclick="return citeReply(2049)" href="/agg/res/2049#q2049">2049</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2049">[Reply]</a></p><div class="body">Any fun games you&#39;ve played recently?<br/><a href=https://kissu.moe/qa/res/10182.html>https://kissu.moe/qa/res/10182.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2048" data-board="agg"><div class="video-container" data-video="1p09JkQiNSI"><a href="https://youtu.be/1p09JkQiNSI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/1p09JkQiNSI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2048" ><p class="intro"><input type="checkbox" class="delete" name="delete_2048" id="delete_2048" /><label for="delete_2048"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-23T02:10:03Z">09/23/19 (Mon) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2048" onclick="return highlightReply(2048, event)" href="/agg/res/2048#2048">No.</a><a class="post_no" onclick="return citeReply(2048)" href="/agg/res/2048#q2048">2048</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2048">[Reply]</a></p><div class="body">Loneliness is pretty unbearable, man.<br/><a href=https://gnfos.com/jp/res/369431.html>https://gnfos.com/jp/res/369431.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2047" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569204542083.jpg">1569204542083.jpg</a> <span class="unimportant">(627.08 KB, 1600x1064, <span class="postfilename">balboa.jpg</span>)</span></p><a href="/agg/src/1569204542083.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569204542083.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_2047" ><p class="intro"><input type="checkbox" class="delete" name="delete_2047" id="delete_2047" /><label for="delete_2047"><span class="name">としあき</span> <time datetime="2019-09-23T02:10:03Z">09/23/19 (Mon) 02:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2047" onclick="return highlightReply(2047, event)" href="/agg/res/2047#2047">No.</a><a class="post_no" onclick="return citeReply(2047)" href="/agg/res/2047#q2047">2047</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2047">[Reply]</a></p><div class="body"><span class="heading">Friendly greetings from <a href="https://spacechan.xyz/b/" rel="nofollow" target="_blank">https://spacechan.xyz/b/</a></span><br/><a href=https://himasugi.blog/jp/res/956312.html>https://himasugi.blog/jp/res/956312.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2046" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569204150167.jpg">1569204150167.jpg</a> <span class="unimportant">(90.48 KB, 1592x982, <span class="postfilename" title="__original_drawn_by_masuda_yousaytwosin__c4f08d6ab4338dfe2ef5a7a0385a0be9.jpg">__original_drawn_by_masuda….jpg</span>)</span></p><a href="/agg/src/1569204150167.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569204150167.png" style="width:255px;height:158px" alt="" /></a></div>    </div>    <div class="post op" id="op_2046" ><p class="intro"><input type="checkbox" class="delete" name="delete_2046" id="delete_2046" /><label for="delete_2046"><span class="name">としあき</span> <time datetime="2019-09-23T02:05:03Z">09/23/19 (Mon) 02:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2046" onclick="return highlightReply(2046, event)" href="/agg/res/2046#2046">No.</a><a class="post_no" onclick="return citeReply(2046)" href="/agg/res/2046#q2046">2046</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2046">[Reply]</a></p><div class="body"><a href=https://himasugi.blog/jp/res/956298.html>https://himasugi.blog/jp/res/956298.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2045" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569203007223.jpeg">1569203007223.jpeg</a> <span class="unimportant">(28.22 KB, 421x421, <span class="postfilename" title="59067A1D-AAA3-46F1-BCBB-4E0555BEDEC5.jpeg">59067A1D-AAA3-46F1-BCBB-4….jpeg</span>)</span></p><a href="/agg/src/1569203007223.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569203007223.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2045" ><p class="intro"><input type="checkbox" class="delete" name="delete_2045" id="delete_2045" /><label for="delete_2045"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-23T01:45:03Z">09/23/19 (Mon) 01:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2045" onclick="return highlightReply(2045, event)" href="/agg/res/2045#2045">No.</a><a class="post_no" onclick="return citeReply(2045)" href="/agg/res/2045#q2045">2045</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2045">[Reply]</a></p><div class="body">Thought so<br/><a href=https://kissu.moe/qa/res/10177.html>https://kissu.moe/qa/res/10177.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2044" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569201047123.jpg">1569201047123.jpg</a> <span class="unimportant">(127.37 KB, 960x720, <span class="postfilename" title="[EG]ZZ_Gundam_BD_44_Resub(720p)[0BDC3DBB].mkv_snapshot_14.25_[2019.06.07_13.47.04].jpg">[EG]ZZ_Gundam_BD_44_Resub(….jpg</span>)</span></p><a href="/agg/src/1569201047123.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569201047123.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2044" ><p class="intro"><input type="checkbox" class="delete" name="delete_2044" id="delete_2044" /><label for="delete_2044"><span class="name">Anonymous</span> <time datetime="2019-09-23T01:15:04Z">09/23/19 (Mon) 01:15:04</time></label>&nbsp;<a class="post_no" id="post_no_2044" onclick="return highlightReply(2044, event)" href="/agg/res/2044#2044">No.</a><a class="post_no" onclick="return citeReply(2044)" href="/agg/res/2044#q2044">2044</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2044">[Reply]</a></p><div class="body">Giant, sexy, robots<br/><a href=https://kissu.moe/qa/res/10172.html>https://kissu.moe/qa/res/10172.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2043" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569200978020.jpg">1569200978020.jpg</a> <span class="unimportant">(908.3 KB, 2000x1500, <span class="postfilename" title="c22841ee22b544c47e5ffcd34bf6ab9e.jpg">c22841ee22b544c47e5ffcd34b….jpg</span>)</span></p><a href="/agg/src/1569200978020.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569200978020.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_2043" ><p class="intro"><input type="checkbox" class="delete" name="delete_2043" id="delete_2043" /><label for="delete_2043"><span class="name">Anonymous</span> <time datetime="2019-09-23T01:10:03Z">09/23/19 (Mon) 01:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2043" onclick="return highlightReply(2043, event)" href="/agg/res/2043#2043">No.</a><a class="post_no" onclick="return citeReply(2043)" href="/agg/res/2043#q2043">2043</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2043">[Reply]</a></p><div class="body">Do you like asmr? What kind do you like? Do you like it lewd or safe? What kind of voices do you like? What kind of sounds? What kind of scenarios and characters? What kind of background noise do you prefer, if any? Do you listen to tracks from voice actors or videos from youtubers?<br/><a href=https://kissu.moe/qa/res/10171.html>https://kissu.moe/qa/res/10171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2042" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569196809296.jpg">1569196809296.jpg</a> <span class="unimportant">(549.26 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Maou-sama, Retry! - 08 [720p].mkv_snapshot_10.27_[2019.09.22_18.03.01].jpg">[HorribleSubs] Maou-sama, ….jpg</span>)</span></p><a href="/agg/src/1569196809296.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569196809296.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_2042" ><p class="intro"><input type="checkbox" class="delete" name="delete_2042" id="delete_2042" /><label for="delete_2042"><span class="name">Anonymous</span> <time datetime="2019-09-23T00:05:03Z">09/23/19 (Mon) 00:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2042" onclick="return highlightReply(2042, event)" href="/agg/res/2042#2042">No.</a><a class="post_no" onclick="return citeReply(2042)" href="/agg/res/2042#q2042">2042</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2042">[Reply]</a></p><div class="body">You ever find yourself thoughtlessly watching an anime? With your mind more or less on autopilot<br/><a href=https://kissu.moe/qa/res/10159.html>https://kissu.moe/qa/res/10159.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2041" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569195248397.jpg">1569195248397.jpg</a> <span class="unimportant">(147.15 KB, 900x1200, <span class="postfilename">EFCbkOTUcAAFJ9U.jpg</span>)</span></p><a href="/agg/src/1569195248397.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569195248397.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2041" ><p class="intro"><input type="checkbox" class="delete" name="delete_2041" id="delete_2041" /><label for="delete_2041"><span class="name">Anonymous</span> <time datetime="2019-09-22T23:35:04Z">09/22/19 (Sun) 23:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2041" onclick="return highlightReply(2041, event)" href="/agg/res/2041#2041">No.</a><a class="post_no" onclick="return citeReply(2041)" href="/agg/res/2041#q2041">2041</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2041">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2658.html>http://what-ch.mooo.com/what/res/2658.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2040" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569192631021.gif">1569192631021.gif</a> <span class="unimportant">(87.94 KB, 400x452, <span class="postfilename">1569118665148.gif</span>)</span></p><a href="/agg/src/1569192631021.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569192631021.gif" style="width:213px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2040" ><p class="intro"><input type="checkbox" class="delete" name="delete_2040" id="delete_2040" /><label for="delete_2040"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T22:55:03Z">09/22/19 (Sun) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2040" onclick="return highlightReply(2040, event)" href="/agg/res/2040#2040">No.</a><a class="post_no" onclick="return citeReply(2040)" href="/agg/res/2040#q2040">2040</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2040">[Reply]</a></p><div class="body">wtf otamin keeps banning me this is bullshit<br/><a href=https://gnfos.com/jp/res/369422.html>https://gnfos.com/jp/res/369422.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2039" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569192853651.jpeg">1569192853651.jpeg</a> <span class="unimportant">(600.4 KB, 1280x1810, <span class="postfilename" title="9959E0BA-E1F6-420F-B20E-E352DCC69C61.jpeg">9959E0BA-E1F6-420F-B20E-E….jpeg</span>)</span></p><a href="/agg/src/1569192853651.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569192853651.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2039" ><p class="intro"><input type="checkbox" class="delete" name="delete_2039" id="delete_2039" /><label for="delete_2039"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:55:03Z">09/22/19 (Sun) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2039" onclick="return highlightReply(2039, event)" href="/agg/res/2039#2039">No.</a><a class="post_no" onclick="return citeReply(2039)" href="/agg/res/2039#q2039">2039</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2039">[Reply]</a></p><div class="body">What&#39;s good pisstards<br/><a href=https://kissu.moe/qa/res/10143.html>https://kissu.moe/qa/res/10143.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2038" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569192648420.jpg">1569192648420.jpg</a> <span class="unimportant">(143.42 KB, 740x724, <span class="postfilename" title="afwkeajvqoopbmunemdefgnfcdaxyjfpdyefbijr-740.jpg">afwkeajvqoopbmunemdefgnfcd….jpg</span>)</span></p><a href="/agg/src/1569192648420.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569192648420.png" style="width:255px;height:249px" alt="" /></a></div>    </div>    <div class="post op" id="op_2038" ><p class="intro"><input type="checkbox" class="delete" name="delete_2038" id="delete_2038" /><label for="delete_2038"><span class="name">Anonymous</span> <time datetime="2019-09-22T22:55:03Z">09/22/19 (Sun) 22:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2038" onclick="return highlightReply(2038, event)" href="/agg/res/2038#2038">No.</a><a class="post_no" onclick="return citeReply(2038)" href="/agg/res/2038#q2038">2038</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2038">[Reply]</a></p><div class="body">Anyone else feel like they found the key to happiness, but when you try to force your ideals and strategies onto others, they reject you, despite the people you help, are the miserable ones?<br/><br/>i dont know, i spend a lot of my time trying to help people, and granted, a lot of the stuff i wrote in the past was useless and i was miserable myself while writing it, but there are things that have improved me, and i try to share with the world//<br/><br/>I guess you can make the argument<br/><span class="quote">&gt;well no one is going to you for answers varappi, why bother forcing your ideals everywhere</span><br/>that is true.<br/>but at the same time, i wouldnt even have any money in crypto at all, if it wasnt for a femanon on /ic/ spamming crypto propaganda in stock market thread on /biz/<br/><br/>Yet, no one seems to listen. i guess all i can do is watch the world burn.<br/><a onclick="return highlightReply(&#39;10134&#39;, event);" href="/qa/res/10134#10134">&gt;&gt;10134</a><br/>youre a fucking dyke enabler. You are the cause for the whole world going to shit. But, i am not going to stop you. i am just going to enjoy my life while i can, instead of trying to risk it helping others.<br/><a href=https://kissu.moe/qa/res/10141.html>https://kissu.moe/qa/res/10141.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/6" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a class="selected">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/8" method="get"><input type="submit" value="Next" /></form>
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