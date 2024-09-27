<?php
$quantidade = $_GET['quantidade'] ?? 0;
$valor_produto = $_GET['valor_produto'] ?? 0;

$valor_total = $quantidade * $valor_produto;

if ($quantidade >= 10) {
    $desconto = 0.1; // 10% de desconto
} elseif ($quantidade >= 5) {
    $desconto = 0.05; // 5% de desconto
} else {
    $desconto = 0;
}

$valor_final = $valor_total - ($valor_total * $desconto);

echo "O valor total com desconto é: R$ " . number_format($valor_final, 2, ',', '.');
?>
