<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <?php
        $x =array("200","204", "173","98","171","404","459",);

        foreach($x as $val){
            if($val %2 ==0){
                echo $val."est pair<br>";
            }
            else{
                echo $val."est impair<br>";
            };
        }

        /*Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
        Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
        impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
        comprises dans ce tableau.*/
    ?>
   
</body>
</html>