<?php
function gras($str) {
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (ctype_upper(substr($word, 0, 1))) {
            $word = "<b>$word</b>";
        }
    }
    return implode(" ", $words);
}

function cesar($str, $decalage = 2) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? 'A' : 'a';
            $result .= chr((ord($char) - ord($base) + $decalage) % 26 + ord($base));
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme($str) {
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (substr($word, -2) === "me") {
            $word .= "_";
        }
    }
    return implode(" ", $words);
}

$transformed = '';
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $input = $_POST['str'];
    $fonction = $_POST['fonction'];

    switch ($fonction) {
        case "gras":
            $transformed = gras($input);
            break;
        case "cesar":
            $transformed = cesar($input);
            break;
        case "plateforme":
            $transformed = plateforme($input);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" name="str" id="str" required>

        <label for="fonction">Fonction :</label>
        <select name="fonction" id="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>

        <button type="submit">Valider</button>
    </form>

    <?php if (!empty($transformed)): ?>
        <p>Résultat : <?= $transformed ?></p>
    <?php endif; ?>
</body>
</html>
