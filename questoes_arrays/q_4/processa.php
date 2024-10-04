<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

$maior = $array[0];
$menor = $array[0];

foreach ($array as $valor) {
    if ($valor > $maior) {
        $maior = $valor;
    }
    if ($valor < $menor) {
        $menor = $valor;
    }
}

print "Maior número: " . $maior . "<br>";
print "Menor número: " . $menor . "<br>";
?>
