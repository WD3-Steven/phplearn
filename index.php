<?php

// Exo 1

// Partie 1: Création de Variables et de Tableaux

$age = 21;
$scores = [52 , 88 , 15];

// Partie 2: Conditions

echo ($age > 18) ? "Vous êtes majeur !" . "\n" : "Vous êtes mineur !" . "\n" ;
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
echo "Le carré de $nombre est $resultat.\n";

// Partie 3: var_dump et readline

const PI = (3.14159);
$rayon = 5;
$circonference = 2 * PI * $rayon;
echo "La circonférence d'un cercle de rayon $rayon est : $circonference.\n";

// Exercice 3: Fonctions String, var_dump, echo, readline

// Partie 1: Fonctions String

$mot = "Il n'y a que le travail qui paye.";
$longueur = strlen($mot);
echo "La longueur de la chaîne est : " . $longueur . "\n";
$reverse = strrev($mot);
echo "Le reverse de la chaîne est : " . $reverse. "\n";

// Partie 2: var_dump et readline

$userNumber = readline ('Entrez un nombre :');
var_dump ($userNumber);

// Exercice 4: Boucle foreach, Switch et Ternaire

// Partie 1: Création de Tableaux

$table_asso = [
    'eleves' => [
        'Alice' => [
            'notes' => [90]
        ],
        'Bob' => [
            'notes' => [85]
        ],
        'Charlie' => [
            'notes' => [78]
        ],
    ]
    ];

$table_month = [

];