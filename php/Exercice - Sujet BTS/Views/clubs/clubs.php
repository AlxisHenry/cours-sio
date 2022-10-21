<div id="bloc-page">
    <?php
    foreach ($clubs as $club) {

        echo "<hr><pre>";

        echo "Nom du club: " . $club->getNom() ."<br>";
		echo "<a href='/licences?clubName=".urlencode($club->getNom())."'>Voir les licences</a>";
      
		echo "</pre>";

    }
    ?>
</div>