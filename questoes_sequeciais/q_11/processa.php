<?php
$base = $_GET['base'];
$expoente = $_GET['expoente'];
$resultado = pow($base, $expoente);
print '<h1>Resultado</h1>';
print '<p>' . $base . ' elevado a ' . $expoente . ' é: ' . $resultado . '</p>';
?>
