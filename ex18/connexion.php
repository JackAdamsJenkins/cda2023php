<?php 

$message = null;
 // Test si le formulaire a été envoyé
 if(isset($_POST['submit'])){
    // Est-ce que les champs sont remplis ?
    if(!empty($_POST['login']) && !empty($_POST['pass'])){
        // Les champs sont remplis :
        // On doit appeler la connexion à la BDD
        require_once('connect.php');

        // On prépare notre requête
        $requete = $db->prepare('SELECT count(login_user) as nbUser, login_user, pass_user FROM users WHERE login_user = :login');

        // Exécuter la requête préparée
        $requete->execute(array(
            'login' => $_POST['login'],
        ));

        // Réupérer le résultat (on doit avoir UN résultat)
        $data = $requete->fetch();

        // On obtient un tableau associatif
        /*
            data['nbUser']
            data['login_user']
            data['pass_user']
        */

        // On test si l'utilisateur existe
        if($data['nbUser'] > 0){
            // L'utilisateur existe
            // On test si le mot de passe correspond
            if(password_verify($_POST['pass'], $data['pass_user'])){
                // On connecte l'utilisateur
                $message = "L'utilisateur existe et le mot de passe est le bon";
            } else {
                $message =  "Login ou mot de passe incorrect";
            }
        } else {
            $message =  "Login ou mot de passe incorrect";
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
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <p><?=$message ?></p>
    <form action="#" method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="pass" placeholder="Mot de passe">
        <input type="submit" value="Connexion !" name="submit">
    </form>
</body>
</html>