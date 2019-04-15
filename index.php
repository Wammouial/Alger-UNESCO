<?php
	
	session_start();
	
	if( !isset($_SESSION['lang'])) {
		$_SESSION['lang'] = "fr";
	}
	
	include('templates/' .  $_SESSION['lang'] . '/head.html');
	include('templates/' .  $_SESSION['lang'] . '/index.html');
	include('templates/' .  $_SESSION['lang'] . '/foot.html');
?>