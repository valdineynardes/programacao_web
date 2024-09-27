<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);

foreach ($array as &$elemento) {
    if ($elemento < 0) {
        $elemento = 0;
    }
}

echo "Array após substituição: " . implode(", ", $array) . "<br>";
?>
