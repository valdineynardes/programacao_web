<?php
$strings = explode(',', $_GET['strings'] ?? '');
$array = array_map('trim', $strings);
$texto = $_GET['texto'] ?? '';

$array_filtrado = array_filter($array, function($item) use ($texto) {
    return $item !== $texto;
});

echo "Array após remoção: " . implode(", ", $array_filtrado) . "<br>";
?>
