<?php
$raio = $_GET['raio'];
$volume = (4 / 3) * M_PI * pow($raio, 3);
print '<h1>Resultado</h1>';
print '<p>Para uma esfera com raio de ' . $raio . ' metros:</p>';
print '<p>Volume: ' . $volume . ' metros cúbicos</p>';
?>
