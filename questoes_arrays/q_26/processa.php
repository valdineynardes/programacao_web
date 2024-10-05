<?php
function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$quantidade = intval($_GET['quantidade']);
$primos = array();
$num = 2;

while (count($primos) < $quantidade) {
    if (ehPrimo($num)) {
        $primos[] = $num;
    }
    $num++;
}

$resultado = implode(", ", $primos);
print "Os primeiros " . $quantidade . " números primos são: " . $resultado . "<br>";
?>
