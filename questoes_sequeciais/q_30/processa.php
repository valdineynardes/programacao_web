<?php
$temperatura = $_GET['temperatura'];
$comprimento_inicial = 90;
$coeficiente_dilatacao = 1.7e-5;
$comprimento_atual = $comprimento_inicial * (1 + $coeficiente_dilatacao * ($temperatura - 0));
print '<h1>Resultado do Cálculo</h1>';
print '<p>O comprimento atual da barra de cobre a ' . $temperatura . ' °C é de ' . $comprimento_atual . ' metros.</p>';
?>
