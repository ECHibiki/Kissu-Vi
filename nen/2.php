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
            , board_name = "nen";
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
								<title>/nen/ - Mysterious Thoughtography Collection</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-10.jpg" alt="" />
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
	<h1 style="padding-top:10px;">/nen/ - Mysterious Thoughtography Collection</h1>
	<div class="subtitle">
					</div>
	</header>
<h1>New Thread</h1>
	<div id="topcontainer">
	
	

	<div>
	                                        <form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<textarea name="b5d☛2hykgrc8us⚂7☇jzvxa3lm⚴t" style="display:none" >♆0a⚃5H-s6'7⛊♼ Kx|WB)*</textarea >
<input type="hidden" value="z&lt;♄o&#54;jv♯⚤&#82;ml/BEd3♰i8&#59;A'&#116;0n&#86;&#117;`&#126; 41&#85;[&#77;wr&#76;q&#36;.9&#99;%&#94;C♕h&#125;⛎P&#124;&#38;_" name="♝q♐t2a0obnykldfps3c♆w8z57um9x1iv4g">
<input type="hidden" name="board" value="nen">
<input name="upisc1ezwt78qj2b⚣4f9⛸y♇05gd♛mv" value="⚐e ⚽k`~☭K^l⚠pfS⛩H" type="hidden">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="url" value="">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea style="display:none" name="3ty☡b56gc☾0enf">0D@xpu1MZgS2E⚁5}TohIb^A%cJ$#UaB8⛬3⛙tyzP7CrN.♕!W♤d☘;|FLYVs`l&lt;kK</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								
			
			
				
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

<input type="hidden" name="hash" value="01a50d05a232016b2b102b3679160d351443085d">
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
							<a id="thread-catalog-top" href="/nen/catalog">[Catalog]</a>
				<a id="archive-link-top" href="/nen/archive/">[Archive]</a>
	</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="nen" />
		<div class="thread" id="thread_19" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1534719295561.png">1534719295561.png</a> <span class="unimportant">(48.85 KB, 507x344, <span class="postfilename">Nen_Types_Diagram.png</span>)</span></p><a href="/nen/src/1534719295561.png" target="_blank"><img class="post-image" src="/nen/thumb/1534719295561.png" style="width:255px;height:174px" alt="" /></a></div>    </div>    <div class="post op" id="op_19" ><p class="intro"><input type="checkbox" class="delete" name="delete_19" id="delete_19" /><label for="delete_19"><span class="name">Merlin Prismriver</span> <time datetime="2019-04-01T10:17:39Z">04/01/19 (Mon) 10:17:39</time></label>&nbsp;<a class="post_no" id="post_no_19" onclick="return highlightReply(19, event)" href="/nen/res/19#19">No.</a><a class="post_no" onclick="return citeReply(19)" href="/nen/res/19#q19">19</a><a href="/nen/res/19">[Reply]</a></p><div class="body">What&#39;s /nen/&#39;s nen?<br/><a href=https://kakashi-nenpo.com/jp/res/26383.html>https://kakashi-nenpo.com/jp/res/26383.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_20" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1539094735734.png">1539094735734.png</a> <span class="unimportant">(643.32 KB, 540x809, <span class="postfilename">1532825392921.png</span>)</span></p><a href="/nen/src/1539094735734.png" target="_blank"><img class="post-image" src="/nen/thumb/1539094735734.png" style="width:171px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_20" ><p class="intro"><input type="checkbox" class="delete" name="delete_20" id="delete_20" /><label for="delete_20"><span class="name">ヘンリエッタ☆</span><span class="trip">!b.iTP1Qti.</span> <time datetime="2019-04-01T10:17:39Z">04/01/19 (Mon) 10:17:39</time></label>&nbsp;<a class="post_no" id="post_no_20" onclick="return highlightReply(20, event)" href="/nen/res/20#20">No.</a><a class="post_no" onclick="return citeReply(20)" href="/nen/res/20#q20">20</a><a href="/nen/res/20">[Reply]</a></p><div class="body">Good morning ごきげんよう<br/>Today is October 9<br/>Today&#39;s flower is the Japanese Toad Lily<br/>In the language of flowers it means "Forever Yours"<br/><br/>Today is Sleeping Day ⚘ Walking Day ⚘ Tokyu Day ⚘ Truck Day<br/><br/>On the Day of Sleep its important to know the necessity of sleeping and how to have a good night&#39;s sleep.<br/>It is a day created with the desire to learn.<br/><br/>Sleep often makes time important, but quality is also important<br/>It might be a very good thing to keep in mind how I can sleep well ♪<br/><br/>That&#39;s all for today. Let today be another wonderful day♪<br/><a href=https://kakashi-nenpo.com/jp/res/27304.html>https://kakashi-nenpo.com/jp/res/27304.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_18" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1532841529590.png">1532841529590.png</a> <span class="unimportant">(152.98 KB, 381x544, <span class="postfilename">funny-umi-chiahahahya-face.png</span>)</span></p><a href="/nen/src/1532841529590.png" target="_blank"><img class="post-image" src="/nen/thumb/1532841529590.png" style="width:179px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_18" ><p class="intro"><input type="checkbox" class="delete" name="delete_18" id="delete_18" /><label for="delete_18"><span class="name">Satsuki Yumizuka</span> <time datetime="2019-04-01T10:17:38Z">04/01/19 (Mon) 10:17:38</time></label>&nbsp;<a class="post_no" id="post_no_18" onclick="return highlightReply(18, event)" href="/nen/res/18#18">No.</a><a class="post_no" onclick="return citeReply(18)" href="/nen/res/18#q18">18</a><a href="/nen/res/18">[Reply]</a></p><div class="body">umi funny face<br/><a href=https://kakashi-nenpo.com/jp/res/25936.html>https://kakashi-nenpo.com/jp/res/25936.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_17" data-board="nen">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/nen/src/1531511388810.png">1531511388810.png</a> <span class="unimportant">(649.6 KB, 794x775, <span class="postfilename">Hatsune3.png</span>)</span></p><a href="/nen/src/1531511388810.png" target="_blank"><img class="post-image" src="/nen/thumb/1531511388810.png" style="width:255px;height:249px" alt="" /></a></div>    </div>    <div class="post op" id="op_17" ><p class="intro"><input type="checkbox" class="delete" name="delete_17" id="delete_17" /><label for="delete_17"><span class="name">Hanayo Koizumi</span> <time datetime="2019-04-01T10:17:38Z">04/01/19 (Mon) 10:17:38</time></label>&nbsp;<a class="post_no" id="post_no_17" onclick="return highlightReply(17, event)" href="/nen/res/17#17">No.</a><a class="post_no" onclick="return citeReply(17)" href="/nen/res/17#q17">17</a><a href="/nen/res/17">[Reply]</a></p><div class="body">Her name is HATsune Miku but she doesn&#39;t normally wear a hat? <br/>Explain yourselves weebs!<br/><a href=https://kakashi-nenpo.com/jp/res/25629.html>https://kakashi-nenpo.com/jp/res/25629.html</a></div></div><br class="clear"/><hr/></div>
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
                							<a id="thread-catalog" href="/nen/catalog">[Catalog]</a>
		                <a id="archive-link-bottom" href="/nen/archive/">[Archive]</a>

			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		<form action="/nen/index" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/nen/index">1</a>]				 [<a class="selected">2</a>] 		 Next
					 | <a href="/nen/catalog">Catalog</a>
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