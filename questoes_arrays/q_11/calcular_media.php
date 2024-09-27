<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$soma = array_sum($array);
$media = $soma / count($array);

echo "A média dos elementos é: " . number_format($media, 2, ',', '.') . "<br>";
?>
