<?php
$valorCompra = $_GET['valor_compra'];

if ($valorCompra <= 50) {
    $desconto = $valorCompra * 0.1;
} elseif ($valorCompra > 50 && $valorCompra <= 100) {
    $desconto = $valorCompra * 0.15;
} else {
    $desconto = $valorCompra * 0.2;
}

$valorFinal = $valorCompra - $desconto;

echo "<h1 style='text-align: center;'>O valor final com desconto é R$ " . number_format($valorFinal, 2, ',', '.') . "</h1>";
?>
