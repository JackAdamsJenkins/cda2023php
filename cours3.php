<?php 
session_start();
/*
    Les variables superglobales

    Les variables superglobales sont des tableaux spéciaux en PHP.
    Elles sont disponibles globalement (sur tout votre script).

    Quelques variables superglobales :

    $_GET : Contient les données envoyées via la méthode GET
    Accessibles par : $_GET['nomDeLaDonnee']

    $_POST : Contient les données via la méthode POST
    Accessibles par : $_POST['nomDeLaDonnee']

    $_COOKIE : Contient les données des cookies envoyées par le navigateur.
    Accesibles par : $_COOKIE['nomDeLaDonnee']

    $_FILES : Contient les informations sur les fichiers uploadés via un formulaire et la méthode POST
    pour l'upload, on doit ajouter un nouvel attribut sur les formulaires : enctype="multipart/form-data"
    Accessibles par : $_FILES['nomDuFichier']

    $_SERVER : Contient des données sur l'environnement de développement

    $_SESSION : Contient les données des sessions de l'utilisateur
    Accessibles par $_SESSION['nomDeLaDonnee']

    $_REQUEST : Contient les données combinées de $_GET, $_POST, $_COOKIE
    On ne doit pas s'en servir, il vaut mieux utiliser $_GET, $_POST et $_COOKIE

    $_ENV : Contient les variables d'environnement du serveur
    Accessibles par $_ENV['NomDeLaDonnee'];
    -- Utile pour stocker par exemple un token (jeton d'authentification)
*/

/*
    Les constantes

    Sont des données stockées qui ne changent pas.

    Pour définir une constante :
     - define('NOMDELACONSTANTE', 'Valeur de la constante')

    Pour utiliser une constante :
    NOMDELACONSTANTE

    Par convention, les constantes sont écrites en MAJUSCULE
    Les constantes n'ont pas de $ devant leur nom
*/
define('PI', 3.14159);

echo "La valeur de PI : ". PI;
echo "<br/>";
/*
    Les constantes peuvent être utiles pour définir les informations de connexion à une Base de données
*/

/*
    PHP possède des constantes qui sont déjà prédéfinies
    PHP_VERSION => Connaître la version de PHP
    DIRECTORY_SEPARATOR => Le caractère séparateur du répertoire du système d'exploitation

    La portée d'une constante est globale. 
    On peut y accéder sur tout le script.
    On peut utiliser les constantes dans les fonctions
*/

/*
    Les tableaux multidimensionnels
    Les tableaux multidimensionnels en PHP sont des tableaux qui contiennent d'autres tableaux comme éléments.
    Ils sont utiles pour stocker et organiser des données complexes.

    Création d'un tableau multidimensionnel se fait en imbriquant d'autres tableaux :
*/
$multiArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
/*
    Accès aux éléments : Pour accéder aux éléments du tableau multidimensionnel vous devez spécifier les indices de chaque dimension.
    Par exemple, pour accéder à l'élément 5 dans $multiArray[1][1]

    Afficher 9 : 
    $multiArray[2][2]

    Pour parcourir un tableau multidimensionnel : vous pouvez utiliser les boucles imbriquées
*/
foreach($multiArray as $tab){
    foreach($tab as $el){
        echo "Mon élément du tableau : $el <br/>";
    }
}

/*
    Tableaux associatifs multidimensionnels : les tableaux associatifs peuvent également être multidimensionnel
    les clés sont des chaînes de caractères
*/
$assocArray = [
    'fruits' => ['Pomme', 'Banane', 'Fraise'],
    'Legumes' => ['Carrotes', 'Brocoli', 'Poivrons']
];
/*
    Accéder à un élément du tableau multidimensionnel :
    $assocArray[clé][indice]
*/
echo "Afficher brocoli : ". $assocArray["Legumes"][1];
echo "<br/>";

/*
    Stocker des données avec PHP, 4 possibilités :
        - Stocker dans une base de données
        - Stocker dans un fichier sur votre serveur (fichier txt)
        - Stocker sur les cookies
        - Stocker sur les sessions
*/

/*
    Les cookies permettent d'enregistrer des données pendant X temps
    X = à vous de choisir la durée pendant laquelle vous souhaitez stocker les données
    -- Les cookies sont stockés sur la machine de l'utilisateur
    Ils ne sont PAS enregistrés sur le serveur web
    Ils ne sont PAS enregistrés sur votre site

    Les cookies sont UNIQUEMENT déposés sur la machine de l'utilisateur
    Les cookies sont accessibles uniquement par le site web qui les a déposé

    Ce qui veut dire que si un autre site essaie d'accéder aux cookies déposées sur votre machine, votre machine va lui refuser l'accès.
        - Le site A dépose un cookie
        - Le site B essaie de lire le cookie du site A

    Le navigateur va lui dire f*ck, tu n'es pas mon propriétaire

    Définir un cookie :
        - utiliser la fonction setcookie
        - Donner le premier paramètre (clé)
        - Donner le second paramètre (valeur)
        - optionnel : donner un troisième paramètre (la durée de vie du cookie)
*/
//        clé        valeur       expire dans une heure
setcookie('prenom', "Jean-Louis", time()+3600);
setcookie("nom", "Errante", time()+3600);

// Afficher un cookie
echo "Ton prénom c'est : ".$_COOKIE['prenom'];
echo "<br/>";
echo "Ton nom c'est : ".$_COOKIE['nom'];
echo "<br/>";

/*
    Les variables de sessions :
        - Stocker les données sur le serveur web de manière temporaire
        - S'effacent automatiquement à la fermeture du navigateur
        - Son persistantes entre les différentes pages de votre
        - Un autre site ne peut PAS y avoir accès

    Pour utiliser les sessions, vous devez ABSOLUEMENT déclarer une fois par page :
    session_start()

    Cette fonction permet de dire à votre programme que vous allez utiliser les sessions.
    ATTENTION : la déclaration du début dession doit se faire AVANT TOUT CODE HTML

    La déclaration des variables de sessions et leur utilisation se fait comme un tableau associatif classique
*/
$_SESSION["age"] = 36;

echo "Ton âge : ".$_SESSION["age"];
?>
