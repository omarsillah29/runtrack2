<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion.";
    exit;
}

$requete = "SELECT * FROM salles ORDER BY capacite ASC";
$resultat = mysqli_query($connexion, $requete);

echo "<table border='1'>";
echo "<thead><tr>";

$colonnes = mysqli_fetch_fields($resultat);
foreach ($colonnes as $colonne) {
    echo "<th>" . $colonne->name . "</th>";
}
echo "</tr></thead><tbody>";

while ($salle = mysqli_fetch_assoc($resultat)) {
    echo "<tr>";
    foreach ($salle as $champ) {
        echo "<td>" . $champ . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";
mysqli_close($connexion);
?>
