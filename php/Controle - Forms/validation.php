<?php include 'src/includes/header.php';


// Récupération de toutes les données
$nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_SPECIAL_CHARS );
$prenom = filter_input(INPUT_POST,'prenom',FILTER_SANITIZE_SPECIAL_CHARS );
$birthday = filter_input(INPUT_POST,'birthday',FILTER_SANITIZE_SPECIAL_CHARS );
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS );
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS );
$passwordCheck = filter_input(INPUT_POST,'password_verification',FILTER_SANITIZE_SPECIAL_CHARS );

// Tableau associatif contenant toutes les valeurs du formulaire
$all = [
    'nom' => $nom,
    'prenom' => $prenom,
    'birthday' => $birthday,
    'email' => $email,
    'password' => $password,
    'passwordcheck' => $passwordCheck
];

// Initialisation du tableau contenant les erreurs
$errors = [];

// Boucle à travers le tableau pour vérifier si il y a des valeurs nuls
foreach (array_keys($all) as $key) {

    if(strlen($all[$key]) === 0) {
        $errors[] = "Vous n'avez pas indiqué de valeur pour : ". $key;
    }

}

// Vérification des mots de passe.
if ($password !== $passwordCheck) {
    $errors[] = "Les mots de passe ne sont pas identiques...";
}

// Vérification de l'adresse mail
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'email n'est pas valide... type:  xxx@xxx.xxx";
}

// Vérification de la date à l'aide de checkdate()
$birthdayFormat = explode('/', $birthday);

if (count($birthdayFormat) !== 3 || !checkdate($birthdayFormat[1], $birthdayFormat[0], $birthdayFormat[2])) {
    $errors[] = "Votre date de naissance n'est pas valide...";
}

/*

Affichage utilisateur

Si erreurs => Affichage des erreurs.
Si non => Indication d'inscription réussie.

*/

if (count($errors) > 0) {

    echo "L'inscription a échouée...<br>";

    foreach ($errors as $error) {

        echo "<li>$error</li>";

    }

} else {
    echo "Inscription réussie : <br>";
    echo "Nom: " . $nom . "<br>";
    echo "Prenom: " . $prenom . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: ";
    // Affichage du password avec des étoiles.
    for ($i = 0; $i < strlen($password); $i++) {
        echo "*";
    }

}


