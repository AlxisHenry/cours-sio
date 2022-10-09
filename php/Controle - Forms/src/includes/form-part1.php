<h1> Partie 1 </h1>

<h2>Formulaire d'inscription</h2>
<form method="POST" action="./validation.php">

    <!-
        Pour le formulaire, il y'a d'abord une vérification avec le required sur les inputs,
        Puis une vérification en php.
    -->

    <label for="nom">Nom: </label>
    <input type="text" id="nom" name="nom" required/>

    <label for="prenom">Prenom: </label>
    <input type="text" id="prenom" name="prenom" required/>

    <label for="birthday">Date de naissance: (format DD/MM/YYYY) </label>
    <input type="text" size="10" maxlength="10" id="birthday" name="birthday" required/>

    <label for="email">Email: </label>
    <input type="text" id="email" name="email" required/>

    <label for="password">Mot de passe: </label>
    <input type="password" id="password" name="password" required/>

    <label for="password_verification">Mot de passe (vérification): </label>
    <input type="password" id="password_verification" name="password_verification" required/>

    <input style="margin-top: 10px; padding: 12px" type="submit" name="submit" id="submit" value="submit"/>

</form>