<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

$maior = 0;
$segundoMaior = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $maior) {
        $segundoMaior = $maior;
        $maior = $array[$i];
    } elseif ($array[$i] > $segundoMaior && $array[$i] < $maior) {
        $segundoMaior = $array[$i];
    }
}

if ($maior == 0 && $segundoMaior == 0) {
    print "Não há números suficientes para determinar o segundo maior elemento.<br>";
} else {
    print "Segundo maior elemento: " . $segundoMaior . "<br>";
}
?>
