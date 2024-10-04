<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);
$valor = intval($_GET['valor']);

$antes = implode(", ", $array);
$depois = array();

for ($i = 0; $i < count($array); $i++) {
    $depois[$i] = $array[$i] * $valor;
}

$depoisString = implode(", ", $depois);

print "Antes: " . $antes . "<br>";
print "Depois: " . $depoisString . "<br>";
?>
