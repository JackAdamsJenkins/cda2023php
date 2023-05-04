<?php 
// Connexion à une base de données avec mysqli

// On commence par faire la connexion
// $bdd = mysqli_connect('localhost', 'utilisateur', 'motdepasse', 'nomDeLaBaseDeDonnees')
if(!($bdd = mysqli_connect('localhost', 'utilisateur', 'motdepasse', 'cda2023'))){
   // Connexion échouée
   echo "Error";
   exit(1);
}

// Si on arrive ici, c'est que la connexion est réussie
// Cette façon de faire la requête, c'est la pire idée qui soit
// Faire une requête de cette façon ne permet pas de faire des requêtes SECURISEE
// Dit autrement > L'utilisateur va pouvoir pirater votre BDD
$resultat = mysqli_query($bdd, 'SELECT title_blog as title, desc_blog as description, img_blog as image FROM blog');

// $login = $_POST['login']; // Toto
// $login = $_POST['login']; // " OR 1=1";
// $result = mysqli_query($bdd, "SELECT * FROM users WHERE login=$login");
// $result = mysqli_query($bdd, "SELECT * FROM users WHERE login='' OR 1=1");

// On parcours les résultats
while($data = mysqli_fetch_assoc($resultat)){
    echo $data['title'];
    echo "<br/>";
    echo $data['description'];
    echo "<br/>";
    echo '<img src="uploads/'.$data['image'].'" alt="'.$data['title'].'">';
}

// On libère la connexion
mysqli_free_result($resultat);

// On prépare les requêtes avant de les executer, pour éviter les injection SQL
// $req_pre = mysqli_prepare($bdd, 'SELECT * FROM blog WHERE id = ?');
// // $req_pre = mysqli_prepare($bdd, 'SELECT * FROM user WHERE login = ?')
// // On bind les paramètres
// $id = 1;
// mysqli_stmt_bind_param($req_pre, "i", $id);

// On exécute la requête
// mysqli_stmt_execute($req_pre);

$title = "Encore un autre article";
$desc = "lorem ipsum dolor sit amet, consectet";
$img = "monimage.jpg";

// On ajoute un nouvel article
$req_pre = mysqli_prepare($bdd, 'INSERT INTO blog(title_blog, desc_blog, img_blog) VALUES(?, ?, ?)');
mysqli_stmt_bind_param($req_pre, "sss", $title, $desc, $img);
mysqli_stmt_execute($req_pre);


?>