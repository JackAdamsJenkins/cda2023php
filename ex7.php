<?php 
// Jour de la semaine :
// Créez un formulaire HTML qui permet à l'utilisateur de saisir un nombre entre 1 et 7. Utilisez la méthode GET pour récupérer ce nombre, puis créez un script PHP qui utilise la structure switch pour déterminer à quel jour de la semaine correspond le nombre (par exemple, 1 pour lundi, 2 pour mardi, etc.) et affichez le jour de la semaine.
    $message = "Veuillez renseigner un nombre";

    // Vérifier sur le formulaire a été envoyé
    if(!empty($_GET['day'])){
        switch($_GET['day']){
            case 1:
                $message = "Lundi";
            break;
            case 2:
                $message = "Mardi";
            break;
            case 3:
                $message = "Mercredi";
            break;
            case 4:
                $message = "Jeudi";
            break;
            case 5:
                $message = "Vendredi";
            break;
            case 6:
                $message = "Samedi";
            break;
            case 7:
                $message = "Dimanche";
            break;
            default:
                $message = "Ce n'est pas un jour de la semaine !";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour de la semaine</title>
</head>
<body>
    <form action="#" method="get">
        <input type="number" name="day" placeholder="Numéro du jour de la semaine">
        <input type="submit" value="Convertir">
    </form>
    <p><?= $message; ?></p>
    <!-- <p><?php echo $message; ?></p> -->
</body>
</html>