<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>

    <?php

        function getHello(){
            return "Hello LaPlateforme!";
        };

        echo "<div class='hello'>".getHello()."</div>";

        /*Créez une fonction nommée “getHello()”.
        Cette fonction doit retourner “Hello LaPlateforme!”.
        Appelez cette fonction dans votre page en récupérant sa valeur de retour 
        et affichez-la.*/

    ?>
    
</body>
</html>