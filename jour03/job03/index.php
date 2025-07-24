<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that";
        $voyelles = ["a","e","i","o","u","y","A","E","I","O","U","Y"];

        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $voyelles)) {
            echo $str[$i];
            }
        }

        /*Créez une variable de type string nommée $str et affectez y le texte :
        “I'm sorry Dave I'm afraid I can't do that”.
        Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
        Eléments potentiels :
        _boucle for ?
        _faire parcourir la chaine str avec $voyelles
        _OU utiliser incrementation de $i et comparer $i à $voyelle
        _rajouter une boucle if avec la comparaison et afficher les caractères qui sont
        présents dans $voyelle*/
    
    ?>
</body>
</html>