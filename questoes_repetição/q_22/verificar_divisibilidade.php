<?php
$valor1 = $_GET['valor1'] ?? 0;
$valor2 = $_GET['valor2'] ?? 1;

if ($valor1 % $valor2 == 0) {
    echo "O valor $valor1 é divisível por $valor2.";
} else {
    echo "O valor $valor1 não é divisível por $valor2.";
}
?>
