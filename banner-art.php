<?php
	
	$banners = scandir(__dir__ . "/static/banners/");
	$r = rand(2,sizeof($banners) - 1);
	$banner = __dir__ . "/static/banners/" . $banners[$r];
	$ext = [];
		
	preg_match("/\..+$/", $banner, $ext);
	
	$ext_proc = substr($ext[0], 1);
	
	header('Content-Type: image/' . $ext_proc);
	readfile($banner);