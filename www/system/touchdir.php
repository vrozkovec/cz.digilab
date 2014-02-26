<?php 
	require 'config.php';
	require 'functions.php';

	do {
		$dirname = genRandomString(7);
		$dir = $savePath.'/'.$dirname;
		
	} while(file_exists($dir) && empty($dirname) == false);
	
	mkdir($dir);
	echo $dirname;