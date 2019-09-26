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
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
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
<span style="display:none"><input type="text" name="user" value=""></span>
<span   style="display:none"><input   type="text"   name="lastname"   value=""></span>
<input type="hidden" name="board" value="agg">
<input name="vwdrx5ukc8⚶6yftnl♑" value="c|x☁-☬v&#75;N&#111;&#121;m☀`G&#81;wd'&#84;i♴&#32;&#79;☪L3&gt;l6&#107;S&#57;U%.♰1V=&#95;(&#56;B&#110;upZ&amp;&lt;]52" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="x}FKalHy⛼?45{☓3twn/'♌26X⛩!$%#;hGO8&gt;@~zJS^0⚟Iod&lt;j[q(NALVfQ*bW=u ,)`r7mC|e-.☰c&amp;i♛⛗sv:T9_MEPgB]1Dk Z+" name="login" type="hidden" >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<div style="display:none"><input type="text" name="text" value=""></div>
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea style="display:none" name="q">⛥VvG&#55;P&#126;r&#121;Nq&#125;&#100;&#67;^&#9781;&#117;#/⛺&#36;U⛪0e@Fm*)Yc</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input   value=""   name="ghndafeicmvp7w9z306421♐8lq"   type="hidden">
			
			
				<input name="w☖f⛡aigq7oc" value="" type="hidden">
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

