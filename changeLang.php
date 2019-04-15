<?php 
	session_start();
	
	if ( isset($_GET['lang']) ) {
		if ( $_GET['lang'] == 'fr') {
			$_SESSION['lang'] = 'fr';
		} elseif ( $_GET['lang'] == 'en') {
			$_SESSION['lang'] = 'en';
		}
	}
?>