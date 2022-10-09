<?php
$titre_html = "Page d'accueil";
include 'header.php';
?>
<section class="container mt-5">
    <h1>Bienvenue sur la page d'accueil</h1>

    <p>

      Thème actuel : <?= !return_cookie_value() ? "Défaut" : ucfirst(return_cookie_value()) ?>
    </p>

    <p class="btn btn-primary">
        <a class="text-light text-decoration-none" href="modifier_le_theme.php">Modifier le thème</a>
    </p>

</section>
<?php
include 'footer.php';
?>