<?php

/**
 * Activation des erreurs
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Autoloader
 */
require_once('Config/autoload.php');

/**
 * Functions
 */
require_once('Config/functions.php');

//! QUESTION N°2

/**
 * Création de Véhicules
 */
echo "<h2>Illustration du fonctionnement du programme pour les Véhicules</h2>";

$voiture1 = new Voiture("Rouge", 1000, 5, 4);
echo "<pre>";
echo $voiture1;
echo "</pre>";

$voiture2 = new Voiture("Bleu", 1200, 3, 2);
echo "<pre>";
echo $voiture2;
echo "</pre>";

$voiture3 = new Voiture("Vert", 1500, 5, 4);
echo "<pre>";
echo $voiture3;
echo "</pre>";

/**
 * Création de Camions
 */
echo "<h2>Illustration du fonctionnement du programme pour les Camions</h2>";

$camion1 = new Camion("Rouge", 8000, 10, 2);
echo "<pre>";
echo $camion1;
echo "</pre>";

$camion2 = new Camion("Bleu", 20000, 14, 2);
echo "<pre>";
echo $camion2;
echo "</pre>";

$camion3 = new Camion("Vert", 16000, 15, 2); 
echo "<pre>";
echo $camion3;
echo "</pre>";

/**
 * Création de Motos
 */
echo "<h2>Illustration du fonctionnement du programme pour les Motos</h2>";

$moto1 = new Moto("Rouge", 232, 180);
echo "<pre>";
echo $moto1;
echo "</pre>";

$moto2 = new Moto("Bleu", 344, 120);
echo "<pre>";
echo $moto2;
echo "</pre>";

$moto3 = new Moto("Vert", 532, 150); 
echo "<pre>";
echo $moto3;
echo "</pre>";

//! QUESTION N°3

/**
 * Création d'un véhicule d'exemple
 */
echo "<h2>Exemple de création d'un véhicule</h2>";

$maVoiture = new Voiture("Noir", 1500);
echo "<pre>";
echo $maVoiture . EOL(2);
echo $maVoiture->rouler() . EOL(2);
echo "Poids du véhicule: " . $maVoiture->getPoids() . " kg" . EOL(2);
echo "Ajout d'une personne de 70kg..." . EOL(2); $maVoiture->ajouter_personne(70);
echo "Poids du véhicule: " . $maVoiture->getPoids() . " kg" . EOL(2);
echo "</pre>" ;

//! QUESTION N°4

/**
 * Implémentation de la mise d'essence 
 */
echo "<h2>Faire le plein d'un véhicule</h2>";
	
echo "<h4>Plein d'une Voiture: </h4>";

$voitureSansEssence = new Voiture("Bleu", 3000);
echo "<pre>";
echo "Poids du véhicule: " . $voitureSansEssence->getPoids() . " kg" . EOL(2);
echo "Plein en cours de 80 litres..." . EOL(2); $voitureSansEssence->mettre_essence(80);
echo "Poids du véhicule: " . $voitureSansEssence->getPoids() . " kg" . EOL(2);
echo "</pre>" ;

echo "<h4>Plein d'un Camion: </h4>";

$camionSansEssence = new Camion("Violet", 16000, 16);
echo "<pre>";
echo "Poids du véhicule: " . $camionSansEssence->getPoids() . " kg" . EOL(2);
echo "Plein en cours de 1024 litres..." . EOL(2); $camionSansEssence->mettre_essence(1024);
echo "Poids du véhicule: " . $camionSansEssence->getPoids() . " kg" . EOL(2);
echo "</pre>" ;

echo "<h4>Plein d'une Moto: </h4>";

$motoSansEssence = new Moto("Rouge", 40, 200);
echo "<pre>";
echo "Poids du véhicule: " . $maVoiture->getPoids() . " kg" . EOL(2);
echo "Plein en cours de 40 litres..." . EOL(2); $maVoiture->ajouter_personne(40);
echo "Poids du véhicule: " . $maVoiture->getPoids() . " kg" . EOL(2);
echo "</pre>" ;

//! QUESTION N°5

/**
 * Implémentation du reste des méthodes
 */
echo "<h2>Les autres méthodes...</h2>";

echo "<h4>Changement de la couleur d'une Voiture: </h4>";

$changementCouleurVoiture = new Voiture("Bleu", 3000);
echo "<pre>";
echo "Couleur d'origine: " . $changementCouleurVoiture->getCouleur() . EOL(2);
echo "Changement de la couleur en cours..." . EOL(2); $changementCouleurVoiture->repeindre("Rouge");
echo "Couleur changée: " . $changementCouleurVoiture->getCouleur() . EOL(2);
echo "</pre>" ;

echo "<h4>Changement de la couleur d'un Camion: </h4>";

$changementCouleurCamion = new Camion("Violet", 16000, 16);
echo "<pre>";
echo "Couleur d'origine: " . $changementCouleurCamion->getCouleur() . EOL(2);
echo "Changement de la couleur en cours..." . EOL(2); $changementCouleurCamion->repeindre("Pourpre");
echo "Couleur changée: " . $changementCouleurCamion->getCouleur() . EOL(2);
echo "</pre>" ;

echo "<h4>Changement de la couleur d'une Moto: </h4>";

$changementCouleurMoto = new Moto("Rouge", 40, 200);
echo "<pre>";
echo "Couleur d'origine: " . $changementCouleurMoto->getCouleur() . EOL(2);
echo "Changement de la couleur en cours..." . EOL(2); $changementCouleurMoto->repeindre("Vert");
echo "Couleur changée: " . $changementCouleurMoto->getCouleur() . EOL(2);
echo "</pre>" ;

echo "<h4>Ajout/Suppresion de pneus neige sur une Voiture</h4>";

$voitureEnHiver = new Voiture("Bleu", 3000, 5, 4);
echo "<pre>";
echo "Nombre de pneus neige en hiver: " . $voitureEnHiver->getNbPneuNeige() . EOL(2);
echo "Mise en place des pneus pour l'été..." . EOL(2); $voitureEnHiver->enlever_pneu_neige(4);
echo "Nombre de pneus neige après changement: " . $voitureEnHiver->getNbPneuNeige() . EOL(2);
echo "Mise en place de nouveaux pneus d'hiver..." . EOL(2); $voitureEnHiver->ajouter_personne(4);
echo "Nombre de pneus neige en hiver: " . $voitureEnHiver->getNbPneuNeige() . EOL(2);
echo "</pre>" ;

echo "<h4>Ajout d'une remorque à un Camion</h4>";

$camionSansRemorque = new Camion("Violet", 16000, 16);
echo "<pre>";
echo "Longueur d'origine: " . $camionSansRemorque->getLongueur() . EOL(2);
echo "Ajout d'une remorque en cours de 20 mètres de long en cours..." . EOL(2); $camionSansRemorque->ajouter_remorque(20);
echo "Longueur avec remorque: " . $camionSansRemorque->getLongueur() . EOL(2);
echo "</pre>" ;

echo "<h4>On retire la remorque du \$camionSansRemorque ci-dessus</h4>";

echo "<i style='font-size: 14px;'>La longueur de la remorque ajoutée précédemment étant stockée dans une variable.</i>";

echo "<pre>";
echo "Longueur d'origine: " . $camionSansRemorque->getLongueur() . EOL(2);
echo "Suppression d'une remorque en cours de ". $camionSansRemorque->getRemorqueLongueur() ." mètres de long en cours..." . EOL(2); $camionSansRemorque->retirer_remorque();
echo "Longueur avec remorque: " . $camionSansRemorque->getLongueur() . EOL(2);
echo "</pre>" ;