<?php
/*
 *  Copyright (c) 2010-2013 Tinyboard Development Group
 */

defined('TINYBOARD') or exit;

/**
 * Class for generating json API compatible with 4chan API
 */
class Api {
	function __construct(){
		global $config;
		/**
		 * Translation from local fields to fields in 4chan-style API
		 */
		$this->config = $config;

		$this->postFields = array(
			'id' => 'no',
			'thread' => 'resto',
			'subject' => 'sub',
			'body' => 'com',
			'email' => 'email',
			'name' => 'name',
			'trip' => 'trip',
			'capcode' => 'capcode',
			'time' => 'time',
			'omitted' => 'omitted_posts',
			'omitted_images' => 'omitted_images',
			'replies' => 'replies',
			'images' => 'images',
			'sticky' => 'sticky',
			'locked' => 'locked',
			'cycle' => 'cyclical',
			'bump' => 'last_modified',
			'embed' => 'embed',
		);

		$this->threadsPageFields = array(
			'id' => 'no',
			'bump' => 'last_modified'
		);

		$this->fileFields = array(
			'thumbheight' => 'tn_h',
			'thumbwidth' => 'tn_w',
			'height' => 'h',
			'width' => 'w',
			'size' => 'fsize',
		);

		if (isset($config['api']['extra_fields']) && gettype($config['api']['extra_fields']) == 'array'){
			$this->postFields = array_merge($this->postFields, $config['api']['extra_fields']);
		}
	}

	private static $ints = array(
		'no' => 1,
		'resto' => 1,
		'time' => 1,
		'tn_w' => 1,
		'tn_h' => 1,
		'w' => 1,
		'h' => 1,
		'fsize' => 1,
		'omitted_posts' => 1,
		'omitted_images' => 1,
		'replies' => 1,
		'images' => 1,
		'sticky' => 1,
		'locked' => 1,
		'last_modified' => 1,
	);

	private function translateFields($fields, $object, &$apiPost) {
		foreach ($fields as $local => $translated) {
			if (!isset($object->$local))
				continue;			
			$toInt = isset(self::$ints[$translated]);
			$val = $object->$local;
			if ($val !== null && $val !== '') {
				$apiPost[$translated] = $toInt ? (int) $val : $val;
			}

		}
	}

	private function translateFile($file, $post, &$apiPost) {
		if($file->file == "deleted"){
			$apiPost['filedeleted'] = 1;
		}
		else if($file->thumb == "spoiler"){
			$apiPost['spoiler'] = 1;
		}
		$this->translateFields($this->fileFields, $file, $apiPost);
		$apiPost['filename'] = @substr($file->name, 0, strrpos($file->name, '.'));
		$dotPos = strrpos($file->file, '.');
		$apiPost['ext'] = substr($file->file, $dotPos);
		$apiPost['tim'] = substr($file->file, 0, $dotPos);
		if (isset ($file->hash) && $file->hash) {
			$apiPost['md5'] = base64_encode(hex2bin($file->hash));
		}
		else if (isset ($post->filehash) && $post->filehash) {
			$apiPost['md5'] = base64_encode(hex2bin($post->filehash));
		}
	}

	private function translatePost($post, $threadsPage = false) {
		global $config, $board;
		$apiPost = array();
		$fields = $threadsPage ? $this->threadsPageFields : $this->postFields;
		$this->translateFields($fields, $post, $apiPost);

		if (isset($config['poster_ids']) && $config['poster_ids']) $apiPost['id'] = poster_id($post->ip, $post->thread, $board['uri']);
		if ($threadsPage) return $apiPost;

		// Handle country field
		if (isset($post->body_nomarkup) && $this->config['country_flags']) {
			$modifiers = extract_modifiers($post->body_nomarkup);
			if (isset($modifiers['flag']) && isset($modifiers['flag alt']) && preg_match('/^[a-z]{2}$/', $modifiers['flag'])) {
				$country = strtoupper($modifiers['flag']);
				if ($country) {
					$apiPost['country'] = $country;
					$apiPost['country_name'] = $modifiers['flag alt'];
				}
			}
		}

		if ($config['slugify'] && !$post->thread) {
			$apiPost['semantic_url'] = $post->slug;
		}

		// Handle files
		// Note: 4chan only supports one file, so only the first file is taken into account for 4chan-compatible API.
		if (isset($post->files) && $post->files && !$threadsPage) {
			$file = $post->files[0];
			$this->translateFile($file, $post, $apiPost);
			if (sizeof($post->files) > 1) {
				$extra_files = array();
				foreach ($post->files as $i => $f) {
					if ($i == 0) continue;
				
					$extra_file = array();
					$this->translateFile($f, $post, $extra_file);

					$extra_files[] = $extra_file;
				}
				$apiPost['extra_files'] = $extra_files;
			}
		}

		return $apiPost;
	}

