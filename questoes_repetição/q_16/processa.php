<?php
$numero = $_GET['numero'];
$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}

print "O fatorial de $numero é: $fatorial";
?>
