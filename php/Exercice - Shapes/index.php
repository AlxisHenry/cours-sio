<?php

require_once('Config/autoload.php');

$rectangle = new Rectangle(new Points(2,3), 1, 2);
echo "<pre>";
echo $rectangle;
echo "</pre>";

echo "<pre>";
echo $rectangle->points();
echo "</pre>";

$rectangle->bouger(3,4);
echo "<pre>";
echo $rectangle;
echo "</pre>";

echo "<pre>";
echo $rectangle->points();
echo "</pre>";

$carre = new Carre(new Points(4,4), 1, 1);
echo "<pre>";
echo $carre;
echo "</pre>";

echo "<pre>";
echo $carre->points();
echo "</pre>";

$carre->bouger(3,4);
echo "<pre>";
echo $carre;
echo "</pre>";

echo "<pre>";
echo $carre->points();
echo "</pre>";

$cercle = new Cercle(new Points(4,2), 2);
echo "<pre>";
echo $cercle;
echo "</pre>";

echo "<pre>";
echo $cercle->points();
echo "</pre>";

$cercle->bouger(3,4);
echo "<pre>";
echo $cercle;
echo "</pre>";

echo "<pre>";
echo $cercle->points();
echo "</pre>";