<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <div class="box">
        <h4>la maison de vos rêves</h4>
        <form action="" method="POST">
            Hauteur: <input type="text" name="hauteur"><br>
            Largeur: <input type="text" name="largeur"><br>
            <input type="submit" value="Générer">
        </form>
    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $hauteur = intval($_POST["hauteur"]);
        $largeur = intval($_POST["largeur"]);

        // on coupe la maison en 2 parties
        $hauteurTriangle = intval($hauteur / 2);
        $hauteurRectangle = $hauteur - $hauteurTriangle;

        // sécurité : largeur minimale
        if ($largeur < 3 || $hauteur < 3) {
            echo "Largeur et hauteur doivent être supérieures ou égales à 3.";
        } else {
            // --- TOIT ---
            for ($i = 1; $i <= $hauteurTriangle; $i++) {
                // largeur qui part de 1 et finit exactement à $largeur
                if ($hauteurTriangle > 1) {
                    $largeurTriangle = 1 + intval((($i - 1) / ($hauteurTriangle - 1)) * ($largeur - 1));
                } else {
                    $largeurTriangle = $largeur; // cas spécial si toit = 1 ligne
                }

                $espaces = intval(($largeur - $largeurTriangle) / 2);

                echo str_repeat("&nbsp;", $espaces) . str_repeat("*", $largeurTriangle) . "<br>";
            }

            //  Mur de la maison
            for ($j = 0; $j < $hauteurRectangle; $j++) {
                echo str_repeat("*", $largeur) . "<br>";
            }
        }
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