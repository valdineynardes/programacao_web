<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if ($numero2 != 0) {
    $resultado = intdiv($numero1, $numero2);
    print '<h1>Resultado</h1>';
    print '<p>A divisão inteira de ' . $numero1 . ' por ' . $numero2 . ' é: ' . $resultado . '</p>';
} else {
    print '<h1>Erro</h1>';
    print '<p>Divisão por zero não é permitida.</p>';
}
?>
