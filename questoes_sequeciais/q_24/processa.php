<?php
$nome = $_GET['nome'];
$sobrenome_antigo = $_GET['sobrenome_antigo'];
$sobrenome_novo = $_GET['sobrenome_novo'];
$nome_substituido = str_replace($sobrenome_antigo, $sobrenome_novo, $nome);
print '<h1>Resultado</h1>';
print '<p>Nome original: ' . $nome . '</p>';
print '<p>Nome com sobrenome substituído: ' . $nome_substituido . '</p>';
?>
