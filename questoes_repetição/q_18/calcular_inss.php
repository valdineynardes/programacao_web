<?php
$salario = $_GET['salario'] ?? 0;
$inss = $salario * 0.08;

echo "O valor do INSS é: R$ " . number_format($inss, 2, ',', '.');
?>
