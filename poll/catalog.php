<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
		  , board_name = "poll";
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
								<title>poll - Catalog</title>
</head>
<body class="8chan vichan is-not-moderator theme-catalog active-catalog" data-stylesheet="Dark-kissu.css">
<div id="uppercontents">
	<div id="subuppercontents">
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

?>		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/jp/index.html">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-24.png" alt="" />
<script>
document.getElementById("bannerimg").onclick = function(){

        var request = new XMLHttpRequest(); 
        var motd = "";
        request.open("GET", 'https://kissu.moe/motd.txt');
                request.onreadystatechange = function() { 
                if (this.readyState === 4 && this.status === 200) {
                        motd = this.responseText;
                        console.log(motd);
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
	<h1 style="padding-top:10px;">/poll/ - polling</h1>
	<div class="subtitle">
					</div>
	</header>
	<h1>New Thread</h1>
	<div id="topcontainer">
	
	
	<div>
						
			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none"   ><input type="text" name="login" value="C+!gs[Mj2K⚩,p3#⚳eE"   ></div   >
<span style="display:none"><input type="text" name="q" value=""></span>
<input type="hidden" name="board" value="poll">
<textarea name="text" style="display:none">!UuL0^&lt;Sx@|v </textarea>
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input   type="hidden"   name="b♏q1o74k5s0vrixnl⚶♮fcpaez3"   value="jkFWm)⛒U#&amp;2w}O5!d♾D~1y_g/B&gt;ai69Hc ou3 :b-☕0X@+=e,⚩E⛰;S⛚t\nzR♔I^NThlGf?(☠vK*L$CprMA]Y4J8'P7[`⛧.V{xZ">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				
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

<input type="hidden" name="hash" value="1373aa5807100bdd778877d6052ab2496cf44744">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
				</div>
	</div>
	</div>
	</div>
		<div id="lowercontents">
	<hr /><div class="blotter"><h2></h2> <hr/>Proud part of the /qa/ webring with<a style="" href="http://4taba.net/"> http://4taba.net/,</a>,<a href="https://qa.booru.org/">https://qa.booru.org/</a> and our redacted chatrooms</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/poll/">[Index]</a>
				<a id="archive-link-top" href="/poll/archive/">[Archive]</a>

	</span>
	<br/><hr/>
	<div id='catalog_options'>
        <span>Sort by: </span>
        <select id="sort_by" style="display: inline-block">
                <option selected value="bump:desc">Bump order</option>
                <option value="time:desc">Creation date</option>
                <option value="reply:desc">Reply count</option>
                <!--<option value="random:desc">Random</option>-->
        </select>
 
        <span>Image size: </span>
        <select id="image_size" style="display: inline-block">
                <option value="vsmall">Very small</option>
                <option value="small" selected>Small</option>
                <option value="large">Large</option>
        </select>
		</div>
		<br/>
        <div class="threads">
                <div id="Grid">
                                        <div class="mix"
				data-reply="1"
				 data-bump="1569787083"
				 data-time="1569786981"
				 data-id="37"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/37">  
													<img src="/poll/thumb/1569786981761.png" 
						                                                 id="img-37" data-subject="asdsa" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:58">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										asdsa
									</span>
								</p>
							
								<div data-lifespan='24' data-creationtime='1569786981' class='lolyoucantnestforms'><label><input type='checkbox' name='pollopt' value='0'/>zxczxc</label><br/><label><input type='checkbox' name='pollopt' value='1'/>zczxc</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javscript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>asd
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569786920"
				 data-time="1569786920"
				 data-id="36"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/36">  
													<img src="/static/deleted.png" 
						                                                 id="img-36" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:55">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569786920' class='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>f</label><br/><label><input type='radio' name='pollopt' value='1'/>f</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javscript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>fff
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569786886"
				 data-time="1569786886"
				 data-id="35"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/35">  
													<img src="/static/deleted.png" 
						                                                 id="img-35" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:54">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569786886' class='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>123</label><br/><label><input type='radio' name='pollopt' value='1'/>4</label><br/><label><input type='radio' name='pollopt' value='2'/>0</label><br/><label><input type='radio' name='pollopt' value='3'/>4</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a onclick='return false'><br/>[View Responses]</a></div><hr/>123.l
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569786809"
				 data-time="1569786809"
				 data-id="34"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/34">  
													<img src="/static/deleted.png" 
						                                                 id="img-34" data-subject="ff" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:53">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										ff
									</span>
								</p>
							
								<div data-lifespan='25' data-creationtime='1569786809' class='lolyoucantnestforms'><label><input type='checkbox' name='pollopt' value='0'/>s</label><br/><label><input type='checkbox' name='pollopt' value='1'/>s</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a onclick='return false'><br/>[View Responses]</a></div><hr/>zzz
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569786720"
				 data-time="1569786720"
				 data-id="33"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/33">  
													<img src="/static/deleted.png" 
						                                                 id="img-33" data-subject="zzz" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:52">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										zzz
									</span>
								</p>
							
								<div data-lifespan='24' class='lolyoucantnestforms'><label><input type='checkbox' name='pollopt' value='0'/>zz</label><br/><label><input type='checkbox' name='pollopt' value='1'/>zzz</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a onclick='return false'><br/>[View Responses]</a></div><hr/>asdc
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569786605"
				 data-time="1569786605"
				 data-id="32"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/32">  
													<img src="/static/deleted.png" 
						                                                 id="img-32" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:50">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div class='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>345</label><br/><label><input type='radio' name='pollopt' value='1'/>ds</label><br/><label><input type='radio' name='pollopt' value='2'/>g</label><br/><label><input type='radio' name='pollopt' value='3'/>d</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a onclick='return false'><br/>[View Responses]</a></div><hr/>sdsdfg
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569786145"
				 data-time="1569786145"
				 data-id="31"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/31">  
													<img src="/static/deleted.png" 
						                                                 id="img-31" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:42">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div id='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>3</label><br/><label><input type='radio' name='pollopt' value='1'/>5</label><br/><input type='submit' onclick='return false' value='Make Response'><a onclick='return false'>[View Responses]</a></div><hr/>345z
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569785995"
				 data-time="1569785995"
				 data-id="30"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/30">  
													<img src="/static/deleted.png" 
						                                                 id="img-30" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:39">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div id='lolyoucantnestforms'><label><input type='radio' name='pollopt' value='0'/>asd2</label><br/><label><input type='radio' name='pollopt' value='1'/>as1</label><br/><label><input type='radio' name='pollopt' value='2'/>33</label><br/><input type='submit' onclick='return false' value='Make Response'></div><hr/>asdz
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569785884"
				 data-time="1569785884"
				 data-id="29"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/29">  
													<img src="/static/deleted.png" 
						                                                 id="img-29" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:38">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<form onsubmit='return false'><label><input type='radio' name='pollopt' value='0'/>12</label><br/><label><input type='radio' name='pollopt' value='1'/>21</label><br/><input type='submit' value='Make Response'></form><hr/>ad
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569785706"
				 data-time="1569785706"
				 data-id="28"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/28">  
													<img src="/static/deleted.png" 
						                                                 id="img-28" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:35">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<form onsubmit='return false'><label><input type='radio' name='pollopt' value='0'/>asd2</label><br/><label><input type='radio' name='pollopt' value='1'/>asd1</label><br/><input type='submit' value='Make Response'></form><hr/>asd
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569785630"
				 data-time="1569785630"
				 data-id="27"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/27">  
													<img src="/static/deleted.png" 
						                                                 id="img-27" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:33">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<form onsubmit='return false'><label><input type='radio' name='pollopt' value='0'/>te1</label><br/><label><input type='radio' name='pollopt' value='1'/>tw2</label><br/><input type='submit' value='Make Response'></form><hr/>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569785487"
				 data-time="1569785487"
				 data-id="26"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/26">  
													<img src="/static/deleted.png" 
						                                                 id="img-26" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:31">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<form onpost='return false'><label><input type='radio' name='pollopt' value='0'/>test</label><br/><label><input type='radio' name='pollopt' value='1'/>test</label><br/><input type='submit' value='Make Response'></form><hr/>tetef
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569785434"
				 data-time="1569785434"
				 data-id="25"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/25">  
													<img src="/static/deleted.png" 
						                                                 id="img-25" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:30">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<hr/>tete
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="3"
				 data-bump="1569784058"
				 data-time="1569783327"
				 data-id="21"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/21">  
													<img src="/static/deleted.png" 
						                                                 id="img-21" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 19:07">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 3 / I: 0</strong>
                                                        								<br />
							
								<form><input></form>test
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569779125"
				 data-time="1569779125"
				 data-id="20"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/20">  
													<img src="/static/deleted.png" 
						                                                 id="img-20" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 17:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								asdasd
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569779113"
				 data-time="1569779113"
				 data-id="19"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/19">  
													<img src="/static/deleted.png" 
						                                                 id="img-19" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 17:45">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								tets
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569779052"
				 data-time="1569779052"
				 data-id="18"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/18">  
													<img src="/static/deleted.png" 
						                                                 id="img-18" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 17:44">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								sdfdsf
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569779044"
				 data-time="1569779044"
				 data-id="17"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/17">  
													<img src="/static/deleted.png" 
						                                                 id="img-17" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 17:44">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								yesy
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569773425"
				 data-time="1569773425"
				 data-id="16"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/16">  
													<img src="/static/deleted.png" 
						                                                 id="img-16" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 16:10">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								testzzz
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569773052"
				 data-time="1569773052"
				 data-id="15"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/15">  
													<img src="/poll/thumb/1569773052565.png" 
						                                                 id="img-15" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 16:04">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								test
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569771621"
				 data-time="1569771621"
				 data-id="14"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/14">  
													<img src="/poll/thumb/1569771621529.png" 
						                                                 id="img-14" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 15:40">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								test
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="12"
				 data-bump="1569737572"
				 data-time="1569720868"
				 data-id="1"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/1">  
													<img src="/poll/thumb/1569720868242.png" 
						                                                 id="img-1" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 29 06:12">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 12 / I: 0</strong>
                                                        								<br />
							
								test
                                                </div>
                                </div>
                        </div>
                                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="">[Refresh]</a>
		<a id="thread-top" href="#top">[Top]</a>
							<a id="thread-catalog" href="/poll/">[Index]</a>
				<a id="archive-link-top" href="/poll/archive/">[Archive]</a>

	</span>
	<br/><hr/>
	<a name='bottom'></a>
	<footer>
	<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
		<a href="https://engine.vichan.net/">vichan</a> 5.1.4 
		+ <a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> 0.8.1 -
	<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
	<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel
	<br><a href="https://github.com/ECHibiki/ViQa-Kissu/">Kissu</a> Copyleft 2018-2019</p>
		<p class="unimportant" style="text-align:center;">All trademarks, copyrights, comments, and images on this page are owned by and are the responsibility of their respective parties.</p><p class="unimportant" style="text-align:center;">Concerns to the gmail of ECVerniy</p></footer>
	
<!-- <script type="text/javascript"> -->
		<!-- var styles = { -->
			<!--  -->
			<!-- 'Yotsu Kissu B' : '/stylesheets/yotsuba-kissu-b.css', -->
			<!-- 'Dark-Kissu(Saturated)' : '/stylesheets/Dark-kissu.css', -->
			<!-- 'Kissu(Experimental)' : '/stylesheets/kissu.css', -->
			<!-- 'New-Years' : '/stylesheets/new-years-theme.css', -->
			<!-- 'Nen' : '/stylesheets/hatate.css', -->
			<!-- 'Trevor' : '/stylesheets/trevor.css', -->
			<!-- 'Yotsuba B' : '/stylesheets/style.css', -->
			<!-- 'Yotsuba' : '/stylesheets/yotsuba.css', -->
			<!-- 'Dark' : '/stylesheets/dark.css', -->
			<!-- 'Futaba' : '/stylesheets/futaba.css', -->
			<!-- 'Burichan' : '/stylesheets/burichan.css', -->
			<!-- 'caffe' : '/stylesheets/caffe.css', -->
			<!-- 'confraria' : '/stylesheets/confraria.css', -->
			<!-- 'dark_roach' : '/stylesheets/dark_roach.css', -->
			<!-- 'favela' : '/stylesheets/favela.css', -->
			<!-- 'futaba+vichan' : '/stylesheets/futaba+vichan.css', -->
			<!-- 'futaba-light' : '/stylesheets/futaba-light.css', -->
			<!-- 'gentoochan' : '/stylesheets/gentoochan.css', -->
			<!-- 'greendark' : '/stylesheets/greendark.css', -->
			<!-- 'jungle' : '/stylesheets/jungle.css', -->
			<!-- 'miku' : '/stylesheets/miku.css', -->
			<!-- 'nigrachan' : '/stylesheets/nigrachan.css', -->
			<!-- 'northboard_cb' : '/stylesheets/northboard_cb.css', -->
			<!-- 'notsuba' : '/stylesheets/notsuba.css', -->
			<!-- 'novo_jungle' : '/stylesheets/novo_jungle.css', -->
			<!-- 'photon' : '/stylesheets/photon.css', -->
			<!-- 'piwnichan' : '/stylesheets/piwnichan.css', -->
			<!-- 'ricechan' : '/stylesheets/ricechan.css', -->
			<!-- 'roach' : '/stylesheets/roach.css', -->
			<!-- 'rugby' : '/stylesheets/rugby.css', -->
			<!-- 'sharp' : '/stylesheets/sharp.css', -->
			<!-- 'stripes' : '/stylesheets/stripes.css', -->
			<!-- 'szalet' : '/stylesheets/szalet.css', -->
			<!-- 'terminal2' : '/stylesheets/terminal2.css', -->
			<!-- 'testorange' : '/stylesheets/testorange.css', -->
			<!-- 'v8ch' : '/stylesheets/v8ch.css', -->
			<!-- 'wasabi' : '/stylesheets/wasabi.css', -->
			<!--  -->
		<!-- };  -->
		<!-- if(is_style_select == false){ -->
			<!-- onready(init); -->
		<!-- } -->
	<!-- </script> -->
	
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