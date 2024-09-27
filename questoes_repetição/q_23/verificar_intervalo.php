<?php
$valor = $_GET['valor'] ?? 0;

if ($valor >= 0 && $valor <= 100) {
    echo "O valor $valor está no intervalo de 0 a 100.";
} else {
    echo "O valor $valor não está no intervalo de 0 a 100.";
}
?>
