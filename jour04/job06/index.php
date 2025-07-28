<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job06</title>
</head>
<body>
    <h3>Votre nombre est-il pair ou non ?</h3>
    <form action="" method="GET">
        Nombre: <input type="text" name="number"><br>       
        <input type="submit" value="Valider">
    </form>
    <?php
        if (isset($_GET["number"])) {
            $number = $_GET["number"];

            if (is_numeric($number)) {
                if ($number % 2 == 0) {
                    echo "Nombre pair";
                } else {
                    echo "Nombre impair";
                }
            } else {
                echo "Ceci n'est pas un nombre";
            }
        }
        /*Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
        bouton submit.
        Après validation du formulaire :
        ● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
        ● si c’est un nombre impair, afficher “Nombre impair”.*/

    ?>
</body>
</html>