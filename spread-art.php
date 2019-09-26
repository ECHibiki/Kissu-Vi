<?php
	
	$spreads = scandir(__dir__ . "/static/spreads/");
	$r = rand(2,sizeof($spreads) - 1);
	$banner = __dir__ . "/static/spreads/" . $spreads[$r];
	$ext = [];
		
	preg_match("/\..+$/", $banner, $ext);
	
	$ext_proc = substr($ext[0], 1);
	
	header('Content-Type: image/' . $ext_proc);
	readfile($banner);