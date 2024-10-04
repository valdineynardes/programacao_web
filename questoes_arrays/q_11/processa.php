<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

$soma = 0;
$quantidade = count($array);

for ($i = 0; $i < $quantidade; $i++) {
    $soma += $array[$i];
}

if ($quantidade > 0) {
    $media = $soma / $quantidade;
} else {
    $media = 0;
}

print "A média dos elementos é: " . $media . "<br>";
?>
