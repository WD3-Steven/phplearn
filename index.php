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

$eleves = [
        "Alice" => 90,
        "Bob" => 85,
        "Charlie" => 78
    ];

$mois = [
    "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", 
    "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
];

// Partie 2: Boucle foreach

foreach($eleves as $eleve => $note){
    echo "$eleve a obtenu $note points.\n";
}
foreach($mois as $moisDiff){
    echo "$moisDiff"."\n";
}

// Partie 3: Switch et Ternaire

$eleveChoice = readline ('Entrez le nom de l\'élève : ');
switch ($eleveChoice) {
    case "Alice":
        if ($eleves["Alice"] >= 90) {
            echo "Excellent !\n";
        } elseif ($eleves["Alice"] >= 70) {
            echo "Bien !\n";
        } else {
            echo "À améliorer.\n";
        }
        break;

    case "Bob":
        if ($eleves["Bob"] >= 90) {
            echo "Excellent !\n";
        } elseif ($eleves["Bob"] >= 70) {
            echo "Bien !\n";
        } else {
            echo "À améliorer.\n";
        }
        break;

    case "Charlie":
        if ($eleves["Charlie"] >= 90) {
            echo "Excellent !\n";
        } elseif ($eleves["Charlie"] >= 70) {
            echo "Bien !\n";
        } else {
            echo "À améliorer.\n";
        }
        break;
};

$monthChoice = readline("Entrez un mois : ");
$jours = ($monthChoice === "Février") ? "28 jours" : (in_array($monthChoice, ["Janvier", "Mars", "Mai", "Juillet", "Août", "Octobre", "Décembre"]) ? "31 jours" : "30 jours");

echo "$monthChoice a $jours.\n";

// Exercice 5: Fonction avec Boucles Complexes

// Partie 1: Création d'une Fonction et d'un Tableau

function tableMultiplication($n) {
    $resultats = array();

    for ($i = 1; $i <= 10; $i++) {
        $resultats[$i] = $n * $i;
    }

    return $resultats;
}
