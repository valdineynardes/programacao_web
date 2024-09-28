<?php
$valor = $_GET['valor'];
if ($valor >= 0) {
    $raizQuadrada = sqrt($valor);
    print '<h1>Resultado</h1>';
    print '<p>A raiz quadrada de ' . $valor . ' é: ' . $raizQuadrada . '</p>';
} else {
    print '<h1>Erro</h1>';
    print '<p>Não é possível calcular a raiz quadrada de um número negativo.</p>';
}
?>
