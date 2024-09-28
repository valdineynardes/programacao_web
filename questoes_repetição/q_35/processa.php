<?php
$numero = $_GET['numero'];
$invertido = '';

while ($numero > 0) {
    $digito = $numero % 10;
    $invertido .= $digito;
    $numero = (int)($numero / 10);
}

print "Os dígitos em ordem inversa são: $invertido";
?>
