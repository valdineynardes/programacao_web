<?php
$nome = $_GET['nome'];
$nome_minusculo = strtolower($nome);
print '<h1>Resultado</h1>';
print '<p>Nome convertido para minúsculo: ' . $nome_minusculo . '</p>';
?>
