<?php
namespace app\models;

class Partie{
    // Déclaration des attributs
    private string $date_heure;
    private int $score;

    //Déclaration des méthodes
    public function partie() : bool{
        return true;
    }
}


?>
