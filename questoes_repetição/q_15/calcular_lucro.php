<?php
$preco = $_GET['preco'] ?? 0;

if ($preco < 20) {
    $lucro = $preco * 0.4; // 40% de lucro
} else {
    $lucro = $preco * 0.3; // 30% de lucro
}

$valor_venda = $preco + $lucro;
echo "O valor de venda é: R$ $valor_venda";
?>
