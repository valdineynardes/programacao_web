<?php
$raio = $_GET['raio'];

$volume = (4/3) * pi() * pow($raio, 3);

echo "<h1 style='text-align: center;'>O volume da esfera com raio $raio metros é: $volume metros cúbicos</h1>";
?>
