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
			<img class="board_image" src="/static/banners/banner-kissu-5.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="text" value="qmsSY&#91;&#118;p&#76;H&#50;P\1y&#64;b,k_" type="hidden" >
<input type="hidden" value="f#⚈/ ♬3}{QDt7\+d5:Y@⚒BvVT-sepZ$~]IU;S^nhX!9K[)mu&lt;N(W8♛&gt;xro2" name="firstname">
<input type="hidden" name="board" value="agg">
<textarea name="login" style="display:none">/&#91;LH Ji:`&#33;;C&#43;6\&#111;&#84;&lt;8ObI|?&#88;]d.2☨{tW5 &#99;⚱&#49;&#66;&#61;k@&#57;(3Ng☮&#42;}4'PQ&#45;M&#86;⚯0KD7u&#115;&#106;</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" value="wd1&#9759;7&#110;%/&#101;&#58;&#123;I&#9906;^B6⚪r&#103;_)$zVh]\f@Z5&#76;&gt;&#50;&#51;t&#59;&#9930;M☃&#89;&#88;H&#45;&#81;&#70;R&#39;&#121;☘N&#75;*x9T&#91;" name="message" >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value=" &#102;♻⛭♃9&#47;qzwZk.@&#104;|;$LF&#9953;&#109;dv&#44;ER8&#51;W%1Y&#73;M^i&#85;☌5☍+Ag&#9770;T=`}⚑y&#99;7J⛮P#&#98;&#63;⚤6&#88;&amp;{Dx &#92;4NpKHn:)" name="q" >
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea   name="y0kh38z9do♒sb"   style="display:none" >pN+&gt;8&lt;qG/6d☎,'F%;s⚨iAE!RuoPK♿S}_☬V(-c^\{QCD~⛼m⛰lx`[a40.UkbZW⚈#*)LwM:|r⛍]2y@☪n&amp;5Y9♪T j1f7$3=</textarea >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" value="b☵#Y{7`9J⚴@V&#94;6&#95;-" name="search">
			
			
				
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
		<div class="thread" id="thread_1810" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568836820706.gif">1568836820706.gif</a> <span class="unimportant">(4.05 MB, 540x304, <span class="postfilename">0f8.gif</span>)</span></p><a href="/agg/src/1568836820706.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568836820706.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1810" ><p class="intro"><input type="checkbox" class="delete" name="delete_1810" id="delete_1810" /><label for="delete_1810"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:49Z">09/20/19 (Fri) 15:38:49</time></label>&nbsp;<a class="post_no" id="post_no_1810" onclick="return highlightReply(1810, event)" href="/agg/res/1810#1810">No.</a><a class="post_no" onclick="return citeReply(1810)" href="/agg/res/1810#q1810">1810</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1810">[Reply]</a></p><div class="body">god i wish that was me<br/><a href=http://what-ch.mooo.com/what/res/2620.html>http://what-ch.mooo.com/what/res/2620.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1809" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568776171140.jpg">1568776171140.jpg</a> <span class="unimportant">(378.18 KB, 720x1080, <span class="postfilename">76432756_p0.jpg</span>)</span></p><a href="/agg/src/1568776171140.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568776171140.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1809" ><p class="intro"><input type="checkbox" class="delete" name="delete_1809" id="delete_1809" /><label for="delete_1809"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:48Z">09/20/19 (Fri) 15:38:48</time></label>&nbsp;<a class="post_no" id="post_no_1809" onclick="return highlightReply(1809, event)" href="/agg/res/1809#1809">No.</a><a class="post_no" onclick="return citeReply(1809)" href="/agg/res/1809#q1809">1809</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1809">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2611.html>http://what-ch.mooo.com/what/res/2611.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1808" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568717664898.jpg">1568717664898.jpg</a> <span class="unimportant">(237.47 KB, 1200x1221, <span class="postfilename">01.jpg</span>)</span></p><a href="/agg/src/1568717664898.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568717664898.png" style="width:236px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1808" ><p class="intro"><input type="checkbox" class="delete" name="delete_1808" id="delete_1808" /><label for="delete_1808"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:47Z">09/20/19 (Fri) 15:38:47</time></label>&nbsp;<a class="post_no" id="post_no_1808" onclick="return highlightReply(1808, event)" href="/agg/res/1808#1808">No.</a><a class="post_no" onclick="return citeReply(1808)" href="/agg/res/1808#q1808">1808</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1808">[Reply]</a></p><div class="body">Woah<br/><a href=http://what-ch.mooo.com/what/res/2595.html>http://what-ch.mooo.com/what/res/2595.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1807" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568199166484.jpg">1568199166484.jpg</a> <span class="unimportant">(216.67 KB, 594x681, <span class="postfilename">misc 2210.jpg</span>)</span></p><a href="/agg/src/1568199166484.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568199166484.png" style="width:210px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1807" ><p class="intro"><input type="checkbox" class="delete" name="delete_1807" id="delete_1807" /><label for="delete_1807"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:47Z">09/20/19 (Fri) 15:38:47</time></label>&nbsp;<a class="post_no" id="post_no_1807" onclick="return highlightReply(1807, event)" href="/agg/res/1807#1807">No.</a><a class="post_no" onclick="return citeReply(1807)" href="/agg/res/1807#q1807">1807</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1807">[Reply]</a></p><div class="body">are there any girls here?<br/><a href=http://what-ch.mooo.com/what/res/2498.html>http://what-ch.mooo.com/what/res/2498.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1806" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568668575760.jpg">1568668575760.jpg</a> <span class="unimportant">(719.19 KB, 1280x1831, <span class="postfilename" title="1482954-25d3d7a976-00000020.jpg">1482954-25d3d7a976-0000002….jpg</span>)</span></p><a href="/agg/src/1568668575760.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568668575760.png" style="width:168px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1806" ><p class="intro"><input type="checkbox" class="delete" name="delete_1806" id="delete_1806" /><label for="delete_1806"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:45Z">09/20/19 (Fri) 15:38:45</time></label>&nbsp;<a class="post_no" id="post_no_1806" onclick="return highlightReply(1806, event)" href="/agg/res/1806#1806">No.</a><a class="post_no" onclick="return citeReply(1806)" href="/agg/res/1806#q1806">1806</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1806">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2586.html>http://what-ch.mooo.com/what/res/2586.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1805" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568529811032.png">1568529811032.png</a> <span class="unimportant">(2.19 MB, 1902x921, <span class="postfilename">beach.png</span>)</span></p><a href="/agg/src/1568529811032.png" target="_blank"><img class="post-image" src="/agg/thumb/1568529811032.png" style="width:240px;height:117px" alt="" /></a></div>    </div>    <div class="post op" id="op_1805" ><p class="intro"><input type="checkbox" class="delete" name="delete_1805" id="delete_1805" /><label for="delete_1805"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:40Z">09/20/19 (Fri) 15:38:40</time></label>&nbsp;<a class="post_no" id="post_no_1805" onclick="return highlightReply(1805, event)" href="/agg/res/1805#1805">No.</a><a class="post_no" onclick="return citeReply(1805)" href="/agg/res/1805#q1805">1805</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1805">[Reply]</a></p><div class="body">you wake up in your cheap motel room on tokashiki island<br/>it&#39;s ten am and you&#39;ve had a long restful sleep, you stretch out on the bed and it&#39;s mostly quite save for the odd bird call<br/><br/>you make some coffee and enjoy it on the balcony with cigarette, that you no longer feel guilty about because you&#39;re already dying<br/><br/>it&#39;s overcsast but warm and you only need shorts and flip flops on<br/>maybe it will storm later, oh well, it&#39;s pleasent at the moment<br/>you can see the and hear the ocean, about ten minutes walk away<br/><br/>you dont bother checking your phone because there&#39;s nothing to check up on, it no longer matters<br/><br/>you go downstairs where the cute inn keeper woman greets you and you get some breakfast<br/><br/>afterwards you leave the inn and just walk around as per ususal, you have nowhere to be and nothing to do<br/><br/><span class="toolong">Post too long. Click <a href="/agg/res/1805#1805">here</a> to view the full text.</span></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1804" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568186695321.jpg">1568186695321.jpg</a> <span class="unimportant">(86.67 KB, 600x800, <span class="postfilename">1568144838312.jpg</span>)</span></p><a href="/agg/src/1568186695321.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568186695321.png" style="width:180px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1804" ><p class="intro"><input type="checkbox" class="delete" name="delete_1804" id="delete_1804" /><label for="delete_1804"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:40Z">09/20/19 (Fri) 15:38:40</time></label>&nbsp;<a class="post_no" id="post_no_1804" onclick="return highlightReply(1804, event)" href="/agg/res/1804#1804">No.</a><a class="post_no" onclick="return citeReply(1804)" href="/agg/res/1804#q1804">1804</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1804">[Reply]</a></p><div class="body"><br/>So as a joke, I went to my friend&#39;s house while wearing Konata&#39;s blue wig and uniform. I could barely stop my laughter as he went as red as a tomato and looked at me from head to toe with a bit of drool in his mouth. The way he stared made me feel a bit funny too, but I decided to tease him more by taking off my clothes. He asked me, "Are you serious?" and I said, "Yup."<br/><br/>He went silent for what seemed like forever, so I asked him, "What&#39;s the matter?" He said he&#39;s confused, but then his boner got really hard, which made me take off his clothes. I expected him to scream, "Stop!" as I kissed him and stroked his cock, but he instead shouted, "Oh God, Konata!" which made me get a boner myself. Before I knew it, I was blowing him for the first time till he came.<br/><br/>His semen was so thick, it got stuck inside my throat no matter how hard I swallowed. He then said, "I want to fuck you now!" and seeing that we&#39;ve already gone that far and we were both naked, I obliged. A few hours later, the jerk went all pale and said to me, "Why did we do that? Now I&#39;m totally gay." But he looked so cute all confused like that, so I took pity on him and reassured while wiping his cum off my face, "Let&#39;s just pretend I&#39;m still Konata."<br/><br/>Pic related. It&#39;s me dressed as Konata.<br/><a href=http://what-ch.mooo.com/what/res/2494.html>http://what-ch.mooo.com/what/res/2494.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1803" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568433225073.jpg">1568433225073.jpg</a> <span class="unimportant">(206.27 KB, 1280x903, <span class="postfilename">004.jpg</span>)</span></p><a href="/agg/src/1568433225073.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568433225073.png" style="width:240px;height:170px" alt="" /></a></div>    </div>    <div class="post op" id="op_1803" ><p class="intro"><input type="checkbox" class="delete" name="delete_1803" id="delete_1803" /><label for="delete_1803"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:39Z">09/20/19 (Fri) 15:38:39</time></label>&nbsp;<a class="post_no" id="post_no_1803" onclick="return highlightReply(1803, event)" href="/agg/res/1803#1803">No.</a><a class="post_no" onclick="return citeReply(1803)" href="/agg/res/1803#q1803">1803</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1803">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2532.html>http://what-ch.mooo.com/what/res/2532.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1802" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568508910928.png">1568508910928.png</a> <span class="unimportant">(285.87 KB, 680x714, <span class="postfilename">1567809998103.png</span>)</span></p><a href="/agg/src/1568508910928.png" target="_blank"><img class="post-image" src="/agg/thumb/1568508910928.png" style="width:229px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1802" ><p class="intro"><input type="checkbox" class="delete" name="delete_1802" id="delete_1802" /><label for="delete_1802"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:38Z">09/20/19 (Fri) 15:38:38</time></label>&nbsp;<a class="post_no" id="post_no_1802" onclick="return highlightReply(1802, event)" href="/agg/res/1802#1802">No.</a><a class="post_no" onclick="return citeReply(1802)" href="/agg/res/1802#q1802">1802</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1802">[Reply]</a></p><div class="body">Test<br/><a href=http://what-ch.mooo.com/what/res/2551.html>http://what-ch.mooo.com/what/res/2551.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1801" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568257806526.jpg">1568257806526.jpg</a> <span class="unimportant">(370.33 KB, 1920x1080, <span class="postfilename">20190911225117_1.jpg</span>)</span></p><a href="/agg/src/1568257806526.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568257806526.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1801" ><p class="intro"><input type="checkbox" class="delete" name="delete_1801" id="delete_1801" /><label for="delete_1801"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:37Z">09/20/19 (Fri) 15:38:37</time></label>&nbsp;<a class="post_no" id="post_no_1801" onclick="return highlightReply(1801, event)" href="/agg/res/1801#1801">No.</a><a class="post_no" onclick="return citeReply(1801)" href="/agg/res/1801#q1801">1801</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1801">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2508.html>http://what-ch.mooo.com/what/res/2508.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1800" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568489807752.jpg">1568489807752.jpg</a> <span class="unimportant">(44.24 KB, 1280x720, <span class="postfilename" title="[URW]_Chuunibyou_demo_Koi_ga_Shitai!_-_OVA_[BD][720p][55C22F0C].mkv_snapshot_10.31_[2014.01.14_20.35.50].jpg">[URW]_Chuunibyou_demo_Koi_….jpg</span>)</span></p><a href="/agg/src/1568489807752.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568489807752.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1800" ><p class="intro"><input type="checkbox" class="delete" name="delete_1800" id="delete_1800" /><label for="delete_1800"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:36Z">09/20/19 (Fri) 15:38:36</time></label>&nbsp;<a class="post_no" id="post_no_1800" onclick="return highlightReply(1800, event)" href="/agg/res/1800#1800">No.</a><a class="post_no" onclick="return citeReply(1800)" href="/agg/res/1800#q1800">1800</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1800">[Reply]</a></p><div class="body">merorin was here, you guys are faggots<br/><a href=http://what-ch.mooo.com/what/res/2546.html>http://what-ch.mooo.com/what/res/2546.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1799" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568452411454.jpg">1568452411454.jpg</a> <span class="unimportant">(55.48 KB, 400x400, <span class="postfilename" title="mpv-1-02 Dear you -Feel--00:00:35.972.jpg">mpv-1-02 Dear you -Feel--0….jpg</span>)</span></p><a href="/agg/src/1568452411454.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568452411454.png" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1799" ><p class="intro"><input type="checkbox" class="delete" name="delete_1799" id="delete_1799" /><label for="delete_1799"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:36Z">09/20/19 (Fri) 15:38:36</time></label>&nbsp;<a class="post_no" id="post_no_1799" onclick="return highlightReply(1799, event)" href="/agg/res/1799#1799">No.</a><a class="post_no" onclick="return citeReply(1799)" href="/agg/res/1799#q1799">1799</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1799">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2534.html>http://what-ch.mooo.com/what/res/2534.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1798" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568228635634.jpg">1568228635634.jpg</a> <span class="unimportant">(725.38 KB, 780x1140, <span class="postfilename">1568219513978.jpg</span>)</span></p><a href="/agg/src/1568228635634.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568228635634.png" style="width:165px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1798" ><p class="intro"><input type="checkbox" class="delete" name="delete_1798" id="delete_1798" /><label for="delete_1798"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:34Z">09/20/19 (Fri) 15:38:34</time></label>&nbsp;<a class="post_no" id="post_no_1798" onclick="return highlightReply(1798, event)" href="/agg/res/1798#1798">No.</a><a class="post_no" onclick="return citeReply(1798)" href="/agg/res/1798#q1798">1798</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1798">[Reply]</a></p><div class="body">Tifas<br/><a href=http://what-ch.mooo.com/what/res/2505.html>http://what-ch.mooo.com/what/res/2505.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1797" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568264058597.jpg">1568264058597.jpg</a> <span class="unimportant">(42.74 KB, 768x900, <span class="postfilename">misc 2168.jpg</span>)</span></p><a href="/agg/src/1568264058597.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568264058597.png" style="width:205px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1797" ><p class="intro"><input type="checkbox" class="delete" name="delete_1797" id="delete_1797" /><label for="delete_1797"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:33Z">09/20/19 (Fri) 15:38:33</time></label>&nbsp;<a class="post_no" id="post_no_1797" onclick="return highlightReply(1797, event)" href="/agg/res/1797#1797">No.</a><a class="post_no" onclick="return citeReply(1797)" href="/agg/res/1797#q1797">1797</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1797">[Reply]</a></p><div class="body">what if real life was actually just a dream?<br/><a href=http://what-ch.mooo.com/what/res/2510.html>http://what-ch.mooo.com/what/res/2510.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1796" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568153161430.jpg">1568153161430.jpg</a> <span class="unimportant">(162.95 KB, 1280x680, <span class="postfilename" title="mpv-Kairo 2001 720p HDTV x264 AAC-DoA-00:13:55.001.jpg">mpv-Kairo 2001 720p HDTV x….jpg</span>)</span></p><a href="/agg/src/1568153161430.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568153161430.png" style="width:240px;height:128px" alt="" /></a></div>    </div>    <div class="post op" id="op_1796" ><p class="intro"><input type="checkbox" class="delete" name="delete_1796" id="delete_1796" /><label for="delete_1796"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:38:32Z">09/20/19 (Fri) 15:38:32</time></label>&nbsp;<a class="post_no" id="post_no_1796" onclick="return highlightReply(1796, event)" href="/agg/res/1796#1796">No.</a><a class="post_no" onclick="return citeReply(1796)" href="/agg/res/1796#q1796">1796</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1796">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2487.html>http://what-ch.mooo.com/what/res/2487.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1795" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568139053715.png">1568139053715.png</a> <span class="unimportant">(697.48 KB, 848x1200, <span class="postfilename">76604907_p0.png</span>)</span></p><a href="/agg/src/1568139053715.png" target="_blank"><img class="post-image" src="/agg/thumb/1568139053715.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1795" ><p class="intro"><input type="checkbox" class="delete" name="delete_1795" id="delete_1795" /><label for="delete_1795"><span class="name">Anonymous</span> <time datetime="2019-09-10T18:15:03Z">09/10/19 (Tue) 18:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1795" onclick="return highlightReply(1795, event)" href="/agg/res/1795#1795">No.</a><a class="post_no" onclick="return citeReply(1795)" href="/agg/res/1795#q1795">1795</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1795">[Reply]</a></p><div class="body">I love rogues so much, the constant action, the stealth, poisons and bleed, stunlocking people to death, it&#39;s great.<br/><a href=https://kissu.moe/qa/res/8147.html>https://kissu.moe/qa/res/8147.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1794" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568125238997.gif">1568125238997.gif</a> <span class="unimportant">(6.68 MB, 854x480, <span class="postfilename" title="cf730fd399613fda444025c161a3aee1.gif">cf730fd399613fda444025c161….gif</span>)</span></p><a href="/agg/src/1568125238997.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568125238997.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1794" ><p class="intro"><input type="checkbox" class="delete" name="delete_1794" id="delete_1794" /><label for="delete_1794"><span class="name">Anonymous</span> <time datetime="2019-09-10T14:25:03Z">09/10/19 (Tue) 14:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1794" onclick="return highlightReply(1794, event)" href="/agg/res/1794#1794">No.</a><a class="post_no" onclick="return citeReply(1794)" href="/agg/res/1794#q1794">1794</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1794">[Reply]</a></p><div class="body">If experience is required to make good posts then one should expect to see a greater amount of those as time passes, since the community accumulates experience.<br/>But that doesn&#39;t happen. Why?<br/>Does one need specific experiences? Does it go beyond time spent, and if so how? After one goes through those experiences, what motivates quality posting?<br/><a href=https://kissu.moe/qa/res/8134.html>https://kissu.moe/qa/res/8134.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1793" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568103031493.png">1568103031493.png</a> <span class="unimportant">(133.2 KB, 1222x250, <span class="postfilename">1567977837232.png</span>)</span></p><a href="/agg/src/1568103031493.png" target="_blank"><img class="post-image" src="/agg/thumb/1568103031493.png" style="width:255px;height:52px" alt="" /></a></div>    </div>    <div class="post op" id="op_1793" ><p class="intro"><input type="checkbox" class="delete" name="delete_1793" id="delete_1793" /><label for="delete_1793"><span class="name">Anonymous</span> <time datetime="2019-09-10T08:15:04Z">09/10/19 (Tue) 08:15:04</time></label>&nbsp;<a class="post_no" id="post_no_1793" onclick="return highlightReply(1793, event)" href="/agg/res/1793#1793">No.</a><a class="post_no" onclick="return citeReply(1793)" href="/agg/res/1793#q1793">1793</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1793">[Reply]</a></p><div class="body">Is this true? <br/><br/>(remade this thread after being too hasty to delete it, there weren&#39;t any comments yet)<br/><a href=https://kissu.moe/qa/res/8122.html>https://kissu.moe/qa/res/8122.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1792" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568102555468.jpg">1568102555468.jpg</a> <span class="unimportant">(391.56 KB, 666x658, <span class="postfilename">51090902_p0.jpg</span>)</span></p><a href="/agg/src/1568102555468.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568102555468.png" style="width:255px;height:252px" alt="" /></a></div>    </div>    <div class="post op" id="op_1792" ><p class="intro"><input type="checkbox" class="delete" name="delete_1792" id="delete_1792" /><label for="delete_1792"><span class="name">Cirno</span> <time datetime="2019-09-10T08:05:05Z">09/10/19 (Tue) 08:05:05</time></label>&nbsp;<a class="post_no" id="post_no_1792" onclick="return highlightReply(1792, event)" href="/agg/res/1792#1792">No.</a><a class="post_no" onclick="return citeReply(1792)" href="/agg/res/1792#q1792">1792</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1792">[Reply]</a></p><div class="body">i love the rain its cool and fine<br/>i wish that it&#39;d rain all the time<br/>if it did then that&#39;d be great<br/>i&#39;d post about it on /qa/<br/><a href=https://kissu.moe/qa/res/8120.html>https://kissu.moe/qa/res/8120.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1791" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568100949179.png">1568100949179.png</a> <span class="unimportant">(133.2 KB, 1222x250, <span class="postfilename">1567977837232.png</span>)</span></p><a href="/agg/src/1568100949179.png" target="_blank"><img class="post-image" src="/agg/thumb/1568100949179.png" style="width:255px;height:52px" alt="" /></a></div>    </div>    <div class="post op" id="op_1791" ><p class="intro"><input type="checkbox" class="delete" name="delete_1791" id="delete_1791" /><label for="delete_1791"><span class="name">Cirno</span> <time datetime="2019-09-10T07:40:04Z">09/10/19 (Tue) 07:40:04</time></label>&nbsp;<a class="post_no" id="post_no_1791" onclick="return highlightReply(1791, event)" href="/agg/res/1791#1791">No.</a><a class="post_no" onclick="return citeReply(1791)" href="/agg/res/1791#q1791">1791</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1791">[Reply]</a></p><div class="body">were they right?<br/><a href=https://kissu.moe/qa/res/8117.html>https://kissu.moe/qa/res/8117.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/17" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a class="selected">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/19" method="get"><input type="submit" value="Next" /></form>
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