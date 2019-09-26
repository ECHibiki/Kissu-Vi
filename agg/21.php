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
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-1.png" alt="" />
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
<input value="" name="user" type="hidden">
<input   name="lastname"   value=""   type="hidden">
<input type="hidden" name="board" value="agg">
<textarea name="vwdrx5ukc8⚶6yftnl♑" style="display:none">c|x☁-☬vKNoym☀`GQwd'Ti♴ O☪L3&gt;l6kS9U%.♰1V=_(8BnupZ&amp;&lt;]52</textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input   type="hidden"   name="login"   value="&#120;&#125;FKa&#108;Hy⛼?45&#123;☓3twn&#47;'&#9804;26&#88;&#9961;!$%#;hGO&#56;&#62;@&#126;zJS^0&#9887;Iod&lt;j[q(NALVfQ*bW&#61;u ,)&#96;r&#55;&#109;&#67;|e-.☰c&amp;&#105;♛⛗&#115;&#118;:T&#57;&#95;MEPgB]1Dk Z&#43;" >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value="" name="text">
			</td>
		</tr>		<tr>
			<th>
				Options				<input  style="display:none"  type="text"  value="⛥VvG7P~ryNq}dC^☵u#/⛺$U⛪0e@Fm*)Yc"  name="q" >
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<input name="ghndafeicmvp7w9z306421♐8lq" value="" type="hidden">
			
			
				<div style="display:none"><input type="text" name="w☖f⛡aigq7oc" value=""></div>
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
		<div class="thread" id="thread_1777" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568005406895.png">1568005406895.png</a> <span class="unimportant">(1.15 MB, 1200x844, <span class="postfilename" title="__hibino_mina_karakai_jouzu_no_takagi_san_drawn_by_konnyaku_kk_monmon__1d09c3fa161b5d97740bbe85931ab963.png">__hibino_mina_karakai_jouz….png</span>)</span></p><a href="/agg/src/1568005406895.png" target="_blank"><img class="post-image" src="/agg/thumb/1568005406895.png" style="width:255px;height:179px" alt="" /></a></div>    </div>    <div class="post op" id="op_1777" ><p class="intro"><input type="checkbox" class="delete" name="delete_1777" id="delete_1777" /><label for="delete_1777"><span class="name">Cirno</span> <time datetime="2019-09-09T05:05:03Z">09/09/19 (Mon) 05:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1777" onclick="return highlightReply(1777, event)" href="/agg/res/1777#1777">No.</a><a class="post_no" onclick="return citeReply(1777)" href="/agg/res/1777#q1777">1777</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1777">[Reply]</a></p><div class="body">When is Mina going to get her own show? She&#39;s easily the best character. She&#39;s funny, lazy, and her thick, womanly eyebrows mean she has a good heart and spirit.<br/><a href=https://kissu.moe/qa/res/7964.html>https://kissu.moe/qa/res/7964.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1776" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1568004147716.png">1568004147716.png</a> <span class="unimportant">(902.6 KB, 714x1000, <span class="postfilename" title="__eternity_larva_star_sapphire_clownpiece_lily_white_luna_child_and_etc_touhou_drawn_by_pjrmhm_coa__4d477df8100e2e20bc98787398ede636.png">__eternity_larva_star_sapp….png</span>)</span></p><a href="/agg/src/1568004147716.png" target="_blank"><img class="post-image" src="/agg/thumb/1568004147716.png" style="width:182px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1776" ><p class="intro"><input type="checkbox" class="delete" name="delete_1776" id="delete_1776" /><label for="delete_1776"><span class="name">Cirno</span> <time datetime="2019-09-09T04:45:03Z">09/09/19 (Mon) 04:45:03</time></label>&nbsp;<a class="post_no" id="post_no_1776" onclick="return highlightReply(1776, event)" href="/agg/res/1776#1776">No.</a><a class="post_no" onclick="return citeReply(1776)" href="/agg/res/1776#q1776">1776</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1776">[Reply]</a></p><div class="body">weensperm<br/><a href=https://kissu.moe/qa/res/7961.html>https://kissu.moe/qa/res/7961.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1775" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567983593343.mp4">1567983593343.mp4</a> <span class="unimportant">(5.17 MB, 1920x1080, <span class="postfilename">VJd-3M8ix44.mp4</span>)</span></p><a href="/player.php?v=/agg/src/1567983593343.mp4&amp;t=VJd-3M8ix44.mp4&amp;loop=1" target="_blank" class="file"><img class="post-image" src="/agg/thumb/1567983593343.jpg" style="width:240px;height:135px" alt="" /></a></div>    </div>    <div class="post op" id="op_1775" ><p class="intro"><input type="checkbox" class="delete" name="delete_1775" id="delete_1775" /><label for="delete_1775"><span class="name">Anonymous</span> <time datetime="2019-09-08T23:00:03Z">09/08/19 (Sun) 23:00:03</time></label>&nbsp;<a class="post_no" id="post_no_1775" onclick="return highlightReply(1775, event)" href="/agg/res/1775#1775">No.</a><a class="post_no" onclick="return citeReply(1775)" href="/agg/res/1775#q1775">1775</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1775">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2464.html>http://what-ch.mooo.com/what/res/2464.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1774" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567981896908.jpg">1567981896908.jpg</a> <span class="unimportant">(49.35 KB, 640x480, <span class="postfilename">DvJop-AV4AALJR1.jpg</span>)</span></p><a href="/agg/src/1567981896908.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567981896908.png" style="width:255px;height:191px" alt="" /></a></div>    </div>    <div class="post op" id="op_1774" ><p class="intro"><input type="checkbox" class="delete" name="delete_1774" id="delete_1774" /><label for="delete_1774"><span class="name">Anonymous</span> <time datetime="2019-09-08T22:35:03Z">09/08/19 (Sun) 22:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1774" onclick="return highlightReply(1774, event)" href="/agg/res/1774#1774">No.</a><a class="post_no" onclick="return citeReply(1774)" href="/agg/res/1774#q1774">1774</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1774">[Reply]</a></p><div class="body">I wish Mori no <span class="glowgold">Youki na Kobito-tachi: Belfy to Lillibit</span>, localized as <span class="glowpink">The Littl&#39; Bits</span>, was available online.<br/>It seems the best way to get it is a guy selling bootleg DVDs of it here: <a href="https://www.freewebs.com/stuffilike/littlbits.htm" rel="nofollow" target="_blank">https://www.freewebs.com/stuffilike/littlbits.htm</a>  (I don&#39;t even know if the guy there still responds).<br/>There&#39;s some VHS tapes on sites like Amazon too, but a guy converting them to DVD seems much better. <a href="https://www.amazon.com/Littl-Bits-Friends/dp/B0009DWYU2" rel="nofollow" target="_blank">https://www.amazon.com/Littl-Bits-Friends/dp/B0009DWYU2</a><br/><br/>Why is life so difficult?<br/><a href=https://kissu.moe/qa/res/7934.html>https://kissu.moe/qa/res/7934.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1773" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567981373984.png">1567981373984.png</a> <span class="unimportant">(132.89 KB, 244x413, <span class="postfilename">1517025933575.png</span>)</span></p><a href="/agg/src/1567981373984.png" target="_blank"><img class="post-image" src="/agg/thumb/1567981373984.png" style="width:151px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1773" ><p class="intro"><input type="checkbox" class="delete" name="delete_1773" id="delete_1773" /><label for="delete_1773"><span class="name">Anonymous</span> <time datetime="2019-09-08T22:25:03Z">09/08/19 (Sun) 22:25:03</time></label>&nbsp;<a class="post_no" id="post_no_1773" onclick="return highlightReply(1773, event)" href="/agg/res/1773#1773">No.</a><a class="post_no" onclick="return citeReply(1773)" href="/agg/res/1773#q1773">1773</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1773">[Reply]</a></p><div class="body">There is a touhou party on /ota/ and everyone is invited!<br/><a href=https://kissu.moe/qa/res/7933.html>https://kissu.moe/qa/res/7933.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1772" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567973959899.jpg">1567973959899.jpg</a> <span class="unimportant">(301.37 KB, 1419x2108, <span class="postfilename" title="aacf97a656272ad1895066406e2fd40bb4d1b33ac9a7c16e35386622eb813e39.jpg">aacf97a656272ad1895066406e….jpg</span>)</span></p><a href="/agg/src/1567973959899.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567973959899.png" style="width:172px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1772" ><p class="intro"><input type="checkbox" class="delete" name="delete_1772" id="delete_1772" /><label for="delete_1772"><span class="name">Anonymous</span> <time datetime="2019-09-08T20:20:02Z">09/08/19 (Sun) 20:20:02</time></label>&nbsp;<a class="post_no" id="post_no_1772" onclick="return highlightReply(1772, event)" href="/agg/res/1772#1772">No.</a><a class="post_no" onclick="return citeReply(1772)" href="/agg/res/1772#q1772">1772</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1772">[Reply]</a></p><div class="body">cute girls post cute girls<br/><a href=https://kissu.moe/qa/res/7924.html>https://kissu.moe/qa/res/7924.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1771" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567964322027.jpg">1567964322027.jpg</a> <span class="unimportant">(435.03 KB, 1280x720, <span class="postfilename" title="[HorribleSubs] Arifureta Shokugyou de Sekai Saikyou - 08 [720p].mkv_snapshot_21.49_[2019.09.08_13.37.57].jpg">[HorribleSubs] Arifureta S….jpg</span>)</span></p><a href="/agg/src/1567964322027.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567964322027.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1771" ><p class="intro"><input type="checkbox" class="delete" name="delete_1771" id="delete_1771" /><label for="delete_1771"><span class="name">Anonymous</span> <time datetime="2019-09-08T17:40:03Z">09/08/19 (Sun) 17:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1771" onclick="return highlightReply(1771, event)" href="/agg/res/1771#1771">No.</a><a class="post_no" onclick="return citeReply(1771)" href="/agg/res/1771#q1771">1771</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1771">[Reply]</a></p><div class="body">Get in<br/><a href=https://kissu.moe/qa/res/7917.html>https://kissu.moe/qa/res/7917.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1770" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567943658624.gif">1567943658624.gif</a> <span class="unimportant">(39.06 KB, 400x400, <span class="postfilename">1344807408407.gif</span>)</span></p><a href="/agg/src/1567943658624.gif" target="_blank"><img class="post-image" src="/agg/thumb/1567943658624.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1770" ><p class="intro"><input type="checkbox" class="delete" name="delete_1770" id="delete_1770" /><label for="delete_1770"><span class="name">Anonymous</span> <time datetime="2019-09-08T11:55:03Z">09/08/19 (Sun) 11:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1770" onclick="return highlightReply(1770, event)" href="/agg/res/1770#1770">No.</a><a class="post_no" onclick="return citeReply(1770)" href="/agg/res/1770#q1770">1770</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1770">[Reply]</a></p><div class="body">I was banned from 4/jp/. Can I post 2hu on here?<br/><a href=https://kissu.moe/qa/res/7904.html>https://kissu.moe/qa/res/7904.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1769" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567938957766.gif">1567938957766.gif</a> <span class="unimportant">(48.36 KB, 512x512, <span class="postfilename">1567559997383.gif</span>)</span></p><a href="/agg/src/1567938957766.gif" target="_blank"><img class="post-image" src="/agg/thumb/1567938957766.png" style="width:255px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1769" ><p class="intro"><input type="checkbox" class="delete" name="delete_1769" id="delete_1769" /><label for="delete_1769"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-08T10:40:02Z">09/08/19 (Sun) 10:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1769" onclick="return highlightReply(1769, event)" href="/agg/res/1769#1769">No.</a><a class="post_no" onclick="return citeReply(1769)" href="/agg/res/1769#q1769">1769</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1769">[Reply]</a></p><div class="body">/h/ is the worst "Japanese Culture" (yes I know, it&#39;s listed under Adult) board on 4chan<br/><a href=https://kissu.moe/qa/res/7900.html>https://kissu.moe/qa/res/7900.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1768" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567936040156.jpg">1567936040156.jpg</a> <span class="unimportant">(798.14 KB, 1600x1200, <span class="postfilename">1567931405407.jpg</span>)</span></p><a href="/agg/src/1567936040156.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567936040156.png" style="width:240px;height:180px" alt="" /></a></div>    </div>    <div class="post op" id="op_1768" ><p class="intro"><input type="checkbox" class="delete" name="delete_1768" id="delete_1768" /><label for="delete_1768"><span class="name">Anonymous</span> <time datetime="2019-09-08T09:50:03Z">09/08/19 (Sun) 09:50:03</time></label>&nbsp;<a class="post_no" id="post_no_1768" onclick="return highlightReply(1768, event)" href="/agg/res/1768#1768">No.</a><a class="post_no" onclick="return citeReply(1768)" href="/agg/res/1768#q1768">1768</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1768">[Reply]</a></p><div class="body">im gonna cum<br/><a href=http://what-ch.mooo.com/what/res/2458.html>http://what-ch.mooo.com/what/res/2458.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1767" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567934126980.jpg">1567934126980.jpg</a> <span class="unimportant">(149.52 KB, 968x873, <span class="postfilename">1565932667961.jpg</span>)</span></p><a href="/agg/src/1567934126980.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567934126980.png" style="width:255px;height:230px" alt="" /></a></div>    </div>    <div class="post op" id="op_1767" ><p class="intro"><input type="checkbox" class="delete" name="delete_1767" id="delete_1767" /><label for="delete_1767"><a class="email" href="mailto:%20"><span class="name">Anonymous</span></a> <time datetime="2019-09-08T09:20:03Z">09/08/19 (Sun) 09:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1767" onclick="return highlightReply(1767, event)" href="/agg/res/1767#1767">No.</a><a class="post_no" onclick="return citeReply(1767)" href="/agg/res/1767#q1767">1767</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1767">[Reply]</a></p><div class="body">/qa/ on the left /jp/ on the right<br/><a href=https://kissu.moe/qa/res/7896.html>https://kissu.moe/qa/res/7896.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1766" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567928048044.jpg">1567928048044.jpg</a> <span class="unimportant">(732.44 KB, 1160x1200, <span class="postfilename" title="39578cf84afdde4b01c4461b5eed34f9.jpg">39578cf84afdde4b01c4461b5e….jpg</span>)</span></p><a href="/agg/src/1567928048044.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567928048044.png" style="width:247px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1766" ><p class="intro"><input type="checkbox" class="delete" name="delete_1766" id="delete_1766" /><label for="delete_1766"><span class="name">Anonymous</span> <time datetime="2019-09-08T07:35:03Z">09/08/19 (Sun) 07:35:03</time></label>&nbsp;<a class="post_no" id="post_no_1766" onclick="return highlightReply(1766, event)" href="/agg/res/1766#1766">No.</a><a class="post_no" onclick="return citeReply(1766)" href="/agg/res/1766#q1766">1766</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1766">[Reply]</a></p><div class="body">here I go....<br/><a href=https://kissu.moe/qa/res/7892.html>https://kissu.moe/qa/res/7892.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1765" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567923405212.jpeg">1567923405212.jpeg</a> <span class="unimportant">(222.05 KB, 960x800, <span class="postfilename">tongue out nerd.jpeg</span>)</span></p><a href="/agg/src/1567923405212.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567923405212.png" style="width:255px;height:213px" alt="" /></a></div>    </div>    <div class="post op" id="op_1765" ><p class="intro"><input type="checkbox" class="delete" name="delete_1765" id="delete_1765" /><label for="delete_1765"><span class="name">Anonymous</span> <time datetime="2019-09-08T06:20:03Z">09/08/19 (Sun) 06:20:03</time></label>&nbsp;<a class="post_no" id="post_no_1765" onclick="return highlightReply(1765, event)" href="/agg/res/1765#1765">No.</a><a class="post_no" onclick="return citeReply(1765)" href="/agg/res/1765#q1765">1765</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1765">[Reply]</a></p><div class="body"><a href=https://kissu.moe/qa/res/7849.html>https://kissu.moe/qa/res/7849.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1764" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567904746899.jpg">1567904746899.jpg</a> <span class="unimportant">(968.89 KB, 1280x1021, <span class="postfilename" title="[HorribleSubs] Dumbbell Nan Kilo Moteru - 10 [720p].mkv_snapshot_19.46_[2019.09.07_21.00.47].jpg">[HorribleSubs] Dumbbell Na….jpg</span>)</span></p><a href="/agg/src/1567904746899.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567904746899.png" style="width:255px;height:204px" alt="" /></a></div>    </div>    <div class="post op" id="op_1764" ><p class="intro"><input type="checkbox" class="delete" name="delete_1764" id="delete_1764" /><label for="delete_1764"><span class="name">Anonymous</span> <time datetime="2019-09-08T01:10:03Z">09/08/19 (Sun) 01:10:03</time></label>&nbsp;<a class="post_no" id="post_no_1764" onclick="return highlightReply(1764, event)" href="/agg/res/1764#1764">No.</a><a class="post_no" onclick="return citeReply(1764)" href="/agg/res/1764#q1764">1764</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1764">[Reply]</a></p><div class="body">I really, <strong><em>really</strong></em>, hope that when the doujins of this come out they look as good as the anime itself.<br/><a href=https://kissu.moe/qa/res/7826.html>https://kissu.moe/qa/res/7826.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1763" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567904555299.jpg">1567904555299.jpg</a> <span class="unimportant">(185.67 KB, 496x1122, <span class="postfilename">ez.jpg</span>)</span></p><a href="/agg/src/1567904555299.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567904555299.png" style="width:113px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1763" ><p class="intro"><input type="checkbox" class="delete" name="delete_1763" id="delete_1763" /><label for="delete_1763"><span class="name">Anonymous</span> <time datetime="2019-09-08T01:05:03Z">09/08/19 (Sun) 01:05:03</time></label>&nbsp;<a class="post_no" id="post_no_1763" onclick="return highlightReply(1763, event)" href="/agg/res/1763#1763">No.</a><a class="post_no" onclick="return citeReply(1763)" href="/agg/res/1763#q1763">1763</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1763">[Reply]</a></p><div class="body">continuation of <a onclick="highlightReply(&#39;3579&#39;, event);" href="/qa/res/3579.php#3579">&gt;&gt;3579</a><br/><span class="quote"><br/>&gt;I want to make a collection of all OPs and EDs, for no specific reason other than to have them and watch them at my leisure. I&#39;ll probably start off with favorites and then as those fill up, expand and create an archive of most if not all OPs/EDs ever</span><br/><br/>What are some essentials that I should include and what are some underrated ones that I would never think of<br/><br/>I am working on building a site to host all of this on so everybody can watch it, as of today I added a comment function so you will be able to comment on your favorite OPs and talk about it with other anons. Some features will include being able to watch random OPs, search by year, airing anime, series, and maybe studio if i want to add that.<br/><a href=https://kissu.moe/qa/res/7825.html>https://kissu.moe/qa/res/7825.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1762" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567902991962.jpg">1567902991962.jpg</a> <span class="unimportant">(12.8 KB, 300x221, <span class="postfilename" title="12321221_1018073238272531_6202215554365103085_n.jpg">12321221_1018073238272531_….jpg</span>)</span></p><a href="/agg/src/1567902991962.jpg" target="_blank"><img class="post-image" src="/agg/thumb/1567902991962.png" style="width:240px;height:177px" alt="" /></a></div>    </div>    <div class="post op" id="op_1762" ><p class="intro"><input type="checkbox" class="delete" name="delete_1762" id="delete_1762" /><label for="delete_1762"><span class="name">Anonymous</span> <time datetime="2019-09-08T00:40:02Z">09/08/19 (Sun) 00:40:02</time></label>&nbsp;<a class="post_no" id="post_no_1762" onclick="return highlightReply(1762, event)" href="/agg/res/1762#1762">No.</a><a class="post_no" onclick="return citeReply(1762)" href="/agg/res/1762#q1762">1762</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1762">[Reply]</a></p><div class="body">ｷﾀ━━━(ﾟ∀ﾟ)━━━!!<br/><a href=http://what-ch.mooo.com/what/res/2448.html>http://what-ch.mooo.com/what/res/2448.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1761" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567896201811.png">1567896201811.png</a> <span class="unimportant">(986.64 KB, 560x600, <span class="postfilename">61645253_p0.png</span>)</span></p><a href="/agg/src/1567896201811.png" target="_blank"><img class="post-image" src="/agg/thumb/1567896201811.png" style="width:238px;height:255px" alt="" /></a></div>    </div>    <div class="post op" id="op_1761" ><p class="intro"><input type="checkbox" class="delete" name="delete_1761" id="delete_1761" /><label for="delete_1761"><span class="name">Anonymous</span> <time datetime="2019-09-07T22:45:02Z">09/07/19 (Sat) 22:45:02</time></label>&nbsp;<a class="post_no" id="post_no_1761" onclick="return highlightReply(1761, event)" href="/agg/res/1761#1761">No.</a><a class="post_no" onclick="return citeReply(1761)" href="/agg/res/1761#q1761">1761</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1761">[Reply]</a></p><div class="body">seasonal stream is starting in 20 minutes! <br/><a href="https://theatre.kissu.moe/kiss/yukkuri" rel="nofollow" target="_blank">https://theatre.kissu.moe/kiss/yukkuri</a><br/><a href=https://kissu.moe/qa/res/7821.html>https://kissu.moe/qa/res/7821.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1760" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567878660462.png">1567878660462.png</a> <span class="unimportant">(2.02 MB, 1920x1080, <span class="postfilename">food.png</span>)</span></p><a href="/agg/src/1567878660462.png" target="_blank"><img class="post-image" src="/agg/thumb/1567878660462.png" style="width:255px;height:143px" alt="" /></a></div>    </div>    <div class="post op" id="op_1760" ><p class="intro"><input type="checkbox" class="delete" name="delete_1760" id="delete_1760" /><label for="delete_1760"><span class="name">Anonymous</span> <time datetime="2019-09-07T17:55:03Z">09/07/19 (Sat) 17:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1760" onclick="return highlightReply(1760, event)" href="/agg/res/1760#1760">No.</a><a class="post_no" onclick="return citeReply(1760)" href="/agg/res/1760#q1760">1760</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1760">[Reply]</a></p><div class="body">Anybody hungry?<br/><a href=https://kissu.moe/qa/res/7798.html>https://kissu.moe/qa/res/7798.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1759" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567875125660.jpeg">1567875125660.jpeg</a> <span class="unimportant">(92.33 KB, 1074x842, <span class="postfilename" title="c78ffb76a594bed4fdc1db9615a33903 - Copy.jpeg">c78ffb76a594bed4fdc1db961….jpeg</span>)</span></p><a href="/agg/src/1567875125660.jpeg" target="_blank"><img class="post-image" src="/agg/thumb/1567875125660.png" style="width:255px;height:200px" alt="" /></a></div>    </div>    <div class="post op" id="op_1759" ><p class="intro"><input type="checkbox" class="delete" name="delete_1759" id="delete_1759" /><label for="delete_1759"><span class="name">Anonymous</span> <time datetime="2019-09-07T16:55:03Z">09/07/19 (Sat) 16:55:03</time></label>&nbsp;<a class="post_no" id="post_no_1759" onclick="return highlightReply(1759, event)" href="/agg/res/1759#1759">No.</a><a class="post_no" onclick="return citeReply(1759)" href="/agg/res/1759#q1759">1759</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1759">[Reply]</a></p><div class="body">Guys, where&#39;s gn?<br/><a href=https://kissu.moe/qa/res/7787.html>https://kissu.moe/qa/res/7787.html</a></div></div><br class="clear"/><hr/></div><div class="thread" id="thread_1758" data-board="agg">    <div class="files">            <div class="file"><p class="fileinfo">File: <a href="/agg/src/1567870572603.png">1567870572603.png</a> <span class="unimportant">(917.92 KB, 1884x1180, <span class="postfilename">63742072_p0.png</span>)</span></p><a href="/agg/src/1567870572603.png" target="_blank"><img class="post-image" src="/agg/thumb/1567870572603.png" style="width:255px;height:160px" alt="" /></a></div>    </div>    <div class="post op" id="op_1758" ><p class="intro"><input type="checkbox" class="delete" name="delete_1758" id="delete_1758" /><label for="delete_1758"><span class="name">Anonymous</span> <time datetime="2019-09-07T15:40:03Z">09/07/19 (Sat) 15:40:03</time></label>&nbsp;<a class="post_no" id="post_no_1758" onclick="return highlightReply(1758, event)" href="/agg/res/1758#1758">No.</a><a class="post_no" onclick="return citeReply(1758)" href="/agg/res/1758#q1758">1758</a><i class="fa fa-lock" title="Locked"></i><a href="/agg/res/1758">[Reply]</a></p><div class="body">Is there any love more pure and beautiful than love between girls?<br/><a href=https://kissu.moe/qa/res/7777.html>https://kissu.moe/qa/res/7777.html</a></div></div><br class="clear"/><hr/></div>
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
		<form action="/agg/20" method="get"><input type="submit" value="Previous" /></form> 		 [<a href="/agg/index">1</a>]				 [<a href="/agg/2">2</a>]				 [<a href="/agg/3">3</a>]				 [<a href="/agg/4">4</a>]				 [<a href="/agg/5">5</a>]				 [<a href="/agg/6">6</a>]				 [<a href="/agg/7">7</a>]				 [<a href="/agg/8">8</a>]				 [<a href="/agg/9">9</a>]				 [<a href="/agg/10">10</a>]				 [<a href="/agg/11">11</a>]				 [<a href="/agg/12">12</a>]				 [<a href="/agg/13">13</a>]				 [<a href="/agg/14">14</a>]				 [<a href="/agg/15">15</a>]				 [<a href="/agg/16">16</a>]				 [<a href="/agg/17">17</a>]				 [<a href="/agg/18">18</a>]				 [<a href="/agg/19">19</a>]				 [<a href="/agg/20">20</a>]				 [<a class="selected">21</a>]				 [<a href="/agg/22">22</a>]				 [<a href="/agg/23">23</a>]				 [<a href="/agg/24">24</a>]				 [<a href="/agg/25">25</a>] 		 <form action="/agg/22" method="get"><input type="submit" value="Next" /></form>
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