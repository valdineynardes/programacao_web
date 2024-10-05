<?php
function buscaBinaria($array, $valor) {
    $inicio = 0;
    $fim = count($array) - 1;

    while ($inicio <= $fim) {
        $meio = intval(($inicio + $fim) / 2);

        if ($array[$meio] == $valor) {
            return $meio;
        }
        if ($array[$meio] < $valor) {
            $inicio = $meio + 1;
        } else {
            $fim = $meio - 1;
        }
    }
    return -1;
}

$array = explode(",", $_GET['array']);
$array = array_map('intval', $array);
$valor = intval($_GET['valor']);

$posicao = buscaBinaria($array, $valor);

if ($posicao != -1) {
    print "Valor " . $valor . " encontrado na posição: " . $posicao . "<br>";
} else {
    print "Valor " . $valor . " não encontrado.<br>";
}
?>
