<?php
$idade = $_GET['idade'] ?? 0;
$valor_ingresso = 100;
$desconto = 0;

if ($idade <= 12) {
    $desconto = 50;
} elseif ($idade >= 60) {
    $desconto = 30;
}

$valor_final = $valor_ingresso - ($valor_ingresso * $desconto / 100);
echo "Valor do ingresso com desconto: R$ $valor_final";
?>
