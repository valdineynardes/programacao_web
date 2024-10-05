<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);
$valor = intval($_GET['valor']);

$presente = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $valor) {
        $presente = true;
        break;
    }
}

if ($presente) {
    print "O valor " . $valor . " está presente no array.<br>";
} else {
    print "O valor " . $valor . " não está presente no array.<br>";
}
?>
