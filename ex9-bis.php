<?php 
/*
    Vous allez créer un tableau (associatif) en PHP
    Dans un formulaire, vous allez demander de renseigner une valeur (number ou string)
    Vous allez ajouter cette valeur à votre tableau en PHP
    Ensuite, vous allez afficher sur la page toutes les données du tableau
*/
$tab = array(
    "cle1" => 12, 
    "cle2" => "Toto", 
    "cle3" => "ma valeur"
);
$isDataOK = false;

if(!empty($_GET['data'])){
    $tab["cle4"] = $_GET['data'];
    $isDataOK = true;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcourir tableau indexé</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="data" placeholder="Entrez une donnée">
        <input type="submit" value="Envoyer">
    </form>

    <?php 
        if($isDataOK){
            foreach($tab as $key => $value){
                echo "Donnée à la clé $key, valeur : $value <br/>";
            }
        }
    
    ?>
    
</body>
</html>