<?php

# PHP ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);

# AUTOLOAD
require_once("Config/autoload.php");

switch (explode('?', $_SERVER['REQUEST_URI'])[0]) {

	case '/licences':
		include 'Views/licences/c_listeLicence.php';
		break;
	default:
		echo "<a href='/licences'>Voir les licences</a>";
}

if (explode('?', $_SERVER['REQUEST_URI'])[0] !== '/') {
	echo "<a href='/'>Retourner à l'accueil</a>";
}