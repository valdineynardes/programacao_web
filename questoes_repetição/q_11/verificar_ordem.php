<?php
$numero1 = $_GET['numero1'] ?? 0;
$numero2 = $_GET['numero2'] ?? 0;
$numero3 = $_GET['numero3'] ?? 0;

if ($numero1 < $numero2 && $numero2 < $numero3) {
    echo "Os números estão em ordem crescente.";
} elseif ($numero1 > $numero2 && $numero2 > $numero3) {
    echo "Os números estão em ordem decrescente.";
} else {
    echo "Os números estão fora de ordem.";
}
?>
