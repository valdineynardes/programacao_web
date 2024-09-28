<?php
$ano = $_GET['ano'];

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    print '<h1>Resultado</h1>';
    print '<p>O ano ' . $ano . ' é bissexto.</p>';
} else {
    print '<h1>Resultado</h1>';
    print '<p>O ano ' . $ano . ' não é bissexto.</p>';
}
?>
