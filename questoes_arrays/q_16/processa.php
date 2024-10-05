<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);
$valor = intval($_GET['valor']);

$indice = -1;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $valor) {
        $indice = $i;
        break;
    }
}

print "Índice: " . $indice . "<br>";
?>
