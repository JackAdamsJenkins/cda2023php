<?php 
// Vérification de formulaire :
//     Créez un formulaire HTML avec plusieurs champs (nom, prénom, email, etc.) et utilisez la méthode GET pour récupérer les données. Dans votre script PHP, vérifiez si tous les champs ont été remplis en utilisant les fonctions isset, empty et !empty. Si tous les champs sont remplis, affichez un message de succès, sinon, affichez un message d'erreur demandant à l'utilisateur de remplir les champs manquants.

$nameMessage = null;
$prenomMessage = null;
$mailMessage = null;
$birthdateMessage = null;
$successMessage = null;
$isAllFieldOk = true;
// Le formulaire est envoyé
if(isset($_GET['envoyer'])){
    if(empty($_GET['nom'])){
        $nameMessage = '<p class="error">Vous devez renseigner le nom</p>';
        $isAllFieldOk = false;
    }

    if(empty($_GET['prenom'])){
        $prenomMessage = '<p class="error">Vous devez renseigner le prénom</p>';
        $isAllFieldOk = false;
    }

    if(empty($_GET['mail'])){
        $mailMessage = '<p class="error">Vous devez renseigner le mail</p>';
        $isAllFieldOk = false;
    }

    if(empty($_GET['birthdate'])){
        $birthdateMessage = '<p class="error">Vous devez renseigner la date de naissance</p>';
        $isAllFieldOk = false;
    }

    if($isAllFieldOk){
        $successMessage = '<p class="success">Tous les champs sont remplis</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test formulaire</title>
    <style>
        .error {
            color:red;
        }
        .success {
            color:green;
        }
    </style>
</head>
<body>
    <form action="#" method="get">
        <label>Nom :
            <input type="text" name="nom" placeholder="Votre nom">
        </label>
        <?= $nameMessage; ?>
        <br>
        <label>Prénom :
            <input type="text" name="prenom" placeholder="Votre prénom">
        </label>
        <?= $prenomMessage; ?>
        <br>

        <label>Email :
            <input type="mail" name="mail" placeholder="Votre email">
        </label>
        <?= $mailMessage; ?>

        <br>

        <label for="birthdate">Date de naissance : </label>
        <input type="date" id="birthdate" name="birthdate" placeholder="Date de naissance">
        <?= $birthdateMessage; ?>
        <br>
        <input name="envoyer" type="submit" value="Envoyer">
    </form>
    
    <?= $successMessage; ?>
</body>
</html>