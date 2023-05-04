<?php 
require_once('connect.php');
// Supprimer une donnée dans la base de données
$requete = "DELETE FROM blog WHERE id = :id";

// On prépare la requête
$data = $db->prepare($requete);

$id = 1;

// On exécute la requête
$data->execute(array(
    'id' => $id
));
?>