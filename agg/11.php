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
<input  style="display:none"  type="text"  name="user"  value="" >
<div  style="display:none"><input  type="text"  name="lastname"  value=""></div>
<input type="hidden" name="board" value="agg">
<div style="display:none"><input type="text" name="vwdrx5ukc8⚶6yftnl♑" value="c|&#120;☁&#45;&#9772;vK&#78;o&#121;&#109;☀`GQwd'&#84;i♴&#32;O☪L3&gt;l6kS9U%.♰&#49;&#86;=_&#40;8BnupZ&#38;&lt;&#93;52"></div>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="login" value="x}FKalH&#121;⛼?4&#53;{☓3&#116;&#119;&#110;&#47;'&#9804;26X⛩&#33;$%&#35;;&#104;GO8&gt;&#64;&#126;zJS^&#48;⚟I&#111;d&lt;j[&#113;(NALVfQ*bW=u &#44;)`&#114;7m&#67;|e-&#46;☰c&#38;i♛&#9943;sv:T9&#95;&#77;EP&#103;B]1Dk &#90;+">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value="" name="text">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea  name="q"  style="display:none">⛥VvG7P~ryNq}dC^&#9781;u#/&#9978;$U⛪0&#101;@&#70;m*&#41;Yc</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" name="ghndafeicmvp7w9z306421♐8lq" value="">
			
			
				<input value="" name="w☖f⛡aigq7oc" type="hidden" >
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
		<div class="thread" id="thread_1977" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569092923296.jpeg">1569092923296.jpeg</a> <span class="unimportant">(324.91 KB, 750x595, <span class="postfilename" title="2C46C37A-AF3C-4D08-A285-ADA0209B3A88.jpeg">2C46C37A-AF3C-4D08-A285-A….jpeg</span>)</span></p><a href="/agg/src/1569092923296.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569092923296.jpeg" style="width:302px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1977" ><p class="intro"><input type="checkbox" class="delete" name="delete_1977" id="delete_1977" /><label for="delete_1977"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T19:10:03Z">09/21/19 (Sat) 19:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1977" onclick="return highlightReply(1977, event)" href="/agg/res/1977#1977">No.</a><a class="post_no" onclick="return citeReply(1977)" href="/agg/res/1977#q1977">1977</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1977">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369206.html>https://gnfos.com/jp/res/369206.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1976" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091950924.png">1569091950924.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="DD2E3B0C-8A45-4D71-BA73-923384AD1379.png">DD2E3B0C-8A45-4D71-BA73-92….png</span>)</span></p><a href="/agg/src/1569091950924.png" target="_blank"><img class="post-image" src="/agg/thumb/1569091950924.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1976" ><p class="intro"><input type="checkbox" class="delete" name="delete_1976" id="delete_1976" /><label for="delete_1976"><span class="name">Tada Banri</span> <time datetime="2019-09-21T18:55:03Z">09/21/19 (Sat) 18:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1976" onclick="return highlightReply(1976, event)" href="/agg/res/1976#1976">No.</a><a class="post_no" onclick="return citeReply(1976)" href="/agg/res/1976#q1976">1976</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1976">[Reply]</a></p><div class="body">HEY PANINI<br/><a href=https://gnfos.com/jp/res/369201.html>https://gnfos.com/jp/res/369201.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1975" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091668368.png">1569091668368.png</a> <span class="unimportant">(669.27 KB, 637x900, <span class="postfilename">1569090713246.png</span>)</span></p><a href="/agg/src/1569091668368.png" target="_blank"><img class="post-image" src="/agg/thumb/1569091668368.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1975" ><p class="intro"><input type="checkbox" class="delete" name="delete_1975" id="delete_1975" /><label for="delete_1975"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T18:50:04Z">09/21/19 (Sat) 18:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1975" onclick="return highlightReply(1975, event)" href="/agg/res/1975#1975">No.</a><a class="post_no" onclick="return citeReply(1975)" href="/agg/res/1975#q1975">1975</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1975">[Reply]</a></p><div class="body">Hey boys, want some tendies?<br/><a href=https://gnfos.com/jp/res/369199.html>https://gnfos.com/jp/res/369199.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1974" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091675287.jpg">1569091675287.jpg</a> <span class="unimportant">(24.83 KB, 591x336, <span class="postfilename">1echzp.jpg</span>)</span></p><a href="/agg/src/1569091675287.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569091675287.png" style="width:255px;height:145px" alt="" /></a></div>    </div>    <div class="post op" id="op_1974" ><p class="intro"><input type="checkbox" class="delete" name="delete_1974" id="delete_1974" /><label for="delete_1974"><span class="name">Anonymous</span> <time datetime="2019-09-21T18:50:04Z">09/21/19 (Sat) 18:50:04</time></label>&nbsp;<a class="post_no" id="post_no_1974" onclick="return highlightReply(1974, event)" href="/agg/res/1974#1974">No.</a><a class="post_no" onclick="return citeReply(1974)" href="/agg/res/1974#q1974">1974</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1974">[Reply]</a></p><div class="body">What&#39;s the point of this website?<br/><a href=https://kissu.moe/qa/res/9926.html>https://kissu.moe/qa/res/9926.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1973" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569091416076.webm">1569091416076.webm</a> <span class="unimportant">(2.03 MB, 640x480, <span class="postfilename">X1 Spark Mandrill.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569091416076.webm&amp;t=X1%20Spark%20Mandrill.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569091416076.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1973" ><p class="intro"><input type="checkbox" class="delete" name="delete_1973" id="delete_1973" /><label for="delete_1973"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T18:45:04Z">09/21/19 (Sat) 18:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1973" onclick="return highlightReply(1973, event)" href="/agg/res/1973#1973">No.</a><a class="post_no" onclick="return citeReply(1973)" href="/agg/res/1973#q1973">1973</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1973">[Reply]</a></p><div class="body">What anime should I watch right now<br/><a href=https://gnfos.com/jp/res/369198.html>https://gnfos.com/jp/res/369198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1972" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569090872335.jpg">1569090872335.jpg</a> <span class="unimportant">(488.25 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 10 [720p].mkv_snapshot_03.58_[2019.09.21_14.26.14].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1569090872335.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569090872335.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1972" ><p class="intro"><input type="checkbox" class="delete" name="delete_1972" id="delete_1972" /><label for="delete_1972"><span class="name">Anonymous</span> <time datetime="2019-09-21T18:35:03Z">09/21/19 (Sat) 18:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1972" onclick="return highlightReply(1972, event)" href="/agg/res/1972#1972">No.</a><a class="post_no" onclick="return citeReply(1972)" href="/agg/res/1972#q1972">1972</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1972">[Reply]</a></p><div class="body">I&#39;m confused as to how I was supposed to feel during this montage. A somewhat emotional song played over them helping villagers we only barely met last episode escape from a large demon threat, alongside other other comedic moments. It left me more thinking about the overall quality of the anime so far and how I really haven&#39;t felt anything aside from adoration of Yue. It even caused me to realize a question I hadn&#39;t thought of yet. Why, when Nagumo supposedly knows who it was that hit him, does he show disdain towards the rest of his classmates? They weren&#39;t ever rude to him and even showed they were happy to see him again, yet he acted like they somehow were involved in what happened to him and even still doesn&#39;t want to try and help bring them back with him? I&#39;m so confused and disappointed by this anime.<br/><a href=https://kissu.moe/qa/res/9924.html>https://kissu.moe/qa/res/9924.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1971" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569089391787.png">1569089391787.png</a> <span class="unimportant">(508.85 KB, 1078x657, <span class="postfilename" title="3689724f463e68773dd954f6b43da8f2.png">3689724f463e68773dd954f6b4….png</span>)</span></p><a href="/agg/src/1569089391787.png" target="_blank"><img class="post-image" src="/agg/thumb/1569089391787.png" style="width:240px;height:147px" alt="" /></a></div>    </div>    <div class="post op" id="op_1971" ><p class="intro"><input type="checkbox" class="delete" name="delete_1971" id="delete_1971" /><label for="delete_1971"><span class="name">Anonymous</span> <time datetime="2019-09-21T18:10:03Z">09/21/19 (Sat) 18:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1971" onclick="return highlightReply(1971, event)" href="/agg/res/1971#1971">No.</a><a class="post_no" onclick="return citeReply(1971)" href="/agg/res/1971#q1971">1971</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1971">[Reply]</a></p><div class="body"><span class="quote">&gt;/what/</span><br/><a href=http://what-ch.mooo.com/what/res/2653.html>http://what-ch.mooo.com/what/res/2653.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1970" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569088435693.png">1569088435693.png</a> <span class="unimportant">(168.42 KB, 600x420, <span class="postfilename">1569084488400.png</span>)</span></p><a href="/agg/src/1569088435693.png" target="_blank"><img class="post-image" src="/agg/thumb/1569088435693.png" style="width:343px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1970" ><p class="intro"><input type="checkbox" class="delete" name="delete_1970" id="delete_1970" /><label for="delete_1970"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T17:55:04Z">09/21/19 (Sat) 17:55:04</time></label>&nbsp;<a class="post_no" id="post_no_1970" onclick="return highlightReply(1970, event)" href="/agg/res/1970#1970">No.</a><a class="post_no" onclick="return citeReply(1970)" href="/agg/res/1970#q1970">1970</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1970">[Reply]</a></p><div class="body">?<br/><a href=https://gnfos.com/jp/res/369185.html>https://gnfos.com/jp/res/369185.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1969" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569088241684.jpg">1569088241684.jpg</a> <span class="unimportant">(173.86 KB, 1920x1080, <span class="postfilename" title="preacher.s04e09.1080p.web.h264-tbs.mkv_snapshot_26.39.257.jpg">preacher.s04e09.1080p.web.….jpg</span>)</span></p><a href="/agg/src/1569088241684.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569088241684.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1969" ><p class="intro"><input type="checkbox" class="delete" name="delete_1969" id="delete_1969" /><label for="delete_1969"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T17:55:03Z">09/21/19 (Sat) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1969" onclick="return highlightReply(1969, event)" href="/agg/res/1969#1969">No.</a><a class="post_no" onclick="return citeReply(1969)" href="/agg/res/1969#q1969">1969</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1969">[Reply]</a></p><div class="body"><span class="quote">&gt;ota</span><br/><a href=https://gnfos.com/jp/res/369183.html>https://gnfos.com/jp/res/369183.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1968" data-board="agg"><div class="video-container" data-video="SPwaixIuTrU"><a href="https://youtu.be/SPwaixIuTrU" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/SPwaixIuTrU/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1968" ><p class="intro"><input type="checkbox" class="delete" name="delete_1968" id="delete_1968" /><label for="delete_1968"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T16:45:04Z">09/21/19 (Sat) 16:45:04</time></label>&nbsp;<a class="post_no" id="post_no_1968" onclick="return highlightReply(1968, event)" href="/agg/res/1968#1968">No.</a><a class="post_no" onclick="return citeReply(1968)" href="/agg/res/1968#q1968">1968</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1968">[Reply]</a></p><div class="body">HAHAHAHAHAHA JORDAN CUCKERSTEIN ON SUICIDE WATCH!!!!<br/><a href=https://gnfos.com/jp/res/369164.html>https://gnfos.com/jp/res/369164.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1967" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569084005109.png">1569084005109.png</a> <span class="unimportant">(603.45 KB, 1280x720, <span class="postfilename">1499298073296.png</span>)</span></p><a href="/agg/src/1569084005109.png" target="_blank"><img class="post-image" src="/agg/thumb/1569084005109.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1967" ><p class="intro"><input type="checkbox" class="delete" name="delete_1967" id="delete_1967" /><label for="delete_1967"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T16:45:03Z">09/21/19 (Sat) 16:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1967" onclick="return highlightReply(1967, event)" href="/agg/res/1967#1967">No.</a><a class="post_no" onclick="return citeReply(1967)" href="/agg/res/1967#q1967">1967</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1967">[Reply]</a></p><div class="body">I&#39;M A /qa/ USER!<br/>I&#39;M ACTUALLY A NEWFAG THAT CAME IN FEBRUARY FROM SOME /jp/ "SPINOFF", BUT IF YOU MENTION THAT, I&#39;LL JUST THROW MY FAVORITE BUZZWORDS AT YOU! GO BACK THERE BASED BRONY BUTTHURT SPIC FROGPOSTER CONCERNBRO! YOU&#39;RE BUTTHURT! I HOPE YOU DON&#39;T MIND IF I SPAM YOUR THREAD WITH /jp/ IMAGE MACROS WHILE SAGING WITH EVERY POST! SAGE IS NOT A DOWNVOTE BAKA! IT DOESN&#39;T MATTER IF I&#39;M SPAMMING YOUR THREAD BECAUSE I DON&#39;T LIKE IT, I&#39;M STILL POLITELY SAGING! BY THE WAY, I&#39;M SO AUTISTIC THAT I ACTUALLY GIVE A SHIT ABOUT FILENAMES! YOUR IMAGE NAME STARTS WITH "149"? YOU MUST BE A NEWFAG! GO BACK THERE! THIS IS THE 2D/RANDOM BOARD! YOU&#39;RE NOT ALLOWED TO POST NON-/jp/ SHIT HERE, BUT WE STILL CLAIM THAT YOU ARE, EVEN THOUGH WE&#39;LL SHIT UP YOUR THREAD ANYWAY! OH, YOU SAID "WE"? THERE IS A CLEARLY DEFINED GROUP OF SPINOFF FAGS, BUT WE JUST PRETEND THAT "WE" DON&#39;T EXIST! HUH? YOU WANT TO MAKE /qa/ LIKE ITS OLD SELF? TOO BAD! /qa/ IS WHERE MY FRIENDS ARE! WE 2D/RANDOM POSTERS ARE HAVING FUN! WHY DO YOU HATE FUN? GO BACK! DIE, RETARD! YOU&#39;RE BUTTHURT! YOU CAN STILL POST META THREADS! BUT IF YOU DO, YOU&#39;LL GET TOLD TO GO BACK AND DIE AFTER WE SPAM YOUR THREAD! EVERYONE I DON&#39;T LIKE IS A BASED ____BRO! YOU&#39;RE Ron Paul IF YOU DON&#39;T AGREE! LET&#39;S JUST IGNORE THE FACT THAT HE&#39;S FROM /jp/ AND ITS SPINOFFS. I POST IN JAPANESE EVEN THOUGH 4CHAN IS AN AMERICAN MADE ENGLISH SPEAKING IMAGEBOARD! BASED! MODS DON&#39;T USE THIS BOARD EVEN THOUGH THEY DO! GO TO IRC OR FEEDBACK AND GET NO HELP WHATSOEVER! EVERYONE BELOW THIS LINE IS TROLLED! SO FUCKING BASED MY /jp/BRO! T. BUTTHURT! GO BACK! SO FUCKING BASED! WE SURE DID TROLL THAT BASED DISCORDBRO FROGBRO BRONYBRO! CONCERNBRO AT IT AGAIN! SAGED! GO BACK! BACK. Back. we post in all lowercase and with no punctuation<br/>based<br/>die retard<br/>t. butthurt spic<br/>based concernbro posting them frogs<br/>basedbasedbasedbased<br/>basedbasedbasedbasedbasedbasedbasedbased<br/><a href=https://gnfos.com/jp/res/369163.html>https://gnfos.com/jp/res/369163.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1966" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569071645862.jpg">1569071645862.jpg</a> <span class="unimportant">(488.76 KB, 1100x618, <span class="postfilename">Blade-Runner.jpg</span>)</span></p><a href="/agg/src/1569071645862.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569071645862.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1966" ><p class="intro"><input type="checkbox" class="delete" name="delete_1966" id="delete_1966" /><label for="delete_1966"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-09-21T13:15:03Z">09/21/19 (Sat) 13:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1966" onclick="return highlightReply(1966, event)" href="/agg/res/1966#1966">No.</a><a class="post_no" onclick="return citeReply(1966)" href="/agg/res/1966#q1966">1966</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1966">[Reply]</a></p><div class="body">Did you like it?<br/><a href=https://gnfos.com/jp/res/369135.html>https://gnfos.com/jp/res/369135.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1965" data-board="agg"><div class="video-container" data-video="xWxYIMxpWsM"><a href="https://youtu.be/xWxYIMxpWsM" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/xWxYIMxpWsM/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1965" ><p class="intro"><input type="checkbox" class="delete" name="delete_1965" id="delete_1965" /><label for="delete_1965"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T12:25:03Z">09/21/19 (Sat) 12:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1965" onclick="return highlightReply(1965, event)" href="/agg/res/1965#1965">No.</a><a class="post_no" onclick="return citeReply(1965)" href="/agg/res/1965#q1965">1965</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1965">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369129.html>https://gnfos.com/jp/res/369129.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1964" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569050686696.png">1569050686696.png</a> <span class="unimportant">(1.16 MB, 958x1200, <span class="postfilename" title="0986123ff0b15e0ebb37c75dadeef856.png">0986123ff0b15e0ebb37c75dad….png</span>)</span></p><a href="/agg/src/1569050686696.png" target="_blank"><img class="post-image" src="/agg/thumb/1569050686696.png" style="width:204px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1964" ><p class="intro"><input type="checkbox" class="delete" name="delete_1964" id="delete_1964" /><label for="delete_1964"><span class="name">Anonymous</span> <time datetime="2019-09-21T07:25:03Z">09/21/19 (Sat) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1964" onclick="return highlightReply(1964, event)" href="/agg/res/1964#1964">No.</a><a class="post_no" onclick="return citeReply(1964)" href="/agg/res/1964#q1964">1964</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1964">[Reply]</a></p><div class="body">Greetings from gnfos.com/jPISSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS<br/><a href=https://kissu.moe/qa/res/9908.html>https://kissu.moe/qa/res/9908.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1963" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569048991774.png">1569048991774.png</a> <span class="unimportant">(3.45 MB, 1920x1440, <span class="postfilename">thumb-1920-569355.png</span>)</span></p><a href="/agg/src/1569048991774.png" target="_blank"><img class="post-image" src="/agg/thumb/1569048991774.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1963" ><p class="intro"><input type="checkbox" class="delete" name="delete_1963" id="delete_1963" /><label for="delete_1963"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-21T07:00:05Z">09/21/19 (Sat) 07:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1963" onclick="return highlightReply(1963, event)" href="/agg/res/1963#1963">No.</a><a class="post_no" onclick="return citeReply(1963)" href="/agg/res/1963#q1963">1963</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1963">[Reply]</a></p><div class="body">What are some nice images to look at?<br/><a href=https://kissu.moe/qa/res/9901.html>https://kissu.moe/qa/res/9901.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1962" data-board="agg"><div class="video-container" data-video="tDdNDZkle3A"><a href="https://youtu.be/tDdNDZkle3A" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/tDdNDZkle3A/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1962" ><p class="intro"><input type="checkbox" class="delete" name="delete_1962" id="delete_1962" /><label for="delete_1962"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T06:30:04Z">09/21/19 (Sat) 06:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1962" onclick="return highlightReply(1962, event)" href="/agg/res/1962#1962">No.</a><a class="post_no" onclick="return citeReply(1962)" href="/agg/res/1962#q1962">1962</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1962">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369119.html>https://gnfos.com/jp/res/369119.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1961" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569046827900.png">1569046827900.png</a> <span class="unimportant">(176.38 KB, 700x840, <span class="postfilename" title="__akigumo_kantai_collection_drawn_by_kawashina_momen_silicon__e2df8311293e49c25d81a103228e73af.png">__akigumo_kantai_collectio….png</span>)</span></p><a href="/agg/src/1569046827900.png" target="_blank"><img class="post-image" src="/agg/thumb/1569046827900.png" style="width:200px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1961" ><p class="intro"><input type="checkbox" class="delete" name="delete_1961" id="delete_1961" /><label for="delete_1961"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-21T06:25:03Z">09/21/19 (Sat) 06:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1961" onclick="return highlightReply(1961, event)" href="/agg/res/1961#1961">No.</a><a class="post_no" onclick="return citeReply(1961)" href="/agg/res/1961#q1961">1961</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1961">[Reply]</a></p><div class="body">Bored and gay.....<br/><a href=https://gnfos.com/jp/res/369117.html>https://gnfos.com/jp/res/369117.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1960" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569043719838.png">1569043719838.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="78180EEC-0C9D-4E26-8863-63B6003B579B.png">78180EEC-0C9D-4E26-8863-63….png</span>)</span></p><a href="/agg/src/1569043719838.png" target="_blank"><img class="post-image" src="/agg/thumb/1569043719838.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1960" ><p class="intro"><input type="checkbox" class="delete" name="delete_1960" id="delete_1960" /><label for="delete_1960"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T05:30:04Z">09/21/19 (Sat) 05:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1960" onclick="return highlightReply(1960, event)" href="/agg/res/1960#1960">No.</a><a class="post_no" onclick="return citeReply(1960)" href="/agg/res/1960#q1960">1960</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1960">[Reply]</a></p><div class="body">I AM NOT A CUCK<br/><a href=https://gnfos.com/jp/res/369115.html>https://gnfos.com/jp/res/369115.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1959" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569042389932.png">1569042389932.png</a> <span class="unimportant">(148.39 KB, 318x303, <span class="postfilename" title="8B2D86D8-8955-40B4-BCF0-F2D05152B23A.png">8B2D86D8-8955-40B4-BCF0-F2….png</span>)</span></p><a href="/agg/src/1569042389932.png" target="_blank"><img class="post-image" src="/agg/thumb/1569042389932.png" style="width:252px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1959" ><p class="intro"><input type="checkbox" class="delete" name="delete_1959" id="delete_1959" /><label for="delete_1959"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-21T05:10:03Z">09/21/19 (Sat) 05:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1959" onclick="return highlightReply(1959, event)" href="/agg/res/1959#1959">No.</a><a class="post_no" onclick="return citeReply(1959)" href="/agg/res/1959#q1959">1959</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1959">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369110.html>https://gnfos.com/jp/res/369110.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1958" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569040766218.png">1569040766218.png</a> <span class="unimportant">(712.54 KB, 1000x1100, <span class="postfilename" title="3b2abc0459051483151802125d051ff0.png">3b2abc0459051483151802125d….png</span>)</span></p><a href="/agg/src/1569040766218.png" target="_blank"><img class="post-image" src="/agg/thumb/1569040766218.png" style="width:232px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1958" ><p class="intro"><input type="checkbox" class="delete" name="delete_1958" id="delete_1958" /><label for="delete_1958"><span class="name">Anonymous</span> <time datetime="2019-09-21T04:40:03Z">09/21/19 (Sat) 04:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1958" onclick="return highlightReply(1958, event)" href="/agg/res/1958#1958">No.</a><a class="post_no" onclick="return citeReply(1958)" href="/agg/res/1958#q1958">1958</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1958">[Reply]</a></p><div class="body"><span class="quote">&gt;excuse me kissu, but where are the corndogs?</span><br/><a href=https://kissu.moe/qa/res/9801.html>https://kissu.moe/qa/res/9801.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/10" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a class="selected">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/12" method="get"><input type="submit" value="Next" /></form>
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