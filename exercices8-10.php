<!doctype html>
<html lang="fr">
<head>
    <!-- CodeColliders 2020 - Exercice PHP -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP - Exercice 8 à 10</title>
</head>
<body>
<h1>Exercices Tableaux PHP</h1>
<?php
/**
 * Cours-Exercices sur les tableaux PHP
 */

$nombres = [0, 1, 2, 3];

/**
 * Exercice 8:
 * la variable nombre contient un tableau ayant pour valeurs 0, 1, 2 et 3
 * ajouter la valeur 4 au tableau contenu dans la variable $nombres
 * exemple de syntaxe : $monTableau[] = 'nouvelle valeur';
 * afficher le contenu de la variable $nombres pour contrôler le résultat (cf. exercice 3)
 */
echo '<h2>Exercice 8</h2>';

/**
 * Exercice 9:
 * Fusioner la variable $autreNombres de type tableau à la variable $nombre de type tableau à l'aide de la fonction
 * array_merge(): https://www.php.net/manual/fr/function.array-merge.php
 * afficher le contenu de la variable $nombres pour contrôler le résultat (cf. exercice 3)
 */
echo '<h2>Exercice 9</h2>';
$autresNombres = [5, 6, 7, 8, 9];

/**
 * Exercice 10:
 * Il existe de nombreuses fonctions en PHP pour manipuler les tableaux :
 * https://www.php.net/manual/fr/book.array.php
 *
 * Afin de commencer à mettre en pratique certaines de ces fonctions:
 *
 * 1/ afficher la somme des elements du tableau $nombres à l'aide de la fonction array_sum()
 * 2/ afficher le nombre d'element dans le tableau $nombre à l'aide de la fonction count()
 * 3/ à l'aie de la fonction sort() trier le tableau $nombres par ordre décroissant, puis l'afficher.
 */
echo '<h2>Exercice 10</h2>';

?>
</body>
</html>
