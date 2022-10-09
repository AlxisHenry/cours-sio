<?php
require_once('session.php');
?>

<menu>
  <?php if (!in_array($role, [ROLE_USER, ROLE_ADMIN])) { ?>
    <li><a href='login.php'>Login</a></li>
  <?php } ?>
  <?php if (in_array($role, [ROLE_USER, ROLE_ADMIN])) { ?>
    <li><a href='secrete_1.php'>Page 1</a></li>
  <?php } ?>
  <?php if (in_array($role, [ROLE_ADMIN])) { ?>
    <li><a href='secrete_2.php'>Page 2</a></li>
  <?php } ?>
  <li><a href='deconnexion.php'>Déconnexion</a></li>
</menu>