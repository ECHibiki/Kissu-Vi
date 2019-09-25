<!doctype html>
<html>
<head>
	<meta charset="utf-8">

        <script type="text/javascript">
	  var
                        active_page = "index"
            , board_name = "jp";
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
								<title>/jp/ - Mysterious Thoughtography Collection</title>
</head>
<body class="8chan vichan is-not-moderator active-index" data-stylesheet="Dark-kissu.css">
	<div id="uppercontents">
	<div id="subuppercontents">
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
?>		<div class="boardlist"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">bans</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div><script type='text/javascript'>if (typeof do_boardlist != 'undefined') do_boardlist();</script>
	<a name="top"></a>
			<img class="board_image" src="/banner-art.php" alt="" />	<header>
	<h1 style="padding-top:10px;">/jp/ - Mysterious Thoughtography Collection</h1>
	<div class="subtitle">
					</div>
	</header>
	<div id="topcontainer">
	
	

	<div>
			<form class="form_submit" name="post" onsubmit="return dopost(this);" enctype="multipart/form-data" action="/post.php" method="post">
<div style="display:none" ><input type="text" name="71vrxd2⛸♡mw3bhz6spnkiela⛄gu9f5⚹8joq" value="69502" ></div >
<input type="hidden" name="q" value="33981">
<input type="hidden" name="board" value="jp">
<input value="Mek#!Ws&#9981;p&amp;|g&#71;Bl4&#100;&#114;&#47;:y&#50;O0[&#36;&#64;+F&#55;{m9N&#81;. PSn`Cz&#88;Eabotx)&#92;uv&#44;K];D}&#74;A☮&#9967;☹c&gt;h&#9931;⛓~-'&lt;⚥&#119;^U(&#84;&#113;&#86;" name="wjd⛷t♸n08x♇zamv1bslu2gec6i" type="hidden">
	<table>
		<tr>
			<th>
				Name				<input   type="hidden"   value="7&#57;&#52;&#53;6"   name="g4eusbh⛬3j1n0qk6zr7ycx2m⛟5fiolwpat8"  >
			</th>
			<td>
				<input type="text" name="name" size="25" maxlength="35" autocomplete="off"> 				<input type="hidden" value="3{7&amp;Yg!\(T=pS:bs}oKVri+z♩]Gw|^H.N@9y⛸~8d⛩ Ll4h☌&lt;" name="user">
			</td>
		</tr>		<tr>
			<th>
				Options				<textarea name="search" style="display:none">(&amp;IR^x%K+hS$E,-t⛬rD♐5♇♗!n@J1&gt;ai\.]b'q*UMLCo 3`c&lt;AX_FWTGv</textarea>
			</th>
			<td>
								<input type="text" name="email" size="25" maxlength="40" autocomplete="off" id='option_input'>
				<select id="option_simplifier" autocomplete="off">
					<option value="">Options</option>
					<option value="repo">Repost</option>
					<option value="sage">Hold Back</option>
					<option value="noko">Remain</option>				</select>
								<input value="" name="firstname" type="hidden" >
								<div style="display:none"><input type="text" name="lastname" value="82518"></div>
			</td>
		</tr>		<tr>
			<th>
				Subject				<div style="display:none"><input type="text" name="7vaih85b4⚹l9dz1qsu" value="|f&#117;&#93;☌XG@i}jdJ%☟~Ap&#85;=Wyl#☄&amp;&gt;w⚸ {⚁♱mTqn5Q^;3LD,(H&#98;`o&#122;&#116;⛻cZ⚄R&#36;&#42;&#89;)?86&#9842;C&#83;/PkN&#120;rsgO2-&#57;&#32;E_&#66;&#70;:7!&#97;4"></div>
			</th>
			<td>
				<input style="" type="text" name="subject" size="25" maxlength="100" autocomplete="off">
				<input class="form_submit"  accesskey="s" style="margin-left:2px;" type="submit" name="post" value="New Topic" /> <input id="spoiler" name="spoiler" type="checkbox"> <label for="spoiler">Spoiler Image</label>			</td>
		</tr>
				<tr>
			<th>
				Comment				<input value="" name="message" type="hidden">
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
				<input type="text" name="embed" value="" size="30" maxlength="120" autocomplete="off">
			</td>
		</tr>
								<tr  style="display: none;" >
			<th>
				Password				
			</th>
			<td >
				<input type="password" name="password" value="" size="12" maxlength="18" autocomplete="new-password"> 
				<span class="unimportant">(For file deletion.)</span>
				
			</td>
		</tr>		<tr><td colspan=2><span name='markup-hint' style='font-size:10px'>Markup tags exist for bold, itallics, header, spoiler etc. as listed in " [options] > View Formatting "</span></td></tr>
	</table>

<input type="hidden" name="hash" value="89d2e601b974b4dcf70a8ae0c37801125de74720">
</form>

<script type="text/javascript">
	rememberStuff();
</script>
		</div>
	</div>
	</div>
	</div>
		
	<hr /><div class="blotter"><a href="/all/">(¬‿¬ ) </a></div>	<hr />
			
	<span id="thread-links-top">
		<a id="thread-return-top" href="">[Refresh]</a>
		<a id="thread-bottom" href="#bottom">[Bottom]</a>
							<a id="thread-catalog-top" href="/jp/catalog">[Catalog]</a>
					</span>
	<br/><hr/>
	
	
	<form name="postcontrols" action="/post.php" method="post">
	<input type="hidden" name="board" value="jp" />
		
	<div id="post-moderation-fields">
		<div id="delete-fields">
		Delete Post [<input title="Delete file only" type="checkbox" name="file" id="delete_file" />
				 <label for="delete_file">File</label>] <label for="password">Password</label> 
		<input id="password" type="password" name="password" size="12" maxlength="18" />
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
                							<a id="thread-catalog" href="/jp/catalog">[Catalog]</a>
		                			</span>
			
			<span id="thread-quick-reply">
				<a id="link-quick-reply" href="#">[Post a Reply]</a>
			</span>
	</form>
	<a name="bottom"></a>
	<div class="boardlist bottom"><span class="sub" data-description="0">[ <a href="/">home</a> ]</span>  <span class="sub" data-description="1">[ <a href="/b/">g</a> / <a href="/qa/">qa</a> / <a href="/megu/">megu</a> ]</span>  <span class="sub" data-description="2">[ <a href="https://theatre.kissu.moe">sync</a> / <a href="https://ban.kissu.moe">bans</a> / <a href="/all/">all</a> ]</span>  <span class="sub" data-description="3">[ <a href="https://ota-ch.com/">ota</a> / <a href="https://boards.4channel.org/qa/">qa4</a> / <a href="https://github.com/ECHibiki/ViQa-Kissu/">ViQa</a> ]</span></div>
	<div class="pages">
		Previous 		 [<a class="selected">1</a>] 		 Next
					 | <a href="/jp/catalog">Catalog</a>
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
	
</body>
</html>
