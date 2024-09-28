<?php
$numero = $_GET['numero'];
$soma = 0;
$i = 1;

while ($soma < $numero) {
    $soma += $i;
    $i++;
}

if ($soma == $numero) {
    print "$numero é um número triangular.";
} else {
    print "$numero não é um número triangular.";
}
?>
