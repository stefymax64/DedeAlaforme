<?php
namespace app\models;

// Création de la classe
class Partie{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        private ?string $date_heure = null,
        private ?int $score = null,
        private ?bool $gagner = false
    )
    {}
    
}


?>
