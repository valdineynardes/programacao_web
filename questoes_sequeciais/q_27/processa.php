<?php
$celsius = $_GET['celsius'];
$fahrenheit = ($celsius * 9 / 5) + 32;
print '<h1>Resultado da Conversão</h1>';
print '<p>' . $celsius . ' °C é equivalente a ' . $fahrenheit . ' °F</p>';
?>
