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
            , board_name = "test2";
	          </script>

			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js?1"></script>
										<title>/test2/ - test2</title>

</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/bans">bans</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-13.png" alt="" />





	<header>
	<h1 style="padding-top:10px;">/test2/ - test2</h1>
	<div class="subtitle">
									test2
								</div>
	</header>
	<h1 id="threadheader">New Thread</h1>


	<div id="topcontainer">
	
	

	<div>
			                       <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span style="display:none" ><input type="text" name="lc♈kh48⛏d2tr9w7oz06☊fgnvapu5i1eqsymx3⛈" value="42598" ></span >
<input type="hidden" value="" name="url">
<input type="hidden" name="board" value="test2">
<input type="hidden" name="o8deiy2sgu4pxtcvrn9mzhl♃☱fkwb67jq5301a" value="">
	<input type="hidden" name="page" value="1">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea style="display:none" name="message">w⚍&#71;h&#69;,&#9835;&#51;i&#102;Xb9a&gt;D&#65;&#79;&lt;u&amp;&#9871;2&#54;#o0~x&#123;L♽|&#9814; &#112;&#82;☈857@JPc&#66;-d/&#86;[&#96;jNQn41K</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none" ><input type="text" name="username" value="" ></div >
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" value="" name="91q0csv☸ypjbox8nw4dk" >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="login" value="^⛅*5v% &#69;b&#104;kj&#51; )i&#65;1Su&#101;n">
			
			
				<input value="" name="♁oy4zbr261uavip5fxsqd0hntel7w" type="hidden">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input type="hidden" name="text" value="" >
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input style="display:none" type="text" name="user" value="">
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

<input type="hidden" name="hash" value="de971ccb0566995a059e8ec952616f91eb04bb18">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><a href="https://kissu.moe/bans">https://kissu.moe/bans</a><hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/test2/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/test2/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="test2" />
		<div class="thread" id="thread_11" data-board="test2">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/test2/src/1570307781720.png">1570307781720.png</a> <span class="unimportant">(417.12 KB, 1914x1079, <span class="postfilename">Screenshot at 19-59-44.png</span>)</span></p><a href="/test2/src/1570307781720.png" target="_blank"><img class="post-image" src="/test2/thumb/1570307781720.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_11" ><p class="intro"><input type="checkbox" class="delete" name="delete_11" id="delete_11" /><label for="delete_11"><span class="name">Anonymous</span> <time datetime="2019-10-05T20:36:21Z">10/05/19 (Sat) 20:36:21</time></label>&nbsp;<a class="post_no" id="post_no_11" onclick="return highlightReply(11, event)" href="/test2/res/11#11">No.</a><a class="post_no" onclick="return citeReply(11)" href="/test2/res/11#q11">11</a><a href="/test2/res/11">[Reply]</a></p><div class="body">test</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_8" data-board="test2">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/test2/src/m1570307509129.png">m1570307509129.png</a> <span class="unimportant">(279.27 KB, 1285x784, <span class="postfilename">Screenshot at 22-25-02.png</span>)</span></p><a href="/test2/src/m1570307509129.png" target="_blank"><img class="post-image" src="/test2/thumb/m1570307509129.png" style="width:175px;height:107px" alt="" /></a></div>    </div>    <div class="post op" id="op_8" ><p class="intro"><input type="checkbox" class="delete" name="delete_8" id="delete_8" /><label for="delete_8"><span class="name">Anonymous</span> <time datetime="2019-10-05T20:31:49Z">10/05/19 (Sat) 20:31:49</time></label>&nbsp;<a class="post_no" id="post_no_8" onclick="return highlightReply(8, event)" href="/test2/res/8#8">No.</a><a class="post_no" onclick="return citeReply(8)" href="/test2/res/8#q8">8</a><i class="fa fa-lock" title="Locked"></i><a href="/test2/res/8">[Reply]</a></p><div class="body">tez</div></div><div class="post reply" id="reply_9"><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span style="color:purple" class="name">Anonymous</span>        <span class="capcode" style="color:purple"> ## Mod</span> <time datetime="2019-10-05T20:31:59Z">10/05/19 (Sat) 20:31:59</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="return highlightReply(9, event)" href="/test2/res/8#9">No.</a><a class="post_no" onclick="return citeReply(9)" href="/test2/res/8#q9">9</a></p>        <div class="files">    </div>         <div class="body" >Moved to <a href="/test/res/11#11">&gt;&gt;&gt;/test/11</a>.</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_6" data-board="test2">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/test2/src/mmm1570306892357.png">mmm1570306892357.png</a> <span class="unimportant">(139.34 KB, 1416x1026, <span class="postfilename">Screenshot at 18-48-58.png</span>)</span></p><a href="/test2/src/mmm1570306892357.png" target="_blank"><img class="post-image" src="/test2/thumb/mmm1570306892357.png" style="width:175px;height:127px" alt="" /></a></div>    </div>    <div class="post op" id="op_6" ><p class="intro"><input type="checkbox" class="delete" name="delete_6" id="delete_6" /><label for="delete_6"><span class="name">Anonymous</span> <time datetime="2019-10-05T20:21:32Z">10/05/19 (Sat) 20:21:32</time></label>&nbsp;<a class="post_no" id="post_no_6" onclick="return highlightReply(6, event)" href="/test2/res/6#6">No.</a><a class="post_no" onclick="return citeReply(6)" href="/test2/res/6#q6">6</a><a href="/test2/res/6">[Reply]</a></p><div class="body">test</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1" data-board="test2">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/test2/src/m1570306792951.png">m1570306792951.png</a> <span class="unimportant">(85.07 KB, 864x447, <span class="postfilename">MfmtFZL.png</span>)</span></p><a href="/test2/src/m1570306792951.png" target="_blank"><img class="post-image" src="/test2/thumb/m1570306792951.png" style="width:175px;height:91px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><span class="name">Anonymous</span> <time datetime="2019-10-05T20:19:53Z">10/05/19 (Sat) 20:19:53</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="return highlightReply(1, event)" href="/test2/res/1#1">No.</a><a class="post_no" onclick="return citeReply(1)" href="/test2/res/1#q1">1</a><a href="/test2/res/1">[Reply]</a></p><div class="body">r2</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_4" data-board="test2">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/test2/src/mmm1570306782384.png">mmm1570306782384.png</a> <span class="unimportant">(134.32 KB, 1261x861, <span class="postfilename">dYZ5Ssv.png</span>)</span></p><a href="/test2/src/mmm1570306782384.png" target="_blank"><img class="post-image" src="/test2/thumb/mmm1570306782384.png" style="width:175px;height:119px" alt="" /></a></div>    </div>    <div class="post op" id="op_4" ><p class="intro"><input type="checkbox" class="delete" name="delete_4" id="delete_4" /><label for="delete_4"><span class="name">Anonymous</span> <time datetime="2019-10-05T20:19:42Z">10/05/19 (Sat) 20:19:42</time></label>&nbsp;<a class="post_no" id="post_no_4" onclick="return highlightReply(4, event)" href="/test2/res/4#4">No.</a><a class="post_no" onclick="return citeReply(4)" href="/test2/res/4#q4">4</a><a href="/test2/res/4">[Reply]</a></p><div class="body">r1</div></div><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/test2/catalog">[Catalog]</a>
		                <a id="archive-link-bottom" href="/test2/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/bans">bans</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> / <a href="/poll/">poll</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/test2/catalog">Catalog</a>
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