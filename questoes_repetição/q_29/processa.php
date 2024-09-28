<?php
$soma = 0;
for ($numero = 2; $numero <= 50; $numero++) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        $soma += $numero;
    }
}
print "A soma dos números primos de 1 a 50 é: $soma.";
?>
