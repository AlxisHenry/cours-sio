<?php

require_once('Config/autoload.php');
$titre_html = "Je découvre la POO";
require_once("Includes/header.php");
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