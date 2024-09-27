<?php
$valor = $_GET['valor'] ?? 0;

if ($valor % 3 == 0 && $valor % 5 == 0) {
    echo "O valor $valor é múltiplo de 3 e 5 ao mesmo tempo.";
} else {
    echo "O valor $valor não é múltiplo de 3 e 5 ao mesmo tempo.";
}
?>
