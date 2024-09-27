<?php
$fahrenheit = $_GET['fahrenheit'];

$celsius = ($fahrenheit - 32) * 5 / 9;
$kelvin = $celsius + 273.15;

echo "<h1 style='text-align: center;'>A temperatura de $fahrenheit°F é equivalente a $kelvin K</h1>";
?>
