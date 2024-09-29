<?php
$codigo = $_GET['codigo'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$valor = $_GET['valor'];


$delimitador = ' %&&&% ';
$dadosProduto = $codigo . $delimitador . $nome . $delimitador . $descricao . $delimitador . $valor . "\n";

$arquivo = fopen("produto.txt", "a");
fwrite($arquivo, $dadosProduto);
fclose($arquivo);


print '<div class="container mt-3 alert alert-success">Produto salvo com sucesso!</div>';
?>

