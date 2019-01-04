<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type='text/javascript'>
		var active_page = "catalog"
		  , board_name = "lit";
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
								<title>lit - Catalog</title>
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
		<h1>Catalog (<a href="/lit/">/lit/</a>)</h1>
		<div class="subtitle"></div>
	</header>
	
		
	

			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input type="hidden" name="firstname" value="74&#49;20">
<input name="3huf⚆gnk70bd2e8xc4ij⛇5t" value=",]Y|J0WfFO^nCod9lw&lt;/-Er({uH.KT⛊[m\h:!X♳s" type="hidden">
<input type="hidden" name="board" value="lit">
<span  style="display:none"><input  type="text"  name="url"  value=",+IN7p$L@J&amp;{z?Z}eo8mO&gt;♸lfX9U y♦.!E]Q)0s6⛂x&lt;jSwTGh*c^FVRi;Hr♣2 #/'=5♾ABY~td1⛫:%⛧3|CDauW\_-`⛪nbqv⛩"></span>
	<table>
		<tr>
			<th>
				Name				<input type="hidden" name="☳9zxc☂v8we⚽fud0t" value="&#104;y♛,&#41;p&#55;&#97;5;D.&#122;4_&#115;Q⛵-+'&#48;☡v&#75;&#100;♩Uw:? H#&#93;IPE&#125;8(q\gT&#79;&#67;&#88;⛛t[J^u&#47;&#62;obV&#124;nlf&#9872;Zk=A&#109;⚁i36&#78;c$1r!%&#70;9~* &lt;♖2">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<textarea style="display:none" name="q">o:♣I♺{Wd(⛙FJ=Cmj}%3~'NgV,\^U2+]El k!.&lt;★1sb-@AZv⛙X DPSKMrTpyYx*nqG♜8;`Q&amp;t⚧f)a6O[z/⛿#$c5LR|☻i</textarea>
			</td>
		</tr>		<tr>
			<th>
				Options				<input style="display:none" type="text" name="user" value="&gt; N)7yq3⛅k^♬VQ;2⛲IC\vpx.:{⚛/ljd!HLnP_M&lt;`r$⛹|1☨Y~%F">
			</th>
			<td>
								<input style="opacity: 0;position: absolute;bottom:0;right:0" type="test" value="EatsChromeAuto"/>
				<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								
								
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

<input type="hidden" name="hash" value="64b5dbe7c1ac24400eb90c9c1879612427a3eaa1">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
	
		
	<hr /><div class="blotter">Site changes mostly done(exceptions to bugs and simple requests).<br/>Add `repo` to the option field if you want threads to be reposted to qa4</div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/lit/">[Index]</a>
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
				data-reply="4"
				 data-bump="1546514381"
				 data-time="1546143109"
				 data-id="1"
				 data-sticky="true"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/1">  
													<img src="/lit/thumb/1546143109126.png" 
						                                                 id="img-1" data-subject="" data-name="Verniy" data-muhdifference="" class="lit thread-image" title="Jan 03 11:19">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 4 / I: 0 (sticky)</strong>
                                                        								<br />
							
								This board isn't designed to have posts in it. <br/>It's simply there in case someone wants to discuss books
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1546500147"
				 data-time="1546500011"
				 data-id="15"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/15">  
													<img src="/lit/thumb/1546500011143.png" 
						                                                 id="img-15" data-subject="" data-name="Anonymous" data-muhdifference="" class="lit thread-image" title="Jan 03 07:22">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<br />
							
								BOOKS ARE FOR NERDZ LOL11111111111111<br/>you should only read the devil's bible!!!!
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="2"
				 data-bump="1546345136"
				 data-time="1546325635"
				 data-id="12"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/12">  
													<img src="/lit/thumb/1546325635750.png" 
						                                                 id="img-12" data-subject="" data-name="Anonymous" data-muhdifference="" class="lit thread-image" title="Jan 01 12:18">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 2 / I: 2</strong>
                                                        								<br />
							
								Do VNs count as literature?
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1546315853"
				 data-time="1546315853"
				 data-id="11"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/11">  
													<img src="/lit/thumb/1546315852920.png" 
						                                                 id="img-11" data-subject="" data-name="Anonymous" data-muhdifference="" class="lit thread-image" title="Jan 01 04:10">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								lol reading
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1546241019"
				 data-time="1546226427"
				 data-id="9"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/9">  
													<img src="/lit/thumb/1546226427406.png" 
						                                                 id="img-9" data-subject="" data-name="Anonymous" data-muhdifference="" class="lit thread-image" title="Dec 31 07:23">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 1</strong>
                                                        								<br />
							
								literature? more like loserature
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="0"
				 data-bump="1546207771"
				 data-time="1546207771"
				 data-id="8"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/8">  
													<img src="/lit/thumb/1546207771084.png" 
						                                                 id="img-8" data-subject="" data-name="Anonymous" data-muhdifference="" class="lit thread-image" title="Dec 30 22:09">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 0 / I: 0</strong>
                                                        								<br />
							
								What makes you think anyone here reads?
                                                </div>
                                </div>
                        </div>
                                        <div class="mix"
				data-reply="1"
				 data-bump="1546169076"
				 data-time="1546164866"
				 data-id="6"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/lit/res/6">  
													<img src="/lit/thumb/1546164866508.png" 
						                                                 id="img-6" data-subject="" data-name="Anonymous" data-muhdifference="" class="lit thread-image" title="Dec 30 11:24">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 1 / I: 0</strong>
                                                        								<br />
							
								Hopefully this board turns out well and you are proven to have made the correct decision. Otherwise if it fails I can just use this board to blog about Overlord volumes when they come out.
                                                </div>
                                </div>
                        </div>
                                </div>
        </div>
	<hr/>
	
	<span id="thread-links">
		<a id="thread-return" href="">[Refresh]</a>
		<a id="thread-top" href="#top">[Top]</a>
							<a id="thread-catalog" href="/lit/">[Index]</a>
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
