<?php
session_start();

// Initialiser la grille
if (!isset($_SESSION['grid']) || isset($_POST['reset'])) {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['turn'] = 'X';
    $_SESSION['winner'] = '';
}

// Traitement du coup joué
if (isset($_POST['move']) && $_SESSION['grid'][$_POST['move']] === '-' && $_SESSION['winner'] === '') {
    $_SESSION['grid'][$_POST['move']] = $_SESSION['turn'];
    checkWinner();
    $_SESSION['turn'] = ($_SESSION['turn'] === 'X') ? 'O' : 'X';
}

// Fonction pour vérifier s'il y a un gagnant
function checkWinner() {
    $g = $_SESSION['grid'];
    $winningCombos = [
        [0,1,2],[3,4,5],[6,7,8], // Lignes
        [0,3,6],[1,4,7],[2,5,8], // Colonnes
        [0,4,8],[2,4,6]          // Diagonales
    ];

    foreach ($winningCombos as $combo) {
        if ($g[$combo[0]] === $g[$combo[1]] && $g[$combo[1]] === $g[$combo[2]] && $g[$combo[0]] !== '-') {
            $_SESSION['winner'] = $g[$combo[0]];
            return;
        }
    }

    // Match nul
    if (!in_array('-', $g)) {
        $_SESSION['winner'] = 'draw';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu du morpion</title>
    <style>
        table { margin: 10px auto; border-collapse: collapse; }
        td { width: 60px; height: 60px; text-align: center; border: 1px solid #333; }
        button { width: 100%; height: 100%; font-size: 24px; }
    </style>
</head>
<body>
    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                <?php for ($j = 0; $j < 3; $j++):
                    $index = $i * 3 + $j;
                    ?>
                    <td>
                    <?php if ($_SESSION['grid'][$index] === '-' && $_SESSION['winner'] === ''): ?>
                        <button type="submit" name="move" value="<?= $index ?>">-</button>
                    <?php else: ?>
                        <?= $_SESSION['grid'][$index] ?>
                    <?php endif; ?>
                    </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <?php
            if ($_SESSION['winner'] === 'X') echo "<p style='text-align:center;'>X a gagné !</p>";
            elseif ($_SESSION['winner'] === 'O') echo "<p style='text-align:center;'>O a gagné !</p>";
            elseif ($_SESSION['winner'] === 'draw') echo "<p style='text-align:center;'>Match nul !</p>";
        ?>

        <div style="text-align:center;">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>
</body>
</html>
