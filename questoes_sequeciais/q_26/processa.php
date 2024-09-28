<?php
$fahrenheit = $_GET['fahrenheit'];
$celsius = ($fahrenheit - 32) * 5 / 9;
print '<h1>Resultado da Conversão</h1>';
print '<p>' . $fahrenheit . ' °F é equivalente a ' . $celsius . ' °C</p>';
?>
