<?php
$valor = $_GET['valor'];
$parteFracionaria = $valor - floor($valor);
print '<h1>Resultado</h1>';
print '<p>A parte fracionária de ' . $valor . ' é: ' . $parteFracionaria . '</p>';
?>
