<?php
// 🔄 Réinitialise le cookie si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    setcookie("nbvisites", 0, time() + 3600); // expire dans 1h
    $_COOKIE['nbvisites'] = 0; // mise à jour locale
}

// 📈 Incrémente le compteur ou initialise si non défini
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

//  Met à jour le cookie à chaque visite
setcookie("nbvisites", $nbvisites, time() + 3600); // valide 1h
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur avec Cookie</title>
</head>
<body>

    <h1>Nombre de visites (cookie) : <?php echo $nbvisites; ?></h1>

    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>

</body>
</html>
