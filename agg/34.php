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
			<img class="board_image" src="/static/banners/banner-kissu-2.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="text" value="qmsSY&#91;&#118;&#112;LH&#50;P\1y@&#98;,k_" type="hidden">
<input style="display:none" type="text" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<textarea name="login" style="display:none">/&#91;LH&#32;&#74;i:`&#33;;&#67;&#43;6&#92;&#111;T&lt;8ObI|?&#88;]&#100;.2☨{tW5 &#99;⚱1B=&#107;@9(3&#78;g☮*&#125;4'PQ-MV⚯0KD7us&#106;</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="w&#100;1☟7n%/e:&#123;I⚲&#94;&#66;6⚪rg_)&#36;zVh]&#92;&#102;&#64;Z5L&gt;23t;⛊M☃YXH&#45;Q&#70;R'&#121;☘&#78;K*&#120;9T&#91;" name="message" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" name="q" value=" &#102;♻&#9965;&#9795;9/q&#122;w&#90;k.@h|&#59;$LF⛡mdv,&#69;&#82;83W&#37;1&#89;&#73;&#77;^iU&#9740;5☍&#43;A&#103;&#9770;T=&#96;}⚑yc7J⛮P#&#98;?⚤&#54;X&#38;{Dx \4N&#112;K&#72;n:&#41;">
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3="></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input  type="hidden"  name="search"  value="&#98;☵#Y{7`&#57;J⚴@V^6_-">
			
			
				
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
		<div class="thread" id="thread_1489" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566673899187.png">1566673899187.png</a> <span class="unimportant">(5.41 MB, 3250x2643, <span class="postfilename" title="ca7ab0c5ffa5b52fea1fea2d1377990d.png">ca7ab0c5ffa5b52fea1fea2d13….png</span>)</span></p><a href="/agg/src/1566673899187.png" target="_blank"><img class="post-image" src="/agg/thumb/1566673899187.png" style="width:255px;height:207px" alt="" /></a></div>    </div>    <div class="post op" id="op_1489" ><p class="intro"><input type="checkbox" class="delete" name="delete_1489" id="delete_1489" /><label for="delete_1489"><span class="name">Anonymous</span> <time datetime="2019-08-24T19:15:08Z">08/24/19 (Sat) 19:15:08</time></label>&nbsp;<a class="post_no" id="post_no_1489" onclick="return highlightReply(1489, event)" href="/agg/res/1489#1489">No.</a><a class="post_no" onclick="return citeReply(1489)" href="/agg/res/1489#q1489">1489</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1489">[Reply]</a></p><div class="body">what are /qa/&#39;s favorite pripara songs?<br/>mine are pri-to perfect and aidoru wo torimodose<br/><a href=https://kissu.moe/qa/res/5755.html>https://kissu.moe/qa/res/5755.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1488" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566673438391.jpg">1566673438391.jpg</a> <span class="unimportant">(33.82 KB, 439x396, <span class="postfilename">misc 2182.jpg</span>)</span></p><a href="/agg/src/1566673438391.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566673438391.png" style="width:240px;height:217px" alt="" /></a></div>    </div>    <div class="post op" id="op_1488" ><p class="intro"><input type="checkbox" class="delete" name="delete_1488" id="delete_1488" /><label for="delete_1488"><span class="name">Anonymous</span> <time datetime="2019-08-24T19:05:03Z">08/24/19 (Sat) 19:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1488" onclick="return highlightReply(1488, event)" href="/agg/res/1488#1488">No.</a><a class="post_no" onclick="return citeReply(1488)" href="/agg/res/1488#q1488">1488</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1488">[Reply]</a></p><div class="body">    Post girls that want it in the ass and the mouth in that order.<br/><a href=http://what-ch.mooo.com/what/res/2258.html>http://what-ch.mooo.com/what/res/2258.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1487" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566665257170.jpg">1566665257170.jpg</a> <span class="unimportant">(133.86 KB, 762x657, <span class="postfilename">1566664280561.jpg</span>)</span></p><a href="/agg/src/1566665257170.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566665257170.png" style="width:240px;height:207px" alt="" /></a></div>    </div>    <div class="post op" id="op_1487" ><p class="intro"><input type="checkbox" class="delete" name="delete_1487" id="delete_1487" /><label for="delete_1487"><span class="name">Anonymous</span> <time datetime="2019-08-24T16:50:02Z">08/24/19 (Sat) 16:50:02</time></label>&nbsp;<a class="post_no" id="post_no_1487" onclick="return highlightReply(1487, event)" href="/agg/res/1487#1487">No.</a><a class="post_no" onclick="return citeReply(1487)" href="/agg/res/1487#q1487">1487</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1487">[Reply]</a></p><div class="body">    Girls that like anal<br/><a href=http://what-ch.mooo.com/what/res/2253.html>http://what-ch.mooo.com/what/res/2253.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1486" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566656636367.png">1566656636367.png</a> <span class="unimportant">(969.54 KB, 991x1600, <span class="postfilename">1566616944951.png</span>)</span></p><a href="/agg/src/1566656636367.png" target="_blank"><img class="post-image" src="/agg/thumb/1566656636367.png" style="width:149px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1486" ><p class="intro"><input type="checkbox" class="delete" name="delete_1486" id="delete_1486" /><label for="delete_1486"><span class="name">Anonymous</span> <time datetime="2019-08-24T14:25:03Z">08/24/19 (Sat) 14:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1486" onclick="return highlightReply(1486, event)" href="/agg/res/1486#1486">No.</a><a class="post_no" onclick="return citeReply(1486)" href="/agg/res/1486#q1486">1486</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1486">[Reply]</a></p><div class="body">Well, whatmin? I&#39;ll give to you if you get on all fours and lick my foot like a dog.<br/><a href=http://what-ch.mooo.com/what/res/2251.html>http://what-ch.mooo.com/what/res/2251.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1485" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566649322449.png">1566649322449.png</a> <span class="unimportant">(1.27 MB, 4200x3000, <span class="postfilename" title="2e26967ee2346a1d719e05a183d3f606.png">2e26967ee2346a1d719e05a183….png</span>)</span></p><a href="/agg/src/1566649322449.png" target="_blank"><img class="post-image" src="/agg/thumb/1566649322449.png" style="width:240px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_1485" ><p class="intro"><input type="checkbox" class="delete" name="delete_1485" id="delete_1485" /><label for="delete_1485"><span class="name">Anonymous</span> <time datetime="2019-08-24T12:25:03Z">08/24/19 (Sat) 12:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1485" onclick="return highlightReply(1485, event)" href="/agg/res/1485#1485">No.</a><a class="post_no" onclick="return citeReply(1485)" href="/agg/res/1485#q1485">1485</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1485">[Reply]</a></p><div class="body">test<br/><a href=http://what-ch.mooo.com/what/res/2248.html>http://what-ch.mooo.com/what/res/2248.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1484" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566633323518.jpg">1566633323518.jpg</a> <span class="unimportant">(602.38 KB, 3100x2213, <span class="postfilename" title="51fa03e9ae370bed567c53f305339499.jpg">51fa03e9ae370bed567c53f305….jpg</span>)</span></p><a href="/agg/src/1566633323518.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566633323518.png" style="width:255px;height:182px" alt="" /></a></div>    </div>    <div class="post op" id="op_1484" ><p class="intro"><input type="checkbox" class="delete" name="delete_1484" id="delete_1484" /><label for="delete_1484"><span class="name">Anonymous</span> <time datetime="2019-08-24T08:00:04Z">08/24/19 (Sat) 08:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1484" onclick="return highlightReply(1484, event)" href="/agg/res/1484#1484">No.</a><a class="post_no" onclick="return citeReply(1484)" href="/agg/res/1484#q1484">1484</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1484">[Reply]</a></p><div class="body">How much cooling do you have while sleeping to fend off the heat during summer<br/><a href=https://kissu.moe/qa/res/5735.html>https://kissu.moe/qa/res/5735.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1483" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566631424125.jpg">1566631424125.jpg</a> <span class="unimportant">(221.23 KB, 800x998, <span class="postfilename">1566419393755.jpg</span>)</span></p><a href="/agg/src/1566631424125.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566631424125.png" style="width:193px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1483" ><p class="intro"><input type="checkbox" class="delete" name="delete_1483" id="delete_1483" /><label for="delete_1483"><span class="name">Anonymous</span> <time datetime="2019-08-24T07:25:03Z">08/24/19 (Sat) 07:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1483" onclick="return highlightReply(1483, event)" href="/agg/res/1483#1483">No.</a><a class="post_no" onclick="return citeReply(1483)" href="/agg/res/1483#q1483">1483</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1483">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2245.html>http://what-ch.mooo.com/what/res/2245.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1482" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566630092618.jpg">1566630092618.jpg</a> <span class="unimportant">(1.83 MB, 2669x1805, <span class="postfilename">75982543_p0.jpg</span>)</span></p><a href="/agg/src/1566630092618.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566630092618.png" style="width:255px;height:173px" alt="" /></a></div>    </div>    <div class="post op" id="op_1482" ><p class="intro"><input type="checkbox" class="delete" name="delete_1482" id="delete_1482" /><label for="delete_1482"><span class="name">Anonymous</span> <time datetime="2019-08-24T07:05:03Z">08/24/19 (Sat) 07:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1482" onclick="return highlightReply(1482, event)" href="/agg/res/1482#1482">No.</a><a class="post_no" onclick="return citeReply(1482)" href="/agg/res/1482#q1482">1482</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1482">[Reply]</a></p><div class="body">seagrams is such a great company<br/>they make both great soda AND alcohol<br/>and if you mix them together you get something even better<br/><a href=https://kissu.moe/qa/res/5724.html>https://kissu.moe/qa/res/5724.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1481" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566629447543.png">1566629447543.png</a> <span class="unimportant">(843.96 KB, 1360x768, <span class="postfilename">was a thread.png</span>)</span></p><a href="/agg/src/1566629447543.png" target="_blank"><img class="post-image" src="/agg/thumb/1566629447543.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1481" ><p class="intro"><input type="checkbox" class="delete" name="delete_1481" id="delete_1481" /><label for="delete_1481"><span class="name">Anonymous</span> <time datetime="2019-08-24T06:55:06Z">08/24/19 (Sat) 06:55:06</time></label>&nbsp;<a class="post_no" id="post_no_1481" onclick="return highlightReply(1481, event)" href="/agg/res/1481#1481">No.</a><a class="post_no" onclick="return citeReply(1481)" href="/agg/res/1481#q1481">1481</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1481">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/5722.html>https://kissu.moe/qa/res/5722.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1480" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566628121636.png">1566628121636.png</a> <span class="unimportant">(356.43 KB, 481x675, <span class="postfilename">pjs.png</span>)</span></p><a href="/agg/src/1566628121636.png" target="_blank"><img class="post-image" src="/agg/thumb/1566628121636.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1480" ><p class="intro"><input type="checkbox" class="delete" name="delete_1480" id="delete_1480" /><label for="delete_1480"><span class="subject">quiet hours</span> <span class="name">Anonymous</span> <time datetime="2019-08-24T06:30:04Z">08/24/19 (Sat) 06:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1480" onclick="return highlightReply(1480, event)" href="/agg/res/1480#1480">No.</a><a class="post_no" onclick="return citeReply(1480)" href="/agg/res/1480#q1480">1480</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1480">[Reply]</a></p><div class="body">it is now quiet hours on /qa/, please keep noise to a minimum as everybody begins to turn in for the night to get their much deserved sleep<br/><br/>oyasumi<br/><a href=https://kissu.moe/qa/res/5719.html>https://kissu.moe/qa/res/5719.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1479" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566623195878.webm">1566623195878.webm</a> <span class="unimportant">(24.57 MB, 540x360, <span class="postfilename">thinkin bout snow.webm</span>)</span></p><a href="/player.php?v=/agg/src/1566623195878.webm&amp;t=thinkin%20bout%20snow.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566623195878.jpg" style="width:255px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1479" ><p class="intro"><input type="checkbox" class="delete" name="delete_1479" id="delete_1479" /><label for="delete_1479"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-24T05:10:03Z">08/24/19 (Sat) 05:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1479" onclick="return highlightReply(1479, event)" href="/agg/res/1479#1479">No.</a><a class="post_no" onclick="return citeReply(1479)" href="/agg/res/1479#q1479">1479</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1479">[Reply]</a></p><div class="body">cirno is havin a blast<br/><a href=https://kissu.moe/qa/res/5711.html>https://kissu.moe/qa/res/5711.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1478" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566621591201.png">1566621591201.png</a> <span class="unimportant">(7.35 KB, 719x140, <span class="postfilename">cert.png</span>)</span></p><a href="/agg/src/1566621591201.png" target="_blank"><img class="post-image" src="/agg/thumb/1566621591201.png" style="width:255px;height:50px" alt="" /></a></div>    </div>    <div class="post op" id="op_1478" ><p class="intro"><input type="checkbox" class="delete" name="delete_1478" id="delete_1478" /><label for="delete_1478"><span class="name">Anonymous</span> <time datetime="2019-08-24T04:40:03Z">08/24/19 (Sat) 04:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1478" onclick="return highlightReply(1478, event)" href="/agg/res/1478#1478">No.</a><a class="post_no" onclick="return citeReply(1478)" href="/agg/res/1478#q1478">1478</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1478">[Reply]</a></p><div class="body">i saw that<br/>pay your free bills kissmin<br/><a href=https://kissu.moe/qa/res/5704.html>https://kissu.moe/qa/res/5704.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1477" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566615867939.png">1566615867939.png</a> <span class="unimportant">(216.73 KB, 619x471, <span class="postfilename">1348360241438.png</span>)</span></p><a href="/agg/src/1566615867939.png" target="_blank"><img class="post-image" src="/agg/thumb/1566615867939.png" style="width:255px;height:194px" alt="" /></a></div>    </div>    <div class="post op" id="op_1477" ><p class="intro"><input type="checkbox" class="delete" name="delete_1477" id="delete_1477" /><label for="delete_1477"><span class="name">Anonymous</span> <time datetime="2019-08-24T03:05:03Z">08/24/19 (Sat) 03:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1477" onclick="return highlightReply(1477, event)" href="/agg/res/1477#1477">No.</a><a class="post_no" onclick="return citeReply(1477)" href="/agg/res/1477#q1477">1477</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1477">[Reply]</a></p><div class="body">Do you ever get the feeling that you&#39;re being sapped of energy when you have your lights on? I notice that I tend to have more energy or feel more positive in general when my computer light&#39;s the only thing illuminating my room. When the lights go on I find the amount I do slows to a crawl and my mood worsens.<br/><a href=https://kissu.moe/qa/res/5689.html>https://kissu.moe/qa/res/5689.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1476" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566612656466.png">1566612656466.png</a> <span class="unimportant">(1.79 MB, 1680x1050, <span class="postfilename" title="100orange_2019-08-23_21-09-14.png">100orange_2019-08-23_21-09….png</span>)</span></p><a href="/agg/src/1566612656466.png" target="_blank"><img class="post-image" src="/agg/thumb/1566612656466.png" style="width:255px;height:159px" alt="" /></a></div>    </div>    <div class="post op" id="op_1476" ><p class="intro"><input type="checkbox" class="delete" name="delete_1476" id="delete_1476" /><label for="delete_1476"><span class="name">Anonymous</span> <time datetime="2019-08-24T02:15:03Z">08/24/19 (Sat) 02:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1476" onclick="return highlightReply(1476, event)" href="/agg/res/1476#1476">No.</a><a class="post_no" onclick="return citeReply(1476)" href="/agg/res/1476#q1476">1476</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1476">[Reply]</a></p><div class="body">friday nite oj with /qa/!<br/><a href=https://kissu.moe/qa/res/5674.html>https://kissu.moe/qa/res/5674.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1475" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566612658096.png">1566612658096.png</a> <span class="unimportant">(398.83 KB, 1150x1000, <span class="postfilename">73182770_p0.png</span>)</span></p><a href="/agg/src/1566612658096.png" target="_blank"><img class="post-image" src="/agg/thumb/1566612658096.png" style="width:255px;height:222px" alt="" /></a></div>    </div>    <div class="post op" id="op_1475" ><p class="intro"><input type="checkbox" class="delete" name="delete_1475" id="delete_1475" /><label for="delete_1475"><span class="name">Anonymous</span> <time datetime="2019-08-24T02:15:02Z">08/24/19 (Sat) 02:15:02</time></label>&nbsp;<a class="post_no" id="post_no_1475" onclick="return highlightReply(1475, event)" href="/agg/res/1475#1475">No.</a><a class="post_no" onclick="return citeReply(1475)" href="/agg/res/1475#q1475">1475</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1475">[Reply]</a></p><div class="body">Want to try getting more into Precure, but not sure whether to start with Heartcatch, Smile, or Hugtto. Such a tough choice<br/><a href=https://kissu.moe/qa/res/5675.html>https://kissu.moe/qa/res/5675.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1474" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566611123524.jpg">1566611123524.jpg</a> <span class="unimportant">(46.95 KB, 696x522, <span class="postfilename" title="c507d9d6aa3d3ca32ef25a4b65463ec28b5fdf18.jpg">c507d9d6aa3d3ca32ef25a4b65….jpg</span>)</span></p><a href="/agg/src/1566611123524.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566611123524.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1474" ><p class="intro"><input type="checkbox" class="delete" name="delete_1474" id="delete_1474" /><label for="delete_1474"><span class="name">Anonymous</span> <time datetime="2019-08-24T01:50:03Z">08/24/19 (Sat) 01:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1474" onclick="return highlightReply(1474, event)" href="/agg/res/1474#1474">No.</a><a class="post_no" onclick="return citeReply(1474)" href="/agg/res/1474#q1474">1474</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1474">[Reply]</a></p><div class="body">kissu<br/><a href=https://kissu.moe/qa/res/5666.html>https://kissu.moe/qa/res/5666.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1473" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566610328242.png">1566610328242.png</a> <span class="unimportant">(225.95 KB, 1199x898, <span class="postfilename">flan how could you.png</span>)</span></p><a href="/agg/src/1566610328242.png" target="_blank"><img class="post-image" src="/agg/thumb/1566610328242.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1473" ><p class="intro"><input type="checkbox" class="delete" name="delete_1473" id="delete_1473" /><label for="delete_1473"><span class="name">Anonymous</span> <time datetime="2019-08-24T01:35:02Z">08/24/19 (Sat) 01:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1473" onclick="return highlightReply(1473, event)" href="/agg/res/1473#1473">No.</a><a class="post_no" onclick="return citeReply(1473)" href="/agg/res/1473#q1473">1473</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1473">[Reply]</a></p><div class="body">if anyone wasn&#39;t aware, flanfly is pretty much dying out on /jp/<br/>the guy that has been making them for the past few years has been missing more and more days<br/>I was a backup guy and with /qa/ no longer tying me to 4chan (and my rangebans extended to /jp/) I&#39;m no longer filling in for missed nights<br/>it went through many changes over the years, but to see it just outright die out is pretty sad<br/><a href=https://kissu.moe/qa/res/5656.html>https://kissu.moe/qa/res/5656.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1472" data-board="agg">    <div class="files">    </div>    <div class="post op" id="op_1472" ><p class="intro"><input type="checkbox" class="delete" name="delete_1472" id="delete_1472" /><label for="delete_1472"><span class="name">Anonymous</span> <time datetime="2019-08-24T00:55:03Z">08/24/19 (Sat) 00:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1472" onclick="return highlightReply(1472, event)" href="/agg/res/1472#1472">No.</a><a class="post_no" onclick="return citeReply(1472)" href="/agg/res/1472#q1472">1472</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1472">[Reply]</a></p><div class="body">I gonna post some images that i got up on my danbo tabs. i hope you like and subscribe them.<br/><a href=http://what-ch.mooo.com/what/res/2234.html>http://what-ch.mooo.com/what/res/2234.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1471" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566605494697.jpg">1566605494697.jpg</a> <span class="unimportant">(6.1 MB, 4299x4299, <span class="postfilename">75804074_p0.jpg</span>)</span></p><a href="/agg/src/1566605494697.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566605494697.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1471" ><p class="intro"><input type="checkbox" class="delete" name="delete_1471" id="delete_1471" /><label for="delete_1471"><span class="name">Anonymous</span> <time datetime="2019-08-24T00:15:07Z">08/24/19 (Sat) 00:15:07</time></label>&nbsp;<a class="post_no" id="post_no_1471" onclick="return highlightReply(1471, event)" href="/agg/res/1471#1471">No.</a><a class="post_no" onclick="return citeReply(1471)" href="/agg/res/1471#q1471">1471</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1471">[Reply]</a></p><div class="body">god i love cardcaptor sakura...<br/><a href=https://kissu.moe/qa/res/5644.html>https://kissu.moe/qa/res/5644.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1470" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566604331136.jpg">1566604331136.jpg</a> <span class="unimportant">(817.29 KB, 1920x1080, <span class="postfilename" title="[MiG_MuX] PriPara - 132 [BD][1080p][95B6BB02].mkv_snapshot_06.59_[2019.08.22_19.25.45].jpg">[MiG_MuX] PriPara - 132 [B….jpg</span>)</span></p><a href="/agg/src/1566604331136.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566604331136.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1470" ><p class="intro"><input type="checkbox" class="delete" name="delete_1470" id="delete_1470" /><label for="delete_1470"><span class="name">Anonymous</span> <time datetime="2019-08-23T23:55:04Z">08/23/19 (Fri) 23:55:04</time></label>&nbsp;<a class="post_no" id="post_no_1470" onclick="return highlightReply(1470, event)" href="/agg/res/1470#1470">No.</a><a class="post_no" onclick="return citeReply(1470)" href="/agg/res/1470#q1470">1470</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1470">[Reply]</a></p><div class="body">Is this true? Can any devils confirm?<br/><a href=https://kissu.moe/qa/res/5640.html>https://kissu.moe/qa/res/5640.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/33" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a class="selected">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/35" method="get"><input type="submit" value="Next" /></form>
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