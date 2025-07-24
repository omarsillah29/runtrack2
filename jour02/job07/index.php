<!DOCTYPE html><html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle de Pythagore</title>
    <style>
    div{
        display: flex;
        width: 100%;
        justify-content: center;
        text-align: center;
        
    }
    </style>
</head>
<?php
$hauteur = 5; // Hauteur du triangle
echo "<div>";
for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces avant les étoiles pour centrer
    echo str_repeat(" ", $hauteur - $i);
    
    // Étoiles (nombre impair : 2*$i - 1 pour faire un triangle isocèle)
    echo str_repeat("*", 2 * $i - 1);
    
    // Saut de ligne HTML
    echo "<br>";

};
echo "</div>";
?>
