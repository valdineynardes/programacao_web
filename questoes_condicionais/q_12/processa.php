<?php
$mes = $_GET['mes'];
$ano = $_GET['ano'];


$dias = 0;

if ($mes == 2) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        $dias = 29;
    } else {
        $dias = 28;
    }
} elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
    $dias = 30;
} else {
    $dias = 31;
}

echo "<h1>Resultado</h1>";
echo "<p>O mês $mes do ano $ano tem $dias dias.</p>";
?>
