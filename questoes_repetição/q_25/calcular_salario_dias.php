<?php
$dias_trabalhados = $_GET['dias_trabalhados'] ?? 0;
$valor_dia = 50;

$salario = $dias_trabalhados * $valor_dia;

echo "O salário total é: R$ " . number_format($salario, 2, ',', '.');
?>
