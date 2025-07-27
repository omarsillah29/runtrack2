<form method="GET" action="">
    <input type="text" name="nombre" placeholder="Entrez un nombre">
    <input type="submit" value="Vérifier">
</form>

<?php
// Vérifie que le champ "nombre" a été envoyé
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Vérifie si la valeur est bien un entier numérique
    if (is_numeric($nombre) && intval($nombre) == $nombre) {
        // Vérifie la parité
        if ($nombre % 2 === 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre entier valide.";
    }
}
?>
