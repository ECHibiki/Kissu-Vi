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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />
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
<div style="display:none"><input type="text" name="qim⚭n⚤dw5ce7kv9zluobg2a3j8⚴hxrp1" value="_&#37;&#93;⛟Hm&#116;n!&#9810;S&#98;"></div>
<span style="display:none"><input type="text" name="x3zg☏th85ofm0jpreka⛋y7wv6l2b1ic" value="⛻d/cq@SZ4E^\_!j[{e&lt;Fr#KLg☭6'm"></span>
<input type="hidden" name="board" value="GNFOS">
<input style="display:none" type="text" name="dn4b6h7♸q320♤tuy⛚raoji9fzcpkgsw1" value="@|6C&#70;" >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="text" value="prJU2⛹^@z~|=Yy9A wedOM+L%1fhbW☭l_[t},mc a⚱"></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" name="742oh8nbd391vmg♨qry5♐" value="dYpX⛖">
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="i⛓z576vdhc" value="⚜|uZJ;_gMXA7bK-~L$)⚢,xkd jH?63m☏h[eCR]oO(@#}i⚓sV♇%n9p'q ☂G/4z0B♖{NFY\U=!2⚯yv1ESwPa8*Q5t^fcDI&amp;⚀+l&lt;">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" name="username" value="&#90;'CHA&#76;&#84;XW&#36;&#93;m&#105;|&#116;&#56; F n+&#75;♴&#94;u.?!Yz&amp;&#45;vfS&#100;O~r0⛫l&#111;IwbcU79[;&#44;♮&lt;#&#68;`5J&#49;&#40;&#66;j3&#121;&#77;☾}4a@6k&#112;Q⛥s*&#120;%P">
			
			
				<div style="display:none"><input type="text" name="q" value=""></div>
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input type="hidden" name="login" value="⚜;!G^7#⛀'kR~P=.8bX&lt;D&amp;iHn⛛(JgeFm\:j ">
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
		<div class="thread" id="thread_2374" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554114942063.jpg">1554114942063.jpg</a> <span class="unimportant">(600.88 KB, 1200x1800, <span class="postfilename" title="5d8dbf16681ff6e63d7dd807acd62fc4c075234a4871da868ddddde14f80854c.jpg">5d8dbf16681ff6e63d7dd807ac….jpg</span>)</span></p><a href="/GNFOS/src/1554114942063.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554114942063.jpg" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2374" ><p class="intro"><input type="checkbox" class="delete" name="delete_2374" id="delete_2374" /><label for="delete_2374"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T15:45:04Z">04/01/19 (Mon) 15:45:04</time></label>&nbsp;<a class="post_no" id="post_no_2374" onclick="return highlightReply(2374, event)" href="/GNFOS/res/2374#2374">No.</a><a class="post_no" onclick="return citeReply(2374)" href="/GNFOS/res/2374#q2374">2374</a><a href="/GNFOS/res/2374">[Reply]</a></p><div class="body">Why is Ron Pauler allowed to have a CP stash but I&#39;m not?<br/><a href=https://GNFOS.com/jp/res/342181.html>https://GNFOS.com/jp/res/342181.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2373" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554114747280.jpg">1554114747280.jpg</a> <span class="unimportant">(1.31 MB, 1500x2122, <span class="postfilename" title="05590a528c026538ac79be0a55884a64.jpg">05590a528c026538ac79be0a55….jpg</span>)</span></p><a href="/GNFOS/src/1554114747280.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554114747280.jpg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2373" ><p class="intro"><input type="checkbox" class="delete" name="delete_2373" id="delete_2373" /><label for="delete_2373"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T15:45:04Z">04/01/19 (Mon) 15:45:04</time></label>&nbsp;<a class="post_no" id="post_no_2373" onclick="return highlightReply(2373, event)" href="/GNFOS/res/2373#2373">No.</a><a class="post_no" onclick="return citeReply(2373)" href="/GNFOS/res/2373#q2373">2373</a><a href="/GNFOS/res/2373">[Reply]</a></p><div class="body">falling asleep...<br/><a href=https://GNFOS.com/jp/res/342179.html>https://GNFOS.com/jp/res/342179.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2372" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554112977011.jpg">1554112977011.jpg</a> <span class="unimportant">(181.14 KB, 1024x576, <span class="postfilename">1553923429217.jpg</span>)</span></p><a href="/GNFOS/src/1554112977011.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554112977011.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2372" ><p class="intro"><input type="checkbox" class="delete" name="delete_2372" id="delete_2372" /><label for="delete_2372"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T15:45:03Z">04/01/19 (Mon) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2372" onclick="return highlightReply(2372, event)" href="/GNFOS/res/2372#2372">No.</a><a class="post_no" onclick="return citeReply(2372)" href="/GNFOS/res/2372#q2372">2372</a><a href="/GNFOS/res/2372">[Reply]</a></p><div class="body">So fucking tired of this faggot mod on /gnfos/….<br/><br/>I might have to do something drastic if he keeps this shit up……..<br/><a href=https://GNFOS.com/jp/res/342175.html>https://GNFOS.com/jp/res/342175.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2371" data-board="GNFOS"><div class="video-container" data-video="GNTDq4zW3yg"><a href="https://youtu.be/GNTDq4zW3yg" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/GNTDq4zW3yg/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2371" ><p class="intro"><input type="checkbox" class="delete" name="delete_2371" id="delete_2371" /><label for="delete_2371"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T15:45:03Z">04/01/19 (Mon) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2371" onclick="return highlightReply(2371, event)" href="/GNFOS/res/2371#2371">No.</a><a class="post_no" onclick="return citeReply(2371)" href="/GNFOS/res/2371#q2371">2371</a><a href="/GNFOS/res/2371">[Reply]</a></p><div class="body">The Rose of Versailles<br/><a href=https://GNFOS.com/jp/res/342174.html>https://GNFOS.com/jp/res/342174.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2370" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554106074639.jpeg">1554106074639.jpeg</a> <span class="unimportant">(173.58 KB, 950x712, <span class="postfilename" title="6BACFFAB-C16A-417C-A14B-17ABE6A004D1.jpeg">6BACFFAB-C16A-417C-A14B-1….jpeg</span>)</span></p><a href="/GNFOS/src/1554106074639.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554106074639.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2370" ><p class="intro"><input type="checkbox" class="delete" name="delete_2370" id="delete_2370" /><label for="delete_2370"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T15:45:03Z">04/01/19 (Mon) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2370" onclick="return highlightReply(2370, event)" href="/GNFOS/res/2370#2370">No.</a><a class="post_no" onclick="return citeReply(2370)" href="/GNFOS/res/2370#q2370">2370</a><a href="/GNFOS/res/2370">[Reply]</a></p><div class="body">Tap water is so gross<br/><a href=https://GNFOS.com/jp/res/342166.html>https://GNFOS.com/jp/res/342166.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2366" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554101396750.jpeg">1554101396750.jpeg</a> <span class="unimportant">(134.06 KB, 598x900, <span class="postfilename" title="93164948-1749-44A3-A202-9C56FD59362A.jpeg">93164948-1749-44A3-A202-9….jpeg</span>)</span></p><a href="/GNFOS/src/1554101396750.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554101396750.jpeg" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2366" ><p class="intro"><input type="checkbox" class="delete" name="delete_2366" id="delete_2366" /><label for="delete_2366"><span class="name">Diarrhea Dan</span> <time datetime="2019-04-01T06:50:02Z">04/01/19 (Mon) 06:50:02</time></label>&nbsp;<a class="post_no" id="post_no_2366" onclick="return highlightReply(2366, event)" href="/GNFOS/res/2366#2366">No.</a><a class="post_no" onclick="return citeReply(2366)" href="/GNFOS/res/2366#q2366">2366</a><a href="/GNFOS/res/2366">[Reply]</a></p><div class="body">I need help<br/><a href=https://gnfos.com/jp/res/342160>https://gnfos.com/jp/res/342160</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2365" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554099108921.jpg">1554099108921.jpg</a> <span class="unimportant">(193.28 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Mahou Shoujo Tokushusen Asuka - 12 [1080p].mkv_snapshot_09.16_[2019.03.31_20.56.34].jpg">[HorribleSubs] Mahou Shouj….jpg</span>)</span></p><a href="/GNFOS/src/1554099108921.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554099108921.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2365" ><p class="intro"><input type="checkbox" class="delete" name="delete_2365" id="delete_2365" /><label for="delete_2365"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-04-01T06:12:02Z">04/01/19 (Mon) 06:12:02</time></label>&nbsp;<a class="post_no" id="post_no_2365" onclick="return highlightReply(2365, event)" href="/GNFOS/res/2365#2365">No.</a><a class="post_no" onclick="return citeReply(2365)" href="/GNFOS/res/2365#q2365">2365</a><a href="/GNFOS/res/2365">[Reply]</a></p><div class="body">WAN WAN<br/><a href=https://gnfos.com/jp/res/342158>https://gnfos.com/jp/res/342158</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2363" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554090643481.jpg">1554090643481.jpg</a> <span class="unimportant">(1.15 MB, 1200x1200, <span class="postfilename">1347226418.21076422.jpg</span>)</span></p><a href="/GNFOS/src/1554090643481.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554090643481.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2363" ><p class="intro"><input type="checkbox" class="delete" name="delete_2363" id="delete_2363" /><label for="delete_2363"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T03:51:01Z">04/01/19 (Mon) 03:51:01</time></label>&nbsp;<a class="post_no" id="post_no_2363" onclick="return highlightReply(2363, event)" href="/GNFOS/res/2363#2363">No.</a><a class="post_no" onclick="return citeReply(2363)" href="/GNFOS/res/2363#q2363">2363</a><a href="/GNFOS/res/2363">[Reply]</a></p><div class="body">It&#39;s up<br/><a href="https://kissu.moe/GNFOS" rel="nofollow" target="_blank">https://kissu.moe/GNFOS</a><br/><a href=https://gnfos.com/jp/res/342144>https://gnfos.com/jp/res/342144</a></div></div><div class="post reply" id="reply_2364"><p class="intro"><input type="checkbox" class="delete" name="delete_2364" id="delete_2364" /><label for="delete_2364"><span class="name">Anonymous</span> <time datetime="2019-04-01T03:58:17Z">04/01/19 (Mon) 03:58:17</time></label>&nbsp;<a class="post_no" id="post_no_2364" onclick="return highlightReply(2364, event)" href="/GNFOS/res/2363#2364">No.</a><a class="post_no" onclick="return citeReply(2364)" href="/GNFOS/res/2363#q2364">2364</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554091097076.png">1554091097076.png</a> <span class="unimportant">(788.68 KB, 880x850, <span class="postfilename">1404029409134.png</span>)</span></p><a href="/GNFOS/src/1554091097076.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554091097076.png" style="width:175px;height:169px" alt="" /></a></div>    </div>         <div class="body" >what the HECK is going on</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_2362" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554090166789.jpeg">1554090166789.jpeg</a> <span class="unimportant">(2.29 MB, 2541x3276, <span class="postfilename" title="967B40D6-C6FD-44A4-8119-73589E9AFE47.jpeg">967B40D6-C6FD-44A4-8119-7….jpeg</span>)</span></p><a href="/GNFOS/src/1554090166789.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554090166789.jpeg" style="width:186px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2362" ><p class="intro"><input type="checkbox" class="delete" name="delete_2362" id="delete_2362" /><label for="delete_2362"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T03:43:06Z">04/01/19 (Mon) 03:43:06</time></label>&nbsp;<a class="post_no" id="post_no_2362" onclick="return highlightReply(2362, event)" href="/GNFOS/res/2362#2362">No.</a><a class="post_no" onclick="return citeReply(2362)" href="/GNFOS/res/2362#q2362">2362</a><a href="/GNFOS/res/2362">[Reply]</a></p><div class="body">Who bipolar here? I&#39;m having a panic attach<br/><a href=https://gnfos.com/jp/res/342141>https://gnfos.com/jp/res/342141</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2361" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554088906820.png">1554088906820.png</a> <span class="unimportant">(959.69 KB, 900x1200, <span class="postfilename" title="GuP Anchovy and Pepperoni 035.png">GuP Anchovy and Pepperoni ….png</span>)</span></p><a href="/GNFOS/src/1554088906820.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554088906820.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2361" ><p class="intro"><input type="checkbox" class="delete" name="delete_2361" id="delete_2361" /><label for="delete_2361"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T03:22:02Z">04/01/19 (Mon) 03:22:02</time></label>&nbsp;<a class="post_no" id="post_no_2361" onclick="return highlightReply(2361, event)" href="/GNFOS/res/2361#2361">No.</a><a class="post_no" onclick="return citeReply(2361)" href="/GNFOS/res/2361#q2361">2361</a><a href="/GNFOS/res/2361">[Reply]</a></p><div class="body">A new Era is coming. The 1st of May will mark the beginning of the Reiwa era.<br/><a href=https://gnfos.com/jp/res/342138>https://gnfos.com/jp/res/342138</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2360" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554088643934.png">1554088643934.png</a> <span class="unimportant">(128.23 KB, 800x1000, <span class="postfilename">53.png</span>)</span></p><a href="/GNFOS/src/1554088643934.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554088643934.png" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2360" ><p class="intro"><input type="checkbox" class="delete" name="delete_2360" id="delete_2360" /><label for="delete_2360"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T03:18:02Z">04/01/19 (Mon) 03:18:02</time></label>&nbsp;<a class="post_no" id="post_no_2360" onclick="return highlightReply(2360, event)" href="/GNFOS/res/2360#2360">No.</a><a class="post_no" onclick="return citeReply(2360)" href="/GNFOS/res/2360#q2360">2360</a><a href="/GNFOS/res/2360">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=https://gnfos.com/jp/res/342137>https://gnfos.com/jp/res/342137</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2359" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554088364552.png">1554088364552.png</a> <span class="unimportant">(306.46 KB, 616x729, <span class="postfilename" title="__udagawa_tomoe_and_uehara_himari_bang_dream_drawn_by_re_ghotion__f6fa8c036ad5aa62cb323ca81f7d1eff.png">__udagawa_tomoe_and_uehara….png</span>)</span></p><a href="/GNFOS/src/1554088364552.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554088364552.png" style="width:203px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2359" ><p class="intro"><input type="checkbox" class="delete" name="delete_2359" id="delete_2359" /><label for="delete_2359"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T03:13:02Z">04/01/19 (Mon) 03:13:02</time></label>&nbsp;<a class="post_no" id="post_no_2359" onclick="return highlightReply(2359, event)" href="/GNFOS/res/2359#2359">No.</a><a class="post_no" onclick="return citeReply(2359)" href="/GNFOS/res/2359#q2359">2359</a><a href="/GNFOS/res/2359">[Reply]</a></p><div class="body">kissu on the left<br/>gnfos on the right<br/><a href=https://gnfos.com/jp/res/342134>https://gnfos.com/jp/res/342134</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2358" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554088179415.png">1554088179415.png</a> <span class="unimportant">(304.14 KB, 686x504, <span class="postfilename" title="__nazrin_and_toramaru_shou_touhou_drawn_by_dra__085a222f957cedb8d74823d06a37ae70.png">__nazrin_and_toramaru_shou….png</span>)</span></p><a href="/GNFOS/src/1554088179415.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554088179415.png" style="width:327px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2358" ><p class="intro"><input type="checkbox" class="delete" name="delete_2358" id="delete_2358" /><label for="delete_2358"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T03:10:02Z">04/01/19 (Mon) 03:10:02</time></label>&nbsp;<a class="post_no" id="post_no_2358" onclick="return highlightReply(2358, event)" href="/GNFOS/res/2358#2358">No.</a><a class="post_no" onclick="return citeReply(2358)" href="/GNFOS/res/2358#q2358">2358</a><a href="/GNFOS/res/2358">[Reply]</a></p><div class="body">gnfos on the left<br/>kissu on the right<br/><a href=https://gnfos.com/jp/res/342133>https://gnfos.com/jp/res/342133</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2357" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554082900943.jpeg">1554082900943.jpeg</a> <span class="unimportant">(61.37 KB, 400x261, <span class="postfilename" title="B6988D2B-66C2-4F17-B97C-D8B8F83118C6.jpeg">B6988D2B-66C2-4F17-B97C-D….jpeg</span>)</span></p><a href="/GNFOS/src/1554082900943.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554082900943.jpeg" style="width:368px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2357" ><p class="intro"><input type="checkbox" class="delete" name="delete_2357" id="delete_2357" /><label for="delete_2357"><span class="name">The Dastardly Duo</span> <time datetime="2019-04-01T01:42:02Z">04/01/19 (Mon) 01:42:02</time></label>&nbsp;<a class="post_no" id="post_no_2357" onclick="return highlightReply(2357, event)" href="/GNFOS/res/2357#2357">No.</a><a class="post_no" onclick="return citeReply(2357)" href="/GNFOS/res/2357#q2357">2357</a><a href="/GNFOS/res/2357">[Reply]</a></p><div class="body"><a href="https://twitter.com/milkwebs/status/1082710231413673984?s=21" rel="nofollow" target="_blank">https://twitter.com/milkwebs/status/1082710231413673984?s=21</a><br/><a href=https://gnfos.com/jp/res/342113>https://gnfos.com/jp/res/342113</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2356" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1554077600653.jpg">1554077600653.jpg</a> <span class="unimportant">(322.15 KB, 800x800, <span class="postfilename">1487479063625.jpg</span>)</span></p><a href="/GNFOS/src/1554077600653.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1554077600653.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2356" ><p class="intro"><input type="checkbox" class="delete" name="delete_2356" id="delete_2356" /><label for="delete_2356"><span class="name">Idiot</span> <time datetime="2019-04-01T00:14:01Z">04/01/19 (Mon) 00:14:01</time></label>&nbsp;<a class="post_no" id="post_no_2356" onclick="return highlightReply(2356, event)" href="/GNFOS/res/2356#2356">No.</a><a class="post_no" onclick="return citeReply(2356)" href="/GNFOS/res/2356#q2356">2356</a><a href="/GNFOS/res/2356">[Reply]</a></p><div class="body">Time for my beauty rest.<br/><a href=https://gnfos.com/jp/res/342100>https://gnfos.com/jp/res/342100</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/GNFOS/index" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/GNFOS/index">1</a>]				 [<a class="selected">2</a>]				 [<a href="/GNFOS/3">3</a>]				 [<a href="/GNFOS/4">4</a>]				 [<a href="/GNFOS/5">5</a>]				 [<a href="/GNFOS/6">6</a>]				 [<a href="/GNFOS/7">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/3" method="get"><input type="submit" value="Next" /></form>
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