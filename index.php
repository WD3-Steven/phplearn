<?php

// Exo 1

// Partie 1: Création de Variables et de Tableaux

$age = 21;
$scores = [52 , 88 , 15];

// Partie 2: Conditions

echo ($age > 18) ? "Vous êtes majeur !" . "\n" : "Vous êtes mineur !" . "\n" ;
echo "". "\n";
$bestScore = $scores[0];
foreach ($scores as $score) {($score > $bestScore) ? ($bestScore = $score)  :   "". "\n";};
echo "Le plus haut score est : $bestScore" . "\n";


// Exercice 2: Boucles, Fonctions et Constantes

// Partie 1: Boucles

for ($i = 1; $i <= 10; $i++){echo $i . "" ;};
echo ""."\n";

// Partie 2: Fonctions

function carre($nombre) {
    return $nombre * $nombre;
}

$nombre = (5);
$resultat = carre($nombre);
echo "Le carré de $nombre est $resultat\n";

// Partie 3: var_dump et readline

