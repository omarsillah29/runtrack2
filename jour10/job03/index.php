<?php
// Connexion à la base de données "jour09"
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion à la base de données.";
    exit;
}

// Requête SQL : récupérer prénom, nom, naissance des étudiantes de sexe féminin
$requete = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'femme'";
$resultat = mysqli_query($connexion, $requete);

// Création du tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Prénom</th><th>Nom</th><th>Naissance</th></tr></thead><tbody>";

while ($etudiante = mysqli_fetch_assoc($resultat)) {
    echo "<tr><td>" . $etudiante['prenom'] . "</td><td>" . $etudiante['nom'] . "</td><td>" . $etudiante['naissance'] . "</td></tr>";
}

echo "</tbody></table>";

// Fermeture de la connexion
mysqli_close($connexion);
?>
