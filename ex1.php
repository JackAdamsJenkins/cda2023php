<!-- Récupérer des données envoyés par un utilisateur -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echanger deux valeurs</title>
</head>
<body>
    <h1>Echanger deux valeurs</h1>
    <!-- Utilisation de la méthode GET -->
    <form action="#" method="get">
        <input type="number" name="numA" placeholder="Nombre A">
        <input type="number" name="numB" placeholder="Nombre B">
        <input type="submit" value="Echanger !">
    </form>

    <!-- Afficher les valeurs initiales -->
    <p>
        <?php
            // Afficher les valeurs si elles existent
            if(isset($_GET['numA']) && isset($_GET['numB'])){
                echo "Valeurs initiales : <br>";
                echo "Nombre A = ".$_GET["numA"];
                echo "<br>";
                echo "Nombre B = ".$_GET["numB"];
            }
        ?>
    </p>

    <!-- Afficher les valeurs échangées -->
    <p>
        <?php
            if(isset($_GET['numA']) && isset($_GET['numB'])){
                $temp = $_GET['numB'];
                $_GET['numB'] = $_GET['numA'];
                $_GET['numA'] = $temp;
                echo "Valeurs échangées : <br>";
                echo "Nombre A = ".$_GET["numA"];
                echo "<br>";
                echo "Nombre B = ".$_GET["numB"];
            }
        ?>
    </p>
</body>
</html>