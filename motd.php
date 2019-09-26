<?php
	$han = fopen("motd.txt", "w");
	@fwrite($han, $_POST['motd']);
	fclose($han);
 ?>
<form method="post"><input name="motd" placeholder="motd here"></input></form>

