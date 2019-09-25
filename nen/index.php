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
            , board_name = "nen";
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
								<title>/nen/ - Mysterious Thoughtography Collection</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/static/banners/banner-kissu-11.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/nen/ - Mysterious Thoughtography Collection</h1>
	<div class="subtitle">
					</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none"><input type="text" name="48ub0goi2ap⚗dwnfjvct9yrk⛰☭qlz" value=""></div>
<div style="display:none"><input type="text" name="4x9q0a1elr3s♇⛔tdhc67f⛩ob⚝nkzy5" value="%tsU:yF/⚓Ri_=&lt;,^(\*0`{P}5q☂rVx~v⛉nA4&amp;⚎7"></div>
<input type="hidden" name="board" value="nen">
<input style="display:none" type="text" name="firstname" value="o9Dx.|⚂Z:4j-⚕+" >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input name="f☲sz♁p★6ixw13rd7uhk9vn24lm8j5qbetcgyo" value="" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="url" value="ywQY⛍+evBC♅\a2H*M$5Pfr&amp;&gt;';[!83E,Ni%G`A7tW=♋gx⛾J@"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none" ><input type="text" name="message" value="" ></div >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input type="hidden" value="9&#55;573" name="g8yxl0b1en☆k2or3qus94m⚑tp">
			
			
				
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

