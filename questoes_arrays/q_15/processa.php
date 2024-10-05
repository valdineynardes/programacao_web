<?php
$quantidade = intval($_GET['quantidade']);
$array = array();

for ($i = 0; $i < $quantidade; $i++) {
    $array[] = rand(1, 100);
}

rsort($array);

$arrayOrdenado = implode(", ", $array);

print "Números aleatórios em ordem decrescente: " . $arrayOrdenado . "<br>";
?>
