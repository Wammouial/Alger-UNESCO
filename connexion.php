<?php 
	try {
			$bd = new PDO('mysql:host=sqletud.u-pem.fr;dbname=wammouia_db', 'wammouia', '36b0f47b2f196d77bda4b26294ecbf0e4526982c07a0e45617f16b45c484e5b0');
$bd -> exec("SET NAMES UTF8");
		} catch(Exception $e) {
			echo "Mauvais mot de passe t'es nul...";
			die();
		} ?>

