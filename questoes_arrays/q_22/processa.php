<?php
$array = explode(",", $_GET['caracteres']);
$vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

$contagemVogais = 0;

for ($i = 0; $i < count($array); $i++) {
    if (in_array(trim($array[$i]), $vogais)) {
        $contagemVogais++;
    }
}

print "Número de vogais no array: " . $contagemVogais . "<br>";
?>
