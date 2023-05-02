<?php 
/*
Calcul de la somme des entiers :
Créez un formulaire qui permet à l'utilisateur de saisir un nombre entier. 
Utilisez la méthode GET pour récupérer la valeur, 
puis créez un script PHP qui calcule la somme de tous les entiers de 1 à ce nombre

ex : 10
Résultat : 55
*/
$message = null;
if(!empty($_GET['nombre'])){
    $nombre = intval($_GET['nombre']);
    $somme = 0;

    for($i = 1; $i <= $nombre; $i++){
        $somme += $i;
    }
    $message = "<p>La somme de $nombre est $somme</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la somme des entiers</title>
</head>
<body>
    <h1>Calcul de la somme des entiers</h1>
    <form action="#" method="get">
        <input type="number" name="nombre" placeholder="Nombre à calculer">
        <input type="submit" value="Calculer">
    </form>

    <?= $message; ?>
</body>
</html>