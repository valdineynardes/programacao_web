<?php
$preco_compra = $_GET['preco_compra'];

if ($preco_compra < 20) {
    $lucro = $preco_compra * 0.40;
    $preco_venda = $preco_compra + $lucro;
    print "Preço de compra: R$ $preco_compra<br>";
    print "Preço de venda com 40% de lucro: R$ $preco_venda";
} else {
    $lucro = $preco_compra * 0.30;
    $preco_venda = $preco_compra + $lucro;
    print "Preço de compra: R$ $preco_compra<br>";
    print "Preço de venda com 30% de lucro: R$ $preco_venda";
}
?>
