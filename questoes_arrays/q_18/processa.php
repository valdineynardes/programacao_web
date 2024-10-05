<?php
$array1 = explode(",", $_GET['array1']);
$array2 = explode(",", $_GET['array2']);

$array1 = array_map('intval', $array1);
$array2 = array_map('intval', $array2);

$array3 = array();

for ($i = 0; $i < count($array1); $i++) {
    $array3[] = $array1[$i] * $array2[$i];
}

$resultado = implode(", ", $array3);

print "Resultado da multiplicação: " . $resultado . "<br>";
?>
