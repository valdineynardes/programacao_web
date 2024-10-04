<?php
$numeros = explode(",", $_GET['numeros']);
$array = array_map('intval', $numeros);

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 0) {
        $array[$i] = 0;
    }
}

$resultado = implode(", ", $array);

print "Array após substituição: " . $resultado . "<br>";
?>
