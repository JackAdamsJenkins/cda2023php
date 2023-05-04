<?php 
// - Une page profil, contenant :
// - Les données de login (mail ou pseudo)
// - un lien vers la page "modification de profil"


 // Est-ce que l'utilisateur est connecté ?
 if(isset($_COOKIE['isLoggedIn']) && $_COOKIE['isLoggedIn']){
    // Affiche la page
 } else {
    // On retourne sur la page de connexion
    header('Location: connexion.php');
 }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <?php require_once('header.php'); ?>
    <?php require_once('edit.php'); ?>
    <?php 
        // Afficher le profil si on n'est pas en mode édition
        if(!isset($_GET['edit'])):
    ?>

    <a href="profil.php?edit=true">Modifier le profil</a>
    <?php 
        $prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
        $nom = isset($_COOKIE['nom']) ? $_COOKIE['nom'] : null;

        if($prenom != null || $nom != null){
            echo "<h1>Bonjour $prenom $nom</h1>";
        } else {
            echo "<h1>Bonjour !</h1>";
        }
    ?>


    <?php 
        $login = isset($_COOKIE['login']) ? $_COOKIE['login'] : null;

        if($login != null){
            echo "<p>Ton identifiant : $login</p>";
        }
    ?>


    <?php 
        $photo = isset($_COOKIE['image']) ? $_COOKIE['image'] : null;

        if($photo){
            echo '<img src="../uploads/'.$photo.'">';
        }
    ?>

    <?php endif; ?>
    
</body>
</html>