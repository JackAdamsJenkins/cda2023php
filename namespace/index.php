<?php 
require_once 'Produit.php';
require_once 'Categorie.php';



use App\Produits\Produit;
use App\Categories\Categorie;

$produit = new App\Produits\Produit("Ordinateur portable", 1200);
$categorie = new Categorie("Electronique");

echo "Nom du produit : {$produit->getNom()} <br/>";
echo "Nom du produit : {$produit->getPrix()} <br/>";
echo "Nom du produit : {$categorie->getNom()} <br/>";

?>