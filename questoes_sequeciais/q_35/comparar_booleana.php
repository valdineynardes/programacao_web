<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if ($numero1 != $numero2) {
    echo "<h1 style='text-align: center;'>Resultado da Comparação: Verdadeiro</h1>";
} else {
    echo "<h1 style='text-align: center;'>Resultado da Comparação: Falso</h1>";
}
?>
