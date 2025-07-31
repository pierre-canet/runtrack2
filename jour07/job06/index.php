<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><u>Traducteur Leet Speak</u></h3>
    <?php
    function leetSpeak($str){
        //Tableau
        $leet =[
            'A' => '4',
            'B' => '8',
            'E' => '3',
            'G' => '6',
            'L' => '1',
            'S' => '5',
            'T' => '7',
        ];
        // Parcourir les lettres à remplacer
        foreach($leet as $lettre => $traducteur){
            //Remplacer les lettres majuscules et minuscules
            $str = str_replace($lettre, $traducteur, $str);
            $str = str_replace(strtolower($lettre), $traducteur, $str);      
        }
        //Retourner la valeur
        return $str;
    };    
    //Générer un exemple
    $exemple ="Salut les Geeks";
    echo leetSpeak($exemple);
   
        /*Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre
        une chaîne de caractères nommée “$str”.
        Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela
        signifie qu’elle doit la modifier de sorte à ce que :
        ● les “A” deviennent des “4”,
        ● les “B” des “8”,
        ● les “E” des “3”,
        ● les “G” des “6”,
        ● les “L” des “1”,
        ● les “S” des “5”
        ● les “T” des “7”.
        Cela est valable que l’on crie ou non (majuscules et minuscules).*/
    
    ?>
</body>
</html>