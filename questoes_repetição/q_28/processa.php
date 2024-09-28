<?php
for ($numero = 2; $numero <= 50; $numero++) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        print "$numero é primo.<br>";
    }
}
?>
