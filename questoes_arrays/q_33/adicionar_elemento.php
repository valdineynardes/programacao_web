<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$novo_elemento = $_GET['novo_elemento'] ?? '';

$array[] = $novo_elemento;

echo "Array após adicionar o elemento: " . implode(", ", $array) . "<br>";
?>
