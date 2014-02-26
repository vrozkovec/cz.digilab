<?php 
	require 'config.php';
	require 'functions.php';

	$dir = $_POST['dir'];
	$uploads = $_POST['uploaded'];
	
	$serverUpDir = dirname(__file__)."/server/files/";
	
	foreach ($uploads as $upload) {
		$origDir = $serverUpDir.$upload['uuid'];
		$origFile = $origDir."/".$upload['name'];
		
		if ($upload['status']=='upload successful' && file_exists($origFile)) {
			
			$newFile = $savePath."/".$dir."/".$upload['name'];
			
			rename($origFile, $newFile);
			
			rmdir($origDir);
		}
	}
