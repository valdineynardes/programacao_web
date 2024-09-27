<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

$maior = $numero1;
$menor = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}
if ($numero3 > $maior) {
    $maior = $numero3;
}

if ($numero2 < $menor) {
    $menor = $numero2;
}
if ($numero3 < $menor) {
    $menor = $numero3;
}

echo "<h1 style='text-align: center;'>O maior número é: $maior</h1>";
echo "<h1 style='text-align: center;'>O menor número é: $menor</h1>";
?>
