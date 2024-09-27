<?php
$nome = $_GET['nome'];
$peso = $_GET['peso'];
$altura = $_GET['altura'];

$imc = $peso / pow($altura, 2);

echo "<h1 style='text-align: center;'>$nome, seu IMC é: $imc</h1>";
?>
