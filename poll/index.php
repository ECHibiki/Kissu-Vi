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
								<title>/poll/ - polling</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-14.gif" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	alert(
	"<h1>Welcome to kissu.moe!</h1><br/>\
        <h2>Message Of the Day</h2>\
	<p><strong>Bored and Gay...</strong></p>\
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
<input name="l1kd3s2m♆684rcgtqa⛲5eiz0vu☀" value="" type="hidden">
<input style="display:none" type="text" name="u3ikejvo2l☴d⛧☨bh1r506p7g⛛mzcftnwa9s" value="dtei5☄u\~8_&amp;">
<input type="hidden" name="board" value="poll">
<div   style="display:none"  ><input   type="text"   name="x☫uh2c3076owptsjy☷ivlgebn☙8admk41"   value="=X0WG⛀vmu&#36;L&#62;&#45;_&#52;]n9(T&#120;C*^poz&#60;KjA&#123;I67&#47;&#58;&#50;`"  ></div  >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="xji74fcvqkgu6ens⚡ydhpzo" value="w]WqF♡g{G♂pL3'uo!⚩?M^4z2eP_X$}7&lt;j;lt*&gt;☮k+⛜&amp;HR=|0 )m-h☦.8%y@YSKvBdNC⛷[6sJaE1A" type="hidden" >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value="VQC;d&#56;*&#91;kR&#78;Ins&#9793;]YimP%6KF7&#87;byvtlEH⚍c4&#68;#&#101;T&#48;&#66;.&#120;@',9ph&#65;~f&#9797;&gt;S⛳&#33;u⚕{51q⚋`_-&#114;g&#92;a&amp;&#125;&#63;($3&#50;j" name="q" type="hidden">
			</td>
		</tr>		<tr id="emailrow" style="display:none">
			<th>
				Options				<div style="display:none"><input type="text" name="lastname" value="♒}8ulO[L-,\n%2&#84;♲&#122;dt&lt;3E=94q$&#55;&#63;@M&#126;#&#104;kr&amp;]&#47;&#87;&#81;;☁&#78;&#105;&#58;p&#82;&#9780;V♁ 6beA `g*♵j's&#95;c&#83;PH&#62;&#118;+{&#46;&#109;☉&#97;J"></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Poll" />
								<input type="hidden" name="tmf♡9x⚵c1v0n3g7hy4s8q" value="83308" >
			
			
				<input type="hidden" name="search" value="" >
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
<tr id="polloptrow"><th>Poll Options</th><td><label><input type="checkbox" name="multisel">Multi-Choice</label></td></tr>


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

<input type="hidden" name="hash" value="593bec50581f33f68d5cda4420cf20d852b13dc3">
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
		<div class="thread" id="thread_1" data-board="poll">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/poll/src/1569720868242.png">1569720868242.png</a> <span class="unimportant">(316.68 KB, 460x635, <span class="postfilename">1569550739412.png</span>)</span></p><a href="/poll/src/1569720868242.png" target="_blank"><img class="post-image" src="/poll/thumb/1569720868242.png" style="width:185px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><span class="name">Anonymous</span> <time datetime="2019-09-29T01:34:28Z">09/29/19 (Sun) 01:34:28</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="return highlightReply(1, event)" href="/poll/res/1#1">No.</a><a class="post_no" onclick="return citeReply(1)" href="/poll/res/1#q1">1</a><a href="/poll/res/1">[Reply]</a></p><div class="body">test</div></div><br class="clear"/><hr/></div>
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
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
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