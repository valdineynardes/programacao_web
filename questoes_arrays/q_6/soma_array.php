<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$numeros = array_map('trim', $numeros);
$soma = array_sum($numeros);
echo "A soma dos elementos é: $soma<br>";
?>
