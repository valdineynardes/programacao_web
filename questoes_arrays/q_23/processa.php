<?php
$array1 = explode(",", $_GET['array1']);
$array2 = explode(",", $_GET['array2']);

$array1 = array_map('trim', $array1);
$array2 = array_map('trim', $array2);

$novoArray = array_merge($array1, $array2);

$novoArrayString = implode(", ", $novoArray);

print "Novo array: " . $novoArrayString . "<br>";
?>
