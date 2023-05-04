<?php 
require_once('connect.php');

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
?>