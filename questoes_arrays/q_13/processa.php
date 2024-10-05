<?php
$numeros = explode(",", $_GET['numeros']);
$arrayOriginal = array_map('intval', $numeros);
$arrayCopia = $arrayOriginal;

$originalString = implode(", ", $arrayOriginal);
$copiaString = implode(", ", $arrayCopia);

print "Array Original: " . $originalString . "<br>";
print "Array Copiado: " . $copiaString . "<br>";
?>
