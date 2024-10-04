<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

$contagem = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        $contagem++;
    }
}

print "Número de elementos pares: " . $contagem . "<br>";
?>
