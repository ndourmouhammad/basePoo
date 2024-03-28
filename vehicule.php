<?php

// Création de la classe Vehicule
abstract class Vehicule
{
    public $nbpneues;
    public $couleur;

    public function __construct($nbpneues, $couleur) {
        $this->nbpneues = $nbpneues;
        $this->couleur = $couleur;
    }
    public function demarrer()
    {
        echo "Le véhicule démarre.";
    }
}
