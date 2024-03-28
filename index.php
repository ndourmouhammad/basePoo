<?php

// creation de l'interface
interface Reparable {
    public function reparer();
}

// Création de la classe Vehicule
class Vehicule
{
    public function demarrer()
    {

    }
}


//Création de la classe Voiture et l'héritage

class Voiture extends Vehicule implements Reparable
{
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;

    // Le constructeur
    public function __construct($marque, $modele, $kilometrage, $annee)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setKilometrage($kilometrage);
        $this->setAnnee($annee);
    }

    // methode détails de la voiture
    public function afficherDetails()
    {
        var_dump("La voiture de marque : $this->marque, modèle : $this->modele peut rouller jusqu'à $this->kilometrage km par heure et a été créee en $this->annee . ");
    }

    // methode klaxooner
    public function klaxonner()
    {
        var_dump("Faire du bruit");
    }

    // Implémentation de la méthode de l'interface
    public function reparer()
    {
        var_dump("Voiture réparée");
    }

    // les getters et les setters
    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($nouvelle_marque)
    {
        if (is_string($nouvelle_marque)) {
            $this->marque = $nouvelle_marque;
        }
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($nouveau_modele)
    {
        if (is_string($nouveau_modele)) {
            $this->modele = $nouveau_modele;
        }
    }

    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    public function setKilometrage($nouveau_kilometrage)
    {
        if ((is_int($nouveau_kilometrage)) && ($nouveau_kilometrage > 0)) {
            $this->kilometrage = $nouveau_kilometrage;
        }
        else {
            var_dump("Pour voir le kilometrage veuillez entrer un nombre positif");
        }
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($nouvelle_annee)
    {
        if (is_string($nouvelle_annee)) {
            $this->annee = $nouvelle_annee;
        }
    }
}

// Faire l'héritag de la classe Moto de la classe Vehicule
class Moto extends Vehicule {

}

// creation de l'instance moto électrique
$moto_electrique = new Moto();

// Instanciation de la classe Voiture
$voiture1 = new Voiture('Mercedes', 'Classe B 160', 80518, 2016);
$voiture1->setMarque('Ford');
$voiture1->setModele('F150');
$voiture1->setKilometrage(1200);
$voiture1->setAnnee('1972');


// Appel des méthodes
$voiture1->afficherDetails();
$voiture1->klaxonner();




