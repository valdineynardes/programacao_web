<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

if ($numero1 < $numero2 && $numero2 < $numero3) {
    print '<h1>Resultado</h1>';
    print '<p>Os números estão em ordem crescente.</p>';
} elseif ($numero1 > $numero2 && $numero2 > $numero3) {
    print '<h1>Resultado</h1>';
    print '<p>Os números estão em ordem decrescente.</p>';
} else {
    print '<h1>Resultado</h1>';
    print '<p>Os números estão fora de ordem.</p>';
}
?>
