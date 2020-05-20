<?php

require_once 'inc/functions.php';
require_once 'inc/polling.php';

if(isset($_POST['respond_poll'])){
	$error = Polling::respondToPoll($_POST['id'], $_POST['response_json'], $_POST['board']);
	if($error)
		echo json_encode(array("error"=>$error));
	else
		echo Polling::getPollInfo($_POST['id'], $_POST['board']);
}
elseif(isset($_POST['query_poll'])){
	echo Polling::getPollInfo($_POST['id'], $_POST['board']);
}

?>
