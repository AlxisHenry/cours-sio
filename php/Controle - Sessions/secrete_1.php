<?php

require('head.php');
if (!$connecte || !in_array($role, [ROLE_USER, ROLE_ADMIN])) {
	header('Location: login.php');
}
?>
<h1>Page User</h1>

Bienvenue <?= $pseudo ?><br>
<a href='deconnexion.php'>Se déconnecter</a>
<?php
require('foot.php');
?>
