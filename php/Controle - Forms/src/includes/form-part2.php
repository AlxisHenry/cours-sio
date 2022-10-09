<h1> Partie 2 </h1>

<h2>Formulaire choix de couleurs</h2>

<form method="POST" action="./index.php">
    <!-- Ce code permet de mettre la checkbox à l'état checked si cette couleur a été choisie au dernier submit -->

    <label for="color">Votre couleur préférée : </label> <br>
    <div>
        <input type="radio"
               value="red"
            <?php if($_POST['color'] === 'red') { echo "checked"; } ?>
               name="color">
        <label for="colors" class="labelradio">Rouge</label>
    </div>
    <div>
        <input type="radio"
               value="green"
        <?php if($_POST['color'] === 'green') { echo "checked"; } ?>
               name="color">
        <label for="color" class="labelradio">Vert</label>
    </div>
    <div>
        <input type="radio"
               value="blue"
        <?php if($_POST['color'] === 'blue') { echo "checked"; } ?>
               name="color">
        <label for="color" class="labelradio">Bleu</label>
    </div>
    <input style="margin-top: 10px; padding: 12px" type="submit" name="submit" id="submit" value="submit"/>

</form>

<style>
    div {
        margin-top: 12px;
    }
    .labelradio {
        margin-left: 6px;
    }
</style>