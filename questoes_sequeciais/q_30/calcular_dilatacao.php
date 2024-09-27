<?php
$temperatura = $_GET['temperatura'];
$comprimento_inicial = 90;
$coeficiente_dilatacao = 1.7 * pow(10, -5); // °s

$delta_t = $temperatura - 0;
$comprimento_final = $comprimento_inicial * (1 + $coeficiente_dilatacao * $delta_t);

echo "<h1 style='text-align: center;'>O comprimento da barra de cobre a $temperatura°C é: $comprimento_final metros</h1>";
?>
