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
			<img class="board_image" src="/static/banners/banner-kissu-2.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/GNFOS/ - Gay NEETs From Outer Space</h1>
	<div class="subtitle">
									The Neet Shall Inherit the Earth
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input  style="display:none"  type="text"  value="r⚘]sQ&lt;☿}FJY$ ⛛GANU\#wOveWo:dxaT4gibH☈.*&gt;⚴9@;⛳,pZ1&amp;-'☊l!7`Vy2RnEt3k(^M⛫cm"  name="ydweo♔4q738txp0z6⛝nmi1ac5fuh⚿l2s">
<div style="display:none"><input type="text" name="⛩610aeszgx43qli7rhubn" value="39%[DA1hY )J/`CB⛚uoei2☿Zn⚸g.kIy!sGqE0*z]m$-x}7&amp;☏Wfv+rL^;j☥5{F='a\?_b⚽N4OQ:w6@PKlU&lt;♊STHtd8,R~|V☽c&gt;("></div>
<input type="hidden" name="board" value="GNFOS">
<input style="display:none" type="text" name="⚿h⚫f5n7q32b4wl9pivu♭yjmds☦0ax8czk" value="$1&#86;⛻_&#117;IdxmysX&#112;A[YvHe&#94;&#69;&#60;&gt;L&amp;&#77;&#75;?:rC/+8&#78;)S F☊&#84;&#71;W&#106;}(@⛊9%#!&#79;&#119;{">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="8&#91;c@Ex`&#60;S&#88;W&#62;&#84;⛾|&amp;&#97;☻$&#94;)&#92;]~P!*L&#104;tGK&#66;" name="7⚂int9f1hly4kduq" type="hidden">
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
		<div class="thread" id="thread_2325" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553929528245.jpg">1553929528245.jpg</a> <span class="unimportant">(211.92 KB, 850x1213, <span class="postfilename" title="__izumi_sagiri_and_yamada_elf_eromanga_sensei_drawn_by_kanzaki_hiro__sample-a218f3155f99445d0ca439e8bf6e43bc.jpg">__izumi_sagiri_and_yamada_….jpg</span>)</span></p><a href="/GNFOS/src/1553929528245.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553929528245.jpg" style="width:168px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2325" ><p class="intro"><input type="checkbox" class="delete" name="delete_2325" id="delete_2325" /><label for="delete_2325"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:29Z">03/31/19 (Sun) 22:22:29</time></label>&nbsp;<a class="post_no" id="post_no_2325" onclick="return highlightReply(2325, event)" href="/GNFOS/res/2325#2325">No.</a><a class="post_no" onclick="return citeReply(2325)" href="/GNFOS/res/2325#q2325">2325</a><a href="/GNFOS/res/2325">[Reply]</a></p><div class="body">pissu stole gn&#39;s patented tab new replies notification<br/><a href=https://gnfos.com/jp/res/341834>https://gnfos.com/jp/res/341834</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2324" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553979237540.png">1553979237540.png</a> <span class="unimportant">(2.27 MB, 1280x1564, <span class="postfilename">main00b2f45a3e2bd1f498.png</span>)</span></p><a href="/GNFOS/src/1553979237540.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553979237540.png" style="width:196px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2324" ><p class="intro"><input type="checkbox" class="delete" name="delete_2324" id="delete_2324" /><label for="delete_2324"><span class="name">Idiot</span> <time datetime="2019-03-31T22:22:29Z">03/31/19 (Sun) 22:22:29</time></label>&nbsp;<a class="post_no" id="post_no_2324" onclick="return highlightReply(2324, event)" href="/GNFOS/res/2324#2324">No.</a><a class="post_no" onclick="return citeReply(2324)" href="/GNFOS/res/2324#q2324">2324</a><a href="/GNFOS/res/2324">[Reply]</a></p><div class="body">qa + ota in front<br/>gn in the back<br/><a href=https://gnfos.com/jp/res/341921>https://gnfos.com/jp/res/341921</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2323" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553980298594.png">1553980298594.png</a> <span class="unimportant">(48.68 KB, 604x585, <span class="postfilename">1522998989626.png</span>)</span></p><a href="/GNFOS/src/1553980298594.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553980298594.png" style="width:248px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2323" ><p class="intro"><input type="checkbox" class="delete" name="delete_2323" id="delete_2323" /><label for="delete_2323"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:29Z">03/31/19 (Sun) 22:22:29</time></label>&nbsp;<a class="post_no" id="post_no_2323" onclick="return highlightReply(2323, event)" href="/GNFOS/res/2323#2323">No.</a><a class="post_no" onclick="return citeReply(2323)" href="/GNFOS/res/2323#q2323">2323</a><a href="/GNFOS/res/2323">[Reply]</a></p><div class="body"><a href="https://www.dailymail.co.uk/news/article-6868235/Dentists-urge-parents-childrens-baby-teeth-new-research-shows-treat-cancer.html" rel="nofollow" target="_blank">https://www.dailymail.co.uk/news/article-6868235/Dentists-urge-parents-childrens-baby-teeth-new-research-shows-treat-cancer.html</a><br/><br/>i h ope my mom kept my baby teeth<br/><a href=https://gnfos.com/jp/res/341927>https://gnfos.com/jp/res/341927</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2322" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553963896216.jpeg">1553963896216.jpeg</a> <span class="unimportant">(72.46 KB, 481x700, <span class="postfilename" title="11D3C633-7F15-4E06-9ACA-70F6F98E0EFC.jpeg">11D3C633-7F15-4E06-9ACA-7….jpeg</span>)</span></p><a href="/GNFOS/src/1553963896216.jpeg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553963896216.jpeg" style="width:165px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2322" ><p class="intro"><input type="checkbox" class="delete" name="delete_2322" id="delete_2322" /><label for="delete_2322"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:28Z">03/31/19 (Sun) 22:22:28</time></label>&nbsp;<a class="post_no" id="post_no_2322" onclick="return highlightReply(2322, event)" href="/GNFOS/res/2322#2322">No.</a><a class="post_no" onclick="return citeReply(2322)" href="/GNFOS/res/2322#q2322">2322</a><a href="/GNFOS/res/2322">[Reply]</a></p><div class="body">Who do you talk to about your problems when you have no one<br/><a href=https://gnfos.com/jp/res/341874>https://gnfos.com/jp/res/341874</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2321" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553974699451.webm">1553974699451.webm</a> <span class="unimportant">(1.82 MB, 720x540, <span class="postfilename">sakura.webm</span>)</span></p><a href="/player.php?v=/GNFOS/src/1553974699451.webm&amp;t=sakura.webm&amp;loop=1" target="_blank" class="file"><video autoplay class="post-image" src="/GNFOS/thumb/1553974699451.webm" poster="/static/kissu-video.png" style="width:320px;height:240px"></video></a></div>    </div>    <div class="post op" id="op_2321" ><p class="intro"><input type="checkbox" class="delete" name="delete_2321" id="delete_2321" /><label for="delete_2321"><span class="name">Idiot</span> <time datetime="2019-03-31T22:22:28Z">03/31/19 (Sun) 22:22:28</time></label>&nbsp;<a class="post_no" id="post_no_2321" onclick="return highlightReply(2321, event)" href="/GNFOS/res/2321#2321">No.</a><a class="post_no" onclick="return citeReply(2321)" href="/GNFOS/res/2321#q2321">2321</a><a href="/GNFOS/res/2321">[Reply]</a></p><div class="body">sigh with me bros make sure to spend al your money on cbd<br/><a href=https://gnfos.com/jp/res/341907>https://gnfos.com/jp/res/341907</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2320" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553928278971.jpg">1553928278971.jpg</a> <span class="unimportant">(621.03 KB, 1000x1517, <span class="postfilename" title="__izumi_sagiri_eromanga_sensei_drawn_by_aimee_emi__4df126fd3a57b9f01f4b1a0ed58d62dd.jpg">__izumi_sagiri_eromanga_se….jpg</span>)</span></p><a href="/GNFOS/src/1553928278971.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553928278971.jpg" style="width:158px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2320" ><p class="intro"><input type="checkbox" class="delete" name="delete_2320" id="delete_2320" /><label for="delete_2320"><span class="name">Idiot</span> <time datetime="2019-03-31T22:22:27Z">03/31/19 (Sun) 22:22:27</time></label>&nbsp;<a class="post_no" id="post_no_2320" onclick="return highlightReply(2320, event)" href="/GNFOS/res/2320#2320">No.</a><a class="post_no" onclick="return citeReply(2320)" href="/GNFOS/res/2320#q2320">2320</a><a href="/GNFOS/res/2320">[Reply]</a></p><div class="body">?<br/><a href=https://gnfos.com/jp/res/341828>https://gnfos.com/jp/res/341828</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2319" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553909139192.png">1553909139192.png</a> <span class="unimportant">(1.46 MB, 1290x725, <span class="postfilename">1553886992515.png</span>)</span></p><a href="/GNFOS/src/1553909139192.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553909139192.png" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2319" ><p class="intro"><input type="checkbox" class="delete" name="delete_2319" id="delete_2319" /><label for="delete_2319"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:27Z">03/31/19 (Sun) 22:22:27</time></label>&nbsp;<a class="post_no" id="post_no_2319" onclick="return highlightReply(2319, event)" href="/GNFOS/res/2319#2319">No.</a><a class="post_no" onclick="return citeReply(2319)" href="/GNFOS/res/2319#q2319">2319</a><a href="/GNFOS/res/2319">[Reply]</a></p><div class="body">What&#39;s with speedrunners becoming trannies?<br/><a href=https://gnfos.com/jp/res/341781>https://gnfos.com/jp/res/341781</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2318" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553971377860.png">1553971377860.png</a> <span class="unimportant">(599.75 KB, 1024x1024, <span class="postfilename">1447727009278.png</span>)</span></p><a href="/GNFOS/src/1553971377860.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553971377860.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2318" ><p class="intro"><input type="checkbox" class="delete" name="delete_2318" id="delete_2318" /><label for="delete_2318"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:27Z">03/31/19 (Sun) 22:22:27</time></label>&nbsp;<a class="post_no" id="post_no_2318" onclick="return highlightReply(2318, event)" href="/GNFOS/res/2318#2318">No.</a><a class="post_no" onclick="return citeReply(2318)" href="/GNFOS/res/2318#q2318">2318</a><a href="/GNFOS/res/2318">[Reply]</a></p><div class="body">It sure feels nice to live without the fear of being evicted.<br/><a href=https://gnfos.com/jp/res/341893>https://gnfos.com/jp/res/341893</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2317" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553972411345.jpg">1553972411345.jpg</a> <span class="unimportant">(166.19 KB, 500x600, <span class="postfilename">1550573391091.jpg</span>)</span></p><a href="/GNFOS/src/1553972411345.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553972411345.jpg" style="width:200px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2317" ><p class="intro"><input type="checkbox" class="delete" name="delete_2317" id="delete_2317" /><label for="delete_2317"><span class="name">Tada Banri</span> <time datetime="2019-03-31T22:22:26Z">03/31/19 (Sun) 22:22:26</time></label>&nbsp;<a class="post_no" id="post_no_2317" onclick="return highlightReply(2317, event)" href="/GNFOS/res/2317#2317">No.</a><a class="post_no" onclick="return citeReply(2317)" href="/GNFOS/res/2317#q2317">2317</a><a href="/GNFOS/res/2317">[Reply]</a></p><div class="body"><a href="https://youtu.be/c4yTaP6roTw?t=61" rel="nofollow" target="_blank">https://youtu.be/c4yTaP6roTw?t=61</a><br/><a href=https://gnfos.com/jp/res/341896>https://gnfos.com/jp/res/341896</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2316" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553972107680.gif">1553972107680.gif</a> <span class="unimportant">(331.53 KB, 500x520, <span class="postfilename">1547082730730.gif</span>)</span></p><a href="/GNFOS/src/1553972107680.gif" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553972107680.gif" style="width:231px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2316" ><p class="intro"><input type="checkbox" class="delete" name="delete_2316" id="delete_2316" /><label for="delete_2316"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:26Z">03/31/19 (Sun) 22:22:26</time></label>&nbsp;<a class="post_no" id="post_no_2316" onclick="return highlightReply(2316, event)" href="/GNFOS/res/2316#2316">No.</a><a class="post_no" onclick="return citeReply(2316)" href="/GNFOS/res/2316#q2316">2316</a><a href="/GNFOS/res/2316">[Reply]</a></p><div class="body">am i really not special? am i really just a flawed being like you all<br/><a href=https://gnfos.com/jp/res/341895>https://gnfos.com/jp/res/341895</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2315" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553956157778.png">1553956157778.png</a> <span class="unimportant">(909.39 KB, 778x1100, <span class="postfilename" title="1F711F7C14164F87A6DCFF9CA88516B3.png">1F711F7C14164F87A6DCFF9CA8….png</span>)</span></p><a href="/GNFOS/src/1553956157778.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553956157778.png" style="width:170px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2315" ><p class="intro"><input type="checkbox" class="delete" name="delete_2315" id="delete_2315" /><label for="delete_2315"><span class="name">/QA/ Poster</span> <time datetime="2019-03-31T22:22:26Z">03/31/19 (Sun) 22:22:26</time></label>&nbsp;<a class="post_no" id="post_no_2315" onclick="return highlightReply(2315, event)" href="/GNFOS/res/2315#2315">No.</a><a class="post_no" onclick="return citeReply(2315)" href="/GNFOS/res/2315#q2315">2315</a><a href="/GNFOS/res/2315">[Reply]</a></p><div class="body">Will money truly get rid of my insecurities?<br/><span class="quote"><br/>&gt;5” dicklet</span><br/><span class="quote">&gt;5’11” (5’10.5”) manlet</span><br/><a href=https://gnfos.com/jp/res/341855>https://gnfos.com/jp/res/341855</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2314" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553910845522.jpg">1553910845522.jpg</a> <span class="unimportant">(102.42 KB, 666x1000, <span class="postfilename">1553878129621.jpg</span>)</span></p><a href="/GNFOS/src/1553910845522.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553910845522.jpg" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2314" ><p class="intro"><input type="checkbox" class="delete" name="delete_2314" id="delete_2314" /><label for="delete_2314"><span class="name">Diarrhea Dan</span> <time datetime="2019-03-31T22:22:25Z">03/31/19 (Sun) 22:22:25</time></label>&nbsp;<a class="post_no" id="post_no_2314" onclick="return highlightReply(2314, event)" href="/GNFOS/res/2314#2314">No.</a><a class="post_no" onclick="return citeReply(2314)" href="/GNFOS/res/2314#q2314">2314</a><a href="/GNFOS/res/2314">[Reply]</a></p><div class="body"><span class="quote">&gt;easy on the ice, toots</span><br/><a href=https://gnfos.com/jp/res/341788>https://gnfos.com/jp/res/341788</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2313" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553934461871.jpg">1553934461871.jpg</a> <span class="unimportant">(104.28 KB, 470x429, <span class="postfilename">200808070234033.jpg</span>)</span></p><a href="/GNFOS/src/1553934461871.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553934461871.jpg" style="width:263px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2313" ><p class="intro"><input type="checkbox" class="delete" name="delete_2313" id="delete_2313" /><label for="delete_2313"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:25Z">03/31/19 (Sun) 22:22:25</time></label>&nbsp;<a class="post_no" id="post_no_2313" onclick="return highlightReply(2313, event)" href="/GNFOS/res/2313#2313">No.</a><a class="post_no" onclick="return citeReply(2313)" href="/GNFOS/res/2313#q2313">2313</a><a href="/GNFOS/res/2313">[Reply]</a></p><div class="body">Man&#39;s love is man&#39;s life.<br/>Each friend represents a world in us.<br/><br/>A beauty is a woman you notice.<br/>Never self-possessed, or prudent.<br/>Do not wish to be anything except what you are<br/><br/>Keep me as the apple of the eye.<br/>Do all things with love.<br/><a href=https://gnfos.com/jp/res/341840>https://gnfos.com/jp/res/341840</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2312" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553919069849.png">1553919069849.png</a> <span class="unimportant">(37.37 KB, 605x328, <span class="postfilename">notch_tweet.png</span>)</span></p><a href="/GNFOS/src/1553919069849.png" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553919069849.png" style="width:427px;height:231px" alt="" /></a></div>    </div>    <div class="post op" id="op_2312" ><p class="intro"><input type="checkbox" class="delete" name="delete_2312" id="delete_2312" /><label for="delete_2312"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:25Z">03/31/19 (Sun) 22:22:25</time></label>&nbsp;<a class="post_no" id="post_no_2312" onclick="return highlightReply(2312, event)" href="/GNFOS/res/2312#2312">No.</a><a class="post_no" onclick="return citeReply(2312)" href="/GNFOS/res/2312#q2312">2312</a><a href="/GNFOS/res/2312">[Reply]</a></p><div class="body"><span class="quote">&gt;&gt;13161208</span><br/><span class="quote">&gt;the autist that gets rich off meme coins but is still a retardedly autistic member of society</span><br/><br/>This is basically what Notch&#39;s life has become. In his case, instead of money it was the rights to Minecraft, but he dumped his bags and ended up in the same scenario you described.<br/><span class="quote"><br/>&gt;used a portion of the $2.5 billion of his Minecraft money to buy the most expensive house in Beverly Hills, a huge thing that&#39;s basically built for hosting large parties</span><br/><span class="quote">&gt;hardly anyone ever comes over, he almost never hosts parties either</span><br/><span class="quote">&gt;entire room devoted to having a ton of candy in it</span><br/><span class="quote">&gt;has so few guests that most of the candy ends up rotting and he had to throw it away. People on Twitter that hate him always bring this up to show how lonesome he is</span><br/><span class="quote">&gt;has a basically infinite amount of shekels but girls still don&#39;t want him, pic related</span><br/><span class="quote">&gt;it&#39;s now been a few years and all he does now is get into stupid arguments on Twitter as if he&#39;s Dobson</span><br/><a href=https://gnfos.com/jp/res/341810>https://gnfos.com/jp/res/341810</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2311" data-board="GNFOS">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/GNFOS/src/1553958096678.jpg">1553958096678.jpg</a> <span class="unimportant">(399.67 KB, 1213x1687, <span class="postfilename">1469040913256.jpg</span>)</span></p><a href="/GNFOS/src/1553958096678.jpg" target="_blank"><img class="post-image" src="/GNFOS/thumb/1553958096678.jpg" style="width:173px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2311" ><p class="intro"><input type="checkbox" class="delete" name="delete_2311" id="delete_2311" /><label for="delete_2311"><span class="name">The Dastardly Duo</span> <time datetime="2019-03-31T22:22:25Z">03/31/19 (Sun) 22:22:25</time></label>&nbsp;<a class="post_no" id="post_no_2311" onclick="return highlightReply(2311, event)" href="/GNFOS/res/2311#2311">No.</a><a class="post_no" onclick="return citeReply(2311)" href="/GNFOS/res/2311#q2311">2311</a><a href="/GNFOS/res/2311">[Reply]</a></p><div class="body"><a href="https://blog.gotinder.com/introducing-height-verification/" rel="nofollow" target="_blank">https://blog.gotinder.com/introducing-height-verification/</a><br/><span class="quote"><br/>&gt;It’s come to our attention that most of you 5’10ers out there are actually 5’6. The charade must stop. This type of dishonestly doesn’t just hurt your matches — it hurts us, too. Did it ever occur to you that we’re 5’6 and actually love our medium height? Did it ever occur to you that honesty is what separates humans from sinister monsters? Of course not.</span><br/><span class="quote"><br/>&gt;You were only thinking of yourself. Well, height-lying ends here. To require everyone under 6’ to own up to their real height, we’re bringing truthfulness back into the world of online dating</span><br/><a href=https://gnfos.com/jp/res/341863>https://gnfos.com/jp/res/341863</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/GNFOS/4" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/GNFOS/index">1</a>]				 [<a href="/GNFOS/2">2</a>]				 [<a href="/GNFOS/3">3</a>]				 [<a href="/GNFOS/4">4</a>]				 [<a class="selected">5</a>]				 [<a href="/GNFOS/6">6</a>]				 [<a href="/GNFOS/7">7</a>]				 [<a href="/GNFOS/8">8</a>] 		 <form action="/GNFOS/6" method="get"><input type="submit" value="Next" /></form>
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