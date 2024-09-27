<?php
$numero = $_GET['numero'];

if ($numero == 1) {
    $mes = "Janeiro";
} elseif ($numero == 2) {
    $mes = "Fevereiro";
} elseif ($numero == 3) {
    $mes = "Março";
} elseif ($numero == 4) {
    $mes = "Abril";
} elseif ($numero == 5) {
    $mes = "Maio";
} elseif ($numero == 6) {
    $mes = "Junho";
} elseif ($numero == 7) {
    $mes = "Julho";
} elseif ($numero == 8) {
    $mes = "Agosto";
} elseif ($numero == 9) {
    $mes = "Setembro";
} elseif ($numero == 10) {
    $mes = "Outubro";
} elseif ($numero == 11) {
    $mes = "Novembro";
} elseif ($numero == 12) {
    $mes = "Dezembro";
} else {
    $mes = "Número inválido!";
}

echo "<h1 style='text-align: center;'>O mês correspondente é: $mes</h1>";
?>
