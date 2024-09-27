<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$numeros = array_map('trim', $numeros);
sort($numeros);
$numeros = array_unique($numeros);
$segundo_maior = $numeros[count($numeros) - 2] ?? 'Não existe segundo maior';
echo "O segundo maior número é: $segundo_maior<br>";
?>
