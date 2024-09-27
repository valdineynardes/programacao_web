<?php
$raio = $_GET['raio'];
$altura = $_GET['altura'];

$volume_metros_cubicos = pi() * pow($raio, 2) * $altura;
$volume_litros = $volume_metros_cubicos * 1000;

echo "<h1 style='text-align: center;'>O volume da caixa d'água cilíndrica é: $volume_litros litros</h1>";
?>
