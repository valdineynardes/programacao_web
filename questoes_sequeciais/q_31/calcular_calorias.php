<?php
$massa = $_GET['massa'];
$calor_especifico = 0.58;
$temperatura_autoignicao = 365;
$temperatura_ambiente = 25;
$delta_t = $temperatura_autoignicao - $temperatura_ambiente;
$calorias = $massa * $calor_especifico * $delta_t;
echo "<h1 style='text-align: center;'>A quantidade de calorias necessária para a autoignição do álcool é: $calorias cal</h1>";
?>
