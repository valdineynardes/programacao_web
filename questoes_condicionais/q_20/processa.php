<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if ($numero1 > $numero2) {
    $maior = $numero1;
} else {
    $maior = $numero2;
}

print "O maior número é: $maior";
?>
