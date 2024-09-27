<?php
$mes = $_GET['mes'];
$ano = $_GET['ano'];

if ($mes == 2) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        $dias = 29;
    } else {
        $dias = 28;
    }
} elseif (in_array($mes, [4, 6, 9, 11])) {
    $dias = 30;
} else {
    $dias = 31;
}

echo "<h1 style='text-align: center;'>O mês $mes do ano $ano tem $dias dias.</h1>";
?>
