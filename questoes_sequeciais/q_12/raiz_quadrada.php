<?php
$numero = $_GET['numero'];

if ($numero >= 0) {
    $raiz_quadrada = sqrt($numero);
    echo "<h1 style='text-align: center;'>A raiz quadrada de $numero é: $raiz_quadrada</h1>";
} else {
    echo "<h1 style='text-align: center;'>Erro: Não é possível calcular a raiz quadrada de um número negativo.</h1>";
}
?>
