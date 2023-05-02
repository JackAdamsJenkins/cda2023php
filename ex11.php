<?php 
/*
Affichage de figures géométriques :
Créez un script PHP qui utilise une boucle for pour afficher un triangle 
composé de caractères spécifiques (par exemple, des astérisques).


*
**
***
****
*****
******
*******
********
*********
**********
***********
************
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>
<body>
    <h1>Afficher un triangle</h1>
    <form action="#" method="get">
        <input type="submit" name="show" value="Afficher">
    </form>

    <div>
        <?php 
            // Le formulaire a été envoyé
            if(isset($_GET['show'])){
                $triangleSize = 6;
                // for($i = 1; $i <= $triangleSize; $i++){
                //     for($j = 1; $j <= $i; $j++){
                //         echo "*";
                //     }
                //     echo "<br/>";
                // }

                // Deuxième solution, avec une seul boucle
                for($i = 1; $i <= $triangleSize; $i++) {
                   echo str_repeat("*", $i) . "<br/>";
                }
            }

        ?>
    </div>
</body>
</html>