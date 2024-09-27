<?php
$numero = $_GET['numero'];

if ($numero >= 1 && $numero <= 5) {
    $tipo = "Dia útil";
} elseif ($numero == 6 || $numero == 7) {
    $tipo = "Final de semana";
} else {
    $tipo = "Número inválido!";
}

echo "<h1 style='text-align: center;'>O dia informado é: $tipo</h1>";
?>
