<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

// Requête SQL
$result = $mysqli->query("SELECT * FROM etudiants");

// Construction du tableau HTML
echo "<table border='1'>";
echo "<thead><tr>";

// Affichage des noms de colonnes (thead)
while ($field = $result->fetch_field()) {
    echo "<th>" . htmlspecialchars($field->name) . "</th>";
}
echo "</tr></thead><tbody>";

// Affichage des données (tbody)
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";

// Fermeture de la connexion
$mysqli->close();
?>
