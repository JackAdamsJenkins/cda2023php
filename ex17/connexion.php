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
$stored_password_hash = $_COOKIE['password_hash'];

// Verify the password
if (password_verify($password, $stored_password_hash)) {
    // Password is correct, redirect to the profile page
    header('Location: profile.php');
    exit;
} else {
    // Password is incorrect, show an error message
    $error = 'Incorrect password';
}
?>