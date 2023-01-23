<?php
namespace app\models;

class Partie{
    // Déclaration des attributs
    private string $date_heure;
    private int $score;

    //Déclaration des méthodes
    public function __construct(
        private int $id_user,
        protected ?string $login = null,
        private ?string $mdp = null,
        private ?string $droit = null
        
    )
    {
        
    }
}


?>
