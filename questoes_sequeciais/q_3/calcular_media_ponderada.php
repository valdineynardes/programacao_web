<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3 = $_GET['valor3'];

$peso1 = 4;
$peso2 = 7;
$peso3 = 3;

$media_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2) + ($valor3 * $peso3)) / ($peso1 + $peso2 + $peso3);

echo "<h1 style='text-align: center;'>A média ponderada de $valor1, $valor2 e $valor3 é: $media_ponderada</h1>";
?>
