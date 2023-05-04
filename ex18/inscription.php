<?php
/*
    Vous allez faire un système de connexion/inscription

    Vous allez stocker les données en base de données
    Vous allez stocker le mot de passe de manière sécurisée
    Vous allez enregistrer le pseudo de l'utilisateur sur les cookies si l'utilisateur est connecté
*/

if(isset($_POST['submit'])) {
    if(!empty($_POST['login']) && !empty($_POST['pass'])){
        // On fait l'inscription de l'utilisateur
        // Connexion à la base de données
        require_once('connect.php');
        // On prépare la requête
        $requete = "INSERT INTO users(login_user, pass_user) VALUES(:login, :pass)";

        // Préparation de la requête
        $data = $db->prepare($requete);

        $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        // Execute la requête avec les bonnes données
        $data->execute(array(
            'login' => $_POST['login'],
            'pass' => $hash
        ));
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="#" method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="pass" placeholder="Mot de passe">
        <input type="submit" value="S'inscrire !" name="submit">
    </form>
</body>
</html>