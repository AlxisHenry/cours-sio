<h1> Partie 3 </h1>

<h2>Formulaire généré à l'aide d'une boucle </h2>

<?php

// Création d'un tableau contenant toutes les couleurs dont l'on désire créé une checkbox.
$all_colors =
    [
            'green', 'red', 'blue', 'yellow', 'dark', 'magenta', 'orange', 'purple', 'rosybrown', 'BurlyWood', 'CornflowerBlue', 'DarkOliveGreen'
    ];

// Création d'une fonction renvoyant un composant html pour une couleur
function ReturnCheckbox(string $color,bool $checked):string {

    // Première lettre de la couleur en majuscule
    $name = ucfirst($color);

    // Return de l'élément avec la value et le nom de la couleur

    return "
        <div>
            <input type='radio'
                   value='$color'
                   ". ($checked ? 'checked' : '' )."
                   name='color_gen'>
            <label for='color_gen' class='labelradio'>$name</label>
        </div>
        ";

}

?>

<form method="POST" action="./index.php">

    <label for="color">Votre couleur préférée : </label> <br>

    <?php

    /*
     * Boucle =>
     * Pour chaque couleur dans le tableau $all_colors, appelle de la fonction ReturnCheckbox avec en paramètre cette couleur,
     * Cela génère donc un composant checkbox par couleur
     *
     * */
    foreach ($all_colors as $color) {

        if ($color === $_POST['color_gen']) { $checked = true; } else { $checked = false;}

        echo ReturnCheckbox($color, $checked);

    }


    ?>

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