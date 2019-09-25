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
			<img class="board_image" src="/static/banners/banner-kissu-11.png" alt="" />	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="text" value="&#113;&#109;sSY&#91;vpLH&#50;&#80;\1y@b,k_" >
<div style="display:none"><input type="text" name="firstname" value="f#⚈&#47; ♬3}{QDt7\&#43;d5:Y@&#9874;&#66;vVT&#45;&#115;&#101;pZ$~&#93;I&#85;;S&#94;&#110;hX!9&#75;[&#41;mu&lt;N(W8♛&#62;&#120;ro&#50;"></div>
<input type="hidden" name="board" value="agg">
<input  name="login"  value="/[&#76;&#72; &#74;i&#58;&#96;!&#59;&#67;+6&#92;&#111;&#84;&lt;8Ob&#73;|?X&#93;d.2☨{&#116;W5 c&#9905;1&#66;=k@&#57;(3N&#103;☮*&#125;4'P&#81;-MV&#9903;0&#75;D7&#117;sj"  type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div   style="display:none"><input   type="text"   name="message"   value="wd1☟7n%/e:{I⚲^B6⚪rg_)$zVh]\f@Z5L&gt;23t;⛊M☃YXH-QFR'y☘NK*x9T["></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none" ><input type="text" name="q" value=" f♻⛭♃9/qzw&#90;k.&#64;h|&#59;&#36;&#76;F⛡mdv,E&#82;&#56;3W%1YIM^iU☌5☍&#43;Ag☪T=`}&#9873;&#121;c&#55;J⛮P#b?&#9892;6X&amp;{Dx&#32;&#92;4&#78;&#112;&#75;Hn&#58;)" ></div >
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="y0kh38z9do♒sb" value="&#112;N&#43;&gt;8&lt;qG&#47;&#54;d☎,&#39;F%;s⚨iAE!&#82;uoPK♿S}_☬&#86;(-c^&#92;{QCD~&#9980;&#109;⛰lx&#96;[&#97;&#52;0.&#85;kbZW⚈#&#42;)Lw&#77;:|&#114;⛍]2&#121;&#64;☪n&#38;5Y&#57;&#9834;T j1f7$3&#61;">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input  type="hidden"  name="search"  value="b☵#Y{7`9J⚴@V^6_-">
			
			
				
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
		<div class="thread" id="thread_1369" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566124634495.jpg">1566124634495.jpg</a> <span class="unimportant">(282.35 KB, 750x900, <span class="postfilename" title="eb40d7503d2777ba8c5385b41f56e554.jpg">eb40d7503d2777ba8c5385b41f….jpg</span>)</span></p><a href="/agg/src/1566124634495.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566124634495.png" style="width:200px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1369" ><p class="intro"><input type="checkbox" class="delete" name="delete_1369" id="delete_1369" /><label for="delete_1369"><span class="name">Anonymous</span> <time datetime="2019-08-18T10:40:03Z">08/18/19 (Sun) 10:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1369" onclick="return highlightReply(1369, event)" href="/agg/res/1369#1369">No.</a><a class="post_no" onclick="return citeReply(1369)" href="/agg/res/1369#q1369">1369</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1369">[Reply]</a></p><div class="body">Sinon&#39;s novel sold millions.<br/><a href=http://what-ch.mooo.com/what/res/2060.html>http://what-ch.mooo.com/what/res/2060.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1368" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566121278484.png">1566121278484.png</a> <span class="unimportant">(955.33 KB, 1000x800, <span class="postfilename" title="daf1481a8c8d6b8a93d24accde4d22eb.png">daf1481a8c8d6b8a93d24accde….png</span>)</span></p><a href="/agg/src/1566121278484.png" target="_blank"><img class="post-image" src="/agg/thumb/1566121278484.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_1368" ><p class="intro"><input type="checkbox" class="delete" name="delete_1368" id="delete_1368" /><label for="delete_1368"><span class="name">Anonymous</span> <time datetime="2019-08-18T09:45:03Z">08/18/19 (Sun) 09:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1368" onclick="return highlightReply(1368, event)" href="/agg/res/1368#1368">No.</a><a class="post_no" onclick="return citeReply(1368)" href="/agg/res/1368#q1368">1368</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1368">[Reply]</a></p><div class="body"><a href="https://desuarchive.org/qa/thread/602489/#602512" rel="nofollow" target="_blank">https://desuarchive.org/qa/thread/602489/#602512</a><br/>I like to think that this was true, that we really did create something great and positive. Though people rarely talked about their boards in a manner that wasn&#39;t just /q/ whining and "mods do this", there were a lot of people having fun and it replaced the obnoxious, horrendous culture that was 2016 /qa/.<br/>I still wonder if this guy ever got to see it. And yes, I did this bookmarked<br/><a href=https://kissu.moe/qa/res/4993.html>https://kissu.moe/qa/res/4993.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1367" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566114433793.jpg">1566114433793.jpg</a> <span class="unimportant">(766.38 KB, 1853x2489, <span class="postfilename">1562249722221.jpg</span>)</span></p><a href="/agg/src/1566114433793.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566114433793.png" style="width:179px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1367" ><p class="intro"><input type="checkbox" class="delete" name="delete_1367" id="delete_1367" /><label for="delete_1367"><span class="name">Anonymous</span> <time datetime="2019-08-18T07:50:05Z">08/18/19 (Sun) 07:50:05</time></label>&nbsp;<a class="post_no" id="post_no_1367" onclick="return highlightReply(1367, event)" href="/agg/res/1367#1367">No.</a><a class="post_no" onclick="return citeReply(1367)" href="/agg/res/1367#q1367">1367</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1367">[Reply]</a></p><div class="body"><a href="https://www.youtube.com/watch?v=O1z6CrBtsUo" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=O1z6CrBtsUo</a><br/><br/>That&#39;s nice<br/><a href=http://what-ch.mooo.com/what/res/2056.html>http://what-ch.mooo.com/what/res/2056.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1366" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566108929436.mp4">1566108929436.mp4</a> <span class="unimportant">(22.63 MB, 1280x720, <span class="postfilename">Sailor Henshin.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1566108929436.mp4&amp;t=Sailor%20Henshin.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566108929436.jpg" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1366" ><p class="intro"><input type="checkbox" class="delete" name="delete_1366" id="delete_1366" /><label for="delete_1366"><span class="name">Anonymous</span> <time datetime="2019-08-18T06:20:09Z">08/18/19 (Sun) 06:20:09</time></label>&nbsp;<a class="post_no" id="post_no_1366" onclick="return highlightReply(1366, event)" href="/agg/res/1366#1366">No.</a><a class="post_no" onclick="return citeReply(1366)" href="/agg/res/1366#q1366">1366</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1366">[Reply]</a></p><div class="body">what are your favorite henshins<br/><a href=https://kissu.moe/qa/res/4965.html>https://kissu.moe/qa/res/4965.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1365" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566108065324.jpeg">1566108065324.jpeg</a> <span class="unimportant">(737.67 KB, 1242x1515, <span class="postfilename" title="82FC3BA8-E6D2-40A0-924E-ACFEF47E3BD1.jpeg">82FC3BA8-E6D2-40A0-924E-A….jpeg</span>)</span></p><a href="/agg/src/1566108065324.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1566108065324.png" style="width:209px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1365" ><p class="intro"><input type="checkbox" class="delete" name="delete_1365" id="delete_1365" /><label for="delete_1365"><span class="subject">*✶⭑ OEKAKI *✶⭑</span> <span class="name">jevin</span> <time datetime="2019-08-18T06:05:04Z">08/18/19 (Sun) 06:05:04</time></label>&nbsp;<a class="post_no" id="post_no_1365" onclick="return highlightReply(1365, event)" href="/agg/res/1365#1365">No.</a><a class="post_no" onclick="return citeReply(1365)" href="/agg/res/1365#q1365">1365</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1365">[Reply]</a></p><div class="body">i dublel checc&#39;d 2 see if kissu had an oekaki boarde or thredde nd i dint find anything so i&#39;m posting this<br/><a href=https://kissu.moe/qa/res/4961.html>https://kissu.moe/qa/res/4961.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1364" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566106696670.jpg">1566106696670.jpg</a> <span class="unimportant">(195.49 KB, 1920x1080, <span class="postfilename" title="[RESubs] Higurashi no Naku Koro Ni Kai - 13 (BD 1920x1080 AC3) [2E31B179].mkv_snapshot_02.02_[2019.06.29_20.48.47].jpg">[RESubs] Higurashi no Naku….jpg</span>)</span></p><a href="/agg/src/1566106696670.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566106696670.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1364" ><p class="intro"><input type="checkbox" class="delete" name="delete_1364" id="delete_1364" /><label for="delete_1364"><span class="name">Anonymous</span> <time datetime="2019-08-18T05:40:02Z">08/18/19 (Sun) 05:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1364" onclick="return highlightReply(1364, event)" href="/agg/res/1364#1364">No.</a><a class="post_no" onclick="return citeReply(1364)" href="/agg/res/1364#q1364">1364</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1364">[Reply]</a></p><div class="body">The time has come to read a VN together gain! This time the thread won&#39;t be deleted! <br/>The thought is that it generally needs to be a short one, but apart from that I&#39;m not sure if there&#39;s any other preferences people have<br/><a href=https://kissu.moe/qa/res/4954.html>https://kissu.moe/qa/res/4954.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1363" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566105435299.png">1566105435299.png</a> <span class="unimportant">(1.69 MB, 1280x720, <span class="postfilename" title="[Asenshi] Yuru Camp - 02 [10644618].mkv_snapshot_16.41_[2018.02.01_02.54.03].png">[Asenshi] Yuru Camp - 02 [….png</span>)</span></p><a href="/agg/src/1566105435299.png" target="_blank"><img class="post-image" src="/agg/thumb/1566105435299.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1363" ><p class="intro"><input type="checkbox" class="delete" name="delete_1363" id="delete_1363" /><label for="delete_1363"><span class="name">Anonymous</span> <time datetime="2019-08-18T05:20:03Z">08/18/19 (Sun) 05:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1363" onclick="return highlightReply(1363, event)" href="/agg/res/1363#1363">No.</a><a class="post_no" onclick="return citeReply(1363)" href="/agg/res/1363#q1363">1363</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1363">[Reply]</a></p><div class="body">AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHHHHHHHHH<br/><a href=https://kissu.moe/qa/res/4952.html>https://kissu.moe/qa/res/4952.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1362" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566101453924.png">1566101453924.png</a> <span class="unimportant">(1.81 MB, 1920x1080, <span class="postfilename">1565932293506.png</span>)</span></p><a href="/agg/src/1566101453924.png" target="_blank"><img class="post-image" src="/agg/thumb/1566101453924.png" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1362" ><p class="intro"><input type="checkbox" class="delete" name="delete_1362" id="delete_1362" /><label for="delete_1362"><span class="name">Anonymous</span> <time datetime="2019-08-18T04:15:03Z">08/18/19 (Sun) 04:15:03</time></label>&nbsp;<a class="post_no" id="post_no_1362" onclick="return highlightReply(1362, event)" href="/agg/res/1362#1362">No.</a><a class="post_no" onclick="return citeReply(1362)" href="/agg/res/1362#q1362">1362</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1362">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2048.html>http://what-ch.mooo.com/what/res/2048.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1361" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566099127217.png">1566099127217.png</a> <span class="unimportant">(43.38 KB, 275x266, <span class="postfilename">thinkin bout drawin.png</span>)</span></p><a href="/agg/src/1566099127217.png" target="_blank"><img class="post-image" src="/agg/thumb/1566099127217.png" style="width:255px;height:247px" alt="" /></a></div>    </div>    <div class="post op" id="op_1361" ><p class="intro"><input type="checkbox" class="delete" name="delete_1361" id="delete_1361" /><label for="delete_1361"><span class="subject">better when theyre soft</span> <a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-18T03:35:03Z">08/18/19 (Sun) 03:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1361" onclick="return highlightReply(1361, event)" href="/agg/res/1361#1361">No.</a><a class="post_no" onclick="return citeReply(1361)" href="/agg/res/1361#q1361">1361</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1361">[Reply]</a></p><div class="body">crumching on some wise brand cheez doodles baked puffs cheddar flavor<br/>best food in the world<br/><a href=https://kissu.moe/qa/res/4948.html>https://kissu.moe/qa/res/4948.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1360" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566088569025.png">1566088569025.png</a> <span class="unimportant">(126.2 KB, 295x364, <span class="postfilename" title="T2kki6XxdaXXXXXXXX_!!54506797.png">T2kki6XxdaXXXXXXXX_!!54506….png</span>)</span></p><a href="/agg/src/1566088569025.png" target="_blank"><img class="post-image" src="/agg/thumb/1566088569025.png" style="width:207px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1360" ><p class="intro"><input type="checkbox" class="delete" name="delete_1360" id="delete_1360" /><label for="delete_1360"><span class="name">Anonymous</span> <time datetime="2019-08-18T00:40:03Z">08/18/19 (Sun) 00:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1360" onclick="return highlightReply(1360, event)" href="/agg/res/1360#1360">No.</a><a class="post_no" onclick="return citeReply(1360)" href="/agg/res/1360#q1360">1360</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1360">[Reply]</a></p><div class="body">gib gud dicsord servers uwu<br/><a href=https://kissu.moe/qa/res/4937.html>https://kissu.moe/qa/res/4937.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1359" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566088106684.jpg">1566088106684.jpg</a> <span class="unimportant">(165.38 KB, 520x463, <span class="postfilename">1519556297889.jpg</span>)</span></p><a href="/agg/src/1566088106684.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566088106684.png" style="width:255px;height:228px" alt="" /></a></div>    </div>    <div class="post op" id="op_1359" ><p class="intro"><input type="checkbox" class="delete" name="delete_1359" id="delete_1359" /><label for="delete_1359"><span class="name">Anonymous</span> <time datetime="2019-08-18T00:30:04Z">08/18/19 (Sun) 00:30:04</time></label>&nbsp;<a class="post_no" id="post_no_1359" onclick="return highlightReply(1359, event)" href="/agg/res/1359#1359">No.</a><a class="post_no" onclick="return citeReply(1359)" href="/agg/res/1359#q1359">1359</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1359">[Reply]</a></p><div class="body">Is there anyone that can provide Remi with the knowledge she seeks? Even Patchy was unable to<br/><a href=https://kissu.moe/qa/res/4934.html>https://kissu.moe/qa/res/4934.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1358" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566085464810.png">1566085464810.png</a> <span class="unimportant">(87.11 KB, 504x378, <span class="postfilename">thinkin bout jelly.png</span>)</span></p><a href="/agg/src/1566085464810.png" target="_blank"><img class="post-image" src="/agg/thumb/1566085464810.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1358" ><p class="intro"><input type="checkbox" class="delete" name="delete_1358" id="delete_1358" /><label for="delete_1358"><a class="noko" href="javascript:void(0); %20noko"><span class="name">Anonymous</span></a> <time datetime="2019-08-17T23:45:03Z">08/17/19 (Sat) 23:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1358" onclick="return highlightReply(1358, event)" href="/agg/res/1358#1358">No.</a><a class="post_no" onclick="return citeReply(1358)" href="/agg/res/1358#q1358">1358</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1358">[Reply]</a></p><div class="body">dug up muh old bike in an attempt to go outside more cause the world is beautiful and i wanna see it ya know<br/>crashed into another cyclist and that freakin sucked but whatever<br/>bought a bike lock and chain for 25 bucks<br/><a href=https://kissu.moe/qa/res/4918.html>https://kissu.moe/qa/res/4918.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1357" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566066087431.png">1566066087431.png</a> <span class="unimportant">(3.3 KB, 245x116, <span class="postfilename">cringe.png</span>)</span></p><a href="/agg/src/1566066087431.png" target="_blank"><img class="post-image" src="/agg/thumb/1566066087431.png" style="width:240px;height:114px" alt="" /></a></div>    </div>    <div class="post op" id="op_1357" ><p class="intro"><input type="checkbox" class="delete" name="delete_1357" id="delete_1357" /><label for="delete_1357"><span class="name">Anonymous</span> <time datetime="2019-08-17T18:25:03Z">08/17/19 (Sat) 18:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1357" onclick="return highlightReply(1357, event)" href="/agg/res/1357#1357">No.</a><a class="post_no" onclick="return citeReply(1357)" href="/agg/res/1357#q1357">1357</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1357">[Reply]</a></p><div class="body">Why would anyone use this?<br/><a href=http://what-ch.mooo.com/what/res/2033.html>http://what-ch.mooo.com/what/res/2033.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1356" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566057766530.jpg">1566057766530.jpg</a> <span class="unimportant">(197.7 KB, 900x882, <span class="postfilename">kiniro mosaic 0073.jpg</span>)</span></p><a href="/agg/src/1566057766530.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566057766530.png" style="width:240px;height:236px" alt="" /></a></div>    </div>    <div class="post op" id="op_1356" ><p class="intro"><input type="checkbox" class="delete" name="delete_1356" id="delete_1356" /><label for="delete_1356"><span class="name">Anonymous</span> <time datetime="2019-08-17T16:05:03Z">08/17/19 (Sat) 16:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1356" onclick="return highlightReply(1356, event)" href="/agg/res/1356#1356">No.</a><a class="post_no" onclick="return citeReply(1356)" href="/agg/res/1356#q1356">1356</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1356">[Reply]</a></p><div class="body"> i&#39;m fapping my little boycock right now<br/><a href=http://what-ch.mooo.com/what/res/2028.html>http://what-ch.mooo.com/what/res/2028.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1355" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566055553532.png">1566055553532.png</a> <span class="unimportant">(1.24 MB, 1307x1618, <span class="postfilename">suwako eating a za.png</span>)</span></p><a href="/agg/src/1566055553532.png" target="_blank"><img class="post-image" src="/agg/thumb/1566055553532.png" style="width:206px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1355" ><p class="intro"><input type="checkbox" class="delete" name="delete_1355" id="delete_1355" /><label for="delete_1355"><span class="name">Anonymous</span> <time datetime="2019-08-17T15:30:02Z">08/17/19 (Sat) 15:30:02</time></label>&nbsp;<a class="post_no" id="post_no_1355" onclick="return highlightReply(1355, event)" href="/agg/res/1355#1355">No.</a><a class="post_no" onclick="return citeReply(1355)" href="/agg/res/1355#q1355">1355</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1355">[Reply]</a></p><div class="body">suwako eating a &#39;za<br/><a href=https://kissu.moe/qa/res/4876.html>https://kissu.moe/qa/res/4876.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1354" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566025694932.webm">1566025694932.webm</a> <span class="unimportant">(2.96 MB, 960x540, <span class="postfilename">ZERO BUDGET WORKS.webm</span>)</span></p><a href="/player.php?v=/agg/src/1566025694932.webm&amp;t=ZERO%20BUDGET%20WORKS.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1566025694932.jpg" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1354" ><p class="intro"><input type="checkbox" class="delete" name="delete_1354" id="delete_1354" /><label for="delete_1354"><span class="name">Anonymous</span> <time datetime="2019-08-17T07:10:03Z">08/17/19 (Sat) 07:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1354" onclick="return highlightReply(1354, event)" href="/agg/res/1354#1354">No.</a><a class="post_no" onclick="return citeReply(1354)" href="/agg/res/1354#q1354">1354</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1354">[Reply]</a></p><div class="body">You ever see something so amazingly terrible that it caused you to question how such a disaster was ever created?<br/><a href=https://kissu.moe/qa/res/4858.html>https://kissu.moe/qa/res/4858.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1353" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566025439334.jpeg">1566025439334.jpeg</a> <span class="unimportant">(147.78 KB, 800x566, <span class="postfilename" title="9710a182ee4dae316762ecb30398e699.jpeg">9710a182ee4dae316762ecb30….jpeg</span>)</span></p><a href="/agg/src/1566025439334.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1566025439334.png" style="width:255px;height:181px" alt="" /></a></div>    </div>    <div class="post op" id="op_1353" ><p class="intro"><input type="checkbox" class="delete" name="delete_1353" id="delete_1353" /><label for="delete_1353"><span class="name">Anonymous</span> <time datetime="2019-08-17T07:05:02Z">08/17/19 (Sat) 07:05:02</time></label>&nbsp;<a class="post_no" id="post_no_1353" onclick="return highlightReply(1353, event)" href="/agg/res/1353#1353">No.</a><a class="post_no" onclick="return citeReply(1353)" href="/agg/res/1353#q1353">1353</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1353">[Reply]</a></p><div class="body">oh shit oh shit i gotta PISSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS<br/><a href=https://kissu.moe/qa/res/4857.html>https://kissu.moe/qa/res/4857.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1352" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566011956160.png">1566011956160.png</a> <span class="unimportant">(158.06 KB, 350x996, <span class="postfilename">dolph.png</span>)</span></p><a href="/agg/src/1566011956160.png" target="_blank"><img class="post-image" src="/agg/thumb/1566011956160.png" style="width:90px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1352" ><p class="intro"><input type="checkbox" class="delete" name="delete_1352" id="delete_1352" /><label for="delete_1352"><span class="name">Anonymous</span> <time datetime="2019-08-17T03:20:05Z">08/17/19 (Sat) 03:20:05</time></label>&nbsp;<a class="post_no" id="post_no_1352" onclick="return highlightReply(1352, event)" href="/agg/res/1352#1352">No.</a><a class="post_no" onclick="return citeReply(1352)" href="/agg/res/1352#q1352">1352</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1352">[Reply]</a></p><div class="body">kissu<br/><a href=https://kissu.moe/qa/res/4837.html>https://kissu.moe/qa/res/4837.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1351" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566008453408.jpg">1566008453408.jpg</a> <span class="unimportant">(63.84 KB, 1000x1000, <span class="postfilename">piss image.jpg</span>)</span></p><a href="/agg/src/1566008453408.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1566008453408.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1351" ><p class="intro"><input type="checkbox" class="delete" name="delete_1351" id="delete_1351" /><label for="delete_1351"><span class="name">Anonymous</span> <time datetime="2019-08-17T02:25:02Z">08/17/19 (Sat) 02:25:02</time></label>&nbsp;<a class="post_no" id="post_no_1351" onclick="return highlightReply(1351, event)" href="/agg/res/1351#1351">No.</a><a class="post_no" onclick="return citeReply(1351)" href="/agg/res/1351#q1351">1351</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1351">[Reply]</a></p><div class="body">i am unbanned<br/>hail pissmin, the wise<br/><a href=https://kissu.moe/qa/res/4831.html>https://kissu.moe/qa/res/4831.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1350" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1566003587092.png">1566003587092.png</a> <span class="unimportant">(650.77 KB, 719x725, <span class="postfilename">1566002710536.png</span>)</span></p><a href="/agg/src/1566003587092.png" target="_blank"><img class="post-image" src="/agg/thumb/1566003587092.png" style="width:253px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1350" ><p class="intro"><input type="checkbox" class="delete" name="delete_1350" id="delete_1350" /><label for="delete_1350"><span class="name">Anonymous</span>        <span class="capcode" style="color:lightgreen;font-style:italic;font-weight:bold"> ## Kissu Pro</span> <time datetime="2019-08-17T01:00:05Z">08/17/19 (Sat) 01:00:05</time></label>&nbsp;<a class="post_no" id="post_no_1350" onclick="return highlightReply(1350, event)" href="/agg/res/1350#1350">No.</a><a class="post_no" onclick="return citeReply(1350)" href="/agg/res/1350#q1350">1350</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1350">[Reply]</a></p><div class="body">Can I have my own sick capcode? Anonymous ## Kissu Pro. Thanks kissmin.<br/><a href=https://kissu.moe/qa/res/4824.html>https://kissu.moe/qa/res/4824.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/39" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>]				 [<a href="/agg/26">26</a>]				 [<a href="/agg/27">27</a>]				 [<a href="/agg/28">28</a>]				 [<a href="/agg/29">29</a>]				 [<a href="/agg/30">30</a>]				 [<a href="/agg/31">31</a>]				 [<a href="/agg/32">32</a>]				 [<a href="/agg/33">33</a>]				 [<a href="/agg/34">34</a>]				 [<a href="/agg/35">35</a>]				 [<a href="/agg/36">36</a>]				 [<a href="/agg/37">37</a>]				 [<a href="/agg/38">38</a>]				 [<a href="/agg/39">39</a>]				 [<a class="selected">40</a>]				 [<a href="/agg/41">41</a>]				 [<a href="/agg/42">42</a>]				 [<a href="/agg/43">43</a>]				 [<a href="/agg/44">44</a>]				 [<a href="/agg/45">45</a>]				 [<a href="/agg/46">46</a>]				 [<a href="/agg/47">47</a>]				 [<a href="/agg/48">48</a>]				 [<a href="/agg/49">49</a>]				 [<a href="/agg/50">50</a>] 		 <form action="/agg/41" method="get"><input type="submit" value="Next" /></form>
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