<?php
namespace app\models;

// Création de la classe
abstract class JeuDeDes extends Jeu implements ValeurdeDes{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        protected ?int $nb_des = null,
        protected ?int $nb_lancer_des = null,
        private ?array $tableDeParLancer = array(),
        private ?array $tab_des = array(),
    )
    {
        $this->nb_des = $nb_des;
        $this->nb_lancer_des = $nb_lancer_des;
        $this->tableDeParLancer = $tableDeParLancer;
        $this->tab_des = $tab_des;

        
    }

   //Accesseurs
   public function __set($name, $value)
   {
       $this->$name = $value;
   }

   public function __get($name){
       return $this->name;
   }

    public function lancerDes() : void{
        
    }

    public function faceDes(){

    }

    //Créer un compteur qui décompte le $nb_lancer_des et lancerDes() et traitementLancer()
    public function jetDeDes(){
        while($this->nb_lancer_des > 0){
            $this->lancerDes();
            $this->traitementLancer();
            $this->nb_lancer_des--;
        }
    }

    //Méthode qui sera appelée dans JeuBateau lors du lancer de dès
    abstract protected function traitementLancer();
}

//Instanciation de l'objet
$lancerdede = new JeuDeDes();

//Appel de la propriété de l'objet
$this->nb_des;
$this->nb_lancer_des;
$this->tableDeParLancer;
$this->tab_des;

//Appel de la méthide de l'objet
$lancerdede->lancerDes();
$lancerdede->jetDeDes();
$lancerdede->faceDes();
?>