	function translateArchive($arch_arr){
		$li = array();
		for($i = 0 ; $i < sizeof($arch_arr) ; $i++){
			$li[$i] = intval($arch_arr[$i]["id"]);
		}
		return $li;
	}
	
	function translateThread(Thread $thread, $threadsPage = false) {
		global $config;
		$apiPosts = array();
		$op = $this->translatePost($thread, $threadsPage);
		$op_limits_checked = false;
		if(isset($op["replies"] )){
			$op_limits_checked = true;
			$op["bumplimit"] = $op["replies"] > $config["reply_limit"] && $config["reply_limit"] != 0 ? 1 : 0;
		}
		if(isset($op["images"] )){
			$op["imagelimit"] = $op["images"] > $config["image_hard_limit"] && $config["image_hard_limit"] != 0 ? 1 : 0;
			$op_limits_checked = true;
		}
		if(!$op_limits_checked && !$threadsPage){
			$post_count = $image_count = 0;
			foreach ($thread->posts as $p) {
				$post_count++;
				if (isset($p->files))
					$image_count++;
			}
			$op["bumplimit"] = $config["reply_limit"] != 0 && $post_count > $config["reply_limit"] ? 1 : 0;
			$op["imagelimit"] = $config["image_hard_limit"] != 0 && $image_count > $config["image_hard_limit"] ? 1 : 0;
		}
		
		
		if (!$threadsPage) $op['resto'] = 0;
		$apiPosts['posts'][] = $op;
		
		
		foreach ($thread->posts as $p) {
			$apiPosts['posts'][] = $this->translatePost($p, $threadsPage);
		}
		return $apiPosts;
	}

	function translateProperties(){
	    global $board, $config;

	    $api_properties['board'] = $board['uri'];
	    $api_properties['title'] = $board['title'];
	    $api_properties['subtitle'] = $board['subtitle']; 
	    $api_properties['blotter'] = $config['blotter']; 
	    $api_properties['max_pages'] = $config['max_pages']; 
	    $api_properties['threads_per_page'] = $config['threads_per_page'];
	    $api_properties['nsfw_board'] = $config['nsfw_board']; 
	    $api_properties['poll_board'] = $config['poll_board']; 
	    $api_properties['file_board'] = $config['file_board']; 
	    $api_properties['max_filesize'] = $config['max_filesize']; 
	    $api_properties['max_body'] = $config['max_body']; 
	    $api_properties['reply_limit'] = $config['reply_limit']; 
	    $api_properties['image_hard_limit'] = $config['image_hard_limit']; 
	    $api_properties['flood_time'] = $config['flood_time']; 
	    $api_properties['flood_time_ip'] = $config['flood_time_ip']; 
	    $api_properties['flood_board_time'] = $config['flood_board_time']; 
	    $api_properties['archive']['threads'] = $config['archive']['threads']; 
	    $api_properties['archive']['lifetime'] = $config['archive']['lifetime']; 

	    return $api_properties;
	}
	
	function translateCounts($recent_no, $post_count, $sage_count, $file_count){
            $api_counter = array("recent_post"=>$recent_no, "post_count"=>$post_count, "sage_count"=>$sage_count,  "file_count"=>$file_count);
            return $api_counter;
	}

	function translatePage(array $threads) {
		$apiPage = array();
		foreach ($threads as $thread) {
			$apiPage['threads'][] = $this->translateThread($thread);
		}
		return $apiPage;
	}

	function translateCatalogPage(array $threads, $threadsPage = false) {
		$apiPage = array();
		foreach ($threads as $thread) {
			$ts = $this->translateThread($thread, $threadsPage);
			$first = array_shift($ts["posts"]);
			if(!$threadsPage)
				$first["last_replies"] = $ts["posts"];
			$apiPage['threads'][] = $first;
		}
		return $apiPage;
	}

	function translateCatalog($catalog, $threadsPage = false) {
		$apiCatalog = array();
		foreach ($catalog as $page => $threads) {
			$apiPage = $this->translateCatalogPage($threads, $threadsPage);
			$apiPage['page'] = $page;
			$apiCatalog[] = $apiPage;
		}

		return $apiCatalog;
	}
}
