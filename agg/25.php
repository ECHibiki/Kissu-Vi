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
            , board_name = "agg";
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
								<title>/agg/ - Spinoff Aggregate</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/static/banners/banner-kissu-8.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input value="qmsSY[vpLH&#50;P\&#49;y@b,k_" name="text" type="hidden">
<span style="display:none"><input type="text" name="firstname" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2"></span>
<input type="hidden" name="board" value="agg">
<textarea style="display:none" name="login">/[LH Ji:&#96;&#33;;C&#43;6\&#111;T&lt;8ObI|?&#88;&#93;d.2&#9768;{&#116;W5 c⚱1B=k@9(3Ng☮*&#125;&#52;'PQ&#45;M&#86;⚯0KD7usj</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="message" value="&#119;&#100;1☟7n%/e:&#123;I&#9906;^&#66;&#54;⚪r&#103;_&#41;$zVh]&#92;&#102;@&#90;5L&gt;2&#51;t;⛊M☃YX&#72;-QFR'&#121;&#9752;&#78;K*&#120;9&#84;[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)" type="hidden" >
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-">
			
			
				
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

<input type="hidden" name="hash" value="70d8f66fb8d17574c44a5a9958b0db21874a19a5">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><h2>Big merge in a few minutes, site won't be available for 10-30 minutes probably</h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/agg/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="agg" />
		<div class="thread" id="thread_1670" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567377722932.jpg">1567377722932.jpg</a> <span class="unimportant">(323.49 KB, 700x525, <span class="postfilename" title="Geoduck_Farm_on_Hartstine_Island-700x5251.jpg">Geoduck_Farm_on_Hartstine_….jpg</span>)</span></p><a href="/agg/src/1567377722932.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567377722932.png" style="width:255px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_1670" ><p class="intro"><input type="checkbox" class="delete" name="delete_1670" id="delete_1670" /><label for="delete_1670"><span class="name">Anonymous</span> <time datetime="2019-09-01T22:45:03Z">09/01/19 (Sun) 22:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1670" onclick="return highlightReply(1670, event)" href="/agg/res/1670#1670">No.</a><a class="post_no" onclick="return citeReply(1670)" href="/agg/res/1670#q1670">1670</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1670">[Reply]</a></p><div class="body">the kissu farm<br/><a href=https://kissu.moe/qa/res/7061.html>https://kissu.moe/qa/res/7061.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1669" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567366864595.jpg">1567366864595.jpg</a> <span class="unimportant">(13.49 KB, 360x111, <span class="postfilename">Copy.jpg</span>)</span></p><a href="/agg/src/1567366864595.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567366864595.png" style="width:255px;height:79px" alt="" /></a></div>    </div>    <div class="post op" id="op_1669" ><p class="intro"><input type="checkbox" class="delete" name="delete_1669" id="delete_1669" /><label for="delete_1669"><span class="name">Anonymous</span> <time datetime="2019-09-01T19:45:03Z">09/01/19 (Sun) 19:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1669" onclick="return highlightReply(1669, event)" href="/agg/res/1669#1669">No.</a><a class="post_no" onclick="return citeReply(1669)" href="/agg/res/1669#q1669">1669</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1669">[Reply]</a></p><div class="body">test<br/><a href=https://kissu.moe/qa/res/7034.html>https://kissu.moe/qa/res/7034.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1668" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567362220209.png">1567362220209.png</a> <span class="unimportant">(1.99 MB, 1300x929, <span class="postfilename">plsfapn&amp;#39;t.png</span>)</span></p><a href="/agg/src/1567362220209.png" target="_blank"><img class="post-image" src="/agg/thumb/1567362220209.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1668" ><p class="intro"><input type="checkbox" class="delete" name="delete_1668" id="delete_1668" /><label for="delete_1668"><span class="subject">[qa] nof*p thread #1</span> <span class="name">Anonymous</span> <time datetime="2019-09-01T18:25:03Z">09/01/19 (Sun) 18:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1668" onclick="return highlightReply(1668, event)" href="/agg/res/1668#1668">No.</a><a class="post_no" onclick="return citeReply(1668)" href="/agg/res/1668#q1668">1668</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1668">[Reply]</a></p><div class="body">dis thread is for all of you who want to stop f*pping! u ar not alone. there ar a bunch of us here who r willing to support one another. beating addiction is hard so lets do id together!!!!<br/>pls share tips and tricks dat work for u. and if u slip up dond be ashamed to share it so we can identify the problem and help u in the future<br/>i will make a new thread once dis one is archived<br/><a href=https://kissu.moe/qa/res/7020.html>https://kissu.moe/qa/res/7020.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1667" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567360101986.jpeg">1567360101986.jpeg</a> <span class="unimportant">(120.59 KB, 1200x800, <span class="postfilename" title="709BA124-C6FE-4537-BC35-B09E70DF999B.jpeg">709BA124-C6FE-4537-BC35-B….jpeg</span>)</span></p><a href="/agg/src/1567360101986.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567360101986.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1667" ><p class="intro"><input type="checkbox" class="delete" name="delete_1667" id="delete_1667" /><label for="delete_1667"><span class="name">jevin</span> <time datetime="2019-09-01T17:50:03Z">09/01/19 (Sun) 17:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1667" onclick="return highlightReply(1667, event)" href="/agg/res/1667#1667">No.</a><a class="post_no" onclick="return citeReply(1667)" href="/agg/res/1667#q1667">1667</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1667">[Reply]</a></p><div class="body">what has been will be<br/>what has been done is what will be done<br/>there is nothing new under the sun<br/><a href=https://kissu.moe/qa/res/7017.html>https://kissu.moe/qa/res/7017.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1666" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567349391930.jpg">1567349391930.jpg</a> <span class="unimportant">(179.91 KB, 1280x720, <span class="postfilename" title="[SMC-Subs] Idol Time PriPara - 004 [213CB53D].mkv_snapshot_11.10_[2019.09.01_08.17.32].jpg">[SMC-Subs] Idol Time PriPa….jpg</span>)</span></p><a href="/agg/src/1567349391930.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567349391930.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1666" ><p class="intro"><input type="checkbox" class="delete" name="delete_1666" id="delete_1666" /><label for="delete_1666"><span class="name">Anonymous</span> <time datetime="2019-09-01T14:50:03Z">09/01/19 (Sun) 14:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1666" onclick="return highlightReply(1666, event)" href="/agg/res/1666#1666">No.</a><a class="post_no" onclick="return citeReply(1666)" href="/agg/res/1666#q1666">1666</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1666">[Reply]</a></p><div class="body">SHALL WE MAKE TOKIMEKI<br/><a href=https://kissu.moe/qa/res/7009.html>https://kissu.moe/qa/res/7009.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1665" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567331046867.jpg">1567331046867.jpg</a> <span class="unimportant">(1019.67 KB, 2893x2836, <span class="postfilename">cover.jpg</span>)</span></p><a href="/agg/src/1567331046867.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567331046867.png" style="width:240px;height:236px" alt="" /></a></div>    </div>    <div class="post op" id="op_1665" ><p class="intro"><input type="checkbox" class="delete" name="delete_1665" id="delete_1665" /><label for="delete_1665"><span class="name">Anonymous</span> <time datetime="2019-09-01T09:45:02Z">09/01/19 (Sun) 09:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1665" onclick="return highlightReply(1665, event)" href="/agg/res/1665#1665">No.</a><a class="post_no" onclick="return citeReply(1665)" href="/agg/res/1665#q1665">1665</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1665">[Reply]</a></p><div class="body">2000-2007<br/><a href=http://what-ch.mooo.com/what/res/2372.html>http://what-ch.mooo.com/what/res/2372.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1664" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567327472541.png">1567327472541.png</a> <span class="unimportant">(701.58 KB, 1199x898, <span class="postfilename">1567320771372.png</span>)</span></p><a href="/agg/src/1567327472541.png" target="_blank"><img class="post-image" src="/agg/thumb/1567327472541.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1664" ><p class="intro"><input type="checkbox" class="delete" name="delete_1664" id="delete_1664" /><label for="delete_1664"><span class="name">Anonymous</span> <time datetime="2019-09-01T08:45:02Z">09/01/19 (Sun) 08:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1664" onclick="return highlightReply(1664, event)" href="/agg/res/1664#1664">No.</a><a class="post_no" onclick="return citeReply(1664)" href="/agg/res/1664#q1664">1664</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1664">[Reply]</a></p><div class="body">flan+friends GET<br/><a href=https://kissu.moe/qa/res/7000.html>https://kissu.moe/qa/res/7000.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1663" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/kn7jpINpqbQ" allowfullscreen></iframe>    <div class="post op" id="op_1663" ><p class="intro"><input type="checkbox" class="delete" name="delete_1663" id="delete_1663" /><label for="delete_1663"><span class="name">Anonymous</span> <time datetime="2019-09-01T08:30:02Z">09/01/19 (Sun) 08:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1663" onclick="return highlightReply(1663, event)" href="/agg/res/1663#1663">No.</a><a class="post_no" onclick="return citeReply(1663)" href="/agg/res/1663#q1663">1663</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1663">[Reply]</a></p><div class="body">the /qa/ song<br/><a href=https://kissu.moe/qa/res/6997.html>https://kissu.moe/qa/res/6997.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1661" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567320676419.jpg">1567320676419.jpg</a> <span class="unimportant">(411.06 KB, 800x600, <span class="postfilename">2011-01-08-360887.jpg</span>)</span></p><a href="/agg/src/1567320676419.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567320676419.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1661" ><p class="intro"><input type="checkbox" class="delete" name="delete_1661" id="delete_1661" /><label for="delete_1661"><span class="name">Anonymous</span> <time datetime="2019-09-01T06:55:03Z">09/01/19 (Sun) 06:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1661" onclick="return highlightReply(1661, event)" href="/agg/res/1661#1661">No.</a><a class="post_no" onclick="return citeReply(1661)" href="/agg/res/1661#q1661">1661</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1661">[Reply]</a></p><div class="body">ah- ahahahaa, you found me! guess im not very good at this game, am i?<br/><a href=https://kissu.moe/qa/res/6990.html>https://kissu.moe/qa/res/6990.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1660" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567319675076.png">1567319675076.png</a> <span class="unimportant">(978.75 KB, 1280x720, <span class="postfilename" title="[Kirion] Higurashi no Naku Koro ni - 05 (BD 720p x264 AAC).mp4_snapshot_06.52_[2018.04.18_00.33.04].png">[Kirion] Higurashi no Naku….png</span>)</span></p><a href="/agg/src/1567319675076.png" target="_blank"><img class="post-image" src="/agg/thumb/1567319675076.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1660" ><p class="intro"><input type="checkbox" class="delete" name="delete_1660" id="delete_1660" /><label for="delete_1660"><span class="name">Anonymous</span> <time datetime="2019-09-01T06:35:02Z">09/01/19 (Sun) 06:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1660" onclick="return highlightReply(1660, event)" href="/agg/res/1660#1660">No.</a><a class="post_no" onclick="return citeReply(1660)" href="/agg/res/1660#q1660">1660</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1660">[Reply]</a></p><div class="body">new kisso motto: take it peasy<br/><a href=https://kissu.moe/qa/res/6987.html>https://kissu.moe/qa/res/6987.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1659" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567315374372.jpg">1567315374372.jpg</a> <span class="unimportant">(66.3 KB, 531x1020, <span class="postfilename" title="8cdbf000dd20c72cbbb4594d1ad2d108.jpg">8cdbf000dd20c72cbbb4594d1a….jpg</span>)</span></p><a href="/agg/src/1567315374372.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567315374372.png" style="width:133px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1659" ><p class="intro"><input type="checkbox" class="delete" name="delete_1659" id="delete_1659" /><label for="delete_1659"><span class="name">Anonymous</span> <time datetime="2019-09-01T05:25:03Z">09/01/19 (Sun) 05:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1659" onclick="return highlightReply(1659, event)" href="/agg/res/1659#1659">No.</a><a class="post_no" onclick="return citeReply(1659)" href="/agg/res/1659#q1659">1659</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1659">[Reply]</a></p><div class="body">Don&#39;t forget to say "rabbit rabbit rabbit" when you wake up on the 1st!<br/><a href=https://kissu.moe/qa/res/6981.html>https://kissu.moe/qa/res/6981.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1658" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567313743215.png">1567313743215.png</a> <span class="unimportant">(2.42 MB, 1792x2024, <span class="postfilename" title="__matsuoka_miu_ichigo_mashimaro_drawn_by_nanoningen_anapoko__c5ef90f494a9e18a27d0e6c5fd8fc2da.png">__matsuoka_miu_ichigo_mash….png</span>)</span></p><a href="/agg/src/1567313743215.png" target="_blank"><img class="post-image" src="/agg/thumb/1567313743215.png" style="width:226px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1658" ><p class="intro"><input type="checkbox" class="delete" name="delete_1658" id="delete_1658" /><label for="delete_1658"><span class="name">Anonymous</span> <time datetime="2019-09-01T05:00:03Z">09/01/19 (Sun) 05:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1658" onclick="return highlightReply(1658, event)" href="/agg/res/1658#1658">No.</a><a class="post_no" onclick="return citeReply(1658)" href="/agg/res/1658#q1658">1658</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1658">[Reply]</a></p><div class="body">so uhh... what the heck were the spheres inside all these m*me drink images?<br/><a href=https://kissu.moe/qa/res/6979.html>https://kissu.moe/qa/res/6979.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1657" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567311788427.jpg">1567311788427.jpg</a> <span class="unimportant">(42.49 KB, 720x480, <span class="postfilename" title="[Exiled-Destiny]_Tsukuyomi_Moon_Phase_Ep08_(AEAC7B4D).mkv_snapshot_01.56_[2019.08.29_15.01.17].jpg">[Exiled-Destiny]_Tsukuyomi….jpg</span>)</span></p><a href="/agg/src/1567311788427.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567311788427.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1657" ><p class="intro"><input type="checkbox" class="delete" name="delete_1657" id="delete_1657" /><label for="delete_1657"><span class="name">Anonymous</span> <time datetime="2019-09-01T04:25:03Z">09/01/19 (Sun) 04:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1657" onclick="return highlightReply(1657, event)" href="/agg/res/1657#1657">No.</a><a class="post_no" onclick="return citeReply(1657)" href="/agg/res/1657#q1657">1657</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1657">[Reply]</a></p><div class="body">new banners thread: <a href="/b/res/1483.php#1483">&gt;&gt;&gt;/b/1483</a><br/>this /qa/ sticky will disappear in a few days<br/><a href=https://kissu.moe/qa/res/6975.html>https://kissu.moe/qa/res/6975.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1656" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567304814670.jpg">1567304814670.jpg</a> <span class="unimportant">(623.88 KB, 1920x1080, <span class="postfilename" title="[HorribleSubs] Gabriel DropOut - 04 [1080p].mkv_snapshot_03.46_[2017.01.31_05.09.37].jpg">[HorribleSubs] Gabriel Dro….jpg</span>)</span></p><a href="/agg/src/1567304814670.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567304814670.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1656" ><p class="intro"><input type="checkbox" class="delete" name="delete_1656" id="delete_1656" /><label for="delete_1656"><span class="name">Anonymous</span> <time datetime="2019-09-01T02:30:03Z">09/01/19 (Sun) 02:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1656" onclick="return highlightReply(1656, event)" href="/agg/res/1656#1656">No.</a><a class="post_no" onclick="return citeReply(1656)" href="/agg/res/1656#q1656">1656</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1656">[Reply]</a></p><div class="body">Rag died, and I got poisons...<br/><a href=https://kissu.moe/qa/res/6955.html>https://kissu.moe/qa/res/6955.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1655" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567291016456.png">1567291016456.png</a> <span class="unimportant">(357.18 KB, 592x484, <span class="postfilename">1567268905857.png</span>)</span></p><a href="/agg/src/1567291016456.png" target="_blank"><img class="post-image" src="/agg/thumb/1567291016456.png" style="width:255px;height:208px" alt="" /></a></div>    </div>    <div class="post op" id="op_1655" ><p class="intro"><input type="checkbox" class="delete" name="delete_1655" id="delete_1655" /><label for="delete_1655"><span class="name">Anonymous</span> <time datetime="2019-08-31T22:40:03Z">08/31/19 (Sat) 22:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1655" onclick="return highlightReply(1655, event)" href="/agg/res/1655#1655">No.</a><a class="post_no" onclick="return citeReply(1655)" href="/agg/res/1655#q1655">1655</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1655">[Reply]</a></p><div class="body">Are you excited about Yuru Camp season 2?<br/><a href=https://kissu.moe/qa/res/6936.html>https://kissu.moe/qa/res/6936.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1654" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567288590119.jpg">1567288590119.jpg</a> <span class="unimportant">(135.64 KB, 701x1031, <span class="postfilename" title="It&amp;#39;s not rape if I enjoy it.jpg">It&amp;#39;s not rape if I enj….jpg</span>)</span></p><a href="/agg/src/1567288590119.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567288590119.png" style="width:174px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1654" ><p class="intro"><input type="checkbox" class="delete" name="delete_1654" id="delete_1654" /><label for="delete_1654"><span class="name">Anonymous</span> <time datetime="2019-08-31T22:00:05Z">08/31/19 (Sat) 22:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1654" onclick="return highlightReply(1654, event)" href="/agg/res/1654#1654">No.</a><a class="post_no" onclick="return citeReply(1654)" href="/agg/res/1654#q1654">1654</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1654">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6928.html>https://kissu.moe/qa/res/6928.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1653" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567288395613.png">1567288395613.png</a> <span class="unimportant">(484.81 KB, 720x480, <span class="postfilename" title="Di Gi Charat - 11.avi_snapshot_01.39_[2018.02.26_18.55.20].png">Di Gi Charat - 11.avi_snap….png</span>)</span></p><a href="/agg/src/1567288395613.png" target="_blank"><img class="post-image" src="/agg/thumb/1567288395613.png" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1653" ><p class="intro"><input type="checkbox" class="delete" name="delete_1653" id="delete_1653" /><label for="delete_1653"><span class="name">Anonymous</span> <time datetime="2019-08-31T21:55:02Z">08/31/19 (Sat) 21:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1653" onclick="return highlightReply(1653, event)" href="/agg/res/1653#1653">No.</a><a class="post_no" onclick="return citeReply(1653)" href="/agg/res/1653#q1653">1653</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1653">[Reply]</a></p><div class="body">Just another reminder that the seasonal anime stream is starting in a little over an hour at 7PM EST (11 GMT) and runs for about 4 and a half hours!<br/><a href="https://theatre.kissu.moe/kiss/yukkuri" rel="nofollow" target="_blank">https://theatre.kissu.moe/kiss/yukkuri</a><br/>Anyone can make channels on kissu theater, which is a cytube fork thingie with a change to support anonymous commenting<br/><a href=https://kissu.moe/qa/res/6927.html>https://kissu.moe/qa/res/6927.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1652" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567276362840.jpg">1567276362840.jpg</a> <span class="unimportant">(35.68 KB, 460x545, <span class="postfilename">hitler and kanna.jpg</span>)</span></p><a href="/agg/src/1567276362840.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567276362840.png" style="width:215px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1652" ><p class="intro"><input type="checkbox" class="delete" name="delete_1652" id="delete_1652" /><label for="delete_1652"><span class="name">Anonymous</span> <time datetime="2019-08-31T18:35:03Z">08/31/19 (Sat) 18:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1652" onclick="return highlightReply(1652, event)" href="/agg/res/1652#1652">No.</a><a class="post_no" onclick="return citeReply(1652)" href="/agg/res/1652#q1652">1652</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1652">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/6898.html>https://kissu.moe/qa/res/6898.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1651" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567276013948.jpg">1567276013948.jpg</a> <span class="unimportant">(52.72 KB, 960x547, <span class="postfilename">1529742483514.jpg</span>)</span></p><a href="/agg/src/1567276013948.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567276013948.png" style="width:255px;height:146px" alt="" /></a></div>    </div>    <div class="post op" id="op_1651" ><p class="intro"><input type="checkbox" class="delete" name="delete_1651" id="delete_1651" /><label for="delete_1651"><span class="name">Anonymous</span> <time datetime="2019-08-31T18:30:04Z">08/31/19 (Sat) 18:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1651" onclick="return highlightReply(1651, event)" href="/agg/res/1651#1651">No.</a><a class="post_no" onclick="return citeReply(1651)" href="/agg/res/1651#q1651">1651</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1651">[Reply]</a></p><div class="body">Just remembered the time that I told my high school friends 13 years old sister that I couldn&#39;t watch hentai because the person doing the girls voice could be a man<br/>Fuck, why am I so retarded<br/><a href=https://kissu.moe/qa/res/6894.html>https://kissu.moe/qa/res/6894.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1650" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567275310111.jpg">1567275310111.jpg</a> <span class="unimportant">(431.02 KB, 1230x1211, <span class="postfilename">1566434583266.jpg</span>)</span></p><a href="/agg/src/1567275310111.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567275310111.png" style="width:255px;height:251px" alt="" /></a></div>    </div>    <div class="post op" id="op_1650" ><p class="intro"><input type="checkbox" class="delete" name="delete_1650" id="delete_1650" /><label for="delete_1650"><span class="name">Anonymous</span> <time datetime="2019-08-31T18:20:04Z">08/31/19 (Sat) 18:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1650" onclick="return highlightReply(1650, event)" href="/agg/res/1650#1650">No.</a><a class="post_no" onclick="return citeReply(1650)" href="/agg/res/1650#q1650">1650</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1650">[Reply]</a></p><div class="body">From birth we&#39;re taught how to survive<br/>We&#39;re taught how war is waged<br/>And there are no men now alive<br/>Who stops our wild rampage<br/><br/>Light at heart we bide our bane<br/>whatever death awaits!<br/>Norsemen live without regrets<br/>We accept our woven fates<br/><br/>So fearlessly we charge ahead<br/>There is no time to hesitate<br/><br/>Don&#39;t despair, show no fear<br/>Live your life without regrets<br/><span class="toolong">Post too long. Click <a href="/agg/res/1650#1650">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/agg/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/24" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a class="selected">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/26" method="get"><input type="submit" value="Next" /></form>
					 | <a href="/agg/catalog">Catalog</a>
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