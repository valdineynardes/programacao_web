<?php
$valor_compra = $_GET['valor_compra'] ?? 0;

if ($valor_compra > 500) {
    $desconto = $valor_compra * 0.05;
    $valor_final = $valor_compra - $desconto;
    echo "O valor com desconto é: R$ " . number_format($valor_final, 2, ',', '.');
} else {
    echo "O valor da compra é: R$ " . number_format($valor_compra, 2, ',', '.');
}
?>
