<?php
$array = explode(",", $_GET['array']);

if (count($array) > 0) {
    $primeiroElemento = array_shift($array);
    $array[] = $primeiroElemento;
}

$resultado = implode(", ", $array);
print "Array após rotação para a esquerda: " . $resultado . "<br>";
?>
