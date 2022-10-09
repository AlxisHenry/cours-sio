<?php

include 'theme.php';

# On vérifie si le formulaire a bien envoyé un champ theme.
if(isset($_POST['theme'])) {
    $theme = $_POST['theme']; # On initialise une variable avec la valeur du champ theme.

    if (check_theme_validity($theme)) {
        /*
         * Si le thème est valide, et dans le cas où le thème est différent de défaut, on créer un cookie avec la valeur du thème.
         * Dans le cas inverse, on appelle la fonction qui s'occupe de supprimer le cookie
         * */
        if($theme !== "defaut") {
            create_theme_cookie($theme, $cookie_fin_de_vie);
        } else {
            supprimer_le_cookie_theme();
        }

        # Dans le cas où le thème a bien été changé, on initialise la session avec le thème actuel, et on met à false les différentes erreurs.
        $_SESSION['theme']['currentTheme'] = $theme;
        $_SESSION['theme']['modification_failed'] = false;
        $_SESSION['theme']['get_theme_failed'] = false;
        # On redirige ensuite, après 2 secondes, vers l'accueil.
        header( "Refresh:2; url='accueil.php'");
        die();
    } else {
        # Dans le cas où le thème n'est pas trouvé dans la liste des thèmes, on met l'erreur modification_failed à true.
        $_SESSION['theme']['modification_failed'] = true;
        $_SESSION['theme']['get_theme_failed'] = false;
        # On redirige donc, à nouveau, l'utilisateur vers la page de modification.
        header('Location: modifier_le_theme.php');
        die();
    }

} else {
    # Dans le cas où le thème ne nous est pas parvenu, on appelle la fonction qui s'occupe de supprimer le cookie.
    supprimer_le_cookie_theme();
    # On met à true l'erreur indiquant ce cas de figure dans la session.
    $_SESSION['theme']['modification_failed'] = false;
    $_SESSION['theme']['get_theme_failed'] = true;
    # On redirige donc, à nouveau, l'utilisateur vers la page de modification.
    header('Location: modifier_le_theme.php');
    die();
}


// 1. Dans le fichier theme.php
//    a. Voir les constantes en particulier NOM_COOKIE_THEME
//    b. Que fait la fonction lister_les_themes_disponibles ?
//       Où sont les fichiers correspondants ?
//    b. Compléter le code de la fonction supprimer_le_cookie_theme()
//    c. Compléter le code de la fonction
//             fichierCss_cookie_ou_defaut
//       pour l'instant cette fonction renvoie le fichier css par défaut
//       il faut qu'elle prenne en compte la présence d'un cookie
//    c. Compléter le code de la fonction verifier_la_valeur_du_cookie_avant_de_le_creer_ou_avant_de_l_utiliser
//       qui renvoie vrai si la valeur du cookie est valable, faux sinon

// Dans le fichier traitementFormulaire.php

// 2. Vérifier si les données du formulaire sont correctes

// 3. Si le thème est non renseigné, supprimer le cookie

// 4. Si le thème est valide selon la fonction
//          lister_les_themes_disponibles()
//    Créer le cookie thème et rediriger vers la page d'accueil

// 5. Si le thème n'est pas valide,
//    rediriger vers le formulaire
//    et afficher un message d'erreur 'thème non valide'.