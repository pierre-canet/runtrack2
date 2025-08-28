<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <h4>la maison de vos rêves</h4>
    <form action="" method="POST">
        Hauteur: <input type="text" name="hauteur"><br>
        Largeur: <input type="text" name="largeur"><br>        
        <input type="submit" value="Générer">
    </form>

    <?php
    
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $hauteur = htmlspecialchars($_POST["hauteur"]);
            $largeur = htmlspecialchars($_POST["largeur"]);
            $hauteurTriangle = intval($hauteur / 2);
            while ((2 * $hauteurTriangle - 1) > $largeur) {
                $hauteurTriangle--;
            }
            $hauteurRectangle = $hauteur - $hauteurTriangle;
            $hauteurRectangle = $hauteur - $hauteurTriangle;
            $baseTriangle = 2 * $hauteurTriangle - 1;
            
            if ($largeur < (2 * intval($hauteur / 2) - 1)) {
                echo "Largeur trop petite pour cette hauteur de toit. 
                Veuillez augmenter la largeur.";
            }
            else{
                for ($i = 1; $i <= $hauteurTriangle; $i++) {
                    $nbEtoiles = 2 * $i - 1;
                    
                    echo str_repeat("*", $nbEtoiles);
                    echo "<br>";
                }

                for($j =0; $j < $hauteurRectangle; $j++){
                    for($i =0; $i <$largeur; $i++){
                        echo "*"; 
                    }
                    echo "<br>";             
                }
            } // ... dessin de la maison ici
        }

            

        /*Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
            “hauteur” et un bouton submit.
            Vous devez créer un algorithme qui affiche, à la validation du formulaire,
            une maison telle que :
            Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
            maison qui s’affiche sur la page doit ressembler à ceci :

            Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
            la maison qui s’affiche sur la page doit ressembler à ceci :
        */
    
    ?>
</body>
</html>