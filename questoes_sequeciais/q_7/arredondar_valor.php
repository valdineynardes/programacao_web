<?php
$valor = $_GET['valor'];

$arredondado = round($valor, 2);

echo "<h1 style='text-align: center;'>O valor $valor arredondado para duas casas decimais é: $arredondado</h1>";
?>
