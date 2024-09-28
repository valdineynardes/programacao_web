<?php
$quantidade_alcool = $_GET['quantidade_alcool'];
$temperatura_autoignicao = 365;
$temperatura_atual = 25;
$calorias_por_g = 7;

$calorias_necessarias = ($quantidade_alcool * $calorias_por_g) * ($temperatura_autoignicao - $temperatura_atual) / ($temperatura_autoignicao - 0);
print '<h1>Resultado do Cálculo</h1>';
print '<p>A quantidade de calorias necessárias para atingir a temperatura de autoignição é de ' . $calorias_necessarias . ' calorias.</p>';
?>
