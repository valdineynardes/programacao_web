<?php
$numeros = explode(',', $_GET['numeros'] ?? '');
$array = array_map('trim', $numeros);
$valor = $_GET['valor'] ?? null;

$inicio = 0;
$fim = count($array) - 1;
$encontrado = false;

while ($inicio <= $fim) {
    $meio = floor(($inicio + $fim) / 2);

    if ($array[$meio] == $valor) {
        $encontrado = true;
        break;
    } elseif ($array[$meio] < $valor) {
        $inicio = $meio + 1;
    } else {
        $fim = $meio - 1;
    }
}

if ($encontrado) {
    echo "O valor $valor foi encontrado.<br>";
} else {
    echo "O valor $valor não foi encontrado.<br>";
}
?>
