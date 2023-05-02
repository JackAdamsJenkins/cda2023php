<?php
/*
    Les boucles :
        - for (pour)
        - while (tant que)
        - do ... while (fais, tant que)
        - foreach (pour chaque)

    On va tester si le nombre 1 est supérieur au nombre 2
    Si ce n'est pas le cas, on ajout 1 (on fait un incrémentation) au nombre 1
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
    // $nb1++;

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



?>