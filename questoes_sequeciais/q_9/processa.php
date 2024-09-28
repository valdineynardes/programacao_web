<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if ($numero2 != 0) {
    $resultado = $numero1 / $numero2;
    $resultadoArredondado = round($resultado);
    print '<h1>Resultado</h1>';
    print '<p>A divisão de ' . $numero1 . ' por ' . $numero2 . ' é: ' . $resultado . '</p>';
    print '<p>Resultado arredondado: ' . $resultadoArredondado . '</p>';
} else {
    print '<h1>Erro</h1>';
    print '<p>Divisão por zero não é permitida.</p>';
}
?>
