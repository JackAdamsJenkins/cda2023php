<!-- Ouverture de la balise PHP -->
<!-- Dans un fichier PHP on peut mixer HTML et PHP -->
<?php
    //phpinfo(); // Vérification de la version de PHP

    // Trois façons de commenter en PHP
    // Commentaire sur une ligne avec //
    # Commentaire sur une ligne avec #
    /*
        Commentaire sur
        plusieurs
        lignes
    */

    // Pour faire un commentaire : ctrl + :/

    // Fonction de base sur PHP
    // Fonction qui permet d'afficher du contenu sur votre page
    // La fonction echo est assez permissive sur son écriture
    // 6 façons de l'écrire
    echo "Mon contenu 1 <br>";
    echo 'Mon contenu 2 <br>';
    echo("Mon contenu 3 <br>");
    echo('Mon contenu 4 <br>');
    // echo `Mon contenu 5`;
    // echo(`Mon contenu 6`);

    /*
        Une variable, c'est un mot clé qui permet de stocker des données(informations)
        En php on ne type pas une variable.

        En php, pour écrire une variable, on doit utiliser le signe dollar ($) avant le nom de la variable
    */
    $numero = 18; // integer (entier)
    $numeroAVirgule = 12.5; // float (nombre à virgule)
    $maChaine = "Ma chaine de caractère";

    // Avec PHP on peut afficher le contenu des variables
    echo "Ma variable numéro contient : ".$numero."<br>";

    // Afficher le contenu des variables SANS concaténation avec les double quotes(guillemet) "
    echo "Afficher ma variable numéro à virgule : $numeroAVirgule <br>";
    // Attention il faut utiliser les double quotes impérativement
        // N'affichera pas le contenu de la variable
    echo 'Afficher ma variable numéro à virgule : $numeroAVirgule <br>';

    // Manipulation des variables
    $addition = $numero + $numeroAVirgule; // 30.5

    // Afficher le résultat
    echo $addition;
    echo "<br><br>";
    echo "La valeur de $numero + $numeroAVirgule = $addition <br>";

    // Une instruction se termine TOUJOURS par un point-virgule ;
    // Lorsque vous avez un message d'erreur, avant de de paniquer
    // Regarder la ligne au dessus, dans votre code.
    // Vérifiez que vous n'avez pas oublié le point-virgule

    /*
        L'indice d'un tableau commence toujours à 0
        0       1       2       3       (indice)
        12      15      14      13      (valeurs)

        Tableau associatif : notes
        Jules   Maxence     Seb     Coumba      (Clés)
        12      15          14      13          (Valeurs)
    */

    // Définir un tableau
    $monTableau[0] = 12;
    $monTableau[1] = 15;
    $monTableau[2] = 14;
    $monTableau[3] = 13;
    $monTableau[4] = "Une chaîne de caractères";

    echo $monTableau[2]; // Affichera : 14
    echo "<br>";
    
    $monTableau[2] = 18;
    echo $monTableau[2]; // Affichera : 18
    echo "<br>";

    // Autre façon de définir un tableau avec toutes les données
    $tab = array(12, 15, 14, 13);

    echo $tab[1]; // Affichera 15
    echo "<br>";

    // Définir un tableau associatif
    // $notes["Jules"] = 12;
    // $notes["Maxence"] = 15;
    // $notes["Seb"] = 14;
    // $notes["Coumba"] = 13;

    // echo $notes["Seb"]; // Affichera 14
    // echo "<br>";

    $notes = array(
        "Jules" => 12,
        "Maxence" => 15,
        "Seb" => 14,
        "Coumba" => 13
    );

    // Variable A = 12
    // Variable B = 15
    // Faites l'échange des deux valeurs sur les variables
    // Le but du jeu, c'est qu'à la fin :
    // Variable A = 15
    // Variable B = 12
    $variableA = 12;
    $variableB = 15;
    echo "Valeurs avant permutation : A = $variableA, B = $variableB";
    echo "<br>";


    $temp = $variableA;
    $variableA = $variableB;
    $variableB = $temp;
    echo "Valeurs après permutation : A = $variableA, B = $variableB";
    echo "<br>";

    // Permutation de valeurs sur les variables
    [$variableA, $variableB] = [$variableB, $variableA];
    echo "Valeurs après nouvelle permutation : A = $variableA, B = $variableB";
    echo "<br>";

    $notes = array(
        "Jules" => 12,
        "Maxence" => 15,
        "Seb" => 14,
        "Coumba" => 13
    );

    // [$jules, $maxence, $seb, $coumba] = $notes;
    // echo $jules; // Affichera 12
    // echo "<br>";

    // Afficher le contenu de "Seb"
    $cle = "Seb";
    echo $notes[$cle]; // Affichera 14
    echo "<br>";

    // Si on possède un tableau non associatif (avec des index)
    // On peut utiliser $i avec une valeur qui change
    // $i = 0;
    // $i = 1;
    // $i = 2;
    // $monTableau[$i]

    /*
        Les opérateurs mathématiques :
        +
        -
        /
        *
        % (modulo = reste de la division)
        ^ (puissance) ex : 8^4
        () pour regrouper des calculs
    */
    $resultat = (10 + 5) / 4 + (3 * 2) + (5 - 4);
    echo "Résultat : $resultat";
    echo "<br>";
    // Fait l'addition
    // $resultat = $resultat + "Toto"; // Ne fonctionne pas, on additionne pas deux types différents
    
    // Mauvaise pratique
    $resultat2 = "18" + 2; // Pas de typage, du coup ça fonctionne
    echo $resultat2;
    echo "<br>";

    /*
        Les conditions
            - if else (si, sinon)
            - if elseif else (si, sinon si, sinon)
            - les switch (selon)
            - les ternaires : conditions condensées

        Les ternaires :
            Un if/else sur une seule ligne, qui a pour objectif d'attribuer une valeur à une variable.
            Une ternaire se fait directement sur une variable

        En JS :
            elseif n'existe PAS
            else if
        
        En PHP :
            elseif existe
            elseif()

        Vous n'êtes pas obligé de faire seulement UN test dans vos conditions.
        Vous pouvez faire autant de tests que nécessaire.

        Les oprateurs logiques :
        Symbole         Signification
        ==              Egal à (on n'oublie pas le deuxième =)
        ===             Strictement égal (on compare l'égalité ET le type)
        !=              Différent de (n'est pas égal à )
        !==             Strictement différent de (n'est pas égale en terme de valeur et de type)
        >               Supérieur à
        >=              Supérieur ou égal
        <               Inférieur
        <=              Inférieur ou égal
        
        Mot clé         Equivalent      Signification
        AND             &&              ET
        OR              ||              OU

        Dans nos conditions on a le droit d'utiliser les parenthèses

        if( ($nb1 > $nb2 AND $nb1 > 8) || ($nb1 < 4 || $nb2 === 18) ){
            // Faire quelque chose
        }

        if( ($nb1 > $nb2 && $nb1 > 8) OR ($nb1 < 4 OR $nb2 === 18) ){
            // Faire quelque chose
        }

        Ecrire des conditions :
            if(condition){
                // instructions
            }

        ----------------------------
            if(condition){
                // instructions
            } else {
                // instructions
            }
        
        ----------------------------
            if(condition){
                // instructions
            } elseif(condition){
                // instructions
            } elseif(condition){
                // instructions
            } else {
                // instructions
            }
        
    */
    echo "<br>";
    echo "<br>";

