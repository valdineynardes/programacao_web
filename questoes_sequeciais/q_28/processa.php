<?php
$fahrenheit = $_GET['fahrenheit'];
$celsius = ($fahrenheit - 32) * 5 / 9;
$kelvin = $celsius + 273.15;
print '<h1>Resultado da Conversão</h1>';
print '<p>' . $fahrenheit . ' °F é equivalente a ' . $kelvin . ' K</p>';
?>
