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
			<img class="board_image" src="/static/banners/banner-kissu-17.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea style="display:none" name="text">qmsSY[&#118;&#112;LH2P&#92;1y&#64;b&#44;&#107;&#95;</textarea>
<div style="display:none"><input type="text" name="firstname" value="f#⚈&#47;&#32;♬3}{&#81;&#68;&#116;7\+d5:Y@⚒BvV&#84;-s&#101;p&#90;$~]IU;S^nhX!&#57;K[)&#109;u&lt;N&#40;&#87;8♛&gt;xr&#111;2"></div>
<input type="hidden" name="board" value="agg">
<input type="hidden" name="login" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<span style="display:none" ><input type="text" name="message" value="wd1&#9759;7n%&#47;e:{&#73;⚲^B&#54;⚪rg_&#41;&#36;zVh&#93;\f@Z5&#76;&gt;23t;⛊&#77;☃&#89;&#88;H-QFR'y&#9752;NK*x&#57;&#84;[" ></span >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" name="q" value=" f&#9851;⛭&#9795;9/qzwZk.@h&#124;;$&#76;&#70;⛡mdv,&#69;R83W&#37;&#49;YIM^iU&#9740;5&#9741;+Ag☪T=`}⚑yc&#55;J⛮&#80;#b?⚤6X&amp;{Dx &#92;4N&#112;&#75;H&#110;&#58;)">
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea name="search" style="display:none">b☵&#35;Y{&#55;`&#57;J⚴@V^6_-</textarea>
			
			
				
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
		<div class="thread" id="thread_1469" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566595299385.jpg">1566595299385.jpg</a> <span class="unimportant">(244.32 KB, 1000x1685, <span class="postfilename">4557985.jpg</span>)</span></p><a href="/agg/src/1566595299385.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566595299385.png" style="width:151px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1469" ><p class="intro"><input type="checkbox" class="delete" name="delete_1469" id="delete_1469" /><label for="delete_1469"><span class="name">Anonymous</span> <time datetime="2019-08-23T21:25:02Z">08/23/19 (Fri) 21:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1469" onclick="return highlightReply(1469, event)" href="/agg/res/1469#1469">No.</a><a class="post_no" onclick="return citeReply(1469)" href="/agg/res/1469#q1469">1469</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1469">[Reply]</a></p><div class="body">do you prefer smelly feet or sweaty girlpits?<br/><a href=https://kissu.moe/qa/res/5630.html>https://kissu.moe/qa/res/5630.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1468" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566593204339.mp4">1566593204339.mp4</a> <span class="unimportant">(6 MB, 640x360, <span class="postfilename" title="-_T_H_E_-_B_O_O_G_E_Y_M_A_N_-.mp4">-_T_H_E_-_B_O_O_G_E_Y_M_A_….mp4</span>)</span></p><a href="/player.php?v=/agg/src/1566593204339.mp4&amp;t=-_T_H_E_-_B_O_O_G_E_Y_M_A_N_-.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566593204339.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1468" ><p class="intro"><input type="checkbox" class="delete" name="delete_1468" id="delete_1468" /><label for="delete_1468"><span class="name">Anonymous</span> <time datetime="2019-08-23T20:50:03Z">08/23/19 (Fri) 20:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1468" onclick="return highlightReply(1468, event)" href="/agg/res/1468#1468">No.</a><a class="post_no" onclick="return citeReply(1468)" href="/agg/res/1468#q1468">1468</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1468">[Reply]</a></p><div class="body">I don&#39;t want to alarm you but their might be a fag or fags on this board!<br/><br/><a href="https://www.youtube.com/watch?v=aDWnz66FI1I" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=aDWnz66FI1I</a><br/><a href=http://what-ch.mooo.com/what/res/2230.html>http://what-ch.mooo.com/what/res/2230.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1467" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566588935964.png">1566588935964.png</a> <span class="unimportant">(280.07 KB, 474x474, <span class="postfilename">1566503503525.png</span>)</span></p><a href="/agg/src/1566588935964.png" target="_blank"><img class="post-image" src="/agg/thumb/1566588935964.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1467" ><p class="intro"><input type="checkbox" class="delete" name="delete_1467" id="delete_1467" /><label for="delete_1467"><span class="name">Anonymous</span> <time datetime="2019-08-23T19:40:03Z">08/23/19 (Fri) 19:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1467" onclick="return highlightReply(1467, event)" href="/agg/res/1467#1467">No.</a><a class="post_no" onclick="return citeReply(1467)" href="/agg/res/1467#q1467">1467</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1467">[Reply]</a></p><div class="body">What&#39;s everyone&#39;s thoughts on the season so far? For me it&#39;s been pretty good<br/><a href=https://kissu.moe/qa/res/5621.html>https://kissu.moe/qa/res/5621.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1466" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566584596409.jpg">1566584596409.jpg</a> <span class="unimportant">(40.72 KB, 1024x576, <span class="postfilename" title="0fc4148052b976a7d9f752a7cc294b9d3112f796_hq.jpg">0fc4148052b976a7d9f752a7cc….jpg</span>)</span></p><a href="/agg/src/1566584596409.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566584596409.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1466" ><p class="intro"><input type="checkbox" class="delete" name="delete_1466" id="delete_1466" /><label for="delete_1466"><span class="name">Anonymous</span> <time datetime="2019-08-23T18:25:03Z">08/23/19 (Fri) 18:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1466" onclick="return highlightReply(1466, event)" href="/agg/res/1466#1466">No.</a><a class="post_no" onclick="return citeReply(1466)" href="/agg/res/1466#q1466">1466</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1466">[Reply]</a></p><div class="body">whatmin didnt like my anime<br/><a href=http://what-ch.mooo.com/what/res/2224.html>http://what-ch.mooo.com/what/res/2224.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1465" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566580316772.jpg">1566580316772.jpg</a> <span class="unimportant">(195.77 KB, 600x452, <span class="postfilename" title="484a9b90758c1f3c4ea9c950946528db.jpg">484a9b90758c1f3c4ea9c95094….jpg</span>)</span></p><a href="/agg/src/1566580316772.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566580316772.png" style="width:240px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_1465" ><p class="intro"><input type="checkbox" class="delete" name="delete_1465" id="delete_1465" /><label for="delete_1465"><span class="name">Anonymous</span> <time datetime="2019-08-23T17:15:03Z">08/23/19 (Fri) 17:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1465" onclick="return highlightReply(1465, event)" href="/agg/res/1465#1465">No.</a><a class="post_no" onclick="return citeReply(1465)" href="/agg/res/1465#q1465">1465</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1465">[Reply]</a></p><div class="body">Is whatmin more that just a cheap piece of ass?<br/><a href=http://what-ch.mooo.com/what/res/2223.html>http://what-ch.mooo.com/what/res/2223.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1464" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566580111025.jpg">1566580111025.jpg</a> <span class="unimportant">(43.36 KB, 516x646, <span class="postfilename" title="47d9436fe22d06e0bf334c4dd27be8c6-imagejpeg.jpg">47d9436fe22d06e0bf334c4dd2….jpg</span>)</span></p><a href="/agg/src/1566580111025.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566580111025.png" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1464" ><p class="intro"><input type="checkbox" class="delete" name="delete_1464" id="delete_1464" /><label for="delete_1464"><span class="name">Anonymous</span> <time datetime="2019-08-23T17:10:03Z">08/23/19 (Fri) 17:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1464" onclick="return highlightReply(1464, event)" href="/agg/res/1464#1464">No.</a><a class="post_no" onclick="return citeReply(1464)" href="/agg/res/1464#q1464">1464</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1464">[Reply]</a></p><div class="body">merorin was here, you guys are faggots<br/><a href=http://what-ch.mooo.com/what/res/2222.html>http://what-ch.mooo.com/what/res/2222.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1463" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566579128511.jpg">1566579128511.jpg</a> <span class="unimportant">(424.81 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] UchiMusume - 08 [720p].mkv_snapshot_02.24_[2019.08.23_12.50.24].jpg">[HorribleSubs] UchiMusume ….jpg</span>)</span></p><a href="/agg/src/1566579128511.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566579128511.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1463" ><p class="intro"><input type="checkbox" class="delete" name="delete_1463" id="delete_1463" /><label for="delete_1463"><span class="name">Anonymous</span> <time datetime="2019-08-23T16:55:03Z">08/23/19 (Fri) 16:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1463" onclick="return highlightReply(1463, event)" href="/agg/res/1463#1463">No.</a><a class="post_no" onclick="return citeReply(1463)" href="/agg/res/1463#q1463">1463</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1463">[Reply]</a></p><div class="body">Sure are a lot of furries recently...<br/><a href=https://kissu.moe/qa/res/5609.html>https://kissu.moe/qa/res/5609.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1462" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566560915604.png">1566560915604.png</a> <span class="unimportant">(839.94 KB, 1280x720, <span class="postfilename">1477577161777.png</span>)</span></p><a href="/agg/src/1566560915604.png" target="_blank"><img class="post-image" src="/agg/thumb/1566560915604.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1462" ><p class="intro"><input type="checkbox" class="delete" name="delete_1462" id="delete_1462" /><label for="delete_1462"><span class="name">Anonymous</span> <time datetime="2019-08-23T11:50:02Z">08/23/19 (Fri) 11:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1462" onclick="return highlightReply(1462, event)" href="/agg/res/1462#1462">No.</a><a class="post_no" onclick="return citeReply(1462)" href="/agg/res/1462#q1462">1462</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1462">[Reply]</a></p><div class="body">Fish!<br/><a href=https://kissu.moe/qa/res/5598.html>https://kissu.moe/qa/res/5598.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1461" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566556731271.jpg">1566556731271.jpg</a> <span class="unimportant">(52.27 KB, 400x400, <span class="postfilename">1566505382337.jpg</span>)</span></p><a href="/agg/src/1566556731271.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566556731271.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1461" ><p class="intro"><input type="checkbox" class="delete" name="delete_1461" id="delete_1461" /><label for="delete_1461"><span class="name">Anonymous</span> <time datetime="2019-08-23T10:40:03Z">08/23/19 (Fri) 10:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1461" onclick="return highlightReply(1461, event)" href="/agg/res/1461#1461">No.</a><a class="post_no" onclick="return citeReply(1461)" href="/agg/res/1461#q1461">1461</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1461">[Reply]</a></p><div class="body">i had an idea for a thread but forgot<br/><a href=https://kissu.moe/qa/res/5596.html>https://kissu.moe/qa/res/5596.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1460" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566544973078.png">1566544973078.png</a> <span class="unimportant">(3.83 MB, 2480x2784, <span class="postfilename" title="92aab298c2db3172fed06228f5c1a6d5.png">92aab298c2db3172fed06228f5….png</span>)</span></p><a href="/agg/src/1566544973078.png" target="_blank"><img class="post-image" src="/agg/thumb/1566544973078.png" style="width:227px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1460" ><p class="intro"><input type="checkbox" class="delete" name="delete_1460" id="delete_1460" /><label for="delete_1460"><span class="name">Anonymous</span> <time datetime="2019-08-23T07:25:02Z">08/23/19 (Fri) 07:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1460" onclick="return highlightReply(1460, event)" href="/agg/res/1460#1460">No.</a><a class="post_no" onclick="return citeReply(1460)" href="/agg/res/1460#q1460">1460</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1460">[Reply]</a></p><div class="body">You ever forget to eat?<br/><a href=https://kissu.moe/qa/res/5590.html>https://kissu.moe/qa/res/5590.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1459" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566531410519.png">1566531410519.png</a> <span class="unimportant">(311.23 KB, 500x450, <span class="postfilename" title="__junko_touhou_drawn_by_pote_ptkan__517d05909d6df6617478b8fa9676316d.png">__junko_touhou_drawn_by_po….png</span>)</span></p><a href="/agg/src/1566531410519.png" target="_blank"><img class="post-image" src="/agg/thumb/1566531410519.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_1459" ><p class="intro"><input type="checkbox" class="delete" name="delete_1459" id="delete_1459" /><label for="delete_1459"><span class="subject">Work?</span> <span class="name">Raiko Horikawa</span> <time datetime="2019-08-23T03:40:08Z">08/23/19 (Fri) 03:40:08</time></label>&nbsp;<a class="post_no" id="post_no_1459" onclick="return highlightReply(1459, event)" href="/agg/res/1459#1459">No.</a><a class="post_no" onclick="return citeReply(1459)" href="/agg/res/1459#q1459">1459</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1459">[Reply]</a></p><div class="body"><span class="glowpink">Hey Nen!</span> What does nen work as?<br/><a href=https://kakashi-nenpo.com/jp/res/32832.html>https://kakashi-nenpo.com/jp/res/32832.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1458" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566530284004.jpg">1566530284004.jpg</a> <span class="unimportant">(30.98 KB, 720x405, <span class="postfilename">1441070852451.jpg</span>)</span></p><a href="/agg/src/1566530284004.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566530284004.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1458" ><p class="intro"><input type="checkbox" class="delete" name="delete_1458" id="delete_1458" /><label for="delete_1458"><span class="name">Anonymous</span> <time datetime="2019-08-23T03:20:03Z">08/23/19 (Fri) 03:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1458" onclick="return highlightReply(1458, event)" href="/agg/res/1458#1458">No.</a><a class="post_no" onclick="return citeReply(1458)" href="/agg/res/1458#q1458">1458</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1458">[Reply]</a></p><div class="body">rubbing on that ass<br/><a href=http://what-ch.mooo.com/what/res/2214.html>http://what-ch.mooo.com/what/res/2214.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1457" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566523189460.jpg">1566523189460.jpg</a> <span class="unimportant">(31.61 KB, 640x480, <span class="postfilename">1263896539657.jpg</span>)</span></p><a href="/agg/src/1566523189460.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566523189460.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1457" ><p class="intro"><input type="checkbox" class="delete" name="delete_1457" id="delete_1457" /><label for="delete_1457"><span class="name">Anonymous</span> <time datetime="2019-08-23T01:20:04Z">08/23/19 (Fri) 01:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1457" onclick="return highlightReply(1457, event)" href="/agg/res/1457#1457">No.</a><a class="post_no" onclick="return citeReply(1457)" href="/agg/res/1457#q1457">1457</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1457">[Reply]</a></p><div class="body">Rozen Maiden was 15 years ago...<br/><a href=https://kissu.moe/qa/res/5568.html>https://kissu.moe/qa/res/5568.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1456" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566522258605.jpg">1566522258605.jpg</a> <span class="unimportant">(398.13 KB, 1100x1100, <span class="postfilename" title="d35df1d264dc79ba3ed49072c02c1fe2.jpg">d35df1d264dc79ba3ed49072c0….jpg</span>)</span></p><a href="/agg/src/1566522258605.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566522258605.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1456" ><p class="intro"><input type="checkbox" class="delete" name="delete_1456" id="delete_1456" /><label for="delete_1456"><span class="name">Anonymous</span> <time datetime="2019-08-23T01:05:03Z">08/23/19 (Fri) 01:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1456" onclick="return highlightReply(1456, event)" href="/agg/res/1456#1456">No.</a><a class="post_no" onclick="return citeReply(1456)" href="/agg/res/1456#q1456">1456</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1456">[Reply]</a></p><div class="body">Now this, is probably the greatest swimsuit ever crafted<br/><a href=https://kissu.moe/qa/res/5555.html>https://kissu.moe/qa/res/5555.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1455" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566520664596.jpg">1566520664596.jpg</a> <span class="unimportant">(92.65 KB, 1304x448, <span class="postfilename">Capture.jpg</span>)</span></p><a href="/agg/src/1566520664596.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566520664596.png" style="width:255px;height:88px" alt="" /></a></div>    </div>    <div class="post op" id="op_1455" ><p class="intro"><input type="checkbox" class="delete" name="delete_1455" id="delete_1455" /><label for="delete_1455"><span class="name">Anonymous</span> <time datetime="2019-08-23T00:40:02Z">08/23/19 (Fri) 00:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1455" onclick="return highlightReply(1455, event)" href="/agg/res/1455#1455">No.</a><a class="post_no" onclick="return citeReply(1455)" href="/agg/res/1455#q1455">1455</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1455">[Reply]</a></p><div class="body">The /qa/ ojisans<br/><a href=https://kissu.moe/qa/res/5547.html>https://kissu.moe/qa/res/5547.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1454" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566518990144.jpg">1566518990144.jpg</a> <span class="unimportant">(164.53 KB, 1000x900, <span class="postfilename" title="04253c63eabc67d3c6f28dc57de9a22d.jpg">04253c63eabc67d3c6f28dc57d….jpg</span>)</span></p><a href="/agg/src/1566518990144.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566518990144.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_1454" ><p class="intro"><input type="checkbox" class="delete" name="delete_1454" id="delete_1454" /><label for="delete_1454"><span class="name">Anonymous</span> <time datetime="2019-08-23T00:10:03Z">08/23/19 (Fri) 00:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1454" onclick="return highlightReply(1454, event)" href="/agg/res/1454#1454">No.</a><a class="post_no" onclick="return citeReply(1454)" href="/agg/res/1454#q1454">1454</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1454">[Reply]</a></p><div class="body">I like the seasonal stream and all, but would you ever consider going back to picking a series and watching it?<br/><a href=https://kissu.moe/qa/res/5542.html>https://kissu.moe/qa/res/5542.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1453" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566518741448.gif">1566518741448.gif</a> <span class="unimportant">(27.78 KB, 87x100, <span class="postfilename">dance.gif</span>)</span></p><a href="/agg/src/1566518741448.gif" target="_blank"><img class="post-image" src="/agg/thumb/1566518741448.png" style="width:87px;height:100px" alt="" /></a></div>    </div>    <div class="post op" id="op_1453" ><p class="intro"><input type="checkbox" class="delete" name="delete_1453" id="delete_1453" /><label for="delete_1453"><span class="name">Anonymous</span> <time datetime="2019-08-23T00:10:02Z">08/23/19 (Fri) 00:10:02</time></label>&nbsp;<a class="post_no" id="post_no_1453" onclick="return highlightReply(1453, event)" href="/agg/res/1453#1453">No.</a><a class="post_no" onclick="return citeReply(1453)" href="/agg/res/1453#q1453">1453</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1453">[Reply]</a></p><div class="body">why do people hate lain<br/><a href=https://kissu.moe/qa/res/5541.html>https://kissu.moe/qa/res/5541.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1452" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566518595169.jpg">1566518595169.jpg</a> <span class="unimportant">(233.38 KB, 1757x2048, <span class="postfilename">DvzBqO4XgAEBzp1.jpg large.jpg</span>)</span></p><a href="/agg/src/1566518595169.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566518595169.png" style="width:219px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1452" ><p class="intro"><input type="checkbox" class="delete" name="delete_1452" id="delete_1452" /><label for="delete_1452"><span class="name">Anonymous</span> <time datetime="2019-08-23T00:05:02Z">08/23/19 (Fri) 00:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1452" onclick="return highlightReply(1452, event)" href="/agg/res/1452#1452">No.</a><a class="post_no" onclick="return citeReply(1452)" href="/agg/res/1452#q1452">1452</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1452">[Reply]</a></p><div class="body">This thread is for sharing artists you like.<br/><a href="https://twitter.com/insect_hospital" rel="nofollow" target="_blank">https://twitter.com/insect_hospital</a><br/><a href=https://kissu.moe/qa/res/5539.html>https://kissu.moe/qa/res/5539.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1451" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566515601731.jpg">1566515601731.jpg</a> <span class="unimportant">(1.47 MB, 1536x2048, <span class="postfilename">73272441_p0.jpg</span>)</span></p><a href="/agg/src/1566515601731.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566515601731.png" style="width:192px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1451" ><p class="intro"><input type="checkbox" class="delete" name="delete_1451" id="delete_1451" /><label for="delete_1451"><span class="name">Luna Child</span> <time datetime="2019-08-22T23:15:03Z">08/22/19 (Thu) 23:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1451" onclick="return highlightReply(1451, event)" href="/agg/res/1451#1451">No.</a><a class="post_no" onclick="return citeReply(1451)" href="/agg/res/1451#q1451">1451</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1451">[Reply]</a></p><div class="body"><a href=https://kakashi-nenpo.com/jp/res/32830.html>https://kakashi-nenpo.com/jp/res/32830.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1450" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566514913143.jpg">1566514913143.jpg</a> <span class="unimportant">(191.27 KB, 1200x900, <span class="postfilename">D7iAxOHXkAAFSPr.jpg</span>)</span></p><a href="/agg/src/1566514913143.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566514913143.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1450" ><p class="intro"><input type="checkbox" class="delete" name="delete_1450" id="delete_1450" /><label for="delete_1450"><span class="name">Anonymous</span> <time datetime="2019-08-22T23:05:04Z">08/22/19 (Thu) 23:05:04</time></label>&nbsp;<a class="post_no" id="post_no_1450" onclick="return highlightReply(1450, event)" href="/agg/res/1450#1450">No.</a><a class="post_no" onclick="return citeReply(1450)" href="/agg/res/1450#q1450">1450</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1450">[Reply]</a></p><div class="body">私<br/><a href=https://kissu.moe/qa/res/5521.html>https://kissu.moe/qa/res/5521.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/34" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a class="selected">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/36" method="get"><input type="submit" value="Next" /></form>
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