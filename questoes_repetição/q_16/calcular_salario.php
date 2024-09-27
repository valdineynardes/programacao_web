<?php
$horas = $_GET['horas'] ?? 0;
$valor_hora = $_GET['valor_hora'] ?? 0;

$salario = $horas * $valor_hora;

echo "O salário semanal é: R$ " . number_format($salario, 2, ',', '.');
?>
