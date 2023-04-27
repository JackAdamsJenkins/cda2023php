<?php 
    /*
        Ex2 + Choix de la TVA dans un select
    */
    $message = null;
    if(!empty($_GET['prixHT']) && !empty($_GET['TVA'])){
        $tva = $_GET['TVA'] / 100 + 1;
        $message = "<span style=\"color:green\">Montant HT = ".$_GET['prixHT']."€, le prix TTC = ".$_GET['prixHT'] * $tva ."€</span>";
    } else {
        $message = "<span style=\"color:red\">Veuillez entrer un montant</span>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Prix TTC</title>
</head>
<body>
    <h1>Calculer le prix TTC à partir du HT</h1>
    <form action="#" method="get">
        <input type="number" name="prixHT" placeholder="Entrez un prix HT">
        <select name="TVA">
            <option value="5.5">5.5%</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
        </select>
        <input type="submit" value="Calculer !">
    </form>

    <p>
    <?php 
        echo $message;
    ?>
    </p>
</body>
</html>