<?php
$valor = $_GET['valor'];

if ($valor > 100) {
    $desconto = $valor * 0.05;
    $valor_final = $valor - $desconto;
    print "Valor original: R$ $valor<br>";
    print "Desconto: R$ $desconto<br>";
    print "Valor final: R$ $valor_final";
} else {
    print "Valor do produto: R$ $valor<br>";
    print "Nenhum desconto aplicado.";
}
?>
