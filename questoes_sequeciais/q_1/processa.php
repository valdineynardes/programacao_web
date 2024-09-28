<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$mediaAritmetica = ($valor1 + $valor2) / 2;
print '<h1>Resultado</h1>';
print '<p>A média aritmética de ' . $valor1 . ' e ' . $valor2 . ' é: ' . $mediaAritmetica . '</p>';
?>
