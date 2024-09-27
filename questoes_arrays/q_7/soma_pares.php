<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$numeros = array_map('trim', $numeros);
$soma = 0;

foreach ($numeros as $indice => $numero) {
    if ($indice % 2 == 0) {
        $soma += $numero;
    }
}

echo "A soma dos elementos em posições pares é: $soma<br>";
?>
