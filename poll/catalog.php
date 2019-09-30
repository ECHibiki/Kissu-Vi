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

?>		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> / <a href="/agg/">agg</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa ]</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">text</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://kakashi-nenpo.com/">nen</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img id="bannerimg" class="board_image" src="/static/banners/banner-kissu-6.png" alt="" />
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
<div style="display:none"><input type="text" name="firstname" value=""></div>
<div style="display:none"><input type="text" name="user" value="$8a2⚶0tZ^⛹HkJSc9s⚁!⚞☺{}⛗GT&gt; b6R*⚈,Nm⚎-[Iy?1uB|⚲K=U:'/doF7LY.&lt;)♹_W(&amp;fD%pl@"></div>
<input type="hidden" name="board" value="poll">
<div style="display:none" ><input type="text" name="z8ne4ulpcs☍idx" value="&#9772;TK*\&amp;3&#105;&#9858;D!&#86;⚙~&#97;&#99;&#102;ke♔&#47;1m&#60;8&#52;y9l@h+B`&#73;&#91;&#88;☾'sAOYS⚼&#45;&#85;&#119;&#53;&#113;7^GW&#70;&#54;_&#9949;&#41;" ></div >
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" value="⛨ &#119;h](&#44;XZu⛰B/%&#74;7OnL&#9964;IA&#56;6⚞☶&#43;)&#60;!9t.|&#92;4Q@-&#67;⚻&#50;^&#35;&#111;♠y&#100;S&#82;3♤}&#107;`xeg~&#118;l&#95;Y{&#39;&#71;;&#32;" name="message">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input value="&#79;,R|Y&#103;*?qG&lt;{&#78;In&#51;T]+☪&#47;&#101;L5⚳k☰ h1♪8!%.z\&#65;&#48;&#75;9M&#96;c[XQ&#119;&#38;&#59;&#9891;)-4&#86;mjfx" name="qfxckie⛗9oz1⛩7dvl8⛦2jtm" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Options				<input   value="⛥1'x^k}l`5"   name="lastname"   type="hidden">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<span style="display:none"><input type="text" name="eam7zfr41qidw⛌hs♺39o0txn" value="♇On!NSHp;Rv=1:-[ms&lt;&gt;r7`xudt]5w&amp;_6?⛨\De⚒qc~U+3L2(Wyk} ,z{JBK8#o)GETX/♌^@A*"></span>
			
			
				<input value="6⛥=w?Ev@_fY5J GL4HW`cnu&lt;s*i⚆9⚆#I&gt;}\rTO|⚵U;e)o+a⚣mt⚝Fgd{X '!Q8N~k7⛆p⚸zb^1P,$x" name="237ehgmy4vno⚯pz9itq♝d☲5fa016c" type="hidden">
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

<input type="hidden" name="hash" value="7efb6569479d13a608475e1aa38c6b39bad199ca">
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
				data-reply="0"
				 data-bump="1569827129"
				 data-time="1569827129"
				 data-id="68"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/68">  
													<img src="/static/deleted.png" 
						                                                 id="img-68" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 07:05">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569827129' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>,</label><br/><label><input type='radio' name='pollopt[]' value='1'/>knmj</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569827046"
				 data-time="1569827046"
				 data-id="67"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/67">  
													<img src="/static/deleted.png" 
						                                                 id="img-67" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 07:04">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569827046' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>z</label><br/><label><input type='radio' name='pollopt[]' value='1'/>xc</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asdv
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569826658"
				 data-time="1569826658"
				 data-id="66"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/66">  
													<img src="/static/deleted.png" 
						                                                 id="img-66" data-subject="te" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 06:57">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										te
									</span>
								</p>
							
								<div data-lifespan='24' data-creationtime='1569826658' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>tew</label><br/><label><input type='radio' name='pollopt[]' value='1'/>tez</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asd
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569826201"
				 data-time="1569826201"
				 data-id="65"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/65">  
													<img src="/static/deleted.png" 
						                                                 id="img-65" data-subject="NEW" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 06:50">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										NEW
									</span>
								</p>
							
								<div data-lifespan='24' data-creationtime='1569826201' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>sdfs</label><br/><label><input type='radio' name='pollopt[]' value='1'/>ggg</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asdf
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569824906"
				 data-time="1569824906"
				 data-id="64"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/64">  
													<img src="/static/deleted.png" 
						                                                 id="img-64" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 06:28">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='0' data-creationtime='1569824906' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>dfg</label><br/><label><input type='radio' name='pollopt[]' value='1'/>dd</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>dfg
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569824536"
				 data-time="1569824536"
				 data-id="63"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/63">  
													<img src="/static/deleted.png" 
						                                                 id="img-63" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 06:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569824536' class='pollform'><label><input type='radio' name='pollopt[]' value='0'/>asd2</label><br/><label><input type='radio' name='pollopt[]' value='1'/>123</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>asd
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569820991"
				 data-time="1569820991"
				 data-id="62"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/62">  
													<img src="/static/deleted.png" 
						                                                 id="img-62" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 05:23">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569820991' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>t1</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>t2</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>t2</label><br/><input type='submit' class='pollsubmit' onclick='return pollSubmit(this)' value='Make Response'><a href='javascript:void(0)' onclick='return viewPoll(this)'><br/>[View Responses]</a></div><br/>main test poll <br/>duplicats<br/>radio<br/>2 <br/>24
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569806128"
				 data-time="1569806128"
				 data-id="58"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/58">  
													<img src="/poll/thumb/1569806128942.png" 
						                                                 id="img-58" data-subject="Pick One" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 01:15">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Pick One
									</span>
								</p>
							
								<div data-lifespan='24' data-creationtime='1569806128' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>Asuka</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>Mashiro</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>Misaki</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javascript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>I have no life
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569806108"
				 data-time="1569806108"
				 data-id="57"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/57">  
													<img src="/poll/thumb/1569806108276.png" 
						                                                 id="img-57" data-subject="" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 01:15">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<div data-lifespan='24' data-creationtime='1569806108' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>Asuka</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>Mashiro</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javascript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>I have no life
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1569806082"
				 data-time="1569806082"
				 data-id="56"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/poll/res/56">  
													<img src="/poll/thumb/1569806082682.png" 
						                                                 id="img-56" data-subject="Pick One" data-name="Anonymous" data-muhdifference="" class="poll thread-image" title="Sep 30 01:14">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Pick One
									</span>
								</p>
							
								<div data-lifespan='24' data-creationtime='1569806082' class='pollform'><label><input type='checkbox' name='pollopt[]' value='0'/>Asuka</label><br/><label><input type='checkbox' name='pollopt[]' value='1'/>Mashiro</label><br/><label><input type='checkbox' name='pollopt[]' value='2'/>Misaki</label><br/><input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javascript:void(0)' onclick='return false'><br/>[View Responses]</a></div><hr/>test
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