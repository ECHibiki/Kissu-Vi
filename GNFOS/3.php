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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-5.jpg" alt="" />
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
	<h1 style="padding-top:10px;">/GNFOS/ - Gay NEETs From Outer Space</h1>
	<div class="subtitle">
									The Neet Shall Inherit the Earth
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea name="qim⚭n⚤dw5ce7kv9zluobg2a3j8⚴hxrp1" style="display:none">_%]⛟Hmtn!♒Sb</textarea>
<input style="display:none" type="text" name="x3zg☏th85ofm0jpreka⛋y7wv6l2b1ic" value="⛻&#100;/cq@&#83;Z&#52;E^\_!j&#91;&#123;e&#60;Fr#KLg☭6'm">
<input type="hidden" name="board" value="GNFOS">
<input  name="dn4b6h7♸q320♤tuy⛚raoji9fzcpkgsw1"  value="&#64;|6&#67;F"  type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="text" value="prJU2⛹&#94;@z&#126;|=Y&#121;&#57;A we&#100;&#79;M&#43;L&#37;1f&#104;bW☭l_[t},&#109;&#99; a⚱"></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea style="display:none" name="742oh8nbd391vmg♨qry5♐"   >dYpX&#9942;</textarea   >
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="i⛓z576vdhc" >⚜|uZJ;&#95;g&#77;XA7&#98;&#75;&#45;~L$)⚢&#44;xkd&#32;jH?63&#109;☏h[e&#67;R]oO(@#}i⚓&#115;V&#9799;%&#110;&#57;p&#39;q &#9730;G/&#52;z&#48;&#66;♖{NFY\U&#61;!2⚯yv1ES&#119;Pa8*&#81;5t&#94;fc&#68;&#73;&amp;⚀+l&#60;</textarea >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="username" value="Z'CHALTXW$]mi|t8 F n+K♴^u.?!Yz&amp;-vfSdO~r0⛫loIwbcU79[;,♮&lt;#D`5J1(Bj3yM☾}4a@6kpQ⛥s*x%P">
			
			
				<input name="q" value="" type="hidden">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input type="hidden" value="&#9884;;!G&#94;7&#35;⛀&#39;k&#82;~P=.8&#98;X&lt;D&amp;&#105;Hn⛛(&#74;geFm\&#58;j&#32;" name="login">
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

