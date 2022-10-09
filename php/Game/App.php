<?php

require_once("autoload.php");
$titre_html = "Je découvre la POO";
require_once("header1.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

$p1 = new Personnage('Warrior', 10, 2);
echo "Nombre de personnage créés : " . Personnage::getCreatedPersonnages();
echo "<br>";
$p2 = new Personnage('Dwarf', 90, 58);
echo "Nombre de personnage créés : " . Personnage::getCreatedPersonnages();
echo "<br>";
$p3 = new Personnage('Dodo', 0, 40);
echo "Nombre de personnage créés : " . Personnage::getCreatedPersonnages();

echo "<br><br>";
echo "DELETE PERSONNAGES<br>";
echo "====================";
echo "<br><br>";
echo "Personnages actifs : " . Personnage::getActivatedPersonnages();
$p1 = null;
echo "<br>";
echo "Personnages actifs : " . Personnage::getActivatedPersonnages();
$p2 = null;
echo "<br>";
echo "Personnages actifs : " . Personnage::getActivatedPersonnages();
$p3 = null;
echo "<br>";
echo "Personnages actifs : " . Personnage::getActivatedPersonnages();

// $perso1->frapper($perso2);  // $perso1 frappe $perso2
// $perso1->gagnerExperience(); // $perso1 gagne de l'expérience

// $perso2->frapper($perso1);  // $perso2 frappe $perso1
// $perso2->gagnerExperience(); // $perso2 gagne de l'expérience

// echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
// echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
// echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';
// require_once("footer1.php");


// require_once("header1.php");
// $perso = new Personnage('Xoxo', 20,30);
// $perso->parler();
// echo '<br>Expérience : ';
// $perso->afficherExperience();
// echo '<br>On gagne de l\'expérience : ';
// $perso->gagnerExperience();
// $perso->afficherExperience();
// require_once("footer1.php");


















//$perso = new Personnage(10,50);
/*
echo ('ccc');
$perso->parler();
echo '<br>Expérience : ';
echo $perso->experience();
echo '<br>Je suis un bon !';
$perso->gagnerExperience();
echo '<br>Voici mon nouveau niveau d\'expérience : ';
echo $perso->experience();

$perso2 = new Personnage(10,50);
echo "<br>Degats perso=" . $perso->degats() . " perso2=" . $perso2->degats();
$perso->frapper($perso2);
echo "<br>Degats perso=" . $perso->degats() . " perso2=" . $perso2->degats();
$perso->gagnerExperience();
echo '<br>Voici mon nouveau niveau d\'expérience : ';
echo $perso->experience();

echo '<hr>Le combat recommence<br>';
$perso1 = new Personnage(10,2);

//$perso1->setForce(10);
//$perso1->setExperience(2);

$perso2 = new Personnage(90,58);

//$perso2->setForce(90);
//$perso2->setExperience(58);

echo '<br>Avant le round<br>';
echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';






$perso1->frapper($perso2);  // $perso1 frappe $perso2
$perso1->gagnerExperience(); // $perso1 gagne de l'expérience

$perso2->frapper($perso1);  // $perso2 frappe $perso1
$perso2->gagnerExperience(); // $perso2 gagne de l'expérience

echo '<br>Après le round<br>';
echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';


echo '<hr>Illustration méthode statique<br>';
echo '<br>Classe Personnage : ' . Personnage::static_parler();
echo '<br>perso1 : ' . $perso1::static_parler();
echo '<br>perso2 : ' . $perso2::static_parler();

require_once("footer1.php");

*/