<?php
$numeros1 = explode(',', $_GET['numeros1'] ?? '');
$array1 = array_map('trim', $numeros1);
$numeros2 = explode(',', $_GET['numeros2'] ?? '');
$array2 = array_map('trim', $numeros2);
$array_combined = array_merge($array1, $array2);

echo "Array Combinado: " . implode(", ", $array_combined) . "<br>";
?>
