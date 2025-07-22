<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($x =0; $x <=100; $x++){
            if($x %3 ==0 && $x %5 ==0){
                echo "FizzBuzz<br>";
            }
            elseif($x %5 ==0){
                echo "Buzz<br>";
            }
            elseif($x %3 ==0){
                echo "Fizz<br>";
            }
            else{
                echo $x."<br>";
            }
        }

        /*Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
        (“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
        ● Si le nombre est un multiple de 3, affichez “Fizz”.
        ● Si le nombre est un multiple de 5, affichez “Buzz”.
        ● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.*/
    ?>
</body>
</html>