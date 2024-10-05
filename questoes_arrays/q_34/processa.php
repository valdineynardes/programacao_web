<?php
$array = explode(",", $_GET['array']);
$novoElemento = $_GET['novoElemento'];
$posicao = intval($_GET['posicao']);

$antes = implode(", ", $array);

if ($posicao >= 0 && $posicao <= count($array)) {
    array_splice($array, $posicao, 0, $novoElemento);
}

$depois = implode(", ", $array);

print "Array antes: " . $antes . "<br>";
print "Array depois: " . $depois . "<br>";
?>
