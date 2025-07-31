<?php
session_start();

// Initialiser le tableau de prénoms s’il n’existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Réinitialiser la liste si bouton "reset" cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom si le formulaire est validé
if (isset($_POST['envoyer']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom" />
    <button type="submit" name="envoyer">Envoyer</button>
    <button type="submit" name="reset">Réinitialiser</button>
</form>

<ul>
<?php foreach ($_SESSION['prenoms'] as $p) {
    echo "<li>" . $p . "</li>";
} ?>
</ul>
