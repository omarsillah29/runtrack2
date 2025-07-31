<?php
session_start(); // 🔐 Démarre la session

// Réinitialisation si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

// Incrémentation de la variable nbvisites
if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>

    <h1>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></h1>

    <!-- 🔘 Bouton pour reset -->
    <form method="post" action="">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>

</body>
</html>