<input type="hidden" name="hash" value="4f3f7e075e42cb7f26ce491754b01ba8e9535806">
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
				<a id="archive-link-top" href="/GNFOS/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="GNFOS" />
		<div class="thread" id="thread_2355" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554066402986.webm">1554066402986.webm</a> <span class="unimportant">(7.33 MB, 1280x720, <span class="postfilename">sekiro rager.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1554066402986.webm&amp;t=sekiro%20rager.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1554066402986.webm" poster="/static/kissu-video.png" style="width:427px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2355" ><p class="intro"><input type="checkbox" class="delete" name="delete_2355" id="delete_2355" /><label for="delete_2355"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:40Z">03/31/19 (Sun) 22:22:40</time></label>&nbsp;<a class="post_no" id="post_no_2355" onclick="return highlightReply(2355, event)" href="/GNFOS/res/2355#2355">No.</a><a class="post_no" onclick="return citeReply(2355)" href="/GNFOS/res/2355#q2355">2355</a><a href="/GNFOS/res/2355">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/342080>https://gnfos.com/jp/res/342080</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2354" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554067370582.jpg">1554067370582.jpg</a> <span class="unimportant">(1.34 MB, 1637x2041, <span class="postfilename">1554054209406.jpg</span>)</span></p><a href="/GNFOS/src/1554067370582.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554067370582.jpg" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2354" ><p class="intro"><input type="checkbox" class="delete" name="delete_2354" id="delete_2354" /><label for="delete_2354"><span class="name">/QA/ Poster</span> <time datetime="2019-03-31T22:22:39Z">03/31/19 (Sun) 22:22:39</time></label>&nbsp;<a class="post_no" id="post_no_2354" onclick="return highlightReply(2354, event)" href="/GNFOS/res/2354#2354">No.</a><a class="post_no" onclick="return citeReply(2354)" href="/GNFOS/res/2354#q2354">2354</a><a href="/GNFOS/res/2354">[Reply]</a></p><div class="body">sigh<br/>it&#39;s just not fair<br/>it&#39;s 2019 and i still can&#39;t play bloodborne<br/><a href=https://gnfos.com/jp/res/342088>https://gnfos.com/jp/res/342088</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2353" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554067124960.jpg">1554067124960.jpg</a> <span class="unimportant">(586.87 KB, 992x1404, <span class="postfilename" title="843b6bb38b568f003bd610f4be689e77.jpg">843b6bb38b568f003bd610f4be….jpg</span>)</span></p><a href="/GNFOS/src/1554067124960.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554067124960.jpg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2353" ><p class="intro"><input type="checkbox" class="delete" name="delete_2353" id="delete_2353" /><label for="delete_2353"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:39Z">03/31/19 (Sun) 22:22:39</time></label>&nbsp;<a class="post_no" id="post_no_2353" onclick="return highlightReply(2353, event)" href="/GNFOS/res/2353#2353">No.</a><a class="post_no" onclick="return citeReply(2353)" href="/GNFOS/res/2353#q2353">2353</a><a href="/GNFOS/res/2353">[Reply]</a></p><div class="body">my sole occupation in the /jp/verse<br/><a href=https://gnfos.com/jp/res/342085>https://gnfos.com/jp/res/342085</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2352" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554021876056.jpg">1554021876056.jpg</a> <span class="unimportant">(215.32 KB, 1300x1900, <span class="postfilename" title="__yanagihara_sumire_original_drawn_by_mozu_1oo__b66c0d5273db38e77d21a5ad3154d773.jpg">__yanagihara_sumire_origin….jpg</span>)</span></p><a href="/GNFOS/src/1554021876056.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554021876056.jpg" style="width:164px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2352" ><p class="intro"><input type="checkbox" class="delete" name="delete_2352" id="delete_2352" /><label for="delete_2352"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:39Z">03/31/19 (Sun) 22:22:39</time></label>&nbsp;<a class="post_no" id="post_no_2352" onclick="return highlightReply(2352, event)" href="/GNFOS/res/2352#2352">No.</a><a class="post_no" onclick="return citeReply(2352)" href="/GNFOS/res/2352#q2352">2352</a><a href="/GNFOS/res/2352">[Reply]</a></p><div class="body">diarrhea poopies<br/><a href=https://gnfos.com/jp/res/342036>https://gnfos.com/jp/res/342036</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2351" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554061061006.jpg">1554061061006.jpg</a> <span class="unimportant">(38.81 KB, 346x512, <span class="postfilename">1537376873658.jpg</span>)</span></p><a href="/GNFOS/src/1554061061006.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554061061006.jpg" style="width:162px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2351" ><p class="intro"><input type="checkbox" class="delete" name="delete_2351" id="delete_2351" /><label for="delete_2351"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:38Z">03/31/19 (Sun) 22:22:38</time></label>&nbsp;<a class="post_no" id="post_no_2351" onclick="return highlightReply(2351, event)" href="/GNFOS/res/2351#2351">No.</a><a class="post_no" onclick="return citeReply(2351)" href="/GNFOS/res/2351#q2351">2351</a><a href="/GNFOS/res/2351">[Reply]</a></p><div class="body">We are now officially further removed from the 1998 premiere of Fox&#39;s "That 70&#39;s Show" then it was from the time it was set in.<br/><a href=https://gnfos.com/jp/res/342076>https://gnfos.com/jp/res/342076</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2350" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554060723193.png">1554060723193.png</a> <span class="unimportant">(70.59 KB, 725x466, <span class="postfilename">blaeh.png</span>)</span></p><a href="/GNFOS/src/1554060723193.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554060723193.png" style="width:373px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2350" ><p class="intro"><input type="checkbox" class="delete" name="delete_2350" id="delete_2350" /><label for="delete_2350"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:38Z">03/31/19 (Sun) 22:22:38</time></label>&nbsp;<a class="post_no" id="post_no_2350" onclick="return highlightReply(2350, event)" href="/GNFOS/res/2350#2350">No.</a><a class="post_no" onclick="return citeReply(2350)" href="/GNFOS/res/2350#q2350">2350</a><a href="/GNFOS/res/2350">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/342075>https://gnfos.com/jp/res/342075</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2349" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554051508111.png">1554051508111.png</a> <span class="unimportant">(705.34 KB, 869x1776, <span class="postfilename">1508611722314.png</span>)</span></p><a href="/GNFOS/src/1554051508111.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554051508111.png" style="width:117px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2349" ><p class="intro"><input type="checkbox" class="delete" name="delete_2349" id="delete_2349" /><label for="delete_2349"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:38Z">03/31/19 (Sun) 22:22:38</time></label>&nbsp;<a class="post_no" id="post_no_2349" onclick="return highlightReply(2349, event)" href="/GNFOS/res/2349#2349">No.</a><a class="post_no" onclick="return citeReply(2349)" href="/GNFOS/res/2349#q2349">2349</a><a href="/GNFOS/res/2349">[Reply]</a></p><div class="body"><a href="https://en.wikipedia.org/wiki/Pistis_Sophia" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Pistis_Sophia</a><br/><br/>Holy fuck.<br/><a href=https://gnfos.com/jp/res/342067>https://gnfos.com/jp/res/342067</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2348" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554046632699.jpeg">1554046632699.jpeg</a> <span class="unimportant">(1.09 MB, 4032x3024, <span class="postfilename" title="DBC7B3F2-C9CE-4A0D-AFB0-E16622607943.jpeg">DBC7B3F2-C9CE-4A0D-AFB0-E….jpeg</span>)</span></p><a href="/GNFOS/src/1554046632699.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554046632699.jpeg" style="width:240px;height:320px" alt="" /></a></div>    </div>    <div class="post op" id="op_2348" ><p class="intro"><input type="checkbox" class="delete" name="delete_2348" id="delete_2348" /><label for="delete_2348"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:38Z">03/31/19 (Sun) 22:22:38</time></label>&nbsp;<a class="post_no" id="post_no_2348" onclick="return highlightReply(2348, event)" href="/GNFOS/res/2348#2348">No.</a><a class="post_no" onclick="return citeReply(2348)" href="/GNFOS/res/2348#q2348">2348</a><a href="/GNFOS/res/2348">[Reply]</a></p><div class="body">I liked this Netflix show<br/><a href=https://gnfos.com/jp/res/342053>https://gnfos.com/jp/res/342053</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2347" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554050443492.png">1554050443492.png</a> <span class="unimportant">(92.28 KB, 500x665, <span class="postfilename">1554049862968.png</span>)</span></p><a href="/GNFOS/src/1554050443492.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554050443492.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2347" ><p class="intro"><input type="checkbox" class="delete" name="delete_2347" id="delete_2347" /><label for="delete_2347"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:37Z">03/31/19 (Sun) 22:22:37</time></label>&nbsp;<a class="post_no" id="post_no_2347" onclick="return highlightReply(2347, event)" href="/GNFOS/res/2347#2347">No.</a><a class="post_no" onclick="return citeReply(2347)" href="/GNFOS/res/2347#q2347">2347</a><a href="/GNFOS/res/2347">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/342061>https://gnfos.com/jp/res/342061</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2346" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554045965413.png">1554045965413.png</a> <span class="unimportant">(372.46 KB, 1280x720, <span class="postfilename" title="113e59f811a58062f1c585e28b47c9506b14622b.png">113e59f811a58062f1c585e28b….png</span>)</span></p><a href="/GNFOS/src/1554045965413.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554045965413.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2346" ><p class="intro"><input type="checkbox" class="delete" name="delete_2346" id="delete_2346" /><label for="delete_2346"><span class="subject">anyone played Risk of Rain 2 yet?</span> <span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:37Z">03/31/19 (Sun) 22:22:37</time></label>&nbsp;<a class="post_no" id="post_no_2346" onclick="return highlightReply(2346, event)" href="/GNFOS/res/2346#2346">No.</a><a class="post_no" onclick="return citeReply(2346)" href="/GNFOS/res/2346#q2346">2346</a><a href="/GNFOS/res/2346">[Reply]</a></p><div class="body"><a href="https://store.steampowered.com/app/632360/Risk_of_Rain_2/" rel="nofollow" target="_blank">https://store.steampowered.com/app/632360/Risk_of_Rain_2/</a><br/><br/>I played it on release and was honestly surprised<br/>it was really great, but definitely feels early access. Hope they improve on it<br/><a href=https://gnfos.com/jp/res/342051>https://gnfos.com/jp/res/342051</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2345" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554050105024.png">1554050105024.png</a> <span class="unimportant">(1.16 MB, 1903x2094, <span class="postfilename">1463014881086.png</span>)</span></p><a href="/GNFOS/src/1554050105024.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554050105024.png" style="width:218px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2345" ><p class="intro"><input type="checkbox" class="delete" name="delete_2345" id="delete_2345" /><label for="delete_2345"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:37Z">03/31/19 (Sun) 22:22:37</time></label>&nbsp;<a class="post_no" id="post_no_2345" onclick="return highlightReply(2345, event)" href="/GNFOS/res/2345#2345">No.</a><a class="post_no" onclick="return citeReply(2345)" href="/GNFOS/res/2345#q2345">2345</a><a href="/GNFOS/res/2345">[Reply]</a></p><div class="body">thoughts?<br/><a href=https://gnfos.com/jp/res/342059>https://gnfos.com/jp/res/342059</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2344" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554045428798.png">1554045428798.png</a> <span class="unimportant">(8.14 MB, 3840x2160, <span class="postfilename">K.F Kaban and Serval 006 E.png</span>)</span></p><a href="/GNFOS/src/1554045428798.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554045428798.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2344" ><p class="intro"><input type="checkbox" class="delete" name="delete_2344" id="delete_2344" /><label for="delete_2344"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:36Z">03/31/19 (Sun) 22:22:36</time></label>&nbsp;<a class="post_no" id="post_no_2344" onclick="return highlightReply(2344, event)" href="/GNFOS/res/2344#2344">No.</a><a class="post_no" onclick="return citeReply(2344)" href="/GNFOS/res/2344#q2344">2344</a><a href="/GNFOS/res/2344">[Reply]</a></p><div class="body">Wauw!!!<br/><br/><a href="https://www.youtube.com/watch?v=fxPD37eHeks" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=fxPD37eHeks</a><br/><a href=https://gnfos.com/jp/res/342050>https://gnfos.com/jp/res/342050</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2343" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553914313894.mp4">1553914313894.mp4</a> <span class="unimportant">(2.91 MB, 1280x720, <span class="postfilename">break.mp4</span>)</span></p><a href="/player.php?v=/GNFOS/src/1553914313894.mp4&amp;t=break.mp4&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1553914313894.mp4" poster="/static/kissu-video.png" style="width:427px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2343" ><p class="intro"><input type="checkbox" class="delete" name="delete_2343" id="delete_2343" /><label for="delete_2343"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:35Z">03/31/19 (Sun) 22:22:35</time></label>&nbsp;<a class="post_no" id="post_no_2343" onclick="return highlightReply(2343, event)" href="/GNFOS/res/2343#2343">No.</a><a class="post_no" onclick="return citeReply(2343)" href="/GNFOS/res/2343#q2343">2343</a><a href="/GNFOS/res/2343">[Reply]</a></p><div class="body">My all time favorite clip of the /qa/ review stream<br/><a href=https://gnfos.com/jp/res/341802>https://gnfos.com/jp/res/341802</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2342" data-board="GNFOS"><div class="video-container" data-video="7-_ll1wdf1E"><a href="https://youtu.be/7-_ll1wdf1E" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/7-_ll1wdf1E/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2342" ><p class="intro"><input type="checkbox" class="delete" name="delete_2342" id="delete_2342" /><label for="delete_2342"><span class="name">/QA/ Poster</span> <time datetime="2019-03-31T22:22:35Z">03/31/19 (Sun) 22:22:35</time></label>&nbsp;<a class="post_no" id="post_no_2342" onclick="return highlightReply(2342, event)" href="/GNFOS/res/2342#2342">No.</a><a class="post_no" onclick="return citeReply(2342)" href="/GNFOS/res/2342#q2342">2342</a><a href="/GNFOS/res/2342">[Reply]</a></p><div class="body">you&#39;re not alone in not liking sachiro t<br/><a href=https://gnfos.com/jp/res/341923>https://gnfos.com/jp/res/341923</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2341" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1536032933050.jpg">1536032933050.jpg</a> <span class="unimportant">(967.2 KB, 1754x1475, <span class="postfilename">Momiji 15.jpg</span>)</span></p><a href="/GNFOS/src/1536032933050.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1536032933050.jpg" style="width:286px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2341" ><p class="intro"><input type="checkbox" class="delete" name="delete_2341" id="delete_2341" /><label for="delete_2341"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:35Z">03/31/19 (Sun) 22:22:35</time></label>&nbsp;<a class="post_no" id="post_no_2341" onclick="return highlightReply(2341, event)" href="/GNFOS/res/2341#2341">No.</a><a class="post_no" onclick="return citeReply(2341)" href="/GNFOS/res/2341#q2341">2341</a><a href="/GNFOS/res/2341">[Reply]</a></p><div class="body">My mum&#39;s mum&#39;s mum&#39;s mum&#39;s mum&#39;s maiden name was Geldschmidt. I was the Jew all along...<br/><a href=https://gnfos.com/jp/res/338384>https://gnfos.com/jp/res/338384</a></div></div><br class="clear"/><hr/></div>
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
		                <a id="archive-link-bottom" href="/GNFOS/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/GNFOS/2" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/GNFOS/index">1</a>]				 [<a href="/GNFOS/2">2</a>]				 [<a class="selected">3</a>]				 [<a href="/GNFOS/4">4</a>]				 [<a href="/GNFOS/5">5</a>]				 [<a href="/GNFOS/6">6</a>]				 [<a href="/GNFOS/7">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/4" method="get"><input type="submit" value="Next" /></form>
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