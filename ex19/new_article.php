<?php 
    $messageErreur = null;
    $title = null;
    $content = null;
    // Est-ce que le formulaire est validé ?
    if(isset($_POST['submit'])){
        // Est-ce que les données sont remplies ?
        if(!empty($_POST['title']) && !empty($_POST['content']) && isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK)
        {
            $isDataValid = false;
            // On récupère la date et l'heure au moment de l'envoi de l'article
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');

            // On gère l'upload (voir si c'est une image, au bon format)
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

            // Si les données sont valides, on peut ENFIN enregistrer en base de données
            if($isDataValid){
                // Faire l'enregistrement en BDD
                require_once('includes/connect.php');

                // On prépare la requête avant enregistrement
                $requete = "INSERT INTO article(title_article, content_article, date_article, image_article) VALUES(:title, :content, :date, :img)";

                // Préparation de la requête
                $data = $db->prepare($requete);

                // Execute la requête avec les bonnes données
                $data->execute(array(
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'img' => $nom_fichier,
                    "date" => $date
                ));

                // Une ligne a été créée ?
                if($data->rowCount() == 1){
                    // Données enregistrées en BDD
                    $messageErreur = '<p class="success">Article ajouté à la base de données !</p>';
                }
            }

            
        } else {
            // On récupère ce qu'il y a à récupérer
            $title = $_POST['title'];
            $content = $_POST['content'];
            $messageErreur = '<p class="error">Vous devez renseigner TOUS les champs</p>';
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
        <h1>Ajouter un nouvel article</h1>
        <hr>
        <?=$messageErreur ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Titre de l'article" value="<?=$title;?>">
            <textarea name="content" cols="30" rows="10" placeholder="contenu de l'article"><?=$content;?></textarea>

            <label for="featured">Image mise en avant :</label>
            <input type="file" name="image" id="featured">

            <input type="submit" value="Ajouter l'article" name="submit">
        </form>
    </section>

    <?php include_once('footer.html'); ?>
</body>
</html>