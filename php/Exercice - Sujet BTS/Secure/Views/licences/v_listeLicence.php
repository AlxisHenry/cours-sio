<div id="bloc-page">
    <?php
    echo "CLUB : " . $leClub->getNom() . "<br />";
    echo "Date d'édition : " . date("d") . "/" . date("m") . "/" . date("Y") . "<br />";
    foreach ($licences as $licence) {
        echo $licence . "<br />";
    }
    echo "<h1>Licences actives</h1>";
    foreach ($licencesActives as $licence) {
        echo $licence . "<br />";
    }
    ?>
</div>