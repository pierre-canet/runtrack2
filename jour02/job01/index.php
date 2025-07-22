<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 0;
        do{
            echo $x. "<br>";
            $x++;
        }while($x <42);
        if($x = 42){
            echo "<b><u>".$x."</u></b>". "<br>";
            $x++;
        };
        do{
             echo $x. "<br>";
            $x++;
        }while($x <1338);
    ?>

</body>
</html>