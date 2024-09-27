<?php
$peso = $_GET['peso'];
$frete = $_GET['frete'];

if ($peso > 10) {
    $freteFinal = $frete * 1.2;
} else {
    $freteFinal = $frete;
}

echo "<h1 style='text-align: center;'>O valor final do frete é R$ " . number_format($freteFinal, 2, ',', '.') . "</h1>";
?>
