<?php
	session_start();

	
	if ( !isset($_SESSION['lang'])) {
		$_SESSION['lang'] = "fr";
	}
	
	if ( isset($_SESSION['cookie_form']) ) {
		setcookie('FormSubmitted', '1', time()+24*60*60);
		unset($_SESSION['cookie_form']);
	}
	
	include('templates/' .  $_SESSION['lang'] . '/head.html');
	include('templates/' .  $_SESSION['lang'] . '/a_propos.php');
	include('templates/' .  $_SESSION['lang'] . '/foot_deca.html');
?>