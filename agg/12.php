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
			<img class="board_image" src="/static/banners/banner-kissu-9.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" value="qmsSY[vpLH2P\1y@b,k_" name="text">
<input type="hidden" name="firstname" value="&#102;#⚈&#47; ♬&#51;}&#123;QDt7&#92;+d5&#58;Y@&#9874;Bv&#86;T-&#115;e&#112;Z&#36;~&#93;&#73;U;S^nhX!&#57;K[)mu&lt;N(W8♛&gt;&#120;r&#111;2">
<input type="hidden" name="board" value="agg">
<input type="hidden" value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj" name="login">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="message" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)">
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="&#112;&#78;+&gt;&#56;&#60;qG&#47;6d☎,'&#70;&#37;;s&#9896;i&#65;&#69;!RuoPK♿&#83;&#125;_☬V(-&#99;&#94;\{QC&#68;&#126;⛼m⛰&#108;x`[a4&#48;.UkbZW⚈&#35;*&#41;&#76;&#119;M:|r&#9933;]2&#121;@☪n&amp;5Y&#57;♪T&#32;j1f&#55;$&#51;=" name="y0kh38z9do♒sb" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" value="b☵#Y{7`9J⚴@V^6_-" name="search">
			
			
				
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
		<div class="thread" id="thread_1930" data-board="agg"><div class="video-container" data-video="vb4JMpR9KAM"><a href="https://youtu.be/vb4JMpR9KAM" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/vb4JMpR9KAM/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1930" ><p class="intro"><input type="checkbox" class="delete" name="delete_1930" id="delete_1930" /><label for="delete_1930"><span class="subject">Area 51 Raid </span> <span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T18:35:04Z">09/20/19 (Fri) 18:35:04</time></label>&nbsp;<a class="post_no" id="post_no_1930" onclick="return highlightReply(1930, event)" href="/agg/res/1930#1930">No.</a><a class="post_no" onclick="return citeReply(1930)" href="/agg/res/1930#q1930">1930</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1930">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369032.html>https://gnfos.com/jp/res/369032.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1929" data-board="agg"><div class="video-container" data-video="Jpv7giFMQG0"><a href="https://youtu.be/Jpv7giFMQG0" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/Jpv7giFMQG0/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1929" ><p class="intro"><input type="checkbox" class="delete" name="delete_1929" id="delete_1929" /><label for="delete_1929"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-20T18:15:03Z">09/20/19 (Fri) 18:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1929" onclick="return highlightReply(1929, event)" href="/agg/res/1929#1929">No.</a><a class="post_no" onclick="return citeReply(1929)" href="/agg/res/1929#q1929">1929</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1929">[Reply]</a></p><div class="body">bruh<br/><a href=https://gnfos.com/jp/res/369026.html>https://gnfos.com/jp/res/369026.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1928" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569002924694.jpg">1569002924694.jpg</a> <span class="unimportant">(143.32 KB, 900x1200, <span class="postfilename">15114231218.jpg</span>)</span></p><a href="/agg/src/1569002924694.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569002924694.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1928" ><p class="intro"><input type="checkbox" class="delete" name="delete_1928" id="delete_1928" /><label for="delete_1928"><span class="name">Anonymous</span> <time datetime="2019-09-20T18:10:05Z">09/20/19 (Fri) 18:10:05</time></label>&nbsp;<a class="post_no" id="post_no_1928" onclick="return highlightReply(1928, event)" href="/agg/res/1928#1928">No.</a><a class="post_no" onclick="return citeReply(1928)" href="/agg/res/1928#q1928">1928</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1928">[Reply]</a></p><div class="body">witchy butte<br/><a href=https://kissu.moe/qa/res/9735.html>https://kissu.moe/qa/res/9735.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1927" data-board="agg"><div class="video-container" data-video="3gOHvDP_vCs"><a href="https://youtu.be/3gOHvDP_vCs" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/3gOHvDP_vCs/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1927" ><p class="intro"><input type="checkbox" class="delete" name="delete_1927" id="delete_1927" /><label for="delete_1927"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T17:20:04Z">09/20/19 (Fri) 17:20:04</time></label>&nbsp;<a class="post_no" id="post_no_1927" onclick="return highlightReply(1927, event)" href="/agg/res/1927#1927">No.</a><a class="post_no" onclick="return citeReply(1927)" href="/agg/res/1927#q1927">1927</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1927">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369019.html>https://gnfos.com/jp/res/369019.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1926" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568998627828.jpeg">1568998627828.jpeg</a> <span class="unimportant">(560.97 KB, 979x1308, <span class="postfilename" title="e42c746194139690b29141c9087b5476.jpeg">e42c746194139690b29141c90….jpeg</span>)</span></p><a href="/agg/src/1568998627828.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1568998627828.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1926" ><p class="intro"><input type="checkbox" class="delete" name="delete_1926" id="delete_1926" /><label for="delete_1926"><span class="name">Anonymous</span> <time datetime="2019-09-20T17:00:03Z">09/20/19 (Fri) 17:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1926" onclick="return highlightReply(1926, event)" href="/agg/res/1926#1926">No.</a><a class="post_no" onclick="return citeReply(1926)" href="/agg/res/1926#q1926">1926</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1926">[Reply]</a></p><div class="body">It&#39;s been a week since I last got off and I&#39;ve been teasing myself the entire time.<br/><a href=http://what-ch.mooo.com/what/res/2642.html>http://what-ch.mooo.com/what/res/2642.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1925" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568995729996.jpg">1568995729996.jpg</a> <span class="unimportant">(173.78 KB, 600x324, <span class="postfilename">1451405404857.jpg</span>)</span></p><a href="/agg/src/1568995729996.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568995729996.jpg" style="width:427px;height:231px" alt="" /></a></div>    </div>    <div class="post op" id="op_1925" ><p class="intro"><input type="checkbox" class="delete" name="delete_1925" id="delete_1925" /><label for="delete_1925"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-20T16:10:08Z">09/20/19 (Fri) 16:10:08</time></label>&nbsp;<a class="post_no" id="post_no_1925" onclick="return highlightReply(1925, event)" href="/agg/res/1925#1925">No.</a><a class="post_no" onclick="return citeReply(1925)" href="/agg/res/1925#q1925">1925</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1925">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369016.html>https://gnfos.com/jp/res/369016.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1924" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568988183402.png">1568988183402.png</a> <span class="unimportant">(1.83 MB, 1254x1771, <span class="postfilename">thank you laffey.png</span>)</span></p><a href="/agg/src/1568988183402.png" target="_blank"><img class="post-image" src="/agg/thumb/1568988183402.png" style="width:181px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1924" ><p class="intro"><input type="checkbox" class="delete" name="delete_1924" id="delete_1924" /><label for="delete_1924"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1924" onclick="return highlightReply(1924, event)" href="/agg/res/1924#1924">No.</a><a class="post_no" onclick="return citeReply(1924)" href="/agg/res/1924#q1924">1924</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1924">[Reply]</a></p><div class="body">Lie down and relax.<br/><a href=https://kissu.moe/qa/res/9719.html>https://kissu.moe/qa/res/9719.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1923" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/m1568854161816.jpg">m1568854161816.jpg</a> <span class="unimportant">(34.34 KB, 590x350, <span class="postfilename">Call-of-Duty.jpg</span>)</span></p><a href="/agg/src/m1568854161816.jpg" target="_blank"><img class="post-image" src="/agg/thumb/m1568854161816.png" style="width:255px;height:151px" alt="" /></a></div>    </div>    <div class="post op" id="op_1923" ><p class="intro"><input type="checkbox" class="delete" name="delete_1923" id="delete_1923" /><label for="delete_1923"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1923" onclick="return highlightReply(1923, event)" href="/agg/res/1923#1923">No.</a><a class="post_no" onclick="return citeReply(1923)" href="/agg/res/1923#q1923">1923</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1923">[Reply]</a></p><div class="body">What do my bros think about cod?<br/><a href=https://kissu.moe/qa/res/9483.html>https://kissu.moe/qa/res/9483.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1922" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568940051979.jpg">1568940051979.jpg</a> <span class="unimportant">(574.82 KB, 1126x1600, <span class="postfilename">p006.jpg</span>)</span></p><a href="/agg/src/1568940051979.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568940051979.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1922" ><p class="intro"><input type="checkbox" class="delete" name="delete_1922" id="delete_1922" /><label for="delete_1922"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1922" onclick="return highlightReply(1922, event)" href="/agg/res/1922#1922">No.</a><a class="post_no" onclick="return citeReply(1922)" href="/agg/res/1922#q1922">1922</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1922">[Reply]</a></p><div class="body">Why is it so hard to figure out how to get into and start playing Dwarf Fortress? Tried again today, and still can&#39;t figure out how to get started<br/><a href=https://kissu.moe/qa/res/9653.html>https://kissu.moe/qa/res/9653.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1921" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568940275005.png">1568940275005.png</a> <span class="unimportant">(513.3 KB, 1759x900, <span class="postfilename" title="82edeb6aaf7c7f3e6562a3236a6a82234fe1cc7489eab690a9b2aa88d81d5649.png">82edeb6aaf7c7f3e6562a3236a….png</span>)</span></p><a href="/agg/src/1568940275005.png" target="_blank"><img class="post-image" src="/agg/thumb/1568940275005.png" style="width:255px;height:130px" alt="" /></a></div>    </div>    <div class="post op" id="op_1921" ><p class="intro"><input type="checkbox" class="delete" name="delete_1921" id="delete_1921" /><label for="delete_1921"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1921" onclick="return highlightReply(1921, event)" href="/agg/res/1921#1921">No.</a><a class="post_no" onclick="return citeReply(1921)" href="/agg/res/1921#q1921">1921</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1921">[Reply]</a></p><div class="body">I can always tell when I get over a sickness because my libido comes back and hits me like a truck. Really really REALLY wanna sperm right now.<br/><a href=https://kissu.moe/qa/res/9656.html>https://kissu.moe/qa/res/9656.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1920" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568945962287.gif">1568945962287.gif</a> <span class="unimportant">(1.24 MB, 303x307, <span class="postfilename" title="D75E1C43-75BD-4688-AAD9-D4B795317D8A.gif">D75E1C43-75BD-4688-AAD9-D4….gif</span>)</span></p><a href="/agg/src/1568945962287.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568945962287.png" style="width:252px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1920" ><p class="intro"><input type="checkbox" class="delete" name="delete_1920" id="delete_1920" /><label for="delete_1920"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1920" onclick="return highlightReply(1920, event)" href="/agg/res/1920#1920">No.</a><a class="post_no" onclick="return citeReply(1920)" href="/agg/res/1920#q1920">1920</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1920">[Reply]</a></p><div class="body">what do you listen to while browsing /qa]<br/><a href=https://kissu.moe/qa/res/9676.html>https://kissu.moe/qa/res/9676.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1919" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568958054253.jpg">1568958054253.jpg</a> <span class="unimportant">(44.59 KB, 460x215, <span class="postfilename">Risk_of_Rain_2.jpg</span>)</span></p><a href="/agg/src/1568958054253.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568958054253.png" style="width:255px;height:119px" alt="" /></a></div>    </div>    <div class="post op" id="op_1919" ><p class="intro"><input type="checkbox" class="delete" name="delete_1919" id="delete_1919" /><label for="delete_1919"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1919" onclick="return highlightReply(1919, event)" href="/agg/res/1919#1919">No.</a><a class="post_no" onclick="return citeReply(1919)" href="/agg/res/1919#q1919">1919</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1919">[Reply]</a></p><div class="body">what&#39;s /qa]&#39;s favorite item?<br/>I like the Bustling Fungus<br/><a href=https://kissu.moe/qa/res/9698.html>https://kissu.moe/qa/res/9698.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1918" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568423332832.jpg">1568423332832.jpg</a> <span class="unimportant">(913.76 KB, 1000x900, <span class="postfilename" title="__patchouli_knowledge_touhou_drawn_by_shinyafuru__c6b319e629f4c221b2dc51779b0fd2a9.jpg">__patchouli_knowledge_touh….jpg</span>)</span></p><a href="/agg/src/1568423332832.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568423332832.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_1918" ><p class="intro"><input type="checkbox" class="delete" name="delete_1918" id="delete_1918" /><label for="delete_1918"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1918" onclick="return highlightReply(1918, event)" href="/agg/res/1918#1918">No.</a><a class="post_no" onclick="return citeReply(1918)" href="/agg/res/1918#q1918">1918</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1918">[Reply]</a></p><div class="body">Post in this thread when you sleep or wake up. I will start: going to sleep<br/><a href=https://kissu.moe/qa/res/8669.html>https://kissu.moe/qa/res/8669.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1917" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568938012471.png">1568938012471.png</a> <span class="unimportant">(169.81 KB, 750x750, <span class="postfilename">1565483509023.png</span>)</span></p><a href="/agg/src/1568938012471.png" target="_blank"><img class="post-image" src="/agg/thumb/1568938012471.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1917" ><p class="intro"><input type="checkbox" class="delete" name="delete_1917" id="delete_1917" /><label for="delete_1917"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1917" onclick="return highlightReply(1917, event)" href="/agg/res/1917#1917">No.</a><a class="post_no" onclick="return citeReply(1917)" href="/agg/res/1917#q1917">1917</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1917">[Reply]</a></p><div class="body">why do people leave comments on exhentai<br/><a href=https://kissu.moe/qa/res/9638.html>https://kissu.moe/qa/res/9638.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1916" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568508294029.png">1568508294029.png</a> <span class="unimportant">(122.89 KB, 360x386, <span class="postfilename">1454624299544.png</span>)</span></p><a href="/agg/src/1568508294029.png" target="_blank"><img class="post-image" src="/agg/thumb/1568508294029.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1916" ><p class="intro"><input type="checkbox" class="delete" name="delete_1916" id="delete_1916" /><label for="delete_1916"><span class="subject">blog thread</span> <a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1916" onclick="return highlightReply(1916, event)" href="/agg/res/1916#1916">No.</a><a class="post_no" onclick="return citeReply(1916)" href="/agg/res/1916#q1916">1916</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1916">[Reply]</a></p><div class="body">WHERE IS THE BLOG THREAD<br/>today I ate a bowl of rice and was forced to leave my house by my parents<br/><a href=https://kissu.moe/qa/res/8837.html>https://kissu.moe/qa/res/8837.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1915" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568854668139.png">1568854668139.png</a> <span class="unimportant">(70.29 KB, 800x340, <span class="postfilename">800px-Tea_processing_chart.png</span>)</span></p><a href="/agg/src/1568854668139.png" target="_blank"><img class="post-image" src="/agg/thumb/1568854668139.png" style="width:255px;height:108px" alt="" /></a></div>    </div>    <div class="post op" id="op_1915" ><p class="intro"><input type="checkbox" class="delete" name="delete_1915" id="delete_1915" /><label for="delete_1915"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1915" onclick="return highlightReply(1915, event)" href="/agg/res/1915#1915">No.</a><a class="post_no" onclick="return citeReply(1915)" href="/agg/res/1915#q1915">1915</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1915">[Reply]</a></p><div class="body">Any fellow tea otaku among us?<br/><a href=https://kissu.moe/qa/res/9482.html>https://kissu.moe/qa/res/9482.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1914" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568914448096.jpg">1568914448096.jpg</a> <span class="unimportant">(591.86 KB, 800x600, <span class="postfilename" title="21a7155ad0c838715365dbc3d7aeebea.jpg">21a7155ad0c838715365dbc3d7….jpg</span>)</span></p><a href="/agg/src/1568914448096.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568914448096.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1914" ><p class="intro"><input type="checkbox" class="delete" name="delete_1914" id="delete_1914" /><label for="delete_1914"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1914" onclick="return highlightReply(1914, event)" href="/agg/res/1914#1914">No.</a><a class="post_no" onclick="return citeReply(1914)" href="/agg/res/1914#q1914">1914</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1914">[Reply]</a></p><div class="body">We all knew the /qa/ girls, but who are the kissu girls?<br/>I propose a tournament with at least 500 entrants to settle this matter<br/><a href=https://kissu.moe/qa/res/9580.html>https://kissu.moe/qa/res/9580.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1913" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568819679233.png">1568819679233.png</a> <span class="unimportant">(8.57 KB, 300x300, <span class="postfilename" title="42218d9160453ce9e7d163faffae4fe3538459f9.png">42218d9160453ce9e7d163faff….png</span>)</span></p><a href="/agg/src/1568819679233.png" target="_blank"><img class="post-image" src="/agg/thumb/1568819679233.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1913" ><p class="intro"><input type="checkbox" class="delete" name="delete_1913" id="delete_1913" /><label for="delete_1913"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1913" onclick="return highlightReply(1913, event)" href="/agg/res/1913#1913">No.</a><a class="post_no" onclick="return citeReply(1913)" href="/agg/res/1913#q1913">1913</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1913">[Reply]</a></p><div class="body">/qa/ cow<br/><a href=https://kissu.moe/qa/res/9459.html>https://kissu.moe/qa/res/9459.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1912" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568930139606.png">1568930139606.png</a> <span class="unimportant">(11.4 KB, 129x118, <span class="postfilename">1567482505575.png</span>)</span></p><a href="/agg/src/1568930139606.png" target="_blank"><img class="post-image" src="/agg/thumb/1568930139606.png" style="width:129px;height:118px" alt="" /></a></div>    </div>    <div class="post op" id="op_1912" ><p class="intro"><input type="checkbox" class="delete" name="delete_1912" id="delete_1912" /><label for="delete_1912"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1912" onclick="return highlightReply(1912, event)" href="/agg/res/1912#1912">No.</a><a class="post_no" onclick="return citeReply(1912)" href="/agg/res/1912#q1912">1912</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1912">[Reply]</a></p><div class="body">thinkin bout making a thread<br/><a href=https://kissu.moe/qa/res/9627.html>https://kissu.moe/qa/res/9627.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1911" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568932013195.png">1568932013195.png</a> <span class="unimportant">(2.76 MB, 1112x1600, <span class="postfilename">1565495003540.png</span>)</span></p><a href="/agg/src/1568932013195.png" target="_blank"><img class="post-image" src="/agg/thumb/1568932013195.png" style="width:177px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1911" ><p class="intro"><input type="checkbox" class="delete" name="delete_1911" id="delete_1911" /><label for="delete_1911"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:25Z">09/20/19 (Fri) 15:39:25</time></label>&nbsp;<a class="post_no" id="post_no_1911" onclick="return highlightReply(1911, event)" href="/agg/res/1911#1911">No.</a><a class="post_no" onclick="return citeReply(1911)" href="/agg/res/1911#q1911">1911</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1911">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/9631.html>https://kissu.moe/qa/res/9631.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/11" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a class="selected">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/13" method="get"><input type="submit" value="Next" /></form>
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