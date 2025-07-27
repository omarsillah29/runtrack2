<form method="get">
  <label>Name:</label>
  <input type="text" />
  <label>Surname:</label>
  <input type="text" />
  <input type="submit" />
</form> 
<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Compte les éléments dans le tableau $_GET
    $nombre_arguments = count($_GET);

    // Affichage du résultat
    echo "Le nombre d'arguments GET envoyés est : " . $nombre_arguments;
}
?>
