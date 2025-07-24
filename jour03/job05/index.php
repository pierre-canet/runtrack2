<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <?php
        $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

        $voyelles = ["a","e","i","o","u","y","A","E","I","O","U","Y"];
        $consonnes = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r",
        "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M",
        "N", "P", "Q", "R","S", "T", "V", "W", "X", "Z"];


        $dic = [
            "voyelles" => 0,
            "consonnes" => 0
        ];
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (in_array($char, $voyelles)) {
                $dic["voyelles"]++;
            }elseif (in_array($char, $consonnes)) {
                $dic["consonnes"]++;
            }
        }
    ?>
    <table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["voyelles"]; ?></td>
            <td><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
    </table>       
   
</body>
</html>