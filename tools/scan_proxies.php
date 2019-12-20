<?php
	chdir("../");
	require("inc/functions.php");
	require("inc/bans.php");
	global $config;
	loadConfig();
	if($config["enable_proxy_scrape"]){
		$ip_string = scrapePages('\\d{1,3}\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}');
		echo "$ip_string<hr/>";
		$ip_arr = (json_decode(preg_replace("/^.+ Not found/","", $ip_string)));

		var_dump($ip_arr); 
		echo("-----");
		if($ip_arr != null){
			$ip_arr = array_unique($ip_arr);
			foreach ($ip_arr as $index=>$ip) {
				if(!preg_match("/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $ip)){
					echo("....." . $ip_arr[$index]);
					unset($ip_arr[$index]);
					continue;
				}
				$ip_arr[$index] = implode(".", array_map(function($segment){
					return intval($segment);
				}, explode(".", $ip_arr[$index])));
				$bans = Bans::find($ip_arr[$index], $board, $config['show_modname']);	
				foreach ($bans as &$ban) {
					if ($ban['expires'] && $ban['expires'] < time()) {
						Bans::delete($ban['id']);
					}
					echo("<br/>+++++" . $ip_arr[$index]);					
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
	}
	else{
		error("Proxy scrape config option disabled. Enable and use cron on this file. Also enable sudo");
	}
