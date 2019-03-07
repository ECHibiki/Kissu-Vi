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
<input   style="display:none"   type="text"   value="&#90;8zV&#125;2s☢_b&#126;?0*☀Mq|&#89;R&lt;B☵N9`&#81;&amp;(g"   name="search">
<div style="display:none"><input type="text" name="message" value=""></div>
<input type="hidden" name="board" value="feb">
<textarea name="user" style="display:none">&#51;Y~4I&#125;G&#61;h⛠&#88;Fk?&#50;'#8Ejtir7⛍R&#123;♱;]v&#121;&lt;&#84;&#122;&#41;g&#77;c%s/&#76;&gt;&#90;:($</textarea>
	<table>
		<tr>
			<th>
				Name				<textarea name="3mn0dlhq6♀☞" style="display:none">^?i&amp;FzV6n☩gTr;☹Hdq{:`k]!Y⚱AxcRN1⛥=e☣+I-v_BMSP~Q*</textarea>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<span style="display:none"><input type="text" name="username" value=""></span>
			</td>
		</tr>		<tr>
			<th>
				Options				<input name="lastname" value="" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								<input style="display:none" type="text" name="ycjgh38zu4f5" value="&#38;&#70;ab&#125;pK9l&#72;`&#95;0 L&#87;z4&#116;x &#102;er⚠&#123;'IY&#40;">
								<input   type="hidden"   value=""   name="k0wbu26o7☝4☭ia☙qc5sdnghvxzf98rlm1☃">
			</td>
		</tr>		<tr>
			<th>
				Subject				<input name="jom0xuypt87nvca632wi" value="dV9⚼♅G^!Hp/_&lt;7?Nz)gQc*.aR;xq8StI5♧&gt;fsF:+Z'D-♎2lOEXM~roCKyJ,⚯L%| Yv6♡☋Wh]P1$men#`{" type="hidden">
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
		<div class="thread" id="thread_2" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993666156.jpg">1548993666156.jpg</a> <span class="unimportant">(14.02 KB, 184x184, <span class="postfilename">1517546979260.jpg</span>)</span></p><a href="/feb/src/1548993666156.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1548993666156.png" style="width:184px;height:184px" alt="" /></a></div>    </div>    <div class="post op" id="op_2" ><p class="intro"><input type="checkbox" class="delete" name="delete_2" id="delete_2" /><label for="delete_2"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:01:06Z">02/01/19 (Fri) 04:01:06</time></label>&nbsp;<a class="post_no" id="post_no_2" onclick="highlightReply(2)" href="/feb/res/2#2">No.</a><a class="post_no" onclick="citeReply(2)" href="/feb/res/2#q2">2</a><a href="/feb/res/2">[Reply]</a></p><div class="body">仕方がない</div></div><div class="post reply" id="reply_23"><p class="intro"><input type="checkbox" class="delete" name="delete_23" id="delete_23" /><label for="delete_23"><span class="name">Anonymous</span> <time datetime="2019-02-01T23:01:54Z">02/01/19 (Fri) 23:01:54</time></label>&nbsp;<a class="post_no" id="post_no_23" onclick="highlightReply(23)" href="/feb/res/2#23">No.</a><a class="post_no" onclick="citeReply(23)" href="/feb/res/2#q23">23</a></p>        <div class="files">    </div>         <div class="body" >uSm</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_1" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993550211.png">1548993550211.png</a> <span class="unimportant">(94.61 KB, 626x348, <span class="postfilename">1367548412088.png</span>)</span></p><a href="/feb/src/1548993550211.png" target="_blank"><img class="post-image" src="/feb/thumb/1548993550211.png" style="width:255px;height:142px" alt="" /></a></div>    </div>    <div class="post op" id="op_1" ><p class="intro"><input type="checkbox" class="delete" name="delete_1" id="delete_1" /><label for="delete_1"><span class="name">Anonymous</span> <time datetime="2019-02-01T03:59:10Z">02/01/19 (Fri) 03:59:10</time></label>&nbsp;<a class="post_no" id="post_no_1" onclick="highlightReply(1)" href="/feb/res/1#1">No.</a><a class="post_no" onclick="citeReply(1)" href="/feb/res/1#q1">1</a><a href="/feb/res/1">[Reply]</a></p><div class="body">suck my cock dude</div></div><div class="post reply" id="reply_3"><p class="intro"><input type="checkbox" class="delete" name="delete_3" id="delete_3" /><label for="delete_3"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:03:26Z">02/01/19 (Fri) 04:03:26</time></label>&nbsp;<a class="post_no" id="post_no_3" onclick="highlightReply(3)" href="/feb/res/1#3">No.</a><a class="post_no" onclick="citeReply(3)" href="/feb/res/1#q3">3</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993806946.png">1548993806946.png</a> <span class="unimportant">(250.34 KB, 424x598, <span class="postfilename">1487287774297.png</span>)</span></p><a href="/feb/src/1548993806946.png" target="_blank"><img class="post-image" src="/feb/thumb/1548993806946.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" ></div></div><br/><div class="post reply" id="reply_15"><p class="intro"><input type="checkbox" class="delete" name="delete_15" id="delete_15" /><label for="delete_15"><span class="name">Anonymous</span> <time datetime="2019-02-01T08:17:26Z">02/01/19 (Fri) 08:17:26</time></label>&nbsp;<a class="post_no" id="post_no_15" onclick="highlightReply(15)" href="/feb/res/1#15">No.</a><a class="post_no" onclick="citeReply(15)" href="/feb/res/1#q15">15</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549009046276.png">1549009046276.png</a> <span class="unimportant">(291.06 KB, 1108x248, <span class="postfilename">peak queue ayy.png</span>)</span></p><a href="/feb/src/1549009046276.png" target="_blank"><img class="post-image" src="/feb/thumb/1549009046276.png" style="width:175px;height:39px" alt="" /></a></div>    </div>         <div class="body" ></div></div><br/><div class="post reply" id="reply_16"><p class="intro"><input type="checkbox" class="delete" name="delete_16" id="delete_16" /><label for="delete_16"><span class="name">Anonymous</span> <time datetime="2019-02-01T08:20:04Z">02/01/19 (Fri) 08:20:04</time></label>&nbsp;<a class="post_no" id="post_no_16" onclick="highlightReply(16)" href="/feb/res/1#16">No.</a><a class="post_no" onclick="citeReply(16)" href="/feb/res/1#q16">16</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549009204027.png">1549009204027.png</a> <span class="unimportant">(60.36 KB, 424x598, <span class="postfilename">corndoggie.png</span>)</span></p><a href="/feb/src/1549009204027.png" target="_blank"><img class="post-image" src="/feb/thumb/1549009204027.png" style="width:124px;height:175px" alt="" /></a></div>    </div>         <div class="body" >carndoggy~</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_9" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548997218043.gif">1548997218043.gif</a> <span class="unimportant">(2.61 MB, 480x270, <span class="postfilename">1539824632147.gif</span>)</span></p><a href="/feb/src/1548997218043.gif" target="_blank"><img class="post-image" src="/feb/thumb/1548997218043.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_9" ><p class="intro"><input type="checkbox" class="delete" name="delete_9" id="delete_9" /><label for="delete_9"><span class="name">Anonymous</span> <time datetime="2019-02-01T05:00:18Z">02/01/19 (Fri) 05:00:18</time></label>&nbsp;<a class="post_no" id="post_no_9" onclick="highlightReply(9)" href="/feb/res/9#9">No.</a><a class="post_no" onclick="citeReply(9)" href="/feb/res/9#q9">9</a><a href="/feb/res/9">[Reply]</a></p><div class="body">Absolutely boson</div></div><div class="post reply" id="reply_12"><p class="intro"><input type="checkbox" class="delete" name="delete_12" id="delete_12" /><label for="delete_12"><span class="name">Anonymous</span> <time datetime="2019-02-01T07:39:58Z">02/01/19 (Fri) 07:39:58</time></label>&nbsp;<a class="post_no" id="post_no_12" onclick="highlightReply(12)" href="/feb/res/9#12">No.</a><a class="post_no" onclick="citeReply(12)" href="/feb/res/9#q12">12</a></p>        <div class="files">    </div>         <div class="body" >whats this board for</div></div><br/><div class="post reply" id="reply_13"><p class="intro"><input type="checkbox" class="delete" name="delete_13" id="delete_13" /><label for="delete_13"><a class="sage" href="javascript:void(0); sage"><span class="name">Anonymous</span></a> <time datetime="2019-02-01T07:46:34Z">02/01/19 (Fri) 07:46:34</time></label>&nbsp;<a class="post_no" id="post_no_13" onclick="highlightReply(13)" href="/feb/res/9#13">No.</a><a class="post_no" onclick="citeReply(13)" href="/feb/res/9#q13">13</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549007194362.png">1549007194362.png</a> <span class="unimportant">(36.56 KB, 564x559, <span class="postfilename">31028763_p0.png</span>)</span></p><a href="/feb/src/1549007194362.png" target="_blank"><img class="post-image" src="/feb/thumb/1549007194362.png" style="width:175px;height:173px" alt="" /></a></div>    </div>         <div class="body" >/qa/ nostalgia I guess? it's mostly just a joke board I made in a spur of the moment</div></div><br/><div class="post reply" id="reply_14"><p class="intro"><input type="checkbox" class="delete" name="delete_14" id="delete_14" /><label for="delete_14"><span class="name">Anonymous</span> <time datetime="2019-02-01T08:14:08Z">02/01/19 (Fri) 08:14:08</time></label>&nbsp;<a class="post_no" id="post_no_14" onclick="highlightReply(14)" href="/feb/res/9#14">No.</a><a class="post_no" onclick="citeReply(14)" href="/feb/res/9#q14">14</a></p>        <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1549008848723.jpg">1549008848723.jpg</a> <span class="unimportant">(20.26 KB, 396x255, <span class="postfilename">1492890940855.jpg</span>)</span></p><a href="/feb/src/1549008848723.jpg" target="_blank"><img class="post-image" src="/feb/thumb/1549008848723.png" style="width:175px;height:113px" alt="" /></a></div>    </div>         <div class="body" >Here's to the February revolution, my friends! *sips*</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_4" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548993831514.png">1548993831514.png</a> <span class="unimportant">(1.52 MB, 2571x4639, <span class="postfilename" title="[crossover][enoshima junko][artist- anonymous]d849f41e46289a3dead89075dded0747.png">[crossover][enoshima junko….png</span>)</span></p><a href="/feb/src/1548993831514.png" target="_blank"><img class="post-image" src="/feb/thumb/1548993831514.png" style="width:141px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_4" ><p class="intro"><input type="checkbox" class="delete" name="delete_4" id="delete_4" /><label for="delete_4"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-02-01T04:03:51Z">02/01/19 (Fri) 04:03:51</time></label>&nbsp;<a class="post_no" id="post_no_4" onclick="highlightReply(4)" href="/feb/res/4#4">No.</a><a class="post_no" onclick="citeReply(4)" href="/feb/res/4#q4">4</a><a href="/feb/res/4">[Reply]</a></p><div class="body">Hello.</div></div><div class="post reply" id="reply_7"><p class="intro"><input type="checkbox" class="delete" name="delete_7" id="delete_7" /><label for="delete_7"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:25:32Z">02/01/19 (Fri) 04:25:32</time></label>&nbsp;<a class="post_no" id="post_no_7" onclick="highlightReply(7)" href="/feb/res/4#7">No.</a><a class="post_no" onclick="citeReply(7)" href="/feb/res/4#q7">7</a></p>        <div class="files">    </div>         <div class="body" >hi<br/>I finally read through all of Danganronpa. Man, that 3 ending&hellip;</div></div><br/><div class="post reply" id="reply_8"><p class="intro"><input type="checkbox" class="delete" name="delete_8" id="delete_8" /><label for="delete_8"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-02-01T04:28:18Z">02/01/19 (Fri) 04:28:18</time></label>&nbsp;<a class="post_no" id="post_no_8" onclick="highlightReply(8)" href="/feb/res/4#8">No.</a><a class="post_no" onclick="citeReply(8)" href="/feb/res/4#q8">8</a></p>        <div class="files">    </div>         <div class="body" ><a onclick="highlightReply('7', event);" href="/feb/res/4.php#7">&gt;&gt;7</a><br/>I didn't play 3 yet. I'm replaying 1&amp;2 again.</div></div><br/><br class="clear"/><hr/></div><div class="thread" id="thread_5" data-board="feb">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/feb/src/1548994912695.png">1548994912695.png</a> <span class="unimportant">(224.63 KB, 344x407, <span class="postfilename">1498505160043.png</span>)</span></p><a href="/feb/src/1548994912695.png" target="_blank"><img class="post-image" src="/feb/thumb/1548994912695.png" style="width:216px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_5" ><p class="intro"><input type="checkbox" class="delete" name="delete_5" id="delete_5" /><label for="delete_5"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:21:52Z">02/01/19 (Fri) 04:21:52</time></label>&nbsp;<a class="post_no" id="post_no_5" onclick="highlightReply(5)" href="/feb/res/5#5">No.</a><a class="post_no" onclick="citeReply(5)" href="/feb/res/5#q5">5</a><a href="/feb/res/5">[Reply]</a></p><div class="body">Excuse me, but you seem to have made a dire mistake upon making this board. You didn't mention the specific even in history in which they defended us from the hordes of mlpol, before not leaving. It was nice up until that point, but now I've got no choice but to leave this place and give it a low 0/10.</div></div><div class="post reply" id="reply_6"><p class="intro"><input type="checkbox" class="delete" name="delete_6" id="delete_6" /><label for="delete_6"><span class="name">Anonymous</span> <time datetime="2019-02-01T04:24:27Z">02/01/19 (Fri) 04:24:27</time></label>&nbsp;<a class="post_no" id="post_no_6" onclick="highlightReply(6)" href="/feb/res/5#6">No.</a><a class="post_no" onclick="citeReply(6)" href="/feb/res/5#q6">6</a></p>        <div class="files">    </div>         <div class="body" >he only says that about 30% of the time from what I remember</div></div><br/><br class="clear"/><hr/></div>
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
		<form action="/feb/index.php" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/feb/index.php">1</a>]				 [<a class="selected">2</a>] 		 Next
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
