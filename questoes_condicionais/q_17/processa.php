<?php
$valor = $_GET['valor'];

if ($valor > 100) {
    $desconto = $valor * 0.20;
} elseif ($valor > 50) {
    $desconto = $valor * 0.15;
} else {
    $desconto = $valor * 0.10;
}

$valor_final = $valor - $desconto;
print "Valor da compra: R$ $valor<br>";
print "Desconto aplicado: R$ $desconto<br>";
print "Valor final: R$ $valor_final";
?>
