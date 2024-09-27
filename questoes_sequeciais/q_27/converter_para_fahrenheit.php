<?php
$celsius = $_GET['celsius'];

$fahrenheit = ($celsius * 9 / 5) + 32;

echo "<h1 style='text-align: center;'>A temperatura de $celsius°C é equivalente a $fahrenheit°F</h1>";
?>
