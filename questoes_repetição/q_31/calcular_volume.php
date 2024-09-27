<?php
$comprimento = $_GET['comprimento'] ?? 0;
$largura = $_GET['largura'] ?? 0;
$altura = $_GET['altura'] ?? 0;

$volume = $comprimento * $largura * $altura;

echo "O volume do paralelepípedo é: $volume cm³";
?>
