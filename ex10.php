<?php 
/*
Table de multiplication :
Créez un formulaire qui permet à l'utilisateur de saisir un nombre entier. 
Utilisez la méthode GET pour récupérer la valeur, 
puis créez un script PHP qui affiche la table de multiplication pour ce nombre en utilisant une boucle for.
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
</head>
<body>
    <form action="#" method="get">
        <input type="number" name="nombre" placeholder="Saisissez un nombre à multiplier">
        <input type="submit" value="Multiplier !">
    </form>
    <?php 
        if(!empty($_GET['nombre'])){
            $nb = $_GET['nombre'];
            // Faire la multiplication
            for($i = 1; $i <= 10; $i++){
                echo "$nb * $i = ". $nb * $i;
                echo "<br/>";
            }
        }
    ?>
</body>
</html>