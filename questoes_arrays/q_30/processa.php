<?php
$array = explode(",", $_GET['array']);
$arraySemRepetidos = array_unique($array);

$resultado = implode(", ", $arraySemRepetidos);
print "Array sem elementos repetidos: " . $resultado . "<br>";
?>
