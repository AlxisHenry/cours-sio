<div id="bloc-page">
    <?php
    foreach ($ligues as $ligue) {
		
		echo "<hr><pre>";
		echo "Nom de la ligue : " . $ligue->getNom() . "<br><br>"; 
		
		$stats = $ligue->getNbLicencesParCategorie();

		foreach ($stats as $category => $stat) {
			echo "Categorie : " . $category . " - Nombre de licences : " . $stat . "<br>";
		}

		echo "</pre>";
    }
    ?>
</div>