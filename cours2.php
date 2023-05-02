<?php
/*
    Les boucles :
        - for (pour)
        - while (tant que)
        - do ... while (fais, tant que)
        - foreach (pour chaque)

    On va tester si le nombre 1 est supérieur au nombre 2
    Si ce n'est pas le cas, on ajoute 1 (on fait une incrémentation) au nombre 1
    Et on test à nouveau

    La boucle for :
for(variable de compteur ; condition a tester ; modification du compteur){
    // Instructions
}
*/
$nombre2 = 12;
for($nombre1 = 8; $nombre1 < $nombre2; $nombre1++){
    // Faire quelque chose
    echo "La valeur de nombre 1 : $nombre1 <br/>";
}
echo "<br/>";
// Ecrire une boucle for qui affiche tous les nombres pairs de 0 à 100 (inclu)
for($i = 0; $i <= 100; $i += 2){
    // echo "Nombre pair : $i <br/>";
}

// Ecrire une boucle for qui affiche tous les nombres impairs de 0 à 100 (inclu)
for($i = 1; $i <= 100; $i += 2){
    // echo "Nombre impair : $i <br/>";
}

// Solution un peu plus compliquée
for($i = 0; $i <= 100; $i++){
    if($i%2 == 0){
        // echo "Nombre pair : $i <br/>";
    }
}

/*
    While :
        - Fonctionne comme un if
        A la différence qu'elle s'executera autant de fois que nécessaire
        afin de remplir la condition

    IMPORTANT : Bien faire attention à ce que la condition soit remplie à un moment
    Sinon, on tombe dans une boucle infinie = plantage du serveur

// Amorce (variable qui va servir à faire la condition)
$nb1 = 8;

while(condition){
    // instructions

    // Modification de l'amorce (de la variable qui se trouve dans la condition)
}

*/
$nb1 = 8;
$nb2 = 12;

while($nb1 <= $nb2){
    echo "Le nombre 1 ($nb1) est inférieur au nombre 2 ($nb2) <br/>";

    // Incrémentation de la variable nb1
    $nb1++;

    // équivalent à la ligne 65
    // $nb1 = $nb1 + 1;

    // équivalent à la ligne 65 et 68
    $nb1 +=  1;
}

$mot = "Toto";
$i = 0;

while($mot != "Tata"){
    echo "Le mot est différent de Tata <br/>";

    if($i == 11){
        $mot = "Tata";
        echo "Le mot est maintenant Tata <br/>";
    }
    $i++;
}

// Afficher tous les nombres pairs, de 0 à 100 (inclu) avec la boucle While
$i = 0; // Amorce
while($i <= 100){ // Condition
    // echo "Nombre pair : $i <br/>";
    $i += 2; // Modification de l'amorce
}

/*
    La boucle While à besoin :
        - Avant son utilisation, d'initialiser un compteur ou une variable de condition (amorce)
        - Dans le while(), on doit écrire la ou LES conditions qu'on souhaite voir remplies
        - à l'intérieur de la condition { }, on doit écrire notre incrémentation OU modifier la variable de contion afin qu'elle arrive à terme (condition terminée)


    $compteur = 0;
    while(condition || autreCondition){
        incrémentation, décrémentation, modification de la variable de condition
    }
*/

/*
La boucle do...while s'exécute au moins une fois, quoi qu'il arrive

do {
    // instructions
} while(condition);
*/

// Afficher les nombres pairs
$i = 101;
do {
    // echo "Nombre pair $i <br/>";
    $i += 2; 
} while($i <= 100);

/*
    La boucle foreach (pour chaque) est essentielle pour parcourir un tableau
    Grâce à cette boucle, il est possible d'obtenir soit la valeur, soit la clé (et la valeur également)

    Tableau indexé :
    0       1       2       3       (indice)
    12      15      14      13      (valeur)

    Tableau associatif
    Jean    Paul    Jane    Julie   (clé)
    12      15      14      13      (valeur)
*/
// $notes = array(12, 15, 14, 13);
// var_dump($notes); // Voir toutes les données d'un tableau

/*
    foreach ren en premier paramètre un tableau
    en deuxième paramètre, on nomme ce que contient le tableau

    la tableau peut prendre un troisième paramètre
    on peut lui dire de récupérer la clé et la valeur
*/
// foreach($notes as $note){
//     echo "La note : $note <br/>";
// }
$notes = array(
    "Jean" => 12,
    "Paul" => 15,
    "Jane" => 14,
    "Julie" => 13
);
// var_dump($notes);
// foreach($notes as $cle => $valeur){
//     echo "La note de $cle est $valeur/20 <br/>";
// }

foreach($notes as $key => $value){
    echo "La note de $key est $value/20 <br/>";
}

// Même chose que la ligne 160, mais vaut mieux éviter, c'est une mauvaise pratique, on ne sait pas à quoi correspondent $a et $b
// foreach($notes as $a => $b){
//     echo "La note de $a est $b/20 <br/>";
// }

/*
    Ce qui est important dans le foreach c'est :
        - L'ordre et la quantité de valeurs

        (tableau as clé => valeur)
*/

?>