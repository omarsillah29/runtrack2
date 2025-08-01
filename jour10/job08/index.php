<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion.";
    exit;
}

$requete = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$resultat = mysqli_query($connexion, $requete);

echo "<table border='1'>";
echo "<thead><tr><th>capacite_totale</th></tr></thead><tbody>";

$row = mysqli_fetch_assoc($resultat);
echo "<tr><td>" . $row['capacite_totale'] . "</td></tr>";

echo "</tbody></table>";
mysqli_close($connexion);
?>
