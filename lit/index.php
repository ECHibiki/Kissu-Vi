<!doctype html>
<html>
<head>
	<meta charset="utf-8">

        <script type="text/javascript">
	  var
                        active_page = "index"
            , board_name = "lit";
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
								<title>/lit/ - Literature</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/lit/">lit</a> ]</span>  <span class="sub" data-description="2">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<?php
	$t = explode(" ", microtime())[0];
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/functions.php');
	require_once ('inc/bans.php');

	loadConfig();
	checkDNSBL();
	checkBan();
	echo explode(" ", microtime())[0] - $t;
?>	
		<img class="board_image" src="/banner-art.php" alt="" />	
	<header>
		<h1>/lit/ - Literature</h1>
		<div class="subtitle">
												Happy New Year!
												</div>
	</header>

	
	

			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<span style="display:none"><input type="text" name="70mzwuos1j" value="8&#45;&#126;&#92;l_m☒&lt;&#9747;e5`!Bts♉{&#32;.j'@♭&#59;7⛟P&amp;&#98;XFpv&#86;d4$6N k&#111;,%&#49;&#104;&#57;O/)Jg⚩☧=Z:Q♧&#113;3Cx&#99;I+AaS&#91;GD&#84;i&#35;2&#77;n♌(}^E&#87;&#121;HRLU&#117;"></span>
