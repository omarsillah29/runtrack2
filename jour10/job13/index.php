<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion.";
    exit;
}

// Jointure entre salles et etages
$requete = "SELECT salles.nom AS nom_salle, etages.nom AS nom_etage 
            FROM salles 
            INNER JOIN etages ON salles.id_etage = etages.id";
$resultat = mysqli_query($connexion, $requete);

echo "<table border='1'>";
echo "<thead><tr><th>Nom de la salle</th><th>Nom de l'étage</th></tr></thead><tbody>";

while ($ligne = mysqli_fetch_assoc($resultat)) {
    echo "<tr><td>" . $ligne['nom_salle'] . "</td><td>" . $ligne['nom_etage'] . "</td></tr>";
}

echo "</tbody></table>";
mysqli_close($connexion);
?>
