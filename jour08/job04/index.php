<?php
// Créer le cookie si le formulaire est soumis
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    // Cookie valable 1 jour
    setcookie("prenom", $_POST['prenom'], time() + 86400);
    $_COOKIE['prenom'] = $_POST['prenom']; // Pour usage immédiat sans recharger
}

// Supprimer le cookie si bouton déco cliqué
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600); // Expire le cookie
    unset($_COOKIE['prenom']);
}
?>

<?php if (isset($_COOKIE['prenom'])): ?>
    <p>Bonjour <?= htmlspecialchars($_COOKIE['prenom']) ?> !</p>
    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php else: ?>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom" />
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php endif; ?>
