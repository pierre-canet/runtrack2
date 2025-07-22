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
        while($x <=1337){
            do{
                echo $x. "<br>";
                $x++;
            }while($x <26);
            if($x=26){
                $x++;
            };
            do{
                echo $x. "<br>";
                $x++;
            }while($x <37);
            if($x =37){
                $x++;
            };
            do{
                echo $x. "<br>";
                $x++;
            }while($x <88);
            if($x=88){
                $x++;
            };
            do{
                echo $x. "<br>";
                $x++;
            }while($x <1111);
            if($x =1111){
                $x++;
            };
            do{
                echo $x. "<br>";
                $x++;
            }while($x <=1337);
        }
        $x = 3233;
        echo $x;        
    ?>
</body>
</html>