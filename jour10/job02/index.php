<?php
// Connexion à la base de données "jour09"
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Échec de la connexion à MySQL.";
    exit;
}

// Requête SQL pour récupérer le nom et la capacité des salles
$requete = "SELECT nom, capacite FROM salles";
$resultat = mysqli_query($connexion, $requete);

// Construction du tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Nom</th><th>Capacité</th></tr></thead><tbody>";

// Affichage des lignes du résultat
while ($salle = mysqli_fetch_assoc($resultat)) {
    echo "<tr><td>" . $salle['nom'] . "</td><td>" . $salle['capacite'] . "</td></tr>";
}

echo "</tbody></table>";

// Fermeture de la connexion
mysqli_close($connexion);
?>
