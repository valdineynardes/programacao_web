<?php
$angulo = $_GET['angulo'];
$anguloRadianos = deg2rad($angulo);
$seno = sin($anguloRadianos);
$cosseno = cos($anguloRadianos);
print '<h1>Resultado</h1>';
print '<p>Ângulo em graus: ' . $angulo . '</p>';
print '<p>Seno: ' . $seno . '</p>';
print '<p>Cosseno: ' . $cosseno . '</p>';
?>
