<?php 
require_once('connect.php');
// Insertion de données en base de données
$requete = "INSERT INTO blog(title_blog, desc_blog, img_blog) VALUES(:title, :description, :img)";

// Préparation de la requête
$data = $db->prepare($requete);

// Execute la requête avec les bonnes données
// $data->execute(array(
//     'title' => "Mon article génial",
//     'description' => "La description de mon article",
//     'img' => 'monimage.jpg'
// ));

?>