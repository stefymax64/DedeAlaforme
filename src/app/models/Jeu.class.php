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

    public function afficherClassement() : void{
        
    }

    public function top3() : void{

    }
}

$jeu = new Jeu();
$jeu->afficherClassement();
$jeu->top3();

?>
