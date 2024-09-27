<?php
$strings = explode(',', $_GET['strings'] ?? '');
$array = array_map('trim', $strings);
$array_invertido = array_reverse($array);

echo "Antes: " . implode(", ", $array) . "<br>";
echo "Depois: " . implode(", ", $array_invertido) . "<br>";
?>
