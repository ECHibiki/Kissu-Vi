<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
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
								<title>GNFOS - Catalog</title>
</head>
<body class="8chan vichan is-not-moderator theme-catalog active-catalog" data-stylesheet="trevor.css">
<div id="uppercontents">
	<div id="subuppercontents">
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

?>		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-15.png" alt="" />
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
<div style="display:none"><input type="text" name="username" value="&#37;_3&#48;&#35;gha&#91;-wT⚬.c☽\&#50;Ki⛪;&#56; ,N6B&#101;⚙&#80;"></div>
<input type="hidden" value=":@&amp;5q#+f&gt; =;W6`" name="user"   >
<input type="hidden" name="board" value="GNFOS">
<input name="login" value="m&#49;XI&amp;&#96;h♡+G&lt;sYU|&#9734;&#84;=6{^" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<span   style="display:none"><input   type="text"   name="message"   value="FmD⛊h7#fjcdU+:⛯C&amp;|\b' K&lt;J1(-)⚾[Yq^W&gt;uLv{39wte$sM.05r⚱O]z;XIy}TPE⚳nV☬!6♚Hkg`pNA⛳B/= Q_"></span>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value="J'h&#114;&#56;` &#83;&#91;W-&#77;^&#42;a&#47;c&#125;=UQ⚅tKTe#⛮E&#110;NmG&#50;x♨j6&#48;bFH&#37;&gt;&#113;u&#108;&#124;&amp;&#102;L9⛿(Y5&#9983;~7&#73;gsy]v&lt;" name="firstname">
			</td>
		</tr>		<tr>
			<th>
				Options				<input   type="hidden"   value=""   name="text" >
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

