<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

$soma = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 == 0) {
        $soma += $array[$i];
    }
}

print "A soma dos elementos em posições pares é: " . $soma . "<br>";
?>
