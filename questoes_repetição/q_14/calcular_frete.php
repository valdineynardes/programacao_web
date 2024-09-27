<?php
$peso = $_GET['peso'] ?? 0;
$frete = 50; // Frete normal

if ($peso > 10) {
    $frete *= 1.2; // Acréscimo de 20%
}

echo "O valor do frete é: R$ $frete";
?>
