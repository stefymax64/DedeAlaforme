<?php
namespace app\models;

// Création de la classe
class Joueur extends Utilisateur{
    //Déclaration des méthodes
    public function lancerPartie() : void{
        $partie = new Partie(date("d/m/Y H:i:s"), 0, false);
            echo "Démarrer la partie";
    }
}
//Instanciation de l'objet
$joueur = new Joueur($id_user);

//Appel de la méthode de l'objet
$joueur->lancerPartie();
?>
