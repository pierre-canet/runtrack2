<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x =0;
    while($x <= 100){        
    if($x == 42){
        echo "LaPlateforme_<br>";
    }
    elseif($x >20 && $x<25){
        echo $x."<br>";
    }
    elseif($x >= 0 && $x <= 20){
        echo "<i>".$x."</i><br>";
    }
    elseif($x >= 25 && $x <= 50){
        echo "<u>".$x."</u><br>";
    }
    elseif($x >= 51 && $x <= 100){
        echo $x."<br>";
    }        
    $x++;
}
    
    /*Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.*/
    ?>
</body>
</html>