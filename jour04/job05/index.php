<form method="POST" >
    <label for="username">Nom d’utilisateur :</label>
    <input type="text" name="username" id="username" placeholder="Votre nom">
    
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" placeholder="Votre mot de passe">
    
    <input type="submit" value="Connexion">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "John" && $password === "Rambo") {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
