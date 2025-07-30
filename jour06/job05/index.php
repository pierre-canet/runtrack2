<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Oranienbaum&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <?php
        // Vérifie si un style a été sélectionné
        if (isset($_GET["style"])) {
            $style = $_GET["style"];
            // Vérifie que le style est bien l'un des styles attendus
            if (in_array($style, ["style1", "style2", "style3"])) {
                echo '<link rel="stylesheet" href="' . htmlspecialchars($style) . '.css">';
            }
        }
    ?>
</head>
<body>
    <main>
        <h3>Styliseur de page</h3>
        <form action="" method="GET">
            <legend>Choisissez votre style de page</legend>
            <select name="style" id="style-select">
                <option value="">--Choisissez un style--</option>
                <option value="style1">
                    Style 1
                </option>
                <option value="style2">
                    Style 2
                </option>
                <option value="style3">
                    Style 3
                </option>                
            </select>
            <div>                    
                <input type="submit" value="Valider">
            </div>
        </form>
    </main>    
    <?php

    //Essayer de faire la page en responsive (mobile first) s'il il y a le temps
    
    /*Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
    submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
    fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
    des effets sur le design du formulaire, la couleur de background, la police d’écriture...
    Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
    doit changer.*/
    
    ?>
</body>
</html>