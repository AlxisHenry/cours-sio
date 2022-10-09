<!-- Include du header -->
<?php include 'src/includes/header.php';?>

<!--

1) Que signifie le code suivant ? Donner la réponse en commentaire dans votre code.

        <form method="POST" action="validation.php">

Le code ci-dessus, signifie que le formulaire va utiliser la méthode POST (les données ne passeront donc pas par l'url), ce qui signifie
que les données votn passées par le body de la requête HTTP.

-->

<?php

// Premier formulaire => Validation des données d'inscription
include "src/includes/form-part1.php";

// Initialisation des deux tableaux contenant les messages
$colors = [];
$color_gen = [];

if (isset($_POST['color'])) {
    $colors['color'] = "La dernière couleur choisie est : <span style='color: ".$_POST['color'].";'>" . $_POST['color'] ."</span>";
} elseif (isset($_POST['color_gen'])) {
    $color_gen['color'] = "La dernière couleur choisie est : <span style='font-weight: 800; color: ".$_POST['color_gen'].";'>" . $_POST['color_gen'] ."</span>";
}

// Second formulaire => affichage de la couleur choisie
include "src/includes/form-part2.php";
// Affichage d'un message indiquant la couleur
if (count($colors) > 0) {
    echo "<div>".$colors['color']."</div>";
}

// Troisième formulaire => génération des checkbox + affichage couleur choisie
include 'src/includes/form-part3.php';
// Affichage d'un message indiquant la couleur
if (count($color_gen) > 0) {
    echo "<div>".$color_gen['color']."</div>";
}
?>

<!-- Include du footer -->
<?php include 'src/includes/footer.php';  ?>