<?php
$ano = $_GET['ano'];

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    $resultado = "O ano $ano é bissexto.";
} else {
    $resultado = "O ano $ano não é bissexto.";
}

echo "<h1 style='text-align: center;'>$resultado</h1>";
?>
