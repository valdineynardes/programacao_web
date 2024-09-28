<?php
$numero = $_GET['numero'];
$somaDivisores = 0;

for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $somaDivisores += $i;
    }
}

if ($somaDivisores == $numero) {
    print "$numero é um número perfeito.";
} else {
    print "$numero não é um número perfeito.";
}
?>
