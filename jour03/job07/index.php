<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $resultat = "";


        for ($i = 1; $i < strlen($str); $i++) {
            $resultat .= $str[$i];
        }

        $resultat .= $str[0];

        echo $resultat;

        /*Créez une variable de type string nommée $str et affectez y le texte :
        “Certaines choses changent, et d'autres ne changeront jamais.”
        Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
        deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
        Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c*/
    ?>
</body>
</html>