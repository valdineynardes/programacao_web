<?php
$nome = $_GET['nome']; 
$quantidadeCaracteres = strlen($nome);
print '<h1>Resultado</h1>';
print '<p>O nome "' . $nome . '" possui ' . $quantidadeCaracteres . ' caracteres.</p>';
?>
