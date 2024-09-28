<?php
$numeros = $_GET['numeros'];
$numeros_array = explode(',', $numeros);

$soma = 0;
$count = count($numeros_array);

foreach ($numeros_array as $numero) {
    $soma += floatval($numero);
}

$media = $soma / $count;

print "A média é: $media";
?>
