<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$numeros = array_map('trim', $numeros);
$contagem = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $contagem++;
    }
}

echo "O número de elementos pares é: $contagem<br>";
?>
