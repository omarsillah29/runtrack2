<?php
// Connexion à la base de données "jour09"
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    echo "Erreur de connexion à la base de données.";
    exit;
}

// Requête SQL : étudiants de moins de 18 ans
$requete = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";
$resultat = mysqli_query($connexion, $requete);

// Création du tableau HTML
echo "<table border='1'>";
echo "<thead><tr>";

// Affichage des noms de colonnes dynamiquement
$colonnes = mysqli_fetch_fields($resultat);
foreach ($colonnes as $colonne) {
    echo "<th>" . $colonne->name . "</th>";
}
echo "</tr></thead><tbody>";

// Affichage des lignes
while ($etudiant = mysqli_fetch_assoc($resultat)) {
    echo "<tr>";
    foreach ($etudiant as $champ) {
        echo "<td>" . $champ . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";

// Fermeture de la connexion
mysqli_close($connexion);
?>
