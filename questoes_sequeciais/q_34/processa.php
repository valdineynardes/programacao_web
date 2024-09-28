<?php
$distancia = $_GET['distancia'];
$massa_outro = $_GET['massa_outro'];
$forca = $_GET['forca'];
$G = 6.67408e-11;

$massa_objeto = ($forca * $distancia * $distancia) / ($G * $massa_outro);

print '<h1>Resultado do Cálculo</h1>';
print '<p>A massa do objeto gravitacional é de ' . $massa_objeto . ' kg.</p>';
?>