<input type="hidden" name="hash" value="7f7fa7d45dd393233343305aef6cded9bcbae75b">
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
							<a id="thread-catalog-top" href="/GNFOS/">[Index]</a>
				<a id="archive-link-top" href="/GNFOS/archive/">[Archive]</a>

	</span>
	<br/><hr/>
	<div id='catalog_options'>
        <span>Sort by: </span>
        <select id="sort_by" style="display: inline-block">
                <option selected value="bump:desc">Bump order</option>
                <option value="time:desc">Creation date</option>
                <option value="reply:desc">Reply count</option>
                <!--<option value="random:desc">Random</option>-->
        </select>
 
        <span>Image size: </span>
        <select id="image_size" style="display: inline-block">
                <option value="vsmall">Very small</option>
                <option value="small" selected>Small</option>
                <option value="large">Large</option>
        </select>
		</div>
		<br/>
        <div class="threads">
                <div id="Grid">
                                        <div class="mix"
				data-reply="1"
				 data-bump="1567882788"
				 data-time="1567882269"
				 data-id="2390"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2390">  
													<img src="/GNFOS/thumb/1567882269899.png" 
						                                                 id="img-2390" data-subject="" data-name="Anonymous" data-muhdifference="" class="GNFOS thread-image" title="Sep 07 18:59">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<br />
							
								where's Trevor
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1567876769"
				 data-time="1567876769"
				 data-id="2389"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2389">  
													<img src="/GNFOS/thumb/1567876769194.png" 
						                                                 id="img-2389" data-subject="" data-name="Anonymous" data-muhdifference="" class="GNFOS thread-image" title="Sep 07 17:19">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								It's down
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554268855"
				 data-time="1554268855"
				 data-id="2388"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2388">  
													<img src="/GNFOS/thumb/1554268855011.png" 
						                                                 id="img-2388" data-subject="" data-name="Anonymous" data-muhdifference="" class="GNFOS thread-image" title="Apr 03 05:20">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Someone pay him $10
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554146703"
				 data-time="1554146703"
				 data-id="2387"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2387">  
													<img src="/GNFOS/thumb/1554146552831.png" 
						                                                 id="img-2387" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 19:25">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href="https://twitter.com/wikileaks/status/1112528673968664577" rel="nofollow" target="_blank">https://twitter.com/wikileaks/status/1112528673968664577</a><br/><br/>We need to unite and become one big voting bloc.<br/><a href=https://GNFOS.com/jp/res/342239.html>https://GNFOS.com/jp/res/342239.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554146103"
				 data-time="1554146103"
				 data-id="2386"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2386">  
													<img src="/GNFOS/thumb/1554146092810.png" 
						                                                 id="img-2386" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 19:15">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								why do girls like this<br/><a href=https://GNFOS.com/jp/res/342235.html>https://GNFOS.com/jp/res/342235.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554144603"
				 data-time="1554144603"
				 data-id="2384"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2384">  
													<img src="/GNFOS/thumb/1554144337314.png" 
						                                                 id="img-2384" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 18:50">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								About to clean my closet and under my bed so my roach roommates are about to get evicted. Anyone have tips on avoiding anxieties and facing them?<br/><a href=https://GNFOS.com/jp/res/342226.html>https://GNFOS.com/jp/res/342226.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554144603"
				 data-time="1554144603"
				 data-id="2385"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2385">  
													<img src="/GNFOS/thumb/1554144578858.png" 
						                                                 id="img-2385" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 18:50">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<span class="quote">&gt;gnfos</span><br/><a href=https://GNFOS.com/jp/res/342228.html>https://GNFOS.com/jp/res/342228.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554144303"
				 data-time="1554144303"
				 data-id="2383"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2383">  
													<img src="/GNFOS/thumb/1554144188806.png" 
						                                                 id="img-2383" data-subject="" data-name="Idiot" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 18:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								what was going through her mind?<br/><a href=https://GNFOS.com/jp/res/342225.html>https://GNFOS.com/jp/res/342225.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554141604"
				 data-time="1554141604"
				 data-id="2381"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2381">  
													<img src="/GNFOS/thumb/1554141328461.jpg" 
						                                                 id="img-2381" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 18:00">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								merorin was here, you guys are faggots<br/><a href=https://GNFOS.com/jp/res/342220.html>https://GNFOS.com/jp/res/342220.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554135902"
				 data-time="1554135902"
				 data-id="2380"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2380">  
													<img src="/GNFOS/thumb/1554135725638.jpg" 
						                                                 id="img-2380" data-subject="" data-name="ELEETO NEETO Morimori-chan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 16:25">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Spotlight uh moonlight uh<br/><a href=https://GNFOS.com/jp/res/342201.html>https://GNFOS.com/jp/res/342201.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554135602"
				 data-time="1554135602"
				 data-id="2379"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2379">  
													<img src="/GNFOS/thumb/1554135385108.png" 
						                                                 id="img-2379" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 16:20">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Fixed your shitty site<br/><a href=https://GNFOS.com/jp/res/342198.html>https://GNFOS.com/jp/res/342198.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133803"
				 data-time="1554133803"
				 data-id="2378"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2378">  
													<img src="/GNFOS/thumb/1554133798696.webm" 
						                                                 id="img-2378" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:50">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Are you willing to make the ultimate sacrifice for America?<br/><a href=https://GNFOS.com/jp/res/342192.html>https://GNFOS.com/jp/res/342192.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133505"
				 data-time="1554133505"
				 data-id="2376"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2376">  
													<img src="/GNFOS/thumb/1554133146669.jpg" 
						                                                 id="img-2376" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								cummed<br/><a href=https://GNFOS.com/jp/res/342190.html>https://GNFOS.com/jp/res/342190.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133505"
				 data-time="1554133505"
				 data-id="2377"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2377">  
													<img src="/GNFOS/thumb/1554129616993.png" 
						                                                 id="img-2377" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								I don&#39;t feel like this place shows me enough appreciation for the funny and original high quality posts I make.<br/><a href=https://GNFOS.com/jp/res/342183.html>https://GNFOS.com/jp/res/342183.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133504"
				 data-time="1554133504"
				 data-id="2373"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2373">  
													<img src="/GNFOS/thumb/1554114747280.jpg" 
						                                                 id="img-2373" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								falling asleep...<br/><a href=https://GNFOS.com/jp/res/342179.html>https://GNFOS.com/jp/res/342179.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133504"
				 data-time="1554133504"
				 data-id="2374"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2374">  
													<img src="/GNFOS/thumb/1554114942063.jpg" 
						                                                 id="img-2374" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Why is Ron Pauler allowed to have a CP stash but I&#39;m not?<br/><a href=https://GNFOS.com/jp/res/342181.html>https://GNFOS.com/jp/res/342181.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133504"
				 data-time="1554133504"
				 data-id="2375"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2375">  
													<img src="/GNFOS/thumb/1554130318425.jpg" 
						                                                 id="img-2375" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								I don&#39;t feel like this place shows me enough appreciation for the funny and original high quality posts I make.<br/><a href=https://GNFOS.com/jp/res/342185.html>https://GNFOS.com/jp/res/342185.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133503"
				 data-time="1554133503"
				 data-id="2370"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2370">  
													<img src="/GNFOS/thumb/1554106074639.jpeg" 
						                                                 id="img-2370" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Tap water is so gross<br/><a href=https://GNFOS.com/jp/res/342166.html>https://GNFOS.com/jp/res/342166.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133503"
				 data-time="1554133503"
				 data-id="2371"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2371">  
													<img src="/static/deleted.png" 
						                                                 id="img-2371" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								The Rose of Versailles<br/><a href=https://GNFOS.com/jp/res/342174.html>https://GNFOS.com/jp/res/342174.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554133503"
				 data-time="1554133503"
				 data-id="2372"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2372">  
													<img src="/GNFOS/thumb/1554112977011.jpg" 
						                                                 id="img-2372" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 15:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								So fucking tired of this faggot mod on /gnfos/….<br/><br/>I might have to do something drastic if he keeps this shit up……..<br/><a href=https://GNFOS.com/jp/res/342175.html>https://GNFOS.com/jp/res/342175.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554101402"
				 data-time="1554101402"
				 data-id="2366"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2366">  
													<img src="/GNFOS/thumb/1554101396750.jpeg" 
						                                                 id="img-2366" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 06:50">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								I need help<br/><a href=https://gnfos.com/jp/res/342160>https://gnfos.com/jp/res/342160</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554099122"
				 data-time="1554099122"
				 data-id="2365"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2365">  
													<img src="/GNFOS/thumb/1554099108921.jpg" 
						                                                 id="img-2365" data-subject="" data-name="ELEETO NEETO Morimori-chan" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 06:12">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								WAN WAN<br/><a href=https://gnfos.com/jp/res/342158>https://gnfos.com/jp/res/342158</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1554091097"
				 data-time="1554090661"
				 data-id="2363"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2363">  
													<img src="/GNFOS/thumb/1554090643481.jpg" 
						                                                 id="img-2363" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 03:58">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 1</strong>
                                                        								<br />
							
								It&#39;s up<br/><a href="https://kissu.moe/GNFOS" rel="nofollow" target="_blank">https://kissu.moe/GNFOS</a><br/><a href=https://gnfos.com/jp/res/342144>https://gnfos.com/jp/res/342144</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554090186"
				 data-time="1554090186"
				 data-id="2362"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2362">  
													<img src="/GNFOS/thumb/1554090166789.jpeg" 
						                                                 id="img-2362" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 03:43">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Who bipolar here? I&#39;m having a panic attach<br/><a href=https://gnfos.com/jp/res/342141>https://gnfos.com/jp/res/342141</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554088922"
				 data-time="1554088922"
				 data-id="2361"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2361">  
													<img src="/GNFOS/thumb/1554088906820.png" 
						                                                 id="img-2361" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 03:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								A new Era is coming. The 1st of May will mark the beginning of the Reiwa era.<br/><a href=https://gnfos.com/jp/res/342138>https://gnfos.com/jp/res/342138</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554088682"
				 data-time="1554088682"
				 data-id="2360"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2360">  
													<img src="/GNFOS/thumb/1554088643934.png" 
						                                                 id="img-2360" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 03:18">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=https://gnfos.com/jp/res/342137>https://gnfos.com/jp/res/342137</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554088382"
				 data-time="1554088382"
				 data-id="2359"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2359">  
													<img src="/GNFOS/thumb/1554088364552.png" 
						                                                 id="img-2359" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 03:13">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								kissu on the left<br/>gnfos on the right<br/><a href=https://gnfos.com/jp/res/342134>https://gnfos.com/jp/res/342134</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554088202"
				 data-time="1554088202"
				 data-id="2358"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2358">  
													<img src="/GNFOS/thumb/1554088179415.png" 
						                                                 id="img-2358" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 03:10">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								gnfos on the left<br/>kissu on the right<br/><a href=https://gnfos.com/jp/res/342133>https://gnfos.com/jp/res/342133</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554082922"
				 data-time="1554082922"
				 data-id="2357"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2357">  
													<img src="/GNFOS/thumb/1554082900943.jpeg" 
						                                                 id="img-2357" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 01:42">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href="https://twitter.com/milkwebs/status/1082710231413673984?s=21" rel="nofollow" target="_blank">https://twitter.com/milkwebs/status/1082710231413673984?s=21</a><br/><a href=https://gnfos.com/jp/res/342113>https://gnfos.com/jp/res/342113</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554077641"
				 data-time="1554077641"
				 data-id="2356"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2356">  
													<img src="/GNFOS/thumb/1554077600653.jpg" 
						                                                 id="img-2356" data-subject="" data-name="Idiot" data-muhdifference="" class="GNFOS thread-image" title="Apr 01 00:14">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Time for my beauty rest.<br/><a href=https://gnfos.com/jp/res/342100>https://gnfos.com/jp/res/342100</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070960"
				 data-time="1554070960"
				 data-id="2355"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2355">  
													<img src="/GNFOS/thumb/1554066402986.webm" 
						                                                 id="img-2355" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/342080>https://gnfos.com/jp/res/342080</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070959"
				 data-time="1554070959"
				 data-id="2352"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2352">  
													<img src="/GNFOS/thumb/1554021876056.jpg" 
						                                                 id="img-2352" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								diarrhea poopies<br/><a href=https://gnfos.com/jp/res/342036>https://gnfos.com/jp/res/342036</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070959"
				 data-time="1554070959"
				 data-id="2353"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2353">  
													<img src="/GNFOS/thumb/1554067124960.jpg" 
						                                                 id="img-2353" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								my sole occupation in the /jp/verse<br/><a href=https://gnfos.com/jp/res/342085>https://gnfos.com/jp/res/342085</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070959"
				 data-time="1554070959"
				 data-id="2354"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2354">  
													<img src="/GNFOS/thumb/1554067370582.jpg" 
						                                                 id="img-2354" data-subject="" data-name="/QA/ Poster" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								sigh<br/>it&#39;s just not fair<br/>it&#39;s 2019 and i still can&#39;t play bloodborne<br/><a href=https://gnfos.com/jp/res/342088>https://gnfos.com/jp/res/342088</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070958"
				 data-time="1554070958"
				 data-id="2348"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2348">  
													<img src="/GNFOS/thumb/1554046632699.jpeg" 
						                                                 id="img-2348" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								I liked this Netflix show<br/><a href=https://gnfos.com/jp/res/342053>https://gnfos.com/jp/res/342053</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070958"
				 data-time="1554070958"
				 data-id="2349"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2349">  
													<img src="/GNFOS/thumb/1554051508111.png" 
						                                                 id="img-2349" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href="https://en.wikipedia.org/wiki/Pistis_Sophia" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Pistis_Sophia</a><br/><br/>Holy fuck.<br/><a href=https://gnfos.com/jp/res/342067>https://gnfos.com/jp/res/342067</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070958"
				 data-time="1554070958"
				 data-id="2350"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2350">  
													<img src="/GNFOS/thumb/1554060723193.png" 
						                                                 id="img-2350" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/342075>https://gnfos.com/jp/res/342075</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070958"
				 data-time="1554070958"
				 data-id="2351"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2351">  
													<img src="/GNFOS/thumb/1554061061006.jpg" 
						                                                 id="img-2351" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								We are now officially further removed from the 1998 premiere of Fox&#39;s "That 70&#39;s Show" then it was from the time it was set in.<br/><a href=https://gnfos.com/jp/res/342076>https://gnfos.com/jp/res/342076</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070957"
				 data-time="1554070957"
				 data-id="2345"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2345">  
													<img src="/GNFOS/thumb/1554050105024.png" 
						                                                 id="img-2345" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								thoughts?<br/><a href=https://gnfos.com/jp/res/342059>https://gnfos.com/jp/res/342059</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070957"
				 data-time="1554070957"
				 data-id="2346"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2346">  
													<img src="/GNFOS/thumb/1554045965413.png" 
						                                                 id="img-2346" data-subject="anyone played Risk of Rain 2 yet?" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										anyone played Risk of Rain 2 yet?
									</span>
								</p>
							
								<a href="https://store.steampowered.com/app/632360/Risk_of_Rain_2/" rel="nofollow" target="_blank">https://store.steampowered.com/app/632360/Risk_of_Rain_2/</a><br/><br/>I played it on release and was honestly surprised<br/>it was really great, but definitely feels early access. Hope they improve on it<br/><a href=https://gnfos.com/jp/res/342051>https://gnfos.com/jp/res/342051</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070957"
				 data-time="1554070957"
				 data-id="2347"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2347">  
													<img src="/GNFOS/thumb/1554050443492.png" 
						                                                 id="img-2347" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/342061>https://gnfos.com/jp/res/342061</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070956"
				 data-time="1554070956"
				 data-id="2344"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2344">  
													<img src="/GNFOS/thumb/1554045428798.png" 
						                                                 id="img-2344" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Wauw!!!<br/><br/><a href="https://www.youtube.com/watch?v=fxPD37eHeks" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=fxPD37eHeks</a><br/><a href=https://gnfos.com/jp/res/342050>https://gnfos.com/jp/res/342050</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070955"
				 data-time="1554070955"
				 data-id="2341"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2341">  
													<img src="/GNFOS/thumb/1536032933050.jpg" 
						                                                 id="img-2341" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								My mum&#39;s mum&#39;s mum&#39;s mum&#39;s mum&#39;s maiden name was Geldschmidt. I was the Jew all along...<br/><a href=https://gnfos.com/jp/res/338384>https://gnfos.com/jp/res/338384</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070955"
				 data-time="1554070955"
				 data-id="2342"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2342">  
													<img src="/static/deleted.png" 
						                                                 id="img-2342" data-subject="" data-name="/QA/ Poster" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								you&#39;re not alone in not liking sachiro t<br/><a href=https://gnfos.com/jp/res/341923>https://gnfos.com/jp/res/341923</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070955"
				 data-time="1554070955"
				 data-id="2343"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2343">  
													<img src="/GNFOS/thumb/1553914313894.mp4" 
						                                                 id="img-2343" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								My all time favorite clip of the /qa/ review stream<br/><a href=https://gnfos.com/jp/res/341802>https://gnfos.com/jp/res/341802</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070954"
				 data-time="1554070954"
				 data-id="2339"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2339">  
													<img src="/GNFOS/thumb/1553986645779.webm" 
						                                                 id="img-2339" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/341943>https://gnfos.com/jp/res/341943</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070954"
				 data-time="1554070954"
				 data-id="2340"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2340">  
													<img src="/GNFOS/thumb/1554020242552.png" 
						                                                 id="img-2340" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								ok this really isn&#39;t at all practical<br/><a href=https://gnfos.com/jp/res/342033>https://gnfos.com/jp/res/342033</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070953"
				 data-time="1554070953"
				 data-id="2336"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2336">  
													<img src="/GNFOS/thumb/1554010060878.png" 
						                                                 id="img-2336" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Is this a joke?<br/><a href=https://gnfos.com/jp/res/342015>https://gnfos.com/jp/res/342015</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070953"
				 data-time="1554070953"
				 data-id="2337"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2337">  
													<img src="/GNFOS/thumb/1554017986860.jpg" 
						                                                 id="img-2337" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Have you signed the SWEAT pledge yet?<br/><a href=https://gnfos.com/jp/res/342028>https://gnfos.com/jp/res/342028</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070953"
				 data-time="1554070953"
				 data-id="2338"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2338">  
													<img src="/GNFOS/thumb/1554018763611.jpeg" 
						                                                 id="img-2338" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								You are a slave<br/><br/><a href="https://youtu.be/eVfkW9oxhIk?t=333" rel="nofollow" target="_blank">https://youtu.be/eVfkW9oxhIk?t=333</a><br/><a href=https://gnfos.com/jp/res/342029>https://gnfos.com/jp/res/342029</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070952"
				 data-time="1554070952"
				 data-id="2333"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2333">  
													<img src="/GNFOS/thumb/1553133780602.jpg" 
						                                                 id="img-2333" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Imagine being Ron Paul LMAOOOOOOOOOOO<br/><a href=https://gnfos.com/jp/res/340591>https://gnfos.com/jp/res/340591</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070952"
				 data-time="1554070952"
				 data-id="2334"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2334">  
													<img src="/GNFOS/thumb/1553996241560.jpg" 
						                                                 id="img-2334" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What&#39;s the point of life if you&#39;re not a Japanese high school girl<br/><a href=https://gnfos.com/jp/res/341968>https://gnfos.com/jp/res/341968</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070952"
				 data-time="1554070952"
				 data-id="2335"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2335">  
													<img src="/GNFOS/thumb/1554011472926.jpg" 
						                                                 id="img-2335" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Who do you want to kill you?<br/><a href=https://gnfos.com/jp/res/342023>https://gnfos.com/jp/res/342023</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070951"
				 data-time="1554070951"
				 data-id="2329"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2329">  
													<img src="/static/deleted.png" 
						                                                 id="img-2329" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								the /qa/ book<br/><a href=https://gnfos.com/jp/res/341967>https://gnfos.com/jp/res/341967</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070951"
				 data-time="1554070951"
				 data-id="2330"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2330">  
													<img src="/GNFOS/thumb/1553998472720.png" 
						                                                 id="img-2330" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								review<br/><a href=https://gnfos.com/jp/res/341972>https://gnfos.com/jp/res/341972</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070951"
				 data-time="1554070951"
				 data-id="2331"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2331">  
													<img src="/GNFOS/thumb/1536557807471.jpg" 
						                                                 id="img-2331" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<h1 style=&#39;font-size:100pt;color:red;font-weight:bold;&#39;>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
