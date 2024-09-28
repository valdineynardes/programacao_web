<?php
$altura = $_GET['altura'];
$temperatura = ($altura - 0.4) * (100 / (20.4 - 0.4));
print '<h1>Resultado da Conversão</h1>';
print '<p>A altura de ' . $altura . ' cm na coluna de mercúrio corresponde a ' . $temperatura . ' °C na escala Celsius.</p>';
?>
