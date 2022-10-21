<?php

# PHP ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);

# AUTOLOAD
require_once("Config/autoload.php");
require_once '../vendor/autoload.php';

# SEED
include 'Config/seed.php';

# FUNCTIONS
include 'Config/functions.php';

# FAKER 
$faker = Faker\Factory::create('fr_FR');

for ($i = 0; $i < 200; $i++) {
	$ligues[] = new LigueRegionale($faker->departmentNumber(), $faker->name(), $faker->departmentName(), $faker->email());
}

for ($i = 0; $i < 200; $i++) {
	$clubs[] = remplirDonneesTest(new Club($faker->randomDigit(), $faker->streetName(), $faker->departmentName(), $faker->email(), $ligues[rand(1, count($ligues) - 1)] ));
}

switch (explode('?', $_SERVER['REQUEST_URI'])[0]) {
	case '/clubs':
		if (isset($_GET['ligue'])) {			
			if (getClubsOfThisLigue(urldecode($_GET['ligue']), $clubs, false)) {
				$clubs = getClubsOfThisLigue(urldecode($_GET['ligue']), $clubs, true);
				include 'Views/clubs/clubs.php';
				break;
			} else {
				echo "Aucune club n'est dans cette ligue !<br>";
				break;	
			}
		}
		include 'Views/clubs/clubs.php';
		break;
	case '/ligues':
		include 'Views/ligues/ligues.php';
		break;
	case '/licences':
		if (isset($_GET['clubName'])) {			
			if (checkIfClubExist(urldecode($_GET['clubName']), $clubs, false)) {
				$club = checkIfClubExist(urldecode($_GET['clubName']), $clubs, true);
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
		echo "<a href='/ligues'>Voir les ligues régionales</a><br>";
		echo "<a href='/licences'>Voir les licences</a><br>";
		echo "<a href='/statistiques'>Voir les statistiques</a>";
		break;
}

if (explode('?', $_SERVER['REQUEST_URI'])[0] !== '/') {
	echo "<a href='/'>Retourner à l'accueil</a>";
}