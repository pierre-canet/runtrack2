<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04</title>
</head>
<body>
    <form action="" method="POST">
        Pseudonyme: <input type="text" name="username"><br>
        Mot de passe: <input type="text" name="password"><br>        
        <input type="submit">
    </form>

    <!--tableau $_POST-->

    <table border="1">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($key) . "</td>";
                echo "<td>" . htmlspecialchars($value) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>
</body>
</html>