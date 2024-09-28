<?php
$raio = $_GET['raio'];
$altura = $_GET['altura'];
$volume = M_PI * pow($raio, 2) * $altura;
$volumeLitros = $volume * 1000;
print '<h1>Resultado</h1>';
print '<p>Para uma caixa d\'água com raio de ' . $raio . ' metros e altura de ' . $altura . ' metros:</p>';
print '<p>Volume: ' . $volumeLitros . ' litros</p>';
?>
