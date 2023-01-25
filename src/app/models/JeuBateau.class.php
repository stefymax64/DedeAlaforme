<?php
namespace app\models;

// Création de la classe
class JeuBateau{
    // Déclaration des constantes
    const BATEAU = 6;
    const CAPITAINE = 5;
    const EQUIPAGE = 4;
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        private ?bool $bateau = false,
        private ?bool $capitaine = false,
        private ?bool $equipage = false,
        private ?bool $equipage_complet = false
        
    )
    {}
    
}

$jeu_bateau = new JeuBateau();


?>
