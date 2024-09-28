<?php
$nome = $_GET['nome'];
$peso = $_GET['peso'];
$altura = $_GET['altura'];
$imc = $peso / pow($altura, 2);
print '<h1>Resultado</h1>';
print '<p>Nome: ' . $nome . '</p>';
print '<p>Peso: ' . $peso . ' kg</p>';
print '<p>Altura: ' . $altura . ' m</p>';
print '<p>IMC: ' . $imc . '</p>';
?>
