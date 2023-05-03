<?php
/*
    Vous allez écrire deux pages :
        - Une contenant un formulaire de connexion
            - Vous allez vérifier une paire identifiant/mdp (stockée sur des variables)
            - Si les identifiants sont corrects : Vous allez rester sur la même page, mais vous allez effacer le formulaire
            - A la place du formulaire vous allez avoir : "Bonjour + identifiant" et un lien vers la deuxième page
        - La deuxième page devra afficher :
            - Bonjour + identifiant
*/
// On test si l'utilisateur à bien renseigner toto et tata
// Si ce n'est pas le cas, on indique que les données de connexion ne sont pas bonnes
// Si c'est le cas, on fait disparaitre le formulaire
// On affiche "Bonjour + identifiant"
// On affiche également : un lien qui mène vers la deuxième page

// Sur la deuxième page :
// On affiche "Bonjour + identifiant"
// On doit afficher le message QUE si l'utilisateur est connecté

// Infos : 
// - Utilisez les variables de session pour cet exercice
// - Ensuite, recommencez et utilisez les cookies

$login = "Toto";
$mdp = "tata";
$message = null;
$isLoggedIn = false;
// On test si login et mdp sont renseignés
if(!empty($_POST['login']) && !empty($_POST['password'])){
    // On vérifie si login et mdp correspondent
    if($_POST['login'] == $login && $_POST['password'] == $mdp){
        $isLoggedIn = true;
        setcookie('login', $_POST['login'], time()+3600);
    } else {
        $message = '<p style="color:red">Vous devez renseigner un login et un mdp valide</p>';
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
    <?php 
    if($isLoggedIn == false){
    ?>
    <form action="#" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion">
    </form>
    <?=$message; ?>
    <?php 
    } // /!$isLoggedIn

    if($isLoggedIn == true){ ?>
    <h1>Bonjour <?=$_COOKIE['login']; ?></h1>
    <a href="ex15-2-cookie.php">Accéder à la deuxième page</a>
    <?php 
    } // /$isLoggedIn
    ?>
</body>
</html>