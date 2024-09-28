<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$delta = pow($b, 2) - 4 * $a * $c;
$raiz1 = (-$b + sqrt($delta)) / (2 * $a);
$raiz2 = (-$b - sqrt($delta)) / (2 * $a);

print '<h1>Resultado</h1>';
print '<p>Para a equação ' . $a . 'x² + ' . $b . 'x + ' . $c . ' = 0</p>';
print '<p>Raiz 1: ' . $raiz1 . '</p>';
print '<p>Raiz 2: ' . $raiz2 . '</p>';
?>
