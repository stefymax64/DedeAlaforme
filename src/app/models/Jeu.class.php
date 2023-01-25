<?php
namespace app\models;

// Création de la classe
abstract class Jeu{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        protected ?string $regles = null
    )
    {}

    public function afficherClassement() : void{
        
    }

    public function top3() : void{

    }
}


?>
