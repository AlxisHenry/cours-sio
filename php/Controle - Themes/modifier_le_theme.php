<?php
$titre_html = "Choix du thème";
include 'header.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<section class="container mt-5">
    <form method="POST" action="traitementFormulaire.php">
        <label for="theme">Choix du thème</label><br>
        <select name="theme" id="theme"  class="form-select py-3">
            <?php
            $themes = lister_les_themes_disponibles();
            foreach ($themes as $theme) {
                echo return_select_option($theme);
            }
            ?>
            <option value="err">Thème non valide n°2</option>
        </select><br>
        <input class="btn btn-primary py-3 w-100" type="submit" value="Envoyer" name="choixTheme">
    </form>

    <p class="mt-3">
    <?php if(isset($_SESSION['theme']['modification_failed']) && $_SESSION['theme']['modification_failed'] === true) { ?>
        Navré, le thème renseigné n'est pas valide.
    <?php } elseif(isset($_SESSION['theme']['get_theme_failed']) && $_SESSION['theme']['get_theme_failed'] === true) { ?>
        Attention, vous n'avez pas renseigné de thème !
    <?php } ?>
    </p>

    <p class="mt-3">
        <a href="accueil.php">Retour à l'accueil</a>
    </p>
</section>
<?php
include 'footer.php';
?>