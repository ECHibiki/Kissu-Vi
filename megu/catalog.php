<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
		  , board_name = "megu";
	</script>
			<link rel="stylesheet" media="screen" href="/stylesheets/style.css">
		<link rel="shortcut icon" href="/static/favicon.png">		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
				<link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/Dark-kissu.css">		<link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css">		<link rel="stylesheet" href="/static/flags/flags.css">		<script type="text/javascript">
			var configRoot="/";
			var inMod = false;
			var modRoot="/"+(inMod ? "mod.php?/" : "");
		</script>
					<script type="text/javascript" src="/main.js"></script>
								<title>megu - Catalog</title>
</head>
<body class="8chan vichan is-not-moderator theme-catalog active-catalog" data-stylesheet="Dark-kissu.css">

	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/lit/">lit</a> ]</span>  <span class="sub" data-description="2">[ <a href="http://swfchan.org/">f</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
<?php
	$t = explode(" ", microtime())[0];
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/functions.php');
	require_once ('inc/bans.php');

	loadConfig();
	checkDNSBL();
	checkBan();
	echo explode(" ", microtime())[0] - $t;
?>
			<img class="board_image" src="/banner-art.php" alt="" />	
	<header>
		<h1>Catalog (<a href="/megu/">/megu/</a>)</h1>
		<div class="subtitle"></div>
	</header>
	
		
	

			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="rw8e⛶qk1370t9j6pihy⛫ds4ngbzxf☠5a2o" value="_o;♺IzF/S^⛆?2b⚃v~U(O7\.qX:MwpT@`Af" >
<input style="display:none" type="text" name="rhswzj2b5mtdgfna1vyu8⛝ic⛕07⛔q34x" value="1673">
<input type="hidden" name="board" value="megu">
<div  style="display:none"><input  type="text"  name="username"  value="39964"></div>
	<table>
		<tr>
			<th>
				Name				<div style="display:none"><input type="text" name="url" value="2&#53;&#49;36"></div>
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input  name="firstname"  value="IotGJ'☨0}$7-♔☍&#42;+%&#9917;p&#75;4&#123;=f⚍v&#91;X&#105;k&#101;z;&#76;h.@⛫,&#117;Y/&#66;&gt;?⚚♓c &#79;5\9d&#113;N63Vs&#120;&lt;n~&amp;1&#98;2m&#124;Z`T&#82;Sgr&#97;y!Ww&#35;]&#94;&#65;M _l☴UjP"  type="hidden" >
			</td>
		</tr>		<tr>
			<th>
				Options				<input value="" name="text" type="hidden">
			</th>
			<td>
								<input style="opacity: 0;position: absolute;bottom:0;right:0" type="test" value="EatsChromeAuto"/>
				<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								<input style="display:none" type="text" value="" name="q">
								<input name="search" value="" type="hidden">
			</td>
		</tr>		<tr>
			<th>
				Subject				
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
				<input class="form_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" /> <input id="spoiler" name="spoiler" type="checkbox"> <label for="spoiler">Spoiler Image</label>			</td>
		</tr>
				<tr>
			<th>
				Comment				
			</th>
			<td>
				<textarea name="body" id="body" rows="5" cols="35"></textarea>
				
							</td>
		</tr>
										<tr id="upload">
			<th>
				File			</th>
			<td>
				<input type="file" name="file" id="upload_file" style="width: 190px;">
				<span name='captchasel'>
				<label><input type="radio" name="captype" class="rec" value="recaptcha"> Recaptcha </label>
				<label><input type="radio" name="captype" class="cap" value="captchouli"> Captchouli </label>
				</span>
				<script type="text/javascript">if (typeof init_file_selector !== 'undefined') init_file_selector(1);</script>

									<div style="float:none;text-align:left" id="upload_url">
						<label for="file_url">Or URL: </label>
						<input style="display:inline" type="text" id="file_url" name="file_url" size="35">
					</div>
								
			</td>
		</tr>
				<tr id="upload_embed">
			<th>
				Embed				
			</th>
			<td>
				<input style="opacity: 0;position: absolute;right:0;bottom:0" type="test" value="EatsChromeAuto"/>
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
						<tr>
			<th>
				Password				
			</th>
			<td>
				<input style="opacity: 0;position: absolute;right:0;bottom:0" type="password" value="EatsChromeAuto"/>
				<input type="password" name="password" value="" size="12" maxlength="18" autocomplete="off"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="e835cb3ca42db04860d0ad2102fd7c53431a7a08">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
	
		
	<hr /><div class="blotter">Site changes mostly done(exceptions to bugs and simple requests).<br/>Add `repo` to the option field if you want threads to be reposted to qa4</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/megu/">[Index]</a>
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
				data-reply="2"
				 data-bump="1546554313"
				 data-time="1546551235"
				 data-id="1"
				 data-sticky="true"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/megu/res/1">  
													<img src="/megu/thumb/1546551235139.png" 
						                                                 id="img-1" data-subject="" data-name="Anonymous" data-muhdifference="" class="megu thread-image" title="Jan 03 22:25">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 2 / I: 2 (sticky)</strong>
                                                        								<br />
							
								cummed
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1546552185"
				 data-time="1546552185"
				 data-id="5"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/megu/res/5">  
													<img src="/megu/thumb/1546552185181.png" 
						                                                 id="img-5" data-subject="" data-name="Anonymous" data-muhdifference="" class="megu thread-image" title="Jan 03 21:49">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1546552080"
				 data-time="1546552080"
				 data-id="4"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/megu/res/4">  
													<img src="/megu/thumb/1546552080435.png" 
						                                                 id="img-4" data-subject="" data-name="Anonymous" data-muhdifference="" class="megu thread-image" title="Jan 03 21:48">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								
                                                </div>
                                </div>
                        </div>
                                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="">[Refresh]</a>
		<a id="thread-top" href="#top">[Top]</a>
							<a id="thread-catalog" href="/megu/">[Index]</a>
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
			<!-- 'Yotsuba B' : '/stylesheets/', -->
			<!-- 'Yotsuba' : '/stylesheets/yotsuba.css', -->
			<!-- 'Dark-Kissu' : '/stylesheets/Dark-kissu.css', -->
			<!-- 'Kissu(Experimental)' : '/stylesheets/kissu.css', -->
			<!-- 'new-years-theme' : '/stylesheets/new-years-theme.css', -->
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
			<!-- 'luna' : '/stylesheets/luna.css', -->
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
			<!-- 'style' : '/stylesheets/style.css', -->
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
</body>
</html>
