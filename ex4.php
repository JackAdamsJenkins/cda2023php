<?php 
    // Calculatrice simple :
    // Créez un formulaire HTML qui prend deux nombres et un opérateur mathématique (+, -, *, /) en utilisant la méthode GET. Puis, créez un script PHP qui récupère ces données, effectue le calcul en fonction de l'opérateur choisi et affiche le résultat.
    $result = null;
    if(!empty($_GET['numA']) && !empty($_GET['numB']) && !empty($_GET['operator'])){
        $numA = $_GET['numA'];
        $numB = $_GET['numB'];
        $operator = $_GET['operator'];
        switch($operator){
            case "+":
                $result = $numA + $numB;
            break;

            case "-":
                $result = $numA - $numB;
            break;

            case "*":
                $result = $numA * $numB;
            break;

            case "/":
                $result = $numA / $numB;
            break;

            default:
                $result = "Error";
        }

        $result = "<p>Le calcul $numA $operator $numB = $result</p>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculatrice</title>
</head>
<body>
    <h1>Une simple calculatrice</h1>
    <form action="#" method="get">
        <input type="number" name="numA">
        <input type="number" name="numB">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="submit" value="Calculer">
        <!-- Select pour l'opérateur -->
        <!-- Input:submit pour l'opérateur -->
        <!-- Bouton radio pour l'opérateur -->
    </form>
    <?php echo $result; ?>
</body>
</html>