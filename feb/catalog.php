<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
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
					<script type="text/javascript" src="/main.js?12"></script>
								<title>feb - Catalog</title>
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

?>		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="http://bunbunmaru.com/wakaba/general/">bun</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
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
	<h1 style="padding-top:10px;">/feb/ - We got here in February</h1>
	<div class="subtitle">
									and we won&#039;t leave
								</div>
	</header>
	<h1>New Thread</h1>
	<div id="topcontainer">
	
	
	<div>
						
			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input style="display:none" type="text" value="33764" name="lastname">
<span style="display:none" ><input type="text" name="⛫g3w6kef92lavy☁xs" value="J3-⚼26rt!,l$gNvKc☜4☠ x♏7&gt;neTG\⛻msjP0?`h.XzQ_;|#f)=^H1L⛿Fq&lt;&amp;a[VACR(y~ZEud☀bwSp%+" ></span >
<input type="hidden" name="board" value="feb">
<input style="display:none" type="text" value="so&amp;T{5&#120;EL(&#82;&#126;♊f&#67;np&#125;./!@&#50;3N,&#74;8`&lt;⛼0jM7" name="y1☭4oxh7cdeabtpjqs52">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input value="$&#73;J&#98;&amp;,T⛅5&#67;NGa⚎UASy?W@D-(&#111;%Q~6&#104;P8&#51;\R&#99;Vv4⚫⛛d^s&#109;&#117;F*!&#108;zw[&#49;'j)`&#43;2H &#95;f♡.&#77;7&#114;&#124;&#9825;⚺&#9962;&#61; /ipx&#116;&#88;&#103;{" name="message" type="hidden">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value="&#118;&#100;GVk*Z^&#84;z4(3&#93;&#56;'&#89;&#123;6&#53;Xy:&#73;&#99;&#106;f&#36;W&#69;rB&#112;+!⚸&#44;q|&#48;}D&#9740;♶♽&#77;&#103;\%♈J xC&#76;#⚭☈&gt;" name="url">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea name="q" style="display:none">UR3rlLvp,g65☪).!♓A⚴h}ai[K1De4'k♿osS{9ztE($B=w:^|mM0#y⚼_Z/%2⛱N@V?u P♩JOn7cX-+&amp;jITx⛛♱;~q]⛎WH&lt;\*FGCf`</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div style="display:none"><input type="text" name="user" value=""></div>
			
			
				<div style="display:none"><input type="text" name="firstname" value=""></div>
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<div style="display:none"><input type="text" name="kybnieaorc58jv♶q6up94mxs0gt7f♹3⚉w2" value=")Jz&amp;7ZIaf25|bT9+.♅`^e,$QSF}C⛀hq"></div>
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<input style="display:none" type="text" value="8pn!`*t2L %♼jW" name="o9381a6xjc" >
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

<input type="hidden" name="hash" value="154e339df07a775cace8dc09fc61e7d1a71bc0d0">
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
							<a id="thread-catalog-top" href="/feb/">[Index]</a>
				<a id="archive-link-top" href="/feb/archive/">[Archive]</a>

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
				 data-bump="1549785868"
				 data-time="1549765505"
				 data-id="50"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/50">  
													<img src="/feb/thumb/1549765504920.png" 
						                                                 id="img-50" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 10 08:04">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<br />
							
								The missing /qa/ girl
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1549608707"
				 data-time="1549608707"
				 data-id="49"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/49">  
													<img src="//img.youtube.com/vi/ULnyvnFgvHo/0.jpg" 
						                                                 id="img-49" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 08 06:51">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="3"
				 data-bump="1549600776"
				 data-time="1549520437"
				 data-id="45"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/45">  
													<img src="/feb/thumb/1549520437669.png" 
						                                                 id="img-45" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 08 04:39">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 3 / I: 1</strong>
                                                        								<br />
							
								It's almost time!
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="7"
				 data-bump="1549330564"
				 data-time="1549125467"
				 data-id="28"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/28">  
													<img src="/feb/thumb/1549125467651.png" 
						                                                 id="img-28" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 05 01:36">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 7 / I: 2</strong>
                                                        								<br />
							
								After checking the current [absolute dilapidated rusty shanty town of a] state of other imageboards, this might the first I could resettle on.<br/>However, I would deem it necessary to leave everything behind for good. I assume most will still majorily browse the bigger site, but I hope this place can get an identity for its own.<br/><br/>Also, please do not ever add the board faggotry all the other newer sites did and keep board count in general to a minimum as long as possible.<br/><br/>I hope to find that magical realm again
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="2"
				 data-bump="1549234131"
				 data-time="1549212368"
				 data-id="37"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/37">  
													<img src="/feb/thumb/1549212368513.png" 
						                                                 id="img-37" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 03 22:48">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 2 / I: 1</strong>
                                                        								<br />
							
								why is she poking her swimsuit? is there something wrong with it
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1549234057"
				 data-time="1549234057"
				 data-id="40"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/40">  
													<img src="/feb/thumb/1549234057182.png" 
						                                                 id="img-40" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 03 22:47">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Did you remember to go to church and be a good Christian today?
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="9"
				 data-bump="1549226148"
				 data-time="1549046245"
				 data-id="17"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/17">  
													<img src="/feb/thumb/1549046245587.png" 
						                                                 id="img-17" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 03 20:35">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 9 / I: 1</strong>
                                                        								<br />
							
								heh
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1549172963"
				 data-time="1549172963"
				 data-id="35"
				 data-sticky="false"
				 data-locked="true"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/35">  
													<img src="/feb/thumb/1549172963372.png" 
						                                                 id="img-35" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 03 05:49">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<!DOCTYPE HTML>
<html>
<head>
<style>
#timer { 
text-align: center; 
font-size: 40px; 
font-color: "b98de2";
margin-top: 0px;}
}
</style>
</head>
<body>

