<?php 
/*
Inversion de chaîne :
Créez un formulaire qui permet à l'utilisateur de saisir une chaîne de caractères. 
Utilisez la méthode GET pour récupérer la valeur, 
puis créez un script PHP qui inverse la chaîne en utilisant une boucle while. 
Affichez la chaîne inversée.

Indice :
 - Pour afficher la taille d'une chaîne de caractère : strlen($chaine)
 - Pour afficher une lettre sur un chaîne de caractère : $maChaine[indice]

 - Hello
 - olleH
*/
$message = null;
if(!empty($_GET['chaine'])){
    // $maChaine = $_GET['chaine'];
    // $chaineReverse = "";
    // $length = strlen($maChaine) - 1;
    
    // while($length >= 0){
    //     $chaineReverse .= $maChaine[$length];
    //     $length--;
    // }

    // $message = "<p>Chaîne originale : $maChaine</p>";
    // $message .= "<p>Chaîne modifiée : $chaineReverse</p>";

}

// Autre possibilité sans while
if(!empty($_GET['chaine'])){
    $maChaine = $_GET['chaine'];
    $reverseChaine = strrev($maChaine);

    $message = "<p>Chaîne originale : $maChaine</p>";
    $message .= "<p>Chaîne modifiée : $reverseChaine</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversion de chaîne</title>
</head>
<body>
    <h1>Inversion de chaîne</h1>
    <form action="#" method="get">
        <input type="text" name="chaine" placeholder="Entrez une chaîne de caractère">
        <input type="submit" value="Inverser !">
    </form>
    <?= $message; ?>
</body>
</html>