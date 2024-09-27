<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$valor = $_GET['valor'] ?? null;

$indice = array_search($valor, $array);

if ($indice !== false) {
    echo "O índice da primeira ocorrência de $valor é: $indice<br>";
} else {
    echo "O valor $valor não está presente no array.<br>";
}
?>
