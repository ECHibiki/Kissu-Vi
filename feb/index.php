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
            , board_name = "feb";
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
								<title>/feb/ - We got here in February</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/static/banners/banner-kissu-18.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/feb/ - We got here in February</h1>
	<div class="subtitle">
									and we won&#039;t leave
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input value="y=]`&amp;H4^i3~\t(!whDdbnW_Pop☟⛫sY" name="url" type="hidden">
<div style="display:none"  ><input type="text" name="wmk5vcio⛶ugpyn" value="BFKMf♳l⛎Dr]&lt;('^_?xs⚆☽!~ =tq6R7WwEi⛳CaS0hN8&gt;%) kj-P;m/}TA⚗JI19GpyvQ♯3OY"  ></div  >
<input type="hidden" name="board" value="feb">
<textarea style="display:none" name="hd⛐5gi27tjw0eq4c1nk8f" >+w5]s9&lt;{*b6jq t3vgW☷A⛖I-OR⛥Hz(=018f/!x&gt;</textarea >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<textarea style="display:none" name="message">7mG$61|p♟☀OJ2vuU♧&amp;RcB.Sj^⛈⚪Lw%♂-F)HC;N#⛓⚾bn\V9a(rz?y=qs+M3E]`eQ!Tof&lt;P4d</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  type="hidden"  value=""  name="hwicfbu0☄5yj39⚲⚕n27tdqx1aozg">
			</td>
		</tr>		<tr>
			<th>
				Options				<span style="display:none"><input type="text" name="user" value=""></span>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input style="display:none" type="text" name="q" value="J&#96;($&#58;m|?u0&#33;Ch&#94;♙N♠H,Mc⛕l6@q#x☫&#38;.R_&#51;&#61;♕2&lt;;az4%y&#116;-⛇D\85 *SQ]&#32;UFZk&#79;bA&#55;K&#115;B&#9880;})jEi&#76;&gt;&#118;wY&#49;T&#9953;oV{/&#91;r~+fpWn⚉">
			
			
				<input style="display:none" type="text" name="firstname" value="">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input style="display:none" type="text" name="az78uy3ix5ernl9⚫cg0p⛾w" value="">
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<div style="display:none"><input type="text" name="lastname" value=""></div>
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<div style="display:none"><input type="text" name="text" value=""></div>
				
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
								<input style="display:none" type="text" name="login" value="x8d⚛\~g&gt;Z]&#55;t♬,&#104; C&#38;⚖&#79;&#58;Go5v&#124;!qQ⛓.&lt;m)N;IM9@⛕K$ bW&#125;&#66;w+3s=r4p&#108;FykT2LA(?☦&#48;">
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

<input type="hidden" name="hash" value="287222c7a3741fcc05657ac8b63176f8f6e03e8c">
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
							<a id="thread-catalog-top" href="/feb/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="feb" />
		<div class="thread" id="thread_50" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549765504920.jpg">1549765504920.jpg</a> <span class="unimportant">(5.46 MB, 2480x3508, <span class="postfilename" title="__koshimizu_sachiko_and_shirasaka_koume_idolmaster_cinderella_girls_and_etc_drawn_by_waterkuma__a21eddbb7a3ceb660a8aafc6d2dae2f9.jpg">__koshimizu_sachiko_and_sh….jpg</span>)</span></p><a href="/feb/src/1549765504920.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549765504920.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_50" ><p class="intro"><input type="checkbox" class="delete" name="delete_50" id="delete_50" /><label for="delete_50"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-02-10T02:25:05Z">02/10/19 (Sun) 02:25:05</time></label>&nbsp;<a class="post_no" id="post_no_50" onclick="return highlightReply(50, event)" href="/feb/res/50#50">No.</a><a class="post_no" onclick="return citeReply(50)" href="/feb/res/50#q50">50</a><a href="/feb/res/50">[Reply]</a></p><div class="body">The missing /qa/ girl</div></div><div class="post reply" id="reply_51"><p class="intro"><input type="checkbox" class="delete" name="delete_51" id="delete_51" /><label for="delete_51"><span class="name">Anonymous</span> <time datetime="2019-02-10T08:04:28Z">02/10/19 (Sun) 08:04:28</time></label>&nbsp;<a class="post_no" id="post_no_51" onclick="return highlightReply(51, event)" href="/feb/res/50#51">No.</a><a class="post_no" onclick="return citeReply(51)" href="/feb/res/50#q51">51</a></p>        <div class="files">    </div>         <div class="body" >i&hellip; just&hellip;<br/>that's one of the sexiest pair of panties i've ever seen, how does sachiko do it?</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_49" data-board="feb"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/ULnyvnFgvHo" allowfullscreen></iframe>    <div class="post op" id="op_49" ><p class="intro"><input type="checkbox" class="delete" name="delete_49" id="delete_49" /><label for="delete_49"><span class="name">Anonymous</span> <time datetime="2019-02-08T06:51:47Z">02/08/19 (Fri) 06:51:47</time></label>&nbsp;<a class="post_no" id="post_no_49" onclick="return highlightReply(49, event)" href="/feb/res/49#49">No.</a><a class="post_no" onclick="return citeReply(49)" href="/feb/res/49#q49">49</a><a href="/feb/res/49">[Reply]</a></p><div class="body"></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_45" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549520437669.jpg">1549520437669.jpg</a> <span class="unimportant">(450.42 KB, 714x1000, <span class="postfilename">40211667_p0.jpg</span>)</span></p><a href="/feb/src/1549520437669.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549520437669.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_45" ><p class="intro"><input type="checkbox" class="delete" name="delete_45" id="delete_45" /><label for="delete_45"><span class="name">Anonymous</span> <time datetime="2019-02-07T06:20:37Z">02/07/19 (Thu) 06:20:37</time></label>&nbsp;<a class="post_no" id="post_no_45" onclick="return highlightReply(45, event)" href="/feb/res/45#45">No.</a><a class="post_no" onclick="return citeReply(45)" href="/feb/res/45#q45">45</a><a href="/feb/res/45">[Reply]</a></p><div class="body">It's almost time!</div></div><div class="post reply" id="reply_46"><p class="intro"><input type="checkbox" class="delete" name="delete_46" id="delete_46" /><label for="delete_46"><span class="name">Anonymous</span> <time datetime="2019-02-07T09:00:53Z">02/07/19 (Thu) 09:00:53</time></label>&nbsp;<a class="post_no" id="post_no_46" onclick="return highlightReply(46, event)" href="/feb/res/45#46">No.</a><a class="post_no" onclick="return citeReply(46)" href="/feb/res/45#q46">46</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549530053625.png">1549530053625.png</a> <span class="unimportant">(92.27 KB, 1006x1006, <span class="postfilename">1526092025763.png</span>)</span></p><a href="/feb/src/1549530053625.png" target="_blank"><img class="post-image" src="/feb/thumb/1549530053625.png" style="width:175px;height:175px" alt="" /></a></div>    </div>         <div class="body" >as much as I enjoyed the wild shenanigans of that time, I think it would be a little sad to bind /qa/ to a rigid identity. This is sort of a trap that most boards get caught in and never quite escape. Memes as well actually. Think of just how much weight old material like desu or bane and of course pepe hold, compared to stuff that came about just last year even that just fades in like a month from collective memory.</div></div><br/><div class="post reply" id="reply_47"><p class="intro"><input type="checkbox" class="delete" name="delete_47" id="delete_47" /><label for="delete_47"><span class="name">Anonymous</span> <time datetime="2019-02-07T17:35:35Z">02/07/19 (Thu) 17:35:35</time></label>&nbsp;<a class="post_no" id="post_no_47" onclick="return highlightReply(47, event)" href="/feb/res/45#47">No.</a><a class="post_no" onclick="return citeReply(47)" href="/feb/res/45#q47">47</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('46', event);" href="/feb/res/45.php#46">&gt;&gt;46</a><br/>While I do agree boards need to constantly evolve, or at least stay fresh to avoid becoming stale. I don't think that a one-off celebration of things people loved from the past will cause the board to enter that state. I think it would more remind people of what they loved about /qa/ and maybe encourage them to try and bring about an even better future.</div></div><br/><div class="post reply" id="reply_48"><p class="intro"><input type="checkbox" class="delete" name="delete_48" id="delete_48" /><label for="delete_48"><span class="name">Anonymous</span> <time datetime="2019-02-08T04:39:36Z">02/08/19 (Fri) 04:39:36</time></label>&nbsp;<a class="post_no" id="post_no_48" onclick="return highlightReply(48, event)" href="/feb/res/45#48">No.</a><a class="post_no" onclick="return citeReply(48)" href="/feb/res/45#q48">48</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('47', event);" href="/feb/res/45.php#47">&gt;&gt;47</a><br/>Yeah, I hope that we can remember the past fondly, while taking all the best of it into the future with us and combining it with new great things.</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_28" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549125467651.jpg">1549125467651.jpg</a> <span class="unimportant">(186.61 KB, 1920x1080, <span class="postfilename">mpv-shot0022.jpg</span>)</span></p><a href="/feb/src/1549125467651.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549125467651.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_28" ><p class="intro"><input type="checkbox" class="delete" name="delete_28" id="delete_28" /><label for="delete_28"><span class="name">Anonymous</span> <time datetime="2019-02-02T16:37:47Z">02/02/19 (Sat) 16:37:47</time></label>&nbsp;<a class="post_no" id="post_no_28" onclick="return highlightReply(28, event)" href="/feb/res/28#28">No.</a><a class="post_no" onclick="return citeReply(28)" href="/feb/res/28#q28">28</a><a href="/feb/res/28">[Reply]</a></p><div class="body">After checking the current [absolute dilapidated rusty shanty town of a] state of other imageboards, this might the first I could resettle on.<br/>However, I would deem it necessary to leave everything behind for good. I assume most will still majorily browse the bigger site, but I hope this place can get an identity for its own.<br/><br/>Also, please do not ever add the board faggotry all the other newer sites did and keep board count in general to a minimum as long as possible.<br/><br/>I hope to find that magical realm again</div><span class="omitted">2 posts omitted. Click reply to view.</span></div><div class="post reply" id="reply_33"><p class="intro"><input type="checkbox" class="delete" name="delete_33" id="delete_33" /><label for="delete_33"><span class="name">Anonymous</span> <time datetime="2019-02-03T01:25:35Z">02/03/19 (Sun) 01:25:35</time></label>&nbsp;<a class="post_no" id="post_no_33" onclick="return highlightReply(33, event)" href="/feb/res/28#33">No.</a><a class="post_no" onclick="return citeReply(33)" href="/feb/res/28#q33">33</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549157135901.png">1549157135901.png</a> <span class="unimportant">(220.27 KB, 613x941, <span class="postfilename">sachikoSMCD.png</span>)</span></p><a href="/feb/src/1549157135901.png" target="_blank"><img class="post-image" src="/feb/thumb/1549157135901.png" style="width:114px;height:175px" alt="" /></a></div>    </div>         <div class="body" >Yeah, I think it's important to limit boards to the population size. Tohno-chan is usually the go-to example of too many boards.<br/>I added this board in about 30 seconds when I had a sudden idea and it's not going to last. <br/><a href="http://kissu.moe/xmas/" rel="nofollow" target="_blank">http://kissu.moe/xmas/</a> as the previous temporary board that's now locked and unlisted. I think it'd be cool if they can be preserved and be unlocked each year, but we'll see how things go.</div></div><br/><div class="post reply" id="reply_36"><p class="intro"><input type="checkbox" class="delete" name="delete_36" id="delete_36" /><label for="delete_36"><span class="name">Anonymous</span> <time datetime="2019-02-03T13:42:40Z">02/03/19 (Sun) 13:42:40</time></label>&nbsp;<a class="post_no" id="post_no_36" onclick="return highlightReply(36, event)" href="/feb/res/28#36">No.</a><a class="post_no" onclick="return citeReply(36)" href="/feb/res/28#q36">36</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('30', event);" href="/feb/res/28.php#30">&gt;&gt;30</a><br/>Makes perfect sense, having more boards than you can count on one hand when starting out always spreads out the userbase too thin.<br/>You can only really think about adding more if the need arises.</div></div><br/><div class="post reply" id="reply_42"><p class="intro"><input type="checkbox" class="delete" name="delete_42" id="delete_42" /><label for="delete_42"><span class="name">Anonymous</span> <time datetime="2019-02-04T14:50:18Z">02/04/19 (Mon) 14:50:18</time></label>&nbsp;<a class="post_no" id="post_no_42" onclick="return highlightReply(42, event)" href="/feb/res/28#42">No.</a><a class="post_no" onclick="return citeReply(42)" href="/feb/res/28#q42">42</a></p>        <div class="files">    </div>         <div class="body" ><span class="glowgold"> How long will f/qa4 be linked and why is /qa/ called /qa/, just for legacy? </span></div></div><br/><div class="post reply" id="reply_43"><p class="intro"><input type="checkbox" class="delete" name="delete_43" id="delete_43" /><label for="delete_43"><span class="name">Anonymous</span> <time datetime="2019-02-04T20:08:53Z">02/04/19 (Mon) 20:08:53</time></label>&nbsp;<a class="post_no" id="post_no_43" onclick="return highlightReply(43, event)" href="/feb/res/28#43">No.</a><a class="post_no" onclick="return citeReply(43)" href="/feb/res/28#q43">43</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('42', event);" href="/feb/res/28.php#42">&gt;&gt;42</a><br/>/qa/ is /qa/</div></div><br/><div class="post reply" id="reply_44"><p class="intro"><input type="checkbox" class="delete" name="delete_44" id="delete_44" /><label for="delete_44"><span class="name">Anonymous</span> <time datetime="2019-02-05T01:36:04Z">02/05/19 (Tue) 01:36:04</time></label>&nbsp;<a class="post_no" id="post_no_44" onclick="return highlightReply(44, event)" href="/feb/res/28#44">No.</a><a class="post_no" onclick="return citeReply(44)" href="/feb/res/28#q44">44</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549330564677.jpg">1549330564677.jpg</a> <span class="unimportant">(40.51 KB, 720x480, <span class="postfilename" title="Di Gi Charat - 16.avi_snapshot_00.26_[2018.10.13_17.11.46].jpg">Di Gi Charat - 16.avi_snap….jpg</span>)</span></p><a href="/feb/src/1549330564677.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549330564677.png" style="width:175px;height:117px" alt="" /></a></div>    </div>         <div class="body" >I'd say it'll be de-linked when it dies or is abandoned by our community<br/>never thought about the board name here being /qa/, but what else could it be called that people would recognize as /qa/'s secondary board?</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_37" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549212368513.gif">1549212368513.gif</a> <span class="unimportant">(409.97 KB, 500x281, <span class="postfilename">feb.gif</span>)</span></p><a href="/feb/src/1549212368513.gif" target="_blank"><img class="post-image" src="/feb/thumb/1549212368513.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_37" ><p class="intro"><input type="checkbox" class="delete" name="delete_37" id="delete_37" /><label for="delete_37"><span class="name">Anonymous</span> <time datetime="2019-02-03T16:46:08Z">02/03/19 (Sun) 16:46:08</time></label>&nbsp;<a class="post_no" id="post_no_37" onclick="return highlightReply(37, event)" href="/feb/res/37#37">No.</a><a class="post_no" onclick="return citeReply(37)" href="/feb/res/37#q37">37</a><a href="/feb/res/37">[Reply]</a></p><div class="body">why is she poking her swimsuit? is there something wrong with it</div></div><div class="post reply" id="reply_38"><p class="intro"><input type="checkbox" class="delete" name="delete_38" id="delete_38" /><label for="delete_38"><span class="name">Anonymous</span> <time datetime="2019-02-03T19:26:18Z">02/03/19 (Sun) 19:26:18</time></label>&nbsp;<a class="post_no" id="post_no_38" onclick="return highlightReply(38, event)" href="/feb/res/37#38">No.</a><a class="post_no" onclick="return citeReply(38)" href="/feb/res/37#q38">38</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549221978383.jpg">1549221978383.jpg</a> <span class="unimportant">(1.01 MB, 1697x2400, <span class="postfilename" title="ab1d0c0cb4a320a442362659c2946360.jpg">ab1d0c0cb4a320a442362659c2….jpg</span>)</span></p><a href="/feb/src/1549221978383.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549221978383.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" >she's showing where to aim at!</div></div><br/><div class="post reply" id="reply_41"><p class="intro"><input type="checkbox" class="delete" name="delete_41" id="delete_41" /><label for="delete_41"><span class="name">Anonymous</span> <time datetime="2019-02-03T22:48:51Z">02/03/19 (Sun) 22:48:51</time></label>&nbsp;<a class="post_no" id="post_no_41" onclick="return highlightReply(41, event)" href="/feb/res/37#41">No.</a><a class="post_no" onclick="return citeReply(41)" href="/feb/res/37#q41">41</a></p>        <div class="files">    </div>         <div class="body" >it looks as if someone has accidentally spilled some ketchup on it</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_40" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549234057182.jpg">1549234057182.jpg</a> <span class="unimportant">(146.57 KB, 662x1131, <span class="postfilename">1497194130014.jpg</span>)</span></p><a href="/feb/src/1549234057182.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549234057182.png" style="width:150px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_40" ><p class="intro"><input type="checkbox" class="delete" name="delete_40" id="delete_40" /><label for="delete_40"><span class="name">Anonymous</span> <time datetime="2019-02-03T22:47:37Z">02/03/19 (Sun) 22:47:37</time></label>&nbsp;<a class="post_no" id="post_no_40" onclick="return highlightReply(40, event)" href="/feb/res/40#40">No.</a><a class="post_no" onclick="return citeReply(40)" href="/feb/res/40#q40">40</a><a href="/feb/res/40">[Reply]</a></p><div class="body">Did you remember to go to church and be a good Christian today?</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_17" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549046245587.png">1549046245587.png</a> <span class="unimportant">(31.71 KB, 972x476, <span class="postfilename">1549045696499.png</span>)</span></p><a href="/feb/src/1549046245587.png" target="_blank"><img class="post-image" src="/feb/thumb/1549046245587.png" style="width:255px;height:125px" alt="" /></a></div>    </div>    <div class="post op" id="op_17" ><p class="intro"><input type="checkbox" class="delete" name="delete_17" id="delete_17" /><label for="delete_17"><span class="name">Anonymous</span> <time datetime="2019-02-01T18:37:25Z">02/01/19 (Fri) 18:37:25</time></label>&nbsp;<a class="post_no" id="post_no_17" onclick="return highlightReply(17, event)" href="/feb/res/17#17">No.</a><a class="post_no" onclick="return citeReply(17)" href="/feb/res/17#q17">17</a><a href="/feb/res/17">[Reply]</a></p><div class="body">heh</div><span class="omitted">4 posts omitted. Click reply to view.</span></div><div class="post reply" id="reply_22"><p class="intro"><input type="checkbox" class="delete" name="delete_22" id="delete_22" /><label for="delete_22"><span class="name">Anonymous</span> <time datetime="2019-02-01T22:56:34Z">02/01/19 (Fri) 22:56:34</time></label>&nbsp;<a class="post_no" id="post_no_22" onclick="return highlightReply(22, event)" href="/feb/res/17#22">No.</a><a class="post_no" onclick="return citeReply(22)" href="/feb/res/17#q22">22</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549061794795.jpg">1549061794795.jpg</a> <span class="unimportant">(87.14 KB, 600x800, <span class="postfilename" title="4ad2cb54abd8ce5d688e00f60fb2831655fbba9758bbecd8ea427a8e23237e29.jpg">4ad2cb54abd8ce5d688e00f60f….jpg</span>)</span></p><a href="/feb/src/1549061794795.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549061794795.png" style="width:131px;height:175px" alt="" /></a></div>    </div>         <div class="body" >a-anon-chan&hellip;.</div></div><br/><div class="post reply" id="reply_25"><p class="intro"><input type="checkbox" class="delete" name="delete_25" id="delete_25" /><label for="delete_25"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:03:33Z">02/01/19 (Fri) 23:03:33</time></label>&nbsp;<a class="post_no" id="post_no_25" onclick="return highlightReply(25, event)" href="/feb/res/17#25">No.</a><a class="post_no" onclick="return citeReply(25)" href="/feb/res/17#q25">25</a></p>        <div class="files">    </div>         <div class="body" >wjQ</div></div><br/><div class="post reply" id="reply_26"><p class="intro"><input type="checkbox" class="delete" name="delete_26" id="delete_26" /><label for="delete_26"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:18:59Z">02/01/19 (Fri) 23:18:59</time></label>&nbsp;<a class="post_no" id="post_no_26" onclick="return highlightReply(26, event)" href="/feb/res/17#26">No.</a><a class="post_no" onclick="return citeReply(26)" href="/feb/res/17#q26">26</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('20', event);" href="/feb/res/17.php#20">&gt;&gt;20</a><br/>Right now it's a tie up which is more unlikely: The V-tuber settling on a voice actor and progressing, or the board unlisting.</div></div><br/><div class="post reply" id="reply_27"><p class="intro"><input type="checkbox" class="delete" name="delete_27" id="delete_27" /><label for="delete_27"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:22:38Z">02/01/19 (Fri) 23:22:38</time></label>&nbsp;<a class="post_no" id="post_no_27" onclick="return highlightReply(27, event)" href="/feb/res/17#27">No.</a><a class="post_no" onclick="return citeReply(27)" href="/feb/res/17#q27">27</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('26', event);" href="/feb/res/17.php#26">&gt;&gt;26</a><br/>well he has to put SOME effort into making the vtuber, it's probably a 1 minute or similar fix to unlist /qa/</div></div><br/><div class="post reply" id="reply_39"><p class="intro"><input type="checkbox" class="delete" name="delete_39" id="delete_39" /><label for="delete_39"><span class="name">Anonymous</span> <time datetime="2019-02-03T20:35:48Z">02/03/19 (Sun) 20:35:48</time></label>&nbsp;<a class="post_no" id="post_no_39" onclick="return highlightReply(39, event)" href="/feb/res/17#39">No.</a><a class="post_no" onclick="return citeReply(39)" href="/feb/res/17#q39">39</a></p>        <div class="files">    </div>         <div class="body" ><em>ANY</em> minute now</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_35" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549172963372.png">1549172963372.png</a> <span class="unimportant">(150 B, 10x10, <span class="postfilename">Untitled.png</span>)</span></p><a href="/feb/src/1549172963372.png" target="_blank"><img class="post-image" src="/feb/thumb/1549172963372.png" style="width:10px;height:10px" alt="" /></a></div>    </div>    <div class="post op" id="op_35" ><p class="intro"><input type="checkbox" class="delete" name="delete_35" id="delete_35" /><label for="delete_35"><span class="name">Anonymous</span> <time datetime="2019-02-03T05:49:23Z">02/03/19 (Sun) 05:49:23</time></label>&nbsp;<a class="post_no" id="post_no_35" onclick="return highlightReply(35, event)" href="/feb/res/35#35">No.</a><a class="post_no" onclick="return citeReply(35)" href="/feb/res/35#q35">35</a><i class="fa fa-lock" title="Locked"></i><a href="/feb/res/35">[Reply]</a></p><div class="body"><!DOCTYPE HTML><html><head><style>#timer { text-align: center; font-size: 40px; font-color: "b98de2";margin-top: 0px;}}</style></head><body><p id="timer"></p><script>var countDownDate = new Date("Feb 8, 2019 0:0:0").getTime();var x = setInterval(function() {var now = new Date().getTime();var distance = countDownDate - now;var days = Math.floor(distance / (1000 * 60 * 60 * 24));var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));var seconds = Math.floor((distance % (1000 * 60)) / 1000);var your_thread_message = "";document.getElementById("timer").innerHTML = your_thread_message + days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";if (distance < 0) {clearInterval(x);document.getElementById("timer").innerHTML = your_thread_message + " -release the boson- ";}}, 1000);</script></body></html></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_31" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549146150829.png">1549146150829.png</a> <span class="unimportant">(Spoiler Image, 640.51 KB, 623x1109, <span class="postfilename">biribiri_Akuma_137.png</span>)</span></p><a href="/feb/src/1549146150829.png" target="_blank"><img class="post-image" src="/static/kissu-spoiler.png" style="width:275px;height:250px" alt="" /></a></div>    </div>    <div class="post op" id="op_31" ><p class="intro"><input type="checkbox" class="delete" name="delete_31" id="delete_31" /><label for="delete_31"><span class="name">Anonymous</span> <time datetime="2019-02-02T22:22:30Z">02/02/19 (Sat) 22:22:30</time></label>&nbsp;<a class="post_no" id="post_no_31" onclick="return highlightReply(31, event)" href="/feb/res/31#31">No.</a><a class="post_no" onclick="return citeReply(31)" href="/feb/res/31#q31">31</a><a href="/feb/res/31">[Reply]</a></p><div class="body">They came here in Febuary</div></div><div class="post reply" id="reply_32"><p class="intro"><input type="checkbox" class="delete" name="delete_32" id="delete_32" /><label for="delete_32"><a class="sage" href="javascript:void(0); sage"><span class="name">Anonymous</span></a> <time datetime="2019-02-03T01:21:12Z">02/03/19 (Sun) 01:21:12</time></label>&nbsp;<a class="post_no" id="post_no_32" onclick="return highlightReply(32, event)" href="/feb/res/31#32">No.</a><a class="post_no" onclick="return citeReply(32)" href="/feb/res/31#q32">32</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549156872662.png">1549156872662.png</a> <span class="unimportant">(Spoiler Image, 393.26 KB, 800x800, <span class="postfilename" title="06e14542e58a194770bd1b9dc2c49c8c.png">06e14542e58a194770bd1b9dc2….png</span>)</span></p><a href="/feb/src/1549156872662.png" target="_blank"><img class="post-image" src="/static/kissu-spoiler.png" style="width:275px;height:250px" alt="" /></a></div>    </div>         <div class="body" >sure did</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_10" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548997846113.jpg">1548997846113.jpg</a> <span class="unimportant">(34.53 KB, 640x345, <span class="postfilename">pizza.jpg</span>)</span></p><a href="/feb/src/1548997846113.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1548997846113.png" style="width:255px;height:138px" alt="" /></a></div>    </div>    <div class="post op" id="op_10" ><p class="intro"><input type="checkbox" class="delete" name="delete_10" id="delete_10" /><label for="delete_10"><span class="subject">pizza</span> <a class="email" href="mailto:pizza"><span class="name">pizza</span></a> <time datetime="2019-02-01T05:10:46Z">02/01/19 (Fri) 05:10:46</time></label>&nbsp;<a class="post_no" id="post_no_10" onclick="return highlightReply(10, event)" href="/feb/res/10#10">No.</a><a class="post_no" onclick="return citeReply(10)" href="/feb/res/10#q10">10</a><a href="/feb/res/10">[Reply]</a></p><div class="body">pizza</div></div><div class="post reply" id="reply_11"><p class="intro"><input type="checkbox" class="delete" name="delete_11" id="delete_11" /><label for="delete_11"><span class="name">Anonymous</span> <time datetime="2019-02-01T05:46:58Z">02/01/19 (Fri) 05:46:58</time></label>&nbsp;<a class="post_no" id="post_no_11" onclick="return highlightReply(11, event)" href="/feb/res/10#11">No.</a><a class="post_no" onclick="return citeReply(11)" href="/feb/res/10#q11">11</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('10', event);" href="/feb/res/10.php#10">&gt;&gt;10</a><br/>ikazuki pizza!!!</div></div><br/><div class="post reply" id="reply_24"><p class="intro"><input type="checkbox" class="delete" name="delete_24" id="delete_24" /><label for="delete_24"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:02:31Z">02/01/19 (Fri) 23:02:31</time></label>&nbsp;<a class="post_no" id="post_no_24" onclick="return highlightReply(24, event)" href="/feb/res/10#24">No.</a><a class="post_no" onclick="return citeReply(24)" href="/feb/res/10#q24">24</a></p>        <div class="files">    </div>         <div class="body" >pWm</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_2" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993666156.jpg">1548993666156.jpg</a> <span class="unimportant">(14.02 KB, 184x184, <span class="postfilename">1517546979260.jpg</span>)</span></p><a href="/feb/src/1548993666156.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1548993666156.png" style="width:184px;height:184px" alt="" /></a></div>    </div>    <div class="post op" id="op_2" ><p class="intro"><input type="checkbox" class="delete" name="delete_2" id="delete_2" /><label for="delete_2"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:01:06Z">02/01/19 (Fri) 04:01:06</time></label>&nbsp;<a class="post_no" id="post_no_2" onclick="return highlightReply(2, event)" href="/feb/res/2#2">No.</a><a class="post_no" onclick="return citeReply(2)" href="/feb/res/2#q2">2</a><a href="/feb/res/2">[Reply]</a></p><div class="body">仕方がない</div></div><div class="post reply" id="reply_23"><p class="intro"><input type="checkbox" class="delete" name="delete_23" id="delete_23" /><label for="delete_23"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:01:54Z">02/01/19 (Fri) 23:01:54</time></label>&nbsp;<a class="post_no" id="post_no_23" onclick="return highlightReply(23, event)" href="/feb/res/2#23">No.</a><a class="post_no" onclick="return citeReply(23)" href="/feb/res/2#q23">23</a></p>        <div class="files">    </div>         <div class="body" >uSm</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_1" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993550211.png">1548993550211.png</a> <span class="unimportant">(94.61 KB, 626x348, <span class="postfilename">1367548412088.png</span>)</span></p><a href="/feb/src/1548993550211.png" target="_blank"><img class="post-image" src="/feb/thumb/1548993550211.png" style="width:255px;height:142px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><span class="name">Anonymous</span> <time datetime="2019-02-01T03:59:10Z">02/01/19 (Fri) 03:59:10</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="return highlightReply(1, event)" href="/feb/res/1#1">No.</a><a class="post_no" onclick="return citeReply(1)" href="/feb/res/1#q1">1</a><a href="/feb/res/1">[Reply]</a></p><div class="body">suck my cock dude</div></div><div class="post reply" id="reply_3"><p class="intro"><input type="checkbox" class="delete" name="delete_3" id="delete_3" /><label for="delete_3"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:03:26Z">02/01/19 (Fri) 04:03:26</time></label>&nbsp;<a class="post_no" id="post_no_3" onclick="return highlightReply(3, event)" href="/feb/res/1#3">No.</a><a class="post_no" onclick="return citeReply(3)" href="/feb/res/1#q3">3</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993806946.png">1548993806946.png</a> <span class="unimportant">(250.34 KB, 424x598, <span class="postfilename">1487287774297.png</span>)</span></p><a href="/feb/src/1548993806946.png" target="_blank"><img class="post-image" src="/feb/thumb/1548993806946.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" ></div></div><br/><div class="post reply" id="reply_15"><p class="intro"><input type="checkbox" class="delete" name="delete_15" id="delete_15" /><label for="delete_15"><span class="name">Anonymous</span> <time datetime="2019-02-01T08:17:26Z">02/01/19 (Fri) 08:17:26</time></label>&nbsp;<a class="post_no" id="post_no_15" onclick="return highlightReply(15, event)" href="/feb/res/1#15">No.</a><a class="post_no" onclick="return citeReply(15)" href="/feb/res/1#q15">15</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549009046276.png">1549009046276.png</a> <span class="unimportant">(291.06 KB, 1108x248, <span class="postfilename">peak queue ayy.png</span>)</span></p><a href="/feb/src/1549009046276.png" target="_blank"><img class="post-image" src="/feb/thumb/1549009046276.png" style="width:175px;height:39px" alt="" /></a></div>    </div>         <div class="body" ></div></div><br/><div class="post reply" id="reply_16"><p class="intro"><input type="checkbox" class="delete" name="delete_16" id="delete_16" /><label for="delete_16"><span class="name">Anonymous</span> <time datetime="2019-02-01T08:20:04Z">02/01/19 (Fri) 08:20:04</time></label>&nbsp;<a class="post_no" id="post_no_16" onclick="return highlightReply(16, event)" href="/feb/res/1#16">No.</a><a class="post_no" onclick="return citeReply(16)" href="/feb/res/1#q16">16</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549009204027.png">1549009204027.png</a> <span class="unimportant">(60.36 KB, 424x598, <span class="postfilename">corndoggie.png</span>)</span></p><a href="/feb/src/1549009204027.png" target="_blank"><img class="post-image" src="/feb/thumb/1549009204027.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" >carndoggy~</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_9" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548997218043.gif">1548997218043.gif</a> <span class="unimportant">(2.61 MB, 480x270, <span class="postfilename">1539824632147.gif</span>)</span></p><a href="/feb/src/1548997218043.gif" target="_blank"><img class="post-image" src="/feb/thumb/1548997218043.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_9" ><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span class="name">Anonymous</span> <time datetime="2019-02-01T05:00:18Z">02/01/19 (Fri) 05:00:18</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="return highlightReply(9, event)" href="/feb/res/9#9">No.</a><a class="post_no" onclick="return citeReply(9)" href="/feb/res/9#q9">9</a><a href="/feb/res/9">[Reply]</a></p><div class="body">Absolutely boson</div></div><div class="post reply" id="reply_12"><p class="intro"><input type="checkbox" class="delete" name="delete_12" id="delete_12" /><label for="delete_12"><span class="name">Anonymous</span> <time datetime="2019-02-01T07:39:58Z">02/01/19 (Fri) 07:39:58</time></label>&nbsp;<a class="post_no" id="post_no_12" onclick="return highlightReply(12, event)" href="/feb/res/9#12">No.</a><a class="post_no" onclick="return citeReply(12)" href="/feb/res/9#q12">12</a></p>        <div class="files">    </div>         <div class="body" >whats this board for</div></div><br/><div class="post reply" id="reply_13"><p class="intro"><input type="checkbox" class="delete" name="delete_13" id="delete_13" /><label for="delete_13"><a class="sage" href="javascript:void(0); sage"><span class="name">Anonymous</span></a> <time datetime="2019-02-01T07:46:34Z">02/01/19 (Fri) 07:46:34</time></label>&nbsp;<a class="post_no" id="post_no_13" onclick="return highlightReply(13, event)" href="/feb/res/9#13">No.</a><a class="post_no" onclick="return citeReply(13)" href="/feb/res/9#q13">13</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549007194362.png">1549007194362.png</a> <span class="unimportant">(36.56 KB, 564x559, <span class="postfilename">31028763_p0.png</span>)</span></p><a href="/feb/src/1549007194362.png" target="_blank"><img class="post-image" src="/feb/thumb/1549007194362.png" style="width:175px;height:173px" alt="" /></a></div>    </div>         <div class="body" >/qa/ nostalgia I guess? it's mostly just a joke board I made in a spur of the moment</div></div><br/><div class="post reply" id="reply_14"><p class="intro"><input type="checkbox" class="delete" name="delete_14" id="delete_14" /><label for="delete_14"><span class="name">Anonymous</span> <time datetime="2019-02-01T08:14:08Z">02/01/19 (Fri) 08:14:08</time></label>&nbsp;<a class="post_no" id="post_no_14" onclick="return highlightReply(14, event)" href="/feb/res/9#14">No.</a><a class="post_no" onclick="return citeReply(14)" href="/feb/res/9#q14">14</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549008848723.jpg">1549008848723.jpg</a> <span class="unimportant">(20.26 KB, 396x255, <span class="postfilename">1492890940855.jpg</span>)</span></p><a href="/feb/src/1549008848723.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549008848723.png" style="width:175px;height:113px" alt="" /></a></div>    </div>         <div class="body" >Here's to the February revolution, my friends! *sips*</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_4" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993831514.png">1548993831514.png</a> <span class="unimportant">(1.52 MB, 2571x4639, <span class="postfilename" title="[crossover][enoshima junko][artist- anonymous]d849f41e46289a3dead89075dded0747.png">[crossover][enoshima junko….png</span>)</span></p><a href="/feb/src/1548993831514.png" target="_blank"><img class="post-image" src="/feb/thumb/1548993831514.png" style="width:141px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_4" ><p class="intro"><input type="checkbox" class="delete" name="delete_4" id="delete_4" /><label for="delete_4"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-02-01T04:03:51Z">02/01/19 (Fri) 04:03:51</time></label>&nbsp;<a class="post_no" id="post_no_4" onclick="return highlightReply(4, event)" href="/feb/res/4#4">No.</a><a class="post_no" onclick="return citeReply(4)" href="/feb/res/4#q4">4</a><a href="/feb/res/4">[Reply]</a></p><div class="body">Hello.</div></div><div class="post reply" id="reply_7"><p class="intro"><input type="checkbox" class="delete" name="delete_7" id="delete_7" /><label for="delete_7"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:25:32Z">02/01/19 (Fri) 04:25:32</time></label>&nbsp;<a class="post_no" id="post_no_7" onclick="return highlightReply(7, event)" href="/feb/res/4#7">No.</a><a class="post_no" onclick="return citeReply(7)" href="/feb/res/4#q7">7</a></p>        <div class="files">    </div>         <div class="body" >hi<br/>I finally read through all of Danganronpa. Man, that 3 ending&hellip;</div></div><br/><div class="post reply" id="reply_8"><p class="intro"><input type="checkbox" class="delete" name="delete_8" id="delete_8" /><label for="delete_8"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-02-01T04:28:18Z">02/01/19 (Fri) 04:28:18</time></label>&nbsp;<a class="post_no" id="post_no_8" onclick="return highlightReply(8, event)" href="/feb/res/4#8">No.</a><a class="post_no" onclick="return citeReply(8)" href="/feb/res/4#q8">8</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('7', event);" href="/feb/res/4.php#7">&gt;&gt;7</a><br/>I didn't play 3 yet. I'm replaying 1&amp;2 again.</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_5" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548994912695.png">1548994912695.png</a> <span class="unimportant">(224.63 KB, 344x407, <span class="postfilename">1498505160043.png</span>)</span></p><a href="/feb/src/1548994912695.png" target="_blank"><img class="post-image" src="/feb/thumb/1548994912695.png" style="width:216px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_5" ><p class="intro"><input type="checkbox" class="delete" name="delete_5" id="delete_5" /><label for="delete_5"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:21:52Z">02/01/19 (Fri) 04:21:52</time></label>&nbsp;<a class="post_no" id="post_no_5" onclick="return highlightReply(5, event)" href="/feb/res/5#5">No.</a><a class="post_no" onclick="return citeReply(5)" href="/feb/res/5#q5">5</a><a href="/feb/res/5">[Reply]</a></p><div class="body">Excuse me, but you seem to have made a dire mistake upon making this board. You didn't mention the specific even in history in which they defended us from the hordes of mlpol, before not leaving. It was nice up until that point, but now I've got no choice but to leave this place and give it a low 0/10.</div></div><div class="post reply" id="reply_6"><p class="intro"><input type="checkbox" class="delete" name="delete_6" id="delete_6" /><label for="delete_6"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:24:27Z">02/01/19 (Fri) 04:24:27</time></label>&nbsp;<a class="post_no" id="post_no_6" onclick="return highlightReply(6, event)" href="/feb/res/5#6">No.</a><a class="post_no" onclick="return citeReply(6)" href="/feb/res/5#q6">6</a></p>        <div class="files">    </div>         <div class="body" >he only says that about 30% of the time from what I remember</div></div><br/><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/feb/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/feb/catalog">Catalog</a>
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