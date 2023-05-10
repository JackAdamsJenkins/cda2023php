<?php 
    $erreurMessage = null;
    if(isset($_POST['submit'])){
        // Si tous les champs sont remplis
        if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['message'])){
            // On ajoute les données à la base de données
            require_once('includes/connect.php');
            $requete = $db->prepare('INSERT INTO message(prenom,nom,mail,message) VALUES(:prenom,:nom,:mail,:message)');

            $requete->execute(array(
                "prenom" => $_POST['prenom'],
                "nom" => $_POST['nom'],
                "mail" => $_POST['mail'],
                "message" => $_POST['message']
            ));

            if($requete->rowCount() >= 1){
                $erreurMessage = '<p class="success">Le message a été enregistré</p>';

                 // Plusieurs destinataires
                $to  = 'clensx@gmail.com'; 

                // Sujet
                $subject = 'Un nouveau message depuis le site';

                // message
                $message = '
                <html>
                <head>
                <title>Un nouveau message depuis le site</title>
                </head>
                <body>
                <p>Vous avez une demande de contact</p>
                <p>Prénom et Nom : '.$_POST['prenom'].' '.$_POST['nom'].'</p>
                <p>'.nl2br($_POST['message']).'</p>
                </body>
                </html>
                ';

                // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                // En-têtes additionnels
  
                $headers[] = 'Reply-To: '.$_POST['mail'];

                // Envoi
                if(mail($to, $subject, $message, implode("\r\n", $headers))){
                    $erreurMessage .= '<p class="success">Le mail a été envoyé</p>';
                } else {
                    $erreurMessage .= '<p class="error">Impossible d\'envoyer le message.</p>';
                }
            }


        } else {
            $erreurMessage = '<p class="error">Vous devez renseigner tous les champs</p>';
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta important pour le responsive -->
    <title>Magnet Studio - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Inclure le header -->
    <?php include_once('header.php'); ?>
    <section>
        <h1>Page de contact</h1>
        <hr />
        <?=$erreurMessage?>
        <form action="#" method="post">
            <input type="text" name="prenom" placeholder="Votre prénom">
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="email" name="mail" placeholder="Votre email">
            <textarea name="message" cols="30" rows="10" placeholder="votre message"></textarea>

            <input type="submit" value="Envoyer le message" name="submit">
        </form>
        <!-- Ajouter un formulaire de contact qui enregistrera les données en BDD -->
    </section>
    
    <!-- Inclure le footer -->
    <?php include_once('footer.html'); ?>
</body>
</html>