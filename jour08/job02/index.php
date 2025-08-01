<?php
    // Si le bouton reset a été cliqué
    if(isset($_POST['reset'])){
        setcookie('nbvisites', 0, time() + 3600); // réinitialisation à 0, expire dans 1h
        $nbvisites = 0;
    }
    else{
        if(isset($_COOKIE['nbvisites'])){
            $nbvisites = $_COOKIE['nbvisites'] +1;
        }
        else{
            $nbvisites = 1; // première visite
        }
        setcookie('nbvisites', $nbvisites, time() + 3600); // mettre à jour le cookie
    }

    /*Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
    Afficher le contenu du cookie.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>

    <p>Nombre de visites : <?= $nbvisites ?></p>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

</body>
</html>
