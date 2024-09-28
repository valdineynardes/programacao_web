<?php
$valor = $_GET['valor'];
$raizCubica = pow($valor, 1/3);
print '<h1>Resultado</h1>';
print '<p>A raiz cúbica de ' . $valor . ' é: ' . $raizCubica . '</p>';
?>
