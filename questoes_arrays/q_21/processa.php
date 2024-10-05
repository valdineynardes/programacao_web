<?php
$array = explode(",", $_GET['caracteres']);
$vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

for ($i = 0; $i < count($array); $i++) {
    if (in_array(trim($array[$i]), $vogais)) {
        $array[$i] = '*';
    }
}

$arrayFinal = implode(", ", $array);

print "Array após substituição das vogais: " . $arrayFinal . "<br>";
?>
