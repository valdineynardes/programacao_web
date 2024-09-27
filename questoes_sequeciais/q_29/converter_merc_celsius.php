<?php
$altura = $_GET['altura'];

$altura_fusao = 0.4;
$altura_ebulicao = 20.4;


$celsius = (($altura - $altura_fusao) / ($altura_ebulicao - $altura_fusao)) * 100;

echo "<h1 style='text-align: center;'>A temperatura equivalente para a altura de $altura cm na coluna de mercúrio é: $celsius°C</h1>";
?>
