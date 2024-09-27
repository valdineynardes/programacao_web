<?php
$mes = $_GET['mes'] ?? 1;
$ano = $_GET['ano'] ?? 1;

if ($mes == 2) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "O mês tem 29 dias (ano bissexto).";
    } else {
        echo "O mês tem 28 dias.";
    }
} elseif (in_array($mes, [4, 6, 9, 11])) {
    echo "O mês tem 30 dias.";
} else {
    echo "O mês tem 31 dias.";
}
?>
