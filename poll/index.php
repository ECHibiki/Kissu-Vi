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
							<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>			<title>/poll/ - polling</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-6.png" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	
        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", 'https://kissu.moe/motd.txt');
                request.onreadystatechange = function() { 
                if (this.readyState === 4 && this.status === 200) {
                        motd = this.responseText;
                        console.log(motd);
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
	<h1 style="padding-top:10px;">/poll/ - polling</h1>
	<div class="subtitle">
					</div>
	</header>
	<h1 id="pollheader" style="display:none">New poll</h1>

	<div id="topcontainer">
	
	

	<div>
						<form id="pollform" class="form_submit" style="display:none" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input value="d♻-8x⛷K7+⛚⛈SL#%g*♅w3ONHc☱TX;y6_^I'aluA:~]Mrp/fY2VW" name="text" type="hidden">
<input type="hidden" name="firstname" value="YOD]☢[BmThv}z☛xA{J2pXIL&gt;3$^☕u%q!sdfe⚏NwU6M9(⛞CbPj/kFH`QK*;8 lW1,+)o5nay☵r_t⛚">
<input type="hidden" name="board" value="poll">
<div style="display:none"><input type="text" name="kg⛅0j☔86zxomf592h⚿4raciyb⚭e13qvuntl" value="h~Wa&lt;&amp;J/7b♻"></div>
	<input type="hidden" name="page" value="1">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="7pzv80rbmkyf♤9u1dq2i5♾lwatj" value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div   style="display:none"><input   type="text"   name="login"   value="YiD}Zq&lt;:vF %Q9j(3rhzI_&amp;sb6☃xSf#O⚆Mtl"></div>
			</td>
		</tr>		<tr id="emailrow" style="display:none">
			<th>
				Options				<input type="hidden" value="'!:mE*ekd♮" name="url">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
								<span style="display:none"><input type="text" name="user" value="♥8⛲K1LG&lt;&gt;^n$73Q,;o☛B}vh?%a♃⛜I⚅+_#2tx/☧"></span>
			
			
				
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

<input type="hidden" name="hash" value="36868dd753602c798a7f7b80219bbfd285c9be78">
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
	<hr /><div class="blotter"><h2></h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/poll/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/poll/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="poll" />
		<div class="thread" id="thread_70" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_70" ><p class="intro"><input type="checkbox" class="delete" name="delete_70" id="delete_70" /><label for="delete_70"><span class="name">Anonymous</span> <time datetime="2019-09-30T09:23:16Z">09/30/19 (Mon) 09:23:16</time></label>&nbsp;<a class="post_no" id="post_no_70" onclick="return highlightReply(70, event)" href="/poll/res/70#70">No.</a><a class="post_no" onclick="return citeReply(70)" href="/poll/res/70#q70">70</a><a href="/poll/res/70">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569835396' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>asd</label><br/><label><input type='radio' name='pollopt[]' value='1'/>f</label><br/><label><input type='radio' name='pollopt[]' value='2'/>g</label><br/><label><input type='radio' name='pollopt[]' value='3'/>g</label><br/><label><input type='radio' name='pollopt[]' value='4'/>g</label><br/><label><input type='radio' name='pollopt[]' value='5'/>g</label><br/><label><input type='radio' name='pollopt[]' value='6'/>g</label><br/><label><input type='radio' name='pollopt[]' value='7'/>g</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asdasdasd asdasdasd asdasdasd <br/>asdasdasd <br/>asdasdasd asdasdasd <br/><br/>asdasdasd</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_69" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569833097858.png">1569833097858.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569833097858.png" target="_blank"><img class="post-image" src="/poll/thumb/1569833097858.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_69" ><p class="intro"><input type="checkbox" class="delete" name="delete_69" id="delete_69" /><label for="delete_69"><span class="name">Anonymous</span> <time datetime="2019-09-30T08:44:57Z">09/30/19 (Mon) 08:44:57</time></label>&nbsp;<a class="post_no" id="post_no_69" onclick="return highlightReply(69, event)" href="/poll/res/69#69">No.</a><a class="post_no" onclick="return citeReply(69)" href="/poll/res/69#q69">69</a><a href="/poll/res/69">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569833097' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>test 1</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>test 1</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>test 2</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>testetest</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_68" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_68" ><p class="intro"><input type="checkbox" class="delete" name="delete_68" id="delete_68" /><label for="delete_68"><span class="name">Anonymous</span> <time datetime="2019-09-30T07:05:29Z">09/30/19 (Mon) 07:05:29</time></label>&nbsp;<a class="post_no" id="post_no_68" onclick="return highlightReply(68, event)" href="/poll/res/68#68">No.</a><a class="post_no" onclick="return citeReply(68)" href="/poll/res/68#q68">68</a><a href="/poll/res/68">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569827129' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>,</label><br/><label><input type='radio' name='pollopt[]' value='1'/>knmj</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_67" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_67" ><p class="intro"><input type="checkbox" class="delete" name="delete_67" id="delete_67" /><label for="delete_67"><span class="name">Anonymous</span> <time datetime="2019-09-30T07:04:06Z">09/30/19 (Mon) 07:04:06</time></label>&nbsp;<a class="post_no" id="post_no_67" onclick="return highlightReply(67, event)" href="/poll/res/67#67">No.</a><a class="post_no" onclick="return citeReply(67)" href="/poll/res/67#q67">67</a><a href="/poll/res/67">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569827046' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>z</label><br/><label><input type='radio' name='pollopt[]' value='1'/>xc</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asdv</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_66" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_66" ><p class="intro"><input type="checkbox" class="delete" name="delete_66" id="delete_66" /><label for="delete_66"><span class="subject">te</span> <span class="name">Anonymous</span> <time datetime="2019-09-30T06:57:38Z">09/30/19 (Mon) 06:57:38</time></label>&nbsp;<a class="post_no" id="post_no_66" onclick="return highlightReply(66, event)" href="/poll/res/66#66">No.</a><a class="post_no" onclick="return citeReply(66)" href="/poll/res/66#q66">66</a><a href="/poll/res/66">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569826658' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>tew</label><br/><label><input type='radio' name='pollopt[]' value='1'/>tez</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asd</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_65" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_65" ><p class="intro"><input type="checkbox" class="delete" name="delete_65" id="delete_65" /><label for="delete_65"><span class="subject">NEW</span> <span class="name">Anonymous</span> <time datetime="2019-09-30T06:50:01Z">09/30/19 (Mon) 06:50:01</time></label>&nbsp;<a class="post_no" id="post_no_65" onclick="return highlightReply(65, event)" href="/poll/res/65#65">No.</a><a class="post_no" onclick="return citeReply(65)" href="/poll/res/65#q65">65</a><a href="/poll/res/65">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569826201' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>sdfs</label><br/><label><input type='radio' name='pollopt[]' value='1'/>ggg</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asdf</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_64" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_64" ><p class="intro"><input type="checkbox" class="delete" name="delete_64" id="delete_64" /><label for="delete_64"><span class="name">Anonymous</span> <time datetime="2019-09-30T06:28:26Z">09/30/19 (Mon) 06:28:26</time></label>&nbsp;<a class="post_no" id="post_no_64" onclick="return highlightReply(64, event)" href="/poll/res/64#64">No.</a><a class="post_no" onclick="return citeReply(64)" href="/poll/res/64#q64">64</a><a href="/poll/res/64">[Reply]</a></p><div class="body"><div data-lifespan='0' data-creationtime='1569824906' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>dfg</label><br/><label><input type='radio' name='pollopt[]' value='1'/>dd</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>dfg</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_63" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_63" ><p class="intro"><input type="checkbox" class="delete" name="delete_63" id="delete_63" /><label for="delete_63"><span class="name">Anonymous</span> <time datetime="2019-09-30T06:22:16Z">09/30/19 (Mon) 06:22:16</time></label>&nbsp;<a class="post_no" id="post_no_63" onclick="return highlightReply(63, event)" href="/poll/res/63#63">No.</a><a class="post_no" onclick="return citeReply(63)" href="/poll/res/63#q63">63</a><a href="/poll/res/63">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569824536' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>asd2</label><br/><label><input type='radio' name='pollopt[]' value='1'/>123</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asd</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_62" data-board="poll">    <div class="files">    </div>    <div class="post op" id="op_62" ><p class="intro"><input type="checkbox" class="delete" name="delete_62" id="delete_62" /><label for="delete_62"><span class="name">Anonymous</span> <time datetime="2019-09-30T05:23:11Z">09/30/19 (Mon) 05:23:11</time></label>&nbsp;<a class="post_no" id="post_no_62" onclick="return highlightReply(62, event)" href="/poll/res/62#62">No.</a><a class="post_no" onclick="return citeReply(62)" href="/poll/res/62#q62">62</a><a href="/poll/res/62">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569820991' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>t1</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>t2</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>t2</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>main test poll <br/>duplicats<br/>radio<br/>2 <br/>24</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_58" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569806128942.png">1569806128942.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569806128942.png" target="_blank"><img class="post-image" src="/poll/thumb/1569806128942.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_58" ><p class="intro"><input type="checkbox" class="delete" name="delete_58" id="delete_58" /><label for="delete_58"><span class="subject">Pick One</span> <span class="name">Anonymous</span> <time datetime="2019-09-30T01:15:28Z">09/30/19 (Mon) 01:15:28</time></label>&nbsp;<a class="post_no" id="post_no_58" onclick="return highlightReply(58, event)" href="/poll/res/58#58">No.</a><a class="post_no" onclick="return citeReply(58)" href="/poll/res/58#q58">58</a><a href="/poll/res/58">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569806128' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>Asuka</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>Mashiro</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>Misaki</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javascript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>I have no life</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_57" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569806108276.png">1569806108276.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569806108276.png" target="_blank"><img class="post-image" src="/poll/thumb/1569806108276.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_57" ><p class="intro"><input type="checkbox" class="delete" name="delete_57" id="delete_57" /><label for="delete_57"><span class="name">Anonymous</span> <time datetime="2019-09-30T01:15:08Z">09/30/19 (Mon) 01:15:08</time></label>&nbsp;<a class="post_no" id="post_no_57" onclick="return highlightReply(57, event)" href="/poll/res/57#57">No.</a><a class="post_no" onclick="return citeReply(57)" href="/poll/res/57#q57">57</a><a href="/poll/res/57">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569806108' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>Asuka</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>Mashiro</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javascript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>I have no life</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_56" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569806082682.png">1569806082682.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569806082682.png" target="_blank"><img class="post-image" src="/poll/thumb/1569806082682.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_56" ><p class="intro"><input type="checkbox" class="delete" name="delete_56" id="delete_56" /><label for="delete_56"><span class="subject">Pick One</span> <span class="name">Anonymous</span> <time datetime="2019-09-30T01:14:42Z">09/30/19 (Mon) 01:14:42</time></label>&nbsp;<a class="post_no" id="post_no_56" onclick="return highlightReply(56, event)" href="/poll/res/56#56">No.</a><a class="post_no" onclick="return citeReply(56)" href="/poll/res/56#q56">56</a><a href="/poll/res/56">[Reply]</a></p><div class="body"><div data-lifespan='24' data-creationtime='1569806082' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>Asuka</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>Mashiro</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>Misaki</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javascript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>test</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_14" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569771621529.png">1569771621529.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569771621529.png" target="_blank"><img class="post-image" src="/poll/thumb/1569771621529.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_14" ><p class="intro"><input type="checkbox" class="delete" name="delete_14" id="delete_14" /><label for="delete_14"><span class="name">Anonymous</span> <time datetime="2019-09-29T15:40:21Z">09/29/19 (Sun) 15:40:21</time></label>&nbsp;<a class="post_no" id="post_no_14" onclick="return highlightReply(14, event)" href="/poll/res/14#14">No.</a><a class="post_no" onclick="return citeReply(14)" href="/poll/res/14#q14">14</a><a href="/poll/res/14">[Reply]</a></p><div class="body">test</div></div><br class="clear"/><hr/></div>
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
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/poll/catalog">Catalog</a>
			</div>
	

	

	<footer>
	<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
		<a href="https://engine.vichan.net/">vichan</a> 5.1.4 
		+ <a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> 0.8.1 -
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