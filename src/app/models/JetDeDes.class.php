<?php
namespace app\models;

// Création de la classe
abstract class JetDeDes extends Jeu{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        protected ?int $nb_des = null,
        protected ?int $nb_lancer_des = null,
        public ?array $tableDeParLancer = array()
    )
    {
        $this->nb_des = $nb_des;
        $this->nb_lancer_des = $nb_lancer_des;
    }
    
    public function lancerDes() : void{
        
    }
}

$lancerdede = new JetDeDes();
$lancerdede->lancerDes();


?>
