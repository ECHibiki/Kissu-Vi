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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-9.gif" alt="" />
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
<input type="hidden" name="qim⚭n⚤dw5ce7kv9zluobg2a3j8⚴hxrp1" value="_%]⛟Hmtn!♒Sb">
<div style="display:none"><input type="text" name="x3zg☏th85ofm0jpreka⛋y7wv6l2b1ic" value="⛻d/cq@SZ4E^\_!j[{e&lt;Fr#KLg☭6'm"></div>
<input type="hidden" name="board" value="GNFOS">
<input value="@|6CF" name="dn4b6h7♸q320♤tuy⛚raoji9fzcpkgsw1" type="hidden" >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="text" value="prJU2⛹^@z~|=Yy9A wedOM+L%1fhbW☭l_[t},mc a⚱">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" name="742oh8nbd391vmg♨qry5♐" value="dYpX⛖">
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="i⛓z576vdhc" value="⚜|uZJ;_gMXA7bK-~L$)⚢,xkd jH?63m☏h[eCR]oO(@#}i⚓sV♇%n9p'q ☂G/4z0B♖{NFY\U=!2⚯yv1ESwPa8*Q5t^fcDI&amp;⚀+l&lt;">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input value="Z&#39;CHA&#76;&#84;&#88;&#87;$&#93;mi&#124;t8 &#70; &#110;&#43;&#75;♴&#94;u.?!Y&#122;&#38;-vfSdO&#126;r&#48;⛫loIw&#98;c&#85;7&#57;[;,♮&lt;&#35;&#68;`5J1&#40;Bj3&#121;&#77;☾}4a@6kpQ⛥&#115;*x%P" name="username" type="hidden">
			
			
				<span   style="display:none"><input   type="text"   name="q"   value=""></span>
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<textarea style="display:none" name="login">⚜;!G^7#⛀'kR~P=.8bX&lt;D&amp;iHn⛛(JgeFm\:j </textarea>
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
		<div class="thread" id="thread_2390" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1567882269899.jpg">1567882269899.jpg</a> <span class="unimportant">(550.83 KB, 837x1100, <span class="postfilename" title="06c6f7e2d268b45f1bfc0ad48809d5a5.jpg">06c6f7e2d268b45f1bfc0ad488….jpg</span>)</span></p><a href="/GNFOS/src/1567882269899.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1567882269899.png" style="width:195px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2390" ><p class="intro"><input type="checkbox" class="delete" name="delete_2390" id="delete_2390" /><label for="delete_2390"><span class="name">Anonymous</span> <time datetime="2019-09-07T18:51:09Z">09/07/19 (Sat) 18:51:09</time></label>&nbsp;<a class="post_no" id="post_no_2390" onclick="return highlightReply(2390, event)" href="/GNFOS/res/2390#2390">No.</a><a class="post_no" onclick="return citeReply(2390)" href="/GNFOS/res/2390#q2390">2390</a><a href="/GNFOS/res/2390">[Reply]</a></p><div class="body">where's Trevor</div></div><div class="post reply" id="reply_2391"><p class="intro"><input type="checkbox" class="delete" name="delete_2391" id="delete_2391" /><label for="delete_2391"><span class="name">Anonymous</span> <time datetime="2019-09-07T18:59:48Z">09/07/19 (Sat) 18:59:48</time></label>&nbsp;<a class="post_no" id="post_no_2391" onclick="return highlightReply(2391, event)" href="/GNFOS/res/2390#2391">No.</a><a class="post_no" onclick="return citeReply(2391)" href="/GNFOS/res/2390#q2391">2391</a></p>        <div class="files">    </div>         <div class="body" >probably playing wow</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_2389" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1567876769194.png">1567876769194.png</a> <span class="unimportant">(622.82 KB, 696x926, <span class="postfilename" title="3326c81112633151ad4197a7597a654e.png">3326c81112633151ad4197a759….png</span>)</span></p><a href="/GNFOS/src/1567876769194.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1567876769194.png" style="width:192px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2389" ><p class="intro"><input type="checkbox" class="delete" name="delete_2389" id="delete_2389" /><label for="delete_2389"><span class="name">Anonymous</span> <time datetime="2019-09-07T17:19:29Z">09/07/19 (Sat) 17:19:29</time></label>&nbsp;<a class="post_no" id="post_no_2389" onclick="return highlightReply(2389, event)" href="/GNFOS/res/2389#2389">No.</a><a class="post_no" onclick="return citeReply(2389)" href="/GNFOS/res/2389#q2389">2389</a><a href="/GNFOS/res/2389">[Reply]</a></p><div class="body">It's down</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2388" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554268855011.png">1554268855011.png</a> <span class="unimportant">(129.3 KB, 344x407, <span class="postfilename">1498505160043.png</span>)</span></p><a href="/GNFOS/src/1554268855011.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554268855011.png" style="width:216px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2388" ><p class="intro"><input type="checkbox" class="delete" name="delete_2388" id="delete_2388" /><label for="delete_2388"><span class="name">Anonymous</span> <time datetime="2019-04-03T05:20:55Z">04/03/19 (Wed) 05:20:55</time></label>&nbsp;<a class="post_no" id="post_no_2388" onclick="return highlightReply(2388, event)" href="/GNFOS/res/2388#2388">No.</a><a class="post_no" onclick="return citeReply(2388)" href="/GNFOS/res/2388#q2388">2388</a><a href="/GNFOS/res/2388">[Reply]</a></p><div class="body">Someone pay him $10</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2387" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554146552831.png">1554146552831.png</a> <span class="unimportant">(792.63 KB, 618x736, <span class="postfilename">4n2b2goqzpx11.png</span>)</span></p><a href="/GNFOS/src/1554146552831.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554146552831.png" style="width:202px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2387" ><p class="intro"><input type="checkbox" class="delete" name="delete_2387" id="delete_2387" /><label for="delete_2387"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T19:25:03Z">04/01/19 (Mon) 19:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2387" onclick="return highlightReply(2387, event)" href="/GNFOS/res/2387#2387">No.</a><a class="post_no" onclick="return citeReply(2387)" href="/GNFOS/res/2387#q2387">2387</a><i class="fa fa-lock" title="Locked"></i><a href="/GNFOS/res/2387">[Reply]</a></p><div class="body"><a href="https://twitter.com/wikileaks/status/1112528673968664577" rel="nofollow" target="_blank">https://twitter.com/wikileaks/status/1112528673968664577</a><br/><br/>We need to unite and become one big voting bloc.<br/><a href=https://GNFOS.com/jp/res/342239.html>https://GNFOS.com/jp/res/342239.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2386" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554146092810.png">1554146092810.png</a> <span class="unimportant">(273.73 KB, 413x549, <span class="postfilename">leo.png</span>)</span></p><a href="/GNFOS/src/1554146092810.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554146092810.png" style="width:181px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2386" ><p class="intro"><input type="checkbox" class="delete" name="delete_2386" id="delete_2386" /><label for="delete_2386"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T19:15:03Z">04/01/19 (Mon) 19:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2386" onclick="return highlightReply(2386, event)" href="/GNFOS/res/2386#2386">No.</a><a class="post_no" onclick="return citeReply(2386)" href="/GNFOS/res/2386#q2386">2386</a><i class="fa fa-lock" title="Locked"></i><a href="/GNFOS/res/2386">[Reply]</a></p><div class="body">why do girls like this<br/><a href=https://GNFOS.com/jp/res/342235.html>https://GNFOS.com/jp/res/342235.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2385" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554144578858.png">1554144578858.png</a> <span class="unimportant">(73.36 KB, 1066x347, <span class="postfilename">misc 1964.png</span>)</span></p><a href="/GNFOS/src/1554144578858.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554144578858.png" style="width:427px;height:139px" alt="" /></a></div>    </div>    <div class="post op" id="op_2385" ><p class="intro"><input type="checkbox" class="delete" name="delete_2385" id="delete_2385" /><label for="delete_2385"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T18:50:03Z">04/01/19 (Mon) 18:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2385" onclick="return highlightReply(2385, event)" href="/GNFOS/res/2385#2385">No.</a><a class="post_no" onclick="return citeReply(2385)" href="/GNFOS/res/2385#q2385">2385</a><i class="fa fa-lock" title="Locked"></i><a href="/GNFOS/res/2385">[Reply]</a></p><div class="body"><span class="quote">&gt;gnfos</span><br/><a href=https://GNFOS.com/jp/res/342228.html>https://GNFOS.com/jp/res/342228.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2384" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554144337314.png">1554144337314.png</a> <span class="unimportant">(2.55 MB, 2880x1440, <span class="postfilename" title="4CE774F4-7D24-49B3-B11A-568771F5E26B.png">4CE774F4-7D24-49B3-B11A-56….png</span>)</span></p><a href="/GNFOS/src/1554144337314.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554144337314.png" style="width:427px;height:214px" alt="" /></a></div>    </div>    <div class="post op" id="op_2384" ><p class="intro"><input type="checkbox" class="delete" name="delete_2384" id="delete_2384" /><label for="delete_2384"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T18:50:03Z">04/01/19 (Mon) 18:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2384" onclick="return highlightReply(2384, event)" href="/GNFOS/res/2384#2384">No.</a><a class="post_no" onclick="return citeReply(2384)" href="/GNFOS/res/2384#q2384">2384</a><i class="fa fa-lock" title="Locked"></i><a href="/GNFOS/res/2384">[Reply]</a></p><div class="body">About to clean my closet and under my bed so my roach roommates are about to get evicted. Anyone have tips on avoiding anxieties and facing them?<br/><a href=https://GNFOS.com/jp/res/342226.html>https://GNFOS.com/jp/res/342226.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2383" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554144188806.png">1554144188806.png</a> <span class="unimportant">(549.73 KB, 720x540, <span class="postfilename">weenspermd.png</span>)</span></p><a href="/GNFOS/src/1554144188806.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554144188806.png" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2383" ><p class="intro"><input type="checkbox" class="delete" name="delete_2383" id="delete_2383" /><label for="delete_2383"><span class="name">Idiot</span> <time datetime="2019-04-01T18:45:03Z">04/01/19 (Mon) 18:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2383" onclick="return highlightReply(2383, event)" href="/GNFOS/res/2383#2383">No.</a><a class="post_no" onclick="return citeReply(2383)" href="/GNFOS/res/2383#q2383">2383</a><i class="fa fa-lock" title="Locked"></i><a href="/GNFOS/res/2383">[Reply]</a></p><div class="body">what was going through her mind?<br/><a href=https://GNFOS.com/jp/res/342225.html>https://GNFOS.com/jp/res/342225.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2381" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554141328461.jpg">1554141328461.jpg</a> <span class="unimportant">(335.43 KB, 1920x1274, <span class="postfilename">1553957064880-0.jpg</span>)</span></p><a href="/GNFOS/src/1554141328461.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554141328461.jpg" style="width:361px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2381" ><p class="intro"><input type="checkbox" class="delete" name="delete_2381" id="delete_2381" /><label for="delete_2381"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T18:00:04Z">04/01/19 (Mon) 18:00:04</time></label>&nbsp;<a class="post_no" id="post_no_2381" onclick="return highlightReply(2381, event)" href="/GNFOS/res/2381#2381">No.</a><a class="post_no" onclick="return citeReply(2381)" href="/GNFOS/res/2381#q2381">2381</a><i class="fa fa-lock" title="Locked"></i><a href="/GNFOS/res/2381">[Reply]</a></p><div class="body">merorin was here, you guys are faggots<br/><a href=https://GNFOS.com/jp/res/342220.html>https://GNFOS.com/jp/res/342220.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2380" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554135725638.jpg">1554135725638.jpg</a> <span class="unimportant">(548.76 KB, 3080x5472, <span class="postfilename">1553992430827.jpg</span>)</span></p><a href="/GNFOS/src/1554135725638.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554135725638.jpg" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2380" ><p class="intro"><input type="checkbox" class="delete" name="delete_2380" id="delete_2380" /><label for="delete_2380"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-04-01T16:25:02Z">04/01/19 (Mon) 16:25:02</time></label>&nbsp;<a class="post_no" id="post_no_2380" onclick="return highlightReply(2380, event)" href="/GNFOS/res/2380#2380">No.</a><a class="post_no" onclick="return citeReply(2380)" href="/GNFOS/res/2380#q2380">2380</a><a href="/GNFOS/res/2380">[Reply]</a></p><div class="body">Spotlight uh moonlight uh<br/><a href=https://GNFOS.com/jp/res/342201.html>https://GNFOS.com/jp/res/342201.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2379" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554135385108.png">1554135385108.png</a> <span class="unimportant">(295.2 KB, 1920x1080, <span class="postfilename" title="Screenshot_2019-04-01_18-15-39.png">Screenshot_2019-04-01_18-1….png</span>)</span></p><a href="/GNFOS/src/1554135385108.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554135385108.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2379" ><p class="intro"><input type="checkbox" class="delete" name="delete_2379" id="delete_2379" /><label for="delete_2379"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T16:20:02Z">04/01/19 (Mon) 16:20:02</time></label>&nbsp;<a class="post_no" id="post_no_2379" onclick="return highlightReply(2379, event)" href="/GNFOS/res/2379#2379">No.</a><a class="post_no" onclick="return citeReply(2379)" href="/GNFOS/res/2379#q2379">2379</a><a href="/GNFOS/res/2379">[Reply]</a></p><div class="body">Fixed your shitty site<br/><a href=https://GNFOS.com/jp/res/342198.html>https://GNFOS.com/jp/res/342198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2378" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554133798696.webm">1554133798696.webm</a> <span class="unimportant">(5.82 MB, 800x450, <span class="postfilename">god bless.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1554133798696.webm&amp;t=god%20bless.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1554133798696.webm" poster="/static/kissu-video.png" style="width:427px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2378" ><p class="intro"><input type="checkbox" class="delete" name="delete_2378" id="delete_2378" /><label for="delete_2378"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T15:50:03Z">04/01/19 (Mon) 15:50:03</time></label>&nbsp;<a class="post_no" id="post_no_2378" onclick="return highlightReply(2378, event)" href="/GNFOS/res/2378#2378">No.</a><a class="post_no" onclick="return citeReply(2378)" href="/GNFOS/res/2378#q2378">2378</a><a href="/GNFOS/res/2378">[Reply]</a></p><div class="body">Are you willing to make the ultimate sacrifice for America?<br/><a href=https://GNFOS.com/jp/res/342192.html>https://GNFOS.com/jp/res/342192.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2377" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554129616993.png">1554129616993.png</a> <span class="unimportant">(424.82 KB, 405x535, <span class="postfilename">12312313.png</span>)</span></p><a href="/GNFOS/src/1554129616993.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554129616993.png" style="width:182px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2377" ><p class="intro"><input type="checkbox" class="delete" name="delete_2377" id="delete_2377" /><label for="delete_2377"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T15:45:05Z">04/01/19 (Mon) 15:45:05</time></label>&nbsp;<a class="post_no" id="post_no_2377" onclick="return highlightReply(2377, event)" href="/GNFOS/res/2377#2377">No.</a><a class="post_no" onclick="return citeReply(2377)" href="/GNFOS/res/2377#q2377">2377</a><a href="/GNFOS/res/2377">[Reply]</a></p><div class="body">I don&#39;t feel like this place shows me enough appreciation for the funny and original high quality posts I make.<br/><a href=https://GNFOS.com/jp/res/342183.html>https://GNFOS.com/jp/res/342183.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2376" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554133146669.jpg">1554133146669.jpg</a> <span class="unimportant">(2.76 MB, 1342x1920, <span class="postfilename" title="__suzumiya_haruhi_suzumiya_haruhi_no_yuuutsu_and_etc_drawn_by_nishiya_futoshi__8b6a19d57fe68223d10115c3141d0cd6.jpg">__suzumiya_haruhi_suzumiya….jpg</span>)</span></p><a href="/GNFOS/src/1554133146669.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554133146669.jpg" style="width:168px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2376" ><p class="intro"><input type="checkbox" class="delete" name="delete_2376" id="delete_2376" /><label for="delete_2376"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T15:45:05Z">04/01/19 (Mon) 15:45:05</time></label>&nbsp;<a class="post_no" id="post_no_2376" onclick="return highlightReply(2376, event)" href="/GNFOS/res/2376#2376">No.</a><a class="post_no" onclick="return citeReply(2376)" href="/GNFOS/res/2376#q2376">2376</a><a href="/GNFOS/res/2376">[Reply]</a></p><div class="body">cummed<br/><a href=https://GNFOS.com/jp/res/342190.html>https://GNFOS.com/jp/res/342190.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2375" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554130318425.jpg">1554130318425.jpg</a> <span class="unimportant">(1.03 MB, 1475x2048, <span class="postfilename">KF Scarlett Ibis.jpg</span>)</span></p><a href="/GNFOS/src/1554130318425.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554130318425.jpg" style="width:173px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_2375" ><p class="intro"><input type="checkbox" class="delete" name="delete_2375" id="delete_2375" /><label for="delete_2375"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T15:45:04Z">04/01/19 (Mon) 15:45:04</time></label>&nbsp;<a class="post_no" id="post_no_2375" onclick="return highlightReply(2375, event)" href="/GNFOS/res/2375#2375">No.</a><a class="post_no" onclick="return citeReply(2375)" href="/GNFOS/res/2375#q2375">2375</a><a href="/GNFOS/res/2375">[Reply]</a></p><div class="body">I don&#39;t feel like this place shows me enough appreciation for the funny and original high quality posts I make.<br/><a href=https://GNFOS.com/jp/res/342185.html>https://GNFOS.com/jp/res/342185.html</a></div></div><br class="clear"/><hr/></div>
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
		Previous 		 [<a class="selected">1</a>]				 [<a href="/GNFOS/2">2</a>]				 [<a href="/GNFOS/3">3</a>]				 [<a href="/GNFOS/4">4</a>]				 [<a href="/GNFOS/5">5</a>]				 [<a href="/GNFOS/6">6</a>]				 [<a href="/GNFOS/7">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/2" method="get"><input type="submit" value="Next" /></form>
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