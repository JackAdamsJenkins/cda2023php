<?php 
/*
    L'inclusion de fichier

    En php, il y a la possibilité d'ajouter un fichier à un autre.
    Pour cela, 4 possibilités :
        - include
        - require
        - include_once
        - require_once

    Include et Require peuvent inclure un nombre illimité de fois un fichier.
    En gros : vous pouvez inclure plusieurs fois le même fichier

    Le principe de _once étant que vous pouvez inclure QU'UNE SEULE FOIS un certain fichier

    En gros : si vous essayez d'inclure deux fois le même fichier, il ne sera inclu qu'une fois.
    Il n'y aura pas de message d'erreur

    En gros, _once agit comme un if.
    Si le fichier est DEJA inclu, il ne l'inclu pas à nouveau

    include et require c'est du code PHP, par conséquent, vous devez l'utiliser dans des balises PHP
    MAIS vous pouvez également l'utiliser n'importe ou sur votre page

    Différence entre include et require :
        - include ne produira pas d'erreur si le fichier est introuvable
        - require produira une erreur s'il y a un problème avec le fichier
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusion de fichier</title>
</head>
<body>
    <?php 
        require_once "includes/header.html";

    ?>
    <main>
        <h1>Mon contenu principal</h1>
    </main>
    <?php 
        require_once "includes/footer.html";
    ?>
</body>
</html>