<?php
	require("inc/functions.php");
	require("inc/bans.php");
	$ip_arr = json_decode(scrapePages('\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}'));
	var_dump($ip_arr);
	Bans::new_ban_multiple($ip_arr, "Proxy, VPN or Tor node", false, false, false, false);