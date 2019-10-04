<?php

	require_once('inc/bans.php');
	require_once('inc/functions.php');
	$regex_similars = array(".", "/", "[", "]");
	$regex_actuals = array("\\.", "\/", "\[", "\]");
	
	$ip = '';
	if (isset($_GET['ip']))
		$ip = trim(str_replace($regex_similars, $regex_actuals, $_GET['ip']));
	$reason = '';
	if (isset($_GET['reason']))
		$reason = trim(str_replace($regex_similars, $regex_actuals, $_GET['reason']));
	$expiration = '';
	if (isset($_GET['duration']))
		$expiration = trim(str_replace($regex_similars, $regex_actuals, $_GET['duration']));
	$post = '';
	if (isset($_GET['post']))
		$post = trim(str_replace($regex_similars, $regex_actuals, $_GET['post']));

	$bans_arr = Bans::reducedBanSearchFromJSON($ip, $reason, $expiration, $post);

	echo "<script>var longtable_json_dynamic = JSON.parse('[" . substr(str_replace(array("\\", "'"), array("\\\\", "\\'"), json_encode($bans_arr)),1,-1) . "]');</script>";
?>


