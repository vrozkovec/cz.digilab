<?php
function genRandomString($length) {
	$characters = '0123456789ABC';
	$string = '';
	for ($p = 0; $p < $length; $p++) {
		$string .= $characters[mt_rand(0, strlen($characters)-1)];
	}

	return $string;
}