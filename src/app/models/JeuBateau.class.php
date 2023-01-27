<?php
namespace app\models;

// Création de la classe
class JeuBateau extends JeuDeDes{
    // Déclaration des propriétés
    
    // const NB_DES_BATEAU = 5;
    // CONST NB_LANCER_BATEAU = 3;

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
        parent::__construct(5, 3);
        
    }

    //Accesseurs
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name){
        return $this->name;
    }

    // Traitement du Lancer méthode dans JeuDeDes en décrémentation
    public function traitementLancer(){
        $this->nb_des--;
    }
    
}

//Instanciation de l'objet
$jeu_bateau = new JeuBateau();

//Appel de la propriété de l'objet
$this->bateau;
$this->capitaine;
$this->equipage;
$this->equipage_complet;

//Appel de la méthide de l'objet
$lancerdede->lancerDes();
$jeu_bateau->traitementLancer();
?>
