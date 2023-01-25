<?php
namespace app\models;

// Création de la classe
class Joueur extends Utilisateur{
    //Déclaration des méthodes
    public function lancerPartie() : void{
        
    }
}

$joueur = new Joueur($id_user);
$joueur->lancerPartie();
?>
