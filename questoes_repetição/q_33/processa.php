<?php
$numero = $_GET['numero'];
$soma = 0;

while ($numero > 0) {
    $digito = $numero % 10;
    $soma += $digito;
    $numero = (int)($numero / 10);
}

print "A soma dos dígitos é: $soma";
?>
