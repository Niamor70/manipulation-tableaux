<!doctype html>
<html lang="fr">
<head>
    <!-- CodeColliders 2020 - Exercice PHP -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP - Exercices 1 à 7</title>
</head>
<body>
<h1>Exercices Tableaux PHP</h1>
<?php
/**
 * Cours-Exercices sur les tableaux PHP
 *
 * il y a deux façon d'instancier une variable de type tableau (array) :
 * $variable = array();
 * ou
 * $variable = [];
 */
$joursSemaine = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];

/**
 * Voici une variable de type tableau contenant les 7 jours de la semaine.
 * Le tableau contient ici 7 valeurs ayant pour index de 0 à 6.
 * Exemple :
 * la valeur "Dimanche" du tableau $joursSemaine a pour index 0
 * la valeur "Mercredi" du tableau $joursSemaine a pour index 3
 *
 * pour accéder à une valeur du tableau, on utilise son index de la façon suivante:
 * $joursSemaine[0]; // ce code retourne la valeur du tableau contenue en position 0
 * de la même façon, à l'aide de la fonction echo(), on peut afficher cette valeur :
 * echo $joursSemaine[0]; // ce code affiche la valeur du tableau contenue en position 0
 */

/**
 * Exercice 1:
 * Afficher ci-dessous dans la page le jour de la semaine ayant pour index 5.
 * Utiliser une balise HTML paragraphe.
 */
echo '<h2>Exercice 1</h2>';

/**
 * Exercice 2:
 * Grâce à la fonction date(), on récupère dans la variable $indexAujourdhui l'index de 0 à 6 du jour actuel de la semaine.
 * Utiliser la fonction echo(), le tableau $joursSemaine et la variable $indexAujourdhui pour afficher le jour actuel.
 * Utiliser une balise HTML paragraphe.
 */
echo '<h2>Exercice 2</h2>';
$indexAujourdhui = date("w");

/**
 * Exercice 3:
 * Pour vérifier ce que contient un tableau, on peut utiliser les fonctions print_r(); ou var_dump();
 * https://www.php.net/manual/fr/function.print-r.php
 * https://www.php.net/manual/fr/function.var-dump.php
 * A l'aide d'une de ces deux fonctions, afficher le contenu du tableau $joursSemaine dans une balise HTML pre.
 */
echo '<h2>Exercice 3</h2>';

/**
 * Exercice 4:
 * Les weekends ne sont pas assez longs !!
 * Dans le tableau $joursSemaine, remplacer la valeur "Lundi" par "Encore dimanche", à l'aide de son index et en
 * utilisant un opérateur d'affectation.
 * exemple de syntaxe: $monTableau[123] = "Nouvelle valeur"; // affecte la valeur "Nouvelle valeur" à l'index 123
 * du tableau $monTableau
 */
echo '<h2>Exercice 4</h2>';

/**
 * Exercice 5:
 * Répéter l'exercice 3 pour vérifier que l'exercice 4 est correctement réalisé.
 */
echo '<h2>Exercice 5</h2>';

/**
 * Exercice 6:
 * A l'aide d'une boucle for, parcourir le tableau et afficher l'ensemble de ses valeurs dans une liste à puces (balises
 * HTML ul et li).
 * Vous pouvez utiliser la fonction count() pour compter le nombre d'element d'un tableau.
 */
echo '<h2>Exercice 6</h2>';

/**
 * Exercice 7:
 * Répétez l'exercice 6 à l'aide d'une boucle foreach :
 * foreach fournit une façon simple de parcourir des tableaux et permet de répéter l'execution d'une portion de code
 * pour chaque valeur d'un tableau
 *   foreach ($monTableau as $maValeur){
 *     // code à répéter
 *   }
 * pour en savoir plus: https://www.php.net/manual/fr/control-structures.foreach.php
 */
echo '<h2>Exercice 7</h2>';

?>
</body>
</html>
