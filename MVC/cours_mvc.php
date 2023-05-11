<?php 
/*
    L'architecture MVC est un modèle de conception de logiciel qui divise une application en trois composants principaux :
        - Le modèle
        - La vue 
        - Le contrôleur

    Chaque composant est responsable d'une tâche spécifique :
        - Le modèle : Contient la logique métier de l'application. Il s'agit généralement de l'application qui intéragit avec la base de données et effectue les opérations CRUD (Créer, Lire, Mettre à jour et Supprimer)

        - La vue : Responsable de l'affichage des données à l'utilisateur final. Elle s'occupe également de la saisie des données par l'utilisateur et de leur validation.

        - Le contrôleur : Responsable de la gestion des requêtes HTTP et de l'interaction entre le modèle et la vue. Il traite les entrées de l'utilisateur, récupère les données nécessaires à partir du modèle et les passe à la vue pour affichage.


    Mettre en place une architecture MVC avec PHP :
        1 - Créer un répertoire pour stocker les fichiers de votre application
        
        2 - Dans ce répertoire, créer trois sous-répertoire : Model, View, Controller
        
        3 - Dans le répertoire Model, créer des classes qui représentent les objets de votre application. Chaque classe devrait inclure les méthodes nécessaires pour effectuer les opérations CRUD sur les données.
        
        4 - Dans le répertoire View, créer des fichiers qui représentent les page HTML de votre app. Vous pouvez également utiliser un moteur de template pour générer les vue dynamiquement.

        5 - Dans le répertoire Controller, créer des classes qui représentent les actions de votre app. Chaque classe devrait inclure les méthodes qui traitent les requêtes HTTP et interagissent avec les modèles et les vues.

        6. Dans le fichier index.php, créer une instance du contrôleur approprié en fonction de la requête HTTP reçue et appeler la méthode.
        
*/

?>