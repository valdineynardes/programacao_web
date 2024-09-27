<?php
$angulo = $_GET['angulo'];

$angulo_rad = deg2rad($angulo);

$seno = sin($angulo_rad);
$cosseno = cos($angulo_rad);

echo "<h1 style='text-align: center;'>Para o ângulo de $angulo graus:</h1>";
echo "<h2 style='text-align: center;'>Seno: $seno</h2>";
echo "<h2 style='text-align: center;'>Cosseno: $cosseno</h2>";
?>
