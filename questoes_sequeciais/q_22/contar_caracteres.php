<?php
$nome = $_GET['nome'];

$qtd_caracteres = strlen($nome);

echo "<h1 style='text-align: center;'>O nome '$nome' tem $qtd_caracteres caracteres.</h1>";
?>
