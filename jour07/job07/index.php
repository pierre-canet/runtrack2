<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>
<body>

    <h3>Transformateur de texte</h3>
    <!--Formulaire avec un champ input txt, une liste déroulante et un bouton-->
    <form action="" method="GET">
        Votre phrase : <input type="text" name="str">
        <select name="fonction">
            <option value="">--Selectionner--</option>
            <option value="gras">gras</option>
            <option value="cesar">code cesar</option>
            <option value="plateforme">plateforme</option>            
        </select>
        <input type="number" name="decalage" placeholder="Décalage (pour César)">
        <button type="submit">Submit</button>
    </form>

    <?php

        function gras($str){
            $words = explode(" ", $str);
            foreach($words as &$word){
                //Vérifie si la première lettre du mot est une majuscule
                if (ctype_upper($word[0])) {
                    $word = "<b>$word</b>";
                }
            }
            return implode(" ", $words);
        };

        function cesar($str, $decalage){
            $result ="";
            for($i =0; $i <strlen($str); $i++){                
                $char =$str[$i];
                //Vérifie si le caractère est une lettre ou non                
                if(ctype_alpha($char)){
                    if(ctype_upper($char) == true){
                        // Pour une lettre majuscule
                        $decale = chr(((ord($char) - ord('A') + $decalage + 26) % 26) + ord('A'));                        
                    }
                    else{
                        // Pour une lettre minuscule
                        $decale = chr(((ord($char) - ord('a') + $decalage + 26) % 26) + ord('a'));                        
                    };                     
                    $result .=$decale;                  
                }
                else{
                    $result .=$char;
                }
                

            };
            return $result."<br>pour un décalage de ".$decalage;
        };

        function plateforme($str){
            $words = explode(" ", $str);
            foreach($words as &$word){
                $lastChar = substr($word, -1);
                $core = substr($word, 0, -1);
                //Vérifie si le dernier caractère est une ponctuation (pour éviter la casse)
                if (!ctype_alpha($lastChar)) {
                    if(strtolower(substr($core, -2)) === "me"){
                            $word = $core ."_". $lastChar; // remet la ponctuation à la fin
                    }                  
                }
                else{
                    if(strtolower(substr($word, -2)) === "me"){
                        $word .= "_";
                    }
                }
            }    
            return implode(" ", $words);
        };

        if (isset($_GET['str']) && isset($_GET['fonction'])) {
            $str = $_GET['str'];
            $fonction = $_GET['fonction'];
            $decalage = isset($_GET['decalage']) ? intval($_GET['decalage']) : 2;

            if ($fonction === "gras") {
                echo gras($str);
            } elseif ($fonction === "cesar") {
                echo cesar($str, $decalage);
            } elseif ($fonction === "plateforme") {
                echo plateforme($str);
            }
        }

        //Fonction qui mets en gras mots avec majuscules
        /*
            function gras($str){
            if(){}ouforeach(){}
            -> return $str avec les mots en gras
            };
            //Fonction qui passe le txt en code cesar
            function cesar($str, $decalage){
                parcourir $str ave strlen, incrementer la chaîne et return avec les lettres décalées
            };
            //Fonction qui ajoute "_" aux mots finissant en "me"
            function plateforme($str){
                analyser la fin du mots, si le mot contient "me", return le str avec les mots+"_"
            };
        */        
        /*Créez un formulaire <form> qui contient :
        ● un champ <input> nommé “str” de type “text”,
        ● une liste déroulante <select> nommée “fonction”
        ● un bouton <button> submit.
        Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
        fonction de l’option <option> choisie dans la liste déroulante.
        Les choix possibles sont :
        ● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
        mettant en gras (<b>) les mots commençant par une lettre majuscule.
        ● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
        (qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
        chaque caractère d’un nombre égal à “$decalage”.
        ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
        “c”.
        ● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
        Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.*/
        
    ?>
</body>
</html>