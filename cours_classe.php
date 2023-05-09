<?php 
/*
    Les classes c'est un concept fondamental de la programmation orientée objet (POO)
    En PHP, une classe c'est un modele ou un plan qui définit les propriétés et les méthodes que les objets de cette classe auront.
    Une fois définie, une classe peut être instanciée pour créer des objets.

    Exemple pour la classe voiture :
*/
// class Voiture {
//     // Propriétés
//     public $marque;
//     public $modele;
//     public $annee;

//     // Méthodes
//     public function demarrer() {
//         echo 'La voiture démarre.<br/>';
//     }

//     public function arreter() {
//         echo "La voiture s'arrête.<br/>";
//     }

//     public function accelerer($vitesse) {
//         echo "La voiture accélère à $vitesse km/h.<br/>";
//     }
// }
// /*
//     Pour instancier un objet de la classe Voiture, on peut utiliser le mot-clé 'new' suivi du nom de la classe :
// */
// $maVoiture = new Voiture();
// /*
//     Une fois l'objet créé, on peut accéder à ses propriétés et méthodes en utilisant l'opérateur ->
//     Par exemple :
// */
// $maVoiture->marque = 'Renault';
// $maVoiture->modele = 'Clio';
// $maVoiture->annee = 2014;

// $maVoiture->demarrer();
// $maVoiture->accelerer(50);
// $maVoiture->accelerer(75);
// $maVoiture->arreter();

/*
    Il est également possible de définir des méthodes constructeur et destructeur pour une classe.
    La méthode constructeur est appelée automatiquement lorsqu'un objet est créé.
    La méthode destructeur est appellée automatiquement lorsqu'un objet est détruit.

    Voici un exemple, avec notre classe Voiture.
*/
class Voiture {
    // Propriétés
    public $marque;
    public $modele;
    public $annee;

    // Constructeur
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    // Destructeur
    public function __destruct() {
        echo "L'objet voiture à été détruit.<br/>";
    }

    // Méthodes
    public function modeleVoiture() {
        echo "Le modèle de la voiture est : ".$this->modele." <br/>";
    }

    public function demarrer() {
        echo 'La voiture démarre.<br/>';
    }

    public function arreter() {
        echo "La voiture s'arrête.<br/>";
    }

    public function accelerer($vitesse) {
        echo "La voiture accélère à $vitesse km/h.<br/>";
    }
}

$maVoiture = new Voiture("Renault", "Clio", 2014);
$maVoiture->modeleVoiture();
$maVoiture->accelerer(50);
$maVoiture->accelerer(75);
$maVoiture->arreter();

// Utiliser la méthode destruct avec unset()
/* `unset();` is destroying the object `` and freeing up the memory it was using.
This will also trigger the destructor method of the `Voiture` class, which in this case will output
the message "L'objet voiture à été détruit." to the screen. */
unset($maVoiture);

/*
    En PHP, les mots-clés public et private sont utilisés pour définir la portée des propriétés et des méthodes d'une classe.

    La portée public signifie que la propriété ou méthode peut être accéder de n'importe où dans le code, y compris en dehors de la classe.

    Par exemple :
*/
// class Personne {
//     public $nom;

//     public function parler() {
//         echo "Bonjour, je m'apelle ".$this->nom.".<br/>";
//     }
// }
// $personne = new Personne();
// $personne->nom = "Dupont";
// $personne->parler(); // Affiche : Bonjour, je m'apelle Dupont.
/*
    Dans cet exemple, la propriété $nom et la méthode parler() sont définies comme public, ce qui permet à ces éléments d'être accessibles de n'importe ou dans le code.

    La portée private signifie que la propriété ou méthode ne peut être accéder QUE de l'intérieur de la classe ou elle est définie. 
    Cela permet de s'assuer de l'encapsulation des données et d'empecher l'accés direct aux propriétés de l'extérieur de la classe.

    Par exemple :
*/
// class Personne { 
//     private $nom;

//     public function __construct($nom) {
//         $this->nom = $nom;
//     }

//     public function parler() {
//         echo "Bonjour je m'apelle ".$this->nom.".<br/>";
//     }
// }
// $personne = new Personne("Dupont");
// $personne->parler(); // Afficher : Bonjour, je m'apelle Dupont.
// echo $personne->nom; // Erreur : Impossible d'acéder à la propriété privée Personne::$nom


/*
    Les getters et les setters

    Les getters et les setters sont des méthodes utilisées pour accéder et modifier les propriétés d'un objet en PHP.
    Ils sont souvent utilisés pour contrôler l'accés aux propriétés d'un objet et pour appliquer des règles de validation ou de formatage.

    Un getter est une méthode qui permet d'accéder à la valeur d'une propriété privée d'un objet.
    Il est généralement nommé avec le préfixe "get" suivi du nom de la propriété.

    Par exemple, si on a une propriété $nom définie comme privée dans une classe, on peut définir une méthode getter getNom() pour y accéder.

    Un exemple :
*/
class Personne {
    private $nom;

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
}
$personne = new Personne();
$personne->setNom('John');
// echo $personne->nom; // Erreur
echo $personne->getNom(); // Affiche : John
/*
    Dans cet exemple, la classe Personne définit une propriété privée $nom et deux méthodes publiques getNom() et setNom() pour accéder et modifier cette propriété.
    La méthode getNom() retourne la valeur de la propriété $nom, tandis que la méthode setNom() permet de modifier la valeur de la propriété $nom.

    Un setter est une méthode qui permet de modifier la valeur d'une propriété privée d'un objet. Il est généralement nommé avec le préfixe "set" suivi du nom de la propriété. 
    Par exemple, si on a une propriété $nom définie comme privée dans une classe, on peut définir une méthode setter setNom($nom) pour la modifier.

    Les getters et les setters sont souvent utilisés ensemble pour contrôler l'accès aux propriétés d'un objet.
    Par exemple, on peut ajouter des règles de validation dans la méthode setter pour s'assurer que la valeur assignée à la propriété est valide, et on peut ajouter des règles de formatage dans la méthode getter pour retourner la valeur de la propriété dans un format spécifique.

    Il est important de noter que l'utilisateion de getters et setters n'est PAS OBLIGATOIRE en PHP, mais elle est recommandée pour maintenir la cohérance dans le code.
*/
?>