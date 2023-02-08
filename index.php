<?php
//http://localhost/exo/J11-EXO-OBJET/3-Exercices-PHP-OOP-Heritage-master/index.php


// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
require "classes/personnage.php";
require "classes/dragon.php";
require "classes/princesse.php";

//NE PAS OUBLIER DE LES INCLURE DANS LE FICHIER POUR LES LIER


// Creation d'une instance de la classe personnage
$personnage1 = new personnage();
echo $personnage1->getVie();

// Creation d'une instance de la classe dragon
echo "<br><br>";

$dragon1 = new dragon();
echo $dragon1->getVie();



