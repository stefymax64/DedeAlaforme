<?php
namespace app\models;

class JeuDeDes{
    // Déclaration des attributs
    public int $nb_des;
    public int $nb_lancer_des;
    private array $tableDeParLancer;

    //Déclaration des méthodes
    public function JeuDeDes() : bool{
        return true;
    }
}


?>
