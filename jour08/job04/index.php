<?php

    $message ="";
    
    if(isset($_POST['submit'])){
        if(!empty($_POST['prenom'])){
            setcookie('prenom', $_POST['prenom'], time() + 3600);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
        else{
            $message = "Veuillez entrer un prénom.";
        }
    }

    if(isset($_POST['deco'])){
        setcookie('prenom', '', time() - 3600);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }/*Note : les header(Location) permettent à la page de se recharger pour prendre
    en compte la modification des cookies*/

    /*Créez un formulaire de connexion qui contient un input de type de text nommé
    “prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
    prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
    plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
    bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
    nouveau afficher le formulaire de connexion.*/

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>job04</title>
</head>
<body>
<?php
    if(!isset($_COOKIE['prenom'])){
        echo "<form method='POST'>
                Prénom : <input type='text' name='prenom' required>
                <button type='submit' name='submit'>Connexion</button>       
              </form>";
        if (!empty($message)) {
            echo "<p>$message</p>";
        }
    } else {
        echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . "!<br>";
        echo "<form method='POST'>
                <button type='submit' name='deco'>Déconnexion</button>           
              </form>";
    }

    /*Dans cette page de code on retrouve deux éléments qui empéchent de valider un formulaire
    vide : "required" et via le header/location, ces deux élements permettent d'empécher la
    validation du formulaire vide au niveau du client pour le premier et du serveur pour le
    deuxième, celà permet une double protection contre diverses problèmes tels que des formulaires
    détournés, des scripts, etc, mais permet aussi côté utilisateur d'eviter des soumissions inutiles
    et de lui donner un retour immédiat sans recharger la page*/
?>
</body>
</html>

 