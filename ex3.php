<?php 
 // Créer un programme qui demande une valeur entière et qui affiche son double si cette donnée est
 // inférieure à un seuil donné
    // - Le seuil doit être défini dans un select
    // - La valeur doit être envoyée dans un input
    $message = null;

    // Si le formulaire a été envoyé
    if(!empty($_GET['valeur']) && !empty($_GET['seuil'])){
        $valeur = $_GET['valeur'];
        $seuil = $_GET['seuil'];
        if($valeur < $seuil){
            $message = "<p>Le double de la valeur $valeur est : ".$valeur * 2 ."</p>";
        } else {
            $message = "<p>La valeur est supérieur ou égale au seuil</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seuil et double</title>
</head>
<body>
    <h1>Retourner double si < seuil</h1>
    <form action="#" method="get">
        <input type="number" name="valeur" placeholder="Entrez une valeur">
        <select name="seuil">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
        </select>

        <input type="submit" value="Envoyer">
    </form>

    <?php echo $message; ?>
</body>
</html>