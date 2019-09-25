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
			<img class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="text" value="qmsSY&#91;v&#112;&#76;H2&#80;\1&#121;@b,k&#95;" >
<input  type="hidden"  name="firstname"  value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" >
<input type="hidden" name="board" value="agg">
<div style="display:none"><input type="text" name="login" value="/[LH Ji:`!&#59;C+&#54;\oT&lt;8O&#98;I&#124;?X]d.&#50;☨{t&#87;5 c⚱&#49;&#66;=k@9&#40;&#51;Ng☮&#42;}4&#39;PQ-MV⚯0&#75;D7usj"></div>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T[" name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<span style="display:none"><input type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"></span>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="y0kh38z9do♒sb" value="pN+&gt;8&lt;qG/6d☎,'F%&#59;s⚨&#105;AE!Ru&#111;PK♿S}_☬V(-&#99;&#94;\{QCD~⛼m⛰lx&#96;[&#97;40&#46;Ukb&#90;W⚈&#35;&#42;&#41;&#76;wM:&#124;r⛍]2&#121;@☪n&amp;5Y9♪T &#106;1&#102;&#55;&#36;3&#61;"></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="search" value="b☵#Y{7`9J⚴@V^6_-"></span>
			
			
				
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
		<div class="thread" id="thread_2150" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569454041907.jpg">1569454041907.jpg</a> <span class="unimportant">(61.45 KB, 1028x575, <span class="postfilename">1569420976790.jpg</span>)</span></p><a href="/agg/src/1569454041907.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569454041907.jpg" style="width:427px;height:239px" alt="" /></a></div>    </div>    <div class="post op" id="op_2150" ><p class="intro"><input type="checkbox" class="delete" name="delete_2150" id="delete_2150" /><label for="delete_2150"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T23:30:03Z">09/25/19 (Wed) 23:30:03</time></label>&nbsp;<a class="post_no" id="post_no_2150" onclick="return highlightReply(2150, event)" href="/agg/res/2150#2150">No.</a><a class="post_no" onclick="return citeReply(2150)" href="/agg/res/2150#q2150">2150</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2150">[Reply]</a></p><div class="body">the incel cope<br/><a href=https://gnfos.com/jp/res/369592.html>https://gnfos.com/jp/res/369592.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2149" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569453860080.png">1569453860080.png</a> <span class="unimportant">(1010.65 KB, 2048x1872, <span class="postfilename">1569446511449.png</span>)</span></p><a href="/agg/src/1569453860080.png" target="_blank"><img class="post-image" src="/agg/thumb/1569453860080.png" style="width:263px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2149" ><p class="intro"><input type="checkbox" class="delete" name="delete_2149" id="delete_2149" /><label for="delete_2149"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T23:25:03Z">09/25/19 (Wed) 23:25:03</time></label>&nbsp;<a class="post_no" id="post_no_2149" onclick="return highlightReply(2149, event)" href="/agg/res/2149#2149">No.</a><a class="post_no" onclick="return citeReply(2149)" href="/agg/res/2149#q2149">2149</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2149">[Reply]</a></p><div class="body"><span class="quote">&gt;the perfect woman doesn&#39;t exi-</span><br/><a href=https://gnfos.com/jp/res/369591.html>https://gnfos.com/jp/res/369591.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2148" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569452735348.jpeg">1569452735348.jpeg</a> <span class="unimportant">(344.76 KB, 750x561, <span class="postfilename" title="45C34DDB-B29F-4922-B768-5BA9EAB1C076.jpeg">45C34DDB-B29F-4922-B768-5….jpeg</span>)</span></p><a href="/agg/src/1569452735348.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569452735348.jpeg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2148" ><p class="intro"><input type="checkbox" class="delete" name="delete_2148" id="delete_2148" /><label for="delete_2148"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T23:10:03Z">09/25/19 (Wed) 23:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2148" onclick="return highlightReply(2148, event)" href="/agg/res/2148#2148">No.</a><a class="post_no" onclick="return citeReply(2148)" href="/agg/res/2148#q2148">2148</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2148">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369589.html>https://gnfos.com/jp/res/369589.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2147" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569450891992.jpg">1569450891992.jpg</a> <span class="unimportant">(153.63 KB, 986x995, <span class="postfilename">1557163687935.jpg</span>)</span></p><a href="/agg/src/1569450891992.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569450891992.png" style="width:252px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2147" ><p class="intro"><input type="checkbox" class="delete" name="delete_2147" id="delete_2147" /><label for="delete_2147"><span class="name">Anonymous</span> <time datetime="2019-09-25T22:35:03Z">09/25/19 (Wed) 22:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2147" onclick="return highlightReply(2147, event)" href="/agg/res/2147#2147">No.</a><a class="post_no" onclick="return citeReply(2147)" href="/agg/res/2147#q2147">2147</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2147">[Reply]</a></p><div class="body"><span class="quote">&gt;Stay in touch with your /qa/ friends!</span><br/>Hey wheeab! Remember me?<br/><a href=https://kissu.moe/qa/res/10566.html>https://kissu.moe/qa/res/10566.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2146" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569450736599.jpg">1569450736599.jpg</a> <span class="unimportant">(1.43 MB, 1176x996, <span class="postfilename">65718223_p0.jpg</span>)</span></p><a href="/agg/src/1569450736599.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569450736599.png" style="width:255px;height:216px" alt="" /></a></div>    </div>    <div class="post op" id="op_2146" ><p class="intro"><input type="checkbox" class="delete" name="delete_2146" id="delete_2146" /><label for="delete_2146"><span class="name">Anonymous</span> <time datetime="2019-09-25T22:35:03Z">09/25/19 (Wed) 22:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2146" onclick="return highlightReply(2146, event)" href="/agg/res/2146#2146">No.</a><a class="post_no" onclick="return citeReply(2146)" href="/agg/res/2146#q2146">2146</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2146">[Reply]</a></p><div class="body">Is it possible to hate the burg?<br/><a href=https://kissu.moe/qa/res/10565.html>https://kissu.moe/qa/res/10565.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2145" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569447895421.jpg">1569447895421.jpg</a> <span class="unimportant">(189.94 KB, 932x1396, <span class="postfilename" title="BlazBlue-Rachel-Alucard-Cosplay-Gamers-Heroes-3-932x1396.jpg">BlazBlue-Rachel-Alucard-Co….jpg</span>)</span></p><a href="/agg/src/1569447895421.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569447895421.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2145" ><p class="intro"><input type="checkbox" class="delete" name="delete_2145" id="delete_2145" /><label for="delete_2145"><span class="name">Anonymous</span> <time datetime="2019-09-25T21:45:03Z">09/25/19 (Wed) 21:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2145" onclick="return highlightReply(2145, event)" href="/agg/res/2145#2145">No.</a><a class="post_no" onclick="return citeReply(2145)" href="/agg/res/2145#q2145">2145</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2145">[Reply]</a></p><div class="body">Bring me 4pq<br/>I have a question to ask him<br/><a href=https://kissu.moe/qa/res/10564.html>https://kissu.moe/qa/res/10564.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2144" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569447542427.png">1569447542427.png</a> <span class="unimportant">(562.59 KB, 1078x1021, <span class="postfilename">crossreview02.png</span>)</span></p><a href="/agg/src/1569447542427.png" target="_blank"><img class="post-image" src="/agg/thumb/1569447542427.png" style="width:253px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2144" ><p class="intro"><input type="checkbox" class="delete" name="delete_2144" id="delete_2144" /><label for="delete_2144"><span class="name">Tada Banri</span> <time datetime="2019-09-25T21:40:03Z">09/25/19 (Wed) 21:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2144" onclick="return highlightReply(2144, event)" href="/agg/res/2144#2144">No.</a><a class="post_no" onclick="return citeReply(2144)" href="/agg/res/2144#q2144">2144</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2144">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369584.html>https://gnfos.com/jp/res/369584.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2143" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569446090218.jpg">1569446090218.jpg</a> <span class="unimportant">(100.58 KB, 1500x1019, <span class="postfilename">EFUvmOAU4AU22wV.jpg</span>)</span></p><a href="/agg/src/1569446090218.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569446090218.png" style="width:255px;height:174px" alt="" /></a></div>    </div>    <div class="post op" id="op_2143" ><p class="intro"><input type="checkbox" class="delete" name="delete_2143" id="delete_2143" /><label for="delete_2143"><span class="name">としあき</span> <time datetime="2019-09-25T21:15:03Z">09/25/19 (Wed) 21:15:03</time></label>&nbsp;<a class="post_no" id="post_no_2143" onclick="return highlightReply(2143, event)" href="/agg/res/2143#2143">No.</a><a class="post_no" onclick="return citeReply(2143)" href="/agg/res/2143#q2143">2143</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2143">[Reply]</a></p><div class="body"><a href=https://himasugi.blog/jp/res/956907.html>https://himasugi.blog/jp/res/956907.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2142" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569443816881.png">1569443816881.png</a> <span class="unimportant">(98.93 KB, 504x509, <span class="postfilename">1466504965233.png</span>)</span></p><a href="/agg/src/1569443816881.png" target="_blank"><img class="post-image" src="/agg/thumb/1569443816881.png" style="width:252px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2142" ><p class="intro"><input type="checkbox" class="delete" name="delete_2142" id="delete_2142" /><label for="delete_2142"><span class="name">Anonymous</span> <time datetime="2019-09-25T20:40:03Z">09/25/19 (Wed) 20:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2142" onclick="return highlightReply(2142, event)" href="/agg/res/2142#2142">No.</a><a class="post_no" onclick="return citeReply(2142)" href="/agg/res/2142#q2142">2142</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2142">[Reply]</a></p><div class="body">How do I stop being attracted to teen girls?<br/>It makes me feel like a creep.<br/><a href=https://kissu.moe/qa/res/10558.html>https://kissu.moe/qa/res/10558.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2141" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569440365932.png">1569440365932.png</a> <span class="unimportant">(236.12 KB, 1000x1000, <span class="postfilename" title="fa32ec52301b8fc7cbe8dcba70abe253.png">fa32ec52301b8fc7cbe8dcba70….png</span>)</span></p><a href="/agg/src/1569440365932.png" target="_blank"><img class="post-image" src="/agg/thumb/1569440365932.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2141" ><p class="intro"><input type="checkbox" class="delete" name="delete_2141" id="delete_2141" /><label for="delete_2141"><span class="name">Anonymous</span> <time datetime="2019-09-25T19:40:03Z">09/25/19 (Wed) 19:40:03</time></label>&nbsp;<a class="post_no" id="post_no_2141" onclick="return highlightReply(2141, event)" href="/agg/res/2141#2141">No.</a><a class="post_no" onclick="return citeReply(2141)" href="/agg/res/2141#q2141">2141</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2141">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2707.html>http://what-ch.mooo.com/what/res/2707.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2140" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569430857898.jpg">1569430857898.jpg</a> <span class="unimportant">(65.61 KB, 750x606, <span class="postfilename" title="[yurucamp][group][artist- nikoo]b86518a0fa8fee407ce1b57c40144485.jpg">[yurucamp][group][artist- ….jpg</span>)</span></p><a href="/agg/src/1569430857898.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569430857898.png" style="width:255px;height:206px" alt="" /></a></div>    </div>    <div class="post op" id="op_2140" ><p class="intro"><input type="checkbox" class="delete" name="delete_2140" id="delete_2140" /><label for="delete_2140"><span class="name">Anonymous</span> <time datetime="2019-09-25T17:05:08Z">09/25/19 (Wed) 17:05:08</time></label>&nbsp;<a class="post_no" id="post_no_2140" onclick="return highlightReply(2140, event)" href="/agg/res/2140#2140">No.</a><a class="post_no" onclick="return citeReply(2140)" href="/agg/res/2140#q2140">2140</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2140">[Reply]</a></p><div class="body">I knew that most of us already knew that tanasin&#39;s "complete history of 4chan" has been really awful the past few years, but the /qa/ part of it for the past month is truly atrocious.<br/><a href="http://tanasinn.info/wiki/Complete_History_of_4chan#2019" rel="nofollow" target="_blank">http://tanasinn.info/wiki/Complete_History_of_4chan#2019</a><br/>Should we update it to reflect the mass rangebans and other staff chicanery, or just leave it to rot?<br/><a href=https://kissu.moe/qa/res/10535.html>https://kissu.moe/qa/res/10535.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2139" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569429915108.jpg">1569429915108.jpg</a> <span class="unimportant">(431.93 KB, 1280x1024, <span class="postfilename" title="__artemis_and_hazuki_tsukuyomi_moonphase_drawn_by_aizawa_masahiro__c315f15a06db742af46b391eb6fbb4c3.jpg">__artemis_and_hazuki_tsuku….jpg</span>)</span></p><a href="/agg/src/1569429915108.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569429915108.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_2139" ><p class="intro"><input type="checkbox" class="delete" name="delete_2139" id="delete_2139" /><label for="delete_2139"><span class="name">Anonymous</span> <time datetime="2019-09-25T16:50:04Z">09/25/19 (Wed) 16:50:04</time></label>&nbsp;<a class="post_no" id="post_no_2139" onclick="return highlightReply(2139, event)" href="/agg/res/2139#2139">No.</a><a class="post_no" onclick="return citeReply(2139)" href="/agg/res/2139#q2139">2139</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2139">[Reply]</a></p><div class="body">Have you ever been mesmerized by an anime&#39;s soundtrack? To the point you think you may have missed some crucial plot points, or that you remember the ost more than the events?<br/><a href=https://kissu.moe/qa/res/10533.html>https://kissu.moe/qa/res/10533.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2138" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569428444621.png">1569428444621.png</a> <span class="unimportant">(1.84 MB, 1750x1950, <span class="postfilename" title="239522C1-66F4-4CB4-BEE0-BF6DF2E2B2B5.png">239522C1-66F4-4CB4-BEE0-BF….png</span>)</span></p><a href="/agg/src/1569428444621.png" target="_blank"><img class="post-image" src="/agg/thumb/1569428444621.png" style="width:215px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2138" ><p class="intro"><input type="checkbox" class="delete" name="delete_2138" id="delete_2138" /><label for="delete_2138"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T16:25:04Z">09/25/19 (Wed) 16:25:04</time></label>&nbsp;<a class="post_no" id="post_no_2138" onclick="return highlightReply(2138, event)" href="/agg/res/2138#2138">No.</a><a class="post_no" onclick="return citeReply(2138)" href="/agg/res/2138#q2138">2138</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2138">[Reply]</a></p><div class="body">I&#39;m going to get revenge<br/><a href=https://gnfos.com/jp/res/369578.html>https://gnfos.com/jp/res/369578.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2137" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569427643054.png">1569427643054.png</a> <span class="unimportant">(540.44 KB, 663x585, <span class="postfilename">1569417480314.png</span>)</span></p><a href="/agg/src/1569427643054.png" target="_blank"><img class="post-image" src="/agg/thumb/1569427643054.png" style="width:272px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2137" ><p class="intro"><input type="checkbox" class="delete" name="delete_2137" id="delete_2137" /><label for="delete_2137"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T16:10:03Z">09/25/19 (Wed) 16:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2137" onclick="return highlightReply(2137, event)" href="/agg/res/2137#2137">No.</a><a class="post_no" onclick="return citeReply(2137)" href="/agg/res/2137#q2137">2137</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2137">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369576.html>https://gnfos.com/jp/res/369576.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2136" data-board="agg"><div class="video-container" data-video="4lon4fZaoXI"><a href="https://youtu.be/4lon4fZaoXI" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/4lon4fZaoXI/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2136" ><p class="intro"><input type="checkbox" class="delete" name="delete_2136" id="delete_2136" /><label for="delete_2136"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-25T16:00:03Z">09/25/19 (Wed) 16:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2136" onclick="return highlightReply(2136, event)" href="/agg/res/2136#2136">No.</a><a class="post_no" onclick="return citeReply(2136)" href="/agg/res/2136#q2136">2136</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2136">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369574.html>https://gnfos.com/jp/res/369574.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2135" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/m1569426189506.png">m1569426189506.png</a> <span class="unimportant">(885.84 KB, 1240x1240, <span class="postfilename" title="f24464ce3b4df41b6dea09426578fd28.png">f24464ce3b4df41b6dea094265….png</span>)</span></p><a href="/agg/src/m1569426189506.png" target="_blank"><img class="post-image" src="/agg/thumb/m1569426189506.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_2135" ><p class="intro"><input type="checkbox" class="delete" name="delete_2135" id="delete_2135" /><label for="delete_2135"><span class="name">Anonymous</span> <time datetime="2019-09-25T15:45:03Z">09/25/19 (Wed) 15:45:03</time></label>&nbsp;<a class="post_no" id="post_no_2135" onclick="return highlightReply(2135, event)" href="/agg/res/2135#2135">No.</a><a class="post_no" onclick="return citeReply(2135)" href="/agg/res/2135#q2135">2135</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2135">[Reply]</a></p><div class="body">Vichan has next to no active development, however you can still pay for support. Basic support costs $40/hr, and is only payable in BTC. New features depend on what you want. Email COPYPASTE &lt;AT&gt; KITTENS &lt;DOT&gt; PH if you&#39;re interested—Vichan forks such as OpenIB are included in this offer.<br/><br/>yikes<br/><a href=https://kissu.moe/qa/res/10532.html>https://kissu.moe/qa/res/10532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2134" data-board="agg"><div class="video-container" data-video="21NjNOyMRBc"><a href="https://youtu.be/21NjNOyMRBc" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/21NjNOyMRBc/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2134" ><p class="intro"><input type="checkbox" class="delete" name="delete_2134" id="delete_2134" /><label for="delete_2134"><span class="name">Tada Banri</span> <time datetime="2019-09-25T15:10:08Z">09/25/19 (Wed) 15:10:08</time></label>&nbsp;<a class="post_no" id="post_no_2134" onclick="return highlightReply(2134, event)" href="/agg/res/2134#2134">No.</a><a class="post_no" onclick="return citeReply(2134)" href="/agg/res/2134#q2134">2134</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2134">[Reply]</a></p><div class="body">Amazing CG wasted on utter trash.<br/><br/>Fuck Blizzard.<br/><a href=https://gnfos.com/jp/res/369571.html>https://gnfos.com/jp/res/369571.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2133" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569422026346.jpg">1569422026346.jpg</a> <span class="unimportant">(66.33 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Cop Craft - 11 [720p].mkv_snapshot_10.43.436.jpg">[HorribleSubs] Cop Craft -….jpg</span>)</span></p><a href="/agg/src/1569422026346.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569422026346.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2133" ><p class="intro"><input type="checkbox" class="delete" name="delete_2133" id="delete_2133" /><label for="delete_2133"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-25T14:35:03Z">09/25/19 (Wed) 14:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2133" onclick="return highlightReply(2133, event)" href="/agg/res/2133#2133">No.</a><a class="post_no" onclick="return citeReply(2133)" href="/agg/res/2133#q2133">2133</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2133">[Reply]</a></p><div class="body">This show suddenly got extremely stupid out of completely nowhere.<br/><a href=https://gnfos.com/jp/res/369570.html>https://gnfos.com/jp/res/369570.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2132" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569398893766.jpg">1569398893766.jpg</a> <span class="unimportant">(2.28 MB, 2448x3264, <span class="postfilename">1547773867933.jpg</span>)</span></p><a href="/agg/src/1569398893766.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569398893766.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2132" ><p class="intro"><input type="checkbox" class="delete" name="delete_2132" id="delete_2132" /><label for="delete_2132"><span class="name">Anonymous</span> <time datetime="2019-09-25T08:10:03Z">09/25/19 (Wed) 08:10:03</time></label>&nbsp;<a class="post_no" id="post_no_2132" onclick="return highlightReply(2132, event)" href="/agg/res/2132#2132">No.</a><a class="post_no" onclick="return citeReply(2132)" href="/agg/res/2132#q2132">2132</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2132">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2698.html>http://what-ch.mooo.com/what/res/2698.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2131" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569397948021.png">1569397948021.png</a> <span class="unimportant">(367.15 KB, 1024x658, <span class="postfilename">1481005734105.png</span>)</span></p><a href="/agg/src/1569397948021.png" target="_blank"><img class="post-image" src="/agg/thumb/1569397948021.png" style="width:255px;height:164px" alt="" /></a></div>    </div>    <div class="post op" id="op_2131" ><p class="intro"><input type="checkbox" class="delete" name="delete_2131" id="delete_2131" /><label for="delete_2131"><span class="name">Anonymous</span> <time datetime="2019-09-25T07:55:03Z">09/25/19 (Wed) 07:55:03</time></label>&nbsp;<a class="post_no" id="post_no_2131" onclick="return highlightReply(2131, event)" href="/agg/res/2131#2131">No.</a><a class="post_no" onclick="return citeReply(2131)" href="/agg/res/2131#q2131">2131</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2131">[Reply]</a></p><div class="body">Kissu more like pissu lol<br/><a href=https://kissu.moe/qa/res/10520.html>https://kissu.moe/qa/res/10520.html</a></div></div><br class="clear"/><hr/></div>
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
		Previous 		 [<a class="selected">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/2" method="get"><input type="submit" value="Next" /></form>
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