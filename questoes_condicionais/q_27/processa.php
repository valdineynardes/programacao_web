<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

$numeros = [$numero1, $numero2, $numero3];
sort($numeros);

$mediana = $numeros[1];
$media = ($numero1 + $numero2 + $numero3) / 3;

if ($mediana > $media) {
    print "A mediana ($mediana) é maior que a média ($media).";
} elseif ($mediana < $media) {
    print "A mediana ($mediana) é menor que a média ($media).";
} else {
    print "A mediana ($mediana) é igual à média ($media).";
}
?>
