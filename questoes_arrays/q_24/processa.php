<?php
$array = explode(",", $_GET['array']);
$elemento = $_GET['elemento'];
$posicao = intval($_GET['posicao']);

if ($posicao >= 0 && $posicao <= count($array)) {
    array_splice($array, $posicao, 0, $elemento); 
}

$novoArray = implode(", ", $array);

print "Array após inserção: " . $novoArray . "<br>";
?>
