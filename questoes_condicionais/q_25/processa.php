<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operacao = $_GET['operacao'];

if ($operacao == '+') {
    $resultado = $numero1 + $numero2;
} elseif ($operacao == '-') {
    $resultado = $numero1 - $numero2;
} elseif ($operacao == '*') {
    $resultado = $numero1 * $numero2;
} elseif ($operacao == '/') {
    $resultado = $numero1 / $numero2;
} else {
    $resultado = "Operação inválida.";
}

print "Resultado: $resultado";
?>
