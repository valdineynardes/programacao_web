<?php
$forca = $_GET['forca'];
$massa2 = $_GET['massa2'];
$distancia = $_GET['distancia'];
$constante_gravitacional = 6.67408 * pow(10, -11);
$massa1 = ($forca * pow($distancia, 2)) / ($constante_gravitacional * $massa2);
echo "<h1 style='text-align: center;'>A massa do objeto gravitacional é: $massa1 kg</h1>";
?>
