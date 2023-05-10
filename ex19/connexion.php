<?php 
    if(isset($_GET['logout']) && !empty($_GET['logout'])){
        if($_GET['logout'] == true){
            // On fait la déconnexion
            setcookie('user', null, -1);
        }
    }



    $isUserConnected = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;
    if($isUserConnected != null){
        // L'utilisateur est connecté, on le redirige sur la page d'accueil
        header('Location: index.php');
    }

    $messageErreur = null;
    if(isset($_POST['submit'])){
        if(!empty($_POST['mail']) && !empty($_POST['pass'])){
            // On récupère le mot de passe de l'utilisateur qui correspond à l'email
            require_once('includes/connect.php');
            $data = $db->prepare('SELECT COUNT(id_user) as nbUser, pass_user FROM users WHERE mail_user= :mail');

            // On execute la requête
            $data->execute(array('mail' => $_POST['mail']));
            // On récupère TOUS les résultats
            $results = $data->fetch();

            if($results['nbUser'] == 1){
                // Il y a un utilisateur, on test la correspondance
                if(password_verify($_POST['pass'], $results['pass_user'])){
                    // Le mot de passe correspond, on connecte l'utilisateur
                    setcookie('user', $_POST['mail'], time() + 3600);
                    header('Location: index.php'); 
                } else {
                    $messageErreur = '<p class="error">Login et/ou mot de passe incorrect</p>';
                }
            } else {
                $messageErreur = '<p class="error">Login et/ou mot de passe incorrect</p>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnet Studio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once('header.php'); ?>
    <section>
        <h1>Connexion</h1>
        <hr>
        <?=$messageErreur ?>
        <form action="#" method="post">
            <input type="email" name="mail" placeholder="Mail">
            <input type="password" name="pass" placeholder="Mot de passe">


            <input type="submit" value="Connexion" name="submit">
        </form>
    </section>

    <?php include_once('footer.html'); ?>
</body>
</html>