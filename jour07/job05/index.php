<?php
function occurrences($str, $char) {
    $compteur = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $compteur++;
        }
    }
    return $compteur;
}

// ✨ Exemple d'appel :
echo occurrences("Bonjour", "o"); // Affichera : 2
?>
