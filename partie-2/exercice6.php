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

/**
 * Exercice 6:
 * A l'aide d'une boucle et d'une condition, afficher un tableau HTML contenant la liste des élèves et leurs
 * notes, pour les élèves ayant une note supérieure ou égale à 10.
 */
echo '<h2>Exercice 6</h2>';

echo '<table border="1">';
foreach ($notes as $prenom => $note) {
    if ($note >= 10) {
        echo '<tr><td>' . $prenom . '</td><td>' . $note . '</td></tr>';
    }
}
echo '</table>';

?>
</body>
</html>
