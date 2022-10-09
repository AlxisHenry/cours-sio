<?php
session_start();
const THEMES_DIR = "themes";
const CSS = "css";
const DOTCSS = "." . CSS;
const DIR_SEP = "/";
const THEMES_DEFAUT = "defaut";
const HTTP_OK = 200;
const NOM_COOKIE_THEME = 'theme';
$cookie_fin_de_vie = time() + 60 * 60 * 24;

/*
 * La fonction ci-dessous permet de checker la validité du thème récupéré via le cookie
 * */

function check_cookie_value($cookies_value):bool
{
    if(in_array($cookies_value, lister_les_themes_disponibles())) {
        return true;
    } else {
        return false;
    }

}

/*
 * La fonction ci-dessous permet de checker la validité du thème donné en paramètre
 * */

function check_theme_validity($theme):bool
{
    # On check si le thème donné en paramètre est présent dans la liste des thèmes ou non.
    if(in_array($theme, lister_les_themes_disponibles())) {
        # Dans le cas où le thème est présent on retourne true,
        return true;
    } else {
        # Dans le cas inverse, on retourne false.
        return false;
    }
}

/*
 * La fonction ci-dessous renvoie un array avec la liste de tous les thèmes disponibles.
 * Cela permet à la fonction d'être utilisable dans différentes parties du code, et ce à la place
 * de créer le tableau manuellement à chaque fois qu'on en a besoin.
 * Les noms de fichiers retournés sont les noms des fichiers ccs situés dans le dossier theme.
 * */

function lister_les_themes_disponibles()
{
    /*
     * Liste de tout les thèmes disponibles.
     * Pour en ajouter, il suffit de rajouter le thème dans le tableau, puis de créer le fichier css du même nom.
     * */
    return ['defaut','clair','sombre','fancy', 'blue', 'lightgreen', 'ciel'];
}

function return_select_option($theme)
{
    # Génère une option par thème
    return '<option value="'.$theme.'" '.(return_cookie_value() === $theme ? "selected" : '').'>Thème '.ucfirst($theme).' </option>';
}

/*
 * La fonction ci-dessous permet de définir le chemin vers le fichier css en fonction de la valeur du cookie.
 * */

function fichierCss_cookie_ou_defaut()
{
    if (!isset($_COOKIE[NOM_COOKIE_THEME])) {
        return false;
    }

    if (check_cookie_value($_COOKIE[NOM_COOKIE_THEME])) {
        // Si la fonction de check renvoie true alors :
        $theme_use = $_COOKIE[NOM_COOKIE_THEME]; // On récupère le nom du thème
        return THEMES_DIR . DIR_SEP . $theme_use . DOTCSS; // On renvoie le chemin qui mène au thème
    } else {
        return THEMES_DIR . DIR_SEP . THEMES_DEFAUT . DOTCSS;
    }

}

/*
 * La fonction ci-dessous permet de retourner la valeur du cookie si elle existe, elle renvoie false dans le cas inverse
 * */

function return_cookie_value()
{
    if(isset($_COOKIE[NOM_COOKIE_THEME])) {
        if (check_cookie_value($_COOKIE[NOM_COOKIE_THEME])) {
            return $_COOKIE[NOM_COOKIE_THEME];
        } else {
            return false;
        }
    } else {
        return false;
    }
}

/*
 * La fonction ci-dessous permet de créer le cookie thème.
 * */

function create_theme_cookie($theme, $time)
{
    if (check_theme_validity($theme)){
        setcookie(NOM_COOKIE_THEME,$theme, $time);
    }
}

/*
 * La fonction ci-dessous permet de supprimer le cookie thème.
 * */

function supprimer_le_cookie_theme()
{
    if (isset($_COOKIE[NOM_COOKIE_THEME])) {
        setcookie(NOM_COOKIE_THEME, "", time() - 3600);
        unset($_COOKIE[NOM_COOKIE_THEME]);
    }
}
