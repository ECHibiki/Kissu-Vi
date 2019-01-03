<?php
	require("inc/functions.php");
	require("inc/bans.php");
	global $config;
	loadConfig();
	$ip_string = scrapePages('\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}');
	$ip_arr = (json_decode($ip_string));
	if($ip_arr != null){
		$ip_arr = array_unique($ip_arr);
		foreach ($ip_arr as $index=>$ip) {
			if(!preg_match("/((([0-1]{0,1}[0-9]{0,2}|25[0-5]|2[0-4][0-9])\.){3}([0-1]{0,1}[0-9]{0,2}|25[0-5]|2[0-4][0-9]))/", $ip)){
				unset($ip_arr[$index]);
				continue;
			}	
			$bans = Bans::find($ip, $board, $config['show_modname']);	
			foreach ($bans as &$ban) {
				if ($ban['expires'] && $ban['expires'] < time()) {
					Bans::delete($ban['id']);
				} 
				unset($ip_arr[$index]);
				continue;
			}	
		}
		Bans::new_ban_multiple($ip_arr, "Proxy, VPN or Tor node", false, false, false, false);
	}
	else{
		error("No IP Contents");
	}
	
	$log = fopen('scan.log', 'w');
	fwrite($log, "Last scanned " . date('Y-m-d G:i'));
	
	echo "<pre>";
	var_dump($ip_arr);
	echo "</pre>";