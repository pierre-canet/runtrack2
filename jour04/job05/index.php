<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
</head>
<body>
    <form action="" method="POST">
        Pseudonyme: <input type="text" name="username"><br>
        Mot de passe: <input type="text" name="password"><br>        
        <input type="submit" value="Connexion">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);

            if ($username === "John" && $password === "Rambo") {
                echo "C'est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }
        /*Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
        ayant deux champs <input> nommés username et password.
        Après validation du formulaire :
        ● si le username est “John” ET le password est “Rambo” afficher :
        “C’est pas ma guerre”
        ● sinon afficher : “Votre pire cauchemar”.*/
    
    ?>
</body>
</html>