<?php
$array = explode(",", $_GET['array']);
$posicao = intval($_GET['posicao']);

$antes = implode(", ", $array);

if ($posicao >= 0 && $posicao < count($array)) {
    array_splice($array, $posicao, 1);
}

$depois = implode(", ", $array);

print "Array antes: " . $antes . "<br>";
print "Array depois: " . $depois . "<br>";
?>
