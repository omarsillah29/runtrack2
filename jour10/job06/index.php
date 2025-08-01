<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion.";
    exit;
}

$requete = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$resultat = mysqli_query($connexion, $requete);

echo "<table border='1'>";
echo "<thead><tr><th>nb_etudiants</th></tr></thead><tbody>";

$row = mysqli_fetch_assoc($resultat);
echo "<tr><td>" . $row['nb_etudiants'] . "</td></tr>";

echo "</tbody></table>";
mysqli_close($connexion);
?>
