<?php
$cateto1 = $_GET['cateto1'];
$cateto2 = $_GET['cateto2'];
$hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
print '<h1>Resultado</h1>';
print '<p>Para um triângulo com catetos de ' . $cateto1 . ' metros e ' . $cateto2 . ' metros:</p>';
print '<p>Hipotenusa: ' . $hipotenusa . ' metros</p>';
?>
