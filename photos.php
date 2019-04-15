<?php
	
	session_start();
	
	if( !isset($_SESSION['lang'])) {
		$_SESSION['lang'] = "fr";
	}
	
	include('templates/' .  $_SESSION['lang'] . '/head.html');
	include('templates/' .  $_SESSION['lang'] . '/photos.html');
	include('templates/' .  $_SESSION['lang'] . '/foot_deca.html');
?>