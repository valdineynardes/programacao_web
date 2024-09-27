<?php
$precoCompra = $_GET['preco_compra'];

if ($precoCompra < 20) {
    $precoVenda = $precoCompra * 1.4;
} else {
    $precoVenda = $precoCompra * 1.3;
}

echo "<h1 style='text-align: center;'>O preço de venda do produto é R$ " . number_format($precoVenda, 2, ',', '.') . "</h1>";
?>
