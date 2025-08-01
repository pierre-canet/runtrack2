<?php
session_start();

/// Initialiser chaque variable si elle n'existe pas encore
if(!isset($_SESSION['grille'])){
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
}

if(!isset($_SESSION['joueur'])){
    $_SESSION['joueur'] = 'X';
}

if(!isset($_SESSION['jeu_fini'])){
    $_SESSION['jeu_fini'] = false;
}

if(!isset($_SESSION['message'])){
    $_SESSION['message'] = '';
}

// Réinitialiser si le bouton reset a été cliqué
if(isset($_POST['reset'])){
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
    $_SESSION['jeu_fini'] = false;
    $_SESSION['message'] = '';
}


// Si une case a été cliquée et le jeu n’est pas terminé
if(isset($_POST['case']) && !$_SESSION['jeu_fini']){
    $index = (int) $_POST['case'];
    $row = intdiv($index, 3);
    $col = $index % 3;

    // Si la case est vide
    if($_SESSION['grille'][$row][$col] === '-'){
        $_SESSION['grille'][$row][$col] = $_SESSION['joueur'];

        // Vérifier s’il y a un gagnant
        $gagnant = verifierGagnant($_SESSION['grille']);
        if($gagnant){
            $_SESSION['message'] = "$gagnant a gagné !";
            $_SESSION['jeu_fini'] = true;
        }
        elseif (grillePleine($_SESSION['grille'])){
            $_SESSION['message'] = "Match nul !";
            $_SESSION['jeu_fini'] = true;
        }
        else{
            // Changer de joueur
            $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
        }
    }
}

// Fonction pour vérifier si un joueur a gagné
function verifierGagnant($g){
    for($i = 0; $i < 3; $i++){
        // lignes
        if ($g[$i][0] !== '-' && $g[$i][0] === $g[$i][1] && $g[$i][1] === $g[$i][2]) return $g[$i][0];
        // colonnes
        if ($g[0][$i] !== '-' && $g[0][$i] === $g[1][$i] && $g[1][$i] === $g[2][$i]) return $g[0][$i];
    }
    // diagonales
    if($g[0][0] !== '-' && $g[0][0] === $g[1][1] && $g[1][1] === $g[2][2]) return $g[0][0];
    if($g[0][2] !== '-' && $g[0][2] === $g[1][1] && $g[1][1] === $g[2][0]) return $g[0][2];

    return false;
}

// Vérifie si toutes les cases sont remplies
function grillePleine($g){
    foreach ($g as $ligne){
        if(in_array('-', $ligne)) return false;
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        td {
            padding: 10px;
        }
        button.case{
            width: 60px;
            height: 60px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h2>Joueur actuel : <?= $_SESSION['joueur'] ?></h2>

    <?php if ($_SESSION['message']) : ?>
        <h3><?= $_SESSION['message'] ?></h3>
    <?php endif; ?>

    <form method="POST">
        <table>
            <?php
            $j = 0;
            for ($i = 0; $i < 3; $i++) {
                echo "<tr>";
                for ($k = 0; $k < 3; $k++) {
                    echo "<td>";
                    $val = $_SESSION['grille'][$i][$k];
                    if ($val === '-' && !$_SESSION['jeu_fini']) {
                        echo "<button class='case' type='submit' name='case' value='$j'>-</button>";;
                    } else {
                        echo "<button class='case $val' disabled>$val</button>";
                    }
                    echo "</td>";
                    $j++;
                }
                echo "</tr>";
            }
            ?>
        </table>
    </form>

    <form method="POST">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>
