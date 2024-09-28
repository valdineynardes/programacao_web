<?php
$numero = $_GET['numero'];
$ehPrimo = true;

if ($numero <= 1) {
    $ehPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
}

if ($ehPrimo) {
    print "$numero é um número primo.";
} else {
    print "$numero não é um número primo.";
}
?>
