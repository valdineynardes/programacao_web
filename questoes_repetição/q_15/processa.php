<?php
$base = $_GET['base'];
$expoente = $_GET['expoente'];
$resultado = 1;

for ($i = 0; $i < $expoente; $i++) {
    $resultado *= $base;
}

print "$base elevado a $expoente é: $resultado";
?>
