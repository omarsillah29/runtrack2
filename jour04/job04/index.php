<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Arguments GET</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Formulaire POST</h2>
<form method="post">
    <label>Prénom: <input type="text" name="Prenom"></label><br><br>
    <label>Nom: <input type="text" name="Nom"></label><br><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_POST)) {
    echo "<h2>Résultat</h2>";
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $argument => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($argument) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
