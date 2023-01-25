<?php
namespace app\models;

// Création de la classe
abstract class JeuDeDes extends Jeu{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        protected ?int $nb_des = null,
        protected ?int $nb_lancer_des = null,
        public ?array $tableDeParLancer = array(),
    )
    {
        $this->nb_des = $nb_des;
        $this->nb_lancer_des = $nb_lancer_des;
        $this->tableDeParLancer = $tableDeParLancer;
    }

   //Accesseurs
   public function __set($name, $value)
   {
       $this->$name = $value;
   }

   public function __get($name){
       return $this->name;
   }
    
   //Lancer les dès avec un radom de 1 à 6(chiffres des dès) et enregistre le résultat de chaque itération
   //dans le tableau $tableDeParLancer
    public function lancerDes() : void{
        for($i=0; $i<6;$i++){
            $rand=rand(1,6);
        }
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

$lancerdede = new JeuDeDes();
$lancerdede->lancerDes();
$this->nb_des;
$this->nb_lancer_des;
$this->tableDeParLancer;

?>
