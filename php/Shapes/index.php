<?php

require_once('Config/autoload.php');

$rectangle = new Rectangle(new Points(2,3), 1, 2);
echo "<pre>";
echo $rectangle;
echo "</pre>";

$rectangle->bouger(3,4);
echo "<pre>";
echo $rectangle;
echo "</pre>";

$carre = new Carre(new Points(4,4), 1, 1);
echo "<pre>";
echo $carre;
echo "</pre>";

$carre->bouger(3,4);
echo "<pre>";
echo $carre;
echo "</pre>";

$cercle = new Cercle(new Points(4,2), 2);
echo "<pre>";
echo $cercle;
echo "</pre>";

$cercle->bouger(3,4);
echo "<pre>";
echo $cercle;
echo "</pre>";

// header("content-type:image/png");
// $x=400;
// $y=300;
// $img = imagecreatetruecolor($x,$y);
// $gris = imagecolorallocate($img,220,220,220);
// $bleu = imagecolorallocate($img,0,0,200);
// imagefill($img,0,0,$gris);
// imageline($img,0,0,$x,$y,$bleu);
// imagepng($img);