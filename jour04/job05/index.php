<form method="post" action="">
   <input type="username" name="username" placeholder="Nom d'utilisateur">
   <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Envoyer">

<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Compte les éléments dans le tableau $_POST
    $nombre_arguments = count($_POST);
    echo "Le nombre d'arguments POST envoyés est : " . $nombre_arguments;
}
?>
