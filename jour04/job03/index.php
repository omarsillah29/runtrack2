<form method="POST" action="">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="nom" placeholder="Nom">
    <input type="submit" value="Envoyer">
</form>
-<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Compte les éléments dans le tableau $_POST
    $nombre_arguments = count($_POST);
    echo "Le nombre d'arguments POST envoyés est : " . $nombre_arguments;
}
?>
