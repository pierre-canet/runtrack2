<?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");

    if($mysqli->connect_error){
        die("Erreur de connexion: ".$mysqli->connect_error)
    }
    $query ="SELECT * FROM etudiants";
    $result = $mysqli->query($query)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <?php
    
        if($result){
            echo "table"
        }
    
    ?>
</body>
</html>