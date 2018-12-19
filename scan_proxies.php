<?php
	require("inc/functions.php");
	require("inc/bans.php");
	loadConfig();
	$ip_string = scrapePages('\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}');
	$ip_arr = json_decode($ip_string);
	if($ip_arr != null){
		Bans::new_ban_multiple($ip_arr, "Proxy, VPN or Tor node", false, false, false, false);
	}
	else{
		error("No IP Contents");
	}