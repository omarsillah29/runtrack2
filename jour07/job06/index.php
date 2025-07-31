<?php
function leetSpeak($str) {
    // Tableau de correspondance : lettre → leet
    $leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $resultat = "";

    // Parcours de chaque lettre
    for ($i = 0; $i < strlen($str); $i++) {
        $caractere = $str[$i];

        // Si le caractère est dans le tableau, on le convertit
        if (isset($leet[$caractere])) {
            $resultat .= $leet[$caractere];
        } else {
            $resultat .= $caractere;
        }
    }

    return $resultat;
}

// Exemple :
echo leetSpeak("LaPlateforme est Geniale !");
?>
