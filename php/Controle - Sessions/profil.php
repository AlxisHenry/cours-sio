<?php

require_once('session.php');

if (empty($_POST) or !isset($_POST['pseudo']) or !isset($_POST['password'])) {
  // Pas assez de doonées dans $_POST, on retourne à la page de login
  header('Location: login.php');
  exit();
}

// Récupératoin du pseudo et password du formulaire
$pseudo  = $_POST['pseudo'];
$password = $_POST['password'];


// Lsite des utilisateurs autorisés
$users = [
  ['pseudo' => 'Admin', 'password' => 'Admin123', 'role' => ROLE_ADMIN],
  ['pseudo' => 'User', 'password' => 'User123', 'role' => ROLE_USER],
];


// Recherche de l'utilisateur dans la liste
$userOk = false;
foreach ($users as $user) {
  if ($user['pseudo'] == $pseudo && $user['password'] == $password) {
    // Utilisateur trouvé : mies à jour des données de session
    $role = $user['role'];
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['connecte'] = 1;
    $_SESSION['role'] = $role;
    $userOk = true;
    break;
  }
}

// La page de login va soit charger la page secrète d'après le rôle de l'utilisateur
// Soit il n'y a pas de session et demander un mot de passe
header('Location: login.php');
