<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher données de session</title>
</head>
<body>
    <h1>Bonjour <?=$_SESSION['login']; ?></h1>
    <a href="ex15.php">Retour</a>
</body>
</html>