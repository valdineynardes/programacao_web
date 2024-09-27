<?php
$valor1 = $_GET['valor1'] ?? 0;
$valor2 = $_GET['valor2'] ?? 1;

while ($valor2 != 0) {
    $resto = $valor1 % $valor2;
    $valor1 = $valor2;
    $valor2 = $resto;
}

echo "O MDC é: $valor1";
?>
