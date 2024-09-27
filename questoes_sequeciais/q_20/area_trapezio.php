<?php
$altura = $_GET['altura'];
$base_maior = $_GET['base_maior'];
$base_menor = $_GET['base_menor'];

$area = (($base_maior + $base_menor) * $altura) / 2;

echo "<h1 style='text-align: center;'>A área do trapézio com altura $altura, base maior $base_maior e base menor $base_menor é: $area</h1>";
?>
