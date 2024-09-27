<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

$resultado = pow($numero1, $numero2);

echo "<h1 style='text-align: center;'>O resultado de $numero1 elevado a $numero2 é: $resultado</h1>";
?>
