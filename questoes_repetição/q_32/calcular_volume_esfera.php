<?php
$raio = $_GET['raio'] ?? 0;

$volume = (4 / 3) * pi() * pow($raio, 3);

echo "O volume da esfera é: " . number_format($volume, 2, ',', '.') . " cm³";
?>
