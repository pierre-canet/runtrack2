<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
        $resultat = "";

        for ($i = 0; $i < strlen($str); $i += 2) {
            $resultat .= $str[$i];
        }

        echo $resultat;
?>
</body>
</html>