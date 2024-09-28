<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$mediaPonderada = ($valor1 * 0.4) + ($valor2 * 0.6);
print '<h1>Resultado</h1>';
print '<p>A média ponderada de ' . $valor1 . ' e ' . $valor2 . ' é: ' . $mediaPonderada . '</p>';
?>
