<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $maior = $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $maior = $numero2;
} else {
    $maior = $numero3;
}

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
    $menor = $numero1;
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
    $menor = $numero2;
} else {
    $menor = $numero3;
}

print "Maior número: $maior<br>";
print "Menor número: $menor";
?>
