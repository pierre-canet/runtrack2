<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php       
        for ($i = 2; $i <= 1000; $i++) {
            $premier = true;

            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $premier = false;
                    break;
                }
            }

            if ($premier) {
                echo $i . "<br>";
            }
        }
            
             

        
        /*trouver une condition ou une variable qui permet d'afficher le $i :
        _si $i divisé par lui même ou par 1 ==0
        _mais que si $i divisé par un autre nombre et différent de 0 */
    ?>
</body>
</html>