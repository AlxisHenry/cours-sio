<?php
require_once 'theme.php';

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
      <link rel="shortcut icon" href="https://raw.githubusercontent.com/AlxisHenry/CCI-2021-PORTFOLIO/main/public/favicon.ico">
      <title><?=$titre_html ?? "Titre de la page"?></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link rel="stylesheet" href="<?=fichierCss_cookie_ou_defaut()?>">

  </head>
  <body>
  <?php $code_reponse_http = http_response_code();
if ($code_reponse_http != HTTP_OK) {?>
    <p class="code_http">Code HTTP de la requête = <?=$code_reponse_http?></p>

<?php }
?>
    <div>

