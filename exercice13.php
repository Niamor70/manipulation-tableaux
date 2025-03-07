<!doctype html>
<html lang="fr">
<head>
    <!-- CodeColliders 2020 - Exercice PHP -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux PHP - Exercice 13</title>
</head>
<body>
<h1>Exercices Tableaux PHP</h1>
<?php
/**
 * Cours-Exercices sur les tableaux PHP
 */

$statistiquesJournalieres = [222, 293, 210, 123, 171, 147, 204, 246, 257, 204, 165, 236, 287, 120, 294, 206, 162, 211,
    262, 195, 202, 154, 115, 178, 200, 114, 113, 256, 216, 278, 113, 211, 272, 106, 251, 146, 129, 293, 125, 250, 268,
    278, 231, 110, 123, 233, 293, 134, 101, 129, 300, 202, 296, 285, 147, 129, 290, 263, 193, 189, 112, 263, 283, 105,
    227, 225, 165, 221, 289, 141, 298, 172, 125, 119, 277, 165, 147, 183, 151, 214, 277, 250, 190, 181, 121, 100, 161,
    164, 104, 269, 278, 276, 244, 170, 143, 158, 217, 283, 227, 220, 281, 166, 224, 292, 214, 182, 164, 174, 197, 294,
    205, 192, 291, 143, 128, 174, 234, 203, 255, 256, 137, 136, 292, 275, 153, 228, 165, 248, 170, 240, 152, 185, 108,
    258, 269, 199, 153, 144, 126, 272, 123, 179, 163, 174, 229, 208, 300, 184, 111, 243, 162, 299, 269, 241, 250, 122,
    255, 204, 256, 166, 230, 189, 220, 152, 195, 184, 135, 270, 113, 224, 266, 153, 161, 287, 267, 186, 261, 151, 204,
    184, 118, 263, 226, 247, 286, 246, 134, 184, 156, 239, 173, 152, 271, 123, 295, 178, 243, 260, 128, 116, 157, 132,
    297, 236, 186, 274, 260, 252, 261, 151, 240, 141, 224, 209, 204, 240, 163, 197, 170, 174, 264, 115, 294, 100, 202,
    175, 201, 249, 275, 280, 205, 184, 186, 182, 124, 305, 250, 197, 203, 247, 245, 227, 105, 188, 164, 178, 117, 235,
    212, 208, 242, 281, 292, 228, 181, 224, 183, 115, 215, 233, 175, 118, 137, 158, 231, 246, 295, 291, 297, 272, 149,
    291, 249, 103, 232, 201, 235, 279, 148, 180, 148, 266, 118, 189, 297, 263, 116, 268, 118, 156, 220, 172, 111, 157,
    163, 181, 152, 197, 186, 237, 213, 128, 149, 248, 228, 161, 111, 135, 122, 214, 136, 136, 258, 260, 209, 177, 257,
    103, 273, 236, 203, 151, 134, 207, 143, 297, 153, 270, 230, 172, 183, 224, 214, 194, 141, 190, 134, 230, 167, 204,
    118, 285, 246, 105, 131, 198, 243, 184, 129, 169, 176, 228, 286, 124, 99, 116, 159, 188, 264, 247, 125, 241, 228,
    290, 197];

/**
 * Exercice 13:
 * Le tableau $statistiquesJournalieres ci-dessus contient le nombre de visiteur journalier d'un site Internet pour les
 * 365 derniers jours. A l'aide de PHP, déterminer et afficher :
 * - la valeur la plus grande
 * - la valeur la plus petite
 * - le total cumulé du nombre de visiteur sur les 365 derniers jours
 * - la moyenne journalière (calcul à réaliser: nombre total de visiteur divisé par le nombre de jours)
 */
echo '<h2>Exercice 13</h2>';
echo 'max: '.max($statistiquesJournalieres).'<br>';
echo 'min: '.min($statistiquesJournalieres).'<br>';
echo 'moyenne: '.round(array_sum($statistiquesJournalieres)/count($statistiquesJournalieres), 2).'<br>';
?>
</body>
</html>
