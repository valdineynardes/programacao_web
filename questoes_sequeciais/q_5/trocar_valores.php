<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

$auxiliar = $valor1;
$valor1 = $valor2;
$valor2 = $auxiliar;

echo "<h1 style='text-align: center;'>Os valores trocados são: Valor 1 = $valor1 e Valor 2 = $valor2</h1>";
?>
