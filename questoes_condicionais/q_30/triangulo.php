<?php
$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$lado3 = $_GET['lado3'];

if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Os valores $lado1, $lado2 e $lado3 formam um triângulo equilátero.";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Os valores $lado1, $lado2 e $lado3 formam um triângulo isósceles.";
    } else {
        echo "Os valores $lado1, $lado2 e $lado3 formam um triângulo escaleno.";
    }
} else {
    echo "Os valores $lado1, $lado2 e $lado3 não formam um triângulo.";
}
?>
