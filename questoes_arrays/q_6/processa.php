<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

$soma = 0;

for ($i = 0; $i < count($array); $i++) {
    $soma += $array[$i];
}

print "A soma dos elementos é: " . $soma . "<br>";
?>
