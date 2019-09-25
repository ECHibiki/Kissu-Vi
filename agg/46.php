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
			<img class="board_image" src="/static/banners/banner-kissu-22.jpg" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div   style="display:none" ><input   type="text"   name="text"   value="qmsSY[vpLH2P\1y@b,k_" ></div >
<div style="display:none"><input type="text" name="firstname" value="f#⚈/ ♬3}{&#81;Dt7\+d5:Y@⚒B&#118;V&#84;-s&#101;pZ$~&#93;IU;S^nhX!9&#75;[)m&#117;&lt;N(&#87;8♛&#62;x&#114;&#111;2"></div>
<input type="hidden" name="board" value="agg">
<input   name="login"   value="/[LH Ji:`!;C+6\oT&lt;8ObI|?X]d.2☨{tW5 c⚱1B=k@9(3Ng☮*}4'PQ-MV⚯0KD7usj"   type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input style="display:none" type="text" value="wd1☟7n%/e:{I&#9906;^B6⚪rg_)&#36;z&#86;h]\f@&#90;5L&gt;23t;⛊&#77;☃Y&#88;H-QF&#82;'y&#9752;NK*x9T&#91;" name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="q" value=" f♻⛭♃9/qzwZk.@h|;$LF⛡mdv,ER83W%1YIM^iU☌5☍+Ag☪T=`}⚑yc7J⛮P#b?⚤6X&amp;{Dx \4NpKHn:)"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<input name="y0kh38z9do♒sb" value="pN+&#62;8&lt;q&#71;&#47;6d☎,'F%;s&#9896;i&#65;E!R&#117;&#111;&#80;K♿S}_&#9772;&#86;(-&#99;^\{QCD~⛼&#109;⛰lx&#96;[a4&#48;.&#85;k&#98;ZW⚈&#35;*)L&#119;M&#58;|r&#9933;]2y@☪n&#38;5Y9♪&#84; j1f7&#36;3=" type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<textarea style="display:none" name="search">b☵#Y{7`9J⚴@V^6_-</textarea>
			
			
				
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
		<div class="thread" id="thread_1238" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564976585859.jpg">1564976585859.jpg</a> <span class="unimportant">(357.19 KB, 1024x1280, <span class="postfilename" title="f7ddce94dcfbfc34765a10b3ae2f9a2b.jpg">f7ddce94dcfbfc34765a10b3ae….jpg</span>)</span></p><a href="/agg/src/1564976585859.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564976585859.png" style="width:192px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1238" ><p class="intro"><input type="checkbox" class="delete" name="delete_1238" id="delete_1238" /><label for="delete_1238"><span class="name">Anonymous</span> <time datetime="2019-08-05T03:45:02Z">08/05/19 (Mon) 03:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1238" onclick="return highlightReply(1238, event)" href="/agg/res/1238#1238">No.</a><a class="post_no" onclick="return citeReply(1238)" href="/agg/res/1238#q1238">1238</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1238">[Reply]</a></p><div class="body">/what/ is dying we need to advertise in /jp/ to bring in more posters<br/><a href=http://what-ch.mooo.com/what/res/1738.html>http://what-ch.mooo.com/what/res/1738.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1237" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564931740581.png">1564931740581.png</a> <span class="unimportant">(248.31 KB, 479x444, <span class="postfilename">1564931573893.png</span>)</span></p><a href="/agg/src/1564931740581.png" target="_blank"><img class="post-image" src="/agg/thumb/1564931740581.png" style="width:240px;height:223px" alt="" /></a></div>    </div>    <div class="post op" id="op_1237" ><p class="intro"><input type="checkbox" class="delete" name="delete_1237" id="delete_1237" /><label for="delete_1237"><span class="name">Anonymous</span> <time datetime="2019-08-04T15:20:02Z">08/04/19 (Sun) 15:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1237" onclick="return highlightReply(1237, event)" href="/agg/res/1237#1237">No.</a><a class="post_no" onclick="return citeReply(1237)" href="/agg/res/1237#q1237">1237</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1237">[Reply]</a></p><div class="body">how do i get a gf like this?<br/><a href=http://what-ch.mooo.com/what/res/1729.html>http://what-ch.mooo.com/what/res/1729.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1236" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564923507408.png">1564923507408.png</a> <span class="unimportant">(440.81 KB, 1155x652, <span class="postfilename">1505967874811.png</span>)</span></p><a href="/agg/src/1564923507408.png" target="_blank"><img class="post-image" src="/agg/thumb/1564923507408.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1236" ><p class="intro"><input type="checkbox" class="delete" name="delete_1236" id="delete_1236" /><label for="delete_1236"><span class="name">Anonymous</span> <time datetime="2019-08-04T13:00:03Z">08/04/19 (Sun) 13:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1236" onclick="return highlightReply(1236, event)" href="/agg/res/1236#1236">No.</a><a class="post_no" onclick="return citeReply(1236)" href="/agg/res/1236#q1236">1236</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1236">[Reply]</a></p><div class="body">Incels must forego forced HRT and transition<br/><a href=http://what-ch.mooo.com/what/res/1721.html>http://what-ch.mooo.com/what/res/1721.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1235" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564922081024.jpg">1564922081024.jpg</a> <span class="unimportant">(151.17 KB, 1600x1400, <span class="postfilename" title="__hime_and_suguri_acceleration_of_suguri_2_and_etc_drawn_by_kurouniwa__bb8eec9986046744404cab805926132c.jpg">__hime_and_suguri_accelera….jpg</span>)</span></p><a href="/agg/src/1564922081024.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564922081024.png" style="width:255px;height:223px" alt="" /></a></div>    </div>    <div class="post op" id="op_1235" ><p class="intro"><input type="checkbox" class="delete" name="delete_1235" id="delete_1235" /><label for="delete_1235"><span class="name">Anonymous</span> <time datetime="2019-08-04T12:35:05Z">08/04/19 (Sun) 12:35:05</time></label>&nbsp;<a class="post_no" id="post_no_1235" onclick="return highlightReply(1235, event)" href="/agg/res/1235#1235">No.</a><a class="post_no" onclick="return citeReply(1235)" href="/agg/res/1235#q1235">1235</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1235">[Reply]</a></p><div class="body">Sugu has soft feet<br/><a href=https://kissu.moe/qa/res/4595.html>https://kissu.moe/qa/res/4595.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1234" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564921880455.jpg">1564921880455.jpg</a> <span class="unimportant">(646.8 KB, 750x1051, <span class="postfilename" title="B8FE611E-6BB8-44EA-912B-9C109F78D0CD.jpg">B8FE611E-6BB8-44EA-912B-9C….jpg</span>)</span></p><a href="/agg/src/1564921880455.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564921880455.png" style="width:172px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1234" ><p class="intro"><input type="checkbox" class="delete" name="delete_1234" id="delete_1234" /><label for="delete_1234"><span class="name">Anonymous</span> <time datetime="2019-08-04T12:35:02Z">08/04/19 (Sun) 12:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1234" onclick="return highlightReply(1234, event)" href="/agg/res/1234#1234">No.</a><a class="post_no" onclick="return citeReply(1234)" href="/agg/res/1234#q1234">1234</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1234">[Reply]</a></p><div class="body">whatmin on suicide watch<br/><a href=http://what-ch.mooo.com/what/res/1720.html>http://what-ch.mooo.com/what/res/1720.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1233" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564915676928.jpg">1564915676928.jpg</a> <span class="unimportant">(169.14 KB, 800x1200, <span class="postfilename" title="730d36faa72b999e11371b67688fa9e9.jpg">730d36faa72b999e11371b6768….jpg</span>)</span></p><a href="/agg/src/1564915676928.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564915676928.png" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1233" ><p class="intro"><input type="checkbox" class="delete" name="delete_1233" id="delete_1233" /><label for="delete_1233"><span class="name">Anonymous</span> <time datetime="2019-08-04T10:50:03Z">08/04/19 (Sun) 10:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1233" onclick="return highlightReply(1233, event)" href="/agg/res/1233#1233">No.</a><a class="post_no" onclick="return citeReply(1233)" href="/agg/res/1233#q1233">1233</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1233">[Reply]</a></p><div class="body"><span class="quote">    &gt;Go to mall to buy burger</span><br/><span class="quote">    &gt;Get shot</span><br/><span class="quote">    &gt;Go to doctor and he takes out bullet</span><br/><span class="quote">    &gt;"That will cost $300,000 plus tip"</span><br/><span class="quote">    &gt;Can&#39;t pay</span><br/><span class="quote">    &gt;Doctor shoots the bullet back in</span><br/><span class="quote">    &gt;Go to church to pray before I&#39;m bleed to death from bullet</span><br/><span class="quote">    &gt;Get shot again</span><br/><span class="quote">    &gt;Go to computer</span><br/><span class="quote">    &gt;On my last breaths, post on 4chan, "at least I am free..."</span><br/><a href=http://what-ch.mooo.com/what/res/1716.html>http://what-ch.mooo.com/what/res/1716.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1232" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564906073925.jpeg">1564906073925.jpeg</a> <span class="unimportant">(50.86 KB, 474x343, <span class="postfilename">proxy.duckduckgo.com.jpeg</span>)</span></p><a href="/agg/src/1564906073925.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1564906073925.png" style="width:240px;height:174px" alt="" /></a></div>    </div>    <div class="post op" id="op_1232" ><p class="intro"><input type="checkbox" class="delete" name="delete_1232" id="delete_1232" /><label for="delete_1232"><span class="name">Anonymous</span> <time datetime="2019-08-04T08:10:03Z">08/04/19 (Sun) 08:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1232" onclick="return highlightReply(1232, event)" href="/agg/res/1232#1232">No.</a><a class="post_no" onclick="return citeReply(1232)" href="/agg/res/1232#q1232">1232</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1232">[Reply]</a></p><div class="body"><a href="https://boards.4channel.org/int/thread/109357592" rel="nofollow" target="_blank">https://boards.4channel.org/int/thread/109357592</a><br/><br/>I&#39;ve still got it<br/><a href=http://what-ch.mooo.com/what/res/1712.html>http://what-ch.mooo.com/what/res/1712.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1231" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564903634145.jpg">1564903634145.jpg</a> <span class="unimportant">(246.84 KB, 1920x1080, <span class="postfilename">misc 1448.jpg</span>)</span></p><a href="/agg/src/1564903634145.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564903634145.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1231" ><p class="intro"><input type="checkbox" class="delete" name="delete_1231" id="delete_1231" /><label for="delete_1231"><span class="name">Anonymous</span> <time datetime="2019-08-04T07:30:03Z">08/04/19 (Sun) 07:30:03</time></label>&nbsp;<a class="post_no" id="post_no_1231" onclick="return highlightReply(1231, event)" href="/agg/res/1231#1231">No.</a><a class="post_no" onclick="return citeReply(1231)" href="/agg/res/1231#q1231">1231</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1231">[Reply]</a></p><div class="body">Post ending in dubs decides what we raid /jp/ with<br/><a href=http://what-ch.mooo.com/what/res/1706.html>http://what-ch.mooo.com/what/res/1706.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1230" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564900956160.jpg">1564900956160.jpg</a> <span class="unimportant">(198.15 KB, 1500x844, <span class="postfilename">1564284250701.jpg</span>)</span></p><a href="/agg/src/1564900956160.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564900956160.png" style="width:240px;height:136px" alt="" /></a></div>    </div>    <div class="post op" id="op_1230" ><p class="intro"><input type="checkbox" class="delete" name="delete_1230" id="delete_1230" /><label for="delete_1230"><span class="name">Anonymous</span> <time datetime="2019-08-04T06:45:03Z">08/04/19 (Sun) 06:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1230" onclick="return highlightReply(1230, event)" href="/agg/res/1230#1230">No.</a><a class="post_no" onclick="return citeReply(1230)" href="/agg/res/1230#q1230">1230</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1230">[Reply]</a></p><div class="body">which of you guys created the /what/ threads on 4/jp/<br/><a href=http://what-ch.mooo.com/what/res/1703.html>http://what-ch.mooo.com/what/res/1703.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1229" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564890418288.jpg">1564890418288.jpg</a> <span class="unimportant">(250.12 KB, 1784x1216, <span class="postfilename">1533240083055.jpg</span>)</span></p><a href="/agg/src/1564890418288.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564890418288.png" style="width:240px;height:164px" alt="" /></a></div>    </div>    <div class="post op" id="op_1229" ><p class="intro"><input type="checkbox" class="delete" name="delete_1229" id="delete_1229" /><label for="delete_1229"><span class="name">Anonymous</span> <time datetime="2019-08-04T03:50:03Z">08/04/19 (Sun) 03:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1229" onclick="return highlightReply(1229, event)" href="/agg/res/1229#1229">No.</a><a class="post_no" onclick="return citeReply(1229)" href="/agg/res/1229#q1229">1229</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1229">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1697.html>http://what-ch.mooo.com/what/res/1697.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1228" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564880019191.jpg">1564880019191.jpg</a> <span class="unimportant">(13.98 KB, 189x267, <span class="postfilename">index.jpg</span>)</span></p><a href="/agg/src/1564880019191.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564880019191.png" style="width:181px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1228" ><p class="intro"><input type="checkbox" class="delete" name="delete_1228" id="delete_1228" /><label for="delete_1228"><span class="name">Doremy Sweet</span> <time datetime="2019-08-04T00:55:03Z">08/04/19 (Sun) 00:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1228" onclick="return highlightReply(1228, event)" href="/agg/res/1228#1228">No.</a><a class="post_no" onclick="return citeReply(1228)" href="/agg/res/1228#q1228">1228</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1228">[Reply]</a></p><div class="body">happy birthday smol honks!<br/><a href=https://kakashi-nenpo.com/jp/res/32573.html>https://kakashi-nenpo.com/jp/res/32573.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1227" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564879957595.png">1564879957595.png</a> <span class="unimportant">(502.71 KB, 1000x1556, <span class="postfilename" title="8ddbd7f38da18cc3364e680069e001d1.png">8ddbd7f38da18cc3364e680069….png</span>)</span></p><a href="/agg/src/1564879957595.png" target="_blank"><img class="post-image" src="/agg/thumb/1564879957595.png" style="width:155px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1227" ><p class="intro"><input type="checkbox" class="delete" name="delete_1227" id="delete_1227" /><label for="delete_1227"><span class="name">Anonymous</span> <time datetime="2019-08-04T00:55:02Z">08/04/19 (Sun) 00:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1227" onclick="return highlightReply(1227, event)" href="/agg/res/1227#1227">No.</a><a class="post_no" onclick="return citeReply(1227)" href="/agg/res/1227#q1227">1227</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1227">[Reply]</a></p><div class="body">How do you get a gf like her?<br/><a href=http://what-ch.mooo.com/what/res/1695.html>http://what-ch.mooo.com/what/res/1695.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1226" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564857294759.jpg">1564857294759.jpg</a> <span class="unimportant">(1.99 MB, 2880x2160, <span class="postfilename">1564828827879.jpg</span>)</span></p><a href="/agg/src/1564857294759.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564857294759.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1226" ><p class="intro"><input type="checkbox" class="delete" name="delete_1226" id="delete_1226" /><label for="delete_1226"><span class="name">Anonymous</span> <time datetime="2019-08-03T18:35:02Z">08/03/19 (Sat) 18:35:02</time></label>&nbsp;<a class="post_no" id="post_no_1226" onclick="return highlightReply(1226, event)" href="/agg/res/1226#1226">No.</a><a class="post_no" onclick="return citeReply(1226)" href="/agg/res/1226#q1226">1226</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1226">[Reply]</a></p><div class="body">Rate my room<br/><a href=http://what-ch.mooo.com/what/res/1683.html>http://what-ch.mooo.com/what/res/1683.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1225" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564856268464.jpg">1564856268464.jpg</a> <span class="unimportant">(32.9 KB, 384x392, <span class="postfilename">IMG_20190803_065911.jpg</span>)</span></p><a href="/agg/src/1564856268464.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564856268464.png" style="width:236px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1225" ><p class="intro"><input type="checkbox" class="delete" name="delete_1225" id="delete_1225" /><label for="delete_1225"><span class="name">Anonymous</span> <time datetime="2019-08-03T18:20:03Z">08/03/19 (Sat) 18:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1225" onclick="return highlightReply(1225, event)" href="/agg/res/1225#1225">No.</a><a class="post_no" onclick="return citeReply(1225)" href="/agg/res/1225#q1225">1225</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1225">[Reply]</a></p><div class="body"><span class="quote">&gt;whatmin</span><br/><a href=http://what-ch.mooo.com/what/res/1681.html>http://what-ch.mooo.com/what/res/1681.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1224" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564843266949.jpeg">1564843266949.jpeg</a> <span class="unimportant">(121.87 KB, 762x825, <span class="postfilename">aa08e0a1d3e27ed5.jpeg</span>)</span></p><a href="/agg/src/1564843266949.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1564843266949.png" style="width:235px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1224" ><p class="intro"><input type="checkbox" class="delete" name="delete_1224" id="delete_1224" /><label for="delete_1224"><span class="name">Anonymous</span> <time datetime="2019-08-03T14:45:05Z">08/03/19 (Sat) 14:45:05</time></label>&nbsp;<a class="post_no" id="post_no_1224" onclick="return highlightReply(1224, event)" href="/agg/res/1224#1224">No.</a><a class="post_no" onclick="return citeReply(1224)" href="/agg/res/1224#q1224">1224</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1224">[Reply]</a></p><div class="body">I got banned earlier unjustly on this pisshole and honestly that was the most interesting thing that happened to me on this site. Sayonara losers<br/><a href=https://kissu.moe/qa/res/4588.html>https://kissu.moe/qa/res/4588.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1223" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564816864086.mp4">1564816864086.mp4</a> <span class="unimportant">(3.48 MB, 224x400, <span class="postfilename">68153339.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1564816864086.mp4&amp;t=68153339.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1564816864086.jpg" style="width:134px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1223" ><p class="intro"><input type="checkbox" class="delete" name="delete_1223" id="delete_1223" /><label for="delete_1223"><span class="name">Anonymous</span> <time datetime="2019-08-03T07:25:07Z">08/03/19 (Sat) 07:25:07</time></label>&nbsp;<a class="post_no" id="post_no_1223" onclick="return highlightReply(1223, event)" href="/agg/res/1223#1223">No.</a><a class="post_no" onclick="return citeReply(1223)" href="/agg/res/1223#q1223">1223</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1223">[Reply]</a></p><div class="body"><span class="quote">&gt;/t-p/</span><br/><a href=http://what-ch.mooo.com/what/res/1672.html>http://what-ch.mooo.com/what/res/1672.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1222" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564804547830.webm">1564804547830.webm</a> <span class="unimportant">(590.4 KB, 598x720, <span class="postfilename">BraveCourageousFruitfly.webm</span>)</span></p><a href="/player.php?v=/agg/src/1564804547830.webm&amp;t=BraveCourageousFruitfly.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1564804547830.jpg" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1222" ><p class="intro"><input type="checkbox" class="delete" name="delete_1222" id="delete_1222" /><label for="delete_1222"><span class="name">Anonymous</span> <time datetime="2019-08-03T04:00:03Z">08/03/19 (Sat) 04:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1222" onclick="return highlightReply(1222, event)" href="/agg/res/1222#1222">No.</a><a class="post_no" onclick="return citeReply(1222)" href="/agg/res/1222#q1222">1222</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1222">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1666.html>http://what-ch.mooo.com/what/res/1666.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1221" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564784408492.jpg">1564784408492.jpg</a> <span class="unimportant">(318.83 KB, 1310x640, <span class="postfilename">japanesefood.jpg</span>)</span></p><a href="/agg/src/1564784408492.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564784408492.png" style="width:240px;height:118px" alt="" /></a></div>    </div>    <div class="post op" id="op_1221" ><p class="intro"><input type="checkbox" class="delete" name="delete_1221" id="delete_1221" /><label for="delete_1221"><span class="name">Anonymous</span> <time datetime="2019-08-02T22:25:03Z">08/02/19 (Fri) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1221" onclick="return highlightReply(1221, event)" href="/agg/res/1221#1221">No.</a><a class="post_no" onclick="return citeReply(1221)" href="/agg/res/1221#q1221">1221</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1221">[Reply]</a></p><div class="body">You have to choose one<br/><a href=http://what-ch.mooo.com/what/res/1660.html>http://what-ch.mooo.com/what/res/1660.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1220" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564771863974.jpg">1564771863974.jpg</a> <span class="unimportant">(88.31 KB, 691x930, <span class="postfilename" title="33244a50903b0f84ec633d53ee3ca917.jpg">33244a50903b0f84ec633d53ee….jpg</span>)</span></p><a href="/agg/src/1564771863974.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1564771863974.png" style="width:179px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1220" ><p class="intro"><input type="checkbox" class="delete" name="delete_1220" id="delete_1220" /><label for="delete_1220"><span class="name">Anonymous</span> <time datetime="2019-08-02T18:55:02Z">08/02/19 (Fri) 18:55:02</time></label>&nbsp;<a class="post_no" id="post_no_1220" onclick="return highlightReply(1220, event)" href="/agg/res/1220#1220">No.</a><a class="post_no" onclick="return citeReply(1220)" href="/agg/res/1220#q1220">1220</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1220">[Reply]</a></p><div class="body">    How many dicks have you sucked?<br/><a href=http://what-ch.mooo.com/what/res/1652.html>http://what-ch.mooo.com/what/res/1652.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1219" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1564764946799.webm">1564764946799.webm</a> <span class="unimportant">(4.86 MB, 640x360, <span class="postfilename">Christmas #Swag Video.webm</span>)</span></p><a href="/player.php?v=/agg/src/1564764946799.webm&amp;t=Christmas%20%23Swag%20Video.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1564764946799.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1219" ><p class="intro"><input type="checkbox" class="delete" name="delete_1219" id="delete_1219" /><label for="delete_1219"><span class="name">Anonymous</span> <time datetime="2019-08-02T17:00:04Z">08/02/19 (Fri) 17:00:04</time></label>&nbsp;<a class="post_no" id="post_no_1219" onclick="return highlightReply(1219, event)" href="/agg/res/1219#1219">No.</a><a class="post_no" onclick="return citeReply(1219)" href="/agg/res/1219#q1219">1219</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1219">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/1642.html>http://what-ch.mooo.com/what/res/1642.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/45" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a href="/agg/40">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a class="selected">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/47" method="get"><input type="submit" value="Next" /></form>
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