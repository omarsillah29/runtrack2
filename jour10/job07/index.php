<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion.";
    exit;
}

$requete = "SELECT SUM(superficie) AS superficie_totale FROM etages";
$resultat = mysqli_query($connexion, $requete);

echo "<table border='1'>";
echo "<thead><tr><th>superficie_totale</th></tr></thead><tbody>";

$row = mysqli_fetch_assoc($resultat);
echo "<tr><td>" . $row['superficie_totale'] . "</td></tr>";

echo "</tbody></table>";
mysqli_close($connexion);
?>
