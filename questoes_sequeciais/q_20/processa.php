<?php
$altura = $_GET['altura'];
$base_maior = $_GET['base_maior'];
$base_menor = $_GET['base_menor'];
$area = (($base_maior + $base_menor) * $altura) / 2;
print '<h1>Resultado</h1>';
print '<p>Para um trapézio com altura de ' . $altura . ' metros, base maior de ' . $base_maior . ' metros e base menor de ' . $base_menor . ' metros:</p>';
print '<p>Área: ' . $area . ' metros quadrados</p>';
?>
