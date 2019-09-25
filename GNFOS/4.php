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
            , board_name = "GNFOS";
	          </script>

			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/trevor.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js?12"></script>
								<title>/GNFOS/ - Gay NEETs From Outer Space</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="trevor.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/static/banners/banner-kissu-1.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/GNFOS/ - Gay NEETs From Outer Space</h1>
	<div class="subtitle">
									The Neet Shall Inherit the Earth
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" name="ydweo♔4q738txp0z6⛝nmi1ac5fuh⚿l2s" value="r⚘]sQ&lt;☿}FJY$ ⛛GANU\#wOveWo:dxaT4gibH☈.*&gt;⚴9@;⛳,pZ1&amp;-'☊l!7`Vy2RnEt3k(^M⛫cm" >
<input style="display:none" type="text" value="39%[DA1hY )J/`CB⛚uoei2☿Zn⚸g.kIy!sGqE0*z]m$-x}7&amp;☏Wfv+rL^;j☥5{F='a\?_b⚽N4OQ:w6@PKlU&lt;♊STHtd8,R~|V☽c&gt;(" name="⛩610aeszgx43qli7rhubn">
<input type="hidden" name="board" value="GNFOS">
<input name="⚿h⚫f5n7q32b4wl9pivu♭yjmds☦0ax8czk" value="$1V⛻_uIdxmysXpA[YvHe^E&lt;&gt;L&amp;MK?:rC/+8N)S F☊TGWj}(@⛊9%#!Ow{" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea style="display:none" name="7⚂int9f1hly4kduq" >8[c@Ex&#96;&lt;SX&#87;&gt;&#84;⛾|&amp;a&#9787;$^)\&#93;~P&#33;*&#76;htG&#75;&#66;</textarea >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				
			</td>
		</tr>		<tr>
			<th>
				Options				
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								
			
			
				
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

<input type="hidden" name="hash" value="bbbb739ba6c12630e311c3122a6a7665377a8772">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><div style="display: inline;">  <span style="font-size: 12pt;color: #288535;">  GNFOS: <input value="415243" onclick="return change(this);" id="ctr" style="color: #288535;" type="button"> </span>  <span style=" font-size: 12pt;      color: #aa0000;     ">  OTA: <input value="0" onclick="return change2(this);     "  id="ctr2" style="color: #aa0000;     " type="button">  <input value="Twitter"  onclick="window.open(\"https://twitter.com/GNFOS1\", \"_blank\")" id="ctr5" style="color: #288535; "  type="button">  <input value="Cards" onclick="window.open(\"http://gnfos.com:8000\", \"_blank\")"id="ctr88" style="color: #aa0000;" type="button"> <input value="The Kool Klub" onclick="window.open(\"http://71.229.184.59:7777\", \"_blank\")" id="ctr8" style="color: #288535;" type="button"> <div style="margin-top:3px;">   <span style=" font-size: 11pt;      color: #288535;     "> Twitch: </span> <blink> <input value="OFFLINE" onclick="window.open(\"http://www.twitch.tv/nolife_nofriends\", \"_blan\")"  id="ctr12" style="color: #aa0000;     " type="button"> </blink>  </div>  </span></div>  <div id="hiddendiv"  style="display:none;     ">  </div>  <script type="text/javascript">  $(document).ready(function(){ $.ajax({url: "https://gnfos.com/heh.php", success: function(result){           $("#ctr").val(result);           }});  $.ajax({url: "https://gnfos.com/last2.php", success: function(result){       $("#ctr8").val(result);           }}); $.ajax({url: "https://gnfos.com/terr.php", success: function(result){       $("#ctr9").val(result);           }});  $.ajax({url: "https://gnfos.com/hah.php", success: function(result){   $("#ctr2").val(result);           }});  $.ajax({url: "https://gnfos.com/twitch.php", success: function(result){       $("#ctr12").val(result); if (result == "*****LIVE*****") {  setInterval(function(){       $("blink").each(function(){          $(this).css("visibility" , $(this).css("visibility") === "hidden" ? "" : "hidden")       });     }, 500); }      }}); });            function change( el ) {     var xmlhttp = new XMLHttpRequest();      xmlhttp.open("GET","https://gnfos.com/heheh.php",false);         xmlhttp.send();        el.value=xmlhttp.response;         }     function change2( el ) {     var xmlhttp2 = new XMLHttpRequest();      xmlhttp2.open("GET","https://gnfos.com/hahah.php",false);         xmlhttp2.send();        el.value=xmlhttp2.response;         var xmlhtp3 = new XMLHttpRequest();         xmlhtp3.open("GET","https://gnfos.com/heh.php",false);        xmlhtp3.send();        document.getElementById("ctr").value=xmlhtp3.response;        }   function change3( el ) {   var divv = document.getElementById("hiddendiv");      var rand = Math.floor((Math.random() * 71) + 1);      if (rand < 56)   var str = "<audio autoplay loop src=\"https://gnfos.com/m/\" + rand + \".mp3\" /> ";       else var str = "<audio autoplay loop src=\"https://gnfos.com/m/\" + rand + \".ogg\" /> ";      str = str.replace(/^\s+|\s+$/g,"");       divv.innerHTML = str;      el.disabled = true;       }  function updater() {     var xmlhttp = new XMLHttpRequest();     xmlhttp.open("GET","https://gnfos.com/updater.php",false);     xmlhttp.send();     return xmlhttp.response; } function updater2() {     var count = updater();     if ( (count - pCount) == 0)         return;     var newTitle = "(" + (count - pCount).toString() + ") " + pTitle;     if (document.title != newTitle) {         document.title = newTitle;};         }   </script> <noscript> <p class="unimportant" style="text-align:center;    "> Enable JS, retard.</p> </noscript></div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/GNFOS/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="GNFOS" />
		<div class="thread" id="thread_2340" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554020242552.png">1554020242552.png</a> <span class="unimportant">(1.58 MB, 1280x720, <span class="postfilename" title="[LeftWing] Kouya no Kotobuki Hikoutai - 11 [BCB3996E].mkv_snapshot_04.15_[2019.03.31_04.13.42].png">[LeftWing] Kouya no Kotobu….png</span>)</span></p><a href="/GNFOS/src/1554020242552.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554020242552.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2340" ><p class="intro"><input type="checkbox" class="delete" name="delete_2340" id="delete_2340" /><label for="delete_2340"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:34Z">03/31/19 (Sun) 22:22:34</time></label>&nbsp;<a class="post_no" id="post_no_2340" onclick="return highlightReply(2340, event)" href="/GNFOS/res/2340#2340">No.</a><a class="post_no" onclick="return citeReply(2340)" href="/GNFOS/res/2340#q2340">2340</a><a href="/GNFOS/res/2340">[Reply]</a></p><div class="body">ok this really isn&#39;t at all practical<br/><a href=https://gnfos.com/jp/res/342033>https://gnfos.com/jp/res/342033</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2339" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553986645779.webm">1553986645779.webm</a> <span class="unimportant">(1.97 MB, 1920x1080, <span class="postfilename">doggy2.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1553986645779.webm&amp;t=doggy2.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1553986645779.webm" poster="/static/kissu-video.png" style="width:427px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2339" ><p class="intro"><input type="checkbox" class="delete" name="delete_2339" id="delete_2339" /><label for="delete_2339"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:34Z">03/31/19 (Sun) 22:22:34</time></label>&nbsp;<a class="post_no" id="post_no_2339" onclick="return highlightReply(2339, event)" href="/GNFOS/res/2339#2339">No.</a><a class="post_no" onclick="return citeReply(2339)" href="/GNFOS/res/2339#q2339">2339</a><a href="/GNFOS/res/2339">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/341943>https://gnfos.com/jp/res/341943</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2338" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554018763611.jpeg">1554018763611.jpeg</a> <span class="unimportant">(392.66 KB, 1766x1488, <span class="postfilename" title="7991C9F4-AABB-494A-B197-CA5DBBEED704.jpeg">7991C9F4-AABB-494A-B197-C….jpeg</span>)</span></p><a href="/GNFOS/src/1554018763611.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554018763611.jpeg" style="width:285px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2338" ><p class="intro"><input type="checkbox" class="delete" name="delete_2338" id="delete_2338" /><label for="delete_2338"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:33Z">03/31/19 (Sun) 22:22:33</time></label>&nbsp;<a class="post_no" id="post_no_2338" onclick="return highlightReply(2338, event)" href="/GNFOS/res/2338#2338">No.</a><a class="post_no" onclick="return citeReply(2338)" href="/GNFOS/res/2338#q2338">2338</a><a href="/GNFOS/res/2338">[Reply]</a></p><div class="body">You are a slave<br/><br/><a href="https://youtu.be/eVfkW9oxhIk?t=333" rel="nofollow" target="_blank">https://youtu.be/eVfkW9oxhIk?t=333</a><br/><a href=https://gnfos.com/jp/res/342029>https://gnfos.com/jp/res/342029</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2337" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554017986860.jpg">1554017986860.jpg</a> <span class="unimportant">(85.11 KB, 544x680, <span class="postfilename" title="0bf9822a54c5760ec8e3eb2c3903614e.jpg">0bf9822a54c5760ec8e3eb2c39….jpg</span>)</span></p><a href="/GNFOS/src/1554017986860.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554017986860.jpg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2337" ><p class="intro"><input type="checkbox" class="delete" name="delete_2337" id="delete_2337" /><label for="delete_2337"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:33Z">03/31/19 (Sun) 22:22:33</time></label>&nbsp;<a class="post_no" id="post_no_2337" onclick="return highlightReply(2337, event)" href="/GNFOS/res/2337#2337">No.</a><a class="post_no" onclick="return citeReply(2337)" href="/GNFOS/res/2337#q2337">2337</a><a href="/GNFOS/res/2337">[Reply]</a></p><div class="body">Have you signed the SWEAT pledge yet?<br/><a href=https://gnfos.com/jp/res/342028>https://gnfos.com/jp/res/342028</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2336" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554010060878.png">1554010060878.png</a> <span class="unimportant">(54.54 KB, 616x243, <span class="postfilename">pte.png</span>)</span></p><a href="/GNFOS/src/1554010060878.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554010060878.png" style="width:427px;height:168px" alt="" /></a></div>    </div>    <div class="post op" id="op_2336" ><p class="intro"><input type="checkbox" class="delete" name="delete_2336" id="delete_2336" /><label for="delete_2336"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:33Z">03/31/19 (Sun) 22:22:33</time></label>&nbsp;<a class="post_no" id="post_no_2336" onclick="return highlightReply(2336, event)" href="/GNFOS/res/2336#2336">No.</a><a class="post_no" onclick="return citeReply(2336)" href="/GNFOS/res/2336#q2336">2336</a><a href="/GNFOS/res/2336">[Reply]</a></p><div class="body">Is this a joke?<br/><a href=https://gnfos.com/jp/res/342015>https://gnfos.com/jp/res/342015</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2335" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554011472926.jpg">1554011472926.jpg</a> <span class="unimportant">(658.41 KB, 1000x1525, <span class="postfilename" title="b3bc874f0fbb098e9fd605cb1ee894d8.jpg">b3bc874f0fbb098e9fd605cb1e….jpg</span>)</span></p><a href="/GNFOS/src/1554011472926.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554011472926.jpg" style="width:157px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2335" ><p class="intro"><input type="checkbox" class="delete" name="delete_2335" id="delete_2335" /><label for="delete_2335"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:32Z">03/31/19 (Sun) 22:22:32</time></label>&nbsp;<a class="post_no" id="post_no_2335" onclick="return highlightReply(2335, event)" href="/GNFOS/res/2335#2335">No.</a><a class="post_no" onclick="return citeReply(2335)" href="/GNFOS/res/2335#q2335">2335</a><a href="/GNFOS/res/2335">[Reply]</a></p><div class="body">Who do you want to kill you?<br/><a href=https://gnfos.com/jp/res/342023>https://gnfos.com/jp/res/342023</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2334" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553996241560.jpg">1553996241560.jpg</a> <span class="unimportant">(313.84 KB, 1024x768, <span class="postfilename" title="__mara_kuma_shirogane_naoto_kujikawa_rise_sato.jpg">__mara_kuma_shirogane_naot….jpg</span>)</span></p><a href="/GNFOS/src/1553996241560.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553996241560.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2334" ><p class="intro"><input type="checkbox" class="delete" name="delete_2334" id="delete_2334" /><label for="delete_2334"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:32Z">03/31/19 (Sun) 22:22:32</time></label>&nbsp;<a class="post_no" id="post_no_2334" onclick="return highlightReply(2334, event)" href="/GNFOS/res/2334#2334">No.</a><a class="post_no" onclick="return citeReply(2334)" href="/GNFOS/res/2334#q2334">2334</a><a href="/GNFOS/res/2334">[Reply]</a></p><div class="body">What&#39;s the point of life if you&#39;re not a Japanese high school girl<br/><a href=https://gnfos.com/jp/res/341968>https://gnfos.com/jp/res/341968</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2333" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553133780602.jpg">1553133780602.jpg</a> <span class="unimportant">(67.67 KB, 1280x720, <span class="postfilename">bald degenerate.jpg</span>)</span></p><a href="/GNFOS/src/1553133780602.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553133780602.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2333" ><p class="intro"><input type="checkbox" class="delete" name="delete_2333" id="delete_2333" /><label for="delete_2333"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:32Z">03/31/19 (Sun) 22:22:32</time></label>&nbsp;<a class="post_no" id="post_no_2333" onclick="return highlightReply(2333, event)" href="/GNFOS/res/2333#2333">No.</a><a class="post_no" onclick="return citeReply(2333)" href="/GNFOS/res/2333#q2333">2333</a><a href="/GNFOS/res/2333">[Reply]</a></p><div class="body">Imagine being Ron Paul LMAOOOOOOOOOOO<br/><a href=https://gnfos.com/jp/res/340591>https://gnfos.com/jp/res/340591</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2332" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554003282963.png">1554003282963.png</a> <span class="unimportant">(545.1 KB, 1200x1100, <span class="postfilename" title="__original_drawn_by_avogado6__5b65a38293083b48.png">__original_drawn_by_avogad….png</span>)</span></p><a href="/GNFOS/src/1554003282963.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554003282963.png" style="width:262px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2332" ><p class="intro"><input type="checkbox" class="delete" name="delete_2332" id="delete_2332" /><label for="delete_2332"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:31Z">03/31/19 (Sun) 22:22:31</time></label>&nbsp;<a class="post_no" id="post_no_2332" onclick="return highlightReply(2332, event)" href="/GNFOS/res/2332#2332">No.</a><a class="post_no" onclick="return citeReply(2332)" href="/GNFOS/res/2332#q2332">2332</a><a href="/GNFOS/res/2332">[Reply]</a></p><div class="body">Nature proceeds by blunders; that is its way. It is also ours. So if we have blundered by regarding consciousness as a blunder, why make a fuss over it? Our self-removal from this planet would still be a magnificent move, a feat so luminous it would bedim the sun. What do we have to lose? No evil would attend our departure from this world, and the many evils we have known would go extinct along with us. So why put off what would be the most laudable masterstroke of our existence, and the only one?<br/><a href=https://gnfos.com/jp/res/342006>https://gnfos.com/jp/res/342006</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2331" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1536557807471.jpg">1536557807471.jpg</a> <span class="unimportant">(76.07 KB, 937x579, <span class="postfilename">1532132064525.jpg</span>)</span></p><a href="/GNFOS/src/1536557807471.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1536557807471.jpg" style="width:388px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2331" ><p class="intro"><input type="checkbox" class="delete" name="delete_2331" id="delete_2331" /><label for="delete_2331"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:31Z">03/31/19 (Sun) 22:22:31</time></label>&nbsp;<a class="post_no" id="post_no_2331" onclick="return highlightReply(2331, event)" href="/GNFOS/res/2331#2331">No.</a><a class="post_no" onclick="return citeReply(2331)" href="/GNFOS/res/2331#q2331">2331</a><a href="/GNFOS/res/2331">[Reply]</a></p><div class="body"><h1 style=&#39;font-size:100pt;color:red;font-weight:bold;&#39;>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1><script>if (!test){var test = 1;var audio = new Audio(&#39;rz.mp3&#39;);audio.play();}</script><br/><a href=https://gnfos.com/jp/res/338685>https://gnfos.com/jp/res/338685</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2330" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553998472720.png">1553998472720.png</a> <span class="unimportant">(567.65 KB, 676x1000, <span class="postfilename">1444928251244.png</span>)</span></p><a href="/GNFOS/src/1553998472720.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553998472720.png" style="width:162px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2330" ><p class="intro"><input type="checkbox" class="delete" name="delete_2330" id="delete_2330" /><label for="delete_2330"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:31Z">03/31/19 (Sun) 22:22:31</time></label>&nbsp;<a class="post_no" id="post_no_2330" onclick="return highlightReply(2330, event)" href="/GNFOS/res/2330#2330">No.</a><a class="post_no" onclick="return citeReply(2330)" href="/GNFOS/res/2330#q2330">2330</a><a href="/GNFOS/res/2330">[Reply]</a></p><div class="body">review<br/><a href=https://gnfos.com/jp/res/341972>https://gnfos.com/jp/res/341972</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2329" data-board="GNFOS"><div class="video-container" data-video="9kQeGeEceys"><a href="https://youtu.be/9kQeGeEceys" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/9kQeGeEceys/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2329" ><p class="intro"><input type="checkbox" class="delete" name="delete_2329" id="delete_2329" /><label for="delete_2329"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:31Z">03/31/19 (Sun) 22:22:31</time></label>&nbsp;<a class="post_no" id="post_no_2329" onclick="return highlightReply(2329, event)" href="/GNFOS/res/2329#2329">No.</a><a class="post_no" onclick="return citeReply(2329)" href="/GNFOS/res/2329#q2329">2329</a><a href="/GNFOS/res/2329">[Reply]</a></p><div class="body">the /qa/ book<br/><a href=https://gnfos.com/jp/res/341967>https://gnfos.com/jp/res/341967</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2328" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553994861011.webm">1553994861011.webm</a> <span class="unimportant">(2.98 MB, 1280x720, <span class="postfilename">1553984163872.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1553994861011.webm&amp;t=1553984163872.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1553994861011.webm" poster="/static/kissu-video.png" style="width:427px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2328" ><p class="intro"><input type="checkbox" class="delete" name="delete_2328" id="delete_2328" /><label for="delete_2328"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:30Z">03/31/19 (Sun) 22:22:30</time></label>&nbsp;<a class="post_no" id="post_no_2328" onclick="return highlightReply(2328, event)" href="/GNFOS/res/2328#2328">No.</a><a class="post_no" onclick="return citeReply(2328)" href="/GNFOS/res/2328#q2328">2328</a><a href="/GNFOS/res/2328">[Reply]</a></p><div class="body">t sticking his hand in a random /qa/ thread<br/><a href=https://gnfos.com/jp/res/341965>https://gnfos.com/jp/res/341965</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2327" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553991938961.gif">1553991938961.gif</a> <span class="unimportant">(1.46 MB, 500x629, <span class="postfilename">1441776439510.gif</span>)</span></p><a href="/GNFOS/src/1553991938961.gif" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553991938961.gif" style="width:191px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2327" ><p class="intro"><input type="checkbox" class="delete" name="delete_2327" id="delete_2327" /><label for="delete_2327"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:30Z">03/31/19 (Sun) 22:22:30</time></label>&nbsp;<a class="post_no" id="post_no_2327" onclick="return highlightReply(2327, event)" href="/GNFOS/res/2327#2327">No.</a><a class="post_no" onclick="return citeReply(2327)" href="/GNFOS/res/2327#q2327">2327</a><a href="/GNFOS/res/2327">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/341963>https://gnfos.com/jp/res/341963</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2326" data-board="GNFOS"><div class="video-container" data-video="fZyTiTAaoyk"><a href="https://youtu.be/fZyTiTAaoyk" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/fZyTiTAaoyk/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2326" ><p class="intro"><input type="checkbox" class="delete" name="delete_2326" id="delete_2326" /><label for="delete_2326"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:30Z">03/31/19 (Sun) 22:22:30</time></label>&nbsp;<a class="post_no" id="post_no_2326" onclick="return highlightReply(2326, event)" href="/GNFOS/res/2326#2326">No.</a><a class="post_no" onclick="return citeReply(2326)" href="/GNFOS/res/2326#q2326">2326</a><a href="/GNFOS/res/2326">[Reply]</a></p><div class="body">Holy fuck&#129327;<br/><a href=https://gnfos.com/jp/res/341944>https://gnfos.com/jp/res/341944</a></div></div><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/GNFOS/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/GNFOS/3" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/GNFOS/index">1</a>]				 [<a href="/GNFOS/2">2</a>]				 [<a href="/GNFOS/3">3</a>]				 [<a class="selected">4</a>]				 [<a href="/GNFOS/5">5</a>]				 [<a href="/GNFOS/6">6</a>]				 [<a href="/GNFOS/7">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/5" method="get"><input type="submit" value="Next" /></form>
					 | <a href="/GNFOS/catalog">Catalog</a>
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