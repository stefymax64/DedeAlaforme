<?php
    class Personne{
        private string $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        private function traitementX(){
            $this->name = "Bonjour " .$this->name;
        }

        public function getName(){
            $this->traitementX();
            return $this->name;
        }
    }
    //Sur index.php on instancie l'objet
    /*
    $sp1 = new Personne('Elodie');
    $sp1->getName(); => Bonjoru Elodie
    $sp1->traitementX(); => affichera une erreur
    */
?>