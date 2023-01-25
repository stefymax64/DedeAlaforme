<?php
namespace app\models;

// Création de la classe
abstract class JetDeDes extends JeuBateau{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        protected ?int $nb_des = null,
        protected ?int $nb_lancer_des = null,
        public ?array $tableDeParLancer = array()
    )
    {}
    
    public function lancerDes() : void{
        
        parent::lancerDes();
    }
}



?>
