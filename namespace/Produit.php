<?php
namespace App\produits;

class Produit {
    private $nom;
    private $prix;

    public function __construct($nom, $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }
}