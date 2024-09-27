<?php
$numero1 = $_GET['numero1'] ?? 0;
$numero2 = $_GET['numero2'] ?? 0;
$numero3 = $_GET['numero3'] ?? 0;

$maior = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}
if ($numero3 > $maior) {
    $maior = $numero3;
}

echo "O maior número é: $maior";
?>
