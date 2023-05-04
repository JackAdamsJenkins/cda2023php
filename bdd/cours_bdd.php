<?php 
    // Manipulation de données en base de données avec PDO

    // Connexion à la base de données
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=cda2023;charset=utf8',
            'utilisateur',
            'motdepasse',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Active la gestion des erreurs
            ]
        );
    } catch (Exception $e) {
        echo "Connexion refusée à la base de données";
        exit();
        // Ecriture de la vraie erreur dans un fichier log
        // echo "Error: ".$e->getMessage();
    }

    // Insertion de données en base de données
    $requete = "INSERT INTO blog(title_blog, desc_blog, img_blog) VALUES(:title, :description, :img)";

    // Préparation de la requête
    $data = $db->prepare($requete);

    // Execute la requête avec les bonnes données
    // $data->execute(array(
    //     'title' => "Mon article génial",
    //     'description' => "La description de mon article",
    //     'img' => 'monimage.jpg'
    // ));


    // La lecture de données en base de données
    
    // On prépare la requête
    $data = $db->prepare('SELECT * FROM blog ORDER BY id DESC');

    // On execute la requête
    $data->execute();
    // On récupère TOUS les résultats
    $results = $data->fetchAll();

    // La requête récupère les résultats sous forme de tableau associatif
    // On va parcourir le tableau pour afficher les messages (foreach)
    foreach($results as $result){
        echo '<article>';
        echo '<h1>'.$result['title_blog'].'</h1>';
        echo '<p>'.$result['desc_blog'].'</p>';
        echo '<img src="../uploads/'.$result['img_blog'].'" width="150">';
        echo '</article>';
    }

    // Préparer une requête en transmettant une variable
    /*
        Exemple : Récupérer le login et le mot de passe d'un utilisateur et tester si ça correspond
    */
    
    // $requete = $db->prepare('SELECT login_user, password_user FROM users WHERE login_user = :login');

    // // Exécuter la requête préparée
    // $login = "John Doe";
    // $requete->execute(array(
    //     'login' => $login,
    // ));

    // // Réupérer le résultat
    // $result2 = $requete->fetchAll();

    // foreach($result2 as $result){
    //     // Faire le test avec le hash de mot de passe
    // }

    $requete = $db->prepare('SELECT * FROM blog WHERE id = :id');

    $id = 1;
    $requete->execute(array(
        'id' => $id
    ));

    // Pour récupérer un seul résultat (une seule ligne)
    $result = $requete->fetch();
    // $result = $requete->fetchAll(); // Tu vas être obligée de faire un foreach, même si tu as qu'une ligne

    // echo "<br/>";
    // echo $result['title_blog'];

    
    
    // Supprimer une donnée dans la base de données
    $requete = "DELETE FROM blog WHERE id = :id";

    // On prépare la requête
    $data = $db->prepare($requete);

    $id = 1;

    // On exécute la requête
    $data->execute(array(
        'id' => $id
    ));


    // Mise à jour de données dans la base de données

    $requete = "UPDATE blog SET title_blog = :title WHERE id = :id";

    // Préparation de la requête
    $data = $db->prepare($requete);

    // Execution de la requête
    $data->execute(array(
        "title" => "Nouveau titre de l'article 2",
        "id" => 2
    ));
    
?>