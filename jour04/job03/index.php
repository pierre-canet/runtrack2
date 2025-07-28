<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
    <form action="" method="POST">
        Pseudonyme: <input type="text" name="username"><br>
        Mot de passe: <input type="text" name="password"><br>
        <input type="submit">
    </form>
    <?php
        $getCount = count($_POST);    
        // Affiche le nombre d'arguments POST si le formulaire est soumis
        if ($getCount > 0) {
            echo "Le nombre d’arguments POST envoyés est : " . $getCount . "<br>";
        }    
    ?>
</body>
</html>