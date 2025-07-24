<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possede finissent par nous posseder.";
        $resultat = "";

        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $resultat .= $str[$i];
        }

        echo $resultat;
        
        /*Créez une variable de type string nommée $str et affectez y le texte :
        “Les choses que l'on possède finissent par nous posséder."
        Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
        Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL*/
    ?>
</body>
</html>