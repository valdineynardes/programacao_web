<?php
$velocidade_veiculo1 = $_GET['velocidade_veiculo1'];
$velocidade_veiculo2 = $_GET['velocidade_veiculo2'];
$distancia = $_GET['distancia'];

$velocidade_total = $velocidade_veiculo1 + $velocidade_veiculo2;
$tempo = $distancia / $velocidade_total;

print '<h1>Resultado do Cálculo</h1>';
print '<p>O tempo necessário para que os veículos se encontrem é de ' . $tempo . ' segundos.</p>';
?>
