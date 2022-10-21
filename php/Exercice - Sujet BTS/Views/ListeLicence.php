<?php

echo "<h1>Liste de pratiquants dans le club $</h1>";

echo "Club name: ". $club->getNom();
echo "<br><br>";

foreach ($licences as $licence) {
	echo $licence->pratiquant()->getNom();
}