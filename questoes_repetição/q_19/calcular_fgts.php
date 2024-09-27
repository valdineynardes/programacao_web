<?php
$salario = $_GET['salario'] ?? 0;
$fgts = $salario * 0.08;

echo "O valor do FGTS é: R$ " . number_format($fgts, 2, ',', '.');
?>
