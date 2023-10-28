Exercice 1: Variables, Tableaux et Conditions

Partie 1: Création de Variables et de Tableaux

Créez une variable nommée age et attribuez-lui votre âge.

Créez un tableau nommé scores contenant les résultats de trois jeux que vous avez joués (par exemple, 85, 92, 78).

Partie 2: Conditions

Utilisez une condition pour vérifier si votre âge est supérieur à 18. Si c'est le cas, affichez "Vous êtes majeur !" avec echo, sinon, affichez "Vous êtes mineur !".

Utilisez une condition pour trouver le meilleur score dans le tableau scores et affichez-le avec echo.

Exercice 2: Boucles, Fonctions et Constantes

Partie 1: Boucles

Utilisez une boucle for pour afficher tous les nombres de 1 à 10 avec echo.
Partie 2: Fonctions

Créez une fonction nommée carre qui prend un nombre en entrée et retourne son carré. Utilisez cette fonction pour afficher le carré de 5.
Partie 3: Constantes

Définissez une constante nommée PI avec la valeur de 3.14159. Utilisez cette constante pour calculer la circonférence d'un cercle de rayon 5 et affichez le résultat.
Exercice 3: Fonctions String, var_dump, echo, readline

Partie 1: Fonctions String

Créez une variable mot et attribuez-lui une chaîne de caractères de votre choix.

Utilisez la fonction strlen pour trouver la longueur de la chaîne et affichez-la avec echo.

Utilisez la fonction strrev pour inverser la chaîne et affichez-la avec echo.

Partie 2: var_dump et readline

Utilisez readline pour demander à l'utilisateur de saisir un nombre.

Utilisez var_dump pour afficher le type et la valeur de la saisie de l'utilisateur.

Exercice 4: Boucle foreach, Switch et Ternaire

Partie 1: Création de Tableaux

Créez un tableau associatif nommé eleves contenant les noms de trois élèves en tant que clés et leurs notes en tant que valeurs (par exemple, "Alice" avec la note 90, "Bob" avec la note 85, "Charlie" avec la note 78).

Créez un tableau numéroté nommé mois contenant les noms des douze mois de l'année.

Partie 2: Boucle foreach

Utilisez une boucle foreach pour parcourir le tableau eleves et afficher le nom de chaque élève suivi de sa note. Par exemple, "Alice a obtenu 90 points."

Utilisez une boucle foreach pour parcourir le tableau mois et affichez les mois de l'année un par un.

Partie 3: Switch et Ternaire

Utilisez readline pour demander à l'utilisateur de saisir le nom d'un élève.

Utilisez une structure switch pour vérifier la note de l'élève et affichez "Excellent !" si la note est supérieure ou égale à 90, "Bien !" si elle est supérieure ou égale à 70, sinon "À améliorer."

Utilisez une condition ternaire pour vérifier si un mois saisi par l'utilisateur a 31 jours ou non. Affichez "31 jours" ou "30 jours" en conséquence.

Exercice 5: Fonction avec Boucles Complexes

Partie 1: Création d'une Fonction et d'un Tableau

Créez une fonction nommée tableMultiplication qui prend un seul argument, un nombre entier n.

Dans cette fonction, créez un tableau nommé resultats qui contiendra les résultats de la multiplication de n par les nombres de 1 à 10.

Partie 2: Remplissage du Tableau avec une Boucle

À l'intérieur de la fonction tableMultiplication, utilisez une boucle for pour remplir le tableau resultats avec les résultats de la multiplication de n par les nombres de 1 à 10.
Partie 3: Affichage des Résultats

À l'intérieur de la fonction tableMultiplication, utilisez une boucle foreach pour parcourir le tableau resultats et affichez les résultats sous forme de table de multiplication. Par exemple, si n est 7, affichez "7 x 1 = 7", "7 x 2 = 14", et ainsi de suite jusqu'à "7 x 10 = 70".
Partie 4: Appel de la Fonction

En dehors de la fonction, appelez tableMultiplication avec un nombre de votre choix (par exemple, 5) pour afficher la table de multiplication de ce nombre.

Exercice Final : Mini Jeu Vidéo en Terminal

Imaginez un mini jeu vidéo simple qui peut être implémenté dans le terminal. Le joueur sera capable de se déplacer dans une zone en utilisant des commandes simples (nord, sud, est, ouest), et il y aura des objets à collecter. Le but est de collecter tous les objets pour gagner.

Règles du Jeu :

Le joueur commence au centre d'une zone de jeu.
Le joueur peut se déplacer en utilisant les commandes "n" (nord), "s" (sud), "e" (est), ou "w" (ouest).
Le joueur peut collecter des objets en se déplaçant sur la case où se trouve un objet.
Le joueur gagne s'il collecte tous les objets présents dans la zone de jeu.
Le joueur perd s'il quitte la zone de jeu.
Mise en œuvre :

Créez une zone de jeu virtuelle, représentée par une matrice (tableau 2D) où chaque case contient l'information sur la présence d'un objet.
Placez le joueur au centre de la zone de jeu.
Placez un certain nombre d'objets aléatoirement dans la zone de jeu.
Créez une boucle principale qui permet au joueur de se déplacer, de collecter des objets et de vérifier s'il a gagné ou perdu.
Utilisez les commandes "n", "s", "e", "w" pour déplacer le joueur.
Affichez la zone de jeu à chaque tour, en montrant la position du joueur et des objets.
Informez le joueur lorsqu'il collecte un objet.
Informez le joueur s'il a gagné ou perdu.
Ajoutez une condition pour vérifier si le joueur a gagné en collectant tous les objets ou s'il a perdu en quittant la zone de jeu.