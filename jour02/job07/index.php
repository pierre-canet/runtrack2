<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    
   <?php
        $hauteur = 5;
        for ($i = 1; $i <= $hauteur; $i++) {
    
            for ($etoile = 1; $etoile <= (2 * $i - 1); $etoile++) {
            echo  "*";
            }

            echo "<br>";
        }
    ?>
    
</body>
</html>