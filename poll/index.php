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
            , board_name = "poll";
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
							<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>			<title>/poll/ - Polling and Honesty</title>

</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://what-ch.mooo.com/what/">what</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-25.jpg" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	
        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", '/motd.txt');
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
	<h1 style="padding-top:10px;">/poll/ - Polling and Honesty</h1>
	<div class="subtitle">
									use for asking the community
								</div>
	</header>
	<h1 id="pollheader" style="display:none">New poll</h1>

	<div id="topcontainer">
	
	

	<div>
						<form id="pollform" class="form_submit" style="display:none" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="vfriwka☨1cl40xnbgs♨zm2♪63t⚊yp" value="" type="hidden">
<textarea style="display:none" name="q" >omQ&#9860;&gt;'%&#96;A$^+]&#85;1qP&#98;&#77;&#57;g&#68;@:5)⚮jh☯0k&#124;CE&#120;&lt;vin!#⛼(4&#108;&#87;,&#9901;{T&#119;Y\&#9894;/a&#73;s d6Z&#71;SH♉y&#86;&#9924;-♏&#126;&#51;*Jc&amp;&#76;</textarea >
<input type="hidden" name="board" value="poll">
<textarea name="xbi1h4k☮md8zt9o⚵⚢3w0⚸yq2g" style="display:none">5;`Qp1l☛=N8L♁@Cg*?HXOqG:&amp;jry⛌⚺0b7zE4Uh&gt;'Y</textarea>
	<input type="hidden" name="page" value="1">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="ys☃2dv8wjo5a♀p♬zceth40x⛕" value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  type="hidden"  name="lastname"  value=""  >
			</td>
		</tr>		<tr id="emailrow" style="display:none">
			<th>
				Options				<div style="display:none"><input type="text" name="url" value="vi.tY&#41;=&#42;sW98CrFcb&#106;_&#121;&#49;[V+6&amp;/&#111;&#93;⚋&#33;☱⚑P:0p}X&#9906;♀&#9864;$z&#55;#a&#9818;ZD"></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
								<div style="display:none"><input type="text" name="firstname" value="C4Vf&gt;AHa0kw()EjIJ=P,1y~⛱⚁3hX/'"></div>
			
			
				
			</td>
		</tr>		<tr id="subjectrow" style="display:table-row">
			<th>
				Subject				
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
			</td>
		</tr>
		
<tr id="pollrow"><th>Poll Questions</th>
<td id="polldata">
<span><span>Option 1: </span><input type="text" name="pollopt1" id="pollopt1"><br/></span>
<span><span>Option 2: </span><input type="text" name="pollopt2" id="pollopt2"> <input type="button" id="boostcount" onclick="
if(this.previousElementSibling.name=='pollopt2'){
	this.nextElementSibling.removeAttribute('disabled')
}
input_container = this.parentNode.cloneNode(true);
input_container.firstChild.nextElementSibling.id = 'pollopt' + (1 + parseInt(input_container.firstChild.textContent.split(' ')[1].replace(':','')));
input_container.firstChild.nextElementSibling.name = input_container.firstChild.nextSibling.id;
document.getElementById('polldata').appendChild(input_container);
input_container.firstChild.textContent = 'Option ' + (1 + parseInt(input_container.firstChild.textContent.split(' ')[1].replace(':',''))) + ': '; 
document.getElementById('polldata').appendChild(input_container);

this.parentNode.removeChild(this.nextElementSibling);
this.parentNode.removeChild(this);

return false

" value="+"/><input type="button" id="retractcount" onclick="

if(this.previousElementSibling.previousElementSibling.name=='pollopt3'){
	this.setAttribute('disabled','');
}
var next_in_line = this.parentNode.previousSibling;
next_in_line.removeChild(next_in_line.lastChild);
next_in_line.appendChild(this.previousElementSibling.cloneNode());
next_in_line.appendChild(this.cloneNode());
next_in_line.appendChild(document.createElement('br'));
this.parentNode.parentNode.removeChild(this.parentNode);
	
return false
" value="-" disabled/><br/></span></td>
</tr>
<tr id="polloptrow"><th>Poll Options</th><td>
<label><input type="checkbox" name="multisel"> Multi-Choice</label><br/>
<label><input type="number" name="postthresh" style="width:38px" value="0">Min Kissu Posts</label>
<label><input type="number" name="lifespan" style="width:38px" value="24"> Poll Life(0 hours is unlimited)</label>

</td></tr>


		<tr>
			<th>
				Comment				
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				
				
			</td>
		</tr>
										
		
		<tr id="additional_clicker"><td colspan="2"><button onclick="
visible = $('tr[id=namerow]').css('display') == 'table-row';
if(!visible){
	$('tr[id=namerow]').css('display', 'table-row');
	$('tr[id=emailrow]').css('display', 'table-row');
	$('tr[id=filerow]').css('display', 'table-row');
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
	$('tr[id=emailrow]').css('display', 'none');
	$('tr[id=filerow]').css('display', 'none');
	$('input[id=subject_submit]').css('display', 'table-row');
	$('input[id=email_submit]').css('display', 'none');
	$('tr[id=embedrow]').css('display','none');
	$('tr[id=advancedoptrow]').css('display', 'none');
	$('tr[id=captcharow]').css('display', 'none');
	$('tr[id=spoilerrow]').css('display', 'none');
	$('tr[id=pswrdrow]').css('display', 'none');
this.textContent = '[View Hidden Options]';
}
return false;
">[View Hidden Options]</a></td></tr>
<tr id="filerow" style="display:none">
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

<input type="hidden" name="hash" value="c1ab9e4b726fbfb25383c7b1730c4f187e764be3">
</form>
<div style="text-align:center">
	<input type="button" id="polldisplay" value="Create New Poll" style="font-size: 18px;"/>
</div>
<script type="text/javascript">
	rememberStuff();
	document.getElementById("polldisplay").onclick = function(){
		this.style = "display:none";

		document.getElementById("pollheader").style = "display:block";
		document.getElementById("pollform").style = "display:block";
}
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter">New board <a href="/poll/">/poll/</a><hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/poll/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/poll/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="poll" />
		<div class="thread" id="thread_11" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569901988512.jpg">1569901988512.jpg</a> <span class="unimportant">(7.47 KB, 163x233, <span class="postfilename">skub.jpg</span>)</span></p><a href="/poll/src/1569901988512.jpg" target="_blank"><img class="post-image" src="/poll/thumb/1569901988512.png" style="width:163px;height:233px" alt="" /></a></div>    </div>    <div class="post op" id="op_11" ><p class="intro"><input type="checkbox" class="delete" name="delete_11" id="delete_11" /><label for="delete_11"><span class="name">Anonymous</span> <time datetime="2019-10-01T03:53:08Z">10/01/19 (Tue) 03:53:08</time></label>&nbsp;<a class="post_no" id="post_no_11" onclick="return highlightReply(11, event)" href="/poll/res/11#11">No.</a><a class="post_no" onclick="return citeReply(11)" href="/poll/res/11#q11">11</a><a href="/poll/res/11">[Reply]</a></p><div class="body"><div data-lifespan='10000' data-creationtime='1569901988' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>PRO SKUB</label><br/><label><input type='radio' name='pollopt[]' value='1'/>ANTI SKUB</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Cast Vote'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1" data-board="poll"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/UcSB-hfHbYc" allowfullscreen></iframe>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><span class="subject">QWERTY</span> <span class="name">Anonymous</span> <time datetime="2019-10-01T00:46:17Z">10/01/19 (Tue) 00:46:17</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="return highlightReply(1, event)" href="/poll/res/1#1">No.</a><a class="post_no" onclick="return citeReply(1)" href="/poll/res/1#q1">1</a><a href="/poll/res/1">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569890777' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>this</label><br/><label><input type='radio' name='pollopt[]' value='1'/>is</label><br/><label><input type='radio' name='pollopt[]' value='2'/>way</label><br/><label><input type='radio' name='pollopt[]' value='3'/>too</label><br/><label><input type='radio' name='pollopt[]' value='4'/>many</label><br/><label><input type='radio' name='pollopt[]' value='5'/>options</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Cast Vote'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/></div></div><div class="post reply" id="reply_9"><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span class="name">Anonymous</span> <time datetime="2019-10-01T03:52:34Z">10/01/19 (Tue) 03:52:34</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="return highlightReply(9, event)" href="/poll/res/1#9">No.</a><a class="post_no" onclick="return citeReply(9)" href="/poll/res/1#q9">9</a></p>        <div class="files">    </div>         <div class="body" >not really&hellip; just depends on what you're polling&hellip;</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_2" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569890970283.png">1569890970283.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569890970283.png" target="_blank"><img class="post-image" src="/poll/thumb/1569890970283.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2" ><p class="intro"><input type="checkbox" class="delete" name="delete_2" id="delete_2" /><label for="delete_2"><span class="subject">VIP POLL</span> <span class="name">Anonymous</span> <time datetime="2019-10-01T00:49:30Z">10/01/19 (Tue) 00:49:30</time></label>&nbsp;<a class="post_no" id="post_no_2" onclick="return highlightReply(2, event)" href="/poll/res/2#2">No.</a><a class="post_no" onclick="return citeReply(2)" href="/poll/res/2#q2">2</a><a href="/poll/res/2">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569890970' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>I could submit</label><br/><label><input type='radio' name='pollopt[]' value='1'/>I could not submit</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Cast Vote'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>You need 2 posts on this site to post here</div></div><div class="post reply" id="reply_3"><p class="intro"><input type="checkbox" class="delete" name="delete_3" id="delete_3" /><label for="delete_3"><span class="name">Anonymous</span> <time datetime="2019-10-01T00:51:51Z">10/01/19 (Tue) 00:51:51</time></label>&nbsp;<a class="post_no" id="post_no_3" onclick="return highlightReply(3, event)" href="/poll/res/2#3">No.</a><a class="post_no" onclick="return citeReply(3)" href="/poll/res/2#q3">3</a></p>        <div class="files">    </div>         <div class="body" >I mean vote&hellip;</div></div><br/><div class="post reply" id="reply_8"><p class="intro"><input type="checkbox" class="delete" name="delete_8" id="delete_8" /><label for="delete_8"><span class="name">Anonymous</span> <time datetime="2019-10-01T03:52:01Z">10/01/19 (Tue) 03:52:01</time></label>&nbsp;<a class="post_no" id="post_no_8" onclick="return highlightReply(8, event)" href="/poll/res/2#8">No.</a><a class="post_no" onclick="return citeReply(8)" href="/poll/res/2#q8">8</a></p>        <div class="files">    </div>         <div class="body" >i could</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_4" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569894667311.jpg">1569894667311.jpg</a> <span class="unimportant">(70.57 KB, 1280x720, <span class="postfilename">1509819184949.jpg</span>)</span></p><a href="/poll/src/1569894667311.jpg" target="_blank"><img class="post-image" src="/poll/thumb/1569894667311.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_4" ><p class="intro"><input type="checkbox" class="delete" name="delete_4" id="delete_4" /><label for="delete_4"><span class="subject">Pick a leader</span> <span class="name">Anonymous</span> <time datetime="2019-10-01T01:51:07Z">10/01/19 (Tue) 01:51:07</time></label>&nbsp;<a class="post_no" id="post_no_4" onclick="return highlightReply(4, event)" href="/poll/res/4#4">No.</a><a class="post_no" onclick="return citeReply(4)" href="/poll/res/4#q4">4</a><a href="/poll/res/4">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569894667' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>Adolph Hitler</label><br/><label><input type='radio' name='pollopt[]' value='1'/>Trevor R. Richardson</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Cast Vote'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/></div></div><div class="post reply" id="reply_10"><p class="intro"><input type="checkbox" class="delete" name="delete_10" id="delete_10" /><label for="delete_10"><a class="sage" href="javascript:void(0); sage"><span class="name">Anonymous</span></a> <time datetime="2019-10-01T03:53:01Z">10/01/19 (Tue) 03:53:01</time></label>&nbsp;<a class="post_no" id="post_no_10" onclick="return highlightReply(10, event)" href="/poll/res/4#10">No.</a><a class="post_no" onclick="return citeReply(10)" href="/poll/res/4#q10">10</a></p>        <div class="files">    </div>         <div class="body" >as it should be</div></div><br/><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/poll/catalog">[Catalog]</a>
		                <a id="archive-link-bottom" href="/poll/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://what-ch.mooo.com/what/">what</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/poll/catalog">Catalog</a>
			</div>
	

	

	<footer>
	<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
		<a href="https://engine.vichan.net/">vichan</a> 5.1.4 
		+ <a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> 5.1.4 -
	<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
	<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel
	<br><a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> Copyleft 2018-2019</p>
		<p class="unimportant" style="text-align:center;">All trademarks, copyrights, comments, and images on this page are owned by and are the responsibility of their respective parties.</p><p class="unimportant" style="text-align:center;">Concerns to the gmail of ECVerniy</p></footer>
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