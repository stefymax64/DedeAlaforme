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
    {
        $this->date_heure = $date_heure;
        $this->score = $score;
        $this->gagner = $gagner;
    }
    
}

$partie = new Partie();

?>
