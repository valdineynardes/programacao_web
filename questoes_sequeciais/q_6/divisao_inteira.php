<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

$resultado_inteiro = intdiv($numero1, $numero2);

echo "<h1 style='text-align: center;'>O resultado inteiro da divisão de $numero1 por $numero2 é: $resultado_inteiro</h1>";
?>
