<?php
namespace app\models;

// Création de la classe
abstract class Jeu extends Partie{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        protected ?string $regles = null
    )
    {
        $this->regles = $regles;
    }

    //Accesseurs
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name){
        return $this->name;
    }

    //Méthodes
    public function afficherClassement() : void{
        
    }

    public function top3() : void{

    }
}

//Instanciation de l'objet
$jeu = new Jeu();

//Appel de la propriété de l'objet
$this->regles;

//Appel de la méthide de l'objet
$jeu->afficherClassement();
$jeu->top3();

?>
