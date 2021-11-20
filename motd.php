<?php
	if(isset($_POST['motd'])){
	$han = fopen("motd.txt", "w");
        $_POST['motd'] = preg_replace("/( |^)(http(|s):\/\/.+)( |$)/","<a href='$2'>$2</a>", $_POST['motd']);
        $_POST['motd'] = preg_replace("/script/i","sukuriputo", $_POST['motd']);
        $_POST['motd'] = preg_replace("/style/i","stylo", $_POST['motd']);
        $_POST['motd'] = preg_replace("/onload/i","onloud", $_POST['motd']);
        $_POST['motd'] = preg_replace("/onready/i","onclock", $_POST['motd']);
        $_POST['motd'] = preg_replace("/document\./i","document,", $_POST['motd']);
        $_POST['motd'] = preg_replace("/window\./i","window,", $_POST['motd']);
        $_POST['motd'] = preg_replace("/global\./i","global,,", $_POST['motd']);
        $_POST['motd'] = preg_replace("/xml/i","markup", $_POST['motd']);

	fwrite($han, $_POST['motd']);
	fclose($han);
	}
 ?>
<form method="post"><input name="motd" placeholder="motd here"></input></form>

