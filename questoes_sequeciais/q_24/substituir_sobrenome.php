<?php
$nome = $_GET['nome'];
$sobrenome_antigo = $_GET['sobrenome_antigo'];
$sobrenome_novo = $_GET['sobrenome_novo'];

$nome_modificado = str_replace($sobrenome_antigo, $sobrenome_novo, $nome);

echo "<h1 style='text-align: center;'>O nome modificado é: $nome_modificado</h1>";
?>
