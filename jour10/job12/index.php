<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion.";
    exit;
}

$requete = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$resultat = mysqli_query($connexion, $requete);

echo "<table border='1'>";
echo "<thead><tr><th>Prénom</th><th>Nom</th><th>Naissance</th></tr></thead><tbody>";

while ($etudiant = mysqli_fetch_assoc($resultat)) {
    echo "<tr><td>" . $etudiant['prenom'] . "</td><td>" . $etudiant['nom'] . "</td><td>" . $etudiant['naissance'] . "</td></tr>";
}

echo "</tbody></table>";
mysqli_close($connexion);
?>
