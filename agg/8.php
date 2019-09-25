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
			<img class="board_image" src="/static/banners/banner-kissu-19.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="text" value="qmsSY[vpLH2P\1y@b,k_">
<input type="hidden" value="&#102;#&#9864;/&#32;♬3}{QDt7\+d5:Y@⚒&#66;v&#86;&#84;-sepZ$~]&#73;U&#59;S^n&#104;&#88;!9&#75;[&#41;m&#117;&lt;N(W8♛&gt;xro&#50;" name="firstname">
<input type="hidden" name="board" value="agg">
<input name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" type="hidden" >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" value="w&#100;1☟7n%/e:{I&#9906;&#94;B6&#9898;rg_&#41;&#36;zVh&#93;&#92;f@Z5L&#62;23t;&#9930;M☃&#89;XH-QFR'y☘NK*x9&#84;[" name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea   name="q"   style="display:none" > f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)</textarea >
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="pN&#43;&gt;8&#60;&#113;G/&#54;d☎,&#39;F%;&#115;&#9896;iA&#69;!RuoPK&#9855;S}_☬&#86;&#40;-c&#94;\{Q&#67;D&#126;⛼m⛰&#108;x`[a4&#48;&#46;Uk&#98;&#90;W⚈#&#42;)LwM:|r⛍]2y@☪n&#38;5Y9♪T j1f7&#36;3&#61;" name="y0kh38z9do♒sb" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></div>
			
			
				
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
		<div class="thread" id="thread_2010" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569119567504.webm">1569119567504.webm</a> <span class="unimportant">(2.76 MB, 640x1136, <span class="postfilename">1569115506425.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569119567504.webm&amp;t=1569115506425.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569119567504.jpg" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2010" ><p class="intro"><input type="checkbox" class="delete" name="delete_2010" id="delete_2010" /><label for="delete_2010"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:35:48Z">09/22/19 (Sun) 02:35:48</time></label>&nbsp;<a class="post_no" id="post_no_2010" onclick="return highlightReply(2010, event)" href="/agg/res/2010#2010">No.</a><a class="post_no" onclick="return citeReply(2010)" href="/agg/res/2010#q2010">2010</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2010">[Reply]</a></p><div class="body">The lust for tomboys originates from the fact that women are fucking shit, so we project the virtue of good men on a female body. the tomboy&#39;s version of the hero&#39;s journey. The tomboy&#39;s journey is all about learning to accept and marry the best aspects of the masculine and the feminine within herself. By the end of her journey, the tomboy is quintessential ideal woman.<br/><br/>The tomboy is the answer to the age old question of &#39;would you fuck your best friend if he had a vagina?&#39;. The answer is yes. You bet your fucking ass you would.<br/><br/>You can&#39;t truly explain the experience of vision to those born without sight, nor music to those born without hearing. Likewise, you can&#39;t explain the appeal of tomboys to those born without taste.<br/><a href=https://gnfos.com/jp/res/369378.html>https://gnfos.com/jp/res/369378.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2009" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569118711177.jpg">1569118711177.jpg</a> <span class="unimportant">(111.17 KB, 1280x720, <span class="postfilename">1569089020127.jpg</span>)</span></p><a href="/agg/src/1569118711177.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569118711177.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2009" ><p class="intro"><input type="checkbox" class="delete" name="delete_2009" id="delete_2009" /><label for="delete_2009"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:22:37Z">09/22/19 (Sun) 02:22:37</time></label>&nbsp;<a class="post_no" id="post_no_2009" onclick="return highlightReply(2009, event)" href="/agg/res/2009#2009">No.</a><a class="post_no" onclick="return citeReply(2009)" href="/agg/res/2009#q2009">2009</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2009">[Reply]</a></p><div class="body">One does not simply introduce universal income in Mordor. Its bank gates are guarded by more than just jews. There is evil there that does not sleep. And the Great Rothschild, is ever watchful. It is a barren wasteland, riddled with non-citizen labor, automation and high taxation. The very air you breathe is a yearly expense. Not with ten thousand men could you do this. It is folly!<br/><a href=https://gnfos.com/jp/res/369376.html>https://gnfos.com/jp/res/369376.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2008" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569117584516.webm">1569117584516.webm</a> <span class="unimportant">(1.96 MB, 332x574, <span class="postfilename">1569117506266.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569117584516.webm&amp;t=1569117506266.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569117584516.jpg" style="width:139px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2008" ><p class="intro"><input type="checkbox" class="delete" name="delete_2008" id="delete_2008" /><label for="delete_2008"><span class="name">Tada Banri</span> <time datetime="2019-09-22T02:00:03Z">09/22/19 (Sun) 02:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2008" onclick="return highlightReply(2008, event)" href="/agg/res/2008#2008">No.</a><a class="post_no" onclick="return citeReply(2008)" href="/agg/res/2008#q2008">2008</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2008">[Reply]</a></p><div class="body">OH NO NO NO NO NO NO NO WHITE BOIS &#128514;&#128514;&#128514; GET IN HERE CNIG<br/><a href=https://gnfos.com/jp/res/369348.html>https://gnfos.com/jp/res/369348.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2007" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569116136813.jpeg">1569116136813.jpeg</a> <span class="unimportant">(63.73 KB, 500x604, <span class="postfilename" title="ED79ACB6-2E28-4C06-8A68-105A7FD9F65A.jpeg">ED79ACB6-2E28-4C06-8A68-1….jpeg</span>)</span></p><a href="/agg/src/1569116136813.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569116136813.jpeg" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2007" ><p class="intro"><input type="checkbox" class="delete" name="delete_2007" id="delete_2007" /><label for="delete_2007"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T01:40:04Z">09/22/19 (Sun) 01:40:04</time></label>&nbsp;<a class="post_no" id="post_no_2007" onclick="return highlightReply(2007, event)" href="/agg/res/2007#2007">No.</a><a class="post_no" onclick="return citeReply(2007)" href="/agg/res/2007#q2007">2007</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2007">[Reply]</a></p><div class="body">lol<br/><a href=https://gnfos.com/jp/res/369318.html>https://gnfos.com/jp/res/369318.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2006" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115903721.webm">1569115903721.webm</a> <span class="unimportant">(3.27 MB, 1280x720, <span class="postfilename">iwwvbx.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569115903721.webm&amp;t=iwwvbx.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569115903721.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2006" ><p class="intro"><input type="checkbox" class="delete" name="delete_2006" id="delete_2006" /><label for="delete_2006"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:35:04Z">09/22/19 (Sun) 01:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2006" onclick="return highlightReply(2006, event)" href="/agg/res/2006#2006">No.</a><a class="post_no" onclick="return citeReply(2006)" href="/agg/res/2006#q2006">2006</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2006">[Reply]</a></p><div class="body">post em<br/><a href=https://gnfos.com/jp/res/369312.html>https://gnfos.com/jp/res/369312.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2005" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115648397.png">1569115648397.png</a> <span class="unimportant">(250.9 KB, 656x441, <span class="postfilename">1569103323807.png</span>)</span></p><a href="/agg/src/1569115648397.png" target="_blank"><img class="post-image" src="/agg/thumb/1569115648397.png" style="width:357px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2005" ><p class="intro"><input type="checkbox" class="delete" name="delete_2005" id="delete_2005" /><label for="delete_2005"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T01:30:04Z">09/22/19 (Sun) 01:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2005" onclick="return highlightReply(2005, event)" href="/agg/res/2005#2005">No.</a><a class="post_no" onclick="return citeReply(2005)" href="/agg/res/2005#q2005">2005</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2005">[Reply]</a></p><div class="body">WHAT DO YOU GET WHEN YOU CROSS A MENTALLY-ILL LONER WITH A SOCIETY THAT ABANDONS HIM AND TREATS HIM LIKE TRASH?<br/><a href=https://gnfos.com/jp/res/369304.html>https://gnfos.com/jp/res/369304.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2004" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115591564.jpeg">1569115591564.jpeg</a> <span class="unimportant">(324.55 KB, 750x569, <span class="postfilename" title="89837507-763B-4C10-BD35-535CDC87DF50.jpeg">89837507-763B-4C10-BD35-5….jpeg</span>)</span></p><a href="/agg/src/1569115591564.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569115591564.jpeg" style="width:316px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2004" ><p class="intro"><input type="checkbox" class="delete" name="delete_2004" id="delete_2004" /><label for="delete_2004"><span class="name">Tada Banri</span> <time datetime="2019-09-22T01:30:04Z">09/22/19 (Sun) 01:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2004" onclick="return highlightReply(2004, event)" href="/agg/res/2004#2004">No.</a><a class="post_no" onclick="return citeReply(2004)" href="/agg/res/2004#q2004">2004</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2004">[Reply]</a></p><div class="body">Gross<br/><a href=https://gnfos.com/jp/res/369303.html>https://gnfos.com/jp/res/369303.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2003" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115384336.gif">1569115384336.gif</a> <span class="unimportant">(1.98 MB, 384x216, <span class="postfilename">1569103572144.gif</span>)</span></p><a href="/agg/src/1569115384336.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569115384336.gif" style="width:384px;height:216px" alt="" /></a></div>    </div>    <div class="post op" id="op_2003" ><p class="intro"><input type="checkbox" class="delete" name="delete_2003" id="delete_2003" /><label for="delete_2003"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:25:28Z">09/22/19 (Sun) 01:25:28</time></label>&nbsp;<a class="post_no" id="post_no_2003" onclick="return highlightReply(2003, event)" href="/agg/res/2003#2003">No.</a><a class="post_no" onclick="return citeReply(2003)" href="/agg/res/2003#q2003">2003</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2003">[Reply]</a></p><div class="body"><span class="quote">&gt;ota</span><br/><a href=https://gnfos.com/jp/res/369302.html>https://gnfos.com/jp/res/369302.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2002" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115178426.jpg">1569115178426.jpg</a> <span class="unimportant">(1.25 MB, 2037x3056, <span class="postfilename">1569111973163.jpg</span>)</span></p><a href="/agg/src/1569115178426.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569115178426.jpg" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2002" ><p class="intro"><input type="checkbox" class="delete" name="delete_2002" id="delete_2002" /><label for="delete_2002"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:20:03Z">09/22/19 (Sun) 01:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2002" onclick="return highlightReply(2002, event)" href="/agg/res/2002#2002">No.</a><a class="post_no" onclick="return citeReply(2002)" href="/agg/res/2002#q2002">2002</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2002">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369298.html>https://gnfos.com/jp/res/369298.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2001" data-board="agg"><div class="video-container" data-video="ptkS3gqCYzw"><a href="https://youtu.be/ptkS3gqCYzw" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/ptkS3gqCYzw/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2001" ><p class="intro"><input type="checkbox" class="delete" name="delete_2001" id="delete_2001" /><label for="delete_2001"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T01:15:05Z">09/22/19 (Sun) 01:15:05</time></label>&nbsp;<a class="post_no" id="post_no_2001" onclick="return highlightReply(2001, event)" href="/agg/res/2001#2001">No.</a><a class="post_no" onclick="return citeReply(2001)" href="/agg/res/2001#q2001">2001</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2001">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369293.html>https://gnfos.com/jp/res/369293.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2000" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569114023480.gif">1569114023480.gif</a> <span class="unimportant">(241.45 KB, 400x400, <span class="postfilename">1558470592948.gif</span>)</span></p><a href="/agg/src/1569114023480.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569114023480.gif" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2000" ><p class="intro"><input type="checkbox" class="delete" name="delete_2000" id="delete_2000" /><label for="delete_2000"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:05:03Z">09/22/19 (Sun) 01:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2000" onclick="return highlightReply(2000, event)" href="/agg/res/2000#2000">No.</a><a class="post_no" onclick="return citeReply(2000)" href="/agg/res/2000#q2000">2000</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2000">[Reply]</a></p><div class="body">put the site on read-only mode Ron Paul and whitelist yourself<br/><br/>nobody else can seem to make non-shitty threads i would rather this site operate as your personal blog without the teen schizos constantly shitting all over it<br/><a href=https://gnfos.com/jp/res/369278.html>https://gnfos.com/jp/res/369278.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1999" data-board="agg"><div class="video-container" data-video="ljphZBxvC34"><a href="https://youtu.be/ljphZBxvC34" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/ljphZBxvC34/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1999" ><p class="intro"><input type="checkbox" class="delete" name="delete_1999" id="delete_1999" /><label for="delete_1999"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T00:50:03Z">09/22/19 (Sun) 00:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1999" onclick="return highlightReply(1999, event)" href="/agg/res/1999#1999">No.</a><a class="post_no" onclick="return citeReply(1999)" href="/agg/res/1999#q1999">1999</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1999">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369270.html>https://gnfos.com/jp/res/369270.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1998" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569112647523.jpg">1569112647523.jpg</a> <span class="unimportant">(115.34 KB, 800x600, <span class="postfilename" title="__hakurei_reimu_touhou_drawn_by_mizuki_riko__6ed35aa282a7125aae07217464c21e25.jpg">__hakurei_reimu_touhou_dra….jpg</span>)</span></p><a href="/agg/src/1569112647523.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569112647523.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1998" ><p class="intro"><input type="checkbox" class="delete" name="delete_1998" id="delete_1998" /><label for="delete_1998"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T00:40:03Z">09/22/19 (Sun) 00:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1998" onclick="return highlightReply(1998, event)" href="/agg/res/1998#1998">No.</a><a class="post_no" onclick="return citeReply(1998)" href="/agg/res/1998#q1998">1998</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1998">[Reply]</a></p><div class="body"><em>If you want to be seen - stand up.</em><br/><em>If you want to be heard - speak up.</em><br/><em>If you want to be appreciated - shut up.</em><br/><br/><em> - Ancient GNFOS saying</em><br/><a href=https://gnfos.com/jp/res/369266.html>https://gnfos.com/jp/res/369266.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1997" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569112333877.jpg">1569112333877.jpg</a> <span class="unimportant">(1.97 MB, 2350x3200, <span class="postfilename" title="e658c811bd05ed66dfd76ea9c6988f37-imagejpeg.jpg">e658c811bd05ed66dfd76ea9c6….jpg</span>)</span></p><a href="/agg/src/1569112333877.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569112333877.png" style="width:187px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1997" ><p class="intro"><input type="checkbox" class="delete" name="delete_1997" id="delete_1997" /><label for="delete_1997"><span class="name">Anonymous</span> <time datetime="2019-09-22T00:35:02Z">09/22/19 (Sun) 00:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1997" onclick="return highlightReply(1997, event)" href="/agg/res/1997#1997">No.</a><a class="post_no" onclick="return citeReply(1997)" href="/agg/res/1997#q1997">1997</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1997">[Reply]</a></p><div class="body">Oh?<br/><a href=https://kissu.moe/qa/res/9963.html>https://kissu.moe/qa/res/9963.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1996" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569110555814.jpg">1569110555814.jpg</a> <span class="unimportant">(207.93 KB, 800x800, <span class="postfilename">1568430315976.jpg</span>)</span></p><a href="/agg/src/1569110555814.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569110555814.jpg" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1996" ><p class="intro"><input type="checkbox" class="delete" name="delete_1996" id="delete_1996" /><label for="delete_1996"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T00:05:08Z">09/22/19 (Sun) 00:05:08</time></label>&nbsp;<a class="post_no" id="post_no_1996" onclick="return highlightReply(1996, event)" href="/agg/res/1996#1996">No.</a><a class="post_no" onclick="return citeReply(1996)" href="/agg/res/1996#q1996">1996</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1996">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369262.html>https://gnfos.com/jp/res/369262.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1995" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569109962411.gif">1569109962411.gif</a> <span class="unimportant">(999.83 KB, 500x281, <span class="postfilename">1567465939985.gif</span>)</span></p><a href="/agg/src/1569109962411.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569109962411.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1995" ><p class="intro"><input type="checkbox" class="delete" name="delete_1995" id="delete_1995" /><label for="delete_1995"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:55:17Z">09/21/19 (Sat) 23:55:17</time></label>&nbsp;<a class="post_no" id="post_no_1995" onclick="return highlightReply(1995, event)" href="/agg/res/1995#1995">No.</a><a class="post_no" onclick="return citeReply(1995)" href="/agg/res/1995#q1995">1995</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1995">[Reply]</a></p><div class="body">someone tells you<br/>"ewwww kissu and qa are shit, why do you browse there?"<br/>what do you do<br/>WHAT DO YOU DO?<br/><a href=https://kissu.moe/qa/res/9960.html>https://kissu.moe/qa/res/9960.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1994" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569109124068.jpg">1569109124068.jpg</a> <span class="unimportant">(84.31 KB, 607x647, <span class="postfilename" title="[HorribleSubs] Zombieland Saga - 12 [720p].mkv_snapshot_07.19.325.jpg">[HorribleSubs] Zombieland ….jpg</span>)</span></p><a href="/agg/src/1569109124068.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569109124068.jpg" style="width:225px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1994" ><p class="intro"><input type="checkbox" class="delete" name="delete_1994" id="delete_1994" /><label for="delete_1994"><span class="name">Tada Banri</span> <time datetime="2019-09-21T23:40:05Z">09/21/19 (Sat) 23:40:05</time></label>&nbsp;<a class="post_no" id="post_no_1994" onclick="return highlightReply(1994, event)" href="/agg/res/1994#1994">No.</a><a class="post_no" onclick="return citeReply(1994)" href="/agg/res/1994#q1994">1994</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1994">[Reply]</a></p><div class="body">Bored and my fucking shitty computer fan won&#39;t stop making a racket....<br/><br/>I&#39;m so close to ripping it out and smashing it against the wall.....<br/><a href=https://gnfos.com/jp/res/369259.html>https://gnfos.com/jp/res/369259.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1993" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569108633327.png">1569108633327.png</a> <span class="unimportant">(1.81 MB, 1920x1080, <span class="postfilename">1568929525828.png</span>)</span></p><a href="/agg/src/1569108633327.png" target="_blank"><img class="post-image" src="/agg/thumb/1569108633327.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1993" ><p class="intro"><input type="checkbox" class="delete" name="delete_1993" id="delete_1993" /><label for="delete_1993"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:35:05Z">09/21/19 (Sat) 23:35:05</time></label>&nbsp;<a class="post_no" id="post_no_1993" onclick="return highlightReply(1993, event)" href="/agg/res/1993#1993">No.</a><a class="post_no" onclick="return citeReply(1993)" href="/agg/res/1993#q1993">1993</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1993">[Reply]</a></p><div class="body">do you ever worry about the future?<br/>both personally and for the internet as a whole?<br/><a href=https://kissu.moe/qa/res/9957.html>https://kissu.moe/qa/res/9957.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1992" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569108511145.jpg">1569108511145.jpg</a> <span class="unimportant">(65.32 KB, 549x721, <span class="postfilename">1567670052560.jpg</span>)</span></p><a href="/agg/src/1569108511145.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569108511145.png" style="width:194px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1992" ><p class="intro"><input type="checkbox" class="delete" name="delete_1992" id="delete_1992" /><label for="delete_1992"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:30:03Z">09/21/19 (Sat) 23:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1992" onclick="return highlightReply(1992, event)" href="/agg/res/1992#1992">No.</a><a class="post_no" onclick="return citeReply(1992)" href="/agg/res/1992#q1992">1992</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1992">[Reply]</a></p><div class="body">you ever need a break from hard fetishes after a while? <br/>yuri feels like drinking hot cocoa after drinking liquors for weeks, maybe i should just stay in the yuri world forever...<br/><a href=https://kissu.moe/qa/res/9956.html>https://kissu.moe/qa/res/9956.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1991" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569108006893.jpg">1569108006893.jpg</a> <span class="unimportant">(1.62 MB, 1240x1753, <span class="postfilename">1565892282884.jpg</span>)</span></p><a href="/agg/src/1569108006893.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569108006893.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1991" ><p class="intro"><input type="checkbox" class="delete" name="delete_1991" id="delete_1991" /><label for="delete_1991"><span class="name">Anonymous</span> <time datetime="2019-09-21T23:20:10Z">09/21/19 (Sat) 23:20:10</time></label>&nbsp;<a class="post_no" id="post_no_1991" onclick="return highlightReply(1991, event)" href="/agg/res/1991#1991">No.</a><a class="post_no" onclick="return citeReply(1991)" href="/agg/res/1991#q1991">1991</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1991">[Reply]</a></p><div class="body">why&#39;d you change the link from [ota/ to [nen/ back to [ota/?<br/><a href=https://kissu.moe/qa/res/9955.html>https://kissu.moe/qa/res/9955.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/7" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a class="selected">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/9" method="get"><input type="submit" value="Next" /></form>
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