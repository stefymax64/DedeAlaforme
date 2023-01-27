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

    //Accesseurs
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name){
        return $this->name;
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

//Instanciation de l'objet
$utilisateur = new Utilisateur($id_user);

//Appel de la propriété de l'objet
$this->id_user;
$this->login;
$this->mdp;
$this->droit;

//Appel de la méthide de l'objet
$utilisateur->connecter();
$utilisateur->deconnecter();
$utilisateur->inscription($id_user);

?>
