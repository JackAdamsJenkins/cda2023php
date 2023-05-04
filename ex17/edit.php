<?php 
        // Si on a le paramètre edit à true, on affiche le formulaire de modification de data
        if(isset($_GET['edit'])){
            
            // Si le formulaire de mise à jour a été envoyé
            if(isset($_POST['update'])){
                // On fait la mise à jour
                setcookie('login', $_POST['login'], time()+3600);
                setcookie('prenom', $_POST['prenom'], time()+3600);
                setcookie('nom', $_POST['nom'], time()+3600);

                // Gérer l'upload
                $message = null;
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
                        if(move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $nom_fichier)){
                            // Si on arrive ici, c'est un succès
                            $message = '<p>Le fichier a été uploadé avec succès : <a href="../uploads/'. $nom_fichier .'">'. $nom_fichier .'</a></p>';
                            setcookie('image', $nom_fichier, time()+3600);
                        } else {
                            $message = '<p style="color:red;">Une erreur est survenue lors de l\'upload</p>';
                        }
                    } else {
                        $message = '<p style="color:red;">Le fichier doit être au format jpeg ou png</p>';
                    }
                } else {
                    $message = '<p style="color:red;">Veuillez sélectionner un fichier</p>';
                }

                // On revient sur la page en mode lecture
                header('Location: profil.php');
            }



            $login = isset($_COOKIE['login']) ? $_COOKIE['login'] : null;
            $prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
            $nom = isset($_COOKIE['nom']) ? $_COOKIE['nom'] : null;
            
            ?>
            <h1>Modifier le profil</h1>
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="text" name="login" placeholder="Votre login" value="<?= $login ?>">
                <input type="text" name="prenom" placeholder="Votre prénom" value="<?= $prenom ?>">
                <input type="text" name="nom" placeholder="Votre nom" value="<?= $nom ?>">
                <input type="file" name="image">
                <input type="submit" value="Mettre à jour !" name="update">
            </form>

        <?php 
        } // /if isset
    
    ?>