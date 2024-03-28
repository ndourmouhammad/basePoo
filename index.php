<?php
require_once ('voiture.php');
require_once ('vehicule.php');
require_once ('moto.php');








// creation de l'instance moto électrique
$MotoElectrique = new Moto(2, 'noir', 500000);

// Instanciation de la classe Voiture
$voiture1 = new Voiture('Mercedes', 'Classe B 160', 80518, 2016);
$voiture1->setMarque('Ford');
$voiture1->setModele('F150');
$voiture1->setKilometrage(1200);
$voiture1->setAnnee('1972');

// Appel des méthodes
$voiture1->afficherDetails();

//Affichage des détails de la moto
$MotoElectrique->Details();




