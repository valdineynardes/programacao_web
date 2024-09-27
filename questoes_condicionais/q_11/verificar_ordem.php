<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

if ($numero1 < $numero2 && $numero2 < $numero3) {
    echo "<h1 style='text-align: center;'>Os números estão em ordem crescente.</h1>";
} elseif ($numero1 > $numero2 && $numero2 > $numero3) {
    echo "<h1 style='text-align: center;'>Os números estão em ordem decrescente.</h1>";
} else {
    echo "<h1 style='text-align: center;'>Os números estão fora de ordem.</h1>";
}
?>
