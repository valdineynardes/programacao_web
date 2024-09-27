<?php
/*
$numero = $_GET['numero'];
switch ($numero) {
    case 1:
        $dia = "Domingo";
        break;
    case 2:
        $dia = "Segunda-feira";
        break;
    case 3:
        $dia = "Terça-feira";
        break;
    case 4:
        $dia = "Quarta-feira";
        break;
    case 5:
        $dia = "Quinta-feira";
        break;
    case 6:
        $dia = "Sexta-feira";
        break;
    case 7:
        $dia = "Sábado";
        break;
    default:
        $dia = "Número inválido!";
        break;
}
echo "<h1 style='text-align: center;'>O dia correspondente é: $dia</h1>";
*/


$numero = $_GET['numero'];

if ($numero == 1) {
    $dia = "Domingo";
} elseif ($numero == 2) {
    $dia = "Segunda-feira";
} elseif ($numero == 3) {
    $dia = "Terça-feira";
} elseif ($numero == 4) {
    $dia = "Quarta-feira";
} elseif ($numero == 5) {
    $dia = "Quinta-feira";
} elseif ($numero == 6) {
    $dia = "Sexta-feira";
} elseif ($numero == 7) {
    $dia = "Sábado";
} else {
    $dia = "Número inválido!";
}

echo "<h1 style='text-align: center;'>O dia correspondente é: $dia</h1>";


?>
