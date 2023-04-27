<?php 
    // Convertisseur de température :
    // Créez un formulaire HTML qui permet à l'utilisateur de saisir une température en degrés Celsius ou Fahrenheit. Utilisez la méthode GET pour récupérer la température et l'unité, puis créez un script PHP pour convertir la température en l'autre unité et affichez le résultat.
    /*
        Calcul pour convertir Celcius en Fahrenheit :
            (temperature en celcius * 9/5) + 32
        Calcul pour convertir Fahrenheit en Celsius :
            (temperature en Fahrenheit - 32) * 5/9
    */
    $result = null;

    if(!empty($_GET['temperature']) && !empty($_GET['unite'])){
        $temperature = $_GET['temperature'];
        $unite = $_GET['unite'];
        
        if($unite == "C"){
            $result = ($temperature * 9/5) + 32;
        } elseif($unite == "F"){
            $result = ($temperature - 32) * 5/9;
        } else {
            $result = "Erreur de calcul";
        }

        $unite = ($unite == "C") ? "Fahrenheit" : "Celcius";

        $result = "<p>La température convertie est : $result $unite</p>";
        
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur de température</title>
</head>
<body>
    <h1>Convertisseur de température</h1>
    <form action="#" method="get">
        <input type="number" name="temperature" placeholder="Température">
        <select name="unite">
            <option value="C">Celcius</option>
            <option value="F">Fahrenheit</option>
        </select>
        <input type="submit" value="Convertir">
    </form>
    <?php echo $result; ?>
</body>
</html>