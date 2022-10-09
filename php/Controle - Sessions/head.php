<?php
require_once('session.php');

?>
<!doctype html>
<html lang="fr">
<title><?= $title ?? 'Exercice Cookies' ?></title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="icon" href="<?= $favicon ?? 'data:;base64,iVBORw0KGgo=' ?>">
<?php require('menu.php'); ?>