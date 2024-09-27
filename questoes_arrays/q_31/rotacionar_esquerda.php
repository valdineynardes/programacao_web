<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
array_push($array, array_shift($array));

echo "Array após rotação: " . implode(", ", $array) . "<br>";
?>
