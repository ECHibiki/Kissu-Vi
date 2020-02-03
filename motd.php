<?php
	if(isset($_POST['motd'])){
	$han = fopen("motd.txt", "w");
        $_POST['motd'] = preg_replace("/( |^)(http(|s):\/\/.+)( |$)/","<a href='$2'>$2</a>", $_POST['motd']);
        $_POST['motd'] = str_replace("script","sukuriputo", $_POST['motd']);
        $_POST['motd'] = str_replace("style","stylu", $_POST['motd']);
        $_POST['motd'] = str_replace("style","stylu", $_POST['motd']);
        $_POST['motd'] = str_replace("onload","onclick", $_POST['motd']);
        $_POST['motd'] = str_replace("onready","onclick", $_POST['motd']);

	fwrite($han, $_POST['motd']);
	fclose($han);
	}
 ?>
<form method="post"><input name="motd" placeholder="motd here"></input></form>

