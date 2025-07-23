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
        for($i = 1; $i <= $hauteur; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";
        }
?>
    
</body>
</html>