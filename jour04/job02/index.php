<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>
<body>
    <?php
    
        /*Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
        arguments $_GET et les valeurs associées.
        Il doit y avoir deux colonnes : argument et valeur.
        Tips :
        Pour tester votre code, créez un formulaire html <form> de type GET avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
        tableau :*/
    
    ?>

    <form action="" method="GET">
        Nom: <input type="text" name="name"><br>
        Prénom: <input type="text" name="firstName"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <!--Essai de tableau via $_GET-->

    <table border="1">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($_GET)) {
            foreach ($_GET as $key => $value) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($key) . "</td>";
                echo "<td>" . htmlspecialchars($value) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

</body>
</html>