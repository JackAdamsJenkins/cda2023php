<?php 
// Vous allez avoir :
//  - Une page d'inscription, contenant :
//     - Un formulaire avec login, mot de passe
//     - Le mot de passe doit être hashé
//     - Les données doivent être stockées sur les cookies

$message = null;
// Vérification si le formulaire a été envoyé
if(isset($_POST['submit'])){
  // Vérifcation si les champs ont été remplis
  if(!empty($_POST['login']) && !empty($_POST['pass'])){
    // On hash le mot de passe
    $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    // On fait l'enregistrement sur les cookies
    setcookie("login", $_POST['login'], time()+3600); // enregistrement pour une heure
    setcookie('pass', $hash, time()+3600);

    $message = '<p style="color:green">Inscription validée</p>';
    $message .= '<p><a href="connexion.php"?>Connexion ?</a></p>';

  } else {
    $message = '<p style="color:red">Vous devez renseigner les deux champs</p>';
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
    <?php 
        include_once('header.php');
    ?>

    <h1>Inscription</h1>
    <?=$message ?>
    <form action="#" method="post">
        <input type="text" name="login" placeholder="Nom d'utilisateur">
        <input type="password" name="pass" placeholder="Mot de passe">
        <input type="submit" value="Inscription" name="submit">
    </form>
</body>
</html>