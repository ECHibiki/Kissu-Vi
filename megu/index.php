<!doctype html>
<html>
<head>
	<meta charset="utf-8">

        <script type="text/javascript">
	  var
                        active_page = "index"
            , board_name = "megu";
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
								<title>/megu/ - Megumin</title>
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
		<h1>/megu/ - Megumin</h1>
		<div class="subtitle">
												Lewd posting allowed
												</div>
	</header>

	
	

			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea style="display:none" name="user">Bz'?L☥%]⚧!6v}fhqXlxFt){j:i^WPOS[g&lt;Qbo,⚾V0⛷♴Ts9=u1</textarea>
<span style="display:none"><input type="text" name="vt2⚣6u0p7gjz4ln9eswhm3ackyfr8dq⚄1o♳" value=""></span>
<input type="hidden" name="board" value="megu">
<input value="" name="q" type="hidden">
	<input type="hidden" name="page" value="1">
	<table>
		<tr>
			<th>
				Name				<input name="yv♞36c0wsfmu7nxia5⚛9" value="" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea name="m3i4fva7cl⛦1q9uy8xdb☬6" style="display:none">@l!c$z%2]a ⛕hpVyMD&lt;R☽d{B9=x:o.#&gt;fIvU^Q_</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				
			</th>
			<td>
								<input style="opacity: 0;position: absolute;bottom:0;right:0" type="test" value="EatsChromeAuto"/>
				<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								
								
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

<input type="hidden" name="hash" value="3cc45240c82bb0e24b073d94e08313247d2a11f9">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
	
		
	<hr /><div class="blotter">Site changes mostly done(exceptions to bugs and simple requests).<br/>Add `repo` to the option field if you want threads to be reposted to qa4</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/megu/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="megu" />
		<div class="thread" id="thread_1" data-board="megu">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546551235139.png">1546551235139.png</a> <span class="unimportant">(342.63 KB, 1033x1530, <span class="postfilename" title="a428fa55301e832d55f75b7f1ed6a27a.png">a428fa55301e832d55f75b7f1e….png</span>)</span></p><a href="/megu/src/1546551235139.png" target="_blank"><img class="post-image" src="/megu/thumb/1546551235139.png" style="width:172px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><a class="email" href="mailto:%20repo"><span class="name">Anonymous</span></a> <time datetime="2019-01-03T21:33:55Z">01/03/19 (Thu) 21:33:55</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="highlightReply(1)" href="/megu/res/1#1">No.</a><a class="post_no" onclick="citeReply(1)" href="/megu/res/1#q1">1</a><i class="fa fa-thumb-tack" title="Sticky"></i><a href="/megu/res/1">[Reply]</a></p><div class="body">cummed</div></div><div class="post reply" id="reply_3"><p class="intro"><input type="checkbox" class="delete" name="delete_3" id="delete_3" /><label for="delete_3"><span class="name">Anonymous</span> <time datetime="2019-01-03T21:43:56Z">01/03/19 (Thu) 21:43:56</time></label>&nbsp;<a class="post_no" id="post_no_3" onclick="highlightReply(3)" href="/megu/res/1#3">No.</a><a class="post_no" onclick="citeReply(3)" href="/megu/res/1#q3">3</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546551836183.png">1546551836183.png</a> <span class="unimportant">(459.77 KB, 800x1000, <span class="postfilename" title="0907dc8f9bed56ced0506c30cbdeea1e.png">0907dc8f9bed56ced0506c30cb….png</span>)</span></p><a href="/megu/src/1546551836183.png" target="_blank"><img class="post-image" src="/megu/thumb/1546551836183.png" style="width:140px;height:175px" alt="" /></a></div>    </div>         <div class="body" ></div></div><br/><div class="post reply" id="reply_6"><p class="intro"><input type="checkbox" class="delete" name="delete_6" id="delete_6" /><label for="delete_6"><span class="name">Anonymous</span> <time datetime="2019-01-03T22:25:13Z">01/03/19 (Thu) 22:25:13</time></label>&nbsp;<a class="post_no" id="post_no_6" onclick="highlightReply(6)" href="/megu/res/1#6">No.</a><a class="post_no" onclick="citeReply(6)" href="/megu/res/1#q6">6</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546554313359.jpg">1546554313359.jpg</a> <span class="unimportant">(134.31 KB, 1050x1483, <span class="postfilename">001.jpg</span>)</span></p><a href="/megu/src/1546554313359.jpg" target="_blank"><img class="post-image" src="/megu/thumb/1546554313359.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" >why is sleeping so hot?<br/><a href="https://exhentai.org/g/1140785/bc9b699b4d/" rel="nofollow" target="_blank">https://exhentai.org/g/1140785/bc9b699b4d/</a></div></div><br/><div class="post reply" id="reply_10"><p class="intro"><input type="checkbox" class="delete" name="delete_10" id="delete_10" /><label for="delete_10"><span class="name">Anonymous</span> <time datetime="2019-01-04T21:43:08Z">01/04/19 (Fri) 21:43:08</time></label>&nbsp;<a class="post_no" id="post_no_10" onclick="highlightReply(10)" href="/megu/res/1#10">No.</a><a class="post_no" onclick="citeReply(10)" href="/megu/res/1#q10">10</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546638188005.png">1546638188005.png</a> <span class="unimportant">(944.85 KB, 1116x1579, <span class="postfilename" title="21c35561c1a0715ca5a0fb1ae7ae68e3.png">21c35561c1a0715ca5a0fb1ae7….png</span>)</span></p><a href="/megu/src/1546638188005.png" target="_blank"><img class="post-image" src="/megu/thumb/1546638188005.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" >only been an hour since I was up and I already want to cum</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_7" data-board="megu">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546586735902.jpg">1546586735902.jpg</a> <span class="unimportant">(3.21 MB, 2040x3000, <span class="postfilename">03_046_0046.jpg</span>)</span></p><a href="/megu/src/1546586735902.jpg" target="_blank"><img class="post-image" src="/megu/thumb/1546586735902.png" style="width:173px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_7" ><p class="intro"><input type="checkbox" class="delete" name="delete_7" id="delete_7" /><label for="delete_7"><span class="name">Anonymous</span> <time datetime="2019-01-04T07:25:35Z">01/04/19 (Fri) 07:25:35</time></label>&nbsp;<a class="post_no" id="post_no_7" onclick="highlightReply(7)" href="/megu/res/7#7">No.</a><a class="post_no" onclick="citeReply(7)" href="/megu/res/7#q7">7</a><a href="/megu/res/7">[Reply]</a></p><div class="body">a jo for the ages<br/><a href="https://exhentai.org/g/1338731/86334d1102/" rel="nofollow" target="_blank">https://exhentai.org/g/1338731/86334d1102/</a></div></div><div class="post reply" id="reply_9"><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span class="name">Anonymous</span> <time datetime="2019-01-04T21:37:15Z">01/04/19 (Fri) 21:37:15</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="highlightReply(9)" href="/megu/res/7#9">No.</a><a class="post_no" onclick="citeReply(9)" href="/megu/res/7#q9">9</a></p>        <div class="files">    </div>         <div class="body" >page9 is nice..</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_8" data-board="megu">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546632882240.png">1546632882240.png</a> <span class="unimportant">(3.8 MB, 2040x2880, <span class="postfilename">i_270.png</span>)</span></p><a href="/megu/src/1546632882240.png" target="_blank"><img class="post-image" src="/megu/thumb/1546632882240.png" style="width:181px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_8" ><p class="intro"><input type="checkbox" class="delete" name="delete_8" id="delete_8" /><label for="delete_8"><span class="name">Anonymous</span> <time datetime="2019-01-04T20:14:42Z">01/04/19 (Fri) 20:14:42</time></label>&nbsp;<a class="post_no" id="post_no_8" onclick="highlightReply(8)" href="/megu/res/8#8">No.</a><a class="post_no" onclick="citeReply(8)" href="/megu/res/8#q8">8</a><a href="/megu/res/8">[Reply]</a></p><div class="body">Not sure which I prefer, daughters or imoutos.</div></div><br class="clear"/><hr/></div><div class="thread" id="thread_5" data-board="megu">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546552185181.png">1546552185181.png</a> <span class="unimportant">(884.37 KB, 732x1024, <span class="postfilename" title="6a3ab19e141662aed034b0198198d113.png">6a3ab19e141662aed034b01981….png</span>)</span></p><a href="/megu/src/1546552185181.png" target="_blank"><img class="post-image" src="/megu/thumb/1546552185181.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_5" ><p class="intro"><input type="checkbox" class="delete" name="delete_5" id="delete_5" /><label for="delete_5"><span class="name">Anonymous</span> <time datetime="2019-01-03T21:49:45Z">01/03/19 (Thu) 21:49:45</time></label>&nbsp;<a class="post_no" id="post_no_5" onclick="highlightReply(5)" href="/megu/res/5#5">No.</a><a class="post_no" onclick="citeReply(5)" href="/megu/res/5#q5">5</a><a href="/megu/res/5">[Reply]</a></p><div class="body"></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_4" data-board="megu">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/megu/src/1546552080435.jpg">1546552080435.jpg</a> <span class="unimportant">(516.28 KB, 1024x640, <span class="postfilename" title="aca2be23c7d16346668b0f2d022ff185.jpg">aca2be23c7d16346668b0f2d02….jpg</span>)</span></p><a href="/megu/src/1546552080435.jpg" target="_blank"><img class="post-image" src="/megu/thumb/1546552080435.png" style="width:255px;height:159px" alt="" /></a></div>    </div>    <div class="post op" id="op_4" ><p class="intro"><input type="checkbox" class="delete" name="delete_4" id="delete_4" /><label for="delete_4"><span class="name">Anonymous</span> <time datetime="2019-01-03T21:48:00Z">01/03/19 (Thu) 21:48:00</time></label>&nbsp;<a class="post_no" id="post_no_4" onclick="highlightReply(4)" href="/megu/res/4#4">No.</a><a class="post_no" onclick="citeReply(4)" href="/megu/res/4#q4">4</a><a href="/megu/res/4">[Reply]</a></p><div class="body"></div></div><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/megu/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/lit/">lit</a> ]</span>  <span class="sub" data-description="2">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/megu/catalog">Catalog</a>
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
