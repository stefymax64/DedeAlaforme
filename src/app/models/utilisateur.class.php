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
    {
        $this->id_user = $id_user;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->droit = $droit;
    }

    public function connecter() : bool {
        return true;
    }

    public function deconnecter() : bool {
        return true;
    }

    public function inscription($id_user) : void{
        
    }
}

$utilisateur = new Utilisateur($id_user);
$utilisateur->connecter();
$utilisateur->deconnecter();
$utilisateur->inscription($id_user);

?>
