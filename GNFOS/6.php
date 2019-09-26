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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-7.jpg" alt="" />
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
<textarea style="display:none" name="qim⚭n⚤dw5ce7kv9zluobg2a3j8⚴hxrp1">_%]⛟Hmtn!♒Sb</textarea>
<input name="x3zg☏th85ofm0jpreka⛋y7wv6l2b1ic" value="⛻d/cq@SZ4E^\_!j[{e&lt;Fr#KLg☭6'm" type="hidden">
<input type="hidden" name="board" value="GNFOS">
<input style="display:none" type="text" value="@|6CF" name="dn4b6h7♸q320♤tuy⛚raoji9fzcpkgsw1">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" value="prJU2⛹^@z~&#124;=Yy9A wedOM+L%1&#102;&#104;bW☭l&#95;[&#116;}&#44;m&#99; &#97;⚱" name="text">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value="dYpX⛖" name="742oh8nbd391vmg♨qry5♐">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea name="i⛓z576vdhc" style="display:none">⚜|uZJ;_gMXA7bK-~L$)⚢,xkd jH?63m☏h[eCR]oO(@#}i⚓sV♇%n9p'q ☂G/4z0B♖{NFY\U=!2⚯yv1ESwPa8*Q5t^fcDI&amp;⚀+l&lt;</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div   style="display:none"><input   type="text"   name="username"   value="Z'CHALTXW$]mi|t8 F n+K♴^u.?!Yz&amp;-vfSdO~r0⛫loIwbcU79[;,♮&lt;#D`5J1(Bj3yM☾}4a@6kpQ⛥s*x%P"></div>
			
			
				<input type="hidden" value="" name="q"  >
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input  type="hidden"  value="⚜;!G^&#55;&#35;⛀&#39;k&#82;~&#80;&#61;&#46;&#56;b&#88;&lt;D&amp;&#105;Hn⛛(Jg&#101;&#70;&#109;\&#58;&#106; "  name="login">
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
		<div class="thread" id="thread_2310" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1535461368802.jpg">1535461368802.jpg</a> <span class="unimportant">(129.95 KB, 476x650, <span class="postfilename">1533354032879.jpg</span>)</span></p><a href="/GNFOS/src/1535461368802.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1535461368802.jpg" style="width:176px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2310" ><p class="intro"><input type="checkbox" class="delete" name="delete_2310" id="delete_2310" /><label for="delete_2310"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:24Z">03/31/19 (Sun) 22:22:24</time></label>&nbsp;<a class="post_no" id="post_no_2310" onclick="return highlightReply(2310, event)" href="/GNFOS/res/2310#2310">No.</a><a class="post_no" onclick="return citeReply(2310)" href="/GNFOS/res/2310#q2310">2310</a><a href="/GNFOS/res/2310">[Reply]</a></p><div class="body">Should I call my ex<br/><a href=https://gnfos.com/jp/res/337762>https://gnfos.com/jp/res/337762</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2309" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553899453977.webm">1553899453977.webm</a> <span class="unimportant">(597.15 KB, 1280x720, <span class="postfilename">domestic.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1553899453977.webm&amp;t=domestic.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1553899453977.webm" poster="/static/kissu-video.png" style="width:427px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2309" ><p class="intro"><input type="checkbox" class="delete" name="delete_2309" id="delete_2309" /><label for="delete_2309"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:24Z">03/31/19 (Sun) 22:22:24</time></label>&nbsp;<a class="post_no" id="post_no_2309" onclick="return highlightReply(2309, event)" href="/GNFOS/res/2309#2309">No.</a><a class="post_no" onclick="return citeReply(2309)" href="/GNFOS/res/2309#q2309">2309</a><a href="/GNFOS/res/2309">[Reply]</a></p><div class="body">what a fucking mess, why did i even watch this garbage<br/><a href=https://gnfos.com/jp/res/341760>https://gnfos.com/jp/res/341760</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2308" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553936014567.png">1553936014567.png</a> <span class="unimportant">(9.4 MB, 4000x5498, <span class="postfilename" title="74545bf6e14cf5d792fc9b9a68cf1d5c.png">74545bf6e14cf5d792fc9b9a68….png</span>)</span></p><a href="/GNFOS/src/1553936014567.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553936014567.png" style="width:175px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2308" ><p class="intro"><input type="checkbox" class="delete" name="delete_2308" id="delete_2308" /><label for="delete_2308"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:22Z">03/31/19 (Sun) 22:22:22</time></label>&nbsp;<a class="post_no" id="post_no_2308" onclick="return highlightReply(2308, event)" href="/GNFOS/res/2308#2308">No.</a><a class="post_no" onclick="return citeReply(2308)" href="/GNFOS/res/2308#q2308">2308</a><a href="/GNFOS/res/2308">[Reply]</a></p><div class="body">There&#39;s nothing worse in the western world than being an unemployed friendless loser with no future, you could be a psycho, a corrupt crook, a rapist or a murderer and still be more accomplished<br/><a href=https://gnfos.com/jp/res/341841>https://gnfos.com/jp/res/341841</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2307" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553901652758.png">1553901652758.png</a> <span class="unimportant">(129.94 KB, 500x500, <span class="postfilename" title="2390B15D-E78A-4948-A1B6-250FC41DDB13.png">2390B15D-E78A-4948-A1B6-25….png</span>)</span></p><a href="/GNFOS/src/1553901652758.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553901652758.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2307" ><p class="intro"><input type="checkbox" class="delete" name="delete_2307" id="delete_2307" /><label for="delete_2307"><span class="name">Tada Banri</span> <time datetime="2019-03-31T22:22:22Z">03/31/19 (Sun) 22:22:22</time></label>&nbsp;<a class="post_no" id="post_no_2307" onclick="return highlightReply(2307, event)" href="/GNFOS/res/2307#2307">No.</a><a class="post_no" onclick="return citeReply(2307)" href="/GNFOS/res/2307#q2307">2307</a><a href="/GNFOS/res/2307">[Reply]</a></p><div class="body"><br/><a href="http://dulm.ddns.net/normie/" rel="nofollow" target="_blank">http://dulm.ddns.net/normie/</a><br/><br/>How dumb do you have to be to fall for this data mining<br/><a href=https://gnfos.com/jp/res/341766>https://gnfos.com/jp/res/341766</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2306" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553926320979.jpg">1553926320979.jpg</a> <span class="unimportant">(370.86 KB, 878x1240, <span class="postfilename" title="f9096864ad56aaca043734b2f05469c8.jpg">f9096864ad56aaca043734b2f0….jpg</span>)</span></p><a href="/GNFOS/src/1553926320979.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553926320979.jpg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2306" ><p class="intro"><input type="checkbox" class="delete" name="delete_2306" id="delete_2306" /><label for="delete_2306"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:21Z">03/31/19 (Sun) 22:22:21</time></label>&nbsp;<a class="post_no" id="post_no_2306" onclick="return highlightReply(2306, event)" href="/GNFOS/res/2306#2306">No.</a><a class="post_no" onclick="return citeReply(2306)" href="/GNFOS/res/2306#q2306">2306</a><a href="/GNFOS/res/2306">[Reply]</a></p><div class="body">What&#39;s a good PDF reader? I&#39;m using foxit reader and it fucking sucks.<br/><a href=https://gnfos.com/jp/res/341825>https://gnfos.com/jp/res/341825</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2305" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1535088023970.jpg">1535088023970.jpg</a> <span class="unimportant">(715.72 KB, 2450x3637, <span class="postfilename" title="__ump40_girls_frontline_drawn_by_eun_bari__12c80151988f4818ad133726b10bbbcc.jpg">__ump40_girls_frontline_dr….jpg</span>)</span></p><a href="/GNFOS/src/1535088023970.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1535088023970.jpg" style="width:162px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2305" ><p class="intro"><input type="checkbox" class="delete" name="delete_2305" id="delete_2305" /><label for="delete_2305"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:21Z">03/31/19 (Sun) 22:22:21</time></label>&nbsp;<a class="post_no" id="post_no_2305" onclick="return highlightReply(2305, event)" href="/GNFOS/res/2305#2305">No.</a><a class="post_no" onclick="return citeReply(2305)" href="/GNFOS/res/2305#q2305">2305</a><a href="/GNFOS/res/2305">[Reply]</a></p><div class="body">How do you deal with being literally, unironically retarded?<br/><a href=https://gnfos.com/jp/res/337489>https://gnfos.com/jp/res/337489</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2304" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553912444052.jpg">1553912444052.jpg</a> <span class="unimportant">(712.24 KB, 1251x1770, <span class="postfilename" title="__original_drawn_by_kagematsuri__3189f533af4cbb8a9189a98f06b6f003.jpg">__original_drawn_by_kagema….jpg</span>)</span></p><a href="/GNFOS/src/1553912444052.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553912444052.jpg" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2304" ><p class="intro"><input type="checkbox" class="delete" name="delete_2304" id="delete_2304" /><label for="delete_2304"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:21Z">03/31/19 (Sun) 22:22:21</time></label>&nbsp;<a class="post_no" id="post_no_2304" onclick="return highlightReply(2304, event)" href="/GNFOS/res/2304#2304">No.</a><a class="post_no" onclick="return citeReply(2304)" href="/GNFOS/res/2304#q2304">2304</a><a href="/GNFOS/res/2304">[Reply]</a></p><div class="body">review<br/><a href=https://gnfos.com/jp/res/341797>https://gnfos.com/jp/res/341797</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2303" data-board="GNFOS"><div class="video-container" data-video="W2S1oy2tsJ4"><a href="https://youtu.be/W2S1oy2tsJ4" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/W2S1oy2tsJ4/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2303" ><p class="intro"><input type="checkbox" class="delete" name="delete_2303" id="delete_2303" /><label for="delete_2303"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:21Z">03/31/19 (Sun) 22:22:21</time></label>&nbsp;<a class="post_no" id="post_no_2303" onclick="return highlightReply(2303, event)" href="/GNFOS/res/2303#2303">No.</a><a class="post_no" onclick="return citeReply(2303)" href="/GNFOS/res/2303#q2303">2303</a><a href="/GNFOS/res/2303">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/337785>https://gnfos.com/jp/res/337785</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2302" data-board="GNFOS"><div class="video-container" data-video="NUd1LB8zs9Y"><a href="https://youtu.be/NUd1LB8zs9Y" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/NUd1LB8zs9Y/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2302" ><p class="intro"><input type="checkbox" class="delete" name="delete_2302" id="delete_2302" /><label for="delete_2302"><span class="name">ELEETO NEETO Morimori-chan</span> <time datetime="2019-03-31T22:22:21Z">03/31/19 (Sun) 22:22:21</time></label>&nbsp;<a class="post_no" id="post_no_2302" onclick="return highlightReply(2302, event)" href="/GNFOS/res/2302#2302">No.</a><a class="post_no" onclick="return citeReply(2302)" href="/GNFOS/res/2302#q2302">2302</a><a href="/GNFOS/res/2302">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/337635>https://gnfos.com/jp/res/337635</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2301" data-board="GNFOS"><div class="video-container" data-video="IVNSRolWnCA"><a href="https://youtu.be/IVNSRolWnCA" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/IVNSRolWnCA/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2301" ><p class="intro"><input type="checkbox" class="delete" name="delete_2301" id="delete_2301" /><label for="delete_2301"><span class="name">Tada Banri</span> <time datetime="2019-03-31T22:22:21Z">03/31/19 (Sun) 22:22:21</time></label>&nbsp;<a class="post_no" id="post_no_2301" onclick="return highlightReply(2301, event)" href="/GNFOS/res/2301#2301">No.</a><a class="post_no" onclick="return citeReply(2301)" href="/GNFOS/res/2301#q2301">2301</a><a href="/GNFOS/res/2301">[Reply]</a></p><div class="body">Bitcoin at 1:20<br/><br/>Bitcoin is useable on cash app but no other crypto. You&#39;d be a fool to not realize Bitcoin will be worth double digits soon<br/><a href=https://gnfos.com/jp/res/341778>https://gnfos.com/jp/res/341778</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2300" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553909251351.jpg">1553909251351.jpg</a> <span class="unimportant">(108 KB, 900x900, <span class="postfilename">PMRants.jpg</span>)</span></p><a href="/GNFOS/src/1553909251351.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553909251351.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2300" ><p class="intro"><input type="checkbox" class="delete" name="delete_2300" id="delete_2300" /><label for="delete_2300"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:20Z">03/31/19 (Sun) 22:22:20</time></label>&nbsp;<a class="post_no" id="post_no_2300" onclick="return highlightReply(2300, event)" href="/GNFOS/res/2300#2300">No.</a><a class="post_no" onclick="return citeReply(2300)" href="/GNFOS/res/2300#q2300">2300</a><a href="/GNFOS/res/2300">[Reply]</a></p><div class="body">Rate me<br/><a href=https://gnfos.com/jp/res/341782>https://gnfos.com/jp/res/341782</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2299" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553903183718.jpg">1553903183718.jpg</a> <span class="unimportant">(130.74 KB, 598x900, <span class="postfilename">65542895_p3.jpg</span>)</span></p><a href="/GNFOS/src/1553903183718.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553903183718.jpg" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2299" ><p class="intro"><input type="checkbox" class="delete" name="delete_2299" id="delete_2299" /><label for="delete_2299"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:20Z">03/31/19 (Sun) 22:22:20</time></label>&nbsp;<a class="post_no" id="post_no_2299" onclick="return highlightReply(2299, event)" href="/GNFOS/res/2299#2299">No.</a><a class="post_no" onclick="return citeReply(2299)" href="/GNFOS/res/2299#q2299">2299</a><a href="/GNFOS/res/2299">[Reply]</a></p><div class="body">Nothing changes<br/>It only gets worse<br/>Nothing changes<br/>Waiting for a hearse<br/>There is no hope<br/>Escape is a hoax<br/>The pressure&#39;s building<br/>And I just can&#39;t cope<br/><a href=https://gnfos.com/jp/res/341768>https://gnfos.com/jp/res/341768</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2298" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553879938378.png">1553879938378.png</a> <span class="unimportant">(2.02 MB, 1270x1357, <span class="postfilename">1553875665453.png</span>)</span></p><a href="/GNFOS/src/1553879938378.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553879938378.png" style="width:225px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2298" ><p class="intro"><input type="checkbox" class="delete" name="delete_2298" id="delete_2298" /><label for="delete_2298"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:20Z">03/31/19 (Sun) 22:22:20</time></label>&nbsp;<a class="post_no" id="post_no_2298" onclick="return highlightReply(2298, event)" href="/GNFOS/res/2298#2298">No.</a><a class="post_no" onclick="return citeReply(2298)" href="/GNFOS/res/2298#q2298">2298</a><a href="/GNFOS/res/2298">[Reply]</a></p><div class="body">How come british food is never praised in movies?<br/><a href=https://gnfos.com/jp/res/341727>https://gnfos.com/jp/res/341727</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2297" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553869809975.png">1553869809975.png</a> <span class="unimportant">(1.13 MB, 960x600, <span class="postfilename" title="6BF636F6-8A1F-4DA7-9D42-9A241A4439BA.png">6BF636F6-8A1F-4DA7-9D42-9A….png</span>)</span></p><a href="/GNFOS/src/1553869809975.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553869809975.png" style="width:384px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2297" ><p class="intro"><input type="checkbox" class="delete" name="delete_2297" id="delete_2297" /><label for="delete_2297"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:19Z">03/31/19 (Sun) 22:22:19</time></label>&nbsp;<a class="post_no" id="post_no_2297" onclick="return highlightReply(2297, event)" href="/GNFOS/res/2297#2297">No.</a><a class="post_no" onclick="return citeReply(2297)" href="/GNFOS/res/2297#q2297">2297</a><a href="/GNFOS/res/2297">[Reply]</a></p><div class="body">You have to be retarded if you don&#39;t realize the Patriot act and other secret bills only reported on independent Internet sites are being created so they can be used<br/><a href=https://gnfos.com/jp/res/341710>https://gnfos.com/jp/res/341710</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2296" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553895120280.png">1553895120280.png</a> <span class="unimportant">(181.28 KB, 1046x1219, <span class="postfilename" title="0154BC99-C9C3-4811-9117-FA2EBBCEE4CD.png">0154BC99-C9C3-4811-9117-FA….png</span>)</span></p><a href="/GNFOS/src/1553895120280.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553895120280.png" style="width:206px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2296" ><p class="intro"><input type="checkbox" class="delete" name="delete_2296" id="delete_2296" /><label for="delete_2296"><span class="subject">Celebrity gossip general</span> <span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:19Z">03/31/19 (Sun) 22:22:19</time></label>&nbsp;<a class="post_no" id="post_no_2296" onclick="return highlightReply(2296, event)" href="/GNFOS/res/2296#2296">No.</a><a class="post_no" onclick="return citeReply(2296)" href="/GNFOS/res/2296#q2296">2296</a><a href="/GNFOS/res/2296">[Reply]</a></p><div class="body">MJ really did it and the actual mkultra psyop is getting people to think he&#39;s innocent<br/><a href=https://gnfos.com/jp/res/341755>https://gnfos.com/jp/res/341755</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/GNFOS/5" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/GNFOS/index">1</a>]				 [<a href="/GNFOS/2">2</a>]				 [<a href="/GNFOS/3">3</a>]				 [<a href="/GNFOS/4">4</a>]				 [<a href="/GNFOS/5">5</a>]				 [<a class="selected">6</a>]				 [<a href="/GNFOS/7">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/7" method="get"><input type="submit" value="Next" /></form>
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