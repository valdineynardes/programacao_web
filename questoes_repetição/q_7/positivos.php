<?php
$numero1 = $_GET['numero1'] ?? 0;
$numero2 = $_GET['numero2'] ?? 0;
$numero3 = $_GET['numero3'] ?? 0;

$positivos = 0;

if ($numero1 > 0) {
    $positivos++;
}
if ($numero2 > 0) {
    $positivos++;
}
if ($numero3 > 0) {
    $positivos++;
}

echo "Quantidade de números positivos: $positivos";
?>
