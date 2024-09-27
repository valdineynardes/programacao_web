<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$numeros = array_map('trim', $numeros);
$maior = max($numeros);
$menor = min($numeros);
echo "O maior número é: $maior<br>";
echo "O menor número é: $menor<br>";
?>
