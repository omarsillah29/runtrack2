<?php
for ($i = 2; $i <= 1000; $i++) {
    $is_prime = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $is_prime = false;
            break;
        }
    }
    if ($is_prime) {
        echo $i . "<br />";
    }
}
?>
