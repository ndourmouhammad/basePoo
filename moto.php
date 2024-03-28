<?php

// Faire l'héritag de la classe Moto de la classe Vehicule
require_once('vehicule.php');
class Moto extends Vehicule {
    private $prix;

    public function __construct($nbpneues, $couleur,$prix){

        parent::__construct($nbpneues, $couleur);
        $this->prix = $prix;
    }
    public function Demarrer(){
        var_dump('Attention je vais demarrer');
    }
    public function Details(){
        var_dump("Hello, je suis une moto, j'ai $this->nbpneues roues, je suis de couleur $this->couleur et je coûte : $this->prix FCFA");
    }
}