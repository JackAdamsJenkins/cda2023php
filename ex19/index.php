<?php 
    // Inclure l'appel à la base de données
    require_once('includes/connect.php');

    // Faire la requête pour récuperer le titre et la description
    $requete = $db->prepare('SELECT title_site as title, description_site as description FROM site WHERE id_site = :id');

    $id = 1;
    $requete->execute(array(
        'id' => $id
    ));

    // On lance le fetch pour récupérer les données
    $data = $requete->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta important pour le responsive -->
    <title><?=$data['title']?> - Page d'accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <?php 
        echo "<link rel=\"stylesheet\" href=\"css/style.css\">";
    ?>
</head>
<body>

    <!-- inclure le header -->
    <?php 
        include_once('header.php');
    ?>

    <section>
        <h1>
            <!-- Le titre du site doit être récupéré de la base de données -->
            <?=$data['title']?>
        </h1>
        <hr />
        <p>
            <!-- Un petit texte doit descriptif doit également être récupéré de la base de données -->
            <?=$data['description']?>
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
    <?php 
        include_once('footer.html');
    ?>
</body>
</html>