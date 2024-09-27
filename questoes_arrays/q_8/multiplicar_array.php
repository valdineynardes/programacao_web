<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$numeros = array_map('trim', $numeros);
$multiplicador = $_GET['multiplicador'] ?? 1;

$resultado = [];
foreach ($numeros as $numero) {
    $resultado[] = $numero * $multiplicador;
}

echo "Valores antes da multiplicação: " . implode(', ', $numeros) . "<br>";
echo "Valores após multiplicação: " . implode(', ', $resultado) . "<br>";
?>
