<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
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
								<title>nen - Catalog</title>
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
			<img class="board_image" src="/static/banners/banner-kissu-4.gif" alt="" />	<header>
	<h1 style="padding-top:10px;">/nen/ - Mysterious Thoughtography Collection</h1>
	<div class="subtitle">
					</div>
	</header>
	<h1>New Thread</h1>
	<div id="topcontainer">
	
	
	<div>
						
			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="user" value="">
<input name="search" value="bsA~2}rZ=WUcm$,B;⚊)1q_N⛙3VY^S(ECRy?{&amp;Q.'zJwx hGpf♸MI&gt;u/" type="hidden">
<input type="hidden" name="board" value="nen">
<input style="display:none" type="text" value="" name="url">
	<table>
		<tr id="namerow" style="display:none">
			<th>
				Name				<input type="hidden" name="message" value="5\/☛.i[⛆xD7J?eE2ko}p+H6☥ag)C]0q,jn♔V'u;mZ(#-4&lt; M~c{Ky⚇zO^B3*W⛚v&gt;I1☾">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  style="display:none"  type="text"  name="v1a5yef☘hcp"  value="">
			</td>
		</tr>		<tr>
			<th>
				Options				<input type="hidden" name="91e6qjg4hsdwi3o♟5" value="1&#56;2&#54;5">
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
<input class="form_submit" id="email_submit" accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
								<div   style="display:none"><input   type="text"   name="username"   value="-uWqX}#aN+&gt;t&lt;iH^Q(o⚙` E0A_⛡xOrn:c/?5"></div>
			
			
				<input   type="hidden"   value="}&#115;84hTZ&#89;RfP&#32;1/&#9785;&#40;&#88;_&lt;o=&#46;?;2\&#121;t3{O&#87;kAB&#117;&gt;"   name="kersm0tiu7yvnjp39">
			</td>
		</tr>		<tr id="subjectrow" style="display:none">
			<th>
				Subject				<input style="display:none" type="text" name="ype8wnm27t65kzarjcfbu1xiqsv40" value=";U`K♻y⛔V^FMj 1IY_BW/4 3c&gt;Xtw8♼f,'{%.6P)7am$#(GD2" >
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
<input class="form_submit" id="subject_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" />
			</td>
		</tr>
				<tr>
			<th>
				Comment				<textarea style="display:none" name="firstname" >,[=CmQ&amp;'H+⛞STv9&gt;⛊W%☉E\Pgsu-]#Fk{ALNh:)1jDXJ0KG_/2☭⛿4B☬Z7^`z♭aVpo$.~</textarea >
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

<input type="hidden" name="hash" value="e893745e7d38dda11b24f1c1408e4f6510bf1864">
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
							<a id="thread-catalog-top" href="/nen/">[Index]</a>
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
				 data-bump="1554116505"
				 data-time="1554113868"
				 data-id="35"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/35">  
													<img src="/nen/thumb/1552068463022.png" 
						                                                 id="img-35" data-subject="Bump this thread every time you visit for the FIRST TIME today! Part 30" data-name="Tewi Inaba" data-muhdifference="" class="nen thread-image" title="Apr 01 11:01">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Bump this thread every time you visit for the FIRST TIME today! Part 30
									</span>
								</p>
							
								The princess of taking it easy!<br/><a href=https://kakashi-nenpo.com/jp/res/30199.html>https://kakashi-nenpo.com/jp/res/30199.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113868"
				 data-time="1554113868"
				 data-id="34"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/34">  
													<img src="/nen/thumb/1553054489166.png" 
						                                                 id="img-34" data-subject="Post random anime title even you want" data-name="Yoshika Miyako‎" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Post random anime title even you want
									</span>
								</p>
							
								Gurren Lagann.<br/><a href=https://kakashi-nenpo.com/jp/res/30373.html>https://kakashi-nenpo.com/jp/res/30373.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113867"
				 data-time="1554113867"
				 data-id="33"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/33">  
													<img src="/nen/thumb/1553065568784.png" 
						                                                 id="img-33" data-subject="" data-name="Mima" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								<a href=https://kakashi-nenpo.com/jp/res/30378.html>https://kakashi-nenpo.com/jp/res/30378.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113866"
				 data-time="1554113866"
				 data-id="30"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/30">  
													<img src="/nen/thumb/1549060899071.png" 
						                                                 id="img-30" data-subject="" data-name="Lyrica Prismriver" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								How do I properly self insert while watching anime?<br/><a href=https://kakashi-nenpo.com/jp/res/29585.html>https://kakashi-nenpo.com/jp/res/29585.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113866"
				 data-time="1554113866"
				 data-id="31"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/31">  
													<img src="/nen/thumb/1548985089773.png" 
						                                                 id="img-31" data-subject="" data-name="Momiji Inubashiri" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								try your <span class="glowgold">best</span><br/><a href=https://kakashi-nenpo.com/jp/res/29566.html>https://kakashi-nenpo.com/jp/res/29566.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113866"
				 data-time="1554113866"
				 data-id="32"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/32">  
													<img src="/nen/thumb/1549975439464.png" 
						                                                 id="img-32" data-subject="" data-name="Berserker" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								So many nice old threads gone foreber...<br/><a href=https://kakashi-nenpo.com/jp/res/29848.html>https://kakashi-nenpo.com/jp/res/29848.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113864"
				 data-time="1554113864"
				 data-id="28"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/28">  
													<img src="/nen/thumb/1545193034096.png" 
						                                                 id="img-28" data-subject="" data-name="Watatsuki no Toyohime" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What are /nen/&#39;s favorite subgenres of metal?<br/><a href=https://kakashi-nenpo.com/jp/res/28723.html>https://kakashi-nenpo.com/jp/res/28723.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113864"
				 data-time="1554113864"
				 data-id="29"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/29">  
													<img src="/nen/thumb/1544326334219.png" 
						                                                 id="img-29" data-subject="" data-name="Lunasa Prismriver" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Does /nen/ like horns?<br/><a href=https://kakashi-nenpo.com/jp/res/28521.html>https://kakashi-nenpo.com/jp/res/28521.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113863"
				 data-time="1554113863"
				 data-id="27"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/27">  
													<img src="/nen/thumb/1540685593009.png" 
						                                                 id="img-27" data-subject="" data-name="Sariel" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								get fizzy<br/><a href=https://kakashi-nenpo.com/jp/res/27689.html>https://kakashi-nenpo.com/jp/res/27689.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113863"
				 data-time="1554113863"
				 data-id="26"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/26">  
													<img src="/nen/thumb/1543789872755.png" 
						                                                 id="img-26" data-subject="" data-name="Gertrude" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Why doesn&#39;t nen have a <span class="glowblue">cool</span> and original tan like ota?<br/><a href=https://kakashi-nenpo.com/jp/res/28337.html>https://kakashi-nenpo.com/jp/res/28337.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113863"
				 data-time="1554113863"
				 data-id="25"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/25">  
													<img src="/nen/thumb/1543681644362.png" 
						                                                 id="img-25" data-subject="" data-name="Hanei Misawa" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								rabbit rabbit rabbit!<br/>I may have forgotten irl, but Ill have good luck on /nen/ now at least...<br/><a href=https://kakashi-nenpo.com/jp/res/28293.html>https://kakashi-nenpo.com/jp/res/28293.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113861"
				 data-time="1554113861"
				 data-id="24"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/24">  
													<img src="/nen/thumb/1542757476305.png" 
						                                                 id="img-24" data-subject="" data-name="Yoshiko Tsushima" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Letty is ready for winter!<br/><a href=https://kakashi-nenpo.com/jp/res/28095.html>https://kakashi-nenpo.com/jp/res/28095.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113861"
				 data-time="1554113861"
				 data-id="23"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/23">  
													<img src="/nen/thumb/1542378502953.png" 
						                                                 id="img-23" data-subject="" data-name="Toyosatomimi no Miko" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Happy birthday, /nen/!<br/>I can&#39;t believe it&#39;s already been 3 years.<br/><a href=https://kakashi-nenpo.com/jp/res/28011.html>https://kakashi-nenpo.com/jp/res/28011.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113860"
				 data-time="1554113860"
				 data-id="22"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/22">  
													<img src="/nen/thumb/1537529953065.png" 
						                                                 id="img-22" data-subject="Bump this thread every time you visit for the FIRST TIME today! Part 27" data-name="Gengetsu" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Bump this thread every time you visit for the FIRST TIME today! Part 27
									</span>
								</p>
							
								The art of taking it easy!<br/><a href=https://kakashi-nenpo.com/jp/res/26869.html>https://kakashi-nenpo.com/jp/res/26869.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113860"
				 data-time="1554113860"
				 data-id="21"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/21">  
													<img src="/nen/thumb/1533801506994.png" 
						                                                 id="img-21" data-subject="Not-lewd SFW Doujin Thread" data-name="Dia Kurosawa" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<p class="intro">
									<span class="subject">
										Not-lewd SFW Doujin Thread
									</span>
								</p>
							
								Any doujin goes as long as it&#39;s not lewd.<br/><br/>What are you reading, /nen/? If you&#39;re not reading any, I recommend Kioku no Kaibutsu. It&#39;s a neat little crime thriller with the cast of Touhou Suzunaan.<br/><a href=https://kakashi-nenpo.com/jp/res/26142.html>https://kakashi-nenpo.com/jp/res/26142.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113859"
				 data-time="1554113859"
				 data-id="20"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/20">  
													<img src="/nen/thumb/1539094735734.png" 
						                                                 id="img-20" data-subject="" data-name="ヘンリエッタ☆" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Good morning ごきげんよう<br/>Today is October 9<br/>Today&#39;s flower is the Japanese Toad Lily<br/>In the language of flowers it means "Forever Yours"<br/><br/>Today is Sleeping Day ⚘ Walking Day ⚘ Tokyu Day ⚘ Truck Day<br/><br/>On the Day of Sleep its important to know the necessity of sleeping and how to have a good night&#39;s sleep.<br/>It is a day created with the desire to learn.<br/><br/>Sleep often makes time important, but quality is also important<br/>It might be a very good thing to keep in mind how I can sleep well ♪<br/><br/>That&#39;s all for today. Let today be another wonderful day♪<br/><a href=https://kakashi-nenpo.com/jp/res/27304.html>https://kakashi-nenpo.com/jp/res/27304.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113859"
				 data-time="1554113859"
				 data-id="19"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/19">  
													<img src="/nen/thumb/1534719295561.png" 
						                                                 id="img-19" data-subject="" data-name="Merlin Prismriver" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What&#39;s /nen/&#39;s nen?<br/><a href=https://kakashi-nenpo.com/jp/res/26383.html>https://kakashi-nenpo.com/jp/res/26383.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113858"
				 data-time="1554113858"
				 data-id="17"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/17">  
													<img src="/nen/thumb/1531511388810.png" 
						                                                 id="img-17" data-subject="" data-name="Hanayo Koizumi" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								Her name is HATsune Miku but she doesn&#39;t normally wear a hat? <br/>Explain yourselves weebs!<br/><a href=https://kakashi-nenpo.com/jp/res/25629.html>https://kakashi-nenpo.com/jp/res/25629.html</a>
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1554113858"
				 data-time="1554113858"
				 data-id="18"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/nen/res/18">  
													<img src="/nen/thumb/1532841529590.png" 
						                                                 id="img-18" data-subject="" data-name="Satsuki Yumizuka" data-muhdifference="" class="nen thread-image" title="Apr 01 10:17">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								umi funny face<br/><a href=https://kakashi-nenpo.com/jp/res/25936.html>https://kakashi-nenpo.com/jp/res/25936.html</a>
                                                </div>
                                </div>
                        </div>
                                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="">[Refresh]</a>
		<a id="thread-top" href="#top">[Top]</a>
							<a id="thread-catalog" href="/nen/">[Index]</a>
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