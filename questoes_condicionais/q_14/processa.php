<?php
$peso = $_GET['peso'];
$frete_normal = 50;

if ($peso > 10) {
    $acrescimo = $frete_normal * 0.20;
    $valor_frete = $frete_normal + $acrescimo;
    print "Peso do produto: $peso kg<br>";
    print "Frete com 20% de acréscimo: R$ $valor_frete";
} else {
    print "Peso do produto: $peso kg<br>";
    print "Frete normal: R$ $frete_normal";
}
?>