$nb1 = 15;
$nb2 = 12;

if($nb1 > $nb2 AND $nb1 > 8){ // condition
    // instructions
    echo "Le nombre 1 est supérieur au nombre 2. Il est également supérieur à 8";
    // Autant de ligne d'instructions que vous le souhaitez
    echo "<br>";
} elseif($nb1 === $nb2){
    echo "Le nombre 1 est strictement égal à nombre 2.";
    echo "<br>";
} else {
    echo "Le nombre 1 est inférieur au nombre 2.";
    echo "<br>";
}

// les switch
switch($nb1) {
    case 8:
        // instructions
        // Autant qu'on le souhaite
        echo "Le nombre 1 vaut 8 <br/>";
    break;
    case 10:
        echo "Le nombre 1 vaut 10 <br/>";
    break;

    case 12:
        echo "Le nombre 1 vaut 12 <br/>";
    break;

    default:
        echo "Le nombre 1 n'est pas compris entre 8 et 12";
}

// Ternaires
$nb3 = 4;
$nb4 = 6;

if($nb3 < $nb4){
    $resultat = $nb3 + $nb4;
} else {
    $resultat = 0;
}

// Ternaire :
// variable = (condition) ? valeur si vrai : valeur si faux
$resultat = ($nb3 > $nb4) ? $nb3 + $nb4 : 0; // Affichera 0
$resultat = ($nb3 < $nb4) ? "Oui" : "Non";

echo $resultat; // Affichera "Oui"
echo "<br>";

/*
    Pour manipuler/récupérer des données envoyées par l'utilisateur, deux possibilités :
        - Méthode GET
        - Méthode POST
    
    Les données envoyées par la méthode GET sont visibles dans l'URL
    Les données envoyées par la méthode POST sont visibles lorsque vous ouvrez l'outil de dev du navigateur

    Du côté PHP pour récupérer les données, deux possibilités :
*/
$_GET["nomDeLaDonnee"]; // Méthode GET
$_POST["nomDeLaDonnee"]; // Méthode POST

// Permet de tester si une variable existe
// isset($maVariable)

// Permet de tester si une variable est vide
// empty($maVariable)

// Tester si la variable n'est PAS vide
// !empty($maVariable)


?>
<!-- Fermeture de la balise PHP -->

<!-- On à le droit d'ouvrir et de fermer AUTANT de balises PHP qu'on le souhaite -->
<?php 

?>