<?php
	require 'info.php';
	
	function Heavy_PBanlist_build($action, $settings, $board) {
		// Possible values for $action:
		//	- all (rebuild everything, initialization)
		//	- news (news has been updated)
		//	- boards (board list changed)
		//	- bans (ban list changed)
		
		Heavy_PBanlist::build($action, $settings);
	}

	// Wrap functions in a class so they don't interfere with normal Tinyboard operations
	class Heavy_PBanlist {
		public static function build($action, $settings) {
			global $config;
			
			if ($action == 'all'){
				file_write($config['dir']['home'] . $settings['file_head'], Heavy_PBanlist::homepage($settings));
				file_write($config['dir']['home'] . $settings['file_bans'], Heavy_PBanlist::completeResultsPage($settings));
				file_write($config['dir']['home'] . $settings['file_reduced'], Heavy_PBanlist::reducedResultsPage($settings));
			}
			if ($action == 'all' || $action == 'bans')
				file_write($config['dir']['home'] . $settings['file_json'], Heavy_PBanlist::gen_json($settings));
		}

		public static function gen_json($settings) {
			global $config;
			ob_start();
			Bans::stream_json(false, true, !$config['show_modname']);
			$out = ob_get_contents();
			ob_end_clean();
			return $out;
		}
		
		public static function homepage($settings){
			global $config;

		        return Element('page.html', array(
		                'config' => $config,
		                'mod' => false,  
        		        'hide_dashboard_link' => true,
        		        'title' => _("Ban list"),
        		        'subtitle' => "",
		                'nojavascript' => true,
		                'body' => Element('themes/heavy_public_banlist/homepage.template', array(
			                'file_bans_url' => " " .$settings['file_bans'],
			                'mod_board' => " " . $settings['mod_board'],
				))
		        ));
		}

		// Build homepage
		public static function reducedResultsPage($settings) {
			global $config;

		        return Element('themes/heavy_public_banlist/page.php', array(
		                'config' => $config,
		                'mod' => false,  
        		        'hide_dashboard_link' => true,
        		        'title' => _("Ban list"),
        		        'subtitle' => "",
		                'nojavascript' => true,
		                'body' => Element('themes/heavy_public_banlist/ban_list.php', array(
			                'mod' => false,
			                'boards' => "[]",
			                'token' => false,
			                'token_json' => false,
					'uri_json' => $config['dir']['home'] . $settings['file_json'],
				))
		        ));
		}

		// Build homepage
		public static function completeResultsPage($settings) {
			global $config;

		        return Element('page.html', array(
		                'config' => $config,
		                'mod' => false,  
        		        'hide_dashboard_link' => true,
        		        'title' => _("Ban list"),
        		        'subtitle' => "",
		                'nojavascript' => true,
		                'body' => Element('mod/ban_list.html', array(
			                'mod' => false,
			                'boards' => "[]",
			                'token' => false,
			                'token_json' => false,
					'uri_json' => $config['dir']['home'] . $settings['file_json'],
				))
		        ));
		}
	};
	
?>
