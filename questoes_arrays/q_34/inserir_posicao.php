<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$posicao = $_GET['posicao'] ?? 0;
$novo_elemento = $_GET['novo_elemento'] ?? '';

array_splice($array, $posicao, 0, $novo_elemento);

echo "Array após inserção: " . implode(", ", $array) . "<br>";
?>
