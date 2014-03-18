<?php 
	require 'config.php';
	require 'functions.php';

	do {
		$dirname = genRandomString(3);
		$dir = $savePath.'/'.$dirname;
		
	} while(file_exists($dir) && empty($dirname) == false);
	
	mkdir($dir);
	echo $dirname;