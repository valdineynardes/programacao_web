<?php
$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$lado3 = $_GET['lado3'];

if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    print "Os lados formam um triângulo.";
} else {
    print "Os lados não formam um triângulo.";
}
?>
