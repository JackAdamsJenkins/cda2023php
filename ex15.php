<?php 
/*
    Vous allez écrire deux pages :
        - Une contenant un formulaire de connexion
            - Vous allez vérifier une paire identifiant/mdp (stockée sur des variables)
            - Si les identifiants sont corrects : Vous allez rester sur la même page, mais vous allez effacer le formulaire
            - A la place du formulaire vous allez avoir : "Bonjour + identifiant" et un lien vers la deuxième page
        - La deuxième page devra afficher :
            - Bonjour + identifiant
*/
$login = "Toto";
$mdp = "tata";

// On test si l'utilisateur à bien renseigner toto et tata
// Si ce n'est pas le cas, on indique que les données de connexion ne sont pas bonnes
// Si c'est le cas, on fait disparaitre le formulaire
// On affiche "Bonjour + identifiant"
// On affiche également : un lien qui mène vers la deuxième page

// Sur la deuxième page :
// On affiche "Bonjour + identifiant"
// On doit afficher le message QUE si l'utilisateur est connecté

// Infos : 
// - Utilisez les variables de session pour cet exercice
// - Ensuite, recommencez et utilisez les cookies
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = "Toto";
        if($a == "Toto"){
    ?>
    <h1>Mon contenu</h1>

    <?php 
        }
    ?>
    
</body>
</html>