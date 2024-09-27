<?php
$cateto1 = $_GET['cateto1'];
$cateto2 = $_GET['cateto2'];

$hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));

echo "<h1 style='text-align: center;'>A hipotenusa do triângulo retângulo com catetos $cateto1 e $cateto2 é: $hipotenusa</h1>";
?>
