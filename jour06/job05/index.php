<!DOCTYPE html>
<html lang="fr">

<?php
// Définit le style par défaut
$style = "style1.css";

// Si un style est sélectionné et valide, on le conserve
if (isset($_GET['style'])) {
    $choix = $_GET['style'];
    $arrayStyles = array("style1.css", "style2.css", "style3.css");
    if (in_array($choix, $arrayStyles)) {
        $style = $choix;
    }
    echo $style;
}
?>


<head>
    <meta charset="UTF-8">
    <title>Formulaire Stylé</title>

    <!-- Inclusion dynamique du bon fichier CSS -->
    <link rel="stylesheet" href="<?php echo $style; ?>">
</head>
<body>
    <form method="GET" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1.css" <?php if ($style == "style1") echo "selected"; ?>>Style 1</option>
            <option value="style2.css" <?php if ($style == "style2") echo "selected"; ?>>Style 2</option>
            <option value="style3.css" <?php if ($style == "style3") echo "selected"; ?>>Style 3</option>
        </select>
        <input type="submit" value="Appliquer le style">
    </form>
</body>
</html>
