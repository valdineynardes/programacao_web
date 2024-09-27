<?php
$produtos = $_GET['produtos'] ?? 0;
$valor_comissao = $_GET['valor_comissao'] ?? 0;

$comissao = $produtos * $valor_comissao;

echo "O valor total da comissão é: R$ " . number_format($comissao, 2, ',', '.');
?>
