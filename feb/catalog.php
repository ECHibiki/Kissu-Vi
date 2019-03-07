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
					<script type="text/javascript" src="/main.js"></script>
								<title>feb - Catalog</title>
</head>
<body class="8chan vichan is-not-moderator theme-catalog active-catalog" data-stylesheet="Dark-kissu.css">

	<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">b</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">bans</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
<?php
	$t = explode(" ", microtime())[0];
	$expresion = '/(C:\\\xampp\\\htdocs\\\[a-zA-Z]+|\/var\/www\/html\/[a-zA-Z]+)/';
	while(preg_match("$expresion", getcwd())){
		chdir ('../');
	}
	require_once ('inc/functions.php');
	require_once ('inc/bans.php');

	loadConfig();
	if($config['ban_block']){
		checkDNSBL();
		checkBan();
		echo explode(" ", microtime())[0] - $t;
	}
?>
			<img class="board_image" src="/banner-art.php" alt="" />	
	<header>
		<h1>Catalog (<a href="/feb/">/feb/</a>)</h1>
		<div class="subtitle"></div>
	</header>
	
		
	

			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<input name="⛣5lvisye93o⛻xqmzp4dfawg⚧" value="" type="hidden">
<input style="display:none" type="text" name="message" value="⚟p\i&lt;K' &#72;&#9836;9">
<input type="hidden" name="board" value="feb">
<input style="display:none" type="text" name="xjevtrp♌bsfyn♻4ai⚽omhlg6dcu8w7z3♤" value="" >
	<table>
		<tr>
			<th>
				Name				<input type="hidden" value="*EH^84PG%[3jlQK_DfU☱Lx:.Z♭Y&amp;Ink7'g\`O]⚓Wr&lt;&gt;J0u#z)SqXbv9⛁!d R~?T⛎}aeF/5-tN⛵c;2B|sm6 hM{V" name="search">
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input style="display:none" type="text" value="♄&#100;⛌vq#4jkE-+pY&#67;&#83;=&#125;t&#66;&amp;♄!i7a&#37;~)y☢5'⛉h9&#76;6&lt;&gt;,2&#72;8&#123;⛍GNX&#74;s`3c&#108;\ ♦&#68;MP;|Ro:m0I_&#90;z](@&#84; ^AQKg&#63;OFb&#110;&#119;[W" name="user" >
			</td>
		</tr>		<tr>
			<th>
				Options				<div style="display:none"><input type="text" name="q" value="53893"></div>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								<input style="display:none" type="text" value="" name="url">
								<input style="display:none" type="text" name="n3d⚤♊9zs8mytpr6ebk1l☪jcu2afw☯0oi5q" value="">
			</td>
		</tr>		<tr>
			<th>
				Subject				<input  name="text"  value="&#117;&#62;TxsYQ&#9940;~&#9907;&#77;fra:yB&#45;&#65;&#72;&#38;`⚆Fk3'@"  type="hidden">
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
				<input class="form_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" /> <input id="spoiler" name="spoiler" type="checkbox"> <label for="spoiler">Spoiler Image</label>			</td>
		</tr>
				<tr>
			<th>
				Comment				<textarea   name="firstname"   style="display:none">O4lg{^Ip$Tsj]A5~*=eHQ?⛔⛄J.9LCG7 w80Eu&lt;1nyi+oV,_cdrPZ[&amp;#|@⚉☯☩t☲xFB-}&gt;K%`'S N♹RaXfvDqhWU♰b!</textarea>
			</th>
			<td>
				<textarea name="body" id="body" rows="5" cols="35"></textarea>
				<input   type="hidden"   name="12♋uf3alihn8xk6⚱qp"   value="">
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
								<input type="hidden" value="&#55;&#57;2&#51;9" name="username"   >
			</td>
		</tr>
				<tr id="upload_embed">
			<th>
				Embed				
			</th>
			<td>
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
						<tr>
			<th>
				Password				
			</th>
			<td>
				<input type="password" name="password" value="" size="12" maxlength="18" autocomplete="new-password"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="f67ecba1e31f8465ae6d7d4d751728b5688f9110">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
	
		
	<hr /><div class="blotter">(¬‿¬ ) </div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/feb/">[Index]</a>
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
				 data-bump="1551490301"
				 data-time="1549765505"
				 data-id="50"
				 data-sticky="false"
				 data-locked="false"
			>
                                <div class="thread grid-li grid-size-small">  
                                        <a href="/feb/res/50">  
													<img src="/feb/thumb/1549765504920.png" 
						                                                 id="img-50" data-subject="" data-name="Anonymous" data-muhdifference="" class="feb thread-image" title="Mar 02 01:31">
                                        </a>
                                                <div class="replies">
                                                        <strong>R: 2 / I: 0</strong>
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
