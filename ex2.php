<?php 
    $message = null;
    if(!empty($_GET['prixHT'])){
        $message = "<span style=\"color:green\">Montant HT = ".$_GET['prixHT']."€, le prix TTC = ".$_GET['prixHT'] * 1.2 ."€</span>";
    } else {
        $message = "<span style=\"color:red\">Veuillez entrer un montant</span>";
    }
?>
<!DOCTYPE html>
<html lang="ft">
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
        <input type="submit" value="Calculer !">
    </form>

    <p>
    <?php 
        echo $message;
    ?>
    </p>
</body>
</html>