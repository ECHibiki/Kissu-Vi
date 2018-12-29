<?php

	$banner_dir_size = new FilesystemIterator(__dir__ . "/static/banners/", FilesystemIterator::SKIP_DOTS);
	$r = rand(1,iterator_count($banner_dir_size));
	$file = __dir__ . "/static/banners/banner-kissu-$r.png";
	header('Content-Type: image/png');
	readfile($file);