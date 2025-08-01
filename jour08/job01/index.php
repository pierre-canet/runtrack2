<?php
    session_start();

    // Si le bouton reset a été cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['nbvisites'] = 0;
    } else {
        // Si la variable de session existe, on l'incrémente
        if (isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites']++;
        } else {
            // Sinon on l'initialise à 1
            $_SESSION['nbvisites'] = 1;
        }
    }

    /*Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
        visitée, ajoutez 1. Afficher le contenu de cette variable.
        Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>

    <p>Nombre de visites : <?= $_SESSION['nbvisites'] ?></p>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

</body>
</html>
    
   