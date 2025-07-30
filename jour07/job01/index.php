<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <?php

    function hello(){ 
        return "Hello LaPlateforme!";
    };
    
    echo hello()."<br>"; //fonction qui doit être appelée et affichée avec echo

    function helloWorld(){
        echo "Hello World !";
    };

    helloWorld(); //fonction qui doit simplement être appelée car echo déjà inclus

    /*Créez une fonction nommée “hello()”. Cette fonction, une fois appelée, doit afficher sur
    la page : “Hello LaPlateforme!”.*/
    
    ?>
</body>
</html>