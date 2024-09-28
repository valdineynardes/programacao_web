<?php
$valor = $_GET['valor'];
$valorArredondado = round($valor, 2);
print '<h1>Resultado</h1>';
print '<p>O valor informado foi: ' . $valor . '</p>';
print '<p>O valor arredondado para duas casas decimais é: ' . $valorArredondado . '</p>';
?>
