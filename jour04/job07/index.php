<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison ASCII</title>
</head>
<body>

    <form method="post">
        <label>Largeur :</label>
        <input type="text" name="largeur" required>

        <label>Hauteur :</label>
        <input type="text" name="hauteur" required>

        <input type="submit" value="Envoyer">
    </form>

    <pre>
<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);

    if ($largeur > 2 && $hauteur > 2) {
        $demiLargeur = intval($largeur / 2);

        // Dessin du toit
        for ($i = 0; $i < $demiLargeur; $i++) {
            $espaces = $demiLargeur - $i;
            echo str_repeat(" ", $espaces);
            echo "/";
            echo str_repeat("-", $i * 2);
            echo "\\";
            echo "\n";
        }

        // Dessin des murs
        for ($i = 0; $i < $hauteur; $i++) {
            echo " " . "|" . str_repeat(" ", $largeur - 2) . "|\n";
        }

        // Dessin de la base
        echo " " . str_repeat("-", $largeur) . "\n";
    } else {
        echo "Les dimensions doivent être supérieures à 2.\n";
    }
}
?>
    </pre>

</body>
</html>
