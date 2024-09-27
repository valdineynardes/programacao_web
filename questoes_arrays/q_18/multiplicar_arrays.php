<?php
$numeros1 = explode(',', $_GET['numeros1'] ?? '');
$array1 = array_map('trim', $numeros1);
$numeros2 = explode(',', $_GET['numeros2'] ?? '');
$array2 = array_map('trim', $numeros2);
$resultado = [];

for ($i = 0; $i < count($array1); $i++) {
    $resultado[] = $array1[$i] * $array2[$i];
}

echo "Resultado da multiplicação: " . implode(", ", $resultado) . "<br>";
?>
