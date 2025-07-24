<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
$alphabet = range('a', 'z');

// Parcours de chaque caractère
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    
    if (in_array($char, $voyelles)) {
        $dic["voyelles"]++;
    } elseif (in_array($char, $alphabet)) {
        $dic["consonnes"]++;
    }
}
?>

<!-- Affichage du tableau HTML -->
<table border="1">
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
