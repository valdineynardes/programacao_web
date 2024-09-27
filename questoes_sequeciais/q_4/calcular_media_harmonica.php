<?php
$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

$media_harmonica = 3 / ((1 / $nota1) + (1 / $nota2) + (1 / $nota3));

echo "<h1 style='text-align: center;'>A média harmônica das notas de $nome é: $media_harmonica</h1>";
?>
