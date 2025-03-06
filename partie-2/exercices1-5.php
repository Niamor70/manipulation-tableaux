<!doctype html>
<html lang="fr">
<head>
    <!-- CodeColliders 2020 - Exercice PHP -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP - Partie 2 - Exercices 1 à 5</title>
</head>
<body>
<h1>Exercices Tableaux PHP</h1>
<?php
/**
 * Cours-Exercices sur les tableaux PHP
 *
 * Bienvenue dans la deuxième partie des exercices sur les tableaux PHP.
 *
 * Nous allons maintenant aborder la notion de tableau associatif, où on associe les valeurs à des clés.
 *
 * Exemple :
 */
$voiture = [
    "couleur" => "rouge",
    "puissance" => "33CV",
    "marque" => "Tata",
    "modele" => "Nano",
];

/**
 * pour accéder à une valeur du tableau, on utilise sa clé de la façon suivante:
 * $voiture["couleur"]; // ce code retourne la valeur contenue dans le tableau et ayant pour clé "couleur"
 * de la même façon, à l'aide de la fonction echo(), on peut afficher cette valeur :
 * echo $voiture["couleur"]; // ce code affiche la valeur contenue dans le tableau et ayant pour clé "couleur"
 */

/**
 * Exercice 1:
 * Afficher ci-dessous dans la page la marque de la voiture.
 * Utiliser une balise H3.
 */
echo '<h2>Exercice 1</h2>';
echo '<h3>'.$voiture['marque'].'</h3>';

/**
 * Exercice 2:
 * Ajouter au tableau $voiture la valeur "105km/h" ayant pour clé "vitesseMax".
 * Afficher le contenu du tableau.
 */
echo '<h2>Exercice 2</h2>';
$voiture['vitesseMax'] = "105km/h";

/**
 * Exercice 3:
 * Le tableau $notes contient la liste des notes de Math d'une classe de 6ème.
 * Afficher $notes sous forme d'un tbleau HTML (<table> ...) contenant les prénoms et les notes, à l'aide d'une boucle foreach.
 * N'hésitez pas à vous aider de la documentation PHP sur foreach pour récupérer les clés et les valeurs !
 */
echo '<h2>Exercice 3</h2>';
$notes = [
    'Simon' => 10,
    'Jeanne' => 8,
    'Marion' => 14,
    'Anaïs' => 6,
    'Rémi' => 4,
    'Éléonore' => 16,
    'Vincent' => 19,
    'Théo' => 12,
    'François' => 15,
    'Lola' => 11,
];
echo '<table border="1">';
foreach ($notes as $prenom => $note) {
    echo '<tr><td>' . $prenom . '</td><td>' . $note . '</td></tr>';
}
echo '</table>';

/**
 * Exercice 4:
 * Trier le tableau $notes par ordre décroissant (les meilleurs élèves en haut de la liste)
 * Attention chaque élève doit garder sa note !
 * Afficher à nouveau le tableau.
 * Aidez-vous de l'une de ses fonctions:
 * https://www.php.net/manual/fr/function.sort.php
 * https://www.php.net/manual/fr/function.asort.php
 * https://www.php.net/manual/fr/function.rsort.php
 * https://www.php.net/manual/fr/function.arsort.php
 * https://www.php.net/manual/fr/function.ksort.php
 * https://www.php.net/manual/fr/function.krsort.php
 */
echo '<h2>Exercice 4</h2>';

arsort($notes);

echo '<table border="1">';
foreach ($notes as $prenom => $note) {
    echo '<tr><td>' . $prenom . '</td><td>' . $note . '</td></tr>';
}
echo '</table>';
/**
 * Exercice 5:
 * Trier le tableau $notes par prénom, dans l'ordre alphabétique.
 * Attention chaque élève doit garder sa note !
 * Afficher à nouveau le tableau.
 */
echo '<h2>Exercice 5</h2>';

setlocale(LC_COLLATE, 'fr_FR.UTF-8');

ksort($notes, SORT_LOCALE_STRING);

echo '<table border="1">';
foreach ($notes as $prenom => $note) {
    echo '<tr><td>' . $prenom . '</td><td>' . $note . '</td></tr>';
}
echo '</table>';

?>
</body>
</html>
