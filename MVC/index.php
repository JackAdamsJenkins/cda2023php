<?php 
    require_once 'controller/contact.php';
    require_once 'model/contact.php';

    if(isset($_POST['submit'])){
        $ctrl = new contactController($_POST['prenom'], $_POST['content']);

        // Je vérifie si les données sont OK
        if($ctrl->verifyDatas()){
            // On envoi les données au modèle
            $mdl = new contactModel();
            $mdl->saveDatas($_POST['prenom'], $_POST['content']);
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php 
        include_once('view/contact.php');
    ?>
</body>
</html>