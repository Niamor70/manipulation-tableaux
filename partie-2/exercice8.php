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

$resultats = [
    "Simon" => [
        "age" => 25, // en années
        "tempsCoures" => 30, // en minutes
    ],
    "Jean" => [
        "age" => 35, // en années
        "tempsCoures" => 45, // en minutes
    ],
    "Claire" => [
        "age" => 19, // en années
        "tempsCoures" => 90, // en minutes
    ],
    "Anne-Lise" => [
        "age" => 18, // en années
        "tempsCoures" => 68, // en minutes
    ],
    "Lucie" => [
        "age" => 43, // en années
        "tempsCoures" => 35, // en minutes
    ],
    "Bernard" => [
        "age" => 50, // en années
        "tempsCoures" => 40, // en minutes
    ],
];

/**
 * Exercice 8:
 * Le tableau $resultats contient les résultats d'une course à pied. Calculer et afficher le temps de course moyen pour
 * les participants ayant plus de 30 ans.
 */
echo '<h2>Exercice 8</h2><pre>';

$temps = [];
foreach ($resultats as $prenom => $resultat) {
    if ($resultat['age'] > 30) {
        $temps[] = $resultat['tempsCoures'];
    }
}
echo array_sum($temps)/count($temps);

?>
</body>
</html>