<input type="hidden" name="hash" value="1953fe6931ffe27374452eee750597baaf53a3fb">
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
							<a id="thread-catalog-top" href="/nen/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="nen" />
		<div class="thread" id="thread_35" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1552068463022.png">1552068463022.png</a> <span class="unimportant">(3.03 MB, 2550x1500, <span class="postfilename" title="__houraisan_kaguya_touhou_drawn_by_pudding_skymint_028__f688aa76f4f932c220333f690640c7a3.png">__houraisan_kaguya_touhou_….png</span>)</span></p><a href="/nen/src/1552068463022.png" target="_blank"><img class="post-image" src="/nen/thumb/1552068463022.png" style="width:255px;height:150px" alt="" /></a></div>    </div>    <div class="post op" id="op_35" ><p class="intro"><input type="checkbox" class="delete" name="delete_35" id="delete_35" /><label for="delete_35"><span class="subject">Bump this thread every time you visit for the FIRST TIME today! Part 30</span> <span class="name">Tewi Inaba</span> <time datetime="2019-04-01T10:17:48Z">04/01/19 (Mon) 10:17:48</time></label>&nbsp;<a class="post_no" id="post_no_35" onclick="return highlightReply(35, event)" href="/nen/res/35#35">No.</a><a class="post_no" onclick="return citeReply(35)" href="/nen/res/35#q35">35</a><a href="/nen/res/35">[Reply]</a></p><div class="body">The princess of taking it easy!<br/><a href=https://kakashi-nenpo.com/jp/res/30199.html>https://kakashi-nenpo.com/jp/res/30199.html</a></div></div><div class="post reply" id="reply_36"><p class="intro"><input type="checkbox" class="delete" name="delete_36" id="delete_36" /><label for="delete_36"><span class="name">Anonymous</span> <time datetime="2019-04-01T11:01:45Z">04/01/19 (Mon) 11:01:45</time></label>&nbsp;<a class="post_no" id="post_no_36" onclick="return highlightReply(36, event)" href="/nen/res/35#36">No.</a><a class="post_no" onclick="return citeReply(36)" href="/nen/res/35#q36">36</a></p>        <div class="files">    </div>         <div class="body" >Good mornen, everynyan!</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_34" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1553054489166.png">1553054489166.png</a> <span class="unimportant">(145.17 KB, 240x350, <span class="postfilename" title="259_636734608266926341TTGL_small.png">259_636734608266926341TTGL….png</span>)</span></p><a href="/nen/src/1553054489166.png" target="_blank"><img class="post-image" src="/nen/thumb/1553054489166.png" style="width:175px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_34" ><p class="intro"><input type="checkbox" class="delete" name="delete_34" id="delete_34" /><label for="delete_34"><span class="subject">Post random anime title even you want</span> <span class="name">Yoshika Miyako‎</span> <time datetime="2019-04-01T10:17:48Z">04/01/19 (Mon) 10:17:48</time></label>&nbsp;<a class="post_no" id="post_no_34" onclick="return highlightReply(34, event)" href="/nen/res/34#34">No.</a><a class="post_no" onclick="return citeReply(34)" href="/nen/res/34#q34">34</a><a href="/nen/res/34">[Reply]</a></p><div class="body">Gurren Lagann.<br/><a href=https://kakashi-nenpo.com/jp/res/30373.html>https://kakashi-nenpo.com/jp/res/30373.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_33" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1553065568784.png">1553065568784.png</a> <span class="unimportant">(89.87 KB, 550x475, <span class="postfilename">1553061542943.png</span>)</span></p><a href="/nen/src/1553065568784.png" target="_blank"><img class="post-image" src="/nen/thumb/1553065568784.png" style="width:255px;height:221px" alt="" /></a></div>    </div>    <div class="post op" id="op_33" ><p class="intro"><input type="checkbox" class="delete" name="delete_33" id="delete_33" /><label for="delete_33"><span class="name">Mima</span> <time datetime="2019-04-01T10:17:47Z">04/01/19 (Mon) 10:17:47</time></label>&nbsp;<a class="post_no" id="post_no_33" onclick="return highlightReply(33, event)" href="/nen/res/33#33">No.</a><a class="post_no" onclick="return citeReply(33)" href="/nen/res/33#q33">33</a><a href="/nen/res/33">[Reply]</a></p><div class="body"><a href=https://kakashi-nenpo.com/jp/res/30378.html>https://kakashi-nenpo.com/jp/res/30378.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_32" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1549975439464.png">1549975439464.png</a> <span class="unimportant">(906.02 KB, 1280x720, <span class="postfilename">1521715688653.png</span>)</span></p><a href="/nen/src/1549975439464.png" target="_blank"><img class="post-image" src="/nen/thumb/1549975439464.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_32" ><p class="intro"><input type="checkbox" class="delete" name="delete_32" id="delete_32" /><label for="delete_32"><span class="name">Berserker</span> <time datetime="2019-04-01T10:17:46Z">04/01/19 (Mon) 10:17:46</time></label>&nbsp;<a class="post_no" id="post_no_32" onclick="return highlightReply(32, event)" href="/nen/res/32#32">No.</a><a class="post_no" onclick="return citeReply(32)" href="/nen/res/32#q32">32</a><a href="/nen/res/32">[Reply]</a></p><div class="body">So many nice old threads gone foreber...<br/><a href=https://kakashi-nenpo.com/jp/res/29848.html>https://kakashi-nenpo.com/jp/res/29848.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_31" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1548985089773.png">1548985089773.png</a> <span class="unimportant">(270.1 KB, 513x437, <span class="postfilename" title="__miyu_edelfelt_fate_kaleid_liner_prisma_illya_and_etc_drawn_by_engiyoshi__9e026221bdfd3db9ce8045a87d823ab2.png">__miyu_edelfelt_fate_kalei….png</span>)</span></p><a href="/nen/src/1548985089773.png" target="_blank"><img class="post-image" src="/nen/thumb/1548985089773.png" style="width:255px;height:218px" alt="" /></a></div>    </div>    <div class="post op" id="op_31" ><p class="intro"><input type="checkbox" class="delete" name="delete_31" id="delete_31" /><label for="delete_31"><span class="name">Momiji Inubashiri</span> <time datetime="2019-04-01T10:17:46Z">04/01/19 (Mon) 10:17:46</time></label>&nbsp;<a class="post_no" id="post_no_31" onclick="return highlightReply(31, event)" href="/nen/res/31#31">No.</a><a class="post_no" onclick="return citeReply(31)" href="/nen/res/31#q31">31</a><a href="/nen/res/31">[Reply]</a></p><div class="body">try your <span class="glowgold">best</span><br/><a href=https://kakashi-nenpo.com/jp/res/29566.html>https://kakashi-nenpo.com/jp/res/29566.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_30" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1549060899071.png">1549060899071.png</a> <span class="unimportant">(908.68 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Yuru Camp - 02 [720p].mkv_snapshot_19.40_[2019.02.01_16.19.52].png">[HorribleSubs] Yuru Camp -….png</span>)</span></p><a href="/nen/src/1549060899071.png" target="_blank"><img class="post-image" src="/nen/thumb/1549060899071.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_30" ><p class="intro"><input type="checkbox" class="delete" name="delete_30" id="delete_30" /><label for="delete_30"><span class="name">Lyrica Prismriver</span> <time datetime="2019-04-01T10:17:46Z">04/01/19 (Mon) 10:17:46</time></label>&nbsp;<a class="post_no" id="post_no_30" onclick="return highlightReply(30, event)" href="/nen/res/30#30">No.</a><a class="post_no" onclick="return citeReply(30)" href="/nen/res/30#q30">30</a><a href="/nen/res/30">[Reply]</a></p><div class="body">How do I properly self insert while watching anime?<br/><a href=https://kakashi-nenpo.com/jp/res/29585.html>https://kakashi-nenpo.com/jp/res/29585.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_29" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1544326334219.png">1544326334219.png</a> <span class="unimportant">(1.12 MB, 1800x1600, <span class="postfilename" title="__ex_keine_and_kamishirasawa_keine_touhou_drawn_by_six_fnrptal1010__b8559e2d99ef95b62889f7b13768cd16.png">__ex_keine_and_kamishirasa….png</span>)</span></p><a href="/nen/src/1544326334219.png" target="_blank"><img class="post-image" src="/nen/thumb/1544326334219.png" style="width:255px;height:227px" alt="" /></a></div>    </div>    <div class="post op" id="op_29" ><p class="intro"><input type="checkbox" class="delete" name="delete_29" id="delete_29" /><label for="delete_29"><span class="name">Lunasa Prismriver</span> <time datetime="2019-04-01T10:17:44Z">04/01/19 (Mon) 10:17:44</time></label>&nbsp;<a class="post_no" id="post_no_29" onclick="return highlightReply(29, event)" href="/nen/res/29#29">No.</a><a class="post_no" onclick="return citeReply(29)" href="/nen/res/29#q29">29</a><a href="/nen/res/29">[Reply]</a></p><div class="body">Does /nen/ like horns?<br/><a href=https://kakashi-nenpo.com/jp/res/28521.html>https://kakashi-nenpo.com/jp/res/28521.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_28" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1545193034096.png">1545193034096.png</a> <span class="unimportant">(553.49 KB, 1099x621, <span class="postfilename">power of metal.png</span>)</span></p><a href="/nen/src/1545193034096.png" target="_blank"><img class="post-image" src="/nen/thumb/1545193034096.png" style="width:255px;height:145px" alt="" /></a></div>    </div>    <div class="post op" id="op_28" ><p class="intro"><input type="checkbox" class="delete" name="delete_28" id="delete_28" /><label for="delete_28"><span class="name">Watatsuki no Toyohime</span> <time datetime="2019-04-01T10:17:44Z">04/01/19 (Mon) 10:17:44</time></label>&nbsp;<a class="post_no" id="post_no_28" onclick="return highlightReply(28, event)" href="/nen/res/28#28">No.</a><a class="post_no" onclick="return citeReply(28)" href="/nen/res/28#q28">28</a><a href="/nen/res/28">[Reply]</a></p><div class="body">What are /nen/&#39;s favorite subgenres of metal?<br/><a href=https://kakashi-nenpo.com/jp/res/28723.html>https://kakashi-nenpo.com/jp/res/28723.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_25" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1543681644362.png">1543681644362.png</a> <span class="unimportant">(152.1 KB, 800x473, <span class="postfilename">1530628313231.png</span>)</span></p><a href="/nen/src/1543681644362.png" target="_blank"><img class="post-image" src="/nen/thumb/1543681644362.png" style="width:255px;height:151px" alt="" /></a></div>    </div>    <div class="post op" id="op_25" ><p class="intro"><input type="checkbox" class="delete" name="delete_25" id="delete_25" /><label for="delete_25"><span class="name">Hanei Misawa</span> <time datetime="2019-04-01T10:17:43Z">04/01/19 (Mon) 10:17:43</time></label>&nbsp;<a class="post_no" id="post_no_25" onclick="return highlightReply(25, event)" href="/nen/res/25#25">No.</a><a class="post_no" onclick="return citeReply(25)" href="/nen/res/25#q25">25</a><a href="/nen/res/25">[Reply]</a></p><div class="body">rabbit rabbit rabbit!<br/>I may have forgotten irl, but Ill have good luck on /nen/ now at least...<br/><a href=https://kakashi-nenpo.com/jp/res/28293.html>https://kakashi-nenpo.com/jp/res/28293.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_26" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1543789872755.png">1543789872755.png</a> <span class="unimportant">(234.06 KB, 1280x720, <span class="postfilename">1543696987087.png</span>)</span></p><a href="/nen/src/1543789872755.png" target="_blank"><img class="post-image" src="/nen/thumb/1543789872755.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_26" ><p class="intro"><input type="checkbox" class="delete" name="delete_26" id="delete_26" /><label for="delete_26"><span class="name">Gertrude</span> <time datetime="2019-04-01T10:17:43Z">04/01/19 (Mon) 10:17:43</time></label>&nbsp;<a class="post_no" id="post_no_26" onclick="return highlightReply(26, event)" href="/nen/res/26#26">No.</a><a class="post_no" onclick="return citeReply(26)" href="/nen/res/26#q26">26</a><a href="/nen/res/26">[Reply]</a></p><div class="body">Why doesn&#39;t nen have a <span class="glowblue">cool</span> and original tan like ota?<br/><a href=https://kakashi-nenpo.com/jp/res/28337.html>https://kakashi-nenpo.com/jp/res/28337.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_27" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1540685593009.png">1540685593009.png</a> <span class="unimportant">(857.47 KB, 1280x720, <span class="postfilename">fizzy.png</span>)</span></p><a href="/nen/src/1540685593009.png" target="_blank"><img class="post-image" src="/nen/thumb/1540685593009.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_27" ><p class="intro"><input type="checkbox" class="delete" name="delete_27" id="delete_27" /><label for="delete_27"><span class="name">Sariel</span> <time datetime="2019-04-01T10:17:43Z">04/01/19 (Mon) 10:17:43</time></label>&nbsp;<a class="post_no" id="post_no_27" onclick="return highlightReply(27, event)" href="/nen/res/27#27">No.</a><a class="post_no" onclick="return citeReply(27)" href="/nen/res/27#q27">27</a><a href="/nen/res/27">[Reply]</a></p><div class="body">get fizzy<br/><a href=https://kakashi-nenpo.com/jp/res/27689.html>https://kakashi-nenpo.com/jp/res/27689.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_23" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1542378502953.png">1542378502953.png</a> <span class="unimportant">(2.03 MB, 1000x707, <span class="postfilename">3 years of nennen.png</span>)</span></p><a href="/nen/src/1542378502953.png" target="_blank"><img class="post-image" src="/nen/thumb/1542378502953.png" style="width:255px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_23" ><p class="intro"><input type="checkbox" class="delete" name="delete_23" id="delete_23" /><label for="delete_23"><span class="name">Toyosatomimi no Miko</span> <time datetime="2019-04-01T10:17:41Z">04/01/19 (Mon) 10:17:41</time></label>&nbsp;<a class="post_no" id="post_no_23" onclick="return highlightReply(23, event)" href="/nen/res/23#23">No.</a><a class="post_no" onclick="return citeReply(23)" href="/nen/res/23#q23">23</a><a href="/nen/res/23">[Reply]</a></p><div class="body">Happy birthday, /nen/!<br/>I can&#39;t believe it&#39;s already been 3 years.<br/><a href=https://kakashi-nenpo.com/jp/res/28011.html>https://kakashi-nenpo.com/jp/res/28011.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_24" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1542757476305.png">1542757476305.png</a> <span class="unimportant">(63.11 KB, 317x317, <span class="postfilename">5-11233.png</span>)</span></p><a href="/nen/src/1542757476305.png" target="_blank"><img class="post-image" src="/nen/thumb/1542757476305.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_24" ><p class="intro"><input type="checkbox" class="delete" name="delete_24" id="delete_24" /><label for="delete_24"><span class="name">Yoshiko Tsushima</span> <time datetime="2019-04-01T10:17:41Z">04/01/19 (Mon) 10:17:41</time></label>&nbsp;<a class="post_no" id="post_no_24" onclick="return highlightReply(24, event)" href="/nen/res/24#24">No.</a><a class="post_no" onclick="return citeReply(24)" href="/nen/res/24#q24">24</a><a href="/nen/res/24">[Reply]</a></p><div class="body">Letty is ready for winter!<br/><a href=https://kakashi-nenpo.com/jp/res/28095.html>https://kakashi-nenpo.com/jp/res/28095.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_21" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1533801506994.png">1533801506994.png</a> <span class="unimportant">(1.22 MB, 1340x909, <span class="postfilename" title="kioku_no_kaibutsu_gekan_006_crop_reisen_driving_car.png">kioku_no_kaibutsu_gekan_00….png</span>)</span></p><a href="/nen/src/1533801506994.png" target="_blank"><img class="post-image" src="/nen/thumb/1533801506994.png" style="width:255px;height:173px" alt="" /></a></div>    </div>    <div class="post op" id="op_21" ><p class="intro"><input type="checkbox" class="delete" name="delete_21" id="delete_21" /><label for="delete_21"><span class="subject">Not-lewd SFW Doujin Thread</span> <span class="name">Dia Kurosawa</span> <time datetime="2019-04-01T10:17:40Z">04/01/19 (Mon) 10:17:40</time></label>&nbsp;<a class="post_no" id="post_no_21" onclick="return highlightReply(21, event)" href="/nen/res/21#21">No.</a><a class="post_no" onclick="return citeReply(21)" href="/nen/res/21#q21">21</a><a href="/nen/res/21">[Reply]</a></p><div class="body">Any doujin goes as long as it&#39;s not lewd.<br/><br/>What are you reading, /nen/? If you&#39;re not reading any, I recommend Kioku no Kaibutsu. It&#39;s a neat little crime thriller with the cast of Touhou Suzunaan.<br/><a href=https://kakashi-nenpo.com/jp/res/26142.html>https://kakashi-nenpo.com/jp/res/26142.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_22" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1537529953065.png">1537529953065.png</a> <span class="unimportant">(881.9 KB, 1024x768, <span class="postfilename" title="__izayoi_sakuya_and_remilia_scarlet_touhou_drawn_by_shirosato__083c2727187e342e3ed8507f0877055a.png">__izayoi_sakuya_and_remili….png</span>)</span></p><a href="/nen/src/1537529953065.png" target="_blank"><img class="post-image" src="/nen/thumb/1537529953065.png" style="width:255px;height:192px" alt="" /></a></div>    </div>    <div class="post op" id="op_22" ><p class="intro"><input type="checkbox" class="delete" name="delete_22" id="delete_22" /><label for="delete_22"><span class="subject">Bump this thread every time you visit for the FIRST TIME today! Part 27</span> <span class="name">Gengetsu</span> <time datetime="2019-04-01T10:17:40Z">04/01/19 (Mon) 10:17:40</time></label>&nbsp;<a class="post_no" id="post_no_22" onclick="return highlightReply(22, event)" href="/nen/res/22#22">No.</a><a class="post_no" onclick="return citeReply(22)" href="/nen/res/22#q22">22</a><a href="/nen/res/22">[Reply]</a></p><div class="body">The art of taking it easy!<br/><a href=https://kakashi-nenpo.com/jp/res/26869.html>https://kakashi-nenpo.com/jp/res/26869.html</a></div></div><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/nen/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>]				 [<a href="/nen/2">2</a>] 		 <form action="/nen/2" method="get"><input type="submit" value="Next" /></form>
					 | <a href="/nen/catalog">Catalog</a>
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