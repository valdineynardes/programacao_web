<?php
$raio = $_GET['raio'];

$perimetro = 2 * pi() * $raio;
$area = pi() * pow($raio, 2);

echo "<h1 style='text-align: center;'>Para um círculo com raio $raio:</h1>";
echo "<h2 style='text-align: center;'>Perímetro: $perimetro</h2>";
echo "<h2 style='text-align: center;'>Área: $area</h2>";
?>
