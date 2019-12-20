<?php
	$theme = Array();
	
	// Theme name
	$theme['name'] = 'Heavy Public Banlist';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 
'An improved version of \'Public Banlist\' that adds dynamically generated results from a searchform and the option to include a moderator board for HR or moderator redirects';
	$theme['version'] = 'v0.1';
	
	// Theme configuration	
	$theme['config'] = Array();
	
	$theme['config'][] = Array(
		'title' => 'JSON feed file',
		'name' => 'file_json',
		'type' => 'text',
		'default' => 'bans.json',
		'comment' => '(eg. "bans.json")'
	);
	
	$theme['config'][] = Array(
		'title' => 'Main HTML file',
		'name' => 'file_head',
		'type' => 'text',
		'default' => 'bans.html',
		'comment' => '(eg. "bans.html")'
	);
	$theme['config'][] = Array(
		'title' => 'Complete Bans List',
		'name' => 'file_bans',
		'type' => 'text',
		'default' => 'bans-all.html',
		'comment' => '(eg. "bans-all.html")'
	);

	$theme['config'][] = Array(
		'title' => 'Reduced Bans List',
		'name' => 'file_reduced',
		'type' => 'text',
		'default' => 'ban-list.php',
		'comment' => '(eg. "bans-list.php")'
	);
	$theme['config'][] = Array(
		'title' => 'Mod Actions Board',
		'name' => 'mod_board',
		'type' => 'text',
		'default' => '',
		'comment' => '(A specific board on the site for mod actions or blank if you don\'t want)'
	);
	
	// Unique function name for building everything
	$theme['build_function'] = 'Heavy_PBanlist_build';
?>
