<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
sort($array);

echo "Array Ordenado: " . implode(", ", $array) . "<br>";
?>
