<?php 
/*
Compter les voyelles et les consonnes :
Créez un formulaire qui permet à l'utilisateur de saisir une chaîne de caractères. 
Utilisez la méthode GET pour récupérer la valeur, 
puis créez un script PHP qui compte le nombre de voyelles et de consonnes dans la chaîne en utilisant une boucle while.
Affichez le résultat.

Indice :
    - Pour mettre une chaîne de caractères en minuscule : strtolower($chaîne)
    - Afficher la longueur d'une chaîne : strlen($chaîne)
    - Savoir si un caractère/une chaîne contient que des lettres : ctype_alpha($element)
    - Les voyelles : a, e, i, o, u, y
*/
$message = null;
if(!empty($_GET['chaine'])){
    $string = $_GET['chaine'];
    $length = strlen($string);
    $voyelles = 0;
    $consonnes = 0;
    $i = 0;

    while($i < $length){
        // Passer la chaîne de caractères en minuscule
        $char = strtolower($string);

        if(ctype_alpha($char[$i])){
            if($char[$i] === 'a' ||
                $char[$i] === 'e' ||
                $char[$i] === 'i' ||
                $char[$i] === 'o' ||
                $char[$i] === 'u' ||
                $char[$i] === 'y') {
                    $voyelles++;
                } else {
                    $consonnes++;
                }
        }
        $i++;
    }
    $message = "<p>Nombre de voyelles : $voyelles</p>";
    $message .= "<p>Nombre de consonnes : $consonnes</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compter les voyelles et les consonnes</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="chaine" placeholder="Chaîne de caractère">
        <input type="submit" value="Compter">
    </form>
    <?=$message; ?>
</body>
</html>