<input style="display:none" type="text" name="message" value="i7g3'kJ_xQ=MY s10:]pzT⛴y" >
<input type="hidden" name="board" value="lit">
<input  value="&#95;^~&amp;6d&#116;⚑y=&#88;f&#73;8#s♞&#106;⚛&#71;&#91;&#120;T&#80;&#57;&#66;1CR&#108;☜4`⛪k&#55;&#117;F"  name="q"  type="hidden" >
	<table>
		<tr>
			<th>
				Name				<span style="display:none"><input type="text" name="firstname" value="mV4b%h3L ?7⛐☩!⛬♊ovx'W2},`s]l@JAy .0K$P+G;♆(UqO-n)#g⛱S5|tDiN1C\/Rar&amp;⛶Tp9ju⛡☾&gt;&lt;B~ME{Ifz"></span>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  style="display:none"  type="text"  name="url"  value="R8B$⛺LM,Y♹-Ep 76⛯'C4jW☘:+n;?Zq⚊\/Qa.♹(O`IKrcDlTA%~[f59w☱k_xVSJ!@♄vb)F&lt;2o y}g&gt;">
			</td>
		</tr>		<tr>
			<th>
				Options				<input type="hidden" value="&#56;15&#53;9" name="search">
			</th>
			<td>
								<input style="opacity: 0;position: absolute;bottom:0;right:0" type="test" value="EatsChromeAuto"/>
				<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								<input type="hidden" value="&#97;&#86;,e&#64;4Ac7b☁f(K5x}RH♏&#61;&#109;]:^&gt;&#9838;&#32;[1EBuSG-&#57;|*3#⚷&amp;⛩v&#85;&#39;/♉2r+X.&#112;Y&#60;t;q&#73;&#108;i8on%&#122;⚺&#32;ZN⚣d&#76;&#106;DT`&#63;C60Q&#70;O&#41;&#119;_&#107;&#33;Pg$" name="text">
								<div style="display:none"><input type="text" name="3652joy7b♛huc8☺tfweigapd0" value="4\ D⚾E62Ha☨"></div>
			</td>
		</tr>		<tr>
			<th>
				Subject				
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
				<input style="opacity: 0;position: absolute;right:0;bottom:0" type="test" value="EatsChromeAuto"/>
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
						<tr>
			<th>
				Password				
			</th>
			<td>
				<input style="opacity: 0;position: absolute;right:0;bottom:0" type="password" value="EatsChromeAuto"/>
				<input type="password" name="password" value="" size="12" maxlength="18" autocomplete="off"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="05ddbb29f7165b1a157f8aba25a8b537b4709332">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
	
		
	<hr /><div class="blotter">S2.5: Some pixiv image upload errors fixed. Report any others. Increased character limit to 4k<br/> Happy News Years<br/>2.5 finishes tommorow. 3.0 is long term things that have no fixed time.</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/lit/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="lit" />
		<div class="thread" id="thread_1" data-board="lit">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546143109126.jpg">1546143109126.jpg</a> <span class="unimportant">(437.33 KB, 1701x2560, <span class="postfilename">sabriel.jpg</span>)</span></p><a href="/lit/src/1546143109126.jpg" target="_blank"><img class="post-image" src="/lit/thumb/1546143109126.png" style="width:170px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><a class="email" href="mailto:noko"><span class="name">Verniy</span></a>         <span class="capcode">## admin</span> <time datetime="2018-12-30T04:11:49Z">12/30/18 (Sun) 04:11:49</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="highlightReply(1)" href="/lit/res/1#1">No.</a><a class="post_no" onclick="citeReply(1)" href="/lit/res/1#q1">1</a><i class="fa fa-thumb-tack" title="Sticky"></i><a href="/lit/res/1">[Reply]</a></p><div class="body">This board isn't designed to have posts in it. <br/>It's simply there in case someone wants to discuss books</div><span class="omitted">1 post omitted. Click reply to view.</span></div><div class="post reply" id="reply_3"><p class="intro"><input type="checkbox" class="delete" name="delete_3" id="delete_3" /><label for="delete_3"><span class="name">Anonymous</span> <time datetime="2018-12-30T07:57:26Z">12/30/18 (Sun) 07:57:26</time></label>&nbsp;<a class="post_no" id="post_no_3" onclick="highlightReply(3)" href="/lit/res/1#3">No.</a><a class="post_no" onclick="citeReply(3)" href="/lit/res/1#q3">3</a></p>        <div class="files">    </div>         <div class="body" >delete /lit/</div></div><br/><div class="post reply" id="reply_4"><p class="intro"><input type="checkbox" class="delete" name="delete_4" id="delete_4" /><label for="delete_4"><span class="name">Anonymous</span> <time datetime="2018-12-30T09:29:11Z">12/30/18 (Sun) 09:29:11</time></label>&nbsp;<a class="post_no" id="post_no_4" onclick="highlightReply(4)" href="/lit/res/1#4">No.</a><a class="post_no" onclick="citeReply(4)" href="/lit/res/1#q4">4</a></p>        <div class="files">    </div>         <div class="body" >Those are some dangerous tools you got there</div></div><br/><div class="post reply" id="reply_5"><p class="intro"><input type="checkbox" class="delete" name="delete_5" id="delete_5" /><label for="delete_5"><span class="name">Anonymous</span> <time datetime="2018-12-30T09:38:28Z">12/30/18 (Sun) 09:38:28</time></label>&nbsp;<a class="post_no" id="post_no_5" onclick="highlightReply(5)" href="/lit/res/1#5">No.</a><a class="post_no" onclick="citeReply(5)" href="/lit/res/1#q5">5</a></p>        <div class="files">    </div>         <div class="body" >only a select few gain the power to rewrite history</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_12" data-board="lit">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546325635750.png">1546325635750.png</a> <span class="unimportant">(36.88 KB, 335x358, <span class="postfilename" title="9c0e63ea23b7f020e79704bb169149f61b4f63487e6b4b9891219b02271d71f4.png">9c0e63ea23b7f020e79704bb16….png</span>)</span></p><a href="/lit/src/1546325635750.png" target="_blank"><img class="post-image" src="/lit/thumb/1546325635750.png" style="width:239px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_12" ><p class="intro"><input type="checkbox" class="delete" name="delete_12" id="delete_12" /><label for="delete_12"><span class="name">Anonymous</span> <time datetime="2019-01-01T06:53:55Z">01/01/19 (Tue) 06:53:55</time></label>&nbsp;<a class="post_no" id="post_no_12" onclick="highlightReply(12)" href="/lit/res/12#12">No.</a><a class="post_no" onclick="citeReply(12)" href="/lit/res/12#q12">12</a><a href="/lit/res/12">[Reply]</a></p><div class="body">Do VNs count as literature?</div></div><div class="post reply" id="reply_13"><p class="intro"><input type="checkbox" class="delete" name="delete_13" id="delete_13" /><label for="delete_13"><span class="name">Anonymous</span> <time datetime="2019-01-01T11:40:54Z">01/01/19 (Tue) 11:40:54</time></label>&nbsp;<a class="post_no" id="post_no_13" onclick="highlightReply(13)" href="/lit/res/12#13">No.</a><a class="post_no" onclick="citeReply(13)" href="/lit/res/12#q13">13</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546342853997.jpg">1546342853997.jpg</a> <span class="unimportant">(715.59 KB, 988x700, <span class="postfilename" title="b4479d4196ce461f757abb238a4d9505.jpg">b4479d4196ce461f757abb238a….jpg</span>)</span></p><a href="/lit/src/1546342853997.jpg" target="_blank"><img class="post-image" src="/lit/thumb/1546342853997.png" style="width:175px;height:124px" alt="" /></a></div>    </div>         <div class="body" >Evvvvvvverything is literature</div></div><br/><div class="post reply" id="reply_14"><p class="intro"><input type="checkbox" class="delete" name="delete_14" id="delete_14" /><label for="delete_14"><span class="name">Anonymous</span> <time datetime="2019-01-01T12:18:56Z">01/01/19 (Tue) 12:18:56</time></label>&nbsp;<a class="post_no" id="post_no_14" onclick="highlightReply(14)" href="/lit/res/12#14">No.</a><a class="post_no" onclick="citeReply(14)" href="/lit/res/12#q14">14</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546345136005.png">1546345136005.png</a> <span class="unimportant">(6.22 KB, 400x400, <span class="postfilename">pikachu.png</span>)</span></p><a href="/lit/src/1546345136005.png" target="_blank"><img class="post-image" src="/lit/thumb/1546345136005.png" style="width:175px;height:175px" alt="" /></a></div>    </div>         <div class="body" >Do H-doujinshi count as literature?</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_11" data-board="lit">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546315852920.png">1546315852920.png</a> <span class="unimportant">(2 MB, 1920x1080, <span class="postfilename" title="[Asenshi] Amanchu! - 05 [A23728E9].mkv_snapshot_03.01_[2018.04.07_21.45.59].png">[Asenshi] Amanchu! - 05 [A….png</span>)</span></p><a href="/lit/src/1546315852920.png" target="_blank"><img class="post-image" src="/lit/thumb/1546315852920.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_11" ><p class="intro"><input type="checkbox" class="delete" name="delete_11" id="delete_11" /><label for="delete_11"><span class="name">Anonymous</span> <time datetime="2019-01-01T04:10:53Z">01/01/19 (Tue) 04:10:53</time></label>&nbsp;<a class="post_no" id="post_no_11" onclick="highlightReply(11)" href="/lit/res/11#11">No.</a><a class="post_no" onclick="citeReply(11)" href="/lit/res/11#q11">11</a><a href="/lit/res/11">[Reply]</a></p><div class="body">lol reading</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_9" data-board="lit">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546226427406.png">1546226427406.png</a> <span class="unimportant">(154.55 KB, 768x256, <span class="postfilename">yallnerds.png</span>)</span></p><a href="/lit/src/1546226427406.png" target="_blank"><img class="post-image" src="/lit/thumb/1546226427406.png" style="width:255px;height:85px" alt="" /></a></div>    </div>    <div class="post op" id="op_9" ><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span class="name">Anonymous</span> <time datetime="2018-12-31T03:20:27Z">12/31/18 (Mon) 03:20:27</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="highlightReply(9)" href="/lit/res/9#9">No.</a><a class="post_no" onclick="citeReply(9)" href="/lit/res/9#q9">9</a><a href="/lit/res/9">[Reply]</a></p><div class="body">literature? more like loserature</div></div><div class="post reply" id="reply_10"><p class="intro"><input type="checkbox" class="delete" name="delete_10" id="delete_10" /><label for="delete_10"><span class="name">Anonymous</span> <time datetime="2018-12-31T07:23:39Z">12/31/18 (Mon) 07:23:39</time></label>&nbsp;<a class="post_no" id="post_no_10" onclick="highlightReply(10)" href="/lit/res/9#10">No.</a><a class="post_no" onclick="citeReply(10)" href="/lit/res/9#q10">10</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546241019272.jpg">1546241019272.jpg</a> <span class="unimportant">(28.4 KB, 369x355, <span class="postfilename">aspect.jpg</span>)</span></p><a href="/lit/src/1546241019272.jpg" target="_blank"><img class="post-image" src="/lit/thumb/1546241019272.png" style="width:175px;height:168px" alt="" /></a></div>    </div>         <div class="body" ></div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_8" data-board="lit">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546207771084.jpg">1546207771084.jpg</a> <span class="unimportant">(462.09 KB, 1920x1080, <span class="postfilename">sachithink.jpg</span>)</span></p><a href="/lit/src/1546207771084.jpg" target="_blank"><img class="post-image" src="/lit/thumb/1546207771084.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_8" ><p class="intro"><input type="checkbox" class="delete" name="delete_8" id="delete_8" /><label for="delete_8"><span class="name">Anonymous</span> <time datetime="2018-12-30T22:09:31Z">12/30/18 (Sun) 22:09:31</time></label>&nbsp;<a class="post_no" id="post_no_8" onclick="highlightReply(8)" href="/lit/res/8#8">No.</a><a class="post_no" onclick="citeReply(8)" href="/lit/res/8#q8">8</a><a href="/lit/res/8">[Reply]</a></p><div class="body">What makes you think anyone here reads?</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_6" data-board="lit">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/lit/src/1546164866508.jpg">1546164866508.jpg</a> <span class="unimportant">(192 KB, 750x950, <span class="postfilename">1518267363201.jpg</span>)</span></p><a href="/lit/src/1546164866508.jpg" target="_blank"><img class="post-image" src="/lit/thumb/1546164866508.png" style="width:201px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_6" ><p class="intro"><input type="checkbox" class="delete" name="delete_6" id="delete_6" /><label for="delete_6"><span class="name">Anonymous</span> <time datetime="2018-12-30T10:14:26Z">12/30/18 (Sun) 10:14:26</time></label>&nbsp;<a class="post_no" id="post_no_6" onclick="highlightReply(6)" href="/lit/res/6#6">No.</a><a class="post_no" onclick="citeReply(6)" href="/lit/res/6#q6">6</a><a href="/lit/res/6">[Reply]</a></p><div class="body">Hopefully this board turns out well and you are proven to have made the correct decision. Otherwise if it fails I can just use this board to blog about Overlord volumes when they come out.</div></div><div class="post reply" id="reply_7"><p class="intro"><input type="checkbox" class="delete" name="delete_7" id="delete_7" /><label for="delete_7"><span class="name">Anonymous</span> <time datetime="2018-12-30T11:24:36Z">12/30/18 (Sun) 11:24:36</time></label>&nbsp;<a class="post_no" id="post_no_7" onclick="highlightReply(7)" href="/lit/res/6#7">No.</a><a class="post_no" onclick="citeReply(7)" href="/lit/res/6#q7">7</a></p>        <div class="files">    </div>         <div class="body" >it's not a board. It's Graveyard board No. 1</div></div><br/><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/lit/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/lit/">lit</a> ]</span>  <span class="sub" data-description="2">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/lit/catalog">Catalog</a>
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
