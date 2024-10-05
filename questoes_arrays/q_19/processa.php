<?php
$array = explode(",", $_GET['strings']);
$antes = implode(", ", $array);

$arrayInvertido = array_reverse($array);
$depois = implode(", ", $arrayInvertido);

print "Array original: " . $antes . "<br>";
print "Array invertido: " . $depois . "<br>";
?>
