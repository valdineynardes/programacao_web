<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if ($numero1 > $numero2) {
    list($numero1, $numero2) = array($numero2, $numero1);
}

$soma = 0;
for ($i = $numero1; $i <= $numero2; $i++) {
    $soma += $i;
}

print "A soma dos números entre $numero1 e $numero2 é: $soma";
?>
