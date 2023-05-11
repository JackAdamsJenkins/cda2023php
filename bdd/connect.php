<?php 
// Connexion à la base de données
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=cda2023;charset=utf8',
        'utilisateur',
        'motdepasse',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Active la gestion des erreurs
        ]
    );
} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
    // Ecriture de la vraie erreur dans un fichier log
    // echo "Error: ".$e->getMessage();
}
?>