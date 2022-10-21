<?php

# PHP ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);

# AUTOLOAD
require_once("Config/autoload.php");

# FUNCTIONS
require_once("Config/functions.php");

switch (explode('?', $_SERVER['REQUEST_URI'])[0]) {

	case '/licences':
		$club = new Club(1, $_GET['clubName'], "1 rue de la paix", "email@e.c", new LigueRegionale("LALIGUE", "Ligue 1", "1 rue de la paix", "e@e.c"));
		$pratiquant = new Pratiquant(1, "Alexis", "Henry", "13 Allée des Marquises", "email@email.co");
		$club->ajouterLicence(new Licence(1, 2020, $club, new Categorie(1, "Cadet", 12, 15), $pratiquant));
		$club->ajouterLicence(new Licence(2, 2020, $club, new Categorie(1, "Cadet", 12, 15), $pratiquant));
		$club->ajouterLicence(new Licence(3, 2020, $club, new Categorie(1, "Cadet", 12, 15), $pratiquant));
		$licences = $club->afficherLicences();
		include 'Views/ListeLicence.php';
		break;

}