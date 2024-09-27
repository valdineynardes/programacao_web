<?php
$velocidade1 = $_GET['velocidade1'];
$velocidade2 = $_GET['velocidade2'];
$distancia = $_GET['distancia'];
$tempo = $distancia / ($velocidade1 + $velocidade2);
echo "<h1 style='text-align: center;'>O tempo necessário para os veículos se encontrarem é de: $tempo horas</h1>";
?>
