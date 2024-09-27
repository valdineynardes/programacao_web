<?php
$dias = $_GET['dias'] ?? 0;

$semanas = floor($dias / 7);
$dias_restantes = $dias % 7;

echo "$dias dias correspondem a $semanas semanas e $dias_restantes dias restantes.";
?>