<input type="hidden" name="hash" value="1e52d5205b50977227181f21055a9f301aa58ce3">
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
		<div class="thread" id="thread_1877" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568568029184.jpg">1568568029184.jpg</a> <span class="unimportant">(1.38 MB, 1500x1555, <span class="postfilename" title="ece5c3e9a4156b02d04757a08e9b5386.jpg">ece5c3e9a4156b02d04757a08e….jpg</span>)</span></p><a href="/agg/src/1568568029184.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568568029184.png" style="width:246px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1877" ><p class="intro"><input type="checkbox" class="delete" name="delete_1877" id="delete_1877" /><label for="delete_1877"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1877" onclick="return highlightReply(1877, event)" href="/agg/res/1877#1877">No.</a><a class="post_no" onclick="return citeReply(1877)" href="/agg/res/1877#q1877">1877</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1877">[Reply]</a></p><div class="body"><a onclick="return highlightReply(&#39;8859&#39;, event);" href="/qa/res/4165#8859">&gt;&gt;8859</a><br/>I think what&#39;s contributed to the drouht of passionate people is the perception online of passionate people as losers. Like how when people do express passion on many places they&#39;re met with responses of "cringe" or disapproval of their passion. So they try to not show it, or hide it under irony. Wish that perception would change though, irony sucks.<br/><a href=https://kissu.moe/qa/res/8928.html>https://kissu.moe/qa/res/8928.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1876" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568746440967.jpg">1568746440967.jpg</a> <span class="unimportant">(61.88 KB, 640x713, <span class="postfilename" title="52f17b61a3481b2db3a96060fc3fcc51.jpg">52f17b61a3481b2db3a96060fc….jpg</span>)</span></p><a href="/agg/src/1568746440967.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568746440967.png" style="width:229px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1876" ><p class="intro"><input type="checkbox" class="delete" name="delete_1876" id="delete_1876" /><label for="delete_1876"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1876" onclick="return highlightReply(1876, event)" href="/agg/res/1876#1876">No.</a><a class="post_no" onclick="return citeReply(1876)" href="/agg/res/1876#q1876">1876</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1876">[Reply]</a></p><div class="body">Muh japanese mommy girlfriend is demanding i come to japan now. She cant wait for christmas.<br/>So now, im gonna have to sneak a flight to japan in October on a weekend.<br/><br/>$2500, for a date. holy fuck.<br/><br/>What the fuck kind of life is this? oh well....<br/><a href=https://kissu.moe/qa/res/9267.html>https://kissu.moe/qa/res/9267.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1875" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568699139027.png">1568699139027.png</a> <span class="unimportant">(2.08 MB, 1500x2000, <span class="postfilename" title="__joutouguu_mayumi_touhou_drawn_by_kikoka_mizuumi__dcb7bbfe13166f0c5733327dd8640f33.png">__joutouguu_mayumi_touhou_….png</span>)</span></p><a href="/agg/src/1568699139027.png" target="_blank"><img class="post-image" src="/agg/thumb/1568699139027.png" style="width:191px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1875" ><p class="intro"><input type="checkbox" class="delete" name="delete_1875" id="delete_1875" /><label for="delete_1875"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1875" onclick="return highlightReply(1875, event)" href="/agg/res/1875#1875">No.</a><a class="post_no" onclick="return citeReply(1875)" href="/agg/res/1875#q1875">1875</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1875">[Reply]</a></p><div class="body">I notice the thread that was something along the lines of "I miss talking about Touhou" died. A fancy funpost eludes me, but I like this image, so... what did you think of Wily Beast?<br/><a href=https://kissu.moe/qa/res/9239.html>https://kissu.moe/qa/res/9239.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1874" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568684672860.jpg">1568684672860.jpg</a> <span class="unimportant">(15 KB, 190x190, <span class="postfilename">1429849963868.jpg</span>)</span></p><a href="/agg/src/1568684672860.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568684672860.png" style="width:190px;height:190px" alt="" /></a></div>    </div>    <div class="post op" id="op_1874" ><p class="intro"><input type="checkbox" class="delete" name="delete_1874" id="delete_1874" /><label for="delete_1874"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1874" onclick="return highlightReply(1874, event)" href="/agg/res/1874#1874">No.</a><a class="post_no" onclick="return citeReply(1874)" href="/agg/res/1874#q1874">1874</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1874">[Reply]</a></p><div class="body">You ever wish you were dumber?<br/><a href=https://kissu.moe/qa/res/9198.html>https://kissu.moe/qa/res/9198.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1873" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568692628857.png">1568692628857.png</a> <span class="unimportant">(253.27 KB, 700x543, <span class="postfilename">thinkin bout da moon.png</span>)</span></p><a href="/agg/src/1568692628857.png" target="_blank"><img class="post-image" src="/agg/thumb/1568692628857.png" style="width:255px;height:198px" alt="" /></a></div>    </div>    <div class="post op" id="op_1873" ><p class="intro"><input type="checkbox" class="delete" name="delete_1873" id="delete_1873" /><label for="delete_1873"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1873" onclick="return highlightReply(1873, event)" href="/agg/res/1873#1873">No.</a><a class="post_no" onclick="return citeReply(1873)" href="/agg/res/1873#q1873">1873</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1873">[Reply]</a></p><div class="body">clouds in the night sky<br/>sky so bright thanks to the moon<br/>havent seen the moon in forever<br/>til ten minutes ago ah the moon it was up there so big so fast so shiny!<br/><a href=https://kissu.moe/qa/res/9215.html>https://kissu.moe/qa/res/9215.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1872" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568583095323.jpg">1568583095323.jpg</a> <span class="unimportant">(25.59 KB, 451x630, <span class="postfilename">1565485467590.jpg</span>)</span></p><a href="/agg/src/1568583095323.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568583095323.png" style="width:183px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1872" ><p class="intro"><input type="checkbox" class="delete" name="delete_1872" id="delete_1872" /><label for="delete_1872"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1872" onclick="return highlightReply(1872, event)" href="/agg/res/1872#1872">No.</a><a class="post_no" onclick="return citeReply(1872)" href="/agg/res/1872#q1872">1872</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1872">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/8987.html>https://kissu.moe/qa/res/8987.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1871" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568654083315.gif">1568654083315.gif</a> <span class="unimportant">(2.02 MB, 533x759, <span class="postfilename">carnivate-carn-lamia-loop.gif</span>)</span></p><a href="/agg/src/1568654083315.gif" target="_blank"><img class="post-image" src="/agg/thumb/1568654083315.png" style="width:179px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1871" ><p class="intro"><input type="checkbox" class="delete" name="delete_1871" id="delete_1871" /><label for="delete_1871"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1871" onclick="return highlightReply(1871, event)" href="/agg/res/1871#1871">No.</a><a class="post_no" onclick="return citeReply(1871)" href="/agg/res/1871#q1871">1871</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1871">[Reply]</a></p><div class="body">What do you call things like centaurs or lamia? half human half animal hybrids I mean<br/><a href=https://kissu.moe/qa/res/9085.html>https://kissu.moe/qa/res/9085.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1870" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568676454080.jpg">1568676454080.jpg</a> <span class="unimportant">(203.45 KB, 479x470, <span class="postfilename">1547142575911.jpg</span>)</span></p><a href="/agg/src/1568676454080.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568676454080.png" style="width:255px;height:250px" alt="" /></a></div>    </div>    <div class="post op" id="op_1870" ><p class="intro"><input type="checkbox" class="delete" name="delete_1870" id="delete_1870" /><label for="delete_1870"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1870" onclick="return highlightReply(1870, event)" href="/agg/res/1870#1870">No.</a><a class="post_no" onclick="return citeReply(1870)" href="/agg/res/1870#q1870">1870</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1870">[Reply]</a></p><div class="body">Ya feel that? Ya feel that, boy? That wet stuff in yo socks? That wet and sticky stuff in yo socks? Das mah cohm. I cohmed in yo socks, cracka. How dat feel, boi?<br/><a href=https://kissu.moe/qa/res/9160.html>https://kissu.moe/qa/res/9160.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1869" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568665335502.png">1568665335502.png</a> <span class="unimportant">(466.52 KB, 839x484, <span class="postfilename">thinkin bout math.png</span>)</span></p><a href="/agg/src/1568665335502.png" target="_blank"><img class="post-image" src="/agg/thumb/1568665335502.png" style="width:255px;height:147px" alt="" /></a></div>    </div>    <div class="post op" id="op_1869" ><p class="intro"><input type="checkbox" class="delete" name="delete_1869" id="delete_1869" /><label for="delete_1869"><a class="noko" href="javascript:void(0); noko"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1869" onclick="return highlightReply(1869, event)" href="/agg/res/1869#1869">No.</a><a class="post_no" onclick="return citeReply(1869)" href="/agg/res/1869#q1869">1869</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1869">[Reply]</a></p><div class="body">new word.<br/>p*nis + wiener = peener<br/><a href=https://kissu.moe/qa/res/9115.html>https://kissu.moe/qa/res/9115.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1868" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568661136094.png">1568661136094.png</a> <span class="unimportant">(805.84 KB, 688x837, <span class="postfilename">1565490190555.png</span>)</span></p><a href="/agg/src/1568661136094.png" target="_blank"><img class="post-image" src="/agg/thumb/1568661136094.png" style="width:210px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1868" ><p class="intro"><input type="checkbox" class="delete" name="delete_1868" id="delete_1868" /><label for="delete_1868"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1868" onclick="return highlightReply(1868, event)" href="/agg/res/1868#1868">No.</a><a class="post_no" onclick="return citeReply(1868)" href="/agg/res/1868#q1868">1868</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1868">[Reply]</a></p><div class="body">don&#39;t know if i&#39;ve become some sort of purityfag but non-virgins in 2D stuff kind of gross me out now<br/><a href=https://kissu.moe/qa/res/9096.html>https://kissu.moe/qa/res/9096.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1867" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568678000692.png">1568678000692.png</a> <span class="unimportant">(384.6 KB, 770x630, <span class="postfilename">ass.png</span>)</span></p><a href="/agg/src/1568678000692.png" target="_blank"><img class="post-image" src="/agg/thumb/1568678000692.png" style="width:255px;height:209px" alt="" /></a></div>    </div>    <div class="post op" id="op_1867" ><p class="intro"><input type="checkbox" class="delete" name="delete_1867" id="delete_1867" /><label for="delete_1867"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1867" onclick="return highlightReply(1867, event)" href="/agg/res/1867#1867">No.</a><a class="post_no" onclick="return citeReply(1867)" href="/agg/res/1867#q1867">1867</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1867">[Reply]</a></p><div class="body">i&#39;m paste<br/>i&#39;m paste <br/>i&#39;m flippin paste<br/><a href=https://kissu.moe/qa/res/9171.html>https://kissu.moe/qa/res/9171.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1866" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568663149119.png">1568663149119.png</a> <span class="unimportant">(87.64 KB, 330x263, <span class="postfilename">1565587800176.png</span>)</span></p><a href="/agg/src/1568663149119.png" target="_blank"><img class="post-image" src="/agg/thumb/1568663149119.png" style="width:255px;height:203px" alt="" /></a></div>    </div>    <div class="post op" id="op_1866" ><p class="intro"><input type="checkbox" class="delete" name="delete_1866" id="delete_1866" /><label for="delete_1866"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1866" onclick="return highlightReply(1866, event)" href="/agg/res/1866#1866">No.</a><a class="post_no" onclick="return citeReply(1866)" href="/agg/res/1866#q1866">1866</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1866">[Reply]</a></p><div class="body">read some mangadex comments<br/><a href=https://kissu.moe/qa/res/9102.html>https://kissu.moe/qa/res/9102.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1865" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568485843183.png">1568485843183.png</a> <span class="unimportant">(468.18 KB, 1235x697, <span class="postfilename">1539964813475.png</span>)</span></p><a href="/agg/src/1568485843183.png" target="_blank"><img class="post-image" src="/agg/thumb/1568485843183.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1865" ><p class="intro"><input type="checkbox" class="delete" name="delete_1865" id="delete_1865" /><label for="delete_1865"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1865" onclick="return highlightReply(1865, event)" href="/agg/res/1865#1865">No.</a><a class="post_no" onclick="return citeReply(1865)" href="/agg/res/1865#q1865">1865</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1865">[Reply]</a></p><div class="body">Is wakabb down? It no work for me.<br/><a href=https://kissu.moe/qa/res/8767.html>https://kissu.moe/qa/res/8767.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1864" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568665724394.png">1568665724394.png</a> <span class="unimportant">(718.77 KB, 1059x597, <span class="postfilename">6fab701772.png</span>)</span></p><a href="/agg/src/1568665724394.png" target="_blank"><img class="post-image" src="/agg/thumb/1568665724394.png" style="width:255px;height:144px" alt="" /></a></div>    </div>    <div class="post op" id="op_1864" ><p class="intro"><input type="checkbox" class="delete" name="delete_1864" id="delete_1864" /><label for="delete_1864"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1864" onclick="return highlightReply(1864, event)" href="/agg/res/1864#1864">No.</a><a class="post_no" onclick="return citeReply(1864)" href="/agg/res/1864#q1864">1864</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1864">[Reply]</a></p><div class="body"><span class="quote">&gt;/qa/</span><br/><a href=https://kissu.moe/qa/res/9120.html>https://kissu.moe/qa/res/9120.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1863" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568666997376.mp4">1568666997376.mp4</a> <span class="unimportant">(229.95 KB, 536x596, <span class="postfilename" title="628efbe2fe446d5908ceffb4aeee7510aef722d4.mp4">628efbe2fe446d5908ceffb4ae….mp4</span>)</span></p><a href="/player.php?v=/agg/src/1568666997376.mp4&amp;t=628efbe2fe446d5908ceffb4aeee7510aef722d4.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1568666997376.jpg" style="width:229px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1863" ><p class="intro"><input type="checkbox" class="delete" name="delete_1863" id="delete_1863" /><label for="delete_1863"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1863" onclick="return highlightReply(1863, event)" href="/agg/res/1863#1863">No.</a><a class="post_no" onclick="return citeReply(1863)" href="/agg/res/1863#q1863">1863</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1863">[Reply]</a></p><div class="body">me<br/><a href=https://kissu.moe/qa/res/9132.html>https://kissu.moe/qa/res/9132.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1862" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568563607864.png">1568563607864.png</a> <span class="unimportant">(744.01 KB, 1200x1014, <span class="postfilename">plsfapnt2.png</span>)</span></p><a href="/agg/src/1568563607864.png" target="_blank"><img class="post-image" src="/agg/thumb/1568563607864.png" style="width:255px;height:215px" alt="" /></a></div>    </div>    <div class="post op" id="op_1862" ><p class="intro"><input type="checkbox" class="delete" name="delete_1862" id="delete_1862" /><label for="delete_1862"><span class="subject">[qa] nof*p thread #2</span> <span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1862" onclick="return highlightReply(1862, event)" href="/agg/res/1862#1862">No.</a><a class="post_no" onclick="return citeReply(1862)" href="/agg/res/1862#q1862">1862</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1862">[Reply]</a></p><div class="body">dis thread is for all of you who want to stop f*pping! u ar not alone. there ar a bunch of us here who r willing to support one another. beating addiction is hard so lets do id together!!!!<br/><br/>pls share tips and tricks dat work for u. and if u slip up dond be ashamed to share it so we can identify the problem and help u in the future<br/><br/>i will make a new thread once dis one is archived.......<br/><a href=https://kissu.moe/qa/res/8920.html>https://kissu.moe/qa/res/8920.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1861" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568594393456.jpg">1568594393456.jpg</a> <span class="unimportant">(310.62 KB, 1920x1080, <span class="postfilename">1561816140680.jpg</span>)</span></p><a href="/agg/src/1568594393456.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568594393456.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1861" ><p class="intro"><input type="checkbox" class="delete" name="delete_1861" id="delete_1861" /><label for="delete_1861"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1861" onclick="return highlightReply(1861, event)" href="/agg/res/1861#1861">No.</a><a class="post_no" onclick="return citeReply(1861)" href="/agg/res/1861#q1861">1861</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1861">[Reply]</a></p><div class="body">STOP calling<br/>STOP calling<br/>I dont want to think anymore&ndash;<br/><a href=https://kissu.moe/qa/res/9012.html>https://kissu.moe/qa/res/9012.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1860" data-board="agg"><iframe style="float: left;margin: 10px 20px;" width="300" height="246" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/2LTkcWxS2S8" allowfullscreen></iframe>    <div class="post op" id="op_1860" ><p class="intro"><input type="checkbox" class="delete" name="delete_1860" id="delete_1860" /><label for="delete_1860"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:23Z">09/20/19 (Fri) 15:39:23</time></label>&nbsp;<a class="post_no" id="post_no_1860" onclick="return highlightReply(1860, event)" href="/agg/res/1860#1860">No.</a><a class="post_no" onclick="return citeReply(1860)" href="/agg/res/1860#q1860">1860</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1860">[Reply]</a></p><div class="body">Relax with some cookie.<br/><a href=https://kissu.moe/qa/res/9062.html>https://kissu.moe/qa/res/9062.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1859" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568606872834.png">1568606872834.png</a> <span class="unimportant">(628.17 KB, 853x480, <span class="postfilename">bcb9a040a7.png</span>)</span></p><a href="/agg/src/1568606872834.png" target="_blank"><img class="post-image" src="/agg/thumb/1568606872834.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1859" ><p class="intro"><input type="checkbox" class="delete" name="delete_1859" id="delete_1859" /><label for="delete_1859"><span class="name">Anonymous</span> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1859" onclick="return highlightReply(1859, event)" href="/agg/res/1859#1859">No.</a><a class="post_no" onclick="return citeReply(1859)" href="/agg/res/1859#q1859">1859</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1859">[Reply]</a></p><div class="body">when was the last time an anime made you cry<br/><a href=https://kissu.moe/qa/res/9032.html>https://kissu.moe/qa/res/9032.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1858" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568583039459.jpg">1568583039459.jpg</a> <span class="unimportant">(148.13 KB, 1280x720, <span class="postfilename">1565554281466.jpg</span>)</span></p><a href="/agg/src/1568583039459.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1568583039459.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1858" ><p class="intro"><input type="checkbox" class="delete" name="delete_1858" id="delete_1858" /><label for="delete_1858"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-20T15:39:22Z">09/20/19 (Fri) 15:39:22</time></label>&nbsp;<a class="post_no" id="post_no_1858" onclick="return highlightReply(1858, event)" href="/agg/res/1858#1858">No.</a><a class="post_no" onclick="return citeReply(1858)" href="/agg/res/1858#q1858">1858</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1858">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/8986.html>https://kissu.moe/qa/res/8986.html</a></div></div><br class="clear"/><hr/></div>
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
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/agg/15" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a class="selected">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a href="/agg/21">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/17" method="get"><input type="submit" value="Next" /></form>
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