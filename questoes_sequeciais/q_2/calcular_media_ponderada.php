<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

$media_ponderada = ($valor1 * 0.4) + ($valor2 * 0.6);

echo "<h1 style='text-align: center;'>A média ponderada de $valor1 e $valor2 é: $media_ponderada</h1>";
?>
