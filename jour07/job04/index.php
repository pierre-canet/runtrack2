<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04</title>
</head>
<body>
    <form method="GET" action="">
        <input type="number" name="a" required>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">−</option>
            <option value="*">×</option>
            <option value="/">÷</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="b" required>
        <input type="submit" value="Calculer">
    </form>
    <?php

        if (isset($_GET["a"], $_GET["operation"], $_GET["b"])) {
            $inputA = $_GET["a"];
            $inputB = $_GET["b"];
            $operation = $_GET["operation"];
            // Vérification : les deux valeurs doivent être numériques
            if (!is_numeric($inputA) || !is_numeric($inputB)) {
                echo "Opération invalide : les deux valeurs doivent être des nombres.";
            } else {
                $a = (int) $inputA;
                $b = (int) $inputB;
                echo "<p>Résultat : " . calcule($a, $operation, $b) . "</p>";
            }
        }

        function calcule($a, $operation, $b){
             
            switch($operation) {
                
                case '+':
                    return $a + $b;
                case '-':
                    return $a - $b;
                case '*':
                    return $a * $b;                   
                case '/':
                    if($b == 0){
                        return "Erreur : division par zéro";    
                    }
                    else{
                        return $a / $b;
                    }
                case '%':
                    if($b == 0){
                        return "Erreur : division par zéro";    
                    }
                    else{
                        return $a % $b;
                    }
                    
            }
            
        };

        /*if($operation == "+"){
                return $a + $b;
            } 
            elseif($operation == "-"){
                return $a - $b;
            }
            elseif($operation == "*"){
                return $a * $b;
            }
            elseif($operation == "/"){
                if($b == 0){
                    return "Erreur : division par zéro";
                }
                else{
                    return $a / $b;
                }
            }
            elseif($operation == "%"){
                if($b == 0){
                    return "Erreur : division par zéro";
                }
                else{
                    return $a % $b;
                }
            }*/

    
        /*Créez une fonction nommée “calcule()” qui prend 3 paramètres :
        ● le premier, “$a”, est un nombre,
        ● le deuxième, "$operation", est un caractère (string) contenant le type 
        d’opération (+, -, *, /, %),
        ● le troisième, “$b”, est un nombre.
        La fonction doit retourner le résultat de l’opération.*/
    
    ?>
</body>
</html>