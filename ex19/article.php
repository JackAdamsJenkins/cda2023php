<?php 

    // On vérifie si l'utilisateur est connecté
    $isUserConnected = isset($_COOKIE['user']) ? true : false;

    // Je vérifie si je récupère un ID dans l'adresse
    if(isset($_GET['id']) && !empty($_GET['id'])){
        // Je vérifie si l'id est numérique
        if(is_numeric($_GET['id'])){
            // On est bien sur un nombre, on peut tenter la connexion à la BDD
            require_once('includes/connect.php');

            // Faire la requête pour récuperer les données de l'article
            $requete = $db->prepare('SELECT COUNT(id_article) as nbArticle, id_article as id, title_article as title, content_article as content, image_article as image FROM article WHERE id_article = :id');

            $requete->execute(array(
                'id' => $_GET['id']
            ));

            $data = $requete->fetch();

            if($data['nbArticle'] != 1){
                // On a pas réussi a récupérer l'article (article pas existant, plus existant, mauvais id ?)
                header('Location: index.php');
            }

        } else {
            // Ce n'est pas un nombre, on redirige vers l'accueil
            header('Location: index.php');
        }
    } else {
        header('Location: index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta important pour le responsive -->
    <title><?=$data['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <?php 
        echo "<link rel=\"stylesheet\" href=\"css/style.css\">";
    ?>
</head>
<body>

    <!-- inclure le header -->
    <?php 
        include_once('header.php');
    ?>

    <section>
        <img src="uploads/<?=$data['image']?>" alt="<?=$data['title']?>">
        <h1>
            <!-- Le titre du site doit être récupéré de la base de données -->
            <?=$data['title']?>
        </h1>
        <hr />
        <p>
            <!-- Un petit texte doit descriptif doit également être récupéré de la base de données -->
            <?=nl2br($data['content'])?>
        </p>
        <?php 
            if($isUserConnected){
                // Si l'utilisateur est connecté, on affiche le lien de modification
                echo '<a href="edit_article.php?id='.$data['id'].'">Modifier l\'article</a>';
            }
        ?>
        
    </section>

    <!-- include le footer -->
    <?php 
        include_once('footer.html');
    ?>
</body>
</html>