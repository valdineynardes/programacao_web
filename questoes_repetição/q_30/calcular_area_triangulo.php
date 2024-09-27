<?php
$base = $_GET['base'] ?? 0;
$altura = $_GET['altura'] ?? 0;

$area = ($base * $altura) / 2;

echo "A área do triângulo é: $area cm²";
?>
