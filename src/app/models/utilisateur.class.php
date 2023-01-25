<?php
namespace app\models;

// Création de la classe
class Utilisateur{
    // Déclaration des méthodes
    public function __construct(
        // Déclaration des attributs
        private int $id_user,
        protected ?string $login = null,
        private ?string $mdp = null,
        private ?string $droit = null
    )
    {}

    public function connecter() : bool {
        return true;
    }

    public function deconnecter() : bool {
        return true;
    }

    public function inscription($id_user) : void{
        
    }
}


?>
