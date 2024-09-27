<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$delta = pow($b, 2) - 4 * $a * $c;

$raiz1 = (-$b + sqrt($delta)) / (2 * $a);
$raiz2 = (-$b - sqrt($delta)) / (2 * $a);

echo "<h1 style='text-align: center;'>As raízes da equação são:</h1>";
echo "<h2 style='text-align: center;'>Raiz 1: $raiz1</h2>";
echo "<h2 style='text-align: center;'>Raiz 2: $raiz2</h2>";
?>
