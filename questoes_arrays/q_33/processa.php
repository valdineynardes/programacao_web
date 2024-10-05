<?php
$array = explode(",", $_GET['array']);
$novoElemento = $_GET['novoElemento'];

$antes = implode(", ", $array);

$array[] = $novoElemento;

$depois = implode(", ", $array);

print "Array antes: " . $antes . "<br>";
print "Array depois: " . $depois . "<br>";
?>
