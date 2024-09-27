<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if ($numero2 != 0) {
    $divisao = $numero1 / $numero2;
    $resultado_arredondado = round($divisao);
    echo "<h1 style='text-align: center;'>O resultado arredondado da divisão de $numero1 por $numero2 é: $resultado_arredondado</h1>";
} else {
    echo "<h1 style='text-align: center;'>Erro: Divisão por zero não é permitida.</h1>";
}
?>
