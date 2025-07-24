<meta
<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$inverse = ""; // Variable vide pour stocker la version inversée

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $inverse .= $str[$i]; // On ajoute chaque caractère en partant de la fin
}

echo $inverse;
?>
