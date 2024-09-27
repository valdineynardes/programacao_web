<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$array_copiado = $array;

echo "Array Original: " . implode(", ", $array) . "<br>";
echo "Array Copiado: " . implode(", ", $array_copiado) . "<br>";
?>
