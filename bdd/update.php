<?php 
require_once('connect.php');
 // Mise à jour de données dans la base de données

 $requete = "UPDATE blog SET title_blog = :title WHERE id = :id";

 // Préparation de la requête
 $data = $db->prepare($requete);

 // Execution de la requête
 $data->execute(array(
     "title" => "Nouveau titre de l'article 2",
     "id" => 2
 ));
?>