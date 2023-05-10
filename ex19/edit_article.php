<?php 
    // Est ce qu'on est connecté ?
    $isUserConnected = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;
    if($isUserConnected == null){
        // L'utilisateur n'est pas connecté, on le redirige sur la page d'accueil
        header('Location: index.php');
    }

    // Est ce qu'on a un ID et un ID au bon format ?
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
            
            $title = $data['title'];
            $content = $data['content'];
            $image = $data['image'];

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

    $messageErreur = null;
    // Est-ce que le formulaire est validé ?
    if(isset($_POST['submit'])){
        // Est-ce que les données sont remplies à l'exception de l'image ?
        if(!empty($_POST['title']) && !empty($_POST['content']))
        {
            $isDataValid = true;
        
            // Si les données sont valides, on peut mettre à jour dans la base de données
            if($isDataValid){
                // Faire l'enregistrement en BDD
                require_once('includes/connect.php');

                // On prépare la requête avant enregistrement
                // $requete = "UPDATE blog SET title_blog = :title WHERE id = :id";

                $requete = "UPDATE article SET title_article = :title, content_article = :content WHERE id_article = :id";

                // Préparation de la requête
                $data = $db->prepare($requete);

                // Execute la requête avec les bonnes données
                $data->execute(array(
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'id' => $_GET['id']
                ));

                // Une ligne a été mise à jour
                if($data->rowCount() == 1){
                    // Données enregistrées en BDD
                    $messageErreur = '<p class="success">Article mis à jour</p>';

                    // On oublie pas d'afficher sur la page les données à jour
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    // $data['image']
                }
            }

            // Gestion de l'upload de l'image
            
            if(isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK){
                $isDataValid = false;
                // On vérifie le type mime du fichier (on veut juste une image)
                $info = getimagesize($_FILES['image']['tmp_name']);
           
                // Il y a bien un fichier
                if($info && ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/png' || $info['mime'] == 'image/jpg')) {
                    // Générer un nom de fichier unique pour éviter les doublons        // récupère l'extension
                    $nom_fichier = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        
                    // Déplacer le fichier temporaire vers le dossier de destination
                                        // du dossier temp, vers le nouveau dossier
                    if(move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $nom_fichier)){
                        // Si on arrive ici, c'est un succès
                        $isDataValid = true;
                    } else {
                        $messageErreur =  '<p class="error">Une erreur est survenue lors de l\'upload</p>';
                    }
                } else {
                    $messageErreur = '<p class="error">Le fichier doit être au format jpeg ou png</p>';
                }


                // On met à jour l'image dans la base de données
                $requete = "UPDATE article SET image_article = :image WHERE id_article = :id";

                // Préparation de la requête
                $data = $db->prepare($requete);

                // Execute la requête avec les bonnes données
                $data->execute(array(
                    'image' => $nom_fichier,
                    'id' => $_GET['id']
                ));

                // Une ligne a été mise à jour
                if($data->rowCount() == 1){
                    // Données enregistrées en BDD
                    $messageErreur = '<p class="success">Image mise à jour</p>';

                    // On oublie pas d'afficher sur la page les données à jour
                    // $title = $_POST['title'];
                    // $content = $_POST['content'];
                    $image = $nom_fichier;
                }
                
            } elseif($_FILES['image']['tmp_name'] == "" && !empty($_FILES['image']['name'])){
                $messageErreur = '<p class="error">Mauvais format d\'image</p>';
            }

            
        }
    }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnet Studio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once('header.php'); ?>
    <section>
        <h1>Modifier l'article</h1>
        <hr>
        <?=$messageErreur ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Titre de l'article" value="<?=$title;?>">
            <textarea name="content" cols="30" rows="10" placeholder="contenu de l'article"><?=$content;?></textarea>

            <label for="featured">Image mise en avant (<?=$image;?>) <img src="uploads/<?=$image;?>" alt=""> :</label>
            <input type="file" name="image" id="featured">

            <input type="submit" value="Mettre à jour l'article" name="submit">
        </form>
    </section>

    <?php include_once('footer.html'); ?>
</body>
</html>