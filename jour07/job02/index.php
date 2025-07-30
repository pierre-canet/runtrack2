<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>
<body>
    <h3>Bonjour ou bonsoir ?</h3>
    <?php

        function bonjour($jour){
            if($jour){//Note : en booléen, la première condition sera true sauf si contraire précisé
                return "Bonjour";
            }
            else{
                return "Bonsoir";
            };
        };

        $jour = false;

        echo bonjour($jour)."<br>"; //fonction qui doit être appelée et affichée avec echo

        function helloWorld($world){
            if($world == true){//cette comparaison fonctionne mais est plus verbeuse
                echo "Hello World !"."<br>";
            }
            elseif($world == false){
                echo "Goodbye World !"."<br>";
            };
        };

        $world = true;

        helloWorld($world); //fonction qui doit seulement être appelée car echo déjà inclus

        /*Créez une fonction nommée “bonjour($jour)”.
        Cette fonction prend en paramètre un booléen nommé “$jour”.
        ● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
        ● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.*/
    ?>
    
</body>
</html>