<?php
$altura = $_GET['altura'];
$peso = $_GET['peso'];

$imc = $peso / ($altura * $altura);

if ($imc < 25) {
    print "IMC: $imc - Abaixo do peso.";
} elseif ($imc >= 20 && $imc < 25) {
    print "IMC: $imc - Peso normal.";
} elseif ($imc >= 25 && $imc < 30) {
    print "IMC: $imc - Sobrepeso.";
} else {
    print "IMC: $imc - Obeso.";
}
?>
