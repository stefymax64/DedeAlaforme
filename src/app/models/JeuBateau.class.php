<?php
namespace app\models;

// Création de la classe
class JeuBateau extends JetDeDes{
    // Déclaration des propriétés
    const VALEUR_DE_BATEAU = 6;
    const VALEUR_DE_CAPITAINE = 5;
    const VALEUR_DE_EQUIPAGE = 4;
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        private ?bool $bateau = false,
        private ?bool $capitaine = false,
        private ?bool $equipage = false,
        private ?bool $equipage_complet = false
        
    )
    {
        $this->bateau = $bateau;
        $this->capitaine = $capitaine;
        $this->equipage = $equipage;
        $this->equipage_complet = $equipage_complet;
    }
    
}

$jeu_bateau = new JeuBateau();

?>
