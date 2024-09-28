<?php
$raio = $_GET['raio'];
$perimetro = 2 * M_PI * $raio;
$area = M_PI * pow($raio, 2);
print '<h1>Resultado</h1>';
print '<p>Para um círculo de raio ' . $raio . ':</p>';
print '<p>Perímetro: ' . $perimetro . '</p>';
print '<p>Área: ' . $area . '</p>';
?>
