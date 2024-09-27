<?php
$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$lado3 = $_GET['lado3'];

if ($lado1 + $lado2 > $lado3) {
    if ($lado1 + $lado3 > $lado2) {
        if ($lado2 + $lado3 > $lado1) {
            echo "Os valores $lado1, $lado2 e $lado3 formam um triângulo.";
        } else {
            echo "Os valores $lado1, $lado2 e $lado3 não formam um triângulo.";
        }
    } else {
        echo "Os valores $lado1, $lado2 e $lado3 não formam um triângulo.";
    }
} else {
    echo "Os valores $lado1, $lado2 e $lado3 não formam um triângulo.";
}
?>
