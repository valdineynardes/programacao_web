<?php
$numero = $_GET['numero'];
$numeroInvertido = strrev($numero);

if ($numero == $numeroInvertido) {
    print "$numero é um número palíndromo.";
} else {
    print "$numero não é um número palíndromo.";
}
?>
