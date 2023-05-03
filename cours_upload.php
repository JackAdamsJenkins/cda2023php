<?php 
/*
    Avec PHP vous pouvez gérer les uploads
    Pour cela, il vous faut un formulaire en HTML
*/
$message = null;
// On vérifie si le formulaire a été envoyé
if(isset($_POST['submit'])){
    // var_dump($_FILES);
    // On vérifie si un fichier a été sélectionné
    if(isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK){
        // On vérifie le type mime du fichier (on veut juste une image)
        $info = getimagesize($_FILES['image']['tmp_name']);
        
        // Il y a bien un fichier
        if($info != false && ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/png')) {
            // Générer un nom de fichier unique pour éviter les doublons        // récupère l'extension
            $nom_fichier = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            // Déplacer le fichier temporaire vers le dossier de destination
                                // du dossier temp, vers le nouveau dossier
            if(move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $nom_fichier)){
                // Si on arrive ici, c'est un succès
                $message = '<p>Le fichier a été uploadé avec succès : <a href="uploads/'. $nom_fichier .'">'. $nom_fichier .'</a></p>';
            } else {
                echo '<p style="color:red;">Une erreur est survenue lors de l\'upload</p>';
            }
        } else {
            echo '<p style="color:red;">Le fichier doit être au format jpeg ou png</p>';
        }
    } else {
        echo '<p style="color:red;">Veuillez sélectionner un fichier</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
</head>
<body>
    <h1>Upload d'image avec HTML et PHP</h1>
    <?= $message; ?>
    <!-- Obligatoire pour faire de l'upload de fichier : method post et type d'encodage -->
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="image">Sélectionnez une image</label>
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" name="submit" value="Uploader !">
    </form>
</body>
</html>