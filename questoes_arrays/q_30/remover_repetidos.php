<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$array_unico = array_unique($array);

echo "Array sem repetidos: " . implode(", ", $array_unico) . "<br>";
?>
