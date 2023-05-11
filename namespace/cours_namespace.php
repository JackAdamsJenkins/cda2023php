<?php 
/*
    Les espaces de nom (namespace) :
        - Ca représente un moyen d'encapsuler des éléments. 
    
    Dans votre environnement de dev :
        - Vous pouvez avoir deux fichiers qui possèdent le même nom
        foo.txt

        > l'un se trouve dans /home/other/
        > l'autre se trouve dans /home/greg/


    L'utilisation des espaces de nom va être utile dans le cas ou :
        - On veut éviter les collisions de noms entre le code que vous créez et celui des bibliothèques tierces
        - On veut raccourcir des noms très long Noms_Extremement_Long

    Exemple de syntaxe de namespace :
*/
namespace MonEspaceDeNom; // Les espaces de noms ne sont pas sensible à la casse

class maClasse {

}

// On peut imbriquer les espaces de noms avec des antislash \
namespace MonEspaceDeNom\SousEspace;


?>