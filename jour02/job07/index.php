<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job06</title>
</head>
<body>
   <?php
$hauteur = 5;
for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces insécables
    for ($espace = 1; $espace <= $hauteur - $i; $espace++) {
        echo "&nbsp;";
    }

    // Étoiles
    for ($etoile = 1; $etoile <= (2 * $i - 1); $etoile++) {
        echo "*";
    }

    echo "<br>";
}
?>
    
</body>
</html>