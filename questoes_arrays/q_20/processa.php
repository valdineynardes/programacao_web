<?php
$array = explode(",", $_GET['strings']);
$texto = $_GET['texto'];

$arrayResultado = array();

for ($i = 0; $i < count($array); $i++) {
    if (trim($array[$i]) != $texto) {
        $arrayResultado[] = $array[$i];
    }
}

$arrayFinal = implode(", ", $arrayResultado);

print "Array após remoção: " . $arrayFinal . "<br>";
?>
