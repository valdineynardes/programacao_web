<?php
$fahrenheit = $_GET['fahrenheit'] ?? 0;

$celsius = ($fahrenheit - 32) * 5/9;

echo "A temperatura em Celsius é: $celsius °C";
?>
