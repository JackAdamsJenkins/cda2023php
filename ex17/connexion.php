<?php
/*
    Vous allez créer un système d'inscription/connexion

    Vous allez ajouter une navbar (header) qui sera sur un fichier séparé.
    Cette navbar devra être ajoutée avec include ou require sur toutes les pages

    Sur la navbar :
        Si vous êtes connecté :
            - Afficher :
                - Déconnexion
                - Mon profil
        Si vous n'êtes pas connecté :
            - Afficher :
                - Connexion
                - Inscription
                
    // A vous de voir comment gérer la déconnexion (suppression de cookie)

    Vous allez avoir :
        - Une page d'inscription, contenant :
            - Un formulaire avec login, mot de passe
            - Le mot de passe doit être hashé
            - Les données doivent être stockées sur les cookies

        - Une page de connexion, contenant :
            - Un formulaire avec login, mot de passe
            - Vérification du mot de passe stockée sur les cookies (hashé)
            - Redirection sur la page profil si login/mdp ok

        - Une page profil, contenant :
            - Les données de login (mail ou pseudo)
            - un lien vers la page "modification de profil"

        - Une page modification de profil, contenant :
            - La possibilité de modifier le login
            - Possibilité de modifier/ajouter un prénom
            - Possibilité de modifier/ajouter un nom
            - Possibilité de modifier/ajouter une photo de profil

*/
// Get the password hash from the cookie
// $stored_password_hash = $_COOKIE['password_hash'];

// // Verify the password
// if (password_verify($password, $stored_password_hash)) {
//     // Password is correct, redirect to the profile page
//     header('Location: profile.php');
//     exit;
// } else {
//     // Password is incorrect, show an error message
//     $error = 'Incorrect password';
// }

$message = null;
// On envoi le formulaire
if(isset($_POST['submit'])){
    // On vérifie si les données login et pass sont renseignées
    if(!empty($_POST['login']) && !empty($_POST['pass'])){
        // Les données sont renseignées, on vérifie la correspondance
        $loginCookie = $_COOKIE['login'];
        $passCookie = $_COOKIE['pass'];

        // Si login et pass correspondent
        if($loginCookie == $_POST['login'] &&
            password_verify($_POST['pass'], $passCookie)
        ) {
            // On se connect
            setcookie('isLoggedIn', true, time()+3600); // On se connecte pour une heure

            // Redirection sur la page profil
            header('Location: profil.php');
        } else {
            $message = '<p style="color:red">Les identifiants ne correspondent pas</p>';
        }
    } else {
        $message = '<p style="color:red">Vous devez renseigner tous les champs.</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php include_once('header.php'); ?>
    <h1>Connexion</h1>
    <?=$message ?>
    <form action="#" method="post">
        <input type="text" name="login" placeholder="Identifiant">
        <input type="password" name="pass" placeholder="Mot de passe">
        <input type="submit" value="Connexion" name="submit">
    </form>
</body>
</html>