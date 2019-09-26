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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-2.png" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){
	
        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", 'https://kissu.moe/motd.txt');
                request.onreadystatechange = function() { 
                if (this.readyState === 4 && this.status === 200) {
                        motd = this.responseText;
                        var request = new XMLHttpRequest(); 
                        localStorage.firstLoad = 3;
                        alert(
                        "<h1>Welcome to kissu.moe!</h1><br/>\
                         <h2>Message Of the Day</h2>\
                        <p><strong>" + motd + "</strong></p>\
                        <h2>Boards</h2>\
                        <ul style='text-align: left;'><li>/qa/ - Random content(NSFW spoilered)</li><li>/b/ - Site Developement</li><li>/megu/ - NSFW content</li></ul>\
                        <h2>Select Default Theme</h2>\
                        Other options are selectable later in options<br/><br/>\
                        <label>Default Theme: <select onchange='$(\"#style-select-\" + $(this).val()).click();'><option value='1'>Light</option><option selected='selected' value='2'>Dark</option><option value='3'>Special</option></select></label><br/>\
                        <h2>Rules</h2>\
                        <p>Don't post obnoxious stuff. Bans are only reserved for the worst cases of people. A deletion does not mean it's personal</p><hr/>\
                        <br/>Contact Vermin for issues, site bugs and feedback</p>\
                        "
                        );

                };

        }
        request.send();
}
</script>


	<header>
	<h1 style="padding-top:10px;">/agg/ - Spinoff Aggregate</h1>
	<div class="subtitle">
									Nen, Hima, GNFOS[RIP], What, Kissu
								</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea name="n2epfz9o8lygk6♒ub1ia3sjw7450vh" style="display:none">;EwqN*d9⛳PL☖])(yulRMJ_T D⛌?\=`o⛗.n}!gxc⚫jXW&lt; A^Gb'v2U5☶p+z☟rO#Z,$Qa4☄@kS7BYFKtV⚇msi1H</textarea>
<textarea style="display:none" name="username">J⚱+Bxi☚g_s.?Zb|6$=u7rM☿PNw⛕&gt;⚁0qk@LhG`aj^C#♂Rd4*z:e; Vp&lt;H/Y]\</textarea>
<input type="hidden" name="board" value="agg">
<input style="display:none" type="text" value="g-[N&gt;ro⛚V2FsZ9=Ac!d+uL⛈BfY76q0IhRzEO?\☻⛻aQJMGW5U{" name="lastname">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<div style="display:none"><input type="text" name="search" value=""></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="user" value="&gt;N&#9892;&#84;I&#52;`⚩~&#121;♹*ZP%E8?&#117;S+1iLA&#44;hj☭:R&#36;(0&#53;={V|}tf7q/HX@]K.⛎W⛏p2\_&#103;sb&#114;&amp;"></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="7ykdefr3jg0ioqn2491mbap" value=""></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input   name="2x⛝tavigslre96d83o7b♉yn1"   value=""   type="hidden">
			
			
				<input value="" name="iaze6dys♅pc97xrj8" type="hidden">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input name="url" value="24827" type="hidden">
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input type="hidden" name="j925n⚊qrou8♽k1wta7id3mzx☂ce☫6vl0hp4yf" value="" >
			</th>
			<td>
				<textarea name="body" id="body" rows="3" cols="40"></textarea>
				<input value="WKTfg2h!4sQMD9&amp;;♟n5B,oqHtS38b=N♼k&gt;O-C*]LJu 0⛏\_F}r:ZX&lt;7Y♸Vm⚀♁jlG ^{A.[)+%y(~a$i'p♷1?" name="text" type="hidden">
				
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
								<input type="hidden" value="H⛢\I&lt;0auC`g⚲{y♄LUQ⚳.☄fm1,XVo|:YvGjh7BA/)TS%c*r#i^zxd~9Ole8⛾t" name="firstname">
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

<input type="hidden" name="hash" value="ef840e337c13cfd762e22af7e17c48cf05182ee3">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
                
		</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter">We have an archive, because why not<hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/agg/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/agg/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="agg" />
		<div class="thread" id="thread_2017" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569127163811.png">1569127163811.png</a> <span class="unimportant">(30.03 KB, 176x197, <span class="postfilename">1489656108597.png</span>)</span></p><a href="/agg/src/1569127163811.png" target="_blank"><img class="post-image" src="/agg/thumb/1569127163811.png" style="width:176px;height:197px" alt="" /></a></div>    </div>    <div class="post op" id="op_2017" ><p class="intro"><input type="checkbox" class="delete" name="delete_2017" id="delete_2017" /><label for="delete_2017"><span class="name">Anonymous</span> <time datetime="2019-09-22T04:40:06Z">09/22/19 (Sun) 04:40:06</time></label>&nbsp;<a class="post_no" id="post_no_2017" onclick="return highlightReply(2017, event)" href="/agg/res/2017#2017">No.</a><a class="post_no" onclick="return citeReply(2017)" href="/agg/res/2017#q2017">2017</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2017">[Reply]</a></p><div class="body">Hibiki get<br/><a href=https://kissu.moe/qa/res/10000.html>https://kissu.moe/qa/res/10000.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2016" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569126843553.jpeg">1569126843553.jpeg</a> <span class="unimportant">(466.42 KB, 750x712, <span class="postfilename" title="E53DA6D6-0B83-48E8-B219-D14DE85A6EF6.jpeg">E53DA6D6-0B83-48E8-B219-D….jpeg</span>)</span></p><a href="/agg/src/1569126843553.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569126843553.png" style="width:255px;height:242px" alt="" /></a></div>    </div>    <div class="post op" id="op_2016" ><p class="intro"><input type="checkbox" class="delete" name="delete_2016" id="delete_2016" /><label for="delete_2016"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T04:35:20Z">09/22/19 (Sun) 04:35:20</time></label>&nbsp;<a class="post_no" id="post_no_2016" onclick="return highlightReply(2016, event)" href="/agg/res/2016#2016">No.</a><a class="post_no" onclick="return citeReply(2016)" href="/agg/res/2016#q2016">2016</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2016">[Reply]</a></p><div class="body"><a href="https://m.youtube.com/watch?v=AR74HitPvws&amp;feature=youtu.be" rel="nofollow" target="_blank">https://m.youtube.com/watch?v=AR74HitPvws&amp;feature=youtu.be</a><br/><a href=https://kissu.moe/qa/res/9998.html>https://kissu.moe/qa/res/9998.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2015" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569125637291.jpg">1569125637291.jpg</a> <span class="unimportant">(618.45 KB, 650x658, <span class="postfilename" title="__alice_margatroid_touhou_drawn_by_sakuraba_yuuki__de37cc4451d6380d95b1a8d2da6cb49f.jpg">__alice_margatroid_touhou_….jpg</span>)</span></p><a href="/agg/src/1569125637291.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569125637291.jpg" style="width:237px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2015" ><p class="intro"><input type="checkbox" class="delete" name="delete_2015" id="delete_2015" /><label for="delete_2015"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T04:15:12Z">09/22/19 (Sun) 04:15:12</time></label>&nbsp;<a class="post_no" id="post_no_2015" onclick="return highlightReply(2015, event)" href="/agg/res/2015#2015">No.</a><a class="post_no" onclick="return citeReply(2015)" href="/agg/res/2015#q2015">2015</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2015">[Reply]</a></p><div class="body">Have you ever sighed so hard that you entered a transcendental state of existential dread.....<br/><a href=https://gnfos.com/jp/res/369401.html>https://gnfos.com/jp/res/369401.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2014" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569124748057.jpeg">1569124748057.jpeg</a> <span class="unimportant">(76.57 KB, 350x495, <span class="postfilename" title="9E54DE62-B082-4325-891B-E78A22FA6941.jpeg">9E54DE62-B082-4325-891B-E….jpeg</span>)</span></p><a href="/agg/src/1569124748057.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569124748057.jpeg" style="width:169px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2014" ><p class="intro"><input type="checkbox" class="delete" name="delete_2014" id="delete_2014" /><label for="delete_2014"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T04:00:03Z">09/22/19 (Sun) 04:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2014" onclick="return highlightReply(2014, event)" href="/agg/res/2014#2014">No.</a><a class="post_no" onclick="return citeReply(2014)" href="/agg/res/2014#q2014">2014</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2014">[Reply]</a></p><div class="body">Range ban me<br/><a href=https://gnfos.com/jp/res/369396.html>https://gnfos.com/jp/res/369396.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2013" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569123217062.jpeg">1569123217062.jpeg</a> <span class="unimportant">(199.6 KB, 750x506, <span class="postfilename" title="DF9E615A-06E3-402E-8487-CC53DA1CD262.jpeg">DF9E615A-06E3-402E-8487-C….jpeg</span>)</span></p><a href="/agg/src/1569123217062.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569123217062.png" style="width:255px;height:172px" alt="" /></a></div>    </div>    <div class="post op" id="op_2013" ><p class="intro"><input type="checkbox" class="delete" name="delete_2013" id="delete_2013" /><label for="delete_2013"><a class="repo" href="javascript:void(0); %20repo"><span class="name">Anonymous</span></a> <time datetime="2019-09-22T03:35:03Z">09/22/19 (Sun) 03:35:03</time></label>&nbsp;<a class="post_no" id="post_no_2013" onclick="return highlightReply(2013, event)" href="/agg/res/2013#2013">No.</a><a class="post_no" onclick="return citeReply(2013)" href="/agg/res/2013#q2013">2013</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2013">[Reply]</a></p><div class="body">Hey zoomers can i post here<br/><a href=https://kissu.moe/qa/res/9982.html>https://kissu.moe/qa/res/9982.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2012" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569119827570.png">1569119827570.png</a> <span class="unimportant">(5.92 MB, 1920x4883, <span class="postfilename">201m37g2v0m31.png</span>)</span></p><a href="/agg/src/1569119827570.png" target="_blank"><img class="post-image" src="/agg/thumb/1569119827570.png" style="width:94px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2012" ><p class="intro"><input type="checkbox" class="delete" name="delete_2012" id="delete_2012" /><label for="delete_2012"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:41:06Z">09/22/19 (Sun) 02:41:06</time></label>&nbsp;<a class="post_no" id="post_no_2012" onclick="return highlightReply(2012, event)" href="/agg/res/2012#2012">No.</a><a class="post_no" onclick="return citeReply(2012)" href="/agg/res/2012#q2012">2012</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2012">[Reply]</a></p><div class="body"><span class="quote">&gt;post black men owiing white boys</span><br/><span class="quote">&gt;Ron Paulshit bans you</span><br/>LMAOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO who would think white incels are so sensitive LOL<br/><a href=https://gnfos.com/jp/res/369381.html>https://gnfos.com/jp/res/369381.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2011" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569119653028.jpg">1569119653028.jpg</a> <span class="unimportant">(6.09 KB, 253x199, <span class="postfilename">1569113276915.jpg</span>)</span></p><a href="/agg/src/1569119653028.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569119653028.jpg" style="width:253px;height:199px" alt="" /></a></div>    </div>    <div class="post op" id="op_2011" ><p class="intro"><input type="checkbox" class="delete" name="delete_2011" id="delete_2011" /><label for="delete_2011"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:35:48Z">09/22/19 (Sun) 02:35:48</time></label>&nbsp;<a class="post_no" id="post_no_2011" onclick="return highlightReply(2011, event)" href="/agg/res/2011#2011">No.</a><a class="post_no" onclick="return citeReply(2011)" href="/agg/res/2011#q2011">2011</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2011">[Reply]</a></p><div class="body">MY POSTS<br/><a href=https://gnfos.com/jp/res/369379.html>https://gnfos.com/jp/res/369379.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2010" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569119567504.webm">1569119567504.webm</a> <span class="unimportant">(2.76 MB, 640x1136, <span class="postfilename">1569115506425.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569119567504.webm&amp;t=1569115506425.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569119567504.jpg" style="width:135px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2010" ><p class="intro"><input type="checkbox" class="delete" name="delete_2010" id="delete_2010" /><label for="delete_2010"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:35:48Z">09/22/19 (Sun) 02:35:48</time></label>&nbsp;<a class="post_no" id="post_no_2010" onclick="return highlightReply(2010, event)" href="/agg/res/2010#2010">No.</a><a class="post_no" onclick="return citeReply(2010)" href="/agg/res/2010#q2010">2010</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2010">[Reply]</a></p><div class="body">The lust for tomboys originates from the fact that women are fucking shit, so we project the virtue of good men on a female body. the tomboy&#39;s version of the hero&#39;s journey. The tomboy&#39;s journey is all about learning to accept and marry the best aspects of the masculine and the feminine within herself. By the end of her journey, the tomboy is quintessential ideal woman.<br/><br/>The tomboy is the answer to the age old question of &#39;would you fuck your best friend if he had a vagina?&#39;. The answer is yes. You bet your fucking ass you would.<br/><br/>You can&#39;t truly explain the experience of vision to those born without sight, nor music to those born without hearing. Likewise, you can&#39;t explain the appeal of tomboys to those born without taste.<br/><a href=https://gnfos.com/jp/res/369378.html>https://gnfos.com/jp/res/369378.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2009" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569118711177.jpg">1569118711177.jpg</a> <span class="unimportant">(111.17 KB, 1280x720, <span class="postfilename">1569089020127.jpg</span>)</span></p><a href="/agg/src/1569118711177.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569118711177.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2009" ><p class="intro"><input type="checkbox" class="delete" name="delete_2009" id="delete_2009" /><label for="delete_2009"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T02:22:37Z">09/22/19 (Sun) 02:22:37</time></label>&nbsp;<a class="post_no" id="post_no_2009" onclick="return highlightReply(2009, event)" href="/agg/res/2009#2009">No.</a><a class="post_no" onclick="return citeReply(2009)" href="/agg/res/2009#q2009">2009</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2009">[Reply]</a></p><div class="body">One does not simply introduce universal income in Mordor. Its bank gates are guarded by more than just jews. There is evil there that does not sleep. And the Great Rothschild, is ever watchful. It is a barren wasteland, riddled with non-citizen labor, automation and high taxation. The very air you breathe is a yearly expense. Not with ten thousand men could you do this. It is folly!<br/><a href=https://gnfos.com/jp/res/369376.html>https://gnfos.com/jp/res/369376.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2008" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569117584516.webm">1569117584516.webm</a> <span class="unimportant">(1.96 MB, 332x574, <span class="postfilename">1569117506266.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569117584516.webm&amp;t=1569117506266.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569117584516.jpg" style="width:139px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2008" ><p class="intro"><input type="checkbox" class="delete" name="delete_2008" id="delete_2008" /><label for="delete_2008"><span class="name">Tada Banri</span> <time datetime="2019-09-22T02:00:03Z">09/22/19 (Sun) 02:00:03</time></label>&nbsp;<a class="post_no" id="post_no_2008" onclick="return highlightReply(2008, event)" href="/agg/res/2008#2008">No.</a><a class="post_no" onclick="return citeReply(2008)" href="/agg/res/2008#q2008">2008</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2008">[Reply]</a></p><div class="body">OH NO NO NO NO NO NO NO WHITE BOIS &#128514;&#128514;&#128514; GET IN HERE CNIG<br/><a href=https://gnfos.com/jp/res/369348.html>https://gnfos.com/jp/res/369348.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2007" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569116136813.jpeg">1569116136813.jpeg</a> <span class="unimportant">(63.73 KB, 500x604, <span class="postfilename" title="ED79ACB6-2E28-4C06-8A68-105A7FD9F65A.jpeg">ED79ACB6-2E28-4C06-8A68-1….jpeg</span>)</span></p><a href="/agg/src/1569116136813.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569116136813.jpeg" style="width:199px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2007" ><p class="intro"><input type="checkbox" class="delete" name="delete_2007" id="delete_2007" /><label for="delete_2007"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T01:40:04Z">09/22/19 (Sun) 01:40:04</time></label>&nbsp;<a class="post_no" id="post_no_2007" onclick="return highlightReply(2007, event)" href="/agg/res/2007#2007">No.</a><a class="post_no" onclick="return citeReply(2007)" href="/agg/res/2007#q2007">2007</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2007">[Reply]</a></p><div class="body">lol<br/><a href=https://gnfos.com/jp/res/369318.html>https://gnfos.com/jp/res/369318.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2006" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115903721.webm">1569115903721.webm</a> <span class="unimportant">(3.27 MB, 1280x720, <span class="postfilename">iwwvbx.webm</span>)</span></p><a href="/player.php?v=/agg/src/1569115903721.webm&amp;t=iwwvbx.webm&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1569115903721.jpg" style="width:427px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2006" ><p class="intro"><input type="checkbox" class="delete" name="delete_2006" id="delete_2006" /><label for="delete_2006"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:35:04Z">09/22/19 (Sun) 01:35:04</time></label>&nbsp;<a class="post_no" id="post_no_2006" onclick="return highlightReply(2006, event)" href="/agg/res/2006#2006">No.</a><a class="post_no" onclick="return citeReply(2006)" href="/agg/res/2006#q2006">2006</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2006">[Reply]</a></p><div class="body">post em<br/><a href=https://gnfos.com/jp/res/369312.html>https://gnfos.com/jp/res/369312.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2005" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115648397.png">1569115648397.png</a> <span class="unimportant">(250.9 KB, 656x441, <span class="postfilename">1569103323807.png</span>)</span></p><a href="/agg/src/1569115648397.png" target="_blank"><img class="post-image" src="/agg/thumb/1569115648397.png" style="width:357px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2005" ><p class="intro"><input type="checkbox" class="delete" name="delete_2005" id="delete_2005" /><label for="delete_2005"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T01:30:04Z">09/22/19 (Sun) 01:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2005" onclick="return highlightReply(2005, event)" href="/agg/res/2005#2005">No.</a><a class="post_no" onclick="return citeReply(2005)" href="/agg/res/2005#q2005">2005</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2005">[Reply]</a></p><div class="body">WHAT DO YOU GET WHEN YOU CROSS A MENTALLY-ILL LONER WITH A SOCIETY THAT ABANDONS HIM AND TREATS HIM LIKE TRASH?<br/><a href=https://gnfos.com/jp/res/369304.html>https://gnfos.com/jp/res/369304.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2004" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115591564.jpeg">1569115591564.jpeg</a> <span class="unimportant">(324.55 KB, 750x569, <span class="postfilename" title="89837507-763B-4C10-BD35-535CDC87DF50.jpeg">89837507-763B-4C10-BD35-5….jpeg</span>)</span></p><a href="/agg/src/1569115591564.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1569115591564.jpeg" style="width:316px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2004" ><p class="intro"><input type="checkbox" class="delete" name="delete_2004" id="delete_2004" /><label for="delete_2004"><span class="name">Tada Banri</span> <time datetime="2019-09-22T01:30:04Z">09/22/19 (Sun) 01:30:04</time></label>&nbsp;<a class="post_no" id="post_no_2004" onclick="return highlightReply(2004, event)" href="/agg/res/2004#2004">No.</a><a class="post_no" onclick="return citeReply(2004)" href="/agg/res/2004#q2004">2004</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2004">[Reply]</a></p><div class="body">Gross<br/><a href=https://gnfos.com/jp/res/369303.html>https://gnfos.com/jp/res/369303.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2003" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115384336.gif">1569115384336.gif</a> <span class="unimportant">(1.98 MB, 384x216, <span class="postfilename">1569103572144.gif</span>)</span></p><a href="/agg/src/1569115384336.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569115384336.gif" style="width:384px;height:216px" alt="" /></a></div>    </div>    <div class="post op" id="op_2003" ><p class="intro"><input type="checkbox" class="delete" name="delete_2003" id="delete_2003" /><label for="delete_2003"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:25:28Z">09/22/19 (Sun) 01:25:28</time></label>&nbsp;<a class="post_no" id="post_no_2003" onclick="return highlightReply(2003, event)" href="/agg/res/2003#2003">No.</a><a class="post_no" onclick="return citeReply(2003)" href="/agg/res/2003#q2003">2003</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2003">[Reply]</a></p><div class="body"><span class="quote">&gt;ota</span><br/><a href=https://gnfos.com/jp/res/369302.html>https://gnfos.com/jp/res/369302.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2002" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569115178426.jpg">1569115178426.jpg</a> <span class="unimportant">(1.25 MB, 2037x3056, <span class="postfilename">1569111973163.jpg</span>)</span></p><a href="/agg/src/1569115178426.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569115178426.jpg" style="width:160px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2002" ><p class="intro"><input type="checkbox" class="delete" name="delete_2002" id="delete_2002" /><label for="delete_2002"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:20:03Z">09/22/19 (Sun) 01:20:03</time></label>&nbsp;<a class="post_no" id="post_no_2002" onclick="return highlightReply(2002, event)" href="/agg/res/2002#2002">No.</a><a class="post_no" onclick="return citeReply(2002)" href="/agg/res/2002#q2002">2002</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2002">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369298.html>https://gnfos.com/jp/res/369298.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2001" data-board="agg"><div class="video-container" data-video="ptkS3gqCYzw"><a href="https://youtu.be/ptkS3gqCYzw" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/ptkS3gqCYzw/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_2001" ><p class="intro"><input type="checkbox" class="delete" name="delete_2001" id="delete_2001" /><label for="delete_2001"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T01:15:05Z">09/22/19 (Sun) 01:15:05</time></label>&nbsp;<a class="post_no" id="post_no_2001" onclick="return highlightReply(2001, event)" href="/agg/res/2001#2001">No.</a><a class="post_no" onclick="return citeReply(2001)" href="/agg/res/2001#q2001">2001</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2001">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369293.html>https://gnfos.com/jp/res/369293.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_2000" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569114023480.gif">1569114023480.gif</a> <span class="unimportant">(241.45 KB, 400x400, <span class="postfilename">1558470592948.gif</span>)</span></p><a href="/agg/src/1569114023480.gif" target="_blank"><img class="post-image" src="/agg/thumb/1569114023480.gif" style="width:240px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_2000" ><p class="intro"><input type="checkbox" class="delete" name="delete_2000" id="delete_2000" /><label for="delete_2000"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T01:05:03Z">09/22/19 (Sun) 01:05:03</time></label>&nbsp;<a class="post_no" id="post_no_2000" onclick="return highlightReply(2000, event)" href="/agg/res/2000#2000">No.</a><a class="post_no" onclick="return citeReply(2000)" href="/agg/res/2000#q2000">2000</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/2000">[Reply]</a></p><div class="body">put the site on read-only mode Ron Paul and whitelist yourself<br/><br/>nobody else can seem to make non-shitty threads i would rather this site operate as your personal blog without the teen schizos constantly shitting all over it<br/><a href=https://gnfos.com/jp/res/369278.html>https://gnfos.com/jp/res/369278.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1999" data-board="agg"><div class="video-container" data-video="ljphZBxvC34"><a href="https://youtu.be/ljphZBxvC34" target="_blank" class="file"><img style="width:360px;height:270px;" src="//img.youtube.com/vi/ljphZBxvC34/0.jpg" class="post-image"/></a></div>    <div class="post op" id="op_1999" ><p class="intro"><input type="checkbox" class="delete" name="delete_1999" id="delete_1999" /><label for="delete_1999"><span class="name">Diarrhea Dan</span> <time datetime="2019-09-22T00:50:03Z">09/22/19 (Sun) 00:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1999" onclick="return highlightReply(1999, event)" href="/agg/res/1999#1999">No.</a><a class="post_no" onclick="return citeReply(1999)" href="/agg/res/1999#q1999">1999</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1999">[Reply]</a></p><div class="body"><a href=https://gnfos.com/jp/res/369270.html>https://gnfos.com/jp/res/369270.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1998" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1569112647523.jpg">1569112647523.jpg</a> <span class="unimportant">(115.34 KB, 800x600, <span class="postfilename" title="__hakurei_reimu_touhou_drawn_by_mizuki_riko__6ed35aa282a7125aae07217464c21e25.jpg">__hakurei_reimu_touhou_dra….jpg</span>)</span></p><a href="/agg/src/1569112647523.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1569112647523.jpg" style="width:320px;height:240px" alt="" /></a></div>    </div>    <div class="post op" id="op_1998" ><p class="intro"><input type="checkbox" class="delete" name="delete_1998" id="delete_1998" /><label for="delete_1998"><span class="name">The Dastardly Duo</span> <time datetime="2019-09-22T00:40:03Z">09/22/19 (Sun) 00:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1998" onclick="return highlightReply(1998, event)" href="/agg/res/1998#1998">No.</a><a class="post_no" onclick="return citeReply(1998)" href="/agg/res/1998#q1998">1998</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1998">[Reply]</a></p><div class="body"><em>If you want to be seen - stand up.</em><br/><em>If you want to be heard - speak up.</em><br/><em>If you want to be appreciated - shut up.</em><br/><br/><em> - Ancient GNFOS saying</em><br/><a href=https://gnfos.com/jp/res/369266.html>https://gnfos.com/jp/res/369266.html</a></div></div><br class="clear"/><hr/></div>
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
		                <a id="archive-link-bottom" href="/agg/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://himasugi.blog/jp/">hima</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/8" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a class="selected">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/10" method="get"><input type="submit" value="Next" /></form>
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