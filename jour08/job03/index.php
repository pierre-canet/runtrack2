<?php
    session_start();

    // Si le bouton reset a été cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['nameList'] = [];
    };
    // Si un le bouton submit est cliqué
    if(isset($_POST['submit']) && !empty($_POST['prenom'])){
        $_SESSION['nameList'][] = htmlspecialchars($_POST['prenom']);
    }
    /*Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
    submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
    session. Afficher l’ensemble des prénoms.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    
    <h3>Dénominateur</h3>

    <form method="POST">
        Nom : <input type="text" name="prenom">
        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
    <ul>
        <?php 
            echo "<ul>";
            if(!empty($_SESSION['nameList'])){
                foreach($_SESSION['nameList'] as $prenom){                    
                    echo "<li>".$prenom."</li>";
                }
            }
            echo "</ul>"; 
        ?>
    </ul>
</body>
</html>
    
   