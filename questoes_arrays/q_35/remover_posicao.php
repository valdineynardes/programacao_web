<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$posicao = $_GET['posicao'] ?? 0;

if (isset($array[$posicao])) {
    unset($array[$posicao]);
}

echo "Array após remoção: " . implode(", ", array_values($array)) . "<br>";
?>
