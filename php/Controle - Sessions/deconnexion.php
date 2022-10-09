<?php

require_once('session.php');
session_destroy();
header('Refresh: 3; URL=login.php');
?>
<strong>
  Déconnection et retour vers la page login...
</strong>