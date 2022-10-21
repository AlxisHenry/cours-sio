<?php

# PHP ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);

# AUTOLOAD
require_once("Config/autoload.php");

# SEED
include 'Config/seed.php';

# FUNCTIONS
include 'Config/functions.php';

$clubs = [
	remplirDonneesTest(new Club(1, "BIGORRE BOWLING CLUB", "Rue du bowling", "test@email.com", new LigueRegionale(67, "Bas-Rhin", "Strasbourg", "contact@lr67.alsace"))),
	remplirDonneesTest(new Club(2, "2EME CLUB BOWLING CLUB", "Rue du bowling 2", "test2@email.com", new LigueRegionale(68, "Haut-Rhin", "Colmar", "contact@lr68.alsace"))),
	remplirDonneesTest(new Club(3, "3EME CLUB BOWLING CLUB", "Rue du bowling 3", "test3@email.com", new LigueRegionale(57, "Moselle", "Sarrebourg", "contact@lr57.alsace")))	
];

switch (explode('?', $_SERVER['REQUEST_URI'])[0]) {
	case '/clubs':
		include 'Views/clubs/clubs.php';
		break;
	case '/licences':
		if (isset($_GET['clubName'])) {			
			if (checkIfClubExist(urldecode($_GET['clubName']), $clubs, 0)) {
				$club = checkIfClubExist(urldecode($_GET['clubName']), $clubs, 1);
				$clubs = [
					$club
				];
				include 'Views/licences/c_listeLicence.php';
				break;
			} else {
				echo "Aucun club ne correspond !<br>";
				break;	
			}
		}
		include 'Views/licences/c_listeLicence.php';
		break;
	case '/statistiques':
		include 'Views/statistiques/statistiques.php';
		break;
	default:
		echo "<a href='/clubs'>Voir les clubs</a><br>";
		echo "<a href='/licences'>Voir les licences</a><br>";
		echo "<a href='/statistiques'>Voir les statistiques</a>";
		break;
}

if (explode('?', $_SERVER['REQUEST_URI'])[0] !== '/') {
	echo "<a href='/'>Retourner à l'accueil</a>";
}