<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$valor = $_GET['valor'] ?? null;

if (in_array($valor, $array)) {
    echo "O valor $valor está presente no array.<br>";
} else {
    echo "O valor $valor não está presente no array.<br>";
}
?>
