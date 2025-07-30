<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $y =array(26, 37, 88, 1111);
        for($x =0; $x <=1337; $x++){
            if (!in_array($x, $y)) {
                echo $x . "<br>";
            }
        }
        
        $x = 3233;
        echo $x;
        /*Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
        mettant un retour à la ligne entre chaque nombre (<br />).*/        
    ?>
</body>
</html>