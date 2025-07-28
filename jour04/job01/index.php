<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    
    <?php
    
        /*Développez un algorithme qui affiche le nombre d’arguments $_GET.
        Tips :
        Pour tester votre code, créez un formulaire html <form> de type GET avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
        “Le nombre d’argument GET envoyé est : “*/        

        $getCount = count($_GET); // Compte le nombre d'arguments GET
    ?>

    <form action="" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form><!--Note : bien penser a utiliser des "names" différents pour avoir plus d'arguments
    "GET"-->

    
    <?php    
        // Affiche le nombre d'arguments GET si le formulaire est soumis
        if ($getCount > 0) {
            echo "Le nombre d’arguments GET envoyés est : " . $getCount . "<br>";
        }    
    ?>


</body>
</html>