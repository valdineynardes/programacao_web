<?php
$tempo = $_GET['tempo'];
$g = 9.8;
$altura = ($g * $tempo * $tempo) / 2;

print '<h1>Resultado do Cálculo</h1>';
print '<p>A altura da queda é de ' . ($altura * 100) . ' centímetros.</p>';
?>
