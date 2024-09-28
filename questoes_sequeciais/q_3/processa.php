<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3 = $_GET['valor3'];
$mediaPonderada = ($valor1 * 4 + $valor2 * 7 + $valor3 * 3) / 14;
print '<h1>Resultado</h1>';
print '<p>A média ponderada de ' . $valor1 . ', ' . $valor2 . ' e ' . $valor3 . ' é: ' . $mediaPonderada . '</p>';
?>
