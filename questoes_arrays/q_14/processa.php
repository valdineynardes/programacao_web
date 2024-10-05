<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

sort($array);

$arrayOrdenado = implode(", ", $array);

print "Array em ordem crescente: " . $arrayOrdenado . "<br>";
?>
