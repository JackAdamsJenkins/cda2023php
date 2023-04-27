<!-- Des commentaires HTML en dehors du PHP -->
<?php 
    // Trois façons de commenter
    // Commenter sur une ligne
    # Commenter sur une ligne
    /*
        Commenter sur 
        plusieurs
        lignes
    */

    // Pour rappel, pour commenter une ligne facilement : ctrl + :/

    // Fonction de base sur PHP
    // Une fonction qui permet d'écrire du contenu sur une page
    // Contenu textuel et/ou HTML
    echo("Mon contenu");
    echo('Mon contenu');
    echo "Mon contenu";
    echo 'Mon contenu';

    /*
        les variables permettent d'enregistrer des données
        En php on ne type pas les variables

        Pour écrire une variable en PHP, on utilise le signe dollar devant le nom de la variable
    */
    $variable = "Ma variable"; // Chaine de caractères
    $number = 10; // Integer (entier)
    $float = 12.5; // Float (nombre à virgule)

    // Avec PHP on peut afficher le contenu d'une variable
    echo($variable);
    echo "<br> Le contenu de ma variable $variable</br>";
    echo "<br> Ma variable contient : ".$variable;
    echo "<br> La variable ".$variable." se trouve dans mon contenu<br>";

    // On peut manipuler le contenu des variables
    $number = 10 + 2;
    $number = $number + 2; // 14

    echo ($number); // Affichera 14

    /*
        Un instruction se termine toujours par un point-virgule ;
    */

    //  Les tableaux
    /*
        L'indice du tableau commence toujours à 0
        0       1       2       (indice)
        12      18      20      (valeur)
    */
    $monTableau[0] = 12;
    $monTableau[1] = 18;
    $monTableau[2] = 20;

    $monTableau = array(12, 18, 20);

    // Les tableaux associatifs (pair : clé/valeur)
    /*
        Messaoud       Nicolas      Riad       (clé)
        12             18           20         (valeur)
    */
    $tabKey["Messaoud"] = 12;
    $tabKey["Nicolas"] = 18;
    $tabKey["Riad"] = 20;

    // 2e façon de définir le tableau associatif
    $tabKey = array(
        "Messaoud" => 12,
        "Nicolas" => 18,
        "Riad" => 20
    );

    // Afficher des données issues d'un tableau
    echo $tabKey["Messaoud"]; // Affichera 12

    echo "<br/><br/>";

    // On peut voir tout ce que contient le tableau
    var_dump($tabKey); // Permet de voir toutes les pairs clé/valeurs

    // On peut utiliser une variable en tant que clé
    // Dans ce cas, c'est le contenu de la variable qui sera la clé
    $cle = "Toto";
    $tabKey[$cle] = "12121";
    $tabKey["Toto"] = "12121"; // Même chose que la ligne du dessus

    /*
    Les opérateurs mathématiques :
        +
        -
        /
        *
        % (modulo = reste d'une division)
        ^ (puissance)
        () regrouper des calcul
    */
    $resultat = (10 + 5) / 4 + (3 * 2) + (5 - 4);
    echo $resultat;

    /*
    Les conditions en PHP :
        - if else (si, sinon)
        - if elseif else (si, sinon si, sinon)
        - les switch (selon)
        - les ternaires : conditions condensées

        Les opérateurs logiques pour pouvoir faires les tests :
        Symboles        Signification
        ==              Tester l'égalité
        ===             Strictement égal à (contenu ET type)
        !=              Tester la différence
        !==             Strictement différent de (contenu ET type)
        >               Supérieur a
        >=              Supérieur ou égal à
        <               Inférieur à
        <=              Inférieur ou égal à

        Attention, l'ordre est important
        Si on veut tester si c'est supérieur ou égal à, on ne DOIT PAS faire :
        => : Ceci ne marchera pas
        >= : Ceci marchera

        Mot clé         Equivalent          Signification
        AND             &&                  ET
        OR              ||                  OU

        Dans les conditions, on peut utiliser les parenthèses
        On peut effectuer AUTANT DE TESTS qu'on le souhaite dans nos conditions

        Pour écrire une condition :

        if(condition){
            // instruction
        }
    */
    $nb1 = 15;
    $nb2 = 12;

    if($nb1 > $nb2 AND $nb1 > 8){
        echo "Nb1 est supérieur à NB2";
        // On peut écrire autant d'instructions qu'on le veut
    } elseif($nb1 === $nb1){
        echo "NB1 est strictement égal à Nb2";
        // On peut écrire autant d'instructions qu'on le veut
    } else {
        echo "Le nombre 1 est inférieur au nombre 2";
        // On peut écrire autant d'instructions qu'on le veut
    }

    // Les switch
    switch($nb1){
        case 8:
            // Les instructions
            echo "Le nombre 1 vaut 8";
        break;
        
        case 10:
            echo "Le nombre 1 vaut 10";
        break;

        default:
            echo "Le nombre 1 ne vaut ni 8, ni 10";
    }

    // Ternaires
    // Des conditions if/else condensées
    // Objectif : attribuer une valeur à une variable
    // variable = (condition) ? valeur si vrai : valeur si faux
    $nb3 = 4;
    $nb4 = 6;

    if($nb3 < $nb4){
        $resultat = $nb3 + $nb4;
    } else {
        $resultat = 0;
    }

    // Version ternaire
    $resultat = ($nb3 < $nb4) ? $nb3 + $nb4 : 0; // équivalent du if else au dessus

    /*
        Avec PHP on peut manipuler des données qui viennent d'un formulaire
        Pour cela deux méthodes possibles
        La méthode GET qui envoi les données dans l'url
        La méthode POST qui envoi les données en caché

        Pour récupérer les données :
    */
    $_GET["NomDeLaDonnee"]; // Récupérer les données get
    $_POST["NomDeLaDonnee"]; // Récupérer les données post

    // Permet de tester si une variable existe
    isset($nomDeLaVariable);

    // Permet de tester si une variable est vide
    empty($nomDeLaVariable);

    // Permet de tester si la variable N'EST PAS vide
    !empty($nomDeLaVariable);
?>
<form action="#" method="get">
    <input type="text" name="NomDeLaDonnee">
    <input type="submit" value="Envoyer">
</form>