<!doctype html>
<html lang="fr">
<head>
    <!-- CodeColliders 2020 - Exercice PHP -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP - Partie 2 - Exercice</title>
</head>
<body>
<h1>Exercices Tableaux PHP</h1>
<?php

$chars = "azertyuiopmlkjhgfdsqxwcvbnAZERTYUIOPMLKJHGFDSQXWCVBN?:;.+-*";
$password = '';
$length = 16;

/**
 * Exercice 7:
 * Une chaine de caractères pêut être utilisée comme un tableau de caractères.
 * exemple : echo $chars[1]; // affiche la lettre z
 *
 * Générer dans la variable $password un mot de passe de longueur $length
 * utilisant au hasard les caractères présents dans la chaine $chars
 * ps: un même charactère peut être utilisé plusieurs fois
 * utiliser la fonction mt_rand() : https://www.php.net/manual/fr/function.mt-rand.php
 */
echo '<h2>Exercice 7</h2>';

// écrire le code ici
for ($i = 0; $i < $length ; $i++) {
    $password .= $chars[mt_rand(0, strlen($chars)-1)];
}

echo 'Mot de passe : ' . $password;

?>
</body>
</html>
