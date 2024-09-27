<?php
$valor = $_GET['valor'];
if ($valor > 10000.00) {
    echo "<h1 style='text-align: center;'>Investimento Alto</h1>";
} else {
    echo "<h1 style='text-align: center;'>Investimento Baixo</h1>";
}
?>
