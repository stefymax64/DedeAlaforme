<?php
namespace app\models;

class JeuBateau{
       
    public function __construct(
        // Déclaration des attributs
        private ?bool $capitaine = null,
        private ?bool $equipage = null,
        private ?bool $bateau = null,
        private ?bool $equipage_complet = null
    )
    {}
}


?>
