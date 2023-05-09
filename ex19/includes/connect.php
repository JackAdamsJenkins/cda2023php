<?php 
// Connexion à la base de données
try {
    require_once('config.php');
    $db = new PDO(
        'mysql:host='.$_ENV['server'].';dbname='.$_ENV['dbname'].';charset='.$_ENV['encoding'],
        $_ENV['username'],
        $_ENV['password'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Active la gestion des erreurs
        ]
    );
} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}
?>