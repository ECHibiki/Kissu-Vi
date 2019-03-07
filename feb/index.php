<!doctype html>
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
					<script type="text/javascript" src="/main.js"></script>
								<title>/feb/ - We got here in February</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">bans</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<?php
	$t = explode(" ", microtime())[0];
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/functions.php');
	require_once ('inc/bans.php');

	loadConfig();
	if($config['ban_block']){
		checkDNSBL();
		checkBan();
		echo explode(" ", microtime())[0] - $t;
	}
?>	
		<img class="board_image" src="/banner-art.php" alt="" />	
	<header>
		<h1>/feb/ - We got here in February</h1>
		<div class="subtitle">
												and we won&#039;t leave
												</div>
	</header>

	
	

			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none" ><input type="text" name="search" value="Z8zV}2s☢_b~?0*☀Mq|YR&lt;B☵N9`Q&amp;(g" ></div >
<input style="display:none" type="text" name="message" value="">
<input type="hidden" name="board" value="feb">
<input type="hidden" value="&#51;Y~4I}G=&#104;⛠XFk?2'#8Ejti&#114;7⛍&#82;&#123;♱;]vy&#60;T&#122;)gMc%s/L&gt;&#90;:&#40;$" name="user">
	<table>
		<tr>
			<th>
				Name				<input style="display:none" type="text" value="^?i&amp;FzV6&#110;☩&#103;&#84;r&#59;☹Hd&#113;{:`k]!&#89;&#9905;AxcRN1⛥=e☣+&#73;-v_B&#77;SP~Q*" name="3mn0dlhq6♀☞">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="username" value=""></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<input  name="lastname"  value=""  type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								<input style="display:none" type="text" name="ycjgh38zu4f5" value="&#38;Fab}&#112;K9lH`_0 &#76;Wz4tx&#32;fer&#9888;{'&#73;Y("  >
								<input   style="display:none"   type="text"   name="k0wbu26o7☝4☭ia☙qc5sdnghvxzf98rlm1☃"   value="">
			</td>
		</tr>		<tr>
			<th>
				Subject				<div style="display:none"><input type="text" name="jom0xuypt87nvca632wi" value="dV9⚼♅G^&#33;&#72;p/_&lt;&#55;&#63;&#78;z)gQc&#42;.aR;x&#113;8St&#73;&#53;♧&gt;fs&#70;&#58;+Z'D-♎&#50;l&#79;EX&#77;&#126;ro&#67;K&#121;&#74;,⚯L%|&#32;Yv6♡☋Wh&#93;P&#49;&#36;&#109;&#101;n#&#96;{"></div>
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
				<input class="form_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" /> <input id="spoiler" name="spoiler" type="checkbox"> <label for="spoiler">Spoiler Image</label>			</td>
		</tr>
				<tr>
			<th>
				Comment				
			</th>
			<td>
				<textarea name="body" id="body" rows="5" cols="35"></textarea>
				
							</td>
		</tr>
										<tr id="upload">
			<th>
				File			</th>
			<td>
				<input type="file" name="file" id="upload_file" style="width: 190px;">
				<span name='captchasel'>
				<label><input type="radio" name="captype" class="rec" value="recaptcha"> Recaptcha </label>
				<label><input type="radio" name="captype" class="cap" value="captchouli"> Captchouli </label>
				</span>
				<script type="text/javascript">if (typeof init_file_selector !== 'undefined') init_file_selector(1);</script>

									<div style="float:none;text-align:left" id="upload_url">
						<label for="file_url">Or URL: </label>
						<input style="display:inline" type="text" id="file_url" name="file_url" size="35">
					</div>
								
			</td>
		</tr>
				<tr id="upload_embed">
			<th>
				Embed				
			</th>
			<td>
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
						<tr>
			<th>
				Password				
			</th>
			<td>
				<input type="password" name="password" value="" size="12" maxlength="18" autocomplete="new-password"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="f388e297c8f5efee5ee1d957943ae3acfd2f30fa">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
	
		
	<hr /><div class="blotter">(¬‿¬ ) </div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/feb/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="feb" />
		<div class="thread" id="thread_50" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549765504920.jpg">1549765504920.jpg</a> <span class="unimportant">(5.46 MB, 2480x3508, <span class="postfilename" title="__koshimizu_sachiko_and_shirasaka_koume_idolmaster_cinderella_girls_and_etc_drawn_by_waterkuma__a21eddbb7a3ceb660a8aafc6d2dae2f9.jpg">__koshimizu_sachiko_and_sh….jpg</span>)</span></p><a href="/feb/src/1549765504920.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549765504920.png" style="width:180px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_50" ><p class="intro"><input type="checkbox" class="delete" name="delete_50" id="delete_50" /><label for="delete_50"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-02-10T02:25:05Z">02/10/19 (Sun) 02:25:05</time></label>&nbsp;<a class="post_no" id="post_no_50" onclick="highlightReply(50)" href="/feb/res/50#50">No.</a><a class="post_no" onclick="citeReply(50)" href="/feb/res/50#q50">50</a><a href="/feb/res/50">[Reply]</a></p><div class="body">The missing /qa/ girl</div></div><div class="post reply" id="reply_51"><p class="intro"><input type="checkbox" class="delete" name="delete_51" id="delete_51" /><label for="delete_51"><span class="name">Anonymous</span> <time datetime="2019-02-10T08:04:28Z">02/10/19 (Sun) 08:04:28</time></label>&nbsp;<a class="post_no" id="post_no_51" onclick="highlightReply(51)" href="/feb/res/50#51">No.</a><a class="post_no" onclick="citeReply(51)" href="/feb/res/50#q51">51</a></p>        <div class="files">    </div>         <div class="body" >i&hellip; just&hellip;<br/>that's one of the sexiest pair of panties i've ever seen, how does sachiko do it?</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_49" data-board="feb"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/ULnyvnFgvHo" allowfullscreen></iframe>    <div class="post op" id="op_49" ><p class="intro"><input type="checkbox" class="delete" name="delete_49" id="delete_49" /><label for="delete_49"><span class="name">Anonymous</span> <time datetime="2019-02-08T06:51:47Z">02/08/19 (Fri) 06:51:47</time></label>&nbsp;<a class="post_no" id="post_no_49" onclick="highlightReply(49)" href="/feb/res/49#49">No.</a><a class="post_no" onclick="citeReply(49)" href="/feb/res/49#q49">49</a><a href="/feb/res/49">[Reply]</a></p><div class="body"></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_45" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549520437669.jpg">1549520437669.jpg</a> <span class="unimportant">(450.42 KB, 714x1000, <span class="postfilename">40211667_p0.jpg</span>)</span></p><a href="/feb/src/1549520437669.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549520437669.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_45" ><p class="intro"><input type="checkbox" class="delete" name="delete_45" id="delete_45" /><label for="delete_45"><span class="name">Anonymous</span> <time datetime="2019-02-07T06:20:37Z">02/07/19 (Thu) 06:20:37</time></label>&nbsp;<a class="post_no" id="post_no_45" onclick="highlightReply(45)" href="/feb/res/45#45">No.</a><a class="post_no" onclick="citeReply(45)" href="/feb/res/45#q45">45</a><a href="/feb/res/45">[Reply]</a></p><div class="body">It's almost time!</div></div><div class="post reply" id="reply_46"><p class="intro"><input type="checkbox" class="delete" name="delete_46" id="delete_46" /><label for="delete_46"><span class="name">Anonymous</span> <time datetime="2019-02-07T09:00:53Z">02/07/19 (Thu) 09:00:53</time></label>&nbsp;<a class="post_no" id="post_no_46" onclick="highlightReply(46)" href="/feb/res/45#46">No.</a><a class="post_no" onclick="citeReply(46)" href="/feb/res/45#q46">46</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549530053625.png">1549530053625.png</a> <span class="unimportant">(92.27 KB, 1006x1006, <span class="postfilename">1526092025763.png</span>)</span></p><a href="/feb/src/1549530053625.png" target="_blank"><img class="post-image" src="/feb/thumb/1549530053625.png" style="width:175px;height:175px" alt="" /></a></div>    </div>         <div class="body" >as much as I enjoyed the wild shenanigans of that time, I think it would be a little sad to bind /qa/ to a rigid identity. This is sort of a trap that most boards get caught in and never quite escape. Memes as well actually. Think of just how much weight old material like desu or bane and of course pepe hold, compared to stuff that came about just last year even that just fades in like a month from collective memory.</div></div><br/><div class="post reply" id="reply_47"><p class="intro"><input type="checkbox" class="delete" name="delete_47" id="delete_47" /><label for="delete_47"><span class="name">Anonymous</span> <time datetime="2019-02-07T17:35:35Z">02/07/19 (Thu) 17:35:35</time></label>&nbsp;<a class="post_no" id="post_no_47" onclick="highlightReply(47)" href="/feb/res/45#47">No.</a><a class="post_no" onclick="citeReply(47)" href="/feb/res/45#q47">47</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('46', event);" href="/feb/res/45.php#46">&gt;&gt;46</a><br/>While I do agree boards need to constantly evolve, or at least stay fresh to avoid becoming stale. I don't think that a one-off celebration of things people loved from the past will cause the board to enter that state. I think it would more remind people of what they loved about /qa/ and maybe encourage them to try and bring about an even better future.</div></div><br/><div class="post reply" id="reply_48"><p class="intro"><input type="checkbox" class="delete" name="delete_48" id="delete_48" /><label for="delete_48"><span class="name">Anonymous</span> <time datetime="2019-02-08T04:39:36Z">02/08/19 (Fri) 04:39:36</time></label>&nbsp;<a class="post_no" id="post_no_48" onclick="highlightReply(48)" href="/feb/res/45#48">No.</a><a class="post_no" onclick="citeReply(48)" href="/feb/res/45#q48">48</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('47', event);" href="/feb/res/45.php#47">&gt;&gt;47</a><br/>Yeah, I hope that we can remember the past fondly, while taking all the best of it into the future with us and combining it with new great things.</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_28" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549125467651.jpg">1549125467651.jpg</a> <span class="unimportant">(186.61 KB, 1920x1080, <span class="postfilename">mpv-shot0022.jpg</span>)</span></p><a href="/feb/src/1549125467651.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549125467651.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_28" ><p class="intro"><input type="checkbox" class="delete" name="delete_28" id="delete_28" /><label for="delete_28"><span class="name">Anonymous</span> <time datetime="2019-02-02T16:37:47Z">02/02/19 (Sat) 16:37:47</time></label>&nbsp;<a class="post_no" id="post_no_28" onclick="highlightReply(28)" href="/feb/res/28#28">No.</a><a class="post_no" onclick="citeReply(28)" href="/feb/res/28#q28">28</a><a href="/feb/res/28">[Reply]</a></p><div class="body">After checking the current [absolute dilapidated rusty shanty town of a] state of other imageboards, this might the first I could resettle on.<br/>However, I would deem it necessary to leave everything behind for good. I assume most will still majorily browse the bigger site, but I hope this place can get an identity for its own.<br/><br/>Also, please do not ever add the board faggotry all the other newer sites did and keep board count in general to a minimum as long as possible.<br/><br/>I hope to find that magical realm again</div><span class="omitted">2 posts omitted. Click reply to view.</span></div><div class="post reply" id="reply_33"><p class="intro"><input type="checkbox" class="delete" name="delete_33" id="delete_33" /><label for="delete_33"><span class="name">Anonymous</span> <time datetime="2019-02-03T01:25:35Z">02/03/19 (Sun) 01:25:35</time></label>&nbsp;<a class="post_no" id="post_no_33" onclick="highlightReply(33)" href="/feb/res/28#33">No.</a><a class="post_no" onclick="citeReply(33)" href="/feb/res/28#q33">33</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549157135901.png">1549157135901.png</a> <span class="unimportant">(220.27 KB, 613x941, <span class="postfilename">sachikoSMCD.png</span>)</span></p><a href="/feb/src/1549157135901.png" target="_blank"><img class="post-image" src="/feb/thumb/1549157135901.png" style="width:114px;height:175px" alt="" /></a></div>    </div>         <div class="body" >Yeah, I think it's important to limit boards to the population size. Tohno-chan is usually the go-to example of too many boards.<br/>I added this board in about 30 seconds when I had a sudden idea and it's not going to last. <br/><a href="http://kissu.moe/xmas/" rel="nofollow" target="_blank">http://kissu.moe/xmas/</a> as the previous temporary board that's now locked and unlisted. I think it'd be cool if they can be preserved and be unlocked each year, but we'll see how things go.</div></div><br/><div class="post reply" id="reply_36"><p class="intro"><input type="checkbox" class="delete" name="delete_36" id="delete_36" /><label for="delete_36"><span class="name">Anonymous</span> <time datetime="2019-02-03T13:42:40Z">02/03/19 (Sun) 13:42:40</time></label>&nbsp;<a class="post_no" id="post_no_36" onclick="highlightReply(36)" href="/feb/res/28#36">No.</a><a class="post_no" onclick="citeReply(36)" href="/feb/res/28#q36">36</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('30', event);" href="/feb/res/28.php#30">&gt;&gt;30</a><br/>Makes perfect sense, having more boards than you can count on one hand when starting out always spreads out the userbase too thin.<br/>You can only really think about adding more if the need arises.</div></div><br/><div class="post reply" id="reply_42"><p class="intro"><input type="checkbox" class="delete" name="delete_42" id="delete_42" /><label for="delete_42"><span class="name">Anonymous</span> <time datetime="2019-02-04T14:50:18Z">02/04/19 (Mon) 14:50:18</time></label>&nbsp;<a class="post_no" id="post_no_42" onclick="highlightReply(42)" href="/feb/res/28#42">No.</a><a class="post_no" onclick="citeReply(42)" href="/feb/res/28#q42">42</a></p>        <div class="files">    </div>         <div class="body" ><span class="glowgold"> How long will f/qa4 be linked and why is /qa/ called /qa/, just for legacy? </span></div></div><br/><div class="post reply" id="reply_43"><p class="intro"><input type="checkbox" class="delete" name="delete_43" id="delete_43" /><label for="delete_43"><span class="name">Anonymous</span> <time datetime="2019-02-04T20:08:53Z">02/04/19 (Mon) 20:08:53</time></label>&nbsp;<a class="post_no" id="post_no_43" onclick="highlightReply(43)" href="/feb/res/28#43">No.</a><a class="post_no" onclick="citeReply(43)" href="/feb/res/28#q43">43</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('42', event);" href="/feb/res/28.php#42">&gt;&gt;42</a><br/>/qa/ is /qa/</div></div><br/><div class="post reply" id="reply_44"><p class="intro"><input type="checkbox" class="delete" name="delete_44" id="delete_44" /><label for="delete_44"><span class="name">Anonymous</span> <time datetime="2019-02-05T01:36:04Z">02/05/19 (Tue) 01:36:04</time></label>&nbsp;<a class="post_no" id="post_no_44" onclick="highlightReply(44)" href="/feb/res/28#44">No.</a><a class="post_no" onclick="citeReply(44)" href="/feb/res/28#q44">44</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549330564677.jpg">1549330564677.jpg</a> <span class="unimportant">(40.51 KB, 720x480, <span class="postfilename" title="Di Gi Charat - 16.avi_snapshot_00.26_[2018.10.13_17.11.46].jpg">Di Gi Charat - 16.avi_snap….jpg</span>)</span></p><a href="/feb/src/1549330564677.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549330564677.png" style="width:175px;height:117px" alt="" /></a></div>    </div>         <div class="body" >I'd say it'll be de-linked when it dies or is abandoned by our community<br/>never thought about the board name here being /qa/, but what else could it be called that people would recognize as /qa/'s secondary board?</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_37" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549212368513.gif">1549212368513.gif</a> <span class="unimportant">(409.97 KB, 500x281, <span class="postfilename">feb.gif</span>)</span></p><a href="/feb/src/1549212368513.gif" target="_blank"><img class="post-image" src="/feb/thumb/1549212368513.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_37" ><p class="intro"><input type="checkbox" class="delete" name="delete_37" id="delete_37" /><label for="delete_37"><span class="name">Anonymous</span> <time datetime="2019-02-03T16:46:08Z">02/03/19 (Sun) 16:46:08</time></label>&nbsp;<a class="post_no" id="post_no_37" onclick="highlightReply(37)" href="/feb/res/37#37">No.</a><a class="post_no" onclick="citeReply(37)" href="/feb/res/37#q37">37</a><a href="/feb/res/37">[Reply]</a></p><div class="body">why is she poking her swimsuit? is there something wrong with it</div></div><div class="post reply" id="reply_38"><p class="intro"><input type="checkbox" class="delete" name="delete_38" id="delete_38" /><label for="delete_38"><span class="name">Anonymous</span> <time datetime="2019-02-03T19:26:18Z">02/03/19 (Sun) 19:26:18</time></label>&nbsp;<a class="post_no" id="post_no_38" onclick="highlightReply(38)" href="/feb/res/37#38">No.</a><a class="post_no" onclick="citeReply(38)" href="/feb/res/37#q38">38</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549221978383.jpg">1549221978383.jpg</a> <span class="unimportant">(1.01 MB, 1697x2400, <span class="postfilename" title="ab1d0c0cb4a320a442362659c2946360.jpg">ab1d0c0cb4a320a442362659c2….jpg</span>)</span></p><a href="/feb/src/1549221978383.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549221978383.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" >she's showing where to aim at!</div></div><br/><div class="post reply" id="reply_41"><p class="intro"><input type="checkbox" class="delete" name="delete_41" id="delete_41" /><label for="delete_41"><span class="name">Anonymous</span> <time datetime="2019-02-03T22:48:51Z">02/03/19 (Sun) 22:48:51</time></label>&nbsp;<a class="post_no" id="post_no_41" onclick="highlightReply(41)" href="/feb/res/37#41">No.</a><a class="post_no" onclick="citeReply(41)" href="/feb/res/37#q41">41</a></p>        <div class="files">    </div>         <div class="body" >it looks as if someone has accidentally spilled some ketchup on it</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_40" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549234057182.jpg">1549234057182.jpg</a> <span class="unimportant">(146.57 KB, 662x1131, <span class="postfilename">1497194130014.jpg</span>)</span></p><a href="/feb/src/1549234057182.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549234057182.png" style="width:150px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_40" ><p class="intro"><input type="checkbox" class="delete" name="delete_40" id="delete_40" /><label for="delete_40"><span class="name">Anonymous</span> <time datetime="2019-02-03T22:47:37Z">02/03/19 (Sun) 22:47:37</time></label>&nbsp;<a class="post_no" id="post_no_40" onclick="highlightReply(40)" href="/feb/res/40#40">No.</a><a class="post_no" onclick="citeReply(40)" href="/feb/res/40#q40">40</a><a href="/feb/res/40">[Reply]</a></p><div class="body">Did you remember to go to church and be a good Christian today?</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_17" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549046245587.png">1549046245587.png</a> <span class="unimportant">(31.71 KB, 972x476, <span class="postfilename">1549045696499.png</span>)</span></p><a href="/feb/src/1549046245587.png" target="_blank"><img class="post-image" src="/feb/thumb/1549046245587.png" style="width:255px;height:125px" alt="" /></a></div>    </div>    <div class="post op" id="op_17" ><p class="intro"><input type="checkbox" class="delete" name="delete_17" id="delete_17" /><label for="delete_17"><span class="name">Anonymous</span> <time datetime="2019-02-01T18:37:25Z">02/01/19 (Fri) 18:37:25</time></label>&nbsp;<a class="post_no" id="post_no_17" onclick="highlightReply(17)" href="/feb/res/17#17">No.</a><a class="post_no" onclick="citeReply(17)" href="/feb/res/17#q17">17</a><a href="/feb/res/17">[Reply]</a></p><div class="body">heh</div><span class="omitted">4 posts omitted. Click reply to view.</span></div><div class="post reply" id="reply_22"><p class="intro"><input type="checkbox" class="delete" name="delete_22" id="delete_22" /><label for="delete_22"><span class="name">Anonymous</span> <time datetime="2019-02-01T22:56:34Z">02/01/19 (Fri) 22:56:34</time></label>&nbsp;<a class="post_no" id="post_no_22" onclick="highlightReply(22)" href="/feb/res/17#22">No.</a><a class="post_no" onclick="citeReply(22)" href="/feb/res/17#q22">22</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549061794795.jpg">1549061794795.jpg</a> <span class="unimportant">(87.14 KB, 600x800, <span class="postfilename" title="4ad2cb54abd8ce5d688e00f60fb2831655fbba9758bbecd8ea427a8e23237e29.jpg">4ad2cb54abd8ce5d688e00f60f….jpg</span>)</span></p><a href="/feb/src/1549061794795.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549061794795.png" style="width:131px;height:175px" alt="" /></a></div>    </div>         <div class="body" >a-anon-chan&hellip;.</div></div><br/><div class="post reply" id="reply_25"><p class="intro"><input type="checkbox" class="delete" name="delete_25" id="delete_25" /><label for="delete_25"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:03:33Z">02/01/19 (Fri) 23:03:33</time></label>&nbsp;<a class="post_no" id="post_no_25" onclick="highlightReply(25)" href="/feb/res/17#25">No.</a><a class="post_no" onclick="citeReply(25)" href="/feb/res/17#q25">25</a></p>        <div class="files">    </div>         <div class="body" >wjQ</div></div><br/><div class="post reply" id="reply_26"><p class="intro"><input type="checkbox" class="delete" name="delete_26" id="delete_26" /><label for="delete_26"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:18:59Z">02/01/19 (Fri) 23:18:59</time></label>&nbsp;<a class="post_no" id="post_no_26" onclick="highlightReply(26)" href="/feb/res/17#26">No.</a><a class="post_no" onclick="citeReply(26)" href="/feb/res/17#q26">26</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('20', event);" href="/feb/res/17.php#20">&gt;&gt;20</a><br/>Right now it's a tie up which is more unlikely: The V-tuber settling on a voice actor and progressing, or the board unlisting.</div></div><br/><div class="post reply" id="reply_27"><p class="intro"><input type="checkbox" class="delete" name="delete_27" id="delete_27" /><label for="delete_27"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:22:38Z">02/01/19 (Fri) 23:22:38</time></label>&nbsp;<a class="post_no" id="post_no_27" onclick="highlightReply(27)" href="/feb/res/17#27">No.</a><a class="post_no" onclick="citeReply(27)" href="/feb/res/17#q27">27</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('26', event);" href="/feb/res/17.php#26">&gt;&gt;26</a><br/>well he has to put SOME effort into making the vtuber, it's probably a 1 minute or similar fix to unlist /qa/</div></div><br/><div class="post reply" id="reply_39"><p class="intro"><input type="checkbox" class="delete" name="delete_39" id="delete_39" /><label for="delete_39"><span class="name">Anonymous</span> <time datetime="2019-02-03T20:35:48Z">02/03/19 (Sun) 20:35:48</time></label>&nbsp;<a class="post_no" id="post_no_39" onclick="highlightReply(39)" href="/feb/res/17#39">No.</a><a class="post_no" onclick="citeReply(39)" href="/feb/res/17#q39">39</a></p>        <div class="files">    </div>         <div class="body" ><em>ANY</em> minute now</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_35" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549172963372.png">1549172963372.png</a> <span class="unimportant">(150 B, 10x10, <span class="postfilename">Untitled.png</span>)</span></p><a href="/feb/src/1549172963372.png" target="_blank"><img class="post-image" src="/feb/thumb/1549172963372.png" style="width:10px;height:10px" alt="" /></a></div>    </div>    <div class="post op" id="op_35" ><p class="intro"><input type="checkbox" class="delete" name="delete_35" id="delete_35" /><label for="delete_35"><span class="name">Anonymous</span> <time datetime="2019-02-03T05:49:23Z">02/03/19 (Sun) 05:49:23</time></label>&nbsp;<a class="post_no" id="post_no_35" onclick="highlightReply(35)" href="/feb/res/35#35">No.</a><a class="post_no" onclick="citeReply(35)" href="/feb/res/35#q35">35</a><i class="fa fa-lock" title="Locked"></i><a href="/feb/res/35">[Reply]</a></p><div class="body"><!DOCTYPE HTML><html><head><style>#timer { text-align: center; font-size: 40px; font-color: "b98de2";margin-top: 0px;}}</style></head><body><p id="timer"></p><script>var countDownDate = new Date("Feb 8, 2019 0:0:0").getTime();var x = setInterval(function() {var now = new Date().getTime();var distance = countDownDate - now;var days = Math.floor(distance / (1000 * 60 * 60 * 24));var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));var seconds = Math.floor((distance % (1000 * 60)) / 1000);var your_thread_message = "";document.getElementById("timer").innerHTML = your_thread_message + days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";if (distance < 0) {clearInterval(x);document.getElementById("timer").innerHTML = your_thread_message + " -release the boson- ";}}, 1000);</script></body></html></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_31" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549146150829.png">1549146150829.png</a> <span class="unimportant">(Spoiler Image, 640.51 KB, 623x1109, <span class="postfilename">biribiri_Akuma_137.png</span>)</span></p><a href="/feb/src/1549146150829.png" target="_blank"><img class="post-image" src="/static/kissu-spoiler.png" style="width:275px;height:250px" alt="" /></a></div>    </div>    <div class="post op" id="op_31" ><p class="intro"><input type="checkbox" class="delete" name="delete_31" id="delete_31" /><label for="delete_31"><span class="name">Anonymous</span> <time datetime="2019-02-02T22:22:30Z">02/02/19 (Sat) 22:22:30</time></label>&nbsp;<a class="post_no" id="post_no_31" onclick="highlightReply(31)" href="/feb/res/31#31">No.</a><a class="post_no" onclick="citeReply(31)" href="/feb/res/31#q31">31</a><a href="/feb/res/31">[Reply]</a></p><div class="body">They came here in Febuary</div></div><div class="post reply" id="reply_32"><p class="intro"><input type="checkbox" class="delete" name="delete_32" id="delete_32" /><label for="delete_32"><a class="sage" href="javascript:void(0); sage"><span class="name">Anonymous</span></a> <time datetime="2019-02-03T01:21:12Z">02/03/19 (Sun) 01:21:12</time></label>&nbsp;<a class="post_no" id="post_no_32" onclick="highlightReply(32)" href="/feb/res/31#32">No.</a><a class="post_no" onclick="citeReply(32)" href="/feb/res/31#q32">32</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549156872662.png">1549156872662.png</a> <span class="unimportant">(Spoiler Image, 393.26 KB, 800x800, <span class="postfilename" title="06e14542e58a194770bd1b9dc2c49c8c.png">06e14542e58a194770bd1b9dc2….png</span>)</span></p><a href="/feb/src/1549156872662.png" target="_blank"><img class="post-image" src="/static/kissu-spoiler.png" style="width:275px;height:250px" alt="" /></a></div>    </div>         <div class="body" >sure did</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_10" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548997846113.jpg">1548997846113.jpg</a> <span class="unimportant">(34.53 KB, 640x345, <span class="postfilename">pizza.jpg</span>)</span></p><a href="/feb/src/1548997846113.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1548997846113.png" style="width:255px;height:138px" alt="" /></a></div>    </div>    <div class="post op" id="op_10" ><p class="intro"><input type="checkbox" class="delete" name="delete_10" id="delete_10" /><label for="delete_10"><span class="subject">pizza</span> <a class="email" href="mailto:pizza"><span class="name">pizza</span></a> <time datetime="2019-02-01T05:10:46Z">02/01/19 (Fri) 05:10:46</time></label>&nbsp;<a class="post_no" id="post_no_10" onclick="highlightReply(10)" href="/feb/res/10#10">No.</a><a class="post_no" onclick="citeReply(10)" href="/feb/res/10#q10">10</a><a href="/feb/res/10">[Reply]</a></p><div class="body">pizza</div></div><div class="post reply" id="reply_11"><p class="intro"><input type="checkbox" class="delete" name="delete_11" id="delete_11" /><label for="delete_11"><span class="name">Anonymous</span> <time datetime="2019-02-01T05:46:58Z">02/01/19 (Fri) 05:46:58</time></label>&nbsp;<a class="post_no" id="post_no_11" onclick="highlightReply(11)" href="/feb/res/10#11">No.</a><a class="post_no" onclick="citeReply(11)" href="/feb/res/10#q11">11</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('10', event);" href="/feb/res/10.php#10">&gt;&gt;10</a><br/>ikazuki pizza!!!</div></div><br/><div class="post reply" id="reply_24"><p class="intro"><input type="checkbox" class="delete" name="delete_24" id="delete_24" /><label for="delete_24"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:02:31Z">02/01/19 (Fri) 23:02:31</time></label>&nbsp;<a class="post_no" id="post_no_24" onclick="highlightReply(24)" href="/feb/res/10#24">No.</a><a class="post_no" onclick="citeReply(24)" href="/feb/res/10#q24">24</a></p>        <div class="files">    </div>         <div class="body" >pWm</div></div><br/><br class="clear"/><hr/></div>
	<div id="post-moderation-fields">
		<div id="delete-fields">
		Delete Post [<input title="Delete file only" type="checkbox" name="file" id="delete_file" />
				 <label for="delete_file">File</label>] <label for="password">Password</label> 
		<input id="password" type="password" name="password" size="12" maxlength="18" />
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
	
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">bans</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>]				 [<a href="/feb/2.php">2</a>] 		 <form action="/feb/2.php" method="get"><input type="submit" value="Next" /></form>
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
	
</body>
</html>
