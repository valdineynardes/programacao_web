<?php
$horas_extras = $_GET['horas_extras'] ?? 0;
$valor_hora = $_GET['valor_hora'] ?? 0;

$valor_extra = $horas_extras * ($valor_hora * 1.5);

echo "O valor total das horas extras é: R$ " . number_format($valor_extra, 2, ',', '.');
?>