<script>
if (!test)
{
var test = 1;
var audio = new Audio(&#39;rz.mp3&#39;);
audio.play();
}
</script><br/><a href=https://gnfos.com/jp/res/338685>https://gnfos.com/jp/res/338685</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070951"
				 data-time="1554070951"
				 data-id="2332"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2332">  
													<img src="/GNFOS/thumb/1554003282963.png" 
						                                                 id="img-2332" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Nature proceeds by blunders; that is its way. It is also ours. So if we have blundered by regarding consciousness as a blunder, why make a fuss over it? Our self-removal from this planet would still be a magnificent move, a feat so luminous it would bedim the sun. What do we have to lose? No evil would attend our departure from this world, and the many evils we have known would go extinct along with us. So why put off what would be the most laudable masterstroke of our existence, and the only one?<br/><a href=https://gnfos.com/jp/res/342006>https://gnfos.com/jp/res/342006</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070950"
				 data-time="1554070950"
				 data-id="2326"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2326">  
													<img src="/static/deleted.png" 
						                                                 id="img-2326" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Holy fuck&#129327;<br/><a href=https://gnfos.com/jp/res/341944>https://gnfos.com/jp/res/341944</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070950"
				 data-time="1554070950"
				 data-id="2327"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2327">  
													<img src="/GNFOS/thumb/1553991938961.gif" 
						                                                 id="img-2327" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/341963>https://gnfos.com/jp/res/341963</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070950"
				 data-time="1554070950"
				 data-id="2328"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2328">  
													<img src="/GNFOS/thumb/1553994861011.webm" 
						                                                 id="img-2328" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								t sticking his hand in a random /qa/ thread<br/><a href=https://gnfos.com/jp/res/341965>https://gnfos.com/jp/res/341965</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070949"
				 data-time="1554070949"
				 data-id="2323"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2323">  
													<img src="/GNFOS/thumb/1553980298594.png" 
						                                                 id="img-2323" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href="https://www.dailymail.co.uk/news/article-6868235/Dentists-urge-parents-childrens-baby-teeth-new-research-shows-treat-cancer.html" rel="nofollow" target="_blank">https://www.dailymail.co.uk/news/article-6868235/Dentists-urge-parents-childrens-baby-teeth-new-research-shows-treat-cancer.html</a><br/><br/>i h ope my mom kept my baby teeth<br/><a href=https://gnfos.com/jp/res/341927>https://gnfos.com/jp/res/341927</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070949"
				 data-time="1554070949"
				 data-id="2324"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2324">  
													<img src="/GNFOS/thumb/1553979237540.png" 
						                                                 id="img-2324" data-subject="" data-name="Idiot" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								qa + ota in front<br/>gn in the back<br/><a href=https://gnfos.com/jp/res/341921>https://gnfos.com/jp/res/341921</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070949"
				 data-time="1554070949"
				 data-id="2325"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2325">  
													<img src="/GNFOS/thumb/1553929528245.jpg" 
						                                                 id="img-2325" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								pissu stole gn&#39;s patented tab new replies notification<br/><a href=https://gnfos.com/jp/res/341834>https://gnfos.com/jp/res/341834</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070948"
				 data-time="1554070948"
				 data-id="2321"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2321">  
													<img src="/GNFOS/thumb/1553974699451.webm" 
						                                                 id="img-2321" data-subject="" data-name="Idiot" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								sigh with me bros make sure to spend al your money on cbd<br/><a href=https://gnfos.com/jp/res/341907>https://gnfos.com/jp/res/341907</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070948"
				 data-time="1554070948"
				 data-id="2322"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2322">  
													<img src="/GNFOS/thumb/1553963896216.jpeg" 
						                                                 id="img-2322" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Who do you talk to about your problems when you have no one<br/><a href=https://gnfos.com/jp/res/341874>https://gnfos.com/jp/res/341874</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070947"
				 data-time="1554070947"
				 data-id="2318"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2318">  
													<img src="/GNFOS/thumb/1553971377860.png" 
						                                                 id="img-2318" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								It sure feels nice to live without the fear of being evicted.<br/><a href=https://gnfos.com/jp/res/341893>https://gnfos.com/jp/res/341893</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070947"
				 data-time="1554070947"
				 data-id="2319"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2319">  
													<img src="/GNFOS/thumb/1553909139192.png" 
						                                                 id="img-2319" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What&#39;s with speedrunners becoming trannies?<br/><a href=https://gnfos.com/jp/res/341781>https://gnfos.com/jp/res/341781</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070947"
				 data-time="1554070947"
				 data-id="2320"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2320">  
													<img src="/GNFOS/thumb/1553928278971.jpg" 
						                                                 id="img-2320" data-subject="" data-name="Idiot" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								?<br/><a href=https://gnfos.com/jp/res/341828>https://gnfos.com/jp/res/341828</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070946"
				 data-time="1554070946"
				 data-id="2315"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2315">  
													<img src="/GNFOS/thumb/1553956157778.png" 
						                                                 id="img-2315" data-subject="" data-name="/QA/ Poster" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Will money truly get rid of my insecurities?<br/><span class="quote"><br/>&gt;5” dicklet</span><br/><span class="quote">&gt;5’11” (5’10.5”) manlet</span><br/><a href=https://gnfos.com/jp/res/341855>https://gnfos.com/jp/res/341855</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070946"
				 data-time="1554070946"
				 data-id="2316"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2316">  
													<img src="/GNFOS/thumb/1553972107680.gif" 
						                                                 id="img-2316" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								am i really not special? am i really just a flawed being like you all<br/><a href=https://gnfos.com/jp/res/341895>https://gnfos.com/jp/res/341895</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070946"
				 data-time="1554070946"
				 data-id="2317"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2317">  
													<img src="/GNFOS/thumb/1553972411345.jpg" 
						                                                 id="img-2317" data-subject="" data-name="Tada Banri" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href="https://youtu.be/c4yTaP6roTw?t=61" rel="nofollow" target="_blank">https://youtu.be/c4yTaP6roTw?t=61</a><br/><a href=https://gnfos.com/jp/res/341896>https://gnfos.com/jp/res/341896</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070945"
				 data-time="1554070945"
				 data-id="2311"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2311">  
													<img src="/GNFOS/thumb/1553958096678.jpg" 
						                                                 id="img-2311" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href="https://blog.gotinder.com/introducing-height-verification/" rel="nofollow" target="_blank">https://blog.gotinder.com/introducing-height-verification/</a><br/><span class="quote"><br/>&gt;It’s come to our attention that most of you 5’10ers out there are actually 5’6. The charade must stop. This type of dishonestly doesn’t just hurt your matches — it hurts us, too. Did it ever occur to you that we’re 5’6 and actually love our medium height? Did it ever occur to you that honesty is what separates humans from sinister monsters? Of course not.</span><br/><span class="quote"><br/>&gt;You were only thinking of yourself. Well, height-lying ends here. To require everyone under 6’ to own up to their real height, we’re bringing truthfulness back into the world of online dating</span><br/><a href=https://gnfos.com/jp/res/341863>https://gnfos.com/jp/res/341863</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070945"
				 data-time="1554070945"
				 data-id="2312"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2312">  
													<img src="/GNFOS/thumb/1553919069849.png" 
						                                                 id="img-2312" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<span class="quote">&gt;&gt;13161208</span><br/><span class="quote">&gt;the autist that gets rich off meme coins but is still a retardedly autistic member of society</span><br/><br/>This is basically what Notch&#39;s life has become. In his case, instead of money it was the rights to Minecraft, but he dumped his bags and ended up in the same scenario you described.<br/><span class="quote"><br/>&gt;used a portion of the $2.5 billion of his Minecraft money to buy the most expensive house in Beverly Hills, a huge thing that&#39;s basically built for hosting large parties</span><br/><span class="quote">&gt;hardly anyone ever comes over, he almost never hosts parties either</span><br/><span class="quote">&gt;entire room devoted to having a ton of candy in it</span><br/><span class="quote">&gt;has so few guests that most of the candy ends up rotting and he had to throw it away. People on Twitter that hate him always bring this up to show how lonesome he is</span><br/><span class="quote">&gt;has a basically infinite amount of shekels but girls still don&#39;t want him, pic related</span><br/><span class="quote">&gt;it&#39;s now been a few years and all he does now is get into stupid arguments on Twitter as if he&#39;s Dobson</span><br/><a href=https://gnfos.com/jp/res/341810>https://gnfos.com/jp/res/341810</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070945"
				 data-time="1554070945"
				 data-id="2313"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2313">  
													<img src="/GNFOS/thumb/1553934461871.jpg" 
						                                                 id="img-2313" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Man&#39;s love is man&#39;s life.<br/>Each friend represents a world in us.<br/><br/>A beauty is a woman you notice.<br/>Never self-possessed, or prudent.<br/>Do not wish to be anything except what you are<br/><br/>Keep me as the apple of the eye.<br/>Do all things with love.<br/><a href=https://gnfos.com/jp/res/341840>https://gnfos.com/jp/res/341840</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070945"
				 data-time="1554070945"
				 data-id="2314"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2314">  
													<img src="/GNFOS/thumb/1553910845522.jpg" 
						                                                 id="img-2314" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<span class="quote">&gt;easy on the ice, toots</span><br/><a href=https://gnfos.com/jp/res/341788>https://gnfos.com/jp/res/341788</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070944"
				 data-time="1554070944"
				 data-id="2309"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2309">  
													<img src="/GNFOS/thumb/1553899453977.webm" 
						                                                 id="img-2309" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								what a fucking mess, why did i even watch this garbage<br/><a href=https://gnfos.com/jp/res/341760>https://gnfos.com/jp/res/341760</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070944"
				 data-time="1554070944"
				 data-id="2310"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2310">  
													<img src="/GNFOS/thumb/1535461368802.jpg" 
						                                                 id="img-2310" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Should I call my ex<br/><a href=https://gnfos.com/jp/res/337762>https://gnfos.com/jp/res/337762</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070942"
				 data-time="1554070942"
				 data-id="2307"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2307">  
													<img src="/GNFOS/thumb/1553901652758.png" 
						                                                 id="img-2307" data-subject="" data-name="Tada Banri" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<br/><a href="http://dulm.ddns.net/normie/" rel="nofollow" target="_blank">http://dulm.ddns.net/normie/</a><br/><br/>How dumb do you have to be to fall for this data mining<br/><a href=https://gnfos.com/jp/res/341766>https://gnfos.com/jp/res/341766</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070942"
				 data-time="1554070942"
				 data-id="2308"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2308">  
													<img src="/GNFOS/thumb/1553936014567.png" 
						                                                 id="img-2308" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								There&#39;s nothing worse in the western world than being an unemployed friendless loser with no future, you could be a psycho, a corrupt crook, a rapist or a murderer and still be more accomplished<br/><a href=https://gnfos.com/jp/res/341841>https://gnfos.com/jp/res/341841</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070941"
				 data-time="1554070941"
				 data-id="2301"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2301">  
													<img src="/static/deleted.png" 
						                                                 id="img-2301" data-subject="" data-name="Tada Banri" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Bitcoin at 1:20<br/><br/>Bitcoin is useable on cash app but no other crypto. You&#39;d be a fool to not realize Bitcoin will be worth double digits soon<br/><a href=https://gnfos.com/jp/res/341778>https://gnfos.com/jp/res/341778</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070941"
				 data-time="1554070941"
				 data-id="2302"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2302">  
													<img src="/static/deleted.png" 
						                                                 id="img-2302" data-subject="" data-name="ELEETO NEETO Morimori-chan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/337635>https://gnfos.com/jp/res/337635</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070941"
				 data-time="1554070941"
				 data-id="2303"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2303">  
													<img src="/static/deleted.png" 
						                                                 id="img-2303" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://gnfos.com/jp/res/337785>https://gnfos.com/jp/res/337785</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070941"
				 data-time="1554070941"
				 data-id="2304"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2304">  
													<img src="/GNFOS/thumb/1553912444052.jpg" 
						                                                 id="img-2304" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								review<br/><a href=https://gnfos.com/jp/res/341797>https://gnfos.com/jp/res/341797</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070941"
				 data-time="1554070941"
				 data-id="2305"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2305">  
													<img src="/GNFOS/thumb/1535088023970.jpg" 
						                                                 id="img-2305" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								How do you deal with being literally, unironically retarded?<br/><a href=https://gnfos.com/jp/res/337489>https://gnfos.com/jp/res/337489</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070941"
				 data-time="1554070941"
				 data-id="2306"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2306">  
													<img src="/GNFOS/thumb/1553926320979.jpg" 
						                                                 id="img-2306" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What&#39;s a good PDF reader? I&#39;m using foxit reader and it fucking sucks.<br/><a href=https://gnfos.com/jp/res/341825>https://gnfos.com/jp/res/341825</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070940"
				 data-time="1554070940"
				 data-id="2298"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2298">  
													<img src="/GNFOS/thumb/1553879938378.png" 
						                                                 id="img-2298" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								How come british food is never praised in movies?<br/><a href=https://gnfos.com/jp/res/341727>https://gnfos.com/jp/res/341727</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070940"
				 data-time="1554070940"
				 data-id="2299"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2299">  
													<img src="/GNFOS/thumb/1553903183718.jpg" 
						                                                 id="img-2299" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Nothing changes<br/>It only gets worse<br/>Nothing changes<br/>Waiting for a hearse<br/>There is no hope<br/>Escape is a hoax<br/>The pressure&#39;s building<br/>And I just can&#39;t cope<br/><a href=https://gnfos.com/jp/res/341768>https://gnfos.com/jp/res/341768</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070940"
				 data-time="1554070940"
				 data-id="2300"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2300">  
													<img src="/GNFOS/thumb/1553909251351.jpg" 
						                                                 id="img-2300" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Rate me<br/><a href=https://gnfos.com/jp/res/341782>https://gnfos.com/jp/res/341782</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070939"
				 data-time="1554070939"
				 data-id="2296"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2296">  
													<img src="/GNFOS/thumb/1553895120280.png" 
						                                                 id="img-2296" data-subject="Celebrity gossip general" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Celebrity gossip general
									</span>
								</p>
							
								MJ really did it and the actual mkultra psyop is getting people to think he&#39;s innocent<br/><a href=https://gnfos.com/jp/res/341755>https://gnfos.com/jp/res/341755</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070939"
				 data-time="1554070939"
				 data-id="2297"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2297">  
													<img src="/GNFOS/thumb/1553869809975.png" 
						                                                 id="img-2297" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								You have to be retarded if you don&#39;t realize the Patriot act and other secret bills only reported on independent Internet sites are being created so they can be used<br/><a href=https://gnfos.com/jp/res/341710>https://gnfos.com/jp/res/341710</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070938"
				 data-time="1554070938"
				 data-id="2294"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2294">  
													<img src="/GNFOS/thumb/1553757212073.png" 
						                                                 id="img-2294" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Should I steal and co-opt pissu&#39;s cytube feature just to stick it to them?<br/><br/>I noticed it during the review today.<br/><a href=https://gnfos.com/jp/res/341534>https://gnfos.com/jp/res/341534</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070938"
				 data-time="1554070938"
				 data-id="2295"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2295">  
													<img src="/GNFOS/thumb/1553890627430.png" 
						                                                 id="img-2295" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<span class="quote">&gt;gnfos</span><br/><a href=https://gnfos.com/jp/res/341746>https://gnfos.com/jp/res/341746</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070937"
				 data-time="1554070937"
				 data-id="2292"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2292">  
													<img src="/GNFOS/thumb/1553807139919.png" 
						                                                 id="img-2292" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								is it true its impossible to make friends when you&#39;re out of highschool<br/><a href=https://gnfos.com/jp/res/341569>https://gnfos.com/jp/res/341569</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070937"
				 data-time="1554070937"
				 data-id="2293"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2293">  
													<img src="/GNFOS/thumb/1553877897077.png" 
						                                                 id="img-2293" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What game is this<br/><a href=https://gnfos.com/jp/res/341712>https://gnfos.com/jp/res/341712</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070936"
				 data-time="1554070936"
				 data-id="2289"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2289">  
													<img src="/GNFOS/thumb/1553878299227.jpg" 
						                                                 id="img-2289" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Forced myself to wake up early today.....<br/><br/>Too tired to do anything.....<br/><a href=https://gnfos.com/jp/res/341714>https://gnfos.com/jp/res/341714</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070936"
				 data-time="1554070936"
				 data-id="2290"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2290">  
													<img src="/static/deleted.png" 
						                                                 id="img-2290" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								h*ck yeah<br/><a href=https://gnfos.com/jp/res/341722>https://gnfos.com/jp/res/341722</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070936"
				 data-time="1554070936"
				 data-id="2291"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2291">  
													<img src="/GNFOS/thumb/1553878849732.gif" 
						                                                 id="img-2291" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								This lady on campus gave me a bag of condoms as I was walking by, they were promoting safe sex<br/><br/>Confirms I look like a normie Chad now&#128526; later incels<br/><a href=https://gnfos.com/jp/res/341721>https://gnfos.com/jp/res/341721</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070935"
				 data-time="1554070935"
				 data-id="2286"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2286">  
													<img src="/GNFOS/thumb/1553852462404.jpg" 
						                                                 id="img-2286" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								do you people ever get tired of posting nonsense all the time?<br/><br/>there is literally not one coherent post on here<br/><a href=https://gnfos.com/jp/res/341702>https://gnfos.com/jp/res/341702</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070935"
				 data-time="1554070935"
				 data-id="2287"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2287">  
													<img src="/GNFOS/thumb/1553845210496.jpeg" 
						                                                 id="img-2287" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								I just realized the NSA is saving long detailed screenshots of gnfos every time Ron Paul streams<br/><a href=https://gnfos.com/jp/res/341668>https://gnfos.com/jp/res/341668</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070935"
				 data-time="1554070935"
				 data-id="2288"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2288">  
													<img src="/GNFOS/thumb/1553323962643.png" 
						                                                 id="img-2288" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Post em<br/><a href=https://gnfos.com/jp/res/340866>https://gnfos.com/jp/res/340866</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070934"
				 data-time="1554070934"
				 data-id="2282"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2282">  
													<img src="/GNFOS/thumb/1553825870707.webm" 
						                                                 id="img-2282" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								what browser should i be using<br/><a href=https://gnfos.com/jp/res/341610>https://gnfos.com/jp/res/341610</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070934"
				 data-time="1554070934"
				 data-id="2283"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2283">  
													<img src="/GNFOS/thumb/1553846267767.jpg" 
						                                                 id="img-2283" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Nelke and the Legendary Alchemists: Ateliers of the New World is out now brothers.<br/><a href=https://gnfos.com/jp/res/341672>https://gnfos.com/jp/res/341672</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070934"
				 data-time="1554070934"
				 data-id="2284"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2284">  
													<img src="/GNFOS/thumb/1553848039440.png" 
						                                                 id="img-2284" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								I feel like I&#39;ve gotten dumber<br/><a href=https://gnfos.com/jp/res/341693>https://gnfos.com/jp/res/341693</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070934"
				 data-time="1554070934"
				 data-id="2285"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2285">  
													<img src="/GNFOS/thumb/1553847523360.jpeg" 
						                                                 id="img-2285" data-subject="" data-name="ELEETO NEETO Morimori-chan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Do you think you will survive the dystopian technological cyberpunk future<br/><br/>The AI God isn&#39;t going to make it in time<br/><a href=https://gnfos.com/jp/res/341689>https://gnfos.com/jp/res/341689</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070933"
				 data-time="1554070933"
				 data-id="2279"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2279">  
													<img src="/GNFOS/thumb/1553841305763.png" 
						                                                 id="img-2279" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								This CBD oil has thc holy shit<br/><a href=https://gnfos.com/jp/res/341661>https://gnfos.com/jp/res/341661</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070933"
				 data-time="1554070933"
				 data-id="2280"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2280">  
													<img src="/GNFOS/thumb/1553826421540.gif" 
						                                                 id="img-2280" data-subject="" data-name="The Dastardly Duo" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								review<br/><a href=https://gnfos.com/jp/res/341611>https://gnfos.com/jp/res/341611</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554070933"
				 data-time="1554070933"
				 data-id="2281"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/GNFOS/res/2281">  
													<img src="/GNFOS/thumb/1553823740189.jpg" 
						                                                 id="img-2281" data-subject="" data-name="Diarrhea Dan" data-muhdifference="" class="GNFOS thread-image" title="Mar 31 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								You guys wanna know a secret...?<br/><a href=https://gnfos.com/jp/res/341603>https://gnfos.com/jp/res/341603</a>
                                                </div>
                                </div>
                        </div>
                                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="">[Refresh]</a>
		<a id="thread-top" href="#top">[Top]</a>
							<a id="thread-catalog" href="/GNFOS/">[Index]</a>
				<a id="archive-link-top" href="/GNFOS/archive/">[Archive]</a>

	</span>
	<br/><hr/>
	<a name='bottom'></a>
	<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
			<a href="https://engine.vichan.net/">vichan</a> 5.1.4 -
		<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
		<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>
	</footer>
	<!-- <script type="text/javascript"> -->
		<!-- var styles = { -->
			<!--  -->
			<!-- 'Yotsu Kissu B' : '/stylesheets/yotsuba-kissu-b.css', -->
			<!-- 'Dark-Kissu(Saturated)' : '/stylesheets/Dark-kissu.css', -->
			<!-- 'Kissu(Experimental)' : '/stylesheets/kissu.css', -->
			<!-- 'New-Years' : '/stylesheets/new-years-theme.css', -->
			<!-- 'Nen' : '/stylesheets/hatate.css', -->
			<!-- 'Trevor' : '/stylesheets/trevor.css', -->
			<!-- 'Yotsuba B' : '/stylesheets/style.css', -->
			<!-- 'Yotsuba' : '/stylesheets/yotsuba.css', -->
			<!-- 'Dark' : '/stylesheets/dark.css', -->
			<!-- 'Futaba' : '/stylesheets/futaba.css', -->
			<!-- 'Burichan' : '/stylesheets/burichan.css', -->
			<!-- 'caffe' : '/stylesheets/caffe.css', -->
			<!-- 'confraria' : '/stylesheets/confraria.css', -->
			<!-- 'dark_roach' : '/stylesheets/dark_roach.css', -->
			<!-- 'favela' : '/stylesheets/favela.css', -->
			<!-- 'futaba+vichan' : '/stylesheets/futaba+vichan.css', -->
			<!-- 'futaba-light' : '/stylesheets/futaba-light.css', -->
			<!-- 'gentoochan' : '/stylesheets/gentoochan.css', -->
			<!-- 'greendark' : '/stylesheets/greendark.css', -->
			<!-- 'jungle' : '/stylesheets/jungle.css', -->
			<!-- 'miku' : '/stylesheets/miku.css', -->
			<!-- 'nigrachan' : '/stylesheets/nigrachan.css', -->
			<!-- 'northboard_cb' : '/stylesheets/northboard_cb.css', -->
			<!-- 'notsuba' : '/stylesheets/notsuba.css', -->
			<!-- 'novo_jungle' : '/stylesheets/novo_jungle.css', -->
			<!-- 'photon' : '/stylesheets/photon.css', -->
			<!-- 'piwnichan' : '/stylesheets/piwnichan.css', -->
			<!-- 'ricechan' : '/stylesheets/ricechan.css', -->
			<!-- 'roach' : '/stylesheets/roach.css', -->
			<!-- 'rugby' : '/stylesheets/rugby.css', -->
			<!-- 'sharp' : '/stylesheets/sharp.css', -->
			<!-- 'stripes' : '/stylesheets/stripes.css', -->
			<!-- 'szalet' : '/stylesheets/szalet.css', -->
			<!-- 'terminal2' : '/stylesheets/terminal2.css', -->
			<!-- 'testorange' : '/stylesheets/testorange.css', -->
			<!-- 'v8ch' : '/stylesheets/v8ch.css', -->
			<!-- 'wasabi' : '/stylesheets/wasabi.css', -->
			<!--  -->
		<!-- };  -->
		<!-- if(is_style_select == false){ -->
			<!-- onready(init); -->
		<!-- } -->
	<!-- </script> -->
	
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