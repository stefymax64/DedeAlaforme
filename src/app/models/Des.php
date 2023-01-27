<?php
namespace app\models;

interface ValeurdeDes{
    public function faceDes();
}
// Création de la classe
class Des implements ValeurdeDes{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
    private ?int $nb_face = null,
    private ?int $image_face = null,
    private ?array $tab_face,
    )
    {
        $this->$tab_face = array();
        for($i = 1; $i <= count($tab_face); $i++){
            $this->tab_face[] = $i;
        }
    }

   //Accesseurs
   public function __set($name, $value)
   {
       $this->$name = $value;
   }

   public function __get($name){
       return $this->name;
   }

   public function faceDes(){

   }
}

//Instanciation de l'objet
$des = new Des(6,1,[]);

//Appel de la propriété de l'objet
$this->nb_face;
$this->image_face;
$this->tab_face;

//Appel de la méthide de l'objet
$des->faceDes();
?>