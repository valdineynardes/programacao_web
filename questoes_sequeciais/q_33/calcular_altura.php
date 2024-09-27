<?php
$tempo = $_GET['tempo'];
$gravidade = 9.8;
$altura = 0.5 * $gravidade * pow($tempo, 2);
$altura_cm = $altura * 100;
echo "<h1 style='text-align: center;'>A altura da queda é de: $altura_cm centímetros</h1>";
?>
