<?php

require_once 'inc/functions.php';
require_once 'inc/polling.php';

if(isset($_POST['respond_poll'])){
	var_dump($_POST);echo"<br/>";
	$error = Polling::respondToPoll($_POST['id'], $_POST['response_json']);
	if($error)
		echo json_encode(array("error"=>$error));
	else
		echo Polling::getPollInfo($_POST['id']);
}
elseif(isset($_POST['query_poll'])){
	echo Polling::getPollInfo($_POST['id']);
}

?>
