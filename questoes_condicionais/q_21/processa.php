<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

$contagem = 0;

if ($numero1 > 0) {
    $contagem++;
}
if ($numero2 > 0) {
    $contagem++;
}
if ($numero3 > 0) {
    $contagem++;
}

print "Quantidade de números positivos: $contagem";
?>
