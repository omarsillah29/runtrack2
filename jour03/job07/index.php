<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$nouveau_str = "";

// Parcours de chaque caractère sauf le dernier
for ($i = 0; $i < strlen($str) - 1; $i++) {
    $nouveau_str .= $str[$i + 1];
}

// On ajoute le premier caractère à la fin
$nouveau_str .= $str[0];

echo $nouveau_str;
?>
