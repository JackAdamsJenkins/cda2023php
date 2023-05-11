<?php 
class contactModel {
    private $db;
    
    public function __construct(){
        // Connexion à la base de données existante utilisée pour l'exercice 19 (cda2023magnet.sql.gz)
        $this->db = new PDO('mysql:host=localhost;dbname=cda2023magnet;charset=utf8',
            'utilisateur',
            'motdepasse',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Active la gestion des erreurs
            ]);
    }

    public function saveDatas($prenom, $content){
        $requete = $this->db->prepare('INSERT INTO message(prenom, message) VALUES(:prenom, :message)');
        $requete->execute(array(
            "prenom" => $prenom,
            "message" => $content
        ));
    }
}
?>