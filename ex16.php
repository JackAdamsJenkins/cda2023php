<?php 
/*
Vous travaillez pour une entreprise de vente en ligne qui vend des vêtements pour femmes. 
Vous avez été chargé de développer une page web qui permet aux utilisateurs de rechercher des articles en fonction de différents critères tels que la catégorie, la couleur et la taille. 
La page doit également afficher une liste de résultats et permettre aux utilisateurs de sélectionner des articles pour les ajouter à leur panier.

Voici les étapes à suivre pour réaliser cette page web :
    - Créer une page HTML avec un formulaire contenant des champs pour les critères de recherche (catégorie, couleur, taille) et un bouton de soumission.

    - Créer un script PHP qui va récupérer les données du formulaire soumis en utilisant la méthode GET.

    - Créer des tableaux indexés pour stocker les informations sur les articles disponibles, y compris le nom de l'article, la catégorie, la couleur, la taille, le prix, la quantité en stock et une image (URL).

    - Utiliser les données récupérées pour filtrer les articles disponibles en fonction des critères de recherche sélectionnés.

    - Afficher les résultats filtrés sous forme de tableau HTML, en incluant les informations suivantes pour chaque article : nom de l'article, image, description, prix, quantité en stock.

    - Ajouter des boutons "Ajouter au panier" à chaque ligne du tableau, qui permettent d'ajouter l'article correspondant au panier.

    - Utiliser les variables de session pour stocker les articles ajoutés au panier.

    - Afficher le contenu du panier dans une section distincte de la page, avec le nom de l'article, la quantité et le prix total.

    - Utiliser les cookies pour stocker les préférences de l'utilisateur (catégorie, couleur, taille) afin que la prochaine fois qu'il visite la page, ces préférences soient déjà sélectionnées.

    - Inclure les fichiers nécessaires à l'aide des fonctions require, require_once, include, include_once pour éviter les duplications de code.

    - Utiliser les structures de contrôle (if, else, elseif, switch) pour gérer les cas où aucun article ne correspond aux critères de recherche, où l'utilisateur ajoute un article déjà présent dans le panier, etc.

    - Utiliser les boucles (for, foreach, while, do) pour parcourir les résultats filtrés et les articles présents dans le panier.

INFORMATIONS :
    - Vous pouvez tout faire sur la même page
    - Utiliser la variable superglobale : $_SERVER['REQUEST_METHOD'] pour savoir si c'est du POST ou du GET
    - Utiliser array_key_exists() pour savoir si une clé est déjà présente (artcile déjà ajouté)
        - Ce sera utile pour ajouter au panier et pour éviter de dupliquer les articles
    - Utiliser array_unique(array_column($tableau, 'element')) pour récupérer les catégories/couleurs/tailles uniques (non dupliquées)
*/
$articles = array(
    array(
        'nom' => 'Robe imprimée',
        'categorie' => 'Robes',
        'couleur' => 'Noir et blanc',
        'taille' => 'M',
        'prix' => 39.99,
        'quantite' => 10,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'T-shirt rayé',
        'categorie' => 'T-shirts',
        'couleur' => 'Bleu et blanc',
        'taille' => 'S',
        'prix' => 19.99,
        'quantite' => 5,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Pantalon en toile',
        'categorie' => 'Pantalons',
        'couleur' => 'Kaki',
        'taille' => 'L',
        'prix' => 49.99,
        'quantite' => 2,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Robe de soirée',
        'categorie' => 'Robes',
        'couleur' => 'Noir',
        'taille' => 'S',
        'prix' => 79.99,
        'quantite' => 3,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Jupe en cuir',
        'categorie' => 'Jupes',
        'couleur' => 'Noir',
        'taille' => 'M',
        'prix' => 69.99,
        'quantite' => 1,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Chaussures à talons',
        'categorie' => 'Chaussures',
        'couleur' => 'Noir',
        'taille' => '38',
        'prix' => 89.99,
        'quantite' => 4,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Sac à main en cuir',
        'categorie' => 'Sacs à main',
        'couleur' => 'Marron',
        'taille' => 'Unique',
        'prix' => 59.99,
        'quantite' => 6,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Veste en cuir',
        'categorie' => 'Vestes',
        'couleur' => 'Noir',
        'taille' => 'M',
        'prix' => 129.99,
        'quantite' => 2,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Bottines en cuir',
        'categorie' => 'Chaussures',
        'couleur' => 'Marron',
        'taille' => '39',
        'prix' => 79.99,
        'quantite' => 3,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Pull en laine',
        'categorie' => 'Pulls',
        'couleur' => 'Bleu',
        'taille' => 'M',
        'prix' => 49.99,
        'quantite' => 8,
        'image' => 'https://picsum.photos/10/10'
    ),
    array(
        'nom' => 'Chemisier en soie',
        'categorie' => 'Chemisiers',
        'couleur' => 'Blanc',
        'taille' => 'S',
        'prix' => 69.99,
        'quantite' => 4,
        'image' => 'https://picsum.photos/10/10'
    )
);
?>