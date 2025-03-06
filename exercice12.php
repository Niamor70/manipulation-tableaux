<!doctype html>
<html lang="fr">
<head>
    <!-- CodeColliders 2020 - Exercice PHP -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP - Exercice 12</title>
</head>
<body>
<h1>Exercices Tableaux PHP</h1>
<?php
/**
 * Cours-Exercices sur les tableaux PHP
 */

$tableDe = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$nombres = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

/**
 * Exercice 12:
 * à l'aide de boucles foreach, parcourir le tableau $nombres pour afficher la table de multiplication de chacune des
 * valeurs contenues dans le tableau $tableDe
 * Chaque ligne du résultat généré doit ressembler à l'extrait suivant : "6 * 2 = 12"
 */
echo '<h2>Exercice 12</h2>';

foreach ($tableDe AS $t) {
    echo '<h2>Table de '.$t.'</h2>';
    foreach ($nombres as $nombre) {
        $resultat = $nombre * $t;
        echo $nombre." * ".$t." = ".$resultat."<br>";
    }
}

?>
</body>
</html>
