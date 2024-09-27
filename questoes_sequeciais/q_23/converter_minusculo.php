<?php
$nome = $_GET['nome'];

$nome_minusculo = strtolower($nome);

echo "<h1 style='text-align: center;'>O nome '$nome' em minúsculas é: '$nome_minusculo'</h1>";
?>
