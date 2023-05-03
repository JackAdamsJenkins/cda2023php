<?php 
/*
    La gestion des mots de passe est un problème courrant
    Il faut savoir stocker correctement les mots de passe
    Pour cela, une bonne pratique consiste à effectuer un hashage de mot de passe

    Il existe une fonction sécurisée qui permet le hashage de mot de passe

    la fonction password_hash()
    - La fonction password_hash() fait un hashage fort et IRREVERSIBLE
*/
$motDePasse = "@123456";

$hash = password_hash($motDePasse, PASSWORD_DEFAULT);

// echo $hash;
/*
    On ne peut pas effectuer l'opération inverse avec un mot de passe hashé
    Cependant, il existe une fonctionnalité pour vérifier si le mot de passe entré par l'utilisateur
    est le même que celui enregistré dans votre base de données : password_verify()

    La fonction password_verify() retournera true : si le hash correspond ou false si le hash ne correspond pas

    Si retourne true : le mot de passe est bon
    Si retourne false : Le mot de passe n'est pas
*/
if(password_verify('@123456', $hash)){
    echo "Le mot de passe est valide !";
} else {
    echo "Le mot de passe n'est PAS valide !";
}
?>