<?php
$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$lado3 = $_GET['lado3'];

if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        print "Os lados formam um triângulo equilátero.";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        print "Os lados formam um triângulo isósceles.";
    } else {
        print "Os lados formam um triângulo escaleno.";
    }
} else {
    print "Os lados não formam um triângulo.";
}
?>
