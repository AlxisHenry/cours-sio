<?php

# PHP ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);

# AUTOLOAD
require_once("Config/autoload.php");

# FUNCTIONS
require_once("Config/functions.php");

echo "<h4>Création de deux personnes: </h4>";

$homme = new Homme('Doe', 'John', 25, 'Paris');
$femme = new Femme('First', 'Marie', 22, 'Strasbourg');

echo "<pre>";
echo "Homme: " .$homme. EOL(2);
echo "Femme: " .$femme. EOL(2);
echo "</pre>" ;

echo "<h4>Mariage: </h4>";

$homme->toMarry($femme);
$femme->toMarry($homme);

echo "<pre>";
echo "Partenaire de l'homme: " .$homme->aboutPartner(). EOL(2);
echo "Partenaire de la femme: " .$femme->aboutPartner(). EOL(2);
echo "</pre>" ;

echo "<h4>Divorce des deux personnes: </h4>";

$homme->divorce();
$femme->divorce();

echo "<pre>";
echo "Partenaire de l'homme: " .$homme->aboutPartner(). EOL(2);
echo "Partenaire de la femme: " .$femme->aboutPartner(). EOL(2);
echo "</pre>" ;
