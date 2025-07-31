<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
</head>
<body>
    <?php

    $str = "Bonjour";
    $char = "o";

    function occurence($str, $char){
        $j = 0;
        for($i =0; $i <strlen($str); $i++){            
            if($str[$i] ==$char){
                $j++;
            }
        };
        return $j;
    };

    echo "Le nombre d'occurences de \$char dans \$str est : ".occurence($str, $char)
    
    /*Créez une fonction nommée “occurrences($str, $char)”.
    Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
    caractère nommé “$char”.
    Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
    Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
    $str sera : 2*/
    
    ?>
</body>
</html>