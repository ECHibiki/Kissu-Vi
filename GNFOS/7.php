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
			<img class="board_image" src="/static/banners/banner-kissu-25.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/GNFOS/ - Gay NEETs From Outer Space</h1>
	<div class="subtitle">
									The Neet Shall Inherit the Earth
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" value="r⚘]sQ&lt;☿}FJY$ ⛛GANU\#wOveWo:dxaT4gibH☈.*&gt;⚴9@;⛳,pZ1&amp;-'☊l!7`Vy2RnEt3k(^M⛫cm" name="ydweo♔4q738txp0z6⛝nmi1ac5fuh⚿l2s" >
<input name="⛩610aeszgx43qli7rhubn" value="39%[DA1hY )J/`CB⛚uoei2☿Zn⚸g.kIy!sGqE0*z]m$-x}7&amp;☏Wfv+rL^;j☥5{F='a\?_b⚽N4OQ:w6@PKlU&lt;♊STHtd8,R~|V☽c&gt;(" type="hidden">
<input type="hidden" name="board" value="GNFOS">
<input type="hidden" name="⚿h⚫f5n7q32b4wl9pivu♭yjmds☦0ax8czk" value="$1V⛻_uIdxmysXpA[YvHe^E&lt;&gt;L&amp;MK?:rC/+8N)S F☊TGWj}(@⛊9%#!Ow{">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<span style="display:none"><input type="text" name="7⚂int9f1hly4kduq" value="8[c@Ex`&lt;SXW&gt;T⛾|&amp;a☻$^)\]~P!*LhtGKB"></span>
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
		<div class="thread" id="thread_2295" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553890627430.png">1553890627430.png</a> <span class="unimportant">(1.1 MB, 1280x720, <span class="postfilename">mpc-hc64_NwrbiIRnrx.png</span>)</span></p><a href="/GNFOS/src/1553890627430.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553890627430.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2295" ><p class="intro"><input type="checkbox" class="delete" name="delete_2295" id="delete_2295" /><label for="delete_2295"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:18Z">03/31/19 (Sun) 22:22:18</time></label>&nbsp;<a class="post_no" id="post_no_2295" onclick="return highlightReply(2295, event)" href="/GNFOS/res/2295#2295">No.</a><a class="post_no" onclick="return citeReply(2295)" href="/GNFOS/res/2295#q2295">2295</a><a href="/GNFOS/res/2295">[Reply]</a></p><div class="body"><span class="quote">&gt;gnfos</span><br/><a href=https://gnfos.com/jp/res/341746>https://gnfos.com/jp/res/341746</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2294" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553757212073.png">1553757212073.png</a> <span class="unimportant">(120.05 KB, 225x234, <span class="postfilename">1440035171422.png</span>)</span></p><a href="/GNFOS/src/1553757212073.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553757212073.png" style="width:225px;height:234px" alt="" /></a></div>    </div>    <div class="post op" id="op_2294" ><p class="intro"><input type="checkbox" class="delete" name="delete_2294" id="delete_2294" /><label for="delete_2294"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:18Z">03/31/19 (Sun) 22:22:18</time></label>&nbsp;<a class="post_no" id="post_no_2294" onclick="return highlightReply(2294, event)" href="/GNFOS/res/2294#2294">No.</a><a class="post_no" onclick="return citeReply(2294)" href="/GNFOS/res/2294#q2294">2294</a><a href="/GNFOS/res/2294">[Reply]</a></p><div class="body">Should I steal and co-opt pissu&#39;s cytube feature just to stick it to them?<br/><br/>I noticed it during the review today.<br/><a href=https://gnfos.com/jp/res/341534>https://gnfos.com/jp/res/341534</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2293" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553877897077.png">1553877897077.png</a> <span class="unimportant">(2.55 MB, 2880x1440, <span class="postfilename" title="4186C257-DFC8-4977-812D-13F84E6623EF.png">4186C257-DFC8-4977-812D-13….png</span>)</span></p><a href="/GNFOS/src/1553877897077.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553877897077.png" style="width:427px;height:214px" alt="" /></a></div>    </div>    <div class="post op" id="op_2293" ><p class="intro"><input type="checkbox" class="delete" name="delete_2293" id="delete_2293" /><label for="delete_2293"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:17Z">03/31/19 (Sun) 22:22:17</time></label>&nbsp;<a class="post_no" id="post_no_2293" onclick="return highlightReply(2293, event)" href="/GNFOS/res/2293#2293">No.</a><a class="post_no" onclick="return citeReply(2293)" href="/GNFOS/res/2293#q2293">2293</a><a href="/GNFOS/res/2293">[Reply]</a></p><div class="body">What game is this<br/><a href=https://gnfos.com/jp/res/341712>https://gnfos.com/jp/res/341712</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2292" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553807139919.png">1553807139919.png</a> <span class="unimportant">(1001.98 KB, 720x1200, <span class="postfilename">sighh.png</span>)</span></p><a href="/GNFOS/src/1553807139919.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553807139919.png" style="width:144px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2292" ><p class="intro"><input type="checkbox" class="delete" name="delete_2292" id="delete_2292" /><label for="delete_2292"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:17Z">03/31/19 (Sun) 22:22:17</time></label>&nbsp;<a class="post_no" id="post_no_2292" onclick="return highlightReply(2292, event)" href="/GNFOS/res/2292#2292">No.</a><a class="post_no" onclick="return citeReply(2292)" href="/GNFOS/res/2292#q2292">2292</a><a href="/GNFOS/res/2292">[Reply]</a></p><div class="body">is it true its impossible to make friends when you&#39;re out of highschool<br/><a href=https://gnfos.com/jp/res/341569>https://gnfos.com/jp/res/341569</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2291" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553878849732.gif">1553878849732.gif</a> <span class="unimportant">(2.8 MB, 320x240, <span class="postfilename" title="BA97B649-76A7-46C4-A4C8-723E3EDA10A1.gif">BA97B649-76A7-46C4-A4C8-72….gif</span>)</span></p><a href="/GNFOS/src/1553878849732.gif" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553878849732.gif" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2291" ><p class="intro"><input type="checkbox" class="delete" name="delete_2291" id="delete_2291" /><label for="delete_2291"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:16Z">03/31/19 (Sun) 22:22:16</time></label>&nbsp;<a class="post_no" id="post_no_2291" onclick="return highlightReply(2291, event)" href="/GNFOS/res/2291#2291">No.</a><a class="post_no" onclick="return citeReply(2291)" href="/GNFOS/res/2291#q2291">2291</a><a href="/GNFOS/res/2291">[Reply]</a></p><div class="body">This lady on campus gave me a bag of condoms as I was walking by, they were promoting safe sex<br/><br/>Confirms I look like a normie Chad now&#128526; later incels<br/><a href=https://gnfos.com/jp/res/341721>https://gnfos.com/jp/res/341721</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2290" data-board="GNFOS"><div class="video-container" data-video="FjN-kFJI0dk"><a href="https://youtu.be/FjN-kFJI0dk" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/FjN-kFJI0dk/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2290" ><p class="intro"><input type="checkbox" class="delete" name="delete_2290" id="delete_2290" /><label for="delete_2290"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:16Z">03/31/19 (Sun) 22:22:16</time></label>&nbsp;<a class="post_no" id="post_no_2290" onclick="return highlightReply(2290, event)" href="/GNFOS/res/2290#2290">No.</a><a class="post_no" onclick="return citeReply(2290)" href="/GNFOS/res/2290#q2290">2290</a><a href="/GNFOS/res/2290">[Reply]</a></p><div class="body">h*ck yeah<br/><a href=https://gnfos.com/jp/res/341722>https://gnfos.com/jp/res/341722</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2289" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553878299227.jpg">1553878299227.jpg</a> <span class="unimportant">(95.02 KB, 820x1024, <span class="postfilename" title="__ripple_star_queen_kirby_series_and_etc_drawn_by_shiburingaru__5371dc36d706b1bbdaac915ff2cd8a1c.jpg">__ripple_star_queen_kirby_….jpg</span>)</span></p><a href="/GNFOS/src/1553878299227.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553878299227.jpg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2289" ><p class="intro"><input type="checkbox" class="delete" name="delete_2289" id="delete_2289" /><label for="delete_2289"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:16Z">03/31/19 (Sun) 22:22:16</time></label>&nbsp;<a class="post_no" id="post_no_2289" onclick="return highlightReply(2289, event)" href="/GNFOS/res/2289#2289">No.</a><a class="post_no" onclick="return citeReply(2289)" href="/GNFOS/res/2289#q2289">2289</a><a href="/GNFOS/res/2289">[Reply]</a></p><div class="body">Forced myself to wake up early today.....<br/><br/>Too tired to do anything.....<br/><a href=https://gnfos.com/jp/res/341714>https://gnfos.com/jp/res/341714</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2288" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553323962643.png">1553323962643.png</a> <span class="unimportant">(1.1 MB, 750x1334, <span class="postfilename" title="96BC5B67-EBE8-4C07-A0DD-BA5BB600AFB2.png">96BC5B67-EBE8-4C07-A0DD-BA….png</span>)</span></p><a href="/GNFOS/src/1553323962643.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553323962643.png" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2288" ><p class="intro"><input type="checkbox" class="delete" name="delete_2288" id="delete_2288" /><label for="delete_2288"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:15Z">03/31/19 (Sun) 22:22:15</time></label>&nbsp;<a class="post_no" id="post_no_2288" onclick="return highlightReply(2288, event)" href="/GNFOS/res/2288#2288">No.</a><a class="post_no" onclick="return citeReply(2288)" href="/GNFOS/res/2288#q2288">2288</a><a href="/GNFOS/res/2288">[Reply]</a></p><div class="body">Post em<br/><a href=https://gnfos.com/jp/res/340866>https://gnfos.com/jp/res/340866</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2287" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553845210496.jpeg">1553845210496.jpeg</a> <span class="unimportant">(736.47 KB, 1224x1632, <span class="postfilename" title="0D6CB699-C6A7-4297-8DB9-6AFFA530947C.jpeg">0D6CB699-C6A7-4297-8DB9-6….jpeg</span>)</span></p><a href="/GNFOS/src/1553845210496.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553845210496.jpeg" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2287" ><p class="intro"><input type="checkbox" class="delete" name="delete_2287" id="delete_2287" /><label for="delete_2287"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:15Z">03/31/19 (Sun) 22:22:15</time></label>&nbsp;<a class="post_no" id="post_no_2287" onclick="return highlightReply(2287, event)" href="/GNFOS/res/2287#2287">No.</a><a class="post_no" onclick="return citeReply(2287)" href="/GNFOS/res/2287#q2287">2287</a><a href="/GNFOS/res/2287">[Reply]</a></p><div class="body">I just realized the NSA is saving long detailed screenshots of gnfos every time Ron Paul streams<br/><a href=https://gnfos.com/jp/res/341668>https://gnfos.com/jp/res/341668</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2286" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553852462404.jpg">1553852462404.jpg</a> <span class="unimportant">(56.57 KB, 488x488, <span class="postfilename" title="GUEST_0e04d523-d626-4eba-b272-f3faedfca91f.jpg">GUEST_0e04d523-d626-4eba-b….jpg</span>)</span></p><a href="/GNFOS/src/1553852462404.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553852462404.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2286" ><p class="intro"><input type="checkbox" class="delete" name="delete_2286" id="delete_2286" /><label for="delete_2286"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:15Z">03/31/19 (Sun) 22:22:15</time></label>&nbsp;<a class="post_no" id="post_no_2286" onclick="return highlightReply(2286, event)" href="/GNFOS/res/2286#2286">No.</a><a class="post_no" onclick="return citeReply(2286)" href="/GNFOS/res/2286#q2286">2286</a><a href="/GNFOS/res/2286">[Reply]</a></p><div class="body">do you people ever get tired of posting nonsense all the time?<br/><br/>there is literally not one coherent post on here<br/><a href=https://gnfos.com/jp/res/341702>https://gnfos.com/jp/res/341702</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2285" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553847523360.jpeg">1553847523360.jpeg</a> <span class="unimportant">(59.7 KB, 523x452, <span class="postfilename" title="C0A171AF-B8C2-458F-8E8A-E3B1F54363BA.jpeg">C0A171AF-B8C2-458F-8E8A-E….jpeg</span>)</span></p><a href="/GNFOS/src/1553847523360.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553847523360.jpeg" style="width:278px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2285" ><p class="intro"><input type="checkbox" class="delete" name="delete_2285" id="delete_2285" /><label for="delete_2285"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-03-31T22:22:14Z">03/31/19 (Sun) 22:22:14</time></label>&nbsp;<a class="post_no" id="post_no_2285" onclick="return highlightReply(2285, event)" href="/GNFOS/res/2285#2285">No.</a><a class="post_no" onclick="return citeReply(2285)" href="/GNFOS/res/2285#q2285">2285</a><a href="/GNFOS/res/2285">[Reply]</a></p><div class="body">Do you think you will survive the dystopian technological cyberpunk future<br/><br/>The AI God isn&#39;t going to make it in time<br/><a href=https://gnfos.com/jp/res/341689>https://gnfos.com/jp/res/341689</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2284" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553848039440.png">1553848039440.png</a> <span class="unimportant">(55.71 KB, 340x259, <span class="postfilename" title="17CC1B28-EC70-4AFE-994A-D4A6FFF85CB3.png">17CC1B28-EC70-4AFE-994A-D4….png</span>)</span></p><a href="/GNFOS/src/1553848039440.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553848039440.png" style="width:315px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2284" ><p class="intro"><input type="checkbox" class="delete" name="delete_2284" id="delete_2284" /><label for="delete_2284"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:14Z">03/31/19 (Sun) 22:22:14</time></label>&nbsp;<a class="post_no" id="post_no_2284" onclick="return highlightReply(2284, event)" href="/GNFOS/res/2284#2284">No.</a><a class="post_no" onclick="return citeReply(2284)" href="/GNFOS/res/2284#q2284">2284</a><a href="/GNFOS/res/2284">[Reply]</a></p><div class="body">I feel like I&#39;ve gotten dumber<br/><a href=https://gnfos.com/jp/res/341693>https://gnfos.com/jp/res/341693</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2283" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553846267767.jpg">1553846267767.jpg</a> <span class="unimportant">(361.1 KB, 1000x800, <span class="postfilename">GuP Shiho.jpg</span>)</span></p><a href="/GNFOS/src/1553846267767.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553846267767.jpg" style="width:300px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2283" ><p class="intro"><input type="checkbox" class="delete" name="delete_2283" id="delete_2283" /><label for="delete_2283"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:14Z">03/31/19 (Sun) 22:22:14</time></label>&nbsp;<a class="post_no" id="post_no_2283" onclick="return highlightReply(2283, event)" href="/GNFOS/res/2283#2283">No.</a><a class="post_no" onclick="return citeReply(2283)" href="/GNFOS/res/2283#q2283">2283</a><a href="/GNFOS/res/2283">[Reply]</a></p><div class="body">Nelke and the Legendary Alchemists: Ateliers of the New World is out now brothers.<br/><a href=https://gnfos.com/jp/res/341672>https://gnfos.com/jp/res/341672</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2282" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553825870707.webm">1553825870707.webm</a> <span class="unimportant">(109.54 KB, 520x720, <span class="postfilename">tendou spin.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1553825870707.webm&amp;t=tendou%20spin.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1553825870707.webm" poster="/static/kissu-video.png" style="width:173px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2282" ><p class="intro"><input type="checkbox" class="delete" name="delete_2282" id="delete_2282" /><label for="delete_2282"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:14Z">03/31/19 (Sun) 22:22:14</time></label>&nbsp;<a class="post_no" id="post_no_2282" onclick="return highlightReply(2282, event)" href="/GNFOS/res/2282#2282">No.</a><a class="post_no" onclick="return citeReply(2282)" href="/GNFOS/res/2282#q2282">2282</a><a href="/GNFOS/res/2282">[Reply]</a></p><div class="body">what browser should i be using<br/><a href=https://gnfos.com/jp/res/341610>https://gnfos.com/jp/res/341610</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2281" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553823740189.jpg">1553823740189.jpg</a> <span class="unimportant">(14.19 KB, 208x250, <span class="postfilename">1433822368751.jpg</span>)</span></p><a href="/GNFOS/src/1553823740189.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553823740189.jpg" style="width:200px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2281" ><p class="intro"><input type="checkbox" class="delete" name="delete_2281" id="delete_2281" /><label for="delete_2281"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:13Z">03/31/19 (Sun) 22:22:13</time></label>&nbsp;<a class="post_no" id="post_no_2281" onclick="return highlightReply(2281, event)" href="/GNFOS/res/2281#2281">No.</a><a class="post_no" onclick="return citeReply(2281)" href="/GNFOS/res/2281#q2281">2281</a><a href="/GNFOS/res/2281">[Reply]</a></p><div class="body">You guys wanna know a secret...?<br/><a href=https://gnfos.com/jp/res/341603>https://gnfos.com/jp/res/341603</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/GNFOS/6" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/GNFOS/index">1</a>]				 [<a href="/GNFOS/2">2</a>]				 [<a href="/GNFOS/3">3</a>]				 [<a href="/GNFOS/4">4</a>]				 [<a href="/GNFOS/5">5</a>]				 [<a href="/GNFOS/6">6</a>]				 [<a class="selected">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/8" method="get"><input type="submit" value="Next" /></form>
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