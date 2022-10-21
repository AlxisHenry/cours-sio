<div id="bloc-page">
    <?php
    foreach ($clubs as $club) {

        echo "<hr><pre>";

        echo "CLUB : " . $club->getNom() . "<br />";
        echo "Date d'édition : " . date("d") . "/" . date("m") . "/" . date("Y") . "<br />";

        $licences = licences($club);
       
        echo "<h2>Licences du club</h2>";
        foreach ($licences as $licence) {
            echo $licence . "<br />";
        }

        $licencesActives = licencesAtives($club);

        echo "<h2>Licences actives du club</h2>";
        foreach ($licencesActives as $licence) {
            echo $licence . "<br />";
        }

        echo "</pre><br>";

    }
    ?>
</div>