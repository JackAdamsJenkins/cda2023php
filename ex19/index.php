<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta important pour le responsive -->
    <title>magnet Studio page d'accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <?php 
        echo "<link rel=\"stylesheet\" href=\"css/style.css\">";
    ?>
</head>
<body>

    <!-- inclure le header -->

    <section>
        <h1>
            <!-- Le titre du site doit être récupéré de la base de données -->
        </h1>
        <hr />
        <p>
            <!-- Un petit texte doit descriptif doit également être récupéré de la base de données -->
        </p>
    </section>

    <section>
        <!-- Vous devez afficher les 6 derniers articles enregistré dans votre BDD -->
    </section>
    
    <section id="images">
        <img src="img/portfolio-img1.jpg" alt="Première image">
        <img src="img/portfolio-img2.jpg" alt="Deuxième image">
        <img src="img/portfolio-img3.jpg" alt="Troisième image">
        <img src="img/portfolio-img4.jpg" alt="Quatrième image">
        <img src="img/portfolio-img5.jpg" alt="Cinquième image">
        <img src="img/portfolio-img6.jpg" alt="Sixième image">
    </section>

    <section>
        <p>hello, if you interest working together, just send message <a href="#">contact page</a></p>
    </section>

    <!-- include le footer -->

</body>
</html>