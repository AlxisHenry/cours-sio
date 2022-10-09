<?php

# PHP ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);

# AUTOLOAD
require_once("autoload.php");

$person = (new Client('Henry', 'Alexis', 10))->setCoord('13 Allée des marquises');
echo $person;
echo "<br>";
echo $person->getJson();
echo "<br><br>";
$elector = (new Elector('Henry', 'Alexis', 20))->setVotePlace('Strasbourg')->setVoteStatus(true);
echo $elector;
echo "<br>";
echo $elector->getJson();
$elector2 = Elector::fromJson($elector->getJson());
echo $elector2;
$elector->excludePerson('Mauvais truc', 200);
echo "<br><br>";

?>