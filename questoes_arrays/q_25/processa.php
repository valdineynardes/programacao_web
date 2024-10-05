<?php
$array = explode(",", $_GET['array']);
$arrayOriginal = array_map('trim', $array); 
$arrayInvertido = array_reverse($arrayOriginal);

if ($arrayOriginal == $arrayInvertido) {
    print "O array é um palíndromo.<br>";
} else {
    print "O array não é um palíndromo.<br>";
}
?>
