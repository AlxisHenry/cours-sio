<?php
$title = 'Connexion';
require('head.php');

if ($connecte) {
	switch($role) {
		case ROLE_USER:
			header('Location: secrete1.php');
			break;
		case ROLE_ADMIN:
			header('Location: secrete2.php');
			break;
		default:
			session_destroy();
			header('Location: login.php');
			break;
	}
}

?>

<h1 class="text-center m-5">Page de connexion</h1>
<form action="profil.php" method="post" class="w-50 mx-auto">
  <div class="conteneur-pseudo form-floating mb-3">
    <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
    <label for="pseudo">Pseudo</label>
  </div>
  <div class="conteneur-password form-floating">
    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Passe">
    <label for="password">Mot de Passe</label>
  </div>
  <button class="btn btn-primary mt-5 d-block mx-auto" type="submit">Submit form</button>
</form>

<?php
require('foot.php');
