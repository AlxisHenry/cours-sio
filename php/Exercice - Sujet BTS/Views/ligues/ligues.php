<div id="bloc-page">
    <?php
    foreach ($clubs as $club) {

        echo "<hr><pre>";

        echo "Nom de la ligue: " . $club->ligue()->getNom() . " " . $club->ligue()->getCode() ."<br>";
		echo "<a href='/clubs?ligue=".urlencode($club->ligue()->getCode())."'>Voir les clubs</a>";
      
		echo "</pre>";

    }
    ?>
</div>