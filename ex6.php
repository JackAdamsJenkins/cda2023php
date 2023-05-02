<?php 
    // Comparaison de nombres :
    // Créez un formulaire HTML qui permet à l'utilisateur de saisir deux nombres. Utilisez la méthode GET pour récupérer ces valeurs, puis créez un script PHP qui compare les deux nombres en utilisant des opérateurs logiques et des structures conditionnelles (if, else, elseif) pour déterminer si le premier nombre est plus grand, plus petit ou égal au second nombre. Affichez le résultat.
    $message = "Veuillez entrer deux valeurs";

    // Tester si les champs ont été remplis
    if(!empty($_GET['numA']) && !empty($_GET['numB'])){
        // Je fais la comparaison
        $numA = $_GET['numA'];
        $numB = $_GET['numB'];

        if($numA > $numB){
            $message = "Le nombre A est supérieur au nombre A";
        } elseif($numA < $numB){
            $message = "Le nombre B est supérieur au nombre A";
        } else {
            $message = "Le nombre A est égal au nombre B";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparer nombres</title>
</head>
<body>
    <form action="#" method="get">
        <input type="number" name="numA" placeholder="Nombre 1" value="<?php if(!empty($_GET['numA'])) echo $_GET['numA']; ?>">
        <input type="number" name="numB" placeholder="Nombre 2" value="<?php if(!empty($_GET['numB'])) echo $_GET['numB']; ?>">
        <input type="submit" value="Comparer">
    </form>
    <p>
        <?php echo $message; ?>
    </p>
</body>
</html>