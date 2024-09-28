<?php
$valor = $_GET['valor'];

if ($valor > 10000) {
    print '<h1>Resultado</h1>';
    print '<p>Investimento Alto</p>';
} else {
    print '<h1>Resultado</h1>';
    print '<p>Investimento Baixo</p>';
}
?>
