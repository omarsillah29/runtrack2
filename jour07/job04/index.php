<?php
function calcule($a, $operation, $b) {
    if ($operation === '+') {
        return $a + $b;
    } elseif ($operation === '-') {
        return $a - $b;
    } elseif ($operation === '*') {
        return $a * $b;
    } elseif ($operation === '/') {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Division par zéro impossible";
        }
    } elseif ($operation === '%') {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Modulo par zéro impossible";
        }
    } else {
        return "Opération non reconnue";
    }
}

// 💡 Exemples de test :
echo calcule(10, "+", 5);    // 15  
echo "<br>";
echo calcule(7, "/", 0);     // Division par zéro impossible  
echo "<br>";
echo calcule(9, "^", 2);     // Opération non reconnue
?>
