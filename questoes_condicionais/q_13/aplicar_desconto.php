<?php
$valor = $_GET['valor'];

if ($valor > 100) {
    $valorComDesconto = $valor * 0.95;
} else {
    $valorComDesconto = $valor;
}

echo "<h1 style='text-align: center;'>O valor final do produto é R$ " . number_format($valorComDesconto, 2, ',', '.') . "</h1>";
?>