<p id="timer"></p>

<script>
var countDownDate = new Date("Feb 8, 2019 0:0:0").getTime();

var x = setInterval(function() {

var now = new Date().getTime();

var distance = countDownDate - now;

var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

var your_thread_message = "";

document.getElementById("timer").innerHTML = your_thread_message + days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";

if (distance < 0) {
clearInterval(x);
document.getElementById("timer").innerHTML = your_thread_message + " -release the boson- ";
}
}, 1000);

</script>

</body>
</html>

                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1549146150"
				 data-time="1549146150"
				 data-id="31"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/31">  
													<img src="/static/kissu-spoiler.png" 
						                                                 id="img-31" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 02 22:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 1</strong>
                                                        								<br />
							
								They came here in Febuary
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="2"
				 data-bump="1549062189"
				 data-time="1548997846"
				 data-id="10"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/10">  
													<img src="/feb/thumb/1548997846113.png" 
						                                                 id="img-10" data-subject="pizza" data-name="pizza" data-muhdifference="" class="feb thread-image" title="Feb 01 23:03">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 2 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										pizza
									</span>
								</p>
							
								pizza
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1549062114"
				 data-time="1548993666"
				 data-id="2"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/2">  
													<img src="/feb/thumb/1548993666156.png" 
						                                                 id="img-2" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 01 23:01">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<br />
							
								仕方がない
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="3"
				 data-bump="1549009204"
				 data-time="1548993550"
				 data-id="1"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/1">  
													<img src="/feb/thumb/1548993550211.png" 
						                                                 id="img-1" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 01 08:20">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 3 / I: 3</strong>
                                                        								<br />
							
								suck my cock dude
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="3"
				 data-bump="1549008848"
				 data-time="1548997218"
				 data-id="9"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/9">  
													<img src="/feb/thumb/1548997218043.png" 
						                                                 id="img-9" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 01 08:14">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 3 / I: 2</strong>
                                                        								<br />
							
								Absolutely boson
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="2"
				 data-bump="1548995298"
				 data-time="1548993831"
				 data-id="4"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/4">  
													<img src="/feb/thumb/1548993831514.png" 
						                                                 id="img-4" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 01 04:28">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 2 / I: 0</strong>
                                                        								<br />
							
								Hello.
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1548995067"
				 data-time="1548994912"
				 data-id="5"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/5">  
													<img src="/feb/thumb/1548994912695.png" 
						                                                 id="img-5" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Feb 01 04:24">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<br />
							
								Excuse me, but you seem to have made a dire mistake upon making this board. You didn't mention the specific even in history in which they defended us from the hordes of mlpol, before not leaving. It was nice up until that point, but now I've got no choice but to leave this place and give it a low 0/10.
                                                </div>
                                </div>
                        </div>
                                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="">[Refresh]</a>
		<a id="thread-top" href="#top">[Top]</a>
							<a id="thread-catalog" href="/feb/">[Index]</a>
				<a id="archive-link-top" href="/feb/archive/">[Archive]</a>

	</span>
	<br/><hr/>
	<a name='bottom'></a>
	<footer>
		<p class="unimportant" style="margin-top:20px;text-align:center;">- Tinyboard + 
			<a href="https://engine.vichan.net/">vichan</a> 5.1.4 -
		<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
		<br><a href="https://engine.vichan.net/">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>
	</footer>
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