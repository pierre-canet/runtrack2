<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<?php
    $varBool = true;
    $varString = "chaine de caractères";
    $varInteger = 10;
    $varFloat = 10.1;
?>
<body>
    <table>
        <thead>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeurs</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($varBool); ?></td>
                <td><?php echo"\$varBool"; ?></td>
                <td>true ou false</td>                
            </tr>
            <tr>
                <td><?php echo gettype($varString); ?></td>
                <td>$varString</td>
                <td><?php echo $varString; ?></td>                
            </tr>
            <tr>
                <td><?php echo gettype($varInteger); ?></td>
                <td>varInteger</td>
                <td><?php echo $varInteger; ?></td>                
            </tr>
            <tr>
                <td><?php echo gettype($varFloat); ?></td>
                <td><?php echo "\$varFloat"; ?></td>
                <td><?php echo $varFloat ?></td>                
            </tr>
        </tbody>
    </table>
</body>
</html>