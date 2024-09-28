<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$temp = $valor1;
$valor1 = $valor2;
$valor2 = $temp;
print '<h1>Valores Trocados</h1>';
print '<p>Valor 1 agora é: ' . $valor1 . '</p>';
print '<p>Valor 2 agora é: ' . $valor2 . '</p>';
?>
